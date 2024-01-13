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

/* @bundles/StageBundle/EventListener/StageSubscriber.php */
class __TwigTemplate_99fc8e7f710add69982f80e0499ec26e4b0ecc8ba70cd49ab181e3dd48e1dadd extends Template
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

namespace Mautic\\StageBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\StageBundle\\Event as Events;
use Mautic\\StageBundle\\StageEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class StageSubscriber implements EventSubscriberInterface
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
            StageEvents::STAGE_POST_SAVE   => ['onStagePostSave', 0],
            StageEvents::STAGE_POST_DELETE => ['onStageDelete', 0],
        ];
    }

    /**
     * Add an entry to the audit log.
     */
    public function onStagePostSave(Events\\StageEvent \$event)
    {
        \$stage = \$event->getStage();
        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'    => 'stage',
                'object'    => 'stage',
                'objectId'  => \$stage->getId(),
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
    public function onStageDelete(Events\\StageEvent \$event)
    {
        \$stage = \$event->getStage();
        \$log   = [
            'bundle'    => 'stage',
            'object'    => 'stage',
            'objectId'  => \$stage->deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$stage->getName()],
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
        return "@bundles/StageBundle/EventListener/StageSubscriber.php";
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
        return new Source("", "@bundles/StageBundle/EventListener/StageSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/StageBundle/EventListener/StageSubscriber.php");
    }
}
