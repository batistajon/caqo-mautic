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

/* @bundles/ReportBundle/Event/ReportEvent.php */
class __TwigTemplate_551ac2cb3e2bb65747c49cb014f3fd1db3d8c4540ea7aa48e0b324ea027a7024 extends Template
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
        echo "<?php

namespace Mautic\\ReportBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\ReportBundle\\Entity\\Report;

/**
 * Class ReportEvent.
 */
class ReportEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Report \$report, \$isNew = false)
    {
        \$this->entity = \$report;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Report entity.
     *
     * @return Report
     */
    public function getReport()
    {
        return \$this->entity;
    }

    /**
     * Sets the Report entity.
     */
    public function setReport(Report \$report)
    {
        \$this->entity = \$report;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Event/ReportEvent.php";
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
        return new Source("", "@bundles/ReportBundle/Event/ReportEvent.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Event/ReportEvent.php");
    }
}
