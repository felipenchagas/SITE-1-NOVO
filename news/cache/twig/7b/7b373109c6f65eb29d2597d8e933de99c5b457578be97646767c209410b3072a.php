<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_5d4b775bdd5ec2301f9c018131a2843e2df2cf7f2affd79b7dc684e9ddba5f2f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'showcase' => [$this, 'block_showcase'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 47
        echo "     <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">
      <link rel=\"preload\" data-rocket-preload as=\"style\" href=\"https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CMerriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=devanagari%2Clatin%2Clatin-ext%2Ccyrillic%2Ccyrillic-ext%2Cvietnamese&amp;display=swap\" />
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CMerriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=devanagari%2Clatin%2Clatin-ext%2Ccyrillic%2Ccyrillic-ext%2Cvietnamese&amp;display=swap\" media=\"print\" onload=\"this.media='all'\" />
      <noscript>
         <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CMerriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=devanagari%2Clatin%2Clatin-ext%2Ccyrillic%2Ccyrillic-ext%2Cvietnamese&amp;display=swap\" />
      </noscript>
      <meta name='robots' content='max-image-preview:large' />

      <link data-minify=\"1\" rel='stylesheet' id='attorna-style-core-css' href='https://advstephani.com.br/wp-content/cache/min/1/attorna/demo2/wp-content/themes/attorna/css/style-core186c.css?ver=1733679064' type='text/css' media='all' />
      <link data-minify=\"1\" rel='stylesheet' id='attorna-custom-style-css' href='https://advstephani.com.br/wp-content/cache/min/1/attorna/demo2/wp-content/uploads/attorna-style-custom186c.css?ver=1733679064' type='text/css' media='all' />
\t  
\t  
\t  
      <link data-minify=\"1\" rel='stylesheet' id='attorna-mmenu-css' href='https://advstephani.com.br/wp-content/cache/min/1/attorna/demo2/wp-content/themes/attorna/css/mmenu6a6a.css?ver=1733679065' type='text/css' media='all' />
      <script type=\"text/javascript\" src=\"https://advstephani.com.br/wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1\" id=\"jquery-core-js\"></script>

    
      <meta name=\"generator\" content=\"WP Rocket 3.17.3.1\" data-wpr-features=\"wpr_defer_js wpr_minify_js wpr_minify_css wpr_cdn wpr_desktop wpr_preload_links\" />
</head>
<body id=\"top\" class=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []), "html", null, true);
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 68
        $this->displayBlock('header', $context, $blocks);
        // line 234
        echo "
        ";
        // line 235
        $this->displayBlock('showcase', $context, $blocks);
        // line 236
        echo "
        ";
        // line 237
        $this->displayBlock('body', $context, $blocks);
        // line 246
        echo "
    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        ";
        // line 250
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 250)->display($context);
        // line 251
        echo "        </div>
    </div>
    ";
        // line 253
        $this->displayBlock('bottom', $context, $blocks);
        // line 266
        echo "\t
\t           <footer data-wpr-lazyrender=\"1\">
               <div class=\"attorna-footer-wrapper\">
                  <div class=\"attorna-footer-container attorna-container clearfix\">
                     <div class=\"attorna-footer-column attorna-item-pdlr attorna-column-15\">
                        <div id=\"text-1\" class=\"widget widget_text attorna-widget\">
                           <div class=\"textwidget\">
                              <p><img decoding=\"async\" class=\"alignnone size-full wp-image-6129\" src=\"wp-content/uploads/2019/03/logo-light.png\" alt=\"\" width=\"210\" sizes=\"(max-width: 400px) 100vw, 400px\" /><br />
                                 <span class=\"gdlr-core-space-shortcode\" style=\"margin-top: -27px;\"></span><br />
                                 Assessoria jurídica especializada em direito médico, protegendo profissionais de saúde e pacientes.
                              </p>
                              <div style=\"padding-bottom: 0px; display: block;\">
                                 <a href=\"https://facebook.com\" target=\"_blank\" class=\"gdlr-core-social-network-icon\" title=\"Facebook\" style=\"font-size: 16px; color: #b1976b;\" rel=\"noopener\">
                                 <i class=\"fab fa-facebook-f\"></i>
                                 </a>
                                 <a href=\"https://linkedin.com\" target=\"_blank\" class=\"gdlr-core-social-network-icon\" title=\"LinkedIn\" style=\"font-size: 16px; color: #b1976b;\" rel=\"noopener\">
                                 <i class=\"fab fa-linkedin-in\"></i>
                                 </a>
                                 <a href=\"https://instagram.com\" target=\"_blank\" class=\"gdlr-core-social-network-icon\" title=\"Instagram\" style=\"font-size: 16px; color: #b1976b;\" rel=\"noopener\">
                                 <i class=\"fab fa-instagram\"></i>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class=\"attorna-footer-column attorna-item-pdlr attorna-column-15\">
                        <div id=\"text-7\" class=\"widget widget_text attorna-widget\">
                           <h3 class=\"attorna-widget-title\">Contato</h3>
                           <span class=\"clear\"></span>\t\t\t
                           <div class=\"textwidget\">
                              <p>Rua Albano Reis, 478 <br /> Ahú, Curitiba/PR.<br />
                                 Curitiba, Paraná
                              </p>
                              <p><span style=\"color: #fff;\">(41) 99276-0819</span><br />
                                 <span style=\"color: #a69a87;\"><a href=\"mailto:contato@advstephani.com.br\">contato@advstephani.com.br</a></span>
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class=\"attorna-footer-column attorna-item-pdlr attorna-column-30\">
                        <div id=\"gdlr-core-custom-menu-widget-4\" class=\"widget widget_gdlr-core-custom-menu-widget attorna-widget\">
                           <h3 class=\"attorna-widget-title\">Áreas de Atuação</h3>
                           <span class=\"clear\"></span>
                           <div class=\"menu-case-study-container\">
                              <ul id=\"menu-case-study\" class=\"gdlr-core-custom-menu-widget gdlr-core-menu-style-half\">
                                 <li class=\"menu-item\"><a href=\"advogado-para-medicos-curitiba\">Direito do Médico</a></li>
                                 <li class=\"menu-item\"><a href=\"advogado-erro-medico-curitiba\">Direito do Paciente</a></li>
                                 <li class=\"menu-item\"><a href=\"#\">Processos Ético-Profissionais</a></li>
                                 <li class=\"menu-item\"><a href=\"#\">Biodireito e Bioética</a></li>
                                 <li class=\"menu-item\"><a href=\"#\">Diretivas Antecipadas</a></li>
                                 <li class=\"menu-item\"><a href=\"#\">Erro Médico</a></li>
                                 <li class=\"menu-item\"><a href=\"#\">Responsabilidade Hospitalar</a></li>
                                 <li class=\"menu-item\"><a href=\"#\">Consentimento Informado</a></li>
                                 <li class=\"menu-item\"><a href=\"#\">Propriedade Intelectual na Saúde</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=\"attorna-copyright-wrapper\">
                  <div class=\"attorna-copyright-container attorna-container clearfix\">
                     <div class=\"attorna-copyright-left attorna-item-pdlr\">© 2025 Escritório de Advocacia em Direito Médico. Todos os direitos reservados.</div>
                     <div class=\"attorna-copyright-right attorna-item-pdlr\">
                        <a href=\"#\" style=\"margin-left:21px;\">Início</a>
                        <a href=\"#\" style=\"margin-left:21px;\">Casos</a>
                        <a href=\"#\" style=\"margin-left:21px;\">Sobre</a>
                        <a href=\"#\" style=\"margin-left:21px;\">Legal</a>
                        <a href=\"#\" style=\"margin-left:21px;\">Privacidade</a>
                     </div>
                  </div>
               </div>
            </footer>
