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

/* @bundles/IntegrationsBundle/Sync/DAO/Mapping/UpdatedObjectMappingDAO.php */
class __TwigTemplate_2bc026f697ac39e110af3c2c9c927b8fbafacb0090888ad4a1dc35d8933ad99f extends Template
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

class UpdatedObjectMappingDAO
{
    /**
     * @var string
     */
    private \$integration;

    /**
     * @var string
     */
    private \$integrationObjectName;

    /**
     * @var mixed
     */
    private \$integrationObjectId;

    /**
     * @var \\DateTime
     */
    private \$objectModifiedDate;

    /**
     * @param string \$integration
     * @param string \$integrationObjectName
     * @param mixed  \$integrationObjectId
     */
    public function __construct(
        \$integration,
        \$integrationObjectName,
        \$integrationObjectId,
        \\DateTimeInterface \$objectModifiedDate
    ) {
        \$this->integration           = \$integration;
        \$this->integrationObjectName = \$integrationObjectName;
        \$this->integrationObjectId   = \$integrationObjectId;
        \$this->objectModifiedDate    = \$objectModifiedDate instanceof \\DateTimeImmutable ? new \\DateTime(
            \$objectModifiedDate->format('Y-m-d H:i:s'),
            \$objectModifiedDate->getTimezone()
        ) : \$objectModifiedDate;
    }

    public function getIntegration(): string
    {
        return \$this->integration;
    }

    public function getIntegrationObjectName(): string
    {
        return \$this->integrationObjectName;
    }

    /**
     * @return mixed
     */
    public function getIntegrationObjectId()
    {
        return \$this->integrationObjectId;
    }

    public function getObjectModifiedDate(): \\DateTimeInterface
    {
        return \$this->objectModifiedDate;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Mapping/UpdatedObjectMappingDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Mapping/UpdatedObjectMappingDAO.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Mapping/UpdatedObjectMappingDAO.php");
    }
}
