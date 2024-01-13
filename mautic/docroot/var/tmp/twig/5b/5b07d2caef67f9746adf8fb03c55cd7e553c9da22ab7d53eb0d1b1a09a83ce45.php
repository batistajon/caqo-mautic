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

/* @bundles/InstallBundle/DependencyInjection/Compiler/InstallCommandPass.php */
class __TwigTemplate_93dec1ed1d8859a168fd122b1a2a787ff0e1dd24eaf21e7ddfa646d45f8b1797 extends Template
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

namespace Mautic\\InstallBundle\\DependencyInjection\\Compiler;

use Mautic\\InstallBundle\\Command\\InstallCommand;
use Symfony\\Component\\Console\\Input\\ArgvInput;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class InstallCommandPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container): void
    {
        \$args = \$_SERVER['argv'] ?? [];

        if (!in_array(InstallCommand::COMMAND, \$args, true)) {
            return;
        }

        \$definition = (new InstallCommand())->getDefinition();
        \$definition->addOption(
            new InputOption('--verbose', '-v', InputOption::VALUE_NONE, 'Increase verbosity of messages.')
        );
        \$definition->addOption(
            new InputOption(
                '--env',
                '-e',
                InputOption::VALUE_REQUIRED,
                'The Environment name.',
                \$container->getParameter('kernel.environment')
            )
        );
        \$definition->addOption(
            new InputOption('--no-debug', null, InputOption::VALUE_NONE, 'Switches off debug mode.')
        );

        \$input       = new ArgvInput(\$args, \$definition);
        \$tablePrefix = \$input->hasOption('db_table_prefix')
            ? \$input->getOption('db_table_prefix')
            : MAUTIC_TABLE_PREFIX;

        if (!\$tablePrefix) {
            return;
        }

        \$container->setParameter('mautic.db_table_prefix', \$tablePrefix);
        \$container->getDefinition('mautic.tblprefix_subscriber')->setArgument('\$tablePrefix', \$tablePrefix);
        \$container->getDefinition('mautic.schema.helper.column')->setArgument('\$prefix', \$tablePrefix);
        \$container->getDefinition('mautic.schema.helper.index')->setArgument('\$prefix', \$tablePrefix);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/DependencyInjection/Compiler/InstallCommandPass.php";
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
        return new Source("", "@bundles/InstallBundle/DependencyInjection/Compiler/InstallCommandPass.php", "/var/www/html/mautic/docroot/app/bundles/InstallBundle/DependencyInjection/Compiler/InstallCommandPass.php");
    }
}
