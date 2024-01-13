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

/* @bundles/EmailBundle/Swiftmailer/SendGrid/Mail/SendGridMailBase.php */
class __TwigTemplate_d97b7740fbf1212ffc2e971531189fdc4c282865ff0afb67d2665a9c441e88b9 extends Template
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

use Mautic\\EmailBundle\\Helper\\PlainTextMessageHelper;
use SendGrid\\Content;
use SendGrid\\Email;
use SendGrid\\Mail;

class SendGridMailBase
{
    /**
     * @var PlainTextMessageHelper
     */
    private \$plainTextMessageHelper;

    public function __construct(PlainTextMessageHelper \$plainTextMessageHelper)
    {
        \$this->plainTextMessageHelper = \$plainTextMessageHelper;
    }

    /**
     * @return Mail
     */
    public function getSendGridMail(\\Swift_Mime_SimpleMessage \$message)
    {
        \$froms       = \$message->getFrom();
        \$from        = new Email(current(\$froms), key(\$froms));
        \$subject     = \$message->getSubject();

        \$contentMain   = new Content(\$this->getContentType(\$message), \$message->getBody());
        \$contentSecond = null;

        // Plain text message must be first if present
        if ('text/plain' !== \$contentMain->getType()) {
            \$plainText = \$this->plainTextMessageHelper->getPlainTextFromMessageNotStatic(\$message);
            if (\$plainText) {
                \$contentSecond = \$contentMain;
                \$contentMain   = new Content('text/plain', \$plainText);
            }
        }

        // Sendgrid class requires to pass an TO email even if we do not have any general one
        // Pass a dummy email and clear it in the next 2 lines
        \$to                    = 'dummy-email-to-be-deleted@example.com';
        \$mail                  = new Mail(\$from, \$subject, \$to, \$contentMain);
        \$mail->personalization = [];

        if (\$contentSecond) {
            \$mail->addContent(\$contentSecond);
        }

        return \$mail;
    }

    /**
     * @return string
     */
    private function getContentType(\\Swift_Mime_SimpleMessage \$message)
    {
        return 'text/plain' === \$message->getContentType() ? \$message->getContentType() : 'text/html';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/SendGrid/Mail/SendGridMailBase.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/SendGrid/Mail/SendGridMailBase.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/SendGrid/Mail/SendGridMailBase.php");
    }
}
