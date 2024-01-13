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

/* @bundles/EmailBundle/Swiftmailer/Transport/TokenTransportInterface.php */
class __TwigTemplate_f887d968d319c0cc037dffde12215f8e6b19aba127f4ffdf10514baee29cdf5f extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\Transport;

/**
 * Tokenized Transport Support.
 *
 * Interface InterfaceTokenTransport
 */
interface TokenTransportInterface
{
    /**
     * Function required to check that \$this->message is instanceof MauticMessage, return \$this->message->getMetadata() if it is and array() if not.
     *
     * @return array
     */
    public function getMetadata();

    /**
     * Return the max number of to addresses allowed per batch.  If there is no limit, return 0.
     *
     * @return int
     */
    public function getMaxBatchLimit();

    /**
     * Get the count for the max number of recipients per batch.
     *
     * @param int    \$toBeAdded Number of emails about to be added
     * @param string \$type      Type of emails being added (to, cc, bcc)
     *
     * @return int
     */
    public function getBatchRecipientCount(\\Swift_Message \$message, \$toBeAdded = 1, \$type = 'to');
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Transport/TokenTransportInterface.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Transport/TokenTransportInterface.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Transport/TokenTransportInterface.php");
    }
}
