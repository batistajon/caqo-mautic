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

/* @bundles/EmailBundle/Swiftmailer/Transport/MailjetTransport.php */
class __TwigTemplate_5d1338aead622f21c6311f8698f55324b7e3ba36481c218e4cade83749298664 extends Template
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
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * Class MailjetlTransport.
 */
class MailjetTransport extends \\Swift_SmtpTransport implements CallbackTransportInterface
{
    /**
     * @var bool
     */
    private \$sandboxMode;

    /**
     * @var string
     */
    private \$sandboxMail;

    /**
     * @var TransportCallback
     */
    private \$transportCallback;

    /**
     * {@inheritdoc}
     */
    public function __construct(TransportCallback \$transportCallback, \$sandboxMode = false, \$sandboxMail = '')
    {
        parent::__construct('in-v3.mailjet.com', 587, 'tls');
        \$this->setAuthMode('login');

        \$this->setSandboxMode(\$sandboxMode);
        \$this->setSandboxMail(\$sandboxMail);

        \$this->transportCallback = \$transportCallback;
    }

    /**
     * @param null \$failedRecipients
     *
     * @return int|void
     *
     * @throws \\Exception
     */
    public function send(\\Swift_Mime_SimpleMessage \$message, &\$failedRecipients = null)
    {
        // add leadIdHash to track this email
        if (isset(\$message->leadIdHash)) {
            // contact leadidHeash and email to be sure not applying email stat to bcc

            \$message->getHeaders()->removeAll('X-MJ-CUSTOMID');

            \$message->getHeaders()->addTextHeader('X-MJ-CUSTOMID', \$message->leadIdHash.'-'.key(\$message->getTo()));
        }

        if (\$this->isSandboxMode()) {
            \$message->setSubject(key(\$message->getTo()).' - '.\$message->getSubject());
            \$message->setTo(\$this->getSandboxMail());
        }

        return parent::send(\$message, \$failedRecipients);
    }

    /**
     * Returns a \"transport\" string to match the URL path /mailer/{transport}/callback.
     *
     * @return mixed
     */
    public function getCallbackPath()
    {
        return 'mailjet';
    }

    /**
     * Handle response.
     *
     * @return mixed
     */
    public function processCallbackRequest(Request \$request)
    {
        \$postData = json_decode(\$request->getContent(), true);

        if (is_array(\$postData) && isset(\$postData['event'])) {
            // Mailjet API callback V1
            \$events = [
                \$postData,
            ];
        } elseif (is_array(\$postData)) {
            // Mailjet API callback V2
            \$events = \$postData;
        } else {
            // respone must be an array
            return null;
        }

        foreach (\$events as \$event) {
            if (!in_array(\$event['event'], ['bounce', 'blocked', 'spam', 'unsub'])) {
                continue;
            }

            if (('bounce' === \$event['event']) || ('blocked' === \$event['event'])) {
                \$type   = DoNotContact::BOUNCED;
                if ('blocked' === \$event['event']) {
                    \$reason = 'BLOCKED: '.\$event['error_related_to'].': '.\$event['error'];
                } elseif (false === \$event['hard_bounce']) {
                    \$reason = 'SOFT: '.\$event['error_related_to'].': '.\$event['error'].': '.\$event['comment'];
                } else {
                    \$reason = 'HARD: '.\$event['error_related_to'].': '.\$event['error'];
                }
            } elseif ('spam' === \$event['event']) {
                \$reason = 'User reported email as spam, source: '.\$event['source'];
                \$type   = DoNotContact::UNSUBSCRIBED;
            } elseif ('unsub' === \$event['event']) {
                \$reason = 'User unsubscribed';
                \$type   = DoNotContact::UNSUBSCRIBED;
            } else {
                continue;
            }

            if (isset(\$event['CustomID']) && '' !== \$event['CustomID'] && false !== strpos(\$event['CustomID'], '-', 0)) {
                \$fistDashPos = strpos(\$event['CustomID'], '-', 0);
                \$leadIdHash  = substr(\$event['CustomID'], 0, \$fistDashPos);
                \$leadEmail   = substr(\$event['CustomID'], \$fistDashPos + 1, strlen(\$event['CustomID']));
                if (\$event['email'] == \$leadEmail) {
                    \$this->transportCallback->addFailureByHashId(\$leadIdHash, \$reason, \$type);
                }
            } else {
                \$this->transportCallback->addFailureByAddress(\$event['email'], \$reason, \$type);
            }
        }
    }

    /**
     * @return bool
     */
    private function isSandboxMode()
    {
        return \$this->sandboxMode;
    }

    /**
     * @param bool \$sandboxMode
     */
    private function setSandboxMode(\$sandboxMode)
    {
        \$this->sandboxMode = \$sandboxMode;
    }

    /**
     * @return string
     */
    private function getSandboxMail()
    {
        return \$this->sandboxMail;
    }

    /**
     * @param string \$sandboxMail
     */
    private function setSandboxMail(\$sandboxMail)
    {
        \$this->sandboxMail = \$sandboxMail;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Transport/MailjetTransport.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Transport/MailjetTransport.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Transport/MailjetTransport.php");
    }
}
