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

/* @bundles/ReportBundle/Views/SubscribedEvents/Dashboard/widget.html.php */
class __TwigTemplate_2acf2792c2030026461db34a91612470be5d407c1a3621925c95818939f74635 extends Template
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
 * @copyright   2016 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
if (isset(\$chartData['data']) and isset(\$chartType)) :
    \$chartData = \$chartData['data'];

if ('table' === \$chartType) {
    echo \$view->render(
        'MauticCoreBundle:Helper:table.html.php',
        [
            'headItems' => isset(\$chartData[0]) ? array_keys(\$chartData[0]) : [],
            'bodyItems' => \$chartData,
        ]
    );
} else {
    echo \$view->render(
        'MauticCoreBundle:Helper:chart.html.php',
        [
            'chartData'   => \$chartData,
            'chartType'   => \$chartType,
            'chartHeight' => \$chartHeight,
        ]
    );
}

if (is_array(\$dateFrom)) {
    // Using cached data
    \$dateFrom = new \\DateTime(\$dateFrom['date'], new \\DateTimeZone(\$dateFrom['timezone']));
    \$dateTo   = new \\DateTime(\$dateTo['date'], new \\DateTimeZone(\$dateTo['timezone']));
}

?>

<div class=\"pull-right mr-md mb-md\">
    <a href=\"<?php echo \$view['router']->path('mautic_report_action', ['objectId' => \$reportId, 'objectAction' => 'view', 'daterange' => ['date_to' => \$dateTo->format('Y-m-d H:i:s'), 'date_from' => \$dateFrom->format('Y-m-d H:i:s')]]); ?>\">
        <span class=\"label label-success\"><?php echo \$view['translator']->trans('mautic.report.dashboard.widgets.full_report'); ?></span>
    </a>
</div>
<div class=\"clearfix\"></div>
<?php else : ?>
    <div class=\"ml-20 mr-20 mt-lg px-2 alert alert-danger\" role=\"alert\">
        <a href=\"#\" class=\"alert-link\"><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> <?php echo \$view['translator']->trans('mautic.report.dashboard.widgets.no_report_found'); ?>
    </div>
    <div class=\"clearfix\"></div>
<?php endif; ?>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Views/SubscribedEvents/Dashboard/widget.html.php";
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
        return new Source("", "@bundles/ReportBundle/Views/SubscribedEvents/Dashboard/widget.html.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Views/SubscribedEvents/Dashboard/widget.html.php");
    }
}
