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

/* @bundles/IntegrationsBundle/Sync/SyncDataExchange/SyncDataExchangeInterface.php */
class __TwigTemplate_6e6bddf2b299a1f2810792084e64eb34662aa9fdd14735277fe83876772fd4d8 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\OrderDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\ReportDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Request\\RequestDAO;

interface SyncDataExchangeInterface
{
    /**
     * Sync to integration.
     */
    public function getSyncReport(RequestDAO \$requestDAO): ReportDAO;

    /**
     * Sync from integration.
     */
    public function executeSyncOrder(OrderDAO \$syncOrderDAO);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/SyncDataExchange/SyncDataExchangeInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncDataExchange/SyncDataExchangeInterface.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/SyncDataExchange/SyncDataExchangeInterface.php");
    }
}
