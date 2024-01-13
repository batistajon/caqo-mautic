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

/* @bundles/EmailBundle/EventListener/QueueSubscriber.php */
class __TwigTemplate_1ccdbe112963e2f12a906966d845976b798afb52a3eb1e0edaaabea71d776ed7 extends Template
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

use Mautic\\EmailBundle\\Model\\EmailModel;
use Mautic\\QueueBundle\\Event\\QueueConsumerEvent;
use Mautic\\QueueBundle\\Queue\\QueueConsumerResults;
use Mautic\\QueueBundle\\QueueEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

/**
 * Proceses queue (Beanstalk, RabitMQ, ...) jobs.
 */
class QueueSubscriber implements EventSubscriberInterface
{
    /**
     * @var EmailModel
     */
    private \$emailModel;

    public function __construct(EmailModel \$emailModel)
    {
        \$this->emailModel = \$emailModel;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            QueueEvents::EMAIL_HIT => ['onEmailHit', 0],
        ];
    }

    public function onEmailHit(QueueConsumerEvent \$event)
    {
        \$payload = \$event->getPayload();
        \$this->emailModel->hitEmail(\$payload['idHash'], \$payload['request'], false, false);
        \$event->setResult(QueueConsumerResults::ACKNOWLEDGE);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/EventListener/QueueSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/QueueSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/EventListener/QueueSubscriber.php");
    }
}
