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

/* @bundles/IntegrationsBundle/Configuration/PluginConfiguration.php */
class __TwigTemplate_6d1717a5110b14d0d71ec20c68e342c2eafe4853c4c41cced316f5273fafaa3e extends Template
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

namespace Mautic\\IntegrationsBundle\\Configuration;

use Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder;
use Symfony\\Component\\Config\\Definition\\ConfigurationInterface;

class PluginConfiguration implements ConfigurationInterface
{
    // This is setup to validate plugin's composer.json
    public function getConfigTreeBuilder()
    {
        \$treeBuilder = new TreeBuilder();
        \$rootNode    = \$treeBuilder->root('');

        \$rootNode
            ->children()
                ->scalarNode('name')->cannotBeEmpty()->end()
                ->scalarNode('description')->cannotBeEmpty()->end()
                ->scalarNode('author')->cannotBeEmpty()->end()
                ->scalarNode('version')
                    ->validate()
                        ->ifTrue(function (\$s) {
                            return 1 !== preg_match('#[0-9]+\\.[0-9]+(\\.[0-9]+)?#', \$s);
                        })
                        ->thenInvalid('Invalid version definition')->end()
                    ->end()
                ->scalarNode('requires')->end()
                ->enumNode('type')->values(['mautic-plugin'])->end()
                ->scalarNode('license')->cannotBeEmpty()->end()
                ->scalarNode('icon')->cannotBeEmpty()->end()
                ->scalarNode('minimum_stability')->cannotBeEmpty()->end()
                ->arrayNode('authors')
                    ->requiresAtLeastOneElement()
                    ->prototype('array')
                        ->children()
                            ->scalarNode('name')->end()
                            ->scalarNode('email')->end()
                        ->end()
                    ->end()
                ->end()
                ->arrayNode('require')
                        ->requiresAtLeastOneElement()
                        ->useAttributeAsKey('name')
                        ->prototype('scalar')->end()
                ->end()
            ->end();

        return \$treeBuilder;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Configuration/PluginConfiguration.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Configuration/PluginConfiguration.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Configuration/PluginConfiguration.php");
    }
}
