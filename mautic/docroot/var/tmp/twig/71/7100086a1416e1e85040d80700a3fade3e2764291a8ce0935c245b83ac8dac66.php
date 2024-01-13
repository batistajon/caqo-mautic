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

/* @bundles/ConfigBundle/Tests/EventListener/ConfigSubscriberTest.php */
class __TwigTemplate_dd55c355228a60bd5235e5820cb8ff5f86e534ab505203afe2b2fb98085c63dd extends Template
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

namespace Mautic\\ConfigBundle\\Tests\\EventListener;

use Mautic\\ConfigBundle\\ConfigEvents;
use Mautic\\ConfigBundle\\Event\\ConfigEvent;
use Mautic\\ConfigBundle\\EventListener\\ConfigSubscriber;
use Mautic\\ConfigBundle\\Service\\ConfigChangeLogger;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class ConfigSubscriberTest extends TestCase
{
    /**
     * @var ConfigChangeLogger|MockObject
     */
    private \$logger;

    /**
     * @var ConfigSubscriber
     */
    private \$subscriber;

    protected function setUp(): void
    {
        \$this->logger     = \$this->createMock(ConfigChangeLogger::class);
        \$this->subscriber = new ConfigSubscriber(\$this->logger);
    }

    public function testGetSubscribedEvents()
    {
        \$this->assertEquals(
            [
                ConfigEvents::CONFIG_POST_SAVE => ['onConfigPostSave', 0],
            ],
            \$this->subscriber->getSubscribedEvents()
        );
    }

    public function testNothingToLogOnConfigPostSave()
    {
        // Test nothing to log
        \$this->logger->expects(\$this->never())
            ->method('log');
        \$event = \$this->createMock(ConfigEvent::class);
        \$event->expects(\$this->once())
            ->method('getOriginalNormData')
            ->willReturn(null);

        \$this->subscriber->onConfigPostSave(\$event);
    }

    public function testSomethingToLogOnConfigPostSave()
    {
        // Test something to log
        \$originalNormData = ['orig'];
        \$normData         = ['norm'];

        \$event = \$this->createMock(ConfigEvent::class);
        \$event->expects(\$this->once())
            ->method('getOriginalNormData')
            ->willReturn(\$originalNormData);
        \$event->expects(\$this->once())
            ->method('getNormData')
            ->willReturn(\$normData);
        \$this->logger->expects(\$this->once())
            ->method('setOriginalNormData')
            ->with(\$originalNormData)
            ->willReturn(\$this->logger);
        \$this->logger->expects(\$this->once())
            ->method('log')
            ->with(\$normData);

        \$this->subscriber->onConfigPostSave(\$event);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ConfigBundle/Tests/EventListener/ConfigSubscriberTest.php";
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
        return new Source("", "@bundles/ConfigBundle/Tests/EventListener/ConfigSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/ConfigBundle/Tests/EventListener/ConfigSubscriberTest.php");
    }
}
