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

/* @bundles/CoreBundle/Views/Helper/chart.html.php */
class __TwigTemplate_1516588dc803776a1226a6267dfda7e11c3d7e584fb32f32af49cfe262ee4233 extends Template
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
<div class=\"chart-wrapper\">
    <div class=\"pt-sd pr-md pb-md pl-md\">
        <div style=\"height:<?php echo \$chartHeight; ?>px\">
            <canvas class=\"chart <?php echo \$chartType; ?>-chart\" <?php echo isset(\$disableLegend) ? 'data-disable-legend' : ''; ?>>
                <?php echo json_encode(\$chartData); ?>
            </canvas>
        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Helper/chart.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Helper/chart.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Helper/chart.html.php");
    }
}
