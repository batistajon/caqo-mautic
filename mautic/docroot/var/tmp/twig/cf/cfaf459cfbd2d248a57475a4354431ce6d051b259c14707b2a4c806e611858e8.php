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

/* @bundles/CoreBundle/Views/FormTheme/Custom/form_label.html.php */
class __TwigTemplate_6102acd0025076250a7550e9b1fbc3d5bc3e2a46a53a84142dc6975fcc1f76ec extends Template
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
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) {
    \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required');
} ?>
<?php if (!\$compound) {
    \$label_attr['for'] = \$id;
} ?>
<?php if (!\$label) {
    \$label = \$view['form']->humanize(\$name);
} ?>
<?php \$tooltip = (!empty(\$form->vars['attr']['tooltip'])) ? \$form->vars['attr']['tooltip'] : false; ?>
<label <?php foreach (\$label_attr as \$k => \$v) {
    printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v));
} ?><?php if (\$tooltip): ?>data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" title=\"<?php echo \$view['translator']->trans(\$tooltip); ?>\"<?php endif; ?>><?php echo \$view->escape(\$view['translator']->trans(\$label, [], \$translation_domain)); ?><?php if (\$tooltip): ?> <i class=\"fa fa-question-circle\"></i><?php endif; ?></label>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/FormTheme/Custom/form_label.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/FormTheme/Custom/form_label.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/FormTheme/Custom/form_label.html.php");
    }
}
