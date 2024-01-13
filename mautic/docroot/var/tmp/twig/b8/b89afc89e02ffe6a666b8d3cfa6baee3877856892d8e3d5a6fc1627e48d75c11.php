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

/* @bundles/FormBundle/Views/FormTheme/FieldValueCondition/campaignevent_form_field_value_widget.html.php */
class __TwigTemplate_aaef07373616d5b22d9ff5010adfd668dce9a40e44773bb6eb785315f9d55ba2 extends Template
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

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>
<div class=\"row\">
    <div class=\"col-xs-12\">
        <?php echo \$view['form']->row(\$form['form']); ?>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-xs-4\">
        <?php echo \$view['form']->row(\$form['field']); ?>
    </div>
    <div class=\"col-xs-4\">
        <?php echo \$view['form']->row(\$form['operator']); ?>
    </div>
    <div class=\"col-xs-4\">
        <?php echo \$view['form']->row(\$form['value']); ?>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Views/FormTheme/FieldValueCondition/campaignevent_form_field_value_widget.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/FormTheme/FieldValueCondition/campaignevent_form_field_value_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/FormTheme/FieldValueCondition/campaignevent_form_field_value_widget.html.php");
    }
}
