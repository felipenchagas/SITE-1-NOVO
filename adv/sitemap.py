import os
import re
from datetime import datetime
from collections import defaultdict

# 🔹 Pergunta o domínio base
dominio = input("Digite a URL base do site (ex: https://advstephani.com.br): ").strip().rstrip("/")

# Diretório base onde está o script
base_dir = os.path.dirname(os.path.abspath(__file__))

def extrair_links_de_txt(caminho_arquivo, caminho_relativo):
    links = []
    with open(caminho_arquivo, "r", encoding="utf-8") as f:
        for linha in f:
            match = re.search(r'href="([^"]+)"', linha)
            if match:
                url = match.group(1).replace(".html", "")
                url_completo = f"{dominio}/{caminho_relativo}/{url}".replace("\\", "/").replace("//", "/")
                url_completo = url_completo.replace(":/", "://")
                links.append(url_completo)
    return links

# Dicionário: pasta -> [links]
sitemaps = defaultdict(list)

for root, _, files in os.walk(base_dir):
    for file in files:
        if file.endswith(".txt"):
            caminho_txt = os.path.join(root, file)
            caminho_relativo = os.path.relpath(root, base_dir).replace("\\", "/")
            nome_pasta = os.path.basename(caminho_relativo)
            links = extrair_links_de_txt(caminho_txt, caminho_relativo)
            sitemaps[nome_pasta].extend(links)

# Gerar os arquivos
js_data = "const pagesData = {\n"

for pasta, links in sitemaps.items():
    links_unicos = sorted(set(links))

    # 🔸 Sitemap XML
    xml = '<?xml version="1.0" encoding="UTF-8"?>\n'
    xml += '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">\n'
    for link in links_unicos:
        xml += f"  <url>\n    <loc>{link}</loc>\n"
        xml += f"    <lastmod>{datetime.now().strftime('%Y-%m-%d')}</lastmod>\n"
        xml += f"    <changefreq>monthly</changefreq>\n"
        xml += f"    <priority>0.8</priority>\n  </url>\n"
    xml += "</urlset>"

    with open(os.path.join(base_dir, f"{pasta}-sitemap.xml"), "w", encoding="utf-8") as f:
        f.write(xml)
    print(f"✅ Sitemap gerado: {pasta}-sitemap.xml")

    # 🔸 JS para HTML interativo
    js_data += f'  "{pasta}": [\n'
    for link in links_unicos:
        nome = link.split("/")[-1].replace("-", " ").capitalize()
        js_data += f'    {{name: "{nome}", url: "{link}"}},\n'
    js_data += "  ],\n"

js_data += "};"

with open(os.path.join(base_dir, "relatorio-pagesData.js"), "w", encoding="utf-8") as f:
    f.write(js_data)

print("✅ Arquivo relatorio-pagesData.js gerado com sucesso.")
