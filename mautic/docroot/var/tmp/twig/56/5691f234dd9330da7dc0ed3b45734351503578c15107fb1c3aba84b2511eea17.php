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

/* @bundles/CoreBundle/Assets/css/app/less/components/image.less */
class __TwigTemplate_4dc8d06a199063c1c22db1d3e2bcb56e27904d9031f24a8e726c10ec7525202e extends Template
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
// Image
// --------------------------------------------------

// Image wrapper
// ------------------------
.img-wrapper {
  display: inline-block;
  position: relative;
  //overflow: hidden;

  +.img-wrapper {
    margin-left: 3px;
  }

  &.pull-right {
    +.img-wrapper {
      margin-right: 3px;
      margin-left: 0;
    }
  }

  // inset shadow
  &:after {
    position: absolute;
    content: \"\";
    z-index: 1;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    border-radius: inherit;
    .box-shadow(inset 0 0 3px 0 rgba(0,0,0,0.3));
  }

  img {
    border-radius: inherit;
    .img-responsive();
  }

  // label & badge
  > .label,
  > .badge {
    position: absolute;
    z-index: 5;
    top: -10px;
    right: -10px;
  }
}

// Image rounded
// ------------------------
.img-rounded {
  border-radius: @border-radius-base;
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/image.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/image.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/image.less");
    }
}
