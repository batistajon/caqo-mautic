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

/* @bundles/ReportBundle/Tests/Builder/MauticReportBuilderTest.php */
class __TwigTemplate_a869489d5d21d30636503e29a46f85ab01b6bda04862cbcf5a5e155aad9658af extends Template
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

declare(strict_types=1);

namespace Mautic\\ReportBundle\\Tests\\Builder;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Query\\Expression\\ExpressionBuilder;
use Doctrine\\DBAL\\Query\\QueryBuilder;
use Mautic\\ChannelBundle\\Helper\\ChannelListHelper;
use Mautic\\ReportBundle\\Builder\\MauticReportBuilder;
use Mautic\\ReportBundle\\Entity\\Report;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

final class MauticReportBuilderTest extends TestCase
{
    /**
     * @var MockObject|EventDispatcherInterface
     */
    private \$dispatcher;

    /**
     * @var MockObject|Connection
     */
    private \$connection;

    /**
     * @var MockObject|ChannelListHelper
     */
    private \$channelListHelper;

    /**
     * @var QueryBuilder
     */
    private \$queryBuilder;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->dispatcher        = \$this->createMock(EventDispatcherInterface::class);
        \$this->connection        = \$this->createMock(Connection::class);
        \$this->queryBuilder      = new QueryBuilder(\$this->connection);
        \$this->channelListHelper = \$this->createMock(ChannelListHelper::class);

        \$this->connection->method('createQueryBuilder')->willReturn(new QueryBuilder(\$this->connection));
        \$this->connection->method('getExpressionBuilder')->willReturn(new ExpressionBuilder(\$this->connection));
        \$this->connection->method('quote')->willReturnMap([
            ['', null, \"''\"],
        ]);
    }

    public function testColumnSanitization(): void
    {
        \$this->connection->method('createQueryBuilder')->willReturn(\$this->queryBuilder);

        \$report = new Report();
        \$report->setColumns(['a.b', 'b.c']);
        \$builder = \$this->buildBuilder(\$report);
        \$query   = \$builder->getQuery([
            'columns' => ['a.b' => [], 'b.c' => []],
        ]);
        Assert::assertSame('SELECT `a`.`b`, `b`.`c`', \$query->getSql());
    }

    public function testFiltersWithEmptyAndNotEmptyDateTypes(): void
    {
        \$report = new Report();
        \$report->setColumns(['a.someField']);
        \$report->setFilters([
            [
                'column'    => 'a.emptyDate',
                'glue'      => 'and',
                'value'     => '',
                'condition' => 'empty',
            ],
            [
                'column'    => 'a.notEmptyDate',
                'glue'      => 'and',
                'value'     => '',
                'condition' => 'notEmpty',
            ],
            [
                'column'    => 'a.emptyDateTime',
                'glue'      => 'and',
                'value'     => '',
                'condition' => 'empty',
            ],
            [
                'column'    => 'a.notEmptyDateTime',
                'glue'      => 'and',
                'value'     => '',
                'condition' => 'notEmpty',
            ],
            [
                'column'    => 'a.emptyString',
                'glue'      => 'and',
                'value'     => '',
                'condition' => 'empty',
            ],
            [
                'column'    => 'a.notEmptyString',
                'glue'      => 'and',
                'value'     => '',
                'condition' => 'notEmpty',
            ],
        ]);
        \$builder = \$this->buildBuilder(\$report);
        \$query   = \$builder->getQuery([
            'columns' => ['a.someField' => []],
            'filters' => [
                'a.emptyDate' => [
                    'label' => 'Empty date',
                    'type'  => 'date',
                    'alias' => 'emptyDate',
                ],
                'a.notEmptyDate' => [
                    'label' => 'Not empty date',
                    'type'  => 'date',
                    'alias' => 'notEmptyDate',
                ],
                'a.emptyDateTime' => [
                    'label' => 'Empty date time',
                    'type'  => 'datetime',
                    'alias' => 'emptyDateTime',
                ],
                'a.notEmptyDateTime' => [
                    'label' => 'Not empty date time',
                    'type'  => 'datetime',
                    'alias' => 'notEmptyDateTime',
                ],
                'a.emptyString' => [
                    'label' => 'Empty string',
                    'type'  => 'string',
                    'alias' => 'emptyString',
                ],
                'a.notEmptyString' => [
                    'label' => 'Not empty string',
                    'type'  => 'string',
                    'alias' => 'notEmptyString',
                ],
            ],
        ]);
        Assert::assertSame(trim(preg_replace('/\\s{2,}/', ' ', \"
            SELECT
                `a`.`someField`
            WHERE
                (a.emptyDate IS NULL)
                AND (a.notEmptyDate IS NOT NULL)
                AND (a.emptyDateTime IS NULL)
                AND (a.notEmptyDateTime IS NOT NULL)
                AND ((a.emptyString IS NULL) OR (a.emptyString = ''))
                AND (a.notEmptyString IS NOT NULL) AND (a.notEmptyString <> '')
        \")), \$query->getSql());
    }

    public function testFiltersWithEmptyAndNotEmptyDateTypes2(): void
    {
        \$report = new Report();
        \$report->setColumns(['a.someField']);
        \$report->setFilters([
            [
                'column'    => 'a.notEqualString',
                'glue'      => 'and',
                'value'     => '',
                'condition' => 'neq',
            ],
        ]);
        \$builder = \$this->buildBuilder(\$report);
        \$query   = \$builder->getQuery([
            'columns' => ['a.someField' => []],
            'filters' => [
                'a.notEqualString' => [
                    'label' => 'Not equal string',
                    'type'  => 'string',
                    'alias' => 'notEqualString',
                ],
            ],
        ]);
        Assert::assertSame(trim(preg_replace('/\\s{2,}/', ' ', '
            SELECT `a`.`someField` WHERE (a.notEqualString IS NULL) OR (a.notEqualString <> :i0canotEqualString)
        ')), \$query->getSql());
    }

    private function buildBuilder(Report \$report): MauticReportBuilder
    {
        return new MauticReportBuilder(
            \$this->dispatcher,
            \$this->connection,
            \$report,
            \$this->channelListHelper
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Builder/MauticReportBuilderTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Builder/MauticReportBuilderTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Builder/MauticReportBuilderTest.php");
    }
}
