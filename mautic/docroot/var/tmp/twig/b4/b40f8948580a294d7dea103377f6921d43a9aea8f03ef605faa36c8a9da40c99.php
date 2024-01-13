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

/* @bundles/CoreBundle/Views/FormTheme/Custom/sortable_value_label_list_widget.html.php */
class __TwigTemplate_68c45bd85d1c94a52a47904abba609a704fd7848f564de59927080a38cb5db1f extends Template
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
 * @copyright   2016 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>
<?php if (!is_array(\$form['label']->vars['value']) && !is_array(\$form['value']->vars['value'])): ?>
<div class=\"input-group sortable-no-reorder\">
    <?php if (!empty(\$preaddon)): ?>
    <span class=\"input-group-addon preaddon\" <?php foreach (\$preaddonAttr as \$k => \$v) {
    printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v));
}?>>
    <i class=\"<?php echo \$preaddon; ?>\"></i>
    </span>
    <?php endif; ?>
    <div>
        <div class=\"row\">
            <div class=\"col-xs-6 mr-0 pr-0 bdr-r-wdh-0\">
            <?php echo \$view['form']->widget(\$form['label'], ['attr' => ['class' => 'form-control sortable-label', 'placeholder' => \$form['label']->vars['label']]]); ?>
            </div>
            <div class=\"col-xs-6 ml-0 pl-0\">
            <?php echo \$view['form']->widget(\$form['value'], ['attr' => ['class' => 'form-control sortable-value', 'placeholder' => \$form['value']->vars['label']]]); ?>
            </div>
        </div>
    </div>
    <?php if (!empty(\$postaddon)): ?>
    <span class=\"input-group-addon postaddon\" <?php foreach (\$postaddonAttr as \$k => \$v) {
    printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v));
}?>>
        <i class=\"<?php echo \$postaddon; ?>\"></i>
    </span>
    <?php endif; ?>
</div>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/FormTheme/Custom/sortable_value_label_list_widget.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/FormTheme/Custom/sortable_value_label_list_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/FormTheme/Custom/sortable_value_label_list_widget.html.php");
    }
}
