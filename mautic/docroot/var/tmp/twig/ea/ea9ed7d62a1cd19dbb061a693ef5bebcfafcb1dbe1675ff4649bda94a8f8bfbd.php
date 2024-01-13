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

/* @bundles/ReportBundle/Scheduler/Entity/SchedulerEntity.php */
class __TwigTemplate_2ebbcd31dffc8bf61e82938d2b729391390298d3ba1f371b2f02a581684b6898 extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Entity;

use Mautic\\ReportBundle\\Scheduler\\Enum\\SchedulerEnum;
use Mautic\\ReportBundle\\Scheduler\\SchedulerInterface;

class SchedulerEntity implements SchedulerInterface
{
    /**
     * @var bool
     */
    private \$isScheduled = false;

    /**
     * @var string|null
     */
    private \$scheduleUnit;

    /**
     * @var string|null
     */
    private \$scheduleDay;

    /**
     * @var string|null
     */
    private \$scheduleMonthFrequency;

    public function __construct(\$isScheduled, \$scheduleUnit, \$scheduleDay, \$scheduleMonthFrequency)
    {
        \$this->isScheduled            = \$isScheduled;
        \$this->scheduleUnit           = \$scheduleUnit;
        \$this->scheduleDay            = \$scheduleDay;
        \$this->scheduleMonthFrequency = \$scheduleMonthFrequency;
    }

    /**
     * @return bool
     */
    public function isScheduled()
    {
        return \$this->isScheduled;
    }

    /**
     * @return string|null
     */
    public function getScheduleUnit()
    {
        return \$this->scheduleUnit;
    }

    /**
     * @return string|null
     */
    public function getScheduleDay()
    {
        return \$this->scheduleDay;
    }

    /**
     * @return string|null
     */
    public function getScheduleMonthFrequency()
    {
        return \$this->scheduleMonthFrequency;
    }

    public function isScheduledNow(): bool
    {
        return SchedulerEnum::UNIT_NOW === \$this->getScheduleUnit();
    }

    public function isScheduledDaily()
    {
        return SchedulerEnum::UNIT_DAILY === \$this->getScheduleUnit();
    }

    public function isScheduledWeekly()
    {
        return SchedulerEnum::UNIT_WEEKLY === \$this->getScheduleUnit();
    }

    public function isScheduledMonthly()
    {
        return SchedulerEnum::UNIT_MONTHLY === \$this->getScheduleUnit();
    }

    public function isScheduledWeekDays()
    {
        return SchedulerEnum::DAY_WEEK_DAYS === \$this->getScheduleDay();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Scheduler/Entity/SchedulerEntity.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Entity/SchedulerEntity.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Scheduler/Entity/SchedulerEntity.php");
    }
}
