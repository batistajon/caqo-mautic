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

/* @bundles/CoreBundle/Views/FormTheme/Custom/choice_row.html.php */
class __TwigTemplate_59f2c784516b8a3f67f4b4ba2c27a9697a18d57dd7fde410a91c6bc786ed7285 extends Template
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
\$hasErrors     = count(\$form->vars['errors']);
\$feedbackClass = (!empty(\$hasErrors)) ? ' has-error' : '';

//apply attributes to radios
\$attr = \$form->vars['attr'];
?>
<div class=\"row\">
    <div class=\"form-group col-xs-12 <?php echo \$feedbackClass; ?>\">
        <?php echo \$view['form']->label(\$form, \$label); ?>
        <div class=\"choice-wrapper\">
            <?php if (\$expanded && \$multiple): ?>
            <?php foreach (\$form->children as \$child): ?>
                <div class=\"checkbox\">
                    <label>
                        <?php echo \$view['form']->widget(\$child, ['attr' => \$attr]); ?>
                        <?php echo \$view['translator']->trans(\$child->vars['label']); ?>
                    </label>
                </div>
            <?php endforeach; ?>
            <?php else: ?>
            <?php echo \$view['form']->widget(\$form); ?>
            <?php endif; ?>
            <?php echo \$view['form']->errors(\$form); ?>
        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/FormTheme/Custom/choice_row.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/FormTheme/Custom/choice_row.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/FormTheme/Custom/choice_row.html.php");
    }
}
