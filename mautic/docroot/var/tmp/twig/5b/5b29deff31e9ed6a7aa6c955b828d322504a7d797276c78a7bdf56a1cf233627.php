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

/* @bundles/MarketplaceBundle/Views/Package/list.html.php */
class __TwigTemplate_f90d48d128b147b5c22c5fc65b388ca11cde3301b999b8e285e90fcec4f97557 extends Template
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

declare(strict_types=1);

use Mautic\\MarketplaceBundle\\Collection\\PackageCollection;
use Mautic\\MarketplaceBundle\\Service\\RouteProvider;

if ('index' === \$tmpl) {
    \$view->extend('MarketplaceBundle:Package:index.html.php');
}

\$buttons = [];
/** @var bool \$isComposerEnabled */
\$isComposerEnabled = \$isComposerEnabled;
?>
<?php if (count(\$items)): ?>
    <div class=\"table-responsive\">
        <table class=\"table table-hover table-striped table-bordered\" id=\"marketplace-packages-table\">
            <thead>
            <tr>
                <?php
                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'checkall'  => 'true',
                        'target'    => '#packages-table',
                        'langVar'   => 'marketplace.package',
                        'routeBase' => 'marketplace',
                    ]
                );

                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'text'       => 'mautic.core.name',
                    ]
                );

                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'text'       => 'marketplace.vendor',
                    ]
                );

                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'text'       => 'marketplace.downloads',
                    ]
                );

                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'text'       => 'marketplace.favers',
                    ]
                );
                ?>
            </tr>
            </thead>
            <tbody>
            <?php /** @var PackageCollection \$items */ ?>
            <?php foreach (\$items as \$item): ?>
                <tr>
                    <td>
                        <?php echo \$view->render(
                            'MauticCoreBundle:Helper:list_actions.html.php',
                            [
                                'item'            => \$item,
                                'customButtons'   => \$buttons,
                            ]
                        ); ?>
                    </td>
                    <td class=\"package-name\">
                        <div>
                            <a data-toggle=\"ajax\" href=\"<?php echo \$view['router']->path(
                                    RouteProvider::ROUTE_DETAIL,
                                    [
                                        'vendor'  => \$view->escape(\$item->getVendorName()),
                                        'package' => \$view->escape(\$item->getPackageName()),
                                    ]
                                ); ?>\">
                                <?php echo \$view->escape(\$item->getHumanPackageName()); ?>
                            </a>
                        </div>
                        <?php if (\$item->description): ?>
                            <div class=\"text-muted mt-4\">
                                <small><?php echo \$view->escape(\$item->description); ?></small>
                            </div>
                        <?php endif; ?>
                    </td>
                    <td class=\"vendor-name\"><?php echo \$view->escape(\$item->getVendorName()); ?></td>
                    <td class=\"downloads\"><?php echo \$view->escape(\$item->downloads); ?></td>
                    <td class=\"favers\"><?php echo \$view->escape(\$item->favers); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">
        <?php
        echo \$view->render(
            'MauticCoreBundle:Helper:pagination.html.php',
            [
                'totalItems' => \$count,
                'page'       => \$page,
                'limit'      => \$limit,
                'baseUrl'    => \$view['router']->path(RouteProvider::ROUTE_LIST),
                'sessionVar' => 'marketplace.package',
                'routeBase'  => RouteProvider::ROUTE_LIST,
            ]
        );
        ?>
    </div>
<?php else: ?>
    <?php echo \$view->render('MauticCoreBundle:Helper:noresults.html.php', ['message' => 'marketplace.noresults.tip']); ?>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Views/Package/list.html.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Views/Package/list.html.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Views/Package/list.html.php");
    }
}
