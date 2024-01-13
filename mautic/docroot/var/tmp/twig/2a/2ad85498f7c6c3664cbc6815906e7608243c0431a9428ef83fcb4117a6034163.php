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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/less/code.less */
class __TwigTemplate_e823fcd21b48a00b6bc0582d0c41bd77acd7f77472310b9941fb2642bef26cef extends Template
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
// Code (inline and block)
// --------------------------------------------------


// Inline and block code styles
code,
kbd,
pre,
samp {
  font-family: @font-family-monospace;
}

// Inline code
code {
  padding: 2px 4px;
  font-size: 90%;
  color: @code-color;
  background-color: @code-bg;
  border-radius: @border-radius-base;
}

// User input typically entered via keyboard
kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: @kbd-color;
  background-color: @kbd-bg;
  border-radius: @border-radius-small;
  box-shadow: inset 0 -1px 0 rgba(0,0,0,.25);

  kbd {
    padding: 0;
    font-size: 100%;
    font-weight: bold;
    box-shadow: none;
  }
}

// Blocks of code
pre {
  display: block;
  padding: ((@line-height-computed - 1) / 2);
  margin: 0 0 (@line-height-computed / 2);
  font-size: (@font-size-base - 1); // 14px to 13px
  line-height: @line-height-base;
  word-break: break-all;
  word-wrap: break-word;
  color: @pre-color;
  background-color: @pre-bg;
  border: 1px solid @pre-border-color;
  border-radius: @border-radius-base;

  // Account for some code outputs that place code tags in pre tags
  code {
    padding: 0;
    font-size: inherit;
    color: inherit;
    white-space: pre-wrap;
    background-color: transparent;
    border-radius: 0;
  }
}

// Enable scrollable blocks of code
.pre-scrollable {
  max-height: @pre-scrollable-max-height;
  overflow-y: scroll;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/code.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/code.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/bootstrap/less/code.less");
    }
}
