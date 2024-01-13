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

/* @bundles/CoreBundle/Views/FormTheme/Custom/time_widget.html.php */
class __TwigTemplate_7904429dc5917524bbaae043c2a84536dc4f93b16fa3d838d3beea3b77979499 extends Template
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
        echo "<?php if ('single_text' == \$widget): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php
    \$size = 4;
    if (!\$with_minutes && !\$with_seconds) {
        \$size = 12;
    } elseif (!\$with_minutes || !\$with_seconds) {
        \$size = 6;
    }
    ?>
    <?php \$vars = 'text' == \$widget ? ['attr' => ['size' => 1, 'class' => 'not-chosen']] : ['attr' => ['class' => 'not-chosen']]; ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
        <?php
        // There should be no spaces between the colons and the widgets, that's why
        // this block is written in a single PHP tag
        echo \$view['form']->widget(\$form['hour'], \$vars);

        if (\$with_minutes) {
            echo ':';
            echo \$view['form']->widget(\$form['minute'], \$vars);
        }

        if (\$with_seconds) {
            echo ':';
            echo \$view['form']->widget(\$form['second'], \$vars);
        }
        ?>
    </div>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/FormTheme/Custom/time_widget.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/FormTheme/Custom/time_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/FormTheme/Custom/time_widget.html.php");
    }
}
