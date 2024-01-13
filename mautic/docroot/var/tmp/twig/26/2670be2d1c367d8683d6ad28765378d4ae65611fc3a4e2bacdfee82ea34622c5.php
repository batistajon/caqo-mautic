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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/less/close.less */
class __TwigTemplate_d157e43bb03394c0a94b91b0e3cee5c750c3b44d9f51316518889b3160a3de8b extends Template
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
// Close icons
// --------------------------------------------------


.close {
  float: right;
  font-size: (@font-size-base * 1.5);
  font-weight: @close-font-weight;
  line-height: 1;
  color: @close-color;
  text-shadow: @close-text-shadow;
  .opacity(.2);

  &:hover,
  &:focus {
    color: @close-color;
    text-decoration: none;
    cursor: pointer;
    .opacity(.5);
  }

  // Additional properties for button version
  // iOS requires the button element instead of an anchor tag.
  // If you want the anchor version, it requires `href=\"#\"`.
  // See https://developer.mozilla.org/en-US/docs/Web/Events/click#Safari_Mobile
  button& {
    padding: 0;
    cursor: pointer;
    background: transparent;
    border: 0;
    -webkit-appearance: none;
  }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/close.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/close.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/bootstrap/less/close.less");
    }
}
