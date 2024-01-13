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

/* @bundles/ApiBundle/Security/OAuth2/Firewall/OAuthListener.php */
class __TwigTemplate_04c89521c29eb252e0d437b84dd43c24f9ff8e2dae592d0052300c961a5aff6b extends Template
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

namespace Mautic\\ApiBundle\\Security\\OAuth2\\Firewall;

/**
 * Class OAuthListener.
 */
class OAuthListener extends \\FOS\\OAuthServerBundle\\Security\\Firewall\\OAuthListener
{
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Security/OAuth2/Firewall/OAuthListener.php";
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
        return new Source("", "@bundles/ApiBundle/Security/OAuth2/Firewall/OAuthListener.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Security/OAuth2/Firewall/OAuthListener.php");
    }
}
