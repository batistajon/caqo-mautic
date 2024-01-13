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

/* @bundles/CacheBundle/Tests/Cache/CacheProviderTest.php */
class __TwigTemplate_177577f4b17d1154f736afeff9c3d1af79f93611544a2aceb06f72595497f683 extends Template
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

namespace Mautic\\CacheBundle\\Tests\\Cache;

use Mautic\\CacheBundle\\Cache\\Adapter\\FilesystemTagAwareAdapter;
use Mautic\\CacheBundle\\Cache\\CacheProvider;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Cache\\Simple\\Psr6Cache;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

class CacheProviderTest extends TestCase
{
    /**
     * @var CacheProvider
     */
    private \$cacheProvider;

    /**
     * @var MockObject|FilesystemTagAwareAdapter
     */
    private \$adapter;

    /**
     * @var MockObject|CoreParametersHelper
     */
    private \$coreParametersHelper;

    /**
     * @var MockObject|ContainerInterface
     */
    private \$container;

    public function setUp(): void
    {
        parent::setUp();
        \$this->adapter              = \$this->createMock(FilesystemTagAwareAdapter::class);
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->container            = \$this->createMock(ContainerInterface::class);
        \$this->cacheProvider        = new CacheProvider(\$this->coreParametersHelper, \$this->container);
    }

    public function testRequestedCacheAdaptorIsReturned(): void
    {
        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('cache_adapter')
            ->willReturn('foo.bar');

        \$this->container->expects(\$this->once())
            ->method('has')
            ->with('foo.bar')
            ->willReturn(true);

        \$this->container->expects(\$this->once())
            ->method('get')
            ->with('foo.bar')
            ->willReturn(\$this->adapter);

        \$this->assertEquals(\$this->cacheProvider->getCacheAdapter(), \$this->adapter);
    }

    public function testSimplePsrCacheIsReturned(): void
    {
        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('cache_adapter')
            ->willReturn('foo.bar');

        \$this->container->expects(\$this->once())
            ->method('has')
            ->with('foo.bar')
            ->willReturn(true);

        \$this->container->expects(\$this->once())
            ->method('get')
            ->with('foo.bar')
            ->willReturn(\$this->adapter);

        \$simpleCache = \$this->cacheProvider->getSimpleCache();
        \$this->assertInstanceOf(Psr6Cache::class, \$simpleCache);
    }

    public function testExceptionThrownIfAdaptorNotFoundInContainer(): void
    {
        \$this->expectException(InvalidArgumentException::class);

        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('cache_adapter')
            ->willReturn('bar.foo');

        \$this->container->expects(\$this->once())
            ->method('has')
            ->with('bar.foo')
            ->willReturn(false);

        \$this->container->expects(\$this->never())
            ->method('get');

        \$this->cacheProvider->getCacheAdapter();
    }

    public function testExceptionThrownIfAdaptorEmpty(): void
    {
        \$this->expectException(InvalidArgumentException::class);

        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('cache_adapter')
            ->willReturn(null);

        \$this->container->expects(\$this->never())
            ->method('has');

        \$this->container->expects(\$this->never())
            ->method('get');

        \$this->cacheProvider->getCacheAdapter();
    }

    public function testExceptionThrownIfAdaptorNotInstanceOfTagAwareAdapterInterface(): void
    {
        \$this->expectException(InvalidArgumentException::class);

        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('cache_adapter')
            ->willReturn('foo.bar');

        \$this->container->expects(\$this->once())
            ->method('has')
            ->with('foo.bar')
            ->willReturn(true);

        \$this->container->expects(\$this->once())
            ->method('get')
            ->with('foo.bar')
            ->willReturn(new \\stdClass());

        \$this->cacheProvider->getCacheAdapter();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CacheBundle/Tests/Cache/CacheProviderTest.php";
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
        return new Source("", "@bundles/CacheBundle/Tests/Cache/CacheProviderTest.php", "/var/www/html/mautic/docroot/app/bundles/CacheBundle/Tests/Cache/CacheProviderTest.php");
    }
}
