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

/* @bundles/ReportBundle/Tests/Model/CsvExporterTest.php */
class __TwigTemplate_7a27624bec0fea7340d3fd98e16cd2b42a1d459a5b2e6f4f47c0ff8743942bf0 extends Template
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
use Mautic\\CoreBundle\\Templating\\Helper\\DateHelper;
use Mautic\\CoreBundle\\Templating\\Helper\\FormatterHelper;
use Mautic\\ReportBundle\\Crate\\ReportDataResult;
use Mautic\\ReportBundle\\Model\\CsvExporter;
use Mautic\\ReportBundle\\Tests\\Fixtures;
use Symfony\\Component\\Translation\\TranslatorInterface;

class CsvExporterTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testExport()
    {
        \$dateHelperMock = \$this->createMock(DateHelper::class);

        \$dateHelperMock->expects(\$this->any())
            ->method('toFullConcat')
            ->willReturn('2017-10-01');

        \$translator = \$this->createMock(TranslatorInterface::class);

        \$coreParametersHelperMock = \$this->createMock(CoreParametersHelper::class);

        \$formatterHelperMock = new FormatterHelper(\$dateHelperMock, \$translator);

        \$reportDataResult = new ReportDataResult(Fixtures::getValidReportResult());

        \$csvExporter = new CsvExporter(\$formatterHelperMock, \$coreParametersHelperMock);

        \$tmpFile = tempnam(sys_get_temp_dir(), 'mautic_csv_export_test_');
        \$file    = fopen(\$tmpFile, 'w');

        \$csvExporter->export(\$reportDataResult, \$file);

        fclose(\$file);

        \$result = array_map('str_getcsv', file(\$tmpFile));

        \$expected = [
            [
                'City',
                'Company',
                'Country',
                'Date identified',
                'Email',
            ],
            [
                'City',
                '',
                '',
                '',
                '',
            ],
            [
                '',
                'Company',
                '',
                '',
                '',
            ],
            [
                '',
                '',
                'Country',
                '',
                '',
            ],
            [
                '',
                'ConnectWise',
                '',
                '2017-10-01',
                'connectwise@example.com',
            ],
            [
                '',
                '',
                '',
                '2017-10-01',
                'mytest@example.com',
            ],
            [
                '',
                '',
                '',
                '2017-10-01',
                'john@example.com',
            ],
            [
                '',
                '',
                '',
                '2017-10-01',
                'bogus@example.com',
            ],
            [
                '',
                '',
                '',
                '2017-10-01',
                'date-test@example.com',
            ],
            [
                '',
                'Bodega Club',
                '',
                '2017-10-01',
                'club@example.com',
            ],
            [
                '',
                '',
                '',
                '2017-10-01',
                'test@example.com',
            ],
            [
                '',
                '',
                '',
                '2017-10-01',
                'test@example.com',
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
        return "@bundles/ReportBundle/Tests/Model/CsvExporterTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Model/CsvExporterTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Model/CsvExporterTest.php");
    }
}
