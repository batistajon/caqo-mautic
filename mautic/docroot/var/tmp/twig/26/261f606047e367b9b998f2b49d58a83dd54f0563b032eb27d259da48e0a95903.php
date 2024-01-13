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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/Notification/Helper/UserNotificationHelperTest.php */
class __TwigTemplate_b86c1f97aad6b0b8227adb94bb2e0a9fcc555aad9f5d343f41c55f4f66191501 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\Notification\\Helper;

use Mautic\\IntegrationsBundle\\Sync\\Notification\\Helper\\OwnerProvider;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Helper\\RouteHelper;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Helper\\UserHelper;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Helper\\UserNotificationHelper;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Writer;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\TranslatorInterface;

class UserNotificationHelperTest extends TestCase
{
    /**
     * @var Writer|MockObject
     */
    private \$writer;

    /**
     * @var UserHelper|MockObject
     */
    private \$userHelper;

    /**
     * @var OwnerProvider|MockObject
     */
    private \$ownerProvider;

    /**
     * @var RouteHelper|MockObject
     */
    private \$routeHelper;

    /**
     * @var TranslatorInterface|MockObject
     */
    private \$translator;

    /**
     * @var UserNotificationHelper
     */
    private \$helper;

    protected function setUp(): void
    {
        \$this->writer        = \$this->createMock(Writer::class);
        \$this->userHelper    = \$this->createMock(UserHelper::class);
        \$this->ownerProvider = \$this->createMock(OwnerProvider::class);
        \$this->routeHelper   = \$this->createMock(RouteHelper::class);
        \$this->translator    = \$this->createMock(TranslatorInterface::class);
        \$this->helper        = new UserNotificationHelper(
            \$this->writer,
            \$this->userHelper,
            \$this->ownerProvider,
            \$this->routeHelper,
            \$this->translator
        );
    }

    public function testNotificationSentToOwner(): void
    {
        \$this->ownerProvider->expects(\$this->once())
            ->method('getOwnersForObjectIds')
            ->with(Contact::NAME, [1])
            ->willReturn([['owner_id' => 1, 'id' => 1]]);

        \$this->userHelper->expects(\$this->never())
            ->method('getAdminUsers');

        \$this->translator->expects(\$this->exactly(2))
            ->method('trans')
            ->withConsecutive(
                ['mautic.integration.sync.user_notification.header', \$this->anything()],
                ['mautic.integration.sync.user_notification.sync_error', \$this->anything()]
            )
            ->willReturn('test');

        \$this->writer->expects(\$this->once())
            ->method('writeUserNotification');

        \$this->routeHelper->expects(\$this->once())
            ->method('getLink');

        \$this->helper->writeNotification('test', 'test', 'test', Contact::NAME, 1, 'foobar');
    }

    public function testNotificationSentToAdmins(): void
    {
        \$this->ownerProvider->expects(\$this->once())
            ->method('getOwnersForObjectIds')
            ->with(Contact::NAME, [1])
            ->willReturn([]);

        \$this->userHelper->expects(\$this->once())
            ->method('getAdminUsers')
            ->willReturn([1]);

        \$this->translator->expects(\$this->exactly(2))
            ->method('trans')
            ->withConsecutive(
                ['mautic.integration.sync.user_notification.header', \$this->anything()],
                ['mautic.integration.sync.user_notification.sync_error', \$this->anything()]
            )
            ->willReturn('test');

        \$this->writer->expects(\$this->once())
            ->method('writeUserNotification');

        \$this->routeHelper->expects(\$this->once())
            ->method('getLink');

        \$this->helper->writeNotification('test', 'test', 'test', Contact::NAME, 1, 'foobar');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/Notification/Helper/UserNotificationHelperTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/Notification/Helper/UserNotificationHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/Notification/Helper/UserNotificationHelperTest.php");
    }
}
