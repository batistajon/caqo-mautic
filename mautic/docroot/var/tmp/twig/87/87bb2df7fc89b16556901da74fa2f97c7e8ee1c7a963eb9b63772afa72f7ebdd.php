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

/* @bundles/EmailBundle/MonitoredEmail/Processor/Address.php */
class __TwigTemplate_7f8f385361640fb94a54077b4b7e3126c45ae9a773c50236891e61252b5177d5 extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Processor;

/**
 * Class AddressList.
 */
class Address
{
    /**
     * @param string \$addresses String of email address from an email header
     *
     * @return array
     */
    public static function parseList(\$addresses)
    {
        \$results         = [];
        \$parsedAddresses = imap_rfc822_parse_adrlist(\$addresses, 'default.domain.name');
        foreach (\$parsedAddresses as \$parsedAddress) {
            if (
                isset(\$parsedAddress->host)
                &&
                '.SYNTAX-ERROR.' != \$parsedAddress->host
                &&
                'default.domain.name' != \$parsedAddress->host
            ) {
                \$email           = \$parsedAddress->mailbox.'@'.\$parsedAddress->host;
                \$name            = isset(\$parsedAddress->personal) ? \$parsedAddress->personal : null;
                \$results[\$email] = \$name;
            }
        }

        return \$results;
    }

    /**
     * @param \$address
     *
     * @return string|null
     */
    public static function parseAddressForStatHash(\$address)
    {
        if (preg_match('#^(.*?)\\+(.*?)@(.*?)\$#', \$address, \$parts)) {
            if (strstr(\$parts[2], '_')) {
                // Has an ID hash so use it to find the lead
                list(\$ignore, \$hashId) = explode('_', \$parts[2]);

                return \$hashId;
            }
        }

        return null;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/MonitoredEmail/Processor/Address.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/Address.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/MonitoredEmail/Processor/Address.php");
    }
}
