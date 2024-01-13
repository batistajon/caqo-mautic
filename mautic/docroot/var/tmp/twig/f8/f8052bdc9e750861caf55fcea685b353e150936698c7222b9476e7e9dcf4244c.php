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

/* @bundles/CoreBundle/Assets/css/app/less/components/scaffolding.less */
class __TwigTemplate_c84c4ce23580723c8fc8e549287c8d537b47d3c82c9fbe5ed387a7a5f10f47f1 extends Template
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
        echo "// Scaffolding
// --------------------------------------------------

// Horizontal rules

hr,
.hr-expand {
  margin-top:    15px;
  margin-bottom: 15px;
  border: 0;
  border-top: 1px solid @hr-border;

  &.hr-w-2 {
    border-width: 2px;
  }
  &.hr-w-3 {
    border-width: 3px;
  }
}
.hr-expand {
  a.arrow {
    display: inline-block;
    position: relative;
    top: -1px;
    z-index: 1;
    background-color: @body-bg;
    padding: 0 15px;
    margin: 0 15px;
    border: 1px solid @hr-border;
    border-top-width: 0;
    border-bottom-left-radius: @border-radius-base;
    border-bottom-right-radius: @border-radius-base;
    box-shadow: 0 1px 2px 0 rgba(0,0,0,0.03);
    font-size: 9px;
    line-height: 22px;
    text-transform: uppercase;

    > .caret {
      margin-left: 0;
      border-top: 0px;
      border-bottom: 4px solid;
    }
  }

  a.collapsed {
    > .caret {
        border-top: 4px solid;
        border-bottom: 0px;
      }
  }

  &.hr-w-2 {
    a.arrow {
      top: -2px;
    }
  }
  &.hr-w-3 {
    a.arrow {
      top: -3px;
    }
  }
}


// Links

a {
  &:hover {
    cursor: pointer;
  }
  &:hover,
  &:focus {
    text-decoration: none;
  }
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/scaffolding.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/scaffolding.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/scaffolding.less");
    }
}
