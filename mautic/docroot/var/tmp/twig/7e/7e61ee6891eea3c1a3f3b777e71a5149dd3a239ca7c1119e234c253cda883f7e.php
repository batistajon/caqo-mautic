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

/* @bundles/CoreBundle/DependencyInjection/Builder/BundleMetadata.php */
class __TwigTemplate_ea1bd9ceba2767a704bf046a75073c9419c3ee3803d445775686b888afde5bf8 extends Template
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

namespace Mautic\\CoreBundle\\DependencyInjection\\Builder;

class BundleMetadata
{
    /**
     * @var array
     */
    private \$metadata = [
        'config'            => [],
        'permissionClasses' => [],
    ];

    /**
     * @var string
     */
    private \$directory;

    /**
     * @var string
     */
    private \$namespace;

    /**
     * @var string
     */
    private \$baseName;

    /**
     * @var string
     */
    private \$bundleName;

    public function __construct(array \$metadata)
    {
        \$this->metadata = \$metadata;

        if (!isset(\$this->metadata['permissionClasses'])) {
            \$this->metadata['permissionClasses'] = [];
        }

        if (!isset(\$this->metadata['config'])) {
            \$this->metadata['config'] = [];
        }

        \$this->directory  = \$metadata['directory'];
        \$this->namespace  = \$metadata['namespace'];
        \$this->baseName   = \$metadata['bundle'];
        \$this->bundleName = \$metadata['symfonyBundleName'];
    }

    public function getDirectory(): string
    {
        return \$this->directory;
    }

    public function getNamespace(): string
    {
        return \$this->namespace;
    }

    public function getBaseName(): string
    {
        return \$this->baseName;
    }

    public function getBundleName(): string
    {
        return \$this->bundleName;
    }

    public function setConfig(array \$config): void
    {
        \$this->metadata['config'] = \$config;
    }

    public function addPermissionClass(string \$class): void
    {
        \$this->metadata['permissionClasses'][\$class] = \$class;
    }

    public function toArray(): array
    {
        return \$this->metadata;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/DependencyInjection/Builder/BundleMetadata.php";
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
        return new Source("", "@bundles/CoreBundle/DependencyInjection/Builder/BundleMetadata.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/DependencyInjection/Builder/BundleMetadata.php");
    }
}
