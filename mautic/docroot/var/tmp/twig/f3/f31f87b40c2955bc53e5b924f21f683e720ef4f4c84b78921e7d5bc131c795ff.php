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

/* @bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/ContentDTO.php */
class __TwigTemplate_bf79c50407f2deb014d70776f3bba2545059edeb62ceb240c9eb315af941c0a4 extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\Momentum\\DTO\\TransmissionDTO;

use Mautic\\EmailBundle\\Swiftmailer\\Momentum\\DTO\\TransmissionDTO\\ContentDTO\\AttachementDTO;
use Mautic\\EmailBundle\\Swiftmailer\\Momentum\\DTO\\TransmissionDTO\\ContentDTO\\FromDTO;

/**
 * Class ContentDTO.
 */
final class ContentDTO implements \\JsonSerializable
{
    /**
     * @var string
     */
    private \$subject;

    /**
     * @var FromDTO
     */
    private \$from = [];

    /**
     * @var string|null
     */
    private \$html;

    /**
     * @var string|null
     */
    private \$inlineCss;

    /**
     * @var string|null
     */
    private \$text;

    /**
     * @var string|null
     */
    private \$replyTo;

    /**
     * @var array
     */
    private \$headers = [];

    /**
     * @var array
     */
    private \$attachments = [];

    /**
     * ContentDTO constructor.
     *
     * @param \$subject
     */
    public function __construct(\$subject, FromDTO \$from)
    {
        \$this->subject = \$subject;
        \$this->from    = \$from;
    }

    /**
     * @param string|null \$html
     *
     * @return ContentDTO
     */
    public function setHtml(\$html)
    {
        \$this->html = \$html;

        return \$this;
    }

    /**
     * @param string|null \$inlineCss
     *
     * @return ContentDTO
     */
    public function setInlineCss(\$inlineCss = null)
    {
        \$this->inlineCss = \$inlineCss;

        return \$this;
    }

    /**
     * @param string|null \$text
     *
     * @return ContentDTO
     */
    public function setText(\$text)
    {
        \$this->text = \$text;

        return \$this;
    }

    /**
     * @param string \$key
     * @param string \$value
     *
     * @return ContentDTO
     */
    public function addHeader(\$key, \$value)
    {
        \$this->headers[\$key] = \$value;

        return \$this;
    }

    /**
     * @return \$this
     */
    public function addAttachment(AttachementDTO \$attachementDTO)
    {
        \$this->attachments[] = \$attachementDTO;

        return \$this;
    }

    /**
     * @return array|mixed
     */
    public function jsonSerialize()
    {
        \$json = [
            'subject' => \$this->subject,
            'from'    => \$this->from,
        ];
        if (null !== \$this->html) {
            \$json['html'] = \$this->html;
        }
        if (null !== \$this->text) {
            \$json['text'] = \$this->text;
        }
        if (null !== \$this->replyTo) {
            \$json['reply_to'] = \$this->replyTo;
        }
        if (0 !== count(\$this->headers)) {
            \$json['headers'] = \$this->headers;
        }
        if (0 !== count(\$this->attachments)) {
            \$json['attachments'] = \$this->attachments;
        }
        if (null !== \$this->inlineCss) {
            \$json['inline_css'] = \$this->inlineCss;
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
        return "@bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/ContentDTO.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/ContentDTO.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/ContentDTO.php");
    }
}
