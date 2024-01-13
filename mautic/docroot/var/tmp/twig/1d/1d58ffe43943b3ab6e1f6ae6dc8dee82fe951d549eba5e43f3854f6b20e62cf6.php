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

/* @bundles/ReportBundle/Tests/Scheduler/EventListener/ReportSchedulerSubscriberTest.php */
class __TwigTemplate_d710e299fd77a46d8ed95570b53ca0f264b94c2c42dd8b7b7e1a5eb900020615 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Scheduler\\EventListener;

use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Event\\ReportEvent;
use Mautic\\ReportBundle\\Scheduler\\EventListener\\ReportSchedulerSubscriber;
use Mautic\\ReportBundle\\Scheduler\\Model\\SchedulerPlanner;

class ReportSchedulerSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testOnReportSave()
    {
        \$report = new Report();
        \$event  = new ReportEvent(\$report);

        \$schedulerPlanner = \$this->getMockBuilder(SchedulerPlanner::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$schedulerPlanner->expects(\$this->once())
            ->method('computeScheduler')
            ->with(\$report);

        \$reportSchedulerSubscriber = new ReportSchedulerSubscriber(\$schedulerPlanner);
        \$reportSchedulerSubscriber->onReportSave(\$event);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Scheduler/EventListener/ReportSchedulerSubscriberTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Scheduler/EventListener/ReportSchedulerSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Scheduler/EventListener/ReportSchedulerSubscriberTest.php");
    }
}
