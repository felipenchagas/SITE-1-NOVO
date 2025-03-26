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

/* blog.html.twig */
class __TwigTemplate_112c0a69e444c8e2cba82bb6b2335366cdc037c4cde70786db1525ee7ac9fd47 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 4
        $context["base_url"] = $this->getAttribute(($context["page"] ?? null), "url", []);
        // line 5
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 7
        $context["show_sidebar"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_sidebar", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 9
        $context["show_breadcrumbs"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_breadcrumbs", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 11
        if ((($context["base_url"] ?? null) == "/")) {
            // line 12
            $context["base_url"] = "";
        }
        // line 15
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 16
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", []));
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        // line 20
        echo "
";
        // line 21
        if ((($context["title_choice"] ?? null) == "image")) {
            // line 22
            echo "\t<div class=\"flush-top blog-header blog-header-image\" style=\"background: ";
            echo twig_escape_filter($this->env, ($context["title_bg_color"] ?? null), "html", null, true);
            echo " url(";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["featured_image"] ?? null), "url", []), "html", null, true);
            echo ") no-repeat right;\">
";
        } else {
            // line 24
            echo "\t<div class=\"flush-top blog-header\" style=\"background-color: ";
            echo twig_escape_filter($this->env, ($context["title_bg_color"] ?? null), "html", null, true);
            echo ";\">
";
        }
        // line 26
        echo "\t<h1 style=\"color: ";
        echo twig_escape_filter($this->env, ($context["title_text_color"] ?? null), "html", null, true);
        echo "\">";
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>
</div>
\t<div class=\"content-wrapper\">
\t";
        // line 29
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []))) {
            // line 30
            echo "\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 30)->display($context);
            // line 31
            echo "\t";
        }
        // line 32
        echo "\t";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
\t</div>
\t<div class=\"content-wrapper blog-content-list g-grid pure-g-r\">
\t\t<div id=\"listing\" class=\"g-block pure-u-2-3\">
\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 37
            echo "\t\t\t\t";
            $context["image"] = (($this->getAttribute($this->getAttribute($context["child"], "media", []), $this->getAttribute(($context["header"] ?? null), "featured_image", []), [], "array")) ? ($this->getAttribute($this->getAttribute($context["child"], "media", []), $this->getAttribute(($context["header"] ?? null), "featured_image", []), [], "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute($context["child"], "media", []), "images", []))));
            // line 38
            echo "\t\t\t\t";
            $context["showImage"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($context["child"], "header", []), "show_featured_image", []), false);
            // line 39
            echo "\t\t\t\t";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 39)->display(twig_array_merge($context, ["page" => $context["child"], "showImage" => ($context["showImage"] ?? null), "image" => ($context["image"] ?? null), "page_title" => $this->getAttribute($context["child"], "title", []), "big_header" => ($context["big_header"] ?? null), "truncate" => true]));
            // line 40
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
\t\t\t";
        // line 42
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 43
            echo "\t\t\t\t";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 43)->display(twig_array_merge($context, ["pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 44
            echo "\t\t\t";
        }
        // line 45
        echo "\t\t</div>
\t\t";
        // line 46
        if (($context["show_sidebar"] ?? null)) {
            // line 47
            echo "\t\t<div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
\t\t\t";
            // line 48
            $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 48)->display($context);
            // line 49
            echo "\t\t</div>
\t\t";
        }
        // line 51
        echo "\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 51,  168 => 49,  166 => 48,  163 => 47,  161 => 46,  158 => 45,  155 => 44,  152 => 43,  150 => 42,  147 => 41,  133 => 40,  130 => 39,  127 => 38,  124 => 37,  107 => 36,  99 => 32,  96 => 31,  93 => 30,  91 => 29,  82 => 26,  76 => 24,  68 => 22,  66 => 21,  63 => 20,  60 => 19,  55 => 1,  52 => 16,  50 => 15,  47 => 12,  45 => 11,  43 => 9,  41 => 7,  39 => 5,  37 => 4,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% set collection = page.collection() %}
{% set base_url = page.url %}
{% set feed_url = base_url %}
{# Set sidebar option for page #}
{% set show_sidebar = header_var('show_sidebar', [page, blog])|defined(true)  %}
{# Set breadcrumbs option for page #}
{% set show_breadcrumbs = header_var('show_breadcrumbs', [page, blog])|defined(true) %}

{% if base_url == '/' %}
{% set base_url = '' %}
{% endif %}

{% if base_url == base_url_relative %}
{% set feed_url = base_url~'/'~page.slug %}
{% endif  %}

{% block content %}

{% if title_choice == 'image' %}
\t<div class=\"flush-top blog-header blog-header-image\" style=\"background: {{ title_bg_color }} url({{ featured_image.url }}) no-repeat right;\">
{% else %}
\t<div class=\"flush-top blog-header\" style=\"background-color: {{ title_bg_color }};\">
{% endif %}
\t<h1 style=\"color: {{ title_text_color }}\">{{ page.title|raw }}</h1>
</div>
\t<div class=\"content-wrapper\">
\t{% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t{% endif %}
\t{{ page.content|raw }}
\t</div>
\t<div class=\"content-wrapper blog-content-list g-grid pure-g-r\">
\t\t<div id=\"listing\" class=\"g-block pure-u-2-3\">
\t\t\t{% for child in collection %}
\t\t\t\t{% set image = child.media[header.featured_image] ?: child.media.images|first %}
\t\t\t\t{% set showImage = child.header.show_featured_image|defined(false) %}
\t\t\t\t{% include 'partials/blog_item.html.twig' with  { page: child, showImage, image, 'page_title': child.title, big_header, 'truncate':true } %}
\t\t\t{% endfor %}

\t\t\t{% if config.plugins.pagination.enabled and collection.params.pagination %}
\t\t\t\t{% include 'partials/pagination.html.twig' with {'pagination':collection.params.pagination} %}
\t\t\t{% endif %}
\t\t</div>
\t\t{% if show_sidebar %}
\t\t<div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
\t\t\t{% include 'partials/sidebar.html.twig' %}
\t\t</div>
\t\t{% endif %}
\t</div>
\t{% endblock %}

", "blog.html.twig", "/home/u576495821/domains/advstephani.com.br/public_html/news/user/themes/deliver/templates/blog.html.twig");
    }
}
