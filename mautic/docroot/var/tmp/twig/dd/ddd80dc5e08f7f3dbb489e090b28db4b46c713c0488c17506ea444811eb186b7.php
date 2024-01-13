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

/* @bundles/EmailBundle/MauticEmailBundle.php */
class __TwigTemplate_243b0a83546c49284f41f6780e1d17335ce1b1d889cea5a3b5e7351172011e97 extends Template
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

namespace Mautic\\EmailBundle;

use Mautic\\EmailBundle\\DependencyInjection\\Compiler\\EmailTransportPass;
use Mautic\\EmailBundle\\DependencyInjection\\Compiler\\SpoolTransportPass;
use Mautic\\EmailBundle\\DependencyInjection\\Compiler\\StatHelperPass;
use Mautic\\EmailBundle\\DependencyInjection\\Compiler\\SwiftmailerDynamicMailerPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

/**
 * Class MauticEmailBundle.
 */
class MauticEmailBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder \$container)
    {
        parent::build(\$container);

        \$container->addCompilerPass(new SpoolTransportPass());
        \$container->addCompilerPass(new EmailTransportPass());
        \$container->addCompilerPass(new SwiftmailerDynamicMailerPass());
        \$container->addCompilerPass(new StatHelperPass());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/MauticEmailBundle.php";
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
        return new Source("", "@bundles/EmailBundle/MauticEmailBundle.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/MauticEmailBundle.php");
    }
}
