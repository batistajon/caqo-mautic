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

/* @bundles/DynamicContentBundle/Views/FormTheme/Filter/_dwc_filters_widget.html.php */
class __TwigTemplate_955c22138e1bfad4c37277078bd560680c81205f7405464a630a40039ac8f999 extends Template
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

\$view->extend('MauticLeadBundle:FormTheme:Filter\\\\_leadlist_filters_widget.html.php');
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DynamicContentBundle/Views/FormTheme/Filter/_dwc_filters_widget.html.php";
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
        return new Source("", "@bundles/DynamicContentBundle/Views/FormTheme/Filter/_dwc_filters_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/DynamicContentBundle/Views/FormTheme/Filter/_dwc_filters_widget.html.php");
    }
}
