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

/* @bundles/LeadBundle/Tests/Event/SegmentOperatorQueryBuilderEventTest.php */
class __TwigTemplate_13d67807f54bdcd61c4adb3829ef31df6a87e440f1ce9110cc53a4582a611c76 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Event;

use Mautic\\LeadBundle\\Event\\SegmentOperatorQueryBuilderEvent;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilter;
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;
use PHPUnit\\Framework\\MockObject\\MockObject;

final class SegmentOperatorQueryBuilderEventTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|QueryBuilder
     */
    private \$queryBuilder;

    /**
     * @var MockObject|ContactSegmentFilter
     */
    private \$filter;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->queryBuilder = \$this->createMock(QueryBuilder::class);
        \$this->filter       = \$this->createMock(ContactSegmentFilter::class);

        \$this->queryBuilder->method('getTableAlias')
            ->with(MAUTIC_TABLE_PREFIX.'leads')
            ->willReturn('leads');
    }

    public function testConstructGettersSetters(): void
    {
        \$this->filter->method('getOperator')->willReturn('=');
        \$this->filter->method('getGlue')->willReturn('and');

        \$event = new SegmentOperatorQueryBuilderEvent(\$this->queryBuilder, \$this->filter, 'parameterHolder1');

        \$this->assertSame(\$this->queryBuilder, \$event->getQueryBuilder());
        \$this->assertSame(\$this->filter, \$event->getFilter());
        \$this->assertSame('parameterHolder1', \$event->getParameterHolder());
        \$this->assertFalse(\$event->operatorIsOneOf('like'));
        \$this->assertTrue(\$event->operatorIsOneOf('=', 'like'));
        \$this->assertFalse(\$event->wasOperatorHandled());

        \$this->queryBuilder->expects(\$this->once())
            ->method('addLogic')
            ->with('a != b', 'and');

        \$event->addExpression('a != b');

        \$this->assertTrue(\$event->wasOperatorHandled());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Event/SegmentOperatorQueryBuilderEventTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Event/SegmentOperatorQueryBuilderEventTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Event/SegmentOperatorQueryBuilderEventTest.php");
    }
}
