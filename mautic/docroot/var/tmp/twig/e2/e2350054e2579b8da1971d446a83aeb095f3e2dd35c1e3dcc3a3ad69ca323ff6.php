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

/* @bundles/IntegrationsBundle/Sync/DAO/Mapping/FieldMappingDAO.php */
class __TwigTemplate_2dbf6ef394d0b354835fec6596c60d07fddb6a841c44558b6bc849cc216cd648 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping;

class FieldMappingDAO
{
    /**
     * @var string
     */
    private \$internalObject;

    /**
     * @var string
     */
    private \$internalField;

    /**
     * @var string
     */
    private \$integrationObject;

    /**
     * @var string
     */
    private \$integrationField;

    /**
     * @var string
     */
    private \$syncDirection;

    /**
     * @var bool
     */
    private \$isRequired;

    /**
     * FieldMappingDAO constructor.
     *
     * @param string \$internalObject
     * @param string \$internalField
     * @param string \$integrationObject
     * @param string \$integrationField
     * @param string \$syncDirection
     * @param bool   \$isRequired
     */
    public function __construct(\$internalObject, \$internalField, \$integrationObject, \$integrationField, \$syncDirection, \$isRequired)
    {
        \$this->internalObject    = \$internalObject;
        \$this->internalField     = \$internalField;
        \$this->integrationObject = \$integrationObject;
        \$this->integrationField  = \$integrationField;
        \$this->syncDirection     = \$syncDirection;
        \$this->isRequired        = (bool) \$isRequired;
    }

    /**
     * @return string
     */
    public function getInternalObject()
    {
        return \$this->internalObject;
    }

    /**
     * @return string
     */
    public function getInternalField()
    {
        return \$this->internalField;
    }

    /**
     * @return string
     */
    public function getIntegrationObject()
    {
        return \$this->integrationObject;
    }

    /**
     * @return string
     */
    public function getIntegrationField()
    {
        return \$this->integrationField;
    }

    /**
     * @return string
     */
    public function getSyncDirection()
    {
        return \$this->syncDirection;
    }

    public function isRequired(): bool
    {
        return \$this->isRequired;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Mapping/FieldMappingDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Mapping/FieldMappingDAO.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Mapping/FieldMappingDAO.php");
    }
}
