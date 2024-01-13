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

/* @bundles/EmailBundle/MonitoredEmail/Processor/Unsubscription/UnsubscribedEmail.php */
class __TwigTemplate_b1aa87204bd39243e1f62d0f75754387dcb3630fb7c555397bfcfc7a288a1910 extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscription;

class UnsubscribedEmail
{
    /**
     * @var string
     */
    private \$contactEmail;

    /**
     * @var string
     */
    private \$unsubscriptionAddress;

    /**
     * @param string \$contactEmail
     * @param string \$unsubscriptionAddress
     */
    public function __construct(\$contactEmail, \$unsubscriptionAddress)
    {
        \$this->contactEmail          = \$contactEmail;
        \$this->unsubscriptionAddress = \$unsubscriptionAddress;
    }

    /**
     * @return string
     */
    public function getContactEmail()
    {
        return \$this->contactEmail;
    }

    /**
     * @return string
     */
    public function getUnsubscriptionAddress()
    {
        return \$this->unsubscriptionAddress;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/MonitoredEmail/Processor/Unsubscription/UnsubscribedEmail.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/Unsubscription/UnsubscribedEmail.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/MonitoredEmail/Processor/Unsubscription/UnsubscribedEmail.php");
    }
}
