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

/* @bundles/StatsBundle/Tests/Aggregate/Collection/Stats/HourStatTest.php */
class __TwigTemplate_aa8abf95e83807357643616ca7fb330c501bdfa567ddd5f2c2cf3f523c82e533 extends Template
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

use Mautic\\StatsBundle\\Aggregate\\Collection\\Stats\\HourStat;
use PHPUnit\\Framework\\TestCase;

class HourStatTest extends TestCase
{
    public function testAll()
    {
        \$hour     = '2018-12-07 12';
        \$hourStat = new HourStat('2018-12-07 12');
        \$this->assertSame(\$hour, \$hourStat->getHour());

        // Counts
        \$this->assertSame(0, \$hourStat->getCount());
        \$count = 1;
        \$hourStat->setCount(\$count);
        \$this->assertSame(\$count, \$hourStat->getCount());
        \$count = 2;
        \$hourStat->setCount(\$count);
        \$this->assertSame(\$count, \$hourStat->getCount());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StatsBundle/Tests/Aggregate/Collection/Stats/HourStatTest.php";
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
        return new Source("", "@bundles/StatsBundle/Tests/Aggregate/Collection/Stats/HourStatTest.php", "/var/www/html/mautic/docroot/app/bundles/StatsBundle/Tests/Aggregate/Collection/Stats/HourStatTest.php");
    }
}
