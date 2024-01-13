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

/* @bundles/ReportBundle/Entity/Scheduler.php */
class __TwigTemplate_875bd38bd0958c53e44cd47e56e93e1b1b1ee34aebda571f8a8e41b4018f1a89 extends Template
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

use Doctrine\\DBAL\\Types\\Type;
use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

/**
 * Class Scheduler.
 */
class Scheduler
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var Report
     */
    private \$report;

    /**
     * @var \\DateTimeInterface
     */
    private \$scheduleDate;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('reports_schedulers')
            ->setCustomRepositoryClass(SchedulerRepository::class);

        \$builder->addId();

        \$builder->createManyToOne('report', Report::class)
            ->addJoinColumn('report_id', 'id', false, false, 'CASCADE')
            ->build();

        \$builder->createField('scheduleDate', Type::DATETIME)
            ->columnName('schedule_date')
            ->nullable(false)
            ->build();
    }

    public function __construct(Report \$report, \\DateTimeInterface \$scheduleDate)
    {
        \$this->report       = \$report;
        \$this->scheduleDate = \$scheduleDate;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return Report
     */
    public function getReport()
    {
        return \$this->report;
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getScheduleDate()
    {
        return \$this->scheduleDate;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Entity/Scheduler.php";
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
        return new Source("", "@bundles/ReportBundle/Entity/Scheduler.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Entity/Scheduler.php");
    }
}
