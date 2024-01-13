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

/* @bundles/IntegrationsBundle/Sync/DAO/Mapping/ObjectMappingDAO.php */
class __TwigTemplate_c4a248cb7b2fe4d76f7fc4ffe9d9b7dac04354b2a235aa021fe0d49edee05762 extends Template
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

declare(strict_types=1);

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping;

class ObjectMappingDAO
{
    const SYNC_TO_MAUTIC       = 'mautic';
    const SYNC_TO_INTEGRATION  = 'integration';
    const SYNC_BIDIRECTIONALLY = 'bidirectional';

    /**
     * @var string
     */
    private \$internalObjectName;

    /**
     * @var string
     */
    private \$integrationObjectName;

    /**
     * @var array
     */
    private \$internalIdMapping = [];

    /**
     * @var array
     */
    private \$integrationIdMapping = [];

    /**
     * @var FieldMappingDAO[]
     */
    private \$fieldMappings = [];

    public function __construct(string \$internalObjectName, string \$integrationObjectName)
    {
        \$this->internalObjectName    = \$internalObjectName;
        \$this->integrationObjectName = \$integrationObjectName;
    }

    /**
     * @param string \$internalField
     * @param string \$integrationField
     * @param string \$direction
     * @param bool   \$isRequired
     *
     * @return ObjectMappingDAO
     */
    public function addFieldMapping(\$internalField, \$integrationField, \$direction = self::SYNC_BIDIRECTIONALLY, \$isRequired = false): self
    {
        \$this->fieldMappings[] = new FieldMappingDAO(
            \$this->internalObjectName,
            \$internalField,
            \$this->integrationObjectName,
            \$integrationField,
            \$direction,
            \$isRequired
        );

        return \$this;
    }

    /**
     * @return FieldMappingDAO[]
     */
    public function getFieldMappings(): array
    {
        return \$this->fieldMappings;
    }

    public function getMappedIntegrationObjectId(int \$internalObjectId): ?int
    {
        if (array_key_exists(\$internalObjectId, \$this->internalIdMapping)) {
            return \$this->internalIdMapping[\$internalObjectId];
        }

        return null;
    }

    /**
     * @param mixed \$integrationObjectId
     *
     * @return mixed|null
     */
    public function getMappedInternalObjectId(\$integrationObjectId)
    {
        if (array_key_exists(\$integrationObjectId, \$this->integrationIdMapping)) {
            return \$this->integrationIdMapping[\$integrationObjectId];
        }

        return null;
    }

    public function getInternalObjectName(): string
    {
        return \$this->internalObjectName;
    }

    public function getIntegrationObjectName(): string
    {
        return \$this->integrationObjectName;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Mapping/ObjectMappingDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Mapping/ObjectMappingDAO.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Mapping/ObjectMappingDAO.php");
    }
}
