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

/* @bundles/QueueBundle/EventListener/RabbitMqSubscriber.php */
class __TwigTemplate_013ebf007cf9f040c25693e877f46eaf64694bdf21ff84bf28f9bbedf8709115 extends Template
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

use Mautic\\QueueBundle\\Event as Events;
use Mautic\\QueueBundle\\Queue\\QueueProtocol;
use PhpAmqpLib\\Message\\AMQPMessage;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

class RabbitMqSubscriber extends AbstractQueueSubscriber
{
    /**
     * @var string
     */
    protected \$protocol = QueueProtocol::RABBITMQ;

    /**
     * @var string
     */
    protected \$protocolUiTranslation = 'mautic.queue.config.protocol.rabbitmq';

    /**
     * @var ContainerInterface
     */
    private \$container;

    public function __construct(ContainerInterface \$container)
    {
        // The container is needed due to non-required binding of the producer & consumer
        \$this->container = \$container;
    }

    public function publishMessage(Events\\QueueEvent \$event)
    {
        \$producer = \$this->container->get('old_sound_rabbit_mq.mautic_producer');
        \$producer->setQueue(\$event->getQueueName());
        \$producer->publish(\$event->getPayload(), \$event->getQueueName(), [
            'delivery_mode' => AMQPMessage::DELIVERY_MODE_PERSISTENT,
        ]);
    }

    public function consumeMessage(Events\\QueueEvent \$event)
    {
        \$consumer = \$this->container->get('old_sound_rabbit_mq.mautic_consumer');
        \$consumer->setQueueOptions([
            'name'        => \$event->getQueueName(),
            'auto_delete' => false,
            'durable'     => true,
        ]);
        \$consumer->setRoutingKey(\$event->getQueueName());

        // Check event for positive execution time and set on Consumer
        if (0 < (\$timeout = \$event->getTimeout())) {
            \$consumer->setGracefulMaxExecutionDateTimeFromSecondsInTheFuture(\$timeout);
        }

        \$consumer->consume(\$event->getMessages());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/QueueBundle/EventListener/RabbitMqSubscriber.php";
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
        return new Source("", "@bundles/QueueBundle/EventListener/RabbitMqSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/QueueBundle/EventListener/RabbitMqSubscriber.php");
    }
}
