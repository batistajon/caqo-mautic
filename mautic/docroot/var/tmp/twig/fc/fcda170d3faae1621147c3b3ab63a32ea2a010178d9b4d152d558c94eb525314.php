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

/* @bundles/ReportBundle/Builder/ReportBuilderInterface.php */
class __TwigTemplate_c4dd2e087b456d63c97998582dc30b6324869acab834c81f47d6c95c9be78cf2 extends Template
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

namespace Mautic\\ReportBundle\\Builder;

/**
 * Interface ReportBuilderInterface.
 */
interface ReportBuilderInterface
{
    /**
     * Gets the query instance with default parameters.
     *
     * @param array \$options Options array
     *
     * @return \\Doctrine\\DBAL\\Query\\QueryBuilder
     */
    public function getQuery(array \$options);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Builder/ReportBuilderInterface.php";
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
        return new Source("", "@bundles/ReportBundle/Builder/ReportBuilderInterface.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Builder/ReportBuilderInterface.php");
    }
}
