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

/* @bundles/StatsBundle/Tests/Aggregate/Collection/CollectorTest.php */
class __TwigTemplate_b0638a97f68c213dd4a649cf428d2e97fb1de85ada171042cde605bd7ee055a7 extends Template
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

namespace Mautic\\StatsBundle\\Tests\\Aggregate\\Collection;

use Mautic\\StatsBundle\\Aggregate\\Collector;
use Mautic\\StatsBundle\\Event\\AggregateStatRequestEvent;
use Mautic\\StatsBundle\\StatEvents;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class CollectorTest extends TestCase
{
    /**
     * @var EventDispatcherInterface|\\PHPUnit_Framework_MockObject_MockObject
     */
    private \$eventDispatcher;

    protected function setUp(): void
    {
        \$this->eventDispatcher = new EventDispatcher();
    }

    public function testEventIsDispatched()
    {
        \$this->eventDispatcher->addListener(
            StatEvents::AGGREGATE_STAT_REQUEST,
            function (AggregateStatRequestEvent \$event) {
                \$statCollection = \$event->getStatCollection();

                \$statCollection->addStat(2018, 12, 7, 1, 100);
                \$statCollection->addStat(2018, 12, 7, 2, 110);
            }
        );

        \$statCollection = \$this->getCollector()->fetchStats('event-name', new \\DateTime(), new \\DateTime());
        \$stats          = \$statCollection->getStats();
        \$year           = \$stats->getYear(2018);

        \$this->assertEquals(210, \$year->getSum());
    }

    /**
     * @return Collector
     */
    private function getCollector()
    {
        return new Collector(\$this->eventDispatcher);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StatsBundle/Tests/Aggregate/Collection/CollectorTest.php";
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
        return new Source("", "@bundles/StatsBundle/Tests/Aggregate/Collection/CollectorTest.php", "/var/www/html/mautic/docroot/app/bundles/StatsBundle/Tests/Aggregate/Collection/CollectorTest.php");
    }
}
