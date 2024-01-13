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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/focusable.js */
class __TwigTemplate_f0a4899e8444a1c8ba2da02235c9c572c243eff8216d47d3469a7137b5b55901 extends Template
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
        echo "/*! jQuery UI - v1.12.1 - 2016-09-15
* http://jqueryui.com
* Copyright jQuery Foundation and other contributors; Licensed  */
!function(a){\"function\"==typeof define&&define.amd?define([\"jquery\",\"./version\"],a):a(jQuery)}(function(a){function b(a){for(var b=a.css(\"visibility\");\"inherit\"===b;)a=a.parent(),b=a.css(\"visibility\");return\"hidden\"!==b}return a.ui.focusable=function(c,d){var e,f,g,h,i,j=c.nodeName.toLowerCase();return\"area\"===j?(e=c.parentNode,f=e.name,!(!c.href||!f||\"map\"!==e.nodeName.toLowerCase())&&(g=a(\"img[usemap='#\"+f+\"']\"),g.length>0&&g.is(\":visible\"))):(/^(input|select|textarea|button|object)\$/.test(j)?(h=!c.disabled,h&&(i=a(c).closest(\"fieldset\")[0],i&&(h=!i.disabled))):h=\"a\"===j?c.href||d:d,h&&a(c).is(\":visible\")&&b(a(c)))},a.extend(a.expr[\":\"],{focusable:function(b){return a.ui.focusable(b,null!=a.attr(b,\"tabindex\"))}}),a.ui.focusable});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/focusable.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/focusable.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/focusable.js");
    }
}
