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

/* @bundles/EmailBundle/MonitoredEmail/Processor/Reply/RepliedEmail.php */
class __TwigTemplate_105ad2536cb875492c9d87f8c1452b15b9ddac0424102a2e74de0e32301bc116 extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Reply;

class RepliedEmail
{
    /**
     * @var string
     */
    private \$fromAddress;

    /**
     * @var string|null
     */
    private \$statHash;

    /**
     * RepliedEmail constructor.
     *
     * @param string \$fromAddress
     * @param null   \$statHash
     */
    public function __construct(\$fromAddress, \$statHash = null)
    {
        \$this->fromAddress = \$fromAddress;
        \$this->statHash    = \$statHash;
    }

    /**
     * @return string
     */
    public function getFromAddress()
    {
        return \$this->fromAddress;
    }

    /**
     * @return string|null
     */
    public function getStatHash()
    {
        return \$this->statHash;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/MonitoredEmail/Processor/Reply/RepliedEmail.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/Reply/RepliedEmail.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/MonitoredEmail/Processor/Reply/RepliedEmail.php");
    }
}
