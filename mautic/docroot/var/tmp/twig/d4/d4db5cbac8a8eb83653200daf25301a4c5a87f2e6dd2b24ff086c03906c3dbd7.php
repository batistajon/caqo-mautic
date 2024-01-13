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

/* @bundles/ReportBundle/Tests/Model/ReportExportOptionsTest.php */
class __TwigTemplate_8423143c259a237a8b85f80cd8510a894fb651c66232fa8be366904e0c3f7cc1 extends Template
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
use Mautic\\ReportBundle\\Model\\ReportExportOptions;

class ReportExportOptionsTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testBatch()
    {
        \$coreParametersHelper = \$this->getMockBuilder(CoreParametersHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('report_export_batch_size')
            ->willReturn(3);

        \$reportExportOptions = new ReportExportOptions(\$coreParametersHelper);

        \$this->assertSame(1, \$reportExportOptions->getPage());
        \$this->assertSame(3, \$reportExportOptions->getBatchSize());

        \$reportExportOptions->beginExport();
        \$this->assertSame(1, \$reportExportOptions->getPage());
        \$this->assertSame(3, \$reportExportOptions->getNumberOfProcessedResults());

        \$reportExportOptions->nextBatch();
        \$this->assertSame(2, \$reportExportOptions->getPage());
        \$this->assertSame(6, \$reportExportOptions->getNumberOfProcessedResults());

        \$reportExportOptions->nextBatch();
        \$this->assertSame(3, \$reportExportOptions->getPage());
        \$this->assertSame(9, \$reportExportOptions->getNumberOfProcessedResults());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Model/ReportExportOptionsTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Model/ReportExportOptionsTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Model/ReportExportOptionsTest.php");
    }
}
