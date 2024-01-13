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

/* @bundles/CoreBundle/Views/Helper/lifecycle.html.php */
class __TwigTemplate_99224b3fd2db09d8e0815b31ea84c3b491f968f5c35c0626f5bfdffc1efb6f47 extends Template
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


<?php

foreach (\$chartItems as \$key => \$chartData) :
    ?>
    <div style=\"float: left; width: <?php echo \$width; ?>%; \" class=\"pt-sd pr-md pb-md pl-md\">

<div class=\"chart-wrapper\" >
    <div >
        <div class=\"chart-legend pull-left-lg\"><h4><?php echo \$columnName[\$key]; ?></h4></div>
        <div class=\"clearfix\"></div>
        <div class=\"pull-left\"> <a href=\"<?php echo \$link[\$key]; ?>\">  <?php echo \$value[\$key]; ?> Contacts</div></a>
        <div class=\"clearfix\"></div>
        <div style=\"height:<?php echo \$chartHeight / 2.3; ?>px;\">

            <canvas class=\"chart <?php echo \$chartType; ?>-chart\"
                    style=\"font-size: 9px!important;\"><?php echo json_encode(\$chartData); ?></canvas>

        </div>
        <div class=\"legend\" style=\"font-size: 9px;\"></div>
    </div>
</div>
    <?php if (\$stages[\$key]) : ?>
        <div class=\"chart-wrapper\">
                <div>
                    <div class=\"chart-legend pt-sd pr-md pb-md pl-md\"><h5><?php echo \$view['translator']->trans('mautic.lead.lifecycle.graph.stage.cycle'); ?></h5></div>
                    <div class=\"clearfix\"></div>
                    <div style=\"height:<?php echo \$chartHeight / 2.3; ?>px;\">
                     <canvas class=\"chart liefechart-bar-chart\" style=\"font-size: 9px!important;\"><?php echo json_encode(\$stages[\$key]); ?></canvas>
                    </div>
                    <div class=\"legend\" style=\"font-size: 9px;\"></div>
                </div>
        </div>
    <?php endif; ?>
        <?php if (\$devices[\$key]) : ?>
            <div class=\"chart-wrapper\">
                <div>
                    <div class=\"chart-legend pt-sd pr-md pb-md pl-md\"><h5><?php echo \$view['translator']->trans('mautic.lead.lifecycle.graph.device.granularity'); ?></h5></div>
                    <div class=\"clearfix\"></div>
                    <div style=\"height:<?php echo \$chartHeight / 5; ?>px;\">
                        <canvas class=\"chart horizontal-bar-chart\" style=\"font-size: 9px!important;\"><?php echo json_encode(\$devices[\$key]); ?></canvas>
                    </div>
                    <div class=\"legend\" style=\"font-size: 9px;\"></div>
                </div>
            </div>
        <?php endif; ?>
    </div>

<?php endforeach; ?>
<div class=\"clearfix\"></div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Helper/lifecycle.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Helper/lifecycle.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Helper/lifecycle.html.php");
    }
}
