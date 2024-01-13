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

/* FrameworkBundle:Form:date_widget.html.php */
class __TwigTemplate_50a9c96a0def78fafe0b2b740bc19ca4528e7ce9eb0c752b98c410d5f2ce57f5 extends Template
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
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(['";
        // line 5
        echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["month"] ?? null), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["day"] ?? null), "html", null, true);
        echo "'], [
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ], \$date_pattern) ?>
    </div>
<?php endif ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "FrameworkBundle:Form:date_widget.html.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "FrameworkBundle:Form:date_widget.html.php", "/var/www/html/mautic/vendor/symfony/framework-bundle/Resources/views/Form/date_widget.html.php");
    }
}
