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

/* @bundles/SmsBundle/Event/SmsSendEvent.php */
class __TwigTemplate_fceeb78e38635645277230338d935dd094edda13e4490c01cdcd0a56c5462602 extends Template
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

namespace Mautic\\SmsBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\LeadBundle\\Entity\\Lead;

/**
 * Class SmsSendEvent.
 */
class SmsSendEvent extends CommonEvent
{
    /**
     * @var int
     */
    protected \$smsId;

    /**
     * @var string
     */
    protected \$content;

    /**
     * @var Lead
     */
    protected \$lead;

    /**
     * @param string \$content
     */
    public function __construct(\$content, Lead \$lead)
    {
        \$this->content = \$content;
        \$this->lead    = \$lead;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return \$this->content;
    }

    /**
     * @param string \$content
     */
    public function setContent(\$content)
    {
        \$this->content = \$content;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @param Lead \$lead
     */
    public function setLead(\$lead)
    {
        \$this->lead = \$lead;
    }

    /**
     * @return int
     */
    public function getSmsId()
    {
        return \$this->smsId;
    }

    /**
     * @param int \$smsId
     */
    public function setSmsId(\$smsId)
    {
        \$this->smsId = \$smsId;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Event/SmsSendEvent.php";
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
        return new Source("", "@bundles/SmsBundle/Event/SmsSendEvent.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Event/SmsSendEvent.php");
    }
}
