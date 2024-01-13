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

/* @bundles/PluginBundle/Event/PluginIntegrationFormBuildEvent.php */
class __TwigTemplate_6fc57833bab1bf9a677d703801b1fe71219f1d4339832c21c7c8fdf1cf0dee7c extends Template
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

namespace Mautic\\PluginBundle\\Event;

use Mautic\\PluginBundle\\Integration\\UnifiedIntegrationInterface;
use Symfony\\Component\\Form\\FormBuilderInterface;

class PluginIntegrationFormBuildEvent extends AbstractPluginIntegrationEvent
{
    /**
     * @var array
     */
    private \$options;

    /**
     * @var FormBuilderInterface
     */
    private \$builder;

    public function __construct(UnifiedIntegrationInterface \$integration, FormBuilderInterface \$builder, array \$options)
    {
        \$this->integration = \$integration;
        \$this->builder     = \$builder;
        \$this->options     = \$options;
    }

    /**
     * @return FormBuilderInterface
     */
    public function getFormBuilder()
    {
        return \$this->builder;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return \$this->options;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Event/PluginIntegrationFormBuildEvent.php";
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
        return new Source("", "@bundles/PluginBundle/Event/PluginIntegrationFormBuildEvent.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Event/PluginIntegrationFormBuildEvent.php");
    }
}
