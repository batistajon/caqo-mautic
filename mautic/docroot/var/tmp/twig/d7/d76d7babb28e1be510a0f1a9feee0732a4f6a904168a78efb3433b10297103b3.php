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

/* @bundles/MarketplaceBundle/Tests/ApiResponse/allowlist.json */
class __TwigTemplate_82aa6c09714e0d0c2ce26f80d6d6a8aebea4bf340d9415b85dfa6c91047c3806 extends Template
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
        echo "{
    \"allowlist\": [
        {
            \"package\": \"koco\\/mautic-recaptcha-bundle\",
            \"display_name\": \"KocoCaptcha\",
            \"minimum_mautic_version\": \"4.1.0\",
            \"maximum_mautic_version\": null
        },
        {
            \"package\": \"maatoo\\/mautic-referrals-bundle\",
            \"minimum_mautic_version\": \"4.1.0\",
            \"maximum_mautic_version\": null
        }
    ]
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Tests/ApiResponse/allowlist.json";
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
        return new Source("", "@bundles/MarketplaceBundle/Tests/ApiResponse/allowlist.json", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Tests/ApiResponse/allowlist.json");
    }
}
