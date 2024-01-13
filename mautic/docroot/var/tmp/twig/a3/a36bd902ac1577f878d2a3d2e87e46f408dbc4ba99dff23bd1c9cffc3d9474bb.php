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

/* @bundles/CoreBundle/Views/FormTheme/Custom/yesno_button_group_widget.html.php */
class __TwigTemplate_af9ac91c43ef23f6f1fe31315659a79d964fb140846f36ec10d25ba5b2bcfe9a extends Template
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
//apply attributes to radios
\$attr     = \$form->vars['attr'];
\$onchange = \"Mautic.toggleYesNoButtonClass(mQuery(this).attr('id'));\";
if (isset(\$attr['onchange'])) {
    if (';' !== substr(\$attr['onchange'], 0, -1)) {
        \$attr['onchange'] .= ';';
    }
    \$attr['onchange'] .= \" \$onchange\";
} else {
    \$attr['onchange'] = \$onchange;
}
\$attr['style'] = 'width: 1px; height: 1px; top: 0; left: 0; margin-top: 0;';

?>
<div class=\"btn-group btn-block\" data-toggle=\"buttons\">
    <?php foreach (\$form as \$child): ?>
        <?php \$class =
            (!empty(\$child->vars['checked']) ? ' active' : '').
            (!empty(\$child->vars['disabled']) || !empty(\$attr['readonly']) ? ' disabled' : '').
            ('0' === \$child->vars['name'] ? ' btn-no' : ('1' === \$child->vars['name'] ? ' btn-yes' : ' btn-extra')).
            ('0' === \$child->vars['name'] && !empty(\$child->vars['checked']) ? ' btn-danger' : '').
            ('1' === \$child->vars['name'] && !empty(\$child->vars['checked']) ? ' btn-success' : ''); ?>
        <label class=\"btn btn-default <?php echo \$class; ?>\">
            <?php echo \$view['form']->widget(\$child, ['attr' => \$attr]); ?>
            <span><?php echo \$view['translator']->trans(\$child->vars['label']); ?></span>
        </label>
    <?php endforeach; ?>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/FormTheme/Custom/yesno_button_group_widget.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/FormTheme/Custom/yesno_button_group_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/FormTheme/Custom/yesno_button_group_widget.html.php");
    }
}
