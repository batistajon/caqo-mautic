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

/* @bundles/LeadBundle/Tests/Helper/AvatarHelperTest.php */
class __TwigTemplate_a8448cee74aa7712bf6ad81e3dcd11b553b1e33716044f93f3ef03268af1f743 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Helper;

use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\CoreBundle\\Templating\\Helper\\AssetsHelper;
use Mautic\\CoreBundle\\Templating\\Helper\\GravatarHelper;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Templating\\Helper\\AvatarHelper;
use Mautic\\LeadBundle\\Templating\\Helper\\DefaultAvatarHelper;

class AvatarHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|AssetsHelper
     */
    private \$assetsHelperMock;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|PathsHelper
     */
    private \$pathsHelperMock;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|GravatarHelper
     */
    private \$gravatarHelperMock;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|DefaultAvatarHelper
     */
    private \$defaultAvatarHelperMock;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|Lead
     */
    private \$leadMock;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|AvatarHelper
     */
    private \$avatarHelper;

    protected function setUp(): void
    {
        \$this->assetsHelperMock        = \$this->createMock(AssetsHelper::class);
        \$this->pathsHelperMock         = \$this->createMock(PathsHelper::class);
        \$this->gravatarHelperMock      = \$this->createMock(GravatarHelper::class);
        \$this->defaultAvatarHelperMock = \$this->createMock(DefaultAvatarHelper::class);
        \$this->leadMock                = \$this->createMock(Lead::class);
        \$this->avatarHelper            = new AvatarHelper(\$this->assetsHelperMock, \$this->pathsHelperMock, \$this->gravatarHelperMock, \$this->defaultAvatarHelperMock);
    }

    /**
     * Test to get gravatar.
     */
    public function testGetAvatarWhenGravatar()
    {
        \$this->leadMock->method('getPreferredProfileImage')
            ->willReturn('gravatar');
        \$this->leadMock->method('getSocialCache')
            ->willReturn([]);
        \$this->leadMock->method('getEmail')
            ->willReturn('mautic@acquia.com');
        \$this->gravatarHelperMock->method('getImage')
            ->with('mautic@acquia.com')
            ->willReturn('gravatarImage');
        \$avatar = \$this->avatarHelper->getAvatar(\$this->leadMock);
        \$this->assertSame('gravatarImage', \$avatar, 'Gravatar image should be returned');
    }

    /**
     * Test to get default image.
     */
    public function testGetAvatarWhenDefault()
    {
        \$this->leadMock->method('getPreferredProfileImage')
            ->willReturn('gravatar');
        \$this->leadMock->method('getSocialCache')
            ->willReturn([]);
        \$this->leadMock->method('getEmail')
            ->willReturn('');
        \$this->defaultAvatarHelperMock->method('getDefaultAvatar')
            ->willReturn('defaultImage');
        \$avatar = \$this->avatarHelper->getAvatar(\$this->leadMock);
        \$this->assertSame('defaultImage', \$avatar, 'Default image image should be returned');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Helper/AvatarHelperTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Helper/AvatarHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Helper/AvatarHelperTest.php");
    }
}
