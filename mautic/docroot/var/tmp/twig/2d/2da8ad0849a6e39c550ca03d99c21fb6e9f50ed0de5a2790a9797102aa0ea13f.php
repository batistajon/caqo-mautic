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

/* @bundles/CoreBundle/Command/FindUpdatesCommand.php */
class __TwigTemplate_482d18e2d68b0a3d90e097d87f68ca5f52439eb77fcbe954b1cbc6b7ad5f2f6a extends Template
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

use Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerAwareCommand;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * CLI Command to fetch application updates.
 */
class FindUpdatesCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('mautic:update:find')
            ->setDescription('Fetches updates for Mautic')
            ->setHelp(<<<'EOT'
The <info>%command.name%</info> command checks for updates for the Mautic application.

<info>php %command.full_name%</info>
EOT
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        /** @var \\Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator \$translator */
        \$translator = \$this->getContainer()->get('translator');
        \$translator->setLocale(\$this->getContainer()->get('mautic.factory')->getParameter('locale'));

        \$updateHelper = \$this->getContainer()->get('mautic.helper.update');
        \$updateData   = \$updateHelper->fetchData(true);

        if (\$updateData['error']) {
            \$output->writeln('<error>'.\$translator->trans(\$updateData['message']).'</error>');
        } elseif ('mautic.core.updater.running.latest.version' == \$updateData['message']) {
            \$output->writeln('<info>'.\$translator->trans(\$updateData['message']).'</info>');
        } else {
            \$output->writeln(\$translator->trans(\$updateData['message'], ['%version%' => \$updateData['version'], '%announcement%' => \$updateData['announcement']]));
            \$output->writeln(\$translator->trans('mautic.core.updater.cli.update'));
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
        return "@bundles/CoreBundle/Command/FindUpdatesCommand.php";
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
        return new Source("", "@bundles/CoreBundle/Command/FindUpdatesCommand.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Command/FindUpdatesCommand.php");
    }
}
