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

/* @bundles/CoreBundle/Assets/css/app/less/mixins.less */
class __TwigTemplate_1d4133a6a417a5fbc79a5fae9555f7e86740e9efa339d6321ab1b022df92f760 extends Template
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
// Mixins
// --------------------------------------------------

// Background color
// ------------------------
.bg-color(@bg-color; @color) {
  background-color: @bg-color !important;
  border-color: darken(@bg-color, 3%) !important;
  color: @color !important;

  // lighten the base bg-color
  &.bg-light-xs,
  .bg-light-xs {
    background-color: lighten(@bg-color, 1%) !important;
    border-color: darken(@bg-color, 3%) !important;
  }
  &.bg-light-sm,
  .bg-light-sm {
    background-color: lighten(@bg-color, 3%) !important;
    border-color: darken(@bg-color, 3%) !important;
  }
  &.bg-light-md,
  .bg-light-md {
    background-color: lighten(@bg-color, 5%) !important;
    border-color: darken(@bg-color, 3%) !important;
  }
  &.bg-light-lg,
  .bg-light-lg {
    background-color: lighten(@bg-color, 7%) !important;
    border-color: darken(@bg-color, 3%) !important;
  }

  // darken the base bg-color
  &.bg-dark-xs,
  .bg-dark-xs {
    background-color: darken(@bg-color, 1%) !important;
    border-color: darken(@bg-color, 3%) !important;
  }
  &.bg-dark-sm,
  .bg-dark-sm {
    background-color: darken(@bg-color, 3%) !important;
    border-color: darken(@bg-color, 6%) !important;
  }
  &.bg-dark-md,
  .bg-dark-md {
    background-color: darken(@bg-color, 5%) !important;
    border-color: darken(@bg-color, 9%) !important;
  }
  &.bg-dark-lg,
  .bg-dark-lg {
    background-color: darken(@bg-color, 7%) !important;
    border-color: darken(@bg-color, 12%) !important;
  }
}

// Text emphasis
// ------------------------
.text-emphasis-variants(@color) {
  color: @color;
  a&:hover {
    color: darken(@color, 10%);
  }
  &.light-xs {
    color: lighten(@color, 15%);
    a&:hover {
      color: lighten(@color, 10%);
    }
  }
  &.dark-xs {
    color: darken(@color, 15%);
    a&:hover {
      color: darken(@color, 20%);
    }
  }
  &.dark-sm {
    color: darken(@color, 30%);
    a&:hover {
      color: darken(@color, 35%);
    }
  }
  &.dark-md {
    color: darken(@color, 45%);
    a&:hover {
      color: darken(@color, 50%);
    }
  }
  &.dark-lg {
    color: darken(@color, 60%);
    a&:hover {
      color: darken(@color, 65%);
    }
  }
}

// Switch size
// ------------------------
.switch-size(@height) {
  input {
    ~ .text {
      line-height: @height;
    }

    ~ .switch {
      font-size: @height;
      height: @height;
      width: (@height * 1.6);
      border-radius: @height;

      &:after {
        border-radius: @height;
        height: @height;
        width: @height;
      }
    }
  }
}

// Switch color
// ------------------------
.switch-color(@color) {
  input {
    &:checked {
      + .switch {
        border-color: @color;
        box-shadow: inset 0 0 0 0.6em @color;
        &:after { border-color: @color; }
      }
    }
  }
}

// Custom checkbox & radio color
// ------------------------
.checkbox-radio-color(@color) {
  label {
    input {
      + span {
        &:after {
          background-color: @color;
        }
      }
      // checked state
      &:checked {
        + span {
          border: 1px solid @color;
        }
      }
    }
    // hover state
    &:hover {
      input {
        + span {
          border: 1px solid rgba(0,0,0,0.3);
        }
        &:checked {
          + span {
            border: 1px solid @color;
          }
        }
      }
    }
  }
}

// sidebar nav variant
// ------------------------
.nav-sidebar-variants(@bgcolor) {
  > li {
    // nav-group line
    &.nav-group {
      &:after {
        content: '';
        position: absolute;
        right: 0;
        left: 50px;
        bottom: 0;
        border-bottom: 1px solid lighten(@bgcolor, 1.8%);
      }
    }

    > a {
      color: fade(contrast(@bgcolor), 50%);
      &:hover,
      &:focus {
        background-color: @bgcolor;
        color: fade(contrast(@bgcolor), 75%);
      }
    }

    // Active and open state
    &.active,
    &.open {
      > a {
        background-color: @bgcolor;
        color: fade(contrast(@bgcolor), 75%);
      }

      // `nav-submenu`
      > .nav-submenu {
        background-color: darken(@bgcolor, 3%);
      }
    }

    // nav-submenu style
    > .nav-submenu {
      background-color: darken(@bgcolor, 1.5%);
      &:after {
        background-color: lighten(@bgcolor, 2%);
      }
      > li {
        // the dot
        &:after {
          background-color: lighten(@bgcolor, 2.5%);
          box-shadow: 0 0 0 2px darken(@bgcolor, 1.5%);
        }
        > a {
          color: fade(contrast(@bgcolor), 50%);
          &:hover,
          &:focus {
            color: fade(contrast(@bgcolor), 80%);
          }
        }

        // Active and open state
        &.active,
        &.open {
          > a {
            color: fade(contrast(@bgcolor), 80%);
          }
        }
      }
    }
  }

  // nav-heading
  .nav-heading {
    color: fade(contrast(@bgcolor), 25%);
  }

  // nav-divider
  .nav-divider {
    background-color: fade(contrast(@bgcolor), 6%);
  }
}

// loading bar variant
// ------------------------
.loading-bar-variant(@bgcolor) {
  background-color: lighten(@bgcolor, 45%);
  &:after,
  &:before {
    background-color: @bgcolor;
  }
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/mixins.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/mixins.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/mixins.less");
    }
}