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

/* @bundles/SmsBundle/EventListener/ReplySubscriber.php */
class __TwigTemplate_aa5edd6e37b375559d10fb5ab92da58f9d4bb0a289826407d499de944afba87b extends Template
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

use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\LeadBundle\\Entity\\LeadEventLog;
use Mautic\\LeadBundle\\Entity\\LeadEventLogRepository;
use Mautic\\LeadBundle\\Event\\LeadTimelineEvent;
use Mautic\\LeadBundle\\EventListener\\TimelineEventLogTrait;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\SmsBundle\\Event\\ReplyEvent;
use Mautic\\SmsBundle\\SmsEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class ReplySubscriber implements EventSubscriberInterface
{
    use TimelineEventLogTrait;

    /**
     * ReplySubscriber constructor.
     */
    public function __construct(TranslatorInterface \$translator, LeadEventLogRepository \$eventLogRepository)
    {
        \$this->translator         = \$translator;
        \$this->eventLogRepository = \$eventLogRepository;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            SmsEvents::ON_REPLY              => ['onReply', 0],
            LeadEvents::TIMELINE_ON_GENERATE => 'onTimelineGenerate',
        ];
    }

    public function onReply(ReplyEvent \$event)
    {
        \$message = \$event->getMessage();
        \$contact = \$event->getContact();

        \$log = new LeadEventLog();
        \$log
            ->setLead(\$contact)
            ->setBundle('sms')
            ->setObject('sms')
            ->setAction('reply')
            ->setProperties(
                [
                    'message' => InputHelper::clean(\$message),
                ]
            );

        \$this->eventLogRepository->saveEntity(\$log);
        \$this->eventLogRepository->detachEntity(\$log);
    }

    public function onTimelineGenerate(LeadTimelineEvent \$event)
    {
        \$this->addEvents(
            \$event,
            'sms_reply',
            'mautic.sms.timeline.reply',
            'fa-mobile',
            'sms',
            'sms',
            'reply',
            'MauticSmsBundle:SubscribedEvents/Timeline:reply.html.php'
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/EventListener/ReplySubscriber.php";
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
        return new Source("", "@bundles/SmsBundle/EventListener/ReplySubscriber.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/EventListener/ReplySubscriber.php");
    }
}
