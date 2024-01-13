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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/extras/quicklook.googledocs.min.js */
class __TwigTemplate_d3fd3c2938d942bc125f079ac0757e6193b6318e03f097310901ed155f1e6723 extends Template
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
        echo "!function(e,n){\"function\"==typeof define&&define.amd?define([\"elfinder\"],n):\"undefined\"!=typeof exports?module.exports=n(require(\"elfinder\")):n(e.elFinder)}(this,function(e){\"use strict\";try{e.prototype.commands.quicklook.plugins||(e.prototype.commands.quicklook.plugins=[]),e.prototype.commands.quicklook.plugins.push(function(e){var n=e.fm,o=e.preview;o.on(\"update\",function(i){var r,a,t=(e.window,i.file);0===t.mime.indexOf(\"application/vnd.google-apps.\")&&(\"1\"==t.url&&(o.hide(),\$('<div class=\"elfinder-quicklook-info-data\"><button class=\"elfinder-info-button\">'+n.i18n(\"getLink\")+\"</button></div>\").appendTo(e.info.find(\".elfinder-quicklook-info\")).on(\"click\",function(){\$(this).html('<span class=\"elfinder-spinner\">'),n.request({data:{cmd:\"url\",target:t.hash},preventDefault:!0}).always(function(){o.show(),\$(this).html(\"\")}).done(function(i){var r=n.file(t.hash);e.value.url=r.url=i.url||\"\",e.value.url&&o.trigger(\$.Event(\"update\",{file:e.value}))})})),\"\"!==t.url&&\"1\"!=t.url&&(i.stopImmediatePropagation(),a=\$('<div class=\"elfinder-quicklook-info-data\"><span class=\"elfinder-spinner-text\">'+n.i18n(\"nowLoading\")+'</span><span class=\"elfinder-spinner\"></span></div>').appendTo(e.info.find(\".elfinder-quicklook-info\")),r=\$('<iframe class=\"elfinder-quicklook-preview-iframe\"></iframe>').css(\"background-color\",\"transparent\").on(\"load\",function(){e.hideinfo(),a.remove(),r.css(\"background-color\",\"#fff\")}).on(\"error\",function(){a.remove(),r.remove()}).appendTo(o).attr(\"src\",n.url(t.hash)),o.one(\"change\",function(){a.remove(),r.off(\"load\").remove()})))})})}catch(n){}});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/extras/quicklook.googledocs.min.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/extras/quicklook.googledocs.min.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/extras/quicklook.googledocs.min.js");
    }
}
