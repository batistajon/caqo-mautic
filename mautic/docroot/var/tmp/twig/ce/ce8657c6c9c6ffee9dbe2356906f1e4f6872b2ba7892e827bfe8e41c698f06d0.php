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

/* @bundles/CoreBundle/Views/Helper/modal.html.php */
class __TwigTemplate_cbbf14f6c31a34e96db4924ad4222c2695425381f4262ddfe0cebb66f38d21b3 extends Template
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

\$containerClass    = (!isset(\$containerClass)) ? '' : \" \$containerClass\";
\$containerAttr     = (!isset(\$containerAttr)) ? '' : \" \$containerAttr\";
\$size              = (!isset(\$size)) ? '' : ' modal-'.\$size;
\$class             = (!empty(\$class)) ? \" \$class\" : '';
\$body              = (!isset(\$body)) ? '' : \$body;
\$footer            = (!isset(\$footer)) ? '' : \$footer;
\$hidePlaceholder   = (empty(\$body)) ? '' : ' hide';
\$header            = (!isset(\$header)) ? '' : \$header;
\$padding           = (!isset(\$padding)) ? '' : \$padding;
\$footerButtonClass = (!isset(\$footerButtonClass)) ? 'modal-form-buttons' : \$footerButtonClass;
\$dismissible       = (!isset(\$dismissible)) ? true : \$dismissible;
?>

<div class=\"modal fade<?php echo \$containerClass; ?>\" id=\"<?php echo \$id; ?>\" data-backdrop=\"static\" role=\"dialog\" aria-labelledby=\"<?php echo \$id; ?>-label\" aria-hidden=\"true\"<?php echo \$containerAttr; ?>>
    <div class=\"modal-dialog<?php echo \$size; ?>\">
        <div class=\"modal-content<?php echo \$class; ?>\">
            <?php if (false !== \$header): ?>
            <div class=\"modal-header\">
                <?php if (\$dismissible): ?>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span aria-hidden=\"true\">&times;</span></button>
                <?php endif; ?>

                <h4 class=\"modal-title\" id=\"<?php echo \$id; ?>-label\">
                    <?php echo \$header; ?>
                </h4>

                <!-- start: loading bar -->
                <div class=\"modal-loading-bar\">
                    <?php echo \$view['translator']->trans('mautic.core.loading'); ?>
                </div>
                <!--/ end: loading bar -->

            </div>
            <?php endif; ?>
            <div class=\"modal-body <?php echo \$padding; ?>\">
                <div class=\"loading-placeholder<?php echo \$hidePlaceholder; ?>\">
                    <?php echo \$view['translator']->trans('mautic.core.loading'); ?>
                </div>
                <div class=\"modal-body-content\">
                    <?php echo \$body; ?>
                </div>
            </div>
            <?php if (!empty(\$footer) || !empty(\$footerButtons)) : ?>
            <div class=\"modal-footer\">
                <?php if (!empty(\$footerButtons)): ?>
                <div class=\"<?php echo \$footerButtonClass; ?>\">
                    <?php if (is_array(\$footerButtons)): ?>
                    <?php foreach (\$footerButtons as \$button): ?>
                        <button type=\"button\"
                                class=\"btn <?php echo !empty(\$button['class']) ? \$button['class'] : 'btn-default'; ?>\"
                                <?php if (!empty(\$button['attr'])): echo ' '.\$button['attr']; endif; ?>>
                            <?php if (!empty(\$button['textIcon'])): ?><i class=\"<?php echo \$button['textIcon']; ?>\"></i><?php endif; ?>
                            <?php echo \$button['label']; ?>
                        </button>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <?php else: ?>
                <?php echo \$footer; ?>
                <?php endif; ?>
            </div>
            <?php endif; ?>
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
        return "@bundles/CoreBundle/Views/Helper/modal.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Helper/modal.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Helper/modal.html.php");
    }
}
