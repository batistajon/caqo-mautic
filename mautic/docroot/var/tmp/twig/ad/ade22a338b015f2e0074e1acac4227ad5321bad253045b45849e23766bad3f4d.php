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

/* @bundles/CoreBundle/Tests/Fixtures/metadata.json */
class __TwigTemplate_16c059f62fd404dd242b6e03934d7f6ad080b9b50c9fb3354bfcd0c8c9bbee75 extends Template
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
  \"version\": \"4.0.2\",
  \"stability\": \"stable\",
  \"minimum_php_version\": \"7.4.0\",
  \"maximum_php_version\": \"8.0.99\",
  \"show_php_version_warning_if_under\": \"7.4.0\",
  \"minimum_mautic_version\": \"3.2.0\",
  \"announcement_url\": \"https://github.com/mautic/mautic/releases/tag/4.0.2\"
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Fixtures/metadata.json";
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
        return new Source("", "@bundles/CoreBundle/Tests/Fixtures/metadata.json", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Fixtures/metadata.json");
    }
}
