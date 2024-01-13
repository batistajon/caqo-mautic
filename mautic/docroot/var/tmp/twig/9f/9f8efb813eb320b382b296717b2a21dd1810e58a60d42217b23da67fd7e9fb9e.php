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

/* @bundles/IntegrationsBundle/Sync/DAO/Sync/Report/ReportDAO.php */
class __TwigTemplate_6a46dd19762016880d2debce2bfdf37ddc1f85b5948d6733efefc910b09a43e9 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\RemappedObjectDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InformationChangeRequestDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\RelationsDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\FieldNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotFoundException;

class ReportDAO
{
    /**
     * @var string
     */
    private \$integration;

    /**
     * @var array
     */
    private \$objects = [];

    /**
     * @var array
     */
    private \$remappedObjects = [];

    /**
     * @var RelationsDAO
     */
    private \$relationsDAO;

    /**
     * @param \$integration
     */
    public function __construct(\$integration)
    {
        \$this->integration     = \$integration;
        \$this->relationsDAO    = new RelationsDAO();
    }

    /**
     * @return string
     */
    public function getIntegration()
    {
        return \$this->integration;
    }

    /**
     * @return \$this
     */
    public function addObject(ObjectDAO \$objectDAO)
    {
        if (!isset(\$this->objects[\$objectDAO->getObject()])) {
            \$this->objects[\$objectDAO->getObject()] = [];
        }

        \$this->objects[\$objectDAO->getObject()][\$objectDAO->getObjectId()] = \$objectDAO;

        return \$this;
    }

    /**
     * @param mixed  \$oldObjectId
     * @param string \$oldObjectName
     * @param string \$newObjectName
     * @param mixed  \$newObjectId
     */
    public function remapObject(\$oldObjectName, \$oldObjectId, \$newObjectName, \$newObjectId = null): void
    {
        if (null === \$newObjectId) {
            \$newObjectId = \$oldObjectId;
        }

        \$this->remappedObjects[\$oldObjectId] = new RemappedObjectDAO(\$this->integration, \$oldObjectName, \$oldObjectId, \$newObjectName, \$newObjectId);
    }

    /**
     * @param \$objectName
     * @param \$objectId
     * @param \$fieldName
     *
     * @return InformationChangeRequestDAO
     *
     * @throws ObjectNotFoundException
     * @throws FieldNotFoundException
     */
    public function getInformationChangeRequest(\$objectName, \$objectId, \$fieldName)
    {
        if (empty(\$this->objects[\$objectName][\$objectId])) {
            throw new ObjectNotFoundException(\$objectName.':'.\$objectId);
        }

        /** @var ObjectDAO \$reportObject */
        \$reportObject             = \$this->objects[\$objectName][\$objectId];
        \$reportField              = \$reportObject->getField(\$fieldName);
        \$informationChangeRequest = new InformationChangeRequestDAO(
            \$this->integration,
            \$objectName,
            \$objectId,
            \$fieldName,
            \$reportField->getValue()
        );

        \$informationChangeRequest->setPossibleChangeDateTime(\$reportObject->getChangeDateTime())
            ->setCertainChangeDateTime(\$reportField->getChangeDateTime());

        return \$informationChangeRequest;
    }

    /**
     * @return ObjectDAO[]
     */
    public function getObjects(?string \$objectName)
    {
        \$returnedObjects = [];
        if (null === \$objectName) {
            foreach (\$this->objects as \$objects) {
                foreach (\$objects as \$object) {
                    \$returnedObjects[] = \$object;
                }
            }

            return \$returnedObjects;
        }

        return isset(\$this->objects[\$objectName]) ? \$this->objects[\$objectName] : [];
    }

    /**
     * @return RemappedObjectDAO[]
     */
    public function getRemappedObjects(): array
    {
        return \$this->remappedObjects;
    }

    /**
     * @param int \$objectId
     */
    public function getObject(string \$objectName, \$objectId): ?ObjectDAO
    {
        if (!isset(\$this->objects[\$objectName])) {
            return null;
        }

        if (!isset(\$this->objects[\$objectName][\$objectId])) {
            return null;
        }

        return \$this->objects[\$objectName][\$objectId];
    }

    /**
     * @return bool
     */
    public function shouldSync()
    {
        return !empty(\$this->objects);
    }

    public function getRelations(): RelationsDAO
    {
        return \$this->relationsDAO;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Sync/Report/ReportDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Sync/Report/ReportDAO.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Sync/Report/ReportDAO.php");
    }
}
