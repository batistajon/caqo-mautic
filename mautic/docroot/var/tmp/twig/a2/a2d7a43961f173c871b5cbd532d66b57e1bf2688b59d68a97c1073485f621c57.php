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

/* @bundles/LeadBundle/Segment/Decorator/BaseDecorator.php */
class __TwigTemplate_0e0726379de3d488f90c05c4b3cbab00bc544eb8d68a7e071b82e378c8330f91 extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Decorator;

use Mautic\\LeadBundle\\Entity\\RegexTrait;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterOperator;
use Mautic\\LeadBundle\\Segment\\Query\\Expression\\CompositeExpression;
use Mautic\\LeadBundle\\Segment\\Query\\Filter\\BaseFilterQueryBuilder;

/**
 * Class BaseDecorator.
 */
class BaseDecorator implements FilterDecoratorInterface
{
    use RegexTrait;

    /**
     * @var ContactSegmentFilterOperator
     */
    protected \$contactSegmentFilterOperator;

    /**
     * BaseDecorator constructor.
     */
    public function __construct(
        ContactSegmentFilterOperator \$contactSegmentFilterOperator
    ) {
        \$this->contactSegmentFilterOperator = \$contactSegmentFilterOperator;
    }

    /**
     * @return string|null
     */
    public function getField(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        return \$contactSegmentFilterCrate->getField();
    }

    /**
     * @return string
     */
    public function getTable(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        if (\$contactSegmentFilterCrate->isContactType()) {
            return MAUTIC_TABLE_PREFIX.'leads';
        }

        return MAUTIC_TABLE_PREFIX.'companies';
    }

    /**
     * @return string
     */
    public function getOperator(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        \$operator = \$this->contactSegmentFilterOperator->fixOperator(\$contactSegmentFilterCrate->getOperator());

        switch (\$operator) {
            case 'startsWith':
            case 'endsWith':
            case 'contains':
                return 'like';
        }

        return \$operator;
    }

    /**
     * @return string
     */
    public function getQueryType(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        return BaseFilterQueryBuilder::getServiceId();
    }

    /**
     * @param array|string \$argument
     *
     * @return array|string
     */
    public function getParameterHolder(ContactSegmentFilterCrate \$contactSegmentFilterCrate, \$argument)
    {
        if (is_array(\$argument)) {
            \$result = [];
            foreach (\$argument as \$arg) {
                \$result[] = \$this->getParameterHolder(\$contactSegmentFilterCrate, \$arg);
            }

            return \$result;
        }

        return ':'.\$argument;
    }

    /**
     * @return array|bool|float|string|null
     */
    public function getParameterValue(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        \$filter = \$contactSegmentFilterCrate->getFilter();

        if (\$contactSegmentFilterCrate->filterValueDoNotNeedAdjustment()) {
            return \$filter;
        }

        switch (\$contactSegmentFilterCrate->getOperator()) {
            case 'in':
            case '!in':
                return !is_array(\$filter) ? explode('|', \$filter) : \$filter;
            case 'like':
            case '!like':
                return false === strpos(\$filter, '%') ? '%'.\$filter.'%' : \$filter;
            case 'contains':
                return '%'.\$filter.'%';
            case 'startsWith':
                return \$filter.'%';
            case 'endsWith':
                return '%'.\$filter;
            case 'regexp':
            case '!regexp':
                return \$this->prepareRegex(\$filter);
            case 'multiselect':
            case '!multiselect':
                \$filter = (array) \$filter;

                foreach (\$filter as \$key => \$value) {
                    \$filter[\$key] = sprintf('(([|]|^)%s([|]|\$))', preg_quote(\$value, '/'));
                }

                return \$filter;
        }

        return \$filter;
    }

    /**
     * @return bool
     */
    public function getAggregateFunc(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        return false;
    }

    /**
     * @return CompositeExpression|string|null
     */
    public function getWhere(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        return null;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Decorator/BaseDecorator.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Decorator/BaseDecorator.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/Decorator/BaseDecorator.php");
    }
}
