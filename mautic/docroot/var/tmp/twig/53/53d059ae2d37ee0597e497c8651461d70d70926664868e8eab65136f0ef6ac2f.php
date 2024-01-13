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

/* @bundles/EmailBundle/MonitoredEmail/Message.php */
class __TwigTemplate_78f5d64c7ba43e75ea222489c4cca79ca9f60a441655270abbfee7ee6fd2f935 extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail;

class Message
{
    public \$id;
    public \$date;
    public \$subject;

    public \$fromName;
    public \$fromAddress;

    public \$to = [];
    public \$toString;
    public \$cc         = [];
    public \$replyTo    = [];
    public \$inReplyTo  = false;
    public \$returnPath = false;
    public \$references = [];

    public \$textPlain;
    public \$textHtml;
    public \$dsnReport;
    public \$dsnMessage;
    public \$fblReport;
    public \$fblMessage;
    public \$xHeaders = [];

    /** @var Attachment[] */
    protected \$attachments = [];

    public function addAttachment(Attachment \$attachment)
    {
        \$this->attachments[\$attachment->id] = \$attachment;
    }

    /**
     * @return Attachment[]
     */
    public function getAttachments()
    {
        return \$this->attachments;
    }

    /**
     * Get array of internal HTML links placeholders.
     *
     * @return array attachmentId => link placeholder
     */
    public function getInternalLinksPlaceholders()
    {
        return preg_match_all('/=[\"\\'](ci?d:([\\w\\.%*@-]+))[\"\\']/i', \$this->textHtml, \$matches) ? array_combine(\$matches[2], \$matches[1]) : [];
    }

    /**
     * @param \$baseUri
     *
     * @return mixed
     */
    public function replaceInternalLinks(\$baseUri)
    {
        \$baseUri     = rtrim(\$baseUri, '\\\\/').'/';
        \$fetchedHtml = \$this->textHtml;
        foreach (\$this->getInternalLinksPlaceholders() as \$attachmentId => \$placeholder) {
            if (isset(\$this->attachments[\$attachmentId])) {
                \$fetchedHtml = str_replace(\$placeholder, \$baseUri.basename(\$this->attachments[\$attachmentId]->filePath), \$fetchedHtml);
            }
        }

        return \$fetchedHtml;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/MonitoredEmail/Message.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Message.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/MonitoredEmail/Message.php");
    }
}
