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

/* @bundles/LeadBundle/Segment/ContactSegmentFilterFactory.php */
class __TwigTemplate_0cee1d04b972e98c2268187fb9e49adfbf3ef79012a14af80c28d9286889cbec extends Template
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

namespace Mautic\\LeadBundle\\Segment;

use Exception;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Segment\\Decorator\\DecoratorFactory;
use Mautic\\LeadBundle\\Segment\\Decorator\\FilterDecoratorInterface;
use Mautic\\LeadBundle\\Segment\\Query\\Filter\\FilterQueryBuilderInterface;
use Symfony\\Component\\DependencyInjection\\Container;

class ContactSegmentFilterFactory
{
    /**
     * @var TableSchemaColumnsCache
     */
    private \$schemaCache;

    /**
     * @var Container
     */
    private \$container;

    /**
     * @var DecoratorFactory
     */
    private \$decoratorFactory;

    public function __construct(
        TableSchemaColumnsCache \$schemaCache,
        Container \$container,
        DecoratorFactory \$decoratorFactory
    ) {
        \$this->schemaCache      = \$schemaCache;
        \$this->container        = \$container;
        \$this->decoratorFactory = \$decoratorFactory;
    }

    /**
     * @return ContactSegmentFilters
     *
     * @throws Exception
     */
    public function getSegmentFilters(LeadList \$leadList)
    {
        \$contactSegmentFilters = new ContactSegmentFilters();

        \$filters = \$leadList->getFilters();
        foreach (\$filters as \$filter) {
            \$contactSegmentFilters->addContactSegmentFilter(\$this->factorSegmentFilter(\$filter));
        }

        return \$contactSegmentFilters;
    }

    /**
     * @param mixed[] \$filter
     *
     * @return ContactSegmentFilter
     *
     * @throws \\Exception
     */
    public function factorSegmentFilter(array \$filter)
    {
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);

        \$decorator = \$this->decoratorFactory->getDecoratorForFilter(\$contactSegmentFilterCrate);

        \$filterQueryBuilder = \$this->getQueryBuilderForFilter(\$decorator, \$contactSegmentFilterCrate);

        return new ContactSegmentFilter(\$contactSegmentFilterCrate, \$decorator, \$this->schemaCache, \$filterQueryBuilder);
    }

    /**
     * @return FilterQueryBuilderInterface
     *
     * @throws Exception
     */
    private function getQueryBuilderForFilter(FilterDecoratorInterface \$decorator, ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        \$qbServiceId = \$decorator->getQueryType(\$contactSegmentFilterCrate);

        return \$this->container->get(\$qbServiceId);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/ContactSegmentFilterFactory.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/ContactSegmentFilterFactory.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/ContactSegmentFilterFactory.php");
    }
}
