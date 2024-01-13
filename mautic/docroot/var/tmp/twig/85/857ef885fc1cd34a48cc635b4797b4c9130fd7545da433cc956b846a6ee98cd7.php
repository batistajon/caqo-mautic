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

/* @bundles/IntegrationsBundle/Tests/Functional/Sync/Notification/NotifierTest.php */
class __TwigTemplate_b41c0fbd09add503d63d69aed6f460d8ea88751fc50f4c136f8190dbdb4c2ff7 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Functional\\Sync\\Notification;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\IntegrationsBundle\\Helper\\SyncIntegrationsHelper;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\NotificationDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\ObjectChangeDAO;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Notifier;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;
use Mautic\\IntegrationsBundle\\Tests\\Functional\\Services\\SyncService\\TestExamples\\Integration\\ExampleIntegration;
use Mautic\\IntegrationsBundle\\Tests\\Functional\\Services\\SyncService\\TestExamples\\Sync\\SyncDataExchange\\ExampleSyncDataExchange;
use Mautic\\LeadBundle\\DataFixtures\\ORM\\LoadLeadData;
use Mautic\\LeadBundle\\Entity\\Lead;

class NotifierTest extends MauticMysqlTestCase
{
    public function testNotifications(): void
    {
        \$this->installDatabaseFixtures([LoadLeadData::class]);

        \$leadRepository = \$this->em->getRepository(Lead::class);
        /** @var Lead[] \$leads */
        \$leads = \$leadRepository->findBy([], [], 2);

        /** @var SyncIntegrationsHelper \$syncIntegrationsHelper */
        \$syncIntegrationsHelper = self::\$container->get('mautic.integrations.helper.sync_integrations');
        \$syncIntegrationsHelper->addIntegration(new ExampleIntegration(new ExampleSyncDataExchange()));

        /** @var Notifier \$notifier */
        \$notifier = self::\$container->get('mautic.integrations.sync.notifier');

        \$contactNotification = new NotificationDAO(
            new ObjectChangeDAO(
                ExampleIntegration::NAME,
                'Foo',
                1,
                Contact::NAME,
                (int) \$leads[0]->getId()
            ),
            'This is the message'
        );
        \$companyNotification = new NotificationDAO(
            new ObjectChangeDAO(
                ExampleIntegration::NAME,
                'Bar',
                2,
                MauticSyncDataExchange::OBJECT_COMPANY,
                (int) \$leads[1]->getId()
            ),
            'This is the message'
        );

        \$notifier->noteMauticSyncIssue([\$contactNotification, \$companyNotification]);
        \$notifier->finalizeNotifications();

        // Check audit log
        \$qb = \$this->connection->createQueryBuilder();
        \$qb->select('1')
            ->from(MAUTIC_TABLE_PREFIX.'audit_log')
            ->where(
                \$qb->expr()->eq('bundle', \$qb->expr()->literal(ExampleIntegration::NAME))
            );

        \$this->assertCount(2, \$qb->execute()->fetchAll());

        // Contact event log
        \$qb = \$this->connection->createQueryBuilder();
        \$qb->select('1')
            ->from(MAUTIC_TABLE_PREFIX.'lead_event_log')
            ->where(
                \$qb->expr()->andX(
                    \$qb->expr()->eq('bundle', \$qb->expr()->literal('integrations')),
                    \$qb->expr()->eq('object', \$qb->expr()->literal(ExampleIntegration::NAME))
                )
            );
        \$this->assertCount(1, \$qb->execute()->fetchAll());

        // User notifications
        \$qb = \$this->connection->createQueryBuilder();
        \$qb->select('1')
            ->from(MAUTIC_TABLE_PREFIX.'notifications')
            ->where(
                \$qb->expr()->eq('icon_class', \$qb->expr()->literal('fa-refresh'))
            );
        \$this->assertCount(2, \$qb->execute()->fetchAll());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Functional/Sync/Notification/NotifierTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Functional/Sync/Notification/NotifierTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Functional/Sync/Notification/NotifierTest.php");
    }
}
