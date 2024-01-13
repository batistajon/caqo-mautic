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

/* @bundles/EmailBundle/Swiftmailer/Message/MauticMessage.php */
class __TwigTemplate_43a50a65700e52540f29f2787df3648a93bb1ffea3681f91d2db5fe1880f9ce8 extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\Message;

class MauticMessage extends \\Swift_Message
{
    /**
     * @var array
     */
    protected \$metadata = [];

    /**
     * @var array
     */
    protected \$attachments = [];

    /**
     * Create a new Message.
     *
     * @param string \$subject
     * @param string \$body
     * @param string \$contentType
     * @param string \$charset
     *
     * @return Swift_Message
     */
    public static function newInstance(\$subject = null, \$body = null, \$contentType = null, \$charset = null)
    {
        return new self(\$subject, \$body, \$contentType, \$charset);
    }

    /**
     * @param \$email
     */
    public function addMetadata(\$email, array \$metadata)
    {
        \$this->metadata[\$email] = \$metadata;
    }

    /**
     * Get the metadata.
     *
     * @return array
     */
    public function getMetadata()
    {
        return \$this->metadata;
    }

    /**
     * Clears the metadata.
     */
    public function clearMetadata()
    {
        \$this->metadata = [];
    }

    /**
     * @param            \$filePath
     * @param null       \$fileName
     * @param null       \$contentType
     * @param bool|false \$inline
     */
    public function addAttachment(\$filePath, \$fileName = null, \$contentType = null, \$inline = false)
    {
        \$attachment = [
            'filePath'    => \$filePath,
            'fileName'    => \$fileName,
            'contentType' => \$contentType,
            'inline'      => \$inline,
        ];

        \$this->attachments[] = \$attachment;
    }

    /**
     * Get attachments.
     *
     * @return array
     */
    public function getAttachments()
    {
        return \$this->attachments;
    }

    /**
     * Clear attachments.
     */
    public function clearAttachments()
    {
        \$this->attachments = [];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Message/MauticMessage.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Message/MauticMessage.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Message/MauticMessage.php");
    }
}
