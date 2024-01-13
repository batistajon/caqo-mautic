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

/* @bundles/EmailBundle/Swiftmailer/SendGrid/Callback/SendGridApiCallback.php */
class __TwigTemplate_46ec8b3d87a5875e8f9e07ba8fe943d9a0fbe93fb1f9480dd96af2e8a8b47052 extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\Callback;

use Mautic\\EmailBundle\\Model\\TransportCallback;
use Symfony\\Component\\HttpFoundation\\Request;

class SendGridApiCallback
{
    /**
     * @var TransportCallback
     */
    private \$transportCallback;

    public function __construct(TransportCallback \$transportCallback)
    {
        \$this->transportCallback = \$transportCallback;
    }

    public function processCallbackRequest(Request \$request)
    {
        \$responseItems = new ResponseItems(\$request);
        foreach (\$responseItems as \$item) {
            \$this->transportCallback->addFailureByAddress(\$item->getEmail(), \$item->getReason(), \$item->getDncReason());
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/SendGrid/Callback/SendGridApiCallback.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/SendGrid/Callback/SendGridApiCallback.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/SendGrid/Callback/SendGridApiCallback.php");
    }
}
