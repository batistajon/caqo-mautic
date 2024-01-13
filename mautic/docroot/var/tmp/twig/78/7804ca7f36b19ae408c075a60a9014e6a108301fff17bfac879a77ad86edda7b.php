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

/* @bundles/CampaignBundle/Executioner/Helper/NotificationHelper.php */
class __TwigTemplate_6eeca31c015270590364f4b443ad786dc16d3c00aaac02ec012b04841e9c5bca extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Helper;

use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Model\\NotificationModel;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Model\\UserModel;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Component\\Routing\\Router;
use Symfony\\Component\\Translation\\TranslatorInterface;

class NotificationHelper
{
    /**
     * @var UserModel
     */
    private \$userModel;

    /**
     * @var NotificationModel
     */
    private \$notificationModel;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var Router
     */
    private \$router;

    /**
     * @var CoreParametersHelper
     */
    private \$coreParametersHelper;

    public function __construct(
        UserModel \$userModel,
        NotificationModel \$notificationModel,
        TranslatorInterface \$translator,
        Router \$router,
        CoreParametersHelper \$coreParametersHelper
    ) {
        \$this->userModel            = \$userModel;
        \$this->notificationModel    = \$notificationModel;
        \$this->translator           = \$translator;
        \$this->router               = \$router;
        \$this->coreParametersHelper = \$coreParametersHelper;
    }

    public function notifyOfFailure(Lead \$contact, Event \$event)
    {
        \$user = \$this->getUser(\$contact, \$event);
        if (!\$user || !\$user->getId()) {
            return;
        }

        \$this->notificationModel->addNotification(
            \$event->getCampaign()->getName().' / '.\$event->getName(),
            'error',
            false,
            \$this->translator->trans(
                'mautic.campaign.event.failed',
                [
                    '%contact%' => '<a href=\"'.\$this->router->generate(
                            'mautic_contact_action',
                            ['objectAction' => 'view', 'objectId' => \$contact->getId()]
                        ).'\" data-toggle=\"ajax\">'.\$contact->getPrimaryIdentifier().'</a>',
                ]
            ),
            null,
            null,
            \$user
        );
    }

    public function notifyOfUnpublish(Event \$event): void
    {
        /**
         * Pass a fake lead so we can just get the campaign creator.
         */
        \$user = \$this->getUser(new Lead(), \$event);

        if (!\$user || !\$user->getId()) {
            return;
        }

        \$campaign = \$event->getCampaign();

        // Campaign is already unpublished, do not trigger further notification/email
        if (!\$campaign->isPublished()) {
            return;
        }

        \$this->notificationModel->addNotification(
            \$campaign->getName().' / '.\$event->getName(),
            'error',
            false,
            \$this->translator->trans(
                'mautic.campaign.event.failed.campaign.unpublished',
                [
                    '%campaign%' => '<a href=\"'.\$this->router->generate(
                            'mautic_campaign_action',
                            ['objectAction' => 'view', 'objectId' => \$campaign->getId()]
                        ).'\" data-toggle=\"ajax\">'.\$campaign->getName().'</a>',
                    '%event%' => \$event->getName(),
                ]
            ),
            null,
            null,
            \$user
        );

        \$subject = \$this->translator->trans(
            'mautic.campaign.event.campaign_unpublished.title',
            [
                '%title%' => \$campaign->getName(),
            ]
        );

        \$content = \$this->translator->trans(
            'mautic.campaign.event.failed.campaign.unpublished',
            [
                '%campaign%' => '<a href=\"'.\$this->router->generate(
                        'mautic_campaign_action',
                        [
                            'objectAction' => 'view',
                            'objectId'     => \$campaign->getId(),
                        ],
                        UrlGeneratorInterface::ABSOLUTE_URL
                    ).'\" data-toggle=\"ajax\">'.\$campaign->getName().'</a>',
                '%event%' => \$event->getName(),
            ]
        );

        \$sendToAuthor = \$this->coreParametersHelper->get('campaign_send_notification_to_author', 1);
        if (\$sendToAuthor) {
            \$this->userModel->emailUser(\$user, \$subject, \$content);
        } else {
            \$emailAddresses =  array_map('trim', explode(',', \$this->coreParametersHelper->get('campaign_notification_email_addresses')));
            \$this->userModel->sendMailToEmailAddresses(\$emailAddresses, \$subject, \$content);
        }
    }

    /**
     * @return User|null
     */
    private function getUser(Lead \$contact, Event \$event)
    {
        // Default is to notify the contact owner
        if (\$owner = \$contact->getOwner()) {
            return \$owner;
        }

        // If the contact doesn't have an owner, notify the one that created the campaign
        if (\$campaignCreator = \$event->getCampaign()->getCreatedBy()) {
            if (\$owner = \$this->userModel->getEntity(\$campaignCreator)) {
                return \$owner;
            }
        }

        // If all else fails, notifiy a system admins
        return \$this->userModel->getSystemAdministrator();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Executioner/Helper/NotificationHelper.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Helper/NotificationHelper.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Executioner/Helper/NotificationHelper.php");
    }
}
