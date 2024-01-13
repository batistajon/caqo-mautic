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

/* @bundles/CampaignBundle/Model/EventModel.php */
class __TwigTemplate_0e0eb5ba377107c25d9071b389c75fbbd0705566092a5c57f1416899dd9e9e50 extends Template
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

namespace Mautic\\CampaignBundle\\Model;

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository;
use Mautic\\CoreBundle\\Helper\\Chart\\ChartQuery;
use Mautic\\CoreBundle\\Helper\\Chart\\LineChart;
use Mautic\\CoreBundle\\Model\\FormModel;

class EventModel extends FormModel
{
    /**
     * @return \\Mautic\\CampaignBundle\\Entity\\EventRepository
     */
    public function getRepository()
    {
        return \$this->em->getRepository(Event::class);
    }

    /**
     * @return \\Mautic\\CampaignBundle\\Entity\\CampaignRepository
     */
    public function getCampaignRepository()
    {
        return \$this->em->getRepository(Campaign::class);
    }

    /**
     * @return LeadEventLogRepository
     */
    public function getLeadEventLogRepository()
    {
        return \$this->em->getRepository(LeadEventLog::class);
    }

    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getPermissionBase()
    {
        return 'campaign:campaigns';
    }

    /**
     * Get a specific entity or generate a new one if id is empty.
     *
     * @param \$id
     *
     * @return object|null
     */
    public function getEntity(\$id = null)
    {
        if (null === \$id) {
            return new Event();
        }

        return parent::getEntity(\$id);
    }

    /**
     * @param \$currentEvents
     * @param \$deletedEvents
     */
    public function deleteEvents(\$currentEvents, \$deletedEvents)
    {
        \$deletedKeys = [];
        foreach (\$deletedEvents as \$k => \$deleteMe) {
            if (\$deleteMe instanceof Event) {
                \$deleteMe = \$deleteMe->getId();
            }

            if (0 === strpos(\$deleteMe, 'new')) {
                unset(\$deletedEvents[\$k]);
            }

            if (isset(\$currentEvents[\$deleteMe])) {
                unset(\$deletedEvents[\$k]);
            }

            if (isset(\$deletedEvents[\$k])) {
                \$deletedKeys[] = \$deleteMe;
            }
        }

        if (count(\$deletedEvents)) {
            // wipe out any references to these events to prevent restraint violations
            \$this->getRepository()->nullEventRelationships(\$deletedKeys);

            foreach (\$deletedEvents as \$eventToDelete) {
                // delete the events
                \$this->getLeadEventLogRepository()->removeEventLogs(\$eventToDelete);
                \$this->deleteEntities([\$eventToDelete]);
            }
        }
    }

    /**
     * Get line chart data of campaign events.
     *
     * @param string \$unit          {@link php.net/manual/en/function.date.php#refsect1-function.date-parameters}
     * @param string \$dateFormat
     * @param array  \$filter
     * @param bool   \$canViewOthers
     *
     * @return array
     */
    public function getEventLineChartData(\$unit, \\DateTime \$dateFrom, \\DateTime \$dateTo, \$dateFormat = null, \$filter = [], \$canViewOthers = true)
    {
        \$chart = new LineChart(\$unit, \$dateFrom, \$dateTo, \$dateFormat);
        \$query = new ChartQuery(\$this->em->getConnection(), \$dateFrom, \$dateTo);
        \$q     = \$query->prepareTimeDataQuery('campaign_lead_event_log', 'date_triggered', \$filter);

        if (!\$canViewOthers) {
            \$q->join('t', MAUTIC_TABLE_PREFIX.'campaigns', 'c', 'c.id = t.campaign_id')
                ->andWhere('c.created_by = :userId')
                ->setParameter('userId', \$this->userHelper->getUser()->getId());
        }

        \$data = \$query->loadAndBuildTimeData(\$q);
        \$chart->setDataset(\$this->translator->trans('mautic.campaign.triggered.events'), \$data);

        return \$chart->render();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Model/EventModel.php";
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
        return new Source("", "@bundles/CampaignBundle/Model/EventModel.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Model/EventModel.php");
    }
}
