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

/* @bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerMonthBuilderTest.php */
class __TwigTemplate_4ba07a0f62d19bf2bd8106198de262fc474038d49dae153b601d0443c0724ba2 extends Template
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

use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerMonthBuilder;
use Mautic\\ReportBundle\\Scheduler\\Entity\\SchedulerEntity;
use Mautic\\ReportBundle\\Scheduler\\Enum\\SchedulerEnum;
use Mautic\\ReportBundle\\Scheduler\\Exception\\InvalidSchedulerException;
use Recurr\\Exception\\InvalidArgument;
use Recurr\\Rule;

class SchedulerMonthBuilderTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testBuilEvent()
    {
        \$schedulerDailyBuilder = new SchedulerMonthBuilder();

        \$schedulerEntity = new SchedulerEntity(true, SchedulerEnum::UNIT_DAILY, SchedulerEnum::DAY_MO, SchedulerEnum::MONTH_FREQUENCY_FIRST);

        \$startDate = (new \\DateTime())->setTime(0, 0)->modify('+1 day');
        \$rule      = new Rule();
        \$rule->setStartDate(\$startDate)
            ->setCount(1);

        \$schedulerDailyBuilder->build(\$rule, \$schedulerEntity);

        \$this->assertEquals(Rule::\$freqs['MONTHLY'], \$rule->getFreq());
        \$this->assertEquals(['1MO'], \$rule->getByDay());
    }

    public function testBuilEventFails()
    {
        \$schedulerDailyBuilder = new SchedulerMonthBuilder();

        \$schedulerEntity = new SchedulerEntity(true, SchedulerEnum::UNIT_DAILY, null, null);

        \$rule = \$this->getMockBuilder(Rule::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$rule->expects(\$this->once())
            ->method('setFreq')
            ->with('MONTHLY')
            ->willThrowException(new InvalidArgument());

        \$this->expectException(InvalidSchedulerException::class);

        \$schedulerDailyBuilder->build(\$rule, \$schedulerEntity);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerMonthBuilderTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerMonthBuilderTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerMonthBuilderTest.php");
    }
}
