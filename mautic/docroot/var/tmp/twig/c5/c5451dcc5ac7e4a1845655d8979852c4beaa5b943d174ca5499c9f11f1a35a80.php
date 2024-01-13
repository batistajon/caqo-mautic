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

/* @bundles/CoreBundle/DependencyInjection/Compiler/TemplatingPass.php */
class __TwigTemplate_6d3cfef5dc261a48b55c98d2789185ba952b6484b1b0ea17b2c77f7a437ead7b extends Template
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

namespace Mautic\\CoreBundle\\DependencyInjection\\Compiler;

use Mautic\\CoreBundle\\Templating\\Engine\\PhpEngine;
use Mautic\\CoreBundle\\Templating\\Helper\\AssetsHelper;
use Mautic\\CoreBundle\\Templating\\Helper\\FormHelper;
use Mautic\\CoreBundle\\Templating\\Helper\\SlotsHelper;
use Mautic\\CoreBundle\\Templating\\Helper\\TranslatorHelper;
use Mautic\\CoreBundle\\Templating\\TemplateNameParser;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Class TemplatingPass.
 */
class TemplatingPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (\$container->hasDefinition('templating')) {
            return;
        }

        if (\$container->hasDefinition('templating.helper.assets')) {
            \$container->getDefinition('templating.helper.assets')
                ->setClass(AssetsHelper::class)
                ->addMethodCall('setPathsHelper', [new Reference('mautic.helper.paths')])
                ->addMethodCall('setAssetHelper', [new Reference('mautic.helper.assetgeneration')])
                ->addMethodCall('setBuilderIntegrationsHelper', [new Reference('mautic.integrations.helper.builder_integrations')])
                ->addMethodCall('setInstallService', [new Reference('mautic.install.service')])
                ->addMethodCall('setSiteUrl', ['%mautic.site_url%'])
                ->addMethodCall('setVersion', ['%mautic.secret_key%', MAUTIC_VERSION])
                ->setPublic(true);
        }

        if (\$container->hasDefinition('templating.engine.php')) {
            \$container->getDefinition('templating.engine.php')
                ->setClass(PhpEngine::class)
                ->addMethodCall(
                    'setDispatcher',
                    [new Reference('event_dispatcher')]
                )
                ->addMethodCall(
                    'setRequestStack',
                    [new Reference('request_stack')]
                )
                ->setPublic(true);
        }

        if (\$container->hasDefinition('debug.templating.engine.php')) {
            \$container->getDefinition('debug.templating.engine.php')
                ->setClass(PhpEngine::class)
                ->addMethodCall(
                    'setDispatcher',
                    [new Reference('event_dispatcher')]
                )
                ->addMethodCall(
                    'setRequestStack',
                    [new Reference('request_stack')]
                )
                ->setPublic(true);
        }

        if (\$container->hasDefinition('templating.helper.slots')) {
            \$container->getDefinition('templating.helper.slots')
                ->setClass(SlotsHelper::class)
                ->setPublic(true);
        }

        if (\$container->hasDefinition('templating.name_parser')) {
            \$container->getDefinition('templating.name_parser')
                ->setClass(TemplateNameParser::class)
                ->setPublic(true);
        }

        if (\$container->hasDefinition('templating.helper.form')) {
            \$container->getDefinition('templating.helper.form')
                ->setClass(FormHelper::class)
                ->setPublic(true);
        }

        if (\$container->hasDefinition('templating.helper.translator')) {
            \$container->getDefinition('templating.helper.translator')
                ->setClass(TranslatorHelper::class)
                ->setPublic(true);
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
        return "@bundles/CoreBundle/DependencyInjection/Compiler/TemplatingPass.php";
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
        return new Source("", "@bundles/CoreBundle/DependencyInjection/Compiler/TemplatingPass.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/DependencyInjection/Compiler/TemplatingPass.php");
    }
}
