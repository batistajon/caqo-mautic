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

/* @bundles/StatsBundle/Tests/Aggregate/Collection/Stats/WeekStatTest.php */
class __TwigTemplate_983586475b5aed745cba1442c1e188dc014ef36e218a562b5a20aa549b6d26da extends Template
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

use Mautic\\StatsBundle\\Aggregate\\Collection\\Stats\\WeekStat;
use PHPUnit\\Framework\\TestCase;

class WeekStatTest extends TestCase
{
    public function testAll()
    {
        \$weekStat = new WeekStat();
        \$this->assertSame(0, \$weekStat->getCount());
        \$count = 1;
        \$weekStat->setCount(\$count);
        \$this->assertSame(\$count, \$weekStat->getCount());
        \$weekStat->addToCount(\$count);
        \$this->assertSame(\$count * 2, \$weekStat->getCount());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StatsBundle/Tests/Aggregate/Collection/Stats/WeekStatTest.php";
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
        return new Source("", "@bundles/StatsBundle/Tests/Aggregate/Collection/Stats/WeekStatTest.php", "/var/www/html/mautic/docroot/app/bundles/StatsBundle/Tests/Aggregate/Collection/Stats/WeekStatTest.php");
    }
}
