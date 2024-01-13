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

/* @bundles/DashboardBundle/Views/Widget/form.html.php */
class __TwigTemplate_667c0c1a6e9989c808b7e27199eb7118d97c79fe3dcf17ec01c4fef75d01c565 extends Template
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
\$view['slots']->set('mauticContent', 'widget');
\$userId = \$form->vars['data']->getId();
if (!empty(\$userId)) {
    \$header = \$view['translator']->trans('mautic.dashboard.widget.header.edit');
} else {
    \$header = \$view['translator']->trans('mautic.dashboard.widget.header.new');
}
?>
<?php echo \$view['form']->start(\$form); ?>

<div class=\"row form-group\">
    <div class=\"col-xs-6\">
        <?php echo \$view['form']->label(\$form['name']); ?>
        <?php echo \$view['form']->widget(\$form['name']); ?>
        <div class=\"has-error\"><?php echo \$view['form']->errors(\$form['name']); ?></div>
    </div>
    <div class=\"col-xs-6\">
        <?php echo \$view['form']->label(\$form['type']); ?>
        <?php echo \$view['form']->widget(\$form['type']); ?>
        <div class=\"has-error\"><?php echo \$view['form']->errors(\$form['type']); ?></div>
    </div>
</div>
<div class=\"row form-group\">
    <div class=\"col-xs-6\">
        <?php echo \$view['form']->label(\$form['width']); ?>
        <?php echo \$view['form']->widget(\$form['width']); ?>
    </div>
    <div class=\"col-xs-6\">
        <?php echo \$view['form']->label(\$form['height']); ?>
        <?php echo \$view['form']->widget(\$form['height']); ?>
    </div>
</div>

<?php echo \$view['form']->row(\$form['buttons']); ?>
<?php echo \$view['form']->end(\$form); ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/Views/Widget/form.html.php";
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
        return new Source("", "@bundles/DashboardBundle/Views/Widget/form.html.php", "/var/www/html/mautic/docroot/app/bundles/DashboardBundle/Views/Widget/form.html.php");
    }
}
