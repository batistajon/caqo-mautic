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

/* @bundles/CampaignBundle/Event/ScheduledEvent.php */
class __TwigTemplate_442bab59906cdfc8627154658aa752b08002f1543b356f9989bfa1a4b4ba3bb5 extends Template
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

class ScheduledEvent extends CampaignScheduledEvent
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
    private \$isReschedule;

    /**
     * ScheduledEvent constructor.
     *
     * @param bool \$isReschedule
     */
    public function __construct(AbstractEventAccessor \$config, LeadEventLog \$log, \$isReschedule = false)
    {
        \$this->eventConfig  = \$config;
        \$this->eventLog     = \$log;
        \$this->isReschedule = \$isReschedule;

        // @deprecated support for pre 2.13.0; to be removed in 3.0
        parent::__construct(
            [
                'eventSettings'   => \$config->getConfig(),
                'eventDetails'    => null,
                'event'           => \$log->getEvent(),
                'lead'            => \$log->getLead(),
                'systemTriggered' => true,
                'dateScheduled'   => \$log->getTriggerDate(),
            ],
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
     * @return bool
     */
    public function isReschedule()
    {
        return \$this->isReschedule;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Event/ScheduledEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/ScheduledEvent.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Event/ScheduledEvent.php");
    }
}
