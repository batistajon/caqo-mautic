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

/* @bundles/ReportBundle/EventListener/SearchSubscriber.php */
class __TwigTemplate_a86cff226fea5cee0ab857b28942033f1fcae8456cc3c57e7b3d770decac7203 extends Template
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

namespace Mautic\\ReportBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event as MauticEvents;
use Mautic\\CoreBundle\\Helper\\TemplatingHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\ReportBundle\\Model\\ReportModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class SearchSubscriber implements EventSubscriberInterface
{
    /**
     * @var UserHelper
     */
    private \$userHelper;

    /**
     * @var ReportModel
     */
    private \$reportModel;

    /**
     * @var CorePermissions
     */
    private \$security;

    /**
     * @var TemplatingHelper
     */
    private \$templating;

    public function __construct(
        UserHelper \$userHelper,
        ReportModel \$reportModel,
        CorePermissions \$security,
        TemplatingHelper \$templating
    ) {
        \$this->userHelper  = \$userHelper;
        \$this->reportModel = \$reportModel;
        \$this->security    = \$security;
        \$this->templating  = \$templating;
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
            ['report:reports:viewown', 'report:reports:viewother'],
            'RETURN_ARRAY'
        );
        if (\$permissions['report:reports:viewown'] || \$permissions['report:reports:viewother']) {
            if (!\$permissions['report:reports:viewother']) {
                \$filter['force'][] = [
                    'column' => 'IDENTITY(r.createdBy)',
                    'expr'   => 'eq',
                    'value'  => \$this->userHelper->getUser()->getId(),
                ];
            }

            \$items = \$this->reportModel->getEntities(
                [
                    'limit'  => 5,
                    'filter' => \$filter,
                ]);

            \$count = count(\$items);
            if (\$count > 0) {
                \$results = [];

                foreach (\$items as \$item) {
                    \$results[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticReportBundle:SubscribedEvents\\Search:global.html.php',
                        ['item' => \$item]
                    )->getContent();
                }
                if (\$count > 5) {
                    \$results[] = \$this->templating->getTemplating()->renderResponse(
                        'MauticReportBundle:SubscribedEvents\\Search:global.html.php',
                        [
                            'showMore'     => true,
                            'searchString' => \$str,
                            'remaining'    => (\$count - 5),
                        ]
                    )->getContent();
                }
                \$results['count'] = \$count;
                \$event->addResults('mautic.report.reports', \$results);
            }
        }
    }

    public function onBuildCommandList(MauticEvents\\CommandListEvent \$event)
    {
        if (\$this->security->isGranted(['report:reports:viewown', 'report:reports:viewother'], 'MATCH_ONE')) {
            \$event->addCommands(
                'mautic.report.reports',
                \$this->reportModel->getCommandList()
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
        return "@bundles/ReportBundle/EventListener/SearchSubscriber.php";
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
        return new Source("", "@bundles/ReportBundle/EventListener/SearchSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/EventListener/SearchSubscriber.php");
    }
}