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

/* @bundles/QueueBundle/Tests/EventListener/BeanstalkdSubscriberTest.php */
class __TwigTemplate_9dfc1156a89b3829f6710ef94430b7e623657308abb6150c835a5705b2c630d7 extends Template
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

namespace Mautic\\QueueBundle\\Tests\\EventListener;

use Leezy\\PheanstalkBundle\\Proxy\\PheanstalkProxy;
use Mautic\\QueueBundle\\Event\\QueueEvent;
use Mautic\\QueueBundle\\EventListener\\BeanstalkdSubscriber;
use Mautic\\QueueBundle\\Queue\\QueueService;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

class BeanstalkdSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var PheanstalkProxy|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$pheanstalkProxy;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|ContainerInterface
     */
    private \$container;

    /**
     * @var QueueService|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$queueService;

    /**
     * @var BeanstalkdSubscriber
     */
    private \$beanstalkdSubscriber;

    public function setUp(): void
    {
        parent::setUp();
        \$this->pheanstalkProxy      = \$this->createMock(PheanstalkProxy::class);
        \$this->container            = \$this->createMock(ContainerInterface::class);
        \$this->queueService         = \$this->createMock(QueueService::class);
        \$this->beanstalkdSubscriber = new BeanstalkdSubscriber(\$this->container, \$this->queueService);
    }

    public function testPublishMessage()
    {
        \$queueName = 'queueName';
        \$event     = new QueueEvent('', \$queueName);

        \$this->container
            ->expects(\$this->once())
            ->method('get')
            ->with('leezy.pheanstalk')
            ->willReturn(\$this->pheanstalkProxy);

        \$this->pheanstalkProxy
            ->expects(\$this->once())
            ->method('useTube')
            ->with(\$queueName)
            ->willReturn(\$this->pheanstalkProxy);

        \$this->pheanstalkProxy
            ->expects(\$this->once())
            ->method('put')
            ->with('[]');

        \$this->beanstalkdSubscriber->publishMessage(\$event);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/QueueBundle/Tests/EventListener/BeanstalkdSubscriberTest.php";
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
        return new Source("", "@bundles/QueueBundle/Tests/EventListener/BeanstalkdSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/QueueBundle/Tests/EventListener/BeanstalkdSubscriberTest.php");
    }
}
