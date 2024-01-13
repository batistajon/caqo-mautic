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

/* @bundles/CoreBundle/Views/FormTheme/Custom/form_start.html.php */
class __TwigTemplate_df3ab434e212bbfe5996458c308f83e5af085c02c1fd702ca8e19dd9d4029cfa extends Template
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
        echo "<?php \$method      = strtoupper(\$method); ?>
<?php \$form_method = 'GET' === \$method || 'POST' === \$method ? \$method : 'POST'; ?>
<form novalidate autocomplete=\"false\" data-toggle=\"ajax\" role=\"form\" name=\"<?php echo \$form->vars['name']; ?>\" method=\"<?php echo strtolower(\$form_method); ?>\" action=\"<?php echo \$action; ?>\"<?php foreach (\$attr as \$k => \$v) {
    printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v));
} ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif; ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$view->escape(\$method); ?>\" />
<?php endif; ?>
<?php if (count(\$form->vars['errors'])): ?>
<div class=\"has-error pa-10\">
    <?php echo \$view['form']->errors(\$form); ?>
</div>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/FormTheme/Custom/form_start.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/FormTheme/Custom/form_start.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/FormTheme/Custom/form_start.html.php");
    }
}
