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

/* @bundles/CoreBundle/Views/Update/index.html.php */
class __TwigTemplate_f3793c8ea11fb0b7936c4047126005290e74964513f1eb2cb73b0274ffe5a4c8 extends Template
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
\$view->extend('MauticCoreBundle:Default:content.html.php');
\$view['slots']->set('mauticContent', 'update');
\$view['slots']->set('headerTitle', \$view['translator']->trans('mautic.core.update.index'));

/** @var bool \$isComposerEnabled */
\$isComposerEnabled = \$isComposerEnabled;
?>

<div class=\"panel panel-default mnb-5 bdr-t-wdh-0\">
    <div id=\"update-panel\" class=\"panel-body\">
        <div class=\"col-sm-offset-2 col-sm-8\">
            <?php if (\$updateData['error'] || 'mautic.core.updater.running.latest.version' == \$updateData['message']) : ?>
                <div class=\"alert alert-mautic\">
                    <?php echo \$view['translator']->trans(\$updateData['message']); ?>
                </div>
            <?php else : ?>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">
                        <?php echo \$view['translator']->trans('mautic.core.update.available'); ?>
                    </h2>
                    <div class=\"panel-body\">
                        <table class=\"table table-hover table-striped table-bordered addon-list\" id=\"updateTable\">
                            <tbody>
                            <tr>
                                <td><?php echo \$view['translator']->trans('mautic.core.update.current.version'); ?></td>
                                <td><?php echo \$currentVersion; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo \$view['translator']->trans('mautic.core.update.upgrade.version'); ?></td>
                                <td><?php echo \$updateData['version']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo \$view['translator']->trans('mautic.core.update.announcement'); ?></td>
                                <td class=\"break-word\"><a href=\"<?php echo \$updateData['announcement']; ?>\" target=\"_blank\"><?php echo \$updateData['announcement']; ?></a></td>
                            </tr>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-danger\"><?php echo \$view['translator']->trans('mautic.core.update.backup_warning'); ?></td>
                            </tr>
                            </tbody>
                        </table>
                        <?php if (\$isComposerEnabled): ?>
                        <div class=\"alert alert-warning text-center\">
                            <strong><?php echo \$view['translator']->trans('mautic.core.update.composer'); ?></strong>
                        </div>
                        <?php else: ?>
                        <div class=\"alert alert-warning text-center\">
                            <strong><?php echo \$view['translator']->trans('mautic.core.update.ui.deprecated'); ?></strong>
                        </div>
                        <div class=\"text-right\">
                            <button class=\"btn btn-primary\" onclick=\"Mautic.processUpdate('update-panel', 1, '<?php echo base64_encode(json_encode([])); ?>');\"><?php echo \$view['translator']->trans('mautic.core.update.now'); ?></button>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
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
        return "@bundles/CoreBundle/Views/Update/index.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Update/index.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Update/index.html.php");
    }
}
