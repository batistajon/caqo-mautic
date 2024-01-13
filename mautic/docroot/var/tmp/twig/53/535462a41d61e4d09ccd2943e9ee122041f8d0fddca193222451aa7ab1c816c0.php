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

/* @bundles/EmailBundle/Swiftmailer/Transport/PepipostTransport.php */
class __TwigTemplate_b6e20c6a072590ae91f2bcd29d872555c6e566c7fa5a16136884589d62a479f8 extends Template
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

use Mautic\\EmailBundle\\Model\\TransportCallback;
use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Translation\\TranslatorInterface;

/**
 * Class PepipostTransport.
 */
class PepipostTransport extends \\Swift_SmtpTransport implements CallbackTransportInterface
{
    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var LoggerInterface
     */
    private \$logger;

    /**
     * @var TransportCallback
     */
    private \$transportCallback;

    /**
     * PepipostTransport constructor.
     */
    public function __construct(TranslatorInterface \$translator, LoggerInterface \$logger, TransportCallback \$transportCallback)
    {
        \$this->translator        = \$translator;
        \$this->logger            = \$logger;
        \$this->transportCallback = \$transportCallback;

        parent::__construct('smtp.pepipost.com', 587, 'tls');

        \$this->setAuthMode('login');
    }

    /**
     * Returns a \"transport\" string to match the URL path /mailer/{transport}/callback.
     *
     * @return mixed
     */
    public function getCallbackPath()
    {
        return 'pepipost';
    }

    /**
     * Handle bounces & complaints from Pepipost.
     */
    public function processCallbackRequest(Request \$request)
    {
        \$this->logger->debug('Receiving webhook from Pepipost');

        \$email    = rawurldecode(\$request->get(0)['EMAIL']);
        \$event    = rawurldecode(\$request->get(0)['EVENT']);

        if ('unsubscribed' == \$event) {
            \$this->transportCallback->addFailureByAddress(\$email, \$this->translator->trans('mautic.email.bounce.reason.unsubscribed'), DoNotContact::UNSUBSCRIBED);
        } elseif ('invalid' == \$event) {
            \$this->transportCallback->addFailureByAddress(\$email, \$this->translator->trans('mautic.email.bounce.reason.invalid'));
        } elseif ('bounced' == \$event) {
            \$type = rawurldecode(\$request->get(0)['BOUNCE_TYPE']);
            if ('HARDBOUNCE' == \$type) {
                \$this->transportCallback->addFailureByAddress(\$email, \$this->translator->trans('mautic.email.bounce.reason.hard_bounce'));
            } elseif ('SOFTBOUNCE' == \$type) {
                \$this->transportCallback->addFailureByAddress(\$email, \$this->translator->trans('mautic.email.bounce.reason.soft_bounce'));
            }
        } elseif ('spam' == \$event) {
            \$this->transportCallback->addFailureByAddress(\$email, \$this->translator->trans('mautic.email.bounce.reason.spam'));
        } elseif ('dropped' == \$event) {
            \$this->transportCallback->addFailureByAddress(\$email, \$this->translator->trans('mautic.email.bounce.reason.dropped'));
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Transport/PepipostTransport.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Transport/PepipostTransport.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Transport/PepipostTransport.php");
    }
}
