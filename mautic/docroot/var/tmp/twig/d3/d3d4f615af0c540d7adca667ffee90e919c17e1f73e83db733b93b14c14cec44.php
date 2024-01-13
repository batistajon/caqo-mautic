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

/* @bundles/CoreBundle/Command/CleanupMaintenanceCommand.php */
class __TwigTemplate_7a62b939e7e00cdd6bada240241568d630b514ed3a87a71681764420e59d7a22 extends Template
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

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\MaintenanceEvent;
use Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerAwareCommand;
use Symfony\\Component\\Console\\Helper\\Table;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Question\\ConfirmationQuestion;

/**
 * CLI Command to purge old data per settings.
 */
class CleanupMaintenanceCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('mautic:maintenance:cleanup')
            ->setDescription('Updates the Mautic application')
            ->setDefinition(
                [
                    new InputOption(
                        'days-old',
                        'd',
                        InputOption::VALUE_OPTIONAL,
                        'Purge records older than this number of days. Defaults to 365.',
                        365
                    ),
                    new InputOption('dry-run', 'r', InputOption::VALUE_NONE, 'Do a dry run without actually deleting anything.'),
                    new InputOption('gdpr', 'g', InputOption::VALUE_NONE, 'Delete data to fullfil GDPR requirement.'),
                ]
            )
            ->setHelp(
                <<<'EOT'
                The <info>%command.name%</info> command dispatches the CoreEvents::MAINTENANCE_CLEANUP_DATA event in order to purge old data (data must be supported by event listeners as not all data is applicable to be purged).

<info>php %command.full_name%</info>

Specify the number of days old data should be before purging.

<info>php %command.full_name% --days-old=365</info>

You can also optionally specify a dry run without deleting any records:

<info>php %command.full_name% --days-old=365 --dry-run</info>
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
        \$translator->setLocale(\$this->getContainer()->getParameter('mautic.locale', 'en_US'));

        \$daysOld       = \$input->getOption('days-old');
        \$dryRun        = \$input->getOption('dry-run');
        \$noInteraction = \$input->getOption('no-interaction');
        \$gdpr          = \$input->getOption('gdpr');
        if (empty(\$daysOld) && empty(\$gdpr)) {
            // Safety catch; bail
            return 1;
        }

        if (!empty(\$gdpr)) {
            // to fullfil GDPR, you must delete inactive user data older than 3years
            \$daysOld = 365 * 3;
        }

        if (empty(\$dryRun) && empty(\$noInteraction)) {
            /** @var \\Symfony\\Component\\Console\\Helper\\SymfonyQuestionHelper \$helper */
            \$helper   = \$this->getHelperSet()->get('question');
            \$question = new ConfirmationQuestion(
                '<info>'.\$translator->trans('mautic.maintenance.confirm_data_purge', ['%days%' => \$daysOld]).'</info> ', false
            );

            if (!\$helper->ask(\$input, \$output, \$question)) {
                return 0;
            }
        }

        \$dispatcher = \$this->getContainer()->get('event_dispatcher');

        \$event = \$dispatcher->dispatch(CoreEvents::MAINTENANCE_CLEANUP_DATA, new MaintenanceEvent(\$daysOld, !empty(\$dryRun), !empty(\$gdpr)));
        \$stats = \$event->getStats();

        \$rows = [];
        foreach (\$stats as \$key => \$count) {
            \$rows[] = [\$key, \$count];
        }

        \$table = new Table(\$output);
        \$table
            ->setHeaders([\$translator->trans('mautic.maintenance.header.key'), \$translator->trans('mautic.maintenance.header.records_affected')])
            ->setRows(\$rows);
        \$table->render();

        if ('dev' == MAUTIC_ENV) {
            \$output->writeln('<comment>Debug</comment>');
            \$debug = \$event->getDebug();

            foreach (\$debug as \$key => \$query) {
                \$output->writeln(\"<info>\$key</info>\");
                \$output->writeln(\$query);
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
        return "@bundles/CoreBundle/Command/CleanupMaintenanceCommand.php";
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
        return new Source("", "@bundles/CoreBundle/Command/CleanupMaintenanceCommand.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Command/CleanupMaintenanceCommand.php");
    }
}
