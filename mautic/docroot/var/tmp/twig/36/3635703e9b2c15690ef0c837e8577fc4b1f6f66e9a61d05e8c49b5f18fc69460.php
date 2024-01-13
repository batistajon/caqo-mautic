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

/* @bundles/LeadBundle/EventListener/ImportSubscriber.php */
class __TwigTemplate_1c184cfce65eb60098d0773ae3f10b6a38662ce9467ecef60c444ca96803043a extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\LeadBundle\\Event\\ImportEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ImportSubscriber implements EventSubscriberInterface
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
            LeadEvents::IMPORT_POST_SAVE   => ['onImportPostSave', 0],
            LeadEvents::IMPORT_POST_DELETE => ['onImportDelete', 0],
        ];
    }

    /**
     * Add an entry to the audit log.
     */
    public function onImportPostSave(ImportEvent \$event)
    {
        \$entity = \$event->getEntity();
        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'    => 'lead',
                'object'    => 'import',
                'objectId'  => \$entity->getId(),
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
    public function onImportDelete(ImportEvent \$event)
    {
        \$entity = \$event->getEntity();
        \$log    = [
            'bundle'    => 'lead',
            'object'    => 'import',
            'objectId'  => \$entity->deletedId,
            'action'    => 'delete',
            'details'   => ['originalFile' => \$entity->getOriginalFile()],
            'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
        ];
        \$this->auditLogModel->writeToLog(\$log);

        //In case of batch delete, this method call remove the uploaded file
        \$entity->removeFile();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/EventListener/ImportSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/ImportSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/EventListener/ImportSubscriber.php");
    }
}
