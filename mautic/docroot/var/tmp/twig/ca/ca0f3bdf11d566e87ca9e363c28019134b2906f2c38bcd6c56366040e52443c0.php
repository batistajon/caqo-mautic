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

/* @bundles/PluginBundle/Command/PushLeadActivityCommand.php */
class __TwigTemplate_7cf715e991f36cd54883371c8065cc388ac84053647a8fb3c576b213359e266d extends Template
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

namespace Mautic\\PluginBundle\\Command;

use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Mautic\\PluginBundle\\Integration\\AbstractIntegration;
use Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerAwareCommand;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Class PushLeadActivityCommand.
 */
class PushLeadActivityCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setName('mautic:integration:pushleadactivity')
            ->setAliases(
                [
                    'mautic:integration:pushactivity',
                ]
            )
            ->setDescription('Push lead activity to integration.')
            ->addOption(
                '--integration',
                '-i',
                InputOption::VALUE_REQUIRED,
                'Integration name. Integration must be enabled and authorised.',
                null
            )
            ->addOption('--start-date', '-d', InputOption::VALUE_REQUIRED, 'Set start date for updated values.')
            ->addOption(
                '--end-date',
                '-t',
                InputOption::VALUE_REQUIRED,
                'Set end date for updated values.'
            )
            ->addOption(
                '--time-interval',
                '-a',
                InputOption::VALUE_OPTIONAL,
                'Send time interval to check updates on Salesforce, it should be a correct php formatted time interval in the past eg:(-10 minutes)'
            )
            ->addOption('--force', '-f', InputOption::VALUE_NONE, 'Force execution even if another process is assumed running.');

        parent::configure();
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$container = \$this->getContainer();

        \$translator  = \$container->get('translator');
        \$integration = \$input->getOption('integration');
        \$startDate   = \$input->getOption('start-date');
        \$endDate     = \$input->getOption('end-date');
        \$interval    = \$input->getOption('time-interval');

        if (!\$interval) {
            \$interval = '15 minutes';
        }
        if (!\$startDate) {
            \$startDate = date('c', strtotime('-'.\$interval));
        }

        if (!\$endDate) {
            \$endDate = date('c');
        }

        if (\$integration && \$startDate && \$endDate) {
            /** @var IntegrationHelper \$integrationHelper */
            \$integrationHelper = \$container->get('mautic.helper.integration');

            /** @var AbstractIntegration \$integrationObject */
            \$integrationObject = \$integrationHelper->getIntegrationObject(\$integration);

            if (null !== \$integrationObject && method_exists(\$integrationObject, 'pushLeadActivity')) {
                \$output->writeln('<info>'.\$translator->trans('mautic.plugin.command.push.leads.activity', ['%integration%' => \$integration]).'</info>');

                \$params['start'] = \$startDate;
                \$params['end']   = \$endDate;

                \$processed = intval(\$integrationObject->pushLeadActivity(\$params));

                \$output->writeln('<comment>'.\$translator->trans('mautic.plugin.command.push.leads.events_executed', ['%events%' => \$processed]).'</comment>'.\"\\n\");
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
        return "@bundles/PluginBundle/Command/PushLeadActivityCommand.php";
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
        return new Source("", "@bundles/PluginBundle/Command/PushLeadActivityCommand.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Command/PushLeadActivityCommand.php");
    }
}
