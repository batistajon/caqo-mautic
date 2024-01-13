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

/* @bundles/CoreBundle/Assets/css/app/less/components/list-group.less */
class __TwigTemplate_06350cd0e59cc7c9cd6ef7cee1800ffb2d3c5cc2780750902923db7a0863e615 extends Template
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
// List groups
// --------------------------------------------------

.list-group-item {
  > a {
    position: relative;
    z-index: 1;
    display: block;
  }
}

// Linked list items
//
// Use anchor elements instead of `li`s or `div`s to create linked list items.
// Includes an extra `.active` modifier class for showing selected items.

a.list-group-item {
  // Hover state
  &:hover,
  &:focus {
    z-index: 2;
  }
}

label.list-group-item {
  color: @list-group-link-color;

  .list-group-item-heading {
    color: @list-group-link-heading-color;
  }

  // Hover state
  &:hover,
  &:focus {
    text-decoration: none;
    color: @list-group-link-hover-color;
    background-color: @list-group-hover-bg;
  }
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/list-group.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/list-group.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/list-group.less");
    }
}
