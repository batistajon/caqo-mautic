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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/less/utilities.less */
class __TwigTemplate_22cfe1ab5aa9f49ae1316ebadbb85248b69520a715739ca63bd33c82a8b0dac8 extends Template
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
// Utility classes
// --------------------------------------------------


// Floats
// -------------------------

.clearfix {
  .clearfix();
}
.center-block {
  .center-block();
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}


// Toggling content
// -------------------------

// Note: Deprecated .hide in favor of .hidden or .sr-only (as appropriate) in v3.0.1
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  .text-hide();
}


// Hide from screenreaders and browsers
//
// Credit: HTML5 Boilerplate

.hidden {
  display: none !important;
}


// For Affix plugin
// -------------------------

.affix {
  position: fixed;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/utilities.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/utilities.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/bootstrap/less/utilities.less");
    }
}
