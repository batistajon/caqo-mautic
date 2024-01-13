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

/* @bundles/CoreBundle/Views/Default/navbar.html.php */
class __TwigTemplate_bd4f109a0bb2648b980a71a806ca0e00c4c62e3b97e4048da1cd4aa481c0a6fd extends Template
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
<!-- start: loading bar -->
<div class=\"loading-bar\">
    <?php echo \$view['translator']->trans('mautic.core.loading'); ?>
</div>
<!--/ end: loading bar -->

<!-- start: navbar nocollapse -->
<div class=\"navbar-nocollapse\">
    <!-- start: left nav -->
    <ul class=\"nav navbar-nav navbar-left\">
        <li class=\"hidden-xs\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Minimize Sidebar\">
            <a href=\"javascript:void(0)\" data-toggle=\"minimize\" class=\"sidebar-minimizer\"><span class=\"arrow fs-14\"></span></a>
        </li>
        <li class=\"visible-xs\">
            <a href=\"javascript: void(0);\" data-toggle=\"sidebar\" data-direction=\"ltr\">
                <i class=\"fa fa-navicon fs-16\"></i>
            </a>
        </li>
        <?php echo \$view['actions']->render(new \\Symfony\\Component\\HttpKernel\\Controller\\ControllerReference('MauticCoreBundle:Default:notifications')); ?>
        <?php echo \$view['actions']->render(new \\Symfony\\Component\\HttpKernel\\Controller\\ControllerReference('MauticCoreBundle:Default:globalSearch')); ?>
    </ul>
    <!--/ end: left nav -->

    <!-- start: right nav -->
    <ul class=\"nav navbar-nav navbar-right\">
        <?php echo \$view->render('MauticCoreBundle:Menu:profile.html.php'); ?>
        <li>
            <a href=\"javascript: void(0);\" data-toggle=\"sidebar\" data-direction=\"rtl\">
                <i class=\"fa fa-cog fs-16\"></i>
            </a>
        </li>
    </ul>
    <div class=\"navbar-toolbar pull-right mt-15 mr-10\">
    <?php
    echo \$view['buttons']->reset(\$app->getRequest(), \\Mautic\\CoreBundle\\Templating\\Helper\\ButtonHelper::LOCATION_NAVBAR)
        ->renderButtons();
    ?>
    </div>


    <!--/ end: right nav -->
</div>
<!--/ end: navbar nocollapse -->";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Default/navbar.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Default/navbar.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Default/navbar.html.php");
    }
}
