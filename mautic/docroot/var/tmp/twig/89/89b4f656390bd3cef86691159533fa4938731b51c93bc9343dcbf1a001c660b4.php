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

/* @bundles/CampaignBundle/Executioner/Dispatcher/DecisionDispatcher.php */
class __TwigTemplate_eeaec39e9100cbacb7bcd61ae17cd6db6bfbc487ef6620d0709d879040b7be53 extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Dispatcher;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Event\\DecisionEvent;
use Mautic\\CampaignBundle\\Event\\DecisionResultsEvent;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\DecisionAccessor;
use Mautic\\CampaignBundle\\Executioner\\Result\\EvaluatedContacts;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class DecisionDispatcher
{
    /**
     * @var EventDispatcherInterface
     */
    private \$dispatcher;

    /**
     * @var LegacyEventDispatcher
     */
    private \$legacyDispatcher;

    /**
     * DecisionDispatcher constructor.
     */
    public function __construct(
        EventDispatcherInterface \$dispatcher,
        LegacyEventDispatcher \$legacyDispatcher
    ) {
        \$this->dispatcher       = \$dispatcher;
        \$this->legacyDispatcher = \$legacyDispatcher;
    }

    /**
     * @param mixed \$passthrough
     *
     * @return DecisionEvent
     */
    public function dispatchRealTimeEvent(DecisionAccessor \$config, LeadEventLog \$log, \$passthrough)
    {
        \$event = new DecisionEvent(\$config, \$log, \$passthrough);
        \$this->dispatcher->dispatch(\$config->getEventName(), \$event);

        return \$event;
    }

    /**
     * @return DecisionEvent
     */
    public function dispatchEvaluationEvent(DecisionAccessor \$config, LeadEventLog \$log)
    {
        \$event = new DecisionEvent(\$config, \$log);

        \$this->dispatcher->dispatch(CampaignEvents::ON_EVENT_DECISION_EVALUATION, \$event);
        \$this->legacyDispatcher->dispatchDecisionEvent(\$event);

        return \$event;
    }

    public function dispatchDecisionResultsEvent(DecisionAccessor \$config, ArrayCollection \$logs, EvaluatedContacts \$evaluatedContacts)
    {
        if (!\$logs->count()) {
            return;
        }

        \$this->dispatcher->dispatch(
            CampaignEvents::ON_EVENT_DECISION_EVALUATION_RESULTS,
            new DecisionResultsEvent(\$config, \$logs, \$evaluatedContacts)
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
        return "@bundles/CampaignBundle/Executioner/Dispatcher/DecisionDispatcher.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Dispatcher/DecisionDispatcher.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Executioner/Dispatcher/DecisionDispatcher.php");
    }
}
