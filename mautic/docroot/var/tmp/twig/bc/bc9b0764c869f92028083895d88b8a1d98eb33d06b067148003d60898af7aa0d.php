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

/* @bundles/ReportBundle/Tests/Scheduler/Model/FileHandlerTest.php */
class __TwigTemplate_eaaa2af6e673cfbb80c509941d81c72971776322049277d5529c7881ef16aa00 extends Template
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

declare(strict_types=1);

namespace Mautic\\ReportBundle\\Tests\\Scheduler\\Model;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\FilePathResolver;
use Mautic\\CoreBundle\\Helper\\FileProperties;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Exception\\FileTooBigException;
use Mautic\\ReportBundle\\Scheduler\\Model\\FileHandler;
use PHPUnit\\Framework\\MockObject\\MockObject;

class FileHandlerTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|FilePathResolver
     */
    private \$filePathResolver;

    /**
     * @var MockObject|FileProperties
     */
    private \$fileProperties;

    /**
     * @var MockObject|CoreParametersHelper
     */
    private \$coreParametersHelper;

    /**
     * @var FileHandler
     */
    private \$fileHandler;

    protected function setUp(): void
    {
        \$this->filePathResolver     = \$this->createMock(FilePathResolver::class);
        \$this->fileProperties       = \$this->createMock(FileProperties::class);
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->fileHandler          = new FileHandler(
            \$this->filePathResolver,
            \$this->fileProperties,
            \$this->coreParametersHelper
        );
    }

    public function testFileCanBeAttachedIfTrue(): void
    {
        \$filePath  = 'file/path.csv';
        \$fileSize  = 1000;
        \$fileLimit = 5000;

        \$this->fileProperties->expects(\$this->once())
            ->method('getFileSize')
            ->with(\$filePath)
            ->willReturn(\$fileSize);

        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('report_export_max_filesize_in_bytes')
            ->willReturn(\$fileLimit);

        \$this->fileHandler->fileCanBeAttached(\$filePath);
    }

    public function testFileCanBeAttachedIfFalse(): void
    {
        \$filePath  = 'file/path.csv';
        \$fileSize  = 10000;
        \$fileLimit = 5000;

        \$this->fileProperties->expects(\$this->once())
            ->method('getFileSize')
            ->with(\$filePath)
            ->willReturn(\$fileSize);

        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('report_export_max_filesize_in_bytes')
            ->willReturn(\$fileLimit);

        \$this->expectException(FileTooBigException::class);

        \$this->fileHandler->fileCanBeAttached(\$filePath);
    }

    public function testZipIt(): void
    {
        \$tmpFilePath    = \$this->createTmpFile();
        \$tmpZipFilePath = \$this->fileHandler->zipIt(\$tmpFilePath);

        \$this->assertFileExists(\$tmpZipFilePath);

        unlink(\$tmpFilePath);
        unlink(\$tmpZipFilePath);
    }

    public function testGetPathToCompressedCsvFileForReport(): void
    {
        \$report = \$this->createMock(Report::class);

        \$report->expects(\$this->once())
            ->method('getId')
            ->willReturn(33);

        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('report_temp_dir')
            ->willReturn('/some/path');

        \$filePath = \$this->fileHandler->getPathToCompressedCsvFileForReport(\$report);

        \$this->assertSame('/some/path/csv_reports/report_33.zip', \$filePath);
    }

    public function testMoveZipToPermanentLocation(): void
    {
        \$report   = \$this->createMock(Report::class);
        \$filePath = 'file/path.csv';

        \$report->expects(\$this->once())
            ->method('getId')
            ->willReturn(33);

        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('report_temp_dir')
            ->willReturn('/some/path');

        \$this->filePathResolver->expects(\$this->once())
            ->method('delete')
            ->with('/some/path/csv_reports/report_33.zip');

        \$this->filePathResolver->expects(\$this->once())
            ->method('createDirectory')
            ->with('/some/path/csv_reports');

        \$this->filePathResolver->expects(\$this->once())
            ->method('move')
            ->with(\$filePath, '/some/path/csv_reports/report_33.zip');

        \$this->fileHandler->moveZipToPermanentLocation(\$report, \$filePath);
    }

    private function createTmpFile(string \$name = 'test.csv', string \$content = ''): string
    {
        \$filePath = sys_get_temp_dir().'/'.\$name;
        file_put_contents(\$filePath, \$content);

        return \$filePath;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Scheduler/Model/FileHandlerTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Scheduler/Model/FileHandlerTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Scheduler/Model/FileHandlerTest.php");
    }
}
