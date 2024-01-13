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

/* @bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/BundleMetadataTest.php */
class __TwigTemplate_bea729672e100e9e1e3c2d7237ae4d54c0049c26a2bb0c92a932da732ca46e98 extends Template
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

use Mautic\\CoreBundle\\DependencyInjection\\Builder\\BundleMetadata;
use PHPUnit\\Framework\\TestCase;

class BundleMetadataTest extends TestCase
{
    public function testGetters()
    {
        \$metadataArray = [
            'isPlugin'          => true,
            'base'              => 'Core',
            'bundle'            => 'CoreBundle',
            'relative'          => 'app/bundles/MauticCoreBundle',
            'directory'         => '/var/www/app/bundles/MauticCoreBundle',
            'namespace'         => 'Mautic\\\\CoreBundle',
            'symfonyBundleName' => 'MauticCoreBundle',
            'bundleClass'       => '\\\\Mautic\\\\CoreBundle',
        ];

        \$metadata = new BundleMetadata(\$metadataArray);
        \$this->assertSame(\$metadataArray['directory'], \$metadata->getDirectory());
        \$this->assertSame(\$metadataArray['namespace'], \$metadata->getNamespace());
        \$this->assertSame(\$metadataArray['bundle'], \$metadata->getBaseName());
        \$this->assertSame(\$metadataArray['symfonyBundleName'], \$metadata->getBundleName());

        \$metadata->setConfig(['foo' => 'bar']);
        \$metadata->addPermissionClass('\\Foo\\Bar');

        \$metadataArray['config']                        = ['foo' => 'bar'];
        \$metadataArray['permissionClasses']['\\Foo\\Bar'] = '\\Foo\\Bar';
        \$this->assertEquals(\$metadataArray, \$metadata->toArray());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/BundleMetadataTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/BundleMetadataTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/BundleMetadataTest.php");
    }
}
