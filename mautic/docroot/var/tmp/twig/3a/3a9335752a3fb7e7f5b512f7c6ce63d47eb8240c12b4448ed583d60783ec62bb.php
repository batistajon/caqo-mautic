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

/* @bundles/CoreBundle/Views/FormTheme/Custom/checkbox_row.html.php */
class __TwigTemplate_88dd06b0077b67d8f446de83fc8653d399b99f58c5bf5aa9a68b1048fdcc7438 extends Template
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
\$feedbackClass = (!empty(\$hasErrors)) ? ' has-error' : ''; ?>
<div class=\"row\">
    <div class=\"form-group col-xs-12<?php echo \$feedbackClass; ?>\">
        <div class=\"checkbox\">
            <label>
                <?php echo \$view['form']->widget(\$form); ?>
                <?php echo \$view['translator']->trans(\$form->vars['label']); ?>
            </label>
        </div>
        <?php echo \$view['form']->errors(\$form); ?>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/FormTheme/Custom/checkbox_row.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/FormTheme/Custom/checkbox_row.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/FormTheme/Custom/checkbox_row.html.php");
    }
}
