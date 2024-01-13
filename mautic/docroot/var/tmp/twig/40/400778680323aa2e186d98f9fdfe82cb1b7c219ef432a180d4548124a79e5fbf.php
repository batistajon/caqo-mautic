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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/about/dialogs/about.js */
class __TwigTemplate_8449d571389e9cb2440704b3c08e28e38e805cbe432cf1ceaf5bdba9b00edc79 extends Template
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
        echo "﻿/*
 Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
*/
CKEDITOR.dialog.add(\"about\",function(a){a=a.lang.about;var b=CKEDITOR.getUrl(CKEDITOR.plugins.get(\"about\").path+\"dialogs/\"+(CKEDITOR.env.hidpi?\"hidpi/\":\"\")+\"logo_ckeditor.png\");return{title:a.dlgTitle,minWidth:390,minHeight:210,contents:[{id:\"tab1\",label:\"\",title:\"\",expand:!0,padding:0,elements:[{type:\"html\",html:'\\x3cstyle type\\x3d\"text/css\"\\x3e.cke_about_container{color:#000 !important;padding:10px 10px 0;margin-top:5px}.cke_about_container p{margin: 0 0 10px;}.cke_about_container .cke_about_logo{height:81px;background-color:#fff;background-image:url('+
b+\");\"+(CKEDITOR.env.hidpi?\"background-size:194px 58px;\":\"\")+'background-position:center; background-repeat:no-repeat;margin-bottom:10px;}.cke_about_container a{cursor:pointer !important;color:#00B2CE !important;text-decoration:underline !important;}.cke_about_container \\x3e p,.cke_rtl .cke_about_container \\x3e p{text-align:center;}\\x3c/style\\x3e\\x3cdiv class\\x3d\"cke_about_container\"\\x3e\\x3cdiv class\\x3d\"cke_about_logo\"\\x3e\\x3c/div\\x3e\\x3cp\\x3eCKEditor '+CKEDITOR.version+\" (revision \"+CKEDITOR.revision+
')\\x3cbr\\x3e\\x3ca target\\x3d\"_blank\" rel\\x3d\"noopener noreferrer\" href\\x3d\"https://ckeditor.com/\"\\x3ehttps://ckeditor.com\\x3c/a\\x3e\\x3c/p\\x3e\\x3cp\\x3e'+a.moreInfo+'\\x3cbr\\x3e\\x3ca target\\x3d\"_blank\" rel\\x3d\"noopener noreferrer\" href\\x3d\"https://ckeditor.com/legal/ckeditor-oss-license/\"\\x3ehttps://ckeditor.com/legal/ckeditor-oss-license/\\x3c/a\\x3e\\x3c/p\\x3e\\x3cp\\x3e'+a.copy.replace(\"\$1\",'\\x3ca target\\x3d\"_blank\" rel\\x3d\"noopener noreferrer\" href\\x3d\"https://cksource.com/\"\\x3eCKSource\\x3c/a\\x3e - Frederico Knabben')+
\"\\x3c/p\\x3e\\x3c/div\\x3e\"}]}],buttons:[CKEDITOR.dialog.cancelButton]}});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/about/dialogs/about.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/about/dialogs/about.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/about/dialogs/about.js");
    }
}
