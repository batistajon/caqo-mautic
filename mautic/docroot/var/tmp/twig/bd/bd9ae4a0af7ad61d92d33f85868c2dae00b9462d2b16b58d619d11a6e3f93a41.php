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

/* @bundles/LeadBundle/Tests/EventListener/SegmentSubscriberTest.php */
class __TwigTemplate_e843299adf6c540be9c7cdd1172df2ba217d3568288cfa88b45ce887f2786989 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\EventListener;

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Event\\LeadListEvent as SegmentEvent;
use Mautic\\LeadBundle\\EventListener\\SegmentSubscriber;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\LeadBundle\\Model\\ListModel;
use Symfony\\Component\\Translation\\TranslatorInterface;

class SegmentSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGetSubscribedEvents()
    {
        \$ipLookupHelper   = \$this->createMock(IpLookupHelper::class);
        \$auditLogModel    = \$this->createMock(AuditLogModel::class);
        \$listModel        = \$this->createMock(ListModel::class);
        \$translatorModel  = \$this->createMock(TranslatorInterface::class);

        \$subscriber     = new SegmentSubscriber(\$ipLookupHelper, \$auditLogModel, \$listModel, \$translatorModel);

        \$this->assertEquals(
            [
                LeadEvents::LIST_PRE_UNPUBLISH => ['onSegmentPreUnpublish', 0],
                LeadEvents::LIST_POST_SAVE     => ['onSegmentPostSave', 0],
                LeadEvents::LIST_POST_DELETE   => ['onSegmentDelete', 0],
            ],
            \$subscriber->getSubscribedEvents()
        );
    }

    public function testOnSegmentPostSave()
    {
        \$this->onSegmentPostSaveMethodCall(false); // update segment log
        \$this->onSegmentPostSaveMethodCall(true); // create segment log
    }

    public function testOnSegmentDelete()
    {
        \$segmentId        = 1;
        \$segmentName      = 'name';
        \$ip               = '127.0.0.2';
        \$log              = [
            'bundle'    => 'lead',
            'object'    => 'segment',
            'objectId'  => \$segmentId,
            'action'    => 'delete',
            'details'   => ['name', \$segmentName],
            'ipAddress' => \$ip,
        ];

        \$ipLookupHelper = \$this->createMock(IpLookupHelper::class);
        \$ipLookupHelper->expects(\$this->once())
            ->method('getIpAddressFromRequest')
            ->will(\$this->returnValue(\$ip));

        \$auditLogModel = \$this->createMock(AuditLogModel::class);
        \$auditLogModel->expects(\$this->once())
            ->method('writeToLog')
            ->with(\$log);

        \$listModel        = \$this->createMock(ListModel::class);
        \$translatorModel  = \$this->createMock(TranslatorInterface::class);

        \$subscriber     = new SegmentSubscriber(\$ipLookupHelper, \$auditLogModel, \$listModel, \$translatorModel);

        \$segment            = \$this->createMock(LeadList::class);
        \$segment->deletedId = \$segmentId;
        \$segment->expects(\$this->once())
            ->method('getName')
            ->will(\$this->returnValue(\$segmentName));

        \$event = \$this->createMock(SegmentEvent::class);
        \$event->expects(\$this->once())
            ->method('getList')
            ->will(\$this->returnValue(\$segment));

        \$subscriber->onSegmentDelete(\$event);
    }

    /**
     * Test create or update segment logging.
     *
     * @param bool \$isNew
     */
    private function onSegmentPostSaveMethodCall(\$isNew)
    {
        \$segmentId = 1;
        \$changes   = ['changes'];
        \$ip        = '127.0.0.2';

        \$log = [
            'bundle'    => 'lead',
            'object'    => 'segment',
            'objectId'  => \$segmentId,
            'action'    => (\$isNew) ? 'create' : 'update',
            'details'   => \$changes,
            'ipAddress' => \$ip,
        ];

        \$ipLookupHelper = \$this->createMock(IpLookupHelper::class);
        \$ipLookupHelper->expects(\$this->once())
            ->method('getIpAddressFromRequest')
            ->will(\$this->returnValue(\$ip));

        \$auditLogModel = \$this->createMock(AuditLogModel::class);
        \$auditLogModel->expects(\$this->once())
            ->method('writeToLog')
            ->with(\$log);

        \$listModel        = \$this->createMock(ListModel::class);
        \$translatorModel  = \$this->createMock(TranslatorInterface::class);

        \$subscriber     = new SegmentSubscriber(\$ipLookupHelper, \$auditLogModel, \$listModel, \$translatorModel);

        \$segment = \$this->createMock(LeadList::class);
        \$segment->expects(\$this->once())
            ->method('getId')
            ->will(\$this->returnValue(\$segmentId));

        \$event = \$this->createMock(SegmentEvent::class);
        \$event->expects(\$this->once())
            ->method('getList')
            ->will(\$this->returnValue(\$segment));
        \$event->expects(\$this->once())
            ->method('getChanges')
            ->will(\$this->returnValue(\$changes));
        \$event->expects(\$this->once())
            ->method('isNew')
            ->will(\$this->returnValue(\$isNew));

        \$subscriber->onSegmentPostSave(\$event);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/EventListener/SegmentSubscriberTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/EventListener/SegmentSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/EventListener/SegmentSubscriberTest.php");
    }
}
