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

/* @bundles/EmailBundle/Views/Email/template_graph.html.php */
class __TwigTemplate_740c2a2cde7588ecb1388e2a680169ec044fdad634f35cb742d45434fa76d12b extends Template
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
                    <span data-chart=\"variant\"><?php echo \$view['translator']->trans('mautic.email.variant.graph.variant'); ?></span>
                    <?php else: ?>
                    <a data-chart=\"variant\" href=\"javascript:void(0)\"><?php echo \$view['translator']->trans('mautic.email.variant.graph.variant'); ?></a>
                    <?php endif; ?>
                </span>
                </span> | </span>
                <span>
                    <?php if (\$isVariant): ?>
                    <a data-chart=\"all\" href=\"javascript:void(0)\"><?php echo \$view['translator']->trans('mautic.email.variant.graph.all'); ?></a>
                    <?php else: ?>
                    <span data-chart=\"all\"><?php echo \$view['translator']->trans('mautic.email.variant.graph.all'); ?></span>
                    <?php endif; ?>
                </span>
            </div>
            <?php endif; ?>
            <div class=\"panel\">
                <div class=\"panel-body box-layout\">
                    <div class=\"col-xs-4 va-m\">
                        <h5 class=\"text-white dark-md fw-sb mb-xs\">
                            <span class=\"fa fa-envelope\"></span>
                            <?php echo \$view['translator']->trans('mautic.email.stats'); ?>
                        </h5>
                    </div>
                    <div class=\"col-xs-8 va-m\">
                        <?php echo \$view->render('MauticCoreBundle:Helper:graph_dateselect.html.php', ['dateRangeForm' => \$dateRangeForm, 'class' => 'pull-right']); ?>

                    </div>
                </div>
                <div class=\"pt-0 pl-15 pb-10 pr-15\">
                    <?php echo \$view->render('MauticCoreBundle:Helper:chart.html.php', ['chartData' => \$stats, 'chartType' => 'line', 'chartHeight' => 300]); ?>
                </div>
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
        return "@bundles/EmailBundle/Views/Email/template_graph.html.php";
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
        return new Source("", "@bundles/EmailBundle/Views/Email/template_graph.html.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Views/Email/template_graph.html.php");
    }
}
