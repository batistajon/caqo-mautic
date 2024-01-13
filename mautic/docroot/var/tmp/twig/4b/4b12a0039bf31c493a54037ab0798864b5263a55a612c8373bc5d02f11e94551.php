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

/* @bundles/ReportBundle/Entity/SchedulerRepository.php */
class __TwigTemplate_01d7dc49110ca1efe9ee275f39c0ef4adb550e3ffc375748f0a930fb6f2531c7 extends Template
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

namespace Mautic\\ReportBundle\\Entity;

use Doctrine\\ORM\\EntityRepository;
use Mautic\\ReportBundle\\Scheduler\\Option\\ExportOption;

/**
 * SchedulerRepository.
 */
class SchedulerRepository extends EntityRepository
{
    /**
     * @return Report|null
     */
    public function getSchedulerByReport(Report \$report)
    {
        return \$this->findOneBy(['report' => \$report]);
    }

    /**
     * @return array|Scheduler[]
     */
    public function getScheduledReportsForExport(ExportOption \$exportOption)
    {
        \$qb = \$this->createQueryBuilder('scheduler');
        \$qb->addSelect('report')
            ->leftJoin('scheduler.report', 'report');

        \$date = new \\DateTime();
        \$qb->andWhere('scheduler.scheduleDate <= :scheduleDate')
            ->setParameter('scheduleDate', \$date);

        if (\$exportOption->getReportId()) {
            \$qb->andWhere('report.id = :id')
                ->setParameter('id', \$exportOption->getReportId());
        }

        return \$qb->getQuery()->getResult();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Entity/SchedulerRepository.php";
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
        return new Source("", "@bundles/ReportBundle/Entity/SchedulerRepository.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Entity/SchedulerRepository.php");
    }
}
