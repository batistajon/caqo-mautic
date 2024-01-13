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

/* @bundles/EmailBundle/Swiftmailer/Momentum/Service/SwiftMessageService.php */
class __TwigTemplate_8227f827413c60b85bba3f7ad0fe8ff912db7dd816c85b855e0110fedbaa3e1f extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\Momentum\\Service;

use Mautic\\EmailBundle\\Helper\\PlainTextMessageHelper;
use Mautic\\EmailBundle\\Swiftmailer\\Message\\MauticMessage;
use Mautic\\EmailBundle\\Swiftmailer\\Momentum\\DTO\\TransmissionDTO;
use Mautic\\EmailBundle\\Swiftmailer\\Momentum\\Metadata\\MetadataProcessor;

final class SwiftMessageService implements SwiftMessageServiceInterface
{
    private \$reservedKeys = [
        'MIME-Version',
        'Content-Type',
        'Content-Transfer-Encoding',
        'To',
        'From',
        'Subject',
        'Reply-To',
        'BCC',
    ];

    /**
     * @return TransmissionDTO
     */
    public function transformToTransmission(\\Swift_Mime_SimpleMessage \$message)
    {
        \$messageFrom      = \$message->getFrom();
        \$messageFromEmail = current(array_keys(\$messageFrom));
        \$from             = new TransmissionDTO\\ContentDTO\\FromDTO(\$messageFromEmail);
        if (!empty(\$messageFrom[\$messageFromEmail])) {
            \$from->setName(\$messageFrom[\$messageFromEmail]);
        }

        // Process metadata before consuming subject, body, etc
        \$metadataProcessor = new MetadataProcessor(\$message);

        \$content = new TransmissionDTO\\ContentDTO(\$message->getSubject(), \$from);
        if (\$body = \$message->getBody()) {
            \$content->setHtml(\$body);
        }

        \$headers = \$message->getHeaders()->getAll();
        /** @var \\Swift_Mime_Header \$header */
        foreach (\$headers as \$header) {
            if (\\Swift_Mime_Header::TYPE_TEXT == \$header->getFieldType() && !in_array(\$header->getFieldName(), \$this->reservedKeys)) {
                \$content->addHeader(\$header->getFieldName(), \$header->getFieldBodyModel());
            }
        }

        if (\$messageText = PlainTextMessageHelper::getPlainTextFromMessage(\$message)) {
            \$content->setText(\$messageText);
        }

        if (\$message instanceof MauticMessage) {
            foreach (\$message->getAttachments() as \$attachment) {
                if (file_exists(\$attachment['filePath']) && is_readable(\$attachment['filePath'])) {
                    try {
                        \$swiftAttachment = \\Swift_Attachment::fromPath(\$attachment['filePath']);

                        if (!empty(\$attachment['fileName'])) {
                            \$swiftAttachment->setFilename(\$attachment['fileName']);
                        }

                        if (!empty(\$attachment['contentType'])) {
                            \$swiftAttachment->setContentType(\$attachment['contentType']);
                        }

                        if (!empty(\$attachment['inline'])) {
                            \$swiftAttachment->setDisposition('inline');
                        }
                        \$attachmentContent = \$swiftAttachment->getEncoder()->encodeString(\$swiftAttachment->getBody());
                        \$attachment        = new TransmissionDTO\\ContentDTO\\AttachementDTO(
                            \$swiftAttachment->getContentType(),
                            \$swiftAttachment->getFilename(),
                            \$attachmentContent
                        );
                        \$content->addAttachment(\$attachment);
                    } catch (\\Exception \$e) {
                        error_log(\$e);
                    }
                }
            }
        }

        \$cssHeader = \$message->getHeaders()->get('X-MC-InlineCSS');
        if (null !== \$cssHeader) {
            \$content->setInlineCss(\$cssHeader);
        }

        \$returnPath = \$message->getReturnPath() ? \$message->getReturnPath() : \$messageFromEmail;

        \$transmission = new TransmissionDTO(\$content, \$returnPath);
        \$transmission->setCampaignId(\$metadataProcessor->getCampaignId());

        \$recipientsGrouped = [
            'to'  => (array) \$message->getTo(),
            'cc'  => (array) \$message->getCc(),
            'bcc' => (array) \$message->getBcc(),
        ];

        foreach (\$recipientsGrouped as \$group => \$recipients) {
            \$isBcc = ('bcc' === \$group);
            foreach (\$recipients as \$email => \$name) {
                \$addressDTO   = new TransmissionDTO\\RecipientDTO\\AddressDTO(\$email, \$name, \$isBcc);
                \$recipientDTO = new TransmissionDTO\\RecipientDTO(
                    \$addressDTO,
                    \$metadataProcessor->getMetadata(\$email),
                    \$metadataProcessor->getSubstitutionData(\$email)
                );

                \$transmission->addRecipient(\$recipientDTO);
            }
        }

        if (count(\$recipientsGrouped['cc'])) {
            \$content->addHeader('CC', implode(',', array_keys(\$recipientsGrouped['cc'])));
        }

        return \$transmission;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Momentum/Service/SwiftMessageService.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Momentum/Service/SwiftMessageService.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Momentum/Service/SwiftMessageService.php");
    }
}
