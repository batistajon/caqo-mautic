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

/* @bundles/LeadBundle/Event/LeadChangeCompanyEvent.php */
class __TwigTemplate_8e80ce0125ac6e37e19bcafdef445a67a6ab25a53ff384385b877bef9579f4d2 extends Template
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

use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Class LeadCompanyChangeEvent.
 */
class LeadChangeCompanyEvent extends Event
{
    private \$lead;
    private \$leads;
    private \$company;
    private \$added;

    public function __construct(\$leads, Company \$company, \$added = true)
    {
        if (is_array(\$leads)) {
            \$this->leads = \$leads;
        } else {
            \$this->lead = \$leads;
        }
        \$this->company = \$company;
        \$this->added   = \$added;
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
     * @return Company/Company
     */
    public function getCompany()
    {
        return \$this->company;
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
        return "@bundles/LeadBundle/Event/LeadChangeCompanyEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadChangeCompanyEvent.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Event/LeadChangeCompanyEvent.php");
    }
}
