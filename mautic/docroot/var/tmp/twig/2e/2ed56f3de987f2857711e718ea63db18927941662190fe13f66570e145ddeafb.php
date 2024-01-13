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

/* @bundles/ReportBundle/Scheduler/Command/ExportSchedulerCommand.php */
class __TwigTemplate_8fbc618c58b7e4982b0b702a183db6e9addacb676cf149c9b15a30e5662c5022 extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Command;

use Mautic\\ReportBundle\\Exception\\FileIOException;
use Mautic\\ReportBundle\\Model\\ReportExporter;
use Mautic\\ReportBundle\\Scheduler\\Option\\ExportOption;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class ExportSchedulerCommand extends Command
{
    /**
     * @var ReportExporter
     */
    private \$reportExporter;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    public function __construct(ReportExporter \$reportExporter, TranslatorInterface \$translator)
    {
        parent::__construct();
        \$this->reportExporter = \$reportExporter;
        \$this->translator     = \$translator;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setName('mautic:reports:scheduler')
            ->setDescription('Processes scheduler for report\\'s export')
            ->addOption('--report', 'report', InputOption::VALUE_OPTIONAL, 'ID of report. Process all reports if not set.');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$report = \$input->getOption('report');

        try {
            \$exportOption = new ExportOption(\$report);
        } catch (\\InvalidArgumentException \$e) {
            \$output->writeln('<error>'.\$this->translator->trans('mautic.report.schedule.command.invalid_parameter').'</error>');

            return;
        }

        try {
            \$this->reportExporter->processExport(\$exportOption);

            \$output->writeln('<info>'.\$this->translator->trans('mautic.report.schedule.command.finished').'</info>');
        } catch (FileIOException \$e) {
            \$output->writeln('<error>'.\$e->getMessage().'</error>');

            return;
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
        return "@bundles/ReportBundle/Scheduler/Command/ExportSchedulerCommand.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Command/ExportSchedulerCommand.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Scheduler/Command/ExportSchedulerCommand.php");
    }
}
