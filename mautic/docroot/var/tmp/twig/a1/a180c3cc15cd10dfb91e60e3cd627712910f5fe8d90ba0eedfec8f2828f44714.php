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

/* @bundles/LeadBundle/Event/CategoryChangeEvent.php */
class __TwigTemplate_4d2be8ac118817664edf6e3b51b9d39b48a16ab2960c70f6622525f45d8ffaba extends Template
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

use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Class CategoryChangeEvent.
 */
class CategoryChangeEvent extends Event
{
    private \$lead;
    private \$leads;
    private \$category;
    private \$added;

    /**
     * CategoryChangeEvent constructor.
     *
     * @param      \$leads
     * @param bool \$added
     */
    public function __construct(\$leads, Category \$category, \$added = true)
    {
        if (is_array(\$leads)) {
            \$this->leads = \$leads;
        } else {
            \$this->lead = \$leads;
        }
        \$this->category = \$category;
        \$this->added    = \$added;
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
     * @return Category
     */
    public function getCategory()
    {
        return \$this->category;
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
        return "@bundles/LeadBundle/Event/CategoryChangeEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/CategoryChangeEvent.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Event/CategoryChangeEvent.php");
    }
}
