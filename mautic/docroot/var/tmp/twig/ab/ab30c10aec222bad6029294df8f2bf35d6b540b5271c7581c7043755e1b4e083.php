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

/* @bundles/LeadBundle/Event/LeadListQueryBuilderGeneratedEvent.php */
class __TwigTemplate_e1f12cff8be01f1ffec321e7905810893e924f1c59548d8b55ed76d6a739586e extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;
use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Class LeadListQueryBuilderGeneratedEvent.
 */
class LeadListQueryBuilderGeneratedEvent extends Event
{
    /**
     * @var LeadList
     */
    private \$segment;

    /**
     * @var QueryBuilder
     */
    private \$queryBuilder;

    public function __construct(LeadList \$segment, QueryBuilder \$queryBuilder)
    {
        \$this->segment      = \$segment;
        \$this->queryBuilder = \$queryBuilder;
    }

    /**
     * @return LeadList
     */
    public function getSegment()
    {
        return \$this->segment;
    }

    /**
     * @return QueryBuilder
     */
    public function getQueryBuilder()
    {
        return \$this->queryBuilder;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/LeadListQueryBuilderGeneratedEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadListQueryBuilderGeneratedEvent.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Event/LeadListQueryBuilderGeneratedEvent.php");
    }
}
