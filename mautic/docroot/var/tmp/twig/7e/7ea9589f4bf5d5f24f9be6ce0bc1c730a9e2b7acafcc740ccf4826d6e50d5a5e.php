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

/* @bundles/WebhookBundle/Tests/Notificator/WebhookKillNotificatorTest.php */
class __TwigTemplate_e8ac61600c0c604b5fab9f0ded0abe80d92a7251ba692c1b863ef839cd70564e extends Template
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

namespace Mautic\\WebhookBundle\\Tests\\Notificator;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Model\\NotificationModel;
use Mautic\\EmailBundle\\Helper\\MailHelper;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\WebhookBundle\\Entity\\Webhook;
use Mautic\\WebhookBundle\\Notificator\\WebhookKillNotificator;
use Symfony\\Bundle\\FrameworkBundle\\Routing\\Router;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class WebhookKillNotificatorTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testSendToOwner(): void
    {
        \$subject        = 'subject';
        \$reason         = 'reason';
        \$webhookId      = 1;
        \$webhookName    = 'Webhook name';
        \$generatedRoute = 'generatedRoute';
        \$details        = 'details';
        \$createdBy      = 'createdBy';
        \$ownerEmail     = 'toEmail';
        \$modifiedBy     = null;
        \$htmlUrl        = '<a href=\"'.\$generatedRoute.'\" data-toggle=\"ajax\">'.\$webhookName.'</a>';

        \$owner                 = \$this->createMock(User::class);
        \$translatorMock        = \$this->createMock(TranslatorInterface::class);
        \$webhook               = \$this->createMock(Webhook::class);
        \$routerMock            = \$this->createMock(Router::class);
        \$entityManagerMock     = \$this->createMock(EntityManager::class);
        \$notificationModelMock = \$this->createMock(NotificationModel::class);
        \$mailHelperMock        = \$this->createMock(MailHelper::class);

        \$translatorMock->method('trans')
            ->withConsecutive(
                ['mautic.webhook.stopped'],
                [\$reason],
                [
                    'mautic.webhook.stopped.details',
                    ['%reason%'  => \$reason, '%webhook%' => \$htmlUrl],
                ]
            )
            ->willReturnOnConsecutiveCalls(\$subject, \$reason, \$details);
        \$coreParamHelperMock = \$this->createMock(CoreParametersHelper::class);
        \$coreParamHelperMock
            ->method('get')
            ->with('webhook_send_notification_to_author')
            ->willReturn(1);

        \$webhook = \$this->createMock(Webhook::class);
        \$webhook->expects(\$this->once())
            ->method('getId')
            ->willReturn(\$webhookId);

        \$webhook->expects(\$this->once())
            ->method('getName')
            ->willReturn(\$webhookName);

        \$routerMock->expects(\$this->once())
            ->method('generate')
            ->with(
                'mautic_webhook_action',
                ['objectAction' => 'view', 'objectId' => \$webhookId],
                UrlGeneratorInterface::ABSOLUTE_URL
            )
            ->willReturn(\$generatedRoute);

        \$webhook->expects(\$this->once())
            ->method('getCreatedBy')
            ->willReturn(\$createdBy);

        \$webhook->expects(\$this->once())
            ->method('getModifiedBy')
            ->willReturn(\$modifiedBy);

        \$entityManagerMock->expects(\$this->once())
            ->method('getReference')
            ->with('MauticUserBundle:User', \$createdBy)
            ->willReturn(\$owner);

        \$notificationModelMock->expects(\$this->once())
            ->method('addNotification')
            ->with(
                \$details,
                'error',
                false,
                \$subject,
                null,
                false,
                \$owner
            );

        \$owner->expects(\$this->once())
            ->method('getEmail')
            ->willReturn(\$ownerEmail);

        \$mailHelperMock
            ->expects(\$this->once())
            ->method('setTo')
            ->with(\$ownerEmail);

        \$mailHelperMock
            ->expects(\$this->once())
            ->method('setSubject')
            ->with(\$subject);

        \$mailHelperMock
            ->expects(\$this->once())
            ->method('setBody')
            ->with(\$details);

        \$webhookKillNotificator = new WebhookKillNotificator(\$translatorMock, \$routerMock, \$notificationModelMock, \$entityManagerMock, \$mailHelperMock, \$coreParamHelperMock);
        \$webhookKillNotificator->send(\$webhook, \$reason);
    }

    public function testSendToModifier(): void
    {
        \$subject        = 'subject';
        \$reason         = 'reason';
        \$webhookId      = 1;
        \$webhookName    = 'Webhook name';
        \$generatedRoute = 'generatedRoute';
        \$details        = 'details';
        \$createdBy      = 'createdBy';
        \$ownerEmail     = 'ownerEmail';
        \$modifiedBy     = 'modifiedBy';
        \$modifierEmail  = 'modifierEmail';
        \$htmlUrl        = '<a href=\"'.\$generatedRoute.'\" data-toggle=\"ajax\">'.\$webhookName.'</a>';

        \$owner                 = \$this->createMock(User::class);
        \$modifier              = \$this->createMock(User::class);
        \$translatorMock        = \$this->createMock(TranslatorInterface::class);
        \$routerMock            = \$this->createMock(Router::class);
        \$entityManagerMock     = \$this->createMock(EntityManager::class);
        \$notificationModelMock = \$this->createMock(NotificationModel::class);
        \$mailHelperMock        = \$this->createMock(MailHelper::class);

        \$translatorMock->method('trans')
            ->withConsecutive(
                ['mautic.webhook.stopped'],
                [\$reason],
                [
                    'mautic.webhook.stopped.details',
                    ['%reason%'  => \$reason, '%webhook%' => \$htmlUrl],
                ]
            )
            ->willReturnOnConsecutiveCalls(\$subject, \$reason, \$details);

        \$coreParamHelperMock = \$this->createMock(CoreParametersHelper::class);
        \$coreParamHelperMock
            ->method('get')
            ->with('webhook_send_notification_to_author')
            ->willReturn(1);

        \$webhook = \$this->createMock(Webhook::class);
        \$webhook->expects(\$this->once())
            ->method('getId')
            ->willReturn(\$webhookId);

        \$webhook->expects(\$this->once())
            ->method('getName')
            ->willReturn(\$webhookName);

        \$routerMock->expects(\$this->once())
            ->method('generate')
            ->with(
                'mautic_webhook_action',
                ['objectAction' => 'view', 'objectId' => \$webhookId],
                UrlGeneratorInterface::ABSOLUTE_URL
            )
            ->willReturn(\$generatedRoute);

        \$webhook->expects(\$this->exactly(2))
            ->method('getCreatedBy')
            ->willReturn(\$createdBy);

        \$webhook->expects(\$this->exactly(3))
            ->method('getModifiedBy')
            ->willReturn(\$modifiedBy);

        \$entityManagerMock->expects(\$this->exactly(2))
            ->method('getReference')
            ->withConsecutive(
                ['MauticUserBundle:User', \$createdBy],
                ['MauticUserBundle:User', \$modifiedBy]
            )
            ->willReturnOnConsecutiveCalls(\$owner, \$modifier);

        \$notificationModelMock->expects(\$this->once())
            ->method('addNotification')
            ->with(
                \$details,
                'error',
                false,
                \$subject,
                null,
                false,
                \$modifier
            );

        \$owner->expects(\$this->once())
            ->method('getEmail')
            ->willReturn(\$ownerEmail);

        \$modifier->expects(\$this->once())
            ->method('getEmail')
            ->willReturn(\$modifierEmail);

        \$mailHelperMock->expects(\$this->once())
            ->method('setTo')
            ->with(\$modifierEmail);

        \$mailHelperMock->expects(\$this->once())
            ->method('setCc')
            ->with(\$ownerEmail);

        \$mailHelperMock->expects(\$this->once())
            ->method('setSubject')
            ->with(\$subject);

        \$mailHelperMock->expects(\$this->once())
            ->method('setBody')
            ->with(\$details);

        \$webhookKillNotificator = new WebhookKillNotificator(\$translatorMock, \$routerMock, \$notificationModelMock, \$entityManagerMock, \$mailHelperMock, \$coreParamHelperMock);
        \$webhookKillNotificator->send(\$webhook, \$reason);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Tests/Notificator/WebhookKillNotificatorTest.php";
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
        return new Source("", "@bundles/WebhookBundle/Tests/Notificator/WebhookKillNotificatorTest.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Tests/Notificator/WebhookKillNotificatorTest.php");
    }
}
