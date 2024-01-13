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

/* @bundles/CoreBundle/Assets/css/app/less/components/colors.less */
class __TwigTemplate_e06144d2ec97680c526950f60cf45918a5e5a54ac2e4a0f230e7c133ef340099 extends Template
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
// Colors
// --------------------------------------------------

.bg-white {
  .bg-color(#fff, @text-color);
}
.bg-auto {
  .bg-color(@body-bg, @text-color);
}
.bg-transparent {
  background-color: transparent !important;
  color: @text-color;
}

// Brand primary
.bg-primary {
  .bg-color(@brand-primary, #fff);
}

// Brand success
.bg-success {
  .bg-color(@brand-success, #fff);
}

// Brand info
.bg-info {
  .bg-color(@brand-info, #fff);
}

// Brand warning
.bg-warning {
  .bg-color(@brand-warning, #fff);
}

// Brand danger
.bg-danger {
  .bg-color(@brand-danger, #fff);
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/colors.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/colors.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/colors.less");
    }
}
