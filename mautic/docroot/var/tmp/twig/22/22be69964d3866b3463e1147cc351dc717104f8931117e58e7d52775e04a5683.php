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

/* @bundles/CoreBundle/Views/FormTheme/Custom/button_group_widget.html.php */
class __TwigTemplate_3f42f5eeed4d544b2c59bd5df22fa1897a5454ebcfaffeb2fe31c38f8fa95aff extends Template
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
\$attr = \$form->vars['attr'];
?>
<div class=\"btn-group <?php echo \$buttonBlockClass; ?>\" data-toggle=\"buttons\">
    <?php foreach (\$form as \$child): ?>
        <?php \$class =
            (!empty(\$child->vars['checked']) ? ' active' : '').
            (!empty(\$child->vars['disabled']) || !empty(\$attr['readonly']) ? ' disabled' : ''); ?>
        <label class=\"btn btn-default<?php echo \$class; ?>\">
            <?php echo \$view['form']->widget(\$child, ['attr' => \$attr]); ?>
            <?php echo \$view['translator']->trans(\$child->vars['label']); ?>
        </label>
    <?php endforeach; ?>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/FormTheme/Custom/button_group_widget.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/FormTheme/Custom/button_group_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/FormTheme/Custom/button_group_widget.html.php");
    }
}
