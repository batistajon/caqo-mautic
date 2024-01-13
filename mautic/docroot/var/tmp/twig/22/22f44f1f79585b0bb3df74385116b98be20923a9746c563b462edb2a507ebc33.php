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

/* @bundles/InstallBundle/Views/Install/doctrine.html.php */
class __TwigTemplate_b3b44394b203deb35ad3b1c111ab5699f72516c65c3d9c0e72eaa948837fe741 extends Template
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
        <?php echo \$view['translator']->trans('mautic.install.heading.database.configuration'); ?>
    </h2>
</div>
<div class=\"panel-body\">
    <?php echo \$view['form']->start(\$form); ?>
    <div class=\"alert alert-mautic\">
        <h6><?php echo \$view['translator']->trans('mautic.install.database.introtext'); ?></h6>
    </div>

    <?php echo \$view['form']->row(\$form['driver']); ?>

    <?php \$driver = \$form['driver']->vars['data']; ?>
    <div id=\"DatabaseSettings\"<?php if ('pdo_sqlite' == \$driver) {
    echo ' class=\"hide\"';
} ?>>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <?php echo \$view['form']->row(\$form['host']); ?>
            </div>
            <div class=\"col-sm-6\">
                <?php echo \$view['form']->row(\$form['port']); ?>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-6\">
                <?php echo \$view['form']->row(\$form['name']); ?>
            </div>
            <div class=\"col-sm-6\">
                <?php echo \$view['form']->row(\$form['table_prefix']); ?>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-6\">
                <?php echo \$view['form']->row(\$form['user']); ?>
            </div>
            <div class=\"col-sm-6\">
                <?php echo \$view['form']->row(\$form['password']); ?>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <?php echo \$view['form']->row(\$form['backup_tables']); ?>
        </div>
        <?php \$hide = (!\$form['backup_tables']->vars['data']) ? ' hide' : ''; ?>
        <div class=\"col-sm-6<?php echo \$hide; ?>\" id=\"backupPrefix\">
            <?php echo \$view['form']->row(\$form['backup_prefix']); ?>
        </div>
    </div>

    <div class=\"row mt-20\">
        <div class=\"col-sm-9\">
            <div class=\"hide\" id=\"waitMessage\">
                <div class=\"alert alert-info\">
                    <strong><?php echo \$view['translator']->trans('mautic.install.database.installing'); ?></strong>
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
        return "@bundles/InstallBundle/Views/Install/doctrine.html.php";
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
        return new Source("", "@bundles/InstallBundle/Views/Install/doctrine.html.php", "/var/www/html/mautic/docroot/app/bundles/InstallBundle/Views/Install/doctrine.html.php");
    }
}
