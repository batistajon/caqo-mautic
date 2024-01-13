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

/* @bundles/IntegrationsBundle/Sync/DAO/Sync/Report/RelationDAO.php */
class __TwigTemplate_ce7f4064886e18994fce6499407f8c71f0b37728085eb3a8a4df730c57e8ce6e extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report;

class RelationDAO
{
    /**
     * @var string
     */
    private \$objectName;

    /**
     * @var string
     */
    private \$relFieldName;

    /**
     * @var string
     */
    private \$relObjectName;

    /**
     * @var string
     */
    private \$objectIntegrationId;

    /**
     * @var string
     */
    private \$relObjectIntegrationId;

    /**
     * @var int
     */
    private \$relObjectInternalId;

    public function __construct(string \$objectName, string \$relFieldName, string \$relObjectName, string \$objectIntegrationId, string \$relObjectIntegrationId)
    {
        \$this->objectName             = \$objectName;
        \$this->relFieldName           = \$relFieldName;
        \$this->relObjectName          = \$relObjectName;
        \$this->objectIntegrationId    = \$objectIntegrationId;
        \$this->relObjectIntegrationId = \$relObjectIntegrationId;
    }

    public function getObjectName(): string
    {
        return \$this->objectName;
    }

    public function getRelObjectName(): string
    {
        return \$this->relObjectName;
    }

    public function getRelFieldName(): string
    {
        return \$this->relFieldName;
    }

    public function getObjectIntegrationId(): string
    {
        return \$this->objectIntegrationId;
    }

    public function getRelObjectIntegrationId(): string
    {
        return \$this->relObjectIntegrationId;
    }

    public function getRelObjectInternalId(): ?int
    {
        return \$this->relObjectInternalId;
    }

    public function setRelObjectInternalId(int \$relObjectInternalId): void
    {
        \$this->relObjectInternalId = \$relObjectInternalId;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Sync/Report/RelationDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Sync/Report/RelationDAO.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Sync/Report/RelationDAO.php");
    }
}
