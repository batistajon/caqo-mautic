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

/* @bundles/LeadBundle/Command/ImportCommand.php */
class __TwigTemplate_09912436be15264adf09665f938ca8d1a102c249189bf57e9c4ca4da959b287d extends Template
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

namespace Mautic\\LeadBundle\\Command;

use Mautic\\LeadBundle\\Exception\\ImportDelayedException;
use Mautic\\LeadBundle\\Exception\\ImportFailedException;
use Mautic\\LeadBundle\\Helper\\Progress;
use Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerAwareCommand;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * CLI Command to import data.
 */
class ImportCommand extends ContainerAwareCommand
{
    public const COMMAND_NAME = 'mautic:import';

    protected function configure()
    {
        \$this->setName(self::COMMAND_NAME)
            ->setDescription('Imports data to Mautic')
            ->addOption('--id', '-i', InputOption::VALUE_OPTIONAL, 'Specific ID to import. Defaults to next in the queue.', false)
            ->addOption('--limit', '-l', InputOption::VALUE_OPTIONAL, 'Maximum number of records to import for this script execution.', 0)
            ->setHelp(
                <<<'EOT'
The <info>%command.name%</info> command starts to import CSV files when some are created.

<info>php %command.full_name%</info>
EOT
            );
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$start = microtime(true);

        /** @var \\Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator \$translator */
        \$translator = \$this->getContainer()->get('translator');

        /** @var \\Mautic\\LeadBundle\\Model\\ImportModel \$model */
        \$model = \$this->getContainer()->get('mautic.lead.model.import');

        \$progress = new Progress(\$output);
        \$id       = (int) \$input->getOption('id');
        \$limit    = (int) \$input->getOption('limit');

        if (\$id) {
            \$import = \$model->getEntity(\$id);

            // This specific import was not found
            if (!\$import) {
                \$output->writeln('<error>'.\$translator->trans('mautic.core.error.notfound', [], 'flashes').'</error>');

                return 1;
            }
        } else {
            \$import = \$model->getImportToProcess();

            // No import waiting in the queue. Finish silently.
            if (null === \$import) {
                return 0;
            }
        }

        \$output->writeln('<info>'.\$translator->trans(
            'mautic.lead.import.is.starting',
            [
                '%id%'    => \$import->getId(),
                '%lines%' => \$import->getLineCount(),
            ]
        ).'</info>');

        try {
            \$model->beginImport(\$import, \$progress, \$limit);
        } catch (ImportFailedException \$e) {
            \$output->writeln('<error>'.\$translator->trans(
                'mautic.lead.import.failed',
                [
                    '%reason%' => \$import->getStatusInfo(),
                ]
            ).'</error>');

            return 1;
        } catch (ImportDelayedException \$e) {
            \$output->writeln('<info>'.\$translator->trans(
                'mautic.lead.import.delayed',
                [
                    '%reason%' => \$import->getStatusInfo(),
                ]
            ).'</info>');

            return 0;
        }

        // Success
        \$output->writeln('<info>'.\$translator->trans(
            'mautic.lead.import.result',
            [
                '%lines%'   => \$import->getProcessedRows(),
                '%created%' => \$import->getInsertedCount(),
                '%updated%' => \$import->getUpdatedCount(),
                '%ignored%' => \$import->getIgnoredCount(),
                '%time%'    => round(microtime(true) - \$start, 2),
            ]
        ).'</info>');

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
        return "@bundles/LeadBundle/Command/ImportCommand.php";
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
        return new Source("", "@bundles/LeadBundle/Command/ImportCommand.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Command/ImportCommand.php");
    }
}
