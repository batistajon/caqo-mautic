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

/* @bundles/UserBundle/EventListener/SecuritySubscriber.php */
class __TwigTemplate_064c6305a16bd8af8e670eb14850f343a7208c537e288a4567f2fd59c6885f96 extends Template
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
use Mautic\\UserBundle\\Event\\LoginEvent;
use Mautic\\UserBundle\\UserEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class SecuritySubscriber implements EventSubscriberInterface
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
            UserEvents::USER_LOGIN => ['onSecurityInteractiveLogin', 0],
        ];
    }

    public function onSecurityInteractiveLogin(LoginEvent \$event)
    {
        \$userId   = (int) \$event->getUser()->getId();
        \$useName  = \$event->getUser()->getUsername();

        \$log     = [
            'bundle'    => 'user',
            'object'    => 'security',
            'objectId'  => \$userId,
            'action'    => 'login',
            'details'   => ['username' => \$useName],
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
        return "@bundles/UserBundle/EventListener/SecuritySubscriber.php";
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
        return new Source("", "@bundles/UserBundle/EventListener/SecuritySubscriber.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/EventListener/SecuritySubscriber.php");
    }
}
