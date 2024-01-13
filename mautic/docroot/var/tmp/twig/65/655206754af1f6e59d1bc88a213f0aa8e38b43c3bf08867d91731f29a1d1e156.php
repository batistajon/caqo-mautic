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

/* @bundles/ReportBundle/Translations/en_US/validators.ini */
class __TwigTemplate_b2ee1bacc1c307040f5ee4b7758a6e149811ebf0f32c92564e6d948c2b7efe90 extends Template
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
        echo "mautic.report.schedule.notValid=\"Schedule settings is not valid. Please fill all required fields\"
mautic.report.schedule.to_address_required=\"To address is required for scheduling report\"
mautic.report.schedule.invalidScheduler=\"Scheduler is not valid\"
mautic.report.schedule.notSupportedType=\"This scheduler is not supported\"
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Translations/en_US/validators.ini";
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
        return new Source("", "@bundles/ReportBundle/Translations/en_US/validators.ini", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Translations/en_US/validators.ini");
    }
}
