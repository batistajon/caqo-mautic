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

/* @bundles/StageBundle/Views/Stage/list.html.php */
class __TwigTemplate_4cfac930ddd197d92da79b70379448d3277357d3a4164c28f6a59b3fac192e2e extends Template
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

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
if ('index' == \$tmpl) {
    \$view->extend('MauticStageBundle:Stage:index.html.php');
}
?>

<?php if (count(\$items)): ?>
    <div class=\"table-responsive page-list\">
        <table class=\"table table-hover table-striped table-bordered stage-list\" id=\"stageTable\">
            <thead>
            <tr>
                <?php
                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'checkall'        => 'true',
                        'target'          => '#stageTable',
                        'routeBase'       => 'stage',
                        'templateButtons' => [
                            'delete' => \$permissions['stage:stages:delete'],
                        ],
                    ]
                );

                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'sessionVar' => 'stage',
                        'orderBy'    => 's.name',
                        'text'       => 'mautic.core.name',
                        'class'      => 'col-stage-name',
                        'default'    => true,
                    ]
                );

                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'sessionVar' => 'stage',
                        'orderBy'    => 'c.title',
                        'text'       => 'mautic.core.category',
                        'class'      => 'visible-md visible-lg col-stage-category',
                    ]
                );

                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'sessionVar' => 'stage',
                        'orderBy'    => 's.id',
                        'text'       => 'mautic.core.id',
                        'class'      => 'visible-md visible-lg col-stage-id',
                    ]
                );
                ?>
            </tr>
            </thead>
            <tbody>
            <?php foreach (\$items as \$item): ?>
                <tr>
                    <td>
                        <?php
                        echo \$view->render(
                            'MauticCoreBundle:Helper:list_actions.html.php',
                            [
                                'item'            => \$item,
                                'templateButtons' => [
                                    'edit'   => \$permissions['stage:stages:edit'],
                                    'clone'  => \$permissions['stage:stages:create'],
                                    'delete' => \$permissions['stage:stages:delete'],
                                ],
                                'routeBase' => 'stage',
                            ]
                        );
                        ?>
                    </td>
                    <td>
                        <div>

                            <?php echo \$view->render(
                                'MauticCoreBundle:Helper:publishstatus_icon.html.php',
                                ['item' => \$item, 'model' => 'stage']
                            ); ?>
                            <?php if (\$permissions['stage:stages:edit']): ?>
                            <a href=\"<?php echo \$view['router']->url(
                                'mautic_stage_action',
                                ['objectAction' => 'edit', 'objectId' => \$item->getId()]
                            ); ?>\" data-toggle=\"ajax\">
                                <?php echo \$item->getName(); ?>
                            </a>
                            <?php else: ?>
                                <?php echo \$item->getName(); ?>
                            <?php endif; ?>
                        </div>
                        <?php if (\$description = \$item->getDescription()): ?>
                            <div class=\"text-muted mt-4\">
                                <small><?php echo \$description; ?></small>
                            </div>
                        <?php endif; ?>
                    </td>
                    <td class=\"visible-md visible-lg\">
                        <?php \$category = \$item->getCategory(); ?>
                        <?php \$catName  = (\$category)
                            ? \$category->getTitle()
                            : \$view['translator']->trans(
                                'mautic.core.form.uncategorized'
                            ); ?>
                        <?php \$color = (\$category) ? '#'.\$category->getColor() : 'inherit'; ?>
                        <span style=\"white-space: nowrap;\"><span class=\"label label-default pa-4\"
                                                                 style=\"border: 1px solid #d5d5d5; background: <?php echo \$color; ?>;\"> </span> <span><?php echo \$catName; ?></span></span>
                    </td>
                    <td class=\"visible-md visible-lg\"><?php echo \$item->getId(); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">
        <?php echo \$view->render(
            'MauticCoreBundle:Helper:pagination.html.php',
            [
                'totalItems' => count(\$items),
                'page'       => \$page,
                'limit'      => \$limit,
                'menuLinkId' => 'mautic_stage_index',
                'baseUrl'    => \$view['router']->url('mautic_stage_index'),
                'sessionVar' => 'stage',
            ]
        ); ?>
    </div>
<?php else: ?>
    <?php echo \$view->render(
        'MauticCoreBundle:Helper:noresults.html.php',
        ['tip' => 'mautic.stage.action.noresults.tip']
    ); ?>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StageBundle/Views/Stage/list.html.php";
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
        return new Source("", "@bundles/StageBundle/Views/Stage/list.html.php", "/var/www/html/mautic/docroot/app/bundles/StageBundle/Views/Stage/list.html.php");
    }
}
