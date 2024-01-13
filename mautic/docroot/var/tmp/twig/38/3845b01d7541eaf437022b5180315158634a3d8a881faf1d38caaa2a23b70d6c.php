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

/* @bundles/ReportBundle/Scheduler/EventListener/ReportSchedulerSubscriber.php */
class __TwigTemplate_8cc8d1a884e89143854ddad170e221014f965289907242925d2d12f3eaca0b60 extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\EventListener;

use Mautic\\ReportBundle\\Event\\ReportEvent;
use Mautic\\ReportBundle\\ReportEvents;
use Mautic\\ReportBundle\\Scheduler\\Model\\SchedulerPlanner;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ReportSchedulerSubscriber implements EventSubscriberInterface
{
    /**
     * @var SchedulerPlanner
     */
    private \$schedulerPlanner;

    public function __construct(SchedulerPlanner \$schedulerPlanner)
    {
        \$this->schedulerPlanner = \$schedulerPlanner;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [ReportEvents::REPORT_POST_SAVE => ['onReportSave', 0]];
    }

    public function onReportSave(ReportEvent \$event)
    {
        \$report = \$event->getReport();

        \$this->schedulerPlanner->computeScheduler(\$report);

        return \$event;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Scheduler/EventListener/ReportSchedulerSubscriber.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/EventListener/ReportSchedulerSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Scheduler/EventListener/ReportSchedulerSubscriber.php");
    }
}
