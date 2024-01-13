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

/* @bundles/StatsBundle/Tests/Aggregate/Collection/Stats/YearStatTest.php */
class __TwigTemplate_10fad74aece6a43813a9e1b775c493cccf7945091c505bcc840e43124e9fc7e3 extends Template
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

namespace Mautic\\StatsBundle\\Tests\\Aggregate\\Collection\\Stats;

use Mautic\\StatsBundle\\Aggregate\\Collection\\Stats\\MonthStat;
use Mautic\\StatsBundle\\Aggregate\\Collection\\Stats\\YearStat;
use PHPUnit\\Framework\\TestCase;

class YearStatTest extends TestCase
{
    private \$year     = '2019';
    private \$month    = 11;
    private \$yearStat;
    private \$monthStat;

    protected function setUp(): void
    {
        \$this->yearStat  = new YearStat(\$this->year);
        \$this->monthStat = \$this->yearStat->getMonth(\$this->month);
    }

    public function testGetMonth()
    {
        \$this->assertInstanceOf(MonthStat::class, \$this->monthStat);
        \$month = \$this->yearStat->getMonth(\$this->month);
        \$this->assertInstanceOf(MonthStat::class, \$month);
        \$this->assertSame([], \$month->getStats());
        \$this->assertSame(1, \$this->yearStat->getCount());

        \$month = \$this->yearStat->getMonth(\$this->month + 1);
        \$this->assertSame([], \$month->getStats());
        \$this->assertSame(2, \$this->yearStat->getCount());
    }

    public function testGetStats()
    {
        \$result = \$this->yearStat->getStats();
        \$this->assertSame([\"\$this->year-\$this->month\" => \$this->monthStat], \$result);
    }

    public function testGetSum()
    {
        \$this->yearStat  = new YearStat(\$this->year);
        \$this->yearStat->getMonth(\$this->month);
        \$this->assertSame(1, \$this->yearStat->getCount());
        \$this->yearStat->getMonth(\$this->month);
        \$this->assertSame(1, \$this->yearStat->getCount());
        \$this->yearStat->getMonth(\$this->month + 1);
        \$this->assertSame(2, \$this->yearStat->getCount());
    }

    public function testGetCount()
    {
        \$this->yearStat  = new YearStat(\$this->year);
        \$this->yearStat->getMonth(\$this->month);
        \$this->assertSame(1, \$this->yearStat->getCount());
        \$this->yearStat->getMonth(\$this->month);
        \$this->assertSame(1, \$this->yearStat->getCount());
        \$this->yearStat->getMonth(\$this->month + 1);
        \$this->assertSame(2, \$this->yearStat->getCount());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StatsBundle/Tests/Aggregate/Collection/Stats/YearStatTest.php";
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
        return new Source("", "@bundles/StatsBundle/Tests/Aggregate/Collection/Stats/YearStatTest.php", "/var/www/html/mautic/docroot/app/bundles/StatsBundle/Tests/Aggregate/Collection/Stats/YearStatTest.php");
    }
}
