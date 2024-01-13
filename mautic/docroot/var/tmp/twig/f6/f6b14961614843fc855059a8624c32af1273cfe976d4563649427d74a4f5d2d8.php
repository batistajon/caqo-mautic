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

/* @bundles/IntegrationsBundle/Sync/Notification/Writer.php */
class __TwigTemplate_ef38658208716513969152a3053ca8c800b87d8f62d32a1421ceea902468fd18 extends Template
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

declare(strict_types=1);

namespace Mautic\\IntegrationsBundle\\Sync\\Notification;

use Doctrine\\ORM\\EntityManagerInterface;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\CoreBundle\\Model\\NotificationModel;
use Mautic\\UserBundle\\Entity\\User;

class Writer
{
    /**
     * @var NotificationModel
     */
    private \$notificationModel;

    /**
     * @var AuditLogModel
     */
    private \$auditLogModel;

    /**
     * @var EntityManagerInterface
     */
    private \$em;

    public function __construct(
        NotificationModel \$notificationModel,
        AuditLogModel \$auditLogModel,
        EntityManagerInterface \$entityManager
    ) {
        \$this->notificationModel   = \$notificationModel;
        \$this->auditLogModel       = \$auditLogModel;
        \$this->em                  = \$entityManager;
    }

    /**
     * @throws \\Doctrine\\ORM\\ORMException
     */
    public function writeUserNotification(string \$header, string \$message, int \$userId): void
    {
        \$this->notificationModel->addNotification(
            \$message,
            null,
            false,
            \$header,
            'fa-refresh',
            null,
            \$this->em->getReference(User::class, \$userId)
        );
    }

    public function writeAuditLogEntry(string \$bundle, string \$object, ?int \$objectId, string \$action, array \$details): void
    {
        \$log = [
            'bundle'   => \$bundle,
            'object'   => \$object,
            'objectId' => \$objectId,
            'action'   => \$action,
            'details'  => \$details,
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
        return "@bundles/IntegrationsBundle/Sync/Notification/Writer.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Notification/Writer.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/Notification/Writer.php");
    }
}
