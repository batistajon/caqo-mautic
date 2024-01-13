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

/* @bundles/SmsBundle/Integration/Twilio/TwilioTransport.php */
class __TwigTemplate_8c66e3c85468b2e4900e5aba88781441f274fea79d973aaebe902d82935d74c4 extends Template
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

use libphonenumber\\NumberParseException;
use libphonenumber\\PhoneNumberFormat;
use libphonenumber\\PhoneNumberUtil;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\SmsBundle\\Sms\\TransportInterface;
use Psr\\Log\\LoggerInterface;
use Twilio\\Exceptions\\ConfigurationException;
use Twilio\\Exceptions\\TwilioException;
use Twilio\\Rest\\Client;

class TwilioTransport implements TransportInterface
{
    /**
     * @var Configuration
     */
    private \$configuration;

    /**
     * @var LoggerInterface
     */
    private \$logger;

    /**
     * @var Client
     */
    private \$client;

    /**
     * @var string
     */
    private \$sendingPhoneNumber;

    /**
     * TwilioTransport constructor.
     */
    public function __construct(Configuration \$configuration, LoggerInterface \$logger)
    {
        \$this->logger        = \$logger;
        \$this->configuration = \$configuration;
    }

    /**
     * @param string \$content
     *
     * @return bool|string
     */
    public function sendSms(Lead \$lead, \$content)
    {
        \$number = \$lead->getLeadPhoneNumber();

        if (null === \$number) {
            return false;
        }

        try {
            \$this->configureClient();

            \$this->client->messages->create(
                \$this->sanitizeNumber(\$number),
                [
                    'from' => \$this->sendingPhoneNumber,
                    'body' => \$content,
                ]
            );

            return true;
        } catch (NumberParseException \$exception) {
            \$this->logger->addWarning(
                \$exception->getMessage(),
                ['exception' => \$exception]
            );

            return \$exception->getMessage();
        } catch (ConfigurationException \$exception) {
            \$message = (\$exception->getMessage()) ? \$exception->getMessage() : 'mautic.sms.transport.twilio.not_configured';
            \$this->logger->addWarning(
                \$message,
                ['exception' => \$exception]
            );

            return \$message;
        } catch (TwilioException \$exception) {
            \$this->logger->addWarning(
                \$exception->getMessage(),
                ['exception' => \$exception]
            );

            return \$exception->getMessage();
        }
    }

    /**
     * @param string \$number
     *
     * @return string
     *
     * @throws NumberParseException
     */
    private function sanitizeNumber(\$number)
    {
        \$util   = PhoneNumberUtil::getInstance();
        \$parsed = \$util->parse(\$number, 'US');

        return \$util->format(\$parsed, PhoneNumberFormat::E164);
    }

    /**
     * @throws ConfigurationException
     */
    private function configureClient()
    {
        if (\$this->client) {
            // Already configured
            return;
        }

        \$this->sendingPhoneNumber = \$this->configuration->getSendingNumber();
        \$this->client             = new Client(
            \$this->configuration->getAccountSid(),
            \$this->configuration->getAuthToken()
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Integration/Twilio/TwilioTransport.php";
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
        return new Source("", "@bundles/SmsBundle/Integration/Twilio/TwilioTransport.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Integration/Twilio/TwilioTransport.php");
    }
}
