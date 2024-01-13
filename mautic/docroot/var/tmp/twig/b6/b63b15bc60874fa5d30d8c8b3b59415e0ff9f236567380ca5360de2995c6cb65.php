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

/* @bundles/EmailBundle/Tests/Helper/Transport/SmtpTransport.php */
class __TwigTemplate_fb174e734d281e1ef368e0f9d7afe82bfe5f7c5ec8c3117832b5bac8c464506c extends Template
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

use Swift_Mime_SimpleMessage;

class SmtpTransport implements \\Swift_Transport
{
    public Swift_Mime_SimpleMessage \$sentMessage;

    public function send(Swift_Mime_SimpleMessage \$message, &\$failedRecipients = null)
    {
        \$this->sentMessage = clone \$message;
    }

    /**
     * Test if this Transport mechanism has started.
     *
     * @return bool
     */
    public function isStarted()
    {
        return true;
    }

    /**
     * Start this Transport mechanism.
     */
    public function start()
    {
        return true;
    }

    /**
     * Stop this Transport mechanism.
     */
    public function stop()
    {
        return true;
    }

    /**
     * Register a plugin in the Transport.
     */
    public function registerPlugin(\\Swift_Events_EventListener \$plugin)
    {
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
        return "@bundles/EmailBundle/Tests/Helper/Transport/SmtpTransport.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Helper/Transport/SmtpTransport.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Helper/Transport/SmtpTransport.php");
    }
}
