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

/* @bundles/SmsBundle/EventListener/MessageQueueSubscriber.php */
class __TwigTemplate_0387f14d7b9b45f6f65537efc82215e80c891b0b4bd40552e5d265dea8caf8df extends Template
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

namespace Mautic\\SmsBundle\\EventListener;

use Mautic\\ChannelBundle\\ChannelEvents;
use Mautic\\ChannelBundle\\Entity\\MessageQueue;
use Mautic\\ChannelBundle\\Event\\MessageQueueBatchProcessEvent;
use Mautic\\SmsBundle\\Model\\SmsModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class MessageQueueSubscriber implements EventSubscriberInterface
{
    /**
     * @var SmsModel
     */
    private \$model;

    public function __construct(SmsModel \$model)
    {
        \$this->model = \$model;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            ChannelEvents::PROCESS_MESSAGE_QUEUE_BATCH => ['onProcessMessageQueueBatch', 0],
        ];
    }

    /**
     * Sends campaign emails.
     */
    public function onProcessMessageQueueBatch(MessageQueueBatchProcessEvent \$event)
    {
        if (!\$event->checkContext('sms')) {
            return;
        }

        \$messages          = \$event->getMessages();
        \$id                = \$event->getChannelId();
        \$sms               = \$this->model->getEntity(\$id);
        \$sendTo            = [];
        \$messagesByContact = [];

        /** @var MessageQueue \$message */
        foreach (\$messages as \$message) {
            if (\$sms && \$message->getLead() && \$sms->isPublished()) {
                \$contact = \$message->getLead();
                \$mobile  = \$contact->getMobile();
                \$phone   = \$contact->getPhone();
                if (empty(\$mobile) && empty(\$phone)) {
                    \$message->setProcessed();
                    \$message->setSuccess();
                }
                \$sendTo[\$contact->getId()]            = \$contact;
                \$messagesByContact[\$contact->getId()] = \$message;
            } else {
                \$message->setFailed();
            }
        }

        if (count(\$sendTo)) {
            \$options['resend_message_queue'] = \$messagesByContact;
            \$results                         = \$this->model->sendSms(\$sms, \$sendTo, \$options);

            foreach (\$messagesByContact as \$contactId => \$message) {
                if (!\$message->isProcessed()) {
                    \$message->setProcessed();
                    \$message->setMetadata(\$results[\$contactId]);
                    if (\$results[\$contactId]['sent']) {
                        \$message->setSuccess();
                    }
                }
            }
        }

        \$event->stopPropagation();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/EventListener/MessageQueueSubscriber.php";
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
        return new Source("", "@bundles/SmsBundle/EventListener/MessageQueueSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/EventListener/MessageQueueSubscriber.php");
    }
}
