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

/* @bundles/LeadBundle/Event/ListChangeEvent.php */
class __TwigTemplate_fe81d9ffbd7165d4f6327c6bf04f504130485204fc322a78e7e9d33675f4df6f extends Template
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

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Class ListChangeEvent.
 */
class ListChangeEvent extends Event
{
    private \$lead;
    private \$leads;
    private \$list;
    private \$added;

    /**
     * ListChangeEvent constructor.
     *
     * @param      \$leads
     * @param bool \$added
     */
    public function __construct(\$leads, LeadList \$list, \$added = true)
    {
        if (is_array(\$leads)) {
            \$this->leads = \$leads;
        } else {
            \$this->lead = \$leads;
        }
        \$this->list  = \$list;
        \$this->added = \$added;
    }

    /**
     * Returns the Lead entity.
     *
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * Returns batch array of leads.
     *
     * @return array
     */
    public function getLeads()
    {
        return \$this->leads;
    }

    /**
     * @return LeadList
     */
    public function getList()
    {
        return \$this->list;
    }

    /**
     * @return bool
     */
    public function wasAdded()
    {
        return \$this->added;
    }

    /**
     * @return bool
     */
    public function wasRemoved()
    {
        return !\$this->added;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/ListChangeEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/ListChangeEvent.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Event/ListChangeEvent.php");
    }
}
