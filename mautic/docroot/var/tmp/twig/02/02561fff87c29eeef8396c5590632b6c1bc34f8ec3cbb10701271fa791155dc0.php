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

/* @bundles/CoreBundle/Assets/css/app/less/components/progress-bars.less */
class __TwigTemplate_7bf84d47a7b60c8b505d2026aea2b452f42791ee059ba7bd1749d1371e0259e1 extends Template
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

// Progress Itself
// -------------------------
.progress {
  background-color: @hr-border;
  .box-shadow(none);

  // Sizing
  &.progress-md {
    height: (@line-height-computed - 6); // 12px
    border-radius: @border-radius-small;
  }
  &.progress-sm {
    height: (@line-height-computed - 10); // 8px
    border-radius: @border-radius-small;
    margin-top: 2px;
  }
  &.progress-xs {
    height: (@line-height-computed - 14); // 4px
    border-radius: @border-radius-small;
  }
}
.progress-bar {
  .box-shadow(none);
  .transition(width 4.0s ease);
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

// Progress inside sidebar
// -------------------------
.app-sidebar {
  .progress {
    background-color: lighten(@sidebar-left-bg, 3%);
  }
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/progress-bars.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/progress-bars.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/progress-bars.less");
    }
}
