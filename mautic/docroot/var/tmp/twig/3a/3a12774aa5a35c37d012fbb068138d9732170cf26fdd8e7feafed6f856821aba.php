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

/* @bundles/CampaignBundle/Event/DecisionEvent.php */
class __TwigTemplate_76ebe46b4f2e0178dd64a27274f8ed3acd05d63ff4e84681fe20de8d67f2e350 extends Template
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

use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\AbstractEventAccessor;

class DecisionEvent extends CampaignExecutionEvent
{
    use ContextTrait;

    /**
     * @var AbstractEventAccessor
     */
    private \$eventConfig;

    /**
     * @var LeadEventLog
     */
    private \$eventLog;

    /**
     * Anything that the dispatching listener wants to pass through to other listeners.
     *
     * @var mixed
     */
    private \$passthrough;

    /**
     * @var bool
     */
    private \$applicable = false;

    /**
     * DecisionEvent constructor.
     *
     * @param mixed \$passthrough
     */
    public function __construct(AbstractEventAccessor \$config, LeadEventLog \$log, \$passthrough = null)
    {
        \$this->eventConfig = \$config;
        \$this->eventLog    = \$log;
        \$this->passthrough = \$passthrough;

        // @deprecated support for pre 2.13.0; to be removed in 3.0
        parent::__construct(
            [
                'eventSettings'   => \$config->getConfig(),
                'eventDetails'    => \$passthrough,
                'event'           => \$log->getEvent(),
                'lead'            => \$log->getLead(),
                'systemTriggered' => defined('MAUTIC_CAMPAIGN_SYSTEM_TRIGGERED'),
                'dateScheduled'   => \$log->getTriggerDate(),
            ],
            null,
            \$log
        );
    }

    /**
     * @return AbstractEventAccessor
     */
    public function getEventConfig()
    {
        return \$this->eventConfig;
    }

    /**
     * @return LeadEventLog
     */
    public function getLog()
    {
        return \$this->eventLog;
    }

    /**
     * @return mixed
     */
    public function getPassthrough()
    {
        return \$this->passthrough;
    }

    /**
     * Note that this decision is a match and the child events should be executed.
     */
    public function setAsApplicable()
    {
        \$this->applicable = true;
    }

    /**
     * @return bool
     */
    public function wasDecisionApplicable()
    {
        return \$this->applicable;
    }

    /**
     * @param string   \$channel
     * @param int|null \$channelId
     */
    public function setChannel(\$channel, \$channelId = null)
    {
        \$this->log->setChannel(\$this->channel)
            ->setChannelId(\$this->channelId);
    }

    /**
     * @deprecated 2.13.0 to be removed in 3.0; BC support
     *
     * @return bool
     */
    public function getResult()
    {
        return \$this->applicable;
    }

    /**
     * @deprecated 2.13.0 to be removed in 3.0; BC support
     *
     * @param mixed \$result
     *
     * @return \$this
     */
    public function setResult(\$result)
    {
        \$this->applicable = (bool) \$result;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Event/DecisionEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/DecisionEvent.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Event/DecisionEvent.php");
    }
}
