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

/* @bundles/PluginBundle/Views/FormTheme/Integration/integration_company_fields_row.html.php */
class __TwigTemplate_397e03ebf90aef860ba847941aece3c4e6050a57770b4ba1454460e29b731fe0 extends Template
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

\$containerId    = 'companyFieldsContainer';
\$numberOfFields = (\$form->offsetExists('update_mautic_company1')) ? 5 : 4;
\$object         = 'company';

include __DIR__.'/fields_row.html.php';
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Views/FormTheme/Integration/integration_company_fields_row.html.php";
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
        return new Source("", "@bundles/PluginBundle/Views/FormTheme/Integration/integration_company_fields_row.html.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Views/FormTheme/Integration/integration_company_fields_row.html.php");
    }
}
