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

/* @bundles/EmailBundle/Assets/builder/builder.css */
class __TwigTemplate_ab303045afc57fe4aff8b70fa9bb8e946eb5485ba43e59bac4f20492e6085595 extends Template
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
        echo ".mautic-editable {
  min-height: 75px;
  width: 100%;
  border: dashed 1px #000;
  margin-top: 3px;
  margin-bottom: 3px;
}
.mautic-editable.over-droppable {
  border: dashed 2px #4e5e9e;
  -webkit-box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.75);
  box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.75);
}
.mautic-editable-placeholder {
  height: 100%;
  width: 100%;
  text-align: center;
  margin-top: 25px;
}
div[contentEditable=true]:empty:not(:focus):before {
  content: attr(data-placeholder);
  padding: 5px;
  display: table-cell;
}
.inline-token-list {
  max-height: 200px;
  overflow-y: auto;
  overflow-x: hidden;
  margin-bottom: 20px;
  padding-left: 0;
  width: 240px;
}
.inline-token {
  position: relative;
  display: block;
  padding: 5px;
  margin-bottom: -1px;
  background-color: #ffffff;
  border: 1px solid #f7f7f7;
  color: #f7f7f7;
  font-size: 12px;
}
.inline-token:first-child {
  border-top-right-radius: 4px;
  border-top-left-radius: 4px;
}
.inline-token:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}
a.inline-token {
  color: #000000;
  text-decoration: none;
  font-family: \"Open Sans\", Helvetica, Arial, sans-serif;
  line-height: 1.3856;
}
a.inline-token:hover,
a.inline-token:focus {
  background-color: #DBDFEC;
}
a.inline-token .text-muted {
  color: #8393a2;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Assets/builder/builder.css";
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
        return new Source("", "@bundles/EmailBundle/Assets/builder/builder.css", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Assets/builder/builder.css");
    }
}
