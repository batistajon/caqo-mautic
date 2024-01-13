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

/* @bundles/EmailBundle/Swiftmailer/SendGrid/Mail/SendGridMailPersonalization.php */
class __TwigTemplate_3ce3ea2871d2eabfb1b84ab494c4a3710d13fd1934360f21a959fbcffbbbba92 extends Template
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

use Mautic\\EmailBundle\\Swiftmailer\\Message\\MauticMessage;
use SendGrid\\Email;
use SendGrid\\Mail;
use SendGrid\\Personalization;

class SendGridMailPersonalization
{
    public function addPersonalizedDataToMail(Mail \$mail, \\Swift_Mime_SimpleMessage \$message)
    {
        if (!\$message instanceof MauticMessage) { //Used for \"Send test email\" in settings
            foreach (\$message->getTo() as \$recipientEmail => \$recipientName) {
                \$personalization = new Personalization();
                \$to              = new Email(\$recipientName, \$recipientEmail);
                \$personalization->addTo(\$to);
                \$mail->addPersonalization(\$personalization);
            }

            return;
        }

        \$metadata = \$message->getMetadata();
        \$ccEmail  = \$message->getCc();
        if (\$ccEmail) {
            \$cc = new Email(current(\$ccEmail), key(\$ccEmail));
        }
        foreach (\$message->getTo() as \$recipientEmail => \$recipientName) {
            if (empty(\$metadata[\$recipientEmail])) {
                //Recipient is not in metadata = we do not have tokens for this email.
                continue;
            }
            \$personalization = new Personalization();
            \$to              = new Email(\$recipientName, \$recipientEmail);
            \$personalization->addTo(\$to);

            if (isset(\$cc)) {
                \$clone = clone \$cc;
                \$personalization->addCc(\$clone);
            }

            foreach (\$metadata[\$recipientEmail]['tokens'] as \$token => \$value) {
                \$personalization->addSubstitution(\$token, (string) \$value);
            }

            \$mail->addPersonalization(\$personalization);
            unset(\$metadata[\$recipientEmail]);
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
        return "@bundles/EmailBundle/Swiftmailer/SendGrid/Mail/SendGridMailPersonalization.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/SendGrid/Mail/SendGridMailPersonalization.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/SendGrid/Mail/SendGridMailPersonalization.php");
    }
}
