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

/* @bundles/ReportBundle/Scheduler/Model/SchedulerPlanner.php */
class __TwigTemplate_89ab742d6f912c5c83ec6d676d40ba102ef1414ea564b960d81c2fbc6dc7303b extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Model;

use Doctrine\\ORM\\EntityManager;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Entity\\Scheduler;
use Mautic\\ReportBundle\\Entity\\SchedulerRepository;
use Mautic\\ReportBundle\\Scheduler\\Date\\DateBuilder;
use Mautic\\ReportBundle\\Scheduler\\Exception\\NoScheduleException;

class SchedulerPlanner
{
    /**
     * @var DateBuilder
     */
    private \$dateBuilder;

    /**
     * @var SchedulerRepository
     */
    private \$schedulerRepository;

    /**
     * @var EntityManager
     */
    private \$entityManager;

    public function __construct(DateBuilder \$dateBuilder, EntityManager \$entityManager)
    {
        \$this->dateBuilder         = \$dateBuilder;
        \$this->entityManager       = \$entityManager;
        \$this->schedulerRepository = \$entityManager->getRepository(Scheduler::class);
    }

    public function computeScheduler(Report \$report)
    {
        \$this->removeSchedulerOfReport(\$report);
        \$this->planScheduler(\$report);
    }

    private function planScheduler(Report \$report)
    {
        try {
            \$date = \$this->dateBuilder->getNextEvent(\$report);
        } catch (NoScheduleException \$e) {
            return;
        }

        \$scheduler = new Scheduler(\$report, \$date);
        \$this->entityManager->persist(\$scheduler);
        \$this->entityManager->flush();
    }

    private function removeSchedulerOfReport(Report \$report)
    {
        \$scheduler = \$this->schedulerRepository->getSchedulerByReport(\$report);
        if (!\$scheduler) {
            return;
        }

        \$this->entityManager->remove(\$scheduler);
        \$this->entityManager->flush();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Scheduler/Model/SchedulerPlanner.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Model/SchedulerPlanner.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Scheduler/Model/SchedulerPlanner.php");
    }
}
