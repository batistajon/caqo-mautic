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

/* @bundles/CampaignBundle/Command/SummarizeCommand.php */
class __TwigTemplate_a480842d63e330b8ba92362acd51c184fbe365df7911c6344c5a81530aed01a1 extends Template
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

namespace Mautic\\CampaignBundle\\Command;

use Doctrine\\DBAL\\DBALException;
use Mautic\\CampaignBundle\\Model\\SummaryModel;
use Mautic\\CoreBundle\\Command\\ModeratedCommand;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class SummarizeCommand extends ModeratedCommand
{
    use WriteCountTrait;

    public const NAME = 'mautic:campaigns:summarize';

    /**
     * @var SummaryModel
     */
    private \$summaryModel;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    public function __construct(
        TranslatorInterface \$translator,
        SummaryModel \$summaryModel
    ) {
        parent::__construct();

        \$this->translator   = \$translator;
        \$this->summaryModel = \$summaryModel;
    }

    protected function configure(): void
    {
        \$this->setName(self::NAME)
            ->addOption(
                '--batch-limit',
                '-l',
                InputOption::VALUE_OPTIONAL,
                'Number of hours to process per batch. 1 hour is default value.',
                '1'
            )
            ->addOption(
                '--max-hours',
                null,
                InputOption::VALUE_OPTIONAL,
                'Optionally specify how many hours back in time you wish to summarize.'
            )
            ->addOption(
                '--rebuild',
                null,
                InputOption::VALUE_NONE,
                'Rebuild existing data. To be used only if database exceptions have been known to cause inaccuracies.'
            )
            ->setDescription('Builds historical campaign summary statistics if they do not already exist.');

        parent::configure();
    }

    /**
     * @throws DBALException
     */
    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        if (!\$this->checkRunStatus(\$input, \$output)) {
            return 0;
        }

        \$batchLimit = (int) \$input->getOption('batch-limit');
        \$maxHours   = (int) \$input->getOption('max-hours');
        \$rebuild    = (bool) \$input->getOption('rebuild');

        \$output->writeln(
            \"<info>{\$this->translator->trans('mautic.campaign.summarizing', ['%batch%' => \$batchLimit])}</info>\"
        );

        \$this->summaryModel->summarize(\$output, \$batchLimit, \$maxHours, \$rebuild);

        \$this->completeRun();

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
        return "@bundles/CampaignBundle/Command/SummarizeCommand.php";
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
        return new Source("", "@bundles/CampaignBundle/Command/SummarizeCommand.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Command/SummarizeCommand.php");
    }
}
