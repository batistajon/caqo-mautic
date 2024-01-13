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

/* @bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/metadata-2.16.0.json */
class __TwigTemplate_ffad3f94ac0836bb39c0fb3ecbaaac778c3192baaeeb0e714b8b8571ea32ec1a extends Template
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
  \"version\": \"2.16.0\",
  \"stability\": \"stable\",
  \"minimum_php_version\": \"5.6.99\",
  \"maximum_php_version\": \"7.2.99\",
  \"show_php_version_warning_if_under\": \"7.0.0\",
  \"minimum_mautic_version\": \"2.15.0\",
  \"announcement_url\": \"\"
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/metadata-2.16.0.json";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/metadata-2.16.0.json", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/metadata-2.16.0.json");
    }
}