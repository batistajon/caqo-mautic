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

/* @bundles/CoreBundle/Views/Default/pageheader.html.php */
class __TwigTemplate_3d8e9f032df39966436e808d9b4c51ace8431a8c1471de69e3f58b7204e241d6 extends Template
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

<div class=\"page-header\">
    <div class=\"box-layout\">
        <div class=\"col-xs-5 col-sm-6 col-md-5 va-m\">
            <h3 class=\"pull-left\"><?php \$view['slots']->output('headerTitle'); ?></h3>
            <div class=\"col-xs-2 text-right pull-left\">
                <?php \$view['slots']->output('publishStatus'); ?>
            </div>
            <?php echo \$view['content']->getCustomContent('page.header.left', \$mauticTemplateVars); ?>
        </div>
        <div class=\"col-xs-7 col-sm-6 col-md-7 va-m\">
            <div class=\"toolbar text-right\" id=\"toolbar\">
                <?php \$view['slots']->output('actions'); ?>

                <div class=\"toolbar-bundle-buttons pull-left\"><?php \$view['slots']->output('toolbar'); ?></div>
                <div class=\"toolbar-form-buttons hide pull-right\">
                    <div class=\"btn-group toolbar-standard hidden-xs hidden-sm \"></div>
                    <div class=\"btn-group toolbar-dropdown hidden-md hidden-lg\">
                        <button type=\"button\" class=\"btn btn-default btn-main\"></button>
                        <button type=\"button\" class=\"btn btn-default btn-nospin  dropdown-toggle\" data-toggle=\"dropdown\"
                                aria-expanded=\"false\"><i class=\"fa fa-caret-down\"></i></button>
                        <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\"></ul>
                    </div>
                </div>
                <?php echo \$view['content']->getCustomContent('page.header.right', \$mauticTemplateVars); ?>
            </div>
            <div class=\"clearfix\"></div>

        </div>

    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Default/pageheader.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Default/pageheader.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Default/pageheader.html.php");
    }
}
