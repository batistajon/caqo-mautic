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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/da.js */
class __TwigTemplate_326a95aadacd97e263186881a809c0c99a021cda5dc385971af63b8e283c8b51 extends Template
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
CKEDITOR.plugins.setLang(\"specialchar\",\"da\",{euro:\"Euro-tegn\",lsquo:\"Venstre enkelt anførselstegn\",rsquo:\"Højre enkelt anførselstegn\",ldquo:\"Venstre dobbelt anførselstegn\",rdquo:\"Højre dobbelt anførselstegn\",ndash:\"Bindestreg\",mdash:\"Tankestreg\",iexcl:\"Omvendt udråbstegn\",cent:\"Cent-tegn\",pound:\"Pund-tegn\",curren:\"Valuta-tegn\",yen:\"Yen-tegn\",brvbar:\"Brudt streg\",sect:\"Paragraftegn\",uml:\"Umlaut\",copy:\"Copyright-tegn\",ordf:\"Feminin ordinal indikator\",laquo:\"Venstre dobbel citations-vinkel\",not:\"Negation\",
reg:\"Registreret varemærke tegn\",macr:\"Macron\",deg:\"Grad-tegn\",sup2:\"Superscript to\",sup3:\"Superscript tre\",acute:\"Prim-tegn\",micro:\"Mikro-tegn\",para:\"Pilcrow-tegn\",middot:\"Punkt-tegn\",cedil:\"Cedille\",sup1:\"Superscript et\",ordm:\"Maskulin ordinal indikator\",raquo:\"Højre dobbel citations-vinkel\",frac14:\"En fjerdedel\",frac12:\"En halv\",frac34:\"En tredjedel\",iquest:\"Omvendt udråbstegn\",Agrave:\"Stort A med accent grave\",Aacute:\"Stort A med accent aigu\",Acirc:\"Stort A med cirkumfleks\",Atilde:\"Stort A med tilde\",
Auml:\"Stort A med umlaut\",Aring:\"Stort Å\",AElig:\"Stort Æ\",Ccedil:\"Stort C med cedille\",Egrave:\"Stort E med accent grave\",Eacute:\"Stort E med accent aigu\",Ecirc:\"Stort E med cirkumfleks\",Euml:\"Stort E med umlaut\",Igrave:\"Stort I med accent grave\",Iacute:\"Stort I med accent aigu\",Icirc:\"Stort I med cirkumfleks\",Iuml:\"Stort I med umlaut\",ETH:\"Stort Ð (edd)\",Ntilde:\"Stort N med tilde\",Ograve:\"Stort O med accent grave\",Oacute:\"Stort O med accent aigu\",Ocirc:\"Stort O med cirkumfleks\",Otilde:\"Stort O med tilde\",
Ouml:\"Stort O med umlaut\",times:\"Gange-tegn\",Oslash:\"Stort Ø\",Ugrave:\"Stort U med accent grave\",Uacute:\"Stort U med accent aigu\",Ucirc:\"Stort U med cirkumfleks\",Uuml:\"Stort U med umlaut\",Yacute:\"Stort Y med accent aigu\",THORN:\"Stort Thorn\",szlig:\"Lille eszett\",agrave:\"Lille a med accent grave\",aacute:\"Lille a med accent aigu\",acirc:\"Lille a med cirkumfleks\",atilde:\"Lille a med tilde\",auml:\"Lille a med umlaut\",aring:\"Lilla å\",aelig:\"Lille æ\",ccedil:\"Lille c med cedille\",egrave:\"Lille e med accent grave\",
eacute:\"Lille e med accent aigu\",ecirc:\"Lille e med cirkumfleks\",euml:\"Lille e med umlaut\",igrave:\"Lille i med accent grave\",iacute:\"Lille i med accent aigu\",icirc:\"Lille i med cirkumfleks\",iuml:\"Lille i med umlaut\",eth:\"Lille ð (edd)\",ntilde:\"Lille n med tilde\",ograve:\"Lille o med accent grave\",oacute:\"Lille o med accent aigu\",ocirc:\"Lille o med cirkumfleks\",otilde:\"Lille o med tilde\",ouml:\"Lille o med umlaut\",divide:\"Divisions-tegn\",oslash:\"Lille ø\",ugrave:\"Lille u med accent grave\",uacute:\"Lille u med accent aigu\",
ucirc:\"Lille u med cirkumfleks\",uuml:\"Lille u med umlaut\",yacute:\"Lille y med accent aigu\",thorn:\"Lille thorn\",yuml:\"Lille y med umlaut\",OElig:\"Stort Æ\",oelig:\"Lille æ\",372:\"Stort W med cirkumfleks\",374:\"Stort Y med cirkumfleks\",373:\"Lille w med cirkumfleks\",375:\"Lille y med cirkumfleks\",sbquo:\"Lavt enkelt 9-komma citationstegn\",8219:\"Højt enkelt 9-komma citationstegn\",bdquo:\"Dobbelt 9-komma citationstegn\",hellip:\"Tre horizontale prikker\",trade:\"Varemærke-tegn\",9658:\"Sort højre pil\",bull:\"Punkt\",
rarr:\"Højre pil\",rArr:\"Højre dobbelt pil\",hArr:\"Venstre højre dobbelt pil\",diams:\"Sort diamant\",asymp:\"Næsten lig med\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/da.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/da.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/da.js");
    }
}
