<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/home/u576495821/domains/advstephani.com.br/public_html/news/user/pages/03.teste/blog.md',
    'modified' => 1740078443,
    'size' => 895,
    'data' => [
        'header' => [
            'title' => 'Teste',
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'limit' => 5,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ]
        ],
        'frontmatter' => 'title: Teste
content:
    items:
        - \'@self.children\'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true',
        'markdown' => 'Sugestões do chat:

1. "Engenheiros, arquitetos e veterinários, atenção!
Se você trabalha 8h/dia, seu piso salarial pode ser de até R$ 12.708 por mês!
Se recebe menos que isso, algo está errado! Podemos ajudar a garantir seus direitos!"

2. "Seu salário está abaixo do que manda a lei?"
✅ Piso de veterinários: R$ XX.XXX
✅ Piso de engenheiros: R$ 12.708
✅ Piso de arquitetos: R$ XX.XXX
Se você recebe menos que isso, vamos corrigir essa injustiça!

3. "Você sabia que seu piso salarial pode ser muito maior do que você ganha?"
Muitos profissionais como engenheiros, arquitetos e veterinários desconhecem seus direitos!
Quer saber se está recebendo o que é justo? Converse conosco e descubra!'
    ]
];
