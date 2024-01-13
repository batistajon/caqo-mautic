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

/* @bundles/StatsBundle/Tests/Aggregate/Collection/Stats/DayStatTest.php */
class __TwigTemplate_018fcee5b183d764859d404e16c989545741c83430e39aaab58608404d362c25 extends Template
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
use Mautic\\StatsBundle\\Aggregate\\Collection\\Stats\\HourStat;
use PHPUnit\\Framework\\TestCase;

class DayStatTest extends TestCase
{
    private \$day  = '2019-11-07';
    private \$hour = 11;
    private \$dayStat;
    private \$hourStat;

    protected function setUp(): void
    {
        \$this->dayStat  = new DayStat(\$this->day);
        \$this->hourStat = \$this->dayStat->getHour(\$this->hour);
    }

    public function testGetHour()
    {
        \$this->assertInstanceOf(HourStat::class, \$this->hourStat);
        \$this->assertSame(\"\$this->day \$this->hour\", \$this->hourStat->getHour());
        \$this->assertSame(0, \$this->hourStat->getCount());

        \$this->hourStat = \$this->dayStat->getHour(\$this->hour);

        \$this->assertSame(\$this->hourStat, \$this->dayStat->getHour(\$this->hour));
        \$this->assertSame(\"\$this->day \$this->hour\", \$this->hourStat->getHour());
        \$this->assertSame(0, \$this->hourStat->getCount());
    }

    public function testGetStats()
    {
        \$result = \$this->dayStat->getStats();
        \$this->assertSame([\"\$this->day \$this->hour\" => \$this->hourStat], \$result);
    }

    public function testGetSum()
    {
        \$this->dayStat  = new DayStat(\$this->day);
        \$this->dayStat->getHour(\$this->hour);
        \$this->assertSame(1, \$this->dayStat->getCount());
        \$this->dayStat->getHour(\$this->hour);
        \$this->assertSame(1, \$this->dayStat->getCount());
        \$this->dayStat->getHour(\$this->hour + 1);
        \$this->assertSame(2, \$this->dayStat->getCount());
    }

    public function testGetCount()
    {
        \$this->dayStat  = new DayStat(\$this->day);
        \$this->dayStat->getHour(\$this->hour);
        \$this->assertSame(1, \$this->dayStat->getCount());
        \$this->dayStat->getHour(\$this->hour);
        \$this->assertSame(1, \$this->dayStat->getCount());
        \$this->dayStat->getHour(\$this->hour + 1);
        \$this->assertSame(2, \$this->dayStat->getCount());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StatsBundle/Tests/Aggregate/Collection/Stats/DayStatTest.php";
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
        return new Source("", "@bundles/StatsBundle/Tests/Aggregate/Collection/Stats/DayStatTest.php", "/var/www/html/mautic/docroot/app/bundles/StatsBundle/Tests/Aggregate/Collection/Stats/DayStatTest.php");
    }
}
