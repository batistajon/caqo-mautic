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

/* @bundles/FormBundle/Entity/Action.php */
class __TwigTemplate_abaf6ef7d34b93a5cd5dea1578103b82380d570822b72bf1149b8f4d74f8fcd6 extends Template
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

namespace Mautic\\FormBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * Class Action.
 */
class Action
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var string
     */
    private \$name;

    /**
     * @var string
     */
    private \$description;

    /**
     * @var string
     */
    private \$type;

    /**
     * @var int
     */
    private \$order = 0;

    /**
     * @var array
     */
    private \$properties = [];

    /**
     * @var Form
     */
    private \$form;

    /**
     * @var array
     */
    private \$changes;

    /**
     * Reset properties on clone.
     */
    public function __clone()
    {
        \$this->id   = null;
        \$this->form = null;
    }

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('form_actions')
            ->setCustomRepositoryClass('Mautic\\FormBundle\\Entity\\ActionRepository')
            ->addIndex(['type'], 'form_action_type_search');

        \$builder->addIdColumns();

        \$builder->createField('type', 'string')
            ->length(50)
            ->build();

        \$builder->createField('order', 'integer')
            ->columnName('action_order')
            ->build();

        \$builder->addField('properties', 'array');

        \$builder->createManyToOne('form', 'Form')
            ->inversedBy('actions')
            ->addJoinColumn('form_id', 'id', false, false, 'CASCADE')
            ->build();
    }

    /**
     * Prepares the metadata for API usage.
     *
     * @param \$metadata
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata)
    {
        \$metadata->setGroupPrefix('form')
            ->addProperties(
                [
                    'id',
                    'name',
                    'description',
                    'type',
                    'order',
                    'properties',
                ]
            )
            ->build();
    }

    public static function loadValidatorMetadata(ClassMetadata \$metadata)
    {
        \$metadata->addPropertyConstraint('type', new Assert\\NotBlank([
            'message' => 'mautic.core.name.required',
            'groups'  => ['action'],
        ]));
    }

    /**
     * @param \$prop
     * @param \$val
     */
    private function isChanged(\$prop, \$val)
    {
        if (\$this->\$prop != \$val) {
            \$this->changes[\$prop] = [\$this->\$prop, \$val];
        }
    }

    /**
     * @return array
     */
    public function getChanges()
    {
        return \$this->changes;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Set order.
     *
     * @param int \$order
     *
     * @return Action
     */
    public function setOrder(\$order)
    {
        \$this->isChanged('order', \$order);

        \$this->order = \$order;

        return \$this;
    }

    /**
     * Get order.
     *
     * @return int
     */
    public function getOrder()
    {
        return \$this->order;
    }

    /**
     * Set properties.
     *
     * @param array \$properties
     *
     * @return Action
     */
    public function setProperties(\$properties)
    {
        \$this->isChanged('properties', \$properties);

        \$this->properties = \$properties;

        return \$this;
    }

    /**
     * Get properties.
     *
     * @return array
     */
    public function getProperties()
    {
        return \$this->properties;
    }

    /**
     * Set form.
     *
     * @return Action
     */
    public function setForm(Form \$form)
    {
        \$this->form = \$form;

        return \$this;
    }

    /**
     * Get form.
     *
     * @return Form
     */
    public function getForm()
    {
        return \$this->form;
    }

    /**
     * Set type.
     *
     * @param string \$type
     *
     * @return Action
     */
    public function setType(\$type)
    {
        \$this->isChanged('type', \$type);
        \$this->type = \$type;

        return \$this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * @return array
     */
    public function convertToArray()
    {
        return get_object_vars(\$this);
    }

    /**
     * Set description.
     *
     * @param string \$description
     *
     * @return Action
     */
    public function setDescription(\$description)
    {
        \$this->isChanged('description', \$description);
        \$this->description = \$description;

        return \$this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return \$this->description;
    }

    /**
     * Set name.
     *
     * @param string \$name
     *
     * @return Action
     */
    public function setName(\$name)
    {
        \$this->isChanged('name', \$name);
        \$this->name = \$name;

        return \$this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Entity/Action.php";
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
        return new Source("", "@bundles/FormBundle/Entity/Action.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Entity/Action.php");
    }
}
