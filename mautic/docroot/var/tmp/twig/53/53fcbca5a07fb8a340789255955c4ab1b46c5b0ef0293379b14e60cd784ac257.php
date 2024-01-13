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

/* @bundles/StatsBundle/Tests/Aggregate/Collection/Stats/MonthStatTest.php */
class __TwigTemplate_ed918aac0fb032e83a49d7a7a229756d465d9bfa276f15ecf7eebfd1c0856af5 extends Template
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

use Mautic\\StatsBundle\\Aggregate\\Collection\\Stats\\DayStat;
use Mautic\\StatsBundle\\Aggregate\\Collection\\Stats\\MonthStat;
use PHPUnit\\Framework\\TestCase;

class MonthStatTest extends TestCase
{
    private \$month  = '2019-12';
    private \$day    = 11;
    private \$monthStat;
    private \$dayStat;

    protected function setUp(): void
    {
        \$this->monthStat = new MonthStat(\$this->month);
        \$this->dayStat   = \$this->monthStat->getDay(\$this->day);
    }

    public function testGetDay()
    {
        \$this->assertInstanceOf(DayStat::class, \$this->dayStat);
        \$day = \$this->monthStat->getDay(\$this->day);
        \$this->assertInstanceOf(DayStat::class, \$day);
        \$this->assertSame([], \$day->getStats());
        \$this->assertSame(1, \$this->monthStat->getCount());

        \$day = \$this->monthStat->getDay(\$this->day + 1);
        \$this->assertSame([], \$day->getStats());
        \$this->assertSame(2, \$this->monthStat->getCount());
    }

    public function testGetStats()
    {
        \$result = \$this->monthStat->getStats();
        \$this->assertSame([\"\$this->month-\$this->day\" => \$this->dayStat], \$result);
    }

    public function testGetSum()
    {
        \$this->monthStat  = new MonthStat(\$this->month);
        \$this->monthStat->getDay(\$this->day);
        \$this->assertSame(1, \$this->monthStat->getCount());
        \$this->monthStat->getDay(\$this->day);
        \$this->assertSame(1, \$this->monthStat->getCount());
        \$this->monthStat->getDay(\$this->day + 1);
        \$this->assertSame(2, \$this->monthStat->getCount());
    }

    public function testGetCount()
    {
        \$this->monthStat  = new MonthStat(\$this->month);
        \$this->monthStat->getDay(\$this->day);
        \$this->assertSame(1, \$this->monthStat->getCount());
        \$this->monthStat->getDay(\$this->day);
        \$this->assertSame(1, \$this->monthStat->getCount());
        \$this->monthStat->getDay(\$this->day + 1);
        \$this->assertSame(2, \$this->monthStat->getCount());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StatsBundle/Tests/Aggregate/Collection/Stats/MonthStatTest.php";
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
        return new Source("", "@bundles/StatsBundle/Tests/Aggregate/Collection/Stats/MonthStatTest.php", "/var/www/html/mautic/docroot/app/bundles/StatsBundle/Tests/Aggregate/Collection/Stats/MonthStatTest.php");
    }
}
