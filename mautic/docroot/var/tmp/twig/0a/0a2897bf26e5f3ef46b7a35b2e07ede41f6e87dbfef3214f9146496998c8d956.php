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

/* @bundles/IntegrationsBundle/Integration/ConfigurationTrait.php */
class __TwigTemplate_b9f784478477914f8ea18e7409a538d209ce024e9453e8a49988f08d8dc05b2b extends Template
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

declare(strict_types=1);

namespace Mautic\\IntegrationsBundle\\Integration;

use Mautic\\PluginBundle\\Entity\\Integration;

trait ConfigurationTrait
{
    /**
     * @var Integration
     */
    private \$integration;

    public function getIntegrationConfiguration(): Integration
    {
        return \$this->integration;
    }

    public function setIntegrationConfiguration(Integration \$integration): void
    {
        \$this->integration = \$integration;
    }

    /**
     * Check if Integration entity has been set to prevent PHP fatal error with using getIntegrationEntity.
     */
    public function hasIntegrationConfiguration(): bool
    {
        return !empty(\$this->integration);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Integration/ConfigurationTrait.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Integration/ConfigurationTrait.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Integration/ConfigurationTrait.php");
    }
}
