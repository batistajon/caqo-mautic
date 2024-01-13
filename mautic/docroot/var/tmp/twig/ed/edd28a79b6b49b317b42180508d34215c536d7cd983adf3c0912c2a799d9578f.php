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

/* @bundles/CoreBundle/Assets/css/app/less/layouts/footer.less */
class __TwigTemplate_507d244176de8b5dfeae762d3c9e9c8828a283194aac5d42bb3fc81dd61a2024 extends Template
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
// Layout Footer
// --------------------------------------------------

// animate `app-footer` on sidebar-left opened
.csstransforms3d.sidebar-open-ltr {
  #app-footer {
    .translate3d(@sidebar-left-width, 0, 0);
  }
}
.no-csstransforms3d.sidebar-open-ltr {
  #app-footer {
    left: @sidebar-left-width;
  }
}
.csstransforms3d.sidebar-open-rtl {
  #app-footer {
    .translate3d(-@sidebar-right-width, 0, 0);
  }
}
.no-csstransforms3d.sidebar-open-rtl {
  #app-footer {
    left: -@sidebar-right-width;
    right: @sidebar-right-width;
  }
}

#app-footer {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: @footer-zindex;
  height: @footer-height;
  line-height: @footer-height;
  background-color: @footer-bg;
  .transition(all .3s ease);

  // Add bottom padding to app-content if footer is presented
  ~ #app-content {
    > .content-body {
      padding-bottom: @footer-height;
    }
  }

  &:after {
    content: \"\";
    position: absolute;
    z-index: -1;
    left: 0;
    right: 0;
    top: -1px;
    height: inherit;
    border-top: 1px solid rgba(0,0,0,0.05);
  }
}

// breakpoint screen-sm and up
// -------------------------
@media (min-width: @screen-sm-min) {
  #app-footer {
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
        return "@bundles/CoreBundle/Assets/css/app/less/layouts/footer.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/layouts/footer.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/layouts/footer.less");
    }
}
