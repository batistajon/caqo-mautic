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

/* @bundles/CoreBundle/Tests/Unit/Helper/resource/themes/theme-custom-builder-page/config.json */
class __TwigTemplate_b5e3c90c6c11f92f5ab936e01c3c16dd367d35a67ca93a4f6fb4744873a7ff48 extends Template
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
  \"name\": \"theme-custom-builder-page\",
  \"author\": \"Test theme\",
  \"authorUrl\": \"https://www.mautic.org\",
  \"features\": [
    \"page\"
  ],
  \"builder\": [\"custom\"]
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/resource/themes/theme-custom-builder-page/config.json";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/resource/themes/theme-custom-builder-page/config.json", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/resource/themes/theme-custom-builder-page/config.json");
    }
}
