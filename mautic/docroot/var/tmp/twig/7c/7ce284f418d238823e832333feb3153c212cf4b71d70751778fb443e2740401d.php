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

/* @bundles/PluginBundle/Model/IntegrationEntityModel.php */
class __TwigTemplate_2582fcaf1e5bc2d96241c78aab43d8577719bc52fdba9c1d6b323d9d23457f1a extends Template
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

namespace Mautic\\PluginBundle\\Model;

use Mautic\\CoreBundle\\Model\\FormModel;
use Mautic\\PluginBundle\\Entity\\IntegrationEntity;
use Mautic\\PluginBundle\\Integration\\IntegrationObject;

/**
 * Class IntegrationEntityModel.
 */
class IntegrationEntityModel extends FormModel
{
    public function getIntegrationEntityRepository()
    {
        return \$this->em->getRepository(IntegrationEntity::class);
    }

    public function logDataSync(IntegrationObject \$integrationObject)
    {
    }

    public function getSyncedRecords(IntegrationObject \$integrationObject, \$integrationName, \$recordList, \$internalEntityId = null)
    {
        if (!\$formattedRecords = \$this->formatListOfContacts(\$recordList)) {
            return [];
        }

        \$integrationEntityRepo = \$this->getIntegrationEntityRepository();

        return \$integrationEntityRepo->getIntegrationsEntityId(
            \$integrationName,
            \$integrationObject->getType(),
            \$integrationObject->getInternalType(),
            \$internalEntityId,
            null,
            null,
            false,
            0,
            0,
            \$formattedRecords
        );
    }

    public function getRecordList(\$integrationObject)
    {
        \$recordList = [];

        foreach (\$integrationObject->getRecords() as \$record) {
            \$recordList[\$record['Id']] = [
                'id' => \$record['Id'],
            ];
        }

        return \$recordList;
    }

    public function formatListOfContacts(\$recordList)
    {
        if (empty(\$recordList)) {
            return null;
        }

        \$csList = is_array(\$recordList) ? implode('\", \"', array_keys(\$recordList)) : \$recordList;

        return '\"'.\$csList.'\"';
    }

    public function getMauticContactsById(\$mauticContactIds, \$integrationName, \$internalObject)
    {
        if (!\$formattedRecords = \$this->formatListOfContacts(\$mauticContactIds)) {
            return [];
        }
        \$integrationEntityRepo = \$this->getIntegrationEntityRepository();

        return \$integrationEntityRepo->getIntegrationsEntityId(
            \$integrationName,
            null,
            \$internalObject,
            null,
            null,
            null,
            false,
            0,
            0,
            \$formattedRecords
        );
    }

    /**
     * @param int \$id
     *
     * @return IntegrationEntity|null
     */
    public function getEntityByIdAndSetSyncDate(\$id, \\DateTime \$dateTime)
    {
        \$entity = \$this->getIntegrationEntityRepository()->find(\$id);
        if (\$entity) {
            \$entity->setLastSyncDate(\$dateTime);
        }

        return \$entity;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Model/IntegrationEntityModel.php";
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
        return new Source("", "@bundles/PluginBundle/Model/IntegrationEntityModel.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Model/IntegrationEntityModel.php");
    }
}
