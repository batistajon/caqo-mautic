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

/* @bundles/LeadBundle/Tests/Segment/ContactSegmentFilterFactoryTest.php */
class __TwigTemplate_45b92dd5142fc7c5bcaa9f412e2e15932ea67c6159dda4ec9983ec60b374be3d extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Segment;

use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterFactory;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilters;
use Mautic\\LeadBundle\\Segment\\Decorator\\DecoratorFactory;
use Mautic\\LeadBundle\\Segment\\Decorator\\FilterDecoratorInterface;
use Mautic\\LeadBundle\\Segment\\Query\\Filter\\FilterQueryBuilderInterface;
use Mautic\\LeadBundle\\Segment\\TableSchemaColumnsCache;
use Symfony\\Component\\DependencyInjection\\Container;

class ContactSegmentFilterFactoryTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\ContactSegmentFilterFactory
     */
    public function testLeadFilter()
    {
        \$tableSchemaColumnsCache = \$this->createMock(TableSchemaColumnsCache::class);
        \$container               = \$this->createMock(Container::class);
        \$decoratorFactory        = \$this->createMock(DecoratorFactory::class);

        \$filterDecorator = \$this->createMock(FilterDecoratorInterface::class);
        \$decoratorFactory->expects(\$this->exactly(3))
            ->method('getDecoratorForFilter')
            ->willReturn(\$filterDecorator);

        \$filterDecorator->expects(\$this->exactly(3))
            ->method('getQueryType')
            ->willReturn('MyQueryTypeId');

        \$filterQueryBuilder = \$this->createMock(FilterQueryBuilderInterface::class);
        \$container->expects(\$this->exactly(3))
            ->method('get')
            ->with('MyQueryTypeId')
            ->willReturn(\$filterQueryBuilder);

        \$contactSegmentFilterFactory = new ContactSegmentFilterFactory(\$tableSchemaColumnsCache, \$container, \$decoratorFactory);

        \$leadList = new LeadList();
        \$leadList->setFilters([
            [
                'glue'     => 'and',
                'field'    => 'date_identified',
                'object'   => 'lead',
                'type'     => 'datetime',
                'filter'   => null,
                'display'  => null,
                'operator' => '!empty',
            ],
            [
                'glue'     => 'and',
                'type'     => 'text',
                'field'    => 'hit_url',
                'operator' => 'like',
                'filter'   => 'test.com',
                'display'  => '',
            ],
            [
                'glue'     => 'or',
                'type'     => 'lookup',
                'field'    => 'state',
                'operator' => '=',
                'filter'   => 'QLD',
                'display'  => '',
            ],
        ]);

        \$contactSegmentFilters = \$contactSegmentFilterFactory->getSegmentFilters(\$leadList);

        \$this->assertInstanceOf(ContactSegmentFilters::class, \$contactSegmentFilters);
        \$this->assertCount(3, \$contactSegmentFilters);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Segment/ContactSegmentFilterFactoryTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Segment/ContactSegmentFilterFactoryTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Segment/ContactSegmentFilterFactoryTest.php");
    }
}
