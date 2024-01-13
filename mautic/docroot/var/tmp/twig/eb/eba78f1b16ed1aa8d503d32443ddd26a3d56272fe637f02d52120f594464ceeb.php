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

/* @bundles/QueueBundle/Command/ConsumeQueueCommand.php */
class __TwigTemplate_114b488814b587c32f93666ec33743958082b48cc08540a492af1d1140ea7533 extends Template
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

namespace Mautic\\QueueBundle\\Command;

use Mautic\\QueueBundle\\Queue\\QueueService;
use Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerAwareCommand;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * CLI Command to process orders that have been queued.
 * Class ProcessQueuesCommand.
 */
class ConsumeQueueCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('mautic:queue:process')
            ->setDescription('Process queues')
            ->addOption(
                '--queue-name',
                '-i',
                InputOption::VALUE_REQUIRED,
                'Process queues orders for a specific queue.',
                null
            )
            ->addOption(
                '--messages',
                '-m',
                InputOption::VALUE_OPTIONAL,
                'Number of messages from the queue to process. Default is infinite',
                null
            )
            ->addOption(
                '--timeout',
                '-t',
                InputOption::VALUE_REQUIRED,
                'Set a graceful execution time at this many seconds in the future.',
                null
            );

        parent::configure();
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$container    = \$this->getContainer();
        /** @var QueueService \$queueService */
        \$queueService = \$container->get('mautic.queue.service');

        if (!\$queueService->isQueueEnabled()) {
            \$output->writeLn('You have not configured mautic to use queue mode, nothing will be processed');

            return 0;
        }

        \$queueName = \$input->getOption('queue-name');
        if (empty(\$queueName)) {
            \$output->writeLn('You did not provide a valid queue name');

            return 0;
        }

        \$messages = \$input->getOption('messages');
        if (0 > \$messages) {
            \$output->writeLn('You did not provide a valid number of messages. It should be null or greater than 0');

            return 0;
        }

        \$timeout = \$input->getOption('timeout');
        if (0 > \$timeout) {
            \$output->writeLn('You did not provide a valid number of seconds. It should be null or greater than 0');

            return 0;
        }

        \$queueService->consumeFromQueue(\$queueName, \$messages, \$timeout);

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
        return "@bundles/QueueBundle/Command/ConsumeQueueCommand.php";
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
        return new Source("", "@bundles/QueueBundle/Command/ConsumeQueueCommand.php", "/var/www/html/mautic/docroot/app/bundles/QueueBundle/Command/ConsumeQueueCommand.php");
    }
}
