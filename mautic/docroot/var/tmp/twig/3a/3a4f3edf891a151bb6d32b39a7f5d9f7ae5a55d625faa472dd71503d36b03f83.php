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

/* @bundles/ReportBundle/Tests/Scheduler/Validator/ScheduleIsValidValidatorTest.php */
class __TwigTemplate_854d38a844530596f19cf5bb3fec426f2bf6e8319ad724022df2bb4efba78a83 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Scheduler\\Validator;

use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerBuilder;
use Mautic\\ReportBundle\\Scheduler\\Enum\\SchedulerEnum;
use Mautic\\ReportBundle\\Scheduler\\Exception\\InvalidSchedulerException;
use Mautic\\ReportBundle\\Scheduler\\Exception\\NotSupportedScheduleTypeException;
use Mautic\\ReportBundle\\Scheduler\\Validator\\ScheduleIsValidValidator;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface;

class ScheduleIsValidValidatorTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNoSchedule()
    {
        \$schedulerBuilderMock = \$this->getMockBuilder(SchedulerBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$constraintMock = \$this->getMockBuilder(Constraint::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$scheduleIsValidValidator = new ScheduleIsValidValidator(\$schedulerBuilderMock);

        \$report = \$this->getMockBuilder(Report::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$report->expects(\$this->once())
            ->method('isScheduled')
            ->with()
            ->willReturn(false);

        \$report->expects(\$this->once())
            ->method('setAsNotScheduled')
            ->with();

        \$schedulerBuilderMock->expects(\$this->never())
            ->method('getNextEvent');

        \$scheduleIsValidValidator->validate(\$report, \$constraintMock);
    }

    public function testNoEmailProvided()
    {
        \$schedulerBuilderMock = \$this->getMockBuilder(SchedulerBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$constraintMock = \$this->getMockBuilder(Constraint::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$executionContextInterfaceMock = \$this->getMockBuilder(ExecutionContextInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$constraintViolationBuilderInterfaceMock = \$this->getMockBuilder(ConstraintViolationBuilderInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$executionContextInterfaceMock->expects(\$this->once())
            ->method('buildViolation')
            ->willReturn(\$constraintViolationBuilderInterfaceMock);

        \$constraintViolationBuilderInterfaceMock->expects(\$this->once())
            ->method('atPath')
            ->with('toAddress')
            ->willReturn(\$constraintViolationBuilderInterfaceMock);

        \$constraintViolationBuilderInterfaceMock->expects(\$this->once())
            ->method('addViolation')
            ->with();

        \$scheduleIsValidValidator = new ScheduleIsValidValidator(\$schedulerBuilderMock);
        \$scheduleIsValidValidator->initialize(\$executionContextInterfaceMock);

        \$report = new Report();
        \$report->setIsScheduled(true);
        \$report->setToAddress(null);

        \$schedulerBuilderMock->expects(\$this->never())
            ->method('getNextEvent');

        \$scheduleIsValidValidator->validate(\$report, \$constraintMock);
    }

    public function testValidDailySchedule()
    {
        \$schedulerBuilderMock = \$this->getMockBuilder(SchedulerBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$constraintMock = \$this->getMockBuilder(Constraint::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$scheduleIsValidValidator = new ScheduleIsValidValidator(\$schedulerBuilderMock);

        \$report = new Report();
        \$report->setIsScheduled(true);
        \$report->setToAddress('xxx');
        \$report->setScheduleUnit(SchedulerEnum::UNIT_DAILY);
        \$report->setScheduleDay('day');
        \$report->setScheduleMonthFrequency('frequency');

        \$schedulerBuilderMock->expects(\$this->once())
            ->method('getNextEvent')
            ->with(\$report);

        \$scheduleIsValidValidator->validate(\$report, \$constraintMock);

        \$this->assertTrue(\$report->isScheduled());
        \$this->assertSame('xxx', \$report->getToAddress());
        \$this->assertSame('DAILY', \$report->getScheduleUnit());
        \$this->assertNull(\$report->getScheduleDay());
        \$this->assertNull(\$report->getScheduleMonthFrequency());
    }

    public function testValidWeeklySchedule()
    {
        \$schedulerBuilderMock = \$this->getMockBuilder(SchedulerBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$constraintMock = \$this->getMockBuilder(Constraint::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$scheduleIsValidValidator = new ScheduleIsValidValidator(\$schedulerBuilderMock);

        \$report = new Report();
        \$report->setIsScheduled(true);
        \$report->setToAddress('xxx');
        \$report->setScheduleUnit(SchedulerEnum::UNIT_WEEKLY);
        \$report->setScheduleDay(SchedulerEnum::DAY_MO);
        \$report->setScheduleMonthFrequency('frequency');

        \$schedulerBuilderMock->expects(\$this->once())
            ->method('getNextEvent')
            ->with(\$report);

        \$scheduleIsValidValidator->validate(\$report, \$constraintMock);

        \$this->assertTrue(\$report->isScheduled());
        \$this->assertSame('xxx', \$report->getToAddress());
        \$this->assertSame('WEEKLY', \$report->getScheduleUnit());
        \$this->assertSame('MO', \$report->getScheduleDay());
        \$this->assertNull(\$report->getScheduleMonthFrequency());
    }

    public function testValidMonthlySchedule()
    {
        \$schedulerBuilderMock = \$this->getMockBuilder(SchedulerBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$constraintMock = \$this->getMockBuilder(Constraint::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$scheduleIsValidValidator = new ScheduleIsValidValidator(\$schedulerBuilderMock);

        \$report = new Report();
        \$report->setIsScheduled(true);
        \$report->setToAddress('xxx');
        \$report->setScheduleUnit(SchedulerEnum::UNIT_MONTHLY);
        \$report->setScheduleDay(SchedulerEnum::DAY_MO);
        \$report->setScheduleMonthFrequency(SchedulerEnum::MONTH_FREQUENCY_FIRST);

        \$schedulerBuilderMock->expects(\$this->once())
            ->method('getNextEvent')
            ->with(\$report);

        \$scheduleIsValidValidator->validate(\$report, \$constraintMock);

        \$this->assertTrue(\$report->isScheduled());
        \$this->assertSame('xxx', \$report->getToAddress());
        \$this->assertSame('MONTHLY', \$report->getScheduleUnit());
        \$this->assertSame('MO', \$report->getScheduleDay());
        \$this->assertSame('1', \$report->getScheduleMonthFrequency());
    }

    public function testInvalidScheduler()
    {
        \$schedulerBuilderMock = \$this->getMockBuilder(SchedulerBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$constraintMock = \$this->getMockBuilder(Constraint::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$executionContextInterfaceMock = \$this->getMockBuilder(ExecutionContextInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$constraintViolationBuilderInterfaceMock = \$this->getMockBuilder(ConstraintViolationBuilderInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$executionContextInterfaceMock->expects(\$this->once())
            ->method('buildViolation')
            ->with('mautic.report.schedule.notValid')
            ->willReturn(\$constraintViolationBuilderInterfaceMock);

        \$constraintViolationBuilderInterfaceMock->expects(\$this->once())
            ->method('atPath')
            ->with('isScheduled')
            ->willReturn(\$constraintViolationBuilderInterfaceMock);

        \$constraintViolationBuilderInterfaceMock->expects(\$this->once())
            ->method('addViolation')
            ->with();

        \$schedulerBuilderMock->expects(\$this->never())
            ->method('getNextEvent');

        \$scheduleIsValidValidator = new ScheduleIsValidValidator(\$schedulerBuilderMock);
        \$scheduleIsValidValidator->initialize(\$executionContextInterfaceMock);

        \$report = new Report();
        \$report->setIsScheduled(true);
        \$report->setToAddress('xxx');
        \$report->setScheduleUnit(SchedulerEnum::UNIT_MONTHLY);
        \$report->setScheduleDay(SchedulerEnum::DAY_MO);
        \$report->setScheduleMonthFrequency('Invalid frequency');

        \$scheduleIsValidValidator->validate(\$report, \$constraintMock);
    }

    public function testInvalidEvent()
    {
        \$schedulerBuilderMock = \$this->getMockBuilder(SchedulerBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$constraintMock = \$this->getMockBuilder(Constraint::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$executionContextInterfaceMock = \$this->getMockBuilder(ExecutionContextInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$constraintViolationBuilderInterfaceMock = \$this->getMockBuilder(ConstraintViolationBuilderInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$executionContextInterfaceMock->expects(\$this->once())
            ->method('buildViolation')
            ->with('mautic.report.schedule.notValid')
            ->willReturn(\$constraintViolationBuilderInterfaceMock);

        \$constraintViolationBuilderInterfaceMock->expects(\$this->once())
            ->method('atPath')
            ->with('isScheduled')
            ->willReturn(\$constraintViolationBuilderInterfaceMock);

        \$constraintViolationBuilderInterfaceMock->expects(\$this->once())
            ->method('addViolation')
            ->with();

        \$scheduleIsValidValidator = new ScheduleIsValidValidator(\$schedulerBuilderMock);
        \$scheduleIsValidValidator->initialize(\$executionContextInterfaceMock);

        \$report = new Report();
        \$report->setIsScheduled(true);
        \$report->setToAddress('xxx');
        \$report->setScheduleUnit(SchedulerEnum::UNIT_MONTHLY);
        \$report->setScheduleDay(SchedulerEnum::DAY_MO);
        \$report->setScheduleMonthFrequency(SchedulerEnum::MONTH_FREQUENCY_FIRST);

        \$schedulerBuilderMock->expects(\$this->once())
            ->method('getNextEvent')
            ->with(\$report)
            ->willThrowException(new InvalidSchedulerException());

        \$scheduleIsValidValidator->validate(\$report, \$constraintMock);
    }

    public function testNotSupportedScheduleType()
    {
        \$schedulerBuilderMock = \$this->getMockBuilder(SchedulerBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$constraintMock = \$this->getMockBuilder(Constraint::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$executionContextInterfaceMock = \$this->getMockBuilder(ExecutionContextInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$constraintViolationBuilderInterfaceMock = \$this->getMockBuilder(ConstraintViolationBuilderInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$executionContextInterfaceMock->expects(\$this->once())
            ->method('buildViolation')
            ->with('mautic.report.schedule.notSupportedType')
            ->willReturn(\$constraintViolationBuilderInterfaceMock);

        \$constraintViolationBuilderInterfaceMock->expects(\$this->once())
            ->method('atPath')
            ->with('isScheduled')
            ->willReturn(\$constraintViolationBuilderInterfaceMock);

        \$constraintViolationBuilderInterfaceMock->expects(\$this->once())
            ->method('addViolation')
            ->with();

        \$scheduleIsValidValidator = new ScheduleIsValidValidator(\$schedulerBuilderMock);
        \$scheduleIsValidValidator->initialize(\$executionContextInterfaceMock);

        \$report = new Report();
        \$report->setIsScheduled(true);
        \$report->setToAddress('xxx');
        \$report->setScheduleUnit(SchedulerEnum::UNIT_MONTHLY);
        \$report->setScheduleDay(SchedulerEnum::DAY_MO);
        \$report->setScheduleMonthFrequency(SchedulerEnum::MONTH_FREQUENCY_FIRST);

        \$schedulerBuilderMock->expects(\$this->once())
            ->method('getNextEvent')
            ->with(\$report)
            ->willThrowException(new NotSupportedScheduleTypeException());

        \$scheduleIsValidValidator->validate(\$report, \$constraintMock);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Scheduler/Validator/ScheduleIsValidValidatorTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Scheduler/Validator/ScheduleIsValidValidatorTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Scheduler/Validator/ScheduleIsValidValidatorTest.php");
    }
}
