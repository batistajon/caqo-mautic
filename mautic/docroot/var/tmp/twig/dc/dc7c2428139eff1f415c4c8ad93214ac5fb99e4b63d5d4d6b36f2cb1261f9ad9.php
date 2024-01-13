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

/* @bundles/CampaignBundle/Membership/EventDispatcher.php */
class __TwigTemplate_d56110132740a9803e2ef157afb27d86a5b495cef559d28d4f254d64dd9788ff extends Template
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

namespace Mautic\\CampaignBundle\\Membership;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Event\\CampaignLeadChangeEvent;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class EventDispatcher
{
    /**
     * @var EventDispatcherInterface
     */
    private \$dispatcher;

    /**
     * EventDispatcher constructor.
     */
    public function __construct(EventDispatcherInterface \$dispatcher)
    {
        \$this->dispatcher = \$dispatcher;
    }

    /**
     * @param string \$action
     */
    public function dispatchMembershipChange(Lead \$contact, Campaign \$campaign, \$action)
    {
        \$this->dispatcher->dispatch(
            CampaignEvents::CAMPAIGN_ON_LEADCHANGE,
            new CampaignLeadChangeEvent(\$campaign, \$contact, \$action)
        );
    }

    /**
     * @param \$action
     */
    public function dispatchBatchMembershipChange(array \$contacts, Campaign \$campaign, \$action)
    {
        \$this->dispatcher->dispatch(
            CampaignEvents::LEAD_CAMPAIGN_BATCH_CHANGE,
            new CampaignLeadChangeEvent(\$campaign, \$contacts, \$action)
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Membership/EventDispatcher.php";
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
        return new Source("", "@bundles/CampaignBundle/Membership/EventDispatcher.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Membership/EventDispatcher.php");
    }
}
