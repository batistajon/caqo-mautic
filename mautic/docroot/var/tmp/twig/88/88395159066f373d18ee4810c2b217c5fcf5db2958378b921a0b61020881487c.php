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

/* @bundles/ReportBundle/Scheduler/Validator/ScheduleIsValidValidator.php */
class __TwigTemplate_e632cea6811d082764c548c29c6af5fe30bcf7c566dea6199c5c68dc24d08f5d extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Validator;

use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerBuilder;
use Mautic\\ReportBundle\\Scheduler\\Exception\\InvalidSchedulerException;
use Mautic\\ReportBundle\\Scheduler\\Exception\\NotSupportedScheduleTypeException;
use Mautic\\ReportBundle\\Scheduler\\Exception\\ScheduleNotValidException;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;

class ScheduleIsValidValidator extends ConstraintValidator
{
    /**
     * @var SchedulerBuilder
     */
    private \$schedulerBuilder;

    public function __construct(SchedulerBuilder \$schedulerBuilder)
    {
        \$this->schedulerBuilder = \$schedulerBuilder;
    }

    /**
     * @param Report \$report
     */
    public function validate(\$report, Constraint \$constraint)
    {
        if (!\$report->isScheduled()) {
            \$report->setAsNotScheduled();

            return;
        }

        if (is_null(\$report->getToAddress())) {
            \$this->context->buildViolation('mautic.report.schedule.to_address_required')
                ->atPath('toAddress')
                ->addViolation();
        }

        if (\$report->isScheduledDaily()) {
            \$report->ensureIsDailyScheduled();
            \$this->buildScheduler(\$report);

            return;
        }
        if (\$report->isScheduledWeekly()) {
            try {
                \$report->ensureIsWeeklyScheduled();
                \$this->buildScheduler(\$report);

                return;
            } catch (ScheduleNotValidException \$e) {
                \$this->addReportScheduleNotValidViolation();
            }
        }
        if (\$report->isScheduledMonthly()) {
            try {
                \$report->ensureIsMonthlyScheduled();
                \$this->buildScheduler(\$report);

                return;
            } catch (ScheduleNotValidException \$e) {
                \$this->addReportScheduleNotValidViolation();
            }
        }
    }

    private function addReportScheduleNotValidViolation()
    {
        \$this->context->buildViolation('mautic.report.schedule.notValid')
            ->atPath('isScheduled')
            ->addViolation();
    }

    private function buildScheduler(Report \$report)
    {
        try {
            \$this->schedulerBuilder->getNextEvent(\$report);

            return;
        } catch (InvalidSchedulerException \$e) {
            \$message = 'mautic.report.schedule.notValid';
        } catch (NotSupportedScheduleTypeException \$e) {
            \$message = 'mautic.report.schedule.notSupportedType';
        }

        \$this->context->buildViolation(\$message)
            ->atPath('isScheduled')
            ->addViolation();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Scheduler/Validator/ScheduleIsValidValidator.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Validator/ScheduleIsValidValidator.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Scheduler/Validator/ScheduleIsValidValidator.php");
    }
}
