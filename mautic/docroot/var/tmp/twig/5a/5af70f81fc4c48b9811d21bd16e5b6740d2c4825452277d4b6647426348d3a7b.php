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

/* @bundles/CoreBundle/Views/Notification/flash_messages.html.twig */
class __TwigTemplate_b3e82e4ccbaf751568e12f41f2c6f202147b01eb518af531a496bd8f0e8aa80d extends Template
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
        $context["dismissable"] = ((array_key_exists("dismissable", $context)) ? (_twig_default_filter(($context["dismissable"] ?? null), "")) : (""));
        // line 2
        $context["alertType"] = ((array_key_exists("alertType", $context)) ? (_twig_default_filter(($context["alertType"] ?? null), "growl")) : ("growl"));
        // line 3
        $context["alertClasses"] = (((($context["alertType"] ?? null) == "growl")) ? (["notice" => "alert-growl", "warning" => "alert-growl", "error" => "alert-growl"]) : (["notice" => "alert-success", "warning" => "alert-warning", "error" => "alert-danger"]));
        // line 7
        $context["flashes"] = ((array_key_exists("flashes", $context)) ? (_twig_default_filter(($context["flashes"] ?? null), twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 7))) : (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 7)));
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["flashes"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 10
            $context["message"] = ((is_iterable($context["messages"])) ? ((($__internal_compile_0 = $context["messages"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null)) : ($context["messages"]));
            // line 11
            echo "<div class=\"alert ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["alertClasses"] ?? null), $context["type"], [], "any", false, false, false, 11) . ($context["dismissable"] ?? null)), "html", null, true);
            echo " alert-new\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"><i class=\"fa fa-times\"></i></button>
    <span>";
            // line 13
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</span>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Notification/flash_messages.html.twig";
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
        return array (  60 => 13,  54 => 11,  52 => 10,  48 => 9,  45 => 8,  43 => 7,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Views/Notification/flash_messages.html.twig", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Notification/flash_messages.html.twig");
    }
}
