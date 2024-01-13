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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/cy.js */
class __TwigTemplate_a35352ece414455913f793676419b96acba12496495cee89711b64b69c7cbc59 extends Template
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
CKEDITOR.plugins.setLang(\"specialchar\",\"cy\",{euro:\"Arwydd yr Ewro\",lsquo:\"Dyfynnod chwith unigol\",rsquo:\"Dyfynnod dde unigol\",ldquo:\"Dyfynnod chwith dwbl\",rdquo:\"Dyfynnod dde dwbl\",ndash:\"Cysylltnod en\",mdash:\"Cysylltnod em\",iexcl:\"Ebychnod gwrthdro\",cent:\"Arwydd sent\",pound:\"Arwydd punt\",curren:\"Arwydd arian cyfred\",yen:\"Arwydd yen\",brvbar:\"Bar toriedig\",sect:\"Arwydd adran\",uml:\"Didolnod\",copy:\"Arwydd hawlfraint\",ordf:\"Dangosydd benywaidd\",laquo:\"Dyfynnod dwbl ar ongl i'r chwith\",not:\"Arwydd Nid\",
reg:\"Arwydd cofrestredig\",macr:\"Macron\",deg:\"Arwydd gradd\",sup2:\"Dau uwchsgript\",sup3:\"Tri uwchsgript\",acute:\"Acen ddyrchafedig\",micro:\"Arwydd micro\",para:\"Arwydd pilcrow\",middot:\"Dot canol\",cedil:\"Sedila\",sup1:\"Un uwchsgript\",ordm:\"Dangosydd gwrywaidd\",raquo:\"Dyfynnod dwbl ar ongl i'r dde\",frac14:\"Ffracsiwn cyffredin un cwarter\",frac12:\"Ffracsiwn cyffredin un hanner\",frac34:\"Ffracsiwn cyffredin tri chwarter\",iquest:\"Marc cwestiwn gwrthdroëdig\",Agrave:\"Priflythyren A Lladinaidd gydag acen ddisgynedig\",
Aacute:\"Priflythyren A Lladinaidd gydag acen ddyrchafedig\",Acirc:\"Priflythyren A Lladinaidd gydag acen grom\",Atilde:\"Priflythyren A Lladinaidd gyda thild\",Auml:\"Priflythyren A Lladinaidd gyda didolnod\",Aring:\"Priflythyren A Lladinaidd gyda chylch uwchben\",AElig:\"Priflythyren Æ Lladinaidd\",Ccedil:\"Priflythyren C Lladinaidd gyda sedila\",Egrave:\"Priflythyren E Lladinaidd gydag acen ddisgynedig\",Eacute:\"Priflythyren E Lladinaidd gydag acen ddyrchafedig\",Ecirc:\"Priflythyren E Lladinaidd gydag acen grom\",
Euml:\"Priflythyren E Lladinaidd gyda didolnod\",Igrave:\"Priflythyren I Lladinaidd gydag acen ddisgynedig\",Iacute:\"Priflythyren I Lladinaidd gydag acen ddyrchafedig\",Icirc:\"Priflythyren I Lladinaidd gydag acen grom\",Iuml:\"Priflythyren I Lladinaidd gyda didolnod\",ETH:\"Priflythyren Eth\",Ntilde:\"Priflythyren N Lladinaidd gyda thild\",Ograve:\"Priflythyren O Lladinaidd gydag acen ddisgynedig\",Oacute:\"Priflythyren O Lladinaidd gydag acen ddyrchafedig\",Ocirc:\"Priflythyren O Lladinaidd gydag acen grom\",Otilde:\"Priflythyren O Lladinaidd gyda thild\",
Ouml:\"Priflythyren O Lladinaidd gyda didolnod\",times:\"Arwydd lluosi\",Oslash:\"Priflythyren O Lladinaidd gyda strôc\",Ugrave:\"Priflythyren U Lladinaidd gydag acen ddisgynedig\",Uacute:\"Priflythyren U Lladinaidd gydag acen ddyrchafedig\",Ucirc:\"Priflythyren U Lladinaidd gydag acen grom\",Uuml:\"Priflythyren U Lladinaidd gyda didolnod\",Yacute:\"Priflythyren Y Lladinaidd gydag acen ddyrchafedig\",THORN:\"Priflythyren Thorn\",szlig:\"Llythyren s fach Lladinaidd siarp \",agrave:\"Llythyren a fach Lladinaidd gydag acen ddisgynedig\",
aacute:\"Llythyren a fach Lladinaidd gydag acen ddyrchafedig\",acirc:\"Llythyren a fach Lladinaidd gydag acen grom\",atilde:\"Llythyren a fach Lladinaidd gyda thild\",auml:\"Llythyren a fach Lladinaidd gyda didolnod\",aring:\"Llythyren a fach Lladinaidd gyda chylch uwchben\",aelig:\"Llythyren æ fach Lladinaidd\",ccedil:\"Llythyren c fach Lladinaidd gyda sedila\",egrave:\"Llythyren e fach Lladinaidd gydag acen ddisgynedig\",eacute:\"Llythyren e fach Lladinaidd gydag acen ddyrchafedig\",ecirc:\"Llythyren e fach Lladinaidd gydag acen grom\",
euml:\"Llythyren e fach Lladinaidd gyda didolnod\",igrave:\"Llythyren i fach Lladinaidd gydag acen ddisgynedig\",iacute:\"Llythyren i fach Lladinaidd gydag acen ddyrchafedig\",icirc:\"Llythyren i fach Lladinaidd gydag acen grom\",iuml:\"Llythyren i fach Lladinaidd gyda didolnod\",eth:\"Llythyren eth fach\",ntilde:\"Llythyren n fach Lladinaidd gyda thild\",ograve:\"Llythyren o fach Lladinaidd gydag acen ddisgynedig\",oacute:\"Llythyren o fach Lladinaidd gydag acen ddyrchafedig\",ocirc:\"Llythyren o fach Lladinaidd gydag acen grom\",
otilde:\"Llythyren o fach Lladinaidd gyda thild\",ouml:\"Llythyren o fach Lladinaidd gyda didolnod\",divide:\"Arwydd rhannu\",oslash:\"Llythyren o fach Lladinaidd gyda strôc\",ugrave:\"Llythyren u fach Lladinaidd gydag acen ddisgynedig\",uacute:\"Llythyren u fach Lladinaidd gydag acen ddyrchafedig\",ucirc:\"Llythyren u fach Lladinaidd gydag acen grom\",uuml:\"Llythyren u fach Lladinaidd gyda didolnod\",yacute:\"Llythyren y fach Lladinaidd gydag acen ddisgynedig\",thorn:\"Llythyren o fach Lladinaidd gyda strôc\",yuml:\"Llythyren y fach Lladinaidd gyda didolnod\",
OElig:\"Priflythyren cwlwm OE Lladinaidd \",oelig:\"Priflythyren cwlwm oe Lladinaidd \",372:\"Priflythyren W gydag acen grom\",374:\"Priflythyren Y gydag acen grom\",373:\"Llythyren w fach gydag acen grom\",375:\"Llythyren y fach gydag acen grom\",sbquo:\"Dyfynnod sengl 9-isel\",8219:\"Dyfynnod sengl 9-uchel cildro\",bdquo:\"Dyfynnod dwbl 9-isel\",hellip:\"Coll geiriau llorweddol\",trade:\"Arwydd marc masnachol\",9658:\"Pwyntydd du i'r dde\",bull:\"Bwled\",rarr:\"Saeth i'r dde\",rArr:\"Saeth ddwbl i'r dde\",hArr:\"Saeth ddwbl i'r chwith\",
diams:\"Siwt diemwnt du\",asymp:\"Bron yn hafal iddo\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/cy.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/cy.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/cy.js");
    }
}
