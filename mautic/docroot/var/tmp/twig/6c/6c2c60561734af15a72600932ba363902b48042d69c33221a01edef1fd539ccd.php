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

/* @bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Definition/Category.php */
class __TwigTemplate_b04dbbff3792a08104ce02ca15ac6e72eb07e722e08ddb956e18bafb128efca4 extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Definition;

/**
 * Class Category.
 */
final class Category
{
    const ANTISPAM       = 'antispam';
    const AUTOREPLY      = 'autoreply';
    const CONCURRENT     = 'concurrent';
    const CONTENT_REJECT = 'content_reject';
    const COMMAND_REJECT = 'command_reject';
    const INTERNAL_ERROR = 'internal_error';
    const DEFER          = 'defer';
    const DELAYED        = 'delayed';
    const DNS_LOOP       = 'dns_loop';
    const DNS_UNKNOWN    = 'dns_unknown';
    const FULL           = 'full';
    const INACTIVE       = 'inactive';
    const LATIN_ONLY     = 'latin_only';
    const OTHER          = 'other';
    const OVERSIZE       = 'oversize';
    const OUTOFOFFICE    = 'outofoffice';
    const UNKNOWN        = 'unknown';
    const UNRECOGNIZED   = 'unrecognized';
    const USER_REJECT    = 'user_reject';
    const WARNING        = 'warning';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Definition/Category.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Definition/Category.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Definition/Category.php");
    }
}
