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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/less/responsive-utilities.less */
class __TwigTemplate_26a8956a299617616e8fb46d2882177af46ee02e574b866b4d73877dc1e8cb72 extends Template
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
// Responsive: Utility classes
// --------------------------------------------------


// IE10 in Windows (Phone) 8
//
// Support for responsive views via media queries is kind of borked in IE10, for
// Surface/desktop in split view and for Windows Phone 8. This particular fix
// must be accompanied by a snippet of JavaScript to sniff the user agent and
// apply some conditional CSS to *only* the Surface/desktop Windows 8. Look at
// our Getting Started page for more information on this bug.
//
// For more information, see the following:
//
// Issue: https://github.com/twbs/bootstrap/issues/10497
// Docs: http://getbootstrap.com/getting-started/#support-ie10-width
// Source: http://timkadlec.com/2013/01/windows-phone-8-and-device-width/
// Source: http://timkadlec.com/2012/10/ie10-snap-mode-and-responsive-design/

@-ms-viewport {
  width: device-width;
}


// Visibility utilities
// Note: Deprecated .visible-xs, .visible-sm, .visible-md, and .visible-lg as of v3.2.0
.visible-xs,
.visible-sm,
.visible-md,
.visible-lg {
  .responsive-invisibility();
}

.visible-xs-block,
.visible-xs-inline,
.visible-xs-inline-block,
.visible-sm-block,
.visible-sm-inline,
.visible-sm-inline-block,
.visible-md-block,
.visible-md-inline,
.visible-md-inline-block,
.visible-lg-block,
.visible-lg-inline,
.visible-lg-inline-block {
  display: none !important;
}

.visible-xs {
  @media (max-width: @screen-xs-max) {
    .responsive-visibility();
  }
}
.visible-xs-block {
  @media (max-width: @screen-xs-max) {
    display: block !important;
  }
}
.visible-xs-inline {
  @media (max-width: @screen-xs-max) {
    display: inline !important;
  }
}
.visible-xs-inline-block {
  @media (max-width: @screen-xs-max) {
    display: inline-block !important;
  }
}

.visible-sm {
  @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
    .responsive-visibility();
  }
}
.visible-sm-block {
  @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
    display: block !important;
  }
}
.visible-sm-inline {
  @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
    display: inline !important;
  }
}
.visible-sm-inline-block {
  @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
    display: inline-block !important;
  }
}

.visible-md {
  @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
    .responsive-visibility();
  }
}
.visible-md-block {
  @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
    display: block !important;
  }
}
.visible-md-inline {
  @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
    display: inline !important;
  }
}
.visible-md-inline-block {
  @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
    display: inline-block !important;
  }
}

.visible-lg {
  @media (min-width: @screen-lg-min) {
    .responsive-visibility();
  }
}
.visible-lg-block {
  @media (min-width: @screen-lg-min) {
    display: block !important;
  }
}
.visible-lg-inline {
  @media (min-width: @screen-lg-min) {
    display: inline !important;
  }
}
.visible-lg-inline-block {
  @media (min-width: @screen-lg-min) {
    display: inline-block !important;
  }
}

.hidden-xs {
  @media (max-width: @screen-xs-max) {
    .responsive-invisibility();
  }
}
.hidden-sm {
  @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
    .responsive-invisibility();
  }
}
.hidden-md {
  @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
    .responsive-invisibility();
  }
}
.hidden-lg {
  @media (min-width: @screen-lg-min) {
    .responsive-invisibility();
  }
}


// Print utilities
//
// Media queries are placed on the inside to be mixin-friendly.

// Note: Deprecated .visible-print as of v3.2.0
.visible-print {
  .responsive-invisibility();

  @media print {
    .responsive-visibility();
  }
}
.visible-print-block {
  display: none !important;

  @media print {
    display: block !important;
  }
}
.visible-print-inline {
  display: none !important;

  @media print {
    display: inline !important;
  }
}
.visible-print-inline-block {
  display: none !important;

  @media print {
    display: inline-block !important;
  }
}

.hidden-print {
  @media print {
    .responsive-invisibility();
  }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/responsive-utilities.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/responsive-utilities.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/bootstrap/less/responsive-utilities.less");
    }
}
