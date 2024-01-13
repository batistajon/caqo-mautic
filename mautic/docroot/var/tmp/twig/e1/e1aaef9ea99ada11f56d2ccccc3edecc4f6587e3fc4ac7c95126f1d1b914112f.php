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

/* @bundles/SmsBundle/Api/TwilioApi.php */
class __TwigTemplate_72793707a0c7775ffa7d82acd626f24068f907311869b62dbfa4024070305759 extends Template
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

namespace Mautic\\SmsBundle\\Api;

use Mautic\\SmsBundle\\Integration\\Twilio\\TwilioTransport;

/**
 * Class TwilioApi.
 *
 * @deprecated Use \\Mautic\\SmsBundle\\Integration\\Twilio\\TwilioTransport instead
 */
class TwilioApi extends TwilioTransport
{
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Api/TwilioApi.php";
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
        return new Source("", "@bundles/SmsBundle/Api/TwilioApi.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Api/TwilioApi.php");
    }
}
