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

/* @bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/PermissionClassMetadataTest.php */
class __TwigTemplate_b0a52e1f57409597e0d37174cb4555828afab51c51fb1fe79886f3cda9b90cd1 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\DependencyInjection\\Builder\\Metadata;

use Mautic\\AssetBundle\\Security\\Permissions\\AssetPermissions;
use Mautic\\CoreBundle\\DependencyInjection\\Builder\\BundleMetadata;
use Mautic\\CoreBundle\\DependencyInjection\\Builder\\Metadata\\PermissionClassMetadata;
use Mautic\\CoreBundle\\Security\\Permissions\\SystemPermissions;
use PHPUnit\\Framework\\TestCase;

class PermissionClassMetadataTest extends TestCase
{
    public function testPermissionsFound()
    {
        \$metadataArray = [
            'isPlugin'          => false,
            'base'              => 'Core',
            'bundle'            => 'CoreBundle',
            'relative'          => 'app/bundles/MauticCoreBundle',
            'directory'         => __DIR__.'/../../../../../',
            'namespace'         => 'Mautic\\\\CoreBundle',
            'symfonyBundleName' => 'MauticCoreBundle',
            'bundleClass'       => '\\\\Mautic\\\\CoreBundle',
        ];

        \$metadata                = new BundleMetadata(\$metadataArray);
        \$permissionClassMetadata = new PermissionClassMetadata(\$metadata);
        \$permissionClassMetadata->build();

        \$this->assertTrue(isset(\$metadata->toArray()['permissionClasses'][SystemPermissions::class]));
        \$this->assertCount(1, \$metadata->toArray()['permissionClasses']);
    }

    public function testCompatibilityWithPermissionServices()
    {
        \$metadataArray = [
            'isPlugin'          => false,
            'base'              => 'Asset',
            'bundle'            => 'AssetBundle',
            'relative'          => 'app/bundles/MauticAssetBundle',
            'directory'         => __DIR__.'/../../../../../../AssetBundle',
            'namespace'         => 'Mautic\\\\AssetBundle',
            'symfonyBundleName' => 'MauticAssetBundle',
            'bundleClass'       => '\\\\Mautic\\\\AssetBundle',
        ];

        \$metadata                = new BundleMetadata(\$metadataArray);
        \$permissionClassMetadata = new PermissionClassMetadata(\$metadata);
        \$permissionClassMetadata->build();

        \$this->assertTrue(isset(\$metadata->toArray()['permissionClasses'][AssetPermissions::class]));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/PermissionClassMetadataTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/PermissionClassMetadataTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/PermissionClassMetadataTest.php");
    }
}
