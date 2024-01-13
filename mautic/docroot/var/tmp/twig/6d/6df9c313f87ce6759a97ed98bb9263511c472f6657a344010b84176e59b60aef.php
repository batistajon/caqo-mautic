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

/* @bundles/CalendarBundle/Assets/css/calendar.css */
class __TwigTemplate_2c4c64b2bafb70f774db46ab9dd9345a4ad66eaf6d37d96f6a725a94cc19e936 extends Template
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
        echo ".fc-widget-header table th {
  padding: 8px 15px;
}
div#calendar > .fc-toolbar {
  border-bottom: 1px solid #ebedf0;
  margin: -15px -15px 1em;
  padding: 10px 15px;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CalendarBundle/Assets/css/calendar.css";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CalendarBundle/Assets/css/calendar.css", "/var/www/html/mautic/docroot/app/bundles/CalendarBundle/Assets/css/calendar.css");
    }
}
