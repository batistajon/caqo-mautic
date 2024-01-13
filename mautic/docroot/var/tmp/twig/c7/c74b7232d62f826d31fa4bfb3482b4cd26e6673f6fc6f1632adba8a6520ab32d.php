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

/* @bundles/LeadBundle/EventListener/CalendarSubscriber.php */
class __TwigTemplate_a1722f79c9c8e8f4e5bdf832292e951570b72402ff6a47261c01c728e5c755f1 extends Template
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
use Mautic\\CalendarBundle\\CalendarEvents;
use Mautic\\CalendarBundle\\Event\\CalendarGeneratorEvent;
use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class CalendarSubscriber implements EventSubscriberInterface
{
    /**
     * @var Connection
     */
    private \$connection;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var RouterInterface
     */
    private \$router;

    public function __construct(Connection \$connection, TranslatorInterface \$translator, RouterInterface \$router)
    {
        \$this->connection = \$connection;
        \$this->translator = \$translator;
        \$this->router     = \$router;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            CalendarEvents::CALENDAR_ON_GENERATE => ['onCalendarGenerate', 0],
        ];
    }

    /**
     * Adds events to the calendar.
     */
    public function onCalendarGenerate(CalendarGeneratorEvent \$event)
    {
        \$dates = \$event->getDates();

        // Lead Notes
        \$query = \$this->connection->createQueryBuilder();
        \$query->select('ln.lead_id, l.firstname, l.lastname, ln.date_time AS start, ln.text AS description, ln.type')
            ->from(MAUTIC_TABLE_PREFIX.'lead_notes', 'ln')
            ->leftJoin('ln', MAUTIC_TABLE_PREFIX.'leads', 'l', 'ln.lead_id = l.id')
            ->where(\$query->expr()->andX(
                \$query->expr()->gte('ln.date_time', ':start'),
                \$query->expr()->lte('ln.date_time', ':end')
            ))
            ->setParameter('start', \$dates['start_date'])
            ->setParameter('end', \$dates['end_date'])
            ->setFirstResult(0)
            ->setMaxResults(100);

        \$results = \$query->execute()->fetchAll();

        // We need to convert the date to a ISO8601 compliant string
        foreach (\$results as &\$object) {
            if (\$object['firstname'] || \$object['lastname']) {
                \$leadName = \$object['firstname'].' '.\$object['lastname'];
            } else {
                \$leadName = \$this->translator->trans('mautic.lead.lead.anonymous');
            }
            \$date                  = new DateTimeHelper(\$object['start']);
            \$object['start']       = \$date->toLocalString(\\DateTime::ISO8601);
            \$object['url']         = \$this->router->generate('mautic_contact_action', ['objectAction' => 'view', 'objectId' => \$object['lead_id']], true);
            \$object['attr']        = 'data-toggle=\"ajax\"';
            \$object['description'] = strip_tags(html_entity_decode(\$object['description']));

            switch (\$object['type']) {
                default:
                case 'general':
                    \$icon = 'fa-file-text';
                    break;
                case 'email':
                    \$icon = 'fa-send';
                    break;
                case 'call':
                    \$icon = 'fa-phone';
                    break;
                case 'meeting':
                    \$icon = 'fa-group';
                    break;
            }

            \$object['iconClass'] = 'fa fa-fw '.\$icon;
            \$object['title']     = \$leadName;
            //\$object['title'] .= ' (' . \$this->translator->trans('mautic.lead.note.type.' . \$object['type']) . ')';
        }

        \$event->addEvents(\$results);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/EventListener/CalendarSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/CalendarSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/EventListener/CalendarSubscriber.php");
    }
}
