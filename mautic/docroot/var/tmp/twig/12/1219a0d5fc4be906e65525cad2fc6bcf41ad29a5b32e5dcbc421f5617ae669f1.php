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

/* @bundles/CoreBundle/Views/FormTheme/Custom/button_attributes.html.php */
class __TwigTemplate_18cd489aa0ff68f9e00b99915cb48552c8b7fb9491387b8c5d69a001dbc98e65 extends Template
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
        echo "id=\"<?php echo \$view->escape(\$id); ?>\" name=\"<?php echo \$view->escape(\$full_name); ?>\" <?php if (\$disabled): ?>disabled=\"disabled\" <?php endif; ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, ['icon'])) {
    continue;
} ?>
<?php if (in_array(\$v, ['placeholder', 'title'], true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$view['translator']->trans(\$v, [], \$translation_domain))); ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)); ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); ?>
<?php endif; ?>
<?php endforeach; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/FormTheme/Custom/button_attributes.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/FormTheme/Custom/button_attributes.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/FormTheme/Custom/button_attributes.html.php");
    }
}
