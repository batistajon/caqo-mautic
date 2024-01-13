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

/* @bundles/PointBundle/EventListener/SearchSubscriber.php */
class __TwigTemplate_4a8f388b9a7979a34840e267d46faca2e6f175f49c6349be9675169a0284ccf0 extends Template
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

namespace Mautic\\PointBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event as MauticEvents;
use Mautic\\CoreBundle\\Helper\\TemplatingHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\PointBundle\\Model\\PointModel;
use Mautic\\PointBundle\\Model\\TriggerModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class SearchSubscriber implements EventSubscriberInterface
{
    /**
     * @var PointModel
     */
    private \$pointModel;

    /**
     * @var TriggerModel
     */
    private \$pointTriggerModel;

    /**
     * @var CorePermissions
     */
    private \$security;

    /**
     * @var TemplatingHelper
     */
    private \$templating;

    public function __construct(
        PointModel \$pointModel,
        TriggerModel \$pointTriggerModel,
        CorePermissions \$security,
        TemplatingHelper \$templating
    ) {
        \$this->pointModel        = \$pointModel;
        \$this->pointTriggerModel = \$pointTriggerModel;
        \$this->security          = \$security;
        \$this->templating        = \$templating;
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
        if (\$this->security->isGranted('point:points:view')) {
            \$str = \$event->getSearchString();
            if (empty(\$str)) {
                return;
            }

            \$items = \$this->pointModel->getEntities(
                [
                    'limit'  => 5,
                    'filter' => \$str,
                ]);
            \$pointCount = count(\$items);
            if (\$pointCount > 0) {
                \$pointsResults = [];
                \$canEdit       = \$this->security->isGranted('point:points:edit');
                foreach (\$items as \$item) {
                    \$pointsResults[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticPointBundle:SubscribedEvents\\Search:global_point.html.php',
                        [
                            'item'    => \$item,
                            'canEdit' => \$canEdit,
                        ]
                    )->getContent();
                }
                if (\$pointCount > 5) {
                    \$pointsResults[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticPointBundle:SubscribedEvents\\Search:global_point.html.php',
                        [
                            'showMore'     => true,
                            'searchString' => \$str,
                            'remaining'    => (\$pointCount - 5),
                        ]
                    )->getContent();
                }
                \$pointsResults['count'] = \$pointCount;
                \$event->addResults('mautic.point.actions.header.index', \$pointsResults);
            }
        }

        if (\$this->security->isGranted('point:triggers:view')) {
            \$str = \$event->getSearchString();
            if (empty(\$str)) {
                return;
            }

            \$items = \$this->pointTriggerModel->getEntities(
                [
                    'limit'  => 5,
                    'filter' => \$str,
                ]);
            \$count = count(\$items);
            if (\$count > 0) {
                \$results = [];
                \$canEdit = \$this->security->isGranted('point:triggers:edit');
                foreach (\$items as \$item) {
                    \$results[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticPointBundle:SubscribedEvents\\Search:global_trigger.html.php',
                        [
                            'item'    => \$item,
                            'canEdit' => \$canEdit,
                        ]
                    )->getContent();
                }
                if (\$count > 5) {
                    \$results[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticPointBundle:SubscribedEvents\\Search:global_trigger.html.php',
                        [
                            'showMore'     => true,
                            'searchString' => \$str,
                            'remaining'    => (\$count - 5),
                        ]
                    )->getContent();
                }
                \$results['count'] = \$count;
                \$event->addResults('mautic.point.trigger.header.index', \$results);
            }
        }
    }

    public function onBuildCommandList(MauticEvents\\CommandListEvent \$event)
    {
        \$security = \$this->security;
        if (\$security->isGranted('point:points:view')) {
            \$event->addCommands(
                'mautic.point.actions.header.index',
                \$this->pointModel->getCommandList()
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
        return "@bundles/PointBundle/EventListener/SearchSubscriber.php";
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
        return new Source("", "@bundles/PointBundle/EventListener/SearchSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/PointBundle/EventListener/SearchSubscriber.php");
    }
}
