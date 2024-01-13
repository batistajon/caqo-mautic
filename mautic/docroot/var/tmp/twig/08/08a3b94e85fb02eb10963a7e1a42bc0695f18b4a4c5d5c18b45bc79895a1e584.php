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

/* @bundles/CampaignBundle/Event/CampaignScheduledEvent.php */
class __TwigTemplate_a669d639f859126a75b2be35dafd21ad192edf67768aedda29bbff4a0ea7b06b extends Template
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
use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Class CampaignScheduledEvent.
 *
 * @deprecated 2.13.0; to be removed in 3.0
 */
class CampaignScheduledEvent extends Event
{
    use EventArrayTrait;

    /**
     * @var \\Mautic\\LeadBundle\\Entity\\Lead
     */
    protected \$lead;

    /**
     * @var array
     */
    protected \$event;

    /**
     * @var array
     */
    protected \$eventDetails;

    /**
     * @var bool
     */
    protected \$systemTriggered;

    /**
     * @var \\DateTime
     */
    protected \$dateScheduled;

    /**
     * @var array
     */
    protected \$eventSettings;

    /**
     * @var LeadEventLog
     */
    protected \$log;

    /**
     * CampaignScheduledEvent constructor.
     *
     * @param \$args
     */
    public function __construct(array \$args, LeadEventLog \$log = null)
    {
        \$this->lead            = \$args['lead'];
        \$this->event           = \$args['event'];
        \$this->eventDetails    = \$args['eventDetails'];
        \$this->systemTriggered = \$args['systemTriggered'];
        \$this->dateScheduled   = \$args['dateScheduled'];
        \$this->eventSettings   = \$args['eventSettings'];

        \$this->log = \$log;
    }

    /**
     * @return \\Mautic\\LeadBundle\\Entity\\Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @return array
     */
    public function getEvent()
    {
        return (\$this->event instanceof \\Mautic\\CampaignBundle\\Entity\\Event) ? \$this->getEventArray(\$this->event) : \$this->event;
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return \$this->getEvent()['properties'];
    }

    /**
     * @return array
     */
    public function getEventDetails()
    {
        return \$this->eventDetails;
    }

    /**
     * @return bool
     */
    public function getSystemTriggered()
    {
        return \$this->systemTriggered;
    }

    /**
     * @return \\DateTime
     */
    public function getDateScheduled()
    {
        return \$this->dateScheduled;
    }

    /**
     * @return mixed
     */
    public function getEventSettings()
    {
        return \$this->eventSettings;
    }

    /**
     * @return LeadEventLog|null
     */
    public function getLog()
    {
        return \$this->log;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Event/CampaignScheduledEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/CampaignScheduledEvent.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Event/CampaignScheduledEvent.php");
    }
}
