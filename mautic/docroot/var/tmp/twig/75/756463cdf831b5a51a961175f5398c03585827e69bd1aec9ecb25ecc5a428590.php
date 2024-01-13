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

/* @bundles/PointBundle/Event/TriggerBuilderEvent.php */
class __TwigTemplate_258686f8d30704d60c4702f2e13d5d15a33894407879475dae8c3668e45845e8 extends Template
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

namespace Mautic\\PointBundle\\Event;

use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\Process\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Translation\\TranslatorInterface;

class TriggerBuilderEvent extends Event
{
    /**
     * @var array
     */
    private \$events = [];

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    public function __construct(TranslatorInterface \$translator)
    {
        \$this->translator = \$translator;
    }

    /**
     * Adds an action to the list of available .
     *
     * @param string \$key   - a unique identifier; it is recommended that it be namespaced i.e. lead.action
     * @param array  \$event - can contain the following keys:
     *                      'label'           => (required) what to display in the list
     *                      'description'     => (optional) short description of event
     *                      'template'        => (optional) template to use for the action's HTML in the point builder
     *                      i.e AcmeMyBundle:PointAction:theaction.html.php
     *                      'formType'        => (optional) name of the form type SERVICE for the action
     *                      'formTypeOptions' => (optional) array of options to pass to formType
     *                      'callback'        => (required) callback function that will be passed when the action is triggered
     *                      The callback function can receive the following arguments by name (via ReflectionMethod::invokeArgs())
     *                      Mautic\\CoreBundle\\Factory\\MauticFactory \$factory
     *                      Mautic\\PointBundle\\Entity\\TriggerEvent  \$event
     *                      Mautic\\LeadBundle\\Entity\\Lead           \$lead
     *
     * @throws InvalidArgumentException
     */
    public function addEvent(\$key, array \$event)
    {
        if (array_key_exists(\$key, \$this->events)) {
            throw new InvalidArgumentException(\"The key, '\$key' is already used by another action. Please use a different key.\");
        }

        //check for required keys and that given functions are callable
        \$this->verifyComponent(
            ['group', 'label'],
            ['callback'],
            \$event
        );

        //Support for old way with callback and new event based system
        //Could be removed after all events will be refactored to events. The key 'eventName' will be mandatory and 'callback' will be removed.
        if (!array_key_exists('callback', \$event) && !array_key_exists('eventName', \$event)) {
            throw new InvalidArgumentException(\"One of the 'callback' or 'eventName' has to be provided. Use 'eventName' for new code\");
        }

        \$event['label']       = \$this->translator->trans(\$event['label']);
        \$event['group']       = \$this->translator->trans(\$event['group']);
        \$event['description'] = (isset(\$event['description'])) ? \$this->translator->trans(\$event['description']) : '';

        \$this->events[\$key] = \$event;
    }

    /**
     * @return array
     */
    public function getEvents()
    {
        uasort(\$this->events, function (\$a, \$b) {
            return strnatcasecmp(
                \$a['label'], \$b['label']);
        });

        return \$this->events;
    }

    /**
     * @throws InvalidArgumentException
     */
    private function verifyComponent(array \$keys, array \$methods, array \$component)
    {
        foreach (\$keys as \$k) {
            if (!array_key_exists(\$k, \$component)) {
                throw new InvalidArgumentException(\"The key, '\$k' is missing.\");
            }
        }

        foreach (\$methods as \$m) {
            if (isset(\$component[\$m]) && !is_callable(\$component[\$m], true)) {
                throw new InvalidArgumentException(\$component[\$m].' is not callable.  Please ensure that it exists and that it is a fully qualified namespace.');
            }
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
        return "@bundles/PointBundle/Event/TriggerBuilderEvent.php";
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
        return new Source("", "@bundles/PointBundle/Event/TriggerBuilderEvent.php", "/var/www/html/mautic/docroot/app/bundles/PointBundle/Event/TriggerBuilderEvent.php");
    }
}
