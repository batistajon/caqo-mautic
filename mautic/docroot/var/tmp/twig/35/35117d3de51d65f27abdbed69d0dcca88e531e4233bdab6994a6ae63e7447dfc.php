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

/* @bundles/ReportBundle/Translations/en_US/flashes.ini */
class __TwigTemplate_cd0c1b7e136a764f613b117bf21d6c44231241b1b82d6b597030b83638f901c0 extends Template
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
        echo "mautic.report.report.error.notfound=\"No report with an id of %id% was found!\"
mautic.report.report.notice.activated=\"<a href='%url%' data-toggle='ajax' data-menu-link='mautic_report_index'><strong>%name%</strong></a> is now active as the main report!\"
mautic.report.report.notice.batch_deleted=\"%count% reports have been deleted!\"
mautic.report.scheduled.already=\"Report %id% is already scheduled.\"
mautic.report.scheduled.to.now=\"Report %id% will be exported and sent to your email address %email%.\"
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Translations/en_US/flashes.ini";
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
        return new Source("", "@bundles/ReportBundle/Translations/en_US/flashes.ini", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Translations/en_US/flashes.ini");
    }
}
