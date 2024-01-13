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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/sv.js */
class __TwigTemplate_3d998b3514a7d731faa8ce3a3dd580223df278f7d8c9bc0cb6bcddf347b33ace extends Template
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
CKEDITOR.plugins.setLang(\"specialchar\",\"sv\",{euro:\"Eurotecken\",lsquo:\"Enkelt vänster citattecken\",rsquo:\"Enkelt höger citattecken\",ldquo:\"Dubbelt vänster citattecken\",rdquo:\"Dubbelt höger citattecken\",ndash:\"Snedstreck\",mdash:\"Långt tankstreck\",iexcl:\"Inverterad utropstecken\",cent:\"Centtecken\",pound:\"Pundtecken\",curren:\"Valutatecken\",yen:\"Yentecken\",brvbar:\"Brutet lodrätt streck\",sect:\"Paragraftecken\",uml:\"Diaeresis\",copy:\"Upphovsrättstecken\",ordf:\"Feminit ordningstalsindikator\",laquo:\"Vänsterställt dubbelt vinkelcitationstecken\",
not:\"Icke-tecken\",reg:\"Registrerad\",macr:\"Macron\",deg:\"Grader\",sup2:\"Upphöjt två\",sup3:\"Upphöjt tre\",acute:\"Akut accent\",micro:\"Mikrotecken\",para:\"Alinea\",middot:\"Centrerad prick\",cedil:\"Cedilj\",sup1:\"Upphöjt en\",ordm:\"Maskulina ordningsändelsen\",raquo:\"Högerställt dubbelt vinkelcitationstecken\",frac14:\"Bråktal - en kvart\",frac12:\"Bråktal - en halv\",frac34:\"Bråktal - tre fjärdedelar\",iquest:\"Inverterat frågetecken\",Agrave:\"Stort A med grav accent\",Aacute:\"Stort A med akutaccent\",Acirc:\"Stort A med circumflex\",
Atilde:\"Stort A med tilde\",Auml:\"Stort A med diaresis\",Aring:\"Stort A med ring ovan\",AElig:\"Stort Æ\",Ccedil:\"Stort C med cedilj\",Egrave:\"Stort E med grav accent\",Eacute:\"Stort E med aktuaccent\",Ecirc:\"Stort E med circumflex\",Euml:\"Stort E med diaeresis\",Igrave:\"Stort I med grav accent\",Iacute:\"Stort I med akutaccent\",Icirc:\"Stort I med circumflex\",Iuml:\"Stort I med diaeresis\",ETH:\"Stort Eth\",Ntilde:\"Stort N med tilde\",Ograve:\"Stort O med grav accent\",Oacute:\"Stort O med aktuaccent\",Ocirc:\"Stort O med circumflex\",
Otilde:\"Stort O med tilde\",Ouml:\"Stort O med diaeresis\",times:\"Multiplicera\",Oslash:\"Stor Ø\",Ugrave:\"Stort U med grav accent\",Uacute:\"Stort U med akutaccent\",Ucirc:\"Stort U med circumflex\",Uuml:\"Stort U med diaeresis\",Yacute:\"Stort Y med akutaccent\",THORN:\"Stort Thorn\",szlig:\"Litet dubbel-s/Eszett\",agrave:\"Litet a med grav accent\",aacute:\"Litet a med akutaccent\",acirc:\"Litet a med circumflex\",atilde:\"Litet a med tilde\",auml:\"Litet a med diaeresis\",aring:\"Litet a med ring ovan\",aelig:\"Bokstaven æ\",
ccedil:\"Litet c med cedilj\",egrave:\"Litet e med grav accent\",eacute:\"Litet e med akutaccent\",ecirc:\"Litet e med circumflex\",euml:\"Litet e med diaeresis\",igrave:\"Litet i med grav accent\",iacute:\"Litet i med akutaccent\",icirc:\"LItet i med circumflex\",iuml:\"Litet i med didaeresis\",eth:\"Litet eth\",ntilde:\"Litet n med tilde\",ograve:\"LItet o med grav accent\",oacute:\"LItet o med akutaccent\",ocirc:\"Litet o med circumflex\",otilde:\"LItet o med tilde\",ouml:\"Litet o med diaeresis\",divide:\"Division\",oslash:\"ø\",
ugrave:\"Litet u med grav accent\",uacute:\"Litet u med akutaccent\",ucirc:\"LItet u med circumflex\",uuml:\"Litet u med diaeresis\",yacute:\"Litet y med akutaccent\",thorn:\"Litet thorn\",yuml:\"Litet y med diaeresis\",OElig:\"Stor ligatur av OE\",oelig:\"Liten ligatur av oe\",372:\"Stort W med circumflex\",374:\"Stort Y med circumflex\",373:\"Litet w med circumflex\",375:\"Litet y med circumflex\",sbquo:\"Enkelt lågt 9-citationstecken\",8219:\"Enkelt högt bakvänt 9-citationstecken\",bdquo:\"Dubbelt lågt 9-citationstecken\",hellip:\"Horisontellt uteslutningstecken\",
trade:\"Varumärke\",9658:\"Svart högervänd pekare\",bull:\"Listpunkt\",rarr:\"Högerpil\",rArr:\"Dubbel högerpil\",hArr:\"Dubbel vänsterpil\",diams:\"Svart ruter\",asymp:\"Ungefär lika med\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/sv.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/sv.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/sv.js");
    }
}
