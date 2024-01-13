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

/* @bundles/InstallBundle/Views/Install/misc.html.php */
class __TwigTemplate_b5c5f0c54548e6c8f9aa426d902c2e7cbcb44f5cc9ddff74f2b1e470e686652b extends Template
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
if ('index' == \$tmpl) {
    \$view->extend('MauticInstallBundle:Install:content.html.php');
}

?>
<div class=\"panel-heading\">
    <h2 class=\"panel-title\">
        <?php echo \$view['translator']->trans('mautic.install.heading.misc.configuration'); ?>
    </h2>
</div>
<div class=\"panel-body\">
    <?php echo \$view['form']->start(\$form); ?>
    <h4><?php echo \$view['translator']->trans('mautic.install.misc.header.url'); ?></h4>
    <h6><?php echo \$view['translator']->trans('mautic.install.misc.subheader.url'); ?></h6>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <?php echo \$view['form']->row(\$form['site_url']); ?>
        </div>
    </div>
    <h4><?php echo \$view['translator']->trans('mautic.install.misc.header.paths'); ?></h4>
    <h6><?php echo \$view['translator']->trans('mautic.install.misc.subheader.paths'); ?></h6>
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <?php echo \$view['form']->row(\$form['log_path']); ?>
        </div>
        <div class=\"col-sm-6\">
            <?php echo \$view['form']->row(\$form['cache_path']); ?>
        </div>
    </div>
    <?php if (\\AppKernel::EXTRA_VERSION) : ?>
    <h4><?php echo \$view['translator']->trans('mautic.install.misc.header.stability'); ?></h4>
    <h6><?php echo \$view['translator']->trans('mautic.install.misc.subheader.stability'); ?></h6>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <?php echo \$view['form']->row(\$form['update_stability']); ?>
        </div>
    </div>
    <?php endif; ?>
    <div class=\"row mt-20\">
        <div class=\"col-sm-9\">
            <div class=\"hide\" id=\"waitMessage\">
                <div class=\"alert alert-info\">
                    <strong><?php echo \$view['translator']->trans('mautic.install.finalizing'); ?></strong>
                </div>
            </div>
            <?php echo \$view->render('MauticInstallBundle:Install:navbar.html.php', ['step' => \$index, 'count' => \$count, 'completedSteps' => \$completedSteps]); ?>
        </div>
        <div class=\"col-sm-3\">
            <?php echo \$view['form']->row(\$form['buttons']); ?>
        </div>
    </div>
    <?php echo \$view['form']->end(\$form); ?>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/Views/Install/misc.html.php";
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
        return new Source("", "@bundles/InstallBundle/Views/Install/misc.html.php", "/var/www/html/mautic/docroot/app/bundles/InstallBundle/Views/Install/misc.html.php");
    }
}
