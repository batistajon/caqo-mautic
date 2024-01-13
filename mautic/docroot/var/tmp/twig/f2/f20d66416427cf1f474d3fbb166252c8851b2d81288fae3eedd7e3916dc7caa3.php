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

/* @bundles/PointBundle/EventListener/PointSubscriber.php */
class __TwigTemplate_3b0682a430520a00c40fb5ae31024a82c3ad9d24daddeebf8b0f06412c05f3d9 extends Template
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

namespace Mautic\\PointBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\PointBundle\\Event as Events;
use Mautic\\PointBundle\\PointEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class PointSubscriber implements EventSubscriberInterface
{
    /**
     * @var IpLookupHelper
     */
    private \$ipLookupHelper;

    /**
     * @var AuditLogModel
     */
    private \$auditLogModel;

    public function __construct(IpLookupHelper \$ipLookupHelper, AuditLogModel \$auditLogModel)
    {
        \$this->ipLookupHelper = \$ipLookupHelper;
        \$this->auditLogModel  = \$auditLogModel;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            PointEvents::POINT_POST_SAVE     => ['onPointPostSave', 0],
            PointEvents::POINT_POST_DELETE   => ['onPointDelete', 0],
            PointEvents::TRIGGER_POST_SAVE   => ['onTriggerPostSave', 0],
            PointEvents::TRIGGER_POST_DELETE => ['onTriggerDelete', 0],
        ];
    }

    /**
     * Add an entry to the audit log.
     */
    public function onPointPostSave(Events\\PointEvent \$event)
    {
        \$point = \$event->getPoint();
        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'    => 'point',
                'object'    => 'point',
                'objectId'  => \$point->getId(),
                'action'    => (\$event->isNew()) ? 'create' : 'update',
                'details'   => \$details,
                'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
            ];
            \$this->auditLogModel->writeToLog(\$log);
        }
    }

    /**
     * Add a delete entry to the audit log.
     */
    public function onPointDelete(Events\\PointEvent \$event)
    {
        \$point = \$event->getPoint();
        \$log   = [
            'bundle'    => 'point',
            'object'    => 'point',
            'objectId'  => \$point->deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$point->getName()],
            'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
        ];
        \$this->auditLogModel->writeToLog(\$log);
    }

    /**
     * Add an entry to the audit log.
     */
    public function onTriggerPostSave(Events\\TriggerEvent \$event)
    {
        \$trigger = \$event->getTrigger();
        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'    => 'point',
                'object'    => 'trigger',
                'objectId'  => \$trigger->getId(),
                'action'    => (\$event->isNew()) ? 'create' : 'update',
                'details'   => \$details,
                'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
            ];
            \$this->auditLogModel->writeToLog(\$log);
        }
    }

    /**
     * Add a delete entry to the audit log.
     */
    public function onTriggerDelete(Events\\TriggerEvent \$event)
    {
        \$trigger = \$event->getTrigger();
        \$log     = [
            'bundle'    => 'point',
            'object'    => 'trigger',
            'objectId'  => \$trigger->deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$trigger->getName()],
            'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
        ];
        \$this->auditLogModel->writeToLog(\$log);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/EventListener/PointSubscriber.php";
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
        return new Source("", "@bundles/PointBundle/EventListener/PointSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/PointBundle/EventListener/PointSubscriber.php");
    }
}
