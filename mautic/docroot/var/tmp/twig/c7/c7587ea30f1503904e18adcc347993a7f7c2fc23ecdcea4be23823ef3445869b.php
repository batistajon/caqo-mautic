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

/* @bundles/IntegrationsBundle/Helper/BuilderIntegrationsHelper.php */
class __TwigTemplate_b0b119c9de060da7da755ac129eb197d8aaa9f205d0e466ba6ca4d84553c5146 extends Template
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

namespace Mautic\\IntegrationsBundle\\Helper;

use Mautic\\IntegrationsBundle\\Exception\\IntegrationNotFoundException;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\BuilderInterface;
use Mautic\\PluginBundle\\Entity\\Integration;

class BuilderIntegrationsHelper
{
    /**
     * @var BuilderInterface[]
     */
    private \$builders = [];

    /**
     * @var IntegrationsHelper
     */
    private \$integrationsHelper;

    public function __construct(IntegrationsHelper \$integrationsHelper)
    {
        \$this->integrationsHelper = \$integrationsHelper;
    }

    /**
     * Returns the first enabled builder that supports the given feature.
     *
     * @throws IntegrationNotFoundException
     */
    public function getBuilder(string \$feature): BuilderInterface
    {
        foreach (\$this->builders as \$builder) {
            // Ensure the configuration is hydrated
            \$this->integrationsHelper->getIntegrationConfiguration(\$builder);

            if (\$builder->isSupported(\$feature) && \$builder->getIntegrationConfiguration()->getIsPublished()) {
                return \$builder;
            }
        }

        throw new IntegrationNotFoundException();
    }

    public function getBuilderNames(): array
    {
        \$names = [];
        foreach (\$this->builders as \$builder) {
            \$names[\$builder->getName()] = \$builder->getDisplayName();
        }

        return \$names;
    }

    public function addIntegration(BuilderInterface \$integration): void
    {
        \$this->builders[\$integration->getName()] = \$integration;
    }

    /**
     * @throws IntegrationNotFoundException
     */
    public function getIntegration(string \$integration): BuilderInterface
    {
        if (!isset(\$this->builders[\$integration])) {
            throw new IntegrationNotFoundException(\"\$integration either doesn't exist or has not been tagged with mautic.builder_integration\");
        }

        // Ensure the configuration is hydrated
        \$this->integrationsHelper->getIntegrationConfiguration(\$this->builders[\$integration]);

        return \$this->builders[\$integration];
    }

    public function saveIntegrationConfiguration(Integration \$integrationConfiguration): void
    {
        \$this->integrationsHelper->saveIntegrationConfiguration(\$integrationConfiguration);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Helper/BuilderIntegrationsHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Helper/BuilderIntegrationsHelper.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Helper/BuilderIntegrationsHelper.php");
    }
}
