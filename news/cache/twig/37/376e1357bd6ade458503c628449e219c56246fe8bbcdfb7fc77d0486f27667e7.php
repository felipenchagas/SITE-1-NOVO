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

/* forms/field.html.twig */
class __TwigTemplate_d83a0576d83bc8a685abba5b83fb89d7f9aa60cff47107081b3851ef355ea599 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'contents' => [$this, 'block_contents'],
            'label' => [$this, 'block_label'],
            'global_attributes' => [$this, 'block_global_attributes'],
            'group' => [$this, 'block_group'],
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ( !$this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "ignore", [])) {
            // line 2
            echo "
";
            // line 3
            if (( !($context["blueprints"] ?? null) || (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array")))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array")) : (true)) === true))) {
                // line 4
                echo "    ";
                $context["default"] = $this->getAttribute(($context["field"] ?? null), "default", []);
                // line 5
                echo "    ";
                $context["toggleable"] = ((($this->getAttribute(($context["field"] ?? null), "toggleable", [], "any", true, true) &&  !(null === $this->getAttribute(($context["field"] ?? null), "toggleable", [])))) ? ($this->getAttribute(($context["field"] ?? null), "toggleable", [])) : (false));
                // line 6
                echo "    ";
                if (($context["toggleable"] ?? null)) {
                    // line 7
                    echo "        ";
                    $context["originalValue"] = (($context["originalValue"]) ?? (($context["value"] ?? null)));
                    // line 8
                    echo "        ";
                    $context["toggleableChecked"] =  !(null === ($context["originalValue"] ?? null));
                    // line 9
                    echo "    ";
                }
                // line 10
                echo "
    ";
                // line 11
                $context["has_value"] =  !(null === ($context["value"] ?? null));
                // line 12
                echo "    ";
                if ( !($context["has_value"] ?? null)) {
                    // line 13
                    echo "        ";
                    $context["value"] = ($context["default"] ?? null);
                    // line 14
                    echo "    ";
                }
                // line 15
                echo "
    ";
                // line 16
                if ((($this->getAttribute(($context["field"] ?? null), "yaml", []) || ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "type", []) == "yaml")) && twig_test_iterable(($context["value"] ?? null)))) {
                    // line 17
                    echo "        ";
                    $context["value"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->toYamlFilter(($context["value"] ?? null));
                    // line 18
                    echo "    ";
                }
            } else {
                // line 20
                echo "    ";
                $context["toggleable"] = false;
            }
            // line 22
            $context["vertical"] = ($this->getAttribute(($context["field"] ?? null), "style", []) == "vertical");
            // line 23
            $context["field_name"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
            // line 24
            $context["show_label"] = ( !($this->getAttribute(($context["field"] ?? null), "label", []) === false) &&  !($this->getAttribute(($context["field"] ?? null), "display_label", []) === false));
            // line 25
            echo "
";
            // line 27
            $context["isDisabledToggleable"] = (($context["toggleable"] ?? null) &&  !($context["toggleableChecked"] ?? null));
            // line 29
            $context["outerclasses"] = ((($this->getAttribute(($context["field"] ?? null), "outerclasses", [], "any", true, true) &&  !(null === $this->getAttribute(($context["field"] ?? null), "outerclasses", [])))) ? ($this->getAttribute(($context["field"] ?? null), "outerclasses", [])) : ($this->getAttribute(($context["field"] ?? null), "outer_classes", [])));
            // line 30
            echo "
";
            // line 31
            $this->displayBlock('field', $context, $blocks);
            // line 137
            echo "
";
        }
    }

    // line 31
    public function block_field($context, array $blocks = [])
    {
        // line 32
        echo "    ";
        if (($context["outerclasses"] ?? null)) {
            // line 33
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, ($context["outerclasses"] ?? null), "html", null, true);
            echo "\">
    ";
        }
        // line 35
        echo "    <div class=\"form-field grid";
        if (($context["vertical"] ?? null)) {
            echo " vertical";
        }
        if (($context["toggleable"] ?? null)) {
            echo " form-field-toggleable";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
        echo "\">
        ";
        // line 36
        $this->displayBlock('contents', $context, $blocks);
        // line 132
        echo "    </div>
    ";
        // line 133
        if (($context["outerclasses"] ?? null)) {
            // line 134
            echo "        </div>
    ";
        }
    }

    // line 36
    public function block_contents($context, array $blocks = [])
    {
        // line 37
        echo "            ";
        if (($context["show_label"] ?? null)) {
            // line 38
            echo "            <div class=\"form-label";
            if ( !($context["vertical"] ?? null)) {
                echo " block size-1-3";
            }
            echo "\">
                ";
            // line 39
            if (($context["toggleable"] ?? null)) {
                // line 40
                echo "                    <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"";
                echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
                echo "\">
                        <input type=\"checkbox\"
                               id=\"toggleable_";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
                echo "\"
                               ";
                // line 43
                if (($context["toggleableChecked"] ?? null)) {
                    echo "value=\"1\"";
                }
                // line 44
                echo "                               name=\"toggleable_";
                echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
                echo "\"
                               ";
                // line 45
                if (($context["toggleableChecked"] ?? null)) {
                    echo "checked=\"checked\"";
                }
                // line 46
                echo "                        >
                        <label for=\"toggleable_";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
                echo "\"></label>
                    </span>
                ";
            }
            // line 50
            echo "               <label";
            echo (($this->getAttribute(($context["field"] ?? null), "toggleable", [])) ? (((((" class=\"toggleable " . $this->getAttribute(($context["field"] ?? null), "labelclasses", [])) . "\" for=\"toggleable_") . $this->getAttribute(($context["field"] ?? null), "name", [])) . "\"")) : (((" class=\"" . $this->getAttribute(($context["field"] ?? null), "labelclasses", [])) . "\"")));
            echo ">
                ";
            // line 51
            $this->displayBlock('label', $context, $blocks);
            // line 67
            echo "                </label>
                ";
            // line 68
            if ($this->getAttribute(($context["field"] ?? null), "sublabel", [])) {
                // line 69
                echo "                <div class=\"form-sublabel ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sublabelclasses", []), "html", null, true);
                echo "\">
                    ";
                // line 70
                if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                    // line 71
                    echo "                        ";
                    echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "sublabel", [])), false);
                    echo "
                    ";
                } else {
                    // line 73
                    echo "                        ";
                    echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "sublabel", []));
                    echo "
                    ";
                }
                // line 75
                echo "                </div>
                ";
            }
            // line 77
            echo "            </div>
            ";
        }
        // line 79
        echo "            <div class=\"form-data";
        if ( !($context["vertical"] ?? null)) {
            echo " block size-2-3";
        }
        echo "\"
                ";
        // line 80
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 85
        echo "            >
                ";
        // line 86
        $this->displayBlock('group', $context, $blocks);
        // line 119
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "description", [])) {
            // line 120
            echo "                    <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
            echo "\">
                        <span class=\"form-description\">
                            ";
            // line 122
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 123
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "description", [])), false);
                echo "
                            ";
            } else {
                // line 125
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "description", []));
                echo "
                            ";
            }
            // line 127
            echo "                        </span>
                    </div>
                ";
        }
        // line 130
        echo "            </div>
        ";
    }

    // line 51
    public function block_label($context, array $blocks = [])
    {
        // line 52
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
            // line 53
            echo "                        ";
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 54
                echo "                            <span class=\"hint--bottom\" data-hint=\"";
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "help", [])), false);
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "label", [])), false);
                echo "</span> <i class=\"hint-icon fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                        ";
            } else {
                // line 56
                echo "                            <span class=\"hint--bottom\" data-hint=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "help", [])), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "label", []));
                echo " <i class=\"hint-icon fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                        ";
            }
            // line 58
            echo "                    ";
        } else {
            // line 59
            echo "                        ";
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 60
                echo "                            ";
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "label", [])), false);
                echo "
                        ";
            } else {
                // line 62
                echo "                            ";
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "label", []));
                echo "
                        ";
            }
            // line 64
            echo "                    ";
        }
        // line 65
        echo "                    ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                ";
    }

    // line 80
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 81
        echo "                data-grav-field=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "type", []), "html", null, true);
        echo "\"
                data-grav-disabled=\"";
        // line 82
        echo twig_escape_filter($this->env, ($context["toggleableChecked"] ?? null), "html", null, true);
        echo "\"
                data-grav-default=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", [])), "html_attr");
        echo "\"
                ";
    }

    // line 86
    public function block_group($context, array $blocks = [])
    {
        // line 87
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 118
        echo "                ";
    }

    // line 87
    public function block_input($context, array $blocks = [])
    {
        // line 88
        echo "                        <div class=\"form-input-wrapper ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
        echo "\">
                            ";
        // line 89
        $this->displayBlock('prepend', $context, $blocks);
        // line 90
        echo "                            ";
        $context["input_value"] = ((twig_test_iterable(($context["value"] ?? null))) ? (twig_join_filter(($context["value"] ?? null), ",")) : ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter(($context["value"] ?? null))));
        // line 91
        echo "                            <input
                                ";
        // line 93
        echo "                                name=\"";
        echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
        echo "\"
                                value=\"";
        // line 94
        echo twig_escape_filter($this->env, ($context["input_value"] ?? null), "html", null, true);
        echo "\"
                                ";
        // line 95
        if ($this->getAttribute(($context["field"] ?? null), "key", [])) {
            // line 96
            echo "                                    data-key-observe=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . ($context["field_name"] ?? null))), "html", null, true);
            echo "\"
                                ";
        }
        // line 98
        echo "                                ";
        // line 99
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 114
        echo "                            />
                            ";
        // line 115
        $this->displayBlock('append', $context, $blocks);
        // line 116
        echo "                        </div>
                    ";
    }

    // line 89
    public function block_prepend($context, array $blocks = [])
    {
    }

    // line 99
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 100
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            echo "\" ";
        }
        // line 101
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []), "html", null, true);
            echo "\" ";
        }
        // line 102
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []), "html", null, true);
            echo "\" ";
        }
        // line 103
        echo "                                    ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 104
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", [])), "html", null, true);
            echo "\"";
        }
        // line 105
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 106
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 107
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 108
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "autocomplete", [], "any", true, true)) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "autocomplete", []), "html", null, true);
            echo "\"";
        }
        // line 109
        echo "                                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "required=\"required\"";
        }
        // line 110
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", [])) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", []), "html", null, true);
            echo "\"";
        }
        // line 111
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])), "html", null, true);
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 112
($context["field"] ?? null), "title", [], "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "title", [])), "html", null, true);
            echo "\" ";
        }
        // line 113
        echo "                                ";
    }

    // line 115
    public function block_append($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "forms/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 115,  507 => 113,  501 => 112,  494 => 111,  487 => 110,  482 => 109,  475 => 108,  470 => 107,  465 => 106,  460 => 105,  453 => 104,  448 => 103,  441 => 102,  434 => 101,  427 => 100,  424 => 99,  419 => 89,  414 => 116,  412 => 115,  409 => 114,  406 => 99,  404 => 98,  398 => 96,  396 => 95,  392 => 94,  387 => 93,  384 => 91,  381 => 90,  379 => 89,  372 => 88,  369 => 87,  365 => 118,  362 => 87,  359 => 86,  353 => 83,  349 => 82,  344 => 81,  341 => 80,  334 => 65,  331 => 64,  325 => 62,  319 => 60,  316 => 59,  313 => 58,  305 => 56,  297 => 54,  294 => 53,  291 => 52,  288 => 51,  283 => 130,  278 => 127,  272 => 125,  266 => 123,  264 => 122,  258 => 120,  255 => 119,  253 => 86,  250 => 85,  248 => 80,  241 => 79,  237 => 77,  233 => 75,  227 => 73,  221 => 71,  219 => 70,  214 => 69,  212 => 68,  209 => 67,  207 => 51,  202 => 50,  196 => 47,  193 => 46,  189 => 45,  184 => 44,  180 => 43,  176 => 42,  170 => 40,  168 => 39,  161 => 38,  158 => 37,  155 => 36,  149 => 134,  147 => 133,  144 => 132,  142 => 36,  130 => 35,  124 => 33,  121 => 32,  118 => 31,  112 => 137,  110 => 31,  107 => 30,  105 => 29,  103 => 27,  100 => 25,  98 => 24,  96 => 23,  94 => 22,  90 => 20,  86 => 18,  83 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  69 => 12,  67 => 11,  64 => 10,  61 => 9,  58 => 8,  55 => 7,  52 => 6,  49 => 5,  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if not field.validate.ignore %}

{% if not blueprints or (blueprints.schema.type(field.type)['input@'] ?? true) is same as(true) %}
    {% set default = field.default %}
    {% set toggleable = field.toggleable ?? false %}
    {% if toggleable %}
        {% set originalValue = originalValue ?? value %}
        {% set toggleableChecked = originalValue is not null %}
    {% endif %}

    {% set has_value = value is not null %}
    {% if not has_value %}
        {% set value = default %}
    {% endif %}

    {% if (field.yaml or field.validate.type == 'yaml') and value is iterable %}
        {% set value = value|toYaml %}
    {% endif %}
{% else %}
    {% set toggleable = false %}
{% endif %}
{% set vertical = field.style == 'vertical' %}
{% set field_name = (scope ~ field.name)|fieldName %}
{% set show_label = field.label is not same as(false) and field.display_label is not same as(false) %}

{# DEPRECATED: Needed by old form fields; remove when backwards compatibility breaks are allowed #}
{% set isDisabledToggleable = toggleable and not toggleableChecked %}
{# Backwards compatibility with field.outer_classes instead of field.outerclasses #}
{% set outerclasses = field.outerclasses ?? field.outer_classes %}

{% block field %}
    {% if outerclasses %}
        <div class=\"{{ outerclasses }}\">
    {% endif %}
    <div class=\"form-field grid{% if vertical %} vertical{% endif %}{% if toggleable %} form-field-toggleable{% endif %} {{ field.classes }}\">
        {% block contents %}
            {% if show_label %}
            <div class=\"form-label{% if not vertical %} block size-1-3{% endif %}\">
                {% if toggleable %}
                    <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"{{ field_name }}\">
                        <input type=\"checkbox\"
                               id=\"toggleable_{{ field.name }}\"
                               {% if toggleableChecked %}value=\"1\"{% endif %}
                               name=\"toggleable_{{ field_name }}\"
                               {% if toggleableChecked %}checked=\"checked\"{% endif %}
                        >
                        <label for=\"toggleable_{{ field.name }}\"></label>
                    </span>
                {% endif %}
               <label{{ (field.toggleable ? ' class=\"toggleable ' ~ field.labelclasses ~ '\" for=\"toggleable_' ~ field.name ~ '\"' : ' class=\"' ~ field.labelclasses ~ '\"')|raw }}>
                {% block label %}
                    {% if field.help %}
                        {% if field.markdown %}
                            <span class=\"hint--bottom\" data-hint=\"{{ field.help|t|markdown(false) }}\">{{ field.label|t|markdown(false)|raw }}</span> <i class=\"hint-icon fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                        {% else %}
                            <span class=\"hint--bottom\" data-hint=\"{{ field.help|t }}\">{{ field.label|t|raw }} <i class=\"hint-icon fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                        {% endif %}
                    {% else %}
                        {% if field.markdown %}
                            {{ field.label|t|markdown(false)|raw }}
                        {% else %}
                            {{ field.label|t|raw }}
                        {% endif %}
                    {% endif %}
                    {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
                {% endblock %}
                </label>
                {% if field.sublabel %}
                <div class=\"form-sublabel {{ field.sublabelclasses }}\">
                    {% if field.markdown %}
                        {{ field.sublabel|t|markdown(false)|raw }}
                    {% else %}
                        {{ field.sublabel|t|raw }}
                    {% endif %}
                </div>
                {% endif %}
            </div>
            {% endif %}
            <div class=\"form-data{% if not vertical %} block size-2-3{% endif %}\"
                {% block global_attributes %}
                data-grav-field=\"{{ field.type }}\"
                data-grav-disabled=\"{{ toggleableChecked }}\"
                data-grav-default=\"{{ field.default|json_encode|e('html_attr') }}\"
                {% endblock %}
            >
                {% block group %}
                    {% block input %}
                        <div class=\"form-input-wrapper {{ field.size }} {{ field.wrapper_classes }}\">
                            {% block prepend %}{% endblock prepend %}
                            {% set input_value = value is iterable ? value|join(',') : value|string %}
                            <input
                                {# required attribute structures #}
                                name=\"{{ field_name }}\"
                                value=\"{{ input_value }}\"
                                {% if field.key %}
                                    data-key-observe=\"{{ (scope ~ field_name)|fieldName }}\"
                                {% endif %}
                                {# input attribute structures #}
                                {% block input_attributes %}
                                    {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                                    {% if field.id is defined %}id=\"{{ field.id }}\" {% endif %}
                                    {% if field.style is defined %}style=\"{{ field.style }}\" {% endif %}
                                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                                    {% if field.placeholder %}placeholder=\"{{ field.placeholder|t }}\"{% endif %}
                                    {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                                    {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                                    {% if field.autocomplete is defined %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                                    {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                                    {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern }}\"{% endif %}
                                    {% if field.validate.message %}title=\"{{ field.validate.message|t }}\"
                                    {% elseif field.title is defined %}title=\"{{ field.title|t }}\" {% endif %}
                                {% endblock %}
                            />
                            {% block append %}{% endblock append %}
                        </div>
                    {% endblock %}
                {% endblock %}
                {% if field.description %}
                    <div class=\"form-extra-wrapper {{ field.wrapper_classes }}\">
                        <span class=\"form-description\">
                            {% if field.markdown %}
                                {{ field.description|t|markdown(false)|raw }}
                            {% else %}
                                {{ field.description|t|raw }}
                            {% endif %}
                        </span>
                    </div>
                {% endif %}
            </div>
        {% endblock %}
    </div>
    {% if outerclasses %}
        </div>
    {% endif %}
{% endblock %}

{% endif %}
", "forms/field.html.twig", "/home/u576495821/domains/advstephani.com.br/public_html/news/user/themes/deliver/admin/themes/grav/templates/forms/field.html.twig");
    }
}
