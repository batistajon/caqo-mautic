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

/* @bundles/DashboardBundle/Views/Widget/detail.html.php */
class __TwigTemplate_77a30a15e018ce3cbe814bc976b900757169fe507686ddc8f9ef19473e79391d extends Template
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
?>

<div class=\"card\" style=\"height: <?php echo \$widget->getHeight() ? (\$widget->getHeight() - 10).'px' : '300px'; ?>\">
    <div class=\"card-header\">
        <h4><?php echo \$view->escape(\$widget->getName()); ?></h4>
        <?php if (\$widget->getId()) : ?>
        <div class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fa fa-ellipsis-v\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-right\">
                <li>
                    <a  href=\"<?php echo \$view['router']->url('mautic_dashboard_action', ['objectAction' => 'edit', 'objectId' => \$widget->getId()]); ?>\"
                        data-toggle=\"ajaxmodal\"
                        data-target=\"#MauticSharedModal\"
                        data-header=\"<?php echo \$view['translator']->trans('mautic.dashboard.widget.header.edit'); ?>\">
                        <i class=\"fa fa-pencil\"></i> Edit
                    </a>
                </li>
                <li role=\"separator\" class=\"divider\"></li>
                <li  class=\"dropdown-header\">
                    <?php echo \$view['translator']->trans('mautic.dashboard.widget.load.time', ['%time%' => round(\$widget->getLoadTime() * 1000, 1)]); ?>
                </li>
                <li  class=\"dropdown-header\">
                    <?php if (\$widget->isCached()) : ?>
                    <?php echo \$view['translator']->trans('mautic.dashboard.widget.data.loaded.from.cache'); ?>
                    <?php else : ?>
                    <?php echo \$view['translator']->trans('mautic.dashboard.widget.data.loaded.from.database'); ?>
                    <?php endif; ?>
                </li>
                <li role=\"separator\" class=\"divider\"></li>
                <li>
                    <a  href=\"<?php echo \$view['router']->url('mautic_dashboard_action', ['objectAction' => 'delete', 'objectId' => \$widget->getId()]); ?>\"
                        data-header=\"<?php echo \$view['translator']->trans('mautic.dashboard.widget.header.delete'); ?>\"
                        class=\"remove-widget\">
                        <i class=\"fa fa-remove\"></i> Remove
                    </a>
                </li>
            </ul>
        </div>
        <?php endif; ?>
    </div>
    <div class=\"card-body\">
        <?php if (\$widget->getErrorMessage()) : ?>
            <div class=\"alert alert-danger\" role=\"alert\">
                <?php echo \$view['translator']->trans(\$widget->getErrorMessage()); ?>
            </div>
        <?php elseif (\$widget->getTemplate()) : ?>
            <?php echo \$view->render(\$widget->getTemplate(), \$widget->getTemplateData()); ?>
        <?php endif; ?>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/Views/Widget/detail.html.php";
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
        return new Source("", "@bundles/DashboardBundle/Views/Widget/detail.html.php", "/var/www/html/mautic/docroot/app/bundles/DashboardBundle/Views/Widget/detail.html.php");
    }
}
