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

/* @bundles/EmailBundle/EventListener/ProcessReplySubscriber.php */
class __TwigTemplate_61ac4ead001b5c816f3a94f3bf89ab634eb193db7c1f060b16de58b50d3f16fa extends Template
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

use Mautic\\CoreBundle\\Helper\\CacheStorageHelper;
use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Event\\MonitoredEmailEvent;
use Mautic\\EmailBundle\\Event\\ParseEmailEvent;
use Mautic\\EmailBundle\\MonitoredEmail\\Mailbox;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Reply;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ProcessReplySubscriber implements EventSubscriberInterface
{
    const BUNDLE     = 'EmailBundle';
    const FOLDER_KEY = 'replies';
    const CACHE_KEY  = self::BUNDLE.'_'.self::FOLDER_KEY;

    /**
     * @var Reply
     */
    private \$replier;

    /**
     * @var CacheStorageHelper
     */
    private \$cache;

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            EmailEvents::MONITORED_EMAIL_CONFIG => ['onEmailConfig', 0],
            EmailEvents::EMAIL_PRE_FETCH        => ['onEmailPreFetch', 0],
            EmailEvents::EMAIL_PARSE            => ['onEmailParse', 1],
        ];
    }

    /**
     * ProcessReplySubscriber constructor.
     */
    public function __construct(Reply \$replier, CacheStorageHelper \$cache)
    {
        \$this->replier = \$replier;
        \$this->cache   = \$cache;
    }

    public function onEmailConfig(MonitoredEmailEvent \$event)
    {
        \$event->addFolder(self::BUNDLE, self::FOLDER_KEY, 'mautic.email.config.monitored_email.reply_folder');
    }

    public function onEmailPreFetch(ParseEmailEvent \$event)
    {
        if (!\$lastFetchedUID = \$this->cache->get(self::CACHE_KEY)) {
            return;
        }

        \$startingUID = \$lastFetchedUID + 1;

        // Using * will return the last UID even if the starting UID doesn't exist so let's just use a highball number
        \$endingUID = \$startingUID + 1000000000;

        \$event->setCriteriaRequest(self::BUNDLE, self::FOLDER_KEY, Mailbox::CRITERIA_UID.\" \$startingUID:\$endingUID\");
    }

    public function onEmailParse(ParseEmailEvent \$event)
    {
        if (\$event->isApplicable(self::BUNDLE, self::FOLDER_KEY)) {
            // Process the messages
            if (\$messages = \$event->getMessages()) {
                foreach (\$messages as \$message) {
                    \$this->replier->process(\$message);
                }

                // Store the last UID
                \$this->cache->set(self::CACHE_KEY, \$message->id);
            }
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
        return "@bundles/EmailBundle/EventListener/ProcessReplySubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/ProcessReplySubscriber.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/EventListener/ProcessReplySubscriber.php");
    }
}
