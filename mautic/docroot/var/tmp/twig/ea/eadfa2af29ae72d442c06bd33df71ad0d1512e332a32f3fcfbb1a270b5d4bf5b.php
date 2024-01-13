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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/less/popovers.less */
class __TwigTemplate_e8b3211c2076b79c05bf1dbf45c4781571dd0e6e7640eba003d5e623f989ecb7 extends Template
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
// Popovers
// --------------------------------------------------


.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: @zindex-popover;
  display: none;
  max-width: @popover-max-width;
  padding: 1px;
  // Our parent element can be arbitrary since popovers are by default inserted as a sibling of their target element.
  // So reset our font and text properties to avoid inheriting weird values.
  .reset-text();
  font-size: @font-size-base;

  background-color: @popover-bg;
  background-clip: padding-box;
  border: 1px solid @popover-fallback-border-color;
  border: 1px solid @popover-border-color;
  border-radius: @border-radius-large;
  .box-shadow(0 5px 10px rgba(0,0,0,.2));

  // Offset the popover to account for the popover arrow
  &.top     { margin-top: -@popover-arrow-width; }
  &.right   { margin-left: @popover-arrow-width; }
  &.bottom  { margin-top: @popover-arrow-width; }
  &.left    { margin-left: -@popover-arrow-width; }
}

.popover-title {
  margin: 0; // reset heading margin
  padding: 8px 14px;
  font-size: @font-size-base;
  background-color: @popover-title-bg;
  border-bottom: 1px solid darken(@popover-title-bg, 5%);
  border-radius: (@border-radius-large - 1) (@border-radius-large - 1) 0 0;
}

.popover-content {
  padding: 9px 14px;
}

// Arrows
//
// .arrow is outer, .arrow:after is inner

.popover > .arrow {
  &,
  &:after {
    position: absolute;
    display: block;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
  }
}
.popover > .arrow {
  border-width: @popover-arrow-outer-width;
}
.popover > .arrow:after {
  border-width: @popover-arrow-width;
  content: \"\";
}

.popover {
  &.top > .arrow {
    left: 50%;
    margin-left: -@popover-arrow-outer-width;
    border-bottom-width: 0;
    border-top-color: @popover-arrow-outer-fallback-color; // IE8 fallback
    border-top-color: @popover-arrow-outer-color;
    bottom: -@popover-arrow-outer-width;
    &:after {
      content: \" \";
      bottom: 1px;
      margin-left: -@popover-arrow-width;
      border-bottom-width: 0;
      border-top-color: @popover-arrow-color;
    }
  }
  &.right > .arrow {
    top: 50%;
    left: -@popover-arrow-outer-width;
    margin-top: -@popover-arrow-outer-width;
    border-left-width: 0;
    border-right-color: @popover-arrow-outer-fallback-color; // IE8 fallback
    border-right-color: @popover-arrow-outer-color;
    &:after {
      content: \" \";
      left: 1px;
      bottom: -@popover-arrow-width;
      border-left-width: 0;
      border-right-color: @popover-arrow-color;
    }
  }
  &.bottom > .arrow {
    left: 50%;
    margin-left: -@popover-arrow-outer-width;
    border-top-width: 0;
    border-bottom-color: @popover-arrow-outer-fallback-color; // IE8 fallback
    border-bottom-color: @popover-arrow-outer-color;
    top: -@popover-arrow-outer-width;
    &:after {
      content: \" \";
      top: 1px;
      margin-left: -@popover-arrow-width;
      border-top-width: 0;
      border-bottom-color: @popover-arrow-color;
    }
  }

  &.left > .arrow {
    top: 50%;
    right: -@popover-arrow-outer-width;
    margin-top: -@popover-arrow-outer-width;
    border-right-width: 0;
    border-left-color: @popover-arrow-outer-fallback-color; // IE8 fallback
    border-left-color: @popover-arrow-outer-color;
    &:after {
      content: \" \";
      right: 1px;
      border-right-width: 0;
      border-left-color: @popover-arrow-color;
      bottom: -@popover-arrow-width;
    }
  }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/popovers.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/popovers.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/bootstrap/less/popovers.less");
    }
}
