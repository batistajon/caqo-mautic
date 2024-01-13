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

/* @bundles/ReportBundle/Event/ReportGraphEvent.php */
class __TwigTemplate_e5873e6fc428b288ab6a4c0261ddb3ad7b0b98afef84aff9a2c1a20b100b2918 extends Template
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
 * Class ReportGeneratorEvent.
 */
class ReportGraphEvent extends AbstractReportEvent
{
    /**
     * @var array
     */
    private \$requestedGraphs = [];

    /**
     * @var QueryBuilder
     */
    private \$queryBuilder;

    /**
     * Constructor.
     */
    public function __construct(Report \$report, array \$graphs, QueryBuilder \$queryBuilder)
    {
        \$this->report          = \$report;
        \$this->context         = \$report->getSource();
        \$this->requestedGraphs = \$graphs;
        \$this->queryBuilder    = \$queryBuilder;
    }

    /**
     * Fetch the graphs.
     *
     * @return array
     */
    public function getGraphs()
    {
        return \$this->requestedGraphs;
    }

    /**
     * Set the graph array.
     *
     * @param string \$graph
     * @param array  \$data  prepared for this chart
     */
    public function setGraph(\$graph, \$data)
    {
        if (!isset(\$this->requestedGraphs[\$graph]['data'])) {
            \$this->requestedGraphs[\$graph]['data'] = [];
        }
        \$this->requestedGraphs[\$graph]['data'] = \$data;
    }

    /**
     * Fetch the options array for the graph.
     *
     * @return array
     */
    public function getOptions(\$graph)
    {
        if (isset(\$this->requestedGraphs[\$graph]['options'])) {
            return \$this->requestedGraphs[\$graph]['options'];
        }

        return [];
    }

    /**
     * Set an option for the graph.
     *
     * @param string \$graph
     * @param string \$key
     * @param string \$value
     */
    public function setOption(\$graph, \$key, \$value)
    {
        if (!isset(\$this->requestedGraphs[\$graph]['options'])) {
            \$this->requestedGraphs[\$graph]['options'] = [];
        }
        \$this->requestedGraphs[\$graph]['options'][\$key] = \$value;
    }

    /**
     * Set the options for a graph.
     *
     * @param string \$graph
     * @param array  \$options
     */
    public function setOptions(\$graph, \$options)
    {
        \$this->requestedGraphs[\$graph]['options'] = \$options;
    }

    /**
     * Get graphs that are requested.
     *
     * @return array
     */
    public function getRequestedGraphs()
    {
        return array_keys(\$this->requestedGraphs);
    }

    /**
     * @return QueryBuilder
     */
    public function getQueryBuilder()
    {
        return \$this->queryBuilder;
    }

    public function setQueryBuilder(QueryBuilder \$queryBuilder)
    {
        \$this->queryBuilder = \$queryBuilder;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Event/ReportGraphEvent.php";
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
        return new Source("", "@bundles/ReportBundle/Event/ReportGraphEvent.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Event/ReportGraphEvent.php");
    }
}
