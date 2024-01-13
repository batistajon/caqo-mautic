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

/* @bundles/CampaignBundle/Controller/AjaxController.php */
class __TwigTemplate_d86047a6d51d8428d48366d1a7ef40cc66763a03ebb2fb4dc40060cc47316e2c extends Template
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

namespace Mautic\\CampaignBundle\\Controller;

use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Model\\EventLogModel;
use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * Class AjaxController.
 */
class AjaxController extends CommonAjaxController
{
    /**
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    protected function updateConnectionsAction(Request \$request)
    {
        \$session        = \$this->get('session');
        \$campaignId     = InputHelper::clean(\$request->query->get('campaignId'));
        \$canvasSettings = \$request->request->get('canvasSettings', [], true);
        if (empty(\$campaignId)) {
            \$dataArray = ['success' => 0];
        } else {
            \$session->set('mautic.campaign.'.\$campaignId.'.events.canvassettings', \$canvasSettings);

            \$dataArray = ['success' => 1];
        }

        return \$this->sendJsonResponse(\$dataArray);
    }

    protected function updateScheduledCampaignEventAction(Request \$request)
    {
        \$eventId      = (int) \$request->request->get('eventId');
        \$contactId    = (int) \$request->request->get('contactId');
        \$newDate      = InputHelper::clean(\$request->request->get('date'));
        \$originalDate = InputHelper::clean(\$request->request->get('originalDate'));

        \$dataArray = ['success' => 0, 'date' => \$originalDate];

        if (!empty(\$eventId) && !empty(\$contactId) && !empty(\$newDate)) {
            if (\$log = \$this->getContactEventLog(\$eventId, \$contactId)) {
                \$newDate = new \\DateTime(\$newDate);

                if (\$newDate >= new \\DateTime()) {
                    \$log->setTriggerDate(\$newDate);

                    /** @var EventLogModel \$logModel */
                    \$logModel = \$this->getModel('campaign.event_log');
                    \$logModel->saveEntity(\$log);

                    \$dataArray = [
                        'success' => 1,
                        'date'    => \$newDate->format('Y-m-d H:i:s'),
                    ];
                }
            }
        }

        // Format the date to match the view
        \$dataArray['formattedDate'] = \$this->get('mautic.helper.template.date')->toFull(\$dataArray['date']);

        return \$this->sendJsonResponse(\$dataArray);
    }

    /**
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    protected function cancelScheduledCampaignEventAction(Request \$request)
    {
        \$dataArray = ['success' => 0];

        \$eventId   = (int) \$request->request->get('eventId');
        \$contactId = (int) \$request->request->get('contactId');
        if (!empty(\$eventId) && !empty(\$contactId)) {
            if (\$log = \$this->getContactEventLog(\$eventId, \$contactId)) {
                \$log->setIsScheduled(false);

                /** @var EventLogModel \$logModel */
                \$logModel           = \$this->getModel('campaign.event_log');
                \$metadata           = \$log->getMetadata();
                \$metadata['errors'] = \$this->translator->trans(
                    'mautic.campaign.event.cancelled.time',
                    ['%date%' => \$log->getTriggerDate()->format('Y-m-d H:i:s')]
                );
                \$log->setMetadata(\$metadata);
                \$logModel->getRepository()->saveEntity(\$log);

                \$dataArray = ['success' => 1];
            }
        }

        return \$this->sendJsonResponse(\$dataArray);
    }

    /**
     * @param \$eventId
     * @param \$contactId
     *
     * @return LeadEventLog|null
     */
    protected function getContactEventLog(\$eventId, \$contactId)
    {
        \$contact = \$this->getModel('lead')->getEntity(\$contactId);
        if (\$contact) {
            if (\$this->get('mautic.security')->hasEntityAccess('lead:leads:editown', 'lead:leads:editother', \$contact->getPermissionUser())) {
                /** @var EventLogModel \$logModel */
                \$logModel = \$this->getModel('campaign.event_log');

                /** @var LeadEventLog \$log */
                \$log = \$logModel->getRepository()
                                ->findOneBy(
                                    [
                                        'lead'  => \$contactId,
                                        'event' => \$eventId,
                                    ],
                                    ['dateTriggered' => 'desc']
                                );

                if (\$log && (\$log->getTriggerDate() > new \\DateTime())) {
                    return \$log;
                }
            }
        }

        return null;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/CampaignBundle/Controller/AjaxController.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Controller/AjaxController.php");
    }
}
