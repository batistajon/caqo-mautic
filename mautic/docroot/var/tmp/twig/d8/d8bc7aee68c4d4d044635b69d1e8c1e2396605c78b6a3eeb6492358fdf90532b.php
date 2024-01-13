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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/Notification/Helper/OwnerProviderTest.php */
class __TwigTemplate_eb5b616f5e25f8b762c35cfe6cb283dea28f16b429bedacf876ced63d456e4c4 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\Notification\\Helper;

use Mautic\\IntegrationsBundle\\Event\\InternalObjectOwnerEvent;
use Mautic\\IntegrationsBundle\\IntegrationEvents;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotSupportedException;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Helper\\OwnerProvider;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectProvider;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class OwnerProviderTest extends TestCase
{
    /**
     * @var ObjectProvider|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$objectProvider;

    /**
     * @var EventDispatcherInterface|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$dispatcher;

    /**
     * @var OwnerProvider
     */
    private \$ownerProvider;

    protected function setUp(): void
    {
        \$this->objectProvider = \$this->createMock(ObjectProvider::class);
        \$this->dispatcher     = \$this->createMock(EventDispatcherInterface::class);
        \$this->ownerProvider  = new OwnerProvider(\$this->dispatcher, \$this->objectProvider);
    }

    public function testGetOwnersForObjectIdsWithoutIds(): void
    {
        \$this->objectProvider->expects(\$this->never())
            ->method('getObjectByName');

        \$this->assertSame([], \$this->ownerProvider->getOwnersForObjectIds(Contact::NAME, []));
    }

    public function testGetOwnersForObjectIdsWithUnknownObject(): void
    {
        \$this->objectProvider->expects(\$this->once())
            ->method('getObjectByName')
            ->with('Unicorn')
            ->willThrowException(new ObjectNotFoundException('Unicorn'));

        \$this->expectException(ObjectNotSupportedException::class);

        \$this->ownerProvider->getOwnersForObjectIds('Unicorn', [123]);
    }

    public function testGetOwnersForObjectIdsWithKnownObject(): void
    {
        \$internalObject = new Contact();
        \$this->objectProvider->expects(\$this->once())
            ->method('getObjectByName')
            ->with(Contact::NAME)
            ->willReturn(\$internalObject);

        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                IntegrationEvents::INTEGRATION_FIND_OWNER_IDS,
                \$this->callback(function (InternalObjectOwnerEvent \$event) use (\$internalObject) {
                    \$this->assertSame(\$internalObject, \$event->getObject());
                    \$this->assertSame([123], \$event->getObjectIds());

                    // Simulate a subscriber. Format: [object_id => owner_id].
                    \$event->setOwners([\$event->getObjectIds()[0] => 456]);

                    return true;
                })
            );

        \$this->assertSame([123 => 456], \$this->ownerProvider->getOwnersForObjectIds(Contact::NAME, [123]));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/Notification/Helper/OwnerProviderTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/Notification/Helper/OwnerProviderTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/Notification/Helper/OwnerProviderTest.php");
    }
}
