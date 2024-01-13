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

/* @bundles/LeadBundle/EventListener/SegmentSubscriber.php */
class __TwigTemplate_11b2abd3cbef56f27b403d97a00f97a1b640e6d0d25d7d8249f65d0bc82943f6 extends Template
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

use Mautic\\CoreBundle\\Exception\\RecordCanNotUnpublishException;
use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\LeadBundle\\Event\\LeadListEvent as SegmentEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\LeadBundle\\Model\\ListModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class SegmentSubscriber implements EventSubscriberInterface
{
    /**
     * @var IpLookupHelper
     */
    private \$ipLookupHelper;

    /**
     * @var AuditLogModel
     */
    private \$auditLogModel;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var ListModel
     */
    private \$listModel;

    public function __construct(
        IpLookupHelper \$ipLookupHelper,
        AuditLogModel \$auditLogModel,
        ListModel \$listModel,
        TranslatorInterface \$translator
    ) {
        \$this->ipLookupHelper    = \$ipLookupHelper;
        \$this->auditLogModel     = \$auditLogModel;
        \$this->listModel         = \$listModel;
        \$this->translator        = \$translator;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            LeadEvents::LIST_PRE_UNPUBLISH => ['onSegmentPreUnpublish', 0],
            LeadEvents::LIST_POST_SAVE     => ['onSegmentPostSave', 0],
            LeadEvents::LIST_POST_DELETE   => ['onSegmentDelete', 0],
        ];
    }

    /**
     * Add a segment entry to the audit log.
     */
    public function onSegmentPostSave(SegmentEvent \$event)
    {
        \$segment = \$event->getList();
        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'    => 'lead',
                'object'    => 'segment',
                'objectId'  => \$segment->getId(),
                'action'    => (\$event->isNew()) ? 'create' : 'update',
                'details'   => \$details,
                'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
            ];
            \$this->auditLogModel->writeToLog(\$log);
        }
    }

    public function onSegmentPreUnpublish(SegmentEvent \$event): ?RecordCanNotUnpublishException
    {
        \$leadList = \$event->getList();
        \$lists    = \$this->listModel->getSegmentsWithDependenciesOnSegment(\$leadList->getId(), 'name');
        if (count(\$lists)) {
            \$message = \$this->translator->trans('mautic.lead_list.is_in_use', ['%segments%' => implode(',', \$lists)], 'validators');
            throw new RecordCanNotUnpublishException(\$message);
        }

        return null;
    }

    /**
     * Add a segment delete entry to the audit log.
     */
    public function onSegmentDelete(SegmentEvent \$event)
    {
        \$segment = \$event->getList();
        \$log     = [
            'bundle'    => 'lead',
            'object'    => 'segment',
            'objectId'  => \$segment->deletedId,
            'action'    => 'delete',
            'details'   => ['name', \$segment->getName()],
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
        return "@bundles/LeadBundle/EventListener/SegmentSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/SegmentSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/EventListener/SegmentSubscriber.php");
    }
}
