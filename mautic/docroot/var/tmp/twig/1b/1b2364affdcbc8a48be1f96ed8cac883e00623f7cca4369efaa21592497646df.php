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

/* @bundles/UserBundle/Tests/Model/UserToken/UserTokenServiceTest.php */
class __TwigTemplate_e19c3a5fc95f3b9c70b896ac211a652c6a0d7bfdc094f2d496406cf6db9472e6 extends Template
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

namespace Mautic\\UserBundle\\Tests\\Model\\UserToken;

use Mautic\\CoreBundle\\Helper\\RandomHelper\\RandomHelperInterface;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Entity\\UserToken;
use Mautic\\UserBundle\\Entity\\UserTokenRepositoryInterface;
use Mautic\\UserBundle\\Model\\UserToken\\UserTokenService;
use PHPUnit\\Framework\\MockObject\\MockObject;

class UserTokenServiceTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|RandomHelperInterface
     */
    private \$randomHelperMock;

    /**
     * @var MockObject|UserTokenRepositoryInterface
     */
    private \$userTokenRepositoryMock;

    protected function setUp(): void
    {
        \$this->randomHelperMock        = \$this->getMockBuilder(RandomHelperInterface::class)->getMock();
        \$this->userTokenRepositoryMock = \$this->getMockBuilder(UserTokenRepositoryInterface::class)->getMock();
    }

    /**
     * Tests second attempt for generating secret if not unique secret was generated first time.
     */
    public function testGenerateSecret(): void
    {
        \$secretLength    = 6;
        \$randomSecret    = 'secret';
        \$token           = new UserToken();
        \$token->setAuthorizator('test-secret');

        \$this->randomHelperMock->expects(\$this->exactly(2))
            ->method('generate')
            ->with(\$secretLength)
            ->willReturn(\$randomSecret);

        \$this->userTokenRepositoryMock->expects(\$this->exactly(2))
            ->method('isSecretUnique')
            ->with(\$randomSecret)
            ->willReturnOnConsecutiveCalls(
                false, // Test second attempt to get unique secret
                true // Ok now
            );

        \$userTokenService = \$this->getUserTokenService();
        \$secretToken      = \$userTokenService->generateSecret(\$token, \$secretLength);
        \$this->assertSame(\$randomSecret, \$secretToken->getSecret());
        \$this->assertTrue(\$secretToken->isOneTimeOnly());
        \$this->assertNull(\$secretToken->getExpiration());
    }

    public function testVerify(): void
    {
        \$token        = new UserToken();
        \$user         = new User();
        \$authorizator = 'authorizator';
        \$token->setUser(\$user)
            ->setOneTimeOnly(true)
            ->setExpiration(null)
            ->setAuthorizator(\$authorizator);

        \$this->userTokenRepositoryMock->expects(\$this->once())
            ->method('verify')
            ->with(\$token)
            ->willReturn(true);

        \$this->assertTrue(\$this->getUserTokenService()->verify(\$token));
    }

    private function getUserTokenService(): UserTokenService
    {
        return new UserTokenService(
            \$this->randomHelperMock,
            \$this->userTokenRepositoryMock
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
        return "@bundles/UserBundle/Tests/Model/UserToken/UserTokenServiceTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/Model/UserToken/UserTokenServiceTest.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Tests/Model/UserToken/UserTokenServiceTest.php");
    }
}