\t
\t     <script type=\"text/javascript\" src=\"https://advstephani.com.br/wp-includes/js/jquery/ui/effect.minb37e.js?ver=1.13.3\" id=\"jquery-effects-core-js\" data-rocket-defer defer></script>
      <script data-minify=\"1\" type=\"text/javascript\" src=\"https://advstephani.com.br/wp-content/cache/min/1/attorna/demo2/wp-content/themes/attorna/js/mmenu738e.js?ver=1733679066\" id=\"attorna-mmenu-js\" data-rocket-defer defer></script>
      <script data-minify=\"1\" type=\"text/javascript\" src=\"https://advstephani.com.br/wp-content/cache/min/1/attorna/demo2/wp-content/themes/attorna/js/jquery.superfish738e.js?ver=1733679066\" id=\"jquery-superfish-js\" data-rocket-defer defer></script>
      <script data-minify=\"1\" type=\"text/javascript\" src=\"https://advstephani.com.br/wp-content/cache/min/1/attorna/demo2/wp-content/themes/attorna/js/script-core738e.js?ver=1733679066\" id=\"attorna-script-core-js\" data-rocket-defer defer></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const accTitles = document.querySelectorAll('.gdlr-core-accordion-item-title');
    accTitles.forEach(title => {
        title.addEventListener('click', () => {
            const tab = title.closest('.gdlr-core-accordion-item-tab');
            const isActive = tab.classList.contains('gdlr-core-active');
            document.querySelectorAll('.gdlr-core-accordion-item-tab').forEach(t => t.classList.remove('gdlr-core-active'));
            if (!isActive) tab.classList.add('gdlr-core-active');
        });
    });
});
</script>
</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html", null, true);
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/favicon.png\" />

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "
    ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "
    ";
        // line 41
        $this->displayBlock('assets', $context, $blocks);
        // line 45
        echo "
