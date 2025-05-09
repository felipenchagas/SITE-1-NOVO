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

/* default.json.twig */
class __TwigTemplate_62fc8f8b2fcabdedd3a4a6458debf7414fbe3bc785d1d1e9266124804be9ed17 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ($this->getAttribute(($context["admin"] ?? null), "json_response", [])) {
            // line 2
            echo twig_jsonencode_filter($this->getAttribute(($context["admin"] ?? null), "json_response", []));
            echo "
";
        } else {
            // line 4
            echo "{}
";
        }
    }

    public function getTemplateName()
    {
        return "default.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if admin.json_response %}
{{ admin.json_response|json_encode|raw }}
{% else %}
{}
{% endif %}
", "default.json.twig", "/home/u576495821/domains/advstephani.com.br/public_html/news/user/plugins/admin/themes/grav/templates/default.json.twig");
    }
}
