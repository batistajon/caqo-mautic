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

/* @bundles/CoreBundle/Command/UpdateIpDataStoreCommand.php */
class __TwigTemplate_cc44ade2b243db78e903cf2da64db6c4df2e6c8b96e29477cb7fb6720a6b022b extends Template
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

use Mautic\\CoreBundle\\IpLookup\\AbstractLocalDataLookup;
use Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerAwareCommand;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * CLI Command to fetch updated Maxmind database.
 */
class UpdateIpDataStoreCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('mautic:iplookup:download')
            ->setDescription('Fetch remote datastores for IP lookup services that leverage local lookups')
            ->setHelp(
                <<<'EOT'
                The <info>%command.name%</info> command is used to update local IP lookup data if applicable.

<info>php %command.full_name%</info>
EOT
            );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$ipService  = \$this->getContainer()->get('mautic.ip_lookup');
        \$factory    = \$this->getContainer()->get('mautic.factory');
        \$translator = \$factory->getTranslator();

        if (\$ipService instanceof AbstractLocalDataLookup) {
            if (\$ipService->downloadRemoteDataStore()) {
                \$output->writeln('<info>'.\$translator->trans('mautic.core.success').'</info>');
            } else {
                \$remoteUrl = \$ipService->getRemoteDateStoreDownloadUrl();
                \$localPath = \$ipService->getLocalDataStoreFilepath();

                if (\$remoteUrl && \$localPath) {
                    \$output->writeln('<error>'.\$translator->trans(
                        'mautic.core.ip_lookup.remote_fetch_error',
                        [
                            '%remoteUrl%' => \$remoteUrl,
                            '%localPath%' => \$localPath,
                        ]
                    ).'</error>');
                } else {
                    \$output->writeln('<error>'.\$translator->trans(
                        'mautic.core.ip_lookup.remote_fetch_error_generic'
                    ).'</error>');
                }
            }
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
        return "@bundles/CoreBundle/Command/UpdateIpDataStoreCommand.php";
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
        return new Source("", "@bundles/CoreBundle/Command/UpdateIpDataStoreCommand.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Command/UpdateIpDataStoreCommand.php");
    }
}
