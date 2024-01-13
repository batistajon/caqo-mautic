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

/* @bundles/ReportBundle/Tests/Model/ExcelExporterTest.php */
class __TwigTemplate_fd64696c1ddb5c09407b7b6c0711be1abdf2961d1a65bdade45e072de4f16adc extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Model;

use Mautic\\CoreBundle\\Templating\\Helper\\DateHelper;
use Mautic\\CoreBundle\\Templating\\Helper\\FormatterHelper;
use Mautic\\ReportBundle\\Model\\ExcelExporter;
use Mautic\\ReportBundle\\Tests\\Fixtures;
use PhpOffice\\PhpSpreadsheet\\IOFactory;
use PhpOffice\\PhpSpreadsheet\\Reader\\Xlsx;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\TranslatorInterface;

class ExcelExporterTest extends TestCase
{
    public function testExport(): void
    {
        \$dateHelperMock   = \$this->createMock(DateHelper::class);
        \$translator       = \$this->createMock(TranslatorInterface::class);
        \$formatterHelper  = new FormatterHelper(\$dateHelperMock, \$translator);
        \$reportDataResult = Fixtures::getValidReportResultWithAggregatedColumns();
        \$excelExporter    = new ExcelExporter(\$formatterHelper);

        \$tmpFile = tempnam(sys_get_temp_dir(), 'mautic_xlsx_export_test_');
        \$excelExporter->export(\$reportDataResult, 'mautic_xlsx_export_test', \$tmpFile);

        /** @var Xlsx \$objReader */
        \$objReader   = IOFactory::createReader('Xlsx');
        \$spreadsheet = \$objReader->load(\$tmpFile);
        \$result      = \$spreadsheet->getActiveSheet()->toArray();

        \$expected = [
            [
                'ID',
                'Name',
                'SUM Read',
                'COUNT Contact ID',
            ],
            [
                1,
                'Email 1',
                50,
                100,
            ],
            [
                2,
                'Email 2',
                10,
                60,
            ],
        ];

        \$this->assertSame(\$expected, \$result);

        if (file_exists(\$tmpFile)) {
            unlink(\$tmpFile);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Model/ExcelExporterTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Model/ExcelExporterTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Model/ExcelExporterTest.php");
    }
}
