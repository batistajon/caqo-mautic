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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/less/badges.less */
class __TwigTemplate_063e5da5d181e29324c550394e14f41a28d5de4a3b2054bfba2726295a8b4422 extends Template
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
// Badges
// --------------------------------------------------


// Base class
.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: @font-size-small;
  font-weight: @badge-font-weight;
  color: @badge-color;
  line-height: @badge-line-height;
  vertical-align: middle;
  white-space: nowrap;
  text-align: center;
  background-color: @badge-bg;
  border-radius: @badge-border-radius;

  // Empty badges collapse automatically (not available in IE8)
  &:empty {
    display: none;
  }

  // Quick fix for badges in buttons
  .btn & {
    position: relative;
    top: -1px;
  }

  .btn-xs &,
  .btn-group-xs > .btn & {
    top: 0;
    padding: 1px 5px;
  }

  // Hover state, but only for links
  a& {
    &:hover,
    &:focus {
      color: @badge-link-hover-color;
      text-decoration: none;
      cursor: pointer;
    }
  }

  // Account for badges in navs
  .list-group-item.active > &,
  .nav-pills > .active > a > & {
    color: @badge-active-color;
    background-color: @badge-active-bg;
  }

  .list-group-item > & {
    float: right;
  }

  .list-group-item > & + & {
    margin-right: 5px;
  }

  .nav-pills > li > a > & {
    margin-left: 3px;
  }
}

.label-as-badge {
  border-radius: @badge-border-radius !important;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/badges.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/badges.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/bootstrap/less/badges.less");
    }
}
