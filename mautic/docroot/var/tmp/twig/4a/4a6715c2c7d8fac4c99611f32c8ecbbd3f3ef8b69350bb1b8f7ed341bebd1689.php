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

/* @bundles/CoreBundle/Assets/css/app/less/components/graphs.less */
class __TwigTemplate_71ec664e5f2424d8b8df25e23441c629d2a227212274e28a06f6dbdc727ba33a extends Template
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
        echo ".legend-container {
  position: relative;
}
.bar-legend, .line-legend {
  list-style: none;
  position: absolute;
  top: 0;
  li {
    display: block;
    position: relative;
    margin-bottom: 4px;
    border-radius: 5px;
    padding: 0px 8px 2px 18px;
    font-size: 11px;
    cursor: default;
    -webkit-transition: background-color 200ms ease-in-out;
    -moz-transition: background-color 200ms ease-in-out;
    -o-transition: background-color 200ms ease-in-out;
    transition: background-color 200ms ease-in-out;
    &:hover {
      background-color: #fafafa;
    }
    span {
      display: block;
      position: absolute;
      left: 0;
      top: 0;
      width: 15px;
      height: 15px;
      border-radius: 5px;
    }
  }
}
ul.line-legend {
  margin: 0;
  padding: 0;
  position: relative;
  li {
    display: inline;
  }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/graphs.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/graphs.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/graphs.less");
    }
}
