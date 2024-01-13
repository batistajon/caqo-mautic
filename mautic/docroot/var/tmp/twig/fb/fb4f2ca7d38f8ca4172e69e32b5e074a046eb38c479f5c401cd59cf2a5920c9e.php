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

/* @bundles/CoreBundle/Assets/css/app/less/components/alerts.less */
class __TwigTemplate_d248e15ce5ebd798359d90f24870297e5cf5fee45bff2287b948194237200802 extends Template
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

// Dismissible alerts
//
// Expand the right padding and account for the close button's positioning.

.alert-dismissible, // The misspelled .alert-dismissible was deprecated in 3.2.0.
.alert-dismissible {
  // Adjust close link position
  .close {
    top: -1px;
  }
}

.alert-primary {
\tbackground: lighten(@mautic-primary, 30%);
}

.alert-secondary {
\tbackground: lighten(@mautic-secondary, 30%);
}

.alert-tertiary {
\tbackground: lighten(@mautic-tertiary, 30%);
}

.alert-growl {
\tbackground: rgba(0,0,0,.8);
\tcolor: #FFFFFF;
\tborder: 1px solid #000;
}

.alert-growl-container {
  position: absolute;
  top: 20px;
  right: 20px;
  z-index: 100000;

  .alert-growl {
\tmargin-bottom: 5px;
  }
}

.alert-growl .close {
  font-size: (@font-size-base);
  color: #fff;
  margin-left: 10px;
}

.alert .close {
  font-size: (@font-size-base);
  margin-left: 10px;
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/alerts.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/alerts.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/alerts.less");
    }
}
