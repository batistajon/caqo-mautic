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

/* @bundles/ReportBundle/Tests/Entity/SchedulerRepositoryTest.php */
class __TwigTemplate_1e90151cc20f3482f537aebd2a1544d69a903c424e26a80f114c41405fba1724 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Entity;

use Doctrine\\ORM\\AbstractQuery;
use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\QueryBuilder;
use Mautic\\ReportBundle\\Entity\\SchedulerRepository;
use Mautic\\ReportBundle\\Scheduler\\Option\\ExportOption;

class SchedulerRepositoryTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGetScheduledReportsForExportNoID()
    {
        \$entityManagerMock = \$this->getMockBuilder(EntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$classMetadataMock = \$this->getMockBuilder(ClassMetadata::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$queryBuilderMock = \$this->getQueryBuilderMock();

        \$entityManagerMock->expects(\$this->once())
            ->method('createQueryBuilder')
            ->with()
            ->willReturn(\$queryBuilderMock);

        \$schedulerRepository = new SchedulerRepository(\$entityManagerMock, \$classMetadataMock);

        \$exportOption = new ExportOption(null);

        \$result = \$schedulerRepository->getScheduledReportsForExport(\$exportOption);

        \$this->assertSame([], \$result);
    }

    /**
     * @return QueryBuilder|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private function getQueryBuilderMock()
    {
        \$queryBuilderMock = \$this->getMockBuilder(QueryBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$queryBuilderMock->expects(\$this->once())
            ->method('select')
            ->with('scheduler')
            ->willReturn(\$queryBuilderMock);

        \$queryBuilderMock->expects(\$this->once())
            ->method('from')
            ->willReturn(\$queryBuilderMock);

        \$queryBuilderMock->expects(\$this->once())
            ->method('addSelect')
            ->with('report')
            ->willReturn(\$queryBuilderMock);

        \$queryBuilderMock->expects(\$this->once())
            ->method('leftJoin')
            ->with('scheduler.report', 'report')
            ->willReturn(\$queryBuilderMock);

        \$queryBuilderMock->expects(\$this->once())
            ->method('andWhere')
            ->with('scheduler.scheduleDate <= :scheduleDate')
            ->willReturn(\$queryBuilderMock);

        \$queryBuilderMock->expects(\$this->once())
            ->method('setParameter')
            ->with('scheduleDate', \$this->callback(function (\$date) {
                \$today = new \\DateTime();
                \$today->modify('+1 seconds'); //make sure our date is bigger

                return \$date instanceof \\DateTime && \$date < \$today;
            }))
            ->willReturn(\$queryBuilderMock);

        \$abstractQueryMock = \$this->getMockBuilder(AbstractQuery::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$queryBuilderMock->expects(\$this->once())
            ->method('getQuery')
            ->with()
            ->willReturn(\$abstractQueryMock);

        \$abstractQueryMock->expects(\$this->once())
            ->method('getResult')
            ->with()
            ->willReturn([]);

        return \$queryBuilderMock;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Entity/SchedulerRepositoryTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Entity/SchedulerRepositoryTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Entity/SchedulerRepositoryTest.php");
    }
}
