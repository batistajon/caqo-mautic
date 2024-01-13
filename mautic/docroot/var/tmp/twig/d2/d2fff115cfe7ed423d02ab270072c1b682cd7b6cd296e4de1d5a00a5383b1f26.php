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

/* @bundles/LeadBundle/Tests/Segment/Query/Filter/DoNotContactFilterQueryBuilderTest.php */
class __TwigTemplate_fbbb1b9c9c639928aa480b7dfa452fb3f212991aa1c7fb994cebba77598ba4cd extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Segment\\Query\\Filter;

use Doctrine\\DBAL\\Connection;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilter;
use Mautic\\LeadBundle\\Segment\\DoNotContact\\DoNotContactParts;
use Mautic\\LeadBundle\\Segment\\Query\\Filter\\DoNotContactFilterQueryBuilder;
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;
use Mautic\\LeadBundle\\Segment\\RandomParameterName;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;

class DoNotContactFilterQueryBuilderTest extends TestCase
{
    public function testGetServiceId(): void
    {
        Assert::assertSame('mautic.lead.query.builder.special.dnc', DoNotContactFilterQueryBuilder::getServiceId());
    }

    /**
     * @dataProvider dataApplyQuery
     */
    public function testApplyQuery(string \$operator, string \$parameterValue, string \$expectedQuery): void
    {
        \$queryBuilder = new QueryBuilder(\$this->createConnection());
        \$queryBuilder->select('1');
        \$queryBuilder->from(MAUTIC_TABLE_PREFIX.'leads', 'l');

        \$filter             = \$this->createFilter(\$operator, \$parameterValue);
        \$filterQueryBuilder = new DoNotContactFilterQueryBuilder(new RandomParameterName(), new EventDispatcher());

        \$expectedQuery = str_replace('__MAUTIC_TABLE_PREFIX__', MAUTIC_TABLE_PREFIX, \$expectedQuery);
        Assert::assertSame(\$queryBuilder, \$filterQueryBuilder->applyQuery(\$queryBuilder, \$filter));
        Assert::assertSame(\$expectedQuery, \$queryBuilder->getDebugOutput());
    }

    /**
     * @return iterable<array<string>>
     */
    public function dataApplyQuery(): iterable
    {
        yield ['eq', '1', 'SELECT 1 FROM __MAUTIC_TABLE_PREFIX__leads l WHERE l.id IN (SELECT par0.lead_id FROM __MAUTIC_TABLE_PREFIX__lead_donotcontact par0 WHERE (par0.reason = 1) AND (par0.channel = \\'email\\'))'];
        yield ['eq', '0', 'SELECT 1 FROM __MAUTIC_TABLE_PREFIX__leads l WHERE l.id NOT IN (SELECT par0.lead_id FROM __MAUTIC_TABLE_PREFIX__lead_donotcontact par0 WHERE (par0.reason = 1) AND (par0.channel = \\'email\\'))'];
        yield ['neq', '1', 'SELECT 1 FROM __MAUTIC_TABLE_PREFIX__leads l WHERE l.id NOT IN (SELECT par0.lead_id FROM __MAUTIC_TABLE_PREFIX__lead_donotcontact par0 WHERE (par0.reason = 1) AND (par0.channel = \\'email\\'))'];
        yield ['neq', '0', 'SELECT 1 FROM __MAUTIC_TABLE_PREFIX__leads l WHERE l.id IN (SELECT par0.lead_id FROM __MAUTIC_TABLE_PREFIX__lead_donotcontact par0 WHERE (par0.reason = 1) AND (par0.channel = \\'email\\'))'];
    }

    private function createConnection(): Connection
    {
        return new class() extends Connection {
            /** @noinspection PhpMissingParentConstructorInspection */
            public function __construct()
            {
            }
        };
    }

    private function createFilter(string \$operator, string \$parameterValue): ContactSegmentFilter
    {
        return new class(\$operator, \$parameterValue) extends ContactSegmentFilter {
            /**
             * @var string
             */
            private \$operator;

            /**
             * @var string
             */
            private \$parameterValue;

            /** @noinspection PhpMissingParentConstructorInspection */
            public function __construct(string \$operator, string \$parameterValue)
            {
                \$this->operator       = \$operator;
                \$this->parameterValue = \$parameterValue;
            }

            public function getDoNotContactParts()
            {
                return new DoNotContactParts('dnc_unsubscribed');
            }

            public function getOperator()
            {
                return \$this->operator;
            }

            public function getParameterValue()
            {
                return \$this->parameterValue;
            }

            public function getGlue()
            {
                return 'and';
            }
        };
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Segment/Query/Filter/DoNotContactFilterQueryBuilderTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Segment/Query/Filter/DoNotContactFilterQueryBuilderTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Segment/Query/Filter/DoNotContactFilterQueryBuilderTest.php");
    }
}
