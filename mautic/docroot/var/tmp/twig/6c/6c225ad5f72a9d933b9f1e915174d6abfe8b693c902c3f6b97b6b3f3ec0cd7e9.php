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

/* @bundles/CoreBundle/Assets/css/app/less/components/notes.less */
class __TwigTemplate_35c739d355183f493ea7579fffd6ee48c7a02400b51126f01a2d7b6e21a24e18 extends Template
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
        echo ".notes {
  overflow: hidden;
  height: auto;
  position: relative;
  padding: 0px;
  list-style-type: none;

  li > .panel > .panel-body {
    display: block !important;
    width: 100%;
    //height: 100%;
    table-layout: fixed;
    border-spacing: 0;

    [class*=\" icon\"],
    [class^=\"icon\"] {
      position: static;
      padding: 0;

      &.height-auto {
        &:before {
          content: \"\";
          position: absolute;
          width: inherit;
          top: 0;
          bottom: 0;
          z-index: -1;
          background-color: inherit;
          border: inherit;
        }
      }

      &.bdr-l {
        &.height-auto {
          &:before {
            margin-left: -1px;
          }
        }
      }
      &.bdr-r {
        &.height-auto {
          &:before {
            margin-right: -1px;
          }
        }
      }
    }

    > .col-xs-1 {
      vertical-align: middle;
    }

    > .col-xs-2,
    > .col-xs-3,
    > .col-xs-4,
    > .col-xs-5,
    > .col-xs-6,
    > .col-xs-7,
    > .col-xs-8,
    > .col-xs-9,
    > .col-xs-10,
    > .col-xs-11,
    > .cell {
      display: table-cell;
      vertical-align: top;
      height: 100%;
      float: none;
    }
    > .cell {
      width: 100%;
    }

    @media (min-width: @screen-sm-min) {
      > .col-sm-1,
      > .col-sm-2,
      > .col-sm-3,
      > .col-sm-4,
      > .col-sm-5,
      > .col-sm-6,
      > .col-sm-7,
      > .col-sm-8,
      > .col-sm-9,
      > .col-sm-10,
      > .col-sm-11 {
        display: table-cell;
        vertical-align: top;
        height: 100%;
        float: none;
      }
    }

    @media (min-width: @screen-md-min) {
      > .col-md-1,
      > .col-md-2,
      > .col-md-3,
      > .col-md-4,
      > .col-md-5,
      > .col-md-6,
      > .col-md-7,
      > .col-md-8,
      > .col-md-9,
      > .col-md-10,
      > .col-md-11 {
        display: table-cell;
        vertical-align: top;
        height: 100%;
        float: none;
      }
    }

    @media (min-width: @screen-lg-min) {
      > .col-lg-1,
      > .col-lg-2,
      > .col-lg-3,
      > .col-lg-4,
      > .col-lg-5,
      > .col-lg-6,
      > .col-lg-7,
      > .col-lg-8,
      > .col-lg-9,
      > .col-lg-10,
      > .col-lg-11 {
        display: table-cell;
        vertical-align: top;
        height: 100%;
        float: none;
      }
    }
  }
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/notes.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/notes.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/notes.less");
    }
}
