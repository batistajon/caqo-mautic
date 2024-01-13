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

/* @bundles/EmailBundle/EventListener/PointSubscriber.php */
class __TwigTemplate_298b52ec842c295bee20c8eee9ca07ea971bf275e4e022fffc6cab32dfbae591 extends Template
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

use Doctrine\\ORM\\EntityManager;
use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Event\\EmailOpenEvent;
use Mautic\\EmailBundle\\Event\\EmailSendEvent;
use Mautic\\EmailBundle\\Form\\Type\\EmailOpenType;
use Mautic\\EmailBundle\\Form\\Type\\EmailSendType;
use Mautic\\EmailBundle\\Form\\Type\\EmailToUserType;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PointBundle\\Event\\PointBuilderEvent;
use Mautic\\PointBundle\\Event\\TriggerBuilderEvent;
use Mautic\\PointBundle\\Model\\PointModel;
use Mautic\\PointBundle\\PointEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class PointSubscriber implements EventSubscriberInterface
{
    /**
     * @var PointModel
     */
    private \$pointModel;

    /**
     * @var EntityManager
     */
    private \$entityManager;

    public function __construct(PointModel \$pointModel, EntityManager \$entityManager)
    {
        \$this->pointModel    = \$pointModel;
        \$this->entityManager = \$entityManager;
    }

    public static function getSubscribedEvents()
    {
        return [
            PointEvents::POINT_ON_BUILD   => ['onPointBuild', 0],
            PointEvents::TRIGGER_ON_BUILD => ['onTriggerBuild', 0],
            EmailEvents::EMAIL_ON_OPEN    => ['onEmailOpen', 0],
            EmailEvents::EMAIL_ON_SEND    => ['onEmailSend', 0],
        ];
    }

    public function onPointBuild(PointBuilderEvent \$event)
    {
        \$action = [
            'group'    => 'mautic.email.actions',
            'label'    => 'mautic.email.point.action.open',
            'callback' => ['\\\\Mautic\\\\EmailBundle\\\\Helper\\\\PointEventHelper', 'validateEmail'],
            'formType' => EmailOpenType::class,
        ];

        \$event->addAction('email.open', \$action);

        \$action = [
            'group'    => 'mautic.email.actions',
            'label'    => 'mautic.email.point.action.send',
            'callback' => ['\\\\Mautic\\\\EmailBundle\\\\Helper\\\\PointEventHelper', 'validateEmail'],
            'formType' => EmailOpenType::class,
        ];

        \$event->addAction('email.send', \$action);
    }

    public function onTriggerBuild(TriggerBuilderEvent \$event)
    {
        \$sendEvent = [
            'group'           => 'mautic.email.point.trigger',
            'label'           => 'mautic.email.point.trigger.sendemail',
            'callback'        => ['\\\\Mautic\\\\EmailBundle\\\\Helper\\\\PointEventHelper', 'sendEmail'],
            'formType'        => EmailSendType::class,
            'formTypeOptions' => ['update_select' => 'pointtriggerevent_properties_email'],
            'formTheme'       => 'MauticEmailBundle:FormTheme\\EmailSendList',
        ];

        \$event->addEvent('email.send', \$sendEvent);

        \$sendToOwnerEvent = [
          'group'           => 'mautic.email.point.trigger',
          'label'           => 'mautic.email.point.trigger.send_email_to_user',
          'formType'        => EmailToUserType::class,
          'formTypeOptions' => ['update_select' => 'pointtriggerevent_properties_email'],
          'formTheme'       => 'MauticEmailBundle:FormTheme\\EmailSendList',
          'eventName'       => EmailEvents::ON_SENT_EMAIL_TO_USER,
        ];

        \$event->addEvent('email.send_to_user', \$sendToOwnerEvent);
    }

    /**
     * Trigger point actions for email open.
     */
    public function onEmailOpen(EmailOpenEvent \$event)
    {
        \$this->pointModel->triggerAction('email.open', \$event->getEmail());
    }

    /**
     * Trigger point actions for email send.
     */
    public function onEmailSend(EmailSendEvent \$event)
    {
        \$leadArray = \$event->getLead();
        if (\$leadArray && is_array(\$leadArray) && !empty(\$leadArray['id'])) {
            \$lead = \$this->entityManager->getReference(Lead::class, \$leadArray['id']);
        } else {
            return;
        }

        \$this->pointModel->triggerAction('email.send', \$event->getEmail(), null, \$lead, true);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/EventListener/PointSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/PointSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/EventListener/PointSubscriber.php");
    }
}
