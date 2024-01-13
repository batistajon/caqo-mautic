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

/* @bundles/WebhookBundle/EventListener/WebhookSubscriber.php */
class __TwigTemplate_69b810f6440f6146e10a5365564e5cb7d9438ce256e80fed3078c661b5912224 extends Template
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

namespace Mautic\\WebhookBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\WebhookBundle\\Event\\WebhookEvent;
use Mautic\\WebhookBundle\\Notificator\\WebhookKillNotificator;
use Mautic\\WebhookBundle\\WebhookEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class WebhookSubscriber implements EventSubscriberInterface
{
    /**
     * @var IpLookupHelper
     */
    private \$ipLookupHelper;

    /**
     * @var AuditLogModel
     */
    private \$auditLogModel;

    /**
     * @var WebhookKillNotificator
     */
    private \$webhookKillNotificator;

    public function __construct(
        IpLookupHelper \$ipLookupHelper,
        AuditLogModel \$auditLogModel,
        WebhookKillNotificator \$webhookKillNotificator
    ) {
        \$this->ipLookupHelper         = \$ipLookupHelper;
        \$this->auditLogModel          = \$auditLogModel;
        \$this->webhookKillNotificator = \$webhookKillNotificator;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            WebhookEvents::WEBHOOK_POST_SAVE   => ['onWebhookSave', 0],
            WebhookEvents::WEBHOOK_POST_DELETE => ['onWebhookDelete', 0],
            WebhookEvents::WEBHOOK_KILL        => ['onWebhookKill', 0],
        ];
    }

    /**
     * Add an entry to the audit log.
     */
    public function onWebhookSave(WebhookEvent \$event)
    {
        \$webhook = \$event->getWebhook();

        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'    => 'webhook',
                'object'    => 'webhook',
                'objectId'  => \$webhook->getId(),
                'action'    => (\$event->isNew()) ? 'create' : 'update',
                'details'   => \$details,
                'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
            ];
            \$this->auditLogModel->writeToLog(\$log);
        }
    }

    /**
     * Add a delete entry to the audit log.
     */
    public function onWebhookDelete(WebhookEvent \$event)
    {
        \$webhook = \$event->getWebhook();
        \$log     = [
            'bundle'    => 'webhook',
            'object'    => 'webhook',
            'objectId'  => \$event->getWebhook()->deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$webhook->getName()],
            'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
        ];
        \$this->auditLogModel->writeToLog(\$log);
    }

    /**
     * Send notification about killed webhook.
     */
    public function onWebhookKill(WebhookEvent \$event)
    {
        \$this->webhookKillNotificator->send(\$event->getWebhook(), \$event->getReason());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/EventListener/WebhookSubscriber.php";
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
        return new Source("", "@bundles/WebhookBundle/EventListener/WebhookSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/EventListener/WebhookSubscriber.php");
    }
}
