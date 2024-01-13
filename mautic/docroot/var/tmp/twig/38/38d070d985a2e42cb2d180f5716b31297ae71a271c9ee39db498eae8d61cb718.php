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

/* @bundles/ReportBundle/Scheduler/Builder/SchedulerBuilder.php */
class __TwigTemplate_c13fcdc84db8eb6fc6e22d020f7123cb64ed45688627f0a9db015630c466627c extends Template
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

use Mautic\\ReportBundle\\Scheduler\\Exception\\InvalidSchedulerException;
use Mautic\\ReportBundle\\Scheduler\\Exception\\NotSupportedScheduleTypeException;
use Mautic\\ReportBundle\\Scheduler\\Factory\\SchedulerTemplateFactory;
use Mautic\\ReportBundle\\Scheduler\\SchedulerInterface;
use Recurr\\Exception\\InvalidWeekday;
use Recurr\\Rule;
use Recurr\\Transformer\\ArrayTransformer;

class SchedulerBuilder
{
    /** @var SchedulerTemplateFactory */
    private \$schedulerTemplateFactory;

    public function __construct(SchedulerTemplateFactory \$schedulerTemplateFactory)
    {
        \$this->schedulerTemplateFactory = \$schedulerTemplateFactory;
    }

    /**
     * @return \\Recurr\\Recurrence[]|\\Recurr\\RecurrenceCollection
     *
     * @throws InvalidSchedulerException
     * @throws NotSupportedScheduleTypeException
     */
    public function getNextEvent(SchedulerInterface \$scheduler)
    {
        return \$this->getNextEvents(\$scheduler, 1);
    }

    /**
     * @param int \$count
     *
     * @return \\Recurr\\Recurrence[]|\\Recurr\\RecurrenceCollection
     *
     * @throws InvalidSchedulerException
     * @throws NotSupportedScheduleTypeException
     */
    public function getNextEvents(SchedulerInterface \$scheduler, \$count)
    {
        if (!\$scheduler->isScheduled()) {
            throw new InvalidSchedulerException();
        }

        \$builder   = \$this->schedulerTemplateFactory->getBuilder(\$scheduler);
        \$startDate = new \\DateTime();
        \$rule      = new Rule();

        if (!\$scheduler->isScheduledNow()) {
            \$startDate->setTime(0, 0)->modify('+1 day');
        }

        \$rule->setStartDate(\$startDate)->setCount(\$count);

        try {
            \$finalScheduler = \$builder->build(\$rule, \$scheduler);
            \$transformer    = new ArrayTransformer();

            return \$transformer->transform(\$finalScheduler);
        } catch (InvalidWeekday \$e) {
            throw new InvalidSchedulerException();
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Scheduler/Builder/SchedulerBuilder.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Builder/SchedulerBuilder.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Scheduler/Builder/SchedulerBuilder.php");
    }
}
