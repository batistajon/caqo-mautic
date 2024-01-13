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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/forms/dialogs/button.js */
class __TwigTemplate_014a38e456b36402c96a8a494000f23d92927cc0e49ccd70eac22a507d8a9aaf extends Template
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
CKEDITOR.dialog.add(\"button\",function(b){function d(a){var b=this.getValue();b?(a.attributes[this.id]=b,\"name\"==this.id&&(a.attributes[\"data-cke-saved-name\"]=b)):(delete a.attributes[this.id],\"name\"==this.id&&delete a.attributes[\"data-cke-saved-name\"])}return{title:b.lang.forms.button.title,minWidth:350,minHeight:150,getModel:function(a){return(a=a.getSelection().getSelectedElement())&&a.is(\"input\")&&a.getAttribute(\"type\")in{button:1,reset:1,submit:1}?a:null},onShow:function(){var a=this.getModel(this.getParentEditor());
a&&this.setupContent(a)},onOk:function(){var a=this.getParentEditor(),b=this.getModel(a),d=this.getMode(a)==CKEDITOR.dialog.CREATION_MODE,c=b?CKEDITOR.htmlParser.fragment.fromHtml(b.getOuterHtml()).children[0]:new CKEDITOR.htmlParser.element(\"input\");this.commitContent(c);var e=new CKEDITOR.htmlParser.basicWriter;c.writeHtml(e);c=CKEDITOR.dom.element.createFromHtml(e.getHtml(),a.document);d?a.insertElement(c):(c.replace(b),a.getSelection().selectElement(c))},contents:[{id:\"info\",label:b.lang.forms.button.title,
title:b.lang.forms.button.title,elements:[{id:\"name\",type:\"text\",bidi:!0,label:b.lang.common.name,\"default\":\"\",setup:function(a){this.setValue(a.data(\"cke-saved-name\")||a.getAttribute(\"name\")||\"\")},commit:d},{id:\"value\",type:\"text\",label:b.lang.forms.button.text,accessKey:\"V\",\"default\":\"\",setup:function(a){this.setValue(a.getAttribute(\"value\")||\"\")},commit:d},{id:\"type\",type:\"select\",label:b.lang.forms.button.type,\"default\":\"button\",accessKey:\"T\",items:[[b.lang.forms.button.typeBtn,\"button\"],[b.lang.forms.button.typeSbm,
\"submit\"],[b.lang.forms.button.typeRst,\"reset\"]],setup:function(a){this.setValue(a.getAttribute(\"type\")||\"\")},commit:d}]}]}});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/forms/dialogs/button.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/forms/dialogs/button.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/forms/dialogs/button.js");
    }
}
