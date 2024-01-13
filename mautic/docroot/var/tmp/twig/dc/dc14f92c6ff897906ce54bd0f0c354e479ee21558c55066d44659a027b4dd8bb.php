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

/* @bundles/EmailBundle/Swiftmailer/Transport/AbstractTokenSmtpTransport.php */
class __TwigTemplate_6cccc3ca37e7a694a245d2b3ad677b1114134dc1f420fa9dc461bce7ebcae3be extends Template
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

use Mautic\\EmailBundle\\Swiftmailer\\Message\\MauticMessage;

/**
 * Class AbstractBatchTransport.
 */
abstract class AbstractTokenSmtpTransport extends \\Swift_SmtpTransport implements TokenTransportInterface
{
    /**
     * @var \\Swift_Mime_SimpleMessage
     */
    protected \$message;

    /**
     * Do whatever is necessary to \$this->message in order to deliver a batched payload. i.e. add custom headers, etc.
     */
    abstract protected function prepareMessage();

    /**
     * @param null \$failedRecipients
     *
     * @return int
     *
     * @throws \\Exception
     */
    public function send(\\Swift_Mime_SimpleMessage \$message, &\$failedRecipients = null)
    {
        \$this->message = \$message;

        \$this->prepareMessage();

        return parent::send(\$message, \$failedRecipients);
    }

    /**
     * Get the metadata from a MauticMessage.
     *
     * @return array
     */
    public function getMetadata()
    {
        return (\$this->message instanceof MauticMessage) ? \$this->message->getMetadata() : [];
    }

    /**
     * Get attachments from a MauticMessage.
     *
     * @return array
     */
    public function getAttachments()
    {
        return (\$this->message instanceof MauticMessage) ? \$this->message->getAttachments() : [];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Transport/AbstractTokenSmtpTransport.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Transport/AbstractTokenSmtpTransport.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Transport/AbstractTokenSmtpTransport.php");
    }
}
