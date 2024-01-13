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

/* @bundles/ReportBundle/Tests/Scheduler/Option/ExportOptionTest.php */
class __TwigTemplate_cb98127187a181abfc630acc27caecaaee00bf8bf4397e9f3fbc3a9ae2815184 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Scheduler\\Option;

use Mautic\\ReportBundle\\Scheduler\\Option\\ExportOption;

class ExportOptionTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testReportId()
    {
        \$exportOption = new ExportOption(11);

        \$this->assertSame(11, \$exportOption->getReportId());
    }

    public function testNoReportId()
    {
        \$exportOption = new ExportOption(null);

        \$this->assertSame(0, \$exportOption->getReportId());
    }

    public function testBadFormatOfId()
    {
        \$this->expectException(\\InvalidArgumentException::class);

        new ExportOption('string');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Scheduler/Option/ExportOptionTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Scheduler/Option/ExportOptionTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Scheduler/Option/ExportOptionTest.php");
    }
}
