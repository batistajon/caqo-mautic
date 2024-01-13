<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @bundles/CoreBundle/Views/Helper/modal.html.twig */
class __TwigTemplate_5b6eda0177d5244f4566cb6eca2dc23cbd515a539317c28f7957aa0566a43107 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["containerClass"] = ((array_key_exists("containerClass", $context)) ? ((" " . ($context["containerClass"] ?? null))) : (""));
        // line 2
        $context["containerAttr"] = ((array_key_exists("containerAttr", $context)) ? ((" " . ($context["containerAttr"] ?? null))) : (""));
        // line 3
        $context["size"] = ((array_key_exists("size", $context)) ? ((" modal-" . ($context["size"] ?? null))) : (""));
        // line 4
        $context["class"] = (((array_key_exists("class", $context) &&  !twig_test_empty(($context["class"] ?? null)))) ? ((" " . ($context["class"] ?? null))) : (""));
        // line 5
        $context["body"] = ((array_key_exists("body", $context)) ? (($context["body"] ?? null)) : (""));
        // line 6
        $context["footer"] = ((array_key_exists("footer", $context)) ? (($context["footer"] ?? null)) : (""));
        // line 7
        $context["hidePlaceholder"] = (((array_key_exists("body", $context) &&  !twig_test_empty(($context["body"] ?? null)))) ? (" hide") : (""));
        // line 8
        $context["header"] = ((array_key_exists("header", $context)) ? (($context["header"] ?? null)) : (""));
        // line 9
        $context["padding"] = ((array_key_exists("padding", $context)) ? (($context["padding"] ?? null)) : (""));
        // line 10
        $context["footerButtonClass"] = ((array_key_exists("footerButtonClass", $context)) ? (($context["footerButtonClass"] ?? null)) : ("modal-form-buttons"));
        // line 11
        $context["dismissable"] = ((array_key_exists("dismissable", $context)) ? (($context["dismissable"] ?? null)) : (true));
        // line 12
        echo "
<div class=\"modal fade";
        // line 13
        echo twig_escape_filter($this->env, ($context["containerClass"] ?? null), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" data-backdrop=\"static\" role=\"dialog\" aria-labelledby=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-label\" aria-hidden=\"true\"";
        echo twig_escape_filter($this->env, ($context["containerAttr"] ?? null), "html", null, true);
        echo ">
    <div class=\"modal-dialog";
        // line 14
        echo twig_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
        echo "\">
        <div class=\"modal-content";
        // line 15
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 16
        if ( !(($context["header"] ?? null) === false)) {
            // line 17
            echo "            <div class=\"modal-header\">
                ";
            // line 18
            if (($context["dismissable"] ?? null)) {
                // line 19
                echo "                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span aria-hidden=\"true\">&times;</span></button>
                ";
            }
            // line 21
            echo "
                <h4 class=\"modal-title\" id=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-label\">
                    ";
            // line 23
            echo twig_escape_filter($this->env, ($context["header"] ?? null), "html", null, true);
            echo "
                </h4>

                <!-- start: loading bar -->
                <div class=\"modal-loading-bar\">
                    ";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.loading", [], "messages");
            // line 29
            echo "                </div>
                <!--/ end: loading bar -->

            </div>
            ";
        }
        // line 34
        echo "            <div class=\"modal-body ";
        echo twig_escape_filter($this->env, ($context["padding"] ?? null), "html", null, true);
        echo "\">
                <div class=\"loading-placeholder";
        // line 35
        echo twig_escape_filter($this->env, ($context["hidePlaceholder"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.loading", [], "messages");
        // line 37
        echo "                </div>
                <div class=\"modal-body-content\">
                    ";
        // line 39
        echo twig_escape_filter($this->env, ($context["body"] ?? null), "html", null, true);
        echo "
                </div>
            </div>
            ";
        // line 42
        if (( !twig_test_empty(($context["footer"] ?? null)) || (array_key_exists("footerButtons", $context) &&  !twig_test_empty(($context["footerButtons"] ?? null))))) {
            // line 43
            echo "            <div class=\"modal-footer\">
                ";
            // line 44
            if ((array_key_exists("footerButtons", $context) &&  !twig_test_empty(($context["footerButtons"] ?? null)))) {
                // line 45
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, ($context["footerButtonClass"] ?? null), "html", null, true);
                echo "\">
                    ";
                // line 46
                if (is_iterable(($context["footerButtons"] ?? null))) {
                    // line 47
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["footerButtons"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                        // line 48
                        echo "                        <button type=\"button\"
                                class=\"btn ";
                        // line 49
                        (((twig_get_attribute($this->env, $this->source, $context["button"], "class", [], "any", true, true, false, 49) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["button"], "class", [], "any", false, false, false, 49)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "class", [], "any", false, false, false, 49), "html", null, true))) : (print ("btn-default")));
                        echo "\"
                                ";
                        // line 50
                        (((twig_get_attribute($this->env, $this->source, $context["button"], "attr", [], "any", true, true, false, 50) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["button"], "attr", [], "any", false, false, false, 50)))) ? (print (twig_escape_filter($this->env, (" " . twig_get_attribute($this->env, $this->source, ($context["buton"] ?? null), "attr", [], "any", false, false, false, 50)), "html", null, true))) : (print ("")));
                        echo ">
                            ";
                        // line 51
                        echo (((twig_get_attribute($this->env, $this->source, $context["button"], "textIcon", [], "any", true, true, false, 51) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["button"], "textIcon", [], "any", false, false, false, 51)))) ? ("<i class=\"{{ button.textIcon }}>\"></i>") : (""));
                        echo "
                            ";
                        // line 52
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "label", [], "any", false, false, false, 52), "html", null, true);
                        echo "
                        </button>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "                    ";
                }
                // line 56
                echo "                </div>
                ";
            } else {
                // line 58
                echo "                ";
                echo twig_escape_filter($this->env, ($context["footer"] ?? null), "html", null, true);
                echo "
                ";
            }
            // line 60
            echo "            </div>
            ";
        }
        // line 62
        echo "        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Helper/modal.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  196 => 62,  192 => 60,  186 => 58,  182 => 56,  179 => 55,  170 => 52,  166 => 51,  162 => 50,  158 => 49,  155 => 48,  150 => 47,  148 => 46,  143 => 45,  141 => 44,  138 => 43,  136 => 42,  130 => 39,  126 => 37,  124 => 36,  120 => 35,  115 => 34,  108 => 29,  106 => 28,  98 => 23,  94 => 22,  91 => 21,  87 => 19,  85 => 18,  82 => 17,  80 => 16,  76 => 15,  72 => 14,  62 => 13,  59 => 12,  57 => 11,  55 => 10,  53 => 9,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Views/Helper/modal.html.twig", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Helper/modal.html.twig");
    }
}
