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

/* @bundles/PluginBundle/Entity/IntegrationEntity.php */
class __TwigTemplate_06b4df1643e6a263f2b815aec53eaa6e5f7cb24b2374252f425917d51ee7adfd extends Template
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

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\CommonEntity;

/**
 * Class Plugin.
 */
class IntegrationEntity extends CommonEntity
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var string
     */
    private \$integration;

    /**
     * @var string
     */
    private \$integrationEntity;

    /**
     * @var string
     */
    private \$integrationEntityId;

    /**
     * @var \\DateTime
     */
    private \$dateAdded;

    /**
     * @var \\DateTime
     */
    private \$lastSyncDate;

    /**
     * @var string
     */
    private \$internalEntity;

    /**
     * @var int
     */
    private \$internalEntityId;

    /**
     * @var array
     */
    private \$internal;

    /**
     * IntegrationEntity constructor.
     */
    public function __construct()
    {
        \$this->internal = new ArrayCollection();
    }

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('integration_entity')
            ->setCustomRepositoryClass(IntegrationEntityRepository::class)
            ->addIndex(['integration', 'integration_entity', 'integration_entity_id'], 'integration_external_entity')
            ->addIndex(['integration', 'internal_entity', 'internal_entity_id'], 'integration_internal_entity')
            ->addIndex(['integration', 'internal_entity', 'integration_entity'], 'integration_entity_match')
            ->addIndex(['integration', 'last_sync_date'], 'integration_last_sync_date')
            ->addIndex(['internal_entity_id', 'integration_entity_id', 'internal_entity', 'integration_entity'], 'internal_integration_entity');

        \$builder->addId();

        \$builder->addDateAdded();

        \$builder->addNullableField('integration', 'string');

        \$builder->createField('integrationEntity', 'string')
            ->columnName('integration_entity')
            ->nullable()
            ->build();
        \$builder->createField('integrationEntityId', 'string')
            ->columnName('integration_entity_id')
            ->nullable()
            ->build();
        \$builder->createField('internalEntity', 'string')
            ->columnName('internal_entity')
            ->nullable()
            ->build();
        \$builder->createField('internalEntityId', 'integer')
            ->columnName('internal_entity_id')
            ->nullable()
            ->build();

        \$builder->createField('lastSyncDate', 'datetime')
            ->columnName('last_sync_date')
            ->nullable()
            ->build();

        \$builder->addNullableField('internal', 'array');
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return string
     */
    public function getIntegration()
    {
        return \$this->integration;
    }

    /**
     * @param string \$integration
     *
     * @return IntegrationEntity
     */
    public function setIntegration(\$integration)
    {
        \$this->integration = \$integration;

        return \$this;
    }

    /**
     * @return string
     */
    public function getIntegrationEntity()
    {
        return \$this->integrationEntity;
    }

    /**
     * @param string \$integrationEntity
     *
     * @return IntegrationEntity
     */
    public function setIntegrationEntity(\$integrationEntity)
    {
        \$this->integrationEntity = \$integrationEntity;

        return \$this;
    }

    /**
     * @return string
     */
    public function getIntegrationEntityId()
    {
        return \$this->integrationEntityId;
    }

    /**
     * @param string \$integrationEntityId
     *
     * @return IntegrationEntity
     */
    public function setIntegrationEntityId(\$integrationEntityId)
    {
        \$this->integrationEntityId = \$integrationEntityId;

        return \$this;
    }

    /**
     * @return \\DateTime
     */
    public function getDateAdded()
    {
        return \$this->dateAdded;
    }

    /**
     * @param \\DateTime \$dateAdded
     *
     * @return IntegrationEntity
     */
    public function setDateAdded(\$dateAdded)
    {
        \$this->dateAdded = \$dateAdded;

        return \$this;
    }

    /**
     * @return \\DateTime
     */
    public function getLastSyncDate()
    {
        return \$this->lastSyncDate;
    }

    /**
     * @param \\DateTime \$lastSyncDate
     *
     * @return IntegrationEntity
     */
    public function setLastSyncDate(\$lastSyncDate)
    {
        \$this->lastSyncDate = \$lastSyncDate;

        return \$this;
    }

    /**
     * @return string
     */
    public function getInternalEntity()
    {
        return \$this->internalEntity;
    }

    /**
     * @param string \$internalEntity
     *
     * @return IntegrationEntity
     */
    public function setInternalEntity(\$internalEntity)
    {
        \$this->internalEntity = \$internalEntity;

        return \$this;
    }

    /**
     * @return int
     */
    public function getInternalEntityId()
    {
        return \$this->internalEntityId;
    }

    /**
     * @param int \$internalEntityId
     *
     * @return IntegrationEntity
     */
    public function setInternalEntityId(\$internalEntityId)
    {
        \$this->internalEntityId = \$internalEntityId;

        return \$this;
    }

    /**
     * @return array
     */
    public function getInternal()
    {
        return \$this->internal;
    }

    /**
     * @param array \$internal
     *
     * @return IntegrationEntity
     */
    public function setInternal(\$internal)
    {
        \$this->internal = \$internal;

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
        return "@bundles/PluginBundle/Entity/IntegrationEntity.php";
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
        return new Source("", "@bundles/PluginBundle/Entity/IntegrationEntity.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Entity/IntegrationEntity.php");
    }
}
