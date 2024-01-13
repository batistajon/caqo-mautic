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

/* @bundles/CoreBundle/Views/FormTheme/Custom/button_widget.html.php */
class __TwigTemplate_c3a746cb81d0a5f843cfa47a34b40219bf91ce9e8e69e383b13bf874fd10d887 extends Template
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
        echo "<?php if (!\$label) {
    \$label = \$view['form']->humanize(\$name);
} ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button'; ?>\"
    <?php echo \$view['form']->block(\$form, 'button_attributes'); ?>>
    <?php if (!empty(\$form->vars['attr']['icon'])): ?>
    <i class=\"<?php echo \$form->vars['attr']['icon']; ?> \"></i>
    <?php endif; ?>
    <?php echo \$view->escape(\$view['translator']->trans(\$label, [], \$translation_domain)); ?>
</button>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/FormTheme/Custom/button_widget.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/FormTheme/Custom/button_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/FormTheme/Custom/button_widget.html.php");
    }
}
