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

/* @bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO.php */
class __TwigTemplate_22daaff2c57a08605ae19fce1a802ead8cfe0a6f76567da95b83d76bbbcbbf48 extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\Momentum\\DTO;

use Mautic\\EmailBundle\\Swiftmailer\\Momentum\\DTO\\TransmissionDTO\\ContentDTO;
use Mautic\\EmailBundle\\Swiftmailer\\Momentum\\DTO\\TransmissionDTO\\OptionsDTO;
use Mautic\\EmailBundle\\Swiftmailer\\Momentum\\DTO\\TransmissionDTO\\RecipientDTO;

/**
 * Class Mail.
 */
class TransmissionDTO implements \\JsonSerializable
{
    /**
     * @var OptionsDTO|null
     */
    private \$options;

    /**
     * @var RecipientDTO[]
     */
    private \$recipients = [];

    /**
     * @var string|null
     */
    private \$campaignId;

    /**
     * @var string|null
     */
    private \$description;

    /**
     * @var string
     */
    private \$returnPath;

    /**
     * @var ContentDTO
     */
    private \$content;

    /**
     * TransmissionDTO constructor.
     *
     * @param string \$returnPath
     */
    public function __construct(ContentDTO \$content, \$returnPath, OptionsDTO \$options = null)
    {
        \$this->content    = \$content;
        \$this->returnPath = \$returnPath;
        \$this->options    = \$options;
    }

    /**
     * @return TransmissionDTO
     */
    public function addRecipient(RecipientDTO \$recipientDTO)
    {
        \$this->recipients[] = \$recipientDTO;

        return \$this;
    }

    /**
     * @param \$campaignId
     */
    public function setCampaignId(\$campaignId)
    {
        \$this->campaignId = \$campaignId;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        \$json = [
            'return_path' => \$this->returnPath,
            'recipients'  => \$this->recipients,
            'content'     => \$this->content,
        ];
        if (null !== \$this->options) {
            \$json['options'] = \$this->options;
        }
        if (!empty(\$this->campaignId)) {
            \$json['campaign_id'] = \$this->campaignId;
        }
        if (!empty(\$this->description)) {
            \$json['description'] = \$this->description;
        }

        return \$json;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO.php");
    }
}
