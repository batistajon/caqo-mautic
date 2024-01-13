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

/* @bundles/UserBundle/Tests/Security/Firewall/AuthenticationListenerTest.php */
class __TwigTemplate_587de43398a1d18ea9c9db0b0b783cf89d88d86762b00eb016b447456f5804e3 extends Template
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

namespace Mautic\\UserBundle\\Tests\\Security\\Firewall;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\Persistence\\ObjectRepository;
use FOS\\OAuthServerBundle\\Security\\Authentication\\Token\\OAuthToken;
use Mautic\\ApiBundle\\Entity\\oAuth2\\AccessToken;
use Mautic\\ApiBundle\\Entity\\oAuth2\\Client;
use Mautic\\UserBundle\\Entity\\PermissionRepository;
use Mautic\\UserBundle\\Entity\\Role;
use Mautic\\UserBundle\\Security\\Authentication\\AuthenticationHandler;
use Mautic\\UserBundle\\Security\\Firewall\\AuthenticationListener;
use PHPUnit\\Framework\\TestCase;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;

class AuthenticationListenerTest extends TestCase
{
    /** @var AuthenticationListener */
    private \$authenticationListener;

    /** @var TokenStorageInterface */
    private \$tokenStorage;

    /** @var EntityManagerInterface */
    private \$entityManager;

    /** @var ObjectRepository */
    private \$objectRepository;

    /** @var OAuthToken */
    private \$token;

    /** @var AccessToken */
    private \$accessToken;

    public function setUp(): void
    {
        \$authenticationHandler  = \$this->createMock(AuthenticationHandler::class);
        \$this->tokenStorage     = \$this->createMock(TokenStorageInterface::class);
        \$authenticationManager  = \$this->createMock(AuthenticationManagerInterface::class);
        \$logger                 = \$this->createMock(LoggerInterface::class);
        \$dispatcher             = \$this->createMock(EventDispatcherInterface::class);
        \$permissionRepository   = \$this->createMock(PermissionRepository::class);
        \$this->entityManager    = \$this->createMock(EntityManagerInterface::class);
        \$this->token            = \$this->createMock(OAuthToken::class);
        \$this->objectRepository = \$this->createMock(ObjectRepository::class);

        \$this->authenticationListener = new AuthenticationListener(
            \$authenticationHandler,
            \$this->tokenStorage,
            \$authenticationManager,
            \$logger,
            \$dispatcher,
            'api',
            \$permissionRepository,
            \$this->entityManager
        );
    }

    public function testHandle(): void
    {
        \$token = 'test-token';

        \$adminRole = new Role();
        \$adminRole->setIsAdmin(true);

        \$client = new Client();
        \$client->setRole(\$adminRole);

        \$this->accessToken = new AccessToken();
        \$this->accessToken->setClient(\$client);

        \$getResponseEvent = \$this->createMock(GetResponseEvent::class);

        \$this->tokenStorage->expects(\$this->any())
            ->method('getToken')
            ->willReturn(\$this->token);

        \$this->token->expects(\$this->any())
            ->method('getToken')
            ->willReturn(\$token);

        \$this->entityManager
            ->method('getRepository')
            ->with(AccessToken::class)
            ->willReturn(\$this->objectRepository);

        \$this->objectRepository
            ->method('findOneBy')
            ->with(['token' => \$token])
            ->willReturn(\$this->accessToken);

        \$this->token->expects(\$this->any())
            ->method('setUser');

        \$this->tokenStorage->expects(\$this->any())
            ->method('setToken')
            ->with(\$this->token);

        \$result = \$this->authenticationListener->handle(\$getResponseEvent);

        \$this->assertNull(\$result);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Tests/Security/Firewall/AuthenticationListenerTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/Security/Firewall/AuthenticationListenerTest.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Tests/Security/Firewall/AuthenticationListenerTest.php");
    }
}
