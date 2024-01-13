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

/* @bundles/IntegrationsBundle/Mapping/MappedFieldInfoInterface.php */
class __TwigTemplate_769c78f4088a60791655df1f665c287aeaa80d9b53205deebcababcc5a77ff49 extends Template
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

namespace Mautic\\IntegrationsBundle\\Mapping;

interface MappedFieldInfoInterface
{
    public function getName(): string;

    public function getLabel(): string;

    public function showAsRequired(): bool;

    public function hasTooltip(): bool;

    public function getTooltip(): string;

    public function isBidirectionalSyncEnabled(): bool;

    public function isToIntegrationSyncEnabled(): bool;

    public function isToMauticSyncEnabled(): bool;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Mapping/MappedFieldInfoInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Mapping/MappedFieldInfoInterface.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Mapping/MappedFieldInfoInterface.php");
    }
}
