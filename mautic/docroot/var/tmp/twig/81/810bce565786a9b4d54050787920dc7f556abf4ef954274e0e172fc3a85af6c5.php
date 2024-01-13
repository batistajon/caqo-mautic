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

/* @bundles/LeadBundle/Segment/Decorator/CustomMappedDecorator.php */
class __TwigTemplate_0b9b210b899906ae4d6dd05dda7a60aa206f7ddae011ec930909ca7345f5486b extends Template
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

use Mautic\\LeadBundle\\Exception\\FilterNotFoundException;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterOperator;
use Mautic\\LeadBundle\\Services\\ContactSegmentFilterDictionary;

class CustomMappedDecorator extends BaseDecorator
{
    /**
     * @var ContactSegmentFilterDictionary
     */
    protected \$dictionary;

    /**
     * CustomMappedDecorator constructor.
     */
    public function __construct(
        ContactSegmentFilterOperator \$contactSegmentFilterOperator,
        ContactSegmentFilterDictionary \$contactSegmentFilterDictionary
    ) {
        parent::__construct(\$contactSegmentFilterOperator);
        \$this->dictionary = \$contactSegmentFilterDictionary;
    }

    /**
     * @return string|null
     */
    public function getField(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        \$originalField = \$contactSegmentFilterCrate->getField();

        try {
            return \$this->dictionary->getFilterProperty(\$originalField, 'field');
        } catch (FilterNotFoundException \$e) {
            return parent::getField(\$contactSegmentFilterCrate);
        }
    }

    /**
     * @return string
     */
    public function getTable(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        \$originalField = \$contactSegmentFilterCrate->getField();

        try {
            return MAUTIC_TABLE_PREFIX.\$this->dictionary->getFilterProperty(\$originalField, 'foreign_table');
        } catch (FilterNotFoundException \$e) {
            return parent::getTable(\$contactSegmentFilterCrate);
        }
    }

    /**
     * @return string
     */
    public function getQueryType(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        \$originalField = \$contactSegmentFilterCrate->getField();

        try {
            return \$this->dictionary->getFilterProperty(\$originalField, 'type');
        } catch (FilterNotFoundException \$e) {
            return parent::getQueryType(\$contactSegmentFilterCrate);
        }
    }

    /**
     * @return string|bool if no func needed
     */
    public function getAggregateFunc(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        \$originalField = \$contactSegmentFilterCrate->getField();

        try {
            return \$this->dictionary->getFilterProperty(\$originalField, 'func');
        } catch (FilterNotFoundException \$e) {
            return false;
        }
    }

    /**
     * @return \\Mautic\\LeadBundle\\Segment\\Query\\Expression\\CompositeExpression|string|null
     */
    public function getWhere(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        \$originalField = \$contactSegmentFilterCrate->getField();

        try {
            return \$this->dictionary->getFilterProperty(\$originalField, 'where');
        } catch (FilterNotFoundException \$e) {
            return parent::getWhere(\$contactSegmentFilterCrate);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Decorator/CustomMappedDecorator.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Decorator/CustomMappedDecorator.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/Decorator/CustomMappedDecorator.php");
    }
}
