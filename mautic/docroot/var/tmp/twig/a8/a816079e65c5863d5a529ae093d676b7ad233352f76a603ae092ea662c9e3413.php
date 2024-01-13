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

/* @bundles/IntegrationsBundle/Sync/SyncProcess/Direction/Integration/ObjectChangeGenerator.php */
class __TwigTemplate_8b3af2e523e05e02173c37d768fdc4775850010dadf06d9572e2647c4bb7291f extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\SyncProcess\\Direction\\Integration;

use Mautic\\IntegrationsBundle\\Exception\\InvalidValueException;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\FieldMappingDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\MappingManualDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\ObjectMappingDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\FieldDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\ObjectChangeDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\ObjectDAO as ReportObjectDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\ReportDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\FieldNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\Logger\\DebugLogger;
use Mautic\\IntegrationsBundle\\Sync\\SyncProcess\\Direction\\Helper\\ValueHelper;

class ObjectChangeGenerator
{
    /**
     * @var ValueHelper
     */
    private \$valueHelper;

    /**
     * @var ReportDAO
     */
    private \$syncReport;

    /**
     * @var MappingManualDAO
     */
    private \$mappingManual;

    /**
     * @var ReportObjectDAO
     */
    private \$internalObject;

    /**
     * @var ReportObjectDAO
     */
    private \$integrationObject;

    /**
     * @var ObjectChangeDAO
     */
    private \$objectChange;

    public function __construct(ValueHelper \$valueHelper)
    {
        \$this->valueHelper = \$valueHelper;
    }

    /**
     * @return ObjectChangeDAO
     *
     * @throws ObjectNotFoundException
     */
    public function getSyncObjectChange(
        ReportDAO \$syncReport,
        MappingManualDAO \$mappingManual,
        ObjectMappingDAO \$objectMapping,
        ReportObjectDAO \$internalObject,
        ReportObjectDAO \$integrationObject
    ) {
        \$this->syncReport        = \$syncReport;
        \$this->mappingManual     = \$mappingManual;
        \$this->internalObject    = \$internalObject;
        \$this->integrationObject = \$integrationObject;

        \$this->objectChange = new ObjectChangeDAO(
            \$this->mappingManual->getIntegration(),
            \$integrationObject->getObject(),
            \$integrationObject->getObjectId(),
            \$internalObject->getObject(),
            \$internalObject->getObjectId()
        );

        if (\$integrationObject->getObjectId()) {
            DebugLogger::log(
                \$this->mappingManual->getIntegration(),
                sprintf(
                    \"Mautic to integration; found a match between the integration %s:%s object and Mautic's %s:%s object\",
                    \$integrationObject->getObject(),
                    (string) \$integrationObject->getObjectId(),
                    \$internalObject->getObject(),
                    (string) \$internalObject->getObjectId()
                ),
                __CLASS__.':'.__FUNCTION__
            );
        } else {
            DebugLogger::log(
                \$this->mappingManual->getIntegration(),
                sprintf(
                    'Mautic to integration: no match found for %s:%s',
                    \$internalObject->getObject(),
                    (string) \$internalObject->getObjectId()
                ),
                __CLASS__.':'.__FUNCTION__
            );
        }

        /** @var FieldMappingDAO[] \$fieldMappings */
        \$fieldMappings = \$objectMapping->getFieldMappings();
        foreach (\$fieldMappings as \$fieldMappingDAO) {
            \$this->addFieldToObjectChange(\$fieldMappingDAO);
        }

        // Set the change date/time from the object so that we can update last sync date based on this
        \$this->objectChange->setChangeDateTime(\$internalObject->getChangeDateTime());

        return \$this->objectChange;
    }

    /**
     * @throws ObjectNotFoundException
     */
    private function addFieldToObjectChange(FieldMappingDAO \$fieldMappingDAO): void
    {
        try {
            \$fieldState = \$this->internalObject->getField(\$fieldMappingDAO->getInternalField())->getState();

            \$internalInformationChangeRequest = \$this->syncReport->getInformationChangeRequest(
                \$this->internalObject->getObject(),
                \$this->internalObject->getObjectId(),
                \$fieldMappingDAO->getInternalField()
            );
        } catch (FieldNotFoundException \$e) {
            return;
        }

        try {
            \$newValue = \$this->valueHelper->getValueForIntegration(
                \$internalInformationChangeRequest->getNewValue(),
                \$fieldState,
                \$fieldMappingDAO->getSyncDirection()
            );
        } catch (InvalidValueException \$e) {
            return; // Field has to be skipped
        }

        // Note: bidirectional conflicts were handled by Internal\\ObjectChangeGenerator
        \$this->objectChange->addField(
            new FieldDAO(\$fieldMappingDAO->getIntegrationField(), \$newValue),
            \$fieldState
        );

        /*
         * Below here is just debug logging
         */

        // ObjectMappingDAO::SYNC_TO_MAUTIC
        if (ObjectMappingDAO::SYNC_TO_MAUTIC === \$fieldMappingDAO->getSyncDirection()) {
            DebugLogger::log(
                \$this->mappingManual->getIntegration(),
                sprintf(
                    \"Mautic to integration; the %s object's %s field %s was added to the list of %s fields\",
                    \$this->integrationObject->getObject(),
                    \$fieldState,
                    \$fieldMappingDAO->getIntegrationField(),
                    \$fieldState
                ),
                __CLASS__.':'.__FUNCTION__
            );

            return;
        }

        // ObjectMappingDAO::SYNC_TO_INTEGRATION
        // ObjectMappingDAO::SYNC_BIDIRECTIONALLY
        DebugLogger::log(
            \$this->mappingManual->getIntegration(),
            sprintf(
                \"Mautic to integration; syncing %s object's %s field %s with a value of %s\",
                \$this->integrationObject->getObject(),
                \$fieldState,
                \$fieldMappingDAO->getIntegrationField(),
                var_export(\$newValue->getNormalizedValue(), true)
            ),
            __CLASS__.':'.__FUNCTION__
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/SyncProcess/Direction/Integration/ObjectChangeGenerator.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncProcess/Direction/Integration/ObjectChangeGenerator.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/SyncProcess/Direction/Integration/ObjectChangeGenerator.php");
    }
}
