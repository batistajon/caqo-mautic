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

/* @bundles/CampaignBundle/Command/ExecuteEventCommand.php */
class __TwigTemplate_98e32cd2fab71d523c3a1567bb47f565c95e85afd51ca6408cb22fc644d85585 extends Template
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

use Mautic\\CampaignBundle\\Executioner\\ScheduledExecutioner;
use Mautic\\CoreBundle\\Templating\\Helper\\FormatterHelper;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

/**
 * Class TriggerCampaignCommand.
 */
class ExecuteEventCommand extends Command
{
    use WriteCountTrait;

    /**
     * @var ScheduledExecutioner
     */
    private \$scheduledExecutioner;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var FormatterHelper
     */
    private \$formatterHelper;

    /**
     * ExecuteEventCommand constructor.
     */
    public function __construct(ScheduledExecutioner \$scheduledExecutioner, TranslatorInterface \$translator, FormatterHelper \$formatterHelper)
    {
        parent::__construct();

        \$this->scheduledExecutioner = \$scheduledExecutioner;
        \$this->translator           = \$translator;
        \$this->formatterHelper      = \$formatterHelper;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setName('mautic:campaigns:execute')
            ->setDescription('Execute specific scheduled events.')
            ->addOption(
                '--scheduled-log-ids',
                null,
                InputOption::VALUE_REQUIRED,
                'CSV of specific scheduled log IDs to execute.'
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

        \$ids     = \$this->formatterHelper->simpleCsvToArray(\$input->getOption('scheduled-log-ids'), 'int');
        \$counter = \$this->scheduledExecutioner->executeByIds(\$ids, \$output);

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
        return "@bundles/CampaignBundle/Command/ExecuteEventCommand.php";
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
        return new Source("", "@bundles/CampaignBundle/Command/ExecuteEventCommand.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Command/ExecuteEventCommand.php");
    }
}
