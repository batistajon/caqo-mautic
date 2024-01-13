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

/* @bundles/EmailBundle/Swiftmailer/SendGrid/SendGridApiMessage.php */
class __TwigTemplate_aba5e555a85c35ea83f5e7336056ac1581c2a3ec17f477cde4f038ad970b783c extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\SendGrid;

use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\Mail\\SendGridMailAttachment;
use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\Mail\\SendGridMailBase;
use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\Mail\\SendGridMailMetadata;
use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\Mail\\SendGridMailPersonalization;
use SendGrid\\Mail;

class SendGridApiMessage
{
    /**
     * @var SendGridMailBase
     */
    private \$sendGridMailBase;

    /**
     * @var SendGridMailPersonalization
     */
    private \$sendGridMailPersonalization;

    /**
     * @var SendGridMailMetadata
     */
    private \$sendGridMailMetadata;

    /**
     * @var SendGridMailAttachment
     */
    private \$sendGridMailAttachment;

    public function __construct(
        SendGridMailBase \$sendGridMailBase,
        SendGridMailPersonalization \$sendGridMailPersonalization,
        SendGridMailMetadata \$sendGridMailMetadata,
        SendGridMailAttachment \$sendGridMailAttachment
    ) {
        \$this->sendGridMailBase            = \$sendGridMailBase;
        \$this->sendGridMailPersonalization = \$sendGridMailPersonalization;
        \$this->sendGridMailMetadata        = \$sendGridMailMetadata;
        \$this->sendGridMailAttachment      = \$sendGridMailAttachment;
    }

    /**
     * @return Mail
     */
    public function getMessage(\\Swift_Mime_SimpleMessage \$message)
    {
        \$mail = \$this->sendGridMailBase->getSendGridMail(\$message);

        \$this->sendGridMailPersonalization->addPersonalizedDataToMail(\$mail, \$message);
        \$this->sendGridMailMetadata->addMetadataToMail(\$mail, \$message);
        \$this->sendGridMailAttachment->addAttachmentsToMail(\$mail, \$message);

        return \$mail;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/SendGrid/SendGridApiMessage.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/SendGrid/SendGridApiMessage.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/SendGrid/SendGridApiMessage.php");
    }
}
