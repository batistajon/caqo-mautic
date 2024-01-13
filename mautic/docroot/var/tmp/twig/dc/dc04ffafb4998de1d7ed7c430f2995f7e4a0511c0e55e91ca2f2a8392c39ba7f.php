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

/* @bundles/ReportBundle/Model/ReportFileWriter.php */
class __TwigTemplate_7d1216f64eedc807cdf23d159864771224ec6cea18dfcbf88fedddc6760782c7 extends Template
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

namespace Mautic\\ReportBundle\\Model;

use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\ReportBundle\\Crate\\ReportDataResult;
use Mautic\\ReportBundle\\Entity\\Scheduler;
use Mautic\\ReportBundle\\Exception\\FileIOException;

class ReportFileWriter
{
    /**
     * @var CsvExporter
     */
    private \$csvExporter;

    /**
     * @var ExportHandler
     */
    private \$exportHandler;

    public function __construct(CsvExporter \$csvExporter, ExportHandler \$exportHandler)
    {
        \$this->csvExporter   = \$csvExporter;
        \$this->exportHandler = \$exportHandler;
    }

    /**
     * @throws FileIOException
     */
    public function writeReportData(Scheduler \$scheduler, ReportDataResult \$reportDataResult, ReportExportOptions \$reportExportOptions)
    {
        \$fileName = \$this->getFileName(\$scheduler);
        \$handler  = \$this->exportHandler->getHandler(\$fileName);
        \$this->csvExporter->export(\$reportDataResult, \$handler, \$reportExportOptions->getPage());
        \$this->exportHandler->closeHandler(\$handler);
    }

    public function clear(Scheduler \$scheduler)
    {
        \$fileName = \$this->getFileName(\$scheduler);
        \$this->exportHandler->removeFile(\$fileName);
    }

    /**
     * @return string
     *
     * @throws FileIOException
     */
    public function getFilePath(Scheduler \$scheduler)
    {
        \$fileName = \$this->getFileName(\$scheduler);

        return \$this->exportHandler->getPath(\$fileName);
    }

    /**
     * @return string
     */
    private function getFileName(Scheduler \$scheduler)
    {
        \$date       = \$scheduler->getScheduleDate();
        \$dateString = \$date->format('Y-m-d');
        \$reportName = \$scheduler->getReport()->getName();

        return \$dateString.'_'.InputHelper::alphanum(\$reportName, false, '-');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Model/ReportFileWriter.php";
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
        return new Source("", "@bundles/ReportBundle/Model/ReportFileWriter.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Model/ReportFileWriter.php");
    }
}
