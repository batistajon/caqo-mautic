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

/* @bundles/SmsBundle/EventListener/BroadcastSubscriber.php */
class __TwigTemplate_0d93e89210c254ad1f2524f6596d0177b070b8e05e9ae65e069e9a077b647ac8 extends Template
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
use Mautic\\ChannelBundle\\Event\\ChannelBroadcastEvent;
use Mautic\\SmsBundle\\Broadcast\\BroadcastExecutioner;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

/**
 * Class BroadcastSubscriber.
 */
class BroadcastSubscriber implements EventSubscriberInterface
{
    /**
     * @var BroadcastExecutioner
     */
    private \$broadcastExecutioner;

    /**
     * BroadcastSubscriber constructor.
     */
    public function __construct(BroadcastExecutioner \$broadcastExecutioner)
    {
        \$this->broadcastExecutioner = \$broadcastExecutioner;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            ChannelEvents::CHANNEL_BROADCAST => ['onBroadcast', 0],
        ];
    }

    public function onBroadcast(ChannelBroadcastEvent \$event)
    {
        if (!\$event->checkContext('sms')) {
            return;
        }

        \$this->broadcastExecutioner->execute(\$event);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/EventListener/BroadcastSubscriber.php";
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
        return new Source("", "@bundles/SmsBundle/EventListener/BroadcastSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/EventListener/BroadcastSubscriber.php");
    }
}
