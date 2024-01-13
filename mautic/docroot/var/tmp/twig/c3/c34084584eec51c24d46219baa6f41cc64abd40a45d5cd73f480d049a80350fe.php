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

/* @bundles/ApiBundle/Tests/Form/Type/ClientTypeTest.php */
class __TwigTemplate_5aa87d9e5908d6dc59c620e01f112fdfd2328e746f5014b3f794f1aa0ab5e0af extends Template
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

namespace Mautic\\ApiBundle\\Tests\\Form\\Type;

use Mautic\\ApiBundle\\Entity\\oAuth2\\Client;
use Mautic\\ApiBundle\\Form\\Type\\ClientType;
use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Mautic\\CoreBundle\\Form\\EventListener\\FormExitSubscriber;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

class ClientTypeTest extends TestCase
{
    /**
     * @var ClientType
     */
    private \$clientType;

    /**
     * @var RequestStack
     */
    private \$requestStack;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var ValidatorInterface
     */
    private \$validator;

    /**
     * @var Session
     */
    private \$session;

    /**
     * @var RouterInterface
     */
    private \$router;

    /**
     * @var FormBuilderInterface
     */
    private \$builder;

    /**
     * @var Request
     */
    private \$request;

    private Client \$client;

    protected function setUp(): void
    {
        \$this->requestStack = \$this->createMock(RequestStack::class);
        \$this->translator   = \$this->createMock(TranslatorInterface::class);
        \$this->validator    = \$this->createMock(ValidatorInterface::class);
        \$this->session      = \$this->createMock(Session::class);
        \$this->router       = \$this->createMock(RouterInterface::class);
        \$this->builder      = \$this->createMock(FormBuilderInterface::class);
        \$this->request      = \$this->createMock(Request::class);
        \$this->client       = new Client();

        \$this->requestStack->expects(\$this->once())
            ->method('getCurrentRequest')
            ->willReturn(\$this->request);

        \$this->request->expects(\$this->once())
            ->method('get')
            ->with('api_mode', null);

        \$this->clientType = new ClientType(
            \$this->requestStack,
            \$this->translator,
            \$this->validator,
            \$this->session,
            \$this->router
        );
    }

    public function testThatBuildFormCallsEventSubscribers(): void
    {
        \$options = [
            'data' => \$this->client,
        ];

        \$this->builder->expects(\$this->any())
            ->method('create')
            ->willReturnSelf();

        \$cleanSubscriber    = new CleanFormSubscriber([]);
        \$formExitSubscriber = new FormExitSubscriber('api.client', \$options);

        \$this->builder->expects(\$this->exactly(2))
            ->method('addEventSubscriber')
            ->withConsecutive(
                [\$cleanSubscriber],
                [\$formExitSubscriber]
            );

        \$this->clientType->buildForm(\$this->builder, \$options);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Tests/Form/Type/ClientTypeTest.php";
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
        return new Source("", "@bundles/ApiBundle/Tests/Form/Type/ClientTypeTest.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Tests/Form/Type/ClientTypeTest.php");
    }
}
