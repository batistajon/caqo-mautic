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

/* @bundles/CampaignBundle/Entity/SlaveConnectionTrait.php */
class __TwigTemplate_b4b9695038a6b8f23796963a0c2db5741c2afda12638634f64c78ad846ac76cb extends Template
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

namespace Mautic\\CampaignBundle\\Entity;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Connections\\MasterSlaveConnection;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;

/**
 * Trait SlaveConnectionTrait.
 */
trait SlaveConnectionTrait
{
    /**
     * Get a connection, preferring a slave connection if available and prudent.
     *
     * If a query is being executed with a limiter with specific contacts
     * then this could be a real-time request being handled so we should avoid forcing a slave connection.
     *
     * @return Connection
     */
    private function getSlaveConnection(ContactLimiter \$limiter = null)
    {
        /** @var Connection \$connection */
        \$connection = \$this->getEntityManager()->getConnection();
        if (\$connection instanceof MasterSlaveConnection) {
            if (
                !\$limiter
                || !(\$limiter->getContactId() || \$limiter->getContactIdList())
            ) {
                \$connection->connect('slave');
            }
        }

        return \$connection;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Entity/SlaveConnectionTrait.php";
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
        return new Source("", "@bundles/CampaignBundle/Entity/SlaveConnectionTrait.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Entity/SlaveConnectionTrait.php");
    }
}
