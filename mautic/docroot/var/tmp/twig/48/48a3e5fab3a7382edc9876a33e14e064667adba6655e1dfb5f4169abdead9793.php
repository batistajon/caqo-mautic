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

/* @bundles/ChannelBundle/Command/SendChannelBroadcastCommand.php */
class __TwigTemplate_c943fb3b6cfa73ad0b676a5fc0bab6c1f372959ce7d740edbb8449dbbb74d671 extends Template
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

namespace Mautic\\ChannelBundle\\Command;

use Mautic\\ChannelBundle\\ChannelEvents;
use Mautic\\ChannelBundle\\Event\\ChannelBroadcastEvent;
use Mautic\\CoreBundle\\Command\\ModeratedCommand;
use Symfony\\Component\\Console\\Helper\\Table;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * CLI Command to send a scheduled broadcast.
 */
class SendChannelBroadcastCommand extends ModeratedCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('mautic:broadcasts:send')
            ->setDescription('Process contacts pending to receive a channel broadcast.')
            ->setHelp(
                <<<'EOT'
                The <info>%command.name%</info> command is send a channel broadcast to pending contacts.

<info>php %command.full_name% --channel=email --id=3</info>
EOT
            )
            ->setDefinition(
                [
                    new InputOption(
                        'channel', 'c', InputOption::VALUE_OPTIONAL,
                        'A specific channel to process broadcasts for pending contacts.'
                    ),
                    new InputOption(
                        'id', 'i', InputOption::VALUE_OPTIONAL,
                        'The ID for a specifc channel to process broadcasts for pending contacts.'
                    ),
                    new InputOption(
                        'min-contact-id', null, InputOption::VALUE_OPTIONAL,
                        'Min contact ID to filter recipients.'
                    ),
                    new InputOption(
                        'max-contact-id', null, InputOption::VALUE_OPTIONAL,
                        'Max contact ID to filter recipients.'
                    ),
                    new InputOption(
                        'limit', 'l', InputOption::VALUE_OPTIONAL,
                        'Limit how many contacts to load from database to process.'
                    ),
                    new InputOption(
                        'batch', 'b', InputOption::VALUE_OPTIONAL,
                        'Limit how many messages to send at once.'
                    ),
                ]
            );

        parent::configure();
    }

    /**
     * @return int
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$channel      = \$input->getOption('channel');
        \$channelId    = \$input->getOption('id');
        \$limit        = \$input->getOption('limit');
        \$batch        = \$input->getOption('batch');
        \$minContactId = \$input->getOption('min-contact-id');
        \$maxContactId = \$input->getOption('max-contact-id');
        \$key          = \$channel.\$channelId;

        if (!\$this->checkRunStatus(\$input, \$output, (empty(\$key)) ? 'all' : \$key)) {
            return 0;
        }

        \$translator = \$this->getContainer()->get('translator');
        \$translator->setLocale(\$this->getContainer()->get('mautic.helper.core_parameters')->get('locale'));

        \$dispatcher = \$this->getContainer()->get('event_dispatcher');

        \$event = new ChannelBroadcastEvent(\$channel, \$channelId, \$output);
        \$event->setLimit(\$limit);
        \$event->setBatch(\$batch);
        \$event->setMinContactIdFilter(\$minContactId);
        \$event->setMaxContactIdFilter(\$maxContactId);

        \$dispatcher->dispatch(ChannelEvents::CHANNEL_BROADCAST, \$event);

        \$results = \$event->getResults();

        \$rows = [];
        foreach (\$results as \$channel => \$counts) {
            \$rows[] = [\$channel, \$counts['success'], \$counts['failed']];
        }

        // Put a blank line after anything the event spits out
        \$output->writeln('');
        \$output->writeln('');

        \$table = new Table(\$output);
        \$table
            ->setHeaders([\$translator->trans('mautic.core.channel'), \$translator->trans('mautic.core.channel.broadcast_success_count'), \$translator->trans('mautic.core.channel.broadcast_failed_count')])
            ->setRows(\$rows);
        \$table->render();

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
        return "@bundles/ChannelBundle/Command/SendChannelBroadcastCommand.php";
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
        return new Source("", "@bundles/ChannelBundle/Command/SendChannelBroadcastCommand.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Command/SendChannelBroadcastCommand.php");
    }
}
