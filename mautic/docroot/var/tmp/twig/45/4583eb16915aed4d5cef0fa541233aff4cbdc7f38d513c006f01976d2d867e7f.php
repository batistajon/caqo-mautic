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

/* @bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/BundleMetadataBuilderTest.php */
class __TwigTemplate_e6757bc680c9ea7fc8575601dfc7c98c925f0a7bc3127c6165789d508a47af95 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\DependencyInjection\\Builder;

use Mautic\\CoreBundle\\DependencyInjection\\Builder\\BundleMetadataBuilder;
use Mautic\\CoreBundle\\Security\\Permissions\\SystemPermissions;
use MauticPlugin\\MauticFocusBundle\\Security\\Permissions\\FocusPermissions;
use PHPUnit\\Framework\\TestCase;

class BundleMetadataBuilderTest extends TestCase
{
    /**
     * @var array
     */
    private \$paths;

    protected function setUp(): void
    {
        // Used in paths_helper
        \$root = __DIR__.'/../../../../../../../app';

        /** @var array \$paths */
        include __DIR__.'/../../../../../../config/paths_helper.php';

        if (!isset(\$paths)) {
            throw new \\Exception('\$paths is not set');
        }

        \$this->paths = \$paths;
    }

    public function testCoreBundleMetadataLoaded()
    {
        \$bundles = ['MauticCoreBundle' => 'Mautic\\CoreBundle\\MauticCoreBundle'];

        \$builder  = new BundleMetadataBuilder(\$bundles, \$this->paths);
        \$metadata = \$builder->getCoreBundleMetadata();

        \$this->assertEquals([], \$builder->getPluginMetadata());
        \$this->assertTrue(isset(\$metadata['MauticCoreBundle']));

        \$bundleMetadata = \$metadata['MauticCoreBundle'];

        \$this->assertFalse(\$bundleMetadata['isPlugin']);
        \$this->assertEquals('Core', \$bundleMetadata['base']);
        \$this->assertEquals('CoreBundle', \$bundleMetadata['bundle']);
        \$this->assertEquals('MauticCoreBundle', \$bundleMetadata['symfonyBundleName']);
        \$this->assertEquals('app/bundles/CoreBundle', \$bundleMetadata['relative']);
        \$this->assertEquals(realpath(\$this->paths['root']).'/app/bundles/CoreBundle', \$bundleMetadata['directory']);
        \$this->assertEquals('Mautic\\CoreBundle', \$bundleMetadata['namespace']);
        \$this->assertEquals('Mautic\\CoreBundle\\MauticCoreBundle', \$bundleMetadata['bundleClass']);
        \$this->assertTrue(isset(\$bundleMetadata['permissionClasses']));
        \$this->assertTrue(isset(\$bundleMetadata['permissionClasses'][SystemPermissions::class]));
        \$this->assertTrue(isset(\$bundleMetadata['config']));
        \$this->assertTrue(isset(\$bundleMetadata['config']['routes']));
    }

    public function testPluginMetadataLoaded()
    {
        \$bundles = ['MauticFocusBundle' => 'MauticPlugin\\MauticFocusBundle\\MauticFocusBundle'];

        \$builder  = new BundleMetadataBuilder(\$bundles, \$this->paths);
        \$metadata = \$builder->getPluginMetadata();

        \$this->assertEquals([], \$builder->getCoreBundleMetadata());
        \$this->assertTrue(isset(\$metadata['MauticFocusBundle']));
        \$bundleMetadata = \$metadata['MauticFocusBundle'];

        \$this->assertTrue(\$bundleMetadata['isPlugin']);
        \$this->assertEquals('MauticFocus', \$bundleMetadata['base']);
        \$this->assertEquals('MauticFocusBundle', \$bundleMetadata['bundle']);
        \$this->assertEquals('MauticFocusBundle', \$bundleMetadata['symfonyBundleName']);
        \$this->assertEquals('plugins/MauticFocusBundle', \$bundleMetadata['relative']);
        \$this->assertEquals(realpath(\$this->paths['root']).'/plugins/MauticFocusBundle', \$bundleMetadata['directory']);
        \$this->assertEquals('MauticPlugin\\MauticFocusBundle', \$bundleMetadata['namespace']);
        \$this->assertEquals('MauticPlugin\\MauticFocusBundle\\MauticFocusBundle', \$bundleMetadata['bundleClass']);
        \$this->assertTrue(isset(\$bundleMetadata['permissionClasses']));
        \$this->assertTrue(isset(\$bundleMetadata['permissionClasses'][FocusPermissions::class]));
        \$this->assertTrue(isset(\$bundleMetadata['config']));
        \$this->assertTrue(isset(\$bundleMetadata['config']['routes']));
    }

    public function testSymfonyBundleIgnored()
    {
        \$bundles = ['FooBarBundle' => 'Foo\\Bar\\BarBundle'];

        \$builder = new BundleMetadataBuilder(\$bundles, \$this->paths);
        \$this->assertEquals([], \$builder->getCoreBundleMetadata());
        \$this->assertEquals([], \$builder->getPluginMetadata());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/BundleMetadataBuilderTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/BundleMetadataBuilderTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/BundleMetadataBuilderTest.php");
    }
}
