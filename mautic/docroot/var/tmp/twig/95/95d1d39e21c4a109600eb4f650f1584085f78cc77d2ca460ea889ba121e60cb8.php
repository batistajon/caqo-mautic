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

/* @bundles/SmsBundle/Sms/TransportChain.php */
class __TwigTemplate_651f522f2125901dea433ba9a326d6e7cf2452bbcc23d56cf776ecbae6a52177 extends Template
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

namespace Mautic\\SmsBundle\\Sms;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Mautic\\SmsBundle\\Entity\\Stat;
use Mautic\\SmsBundle\\Exception\\PrimaryTransportNotEnabledException;

class TransportChain
{
    /**
     * @var TransportInterface[]
     */
    private \$transports;

    /**
     * @var string
     */
    private \$primaryTransport;

    /**
     * @var IntegrationHelper
     */
    private \$integrationHelper;

    /**
     * @param string \$primaryTransport
     */
    public function __construct(\$primaryTransport, IntegrationHelper \$integrationHelper)
    {
        \$this->primaryTransport  = \$primaryTransport;
        \$this->transports        = [];
        \$this->integrationHelper = \$integrationHelper;
    }

    /**
     * @param string \$alias
     * @param string \$translatableAlias
     * @param string \$integrationAlias
     *
     * @return \$this
     */
    public function addTransport(\$alias, TransportInterface \$transport, \$translatableAlias, \$integrationAlias)
    {
        \$this->transports[\$alias]['alias']            = \$translatableAlias;
        \$this->transports[\$alias]['integrationAlias'] = \$integrationAlias;
        \$this->transports[\$alias]['service']          = \$transport;

        return \$this;
    }

    /**
     * Return the transport defined in parameters.
     *
     * @return TransportInterface
     *
     * @throws PrimaryTransportNotEnabledException
     */
    public function getPrimaryTransport()
    {
        \$enabled = \$this->getEnabledTransports();

        // If there no primary transport selected and there is just one available we will use it as primary
        if (1 === count(\$enabled)) {
            return array_shift(\$enabled);
        }

        if (0 === count(\$enabled)) {
            throw new PrimaryTransportNotEnabledException('Primary SMS transport is not enabled');
        }

        if (!array_key_exists(\$this->primaryTransport, \$enabled)) {
            throw new PrimaryTransportNotEnabledException('Primary SMS transport is not enabled. '.\$this->primaryTransport);
        }

        return \$enabled[\$this->primaryTransport];
    }

    /**
     * @param string \$content
     *
     * @return mixed
     *
     * @throws \\Exception
     */
    public function sendSms(Lead \$lead, \$content, Stat \$stat = null)
    {
        return \$this->getPrimaryTransport()->sendSms(\$lead, \$content, \$stat);
    }

    /**
     * Get all transports registered in service container.
     *
     * @return TransportInterface[]
     */
    public function getTransports()
    {
        return \$this->transports;
    }

    /**
     * @param string \$transport
     *
     * @return TransportInterface
     *
     * @throws PrimaryTransportNotEnabledException
     */
    public function getTransport(\$transport)
    {
        \$enabled = \$this->getEnabledTransports();

        if (!array_key_exists(\$transport, \$enabled)) {
            throw new PrimaryTransportNotEnabledException(\$transport.' SMS transport is not enabled or does not exist');
        }

        return \$enabled[\$transport];
    }

    /**
     * Get published transports.
     *
     * @return TransportInterface[]
     */
    public function getEnabledTransports()
    {
        \$enabled = [];
        foreach (\$this->transports as \$alias => \$transport) {
            if (!isset(\$transport['published'])) {
                \$integration = \$this->integrationHelper->getIntegrationObject(\$transport['integrationAlias']);
                if (!\$integration) {
                    continue;
                }
                \$transport['published']   = \$integration->getIntegrationSettings()->getIsPublished();
                \$this->transports[\$alias] = \$transport;
            }
            if (\$transport['published']) {
                \$enabled[\$alias] = \$transport['service'];
            }
        }

        return \$enabled;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Sms/TransportChain.php";
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
        return new Source("", "@bundles/SmsBundle/Sms/TransportChain.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Sms/TransportChain.php");
    }
}
