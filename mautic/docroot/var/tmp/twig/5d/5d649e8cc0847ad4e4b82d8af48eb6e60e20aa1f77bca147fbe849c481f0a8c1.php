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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/fr-ca.js */
class __TwigTemplate_67666607ce9b55e551cb1855156e0c5507b0fc933a7e6b9b3f24b022ac4455b3 extends Template
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
CKEDITOR.plugins.setLang(\"specialchar\",\"fr-ca\",{euro:\"Symbole Euro\",lsquo:\"Guillemet simple ouvrant\",rsquo:\"Guillemet simple fermant\",ldquo:\"Guillemet double ouvrant\",rdquo:\"Guillemet double fermant\",ndash:\"Tiret haut\",mdash:\"Tiret\",iexcl:\"Point d'exclamation inversé\",cent:\"Symbole de cent\",pound:\"Symbole de Livre Sterling\",curren:\"Symbole monétaire\",yen:\"Symbole du Yen\",brvbar:\"Barre scindée\",sect:\"Symbole de section\",uml:\"Tréma\",copy:\"Symbole de copyright\",ordf:\"Indicateur ordinal féminin\",laquo:\"Guillemet français ouvrant\",
not:\"Indicateur de négation\",reg:\"Symbole de marque déposée\",macr:\"Macron\",deg:\"Degré\",sup2:\"Exposant 2\",sup3:\"Exposant 3\",acute:\"Accent aigüe\",micro:\"Symbole micro\",para:\"Paragraphe\",middot:\"Point médian\",cedil:\"Cédille\",sup1:\"Exposant 1\",ordm:\"Indicateur ordinal masculin\",raquo:\"Guillemet français fermant\",frac14:\"Un quart\",frac12:\"Une demi\",frac34:\"Trois quart\",iquest:\"Point d'interrogation inversé\",Agrave:\"A accent grave\",Aacute:\"A accent aigüe\",Acirc:\"A circonflexe\",Atilde:\"A tilde\",Auml:\"A tréma\",
Aring:\"A avec un rond au dessus\",AElig:\"Æ majuscule\",Ccedil:\"C cédille\",Egrave:\"E accent grave\",Eacute:\"E accent aigüe\",Ecirc:\"E accent circonflexe\",Euml:\"E tréma\",Igrave:\"I accent grave\",Iacute:\"I accent aigüe\",Icirc:\"I accent circonflexe\",Iuml:\"I tréma\",ETH:\"Lettre majuscule islandaise ED\",Ntilde:\"N tilde\",Ograve:\"O accent grave\",Oacute:\"O accent aigüe\",Ocirc:\"O accent circonflexe\",Otilde:\"O tilde\",Ouml:\"O tréma\",times:\"Symbole de multiplication\",Oslash:\"O barré\",Ugrave:\"U accent grave\",Uacute:\"U accent aigüe\",
Ucirc:\"U accent circonflexe\",Uuml:\"U tréma\",Yacute:\"Y accent aigüe\",THORN:\"Lettre islandaise Thorn majuscule\",szlig:\"Lettre minuscule allemande s dur\",agrave:\"a accent grave\",aacute:\"a accent aigüe\",acirc:\"a accent circonflexe\",atilde:\"a tilde\",auml:\"a tréma\",aring:\"a avec un cercle au dessus\",aelig:\"æ\",ccedil:\"c cédille\",egrave:\"e accent grave\",eacute:\"e accent aigüe\",ecirc:\"e accent circonflexe\",euml:\"e tréma\",igrave:\"i accent grave\",iacute:\"i accent aigüe\",icirc:\"i accent circonflexe\",iuml:\"i tréma\",
eth:\"Lettre minuscule islandaise ED\",ntilde:\"n tilde\",ograve:\"o accent grave\",oacute:\"o accent aigüe\",ocirc:\"O accent circonflexe\",otilde:\"O tilde\",ouml:\"O tréma\",divide:\"Symbole de division\",oslash:\"o barré\",ugrave:\"u accent grave\",uacute:\"u accent aigüe\",ucirc:\"u accent circonflexe\",uuml:\"u tréma\",yacute:\"y accent aigüe\",thorn:\"Lettre islandaise thorn minuscule\",yuml:\"y tréma\",OElig:\"ligature majuscule latine Œ\",oelig:\"ligature minuscule latine œ\",372:\"W accent circonflexe\",374:\"Y accent circonflexe\",
373:\"w accent circonflexe\",375:\"y accent circonflexe\",sbquo:\"Guillemet simple fermant\",8219:\"Guillemet-virgule supérieur culbuté\",bdquo:\"Guillemet-virgule double inférieur\",hellip:\"Points de suspension\",trade:\"Symbole de marque déposée\",9658:\"Flèche noire pointant vers la droite\",bull:\"Puce\",rarr:\"Flèche vers la droite\",rArr:\"Flèche double vers la droite\",hArr:\"Flèche double vers la gauche\",diams:\"Carreau\",asymp:\"Presque égal\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/fr-ca.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/fr-ca.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/fr-ca.js");
    }
}
