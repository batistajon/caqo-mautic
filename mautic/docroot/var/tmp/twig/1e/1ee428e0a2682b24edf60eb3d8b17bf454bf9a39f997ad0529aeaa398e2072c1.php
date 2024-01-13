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

/* @bundles/ApiBundle/Serializer/Driver/ApiMetadataDriver.php */
class __TwigTemplate_3d0be215717fffc2c89ef0987df40705bd36d214bbf4f6768e704a56ee035e95 extends Template
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

namespace Mautic\\ApiBundle\\Serializer\\Driver;

use JMS\\Serializer\\Metadata\\ClassMetadata;
use JMS\\Serializer\\Metadata\\PropertyMetadata;
use Metadata\\ClassMetadata as BaseClassMetadata;
use Metadata\\Driver\\DriverInterface;
use ReflectionClass;
use ReflectionException;

class ApiMetadataDriver implements DriverInterface
{
    /**
     * @var ClassMetadata
     */
    private \$metadata;

    /**
     * @var PropertyMetadata[]
     */
    private \$properties = [];

    /**
     * @var string
     */
    private \$groupPrefix = '';

    /**
     * @var null
     */
    private \$defaultVersion = '1.0';

    /**
     * @var null
     */
    private \$currentPropertyName;

    /**
     * @return \\Metadata\\ClassMetadata
     *
     * @throws ReflectionException
     */
    public function loadMetadataForClass(ReflectionClass \$class): ?BaseClassMetadata
    {
        if (\$class->hasMethod('loadApiMetadata')) {
            \$this->metadata = new ClassMetadata(\$class->getName());

            \$class->getMethod('loadApiMetadata')->invoke(null, \$this);

            \$metadata = \$this->metadata;

            \$this->resetDefaults();

            return \$metadata;
        }

        return null;
    }

    private function resetDefaults()
    {
        \$this->metadata       = null;
        \$this->properties     = [];
        \$this->defaultVersion = '1.0';
        \$this->groupPrefix    = '';
    }

    /**
     * Set the root (base key).
     *
     * @param \$root
     *
     * @return \$this
     */
    public function setRoot(\$root)
    {
        \$this->metadata->xmlRootName = \$root;

        return \$this;
    }

    /**
     * Set prefix for the List and Details groups.
     *
     * @param \$name
     *
     * @return \$this
     */
    public function setGroupPrefix(\$name)
    {
        \$this->groupPrefix = \$name;

        return \$this;
    }

    /**
     * Set the default version for the properties if different than 1.0.
     *
     * @param \$version
     *
     * @return \$this
     */
    public function setDefaultVersion(\$version)
    {
        \$this->defaultVersion = \$version;

        return \$this;
    }

    /**
     * Create a new property.
     *
     * @param \$name
     *
     * @return \$this
     */
    public function createProperty(\$name)
    {
        if (!isset(\$this->properties[\$name])) {
            \$this->properties[\$name] = new PropertyMetadata(\$this->metadata->name, \$name);
        }

        \$this->currentPropertyName = \$name;

        return \$this;
    }

    /**
     * Add property and set default version and Details group.
     *
     * @param      \$name
     * @param null \$serializedName
     * @param bool \$useGetter
     *
     * @return \$this
     */
    public function addProperty(\$name, \$serializedName = null, \$useGetter = false)
    {
        if (empty(\$name)) {
            return \$this;
        }

        \$this->createProperty(\$name);

        if (\$useGetter && !\$this->properties[\$name]->getter) {
            \$this->properties[\$name]->getter = 'get'.ucfirst(\$name);
        }

        \$this->properties[\$name]->serializedName = \$serializedName ?? \$name;

        if (null !== \$this->defaultVersion) {
            // Set the default version
            \$this->setSinceVersion(\$this->defaultVersion);
        }

        if (null !== \$this->groupPrefix) {
            // Auto add to the Details group
            \$this->addGroup(\$this->groupPrefix.'Details');
        }

        return \$this;
    }

