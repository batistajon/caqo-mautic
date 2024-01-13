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

/* @bundles/EmailBundle/Swiftmailer/Transport/SendgridTransport.php */
class __TwigTemplate_5cb41eedd6503b7fcd7e089c3792c633a87d7cecf460c7d1ecf54d2ae4079eac extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\Transport;

class SendgridTransport extends \\Swift_SmtpTransport
{
    public function __construct(\$host = 'smtp.sendgrid.net', \$port = 587, \$security = 'tls')
    {
        parent::__construct(\$host, \$port, \$security);

        \$this->setAuthMode('login');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Transport/SendgridTransport.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Transport/SendgridTransport.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Transport/SendgridTransport.php");
    }
}
