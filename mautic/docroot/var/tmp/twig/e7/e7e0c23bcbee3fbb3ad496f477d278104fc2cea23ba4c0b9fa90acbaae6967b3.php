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

/* @bundles/WebhookBundle/Form/DataTransformer/EventsToArrayTransformer.php */
class __TwigTemplate_66c3211e26911ad4c4db4a0d075c840851345c5471a75776c59db0c66c386c9c extends Template
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

namespace Mautic\\WebhookBundle\\Form\\DataTransformer;

use Doctrine\\ORM\\PersistentCollection;
use Mautic\\WebhookBundle\\Entity\\Event;
use Mautic\\WebhookBundle\\Entity\\Webhook;
use Symfony\\Component\\Form\\DataTransformerInterface;

/**
 * Class EventsToArrayTransformer.
 */
class EventsToArrayTransformer implements DataTransformerInterface
{
    private \$webhook;

    public function __construct(Webhook \$webhook)
    {
        \$this->webhook = \$webhook;
    }

    /**
     * Convert from the PersistentCollection of Event entities to a simple array.
     *
     * @return array
     */
    public function transform(\$events)
    {
        \$eventArray = [];
        foreach (\$events as \$event) {
            \$eventArray[] = \$event->getEventType();
        }

        return \$eventArray;
    }

    /**
     * Convert a simple array into a PersistentCollection of Event entities.
     *
     * @return PersistentCollection
     */
    public function reverseTransform(\$submittedArray)
    {
        // Get a list of existing events and types

        //  /** @v ar PersistentCollection[] \$events */
        \$events     = \$this->webhook->getEvents();
        \$eventTypes = \$events->getKeys();

        // Check to see what events have been removed
        \$removed = array_diff(\$eventTypes, \$submittedArray);
        if (\$removed) {
            foreach (\$removed as \$type) {
                \$this->webhook->removeEvent(\$events[\$type]);
            }
        }

        // Now check to see what events have been added
        \$added = array_diff(\$submittedArray, \$eventTypes);
        if (\$added) {
            foreach (\$added as \$type) {
                // Create a new entity
                \$event = new Event();
                \$event->setWebhook(\$this->webhook)->setEventType(\$type);
                \$events[] = \$event;
            }
        }

        \$this->webhook->setEvents(\$events);

        return \$events;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Form/DataTransformer/EventsToArrayTransformer.php";
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
        return new Source("", "@bundles/WebhookBundle/Form/DataTransformer/EventsToArrayTransformer.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Form/DataTransformer/EventsToArrayTransformer.php");
    }
}
