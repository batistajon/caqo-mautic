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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/templates/dialogs/templates.js */
class __TwigTemplate_0ec5daf34b5e37ee33e2e9360eab9d5d7cbd858665ac688faa411b24a1d47289 extends Template
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
(function(){CKEDITOR.dialog.add(\"templates\",function(c){function r(a,b){var m=CKEDITOR.dom.element.createFromHtml('\\x3ca href\\x3d\"javascript:void(0)\" tabIndex\\x3d\"-1\" role\\x3d\"option\" \\x3e\\x3cdiv class\\x3d\"cke_tpl_item\"\\x3e\\x3c/div\\x3e\\x3c/a\\x3e'),d='\\x3ctable style\\x3d\"width:350px;\" class\\x3d\"cke_tpl_preview\" role\\x3d\"presentation\"\\x3e\\x3ctr\\x3e';a.image&&b&&(d+='\\x3ctd class\\x3d\"cke_tpl_preview_img\"\\x3e\\x3cimg src\\x3d\"'+CKEDITOR.getUrl(b+a.image)+'\"'+(CKEDITOR.env.ie6Compat?' onload\\x3d\"this.width\\x3dthis.width\"':
\"\")+' alt\\x3d\"\" title\\x3d\"\"\\x3e\\x3c/td\\x3e');d+='\\x3ctd style\\x3d\"white-space:normal;\"\\x3e\\x3cspan class\\x3d\"cke_tpl_title\"\\x3e'+a.title+\"\\x3c/span\\x3e\\x3cbr/\\x3e\";a.description&&(d+=\"\\x3cspan\\x3e\"+a.description+\"\\x3c/span\\x3e\");d+=\"\\x3c/td\\x3e\\x3c/tr\\x3e\\x3c/table\\x3e\";m.getFirst().setHtml(d);m.on(\"click\",function(){t(a.html)});return m}function t(a){var b=CKEDITOR.dialog.getCurrent();b.getValueOf(\"selectTpl\",\"chkInsertOpt\")?(c.fire(\"saveSnapshot\"),c.setData(a,function(){b.hide();var a=c.createRange();
a.moveToElementEditStart(c.editable());a.select();setTimeout(function(){c.fire(\"saveSnapshot\")},0)})):(c.insertHtml(a),b.hide())}function k(a){var b=a.data.getTarget(),c=g.equals(b);if(c||g.contains(b)){var d=a.data.getKeystroke(),f=g.getElementsByTag(\"a\"),e;if(f){if(c)e=f.getItem(0);else switch(d){case 40:e=b.getNext();break;case 38:e=b.getPrevious();break;case 13:case 32:b.fire(\"click\")}e&&(e.focus(),a.data.preventDefault())}}}var h=CKEDITOR.plugins.get(\"templates\");CKEDITOR.document.appendStyleSheet(CKEDITOR.getUrl(h.path+
\"dialogs/templates.css\"));var g,h=\"cke_tpl_list_label_\"+CKEDITOR.tools.getNextNumber(),f=c.lang.templates,n=c.config;return{title:c.lang.templates.title,minWidth:CKEDITOR.env.ie?440:400,minHeight:340,contents:[{id:\"selectTpl\",label:f.title,elements:[{type:\"vbox\",padding:5,children:[{id:\"selectTplText\",type:\"html\",html:\"\\x3cspan\\x3e\"+f.selectPromptMsg+\"\\x3c/span\\x3e\"},{id:\"templatesList\",type:\"html\",focus:!0,html:'\\x3cdiv class\\x3d\"cke_tpl_list\" tabIndex\\x3d\"-1\" role\\x3d\"listbox\" aria-labelledby\\x3d\"'+
h+'\"\\x3e\\x3cdiv class\\x3d\"cke_tpl_loading\"\\x3e\\x3cspan\\x3e\\x3c/span\\x3e\\x3c/div\\x3e\\x3c/div\\x3e\\x3cspan class\\x3d\"cke_voice_label\" id\\x3d\"'+h+'\"\\x3e'+f.options+\"\\x3c/span\\x3e\"},{id:\"chkInsertOpt\",type:\"checkbox\",label:f.insertOption,\"default\":n.templates_replaceContent}]}]}],buttons:[CKEDITOR.dialog.cancelButton],onShow:function(){var a=this.getContentElement(\"selectTpl\",\"templatesList\");g=a.getElement();CKEDITOR.loadTemplates(n.templates_files,function(){var b=(n.templates||\"default\").split(\",\");
if(b.length){var c=g;c.setHtml(\"\");for(var d=0,h=b.length;d<h;d++)for(var e=CKEDITOR.getTemplates(b[d]),k=e.imagesPath,e=e.templates,q=e.length,l=0;l<q;l++){var p=r(e[l],k);p.setAttribute(\"aria-posinset\",l+1);p.setAttribute(\"aria-setsize\",q);c.append(p)}a.focus()}else g.setHtml('\\x3cdiv class\\x3d\"cke_tpl_empty\"\\x3e\\x3cspan\\x3e'+f.emptyListMsg+\"\\x3c/span\\x3e\\x3c/div\\x3e\")});this._.element.on(\"keydown\",k)},onHide:function(){this._.element.removeListener(\"keydown\",k)}}})})();";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/templates/dialogs/templates.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/templates/dialogs/templates.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/templates/dialogs/templates.js");
    }
}
