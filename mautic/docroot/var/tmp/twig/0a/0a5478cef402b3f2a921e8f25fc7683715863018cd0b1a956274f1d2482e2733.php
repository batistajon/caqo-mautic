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

/* @bundles/ReportBundle/Views/FormTheme/Report/_report_aggregators_row.html.php */
class __TwigTemplate_2eaabb6675af858317a6f5c037996a8571967283c49c4ee389c43fa89655b65a extends Template
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
?>
<div id=\"aggregatorsContainer\" class=\"row\">
    <div class=\"form-group col-md-12<?php echo \$feedbackClass; ?>\">
        <?php echo \$view['form']->widget(\$form); ?>
        <?php echo \$view['form']->errors(\$form); ?>
    </div>
    <div class=\"col-xs-12\">
        <button id=\"aggregators-button\" disabled type=\"button\" class=\"btn btn-primary\" onclick=\"Mautic.addReportRow('report_aggregators');\"><?php echo \$view['translator']->trans('mautic.report.report.label.function'); ?></button>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Views/FormTheme/Report/_report_aggregators_row.html.php";
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
        return new Source("", "@bundles/ReportBundle/Views/FormTheme/Report/_report_aggregators_row.html.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Views/FormTheme/Report/_report_aggregators_row.html.php");
    }
}
