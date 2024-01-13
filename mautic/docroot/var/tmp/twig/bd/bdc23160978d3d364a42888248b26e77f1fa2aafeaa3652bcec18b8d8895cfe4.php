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

/* @bundles/CoreBundle/Views/Notification/flashes.html.twig */
class __TwigTemplate_857766f9bcd5bbd724fc0add0abc8abf30ce5891b8a43b08b20679e0e162427c extends Template
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
        $context["alertType"] = ((array_key_exists("alertType", $context)) ? (_twig_default_filter(($context["alertType"] ?? null), "growl")) : ("growl"));
        // line 2
        echo "<div id=\"flashes\"";
        echo (((($context["alertType"] ?? null) == "growl")) ? (" class=\"alert-growl-container\"") : (""));
        echo ">
    ";
        // line 3
        echo twig_include($this->env, $context, "MauticCoreBundle:Notification:flash_messages.html.twig", ["dismissable" => (((((        // line 4
array_key_exists("notDismissable", $context)) ? (_twig_default_filter(($context["notDismissable"] ?? null), false)) : (false)) == false)) ? (" alert-dismissable") : ("")), "alertType" =>         // line 5
($context["alertType"] ?? null)]);
        // line 6
        echo "
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Notification/flashes.html.twig";
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
        return array (  48 => 6,  46 => 5,  45 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Views/Notification/flashes.html.twig", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Notification/flashes.html.twig");
    }
}
