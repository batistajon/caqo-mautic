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

/* @bundles/ReportBundle/Adapter/ReportDataAdapter.php */
class __TwigTemplate_dc2b93bf898f825f854e25b50f08f26af06eea248a40ac2b31bd2aa185c3b5be extends Template
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

namespace Mautic\\ReportBundle\\Adapter;

use Mautic\\ReportBundle\\Crate\\ReportDataResult;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Model\\ReportExportOptions;
use Mautic\\ReportBundle\\Model\\ReportModel;

class ReportDataAdapter
{
    /**
     * @var ReportModel
     */
    private \$reportModel;

    public function __construct(ReportModel \$reportModel)
    {
        \$this->reportModel = \$reportModel;
    }

    public function getReportData(Report \$report, ReportExportOptions \$reportExportOptions)
    {
        \$options                    = [];
        \$options['paginate']        = true;
        \$options['limit']           = \$reportExportOptions->getBatchSize();
        \$options['ignoreGraphData'] = true;
        \$options['page']            = \$reportExportOptions->getPage();
        \$options['dateTo']          = \$reportExportOptions->getDateTo();
        \$options['dateFrom']        = \$reportExportOptions->getDateFrom();

        \$data = \$this->reportModel->getReportData(\$report, null, \$options);

        return new ReportDataResult(\$data);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Adapter/ReportDataAdapter.php";
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
        return new Source("", "@bundles/ReportBundle/Adapter/ReportDataAdapter.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Adapter/ReportDataAdapter.php");
    }
}
