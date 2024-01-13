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

/* @bundles/LeadBundle/EventListener/CampaignActionDNCSubscriber.php */
class __TwigTemplate_ea67e5a7a3c36f33fb971ab367f63cef69834a410e969669e4d47b4fcd900cf9 extends Template
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

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Event\\CampaignBuilderEvent;
use Mautic\\CampaignBundle\\Event\\PendingEvent;
use Mautic\\CoreBundle\\Helper\\ArrayHelper;
use Mautic\\LeadBundle\\Form\\Type\\CampaignActionAddDNCType;
use Mautic\\LeadBundle\\Form\\Type\\CampaignActionRemoveDNCType;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\LeadBundle\\Model\\DoNotContact;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class CampaignActionDNCSubscriber implements EventSubscriberInterface
{
    /**
     * @var DoNotContact
     */
    private \$doNotContact;

    /**
     * @var LeadModel
     */
    private \$leadModel;

    /**
     * CampaignActionDNCSubscriber constructor.
     */
    public function __construct(DoNotContact \$doNotContact, LeadModel \$leadModel)
    {
        \$this->doNotContact = \$doNotContact;
        \$this->leadModel    = \$leadModel;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            CampaignEvents::CAMPAIGN_ON_BUILD                  => ['configureAction', 0],
            LeadEvents::ON_CAMPAIGN_ACTION_ADD_DONOTCONTACT    => ['addDoNotContact', 0],
            LeadEvents::ON_CAMPAIGN_ACTION_REMOVE_DONOTCONTACT => ['removeDoNotContact', 0],
        ];
    }

    public function configureAction(CampaignBuilderEvent \$event)
    {
        \$event->addAction(
            'lead.adddnc',
            [
                'label'          => 'mautic.lead.lead.events.add_donotcontact',
                'description'    => 'mautic.lead.lead.events.add_donotcontact_desc',
                'batchEventName' => LeadEvents::ON_CAMPAIGN_ACTION_ADD_DONOTCONTACT,
                'formType'       => CampaignActionAddDNCType::class,
            ]
        );

        \$event->addAction(
            'lead.removednc',
            [
                'label'          => 'mautic.lead.lead.events.remove_donotcontact',
                'description'    => 'mautic.lead.lead.events.remove_donotcontact_desc',
                'batchEventName' => LeadEvents::ON_CAMPAIGN_ACTION_REMOVE_DONOTCONTACT,
                'formType'       => CampaignActionRemoveDNCType::class,
            ]
        );
    }

    public function addDoNotContact(PendingEvent \$event)
    {
        \$config          = \$event->getEvent()->getProperties();
        \$channels        = ArrayHelper::getValue('channels', \$config, []);
        \$reason          = ArrayHelper::getValue('reason', \$config, '');
        \$persistEntities = [];
        \$contacts        = \$event->getContactsKeyedById();
        foreach (\$contacts as \$contactId=>\$contact) {
            foreach (\$channels as \$channel) {
                \$this->doNotContact->addDncForContact(
                    \$contactId,
                    \$channel,
                    \\Mautic\\LeadBundle\\Entity\\DoNotContact::MANUAL,
                    \$reason,
                    false
                );
            }
            \$persistEntities[] = \$contact;
        }

        \$this->leadModel->saveEntities(\$persistEntities);

        \$event->passAll();
    }

    public function removeDoNotContact(PendingEvent \$event)
    {
        \$config          = \$event->getEvent()->getProperties();
        \$channels        = ArrayHelper::getValue('channels', \$config, []);
        \$persistEntities = [];
        \$contacts        = \$event->getContactsKeyedById();
        foreach (\$contacts as \$contactId=>\$contact) {
            foreach (\$channels as \$channel) {
                \$this->doNotContact->removeDncForContact(
                    \$contactId,
                    \$channel,
                    true
                );
            }
            \$persistEntities[] = \$contact;
        }

        \$this->leadModel->saveEntities(\$persistEntities);

        \$event->passAll();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/EventListener/CampaignActionDNCSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/CampaignActionDNCSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/EventListener/CampaignActionDNCSubscriber.php");
    }
}
