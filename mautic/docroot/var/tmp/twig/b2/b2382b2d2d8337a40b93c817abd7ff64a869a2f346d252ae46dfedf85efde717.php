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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/less/jumbotron.less */
class __TwigTemplate_c7c33a344e453809a8ec17b01a1b2a01d3a18255133864241e533c797d02af37 extends Template
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
// Jumbotron
// --------------------------------------------------


.jumbotron {
  padding-top:    @jumbotron-padding;
  padding-bottom: @jumbotron-padding;
  margin-bottom: @jumbotron-padding;
  color: @jumbotron-color;
  background-color: @jumbotron-bg;

  h1,
  .h1 {
    color: @jumbotron-heading-color;
  }

  p {
    margin-bottom: (@jumbotron-padding / 2);
    font-size: @jumbotron-font-size;
    font-weight: 200;
  }

  > hr {
    border-top-color: darken(@jumbotron-bg, 10%);
  }

  .container &,
  .container-fluid & {
    border-radius: @border-radius-large; // Only round corners at higher resolutions if contained in a container
    padding-left:  (@grid-gutter-width / 2);
    padding-right: (@grid-gutter-width / 2);
  }

  .container {
    max-width: 100%;
  }

  @media screen and (min-width: @screen-sm-min) {
    padding-top:    (@jumbotron-padding * 1.6);
    padding-bottom: (@jumbotron-padding * 1.6);

    .container &,
    .container-fluid & {
      padding-left:  (@jumbotron-padding * 2);
      padding-right: (@jumbotron-padding * 2);
    }

    h1,
    .h1 {
      font-size: @jumbotron-heading-font-size;
    }
  }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/jumbotron.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/jumbotron.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/bootstrap/less/jumbotron.less");
    }
}
