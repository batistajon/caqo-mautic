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

/* @bundles/WebhookBundle/Command/ProcessWebhookQueuesCommand.php */
class __TwigTemplate_c7777ef1e1a5b736336921883dea829fbc2e6bf3482a432f47a69691413356a3 extends Template
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

namespace Mautic\\WebhookBundle\\Command;

use Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerAwareCommand;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * CLI Command to process queued webhook payloads.
 */
class ProcessWebhookQueuesCommand extends ContainerAwareCommand
{
    public const COMMAND_NAME = 'mautic:webhooks:process';

    protected function configure()
    {
        \$this->setName(self::COMMAND_NAME)
            ->setDescription('Process queued webhook payloads')
            ->addOption(
                '--webhook-id',
                '-i',
                InputOption::VALUE_OPTIONAL,
                'Process payload for a specific webhook.  If not specified, all webhooks will be processed.',
                null
            );
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        /** @var \\Mautic\\WebhookBundle\\Model\\WebhookModel \$model */
        \$model  = \$this->getContainer()->get('mautic.webhook.model.webhook');
        \$params = \$this->getContainer()->get('mautic.helper.core_parameters');

        // check to make sure we are in queue mode
        if (\$params->getParameter('queue_mode') != \$model::COMMAND_PROCESS) {
            \$output->writeLn('Webhook Bundle is in immediate process mode. To use the command function change to command mode.');

            return 0;
        }

        \$id = \$input->getOption('webhook-id');

        if (\$id) {
            \$webhook  = \$model->getEntity(\$id);
            \$webhooks = (null !== \$webhook && \$webhook->isPublished()) ? [\$id => \$webhook] : [];
        } else {
            // make sure we only get published webhook entities
            \$webhooks = \$model->getEntities(
                [
                    'filter' => [
                        'force' => [
                            [
                                'column' => 'e.isPublished',
                                'expr'   => 'eq',
                                'value'  => 1,
                            ],
                        ],
                    ],
                ]
            );
        }

        if (!count(\$webhooks)) {
            \$output->writeln('<error>No published webhooks found. Try again later.</error>');

            return 1;
        }

        \$output->writeLn('<info>Processing Webhooks</info>');

        try {
            \$model->processWebhooks(\$webhooks);
        } catch (\\Exception \$e) {
            \$output->writeLn('<error>'.\$e->getMessage().'</error>');
            \$output->writeLn('<error>'.\$e->getTraceAsString().'</error>');

            return 1;
        }

        \$output->writeLn('<info>Webhook Processing Complete</info>');

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
        return "@bundles/WebhookBundle/Command/ProcessWebhookQueuesCommand.php";
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
        return new Source("", "@bundles/WebhookBundle/Command/ProcessWebhookQueuesCommand.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Command/ProcessWebhookQueuesCommand.php");
    }
}
