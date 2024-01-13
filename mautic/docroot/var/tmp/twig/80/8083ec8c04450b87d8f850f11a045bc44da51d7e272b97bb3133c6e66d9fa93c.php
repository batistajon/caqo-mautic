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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/jquery-1-7.js */
class __TwigTemplate_75e233c6a7703889b4d7132e9acafbdb448c4743bb2b9bedafd76c93a81c2705 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"jquery\",\"./version\"],a):a(jQuery)}(function(a){\"1.7\"===a.fn.jquery.substring(0,3)&&(a.each([\"Width\",\"Height\"],function(b,c){function d(b,c,d,f){return a.each(e,function(){c-=parseFloat(a.css(b,\"padding\"+this))||0,d&&(c-=parseFloat(a.css(b,\"border\"+this+\"Width\"))||0),f&&(c-=parseFloat(a.css(b,\"margin\"+this))||0)}),c}var e=\"Width\"===c?[\"Left\",\"Right\"]:[\"Top\",\"Bottom\"],f=c.toLowerCase(),g={innerWidth:a.fn.innerWidth,innerHeight:a.fn.innerHeight,outerWidth:a.fn.outerWidth,outerHeight:a.fn.outerHeight};a.fn[\"inner\"+c]=function(b){return void 0===b?g[\"inner\"+c].call(this):this.each(function(){a(this).css(f,d(this,b)+\"px\")})},a.fn[\"outer\"+c]=function(b,e){return\"number\"!=typeof b?g[\"outer\"+c].call(this,b):this.each(function(){a(this).css(f,d(this,b,!0,e)+\"px\")})}}),a.fn.addBack=function(a){return this.add(null==a?this.prevObject:this.prevObject.filter(a))})});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/jquery-1-7.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/jquery-1-7.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/jquery-1-7.js");
    }
}
