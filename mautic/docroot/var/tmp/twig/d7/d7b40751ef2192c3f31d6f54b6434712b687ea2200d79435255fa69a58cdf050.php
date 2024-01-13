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

/* @bundles/CoreBundle/Views/FormTheme/Custom/widget_attributes.html.php */
class __TwigTemplate_e0ffaa5de263851cf287e855b71f611ef56559ebd3499169cf74303310749d90 extends Template
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
        echo "id=\"<?php echo \$view->escape(\$id); ?>\" name=\"<?php echo \$view->escape(\$full_name); ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif; ?>
<?php if (\$required): ?>required=\"required\" <?php endif; ?>
<?php

use Mautic\\FormBundle\\Helper\\FormFieldHelper;

foreach (\$attr as \$k => \$v) {
    if (in_array(\$k, ['tooltip', 'preaddon', 'preaddon_attr', 'postaddon_attr'])) {
        continue;
    }
    if (in_array(\$k, ['placeholder', 'title'], true)) {
        printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$view['translator']->trans(\$v, [], \$translation_domain)));
    } elseif (true === \$v) {
        printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k));
    } elseif (is_array(\$v)) {
        \$v = FormFieldHelper::formatList(FormFieldHelper::FORMAT_BAR, \$v);
        printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v));
    } elseif (false !== \$v) {
        printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v));
    }
}

// Disable by default and use false for chrome support
if (!isset(\$attr['autocomplete'])) {
    printf('autocomplete=\"false\" ');
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/FormTheme/Custom/widget_attributes.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/FormTheme/Custom/widget_attributes.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/FormTheme/Custom/widget_attributes.html.php");
    }
}
