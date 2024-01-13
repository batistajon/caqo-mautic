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

/* @bundles/CoreBundle/Assets/css/app/less/components/dropdowns.less */
class __TwigTemplate_5ec62417155ea5830af50f37de4b7c50b05677a3389d706c2fe1b16fda16b7c9 extends Template
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
// Dropdown menus
// --------------------------------------------------

// Dropdown arrow/caret
.caret {
  margin-top: -1px;
}

// The dropdown menu (ul)
.dropdown-menu {
  .box-shadow(0 3px 6px rgba(0,0,0,.06));

  // Dividers (basically an hr) within the dropdown
  .divider {
    margin: 5px 0;
  }

  // reset panel style
  .panel {
    .box-shadow(none);
    border-radius: 0;
    border-width: 0;
    margin-bottom: 0;
    margin-top: -5px;
    margin-bottom: -5px;

    .panel-heading {
      border-radius: 0;
    }
  }

  // Links within the dropdown menu
  > li > a {
    position: relative;
    z-index: 1;
    margin-top: -1px;
    padding: 5px 20px;
    border-top: 1px solid transparent;
    border-bottom: 1px solid transparent;

    .fa {
      min-width: 15px;
    }
  }
}

// Hover/Focus state
.dropdown-menu > li > a {
  &:hover,
  &:focus {
    z-index: 2;
    border-color: darken(@dropdown-link-hover-bg, 0.7%);
  }
}

// Active state
.dropdown-menu > .active > a {
  &,
  &:hover,
  &:focus {
    color: @nav-tabs-active-link-hover-color;
    background-color: @nav-link-hover-bg;
  }
}

.scrollable-menu {
  height: auto;
  max-height: 200px;
  overflow-x: hidden;
}

ul.dropdown-menu-form {
  padding: 0 5px 0 30px;
  max-height: 300px;
  overflow-y: auto;
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/dropdowns.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/dropdowns.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/dropdowns.less");
    }
}
