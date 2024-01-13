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

/* @bundles/ReportBundle/Tests/Crate/ReportDataResultTest.php */
class __TwigTemplate_03e862ea893c33eea50b84ed388b38127df6eeed33bdb55d1ee94af2696736f4 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Crate;

use Mautic\\ReportBundle\\Crate\\ReportDataResult;
use Mautic\\ReportBundle\\Tests\\Fixtures;

class ReportDataResultTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testValidData()
    {
        \$reportDataResult = new ReportDataResult(Fixtures::getValidReportResult());

        \$this->assertSame(Fixtures::getValidReportData(), \$reportDataResult->getData());
        \$this->assertSame(Fixtures::getValidReportHeaders(), \$reportDataResult->getHeaders());
        \$this->assertSame(Fixtures::getValidReportTotalResult(), \$reportDataResult->getTotalResults());
        \$this->assertSame(Fixtures::getStringType(), \$reportDataResult->getType('city'));
        \$this->assertSame(Fixtures::getDateType(), \$reportDataResult->getType('date_identified'));
        \$this->assertSame(Fixtures::getEmailType(), \$reportDataResult->getType('email'));
    }

    public function testNoDataProvided()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        \$this->expectExceptionMessage(\"Keys 'data', 'dataColumns' and 'columns' have to be provided\");

        \$data = Fixtures::getValidReportResult();
        unset(\$data['data']);
        new ReportDataResult(\$data);
    }

    public function testNoDataColumnProvided()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        \$this->expectExceptionMessage(\"Keys 'data', 'dataColumns' and 'columns' have to be provided\");

        \$data = Fixtures::getValidReportResult();
        unset(\$data['dataColumns']);
        new ReportDataResult(\$data);
    }

    public function testNoColumnProvided()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        \$this->expectExceptionMessage(\"Keys 'data', 'dataColumns' and 'columns' have to be provided\");

        \$data = Fixtures::getValidReportResult();
        unset(\$data['columns']);
        new ReportDataResult(\$data);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Crate/ReportDataResultTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Crate/ReportDataResultTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Crate/ReportDataResultTest.php");
    }
}
