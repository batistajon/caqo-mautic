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

/* @bundles/QueueBundle/Queue/QueueService.php */
class __TwigTemplate_cef409bdeddfd4bf3b321915c5bdf623771892946dde39bef1740cebd4dc41f2 extends Template
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

namespace Mautic\\QueueBundle\\Queue;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\QueueBundle\\Event\\QueueConsumerEvent;
use Mautic\\QueueBundle\\Event\\QueueEvent;
use Mautic\\QueueBundle\\Helper\\QueueRequestHelper;
use Mautic\\QueueBundle\\QueueEvents;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * Class QueueService.
 */
class QueueService
{
    /**
     * @var CoreParametersHelper
     */
    private \$coreParametersHelper;

    /**
     * @var EventDispatcherInterface
     */
    private \$eventDispatcher;

    /**
     * @var LoggerInterface
     */
    private \$logger;

    /**
     * QueueService constructor.
     */
    public function __construct(CoreParametersHelper \$coreParametersHelper, EventDispatcherInterface \$eventDispatcher, LoggerInterface \$logger)
    {
        \$this->coreParametersHelper = \$coreParametersHelper;
        \$this->eventDispatcher      = \$eventDispatcher;
        \$this->logger               = \$logger;
    }

    /**
     * @param string \$queueName
     */
    public function publishToQueue(\$queueName, array \$payload = [])
    {
        if (isset(\$payload['request']) && \$payload['request'] instanceof Request) {
            \$payload['request'] = QueueRequestHelper::flattenRequest(\$payload['request']);
        }

        \$logPayload = \$payload;
        unset(\$logPayload['request']);
        \$this->logger->debug('QUEUE: Queuing job for '.\$queueName, \$logPayload);

        \$protocol                   = \$this->coreParametersHelper->get('queue_protocol');
        \$payload['mauticQueueName'] = \$queueName;
        \$event                      = new QueueEvent(\$protocol, \$queueName, \$payload);
        \$this->eventDispatcher->dispatch(QueueEvents::PUBLISH_MESSAGE, \$event);
    }

    /**
     * @param string   \$queueName
     * @param int|null \$messages
     * @param int|null \$timeout
     */
    public function consumeFromQueue(\$queueName, \$messages = null, \$timeout = null)
    {
        \$protocol = \$this->coreParametersHelper->get('queue_protocol');
        \$event    = new QueueEvent(\$protocol, \$queueName, [], \$messages, \$timeout);
        \$this->eventDispatcher->dispatch(QueueEvents::CONSUME_MESSAGE, \$event);
    }

    /**
     * @param \$payload
     *
     * @return QueueConsumerEvent
     */
    public function dispatchConsumerEventFromPayload(\$payload)
    {
        \$payload    = json_decode(\$payload, true);
        \$logPayload = \$payload;
        unset(\$logPayload['request']);

        if (isset(\$payload['request'])) {
            \$payload['request'] = QueueRequestHelper::buildRequest(\$payload['request']);
        }

        // This is needed since OldSound RabbitMqBundle consumers don't know what their queue is
        \$queueName = \$payload['mauticQueueName'];
        unset(\$payload['mauticQueueName']);
        \$eventName = \"mautic.queue_{\$queueName}\";

        \$this->logger->debug('QUEUE: Consuming job for '.\$queueName, \$logPayload);

        \$event = new QueueConsumerEvent(\$payload);
        \$this->eventDispatcher->dispatch(\$eventName, \$event);

        return \$event;
    }

    /**
     * @return bool
     */
    public function isQueueEnabled()
    {
        return '' != \$this->coreParametersHelper->get('queue_protocol');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/QueueBundle/Queue/QueueService.php";
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
        return new Source("", "@bundles/QueueBundle/Queue/QueueService.php", "/var/www/html/mautic/docroot/app/bundles/QueueBundle/Queue/QueueService.php");
    }
}
