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

/* @bundles/CampaignBundle/EventCollector/EventCollector.php */
class __TwigTemplate_a4926e326e0c10ed2e1baa85e16fe345abd68892771c4285a85fe10b5c390aa8 extends Template
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

namespace Mautic\\CampaignBundle\\EventCollector;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Event\\CampaignBuilderEvent;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\AbstractEventAccessor;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\EventAccessor;
use Mautic\\CampaignBundle\\EventCollector\\Builder\\ConnectionBuilder;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class EventCollector
{
    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var EventDispatcherInterface
     */
    private \$dispatcher;

    /**
     * @var array
     */
    private \$eventsArray = [];

    /**
     * @var EventAccessor
     */
    private \$events;

    /**
     * EventCollector constructor.
     */
    public function __construct(TranslatorInterface \$translator, EventDispatcherInterface \$dispatcher)
    {
        \$this->translator = \$translator;
        \$this->dispatcher = \$dispatcher;
    }

    /**
     * @return EventAccessor
     */
    public function getEvents()
    {
        if (empty(\$this->eventsArray)) {
            \$this->buildEventList();
        }

        if (empty(\$this->events)) {
            \$this->events = new EventAccessor(\$this->eventsArray);
        }

        return \$this->events;
    }

    /**
     * @return AbstractEventAccessor
     */
    public function getEventConfig(Event \$event)
    {
        return \$this->getEvents()->getEvent(\$event->getEventType(), \$event->getType());
    }

    /**
     * Deprecated support for pre 2.13.
     *
     * @deprecated 2.13.0 to be removed in 3.0
     *
     * @param string|null \$type
     *
     * @return array|mixed
     */
    public function getEventsArray(\$type = null)
    {
        if (empty(\$this->eventsArray)) {
            \$this->buildEventList();
        }

        if (null !== \$type) {
            if (!isset(\$this->events[\$type])) {
                throw new \\InvalidArgumentException(\"\$type not found as array key\");
            }

            return \$this->eventsArray[\$type];
        }

        return \$this->eventsArray;
    }

    private function buildEventList()
    {
        //build them
        \$event  = new CampaignBuilderEvent(\$this->translator);
        \$this->dispatcher->dispatch(CampaignEvents::CAMPAIGN_ON_BUILD, \$event);

        \$this->eventsArray[Event::TYPE_ACTION]    = \$event->getActions();
        \$this->eventsArray[Event::TYPE_CONDITION] = \$event->getConditions();
        \$this->eventsArray[Event::TYPE_DECISION]  = \$event->getDecisions();

        \$this->eventsArray['connectionRestrictions'] = ConnectionBuilder::buildRestrictionsArray(\$this->eventsArray);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/EventCollector/EventCollector.php";
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
        return new Source("", "@bundles/CampaignBundle/EventCollector/EventCollector.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/EventCollector/EventCollector.php");
    }
}
