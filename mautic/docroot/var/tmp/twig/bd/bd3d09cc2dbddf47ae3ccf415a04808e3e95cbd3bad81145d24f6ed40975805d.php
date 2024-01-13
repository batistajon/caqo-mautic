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

/* @bundles/CampaignBundle/Executioner/Event/DecisionExecutioner.php */
class __TwigTemplate_44db36a00968008e945d7854608d7d5d4a46c61b72c395231a85b146f0fcf3c7 extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Event;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\AbstractEventAccessor;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\DecisionAccessor;
use Mautic\\CampaignBundle\\Executioner\\Dispatcher\\DecisionDispatcher;
use Mautic\\CampaignBundle\\Executioner\\Exception\\CannotProcessEventException;
use Mautic\\CampaignBundle\\Executioner\\Exception\\DecisionNotApplicableException;
use Mautic\\CampaignBundle\\Executioner\\Logger\\EventLogger;
use Mautic\\CampaignBundle\\Executioner\\Result\\EvaluatedContacts;
use Mautic\\LeadBundle\\Entity\\Lead;

class DecisionExecutioner implements EventInterface
{
    const TYPE = 'decision';

    /**
     * @var EventLogger
     */
    private \$eventLogger;

    /**
     * @var DecisionDispatcher
     */
    private \$dispatcher;

    /**
     * DecisionExecutioner constructor.
     */
    public function __construct(EventLogger \$eventLogger, DecisionDispatcher \$dispatcher)
    {
        \$this->eventLogger = \$eventLogger;
        \$this->dispatcher  = \$dispatcher;
    }

    /**
     * @param mixed       \$passthrough
     * @param string|null \$channel
     * @param int|null    \$channelId
     *
     * @throws CannotProcessEventException
     * @throws DecisionNotApplicableException
     */
    public function evaluateForContact(DecisionAccessor \$config, Event \$event, Lead \$contact, \$passthrough = null, \$channel = null, \$channelId = null)
    {
        if (Event::TYPE_DECISION !== \$event->getEventType()) {
            throw new CannotProcessEventException('Cannot process event ID '.\$event->getId().' as a decision.');
        }

        \$log = \$this->eventLogger->buildLogEntry(\$event, \$contact);
        \$log->setChannel(\$channel)
            ->setChannelId(\$channelId);

        \$decisionEvent = \$this->dispatcher->dispatchRealTimeEvent(\$config, \$log, \$passthrough);

        if (!\$decisionEvent->wasDecisionApplicable()) {
            throw new DecisionNotApplicableException('evaluation failed');
        }

        \$this->eventLogger->persistLog(\$log);
    }

    /**
     * @return EvaluatedContacts
     *
     * @throws CannotProcessEventException
     */
    public function execute(AbstractEventAccessor \$config, ArrayCollection \$logs)
    {
        \$evaluatedContacts = new EvaluatedContacts();
        \$failedLogs        = [];

        /** @var LeadEventLog \$log */
        foreach (\$logs as \$log) {
            if (Event::TYPE_DECISION !== \$log->getEvent()->getEventType()) {
                throw new CannotProcessEventException('Event ID '.\$log->getEvent()->getId().' is not a decision');
            }

            try {
                /* @var DecisionAccessor \$config */
                \$this->dispatchEvent(\$config, \$log);
                \$evaluatedContacts->pass(\$log->getLead());

                // Update the date triggered timestamp
                \$log->setDateTriggered(new \\DateTime());
            } catch (DecisionNotApplicableException \$exception) {
                // Fail the contact but remove the log from being processed upstream
                // active/positive/green path while letting the InactiveExecutioner handle the inactive/negative/red paths
                \$failedLogs[] = \$log;
                \$evaluatedContacts->fail(\$log->getLead());
            }
        }

        \$this->dispatcher->dispatchDecisionResultsEvent(\$config, \$logs, \$evaluatedContacts);

        // Remove the logs
        foreach (\$failedLogs as \$log) {
            \$logs->removeElement(\$log);
        }

        return \$evaluatedContacts;
    }

    /**
     * @param mixed \$passthrough
     *
     * @throws DecisionNotApplicableException
     */
    private function dispatchEvent(DecisionAccessor \$config, LeadEventLog \$log, \$passthrough = null)
    {
        \$decisionEvent = \$this->dispatcher->dispatchEvaluationEvent(\$config, \$log, \$passthrough);

        if (!\$decisionEvent->wasDecisionApplicable()) {
            throw new DecisionNotApplicableException('evaluation failed');
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Executioner/Event/DecisionExecutioner.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Event/DecisionExecutioner.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Executioner/Event/DecisionExecutioner.php");
    }
}
