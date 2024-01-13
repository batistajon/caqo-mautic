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

/* @bundles/CampaignBundle/Command/ValidateEventCommand.php */
class __TwigTemplate_1b3628bf2afcec0d7a6e269ff52951623e5ee30a7317125bb3e49fcdc7123287 extends Template
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

namespace Mautic\\CampaignBundle\\Command;

use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;
use Mautic\\CampaignBundle\\Executioner\\InactiveExecutioner;
use Mautic\\CoreBundle\\Templating\\Helper\\FormatterHelper;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

/**
 * Class TriggerCampaignCommand.
 */
class ValidateEventCommand extends Command
{
    use WriteCountTrait;

    /**
     * @var InactiveExecutioner
     */
    private \$inactiveExecution;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var FormatterHelper
     */
    private \$formatterHelper;

    /**
     * ValidateEventCommand constructor.
     */
    public function __construct(InactiveExecutioner \$inactiveExecutioner, TranslatorInterface \$translator, FormatterHelper \$formatterHelper)
    {
        parent::__construct();

        \$this->inactiveExecution = \$inactiveExecutioner;
        \$this->translator        = \$translator;
        \$this->formatterHelper   = \$formatterHelper;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setName('mautic:campaigns:validate')
            ->setDescription('Validate if a contact has been inactive for a decision and execute events if so.')
            ->addOption(
                '--decision-id',
                null,
                InputOption::VALUE_REQUIRED,
                'ID of the decision to evaluate.'
            )
            ->addOption(
                '--contact-id',
                null,
                InputOption::VALUE_OPTIONAL,
                'Evaluate for specific contact'
            )
            ->addOption(
                '--contact-ids',
                null,
                InputOption::VALUE_OPTIONAL,
                'CSV of contact IDs to evaluate.'
            );

        parent::configure();
    }

    /**
     * @return int|null
     *
     * @throws \\Exception
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        defined('MAUTIC_CAMPAIGN_SYSTEM_TRIGGERED') or define('MAUTIC_CAMPAIGN_SYSTEM_TRIGGERED', 1);

        \$decisionId = \$input->getOption('decision-id');
        \$contactId  = \$input->getOption('contact-id');
        \$contactIds = \$this->formatterHelper->simpleCsvToArray(\$input->getOption('contact-ids'), 'int');

        if (!\$contactIds && !\$contactId) {
            \$output->writeln(
                \"\\n\".
                '<comment>'.\$this->translator->trans('mautic.campaign.trigger.events_executed', ['%count%' => 0])
                .'</comment>'
            );

            return 0;
        }

        \$limiter = new ContactLimiter(null, \$contactId, null, null, \$contactIds);
        \$counter = \$this->inactiveExecution->validate(\$decisionId, \$limiter, \$output);

        \$this->writeCounts(\$output, \$this->translator, \$counter);

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
        return "@bundles/CampaignBundle/Command/ValidateEventCommand.php";
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
        return new Source("", "@bundles/CampaignBundle/Command/ValidateEventCommand.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Command/ValidateEventCommand.php");
    }
}
