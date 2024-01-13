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

/* @bundles/IntegrationsBundle/Helper/FieldMergerHelper.php */
class __TwigTemplate_1aebe5c06f0e911a9e6cab1ab58b3c5cfe9ead681c5a615b543d46ebc1ff8436 extends Template
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

namespace Mautic\\IntegrationsBundle\\Helper;

use Mautic\\IntegrationsBundle\\Exception\\InvalidFormOptionException;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormSyncInterface;
use Mautic\\IntegrationsBundle\\Mapping\\MappedFieldInfoInterface;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\ObjectMappingDAO;

class FieldMergerHelper
{
    /**
     * @var ConfigFormSyncInterface
     */
    private \$integrationObject;

    /**
     * @var array
     */
    private \$currentFieldMappings;

    /**
     * @var MappedFieldInfoInterface[]
     */
    private \$allFields;

    public function __construct(ConfigFormSyncInterface \$integrationObject, array \$currentFieldMappings)
    {
        \$this->integrationObject    = \$integrationObject;
        \$this->currentFieldMappings = \$currentFieldMappings;
    }

    /**
     * @throws InvalidFormOptionException
     */
    public function mergeSyncFieldMapping(string \$object, array \$updatedFieldMappings): void
    {
        \$this->allFields = \$this->integrationObject->getAllFieldsForMapping(\$object);

        \$this->removeNonExistentFieldMappings(\$object);

        \$this->bindUpdatedFieldMappings(\$object, \$updatedFieldMappings);
    }

    public function getFieldMappings(): array
    {
        return \$this->currentFieldMappings;
    }

    private function removeNonExistentFieldMappings(string \$object): void
    {
        if (!isset(\$this->currentFieldMappings[\$object])) {
            \$this->currentFieldMappings[\$object] = [];
        }

        // Remove any fields that no longer exist
        \$this->currentFieldMappings[\$object] = array_intersect_key(\$this->currentFieldMappings[\$object], \$this->allFields);
    }

    /**
     * @throws InvalidFormOptionException
     */
    private function bindUpdatedFieldMappings(string \$object, array \$updatedFieldMappings): void
    {
        // Merge updated fields into current fields
        foreach (\$updatedFieldMappings as \$fieldName => \$fieldMapping) {
            if (!isset(\$this->allFields[\$fieldName])) {
                // Ignore as this field doesn't exist
                continue;
            }

            if (isset(\$this->currentFieldMappings[\$object][\$fieldName]) && !\$fieldMapping) {
                // Mapping was deleted
                unset(\$this->currentFieldMappings[\$object][\$fieldName]);

                continue;
            }

            if (isset(\$this->currentFieldMappings[\$object][\$fieldName])) {
                // Merge the data
                \$this->currentFieldMappings[\$object][\$fieldName] = [
                    'mappedField'   => \$this->getMergedMappedField(\$fieldMapping, \$object, \$fieldName),
                    'syncDirection' => \$this->getMergedSyncDirection(\$fieldMapping, \$object, \$fieldName),
                ];

                continue;
            }

            if (empty(\$fieldMapping['mappedField'])) {
                // Ignore this one because just direction was updated without a mapped field

                continue;
            }

            if (empty(\$fieldMapping['syncDirection'])) {
                \$fieldMapping['syncDirection'] = \$this->getDefaultSyncDirection(\$object, \$fieldName);
            }

            \$this->currentFieldMappings[\$object][\$fieldName] = \$fieldMapping;
        }
    }

    /**
     * @throws InvalidFormOptionException
     */
    private function getDefaultSyncDirection(string \$object, string \$fieldName): string
    {
        \$supportedDirections = \$this->getSupportedSyncDirections(\$fieldName);

        if (!empty(\$this->currentFieldMappings[\$object][\$fieldName]['syncDirection'])
            && in_array(
                \$this->currentFieldMappings[\$object][\$fieldName]['syncDirection'],
                \$supportedDirections
            )) {
            // Keep the already configured value
            return \$this->currentFieldMappings[\$object][\$fieldName]['syncDirection'];
        }

        return reset(\$supportedDirections);
    }

    /**
     * @throws InvalidFormOptionException
     */
    private function getSupportedSyncDirections(string \$fieldName): array
    {
        \$field               = \$this->allFields[\$fieldName];
        \$supportedDirections = [];

        if (\$field->isBidirectionalSyncEnabled()) {
            \$supportedDirections[] = ObjectMappingDAO::SYNC_BIDIRECTIONALLY;
        }

        if (\$field->isToIntegrationSyncEnabled()) {
            \$supportedDirections[] = ObjectMappingDAO::SYNC_TO_INTEGRATION;
        }

        if (\$field->isToMauticSyncEnabled()) {
            \$supportedDirections[] = ObjectMappingDAO::SYNC_TO_MAUTIC;
        }

        if (empty(\$supportedDirections)) {
            throw new InvalidFormOptionException('field \"'.\$field->getName().'\" must allow at least 1 direction for sync');
        }

        return \$supportedDirections;
    }

    private function getMergedSyncDirection(array \$fieldMapping, string \$object, string \$fieldName): string
    {
        if (empty(\$fieldMapping['syncDirection'])) {
            return \$this->getDefaultSyncDirection(\$object, \$fieldName);
        }

        \$supportedDirections = \$this->getSupportedSyncDirections(\$fieldName);
        if (in_array(\$fieldMapping['syncDirection'], \$supportedDirections)) {
            return \$fieldMapping['syncDirection'];
        }

        return reset(\$supportedDirections);
    }

    private function getMergedMappedField(array \$fieldMapping, string \$object, string \$fieldName): string
    {
        if (empty(\$fieldMapping['mappedField'])) {
            // Updating just the sync direction so return original value
            return \$this->currentFieldMappings[\$object][\$fieldName]['mappedField'];
        }

        return \$fieldMapping['mappedField'];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Helper/FieldMergerHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Helper/FieldMergerHelper.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Helper/FieldMergerHelper.php");
    }
}
