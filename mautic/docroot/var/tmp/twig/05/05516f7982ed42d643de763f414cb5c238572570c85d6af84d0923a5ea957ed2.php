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

/* @bundles/CoreBundle/EventListener/MaintenanceSubscriber.php */
class __TwigTemplate_90ebd1c37912b91be3e5af57a8589e2b6f1c03d520b99ac8b2faa6ec2a740b02 extends Template
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

namespace Mautic\\CoreBundle\\EventListener;

use Doctrine\\DBAL\\Connection;
use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\MaintenanceEvent;
use Mautic\\UserBundle\\Entity\\UserTokenRepositoryInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class MaintenanceSubscriber implements EventSubscriberInterface
{
    /**
     * @var Connection
     */
    private \$db;

    /**
     * @var UserTokenRepositoryInterface
     */
    private \$userTokenRepository;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    public function __construct(
        Connection \$db,
        UserTokenRepositoryInterface \$userTokenRepository,
        TranslatorInterface \$translator
    ) {
        \$this->db                  = \$db;
        \$this->userTokenRepository = \$userTokenRepository;
        \$this->translator          = \$translator;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            CoreEvents::MAINTENANCE_CLEANUP_DATA => ['onDataCleanup', -50],
        ];
    }

    public function onDataCleanup(MaintenanceEvent \$event)
    {
        \$this->cleanupData(\$event, 'audit_log');
        \$this->cleanupData(\$event, 'notifications');

        \$rows = \$this->userTokenRepository->deleteExpired(\$event->isDryRun());
        \$event->setStat(\$this->translator->trans('mautic.maintenance.user_tokens'), \$rows);
    }

    /**
     * @param string \$table
     */
    private function cleanupData(MaintenanceEvent \$event, \$table)
    {
        \$qb = \$this->db->createQueryBuilder()
            ->setParameter('date', \$event->getDate()->format('Y-m-d H:i:s'));

        if (\$event->isDryRun()) {
            \$rows = (int) \$qb->select('count(*) as records')
                ->from(MAUTIC_TABLE_PREFIX.\$table, 'log')
                ->where(
                    \$qb->expr()->lte('log.date_added', ':date')
                )
                ->execute()
                ->fetchColumn();
        } else {
            \$qb->select('log.id')
              ->from(MAUTIC_TABLE_PREFIX.\$table, 'log')
              ->where(
                \$qb->expr()->lte('log.date_added', ':date')
              );

            \$rows = 0;
            \$qb->setMaxResults(10000)->setFirstResult(0);

            \$qb2 = \$this->db->createQueryBuilder();
            while (true) {
                \$ids = array_column(\$qb->execute()->fetchAll(), 'id');

                if (0 === sizeof(\$ids)) {
                    break;
                }

                \$rows += \$qb2->delete(MAUTIC_TABLE_PREFIX.\$table)
                  ->where(
                    \$qb2->expr()->in(
                      'id', \$ids
                    )
                  )
                  ->execute();
            }
        }

        \$event->setStat(\$this->translator->trans('mautic.maintenance.'.\$table), \$rows, \$qb->getSQL(), \$qb->getParameters());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/EventListener/MaintenanceSubscriber.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/MaintenanceSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/EventListener/MaintenanceSubscriber.php");
    }
}
