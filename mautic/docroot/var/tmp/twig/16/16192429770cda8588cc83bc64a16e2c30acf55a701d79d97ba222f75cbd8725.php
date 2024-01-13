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

/* @bundles/SmsBundle/Tests/EventListener/WebhookSubscriberTest.php */
class __TwigTemplate_9c77023ad2c69df34b62102ac8961f20e249e700a44ce50a28ee183ce8d19793 extends Template
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

declare(strict_types=1);

namespace Mautic\\SmsBundle\\Tests\\EventListener;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\SmsBundle\\Event\\SmsSendEvent;
use Mautic\\SmsBundle\\EventListener\\WebhookSubscriber;
use Mautic\\SmsBundle\\SmsEvents;
use Mautic\\WebhookBundle\\Event\\WebhookBuilderEvent;
use Mautic\\WebhookBundle\\Model\\WebhookModel;
use PHPUnit\\Framework\\MockObject\\MockObject;

final class WebhookSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|WebhookModel
     */
    private \$webhookModel;

    /**
     * @var WebhookSubscriber
     */
    private \$subscriber;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->webhookModel = \$this->createMock(WebhookModel::class);
        \$this->subscriber   = new WebhookSubscriber(\$this->webhookModel);
    }

    public function testOnWebhookBuild(): void
    {
        \$event = \$this->createMock(WebhookBuilderEvent::class);

        \$event->expects(\$this->once())
            ->method('addEvent')
            ->with(
                SmsEvents::SMS_ON_SEND,
                [
                    'label'       => 'mautic.sms.webhook.event.send',
                    'description' => 'mautic.sms.webhook.event.send_desc',
                ]
            );

        \$this->subscriber->onWebhookBuild(\$event);
    }

    public function testOnSend(): void
    {
        \$event   = \$this->createMock(SmsSendEvent::class);
        \$contact = \$this->createMock(Lead::class);

        \$event->expects(\$this->once())
            ->method('getSmsId')
            ->willReturn(343);

        \$event->expects(\$this->once())
            ->method('getLead')
            ->willReturn(\$contact);

        \$event->expects(\$this->once())
            ->method('getContent')
            ->willReturn('The SMS content.');

        \$this->webhookModel->expects(\$this->once())
            ->method('queueWebhooksByType')
            ->with(
                SmsEvents::SMS_ON_SEND,
                [
                    'smsId'   => 343,
                    'contact' => \$contact,
                    'content' => 'The SMS content.',
                ]
            );

        \$this->subscriber->onSend(\$event);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Tests/EventListener/WebhookSubscriberTest.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/EventListener/WebhookSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Tests/EventListener/WebhookSubscriberTest.php");
    }
}