    /**
     * Create properties.
     *
     * @param bool|false \$addToListGroup
     * @param bool|false \$useGetter
     *
     * @return \$this
     */
    public function addProperties(array \$properties, \$addToListGroup = false, \$useGetter = false)
    {
        foreach (\$properties as \$prop) {
            if (!empty(\$prop)) {
                \$serializedName = null;
                if (is_array(\$prop)) {
                    list(\$prop, \$serializedName) = \$prop;
                }
                \$this->addProperty(\$prop, \$serializedName, \$useGetter);

                if (\$addToListGroup) {
                    \$this->inListGroup();
                }
            }
        }

        return \$this;
    }

    /**
     * Create properties and add to the List group.
     *
     * @return \$this
     */
    public function addListProperties(array \$properties)
    {
        \$this->addProperties(\$properties, true);

        return \$this;
    }

    /**
     * @param      \$version
     * @param null \$property
     *
     * @return \$this
     */
    public function setSinceVersion(\$version, \$property = null)
    {
        if (null === \$property) {
            \$property = \$this->getCurrentPropertyName();
        }

        \$this->properties[\$property]->sinceVersion = \$version;

        return \$this;
    }

    /**
     * @param      \$version
     * @param null \$property
     *
     * @return \$this
     */
    public function setUntilVersion(\$version, \$property = null)
    {
        if (null === \$property) {
            \$property = \$this->getCurrentPropertyName();
        }

        \$this->properties[\$property]->untilVersion = \$version;

        return \$this;
    }

    /**
     * @param      \$name
     * @param null \$property
     *
     * @return \$this
     */
    public function setSerializedName(\$name, \$property = null)
    {
        if (null === \$property) {
            \$property = \$this->getCurrentPropertyName();
        }

        \$this->properties[\$property]->serializedName = \$name;

        return \$this;
    }

    /**
     * Set the groups a property belongs to.
     *
     * @param \$groups
     * @param \$property
     *
     * @return \$this
     */
    public function setGroups(\$groups, \$property = null)
    {
        if (!is_array(\$groups)) {
            \$groups = [\$groups];
        }

        if (null === \$property) {
            \$property = \$this->getCurrentPropertyName();
        }

        \$this->properties[\$property]->groups = \$groups;

        return \$this;
    }

    /**
     * Add a group the property belongs to.
     *
     * @param      \$group
     * @param null \$property True to apply to all current properties
     *
     * @return \$this
     */
    public function addGroup(\$group, \$property = null)
    {
        if (true === \$property) {
            foreach (\$this->properties as \$prop => \$metadata) {
                \$this->addGroup(\$group, \$prop);
            }
        } else {
            if (null === \$property) {
                \$property = \$this->getCurrentPropertyName();
            }

            \$this->properties[\$property]->groups[] = \$group;
        }

        return \$this;
    }

    /**
     * Add property to the List group.
     *
     * @return \$this
     */
    public function inListGroup()
    {
        \$this->properties[\$this->currentPropertyName]->groups[] =
            \$this->groupPrefix.'List';

        return \$this;
    }

    /**
     * Set max depth for the property if an association.
     *
     * @param      \$depth
     * @param null \$property
     *
     * @return \$this
     */
    public function setMaxDepth(\$depth, \$property = null)
    {
        if (null === \$property) {
            \$property = \$this->getCurrentPropertyName();
        }

        \$this->properties[\$property]->maxDepth = (int) \$depth;

        return \$this;
    }

    /**
     * Push the properties into ClassMetadata.
     */
    public function build()
    {
        foreach (\$this->properties as \$prop) {
            \$this->metadata->addPropertyMetadata(\$prop);
        }

        \$this->currentPropertyName = null;
        \$this->properties          = [];
    }

    /**
     * @return string
     *
     * @throws \\Exception
     */
    protected function getCurrentPropertyName()
    {
        if (empty(\$this->currentPropertyName)) {
            throw new \\Exception('Current property is not set');
        }

        return \$this->currentPropertyName;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Serializer/Driver/ApiMetadataDriver.php";
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
        return new Source("", "@bundles/ApiBundle/Serializer/Driver/ApiMetadataDriver.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Serializer/Driver/ApiMetadataDriver.php");
    }
}