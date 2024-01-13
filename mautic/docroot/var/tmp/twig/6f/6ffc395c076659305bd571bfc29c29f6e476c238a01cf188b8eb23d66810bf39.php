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

/* @bundles/UserBundle/Tests/Security/SAML/Store/IdStoreTest.php */
class __TwigTemplate_7b0646f7c9630a54e5d088e471a411ee77ddea9f3f6c7c37df0b181668559b86 extends Template
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

namespace Mautic\\UserBundle\\Tests\\Security\\SAML\\Store;

use Doctrine\\Persistence\\ObjectManager;
use LightSaml\\Provider\\TimeProvider\\TimeProviderInterface;
use Mautic\\UserBundle\\Entity\\IdEntry;
use Mautic\\UserBundle\\Security\\SAML\\Store\\IdStore;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class IdStoreTest extends TestCase
{
    /**
     * @var ObjectManager|MockObject
     */
    private \$manager;

    /**
     * @var TimeProviderInterface|MockObject
     */
    private \$timeProvider;

    /**
     * @var IdStore
     */
    private \$store;

    protected function setUp(): void
    {
        \$this->manager      = \$this->createMock(ObjectManager::class);
        \$this->timeProvider = \$this->createMock(TimeProviderInterface::class);
        \$this->store        = new IdStore(\$this->manager, \$this->timeProvider);
    }

    public function testNewIdEntryCreatedIfEntityIdNotFound()
    {
        \$expiry = new \\DateTime('+5 minutes');
        \$this->manager->expects(\$this->once())
            ->method('persist')
            ->willReturnCallback(function (IdEntry \$idEntry) use (\$expiry) {
                \$this->assertEquals('foobar', \$idEntry->getEntityId());
                \$this->assertEquals('abc', \$idEntry->getId());
                \$this->assertEquals(\$expiry->getTimestamp(), \$idEntry->getExpiryTime()->getTimestamp());
            });

        \$this->store->set('foobar', 'abc', \$expiry);
    }

    public function testIdEntryUpdatedIfEntityIdFound()
    {
        \$expiry  = new \\DateTime('+5 minutes');
        \$idEntry = new IdEntry();
        \$idEntry->setEntityId('foobar');
        \$idEntry->setId('abc');
        \$idEntry->setExpiryTime(\$expiry);

        \$this->manager->expects(\$this->once())
            ->method('find')
            ->willReturn(\$idEntry);

        \$this->manager->expects(\$this->once())
            ->method('persist')
            ->with(\$idEntry);

        \$this->store->set('foobar', 'abc', \$expiry);
    }

    public function testIdEntryIsFoundAndNotExpired()
    {
        \$expiry  = new \\DateTime('+5 minutes');
        \$idEntry = new IdEntry();
        \$idEntry->setEntityId('foobar');
        \$idEntry->setId('abc');
        \$idEntry->setExpiryTime(\$expiry);

        \$this->manager->expects(\$this->once())
            ->method('find')
            ->willReturn(\$idEntry);

        \$this->assertTrue(\$this->store->has('foobar', 'abc'));
    }

    public function testIdEntryIsFoundButIsExpired()
    {
        \$this->timeProvider->expects(\$this->once())
            ->method('getTimestamp')
            ->willReturn(time());

        \$expiry  = new \\DateTime('-5 minutes');
        \$idEntry = new IdEntry();
        \$idEntry->setEntityId('foobar');
        \$idEntry->setId('abc');
        \$idEntry->setExpiryTime(\$expiry);

        \$this->manager->expects(\$this->once())
            ->method('find')
            ->willReturn(\$idEntry);

        \$this->assertFalse(\$this->store->has('foobar', 'abc'));
    }

    public function testIdEntryIsNotFound()
    {
        \$this->timeProvider->expects(\$this->never())
            ->method('getTimestamp');

        \$this->manager->expects(\$this->once())
            ->method('find')
            ->willReturn(null);

        \$this->assertFalse(\$this->store->has('foobar', 'abc'));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Tests/Security/SAML/Store/IdStoreTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/Security/SAML/Store/IdStoreTest.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Tests/Security/SAML/Store/IdStoreTest.php");
    }
}
