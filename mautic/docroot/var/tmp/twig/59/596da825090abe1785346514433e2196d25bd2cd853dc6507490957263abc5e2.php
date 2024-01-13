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

/* @bundles/UserBundle/EventListener/UserSubscriber.php */
class __TwigTemplate_40ae28c4307da4895030211fcb7d7585f9fd0b52f754e6258cc6994b7af7b5f3 extends Template
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

namespace Mautic\\UserBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\UserBundle\\Event as Events;
use Mautic\\UserBundle\\UserEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class UserSubscriber implements EventSubscriberInterface
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
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            UserEvents::USER_POST_SAVE   => ['onUserPostSave', 0],
            UserEvents::USER_POST_DELETE => ['onUserDelete', 0],
            UserEvents::ROLE_POST_SAVE   => ['onRolePostSave', 0],
            UserEvents::ROLE_POST_DELETE => ['onRoleDelete', 0],
        ];
    }

    /**
     * Add a user entry to the audit log.
     */
    public function onUserPostSave(Events\\UserEvent \$event)
    {
        \$user = \$event->getUser();

        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'    => 'user',
                'object'    => 'user',
                'objectId'  => \$user->getId(),
                'action'    => (\$event->isNew()) ? 'create' : 'update',
                'details'   => \$details,
                'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
            ];
            \$this->auditLogModel->writeToLog(\$log);
        }
    }

    /**
     * Add a user delete entry to the audit log.
     */
    public function onUserDelete(Events\\UserEvent \$event)
    {
        \$user = \$event->getUser();
        \$log  = [
            'bundle'    => 'user',
            'object'    => 'user',
            'objectId'  => \$user->deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$user->getName()],
            'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
        ];
        \$this->auditLogModel->writeToLog(\$log);
    }

    /**
     * Add a role entry to the audit log.
     */
    public function onRolePostSave(Events\\RoleEvent \$event)
    {
        \$role = \$event->getRole();
        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'    => 'user',
                'object'    => 'role',
                'objectId'  => \$role->getId(),
                'action'    => (\$event->isNew()) ? 'create' : 'update',
                'details'   => \$details,
                'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
            ];
            \$this->auditLogModel->writeToLog(\$log);
        }
    }

    /**
     * Add a role delete entry to the audit log.
     */
    public function onRoleDelete(Events\\RoleEvent \$event)
    {
        \$role = \$event->getRole();
        \$log  = [
            'bundle'    => 'user',
            'object'    => 'role',
            'objectId'  => \$role->deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$role->getName()],
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
        return "@bundles/UserBundle/EventListener/UserSubscriber.php";
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
        return new Source("", "@bundles/UserBundle/EventListener/UserSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/EventListener/UserSubscriber.php");
    }
}
