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

/* @bundles/PluginBundle/Entity/Integration.php */
class __TwigTemplate_40e35acf8ea5888df066f41c25d6c7a5e09613170553eb00d841a98335a28ee3 extends Template
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

namespace Mautic\\PluginBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\CommonEntity;

/**
 * Class Integration.
 */
class Integration extends CommonEntity
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var Plugin|null
     */
    private \$plugin;

    /**
     * @var string
     */
    private \$name;

    /**
     * @var bool
     */
    private \$isPublished = false;

    /**
     * @var array
     */
    private \$supportedFeatures = [];

    /**
     * @var array
     */
    private \$apiKeys = [];

    /**
     * @var array
     */
    private \$featureSettings = [];

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('plugin_integration_settings')
            ->setCustomRepositoryClass('Mautic\\PluginBundle\\Entity\\IntegrationRepository');

        \$builder->createField('id', 'integer')
            ->isPrimaryKey()
            ->generatedValue()
            ->build();

        \$builder->createManyToOne('plugin', 'Plugin')
            ->inversedBy('integrations')
            ->addJoinColumn('plugin_id', 'id', true, false, 'CASCADE')
            ->build();

        \$builder->addField('name', 'string');

        \$builder->createField('isPublished', 'boolean')
            ->columnName('is_published')
            ->build();

        \$builder->createField('supportedFeatures', 'array')
            ->columnName('supported_features')
            ->nullable()
            ->build();

        \$builder->createField('apiKeys', 'array')
            ->columnName('api_keys')
            ->build();

        \$builder->createField('featureSettings', 'array')
            ->columnName('feature_settings')
            ->nullable()
            ->build();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return Plugin|null
     */
    public function getPlugin()
    {
        return \$this->plugin;
    }

    /**
     * @param mixed \$plugin
     *
     * @return Integration
     */
    public function setPlugin(\$plugin)
    {
        \$this->plugin = \$plugin;

        return \$this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * @param mixed \$name
     *
     * @return Integration
     */
    public function setName(\$name)
    {
        \$this->isChanged('name', \$name);

        \$this->name = \$name;

        return \$this;
    }

    /**
     * @return mixed
     */
    public function getIsPublished()
    {
        return \$this->isPublished;
    }

    /**
     * @param mixed \$isPublished
     *
     * @return Integration
     */
    public function setIsPublished(\$isPublished)
    {
        \$this->isChanged('isPublished', \$isPublished);

        \$this->isPublished = \$isPublished;

        return \$this;
    }

    public function isPublished(): bool
    {
        return \$this->isPublished;
    }

    /**
     * @return mixed
     */
    public function getSupportedFeatures()
    {
        return \$this->supportedFeatures;
    }

    /**
     * @param mixed \$supportedFeatures
     *
     * @return Integration
     */
    public function setSupportedFeatures(\$supportedFeatures)
    {
        \$this->isChanged('supportedFeatures', \$supportedFeatures);

        \$this->supportedFeatures = \$supportedFeatures;

        return \$this;
    }

    /**
     * @return mixed
     */
    public function getApiKeys()
    {
        return \$this->apiKeys;
    }

    /**
     * @param mixed \$apiKeys
     *
     * @return Integration
     */
    public function setApiKeys(\$apiKeys)
    {
        \$this->apiKeys = \$apiKeys;

        return \$this;
    }

    /**
     * @return mixed
     */
    public function getFeatureSettings()
    {
        return \$this->featureSettings;
    }

    /**
     * @param mixed \$featureSettings
     *
     * @return Integration
     */
    public function setFeatureSettings(\$featureSettings)
    {
        \$this->isChanged('featureSettings', \$featureSettings);

        \$this->featureSettings = \$featureSettings;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Entity/Integration.php";
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
        return new Source("", "@bundles/PluginBundle/Entity/Integration.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Entity/Integration.php");
    }
}
