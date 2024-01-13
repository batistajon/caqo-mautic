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

/* @bundles/IntegrationsBundle/Sync/SyncService/SyncService.php */
class __TwigTemplate_2f8081cdbc736b1f1e070fdaf9df60507cf44cf732bc62ebdcbc3f810d9f29e6 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\SyncService;

use GuzzleHttp\\Exception\\ClientException;
use Mautic\\IntegrationsBundle\\Helper\\SyncIntegrationsHelper;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InputOptionsDAO;
use Mautic\\IntegrationsBundle\\Sync\\Helper\\MappingHelper;
use Mautic\\IntegrationsBundle\\Sync\\Helper\\RelationsHelper;
use Mautic\\IntegrationsBundle\\Sync\\Helper\\SyncDateHelper;
use Mautic\\IntegrationsBundle\\Sync\\Logger\\DebugLogger;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Notifier;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\SyncDataExchangeInterface;
use Mautic\\IntegrationsBundle\\Sync\\SyncProcess\\Direction\\Integration\\IntegrationSyncProcess;
use Mautic\\IntegrationsBundle\\Sync\\SyncProcess\\Direction\\Internal\\MauticSyncProcess;
use Mautic\\IntegrationsBundle\\Sync\\SyncProcess\\SyncProcess;
use Psr\\Log\\LogLevel;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

final class SyncService implements SyncServiceInterface
{
    /**
     * @var SyncDataExchangeInterface
     */
    private \$internalSyncDataExchange;

    /**
     * @var SyncDateHelper
     */
    private \$syncDateHelper;

    /**
     * @var MappingHelper
     */
    private \$mappingHelper;

    /**
     * @var RelationsHelper
     */
    private \$relationsHelper;

    /**
     * @var IntegrationSyncProcess
     */
    private \$integratinSyncProcess;

    /**
     * @var MauticSyncProcess
     */
    private \$mauticSyncProcess;

    /**
     * @var SyncIntegrationsHelper
     */
    private \$syncIntegrationsHelper;

    /**
     * @var EventDispatcherInterface
     */
    private \$eventDispatcher;

    /**
     * @var Notifier
     */
    private \$notifier;

    public function __construct(
        MauticSyncDataExchange \$internalSyncDataExchange,
        SyncDateHelper \$syncDateHelper,
        MappingHelper \$mappingHelper,
        RelationsHelper \$relationsHelper,
        SyncIntegrationsHelper \$syncIntegrationsHelper,
        EventDispatcherInterface \$eventDispatcher,
        Notifier \$notifier,
        IntegrationSyncProcess \$integrationSyncProcess,
        MauticSyncProcess \$mauticSyncProcess
    ) {
        \$this->internalSyncDataExchange = \$internalSyncDataExchange;
        \$this->syncDateHelper           = \$syncDateHelper;
        \$this->mappingHelper            = \$mappingHelper;
        \$this->relationsHelper          = \$relationsHelper;
        \$this->syncIntegrationsHelper   = \$syncIntegrationsHelper;
        \$this->eventDispatcher          = \$eventDispatcher;
        \$this->notifier                 = \$notifier;
        \$this->integratinSyncProcess    = \$integrationSyncProcess;
        \$this->mauticSyncProcess        = \$mauticSyncProcess;
    }

    /**
     * @throws \\Mautic\\IntegrationsBundle\\Exception\\IntegrationNotFoundException
     */
    public function processIntegrationSync(InputOptionsDAO \$inputOptionsDAO): void
    {
        \$integrationSyncProcess = new SyncProcess(
            \$this->syncDateHelper,
            \$this->mappingHelper,
            \$this->relationsHelper,
            \$this->integratinSyncProcess,
            \$this->mauticSyncProcess,
            \$this->eventDispatcher,
            \$this->notifier,
            \$this->syncIntegrationsHelper->getMappingManual(\$inputOptionsDAO->getIntegration()),
            \$this->internalSyncDataExchange,
            \$this->syncIntegrationsHelper->getSyncDataExchange(\$inputOptionsDAO->getIntegration()),
            \$inputOptionsDAO,
            \$this
        );

        DebugLogger::log(
            \$inputOptionsDAO->getIntegration(),
            sprintf(
                'Starting %s sync from %s date/time',
                \$inputOptionsDAO->isFirstTimeSync() ? 'first time' : 'subsequent',
                \$inputOptionsDAO->getStartDateTime() ? \$inputOptionsDAO->getStartDateTime()->format('Y-m-d H:i:s') : 'yet to be determined'
            ),
            __CLASS__.':'.__FUNCTION__
        );

        try {
            \$integrationSyncProcess->execute();
        } catch (ClientException \$exception) {
            // The sync failed to communicate with the integration so log it
            DebugLogger::log(\$inputOptionsDAO->getIntegration(), \$exception->getMessage(), null, [], LogLevel::ERROR);
        }
    }

    public function initiateDebugLogger(DebugLogger \$logger): void
    {
        // Yes it's a hack to prevent from having to pass the logger as a dependency into dozens of classes
        // So not doing anything with the logger, just need Symfony to initiate the service
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/SyncService/SyncService.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncService/SyncService.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/SyncService/SyncService.php");
    }
}
