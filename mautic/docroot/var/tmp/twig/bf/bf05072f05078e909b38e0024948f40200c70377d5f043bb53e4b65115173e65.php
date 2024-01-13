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

/* @bundles/ReportBundle/Event/ReportDataEvent.php */
class __TwigTemplate_abdce58026a4fea1e3e4656ac3ec0c1d8a68889c4b5e88ff384b51b59acccb5c extends Template
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

use Mautic\\ReportBundle\\Entity\\Report;

/**
 * Class ReportDataEvent.
 */
class ReportDataEvent extends AbstractReportEvent
{
    /**
     * @var array
     */
    private \$data = [];

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
    public function __construct(Report \$report, array \$data, \$totalResults, array \$options)
    {
        \$this->context      = \$report->getSource();
        \$this->report       = \$report;
        \$this->data         = \$data;
        \$this->options      = \$options;
        \$this->totalResults = (int) \$totalResults;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return \$this->data;
    }

    /**
     * @param array \$data
     *
     * @return ReportDataEvent
     */
    public function setData(\$data)
    {
        \$this->data = \$data;
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
        return "@bundles/ReportBundle/Event/ReportDataEvent.php";
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
        return new Source("", "@bundles/ReportBundle/Event/ReportDataEvent.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Event/ReportDataEvent.php");
    }
}
