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

/* @bundles/ReportBundle/Tests/Entity/ReportTest.php */
class __TwigTemplate_e4a2d4dcdd97a4cc549772b724c21d577e53984505cc66abc8ebe7fca217aa32 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Entity;

use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Scheduler\\Enum\\SchedulerEnum;
use Mautic\\ReportBundle\\Scheduler\\Exception\\ScheduleNotValidException;

class ReportTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNotScheduled()
    {
        \$report = \$this->getInvalidReport();

        \$report->setAsNotScheduled();

        \$this->assertFalse(\$report->isScheduled());
        \$this->assertNull(\$report->getToAddress());
        \$this->assertNull(\$report->getScheduleUnit());
        \$this->assertNull(\$report->getScheduleDay());
        \$this->assertNull(\$report->getScheduleMonthFrequency());
    }

    public function testDailyScheduled()
    {
        \$report = \$this->getInvalidReport();

        \$report->ensureIsDailyScheduled();

        \$this->assertTrue(\$report->isScheduled());
        \$this->assertSame('xxx', \$report->getToAddress());
        \$this->assertSame('DAILY', \$report->getScheduleUnit());
        \$this->assertNull(\$report->getScheduleDay());
        \$this->assertNull(\$report->getScheduleMonthFrequency());
    }

    public function testWeeklyScheduled()
    {
        \$report = \$this->getInvalidReport();
        \$report->setScheduleDay('WEEK_DAYS');

        \$report->ensureIsWeeklyScheduled();
        \$this->assertTrue(\$report->isScheduled());
        \$this->assertSame('xxx', \$report->getToAddress());
        \$this->assertSame(SchedulerEnum::UNIT_WEEKLY, \$report->getScheduleUnit());
        \$this->assertSame(SchedulerEnum::DAY_WEEK_DAYS, \$report->getScheduleDay());
        \$this->assertNull(\$report->getScheduleMonthFrequency());
    }

    public function testMonthlyScheduled()
    {
        \$report = \$this->getInvalidReport();
        \$report->setScheduleDay('WEEK_DAYS');
        \$report->setScheduleMonthFrequency('-1');

        \$report->ensureIsMonthlyScheduled();
        \$this->assertTrue(\$report->isScheduled());
        \$this->assertSame('xxx', \$report->getToAddress());
        \$this->assertSame(SchedulerEnum::UNIT_MONTHLY, \$report->getScheduleUnit());
        \$this->assertSame(SchedulerEnum::DAY_WEEK_DAYS, \$report->getScheduleDay());
        \$this->assertSame(SchedulerEnum::MONTH_FREQUENCY_LAST, \$report->getScheduleMonthFrequency());
    }

    public function testInvalidMonthlyScheduled()
    {
        \$this->expectException(ScheduleNotValidException::class);

        \$report = \$this->getInvalidReport();
        \$report->ensureIsMonthlyScheduled();
    }

    public function testInvalidWeeklyScheduled()
    {
        \$this->expectException(ScheduleNotValidException::class);

        \$report = \$this->getInvalidReport();
        \$report->ensureIsWeeklyScheduled();
    }

    public function testGetFilterValueIfFIltersAreEmpty()
    {
        \$report = \$this->getInvalidReport();

        \$this->expectException(\\UnexpectedValueException::class);
        \$this->assertSame('1234', \$report->getFilterValue('e.test'));
    }

    public function testGetFilterValueIfExists()
    {
        \$report = \$this->getInvalidReport();
        \$report->setFilters([
            [
                'column' => 'e.test',
                'value'  => '1234',
            ],
        ]);

        \$this->assertSame('1234', \$report->getFilterValue('e.test'));
    }

    public function testGetFilterValueIfDoesNotExist()
    {
        \$report = \$this->getInvalidReport();
        \$report->setFilters([
            [
                'column' => 'e.test',
                'value'  => '1234',
            ],
        ]);

        \$this->expectException(\\UnexpectedValueException::class);
        \$report->getFilterValue('I need coffee');
    }

    public function testSetAsScheduledNow()
    {
        \$email  = 'john@doe.email';
        \$report = new Report();
        \$report->setAsScheduledNow(\$email);

        \$this->assertTrue(\$report->isScheduled());
        \$this->assertSame(\$email, \$report->getToAddress());
        \$this->assertSame(SchedulerEnum::UNIT_NOW, \$report->getScheduleUnit());
    }

    public function testIsScheduledNowIfNot()
    {
        \$report = new Report();

        \$this->assertFalse(\$report->isScheduledNow());

        \$report->setScheduleUnit(SchedulerEnum::UNIT_NOW);

        \$this->assertTrue(\$report->isScheduledNow());
    }

    /**
     * @return Report
     */
    private function getInvalidReport()
    {
        \$report = new Report();
        \$report->setIsScheduled(true);
        \$report->setToAddress('xxx');
        \$report->setScheduleUnit('unit');
        \$report->setScheduleDay('day');
        \$report->setScheduleMonthFrequency('frequency');

        return \$report;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Entity/ReportTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Entity/ReportTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Entity/ReportTest.php");
    }
}
