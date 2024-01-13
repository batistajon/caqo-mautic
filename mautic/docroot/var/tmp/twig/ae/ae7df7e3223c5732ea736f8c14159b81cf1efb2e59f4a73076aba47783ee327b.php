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

/* @bundles/CoreBundle/Views/Variant/index.html.php */
class __TwigTemplate_79244ff94961af2885b731a3e88b663ff67ce89cdca4e01a1dee321a304cdd46 extends Template
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
if (!isset(\$nameGetter)) {
    \$nameGetter = 'getName';
}
\$totalWeight   = 0;
\$abStatsHeader = \$view['translator']->trans('mautic.core.ab_test.stats');
?>
<?php if (!empty(\$variants['properties'])): ?>
<?php if (null != \$variants['parent']->getVariantStartDate()): ?>
<div class=\"box-layout mb-lg\">
    <div class=\"col-xs-10 va-m\">
        <h4>
            <?php echo \$view['translator']->trans(
                'mautic.core.variant_start_date',
                [
                    '%time%' => \$view['date']->toTime(
                        \$variants['parent']->getVariantStartDate()
                    ),
                    '%date%' => \$view['date']->toShort(
                        \$variants['parent']->getVariantStartDate()
                    ),
                    '%full%' => \$view['date']->toTime(
                        \$variants['parent']->getVariantStartDate()
                    ),
                ]
            ); ?>
        </h4>
    </div>
    <!-- button -->
    <div class=\"col-xs-2 va-m text-right\">
        <a href=\"#\" data-toggle=\"modal\" data-target=\"#abStatsModal\" class=\"btn btn-primary\">
            <?php echo \$abStatsHeader; ?>
        </a>
    </div>
</div>
<?php endif; ?>
<!--/ header -->

<!-- start: variants list -->
<ul class=\"list-group\">
    <?php
    if (\$variants['parent']) :
        echo \$view->render('MauticCoreBundle:Variant:row.html.php',
            [
                'totalWeight'   => &\$totalWeight,
                'variant'       => \$variants['parent'],
                'variants'      => \$variants,
                'abTestResults' => \$abTestResults,
                'actionRoute'   => \$actionRoute,
                'activeEntity'  => \$activeEntity,
                'model'         => \$model,
                'nameGetter'    => \$nameGetter,
            ]
        );
    endif;
    if (count(\$variants['children'])):
        foreach (\$variants['children'] as \$id => \$variant) :
            echo \$view->render('MauticCoreBundle:Variant:row.html.php',
                [
                    'totalWeight'   => &\$totalWeight,
                    'variant'       => \$variant,
                    'variants'      => \$variants,
                    'abTestResults' => \$abTestResults,
                    'actionRoute'   => \$actionRoute,
                    'activeEntity'  => \$activeEntity,
                    'model'         => \$model,
                    'nameGetter'    => \$nameGetter,
                ]
            );
        endforeach;
    endif;
    ?>
</ul>
<!--/ end: variants list -->

<?php echo \$view->render(
    'MauticCoreBundle:Helper:modal.html.php',
    [
        'id'     => 'abStatsModal',
        'header' => \$abStatsHeader,
        'body'   => (isset(\$abTestResults['supportTemplate'])) ? \$view->render(
            \$abTestResults['supportTemplate'],
            ['results' => \$abTestResults, 'variants' => \$variants]
        ) : \$view['translator']->trans('mautic.core.ab_test.noresults'),
        'size' => 'lg',
    ]
); ?>
<?php endif; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Variant/index.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Variant/index.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Variant/index.html.php");
    }
}
