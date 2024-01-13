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

/* @bundles/ApiBundle/EventListener/ClientSubscriber.php */
class __TwigTemplate_aa2b58cd44a573ae57db955c88912e8d1f829966cc87b29232732f24cd17157c extends Template
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

namespace Mautic\\ApiBundle\\EventListener;

use Mautic\\ApiBundle\\ApiEvents;
use Mautic\\ApiBundle\\Event as Events;
use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ClientSubscriber implements EventSubscriberInterface
{
    /**
     * @var IpLookupHelper
     */
    private \$ipLookupHelper;

    /**
     * @var AuditLogModel
     */
    private \$auditLogModel;

    public function __construct(
        IpLookupHelper \$ipLookupHelper,
        AuditLogModel \$auditLogModel
    ) {
        \$this->ipLookupHelper       = \$ipLookupHelper;
        \$this->auditLogModel        = \$auditLogModel;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ApiEvents::CLIENT_POST_SAVE   => ['onClientPostSave', 0],
            ApiEvents::CLIENT_POST_DELETE => ['onClientDelete', 0],
        ];
    }

    /**
     * Add a client change entry to the audit log.
     */
    public function onClientPostSave(Events\\ClientEvent \$event): void
    {
        \$client = \$event->getClient();
        if (!\$details = \$event->getChanges()) {
            return;
        }

        \$log = [
            'bundle'    => 'api',
            'object'    => 'client',
            'objectId'  => \$client->getId(),
            'action'    => (\$event->isNew()) ? 'create' : 'update',
            'details'   => \$details,
            'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
        ];
        \$this->auditLogModel->writeToLog(\$log);
    }

    /**
     * Add a role delete entry to the audit log.
     */
    public function onClientDelete(Events\\ClientEvent \$event): void
    {
        \$client = \$event->getClient();
        \$log    = [
            'bundle'    => 'api',
            'object'    => 'client',
            'objectId'  => \$client->deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$client->getName()],
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
        return "@bundles/ApiBundle/EventListener/ClientSubscriber.php";
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
        return new Source("", "@bundles/ApiBundle/EventListener/ClientSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/EventListener/ClientSubscriber.php");
    }
}
