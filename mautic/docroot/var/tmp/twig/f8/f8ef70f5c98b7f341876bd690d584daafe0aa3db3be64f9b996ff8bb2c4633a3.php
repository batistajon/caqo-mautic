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

/* @bundles/CoreBundle/Views/FormTheme/Custom/form_widget_simple.html.php */
class __TwigTemplate_cbd22b1e2ab306db34224bb413672a445c43164b8c6daa3a8ef935ee8243ccc6 extends Template
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
\$preaddonAttr  = (isset(\$attr['preaddon_attr'])) ? \$attr['preaddon_attr'] : [];
\$postaddonAttr = (isset(\$attr['postaddon_attr'])) ? \$attr['postaddon_attr'] : [];

if (!empty(\$attr['preaddon']) || !empty(\$attr['postaddon']) || !empty(\$attr['preaddon_text']) || !empty(\$attr['postaddon_text'])): ?>
    <div class=\"input-group\">
        <?php if (!empty(\$attr['preaddon'])): ?>
            <span class=\"input-group-addon preaddon\" <?php foreach (\$preaddonAttr as \$k => \$v) {
    printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v));
}?>>
        <i class=\"<?php echo \$attr['preaddon']; ?>\"></i>
    </span>
        <?php endif; ?>
        <?php if (!empty(\$attr['preaddon_text'])): ?>
            <span class=\"input-group-addon preaddon\" <?php foreach (\$preaddonAttr as \$k => \$v) {
    printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v));
}?>>
        <span><?php echo \$attr['preaddon_text']; ?></span>
    </span>
        <?php endif; ?>
        <input autocomplete=\"false\" type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text'; ?>\"
            <?php echo \$view['form']->block(\$form, 'widget_attributes'); ?><?php if (!empty(\$value) || is_numeric(\$value)): ?>
            value=\"<?php echo \$view->escape(\$value); ?>\"<?php endif; ?> />

        <?php if (!empty(\$attr['postaddon'])): ?>
            <span class=\"input-group-addon postaddon\" <?php foreach (\$postaddonAttr as \$k => \$v) {
    printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v));
}?>>
        <i class=\"<?php echo \$attr['postaddon']; ?>\"></i>
    </span>
        <?php endif; ?>
        <?php if (!empty(\$attr['postaddon_text'])): ?>
            <span class=\"input-group-addon postaddon\" <?php foreach (\$postaddonAttr as \$k => \$v) {
    printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v));
}?>>
        <span><?php echo \$attr['postaddon_text']; ?></span>
    </span>
        <?php endif; ?>
    </div>
<?php else: ?>
    <input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text'; ?>\"
        <?php echo \$view['form']->block(\$form, 'widget_attributes'); ?><?php if (!empty(\$value) || is_numeric(\$value)): ?>
        value=\"<?php echo \$view->escape(\$value); ?>\"<?php endif; ?> />
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/FormTheme/Custom/form_widget_simple.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/FormTheme/Custom/form_widget_simple.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/FormTheme/Custom/form_widget_simple.html.php");
    }
}
