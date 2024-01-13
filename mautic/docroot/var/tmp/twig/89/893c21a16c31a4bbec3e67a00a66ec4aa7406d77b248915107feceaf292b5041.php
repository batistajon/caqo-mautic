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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/less/breadcrumbs.less */
class __TwigTemplate_dfac205ea6577e4caf37f131005d2eff3a53ea75a0847b385cf213ef666bd1d8 extends Template
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
        echo "//
// Breadcrumbs
// --------------------------------------------------


.breadcrumb {
  padding: @breadcrumb-padding-vertical @breadcrumb-padding-horizontal;
  margin-bottom: @line-height-computed;
  list-style: none;
  background-color: @breadcrumb-bg;
  border-radius: @border-radius-base;

  > li {
    display: inline-block;

    + li:before {
      content: \"@{breadcrumb-separator}\\00a0\"; // Unicode space added since inline-block means non-collapsing white-space
      padding: 0 5px;
      color: @breadcrumb-color;
    }
  }

  > .active {
    color: @breadcrumb-active-color;
  }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/breadcrumbs.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/breadcrumbs.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/bootstrap/less/breadcrumbs.less");
    }
}
