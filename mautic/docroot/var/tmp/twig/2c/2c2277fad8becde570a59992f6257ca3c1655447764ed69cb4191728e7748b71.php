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

/* @bundles/IntegrationsBundle/Sync/VariableExpresser/VariableExpresserHelperInterface.php */
class __TwigTemplate_627bae169e2ffe593208f80e31680b27cd46450c9e7f3905798c98134472dbf8 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\VariableExpresser;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\EncodedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;

interface VariableExpresserHelperInterface
{
    public function decodeVariable(EncodedValueDAO \$EncodedValueDAO): NormalizedValueDAO;

    /**
     * @param mixed \$var
     */
    public function encodeVariable(\$var): EncodedValueDAO;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/VariableExpresser/VariableExpresserHelperInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/VariableExpresser/VariableExpresserHelperInterface.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/VariableExpresser/VariableExpresserHelperInterface.php");
    }
}