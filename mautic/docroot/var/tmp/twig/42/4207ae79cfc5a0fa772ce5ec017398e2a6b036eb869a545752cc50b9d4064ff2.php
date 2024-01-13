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

/* @bundles/EmailBundle/EventListener/MomentumSubscriber.php */
class __TwigTemplate_41b1b529836f4a660df61e906d065804daa5681da1a0c5d70108808f237a6bc8 extends Template
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

namespace Mautic\\EmailBundle\\EventListener;

use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Event\\TransportWebhookEvent;
use Mautic\\EmailBundle\\Helper\\RequestStorageHelper;
use Mautic\\EmailBundle\\Swiftmailer\\Momentum\\Callback\\MomentumCallbackInterface;
use Mautic\\EmailBundle\\Swiftmailer\\Transport\\MomentumTransport;
use Mautic\\QueueBundle\\Event\\QueueConsumerEvent;
use Mautic\\QueueBundle\\Queue\\QueueConsumerResults;
use Mautic\\QueueBundle\\Queue\\QueueName;
use Mautic\\QueueBundle\\Queue\\QueueService;
use Mautic\\QueueBundle\\QueueEvents;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class MomentumSubscriber implements EventSubscriberInterface
{
    /**
     * @var MomentumCallbackInterface
     */
    private \$momentumCallback;

    /**
     * @var QueueService
     */
    private \$queueService;

    /**
     * @var RequestStorageHelper
     */
    private \$requestStorageHelper;

    /**
     * @var LoggerInterface
     */
    private \$logger;

    public function __construct(
        MomentumCallbackInterface \$momentumCallback,
        QueueService \$queueService,
        RequestStorageHelper \$requestStorageHelper,
        LoggerInterface \$logger
    ) {
        \$this->momentumCallback     = \$momentumCallback;
        \$this->queueService         = \$queueService;
        \$this->requestStorageHelper = \$requestStorageHelper;
        \$this->logger               = \$logger;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            QueueEvents::TRANSPORT_WEBHOOK    => ['onMomentumWebhookQueueProcessing', 0],
            EmailEvents::ON_TRANSPORT_WEBHOOK => ['onMomentumWebhookRequest', 0],
        ];
    }

    /**
     * Webhook handling specific to Momentum transport.
     */
    public function onMomentumWebhookQueueProcessing(QueueConsumerEvent \$event)
    {
        if (\$event->checkTransport(MomentumTransport::class)) {
            \$payload = \$event->getPayload();
            \$key     = \$payload['key'];

            try {
                \$request = \$this->requestStorageHelper->getRequest(\$key);
                \$this->momentumCallback->processCallbackRequest(\$request);
                \$this->requestStorageHelper->deleteCachedRequest(\$key);
            } catch (\\UnexpectedValueException \$e) {
                \$this->logger->error(\$e->getMessage());
            }

            \$event->setResult(QueueConsumerResults::ACKNOWLEDGE);
        }
    }

    public function onMomentumWebhookRequest(TransportWebhookEvent \$event)
    {
        \$transport = MomentumTransport::class;
        if (\$this->queueService->isQueueEnabled() && \$event->transportIsInstanceOf(\$transport)) {
            // Beanstalk jobs are limited to 65,535 kB. Momentum can send up to 10.000 items per request.
            // One item has about 1,6 kB. Lets store the request to the cache storage instead of the job itself.
            \$key = \$this->requestStorageHelper->storeRequest(\$transport, \$event->getRequest());
            \$this->queueService->publishToQueue(QueueName::TRANSPORT_WEBHOOK, ['transport' => \$transport, 'key' => \$key]);
            \$event->stopPropagation();
        }

        // If the queue processing is disabled do nothing and let the default listener to process immediately
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/EventListener/MomentumSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/MomentumSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/EventListener/MomentumSubscriber.php");
    }
}
