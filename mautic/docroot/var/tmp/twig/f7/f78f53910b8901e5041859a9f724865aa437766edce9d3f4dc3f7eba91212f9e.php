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

/* @bundles/CoreBundle/Assets/css/app/less/components/panels.less */
class __TwigTemplate_e670b4afffedcaade83e9c29295536f9db08e5c8e365e0e4076706ed3b336c28 extends Template
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
// Panels
// --------------------------------------------------

.panel {
  border: 1px solid @panel-default-border;
  .box-shadow(0px 1px 1px darken(@body-bg, 2%));
  //background-clip: padding-box;
}

// Panel heading
// ------------------------
.panel-heading {
  padding: 0 15px;
  .clearfix();

  // Panel title
  .panel-title {
    padding: ((33 - @font-size-base) / 2) 0;
    display: table-cell;
    width: 1%;
    vertical-align: middle;
    //font-size: inherit;
    font-weight: 600;
  }

  // Panel toolbar
  .panel-toolbar {
    display: table-cell;
    width: 1%;
    vertical-align: middle;
  }
}

// Panel group
// ------------------------
.panel-group {
  .panel {
    .box-shadow(none);
  }
}

// Panel footer
.panel-footer {
  overflow: hidden;
  background-color: #fbfbfb;
}

.panel-toolbar-wrapper {
  display: block;
  background-color: #fbfbfb;
  border-bottom: 1px solid #cfd9db;
  padding: 0px 15px;
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/panels.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/panels.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/panels.less");
    }
}
