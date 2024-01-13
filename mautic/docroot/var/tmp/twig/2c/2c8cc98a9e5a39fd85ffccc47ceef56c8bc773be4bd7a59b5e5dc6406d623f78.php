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

/* @bundles/CoreBundle/Tests/Unit/Doctrine/Provider/GeneratedColumnsProviderTest.php */
class __TwigTemplate_75a2c87166b2bc7586bc96845a65d40b1d1468f190518b486fd8713bf4de04d3 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Doctrine\\Provider;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Doctrine\\GeneratedColumn\\GeneratedColumn;
use Mautic\\CoreBundle\\Doctrine\\GeneratedColumn\\GeneratedColumnsInterface;
use Mautic\\CoreBundle\\Doctrine\\Provider\\GeneratedColumnsProvider;
use Mautic\\CoreBundle\\Doctrine\\Provider\\VersionProviderInterface;
use Mautic\\CoreBundle\\Event\\GeneratedColumnsEvent;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

final class GeneratedColumnsProviderTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|VersionProviderInterface
     */
    private \$versionProvider;

    /**
     * @var MockObject|EventDispatcherInterface
     */
    private \$dispatcher;

    /**
     * @var GeneratedColumnsProvider
     */
    private \$provider;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->versionProvider = \$this->createMock(VersionProviderInterface::class);
        \$this->dispatcher      = \$this->createMock(EventDispatcherInterface::class);
        \$this->provider        = new GeneratedColumnsProvider(\$this->versionProvider, \$this->dispatcher);

        \$this->dispatcher->method('hasListeners')->willReturn(true);
    }

    public function testGetGeneratedColumnsIfNotSupported(): void
    {
        \$notSupportedMySqlVersion = '5.7.13';

        \$this->versionProvider->expects(\$this->once())
            ->method('getVersion')
            ->willReturn(\$notSupportedMySqlVersion);

        \$this->dispatcher->expects(\$this->never())
            ->method('dispatch');

        \$generatedColumns = \$this->provider->getGeneratedColumns();

        \$this->assertInstanceOf(GeneratedColumnsInterface::class, \$generatedColumns);
        \$this->assertCount(0, \$generatedColumns);
    }

    public function testGetGeneratedColumnsIfSupported(): void
    {
        \$supportedMySqlVersion = '5.7.14';

        \$this->versionProvider->method('getVersion')
            ->willReturn(\$supportedMySqlVersion);

        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                CoreEvents::ON_GENERATED_COLUMNS_BUILD,
                \$this->callback(
                    // Emulate a subscriber.
                    function (GeneratedColumnsEvent \$event) {
                        \$event->addGeneratedColumn(new GeneratedColumn('page_hits', 'generated_hit_date', 'DATE', 'not important'));

                        return true;
                    }
                )
            );

        \$generatedColumns = \$this->provider->getGeneratedColumns();
        \$this->assertInstanceOf(GeneratedColumnsInterface::class, \$generatedColumns);

        /** @var GeneratedColumn \$generatedColumn */
        \$generatedColumn = \$generatedColumns->current();
        \$this->assertSame(MAUTIC_TABLE_PREFIX.'page_hits', \$generatedColumn->getTableName());

        // Ensure that the cache works and dispatcher is called only once
        \$generatedColumns = \$this->provider->getGeneratedColumns();

        \$this->assertCount(1, \$generatedColumns);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Doctrine/Provider/GeneratedColumnsProviderTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Doctrine/Provider/GeneratedColumnsProviderTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Doctrine/Provider/GeneratedColumnsProviderTest.php");
    }
}
