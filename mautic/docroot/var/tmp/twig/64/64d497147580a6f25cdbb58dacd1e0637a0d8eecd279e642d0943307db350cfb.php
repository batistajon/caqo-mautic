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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/ja.js */
class __TwigTemplate_fd77fcb9fbf170f7d3ca99dfb7890b38530c2feb6c238251af1964040c387136 extends Template
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
CKEDITOR.plugins.setLang(\"specialchar\",\"ja\",{euro:\"ユーロ記号\",lsquo:\"左シングル引用符\",rsquo:\"右シングル引用符\",ldquo:\"左ダブル引用符\",rdquo:\"右ダブル引用符\",ndash:\"半角ダッシュ\",mdash:\"全角ダッシュ\",iexcl:\"逆さ感嘆符\",cent:\"セント記号\",pound:\"ポンド記号\",curren:\"通貨記号\",yen:\"円記号\",brvbar:\"上下に分かれた縦棒\",sect:\"節記号\",uml:\"分音記号(ウムラウト)\",copy:\"著作権表示記号\",ordf:\"女性序数標識\",laquo:\" 始め二重山括弧引用記号\",not:\"論理否定記号\",reg:\"登録商標記号\",macr:\"長音符\",deg:\"度記号\",sup2:\"上つき2, 2乗\",sup3:\"上つき3, 3乗\",acute:\"揚音符\",micro:\"ミクロン記号\",para:\"段落記号\",middot:\"中黒\",cedil:\"セディラ\",sup1:\"上つき1\",ordm:\"男性序数標識\",raquo:\"終わり二重山括弧引用記号\",
frac14:\"四分の一\",frac12:\"二分の一\",frac34:\"四分の三\",iquest:\"逆疑問符\",Agrave:\"抑音符つき大文字A\",Aacute:\"揚音符つき大文字A\",Acirc:\"曲折アクセントつき大文字A\",Atilde:\"チルダつき大文字A\",Auml:\"分音記号つき大文字A\",Aring:\"リングつき大文字A\",AElig:\"AとEの合字\",Ccedil:\"セディラつき大文字C\",Egrave:\"抑音符つき大文字E\",Eacute:\"揚音符つき大文字E\",Ecirc:\"曲折アクセントつき大文字E\",Euml:\"分音記号つき大文字E\",Igrave:\"抑音符つき大文字I\",Iacute:\"揚音符つき大文字I\",Icirc:\"曲折アクセントつき大文字I\",Iuml:\"分音記号つき大文字I\",ETH:\"[アイスランド語]大文字ETH\",Ntilde:\"チルダつき大文字N\",Ograve:\"抑音符つき大文字O\",Oacute:\"揚音符つき大文字O\",Ocirc:\"曲折アクセントつき大文字O\",Otilde:\"チルダつき大文字O\",Ouml:\" 分音記号つき大文字O\",
times:\"乗算記号\",Oslash:\"打ち消し線つき大文字O\",Ugrave:\"抑音符つき大文字U\",Uacute:\"揚音符つき大文字U\",Ucirc:\"曲折アクセントつき大文字U\",Uuml:\"分音記号つき大文字U\",Yacute:\"揚音符つき大文字Y\",THORN:\"[アイスランド語]大文字THORN\",szlig:\"ドイツ語エスツェット\",agrave:\"抑音符つき小文字a\",aacute:\"揚音符つき小文字a\",acirc:\"曲折アクセントつき小文字a\",atilde:\"チルダつき小文字a\",auml:\"分音記号つき小文字a\",aring:\"リングつき小文字a\",aelig:\"aとeの合字\",ccedil:\"セディラつき小文字c\",egrave:\"抑音符つき小文字e\",eacute:\"揚音符つき小文字e\",ecirc:\"曲折アクセントつき小文字e\",euml:\"分音記号つき小文字e\",igrave:\"抑音符つき小文字i\",iacute:\"揚音符つき小文字i\",icirc:\"曲折アクセントつき小文字i\",iuml:\"分音記号つき小文字i\",eth:\"アイスランド語小文字eth\",
ntilde:\"チルダつき小文字n\",ograve:\"抑音符つき小文字o\",oacute:\"揚音符つき小文字o\",ocirc:\"曲折アクセントつき小文字o\",otilde:\"チルダつき小文字o\",ouml:\"分音記号つき小文字o\",divide:\"除算記号\",oslash:\"打ち消し線つき小文字o\",ugrave:\"抑音符つき小文字u\",uacute:\"揚音符つき小文字u\",ucirc:\"曲折アクセントつき小文字u\",uuml:\"分音記号つき小文字u\",yacute:\"揚音符つき小文字y\",thorn:\"アイスランド語小文字thorn\",yuml:\"分音記号つき小文字y\",OElig:\"OとEの合字\",oelig:\"oとeの合字\",372:\"曲折アクセントつき大文字W\",374:\"曲折アクセントつき大文字Y\",373:\"曲折アクセントつき小文字w\",375:\"曲折アクセントつき小文字y\",sbquo:\"シングル下引用符\",8219:\"左右逆の左引用符\",bdquo:\"ダブル下引用符\",hellip:\"三点リーダ\",trade:\"商標記号\",9658:\"右黒三角ポインタ\",bull:\"黒丸\",
rarr:\"右矢印\",rArr:\"右二重矢印\",hArr:\"左右二重矢印\",diams:\"ダイヤ\",asymp:\"漸近\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/ja.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/ja.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/ja.js");
    }
}
