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

/* @bundles/EmailBundle/Tests/Swiftmailer/SwiftmailerTransportFactoryTest.php */
class __TwigTemplate_370fb9c88cc0322c2689757c284af9b5abc713732d320fb33dbe943e084c447c extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Swiftmailer;

use Mautic\\EmailBundle\\Swiftmailer\\SwiftmailerTransportFactory;
use Mautic\\EmailBundle\\Swiftmailer\\Transport\\SparkpostTransport;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\Routing\\RequestContext;

class SwiftmailerTransportFactoryTest extends TestCase
{
    /**
     * @var ContainerInterface|MockObject
     */
    private \$container;

    /**
     * @var RequestContext|MockObject
     */
    private \$requestContext;

    /**
     * @var \\Swift_Events_EventDispatcher|MockObject
     */
    private \$eventDispatcher;

    protected function setUp(): void
    {
        \$this->container       = \$this->createMock(ContainerInterface::class);
        \$this->requestContext  = \$this->createMock(RequestContext::class);
        \$this->eventDispatcher = \$this->createMock(\\Swift_Events_EventDispatcher::class);
    }

    public function testServiceIsFoundAndReturned()
    {
        \$transportMock = \$this->createMock(SparkpostTransport::class);

        \$transport = 'mautic.transport.sparkpost';
        \$this->container->expects(\$this->once())
            ->method('has')
            ->with(\$transport)
            ->willReturn(true);

        \$this->container->expects(\$this->once())
            ->method('get')
            ->with(\$transport)
            ->willReturn(\$transportMock);

        \$options = ['transport' => \$transport];

        \$foundTransport = SwiftmailerTransportFactory::createTransport(\$options, \$this->requestContext, \$this->eventDispatcher, \$this->container);

        \$this->assertInstanceOf(SparkpostTransport::class, \$foundTransport);
    }

    public function testExceptionIsThrownIfServiceNotFound()
    {
        \$this->expectException(\\InvalidArgumentException::class);

        \$transport = 'mautic.transport.sparkpost';
        \$this->container->expects(\$this->once())
            ->method('has')
            ->with(\$transport)
            ->willReturn(false);

        \$this->container->expects(\$this->never())
            ->method('get');

        \$options = ['transport' => \$transport];

        SwiftmailerTransportFactory::createTransport(\$options, \$this->requestContext, \$this->eventDispatcher, \$this->container);
    }

    public function testSmtpTransportIsReturnedIfServiceNotUsed()
    {
        \$this->container->expects(\$this->once())
            ->method('has')
            ->with('smtp')
            ->willReturn(false);

        \$this->container->expects(\$this->never())
            ->method('get');

        \$options = ['transport' => 'smtp'];

        \$transport = SwiftmailerTransportFactory::createTransport(\$options, \$this->requestContext, \$this->eventDispatcher, \$this->container);

        \$this->assertInstanceOf(\\Swift_Transport_EsmtpTransport::class, \$transport);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Swiftmailer/SwiftmailerTransportFactoryTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Swiftmailer/SwiftmailerTransportFactoryTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Swiftmailer/SwiftmailerTransportFactoryTest.php");
    }
}
