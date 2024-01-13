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

/* @bundles/CoreBundle/Assets/css/app/less/components/buttons.less */
class __TwigTemplate_61f2da045d6fb6dac62e6b373dd489ff560a19fbf185ac42b699bbe651299454 extends Template
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
// ---------------------
.btn {
  &,
  &:active,
  &.active {
    outline: 0;
  }

  // reset font awesome width
  .fa { min-width: 13px; }
  
  // caret
  // ---------------------
  > .caret {
    margin-top: -1px;
  }

  // Rounded buttons
  // ---------------------
  &.btn-rounded {
    border-radius: @input-height-base;
    padding-left: (@padding-base-horizontal + 4);
    padding-right: (@padding-base-horizontal + 4);
  }

  // Circle buttons
  // ---------------------
  &.btn-circle {
    width: @input-height-base;
    padding-left: 0;
    padding-right: 0;
    border-radius: 50%;

    &.btn-lg { width: (@input-height-large + 1); }
    &.btn-sm { width: (@input-height-small - 1); }
    &.btn-xs { width: (@input-height-small - 9); }
  }

  // Outline buttons
  // ---------------------
  &.btn-outline {
    background-color: transparent;
    border-width: 1px;

    &.btn-primary { color: @brand-primary; }
    &.btn-success { color: @brand-success; }
    &.btn-warning { color: @brand-warning; }
    &.btn-danger { color: @brand-danger; }
    &.btn-info { color: @brand-info; }
  }
}


// Link buttons
// -------------------------

// Make a button look and behave like a link
.btn-link {
  font-weight: @btn-font-weight;

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
        return "@bundles/CoreBundle/Assets/css/app/less/components/buttons.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/buttons.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/buttons.less");
    }
}
