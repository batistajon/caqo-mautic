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

/* @bundles/CoreBundle/Views/RightPanel/content.html.php */
class __TwigTemplate_cacb4237581aa53b63f3504f725adaa98bd5722871f16e1e366bd6c069af1c6a extends Template
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

//for main
if ('Main' == \$canvas) {
    if (!\$hasLeft && !\$hasRight) {
        \$class = 'col-xs-12';
    } elseif (\$hasLeft && \$hasRight) {
        \$class = 'col-xs-10';
    } else {
        \$class = 'col-xs-11';
    }
}
?>

<!-- start: sidebar header -->
<div class=\"sidebar-header box-layout\"  id=\"OffCanvas<?php echo \$canvas; ?>Header\">
    <?php if ('Left' == \$canvas): ?>
    <div class=\"col-xs-11 pt-lg text-center\">
        <h4><?php echo \$view['translator']->trans(\$canvasContent['header']); ?></h4>
    </div>
    <div class=\"col-xs-1 pt-lg text-right\">
        <a href=\"javascript:void(0);\" class=\"offcanvas-closer\"><span class=\"fa fa-arrow-right fs-16\"></span></a>
    </div>

    <?php elseif ('Right' == \$canvas): ?>
    <div class=\"col-xs-1 pt-lg text-left\">
        <a href=\"javascript:void(0);\" class=\"offcanvas-closer\"><span class=\"fa fa-arrow-left fs-16\"></span></a>
    </div>
    <div class=\"col-xs-11 pt-lg text-center\">
        <h4><?php echo \$view['translator']->trans(\$canvasContent['header']); ?></h4>
    </div>

    <?php elseif ('Main' == \$canvas): ?>
        <?php if (\$hasLeft): ?>
            <?php \$icon = ('mautic.core.settings' != \$canvasContent['header']) ? 'fa-gears' : 'fa-arrow-left'; ?>
            <div class=\"col-xs-1 pt-lg text-left\">
                <a href=\"javascript:void(0);\" class=\"offcanvas-opener offcanvas-open-ltr\"><span class=\"fa <?php echo \$icon; ?> fs-16\"></span></a>
            </div>
        <?php endif; ?>

        <div class=\"<?php echo \$class; ?> pt-lg text-center\">
            <h4><?php echo \$view['translator']->trans(\$canvasContent['header']); ?></h4>
        </div>

        <?php if (\$hasRight): ?>
            <div class=\"col-xs-1 pt-lg text-right\">
                <a href=\"javascript:void(0);\" class=\"offcanvas-opener offcanvas-open-rtl\"><span class=\"fa fa-arrow-right fs-16\"></span></a>
            </div>
        <?php endif; ?>

    <?php endif; ?>

    <!-- start: loading bar -->
    <div class=\"canvas-loading-bar\">
        <?php echo \$view['translator']->trans('mautic.core.loading'); ?>
    </div>
    <!--/ end: loading bar -->
</div>
<!--/ end: sidebar header -->

<?php if (!empty(\$canvasContent['footer'])): ?>
<!-- start: sidebar footer -->
    <div class=\"sidebar-footer box-layout\" id=\"OffCanvas<?php echo \$canvas; ?>Footer\">
        <?php echo \$canvasContent['footer']; ?>
    </div>
<!--/ end: sidebar footer -->
<?php endif; ?>

<!-- start: sidebar content -->
<div class=\"sidebar-content\">
    <!-- scroll-content -->
    <div class=\"scroll-content slimscroll\" id=\"OffCanvas<?php echo \$canvas; ?>Content\">
        <?php echo \$canvasContent['content']; ?>
    </div>
</div>
<!--/ end: sidebar content -->";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/RightPanel/content.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/RightPanel/content.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/RightPanel/content.html.php");
    }
}
