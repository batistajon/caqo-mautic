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

/* @bundles/UserBundle/Views/User/form.html.php */
class __TwigTemplate_98b016b02b2c89860dfa081790e0da246ccc96aec8128ae79dd6ac4c57e75585 extends Template
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
\$view['slots']->set('mauticContent', 'user');
\$userId = \$form->vars['data']->getId();
if (!empty(\$userId)) {
    \$user   = \$form->vars['data']->getName();
    \$header = \$view['translator']->trans('mautic.user.user.header.edit', ['%name%' => \$user]);
} else {
    \$header = \$view['translator']->trans('mautic.user.user.header.new');
}
\$view['slots']->set('headerTitle', \$header);
?>
<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- container -->
    <?php echo \$view['form']->start(\$form); ?>
    <div class=\"col-md-9 bg-auto height-auto bdr-r\">
\t\t<div class=\"pa-md\">
\t\t\t<div class=\"form-group mb-0\">
\t\t\t    <div class=\"row\">
                    <div class=\"col-sm-6<?php echo (count(\$form['firstName']->vars['errors'])) ? ' has-error' : ''; ?>\">
                    \t<label class=\"control-label mb-xs\"><?php echo \$view['form']->label(\$form['firstName']); ?></label>
\t\t\t            <?php echo \$view['form']->widget(\$form['firstName'], ['attr' => ['placeholder' => \$form['firstName']->vars['label']]]); ?>
                        <?php echo \$view['form']->errors(\$form['firstName']); ?>
\t\t\t        </div>
                    <div class=\"col-sm-6<?php echo (count(\$form['lastName']->vars['errors'])) ? ' has-error' : ''; ?>\">
                        <label class=\"control-label mb-xs\"><?php echo \$view['form']->label(\$form['lastName']); ?></label>
\t\t\t            <?php echo \$view['form']->widget(\$form['lastName'], ['attr' => ['placeholder' => \$form['lastName']->vars['label']]]); ?>
                        <?php echo \$view['form']->errors(\$form['lastName']); ?>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t</div>
\t\t\t<hr class=\"mnr-md mnl-md\">

\t\t\t<div class=\"form-group mb-0\">
\t\t\t    <div class=\"row\">
\t\t\t        <div class=\"col-sm-6<?php echo (count(\$form['role']->vars['errors'])) ? ' has-error' : ''; ?>\">
\t\t\t        \t<label class=\"control-label mb-xs\"><?php echo \$view['form']->label(\$form['role']); ?></label>
\t\t\t            <?php echo \$view['form']->widget(\$form['role'], ['attr' => ['placeholder' => \$form['role']->vars['label']]]); ?>
                        <?php echo \$view['form']->errors(\$form['role']); ?>
\t\t\t        </div>
\t\t\t        <div class=\"col-sm-6<?php echo (count(\$form['position']->vars['errors'])) ? ' has-error' : ''; ?>\">
\t\t\t\t    \t<label class=\"control-label mb-xs\"><?php echo \$view['form']->label(\$form['position']); ?></label>
\t\t\t            <?php echo \$view['form']->widget(\$form['position'], ['attr' => ['placeholder' => \$form['position']->vars['label']]]); ?>
                        <?php echo \$view['form']->errors(\$form['position']); ?>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t</div>
\t\t\t<hr class=\"mnr-md mnl-md\">

            <div class=\"form-group mb-0\">
                <div class=\"row\">
                    <div class=\"col-sm-6<?php echo (count(\$form['signature']->vars['errors'])) ? ' has-error' : ''; ?>\">
                        <label class=\"control-label mb-xs\"><?php echo \$view['form']->label(\$form['signature']); ?></label>
                        <?php echo \$view['form']->widget(\$form['signature'], ['attr' => ['placeholder' => \$form['signature']->vars['label']]]); ?>
                        <?php echo \$view['form']->errors(\$form['signature']); ?>
                    </div>
                </div>
            </div>
            <hr class=\"mnr-md mnl-md\">

\t\t\t<div class=\"panel panel-default form-group mb-0\">
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t    <div class=\"row\">
\t\t\t\t        <div class=\"col-sm-6\">
\t\t\t\t        \t<div class=\"form-group col-xs-12<?php echo (count(\$form['username']->vars['errors'])) ? ' has-error' : ''; ?>\">
\t\t\t\t        \t\t<label class=\"control-label mb-xs\"><?php echo \$view['form']->label(\$form['username']); ?></label>
\t\t\t\t            \t<?php echo \$view['form']->widget(\$form['username'], ['attr' => ['placeholder' => \$form['username']->vars['label']]]); ?>
                                <?php echo \$view['form']->errors(\$form['username']); ?>
\t\t\t\t            </div>
\t\t\t\t\t\t\t<div class=\"form-group col-xs-12<?php echo (count(\$form['email']->vars['errors'])) ? ' has-error' : ''; ?>\">
\t\t\t\t\t    \t\t<label class=\"control-label mb-xs\"><?php echo \$view['form']->label(\$form['email']); ?></label>
\t\t\t\t            \t<?php echo \$view['form']->widget(\$form['email'], ['attr' => ['placeholder' => \$form['email']->vars['label']]]); ?>
                                <?php echo \$view['form']->errors(\$form['email']); ?>
\t\t\t\t            </div>
\t\t\t\t        </div>
\t\t\t\t        <div class=\"col-sm-6\">
\t\t\t\t            <?php echo \$view['form']->widget(\$form['plainPassword'], ['attr' => ['placeholder' => \$form['plainPassword']->vars['label']]]); ?>
\t\t\t\t        </div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr class=\"mnr-md mnl-md\">

\t\t</div>
\t</div>
 \t<div class=\"col-md-3 bg-white height-auto\">
\t\t<div class=\"pr-lg pl-lg pt-md pb-md\">
            <?php echo \$view['form']->rest(\$form); ?>
\t\t</div>
\t</div>
    <?php echo \$view['form']->end(\$form); ?>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Views/User/form.html.php";
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
        return new Source("", "@bundles/UserBundle/Views/User/form.html.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Views/User/form.html.php");
    }
}
