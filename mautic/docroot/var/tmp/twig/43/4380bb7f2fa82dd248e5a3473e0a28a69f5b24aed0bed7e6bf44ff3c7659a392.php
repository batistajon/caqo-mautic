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

/* @bundles/EmailBundle/Swiftmailer/Transport/MomentumTransport.php */
class __TwigTemplate_490dbe7b40ba7894a318bbdbb0f31794026b7f38ef8f461385d5afc3048c46f3 extends Template
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

use Mautic\\EmailBundle\\Swiftmailer\\Momentum\\Callback\\MomentumCallback;
use Mautic\\EmailBundle\\Swiftmailer\\Momentum\\Facade\\MomentumFacadeInterface;
use Swift_Events_EventListener;
use Swift_Mime_SimpleMessage;
use Symfony\\Component\\HttpFoundation\\Request;

class MomentumTransport implements \\Swift_Transport, TokenTransportInterface, CallbackTransportInterface
{
    /**
     * @var MomentumFacadeInterface
     */
    private \$momentumFacade;

    /**
     * @var \\Swift_Events_SimpleEventDispatcher
     */
    private \$swiftEventDispatcher;

    /**
     * @var bool
     */
    private \$started = false;

    /**
     * @var MomentumCallback
     */
    private \$momentumCallback;

    /**
     * MomentumTransport constructor.
     */
    public function __construct(
        MomentumCallback \$momentumCallback,
        MomentumFacadeInterface \$momentumFacade
    ) {
        \$this->momentumCallback = \$momentumCallback;
        \$this->momentumFacade   = \$momentumFacade;
    }

    /**
     * Test if this Transport mechanism has started.
     *
     * @return bool
     */
    public function isStarted()
    {
        return \$this->started;
    }

    /**
     * Start this Transport mechanism.
     *
     * @throws \\Swift_TransportException
     */
    public function start()
    {
        \$this->started = true;
    }

    /**
     * Stop this Transport mechanism.
     */
    public function stop()
    {
    }

    /**
     * Send the given Message.
     *
     * Recipient/sender data will be retrieved from the Message API.
     * The return value is the number of recipients who were accepted for delivery.
     *
     * @param string[] \$failedRecipients An array of failures by-reference
     *
     * @return int
     *
     * @throws \\Swift_TransportException
     */
    public function send(Swift_Mime_SimpleMessage \$message, &\$failedRecipients = null)
    {
        return \$this->momentumFacade->send(\$message);
    }

    /**
     * Register a plugin in the Transport.
     */
    public function registerPlugin(Swift_Events_EventListener \$plugin)
    {
        \$this->getDispatcher()->bindEventListener(\$plugin);
    }

    /**
     * @return \\Swift_Events_SimpleEventDispatcher
     */
    private function getDispatcher()
    {
        if (null === \$this->swiftEventDispatcher) {
            \$this->swiftEventDispatcher = new \\Swift_Events_SimpleEventDispatcher();
        }

        return \$this->swiftEventDispatcher;
    }

    /**
     * Return the max number of to addresses allowed per batch.  If there is no limit, return 0.
     *
     * @return int
     */
    public function getMaxBatchLimit()
    {
        //Sengrid allows to include max 1000 email address into 1 batch
        return 1000;
    }

    /**
     * Get the count for the max number of recipients per batch.
     *
     * @param int    \$toBeAdded Number of emails about to be added
     * @param string \$type      Type of emails being added (to, cc, bcc)
     *
     * @return int
     */
    public function getBatchRecipientCount(\\Swift_Message \$message, \$toBeAdded = 1, \$type = 'to')
    {
        //Sengrid counts all email address (to, cc and bcc)
        //https://sendgrid.com/docs/API_Reference/Web_API_v3/Mail/errors.html#message.personalizations

        \$toCount  = is_countable(\$message->getTo()) ? count(\$message->getTo()) : 0;
        \$ccCount  = is_countable(\$message->getCc()) ? count(\$message->getCc()) : 0;
        \$bccCount = is_countable(\$message->getBcc()) ? count(\$message->getBcc()) : 0;

        return \$toCount + \$ccCount + \$bccCount + \$toBeAdded;
    }

    /**
     * Function required to check that \$this->message is instanceof MauticMessage, return \$this->message->getMetadata() if it is and array() if not.
     *
     * @throws \\Exception
     */
    public function getMetadata()
    {
        throw new \\Exception('Not implemented');
    }

    /**
     * Returns a \"transport\" string to match the URL path /mailer/{transport}/callback.
     *
     * @return mixed
     */
    public function getCallbackPath()
    {
        return 'momentum_api';
    }

    /**
     * Processes the response.
     */
    public function processCallbackRequest(Request \$request)
    {
        \$this->momentumCallback->processCallbackRequest(\$request);
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
        return "@bundles/EmailBundle/Swiftmailer/Transport/MomentumTransport.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Transport/MomentumTransport.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Transport/MomentumTransport.php");
    }
}
