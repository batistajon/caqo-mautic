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

/* @bundles/EmailBundle/EventListener/ProcessUnsubscribeSubscriber.php */
class __TwigTemplate_29d075b1027218c76073e5d40cc0343eab6f2e2808e57c11a7b0e01595b91c23 extends Template
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
use Mautic\\EmailBundle\\Event\\EmailSendEvent;
use Mautic\\EmailBundle\\Event\\MonitoredEmailEvent;
use Mautic\\EmailBundle\\Event\\ParseEmailEvent;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\FeedbackLoop;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscribe;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ProcessUnsubscribeSubscriber implements EventSubscriberInterface
{
    const BUNDLE     = 'EmailBundle';
    const FOLDER_KEY = 'unsubscribes';

    /**
     * @var Unsubscribe
     */
    private \$unsubscriber;

    /**
     * @var FeedbackLoop
     */
    private \$looper;

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            EmailEvents::MONITORED_EMAIL_CONFIG => ['onEmailConfig', 0],
            EmailEvents::EMAIL_PARSE            => ['onEmailParse', 0],
            EmailEvents::EMAIL_ON_SEND          => ['onEmailSend', 0],
        ];
    }

    /**
     * ProcessUnsubscribeSubscriber constructor.
     */
    public function __construct(Unsubscribe \$unsubscriber, FeedbackLoop \$looper)
    {
        \$this->unsubscriber = \$unsubscriber;
        \$this->looper       = \$looper;
    }

    public function onEmailConfig(MonitoredEmailEvent \$event)
    {
        \$event->addFolder(self::BUNDLE, self::FOLDER_KEY, 'mautic.email.config.monitored_email.unsubscribe_folder');
    }

    public function onEmailParse(ParseEmailEvent \$event)
    {
        if (\$event->isApplicable(self::BUNDLE, self::FOLDER_KEY)) {
            // Process the messages
            \$messages = \$event->getMessages();
            foreach (\$messages as \$message) {
                if (!\$this->unsubscriber->process(\$message)) {
                    \$this->looper->process(\$message);
                }
            }
        }
    }

    /**
     * Add an unsubscribe email to the List-Unsubscribe header if applicable.
     */
    public function onEmailSend(EmailSendEvent \$event)
    {
        \$helper = \$event->getHelper();
        if (\$helper && \$unsubscribeEmail = \$helper->generateUnsubscribeEmail()) {
            \$headers          = \$event->getTextHeaders();
            \$existing         = (isset(\$headers['List-Unsubscribe'])) ? \$headers['List-Unsubscribe'] : '';
            \$unsubscribeEmail = \"<mailto:\$unsubscribeEmail>\";
            if (\$existing) {
                if (false === strpos(\$existing, \$unsubscribeEmail)) {
                    \$updatedHeader = \$unsubscribeEmail.', '.\$existing;
                } else {
                    \$updatedHeader = \$existing;
                }
            } else {
                \$updatedHeader = \$unsubscribeEmail;
            }

            \$event->addTextHeader('List-Unsubscribe', \$updatedHeader);
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
        return "@bundles/EmailBundle/EventListener/ProcessUnsubscribeSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/ProcessUnsubscribeSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/EventListener/ProcessUnsubscribeSubscriber.php");
    }
}