";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 13
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/nucleus.css", 1 => 102], "method");
        // line 14
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/template.css", 1 => 101], "method");
        // line 15
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 100], "method");
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/font-awesome.min.css", 1 => 100], "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/slidebars.min.css"], "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/slideme.css"], "method");
        // line 19
        echo "        ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 10))) {
            // line 20
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/nucleus-ie10.css"], "method");
            // line 21
            echo "        ";
        }
        // line 22
        echo "        ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 23
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/nucleus-ie9.css"], "method");
            // line 24
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/pure-0.5.0/grids-min.css"], "method");
            // line 25
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://js/html5shiv-printshiv.min.js"], "method");
            // line 26
            echo "        ";
        }
        // line 27
        echo "    ";
    }

    // line 29
    public function block_javascripts($context, array $blocks = [])
    {
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/modernizr.custom.71422.js", 1 => 100], "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/deliver.js"], "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/slidebars.min.js"], "method");
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.slideme2.js"], "method");
        // line 35
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sticky_menu", []), "enabled", [])) {
            // line 36
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery-scrolltofixed-min.js"], "method");
            // line 37
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/fixed-header.js"], "method");
            // line 38
            echo "        ";
        }
        // line 39
        echo "    ";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 41
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 42
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
        // line 43
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 68
    public function block_header($context, array $blocks = [])
    {
        // line 69
        echo "        <header id=\"header\">

                <div id=\"navbar\">
  <div  class=\"post-template-default single single-post postid-6425 single-format-standard gdlr-core-body attorna-body attorna-body-front attorna-full  attorna-with-sticky-navigation  attorna-blog-style-4  attorna-blockquote-style-1 gdlr-core-link-to-lightbox\" >
      <div class=\"attorna-mobile-header-wrap\">
         <div class=\"attorna-mobile-header attorna-header-background attorna-style-slide attorna-sticky-mobile-navigation\" id=\"attorna-mobile-header\">
            <div class=\"attorna-mobile-header-container attorna-container clearfix\">
               <div class=\"attorna-logo attorna-item-pdlr\">
                  <div class=\"attorna-logo-inner\">
                     <a class=\"site-logo\" href=\"https://advstephani.com.br/\" title=\"Advogado Direito Médico Curitiba\">
                     <img src=\"https://advstephani.com.br/wp-content/uploads/2019/03/logo-light.png\" alt=\"Jonas Stephâni Advocacia - Especialista em Direito Médico\" width=\"370\" height=\"65\" title=\"Jonas Stephâni Advocacia Direito Médico\" />
                     </a>
                  </div>
               </div>
               <div class=\"attorna-mobile-menu-right\">
                  <div class=\"attorna-main-menu-search\" id=\"attorna-mobile-top-search\">
                     <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                  </div>

                  <div class=\"attorna-mobile-menu\">
                     <a class=\"attorna-mm-menu-button attorna-mobile-menu-button attorna-mobile-button-hamburger\" href=\"#attorna-mobile-menu\" aria-label=\"Menu\">
                     <span></span>
                     </a>
                     <div class=\"attorna-mm-menu-wrap attorna-navigation-font\" id=\"attorna-mobile-menu\" data-slide=\"right\">
                        <ul id=\"menu-main-navigation\" class=\"m-menu\">
                           <li class=\"menu-item menu-item-home\">
                              <a href=\"https://advstephani.com.br/\" title=\"Início\">Home</a>
                           </li>
                           <li class=\"menu-item\">
                              <a href=\"#\" title=\"Sobre o Escritório\">Sobre Nós</a>
                           </li>
                           <li class=\"menu-item menu-item-has-children\">
                              <a href=\"https://advstephani.com.br/areas-atuacao.html\" title=\"Áreas de Atuação\">Áreas de Atuação</a>
                              <ul class=\"sub-menu\">
                                 <li class=\"menu-item\">
                                    <a href=\"https://advstephani.com.br/erro-medico.html\" title=\"Erro Médico\">Erro Médico e Responsabilidade</a>
                                 </li>
<li class=\"menu-item\">
    <a href=\"https://advstephani.com.br/defesa-medicos-erro-medico.html\" title=\"Defesa de Médicos em Casos de Erro Médico\">
        Defesa de Médicos - Erro Médico
    </a>
</li>

\t\t\t\t\t\t\t\t defesa-medicos-erro-medico
                                 <li class=\"menu-item\">
                                    <a href=\"https://advstephani.com.br/direito-penal-medico.html\" title=\"Direito Penal Médico\">Direito Penal Médico</a>
                                 </li>
                                 <li class=\"menu-item\">
                                    <a href=\"https://advstephani.com.br/processos-eticos.html\" title=\"Processos Éticos\">Processos Ético-Profissionais</a>
                                 </li>
                                 
                              </ul>
                           </li>
                           <li class=\"menu-item\">
                              <a href=\"https://advstephani.com.br/#\" title=\"Blog Jurídico\">Blog</a>
                           </li>
                           <li class=\"menu-item\">
                              <a href=\"https://advstephani.com.br/contato.html\" title=\"Entre em Contato\">Contato</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div data-rocket-location-hash=\"fb3fdf0f7d2171c5241af240b7800948\" class=\"attorna-body-outer-wrapper \">
         <div data-rocket-location-hash=\"735aa54fc7bf5b1cd0854d7bd28c822e\" class=\"attorna-body-wrapper clearfix  attorna-with-transparent-header attorna-with-frame\">
            <div class=\"attorna-header-background-transparent\" >
               <div style=\"background-color:black;\"   class=\"attorna-top-bar\" >
                  <div class=\"attorna-top-bar-background\" ></div>
                  <div class=\"attorna-top-bar-container attorna-container \" >
                     <div class=\"attorna-top-bar-container-inner clearfix\" >
                        <div class=\"attorna-top-bar-left attorna-item-pdlr\">
                           <i class=\"fa fa-phone\" style=\"font-size: 15px ;color: #b1976b ;margin-right: 10px ;\"  ></i>41 99276 0819
                           <div style=\"margin-left: 10px; margin-right: 13px; display: inline;\">&#183;</div>
                           <i class=\"icon_clock_alt\" style=\"font-size: 15px ;color: #b1976b ;margin-right: 10px ;\"  ></i>Advogado em Curitiba
                        </div>
                        <a class=\"attorna-top-bar-right-button\" href=\"https://advstephani.com.br/#\" target=\"_self\"  ><i class=\"fa fa-comment-o\" ></i>Contato </a>
                        <div class=\"attorna-top-bar-right attorna-item-pdlr\">
                           <div class=\"attorna-top-bar-right-social\">
                              <a href=\"https://facebook.com\" target=\"_blank\" class=\"attorna-top-bar-social-icon\" title=\"Facebook\">
                              <i class=\"fab fa-facebook-f\"></i>
                              </a>
                              <a href=\"https://linkedin.com\" target=\"_blank\" class=\"attorna-top-bar-social-icon\" title=\"LinkedIn\">
                              <i class=\"fab fa-linkedin-in\"></i>
                              </a>
                              <a href=\"https://pinterest.com\" target=\"_blank\" class=\"attorna-top-bar-social-icon\" title=\"Pinterest\">
                              <i class=\"fab fa-pinterest-p\"></i>
                              </a>
                              <a href=\"https://twitter.com\" target=\"_blank\" class=\"attorna-top-bar-social-icon\" title=\"Twitter\">
                              <i class=\"fab fa-twitter\"></i>
                              </a>
                              <a href=\"https://instagram.com\" target=\"_blank\" class=\"attorna-top-bar-social-icon\" title=\"Instagram\">
                              <i class=\"fab fa-instagram\"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <header style=\"background-color:black;\"   class=\"attorna-header-wrap attorna-header-style-plain attorna-style-menu-right attorna-sticky-navigation attorna-style-slide\" data-navigation-offset=\"75px\">
                  <div class=\"attorna-header-background\"></div>
                  <div class=\"attorna-header-container attorna-container\">
                     <div class=\"attorna-header-container-inner clearfix\">
                        <div class=\"attorna-logo attorna-item-pdlr\">
                           <div class=\"attorna-logo-inner\">
                              <a class=\"\" href=\"https://advstephani.com.br/\">
                              <img src=\"https://advstephani.com.br/wp-content/uploads/2019/03/logo-light.png\" alt=\"Jonas Stephâni Advocacia - Direito Médico\" width=\"370\" height=\"65\" title=\"Jonas Stephâni Advocacia\"/>
                              </a>
                           </div>
                        </div>
                        <div class=\"attorna-navigation attorna-item-pdlr clearfix\">
                           <div class=\"attorna-main-menu\" id=\"attorna-main-menu\">
                              <ul id=\"menu-main-navigation-1\" class=\"sf-menu\">
                                 <li class=\"menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-5167 attorna-normal-menu\">
                                    <a href=\"https://advstephani.com.br/\" class=\"sf-with-ul-pre\">Home</a>
                                 </li>
                                 <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5123 attorna-normal-menu\">
                                    <a href=\"#.html\" class=\"sf-with-ul-pre\">Sobre Nós</a>
                                 </li>
                                 <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6900 attorna-normal-menu\">
                                    <a href=\"https://advstephani.com.br/areas-atuacao.html\" class=\"sf-with-ul-pre\">Áreas de Atuação</a>
                                    <ul class=\"sub-menu\">
                                       <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-6519\" data-size=\"60\">
                                          <a href=\"https://advstephani.com.br/erro-medico.html\">Erro Médico e Responsabilidade Civil</a>
                                       </li>
\t\t\t\t\t\t\t\t\t   <li class=\"menu-item\">
    <a href=\"https://advstephani.com.br/defesa-medicos-erro-medico.html\" title=\"Defesa de Médicos em Casos de Erro Médico\">
        Defesa de Médicos - Erro Médico
    </a>
</li>

                                       <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-6518\" data-size=\"60\">
                                          <a href=\"https://advstephani.com.br/direito-penal-medico.html\">Direito Penal Médico</a>
                                       </li>
                                       <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-6517\" data-size=\"60\">
                                          <a href=\"https://advstephani.com.br/processos-eticos.html\">Processos Ético-Profissionais</a>
                                       </li>
                                       
                                    </ul>
                                 </li>
                                 <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5172 attorna-normal-menu\">
                                    <a href=\"https://advstephani.com.br/news\">Blog</a>
                                 </li>
                                 <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5207 attorna-normal-menu\">
                                    <a href=\"https://advstephani.com.br/contato.html\">Contato</a>
                                 </li>
                              </ul>
                           </div>

                        </div>
                     </div>
                  </div>
               </header>
               <!-- header -->
            </div>
 </div>
 </div> 
\t\t </div> \t
                    <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
                </div>
        </header>
\t\t<br><br><br><br><br>
        ";
    }

    // line 235
    public function block_showcase($context, array $blocks = [])
    {
    }

    // line 237
    public function block_body($context, array $blocks = [])
    {
        // line 238
        echo "        <section id=\"body\" class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 239
        $this->displayBlock('content', $context, $blocks);
        // line 240
        echo "
            ";
        // line 241
        $this->displayBlock('footer', $context, $blocks);
        // line 244
        echo "        </section>
        ";
    }

    // line 239
    public function block_content($context, array $blocks = [])
    {
    }

    // line 241
    public function block_footer($context, array $blocks = [])
    {
        // line 242
        echo "       
            ";
    }

    // line 253
    public function block_bottom($context, array $blocks = [])
    {
        // line 254
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
    <script>
    \$(function () {
        \$(document).ready(function() {
          \$.slidebars({
            hideControlClasses: true,
            scrollLock: true
          });
        });
    });
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 254,  543 => 253,  538 => 242,  535 => 241,  530 => 239,  525 => 244,  523 => 241,  520 => 240,  518 => 239,  513 => 238,  510 => 237,  505 => 235,  337 => 69,  334 => 68,  327 => 43,  322 => 42,  319 => 41,  310 => 39,  307 => 38,  304 => 37,  301 => 36,  298 => 35,  295 => 34,  292 => 33,  289 => 32,  286 => 31,  283 => 30,  280 => 29,  276 => 27,  273 => 26,  270 => 25,  267 => 24,  264 => 23,  261 => 22,  258 => 21,  255 => 20,  252 => 19,  249 => 18,  246 => 17,  243 => 16,  240 => 15,  237 => 14,  234 => 13,  231 => 12,  226 => 45,  224 => 41,  221 => 40,  219 => 29,  216 => 28,  214 => 12,  209 => 10,  206 => 9,  204 => 8,  196 => 7,  193 => 6,  190 => 5,  105 => 266,  103 => 253,  99 => 251,  97 => 250,  91 => 246,  89 => 237,  86 => 236,  84 => 235,  81 => 234,  79 => 68,  74 => 66,  53 => 47,  51 => 5,  46 => 3,  43 => 2,  41 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css-compiled/nucleus.css',102) %}
        {% do assets.addCss('theme://css-compiled/template.css',101) %}
        {% do assets.addCss('theme://css/custom.css',100) %}
        {% do assets.addCss('theme://css/font-awesome.min.css',100) %}
        {% do assets.addCss('theme://css/slidebars.min.css') %}
        {% do assets.addCss('theme://css/slideme.css') %}
        {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}
            {% do assets.addCss('theme://css/nucleus-ie10.css') %}
        {% endif %}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addCss('theme://css/nucleus-ie9.css') %}
            {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css') %}
            {% do assets.addCss('theme://js/html5shiv-printshiv.min.js') %}
        {% endif %}
    {% endblock %}

    {% block javascripts %}
        {% do assets.add('jquery', 101) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js',100) %}
        {% do assets.addJs('theme://js/deliver.js') %}
        {% do assets.addJs('theme://js/slidebars.min.js') %}
        {% do assets.addJs('theme://js/jquery.slideme2.js') %}
        {% if theme_config.sticky_menu.enabled %}
            {% do assets.addJs('theme://js/jquery-scrolltofixed-min.js') %}
            {% do assets.addJs('theme://js/fixed-header.js') %}
        {% endif %}
    {% endblock %}

    {% block assets deferred %}
        {{ assets.css()|raw }}
        {{ assets.js()|raw }}
    {% endblock %}

{% endblock head%}
     <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">
      <link rel=\"preload\" data-rocket-preload as=\"style\" href=\"https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CMerriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=devanagari%2Clatin%2Clatin-ext%2Ccyrillic%2Ccyrillic-ext%2Cvietnamese&amp;display=swap\" />
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CMerriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=devanagari%2Clatin%2Clatin-ext%2Ccyrillic%2Ccyrillic-ext%2Cvietnamese&amp;display=swap\" media=\"print\" onload=\"this.media='all'\" />
      <noscript>
         <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CMerriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=devanagari%2Clatin%2Clatin-ext%2Ccyrillic%2Ccyrillic-ext%2Cvietnamese&amp;display=swap\" />
      </noscript>
      <meta name='robots' content='max-image-preview:large' />

      <link data-minify=\"1\" rel='stylesheet' id='attorna-style-core-css' href='https://advstephani.com.br/wp-content/cache/min/1/attorna/demo2/wp-content/themes/attorna/css/style-core186c.css?ver=1733679064' type='text/css' media='all' />
      <link data-minify=\"1\" rel='stylesheet' id='attorna-custom-style-css' href='https://advstephani.com.br/wp-content/cache/min/1/attorna/demo2/wp-content/uploads/attorna-style-custom186c.css?ver=1733679064' type='text/css' media='all' />
\t  
\t  
\t  
      <link data-minify=\"1\" rel='stylesheet' id='attorna-mmenu-css' href='https://advstephani.com.br/wp-content/cache/min/1/attorna/demo2/wp-content/themes/attorna/css/mmenu6a6a.css?ver=1733679065' type='text/css' media='all' />
      <script type=\"text/javascript\" src=\"https://advstephani.com.br/wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1\" id=\"jquery-core-js\"></script>

    
      <meta name=\"generator\" content=\"WP Rocket 3.17.3.1\" data-wpr-features=\"wpr_defer_js wpr_minify_js wpr_minify_css wpr_cdn wpr_desktop wpr_preload_links\" />
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
    <div id=\"sb-site\">
        {% block header %}
        <header id=\"header\">

                <div id=\"navbar\">
  <div  class=\"post-template-default single single-post postid-6425 single-format-standard gdlr-core-body attorna-body attorna-body-front attorna-full  attorna-with-sticky-navigation  attorna-blog-style-4  attorna-blockquote-style-1 gdlr-core-link-to-lightbox\" >
      <div class=\"attorna-mobile-header-wrap\">
         <div class=\"attorna-mobile-header attorna-header-background attorna-style-slide attorna-sticky-mobile-navigation\" id=\"attorna-mobile-header\">
            <div class=\"attorna-mobile-header-container attorna-container clearfix\">
               <div class=\"attorna-logo attorna-item-pdlr\">
                  <div class=\"attorna-logo-inner\">
                     <a class=\"site-logo\" href=\"https://advstephani.com.br/\" title=\"Advogado Direito Médico Curitiba\">
                     <img src=\"https://advstephani.com.br/wp-content/uploads/2019/03/logo-light.png\" alt=\"Jonas Stephâni Advocacia - Especialista em Direito Médico\" width=\"370\" height=\"65\" title=\"Jonas Stephâni Advocacia Direito Médico\" />
                     </a>
                  </div>
               </div>
               <div class=\"attorna-mobile-menu-right\">
                  <div class=\"attorna-main-menu-search\" id=\"attorna-mobile-top-search\">
                     <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                  </div>

                  <div class=\"attorna-mobile-menu\">
                     <a class=\"attorna-mm-menu-button attorna-mobile-menu-button attorna-mobile-button-hamburger\" href=\"#attorna-mobile-menu\" aria-label=\"Menu\">
                     <span></span>
                     </a>
                     <div class=\"attorna-mm-menu-wrap attorna-navigation-font\" id=\"attorna-mobile-menu\" data-slide=\"right\">
                        <ul id=\"menu-main-navigation\" class=\"m-menu\">
                           <li class=\"menu-item menu-item-home\">
                              <a href=\"https://advstephani.com.br/\" title=\"Início\">Home</a>
                           </li>
                           <li class=\"menu-item\">
                              <a href=\"#\" title=\"Sobre o Escritório\">Sobre Nós</a>
                           </li>
                           <li class=\"menu-item menu-item-has-children\">
                              <a href=\"https://advstephani.com.br/areas-atuacao.html\" title=\"Áreas de Atuação\">Áreas de Atuação</a>
                              <ul class=\"sub-menu\">
                                 <li class=\"menu-item\">
                                    <a href=\"https://advstephani.com.br/erro-medico.html\" title=\"Erro Médico\">Erro Médico e Responsabilidade</a>
                                 </li>
<li class=\"menu-item\">
    <a href=\"https://advstephani.com.br/defesa-medicos-erro-medico.html\" title=\"Defesa de Médicos em Casos de Erro Médico\">
        Defesa de Médicos - Erro Médico
    </a>
</li>

\t\t\t\t\t\t\t\t defesa-medicos-erro-medico
                                 <li class=\"menu-item\">
                                    <a href=\"https://advstephani.com.br/direito-penal-medico.html\" title=\"Direito Penal Médico\">Direito Penal Médico</a>
                                 </li>
                                 <li class=\"menu-item\">
                                    <a href=\"https://advstephani.com.br/processos-eticos.html\" title=\"Processos Éticos\">Processos Ético-Profissionais</a>
                                 </li>
                                 
                              </ul>
                           </li>
                           <li class=\"menu-item\">
                              <a href=\"https://advstephani.com.br/#\" title=\"Blog Jurídico\">Blog</a>
                           </li>
                           <li class=\"menu-item\">
                              <a href=\"https://advstephani.com.br/contato.html\" title=\"Entre em Contato\">Contato</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div data-rocket-location-hash=\"fb3fdf0f7d2171c5241af240b7800948\" class=\"attorna-body-outer-wrapper \">
         <div data-rocket-location-hash=\"735aa54fc7bf5b1cd0854d7bd28c822e\" class=\"attorna-body-wrapper clearfix  attorna-with-transparent-header attorna-with-frame\">
            <div class=\"attorna-header-background-transparent\" >
               <div style=\"background-color:black;\"   class=\"attorna-top-bar\" >
                  <div class=\"attorna-top-bar-background\" ></div>
                  <div class=\"attorna-top-bar-container attorna-container \" >
                     <div class=\"attorna-top-bar-container-inner clearfix\" >
                        <div class=\"attorna-top-bar-left attorna-item-pdlr\">
                           <i class=\"fa fa-phone\" style=\"font-size: 15px ;color: #b1976b ;margin-right: 10px ;\"  ></i>41 99276 0819
                           <div style=\"margin-left: 10px; margin-right: 13px; display: inline;\">&#183;</div>
                           <i class=\"icon_clock_alt\" style=\"font-size: 15px ;color: #b1976b ;margin-right: 10px ;\"  ></i>Advogado em Curitiba
                        </div>
                        <a class=\"attorna-top-bar-right-button\" href=\"https://advstephani.com.br/#\" target=\"_self\"  ><i class=\"fa fa-comment-o\" ></i>Contato </a>
                        <div class=\"attorna-top-bar-right attorna-item-pdlr\">
                           <div class=\"attorna-top-bar-right-social\">
                              <a href=\"https://facebook.com\" target=\"_blank\" class=\"attorna-top-bar-social-icon\" title=\"Facebook\">
                              <i class=\"fab fa-facebook-f\"></i>
                              </a>
                              <a href=\"https://linkedin.com\" target=\"_blank\" class=\"attorna-top-bar-social-icon\" title=\"LinkedIn\">
                              <i class=\"fab fa-linkedin-in\"></i>
                              </a>
                              <a href=\"https://pinterest.com\" target=\"_blank\" class=\"attorna-top-bar-social-icon\" title=\"Pinterest\">
                              <i class=\"fab fa-pinterest-p\"></i>
                              </a>
                              <a href=\"https://twitter.com\" target=\"_blank\" class=\"attorna-top-bar-social-icon\" title=\"Twitter\">
                              <i class=\"fab fa-twitter\"></i>
                              </a>
                              <a href=\"https://instagram.com\" target=\"_blank\" class=\"attorna-top-bar-social-icon\" title=\"Instagram\">
                              <i class=\"fab fa-instagram\"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <header style=\"background-color:black;\"   class=\"attorna-header-wrap attorna-header-style-plain attorna-style-menu-right attorna-sticky-navigation attorna-style-slide\" data-navigation-offset=\"75px\">
                  <div class=\"attorna-header-background\"></div>
                  <div class=\"attorna-header-container attorna-container\">
                     <div class=\"attorna-header-container-inner clearfix\">
                        <div class=\"attorna-logo attorna-item-pdlr\">
                           <div class=\"attorna-logo-inner\">
                              <a class=\"\" href=\"https://advstephani.com.br/\">
                              <img src=\"https://advstephani.com.br/wp-content/uploads/2019/03/logo-light.png\" alt=\"Jonas Stephâni Advocacia - Direito Médico\" width=\"370\" height=\"65\" title=\"Jonas Stephâni Advocacia\"/>
                              </a>
                           </div>
                        </div>
                        <div class=\"attorna-navigation attorna-item-pdlr clearfix\">
                           <div class=\"attorna-main-menu\" id=\"attorna-main-menu\">
                              <ul id=\"menu-main-navigation-1\" class=\"sf-menu\">
                                 <li class=\"menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-5167 attorna-normal-menu\">
                                    <a href=\"https://advstephani.com.br/\" class=\"sf-with-ul-pre\">Home</a>
                                 </li>
                                 <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5123 attorna-normal-menu\">
                                    <a href=\"#.html\" class=\"sf-with-ul-pre\">Sobre Nós</a>
                                 </li>
                                 <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6900 attorna-normal-menu\">
                                    <a href=\"https://advstephani.com.br/areas-atuacao.html\" class=\"sf-with-ul-pre\">Áreas de Atuação</a>
                                    <ul class=\"sub-menu\">
                                       <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-6519\" data-size=\"60\">
                                          <a href=\"https://advstephani.com.br/erro-medico.html\">Erro Médico e Responsabilidade Civil</a>
                                       </li>
\t\t\t\t\t\t\t\t\t   <li class=\"menu-item\">
    <a href=\"https://advstephani.com.br/defesa-medicos-erro-medico.html\" title=\"Defesa de Médicos em Casos de Erro Médico\">
        Defesa de Médicos - Erro Médico
    </a>
</li>

                                       <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-6518\" data-size=\"60\">
                                          <a href=\"https://advstephani.com.br/direito-penal-medico.html\">Direito Penal Médico</a>
                                       </li>
                                       <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-6517\" data-size=\"60\">
                                          <a href=\"https://advstephani.com.br/processos-eticos.html\">Processos Ético-Profissionais</a>
                                       </li>
                                       
                                    </ul>
                                 </li>
                                 <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5172 attorna-normal-menu\">
                                    <a href=\"https://advstephani.com.br/news\">Blog</a>
                                 </li>
                                 <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5207 attorna-normal-menu\">
                                    <a href=\"https://advstephani.com.br/contato.html\">Contato</a>
                                 </li>
                              </ul>
                           </div>

                        </div>
                     </div>
                  </div>
               </header>
               <!-- header -->
            </div>
 </div>
 </div> 
\t\t </div> \t
                    <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
                </div>
        </header>
\t\t<br><br><br><br><br>
        {% endblock %}

        {% block showcase %}{% endblock %}

        {% block body %}
        <section id=\"body\" class=\"{{ class }}\">
            {% block content %}{% endblock %}

            {% block footer %}
       
            {% endblock %}
        </section>
        {% endblock %}

    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        {% include 'partials/navigation.html.twig' %}
        </div>
    </div>
    {% block bottom %}
    {{ assets.js('bottom')|raw }}
    <script>
    \$(function () {
        \$(document).ready(function() {
          \$.slidebars({
            hideControlClasses: true,
            scrollLock: true
          });
        });
    });
    </script>
    {% endblock %}
\t
\t           <footer data-wpr-lazyrender=\"1\">
               <div class=\"attorna-footer-wrapper\">
                  <div class=\"attorna-footer-container attorna-container clearfix\">
                     <div class=\"attorna-footer-column attorna-item-pdlr attorna-column-15\">
                        <div id=\"text-1\" class=\"widget widget_text attorna-widget\">
                           <div class=\"textwidget\">
                              <p><img decoding=\"async\" class=\"alignnone size-full wp-image-6129\" src=\"wp-content/uploads/2019/03/logo-light.png\" alt=\"\" width=\"210\" sizes=\"(max-width: 400px) 100vw, 400px\" /><br />
                                 <span class=\"gdlr-core-space-shortcode\" style=\"margin-top: -27px;\"></span><br />
                                 Assessoria jurídica especializada em direito médico, protegendo profissionais de saúde e pacientes.
                              </p>
                              <div style=\"padding-bottom: 0px; display: block;\">
                                 <a href=\"https://facebook.com\" target=\"_blank\" class=\"gdlr-core-social-network-icon\" title=\"Facebook\" style=\"font-size: 16px; color: #b1976b;\" rel=\"noopener\">
                                 <i class=\"fab fa-facebook-f\"></i>
                                 </a>
                                 <a href=\"https://linkedin.com\" target=\"_blank\" class=\"gdlr-core-social-network-icon\" title=\"LinkedIn\" style=\"font-size: 16px; color: #b1976b;\" rel=\"noopener\">
                                 <i class=\"fab fa-linkedin-in\"></i>
                                 </a>
                                 <a href=\"https://instagram.com\" target=\"_blank\" class=\"gdlr-core-social-network-icon\" title=\"Instagram\" style=\"font-size: 16px; color: #b1976b;\" rel=\"noopener\">
                                 <i class=\"fab fa-instagram\"></i>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class=\"attorna-footer-column attorna-item-pdlr attorna-column-15\">
                        <div id=\"text-7\" class=\"widget widget_text attorna-widget\">
                           <h3 class=\"attorna-widget-title\">Contato</h3>
                           <span class=\"clear\"></span>\t\t\t
                           <div class=\"textwidget\">
                              <p>Rua Albano Reis, 478 <br /> Ahú, Curitiba/PR.<br />
                                 Curitiba, Paraná
                              </p>
                              <p><span style=\"color: #fff;\">(41) 99276-0819</span><br />
                                 <span style=\"color: #a69a87;\"><a href=\"mailto:contato@advstephani.com.br\">contato@advstephani.com.br</a></span>
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class=\"attorna-footer-column attorna-item-pdlr attorna-column-30\">
                        <div id=\"gdlr-core-custom-menu-widget-4\" class=\"widget widget_gdlr-core-custom-menu-widget attorna-widget\">
                           <h3 class=\"attorna-widget-title\">Áreas de Atuação</h3>
                           <span class=\"clear\"></span>
                           <div class=\"menu-case-study-container\">
                              <ul id=\"menu-case-study\" class=\"gdlr-core-custom-menu-widget gdlr-core-menu-style-half\">
                                 <li class=\"menu-item\"><a href=\"advogado-para-medicos-curitiba\">Direito do Médico</a></li>
                                 <li class=\"menu-item\"><a href=\"advogado-erro-medico-curitiba\">Direito do Paciente</a></li>
                                 <li class=\"menu-item\"><a href=\"#\">Processos Ético-Profissionais</a></li>
                                 <li class=\"menu-item\"><a href=\"#\">Biodireito e Bioética</a></li>
                                 <li class=\"menu-item\"><a href=\"#\">Diretivas Antecipadas</a></li>
                                 <li class=\"menu-item\"><a href=\"#\">Erro Médico</a></li>
                                 <li class=\"menu-item\"><a href=\"#\">Responsabilidade Hospitalar</a></li>
                                 <li class=\"menu-item\"><a href=\"#\">Consentimento Informado</a></li>
                                 <li class=\"menu-item\"><a href=\"#\">Propriedade Intelectual na Saúde</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=\"attorna-copyright-wrapper\">
                  <div class=\"attorna-copyright-container attorna-container clearfix\">
                     <div class=\"attorna-copyright-left attorna-item-pdlr\">© 2025 Escritório de Advocacia em Direito Médico. Todos os direitos reservados.</div>
                     <div class=\"attorna-copyright-right attorna-item-pdlr\">
                        <a href=\"#\" style=\"margin-left:21px;\">Início</a>
                        <a href=\"#\" style=\"margin-left:21px;\">Casos</a>
                        <a href=\"#\" style=\"margin-left:21px;\">Sobre</a>
                        <a href=\"#\" style=\"margin-left:21px;\">Legal</a>
                        <a href=\"#\" style=\"margin-left:21px;\">Privacidade</a>
                     </div>
                  </div>
               </div>
            </footer>
\t
\t     <script type=\"text/javascript\" src=\"https://advstephani.com.br/wp-includes/js/jquery/ui/effect.minb37e.js?ver=1.13.3\" id=\"jquery-effects-core-js\" data-rocket-defer defer></script>
      <script data-minify=\"1\" type=\"text/javascript\" src=\"https://advstephani.com.br/wp-content/cache/min/1/attorna/demo2/wp-content/themes/attorna/js/mmenu738e.js?ver=1733679066\" id=\"attorna-mmenu-js\" data-rocket-defer defer></script>
      <script data-minify=\"1\" type=\"text/javascript\" src=\"https://advstephani.com.br/wp-content/cache/min/1/attorna/demo2/wp-content/themes/attorna/js/jquery.superfish738e.js?ver=1733679066\" id=\"jquery-superfish-js\" data-rocket-defer defer></script>
      <script data-minify=\"1\" type=\"text/javascript\" src=\"https://advstephani.com.br/wp-content/cache/min/1/attorna/demo2/wp-content/themes/attorna/js/script-core738e.js?ver=1733679066\" id=\"attorna-script-core-js\" data-rocket-defer defer></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const accTitles = document.querySelectorAll('.gdlr-core-accordion-item-title');
    accTitles.forEach(title => {
        title.addEventListener('click', () => {
            const tab = title.closest('.gdlr-core-accordion-item-tab');
            const isActive = tab.classList.contains('gdlr-core-active');
            document.querySelectorAll('.gdlr-core-accordion-item-tab').forEach(t => t.classList.remove('gdlr-core-active'));
            if (!isActive) tab.classList.add('gdlr-core-active');
        });
    });
});
</script>
</body>
</html>
", "partials/base.html.twig", "/home/u576495821/domains/advstephani.com.br/public_html/news/user/themes/deliver/templates/partials/base.html.twig");
    }
    private $deferred;
}
