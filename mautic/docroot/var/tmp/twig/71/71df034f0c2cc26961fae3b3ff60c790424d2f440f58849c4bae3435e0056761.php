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

/* @bundles/QueueBundle/Helper/RabbitMqConsumer.php */
class __TwigTemplate_d02a8f54021136e10eb5f169c762b9f68b04a6ec34e81ff890415db79997f77f extends Template
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

namespace Mautic\\QueueBundle\\Helper;

use Mautic\\QueueBundle\\Queue\\QueueConsumerResults;
use Mautic\\QueueBundle\\Queue\\QueueService;
use OldSound\\RabbitMqBundle\\RabbitMq\\ConsumerInterface;
use PhpAmqpLib\\Message\\AMQPMessage;

class RabbitMqConsumer implements ConsumerInterface
{
    /**
     * @var QueueService
     */
    private \$queueService;

    /**
     * RabbitMqConsumer constructor.
     */
    public function __construct(QueueService \$queueService)
    {
        \$this->queueService = \$queueService;
    }

    /**
     * {@inheritdoc}
     */
    public function execute(AMQPMessage \$msg)
    {
        \$event = \$this->queueService->dispatchConsumerEventFromPayload(\$msg->body);

        if (QueueConsumerResults::TEMPORARY_REJECT === \$event->getResult()) {
            return static::MSG_REJECT_REQUEUE;
        } elseif (QueueConsumerResults::ACKNOWLEDGE === \$event->getResult()) {
            return static::MSG_ACK;
        } elseif (QueueConsumerResults::REJECT === \$event->getResult()) {
            return static::MSG_REJECT;
        } else {
            return static::MSG_SINGLE_NACK_REQUEUE;
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
        return "@bundles/QueueBundle/Helper/RabbitMqConsumer.php";
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
        return new Source("", "@bundles/QueueBundle/Helper/RabbitMqConsumer.php", "/var/www/html/mautic/docroot/app/bundles/QueueBundle/Helper/RabbitMqConsumer.php");
    }
}
