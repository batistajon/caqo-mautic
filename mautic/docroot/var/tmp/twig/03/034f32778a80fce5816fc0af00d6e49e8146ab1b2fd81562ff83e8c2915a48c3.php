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

/* @bundles/DashboardBundle/Views/Dashboard/import.html.php */
class __TwigTemplate_6c5fb50f0486b7c78d182ec0559d65d2d12871813cd6ae6ca360e30d9ddb5cc6 extends Template
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
\$view->extend('MauticCoreBundle:Default:content.html.php');
\$view['slots']->set('mauticContent', 'dashboardImport');
\$view['slots']->set('headerTitle', \$view['translator']->trans('mautic.dashboard.import'));
?>

<div class=\"row\">
<?php if (\$dashboards) : ?>
    <div class=\"col-sm-6\">
        <div class=\"ml-sm mt-sm pa-sm\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <div class=\"panel-title\"><?php echo \$view['translator']->trans('mautic.dashboard.predefined'); ?></div>
                </div>
                <div class=\"panel-body\">
                    <div class=\"list-group\">
                        <?php foreach (\$dashboards as \$dashboard => \$config) : ?>
                            <div class=\"list-group-item mt-md <?php echo (\$dashboard == \$preview) ? 'active' : ''; ?>\">
                                <h4 class=\"list-group-item-heading\"><?php echo \$view->escape(\$config['name']); ?></h4>
                                <?php if (!empty(\$config['description'])):?>
                                <p class=\"small\"><?php echo \$view->escape(\$config['description']); ?></p>
                                <?php endif; ?>
                                <p class=\"list-group-item-text\">
                                    <a href=\"<?php echo \$view['router']->path('mautic_dashboard_action', ['objectAction' => 'import', 'preview' => \$dashboard]); ?>\">
                                        <?php echo \$view['translator']->trans('mautic.dashboard.preview'); ?>
                                    </a>&#183;
                                    <a href=\"<?php echo \$view['router']->path('mautic_dashboard_action', ['objectAction' => 'applyDashboardFile', 'file' => \"{\$config['type']}.{\$dashboard}\"]); ?>\">
                                        <?php echo \$view['translator']->trans('mautic.core.form.apply'); ?>
                                    </a><?php if ('user' == \$config['type']): ?>&#183;
                                    <a href=\"<?php echo \$view['router']->path('mautic_dashboard_action', ['objectAction' => 'deleteDashboardFile', 'file' => \"{\$config['type']}.{\$dashboard}\"]); ?>\" data-toggle=\"confirmation\" data-message=\"<?php echo \$view['translator']->trans('mautic.dashboard.delete_layout'); ?>\" data-confirm-text=\"<?php echo \$view->escape(\$view['translator']->trans('mautic.core.form.delete')); ?>\" data-confirm-callback=\"executeAction\" data-cancel-text=\"<?php echo \$view->escape(\$view['translator']->trans('mautic.core.form.cancel')); ?>\">
                                        <?php echo \$view['translator']->trans('mautic.core.form.delete'); ?>
                                    </a><?php endif; ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
    <div class=\"col-sm-6\">
        <div class=\"mr-sm mt-sm pa-sm\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <div class=\"panel-title\"><?php echo \$view['translator']->trans('mautic.dashboard.import.start.instructions'); ?></div>
                </div>
                <div class=\"panel-body\">
                    <?php echo \$view['form']->start(\$form); ?>
                    <div class=\"input-group well mt-lg\">
                        <?php echo \$view['form']->widget(\$form['file']); ?>
                        <span class=\"input-group-btn\">
                            <?php echo \$view['form']->widget(\$form['start']); ?>
                        </span>
                    </div>
                    <?php echo \$view['form']->end(\$form); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if (!empty(\$widgets)) : ?>
    <div class=\"col-md-12\">
        <h2><?php echo \$view['translator']->trans('mautic.dashboard.widgets.preview'); ?></h2>
    </div>
    <div id=\"dashboard-widgets\" class=\"dashboard-widgets cards\">
        <?php if (\$widgets): ?>
            <?php foreach (\$widgets as \$widget): ?>
                <div class=\"card-flex widget\" data-widget-id=\"<?php echo \$widget->getId(); ?>\" style=\"width: <?php echo \$widget->getHeight() ? \$widget->getWidth().'' : '100'; ?>%; height: <?php echo \$widget->getHeight() ? \$widget->getHeight().'px' : '300px'; ?>\">
                    <?php echo \$view->render('MauticDashboardBundle:Widget:detail.html.php', ['widget' => \$widget]); ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/Views/Dashboard/import.html.php";
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
        return new Source("", "@bundles/DashboardBundle/Views/Dashboard/import.html.php", "/var/www/html/mautic/docroot/app/bundles/DashboardBundle/Views/Dashboard/import.html.php");
    }
}
