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

/* @bundles/SmsBundle/Integration/Twilio/Configuration.php */
class __TwigTemplate_95e8c329d85fe273423ff0444760412757bc1f3be8981e7722ff4799f944e0f9 extends Template
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

namespace Mautic\\SmsBundle\\Integration\\Twilio;

use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Twilio\\Exceptions\\ConfigurationException;

class Configuration
{
    /**
     * @var IntegrationHelper
     */
    private \$integrationHelper;

    /**
     * @var string
     */
    private \$sendingPhoneNumber;

    /**
     * @var string
     */
    private \$accountSid;

    /**
     * @var string
     */
    private \$authToken;

    /**
     * Configuration constructor.
     */
    public function __construct(IntegrationHelper \$integrationHelper)
    {
        \$this->integrationHelper = \$integrationHelper;
    }

    /**
     * @return string
     *
     * @throws ConfigurationException
     */
    public function getSendingNumber()
    {
        \$this->setConfiguration();

        return \$this->sendingPhoneNumber;
    }

    /**
     * @return string
     *
     * @throws ConfigurationException
     */
    public function getAccountSid()
    {
        \$this->setConfiguration();

        return \$this->accountSid;
    }

    /**
     * @return string
     *
     * @throws ConfigurationException
     */
    public function getAuthToken()
    {
        \$this->setConfiguration();

        return \$this->authToken;
    }

    /**
     * @throws ConfigurationException
     */
    private function setConfiguration()
    {
        if (\$this->accountSid) {
            return;
        }

        \$integration = \$this->integrationHelper->getIntegrationObject('Twilio');

        if (!\$integration || !\$integration->getIntegrationSettings()->getIsPublished()) {
            throw new ConfigurationException();
        }

        \$this->sendingPhoneNumber = \$integration->getIntegrationSettings()->getFeatureSettings()['sending_phone_number'];
        if (empty(\$this->sendingPhoneNumber)) {
            throw new ConfigurationException();
        }

        \$keys = \$integration->getDecryptedApiKeys();
        if (empty(\$keys['username']) || empty(\$keys['password'])) {
            throw new ConfigurationException();
        }

        \$this->accountSid = \$keys['username'];
        \$this->authToken  = \$keys['password'];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Integration/Twilio/Configuration.php";
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
        return new Source("", "@bundles/SmsBundle/Integration/Twilio/Configuration.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Integration/Twilio/Configuration.php");
    }
}
