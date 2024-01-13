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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/clipboard/dialogs/paste.js */
class __TwigTemplate_0ae2c6e9f93b05ec7af990cb45bfc320c6c2e8e000f2267b9a272ce20ecb7eb7 extends Template
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
CKEDITOR.dialog.add(\"paste\",function(c){function k(a){var b=new CKEDITOR.dom.document(a.document),g=b.getBody(),d=b.getById(\"cke_actscrpt\");d&&d.remove();g.setAttribute(\"contenteditable\",!0);g.on(e.mainPasteEvent,function(a){a=e.initPasteDataTransfer(a);f?a!=f&&(f=e.initPasteDataTransfer()):f=a});if(CKEDITOR.env.ie&&8>CKEDITOR.env.version)b.getWindow().on(\"blur\",function(){b.\$.selection.empty()});b.on(\"keydown\",function(a){a=a.data;var b;switch(a.getKeystroke()){case 27:this.hide();b=1;break;case 9:case CKEDITOR.SHIFT+
9:this.changeFocus(1),b=1}b&&a.preventDefault()},this);c.fire(\"ariaWidget\",new CKEDITOR.dom.element(a.frameElement));b.getWindow().getFrame().removeCustomData(\"pendingFocus\")&&g.focus()}var h=c.lang.clipboard,e=CKEDITOR.plugins.clipboard,f;c.on(\"pasteDialogCommit\",function(a){a.data&&c.fire(\"paste\",{type:\"auto\",dataValue:a.data.dataValue,method:\"paste\",dataTransfer:a.data.dataTransfer||e.initPasteDataTransfer()})},null,null,1E3);return{title:h.paste,minWidth:CKEDITOR.env.ie&&CKEDITOR.env.quirks?370:
350,minHeight:CKEDITOR.env.quirks?250:245,onShow:function(){this.parts.dialog.\$.offsetHeight;this.setupContent();this._.committed=!1},onLoad:function(){(CKEDITOR.env.ie7Compat||CKEDITOR.env.ie6Compat)&&\"rtl\"==c.lang.dir&&this.parts.contents.setStyle(\"overflow\",\"hidden\")},onOk:function(){this.commitContent()},contents:[{id:\"general\",label:c.lang.common.generalTab,elements:[{type:\"html\",id:\"pasteMsg\",html:'\\x3cdiv style\\x3d\"white-space:normal;width:340px\"\\x3e'+h.pasteMsg+\"\\x3c/div\\x3e\"},{type:\"html\",
id:\"editing_area\",style:\"width:100%;height:100%\",html:\"\",focus:function(){var a=this.getInputElement(),b=a.getFrameDocument().getBody();!b||b.isReadOnly()?a.setCustomData(\"pendingFocus\",1):b.focus()},setup:function(){var a=this.getDialog(),b='\\x3chtml dir\\x3d\"'+c.config.contentsLangDirection+'\" lang\\x3d\"'+(c.config.contentsLanguage||c.langCode)+'\"\\x3e\\x3chead\\x3e\\x3cstyle\\x3ebody{margin:3px;height:95%;word-break:break-all;}\\x3c/style\\x3e\\x3c/head\\x3e\\x3cbody\\x3e\\x3cscript id\\x3d\"cke_actscrpt\" type\\x3d\"text/javascript\"\\x3ewindow.parent.CKEDITOR.tools.callFunction('+
CKEDITOR.tools.addFunction(k,a)+\",this);\\x3c/script\\x3e\\x3c/body\\x3e\\x3c/html\\x3e\",g=CKEDITOR.env.air?\"javascript:void(0)\":CKEDITOR.env.ie&&!CKEDITOR.env.edge?\"javascript:void((function(){\"+encodeURIComponent(\"document.open();(\"+CKEDITOR.tools.fixDomain+\")();document.close();\")+'})())\"':\"\",d=CKEDITOR.dom.element.createFromHtml('\\x3ciframe class\\x3d\"cke_pasteframe\" frameborder\\x3d\"0\"  allowTransparency\\x3d\"true\" src\\x3d\"'+g+'\" aria-label\\x3d\"'+h.pasteArea+'\" aria-describedby\\x3d\"'+a.getContentElement(\"general\",
\"pasteMsg\").domId+'\"\\x3e\\x3c/iframe\\x3e');f=null;d.on(\"load\",function(a){a.removeListener();a=d.getFrameDocument();a.write(b);c.focusManager.add(a.getBody());CKEDITOR.env.air&&k.call(this,a.getWindow().\$)},a);d.setCustomData(\"dialog\",a);a=this.getElement();a.setHtml(\"\");a.append(d);if(CKEDITOR.env.ie&&!CKEDITOR.env.edge){var e=CKEDITOR.dom.element.createFromHtml('\\x3cspan tabindex\\x3d\"-1\" style\\x3d\"position:absolute\" role\\x3d\"presentation\"\\x3e\\x3c/span\\x3e');e.on(\"focus\",function(){setTimeout(function(){d.\$.contentWindow.focus()})});
a.append(e);this.focus=function(){e.focus();this.fire(\"focus\")}}this.getInputElement=function(){return d};CKEDITOR.env.ie&&(a.setStyle(\"display\",\"block\"),a.setStyle(\"height\",d.\$.offsetHeight+2+\"px\"))},commit:function(){var a=this.getDialog().getParentEditor(),b=this.getInputElement().getFrameDocument().getBody(),c=b.getBogus();c&&c.remove();b=b.getHtml();this.getDialog()._.committed=!0;a.fire(\"pasteDialogCommit\",{dataValue:b,dataTransfer:f||e.initPasteDataTransfer()})}}]}]}});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/clipboard/dialogs/paste.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/clipboard/dialogs/paste.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/clipboard/dialogs/paste.js");
    }
}
