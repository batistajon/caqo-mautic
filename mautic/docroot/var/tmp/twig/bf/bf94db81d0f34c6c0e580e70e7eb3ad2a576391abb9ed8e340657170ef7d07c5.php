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

/* @bundles/EmailBundle/Swiftmailer/SendGrid/Mail/SendGridMailAttachment.php */
class __TwigTemplate_644d5a8e16ae9d8f519959af285987267e09d13b1733de5e0d97a37c88969fc0 extends Template
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
use SendGrid\\Attachment;
use SendGrid\\Mail;

class SendGridMailAttachment
{
    public function addAttachmentsToMail(Mail \$mail, \\Swift_Mime_SimpleMessage \$message)
    {
        if (\$message instanceof MauticMessage && \$message->getAttachments()) {
            foreach (\$message->getAttachments() as \$emailAttachment) {
                \$fileContent = @file_get_contents(\$emailAttachment['filePath']);
                if (false === \$fileContent) {
                    continue;
                }
                \$base64 = base64_encode(\$fileContent);

                \$attachment = new Attachment();
                \$attachment->setContent(\$base64);
                \$attachment->setType(\$emailAttachment['contentType']);
                \$attachment->setFilename(\$emailAttachment['fileName']);
                \$mail->addAttachment(\$attachment);
            }
        } elseif (is_array(\$message->getChildren())) {
            foreach (\$message->getChildren() as \$child) {
                if (\$child instanceof \\Swift_Attachment) {
                    \$attachment = new Attachment();
                    \$base64     = base64_encode(\$child->getBody());
                    \$attachment->setContent(\$base64);
                    \$attachment->setType(\$child->getContentType());
                    \$attachment->setFilename(\$child->getFilename());
                    \$mail->addAttachment(\$attachment);
                }
            }
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
        return "@bundles/EmailBundle/Swiftmailer/SendGrid/Mail/SendGridMailAttachment.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/SendGrid/Mail/SendGridMailAttachment.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/SendGrid/Mail/SendGridMailAttachment.php");
    }
}
