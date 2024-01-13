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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/less/buttons.less */
class __TwigTemplate_befc727dffcedae2694ac785d014e843e1b27a98331ee19c4e9ccd9a4dd96fdf extends Template
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
// Buttons
// --------------------------------------------------


// Base styles
// --------------------------------------------------

.btn {
  display: inline-block;
  margin-bottom: 0; // For input.btn
  font-weight: @btn-font-weight;
  text-align: center;
  vertical-align: middle;
  touch-action: manipulation;
  cursor: pointer;
  background-image: none; // Reset unusual Firefox-on-Android default style; see https://github.com/necolas/normalize.css/issues/214
  border: 1px solid transparent;
  white-space: nowrap;
  .button-size(@padding-base-vertical; @padding-base-horizontal; @font-size-base; @line-height-base; @btn-border-radius-base);
  .user-select(none);

  &,
  &:active,
  &.active {
    &:focus,
    &.focus {
      .tab-focus();
    }
  }

  &:hover,
  &:focus,
  &.focus {
    color: @btn-default-color;
    text-decoration: none;
  }

  &:active,
  &.active {
    outline: 0;
    background-image: none;
    .box-shadow(inset 0 3px 5px rgba(0,0,0,.125));
  }

  &.disabled,
  &[disabled],
  fieldset[disabled] & {
    cursor: @cursor-disabled;
    .opacity(.65);
    .box-shadow(none);
  }

  a& {
    &.disabled,
    fieldset[disabled] & {
      pointer-events: none; // Future-proof disabling of clicks on `<a>` elements
    }
  }
}


// Alternate buttons
// --------------------------------------------------

.btn-default {
  .button-variant(@btn-default-color; @btn-default-bg; @btn-default-border);
}
.btn-primary {
  .button-variant(@btn-primary-color; @btn-primary-bg; @btn-primary-border);
}
// Success appears as green
.btn-success {
  .button-variant(@btn-success-color; @btn-success-bg; @btn-success-border);
}
// Info appears as blue-green
.btn-info {
  .button-variant(@btn-info-color; @btn-info-bg; @btn-info-border);
}
// Warning appears as orange
.btn-warning {
  .button-variant(@btn-warning-color; @btn-warning-bg; @btn-warning-border);
}
// Danger and error appear as red
.btn-danger {
  .button-variant(@btn-danger-color; @btn-danger-bg; @btn-danger-border);
}


// Link buttons
// -------------------------

// Make a button look and behave like a link
.btn-link {
  color: @link-color;
  font-weight: normal;
  border-radius: 0;

  &,
  &:active,
  &.active,
  &[disabled],
  fieldset[disabled] & {
    background-color: transparent;
    .box-shadow(none);
  }
  &,
  &:hover,
  &:focus,
  &:active {
    border-color: transparent;
  }
  &:hover,
  &:focus {
    color: @link-hover-color;
    text-decoration: @link-hover-decoration;
    background-color: transparent;
  }
  &[disabled],
  fieldset[disabled] & {
    &:hover,
    &:focus {
      color: @btn-link-disabled-color;
      text-decoration: none;
    }
  }
}


// Button Sizes
// --------------------------------------------------

.btn-lg {
  // line-height: ensure even-numbered height of button next to large input
  .button-size(@padding-large-vertical; @padding-large-horizontal; @font-size-large; @line-height-large; @btn-border-radius-large);
}
.btn-sm {
  // line-height: ensure proper height of button next to small input
  .button-size(@padding-small-vertical; @padding-small-horizontal; @font-size-small; @line-height-small; @btn-border-radius-small);
}
.btn-xs {
  .button-size(@padding-xs-vertical; @padding-xs-horizontal; @font-size-small; @line-height-small; @btn-border-radius-small);
}


// Block button
// --------------------------------------------------

.btn-block {
  display: block;
  width: 100%;
}

// Vertically space out multiple block buttons
.btn-block + .btn-block {
  margin-top: 5px;
}

// Specificity overrides
input[type=\"submit\"],
input[type=\"reset\"],
input[type=\"button\"] {
  &.btn-block {
    width: 100%;
  }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/buttons.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/buttons.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/bootstrap/less/buttons.less");
    }
}
