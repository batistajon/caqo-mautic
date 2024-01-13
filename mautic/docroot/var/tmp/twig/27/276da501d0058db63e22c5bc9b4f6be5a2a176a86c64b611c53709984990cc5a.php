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

/* @bundles/CampaignBundle/EventListener/SearchSubscriber.php */
class __TwigTemplate_2db6c4103b8d45c2264747de2cddc6f6eb5257c17b2676bd7c3d2f7bba9ee4d1 extends Template
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

namespace Mautic\\CampaignBundle\\EventListener;

use Mautic\\CampaignBundle\\Model\\CampaignModel;
use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event as MauticEvents;
use Mautic\\CoreBundle\\Helper\\TemplatingHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class SearchSubscriber implements EventSubscriberInterface
{
    /**
     * @var CampaignModel
     */
    private \$campaignModel;

    /**
     * @var CorePermissions
     */
    private \$security;

    /**
     * @var TemplatingHelper
     */
    private \$templating;

    public function __construct(
        CampaignModel \$campaignModel,
        CorePermissions \$security,
        TemplatingHelper \$templating
    ) {
        \$this->campaignModel = \$campaignModel;
        \$this->security      = \$security;
        \$this->templating    = \$templating;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            CoreEvents::GLOBAL_SEARCH      => ['onGlobalSearch', 0],
            CoreEvents::BUILD_COMMAND_LIST => ['onBuildCommandList', 0],
        ];
    }

    public function onGlobalSearch(MauticEvents\\GlobalSearchEvent \$event)
    {
        if (\$this->security->isGranted('campaign:campaigns:view')) {
            \$str = \$event->getSearchString();
            if (empty(\$str)) {
                return;
            }

            \$campaigns = \$this->campaignModel->getEntities(
                [
                    'limit'  => 5,
                    'filter' => \$str,
                ]);

            if (count(\$campaigns) > 0) {
                \$campaignResults = [];
                foreach (\$campaigns as \$campaign) {
                    \$campaignResults[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticCampaignBundle:SubscribedEvents\\Search:global.html.php',
                        [
                            'campaign' => \$campaign,
                        ]
                    )->getContent();
                }
                if (count(\$campaigns) > 5) {
                    \$campaignResults[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticCampaignBundle:SubscribedEvents\\Search:global.html.php',
                        [
                            'showMore'     => true,
                            'searchString' => \$str,
                            'remaining'    => (count(\$campaigns) - 5),
                        ]
                    )->getContent();
                }
                \$campaignResults['count'] = count(\$campaigns);
                \$event->addResults('mautic.campaign.campaigns', \$campaignResults);
            }
        }
    }

    public function onBuildCommandList(MauticEvents\\CommandListEvent \$event)
    {
        \$security = \$this->security;
        if (\$security->isGranted('campaign:campaigns:view')) {
            \$event->addCommands(
                'mautic.campaign.campaigns',
                \$this->campaignModel->getCommandList()
            );
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/EventListener/SearchSubscriber.php";
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
        return new Source("", "@bundles/CampaignBundle/EventListener/SearchSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/EventListener/SearchSubscriber.php");
    }
}
