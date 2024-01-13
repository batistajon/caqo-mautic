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

/* @bundles/ReportBundle/Model/ReportExporter.php */
class __TwigTemplate_b46bb999794e1935f9d50e8d803f316b62c03d57f0076ea9a9bc6e776cbeffcf extends Template
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

use Mautic\\ReportBundle\\Adapter\\ReportDataAdapter;
use Mautic\\ReportBundle\\Entity\\Scheduler;
use Mautic\\ReportBundle\\Event\\ReportScheduleSendEvent;
use Mautic\\ReportBundle\\Exception\\FileIOException;
use Mautic\\ReportBundle\\ReportEvents;
use Mautic\\ReportBundle\\Scheduler\\Enum\\SchedulerEnum;
use Mautic\\ReportBundle\\Scheduler\\Option\\ExportOption;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class ReportExporter
{
    /**
     * @var ScheduleModel
     */
    private \$schedulerModel;

    /**
     * @var ReportDataAdapter
     */
    private \$reportDataAdapter;

    /**
     * @var ReportExportOptions
     */
    private \$reportExportOptions;

    /**
     * @var ReportFileWriter
     */
    private \$reportFileWriter;

    /**
     * @var EventDispatcherInterface
     */
    private \$eventDispatcher;

    public function __construct(
        ScheduleModel \$schedulerModel,
        ReportDataAdapter \$reportDataAdapter,
        ReportExportOptions \$reportExportOptions,
        ReportFileWriter \$reportFileWriter,
        EventDispatcherInterface \$eventDispatcher
    ) {
        \$this->schedulerModel      = \$schedulerModel;
        \$this->reportDataAdapter   = \$reportDataAdapter;
        \$this->reportExportOptions = \$reportExportOptions;
        \$this->reportFileWriter    = \$reportFileWriter;
        \$this->eventDispatcher     = \$eventDispatcher;
    }

    /**
     * @throws FileIOException
     */
    public function processExport(ExportOption \$exportOption)
    {
        \$schedulers = \$this->schedulerModel->getScheduledReportsForExport(\$exportOption);
        foreach (\$schedulers as \$scheduler) {
            \$this->processReport(\$scheduler);
        }
    }

    /**
     * @throws FileIOException
     */
    private function processReport(Scheduler \$scheduler)
    {
        \$report = \$scheduler->getReport();

        if (!is_null(\$scheduler->getScheduleDate())) {
            \$dateTo = clone \$scheduler->getScheduleDate();
            \$dateTo->setTime(0, 0, 0);

            \$dateFrom = clone \$dateTo;
            switch (\$report->getScheduleUnit()) {
                case SchedulerEnum::UNIT_NOW:
                    \$dateFrom->sub(new \\DateInterval('P10Y'));
                    \$this->schedulerModel->turnOffScheduler(\$report);
                    break;
                case SchedulerEnum::UNIT_DAILY:
                    \$dateFrom->sub(new \\DateInterval('P1D'));
                    break;
                case SchedulerEnum::UNIT_WEEKLY:
                    \$dateFrom->sub(new \\DateInterval('P7D'));
                    break;
                case SchedulerEnum::UNIT_MONTHLY:
                    \$dateFrom->sub(new \\DateInterval('P1M'));
                    break;
            }

            \$this->reportExportOptions->setDateFrom(\$dateFrom);
            \$this->reportExportOptions->setDateTo(\$dateTo->sub(new \\DateInterval('PT1S')));
        }

        // just published reports, but schedule continue
        if (\$report->isPublished()) {
            \$this->reportExportOptions->beginExport();
            while (true) {
                \$data = \$this->reportDataAdapter->getReportData(\$report, \$this->reportExportOptions);

                \$this->reportFileWriter->writeReportData(\$scheduler, \$data, \$this->reportExportOptions);

                \$totalResults = \$data->getTotalResults();
                unset(\$data);

                if (\$this->reportExportOptions->getNumberOfProcessedResults() >= \$totalResults) {
                    break;
                }

                \$this->reportExportOptions->nextBatch();
            }

            \$file  = \$this->reportFileWriter->getFilePath(\$scheduler);
            \$event = new ReportScheduleSendEvent(\$scheduler, \$file);
            \$this->eventDispatcher->dispatch(ReportEvents::REPORT_SCHEDULE_SEND, \$event);
        }

        \$this->schedulerModel->reportWasScheduled(\$report);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Model/ReportExporter.php";
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
        return new Source("", "@bundles/ReportBundle/Model/ReportExporter.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Model/ReportExporter.php");
    }
}
