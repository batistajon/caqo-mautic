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

/* @bundles/CoreBundle/Tests/Unit/Helper/Chart/LineChartTest.php */
class __TwigTemplate_15c225ecf7f20622284c4f6566f5fca3bd2a54c2e35cf789f5792fd7e79b96bd extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper\\Chart;

use Mautic\\CoreBundle\\Helper\\Chart\\LineChart;

class LineChartTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox The getUnitInterval returns the correct interval objects
     *
     * @covers \\Mautic\\CoreBundle\\Helper\\Chart\\LineChart::getUnitInterval
     */
    public function testGetUnitInterval()
    {
        \$units = [
            'Y' => new \\DateInterval('P1Y'),
            'm' => new \\DateInterval('P1M'),
            'W' => new \\DateInterval('P1W'),
            'd' => new \\DateInterval('P1D'),
            'H' => new \\DateInterval('PT1H'),
            'i' => new \\DateInterval('PT1M'),
            's' => new \\DateInterval('PT1S'),
        ];

        foreach (\$units as \$unit => \$expected) {
            \$chart    = new LineChart(\$unit, new \\DateTime(), new \\DateTime());
            \$interval = \$chart->getUnitInterval();
            \$this->assertEquals(\$expected, \$interval);
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/Chart/LineChartTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/Chart/LineChartTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/Chart/LineChartTest.php");
    }
}
