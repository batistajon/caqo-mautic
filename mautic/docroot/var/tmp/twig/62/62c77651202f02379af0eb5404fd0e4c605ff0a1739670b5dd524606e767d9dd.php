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

/* @bundles/CoreBundle/Views/Update/update.html.php */
class __TwigTemplate_d4cd7defbebcac2caa4f9efa5aad846f37a1674f75ebec2d2603662010dbc473 extends Template
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

// NOTE - The contents of this view will replace the 'update-panel' <div> of MauticCoreBundle:update:index.html.php
?>

<div class=\"col-sm-offset-2 col-sm-8\">
    <div id=\"main-update-panel\" class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h2 class=\"panel-title\">
                <?php echo \$view['translator']->trans('mautic.core.update.in.progress'); ?>
            </h2>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-hover table-striped table-bordered addon-list\" id=\"updateTable\">
                <thead>
                <tr>
                    <th><?php echo \$view['translator']->trans('mautic.core.update.heading.step'); ?></th>
                    <th><?php echo \$view['translator']->trans('mautic.core.update.heading.status'); ?></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo \$view['translator']->trans('mautic.core.update.step.running.checks'); ?></td>
                    <td id=\"update-step-running-checks-status\"><span class=\"hidden-xs\"><?php echo \$view['translator']->trans('mautic.core.update.step.in.progress'); ?></span><i class=\"pull-right fa fa-spinner fa-spin\"></i></td>
                </tr>
                </tbody>
            </table>
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
        return "@bundles/CoreBundle/Views/Update/update.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Update/update.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Update/update.html.php");
    }
}
