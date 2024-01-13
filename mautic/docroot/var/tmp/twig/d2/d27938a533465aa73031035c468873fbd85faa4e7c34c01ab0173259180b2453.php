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

/* @bundles/ReportBundle/Scheduler/SchedulerInterface.php */
class __TwigTemplate_492ad35328778286bb5edd1e4265366546fe7e97466ce3c92337699521aa694a extends Template
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

namespace Mautic\\ReportBundle\\Scheduler;

interface SchedulerInterface
{
    public function isScheduled();

    public function isScheduledNow(): bool;

    public function isScheduledDaily();

    public function isScheduledWeekly();

    public function isScheduledMonthly();

    public function isScheduledWeekDays();

    public function getScheduleDay();

    public function getScheduleMonthFrequency();
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Scheduler/SchedulerInterface.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/SchedulerInterface.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Scheduler/SchedulerInterface.php");
    }
}
