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

/* @bundles/AssetBundle/EventListener/SearchSubscriber.php */
class __TwigTemplate_6f4135d911c4f521540b67d8e459dcfcd5ef393cad3f2fb3e5987d0bb6d8e91b extends Template
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

namespace Mautic\\AssetBundle\\EventListener;

use Mautic\\AssetBundle\\Model\\AssetModel;
use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event as MauticEvents;
use Mautic\\CoreBundle\\Helper\\TemplatingHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class SearchSubscriber implements EventSubscriberInterface
{
    /**
     * @var AssetModel
     */
    private \$assetModel;

    /**
     * @var CorePermissions
     */
    private \$security;

    /**
     * @var UserHelper
     */
    private \$userHelper;

    /**
     * @var TemplatingHelper
     */
    private \$templating;

    public function __construct(AssetModel \$assetModel, CorePermissions \$security, UserHelper \$userHelper, TemplatingHelper \$templating)
    {
        \$this->assetModel = \$assetModel;
        \$this->security   = \$security;
        \$this->userHelper = \$userHelper;
        \$this->templating = \$templating;
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
        \$str = \$event->getSearchString();
        if (empty(\$str)) {
            return;
        }

        \$filter = ['string' => \$str, 'force' => []];

        \$permissions = \$this->security->isGranted(
            ['asset:assets:viewown', 'asset:assets:viewother'],
            'RETURN_ARRAY'
        );
        if (\$permissions['asset:assets:viewown'] || \$permissions['asset:assets:viewother']) {
            if (!\$permissions['asset:assets:viewother']) {
                \$filter['force'][] = [
                    'column' => 'IDENTITY(a.createdBy)',
                    'expr'   => 'eq',
                    'value'  => \$this->userHelper->getUser()->getId(),
                ];
            }

            \$assets = \$this->assetModel->getEntities(
                [
                    'limit'  => 5,
                    'filter' => \$filter,
                ]);

            if (count(\$assets) > 0) {
                \$assetResults = [];

                foreach (\$assets as \$asset) {
                    \$assetResults[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticAssetBundle:SubscribedEvents\\Search:global.html.php',
                        ['asset' => \$asset]
                    )->getContent();
                }
                if (count(\$assets) > 5) {
                    \$assetResults[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticAssetBundle:SubscribedEvents\\Search:global.html.php',
                        [
                            'showMore'     => true,
                            'searchString' => \$str,
                            'remaining'    => (count(\$assets) - 5),
                        ]
                    )->getContent();
                }
                \$assetResults['count'] = count(\$assets);
                \$event->addResults('mautic.asset.assets', \$assetResults);
            }
        }
    }

    public function onBuildCommandList(MauticEvents\\CommandListEvent \$event)
    {
        if (\$this->security->isGranted(['asset:assets:viewown', 'asset:assets:viewother'], 'MATCH_ONE')) {
            \$event->addCommands(
                'mautic.asset.assets',
                \$this->assetModel->getCommandList()
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
        return "@bundles/AssetBundle/EventListener/SearchSubscriber.php";
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
        return new Source("", "@bundles/AssetBundle/EventListener/SearchSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/EventListener/SearchSubscriber.php");
    }
}
