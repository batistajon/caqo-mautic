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

/* @bundles/EmailBundle/Swiftmailer/SendGrid/Mail/SendGridMailMetadata.php */
class __TwigTemplate_9a069eba9722c76c2d3e87f99c8236d1c17e53faf94e1b5ff66fafb6d366a698 extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\Mail;

use SendGrid\\BccSettings;
use SendGrid\\Mail;
use SendGrid\\MailSettings;
use SendGrid\\ReplyTo;

class SendGridMailMetadata
{
    public function addMetadataToMail(Mail \$mail, \\Swift_Mime_SimpleMessage \$message)
    {
        \$mail_settings = new MailSettings();

        \$headers = \$message->getHeaders();

        // Some headers headers are reserved and cannot be sent via API
        // -> https://docs.sendgrid.com/api-reference/mail-send/mail-send
        // 'mime-version', 'date' are allowed, but not needed to be when using API, is put by their server
        \$skip_headers = [
            'x-sg-id', 'x-sg-eid', 'received', 'dkim-signature', 'content-type',
            'content-transfer-encoding', 'to', 'from', 'subject', 'reply-to', 'cc', 'bcc',
            'mime-version', 'date',
        ];

        foreach (\$headers->getAll() as \$header) {
            \$key   = \$header->getFieldName();
            \$value = \$header->getFieldBody();

            if (in_array(strtolower(\$key), \$skip_headers) || '' === \$value) {
                continue;
            }
            \$mail->addHeader(\$key, \$value);
        }

        if (\$message->getReplyTo()) {
            \$replyTo = new ReplyTo(key((array) \$message->getReplyTo()));
            \$mail->setReplyTo(\$replyTo);
        }
        if (\$message->getBcc()) {
            \$bcc_settings = new BccSettings();
            \$bcc_settings->setEnable(true);
            \$bcc_settings->setEmail(key(\$message->getBcc()));
            \$mail_settings->setBccSettings(\$bcc_settings);
        }

        \$mail->setMailSettings(\$mail_settings);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/SendGrid/Mail/SendGridMailMetadata.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/SendGrid/Mail/SendGridMailMetadata.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/SendGrid/Mail/SendGridMailMetadata.php");
    }
}
