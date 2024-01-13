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

/* @bundles/EmailBundle/Tests/Helper/Transport/BcInterfaceTokenTransport.php */
class __TwigTemplate_0a7b34e6d841389e0b9ab669093eb7cf0ddf7cb722d28c1a0b825a963f1bcae0 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Helper\\Transport;

use Mautic\\EmailBundle\\Swiftmailer\\Message\\MauticMessage;
use Mautic\\EmailBundle\\Swiftmailer\\Transport\\InterfaceTokenTransport;
use Swift_Events_EventListener;

class BcInterfaceTokenTransport implements InterfaceTokenTransport, \\Swift_Transport
{
    private \$fromAddresses = [];
    private \$metadatas     = [];
    private \$validate      = false;
    private \$maxRecipients;
    private \$numberToFail;
    private \$message;

    /**
     * BatchTransport constructor.
     *
     * @param bool \$validate
     */
    public function __construct(\$validate = false, \$maxRecipients = 4, \$numberToFail = 1)
    {
        \$this->validate      = \$validate;
        \$this->maxRecipients = \$maxRecipients;
        \$this->numberToFail  = (int) \$numberToFail;
    }

    /**
     * @param null \$failedRecipients
     */
    public function send(\\Swift_Mime_SimpleMessage \$message, &\$failedRecipients = null)
    {
        \$this->message         = \$message;
        \$this->fromAddresses[] = key(\$message->getFrom());
        \$this->metadatas[]     = \$this->getMetadata();

        return true;
    }

    /**
     * @return int
     */
    public function getMaxBatchLimit()
    {
        return \$this->maxRecipients;
    }

    /**
     * @param int    \$toBeAdded
     * @param string \$type
     *
     * @return int
     */
    public function getBatchRecipientCount(\\Swift_Message \$message, \$toBeAdded = 1, \$type = 'to')
    {
        \$to      = \$message->getTo();
        \$toCount = (is_array(\$to) || \$to instanceof \\Countable) ? count(\$to) : 0;

        return ('to' === \$type) ? \$toCount + \$toBeAdded : \$toCount;
    }

    /**
     * @return array
     */
    public function getFromAddresses()
    {
        return \$this->fromAddresses;
    }

    /**
     * @return array
     */
    public function getMetadatas()
    {
        return \$this->metadatas;
    }

    public function getMetadata()
    {
        return (\$this->message instanceof MauticMessage) ? \$this->message->getMetadata() : [];
    }

    /**
     * @return bool
     */
    public function isStarted()
    {
        return true;
    }

    public function stop()
    {
        // ignore
    }

    public function registerPlugin(Swift_Events_EventListener \$plugin)
    {
        // ignore
    }

    public function start()
    {
        // ignore
    }

    /**
     * @return bool
     */
    public function ping()
    {
        return true;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Helper/Transport/BcInterfaceTokenTransport.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Helper/Transport/BcInterfaceTokenTransport.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Helper/Transport/BcInterfaceTokenTransport.php");
    }
}
