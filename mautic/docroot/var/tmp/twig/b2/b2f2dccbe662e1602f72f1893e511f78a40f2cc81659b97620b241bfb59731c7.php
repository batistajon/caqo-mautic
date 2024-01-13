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

/* @bundles/NotificationBundle/Views/MobileNotification/template_graph.html.php */
class __TwigTemplate_8f34e4f7c3f100fc0c0d251477d89320f5fd22bb362aa9026d153f38509f4c9b extends Template
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
            <div class=\"panel\">
                <div class=\"panel-body box-layout\">
                    <div class=\"col-xs-4 va-m\">
                        <h5 class=\"text-white dark-md fw-sb mb-xs\">
                            <span class=\"fa fa-envelope\"></span>
                            <?php echo \$view['translator']->trans('mautic.notification.stats'); ?>
                        </h5>
                    </div>
                    <div class=\"col-xs-6 va-m\" id=\"legend\"></div>
                    <div class=\"col-xs-2 va-m\">
                        <?php echo \$view->render('MauticCoreBundle:Helper:graph_dateselect.html.php', ['callback' => 'updateNotificationStatsChart']); ?>

                    </div>
                </div>
                <div class=\"pt-0 pl-15 pb-10 pr-15\">
                    <div>
                        <canvas id=\"stat-chart\" height=\"300\"></canvas>
                    </div>
                </div>
                <div id=\"stat-chart-data\" class=\"hide\"><?php echo json_encode(\$stats); ?></div>
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
        return "@bundles/NotificationBundle/Views/MobileNotification/template_graph.html.php";
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
        return new Source("", "@bundles/NotificationBundle/Views/MobileNotification/template_graph.html.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Views/MobileNotification/template_graph.html.php");
    }
}
