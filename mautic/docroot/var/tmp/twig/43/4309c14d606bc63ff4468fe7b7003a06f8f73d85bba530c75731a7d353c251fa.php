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

/* @bundles/ReportBundle/Tests/Scheduler/Factory/SchedulerTemplateFactoryTest.php */
class __TwigTemplate_d22f5fbdc36d37d19a7266070436082eb4f5adfbe5ef96e58b9e614016f0e064 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Scheduler\\Factory;

use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerDailyBuilder;
use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerMonthBuilder;
use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerNowBuilder;
use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerWeeklyBuilder;
use Mautic\\ReportBundle\\Scheduler\\Entity\\SchedulerEntity;
use Mautic\\ReportBundle\\Scheduler\\Enum\\SchedulerEnum;
use Mautic\\ReportBundle\\Scheduler\\Exception\\NotSupportedScheduleTypeException;
use Mautic\\ReportBundle\\Scheduler\\Factory\\SchedulerTemplateFactory;

class SchedulerTemplateFactoryTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNowBuilder()
    {
        \$schedulerEntity          = new SchedulerEntity(true, SchedulerEnum::UNIT_NOW, null, null);
        \$schedulerTemplateFactory = new SchedulerTemplateFactory();
        \$builder                  = \$schedulerTemplateFactory->getBuilder(\$schedulerEntity);

        \$this->assertInstanceOf(SchedulerNowBuilder::class, \$builder);
    }

    public function testDailyBuilder()
    {
        \$schedulerEntity          = new SchedulerEntity(true, SchedulerEnum::UNIT_DAILY, null, null);
        \$schedulerTemplateFactory = new SchedulerTemplateFactory();
        \$builder                  = \$schedulerTemplateFactory->getBuilder(\$schedulerEntity);

        \$this->assertInstanceOf(SchedulerDailyBuilder::class, \$builder);
    }

    public function testWeeklyBuilder()
    {
        \$schedulerEntity          = new SchedulerEntity(true, SchedulerEnum::UNIT_WEEKLY, null, null);
        \$schedulerTemplateFactory = new SchedulerTemplateFactory();
        \$builder                  = \$schedulerTemplateFactory->getBuilder(\$schedulerEntity);

        \$this->assertInstanceOf(SchedulerWeeklyBuilder::class, \$builder);
    }

    public function testMonthlyBuilder()
    {
        \$schedulerEntity          = new SchedulerEntity(true, SchedulerEnum::UNIT_MONTHLY, null, null);
        \$schedulerTemplateFactory = new SchedulerTemplateFactory();
        \$builder                  = \$schedulerTemplateFactory->getBuilder(\$schedulerEntity);

        \$this->assertInstanceOf(SchedulerMonthBuilder::class, \$builder);
    }

    public function testNotSupportedBuilder()
    {
        \$schedulerEntity          = new SchedulerEntity(true, 'xx', null, null);
        \$schedulerTemplateFactory = new SchedulerTemplateFactory();

        \$this->expectException(NotSupportedScheduleTypeException::class);
        \$schedulerTemplateFactory->getBuilder(\$schedulerEntity);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Scheduler/Factory/SchedulerTemplateFactoryTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Scheduler/Factory/SchedulerTemplateFactoryTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Scheduler/Factory/SchedulerTemplateFactoryTest.php");
    }
}
