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

/* partials/nav-user-avatar.html.twig */
class __TwigTemplate_7f0d28b0d710b79548922e7db9a77a5d7790573d22f16cc08a0b63140f72bb0c extends \Twig\Template
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
        $context["user_avatar"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "user", []), "getAvatarUrl", [], "method");
        // line 2
        echo "<img src=\"";
        echo twig_escape_filter($this->env, (($context["user_avatar"] ?? null) . "?s=80"), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "partials/nav-user-avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set user_avatar = admin.user.getAvatarUrl() %}
<img src=\"{{ user_avatar ~ '?s=80' }}\" />
", "partials/nav-user-avatar.html.twig", "/home/u576495821/domains/advstephani.com.br/public_html/news/user/plugins/admin/themes/grav/templates/partials/nav-user-avatar.html.twig");
    }
}
