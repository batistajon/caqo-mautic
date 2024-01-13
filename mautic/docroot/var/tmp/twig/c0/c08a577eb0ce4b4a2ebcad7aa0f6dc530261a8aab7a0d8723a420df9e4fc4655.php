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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/less/alerts.less */
class __TwigTemplate_9a8ecfa3463d1f01dc7e3677427c03708494ffb1cd88438cf05616250240f2c9 extends Template
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
// Alerts
// --------------------------------------------------


// Base styles
// -------------------------

.alert {
  padding: @alert-padding;
  margin-bottom: @line-height-computed;
  border: 1px solid transparent;
  border-radius: @alert-border-radius;

  // Headings for larger alerts
  h4 {
    margin-top: 0;
    // Specified for the h4 to prevent conflicts of changing @headings-color
    color: inherit;
  }

  // Provide class for links that match alerts
  .alert-link {
    font-weight: @alert-link-font-weight;
  }

  // Improve alignment and spacing of inner content
  > p,
  > ul {
    margin-bottom: 0;
  }

  > p + p {
    margin-top: 5px;
  }
}

// Dismissible alerts
//
// Expand the right padding and account for the close button's positioning.

.alert-dismissable, // The misspelled .alert-dismissable was deprecated in 3.2.0.
.alert-dismissible {
  padding-right: (@alert-padding + 20);

  // Adjust close link position
  .close {
    position: relative;
    top: -2px;
    right: -21px;
    color: inherit;
  }
}

// Alternate styles
//
// Generate contextual modifier classes for colorizing the alert.

.alert-success {
  .alert-variant(@alert-success-bg; @alert-success-border; @alert-success-text);
}

.alert-info {
  .alert-variant(@alert-info-bg; @alert-info-border; @alert-info-text);
}

.alert-warning {
  .alert-variant(@alert-warning-bg; @alert-warning-border; @alert-warning-text);
}

.alert-danger {
  .alert-variant(@alert-danger-bg; @alert-danger-border; @alert-danger-text);
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/alerts.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/alerts.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/bootstrap/less/alerts.less");
    }
}
