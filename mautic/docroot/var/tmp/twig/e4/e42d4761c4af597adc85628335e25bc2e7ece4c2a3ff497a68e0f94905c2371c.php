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

/* @bundles/EmailBundle/EventListener/WebhookSubscriber.php */
class __TwigTemplate_4e64012f30bd2f023e377faf7fdb0f976edb59413652697ff1719cc40788d224 extends Template
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

namespace Mautic\\EmailBundle\\EventListener;

use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Event\\EmailOpenEvent;
use Mautic\\EmailBundle\\Event\\EmailSendEvent;
use Mautic\\WebhookBundle\\Event\\WebhookBuilderEvent;
use Mautic\\WebhookBundle\\Model\\WebhookModel;
use Mautic\\WebhookBundle\\WebhookEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class WebhookSubscriber implements EventSubscriberInterface
{
    /**
     * @var WebhookModel
     */
    private \$webhookModel;

    public function __construct(WebhookModel \$webhookModel)
    {
        \$this->webhookModel = \$webhookModel;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            EmailEvents::EMAIL_ON_SEND      => ['onEmailSend', 0],
            EmailEvents::EMAIL_ON_OPEN      => ['onEmailOpen', 0],
            WebhookEvents::WEBHOOK_ON_BUILD => ['onWebhookBuild', 0],
        ];
    }

    /**
     * Add event triggers and actions.
     */
    public function onWebhookBuild(WebhookBuilderEvent \$event)
    {
        // add checkbox to the webhook form for new leads
        \$mailSend= [
            'label'       => 'mautic.email.webhook.event.send',
            'description' => 'mautic.email.webhook.event.send_desc',
        ];
        \$mailOpen = [
            'label'       => 'mautic.email.webhook.event.open',
            'description' => 'mautic.email.webhook.event.open_desc',
        ];

        // add it to the list
        \$event->addEvent(EmailEvents::EMAIL_ON_SEND, \$mailSend);
        \$event->addEvent(EmailEvents::EMAIL_ON_OPEN, \$mailOpen);
    }

    public function onEmailSend(EmailSendEvent \$event): void
    {
        // Ignore test email sends.
        if (\$event->isInternalSend() || null === \$event->getLead()) {
            return;
        }

        \$this->webhookModel->queueWebhooksByType(
            EmailEvents::EMAIL_ON_SEND,
            [
                'email'       => \$event->getEmail(),
                'contact'     => \$event->getLead(),
                'tokens'      => \$event->getTokens(),
                'contentHash' => \$event->getContentHash(),
                'idHash'      => \$event->getIdHash(),
                'content'     => \$event->getContent(),
                'subject'     => \$event->getSubject(),
                'source'      => \$event->getSource(),
                'headers'     => \$event->getTextHeaders(),
            ]
        );
    }

    public function onEmailOpen(EmailOpenEvent \$event)
    {
        \$this->webhookModel->queueWebhooksByType(
            EmailEvents::EMAIL_ON_OPEN,
            [
                'stat' => \$event->getStat(),
            ],
            [
                'statDetails',
                'leadList',
                'emailDetails',
            ]
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/EventListener/WebhookSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/WebhookSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/EventListener/WebhookSubscriber.php");
    }
}
