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

/* @bundles/QueueBundle/EventListener/BeanstalkdSubscriber.php */
class __TwigTemplate_81ccd0998543e749ee2f7256efc939d1422e2207d3acf0eede3148899c6056d5 extends Template
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

namespace Mautic\\QueueBundle\\EventListener;

use Leezy\\PheanstalkBundle\\Proxy\\PheanstalkProxy;
use Mautic\\QueueBundle\\Event as Events;
use Mautic\\QueueBundle\\Queue\\QueueConsumerResults;
use Mautic\\QueueBundle\\Queue\\QueueProtocol;
use Mautic\\QueueBundle\\Queue\\QueueService;
use Pheanstalk\\Contract\\PheanstalkInterface;
use Pheanstalk\\Exception\\ServerException;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

class BeanstalkdSubscriber extends AbstractQueueSubscriber
{
    public const DELAY_DURATION = 60;

    /**
     * @var string
     */
    protected \$protocol = QueueProtocol::BEANSTALKD;

    /**
     * @var string
     */
    protected \$protocolUiTranslation = 'mautic.queue.config.protocol.beanstalkd';

    /**
     * @var ContainerInterface
     */
    private \$container;

    /**
     * @var QueueService
     */
    private \$queueService;

    public function __construct(ContainerInterface \$container, QueueService \$queueService)
    {
        // The container is needed due to non-required binding of pheanstalk
        \$this->container    = \$container;
        \$this->queueService = \$queueService;
    }

    public function publishMessage(Events\\QueueEvent \$event): void
    {
        /* @var PheanstalkProxy \$pheanstalk */
        \$this->container->get('leezy.pheanstalk')
            ->useTube(\$event->getQueueName())
            ->put(\$event->getPayload());
    }

    /**
     * @throws ServerException
     */
    public function consumeMessage(Events\\QueueEvent \$event): void
    {
        \$messagesConsumed = 0;

        while (null === \$event->getMessages() || \$event->getMessages() > \$messagesConsumed) {
            /** @var PheanstalkProxy \$pheanstalk */
            \$pheanstalk = \$this->container->get('leezy.pheanstalk');
            \$job        = \$pheanstalk
                ->watch(\$event->getQueueName())
                ->ignore('default')
                ->reserve();

            if (null === \$job) {
                continue;
            }

            \$consumerEvent = \$this->queueService->dispatchConsumerEventFromPayload(\$job->getData());

            if (QueueConsumerResults::TEMPORARY_REJECT === \$consumerEvent->getResult()) {
                \$pheanstalk->release(\$job, PheanstalkInterface::DEFAULT_PRIORITY, static::DELAY_DURATION);
            } elseif (QueueConsumerResults::REJECT === \$consumerEvent->getResult()) {
                \$pheanstalk->bury(\$job);
            } else {
                try {
                    \$pheanstalk->delete(\$job);
                } catch (ServerException \$e) {
                    if (false === strpos(\$e->getMessage(), 'Cannot delete job')
                        && false === strpos(\$e->getMessage(), 'NOT_FOUND')
                    ) {
                        throw \$e;
                    }
                }
            }

            ++\$messagesConsumed;
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
        return "@bundles/QueueBundle/EventListener/BeanstalkdSubscriber.php";
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
        return new Source("", "@bundles/QueueBundle/EventListener/BeanstalkdSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/QueueBundle/EventListener/BeanstalkdSubscriber.php");
    }
}
