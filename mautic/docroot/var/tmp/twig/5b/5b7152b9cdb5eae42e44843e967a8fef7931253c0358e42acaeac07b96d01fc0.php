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

/* @bundles/EmailBundle/Swiftmailer/Transport/AmazonTransport.php */
class __TwigTemplate_35a788358beef601e9d0b32d8236c49f5c75df0cdb5e68c731892329846e4039 extends Template
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

use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\Swiftmailer\\Amazon\\AmazonCallback;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * Class AmazonTransport.
 */
class AmazonTransport extends \\Swift_SmtpTransport implements CallbackTransportInterface, BounceProcessorInterface, UnsubscriptionProcessorInterface
{
    /**
     * @var AmazonCallback
     */
    private \$amazonCallback;

    /**
     * AmazonTransport constructor.
     *
     * @param string \$host
     * @param string \$otherHost
     * @param int    \$port
     */
    public function __construct(\$region, \$otherRegion, \$port, AmazonCallback \$amazonCallback)
    {
        \$port                 = \$port ?: 2587;
        \$host                 = \$this->buildHost(\$region, \$otherRegion);
        \$this->amazonCallback = \$amazonCallback;

        parent::__construct(\$host, \$port, 'tls');

        \$this->setAuthMode('login');
    }

    /**
     * Switch statement used to avoid breaking change.
     *
     * @param string \$region
     * @param string \$otherRegion
     *
     * @return string
     */
    public function buildHost(\$region, \$otherRegion)
    {
        \$sesRegion = ('other' === \$region) ? \$otherRegion : \$region;

        switch (\$sesRegion) {
            case 'email-smtp.eu-west-1.amazonaws.com':
            case 'email-smtp.us-east-1.amazonaws.com':
            case 'email-smtp.us-west-2.amazonaws.com':
                return \$sesRegion;
            default:
                return 'email-smtp.'.\$sesRegion.'.amazonaws.com';
        }
    }

    /**
     * Returns a \"transport\" string to match the URL path /mailer/{transport}/callback.
     *
     * @return string
     */
    public function getCallbackPath()
    {
        return 'amazon';
    }

    /**
     * Handle bounces & complaints from Amazon.
     */
    public function processCallbackRequest(Request \$request)
    {
        \$this->amazonCallback->processCallbackRequest(\$request);
    }

    public function processBounce(Message \$message)
    {
        \$this->amazonCallback->processBounce(\$message);
    }

    public function processUnsubscription(Message \$message)
    {
        \$this->amazonCallback->processUnsubscription(\$message);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Transport/AmazonTransport.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Transport/AmazonTransport.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Transport/AmazonTransport.php");
    }
}
