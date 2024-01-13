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

/* @bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerBuilderTest.php */
class __TwigTemplate_3ebd886752fcff16f918eb14d2336df414eb0b30a83303237ad7fe7516334fdc extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Scheduler\\Builder;

use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerBuilder;
use Mautic\\ReportBundle\\Scheduler\\Entity\\SchedulerEntity;
use Mautic\\ReportBundle\\Scheduler\\Enum\\SchedulerEnum;
use Mautic\\ReportBundle\\Scheduler\\Exception\\InvalidSchedulerException;
use Mautic\\ReportBundle\\Scheduler\\Factory\\SchedulerTemplateFactory;
use Recurr\\Recurrence;
use Recurr\\RecurrenceCollection;

class SchedulerBuilderTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGetNextEvent()
    {
        \$schedulerTemplateFactory = new SchedulerTemplateFactory();
        \$schedulerBuilder         = new SchedulerBuilder(\$schedulerTemplateFactory);

        \$schedulerEntity = new SchedulerEntity(true, SchedulerEnum::UNIT_DAILY, null, null);

        \$events = \$schedulerBuilder->getNextEvent(\$schedulerEntity);

        \$this->assertInstanceOf(RecurrenceCollection::class, \$events);

        \$event = \$events[0];
        \$this->assertInstanceOf(Recurrence::class, \$event);

        \$expectedDate = (new \\DateTime())->setTime(0, 0)->modify('+1 day');
        \$this->assertEquals(\$expectedDate, \$event->getStart());
    }

    public function testGetNextEvents()
    {
        \$schedulerTemplateFactory = new SchedulerTemplateFactory();
        \$schedulerBuilder         = new SchedulerBuilder(\$schedulerTemplateFactory);

        \$schedulerEntity = new SchedulerEntity(true, SchedulerEnum::UNIT_DAILY, null, null);

        \$events = \$schedulerBuilder->getNextEvents(\$schedulerEntity, 3);

        \$this->assertInstanceOf(RecurrenceCollection::class, \$events);

        \$event = \$events[0];
        \$this->assertInstanceOf(Recurrence::class, \$event);

        \$expectedDate = (new \\DateTime())->setTime(0, 0)->modify('+1 day');
        \$this->assertEquals(\$expectedDate, \$event->getStart());

        \$event = \$events[1];
        \$expectedDate->modify('+1 day');
        \$this->assertEquals(\$expectedDate, \$event->getStart());

        \$event = \$events[2];
        \$expectedDate->modify('+1 day');
        \$this->assertEquals(\$expectedDate, \$event->getStart());
    }

    public function testNoScheduler()
    {
        \$schedulerTemplateFactory = new SchedulerTemplateFactory();
        \$schedulerBuilder         = new SchedulerBuilder(\$schedulerTemplateFactory);

        \$SchedulerEntity = new SchedulerEntity(false, SchedulerEnum::UNIT_DAILY, null, null);

        \$this->expectException(InvalidSchedulerException::class);

        \$schedulerBuilder->getNextEvent(\$SchedulerEntity);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerBuilderTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerBuilderTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerBuilderTest.php");
    }
}
