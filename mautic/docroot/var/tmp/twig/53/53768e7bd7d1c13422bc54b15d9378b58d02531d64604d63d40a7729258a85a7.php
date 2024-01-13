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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/less/tooltip.less */
class __TwigTemplate_8c38664031004a5e62f9694f4093f9dd4fc9b75afefac284e2c2fe7604fb89bb extends Template
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
// Tooltips
// --------------------------------------------------


// Base class
.tooltip {
  position: absolute;
  z-index: @zindex-tooltip;
  display: block;
  // Our parent element can be arbitrary since tooltips are by default inserted as a sibling of their target element.
  // So reset our font and text properties to avoid inheriting weird values.
  .reset-text();
  font-size: @font-size-small;

  .opacity(0);

  &.in     { .opacity(@tooltip-opacity); }
  &.top    { margin-top:  -3px; padding: @tooltip-arrow-width 0; }
  &.right  { margin-left:  3px; padding: 0 @tooltip-arrow-width; }
  &.bottom { margin-top:   3px; padding: @tooltip-arrow-width 0; }
  &.left   { margin-left: -3px; padding: 0 @tooltip-arrow-width; }
}

// Wrapper for the tooltip content
.tooltip-inner {
  max-width: @tooltip-max-width;
  padding: 3px 8px;
  color: @tooltip-color;
  text-align: center;
  background-color: @tooltip-bg;
  border-radius: @border-radius-base;
}

// Arrows
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
// Note: Deprecated .top-left, .top-right, .bottom-left, and .bottom-right as of v3.3.1
.tooltip {
  &.top .tooltip-arrow {
    bottom: 0;
    left: 50%;
    margin-left: -@tooltip-arrow-width;
    border-width: @tooltip-arrow-width @tooltip-arrow-width 0;
    border-top-color: @tooltip-arrow-color;
  }
  &.top-left .tooltip-arrow {
    bottom: 0;
    right: @tooltip-arrow-width;
    margin-bottom: -@tooltip-arrow-width;
    border-width: @tooltip-arrow-width @tooltip-arrow-width 0;
    border-top-color: @tooltip-arrow-color;
  }
  &.top-right .tooltip-arrow {
    bottom: 0;
    left: @tooltip-arrow-width;
    margin-bottom: -@tooltip-arrow-width;
    border-width: @tooltip-arrow-width @tooltip-arrow-width 0;
    border-top-color: @tooltip-arrow-color;
  }
  &.right .tooltip-arrow {
    top: 50%;
    left: 0;
    margin-top: -@tooltip-arrow-width;
    border-width: @tooltip-arrow-width @tooltip-arrow-width @tooltip-arrow-width 0;
    border-right-color: @tooltip-arrow-color;
  }
  &.left .tooltip-arrow {
    top: 50%;
    right: 0;
    margin-top: -@tooltip-arrow-width;
    border-width: @tooltip-arrow-width 0 @tooltip-arrow-width @tooltip-arrow-width;
    border-left-color: @tooltip-arrow-color;
  }
  &.bottom .tooltip-arrow {
    top: 0;
    left: 50%;
    margin-left: -@tooltip-arrow-width;
    border-width: 0 @tooltip-arrow-width @tooltip-arrow-width;
    border-bottom-color: @tooltip-arrow-color;
  }
  &.bottom-left .tooltip-arrow {
    top: 0;
    right: @tooltip-arrow-width;
    margin-top: -@tooltip-arrow-width;
    border-width: 0 @tooltip-arrow-width @tooltip-arrow-width;
    border-bottom-color: @tooltip-arrow-color;
  }
  &.bottom-right .tooltip-arrow {
    top: 0;
    left: @tooltip-arrow-width;
    margin-top: -@tooltip-arrow-width;
    border-width: 0 @tooltip-arrow-width @tooltip-arrow-width;
    border-bottom-color: @tooltip-arrow-color;
  }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/tooltip.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/tooltip.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/bootstrap/less/tooltip.less");
    }
}
