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

/* @bundles/CoreBundle/DependencyInjection/Builder/Metadata/EntityMetadata.php */
class __TwigTemplate_2891a0f080fd8db38b60c3d3c6de3e9ea009690a953705671d04f86e4214bb0e extends Template
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

namespace Mautic\\CoreBundle\\DependencyInjection\\Builder\\Metadata;

use Mautic\\CoreBundle\\DependencyInjection\\Builder\\BundleMetadata;
use Mautic\\CoreBundle\\Entity\\DeprecatedInterface;
use Symfony\\Component\\Finder\\Finder;

class EntityMetadata
{
    /**
     * @var BundleMetadata
     */
    private \$metadata;

    /**
     * @var array
     */
    private \$ormConfig = [];

    /**
     * @var array
     */
    private \$serializerConfig = [];

    public function __construct(BundleMetadata \$metadata)
    {
        \$this->metadata = \$metadata;
    }

    public function build(): void
    {
        // Check for staticphp mapping
        \$entityDirectory = \$this->metadata->getDirectory().'/Entity';
        if (!file_exists(\$entityDirectory)) {
            return;
        }

        \$finder = Finder::create()
            ->name('*.php')
            ->notName('*Repository.php')
            ->in(\$entityDirectory);

        \$bundleNamespace = \$this->metadata->getNamespace();
        \$bundleName      = \$this->metadata->getBundleName();

        /** @var \\SplFileInfo \$file */
        foreach (\$finder as \$file) {
            // Check to see if entities are organized by subfolder
            \$subFolder = \$file->getRelativePath() ? \$file->getRelativePath().'\\\\' : '';
            \$fileName  = basename(\$file->getFilename(), '.php');

            // Just check first file for the loadMetadata function
            \$className       = sprintf('\\\\%s\\\\Entity\\\\%s%s', \$bundleNamespace, \$subFolder, \$fileName);
            \$reflectionClass = new \\ReflectionClass(\$className);

            if (\$reflectionClass->implementsInterface(DeprecatedInterface::class)) {
                // Ignore this interface as it is extending another for BC purposes
                continue;
            }

            // The bundle leverages the static loadApiMetadata method
            if (empty(\$this->serializerConfig) && \$reflectionClass->hasMethod('loadApiMetadata')) {
                \$this->serializerConfig = [
                    'namespace_prefix' => \$bundleNamespace.'\\\\Entity',
                    'path'             => \"@\$bundleName/Entity\",
                ];
            }

            // The bundle leverages the static loadMetadata method
            if (empty(\$this->ormConfig) && \$reflectionClass->hasMethod('loadMetadata')) {
                \$this->ormConfig = [
                    'dir'       => 'Entity',
                    'type'      => 'staticphp',
                    'prefix'    => \$bundleNamespace.'\\\\Entity',
                    'mapping'   => true,
                    'is_bundle' => true,
                ];
            }
        }
    }

    public function getOrmConfig(): array
    {
        return \$this->ormConfig;
    }

    public function getSerializerConfig(): array
    {
        return \$this->serializerConfig;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/DependencyInjection/Builder/Metadata/EntityMetadata.php";
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
        return new Source("", "@bundles/CoreBundle/DependencyInjection/Builder/Metadata/EntityMetadata.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/DependencyInjection/Builder/Metadata/EntityMetadata.php");
    }
}
