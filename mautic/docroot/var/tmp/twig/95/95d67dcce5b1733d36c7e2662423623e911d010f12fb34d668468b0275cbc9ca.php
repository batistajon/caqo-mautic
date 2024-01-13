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

/* @bundles/ApiBundle/EventListener/SearchSubscriber.php */
class __TwigTemplate_bf76abc583cb1ac40a8bf8ca7cf8756cbd1c06ffc63b3208777fee58208eec79 extends Template
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

namespace Mautic\\ApiBundle\\EventListener;

use Mautic\\ApiBundle\\Model\\ClientModel;
use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event as MauticEvents;
use Mautic\\CoreBundle\\Helper\\TemplatingHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class SearchSubscriber implements EventSubscriberInterface
{
    /**
     * @var ClientModel
     */
    private \$apiClientModel;

    /**
     * @var CorePermissions
     */
    private \$security;

    /**
     * @var TemplatingHelper
     */
    private \$templating;

    public function __construct(ClientModel \$apiClientModel, CorePermissions \$security, TemplatingHelper \$templating)
    {
        \$this->apiClientModel = \$apiClientModel;
        \$this->security       = \$security;
        \$this->templating     = \$templating;
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
        if (\$this->security->isGranted('api:clients:view')) {
            \$str = \$event->getSearchString();
            if (empty(\$str)) {
                return;
            }

            \$clients = \$this->apiClientModel->getEntities(
                [
                    'limit'  => 5,
                    'filter' => \$str,
                ]);

            if (count(\$clients) > 0) {
                \$clientResults = [];
                \$canEdit       = \$this->security->isGranted('api:clients:edit');
                foreach (\$clients as \$client) {
                    \$clientResults[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticApiBundle:SubscribedEvents\\Search:global.html.php',
                        [
                            'client'  => \$client,
                            'canEdit' => \$canEdit,
                        ]
                    )->getContent();
                }
                if (count(\$clients) > 5) {
                    \$clientResults[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticApiBundle:SubscribedEvents\\Search:global.html.php',
                        [
                            'showMore'     => true,
                            'searchString' => \$str,
                            'remaining'    => (count(\$clients) - 5),
                        ]
                    )->getContent();
                }
                \$clientResults['count'] = count(\$clients);
                \$event->addResults('mautic.api.client.menu.index', \$clientResults);
            }
        }
    }

    public function onBuildCommandList(MauticEvents\\CommandListEvent \$event)
    {
        if (\$this->security->isGranted('api:clients:view')) {
            \$event->addCommands(
                'mautic.api.client.header.index',
                \$this->apiClientModel->getCommandList()
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
        return "@bundles/ApiBundle/EventListener/SearchSubscriber.php";
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
        return new Source("", "@bundles/ApiBundle/EventListener/SearchSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/EventListener/SearchSubscriber.php");
    }
}
