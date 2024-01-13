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

/* @bundles/ReportBundle/Event/ReportQueryEvent.php */
class __TwigTemplate_00f2ede9de64e775b9585e527b47c5d50b9803437b9b454f783c438546ff80e0 extends Template
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

use Doctrine\\DBAL\\Query\\QueryBuilder;
use Mautic\\ReportBundle\\Entity\\Report;

/**
 * Class ReportDataEvent.
 */
class ReportQueryEvent extends AbstractReportEvent
{
    /**
     * @var QueryBuilder
     */
    private \$query;

    /**
     * @var array
     */
    private \$options = [];

    /**
     * @var int
     */
    private \$totalResults = 0;

    /**
     * ReportDataEvent constructor.
     *
     * @param \$totalResults
     */
    public function __construct(Report \$report, QueryBuilder \$query, \$totalResults, array \$options)
    {
        \$this->context      = \$report->getSource();
        \$this->report       = \$report;
        \$this->query        = \$query;
        \$this->options      = \$options;
        \$this->totalResults = (int) \$totalResults;
    }

    /**
     * @return array
     */
    public function getQuery()
    {
        return \$this->query;
    }

    /**
     * @param QueryBuilder \$query
     *
     * @return ReportDataEvent
     */
    public function setQuery(\$query)
    {
        \$this->query = \$query;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return \$this->options;
    }

    /**
     * @return int
     */
    public function getTotalResults()
    {
        return \$this->totalResults;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Event/ReportQueryEvent.php";
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
        return new Source("", "@bundles/ReportBundle/Event/ReportQueryEvent.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Event/ReportQueryEvent.php");
    }
}
