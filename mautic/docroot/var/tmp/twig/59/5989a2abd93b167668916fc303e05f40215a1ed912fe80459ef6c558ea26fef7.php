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

/* @bundles/PluginBundle/Views/FormTheme/Integration/integration_fields_row.html.php */
class __TwigTemplate_908cd512f6807905829e6b8fe0eb9757c2cffe069fcfc4752b5b034728e3ed8a extends Template
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

\$containerId    = 'leadFieldsContainer';
\$numberOfFields = (\$form->offsetExists('update_mautic1')) ? 5 : 4;
\$object         = 'lead';

include __DIR__.'/fields_row.html.php';
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Views/FormTheme/Integration/integration_fields_row.html.php";
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
        return new Source("", "@bundles/PluginBundle/Views/FormTheme/Integration/integration_fields_row.html.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Views/FormTheme/Integration/integration_fields_row.html.php");
    }
}
