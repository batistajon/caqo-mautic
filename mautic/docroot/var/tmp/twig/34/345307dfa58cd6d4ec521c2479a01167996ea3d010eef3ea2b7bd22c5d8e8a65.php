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

/* @bundles/LeadBundle/Tests/Field/Notification/CustomFieldNotificationTest.php */
class __TwigTemplate_fd20e77743c4577c2c066132545a39e5d32af2469cce0de68a9b3c5b584d4b01 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Field\\Notification;

use Mautic\\CoreBundle\\Model\\NotificationModel;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Field\\Notification\\CustomFieldNotification;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Model\\UserModel;
use Symfony\\Component\\Translation\\TranslatorInterface;

class CustomFieldNotificationTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNoUserId(): void
    {
        \$notificationModel   = \$this->createMock(NotificationModel::class);
        \$userModel           = \$this->createMock(UserModel::class);
        \$translatorInterface = \$this->createMock(TranslatorInterface::class);

        \$leadField = new LeadField();

        \$userModel->expects(\$this->never())
            ->method('getEntity');

        \$customFieldNotification = new CustomFieldNotification(\$notificationModel, \$userModel, \$translatorInterface);

        \$customFieldNotification->customFieldWasCreated(\$leadField, 0);
    }

    public function testNoUser(): void
    {
        \$notificationModel   = \$this->createMock(NotificationModel::class);
        \$userModel           = \$this->createMock(UserModel::class);
        \$translatorInterface = \$this->createMock(TranslatorInterface::class);

        \$leadField = new LeadField();

        \$userModel->expects(\$this->once())
            ->method('getEntity')
            ->willReturn(null);

        \$translatorInterface->expects(\$this->never())
            ->method('trans');

        \$customFieldNotification = new CustomFieldNotification(\$notificationModel, \$userModel, \$translatorInterface);

        \$customFieldNotification->customFieldWasCreated(\$leadField, 1);
    }

    public function testCustomFieldWasCreated(): void
    {
        \$notificationModel   = \$this->createMock(NotificationModel::class);
        \$userModel           = \$this->createMock(UserModel::class);
        \$translatorInterface = \$this->createMock(TranslatorInterface::class);

        \$userId    = 1;
        \$leadField = new LeadField();
        \$user      = new User();

        \$userModel->expects(\$this->once())
            ->method('getEntity')
            ->with(\$userId)
            ->willReturn(\$user);

        \$translatorInterface->expects(\$this->exactly(2))
            ->method('trans')
            ->willReturn('text');

        \$notificationModel->expects(\$this->once())
            ->method('addNotification')
            ->with(
                'text',
                'info',
                false,
                'text',
                'fa-columns',
                null,
                \$user
            );

        \$customFieldNotification = new CustomFieldNotification(\$notificationModel, \$userModel, \$translatorInterface);

        \$customFieldNotification->customFieldWasCreated(\$leadField, \$userId);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Field/Notification/CustomFieldNotificationTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Field/Notification/CustomFieldNotificationTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Field/Notification/CustomFieldNotificationTest.php");
    }
}
