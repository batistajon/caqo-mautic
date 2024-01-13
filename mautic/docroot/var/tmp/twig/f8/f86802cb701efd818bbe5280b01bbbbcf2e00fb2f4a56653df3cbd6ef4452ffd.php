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

/* @bundles/CampaignBundle/Event/ConditionEvent.php */
class __TwigTemplate_706a1e507b3234fcab3de235674aaf2770cfae5e143657d49ece7a6f7cca525f extends Template
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

class ConditionEvent extends CampaignExecutionEvent
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
     * @var bool
     */
    private \$passed = false;

    /**
     * DecisionEvent constructor.
     */
    public function __construct(AbstractEventAccessor \$config, LeadEventLog \$log)
    {
        \$this->eventConfig = \$config;
        \$this->eventLog    = \$log;

        // @deprecated support for pre 2.13.0; to be removed in 3.0
        parent::__construct(
            [
                'eventSettings'   => \$config->getConfig(),
                'eventDetails'    => null,
                'event'           => \$log->getEvent(),
                'lead'            => \$log->getLead(),
                'systemTriggered' => \$log->getSystemTriggered(),
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
     * Pass this condition.
     */
    public function pass()
    {
        \$this->passed = true;
    }

    /**
     * Fail this condition.
     */
    public function fail()
    {
        \$this->passed = false;
    }

    /**
     * @return bool
     */
    public function wasConditionSatisfied()
    {
        return \$this->passed;
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
        return \$this->passed;
    }

    /**
     * @deprecated 2.13.0 to be removed in 3.0; BC support
     *
     * @param \$result
     *
     * @return \$this
     */
    public function setResult(\$result)
    {
        \$this->passed = (bool) \$result;

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
        return "@bundles/CampaignBundle/Event/ConditionEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/ConditionEvent.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Event/ConditionEvent.php");
    }
}
