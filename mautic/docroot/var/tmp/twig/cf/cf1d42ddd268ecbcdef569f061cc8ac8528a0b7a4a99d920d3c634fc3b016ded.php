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

/* @bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ReportBuilder/FullObjectReportBuilder.php */
class __TwigTemplate_53a13e861c31f2352c742714b27e62bb6ed7d424106465bdbf5b3e108b7e987e extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ReportBuilder;

use Mautic\\IntegrationsBundle\\Event\\InternalObjectFindEvent;
use Mautic\\IntegrationsBundle\\IntegrationEvents;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\DateRange;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\ObjectDAO as ReportObjectDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\ReportDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Request\\ObjectDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Request\\RequestDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\FieldNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\Logger\\DebugLogger;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectProvider;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class FullObjectReportBuilder
{
    /**
     * @var FieldBuilder
     */
    private \$fieldBuilder;

    /**
     * @var ObjectProvider
     */
    private \$objectProvider;

    /**
     * @var EventDispatcherInterface
     */
    private \$dispatcher;

    public function __construct(
        FieldBuilder \$fieldBuilder,
        ObjectProvider \$objectProvider,
        EventDispatcherInterface \$dispatcher
    ) {
        \$this->fieldBuilder   = \$fieldBuilder;
        \$this->objectProvider = \$objectProvider;
        \$this->dispatcher     = \$dispatcher;
    }

    public function buildReport(RequestDAO \$requestDAO): ReportDAO
    {
        \$syncReport       = new ReportDAO(MauticSyncDataExchange::NAME);
        \$requestedObjects = \$requestDAO->getObjects();
        \$limit            = 200;
        \$start            = \$limit * (\$requestDAO->getSyncIteration() - 1);

        foreach (\$requestedObjects as \$requestedObjectDAO) {
            try {
                DebugLogger::log(
                    MauticSyncDataExchange::NAME,
                    sprintf(
                        'Searching for %s objects between %s and %s (%d,%d)',
                        \$requestedObjectDAO->getObject(),
                        \$requestedObjectDAO->getFromDateTime()->format(DATE_ATOM),
                        \$requestedObjectDAO->getToDateTime()->format(DATE_ATOM),
                        \$start,
                        \$limit
                    ),
                    __CLASS__.':'.__FUNCTION__
                );

                \$event = new InternalObjectFindEvent(
                    \$this->objectProvider->getObjectByName(\$requestedObjectDAO->getObject())
                );

                if (\$requestDAO->getInputOptionsDAO()->getMauticObjectIds()) {
                    \$idChunks = array_chunk(\$requestDAO->getInputOptionsDAO()->getMauticObjectIds()->getObjectIdsFor(\$requestedObjectDAO->getObject()), \$limit);
                    \$idChunk  = \$idChunks[(\$requestDAO->getSyncIteration() - 1)] ?? [];
                    \$event->setIds(\$idChunk);
                } else {
                    \$event->setDateRange(
                        new DateRange(
                            \$requestedObjectDAO->getFromDateTime(),
                            \$requestedObjectDAO->getToDateTime()
                        )
                    );
                    \$event->setStart(\$start);
                    \$event->setLimit(\$limit);
                }

                \$this->dispatcher->dispatch(
                    IntegrationEvents::INTEGRATION_FIND_INTERNAL_RECORDS,
                    \$event
                );

                \$foundObjects = \$event->getFoundObjects();

                \$this->processObjects(\$requestedObjectDAO, \$syncReport, \$foundObjects);
            } catch (ObjectNotFoundException \$exception) {
                DebugLogger::log(
                    MauticSyncDataExchange::NAME,
                    \$exception->getMessage(),
                    __CLASS__.':'.__FUNCTION__
                );
            }
        }

        return \$syncReport;
    }

    private function processObjects(ObjectDAO \$requestedObjectDAO, ReportDAO \$syncReport, array \$foundObjects): void
    {
        \$fields = \$requestedObjectDAO->getFields();
        foreach (\$foundObjects as \$object) {
            \$modifiedDateTime = new \\DateTime(
                !empty(\$object['date_modified']) ? \$object['date_modified'] : \$object['date_added'],
                new \\DateTimeZone('UTC')
            );
            \$reportObjectDAO  = new ReportObjectDAO(\$requestedObjectDAO->getObject(), \$object['id'], \$modifiedDateTime);
            \$syncReport->addObject(\$reportObjectDAO);

            foreach (\$fields as \$field) {
                try {
                    \$reportFieldDAO = \$this->fieldBuilder->buildObjectField(\$field, \$object, \$requestedObjectDAO, \$syncReport->getIntegration());
                    \$reportObjectDAO->addField(\$reportFieldDAO);
                } catch (FieldNotFoundException \$exception) {
                    // Field is not supported so keep going
                    DebugLogger::log(
                        MauticSyncDataExchange::NAME,
                        \$exception->getMessage(),
                        __CLASS__.':'.__FUNCTION__
                    );
                }
            }
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ReportBuilder/FullObjectReportBuilder.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ReportBuilder/FullObjectReportBuilder.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ReportBuilder/FullObjectReportBuilder.php");
    }
}