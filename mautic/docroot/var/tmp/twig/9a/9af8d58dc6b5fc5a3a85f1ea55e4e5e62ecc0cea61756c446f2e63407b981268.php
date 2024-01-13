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

/* @bundles/IntegrationsBundle/Integration/Interfaces/ConfigFormInterface.php */
class __TwigTemplate_da93ab8df821546fe4ccf943a6c5ec96f6b343eca6edd5807e9362ae9a4b9bd6 extends Template
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

namespace Mautic\\IntegrationsBundle\\Integration\\Interfaces;

interface ConfigFormInterface extends IntegrationInterface
{
    public function getDisplayName(): string;

    /**
     * Return the name/class of the form type to override the default or just return NULL to use the default.
     *
     * @return string|null Name of the form type service
     */
    public function getConfigFormName(): ?string;

    /**
     * Return the template to use from the controller. Return null to use the default.
     *
     * @return string|null Name of the template like SomethingBundle:Config:form.html.php
     */
    public function getConfigFormContentTemplate(): ?string;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Integration/Interfaces/ConfigFormInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Integration/Interfaces/ConfigFormInterface.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Integration/Interfaces/ConfigFormInterface.php");
    }
}
