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

/* @bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerDailyBuilderTest.php */
class __TwigTemplate_421d8d7e0ffe1b457dba6fc31578cdfcc8d03f9e85bc40bc4179e107eed003c8 extends Template
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

use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerDailyBuilder;
use Mautic\\ReportBundle\\Scheduler\\Entity\\SchedulerEntity;
use Mautic\\ReportBundle\\Scheduler\\Enum\\SchedulerEnum;
use Mautic\\ReportBundle\\Scheduler\\Exception\\InvalidSchedulerException;
use Recurr\\Exception\\InvalidArgument;
use Recurr\\Rule;

class SchedulerDailyBuilderTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testBuilEvent()
    {
        \$schedulerDailyBuilder = new SchedulerDailyBuilder();

        \$schedulerEntity = new SchedulerEntity(true, SchedulerEnum::UNIT_DAILY, null, null);

        \$startDate = (new \\DateTime())->setTime(0, 0)->modify('+1 day');
        \$rule      = new Rule();
        \$rule->setStartDate(\$startDate)
            ->setCount(1);

        \$schedulerDailyBuilder->build(\$rule, \$schedulerEntity);

        \$this->assertEquals(Rule::\$freqs['DAILY'], \$rule->getFreq());
    }

    public function testBuilEventFails()
    {
        \$schedulerDailyBuilder = new SchedulerDailyBuilder();

        \$schedulerEntity = new SchedulerEntity(true, SchedulerEnum::UNIT_DAILY, null, null);

        \$rule = \$this->getMockBuilder(Rule::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$rule->expects(\$this->once())
            ->method('setFreq')
            ->with('DAILY')
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
        return "@bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerDailyBuilderTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerDailyBuilderTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerDailyBuilderTest.php");
    }
}
