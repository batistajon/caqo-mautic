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

/* @bundles/CoreBundle/DependencyInjection/Builder/BundleMetadataBuilder.php */
class __TwigTemplate_e5b0f5ed771ad253f2dc302d6060f2312499f5a8740b3c171b1fa84a42dbbee6 extends Template
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

use Mautic\\CoreBundle\\DependencyInjection\\Builder\\Metadata\\ConfigMetadata;
use Mautic\\CoreBundle\\DependencyInjection\\Builder\\Metadata\\EntityMetadata;
use Mautic\\CoreBundle\\DependencyInjection\\Builder\\Metadata\\PermissionClassMetadata;

class BundleMetadataBuilder
{
    /**
     * @var array
     */
    private \$paths;

    /**
     * @var array
     */
    private \$symfonyBundles;

    /**
     * @var array
     */
    private \$ipLookupServices = [];

    /**
     * @var array
     */
    private \$ormConfig = [];

    /**
     * @var array
     */
    private \$serializerConfig = [];

    /**
     * @var array
     */
    private \$pluginMetadata = [];

    /**
     * @var array
     */
    private \$coreMetadata = [];

    public function __construct(array \$symfonyBundles, array \$paths)
    {
        \$this->paths          = \$paths;
        \$this->symfonyBundles = \$symfonyBundles;

        \$this->buildMetadata();
    }

    public function getCoreBundleMetadata(): array
    {
        return \$this->coreMetadata;
    }

    public function getPluginMetadata(): array
    {
        return \$this->pluginMetadata;
    }

    public function getIpLookupServices(): array
    {
        return \$this->ipLookupServices;
    }

    public function getOrmConfig(): array
    {
        return \$this->ormConfig;
    }

    public function getSerializerConfig(): array
    {
        return \$this->serializerConfig;
    }

    private function buildMetadata(): void
    {
        foreach (\$this->symfonyBundles as \$symfonyBundle => \$namespace) {
            // Plugin
            if (false !== strpos(\$namespace, 'MauticPlugin\\\\')) {
                \$this->pluginMetadata[\$symfonyBundle] = \$this->buildPluginMetadata(\$namespace, \$symfonyBundle);

                continue;
            }

            // Core bundle
            if (false !== strpos(\$namespace, 'Mautic\\\\')) {
                \$this->coreMetadata[\$symfonyBundle] = \$this->buildCoreMetadata(\$namespace, \$symfonyBundle);

                continue;
            }

            // Otherwise not a Mautic bundle so ignore
        }

        // Make CoreBundle the first in the core bundle list
        if (!isset(\$this->coreMetadata['MauticCoreBundle'])) {
            // Not always set for tests
            return;
        }

        \$coreBundle = \$this->coreMetadata['MauticCoreBundle'];
        unset(\$this->coreMetadata['MauticCoreBundle']);
        \$this->coreMetadata = array_merge(['MauticCoreBundle' => \$coreBundle], \$this->coreMetadata);
    }

    private function buildPluginMetadata(string \$namespace, string \$symfonyBundle): array
    {
        \$relativePath  = \$this->paths['plugins'].'/'.\$symfonyBundle;
        \$metadataArray = \$this->getMetadata(true, \$namespace, \$symfonyBundle, \$symfonyBundle, \$relativePath);

        \$metadata = new BundleMetadata(\$metadataArray);
        \$this->completMetadata(\$metadata);

        return \$metadata->toArray();
    }

    private function buildCoreMetadata(string \$namespace, string \$symfonyBundle): array
    {
        \$bundleName    = str_replace('Mautic', '', \$symfonyBundle);
        \$relativePath  = \$this->paths['bundles'].'/'.\$bundleName;
        \$metadataArray = \$this->getMetadata(false, \$namespace, \$symfonyBundle, \$bundleName, \$relativePath);

        \$metadata = new BundleMetadata(\$metadataArray);
        \$this->completMetadata(\$metadata);

        return \$metadata->toArray();
    }

    private function getMetadata(bool \$isPlugin, string \$namespace, string \$symfonyBundle, string \$bundleName, string \$relativePath): array
    {
        return [
            'isPlugin'          => \$isPlugin,
            'base'              => str_replace('Bundle', '', \$bundleName),
            'bundle'            => \$bundleName,
            'relative'          => \$relativePath,
            'directory'         => realpath(\$this->paths['root'].'/'.\$relativePath),
            'namespace'         => preg_replace('#\\\\\\[^\\\\\\]*\$#', '', \$namespace),
            'symfonyBundleName' => \$symfonyBundle,
            'bundleClass'       => \$namespace,
        ];
    }

    private function completMetadata(BundleMetadata \$metadata): void
    {
        \$configParser = new ConfigMetadata(\$metadata);
        \$configParser->build();

        if (\$foundIpLookupServices = \$configParser->getIpLookupServices()) {
            \$this->ipLookupServices = array_merge(\$foundIpLookupServices, \$this->ipLookupServices);
        }

        (new PermissionClassMetadata(\$metadata))->build();

        \$this->buildMappings(\$metadata);
    }

    private function buildMappings(BundleMetadata \$metadata): void
    {
        \$mappingParser = new EntityMetadata(\$metadata);
        \$mappingParser->build();

        \$bundleName = \$metadata->getBundleName();

        if (\$ormMappings = \$mappingParser->getOrmConfig()) {
            \$this->ormConfig[\$bundleName] = \$ormMappings;
        }

        if (\$serializerConfig = \$mappingParser->getSerializerConfig()) {
            \$this->serializerConfig[\$bundleName] = \$serializerConfig;
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/DependencyInjection/Builder/BundleMetadataBuilder.php";
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
        return new Source("", "@bundles/CoreBundle/DependencyInjection/Builder/BundleMetadataBuilder.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/DependencyInjection/Builder/BundleMetadataBuilder.php");
    }
}
