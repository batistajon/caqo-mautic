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

/* @bundles/WebhookBundle/Tests/EventListener/WebhookSubscriberTest.php */
class __TwigTemplate_0bc6a58278f7a13f6f52c13c027b9bec98478f033663d3ee1d86efbb69db2805 extends Template
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

namespace Mautic\\WebhookBundle\\Tests\\EventListener;

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\WebhookBundle\\Entity\\Webhook;
use Mautic\\WebhookBundle\\Event\\WebhookEvent;
use Mautic\\WebhookBundle\\EventListener\\WebhookSubscriber;
use Mautic\\WebhookBundle\\Notificator\\WebhookKillNotificator;
use Mautic\\WebhookBundle\\WebhookEvents;

class WebhookSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$ipLookupHelper;
    private \$auditLogModel;
    private \$webhookKillNotificator;

    protected function setUp(): void
    {
        \$this->ipLookupHelper         = \$this->createMock(IpLookupHelper::class);
        \$this->auditLogModel          = \$this->createMock(AuditLogModel::class);
        \$this->webhookKillNotificator = \$this->createMock(WebhookKillNotificator::class);
    }

    public function testGetSubscribedEvents()
    {
        \$this->assertSame(
            [
                WebhookEvents::WEBHOOK_POST_SAVE   => ['onWebhookSave', 0],
                WebhookEvents::WEBHOOK_POST_DELETE => ['onWebhookDelete', 0],
                WebhookEvents::WEBHOOK_KILL        => ['onWebhookKill', 0],
            ],
            WebhookSubscriber::getSubscribedEvents()
        );
    }

    public function testOnWebhookKill()
    {
        \$webhookMock = \$this->createMock(Webhook::class);
        \$reason      = 'reason';

        \$eventMock = \$this->createMock(WebhookEvent::class);
        \$eventMock
            ->expects(\$this->once())
            ->method('getWebhook')
            ->willReturn(\$webhookMock);
        \$eventMock
            ->expects(\$this->once())
            ->method('getReason')
            ->willReturn(\$reason);

        \$this->webhookKillNotificator
            ->expects(\$this->once())
            ->method('send')
            ->with(\$webhookMock, \$reason);

        \$subscriber = new WebhookSubscriber(\$this->ipLookupHelper, \$this->auditLogModel, \$this->webhookKillNotificator);
        \$subscriber->onWebhookKill(\$eventMock);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Tests/EventListener/WebhookSubscriberTest.php";
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
        return new Source("", "@bundles/WebhookBundle/Tests/EventListener/WebhookSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Tests/EventListener/WebhookSubscriberTest.php");
    }
}
