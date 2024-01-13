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

/* @bundles/CoreBundle/Command/UnusedIpDeleteCommand.php */
class __TwigTemplate_36271f410f175f1fa4f82f6de6fb229c5d68953804fe2b448e1fbb1866bbb05d extends Template
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

namespace Mautic\\CoreBundle\\Command;

use Doctrine\\DBAL\\DBALException;
use Mautic\\LeadBundle\\Model\\IpAddressModel;
use Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerAwareCommand;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * CLI Command to delete unused IP addresses.
 */
class UnusedIpDeleteCommand extends ContainerAwareCommand
{
    private const DEFAULT_LIMIT = 10000;

    protected function configure(): void
    {
        \$this->setName('mautic:unusedip:delete')
            ->setDescription('Deletes IP addresses that are not used in any other database table')
            ->addOption(
                '--limit',
                '-l',
                InputOption::VALUE_OPTIONAL,
                'LIMIT for deleted rows',
                self::DEFAULT_LIMIT
            )
            ->setHelp(
                <<<'EOT'
                The <info>%command.name%</info> command is used to delete IP addresses that are not used in any other database table.

<info>php %command.full_name%</info>
EOT
            );
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$container = \$this->getContainer();
        /** @var IpAddressModel \$ipAddressModel */
        \$ipAddressModel = \$container->get('mautic.lead.model.ipaddress');

        try {
            \$limit       = \$input->getOption('limit');
            \$deletedRows = \$ipAddressModel->deleteUnusedIpAddresses((int) \$limit);
            \$output->writeln(sprintf('<info>%s unused IP addresses have been deleted</info>', \$deletedRows));
        } catch (DBALException \$e) {
            \$output->writeln(sprintf('<error>Deletion of unused IP addresses failed because of database error: %s</error>', \$e->getMessage()));

            return 1;
        }

        return 0;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Command/UnusedIpDeleteCommand.php";
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
        return new Source("", "@bundles/CoreBundle/Command/UnusedIpDeleteCommand.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Command/UnusedIpDeleteCommand.php");
    }
}
