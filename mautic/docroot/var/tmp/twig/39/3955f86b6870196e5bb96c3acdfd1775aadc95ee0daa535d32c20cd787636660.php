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

/* @bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/metadata-3.0.1-beta.json */
class __TwigTemplate_da1c40b52989f7c85539942060d732c600532a55f5e82bdaa0944c5f9ba8053a extends Template
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
  \"version\": \"3.0.1-beta\",
  \"stability\": \"beta\",
  \"minimum_php_version\": \"7.2.21\",
  \"maximum_php_version\": \"7.3.99\",
  \"show_php_version_warning_if_under\": \"7.3.0\",
  \"minimum_mautic_version\": \"3.0.0-alpha\",
  \"announcement_url\": \"\"
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/metadata-3.0.1-beta.json";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/metadata-3.0.1-beta.json", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/metadata-3.0.1-beta.json");
    }
}
