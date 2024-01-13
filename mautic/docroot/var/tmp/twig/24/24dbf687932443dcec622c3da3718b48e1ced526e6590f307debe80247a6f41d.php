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

/* @bundles/CoreBundle/Assets/css/app/less/layouts/content.less */
class __TwigTemplate_7d06fe00c55c7fa7e7bc42ba84a93cdf5ba8f57201690218ee4714939c4483b8 extends Template
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
// Layout Content
// --------------------------------------------------

// animate `app-content` on sidebar-left opened
.csstransforms3d.sidebar-open-ltr {
  #app-content {
    .translate3d(@sidebar-left-width, 0, 0);
  }
}
.no-csstransforms3d.sidebar-open-ltr {
  #app-content {
    left: @sidebar-left-width;
  }
}
.csstransforms3d.sidebar-open-rtl {
    #app-content {
      .translate3d(-@sidebar-right-width, 0, 0);
    }
}
.no-csstransforms3d.sidebar-open-rtl {
  #app-content {
    left: -@sidebar-right-width;
  }
}

#app-content {
  position: relative;
  //z-index: @content-zindex;
  //min-height: 100%;
  .clearfix();
  .transition(all .3s ease);

  // content body
  // -------------------------
  > .content-body {
    //position: relative;
    width: 100%;
    float: left;

    // container
    // -------------------------
    .container-fluid {
      &.container-xs {
        padding-left: 5px;
        padding-right: 5px;
      }
      &.container-sm {
        padding-left: 10px;
        padding-right: 10px;
      }
      &.container-md {
        padding-left: 15px;
        padding-right: 15px;
      }
      &.container-lg {
        padding-left: 20px;
        padding-right: 20px;
      }
    }
  }
  &.content-only {
    width: 100%;
    .page-header {
      padding-top: 30px;
      padding-left: 30px;
      margin: -15px -15px 0 -15px;
    }
    &.container {
      padding-left: 0;
      padding-right: 0;
    }
  }
}

// breakpoint screen-sm and up
// -------------------------
@media (min-width: @screen-sm-min) {
  #app-content {
    position: static;

    // minimized state
    .sidebar-minimized & {
      margin-left: @sidebar-left-collapse-width !important;
    }
  }
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/layouts/content.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/layouts/content.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/layouts/content.less");
    }
}
