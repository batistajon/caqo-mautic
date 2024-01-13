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

/* @bundles/QueueBundle/Tests/MauticQueueBundleTest.php */
class __TwigTemplate_19b3b06cb4c27ec25fdbb180111a45a35d4c6639bbff8d2b2c05a942ce385473 extends Template
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

namespace Mautic\\QueueBundle\\Tests;

use Leezy\\PheanstalkBundle\\DependencyInjection\\LeezyPheanstalkExtension;
use Mautic\\QueueBundle\\MauticQueueBundle;
use Mautic\\QueueBundle\\Queue\\QueueProtocol;
use OldSound\\RabbitMqBundle\\DependencyInjection\\Compiler\\RegisterPartsPass;
use OldSound\\RabbitMqBundle\\DependencyInjection\\OldSoundRabbitMqExtension;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class MauticQueueBundleTest extends TestCase
{
    /**
     * @var ContainerBuilder|MockObject
     */
    private \$container;

    protected function setUp(): void
    {
        \$this->container = \$this->createMock(ContainerBuilder::class);
    }

    public function testCompilerPassIgnoredIfQueueIsDisabled()
    {
        \$this->container->expects(\$this->never())
            ->method('addCompilerPass');

        \$this->container->expects(\$this->never())
            ->method('loadFromExtension');

        \$bundle = new MauticQueueBundle('');

        \$bundle->build(\$this->container);
    }

    public function testRabbitMqIsLoaded()
    {
        \$this->container->expects(\$this->once())
            ->method('addCompilerPass')
            ->with(\$this->isInstanceOf(RegisterPartsPass::class));

        \$this->container->expects(\$this->once())
            ->method('loadFromExtension')
            ->with('old_sound_rabbit_mq', \$this->anything());

        \$bundle = new MauticQueueBundle(QueueProtocol::RABBITMQ);

        \$bundle->build(\$this->container);

        \$extension = \$bundle->getContainerExtension();
        \$this->assertInstanceOf(OldSoundRabbitMqExtension::class, \$extension);
    }

    public function testBeanstalkdIsLoaded()
    {
        \$this->container->expects(\$this->never())
            ->method('addCompilerPass');

        \$this->container->expects(\$this->once())
            ->method('loadFromExtension')
            ->with('leezy_pheanstalk', \$this->anything());

        \$bundle = new MauticQueueBundle(QueueProtocol::BEANSTALKD);

        \$bundle->build(\$this->container);

        \$extension = \$bundle->getContainerExtension();
        \$this->assertInstanceOf(LeezyPheanstalkExtension::class, \$extension);
    }

    public function testNothingIsLoadedIfQueueIsNotRecongized()
    {
        \$this->container->expects(\$this->never())
            ->method('addCompilerPass');

        \$this->container->expects(\$this->never())
            ->method('loadFromExtension');

        \$bundle = new MauticQueueBundle('foobar');

        \$bundle->build(\$this->container);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/QueueBundle/Tests/MauticQueueBundleTest.php";
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
        return new Source("", "@bundles/QueueBundle/Tests/MauticQueueBundleTest.php", "/var/www/html/mautic/docroot/app/bundles/QueueBundle/Tests/MauticQueueBundleTest.php");
    }
}
