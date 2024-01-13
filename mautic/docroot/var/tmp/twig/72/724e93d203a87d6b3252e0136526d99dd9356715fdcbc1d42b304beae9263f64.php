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

/* @bundles/LeadBundle/Event/SegmentOperatorQueryBuilderEvent.php */
class __TwigTemplate_de9e5bb6c0582b44bc54492a1c928d2b1cbdfcdd3ec5dde993729514164ecdb3 extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Mautic\\LeadBundle\\Segment\\ContactSegmentFilter;
use Mautic\\LeadBundle\\Segment\\Query\\Expression\\CompositeExpression;
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;
use Symfony\\Component\\EventDispatcher\\Event;

final class SegmentOperatorQueryBuilderEvent extends Event
{
    private QueryBuilder \$queryBuilder;

    private ContactSegmentFilter \$filter;

    /**
     * @var string|string[]
     */
    private \$parameterHolder;

    private bool \$operatorHandled = false;

    private string \$leadsTableAlias;

    /**
     * @param string|string[] \$parameterHolder
     */
    public function __construct(QueryBuilder \$queryBuilder, ContactSegmentFilter \$filter, \$parameterHolder)
    {
        \$this->queryBuilder    = \$queryBuilder;
        \$this->filter          = \$filter;
        \$this->parameterHolder = \$parameterHolder;
        \$this->leadsTableAlias = \$queryBuilder->getTableAlias(MAUTIC_TABLE_PREFIX.'leads');
    }

    public function getQueryBuilder(): QueryBuilder
    {
        return \$this->queryBuilder;
    }

    public function getFilter(): ContactSegmentFilter
    {
        return \$this->filter;
    }

    /**
     * @return string|string[]
     */
    public function getParameterHolder()
    {
        return \$this->parameterHolder;
    }

    public function operatorIsOneOf(string ...\$operators): bool
    {
        return in_array(\$this->filter->getOperator(), \$operators, true);
    }

    /**
     * @param CompositeExpression|string \$expression
     */
    public function addExpression(\$expression): void
    {
        \$this->queryBuilder->addLogic(\$expression, \$this->filter->getGlue());

        \$this->setOperatorHandled(true);
    }

    /**
     * The subscriber must tell the event that the operator was successfully handled.
     * Otherwise an exception will be thrown as an unknown operator was sent.
     * Or use the addExpression() method that will set it automatically.
     */
    public function setOperatorHandled(bool \$wasHandled): void
    {
        \$this->operatorHandled = \$wasHandled;
    }

    public function wasOperatorHandled(): bool
    {
        return \$this->operatorHandled;
    }

    public function getLeadsTableAlias(): string
    {
        return \$this->leadsTableAlias;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/SegmentOperatorQueryBuilderEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/SegmentOperatorQueryBuilderEvent.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Event/SegmentOperatorQueryBuilderEvent.php");
    }
}
