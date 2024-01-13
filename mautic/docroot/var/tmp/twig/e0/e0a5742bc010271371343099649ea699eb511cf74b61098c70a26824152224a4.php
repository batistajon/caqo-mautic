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

/* @bundles/LeadBundle/EventListener/MaintenanceSubscriber.php */
class __TwigTemplate_799dc000ec9249d27fa55eadc54bda085dd539deed0e62b888d511150268f51d extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Doctrine\\DBAL\\Connection;
use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\MaintenanceEvent;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class MaintenanceSubscriber implements EventSubscriberInterface
{
    /**
     * @var Connection
     */
    private \$db;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    public function __construct(Connection \$db, TranslatorInterface \$translator)
    {
        \$this->db         = \$db;
        \$this->translator = \$translator;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            CoreEvents::MAINTENANCE_CLEANUP_DATA => ['onDataCleanup', 0],
        ];
    }

    public function onDataCleanup(MaintenanceEvent \$event)
    {
        \$qb = \$this->db->createQueryBuilder()
            ->setParameter('date', \$event->getDate()->format('Y-m-d H:i:s'));

        if (\$event->isDryRun()) {
            \$qb->select('count(*) as records')
              ->from(MAUTIC_TABLE_PREFIX.'leads', 'l')
              ->where(\$qb->expr()->lte('l.last_active', ':date'));

            if (false === \$event->isGdpr()) {
                \$qb->andWhere(\$qb->expr()->isNull('l.date_identified'));
            } else {
                \$qb->orWhere(
                  \$qb->expr()->andX(
                    \$qb->expr()->lte('l.date_added', ':date2'),
                    \$qb->expr()->isNull('l.last_active')
                  ));
                \$qb->setParameter('date2', \$event->getDate()->format('Y-m-d H:i:s'));
            }
            \$rows = \$qb->execute()->fetchColumn();
        } else {
            \$qb->select('l.id')->from(MAUTIC_TABLE_PREFIX.'leads', 'l')
              ->where(\$qb->expr()->lte('l.last_active', ':date'));

            if (false === \$event->isGdpr()) {
                \$qb->andWhere(\$qb->expr()->isNull('l.date_identified'));
            } else {
                \$qb->orWhere(
                  \$qb->expr()->andX(
                    \$qb->expr()->lte('l.date_added', ':date2'),
                    \$qb->expr()->isNull('l.last_active')
                  ));
                \$qb->setParameter('date2', \$event->getDate()->format('Y-m-d H:i:s'));
            }

            \$rows = 0;
            \$qb->setMaxResults(10000)->setFirstResult(0);

            \$qb2 = \$this->db->createQueryBuilder();
            while (true) {
                \$leadsIds = array_column(\$qb->execute()->fetchAll(), 'id');
                if (0 === sizeof(\$leadsIds)) {
                    break;
                }
                foreach (\$leadsIds as \$leadId) {
                    \$rows += \$qb2->delete(MAUTIC_TABLE_PREFIX.'leads')
                      ->where(
                        \$qb2->expr()->eq(
                          'id', \$leadId
                        )
                      )->execute();
                }
            }
        }

        \$event->setStat(\$this->translator->trans('mautic.maintenance.visitors'), \$rows, \$qb->getSQL(), \$qb->getParameters());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/EventListener/MaintenanceSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/MaintenanceSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/EventListener/MaintenanceSubscriber.php");
    }
}
