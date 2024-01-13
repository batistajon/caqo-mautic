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

/* @bundles/LeadBundle/Segment/Stat/SegmentCampaignShare.php */
class __TwigTemplate_e29273886ec01e260a1ab0c60aee5adfb70a9f66676b0a44ebcaec938d58685b extends Template
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

use Doctrine\\ORM\\EntityManager;
use Mautic\\CampaignBundle\\Model\\CampaignModel;
use Mautic\\CoreBundle\\Helper\\CacheStorageHelper;

class SegmentCampaignShare
{
    /**
     * @var CampaignModel
     */
    private \$campaignModel;

    /**
     * @var CacheStorageHelper
     */
    private \$cacheStorageHelper;

    /**
     * @var EntityManager
     */
    private \$entityManager;

    /**
     * SegmentCampaignShare constructor.
     */
    public function __construct(CampaignModel \$campaignModel, CacheStorageHelper \$cacheStorageHelper, EntityManager \$entityManager)
    {
        \$this->campaignModel      = \$campaignModel;
        \$this->cacheStorageHelper = \$cacheStorageHelper;
        \$this->entityManager      = \$entityManager;
    }

    /**
     * @param int   \$segmentId
     * @param array \$campaignIds
     *
     * @return array
     */
    public function getCampaignsSegmentShare(\$segmentId, \$campaignIds = [])
    {
        \$campaigns = \$this->campaignModel->getRepository()->getCampaignsSegmentShare(\$segmentId, \$campaignIds);
        foreach (\$campaigns as \$campaign) {
            \$this->cacheStorageHelper->set(\$this->getCachedKey(\$segmentId, \$campaign['id']), \$campaign['segmentCampaignShare']);
        }

        return \$campaigns;
    }

    /**
     * @param int \$segmentId
     *
     * @return array
     */
    public function getCampaignList(\$segmentId)
    {
        \$q = \$this->entityManager->getConnection()->createQueryBuilder();
        \$q->select('c.id, c.name, null as share')
            ->from(MAUTIC_TABLE_PREFIX.'campaigns', 'c')
            ->where(\$this->campaignModel->getRepository()->getPublishedByDateExpression(\$q))
            ->orderBy('c.id', 'DESC');

        \$campaigns = \$q->execute()->fetchAll();
        foreach (\$campaigns as &\$campaign) {
            // just load from cache If exists
            if (\$share  = \$this->cacheStorageHelper->get(\$this->getCachedKey(\$segmentId, \$campaign['id']))) {
                \$campaign['share'] = \$share;
            }
        }

        return \$campaigns;
    }

    /**
     * @param int \$segmentId
     * @param int \$campaignId
     *
     * @return string
     */
    private function getCachedKey(\$segmentId, \$campaignId)
    {
        return sprintf('%s|%s|%s|%s|%s', 'campaign', \$campaignId, 'segment', \$segmentId, 'share');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Stat/SegmentCampaignShare.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Stat/SegmentCampaignShare.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/Stat/SegmentCampaignShare.php");
    }
}
