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

/* @bundles/ReportBundle/Tests/Model/ReportFileWriterTest.php */
class __TwigTemplate_c699426d8cedee3d918f3accf362f8ece240a40357ace2127028288db5b60dc5 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Model;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\ReportBundle\\Crate\\ReportDataResult;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Entity\\Scheduler;
use Mautic\\ReportBundle\\Model\\CsvExporter;
use Mautic\\ReportBundle\\Model\\ExportHandler;
use Mautic\\ReportBundle\\Model\\ReportExportOptions;
use Mautic\\ReportBundle\\Model\\ReportFileWriter;
use Mautic\\ReportBundle\\Tests\\Fixtures;

class ReportFileWriterTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testWriteReportData()
    {
        \$csvExporter = \$this->getMockBuilder(CsvExporter::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$exportHandler = \$this->getMockBuilder(ExportHandler::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$handler = 'Handler';

        \$report    = new Report();
        \$scheduler = new Scheduler(\$report, new \\DateTime());

        \$reportDataResult = new ReportDataResult(Fixtures::getValidReportResult());

        \$coreParametersHelper = \$this->getMockBuilder(CoreParametersHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('report_export_batch_size')
            ->willReturn(3);

        \$reportExportOptions = new ReportExportOptions(\$coreParametersHelper);

        \$exportHandler->expects(\$this->once())
            ->method('getHandler')
            ->willReturn(\$handler);

        \$csvExporter->expects(\$this->once())
            ->method('export')
            ->with(\$reportDataResult, \$handler, 1)
            ->willReturn(\$handler);

        \$exportHandler->expects(\$this->once())
            ->method('closeHandler')
            ->willReturn(\$handler);

        \$reportFileWriter = new ReportFileWriter(\$csvExporter, \$exportHandler);

        \$reportFileWriter->writeReportData(\$scheduler, \$reportDataResult, \$reportExportOptions);
    }

    public function testClear()
    {
        \$csvExporter = \$this->getMockBuilder(CsvExporter::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$exportHandler = \$this->getMockBuilder(ExportHandler::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$report    = new Report();
        \$scheduler = new Scheduler(\$report, new \\DateTime());

        \$exportHandler->expects(\$this->once())
            ->method('removeFile');

        \$reportFileWriter = new ReportFileWriter(\$csvExporter, \$exportHandler);

        \$reportFileWriter->clear(\$scheduler);
    }

    public function testGetFilePath()
    {
        \$csvExporter = \$this->getMockBuilder(CsvExporter::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$exportHandler = \$this->getMockBuilder(ExportHandler::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$report    = new Report();
        \$scheduler = new Scheduler(\$report, new \\DateTime());

        \$exportHandler->expects(\$this->once())
            ->method('getPath');

        \$reportFileWriter = new ReportFileWriter(\$csvExporter, \$exportHandler);

        \$reportFileWriter->getFilePath(\$scheduler);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Model/ReportFileWriterTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Model/ReportFileWriterTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Model/ReportFileWriterTest.php");
    }
}
