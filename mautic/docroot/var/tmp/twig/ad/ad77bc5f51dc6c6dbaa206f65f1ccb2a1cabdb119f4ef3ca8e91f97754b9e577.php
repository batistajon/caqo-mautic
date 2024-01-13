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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/Notification/Helper/UserSummaryNotificationHelperTest.php */
class __TwigTemplate_6fcfef4bb88deb37fff8ffedebf9ffb5c1e8f9485cea26acad8176574cd36f43 extends Template
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
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Helper\\UserSummaryNotificationHelper;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Writer;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\TranslatorInterface;

class UserSummaryNotificationHelperTest extends TestCase
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
     * @var UserSummaryNotificationHelper
     */
    private \$helper;

    protected function setUp(): void
    {
        \$this->writer        = \$this->createMock(Writer::class);
        \$this->userHelper    = \$this->createMock(UserHelper::class);
        \$this->ownerProvider = \$this->createMock(OwnerProvider::class);
        \$this->routeHelper   = \$this->createMock(RouteHelper::class);
        \$this->translator    = \$this->createMock(TranslatorInterface::class);
        \$this->helper        = new UserSummaryNotificationHelper(
            \$this->writer,
            \$this->userHelper,
            \$this->ownerProvider,
            \$this->routeHelper,
            \$this->translator
        );
    }

    public function testNotificationSentToOwner(): void
    {
        \$this->helper->storeSummaryNotification('Foo', 'Bar', 1);
        \$this->helper->storeSummaryNotification('Bar', 'Foo', 2);

        \$this->ownerProvider->expects(\$this->exactly(2))
            ->method('getOwnersForObjectIds')
            ->withConsecutive(
                [Contact::NAME, [1 => 1]],
                [Contact::NAME, [2 => 2]]
            )
            ->willReturnOnConsecutiveCalls(
                [['owner_id' => 1, 'id' => 1]],
                [['owner_id' => 2, 'id' => 2]]
            );

        \$this->userHelper->expects(\$this->never())
            ->method('getAdminUsers');

        \$this->translator->expects(\$this->exactly(4))
            ->method('trans')
            ->withConsecutive(
                ['mautic.integration.sync.user_notification.header', \$this->anything()],
                ['test', \$this->anything()],
                ['mautic.integration.sync.user_notification.header', \$this->anything()],
                ['test', \$this->anything()]
            )
            ->willReturn('test');

        \$this->writer->expects(\$this->exactly(2))
            ->method('writeUserNotification');

        \$this->routeHelper->expects(\$this->exactly(2))
            ->method('getLinkCsv');

        \$this->helper->writeNotifications(Contact::NAME, 'test');
    }

    public function testNotificationSentToAdmins(): void
    {
        \$this->helper->storeSummaryNotification('Foo', 'Bar', 1);
        \$this->helper->storeSummaryNotification('Bar', 'Foo', 2);

        \$this->ownerProvider->expects(\$this->exactly(2))
            ->method('getOwnersForObjectIds')
            ->withConsecutive(
                [Contact::NAME, [1 => 1]],
                [Contact::NAME, [2 => 2]]
            )
            ->willReturnOnConsecutiveCalls(
                [],
                []
            );

        \$this->userHelper->expects(\$this->exactly(2))
            ->method('getAdminUsers')
            ->willReturn([1]);

        \$this->translator->expects(\$this->exactly(4))
            ->method('trans')
            ->withConsecutive(
                ['mautic.integration.sync.user_notification.header', \$this->anything()],
                ['test', \$this->anything()],
                ['mautic.integration.sync.user_notification.header', \$this->anything()],
                ['test', \$this->anything()]
            )
            ->willReturn('test');

        \$this->writer->expects(\$this->exactly(2))
            ->method('writeUserNotification');

        \$this->routeHelper->expects(\$this->exactly(2))
            ->method('getLinkCsv');

        \$this->helper->writeNotifications(Contact::NAME, 'test');
    }

    public function testMoreThan25ObjectsResultInCountMessage(): void
    {
        \$counter = 1;
        \$withIds = [];
        do {
            \$this->helper->storeSummaryNotification('Foo', 'Bar', \$counter);
            \$withIds[\$counter] = \$counter;
            ++\$counter;
        } while (\$counter <= 26);

        \$this->ownerProvider->expects(\$this->once())
            ->method('getOwnersForObjectIds')
            ->with(Contact::NAME, \$withIds)
            ->willReturn([]);

        \$this->userHelper->expects(\$this->once())
            ->method('getAdminUsers')
            ->willReturn([1]);

        \$this->translator->expects(\$this->exactly(2))
            ->method('trans')
            ->willReturnCallback(
                function (\$string, \$params) {
                    \$expectedStrings = [
                        'mautic.integration.sync.user_notification.header',
                        'mautic.integration.sync.user_notification.count_message',
                    ];

                    if (!in_array(\$string, \$expectedStrings)) {
                        \$this->fail(\$string.' is not an expected translation key');
                    }

                    return \$string;
                }
            );

        \$this->writer->expects(\$this->exactly(1))
            ->method('writeUserNotification');

        \$this->routeHelper->expects(\$this->never())
            ->method('getLinkCsv');

        \$this->helper->writeNotifications(Contact::NAME, 'test');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/Notification/Helper/UserSummaryNotificationHelperTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/Notification/Helper/UserSummaryNotificationHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/Notification/Helper/UserSummaryNotificationHelperTest.php");
    }
}
