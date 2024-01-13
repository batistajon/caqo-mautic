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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Internal/ObjectProviderTest.php */
class __TwigTemplate_6e3e947c275b83c4ee4514c8f76173301fef0c5da165208ac979ed442df33920 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\SyncDataExchange\\Internal;

use Mautic\\IntegrationsBundle\\Event\\InternalObjectEvent;
use Mautic\\IntegrationsBundle\\IntegrationEvents;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectProvider;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class ObjectProviderTest extends TestCase
{
    /**
     * @var EventDispatcherInterface|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$dispatcher;

    /**
     * @var ObjectProvider
     */
    private \$objectProvider;

    protected function setUp(): void
    {
        \$this->dispatcher     = \$this->createMock(EventDispatcherInterface::class);
        \$this->objectProvider = new ObjectProvider(\$this->dispatcher);
    }

    public function testGetObjectByNameIfItDoesNotExist(): void
    {
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                IntegrationEvents::INTEGRATION_COLLECT_INTERNAL_OBJECTS,
                \$this->isInstanceOf(InternalObjectEvent::class)
            );

        \$this->expectException(ObjectNotFoundException::class);
        \$this->objectProvider->getObjectByName('Unicorn');
    }

    public function testGetObjectByNameIfItExists(): void
    {
        \$contact = new Contact();
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                IntegrationEvents::INTEGRATION_COLLECT_INTERNAL_OBJECTS,
                \$this->callback(function (InternalObjectEvent \$e) use (\$contact) {
                    // Fake a subscriber.
                    \$e->addObject(\$contact);

                    return true;
                })
            );

        \$this->assertSame(\$contact, \$this->objectProvider->getObjectByName(Contact::NAME));
    }

    public function testGetObjectByEntityNameIfItDoesNotExist(): void
    {
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                IntegrationEvents::INTEGRATION_COLLECT_INTERNAL_OBJECTS,
                \$this->isInstanceOf(InternalObjectEvent::class)
            );

        \$this->expectException(ObjectNotFoundException::class);
        \$this->objectProvider->getObjectByEntityName('Unicorn');
    }

    public function testGetObjectByEntityNameIfItExists(): void
    {
        \$contact = new Contact();
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                IntegrationEvents::INTEGRATION_COLLECT_INTERNAL_OBJECTS,
                \$this->callback(function (InternalObjectEvent \$e) use (\$contact) {
                    // Fake a subscriber.
                    \$e->addObject(\$contact);

                    return true;
                })
            );

        \$this->assertSame(\$contact, \$this->objectProvider->getObjectByEntityName(Lead::class));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Internal/ObjectProviderTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Internal/ObjectProviderTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Internal/ObjectProviderTest.php");
    }
}
