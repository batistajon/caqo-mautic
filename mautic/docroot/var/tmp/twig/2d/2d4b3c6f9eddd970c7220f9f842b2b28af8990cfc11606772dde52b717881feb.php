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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/less/progress-bars.less */
class __TwigTemplate_bd0fd410d6af1c44751898ed9bc2da351dfb79cbb644ba09d677025b20177b1b extends Template
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
// Progress bars
// --------------------------------------------------


// Bar animations
// -------------------------

// WebKit
@-webkit-keyframes progress-bar-stripes {
  from  { background-position: 40px 0; }
  to    { background-position: 0 0; }
}

// Spec and IE10+
@keyframes progress-bar-stripes {
  from  { background-position: 40px 0; }
  to    { background-position: 0 0; }
}


// Bar itself
// -------------------------

// Outer container
.progress {
  overflow: hidden;
  height: @line-height-computed;
  margin-bottom: @line-height-computed;
  background-color: @progress-bg;
  border-radius: @progress-border-radius;
  .box-shadow(inset 0 1px 2px rgba(0,0,0,.1));
}

// Bar of progress
.progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: @font-size-small;
  line-height: @line-height-computed;
  color: @progress-bar-color;
  text-align: center;
  background-color: @progress-bar-bg;
  .box-shadow(inset 0 -1px 0 rgba(0,0,0,.15));
  .transition(width .6s ease);
}

// Striped bars
//
// `.progress-striped .progress-bar` is deprecated as of v3.2.0 in favor of the
// `.progress-bar-striped` class, which you just add to an existing
// `.progress-bar`.
.progress-striped .progress-bar,
.progress-bar-striped {
  #gradient > .striped();
  background-size: 40px 40px;
}

// Call animation for the active one
//
// `.progress.active .progress-bar` is deprecated as of v3.2.0 in favor of the
// `.progress-bar.active` approach.
.progress.active .progress-bar,
.progress-bar.active {
  .animation(progress-bar-stripes 2s linear infinite);
}


// Variations
// -------------------------

.progress-bar-success {
  .progress-bar-variant(@progress-bar-success-bg);
}

.progress-bar-info {
  .progress-bar-variant(@progress-bar-info-bg);
}

.progress-bar-warning {
  .progress-bar-variant(@progress-bar-warning-bg);
}

.progress-bar-danger {
  .progress-bar-variant(@progress-bar-danger-bg);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/progress-bars.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/progress-bars.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/bootstrap/less/progress-bars.less");
    }
}
