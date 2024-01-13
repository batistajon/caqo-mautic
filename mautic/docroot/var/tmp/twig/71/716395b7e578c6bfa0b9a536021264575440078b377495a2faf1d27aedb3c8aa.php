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

/* @bundles/IntegrationsBundle/Sync/Notification/Handler/ContactNotificationHandler.php */
class __TwigTemplate_590c519770b4682158a318bbda82610d906bdcf33087631a3f4d11306cb5603a extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\Notification\\Handler;

use Doctrine\\ORM\\EntityManagerInterface;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\NotificationDAO;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Helper\\UserSummaryNotificationHelper;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Writer;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadEventLog;
use Mautic\\LeadBundle\\Entity\\LeadEventLogRepository;

class ContactNotificationHandler implements HandlerInterface
{
    /**
     * @var Writer
     */
    private \$writer;

    /**
     * @var LeadEventLogRepository
     */
    private \$leadEventRepository;

    /**
     * @var EntityManagerInterface
     */
    private \$em;

    /**
     * @var UserSummaryNotificationHelper
     */
    private \$userNotificationHelper;

    /**
     * @var string
     */
    private \$integrationDisplayName;

    /**
     * @var string
     */
    private \$objectDisplayName;

    public function __construct(
        Writer \$writer,
        LeadEventLogRepository \$leadEventRepository,
        EntityManagerInterface \$em,
        UserSummaryNotificationHelper \$userNotificationHelper
    ) {
        \$this->writer                 = \$writer;
        \$this->leadEventRepository    = \$leadEventRepository;
        \$this->em                     = \$em;
        \$this->userNotificationHelper = \$userNotificationHelper;
    }

    public function getIntegration(): string
    {
        return MauticSyncDataExchange::NAME;
    }

    public function getSupportedObject(): string
    {
        return Contact::NAME;
    }

    /**
     * @throws \\Doctrine\\ORM\\ORMException
     */
    public function writeEntry(NotificationDAO \$notificationDAO, string \$integrationDisplayName, string \$objectDisplayName): void
    {
        \$this->integrationDisplayName = \$integrationDisplayName;
        \$this->objectDisplayName      = \$objectDisplayName;

        \$this->writer->writeAuditLogEntry(
            \$notificationDAO->getIntegration(),
            \$notificationDAO->getMauticObject(),
            \$notificationDAO->getMauticObjectId(),
            'sync',
            [
                'integrationObject'   => \$notificationDAO->getIntegrationObject(),
                'integrationObjectId' => \$notificationDAO->getIntegrationObjectId(),
                'message'             => \$notificationDAO->getMessage(),
            ]
        );

        \$this->writeEventLogEntry(\$notificationDAO->getIntegration(), \$notificationDAO->getMauticObjectId(), \$notificationDAO->getMessage());

        // Store these so we can send one notice to the user
        \$this->userNotificationHelper->storeSummaryNotification(\$integrationDisplayName, \$objectDisplayName, \$notificationDAO->getMauticObjectId());
    }

    public function finalize(): void
    {
        \$this->userNotificationHelper->writeNotifications(
            Contact::NAME,
            'mautic.integration.sync.user_notification.contact_message'
        );
    }

    /**
     * @throws \\Doctrine\\ORM\\ORMException
     */
    private function writeEventLogEntry(string \$integration, int \$contactId, string \$message): void
    {
        \$eventLog = new LeadEventLog();
        \$eventLog
            ->setLead(\$this->em->getReference(Lead::class, \$contactId))
            ->setBundle('integrations')
            ->setObject(\$integration)
            ->setAction('sync')
            ->setProperties(
                [
                    'message'     => \$message,
                    'integration' => \$this->integrationDisplayName,
                    'object'      => \$this->objectDisplayName,
                ]
            );

        \$this->leadEventRepository->saveEntity(\$eventLog);
        \$this->leadEventRepository->detachEntity(\$eventLog);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/Notification/Handler/ContactNotificationHandler.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Notification/Handler/ContactNotificationHandler.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/Notification/Handler/ContactNotificationHandler.php");
    }
}
