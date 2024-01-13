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

/* @bundles/ReportBundle/Scheduler/Builder/SchedulerWeeklyBuilder.php */
class __TwigTemplate_50c605ae6d7559b168f43267170f940ab19886395111a8260b31b535c7222ec1 extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Builder;

use Mautic\\ReportBundle\\Scheduler\\BuilderInterface;
use Mautic\\ReportBundle\\Scheduler\\Enum\\SchedulerEnum;
use Mautic\\ReportBundle\\Scheduler\\Exception\\InvalidSchedulerException;
use Mautic\\ReportBundle\\Scheduler\\SchedulerInterface;
use Recurr\\Exception\\InvalidArgument;
use Recurr\\Exception\\InvalidRRule;
use Recurr\\Rule;

class SchedulerWeeklyBuilder implements BuilderInterface
{
    /**
     * @return Rule
     *
     * @throws InvalidSchedulerException
     */
    public function build(Rule \$rule, SchedulerInterface \$scheduler)
    {
        try {
            \$rule->setFreq('WEEKLY');

            if (\$scheduler->isScheduledWeekDays()) {
                \$days = SchedulerEnum::getWeekDays();
            } else {
                \$days = [\$scheduler->getScheduleDay()];
            }

            \$rule->setByDay(\$days);
        } catch (InvalidArgument \$e) {
            throw new InvalidSchedulerException();
        } catch (InvalidRRule \$e) {
            throw new InvalidSchedulerException();
        }

        return \$rule;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Scheduler/Builder/SchedulerWeeklyBuilder.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Builder/SchedulerWeeklyBuilder.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Scheduler/Builder/SchedulerWeeklyBuilder.php");
    }
}