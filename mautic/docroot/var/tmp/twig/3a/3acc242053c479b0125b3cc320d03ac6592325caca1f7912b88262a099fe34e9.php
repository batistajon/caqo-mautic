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

/* @bundles/LeadBundle/Segment/Stat/SegmentDependencies.php */
class __TwigTemplate_8681a6af3bcabd7a1c6def61ebff0aa8297bd0987d524d4badfcb102efbefebf extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Stat;

use Mautic\\CampaignBundle\\Model\\CampaignModel;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Mautic\\FormBundle\\Model\\ActionModel;
use Mautic\\LeadBundle\\Model\\ListModel;
use Mautic\\PointBundle\\Model\\TriggerEventModel;
use Mautic\\ReportBundle\\Model\\ReportModel;

class SegmentDependencies
{
    /**
     * @var EmailModel
     */
    private \$emailModel;

    /**
     * @var CampaignModel
     */
    private \$campaignModel;

    /**
     * @var ActionModel
     */
    private \$actionModel;

    /**
     * @var ListModel
     */
    private \$listModel;

    /**
     * @var TriggerEventModel
     */
    private \$triggerEventModel;

    /**
     * @var ReportModel
     */
    private \$reportModel;

    public function __construct(EmailModel \$emailModel, CampaignModel \$campaignModel, ActionModel \$actionModel, ListModel \$listModel, TriggerEventModel \$triggerEventModel, ReportModel \$reportModel)
    {
        \$this->emailModel        = \$emailModel;
        \$this->campaignModel     = \$campaignModel;
        \$this->actionModel       = \$actionModel;
        \$this->listModel         = \$listModel;
        \$this->triggerEventModel = \$triggerEventModel;
        \$this->reportModel       = \$reportModel;
    }

    /**
     * @param \$segmentId
     *
     * @return array
     */
    public function getChannelsIds(\$segmentId)
    {
        \$usage   = [];
        \$usage[] = [
            'label' => 'mautic.email.emails',
            'route' => 'mautic_email_index',
            'ids'   => \$this->emailModel->getEmailsIdsWithDependenciesOnSegment(\$segmentId),
        ];

        \$usage[] = [
            'label' => 'mautic.campaign.campaigns',
            'route' => 'mautic_campaign_index',
            'ids'   => \$this->campaignModel->getCampaignIdsWithDependenciesOnSegment(\$segmentId),
        ];

        \$usage[] = [
            'label' => 'mautic.lead.lead.lists',
            'route' => 'mautic_segment_index',
            'ids'   => \$this->listModel->getSegmentsWithDependenciesOnSegment(\$segmentId, 'id'),
        ];

        \$usage[] = [
            'label' => 'mautic.report.reports',
            'route' => 'mautic_report_index',
            'ids'   => \$this->reportModel->getReportsIdsWithDependenciesOnSegment(\$segmentId),
        ];

        \$usage[] = [
            'label' => 'mautic.form.forms',
            'route' => 'mautic_form_index',
            'ids'   => \$this->actionModel->getFormsIdsWithDependenciesOnSegment(\$segmentId),
        ];

        \$usage[] = [
            'label' => 'mautic.point.trigger.header.index',
            'route' => 'mautic_pointtrigger_index',
            'ids'   => \$this->triggerEventModel->getReportIdsWithDependenciesOnSegment(\$segmentId),
        ];

        return \$usage;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Stat/SegmentDependencies.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Stat/SegmentDependencies.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/Stat/SegmentDependencies.php");
    }
}
