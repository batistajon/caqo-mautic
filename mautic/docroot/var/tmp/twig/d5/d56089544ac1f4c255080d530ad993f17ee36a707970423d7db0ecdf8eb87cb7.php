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

/* @bundles/MarketplaceBundle/Views/Package/index.html.php */
class __TwigTemplate_95af2016dac7f6e955cb2f77fbe909f776b6d663e484c1f67f974645c8e6f2ef extends Template
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
        echo "<?php declare(strict_types=1);

use Mautic\\MarketplaceBundle\\Service\\RouteProvider;

\$view->extend('MauticCoreBundle:Default:content.html.php');

\$view['slots']->set('mauticContent', 'Package');
\$view['slots']->set('headerTitle', \$view['translator']->trans('marketplace.title'));
\$view['slots']->set('actions', \$view->render('MauticCoreBundle:Helper:page_actions.html.php', [
    'customButtons' => [
        [
            'attr' => [
                'class'       => 'btn btn-default btn-nospin',
                'data-toggle' => 'ajax',
                'href'        => \$view['router']->path(RouteProvider::ROUTE_CLEAR_CACHE),
            ],
            'iconClass' => 'fa fa-trash',
            'btnText'   => 'marketplace.clear.cache',
            'tooltip'   => 'marketplace.clear.cache.tooltip',
        ],
    ],
]));

if (true === \$isComposerEnabled):
?>
<div class=\"alert alert-info\" role=\"alert\">
    <?php echo \$view['translator']->trans('marketplace.beta.warning'); ?>
</div>
<?php else: ?>
<div class=\"alert alert-warning\" role=\"alert\">
    <?php echo \$view['translator']->trans('marketplace.composer.required'); ?>
</div>
<?php endif; ?>
<div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
    <?php echo \$view->render(
        'MauticCoreBundle:Helper:list_toolbar.html.php',
        [
            'searchValue' => \$searchValue,
            // 'action'      => \$currentRoute,
        ]
    ); ?>
    <div class=\"page-list\">
        <?php \$view['slots']->output('_content'); ?>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Views/Package/index.html.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Views/Package/index.html.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Views/Package/index.html.php");
    }
}
