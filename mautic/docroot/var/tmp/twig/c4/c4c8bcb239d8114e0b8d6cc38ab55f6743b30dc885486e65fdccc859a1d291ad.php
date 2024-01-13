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

/* @bundles/LeadBundle/Segment/Decorator/FilterDecoratorInterface.php */
class __TwigTemplate_da1196f494f20632a73fdcb4d6d3a5fa7d76bdc8559e08bb45fa1deb54cd5885 extends Template
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

use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;

interface FilterDecoratorInterface
{
    /**
     * Returns filter's field (usually a column name in DB).
     *
     * @return string|null
     */
    public function getField(ContactSegmentFilterCrate \$contactSegmentFilterCrate);

    /**
     * Returns DB table.
     *
     * @return string
     */
    public function getTable(ContactSegmentFilterCrate \$contactSegmentFilterCrate);

    /**
     * Returns a string operator (like, eq, neq, ...).
     *
     * @return string
     */
    public function getOperator(ContactSegmentFilterCrate \$contactSegmentFilterCrate);

    /**
     * Returns an argument for QueryBuilder (usually ':arg' in case that \$argument is equal to 'arg' string.
     *
     * @param array|string \$argument
     *
     * @return array|string
     */
    public function getParameterHolder(ContactSegmentFilterCrate \$contactSegmentFilterCrate, \$argument);

    /**
     * Returns formatted value for QueryBuilder ('%value%' for 'like', '%value' for 'Ends with', SQL-formatted date etc.).
     *
     * @return array|bool|float|string|null
     */
    public function getParameterValue(ContactSegmentFilterCrate \$contactSegmentFilterCrate);

    /**
     * Returns QueryBuilder's service name from the container.
     *
     * @return string
     */
    public function getQueryType(ContactSegmentFilterCrate \$contactSegmentFilterCrate);

    /**
     * Returns a name of aggregation function for SQL (SUM, COUNT etc.)
     * Returns false if no aggregation function is needed.
     *
     * @return string|bool if no func needed
     */
    public function getAggregateFunc(ContactSegmentFilterCrate \$contactSegmentFilterCrate);

    /**
     * Returns a special where condition which is needed to be added to QueryBuilder (like email_stats.is_read = 1 for 'Read emails')
     * Returns null if no special condition is needed.
     *
     * @return \\Mautic\\LeadBundle\\Segment\\Query\\Expression\\CompositeExpression|string|null
     */
    public function getWhere(ContactSegmentFilterCrate \$contactSegmentFilterCrate);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Decorator/FilterDecoratorInterface.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Decorator/FilterDecoratorInterface.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/Decorator/FilterDecoratorInterface.php");
    }
}
