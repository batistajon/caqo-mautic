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

/* @bundles/CoreBundle/Assets/css/app/less/components/navs.less */
class __TwigTemplate_33ad57f86f6b39e631794d7e3495c63e72f0d0c00f12d4b4489b4859c237cb33 extends Template
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
// Navs
// --------------------------------------------------

// Base class
// --------------------------------------------------

.nav {
  > li {
    > a {
      font-weight: normal;
      //color: @text-color;
      // nav anchor `text` and `icon` behavior
      .text,
      .icon,
      .arrow {
        line-height: @line-height-computed;
      }
    }
  }

  .open {
    > a, > a:hover, > a:focus {
      background-color: transparent;
    }
  }

  // nav divider
  .nav-divider {
    background-color: rgba(0,0,0,0.05);
  }

  // nav-heading
  .nav-heading {
    font-size: 12px;
    font-weight: 600;
    padding: @nav-link-padding;
    padding-bottom: 5px;
    color: @gray-light;
  }
}

// Tabs
// -------------------------
.nav-tabs {
  border-top-right-radius: @nav-pills-border-radius;
  border-top-left-radius: @nav-pills-border-radius;
  //background-color: @body-bg;
  .box-shadow(inset 0 -3px 8px -3px rgba(0,0,0,0.05));

  > li {
    > a {
      line-height: 20px;
    }

    // Active state
    &.active > a {
      overflow: hidden;
      border-top-color: transparent;
      &:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background-color: @nav-pills-active-link-hover-bg;
      }
    }
  }
}

// Tabs content
// -------------------------
/*
.tab-content {
  > .tab-pane {
    border: 1px solid @nav-tabs-active-link-hover-border-color;
    border-top-width: 0;
    border-bottom-right-radius: @nav-pills-border-radius;
    border-bottom-left-radius: @nav-pills-border-radius;
  }
}
*/
// Pills
// -------------------------
.nav-pills {
  > li {
    + li {
      margin-left: 5px;
    }
  }
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/navs.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/navs.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/navs.less");
    }
}
