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

/* @bundles/EmailBundle/Swiftmailer/Momentum/Callback/MomentumCallbackInterface.php */
class __TwigTemplate_9da4fb37ab53351c825bad67c4c8cf63cf480755f73bb5cd9061b4d052d2baf8 extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\Momentum\\Callback;

use Symfony\\Component\\HttpFoundation\\Request;

/**
 * Interface MomentumCallbackInterface.
 */
interface MomentumCallbackInterface
{
    public function processCallbackRequest(Request \$request);

    /**
     * @return mixed
     */
    public function processImmediateFeedback(\\Swift_Mime_SimpleMessage \$message, array \$response);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Momentum/Callback/MomentumCallbackInterface.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Momentum/Callback/MomentumCallbackInterface.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Momentum/Callback/MomentumCallbackInterface.php");
    }
}
