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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/az.js */
class __TwigTemplate_f7fbe23d155cff17ee22c7f8b1326eb522f1983dc36a6776d3ab0d81473071c4 extends Template
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
CKEDITOR.plugins.setLang(\"specialchar\",\"az\",{euro:\"Avropa valyuta işarəsi\",lsquo:\"Sol tək dırnaq işarəsi\",rsquo:\"Sağ tək dırnaq işarəsi\",ldquo:\"Sol cüt dırnaq işarəsi\",rdquo:\"Sağ cüt dırnaq işarəsi\",ndash:\"Çıxma işarəsi\",mdash:\"Tire\",iexcl:\"Çevrilmiş nida işarəsi\",cent:\"Sent işarəsi\",pound:\"Funt sterlinq işarəsi\",curren:\"Valyuta işarəsi\",yen:\"İena işarəsi\",brvbar:\"Sınmış zolaq\",sect:\"Paraqraf işarəsi\",uml:\"Umlyaut\",copy:\"Müəllif hüquqları haqqında işarəsi\",ordf:\"Qadın sıra indikatoru (a)\",laquo:\"Sola göstərən cüt bucaqlı dırnaq\",
not:\"QEYRİ işarəsi\",reg:\"Qeyd olunmuş işarəsi\",macr:\"Makron\",deg:\"Dərəcə işarəsi\",sup2:\"Yuxarı indeks 2\",sup3:\"Yuxarı indeks 3\",acute:\"Vurğu işarəsi\",micro:\"Mikro işarəsi\",para:\"Abzas işarəsi\",middot:\"Orta nöqtə\",cedil:\"Tsedilla işarəsi\",sup1:\"Yuxarı indeks 1\",ordm:\"Kişi say indikatoru (o)\",raquo:\"Sağa göstərən cüt bucaqlı dırnaq\",frac14:\"Dörddə bir hissə kəsri\",frac12:\"Bir yarım kəsri\",frac34:\"Dörddə üç hissə kəsri\",iquest:\"Çevrilmiş sual işarəsi\",Agrave:\"Soldan vurğu ilə A\",Aacute:\"Vurğu ilə A\",
Acirc:\"Dam işarəsi ilə A\",Atilde:\"Tilda işarəsi ilə A\",Auml:\"Umlyaut ilə A\",Aring:\"Dairəli A\",AElig:\"Æ hərfi\",Ccedil:\"Tsedilla ilə C\",Egrave:\"Soldan vurğu ilə E\",Eacute:\"Vurğu ilə E\",Ecirc:\"Dam işarəsi ilə E\",Euml:\"Umlyaut ilə E\",Igrave:\"Soldan vurğu ilə I\",Iacute:\"Vurğu ilə I\",Icirc:\"Dam işarəsi ilə I\",Iuml:\"Umlyaut ilə I\",ETH:\"Eth latin hərfi\",Ntilde:\"Tilda işarəsi ilə N\",Ograve:\"Soldan vurğu ilə O\",Oacute:\"Vurğu ilə O\",Ocirc:\"Dam işarəsi ilə E\",Otilde:\"Tilda işarəsi ilə O\",Ouml:\"Umlyaut ilə O\",
times:\"Vurma işarəsi\",Oslash:\"Üstxəttli O\",Ugrave:\"Soldan vurğu ilə U\",Uacute:\"Vurğu ilə U\",Ucirc:\"Dam işarəsi ilə U\",Uuml:\"Umlyaut ilə U\",Yacute:\"Vurğu ilə Y\",THORN:\"Thorn hərfi\",szlig:\"İti s kiçik hərfi\",agrave:\"Soldan vurğu ilə a\",aacute:\"Vurğu ilə a\",acirc:\"Dam işarəsi ilə a\",atilde:\"Tilda işarəsi ilə a\",auml:\"Umlyaut ilə a\",aring:\"Dairəli a\",aelig:\"æ hərfi\",ccedil:\"ç hərfi\",egrave:\"Soldan vurğu ilə e\",eacute:\"Vurğu ilə e\",ecirc:\"Dam işarəsi ilə e\",euml:\"Umlyaut ilə e\",igrave:\"Soldan vurğu ilə i\",
iacute:\"Vurğu ilə i\",icirc:\"Dam işarəsi ilə i\",iuml:\"Umlyaut ilə i\",eth:\"eth kiçik hərfi\",ntilde:\"Tilda işarəsi ilə n\",ograve:\"Soldan vurğu ilə o\",oacute:\"Vurğu ilə o\",ocirc:\"Dam işarəsi ilə o\",otilde:\"Tilda işarəsi ilə o\",ouml:\"Umlyaut ilə o\",divide:\"Bölünmə işarəsi\",oslash:\"Üstxəttli o\",ugrave:\"Soldan vurğu ilə u\",uacute:\"Vurğu ilə u\",ucirc:\"Dam işarəsi ilə u\",uuml:\"Umlyaut ilə u\",yacute:\"Vurğu ilə y\",thorn:\"Thorn kiçik hərfi\",yuml:\"Umlyaut ilə y\",OElig:\"OE ligaturası\",oelig:\"oe ligaturası\",372:\"Dam işarəsi ilə W\",
374:\"Dam işarəsi ilə Y\",373:\"Dam işarəsi ilə w\",375:\"Dam işarəsi ilə y\",sbquo:\"Aşağı dırnaq\",8219:\"Tək yuxarı çevrilmiş dırnaq\",bdquo:\"Aşağı cütlü dırnaqlar\",hellip:\"Üfüqi ellips\",trade:\"Əmtəə nişanı\",9658:\"Sağa göstərici\",bull:\"Marker\",rarr:\"Sağa istiqamətləndirən ox\",rArr:\"Sağa istiqamətləndirən cütlü ox\",hArr:\"Hərtərəfli ox\",diams:\"Qara kərpic\",asymp:\"Təxmini barabər\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/az.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/az.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/az.js");
    }
}
