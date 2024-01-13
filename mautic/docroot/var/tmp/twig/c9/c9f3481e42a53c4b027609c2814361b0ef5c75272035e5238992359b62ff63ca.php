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

/* @bundles/InstallBundle/Views/Install/user.html.php */
class __TwigTemplate_42626dc1b34fb5451c767e59e265269fed21ab836c51f25cac32d7a0f86f1079 extends Template
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
        <?php echo \$view['translator']->trans('mautic.install.heading.user.configuration'); ?>
    </h2>
</div>
<div class=\"panel-body\">
    <?php echo \$view['form']->start(\$form); ?>
    <div class=\"alert alert-mautic\">
        <?php echo \$view['translator']->trans('mautic.install.user.introtext'); ?>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <?php echo \$view['form']->row(\$form['username']); ?>
        </div>
        <div class=\"col-sm-6\">
            <?php echo \$view['form']->row(\$form['password']); ?>
        </div>
    </div>

    <hr class=\"text-muted\" />

    <div class=\"row mt-lg\">
        <div class=\"col-sm-6\">
            <?php echo \$view['form']->row(\$form['firstname']); ?>
        </div>
        <div class=\"col-sm-6\">
            <?php echo \$view['form']->row(\$form['lastname']); ?>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <?php echo \$view['form']->row(\$form['email']); ?>
        </div>
    </div>

    <div class=\"row mt-20\">
        <div class=\"col-sm-9\">
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
        return "@bundles/InstallBundle/Views/Install/user.html.php";
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
        return new Source("", "@bundles/InstallBundle/Views/Install/user.html.php", "/var/www/html/mautic/docroot/app/bundles/InstallBundle/Views/Install/user.html.php");
    }
}
