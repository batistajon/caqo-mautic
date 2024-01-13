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

/* @bundles/IntegrationsBundle/Sync/Helper/RelationsHelper.php */
class __TwigTemplate_51aba85cbe920cc95f46eae76dfb549d8c619bb4f9cc47d2748a2fd4fc956938 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\Helper;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\MappingManualDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\ObjectDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\RelationDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\ReportDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\InternalIdNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotFoundException;

class RelationsHelper
{
    private \$mappingHelper;
    private \$objectsToSynchronize = [];

    public function __construct(MappingHelper \$mappingsHelper)
    {
        \$this->mappingHelper = \$mappingsHelper;
    }

    public function processRelations(MappingManualDAO \$mappingManualDao, ReportDAO \$syncReport): void
    {
        \$this->objectsToSynchronize = [];
        foreach (\$syncReport->getRelations() as \$relationObject) {
            if (0 < \$relationObject->getRelObjectInternalId()) {
                continue;
            }

            \$this->processRelation(\$mappingManualDao, \$syncReport, \$relationObject);
        }
    }

    public function getObjectsToSynchronize(): array
    {
        return \$this->objectsToSynchronize;
    }

    /**
     * @throws \\Mautic\\IntegrationsBundle\\Sync\\Exception\\FieldNotFoundException
     * @throws \\Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectDeletedException
     * @throws \\Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotSupportedException
     */
    private function processRelation(MappingManualDAO \$mappingManualDao, ReportDAO \$syncReport, RelationDAO \$relationObject): void
    {
        \$relObjectDao = new ObjectDAO(\$relationObject->getRelObjectName(), \$relationObject->getRelObjectIntegrationId());

        try {
            \$internalObjectName = \$this->getInternalObjectName(\$mappingManualDao, \$relationObject->getRelObjectName());
            \$internalObjectId   = \$this->getInternalObjectId(\$mappingManualDao, \$relationObject, \$relObjectDao);
            \$this->addObjectInternalId(\$internalObjectId, \$internalObjectName, \$relationObject, \$syncReport);
        } catch (ObjectNotFoundException \$e) {
            return; // We are not mapping this object
        } catch (InternalIdNotFoundException  \$e) {
            \$this->objectsToSynchronize[] = \$relObjectDao;
        }
    }

    /**
     * @throws InternalIdNotFoundException
     */
    private function getInternalObjectId(MappingManualDAO \$mappingManualDao, RelationDAO \$relationObject, ObjectDAO \$relObjectDao): int
    {
        \$relObject        = \$this->findInternalObject(\$mappingManualDao, \$relationObject->getRelObjectName(), \$relObjectDao);
        \$internalObjectId = (int) \$relObject->getObjectId();

        if (\$internalObjectId) {
            return \$internalObjectId;
        }

        throw new InternalIdNotFoundException(\$relationObject->getRelObjectName());
    }

    /**
     * @throws ObjectNotFoundException
     * @throws \\Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectDeletedException
     * @throws \\Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotSupportedException
     */
    private function findInternalObject(MappingManualDAO \$mappingManualDao, string \$relObjectName, ObjectDAO \$objectDao): ObjectDAO
    {
        \$internalObjectsName = \$this->getInternalObjectName(\$mappingManualDao, \$relObjectName);

        return \$this->mappingHelper->findMauticObject(\$mappingManualDao, \$internalObjectsName, \$objectDao);
    }

    /**
     * @throws \\Mautic\\IntegrationsBundle\\Sync\\Exception\\FieldNotFoundException
     */
    private function addObjectInternalId(int \$relObjectId, string \$relInternalType, RelationDAO \$relationObject, ReportDAO \$syncReport): void
    {
        \$relationObject->setRelObjectInternalId(\$relObjectId);
        \$objectDAO      = \$syncReport->getObject(\$relationObject->getObjectName(), \$relationObject->getObjectIntegrationId());
        \$referenceValue = \$objectDAO->getField(\$relationObject->getRelFieldName())->getValue()->getNormalizedValue();
        \$referenceValue->setType(\$relInternalType);
        \$referenceValue->setValue(\$relObjectId);
    }

    /**
     * @return mixed
     *
     * @throws ObjectNotFoundException
     */
    private function getInternalObjectName(MappingManualDAO \$mappingManualDao, string \$relObjectName)
    {
        \$internalObjectsNames = \$mappingManualDao->getMappedInternalObjectsNames(\$relObjectName);

        return \$internalObjectsNames[0];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/Helper/RelationsHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Helper/RelationsHelper.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/Helper/RelationsHelper.php");
    }
}
