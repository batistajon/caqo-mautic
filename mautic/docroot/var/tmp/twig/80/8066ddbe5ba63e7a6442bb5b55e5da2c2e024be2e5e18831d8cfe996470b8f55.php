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

/* @bundles/ChannelBundle/Command/ProcessMarketingMessagesQueueCommand.php */
class __TwigTemplate_27face1d92f3aa2a3ec563d74778e89c041c2a237f7a0c426d317de6802d4580 extends Template
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

use Mautic\\CoreBundle\\Command\\ModeratedCommand;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Class ProcessMarketingMessagesQueueCommand.
 */
class ProcessMarketingMessagesQueueCommand extends ModeratedCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setName('mautic:messages:send')
            ->setAliases(
                [
                    'mautic:campaigns:messagequeue',
                    'mautic:campaigns:messages',
                ]
            )
            ->setDescription('Process sending of messages queue.')
            ->addOption(
                '--channel',
                '-c',
                InputOption::VALUE_OPTIONAL,
                'Channel to use for sending messages i.e. email, sms.',
                null
            )
            ->addOption('--channel-id', '-i', InputOption::VALUE_REQUIRED, 'The ID of the message i.e. email ID, sms ID.')
            ->addOption('--message-id', '-m', InputOption::VALUE_REQUIRED, 'ID of a specific queued message');

        parent::configure();
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$processed  = 0;
        \$container  = \$this->getContainer();
        \$translator = \$container->get('translator');
        \$channel    = \$input->getOption('channel');
        \$channelId  = \$input->getOption('channel-id');
        \$messageId  = \$input->getOption('message-id');
        \$key        = \$channel.\$channelId.\$messageId;

        if (!\$this->checkRunStatus(\$input, \$output, \$key)) {
            return 0;
        }

        /** @var \\Mautic\\ChannelBundle\\Model\\MessageQueueModel \$model */
        \$model = \$container->get('mautic.channel.model.queue');

        \$output->writeln('<info>'.\$translator->trans('mautic.campaign.command.process.messages').'</info>');

        if (\$messageId) {
            if (\$message = \$model->getEntity(\$messageId)) {
                \$processed = intval(\$model->processMessageQueue(\$message));
            }
        } else {
            \$processed = intval(\$model->sendMessages(\$channel, \$channelId));
        }

        \$output->writeln('<comment>'.\$translator->trans('mautic.campaign.command.messages.sent', ['%events%' => \$processed]).'</comment>'.\"\\n\");

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
        return "@bundles/ChannelBundle/Command/ProcessMarketingMessagesQueueCommand.php";
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
        return new Source("", "@bundles/ChannelBundle/Command/ProcessMarketingMessagesQueueCommand.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Command/ProcessMarketingMessagesQueueCommand.php");
    }
}
