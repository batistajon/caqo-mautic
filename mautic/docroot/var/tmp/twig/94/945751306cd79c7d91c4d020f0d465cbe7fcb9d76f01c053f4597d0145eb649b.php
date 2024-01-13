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

/* @bundles/CampaignBundle/Event/CampaignLeadChangeEvent.php */
class __TwigTemplate_893c2727c8982c92b1344a2310ade25ad0bc633180178b84d26a54065b141ee2 extends Template
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

namespace Mautic\\CampaignBundle\\Event;

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Class CampaignLeadChangeEvent.
 */
class CampaignLeadChangeEvent extends Event
{
    /**
     * @var Campaign
     */
    private \$campaign;

    /**
     * @var Lead
     */
    private \$lead;

    /**
     * @var array
     */
    private \$leads = [];

    /**
     * @var string
     */
    private \$action;

    /**
     * CampaignLeadChangeEvent constructor.
     *
     * @param \$leads
     * @param \$action
     */
    public function __construct(Campaign \$campaign, \$leads, \$action)
    {
        \$this->campaign = \$campaign;
        if (is_array(\$leads)) {
            \$this->leads = \$leads;
        } else {
            \$this->lead = \$leads;
        }
        \$this->action = \$action;
    }

    /**
     * Returns the Campaign entity.
     *
     * @return Campaign
     */
    public function getCampaign()
    {
        return \$this->campaign;
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
     * If this is a batch event, return array of leads.
     *
     * @return array
     */
    public function getLeads()
    {
        return \$this->leads;
    }

    /**
     * Returns added or removed.
     *
     * @return mixed
     */
    public function getAction()
    {
        return \$this->action;
    }

    /**
     * Lead was removed from the campaign.
     *
     * @return bool
     */
    public function wasRemoved()
    {
        return 'removed' == \$this->action;
    }

    /**
     * Lead was added to the campaign.
     *
     * @return bool
     */
    public function wasAdded()
    {
        return 'added' == \$this->action;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Event/CampaignLeadChangeEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/CampaignLeadChangeEvent.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Event/CampaignLeadChangeEvent.php");
    }
}
