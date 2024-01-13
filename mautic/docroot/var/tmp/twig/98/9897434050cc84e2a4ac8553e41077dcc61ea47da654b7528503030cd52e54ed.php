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

/* @bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/metadata-3.0.1-alpha.json */
class __TwigTemplate_784e39c6dd0979080c73806c75e1cc7ce6a9f54e2e34be92cd9a90716e1008fe extends Template
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
  \"version\": \"3.0.1-alpha\",
  \"stability\": \"alpha\",
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/metadata-3.0.1-alpha.json";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/metadata-3.0.1-alpha.json", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/metadata-3.0.1-alpha.json");
    }
}
