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

/* @bundles/CampaignBundle/Executioner/Event/ActionExecutioner.php */
class __TwigTemplate_5545433870edac7f5c6307c4e4a577e06c91570b38634c9c7b0787149675962d extends Template
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
use Mautic\\CampaignBundle\\Executioner\\Dispatcher\\ActionDispatcher;
use Mautic\\CampaignBundle\\Executioner\\Exception\\CannotProcessEventException;
use Mautic\\CampaignBundle\\Executioner\\Logger\\EventLogger;
use Mautic\\CampaignBundle\\Executioner\\Result\\EvaluatedContacts;

class ActionExecutioner implements EventInterface
{
    const TYPE = 'action';

    /**
     * @var ActionDispatcher
     */
    private \$dispatcher;

    /**
     * @var EventLogger
     */
    private \$eventLogger;

    /**
     * ActionExecutioner constructor.
     */
    public function __construct(ActionDispatcher \$dispatcher, EventLogger \$eventLogger)
    {
        \$this->dispatcher         = \$dispatcher;
        \$this->eventLogger        = \$eventLogger;
    }

    /**
     * @return EvaluatedContacts
     *
     * @throws CannotProcessEventException
     * @throws \\Mautic\\CampaignBundle\\Executioner\\Dispatcher\\Exception\\LogNotProcessedException
     * @throws \\Mautic\\CampaignBundle\\Executioner\\Dispatcher\\Exception\\LogPassedAndFailedException
     */
    public function execute(AbstractEventAccessor \$config, ArrayCollection \$logs)
    {
        /** @var LeadEventLog \$firstLog */
        if (!\$firstLog = \$logs->first()) {
            return new EvaluatedContacts();
        }

        \$event = \$firstLog->getEvent();

        if (Event::TYPE_ACTION !== \$event->getEventType()) {
            throw new CannotProcessEventException('Cannot process event ID '.\$event->getId().' as an action.');
        }

        // Execute to process the batch of contacts
        \$pendingEvent = \$this->dispatcher->dispatchEvent(\$config, \$event, \$logs);

        /** @var ArrayCollection \$contacts */
        \$passed = \$this->eventLogger->extractContactsFromLogs(\$pendingEvent->getSuccessful());
        \$failed = \$this->eventLogger->extractContactsFromLogs(\$pendingEvent->getFailures());

        return new EvaluatedContacts(\$passed, \$failed);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Executioner/Event/ActionExecutioner.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Event/ActionExecutioner.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Executioner/Event/ActionExecutioner.php");
    }
}
