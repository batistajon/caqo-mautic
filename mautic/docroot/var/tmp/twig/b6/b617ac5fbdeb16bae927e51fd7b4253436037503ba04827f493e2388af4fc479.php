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

/* @bundles/CoreBundle/Assets/css/app/less/components/brand.less */
class __TwigTemplate_b5cf3a16807f66e317ba182bf187f6221a855d87b9b7c4e1a930d10f084c7499 extends Template
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
// Logo
// --------------------------------------------------

// mautic-brand
.mautic-brand {
  display: block;
  height: @header-height;
  padding-left: 35px;
  padding-right: 32px;
  width: 100%;
  overflow: hidden;

  &.pull-left {
    width: 75%;
  }

  &.minimized {
    background-size: contain;
  }

  // mautic logo figure
  > svg.mautic-logo-figure {
    width: @mautic-logo-figure-width;
    height: @header-height;
    .circle {
      fill: @mautic-logo-figure-circle-fill;
    }
    .m,
    .m-arrow {
      fill: @mautic-logo-figure-m-fill;
    }
  }

  // mautic logo text
  > svg.mautic-logo-text {
    height: @header-height;
    width: @mautic-logo-text-width;
    .m,.a,.u,.t,.i,.c {
      fill: @mautic-logo-text-fill
    }
  }
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/brand.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/brand.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/brand.less");
    }
}
