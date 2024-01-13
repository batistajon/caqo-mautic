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

/* @bundles/StageBundle/EventListener/SearchSubscriber.php */
class __TwigTemplate_d11d0c466217416dcad5f036eade5be45fa27bf870fd7368d4fbd20bf5bc9f85 extends Template
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

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event as MauticEvents;
use Mautic\\CoreBundle\\Helper\\TemplatingHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\StageBundle\\Model\\StageModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class SearchSubscriber implements EventSubscriberInterface
{
    /**
     * @var StageModel
     */
    private \$stageModel;

    /**
     * @var CorePermissions
     */
    private \$security;

    /**
     * @var TemplatingHelper
     */
    private \$templating;

    public function __construct(
        StageModel \$stageModel,
        CorePermissions \$security,
        TemplatingHelper \$templating
    ) {
        \$this->stageModel = \$stageModel;
        \$this->security   = \$security;
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
        if (\$this->security->isGranted('stage:stages:view')) {
            \$str = \$event->getSearchString();
            if (empty(\$str)) {
                return;
            }

            \$items = \$this->stageModel->getEntities(
                [
                    'limit'  => 5,
                    'filter' => \$str,
                ]);
            \$stageCount = count(\$items);
            if (\$stageCount > 0) {
                \$stagesResults = [];
                \$canEdit       = \$this->security->isGranted('stage:stages:edit');
                foreach (\$items as \$item) {
                    \$stagesResults[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticStageBundle:SubscribedEvents\\Search:global.html.php',
                        [
                            'item'    => \$item,
                            'canEdit' => \$canEdit,
                        ]
                    )->getContent();
                }
                if (\$stageCount > 5) {
                    \$stagesResults[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticStageBundle:SubscribedEvents\\Search:global.html.php',
                        [
                            'showMore'     => true,
                            'searchString' => \$str,
                            'remaining'    => (\$stageCount - 5),
                        ]
                    )->getContent();
                }
                \$stagesResults['count'] = \$stageCount;
                \$event->addResults('mautic.stage.actions.header.index', \$stagesResults);
            }
        }
    }

    public function onBuildCommandList(MauticEvents\\CommandListEvent \$event)
    {
        if (\$this->security->isGranted('stage:stages:view')) {
            \$event->addCommands(
                'mautic.stage.actions.header.index',
                \$this->stageModel->getCommandList()
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
        return "@bundles/StageBundle/EventListener/SearchSubscriber.php";
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
        return new Source("", "@bundles/StageBundle/EventListener/SearchSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/StageBundle/EventListener/SearchSubscriber.php");
    }
}
