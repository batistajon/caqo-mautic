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

/* @bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/EntityMetadataTest.php */
class __TwigTemplate_fd5711230bd191b1ea819ea02e473e6c93e594525f5217bd07359a85bdaad193 extends Template
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

use Mautic\\CoreBundle\\DependencyInjection\\Builder\\BundleMetadata;
use Mautic\\CoreBundle\\DependencyInjection\\Builder\\Metadata\\EntityMetadata;
use PHPUnit\\Framework\\TestCase;

class EntityMetadataTest extends TestCase
{
    /**
     * @var BundleMetadata
     */
    private \$metadata;

    protected function setUp(): void
    {
        \$metadataArray = [
            'isPlugin'          => true,
            'base'              => 'Core',
            'bundle'            => 'CoreBundle',
            'relative'          => 'app/bundles/MauticCoreBundle',
            'directory'         => __DIR__.'/../../../../../',
            'namespace'         => 'Mautic\\\\CoreBundle',
            'symfonyBundleName' => 'MauticCoreBundle',
            'bundleClass'       => '\\\\Mautic\\\\CoreBundle',
        ];

        \$this->metadata = new BundleMetadata(\$metadataArray);
    }

    public function testOrmAndSerializerConfigsFound()
    {
        \$entityMetadata = new EntityMetadata(\$this->metadata);
        \$entityMetadata->build();

        \$this->assertEquals(
            [
                'dir'       => 'Entity',
                'type'      => 'staticphp',
                'prefix'    => 'Mautic\\\\CoreBundle\\\\Entity',
                'mapping'   => true,
                'is_bundle' => true,
            ],
            \$entityMetadata->getOrmConfig()
        );

        \$this->assertEquals(
            [
                'namespace_prefix' => 'Mautic\\\\CoreBundle\\\\Entity',
                'path'             => '@MauticCoreBundle/Entity',
            ],
            \$entityMetadata->getSerializerConfig()
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/EntityMetadataTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/EntityMetadataTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/EntityMetadataTest.php");
    }
}
