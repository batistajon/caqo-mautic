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

/* @bundles/PageBundle/Views/SubscribedEvents/AbTest/bargraph.html.php */
class __TwigTemplate_d91c17d8f391750ae1d5c4c93bdeba9c9bc8d2f4dedc043e5146243a56d12259 extends Template
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
\$support = \$results['support'];
\$label   = \$view['translator']->trans(\$variants['criteria'][\$results['basedOn']]['label']);
\$chart   = new \\Mautic\\CoreBundle\\Helper\\Chart\\BarChart(\$support['labels']);

if (\$support['data']) {
    foreach (\$support['data'] as \$datasetLabel => \$values) {
        \$chart->setDataset(\$datasetLabel, \$values);
    }
}

?>

<div class=\"panel ovf-h bg-auto bg-light-xs abtest-bar-chart\">
    <div class=\"panel-body box-layout\">
        <div class=\"col-xs-8 va-m\">
            <h5 class=\"text-white dark-md fw-sb mb-xs\">
                <?php echo \$label; ?>
            </h5>
        </div>
        <div class=\"col-xs-4 va-t text-right\">
            <h3 class=\"text-white dark-sm\"><span class=\"fa fa-bar-chart\"></span></h3>
        </div>
    </div>
    <?php echo \$view->render(
        'MauticCoreBundle:Helper:chart.html.php',
        ['chartData' => \$chart->render(), 'chartType' => 'bar', 'chartHeight' => 300]
    ); ?>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Views/SubscribedEvents/AbTest/bargraph.html.php";
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
        return new Source("", "@bundles/PageBundle/Views/SubscribedEvents/AbTest/bargraph.html.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Views/SubscribedEvents/AbTest/bargraph.html.php");
    }
}
