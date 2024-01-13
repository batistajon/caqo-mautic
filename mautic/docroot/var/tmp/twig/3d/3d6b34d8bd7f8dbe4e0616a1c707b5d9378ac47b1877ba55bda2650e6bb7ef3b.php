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

/* @bundles/NotificationBundle/Views/MobileNotification/list_graph.html.php */
class __TwigTemplate_9640b813c13d13b79fe56d1e528f01c97ad809c2eef12811bc5c64ced63494e1 extends Template
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
<!--
some stats: need more input on what type of form data to show.
delete if it is not require
-->
<div class=\"pa-md\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <?php if (\$showVariants): ?>
            <div class=\"text-right small\">
                <span>
                    <?php if (\$isVariant): ?>
                    <span data-chart=\"variant\"><?php echo \$view['translator']->trans('mautic.notification.variant.graph.variant'); ?></span>
                    <?php else: ?>
                    <a data-chart=\"variant\" href=\"javascript:void(0)\"><?php echo \$view['translator']->trans('mautic.notification.variant.graph.variant'); ?></a>
                    <?php endif; ?>
                </span>
                </span> | </span>
                <span>
                    <?php if (\$isVariant): ?>
                    <a data-chart=\"all\" href=\"javascript:void(0)\"><?php echo \$view['translator']->trans('mautic.notification.variant.graph.all'); ?></a>
                    <?php else: ?>
                    <span data-chart=\"all\"><?php echo \$view['translator']->trans('mautic.notification.variant.graph.all'); ?></span>
                    <?php endif; ?>
                </span>
            </div>
            <?php endif; ?>
            <div class=\"panel\">
                <div class=\"panel-body box-layout\">
                    <div class=\"col-xs-4 va-m\">
                        <h5 class=\"text-white dark-md fw-sb mb-xs\">
                            <span class=\"fa fa-envelope\"></span>
                            <?php echo \$view['translator']->trans('mautic.notification.lead.list.comparison'); ?>
                        </h5>
                    </div>
                    <div class=\"col-xs-8 va-m\" id=\"legend\"></div>
                </div>
                <div class=\"pt-0 pl-15 pb-10 pr-15\">
                    <div>
                        <canvas id=\"list-compare-chart\" height=\"300\"></canvas>
                    </div>
                </div>
                <div id=\"list-compare-chart-data\" class=\"hide\"><?php echo json_encode(\$stats); ?></div>
            </div>
        </div>
    </div>
</div>
<!--/ some stats -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Views/MobileNotification/list_graph.html.php";
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
        return new Source("", "@bundles/NotificationBundle/Views/MobileNotification/list_graph.html.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Views/MobileNotification/list_graph.html.php");
    }
}
