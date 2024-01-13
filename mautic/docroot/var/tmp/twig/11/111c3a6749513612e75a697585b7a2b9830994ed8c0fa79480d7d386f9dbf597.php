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

/* @bundles/FormBundle/Views/SubscribedEvents/AbTest/submissions.html.php */
class __TwigTemplate_51b3417dcfe64168cadaa53fb3489f6d4c87ceff21261a76b7139e671b616cde extends Template
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
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <canvas id=\"abtest-bar-chart\" height=\"300\"></canvas>
        </div>
    </div>
</div>

<script>
    mQuery(document).ready(function() {
        mQuery('#abStatsModal').on('shown.bs.modal', function (event) {
            var canvas = document.getElementById(\"abtest-bar-chart\");
            var barData = mQuery.parseJSON('<?php echo str_replace('\\'', '\\\\\\'', json_encode(\$chart->render())); ?>');
            var barGraph = new Chart(canvas, {type: 'bar', data: barData});
        });
    });
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Views/SubscribedEvents/AbTest/submissions.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/SubscribedEvents/AbTest/submissions.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/SubscribedEvents/AbTest/submissions.html.php");
    }
}
