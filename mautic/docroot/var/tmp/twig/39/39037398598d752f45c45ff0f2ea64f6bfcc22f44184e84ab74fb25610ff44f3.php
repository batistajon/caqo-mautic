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

/* @bundles/CoreBundle/MauticCoreBundle.php */
class __TwigTemplate_03c2198e7b2efb65562e117a53548154feae525b34cccc4470c280b7571365f1 extends Template
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

namespace Mautic\\CoreBundle;

use Mautic\\CoreBundle\\DependencyInjection\\Compiler;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

class MauticCoreBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder \$container)
    {
        \$container->addCompilerPass(new Compiler\\ConfiguratorPass());
        \$container->addCompilerPass(new Compiler\\DbalPass());
        \$container->addCompilerPass(new Compiler\\TemplatingPass());
        \$container->addCompilerPass(new Compiler\\TranslationsPass());
        \$container->addCompilerPass(new Compiler\\ModelPass());
        \$container->addCompilerPass(new Compiler\\UpdateStepPass());
        \$container->addCompilerPass(new Compiler\\PermissionsPass());
        \$container->addCompilerPass(new Compiler\\PreUpdateCheckPass());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/MauticCoreBundle.php";
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
        return new Source("", "@bundles/CoreBundle/MauticCoreBundle.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/MauticCoreBundle.php");
    }
}
