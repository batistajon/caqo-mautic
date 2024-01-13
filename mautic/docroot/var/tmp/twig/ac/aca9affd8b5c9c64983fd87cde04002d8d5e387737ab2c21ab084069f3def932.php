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

/* @bundles/EmailBundle/Swiftmailer/Transport/SpoolTransport.php */
class __TwigTemplate_1e9a77cb32e3710fc2b082b31ccb70d3fea89a3f14f913ada9cf4be2e9c033a8 extends Template
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

use Mautic\\EmailBundle\\Swiftmailer\\Spool\\DelegatingSpool;

class SpoolTransport extends \\Swift_Transport_SpoolTransport
{
    /**
     * @var \\Swift_Events_EventDispatcher
     */
    private \$eventDispatcher;

    /**
     * @var DelegatingSpool
     */
    private \$spool;

    /**
     * SpoolTransport constructor.
     */
    public function __construct(\\Swift_Events_EventDispatcher \$eventDispatcher, DelegatingSpool \$delegatingSpool)
    {
        \$this->eventDispatcher = \$eventDispatcher;
        \$this->spool           = \$delegatingSpool;

        parent::__construct(\$eventDispatcher, \$delegatingSpool);
    }

    /**
     * Sends or queues the given message.
     *
     * @param string[] \$failedRecipients An array of failures by-reference
     *
     * @return int The number of sent e-mails
     *
     * @throws \\Swift_IoException
     */
    public function send(\\Swift_Mime_SimpleMessage \$message, &\$failedRecipients = null)
    {
        if (\$evt = \$this->eventDispatcher->createSendEvent(\$this, \$message)) {
            \$this->eventDispatcher->dispatchEvent(\$evt, 'beforeSendPerformed');
            if (\$evt->bubbleCancelled()) {
                return 0;
            }
        }

        \$count = \$this->spool->delegateMessage(\$message, \$failedRecipients);

        if (\$evt) {
            \$successResult = \$this->spool->wasMessageSpooled() ? \\Swift_Events_SendEvent::RESULT_SPOOLED : \\Swift_Events_SendEvent::RESULT_SUCCESS;
            \$evt->setResult(\$count ? \$successResult : \\Swift_Events_SendEvent::RESULT_FAILED);
            \$this->eventDispatcher->dispatchEvent(\$evt, 'sendPerformed');
        }

        \$message->generateId(); //Make sure a new Message ID is used

        return \$count;
    }

    public function supportsTokenization(): bool
    {
        return \$this->spool->isTokenizationEnabled();
    }

    public function getMaxBatchLimit()
    {
        return \$this->spool->getRealTransport()->getMaxBatchLimit();
    }

    public function getBatchRecipientCount(\\Swift_Message \$message, \$toBeAdded = 1, \$type = 'to')
    {
        return \$this->spool->getRealTransport()->getBatchRecipientCount(\$message, \$toBeAdded, \$type);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Transport/SpoolTransport.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Transport/SpoolTransport.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Transport/SpoolTransport.php");
    }
}
