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

/* @bundles/CalendarBundle/Event/EventGeneratorEvent.php */
class __TwigTemplate_b33aa3098685ffe1ed8165993a79fc23e46c76fe580690e4b6dfe63bcf7dcff4 extends Template
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

namespace Mautic\\CalendarBundle\\Event;

use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Class EventGeneratorEvent.
 */
class EventGeneratorEvent extends Event
{
    /**
     * @var string
     */
    private \$source;

    /**
     * @var int
     */
    private \$entityId;

    /**
     * @var \\Mautic\\CoreBundle\\Model\\FormModel
     */
    private \$model;

    /**
     * @var \\Mautic\\CoreBundle\\Entity\\FormEntity
     */
    private \$entity;

    /**
     * @var string
     */
    private \$contentTemplate;

    /**
     * @var bool
     */
    private \$access = false;

    /**
     * @var string
     */
    private \$formName;

    /**
     * @param string \$source
     * @param int    \$id
     */
    public function __construct(\$source, \$entityId)
    {
        \$this->source   = \$source;
        \$this->entityId = \$entityId;
    }

    /**
     * Set content template.
     *
     * @param string \$contentTemplate
     */
    public function setContentTemplate(\$contentTemplate)
    {
        \$this->contentTemplate = \$contentTemplate;
    }

    /**
     * Fetches the event source.
     *
     * @return string
     */
    public function getSource()
    {
        return \$this->source;
    }

    /**
     * Fetches the event entityId.
     *
     * @return int
     */
    public function getEntityId()
    {
        return (int) \$this->entityId;
    }

    /**
     * Fetches the event model.
     *
     * @return \\Mautic\\CoreBundle\\Model\\FormModel
     */
    public function getModel()
    {
        return \$this->model;
    }

    /**
     * Set the event model.
     */
    public function setModel(\\Mautic\\CoreBundle\\Model\\FormModel \$model)
    {
        \$this->model = \$model;
    }

    /**
     * Fetches the event entity.
     *
     * @return \\Mautic\\CoreBundle\\Entity\\FormEntity
     */
    public function getEntity()
    {
        return \$this->entity;
    }

    /**
     * Set the event entity.
     */
    public function setEntity(\\Mautic\\CoreBundle\\Entity\\FormEntity \$entity)
    {
        \$this->entity = \$entity;
    }

    /**
     * Fetches the events content template.
     *
     * @return string
     */
    public function getContentTemplate()
    {
        return \$this->contentTemplate;
    }

    /**
     * Confirmes that user can access the entity.
     *
     * @return bool
     */
    public function hasAccess()
    {
        return \$this->access;
    }

    /**
     * Set the event access.
     */
    public function setAccess(\$access)
    {
        \$this->access = \$access;
    }

    /**
     * Fetches the name of the form which should be loaded in the modal.
     *
     * @return string
     */
    public function getFormName()
    {
        return \$this->formName;
    }

    /**
     * Set the event formName.
     */
    public function setFormName(\$formName)
    {
        \$this->formName = \$formName;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CalendarBundle/Event/EventGeneratorEvent.php";
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
        return new Source("", "@bundles/CalendarBundle/Event/EventGeneratorEvent.php", "/var/www/html/mautic/docroot/app/bundles/CalendarBundle/Event/EventGeneratorEvent.php");
    }
}
