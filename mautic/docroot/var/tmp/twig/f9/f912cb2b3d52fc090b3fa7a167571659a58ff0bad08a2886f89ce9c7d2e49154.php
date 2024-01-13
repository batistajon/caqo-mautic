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

/* @bundles/ReportBundle/Views/Graph/Line.html.php */
class __TwigTemplate_6a66b38735027f9f2005a4b2b2869b8302294139b2d3b03c9899e81a33578f85 extends Template
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
<div class=\"col-sm-12\">
    <div class=\"panel\">
        <div class=\"panel-body box-layout\">
            <div class=\"col-xs-8 va-m\">
                <h5 class=\"text-white dark-md fw-sb mb-xs\"><?php echo \$view['translator']->trans(\$graph['name']); ?></h5>
            </div>
            <div class=\"col-xs-4 va-t text-right\">
                <h3 class=\"text-white dark-sm\"><span class=\"fa fa-<?php echo isset(\$graph['iconClass']) ? \$graph['iconClass'] : ''; ?>\"></span></h3>
            </div>
        </div>

        <?php echo \$view->render('MauticCoreBundle:Helper:chart.html.php', ['chartData' => \$graph, 'chartType' => 'line', 'chartHeight' => 300]); ?>
    </div>
</div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Views/Graph/Line.html.php";
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
        return new Source("", "@bundles/ReportBundle/Views/Graph/Line.html.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Views/Graph/Line.html.php");
    }
}
