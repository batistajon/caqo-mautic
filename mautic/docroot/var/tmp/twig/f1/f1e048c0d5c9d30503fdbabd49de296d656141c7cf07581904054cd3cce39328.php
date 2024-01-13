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

/* @bundles/EmailBundle/Event/TransportWebhookEvent.php */
class __TwigTemplate_285bcd127ff92104932a9e19fdda1e710c51ae14a4343589cc1a063ebc6a1307 extends Template
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

namespace Mautic\\EmailBundle\\Event;

use Mautic\\EmailBundle\\Swiftmailer\\Transport\\CallbackTransportInterface;
use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * Event triggered when a transport service send Mautic a webhook request.
 */
class TransportWebhookEvent extends Event
{
    /**
     * @var CallbackTransportInterface
     */
    private \$transport;

    /**
     * @var Request
     */
    private \$request;

    public function __construct(CallbackTransportInterface \$transport, Request \$request)
    {
        \$this->transport = \$transport;
        \$this->request   = \$request;
    }

    /**
     * @return CallbackTransportInterface
     */
    public function getTransport()
    {
        return \$this->transport;
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return \$this->request;
    }

    /**
     * Checks if the event is for specific transport.
     *
     * @param string \$transportClassName
     *
     * @return bool
     */
    public function transportIsInstanceOf(\$transportClassName)
    {
        return \$this->transport instanceof \$transportClassName;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Event/TransportWebhookEvent.php";
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
        return new Source("", "@bundles/EmailBundle/Event/TransportWebhookEvent.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Event/TransportWebhookEvent.php");
    }
}
