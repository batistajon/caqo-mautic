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

/* @bundles/SmsBundle/EventListener/CampaignSendSubscriber.php */
class __TwigTemplate_ad1ac235133dd435938e2ce2ec4bf34955e1535adea3a9044a0f5f304e1c4049 extends Template
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

namespace Mautic\\SmsBundle\\EventListener;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Event\\CampaignBuilderEvent;
use Mautic\\CampaignBundle\\Event\\CampaignExecutionEvent;
use Mautic\\SmsBundle\\Form\\Type\\SmsSendType;
use Mautic\\SmsBundle\\Model\\SmsModel;
use Mautic\\SmsBundle\\Sms\\TransportChain;
use Mautic\\SmsBundle\\SmsEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class CampaignSendSubscriber implements EventSubscriberInterface
{
    /**
     * @var SmsModel
     */
    private \$smsModel;

    /**
     * @var TransportChain
     */
    private \$transportChain;

    public function __construct(
        SmsModel \$smsModel,
        TransportChain \$transportChain
    ) {
        \$this->smsModel       = \$smsModel;
        \$this->transportChain = \$transportChain;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            CampaignEvents::CAMPAIGN_ON_BUILD     => ['onCampaignBuild', 0],
            SmsEvents::ON_CAMPAIGN_TRIGGER_ACTION => ['onCampaignTriggerAction', 0],
        ];
    }

    public function onCampaignBuild(CampaignBuilderEvent \$event)
    {
        if (count(\$this->transportChain->getEnabledTransports()) > 0) {
            \$event->addAction(
                'sms.send_text_sms',
                [
                    'label'            => 'mautic.campaign.sms.send_text_sms',
                    'description'      => 'mautic.campaign.sms.send_text_sms.tooltip',
                    'eventName'        => SmsEvents::ON_CAMPAIGN_TRIGGER_ACTION,
                    'formType'         => SmsSendType::class,
                    'formTypeOptions'  => ['update_select' => 'campaignevent_properties_sms'],
                    'formTheme'        => 'MauticSmsBundle:FormTheme\\SmsSendList',
                    'channel'          => 'sms',
                    'channelIdField'   => 'sms',
                ]
            );
        }
    }

    /**
     * @return void
     */
    public function onCampaignTriggerAction(CampaignExecutionEvent \$event)
    {
        \$lead  = \$event->getLead();
        \$smsId = (int) \$event->getConfig()['sms'];
        \$sms   = \$this->smsModel->getEntity(\$smsId);

        if (!\$sms) {
            \$event->setFailed('mautic.sms.campaign.failed.missing_entity');

            return;
        }

        if (!\$sms->isPublished()) {
            \$event->setFailed('mautic.sms.campaign.failed.unpublished');

            return;
        }

        \$result = \$this->smsModel->sendSms(\$sms, \$lead, ['channel' => ['campaign.event', \$event->getEvent()['id']]])[\$lead->getId()];

        if ('Authenticate' === \$result['status']) {
            // Don't fail the event but reschedule it for later
            \$event->setResult(false);

            return;
        }

        if (!empty(\$result['sent'])) {
            \$event->setChannel('sms', \$sms->getId());
            \$event->setResult(\$result);
        } else {
            \$result['failed'] = true;
            \$result['reason'] = \$result['status'];
            \$event->setResult(\$result);
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
        return "@bundles/SmsBundle/EventListener/CampaignSendSubscriber.php";
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
        return new Source("", "@bundles/SmsBundle/EventListener/CampaignSendSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/EventListener/CampaignSendSubscriber.php");
    }
}
