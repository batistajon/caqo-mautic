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

/* @bundles/ReportBundle/Tests/Model/ScheduleModelTest.php */
class __TwigTemplate_2eb42b0fa0e534f82ee76387f18a75c89a1b2811d67666f8ed73c099c071843c extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Model;

use Doctrine\\ORM\\EntityManager;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Entity\\Scheduler;
use Mautic\\ReportBundle\\Entity\\SchedulerRepository;
use Mautic\\ReportBundle\\Model\\ScheduleModel;
use Mautic\\ReportBundle\\Scheduler\\Model\\SchedulerPlanner;
use Mautic\\ReportBundle\\Scheduler\\Option\\ExportOption;
use PHPUnit\\Framework\\MockObject\\MockObject;

class ScheduleModelTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|SchedulerRepository
     */
    private \$schedulerRepository;

    /**
     * @var MockObject|EntityManager
     */
    private \$entityManager;

    /**
     * @var MockObject|SchedulerPlanner
     */
    private \$schedulerPlanner;

    /**
     * @var MockObject|ExportOption
     */
    private \$exportOption;

    /**
     * @var ScheduleModel
     */
    private \$scheduleModel;

    protected function setUp(): void
    {
        \$this->schedulerRepository = \$this->createMock(SchedulerRepository::class);
        \$this->entityManager       = \$this->createMock(EntityManager::class);
        \$this->schedulerPlanner    = \$this->createMock(SchedulerPlanner::class);
        \$this->exportOption        = \$this->createMock(ExportOption::class);

        \$this->entityManager->expects(\$this->once())
            ->method('getRepository')
            ->with(Scheduler::class)
            ->willReturn(\$this->schedulerRepository);

        \$this->scheduleModel = new ScheduleModel(\$this->entityManager, \$this->schedulerPlanner);
    }

    public function testGetScheduledReportsForExport()
    {
        \$this->schedulerRepository->expects(\$this->once())
            ->method('getScheduledReportsForExport')
            ->with(\$this->exportOption);

        \$this->scheduleModel->getScheduledReportsForExport(\$this->exportOption);
    }

    public function testReportWasScheduled()
    {
        \$report = new Report();

        \$this->schedulerPlanner->expects(\$this->once())
            ->method('computeScheduler')
            ->with(\$report);

        \$this->scheduleModel->reportWasScheduled(\$report);
    }

    public function testTurnOffScheduler()
    {
        \$report = new Report();

        \$report->setIsScheduled(true);

        \$this->entityManager->expects(\$this->once())
            ->method('persist')
            ->with(\$report);

        \$this->entityManager->expects(\$this->once())
            ->method('flush');

        \$this->scheduleModel->turnOffScheduler(\$report);

        \$this->assertFalse(\$report->isScheduled());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Model/ScheduleModelTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Model/ScheduleModelTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Model/ScheduleModelTest.php");
    }
}
