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

/* @bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/Executioner/OrderExecutioner.php */
class __TwigTemplate_183f3754ca492a03a403f723c53bc8d08d741998e447b01e5c6ca83596782408 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Executioner;

use Mautic\\IntegrationsBundle\\Event\\InternalObjectCreateEvent;
use Mautic\\IntegrationsBundle\\Event\\InternalObjectUpdateEvent;
use Mautic\\IntegrationsBundle\\IntegrationEvents;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\OrderDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\Helper\\MappingHelper;
use Mautic\\IntegrationsBundle\\Sync\\Logger\\DebugLogger;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectProvider;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class OrderExecutioner
{
    /**
     * @var MappingHelper
     */
    private \$mappingHelper;

    /**
     * @var EventDispatcherInterface
     */
    private \$dispatcher;

    /**
     * @var ObjectProvider
     */
    private \$objectProvider;

    public function __construct(
        MappingHelper \$mappingHelper,
        EventDispatcherInterface \$dispatcher,
        ObjectProvider \$objectProvider
    ) {
        \$this->mappingHelper  = \$mappingHelper;
        \$this->dispatcher     = \$dispatcher;
        \$this->objectProvider = \$objectProvider;
    }

    public function execute(OrderDAO \$syncOrderDAO): void
    {
        \$identifiedObjects   = \$syncOrderDAO->getIdentifiedObjects();
        \$unidentifiedObjects = \$syncOrderDAO->getUnidentifiedObjects();

        foreach (\$identifiedObjects as \$objectName => \$updateObjects) {
            \$this->updateObjects(\$objectName, \$updateObjects, \$syncOrderDAO);
        }

        foreach (\$unidentifiedObjects as \$objectName => \$createObjects) {
            \$this->createObjects(\$objectName, \$createObjects);
        }
    }

    private function updateObjects(string \$objectName, array \$updateObjects, OrderDAO \$syncOrderDAO): void
    {
        \$updateCount = count(\$updateObjects);
        DebugLogger::log(
            MauticSyncDataExchange::NAME,
            sprintf(
                'Updating %d %s object(s)',
                \$updateCount,
                \$objectName
            ),
            __CLASS__.':'.__FUNCTION__
        );

        if (0 === \$updateCount) {
            return;
        }

        try {
            \$event = new InternalObjectUpdateEvent(
                \$this->objectProvider->getObjectByName(\$objectName),
                \$syncOrderDAO->getIdentifiedObjectIds(\$objectName),
                \$updateObjects
            );
        } catch (ObjectNotFoundException \$e) {
            DebugLogger::log(
                MauticSyncDataExchange::NAME,
                \$objectName,
                __CLASS__.':'.__FUNCTION__
            );
        }

        \$this->dispatcher->dispatch(IntegrationEvents::INTEGRATION_UPDATE_INTERNAL_OBJECTS, \$event);
        \$this->mappingHelper->updateObjectMappings(\$event->getUpdatedObjectMappings());
    }

    private function createObjects(string \$objectName, array \$createObjects): void
    {
        \$createCount = count(\$createObjects);

        DebugLogger::log(
            MauticSyncDataExchange::NAME,
            sprintf(
                'Creating %d %s object(s)',
                \$createCount,
                \$objectName
            ),
            __CLASS__.':'.__FUNCTION__
        );

        if (0 === \$createCount) {
            return;
        }

        try {
            \$event = new InternalObjectCreateEvent(
                \$this->objectProvider->getObjectByName(\$objectName),
                \$createObjects
            );
        } catch (ObjectNotFoundException \$e) {
            DebugLogger::log(
                MauticSyncDataExchange::NAME,
                \$objectName,
                __CLASS__.':'.__FUNCTION__
            );
        }

        \$this->dispatcher->dispatch(IntegrationEvents::INTEGRATION_CREATE_INTERNAL_OBJECTS, \$event);
        \$this->mappingHelper->saveObjectMappings(\$event->getObjectMappings());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/Executioner/OrderExecutioner.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/Executioner/OrderExecutioner.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/Executioner/OrderExecutioner.php");
    }
}
