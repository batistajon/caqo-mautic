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

/* @bundles/CoreBundle/Tests/Unit/Security/Permissions/CorePermissionsTest.php */
class __TwigTemplate_c5aef3080c269268391b6ad9e5e469b6ab257af710872e9c896b40d9a8094911 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Security\\Permissions;

use Mautic\\ApiBundle\\Security\\Permissions\\ApiPermissions;
use Mautic\\AssetBundle\\Security\\Permissions\\AssetPermissions;
use Mautic\\CampaignBundle\\Security\\Permissions\\CampaignPermissions;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use MauticPlugin\\MauticFocusBundle\\Security\\Permissions\\FocusPermissions;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Translation\\TranslatorInterface;

class CorePermissionsTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|UserHelper
     */
    private \$userHelper;

    /**
     * @var CorePermissions
     */
    private \$corePermissions;

    /**
     * @var MockObject|TranslatorInterface
     */
    private \$translator;

    /**
     * @var MockObject|CoreParametersHelper
     */
    private \$coreParametersHelper;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->userHelper           = \$this->createMock(UserHelper::class);
        \$this->translator           = \$this->createMock(TranslatorInterface::class);
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->corePermissions      = new CorePermissions(
            \$this->userHelper,
            \$this->translator,
            \$this->coreParametersHelper,
            [
                \$this->mockBundleArray(ApiPermissions::class),
                \$this->mockBundleArray(AssetPermissions::class),
                \$this->mockBundleArray(CampaignPermissions::class),
            ],
            [
                \$this->mockBundleArray(FocusPermissions::class),
            ]
        );
    }

    public function testSettingPermissionObject(): void
    {
        \$this->coreParametersHelper->method('all')
            ->willReturn(['parameter_a' => 'value_a']);

        \$assetPermissions = new AssetPermissions(\$this->coreParametersHelper);
        \$this->corePermissions->setPermissionObject(\$assetPermissions);
        \$permissionObjects = \$this->corePermissions->getPermissionObjects();

        // Even though the AssetPermissions object was set upfront there are
        // still 4 objects available.
        // The other three were instantiated to keep BC.
        \$this->assertCount(4, \$permissionObjects);

        \$this->assertSame(\$assetPermissions, \$this->corePermissions->getPermissionObject('asset'));
        \$this->assertSame(\$assetPermissions, \$this->corePermissions->getPermissionObject(AssetPermissions::class));
        \$this->assertSame(\$permissionObjects['campaign'], \$this->corePermissions->getPermissionObject(CampaignPermissions::class));
    }

    private function mockBundleArray(string \$permissionClass): array
    {
        return ['permissionClasses' => [\$permissionClass => \$permissionClass]];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Security/Permissions/CorePermissionsTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Security/Permissions/CorePermissionsTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Security/Permissions/CorePermissionsTest.php");
    }
}
