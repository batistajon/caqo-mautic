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

/* @bundles/CoreBundle/Assets/css/libraries/multiselect/multi-select.less */
class __TwigTemplate_4c256a2cebd42bad8ada57ea4219304e2f3b5cdad121925dccbd82137dc60843 extends Template
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
        echo "@import \"../../app/less/variables\";

.ms-container{
  background: transparent url('multiselect/switch.png') no-repeat 50% 50%;
  /*width: 370px;*/
}

.ms-container:after{
  content: \".\";
  display: block;
  height: 0;
  line-height: 0;
  font-size: 0;
  clear: both;
  min-height: 0;
  visibility: hidden;
}

.ms-container .ms-selectable, .ms-container .ms-selection{
  background: #fff;
  color: #555555;
  float: left;
  width: 45%;
}
.ms-container .ms-selection{
  float: right;
}

.ms-container .ms-list{
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
  -moz-transition: border linear 0.2s, box-shadow linear 0.2s;
  -ms-transition: border linear 0.2s, box-shadow linear 0.2s;
  -o-transition: border linear 0.2s, box-shadow linear 0.2s;
  transition: border linear 0.2s, box-shadow linear 0.2s;
  border: 1px solid #ccc;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  position: relative;
  height: 200px;
  padding: 0;
  overflow-y: auto;
  overflow-x: hidden;
}

.ms-container .ms-list.ms-focus{
  border-color: @mautic-primary;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), fade(@mautic-primary, 60%);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px fade(@mautic-primary, 60%);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px fade(@mautic-primary, 60%);
  outline: 0;
  outline: thin dotted \\9;
}

.ms-container ul{
  margin: 0;
  list-style-type: none;
  padding: 0;
}

.ms-container .ms-optgroup-container{
  width: 100%;
}

.ms-container .ms-optgroup-label{
  margin: 0;
  padding: 5px 0px 0px 5px;
  cursor: pointer;
  color: #999;
}

.ms-container .ms-selectable li.ms-elem-selectable,
.ms-container .ms-selection li.ms-elem-selection{
  border-bottom: 1px #eee solid;
  padding: 2px 10px;
  color: #555;
  font-size: 14px;
}

.ms-container .ms-selectable li.ms-hover,
.ms-container .ms-selection li.ms-hover{
  cursor: pointer;
  color: #fff;
  text-decoration: none;
  background-color: @mautic-primary;
}

.ms-container .ms-selectable li.disabled,
.ms-container .ms-selection li.disabled{
  background-color: #eee;
  color: #aaa;
  cursor: text;
}

.ms-search {
  width: 100%;
  margin-bottom: 5px;
  height: auto;
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/multiselect/multi-select.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/multiselect/multi-select.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/multiselect/multi-select.less");
    }
}
