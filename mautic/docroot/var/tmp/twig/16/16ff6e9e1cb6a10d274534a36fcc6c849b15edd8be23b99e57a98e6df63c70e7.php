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

/* @bundles/QueueBundle/EventListener/AbstractQueueSubscriber.php */
class __TwigTemplate_ee2709bdccbe9f15f9110b9470da879939dcbdddbd62206fc989fd0ac080fe69 extends Template
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
use Mautic\\QueueBundle\\QueueEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

abstract class AbstractQueueSubscriber implements EventSubscriberInterface
{
    protected \$protocol              = '';
    protected \$protocolUiTranslation = '';

    abstract public function publishMessage(Events\\QueueEvent \$event);

    abstract public function consumeMessage(Events\\QueueEvent \$event);

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            QueueEvents::PUBLISH_MESSAGE => ['onPublishMessage', 0],
            QueueEvents::CONSUME_MESSAGE => ['onConsumeMessage', 0],
        ];
    }

    public function onPublishMessage(Events\\QueueEvent \$event)
    {
        if (!\$event->checkContext(\$this->protocol)) {
            return;
        }

        \$this->publishMessage(\$event);
    }

    public function onConsumeMessage(Events\\QueueEvent \$event)
    {
        if (!\$event->checkContext(\$this->protocol)) {
            return;
        }

        \$this->consumeMessage(\$event);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/QueueBundle/EventListener/AbstractQueueSubscriber.php";
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
        return new Source("", "@bundles/QueueBundle/EventListener/AbstractQueueSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/QueueBundle/EventListener/AbstractQueueSubscriber.php");
    }
}
