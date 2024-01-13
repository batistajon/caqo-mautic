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

/* @bundles/StageBundle/Event/StageBuilderEvent.php */
class __TwigTemplate_51cfd0f59c34885ffe567edd200b9acf01b94ec193e909e20a9f77ed510d25f5 extends Template
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

namespace Mautic\\StageBundle\\Event;

use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\Process\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Translation\\TranslatorInterface;

/**
 * Class StageBuilderEvent.
 */
class StageBuilderEvent extends Event
{
    /**
     * @var array
     */
    private \$actions = [];

    /**
     * @var Translator
     */
    private \$translator;

    /**
     * @param Translator \$translator
     */
    public function __construct(TranslatorInterface \$translator)
    {
        \$this->translator = \$translator;
    }

    /**
     * Adds an action to the list of available .
     *
     * @param string \$key    - a unique identifier; it is recommended that it be namespaced i.e. lead.action
     * @param array  \$action - can contain the following keys:
     *                       'label'           => (required) what to display in the list
     *                       'description'     => (optional) short description of event
     *                       'template'        => (optional) template to use for the action's HTML in the stage builder
     *                       i.e AcmeMyBundle:StageAction:theaction.html.php
     *                       'formType'        => (optional) name of the form type SERVICE for the action; will use a default form with stage change only
     *                       'formTypeOptions' => (optional) array of options to pass to formType
     *                       'callback'        => (optional) callback function that will be passed when the action is triggered; return true to
     *                       change the configured stages or false to ignore the action
     *                       The callback function can receive the following arguments by name (via ReflectionMethod::invokeArgs())
     *                       Mautic\\LeadBundle\\Entity\\Lead \$lead
     *                       \$eventDetails - variable sent from firing function to call back function
     *                       array \$action = array(
     *                       'id' => int
     *                       'type' => string
     *                       'name' => string
     *                       'properties' => array()
     *                       )
     *
     * @throws InvalidArgumentException
     */
    public function addAction(\$key, array \$action)
    {
        if (array_key_exists(\$key, \$this->actions)) {
            throw new InvalidArgumentException(\"The key, '\$key' is already used by another action. Please use a different key.\");
        }

        //check for required keys and that given functions are callable
        \$this->verifyComponent(
            ['group', 'label'],
            ['callback'],
            \$action
        );

        //translate the label and group
        \$action['label'] = \$this->translator->trans(\$action['label']);
        \$action['group'] = \$this->translator->trans(\$action['group']);

        \$this->actions[\$key] = \$action;
    }

    /**
     * Get actions.
     *
     * @return array
     */
    public function getActions()
    {
        uasort(\$this->actions, function (\$a, \$b) {
            return strnatcasecmp(
                \$a['label'], \$b['label']);
        });

        return \$this->actions;
    }

    /**
     * Gets a list of actions supported by the choice form field.
     *
     * @return array
     */
    public function getActionList()
    {
        \$list    = [];
        \$actions = \$this->getActions();
        foreach (\$actions as \$k => \$a) {
            \$list[\$k] = \$a['label'];
        }

        return \$list;
    }

    public function getActionChoices()
    {
        \$choices = [];
        \$actions = \$this->getActions();
        foreach (\$this->actions as \$k => \$c) {
            \$choices[\$c['group']][\$k] = \$c['label'];
        }

        return \$choices;
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
        return "@bundles/StageBundle/Event/StageBuilderEvent.php";
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
        return new Source("", "@bundles/StageBundle/Event/StageBuilderEvent.php", "/var/www/html/mautic/docroot/app/bundles/StageBundle/Event/StageBuilderEvent.php");
    }
}
