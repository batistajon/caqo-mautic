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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/hu.js */
class __TwigTemplate_711ac5c98b6de53f73765a36d2f456dcfd12a235de115a5995b8f445ea7d6d42 extends Template
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
CKEDITOR.plugins.setLang(\"specialchar\",\"hu\",{euro:\"Euró jel\",lsquo:\"Bal szimpla idézőjel\",rsquo:\"Jobb szimpla idézőjel\",ldquo:\"Bal dupla idézőjel\",rdquo:\"Jobb dupla idézőjel\",ndash:\"Rövid gondolatjel\",mdash:\"Hosszú gondolatjel\",iexcl:\"Fordított felkiáltójel\",cent:\"Cent jel\",pound:\"Font jel\",curren:\"Valuta jel\",yen:\"Yen jel\",brvbar:\"Hosszú kettőspont\",sect:\"Paragrafus jel\",uml:\"Kettős hangzó jel\",copy:\"Szerzői jog jel\",ordf:\"Női sorrend mutatója\",laquo:\"Balra mutató duplanyíl\",not:\"Feltételes kötőjel\",
reg:\"Bejegyzett védjegy jele\",macr:\"Hosszúsági jel\",deg:\"Fok jel\",sup2:\"Négyzeten jel\",sup3:\"Köbön jel\",acute:\"Éles ékezet\",micro:\"Mikro-jel\",para:\"Bekezdés jel\",middot:\"Közép pont\",cedil:\"Cédille\",sup1:\"Elsőn jel\",ordm:\"Férfi sorrend mutatója\",raquo:\"Jobbra mutató duplanyíl\",frac14:\"Egy negyed jel\",frac12:\"Egy ketted jel\",frac34:\"Három negyed jel\",iquest:\"Fordított kérdőjel\",Agrave:\"Latin nagy A fordított ékezettel\",Aacute:\"Latin nagy A normál ékezettel\",Acirc:\"Latin nagy A hajtott ékezettel\",Atilde:\"Latin nagy A hullámjellel\",
Auml:\"Latin nagy A kettőspont ékezettel\",Aring:\"Latin nagy A gyűrű ékezettel\",AElig:\"Latin nagy Æ betű\",Ccedil:\"Latin nagy C cedillával\",Egrave:\"Latin nagy E fordított ékezettel\",Eacute:\"Latin nagy E normál ékezettel\",Ecirc:\"Latin nagy E hajtott ékezettel\",Euml:\"Latin nagy E dupla kettőspont ékezettel\",Igrave:\"Latin nagy I fordított ékezettel\",Iacute:\"Latin nagy I normál ékezettel\",Icirc:\"Latin nagy I hajtott ékezettel\",Iuml:\"Latin nagy I kettőspont ékezettel\",ETH:\"Latin nagy Eth betű\",Ntilde:\"Latin nagy N hullámjellel\",
Ograve:\"Latin nagy O fordított ékezettel\",Oacute:\"Latin nagy O normál ékezettel\",Ocirc:\"Latin nagy O hajtott ékezettel\",Otilde:\"Latin nagy O hullámjellel\",Ouml:\"Latin nagy O kettőspont ékezettel\",times:\"Szorzás jel\",Oslash:\"Latin O betű áthúzással\",Ugrave:\"Latin nagy U fordított ékezettel\",Uacute:\"Latin nagy U normál ékezettel\",Ucirc:\"Latin nagy U hajtott ékezettel\",Uuml:\"Latin nagy U kettőspont ékezettel\",Yacute:\"Latin nagy Y normál ékezettel\",THORN:\"Latin nagy Thorn betű\",szlig:\"Latin kis s betű\",
agrave:\"Latin kis a fordított ékezettel\",aacute:\"Latin kis a normál ékezettel\",acirc:\"Latin kis a hajtott ékezettel\",atilde:\"Latin kis a hullámjellel\",auml:\"Latin kis a kettőspont ékezettel\",aring:\"Latin kis a gyűrű ékezettel\",aelig:\"Latin kis æ betű\",ccedil:\"Latin kis c cedillával\",egrave:\"Latin kis e fordított ékezettel\",eacute:\"Latin kis e normál ékezettel\",ecirc:\"Latin kis e hajtott ékezettel\",euml:\"Latin kis e dupla kettőspont ékezettel\",igrave:\"Latin kis i fordított ékezettel\",iacute:\"Latin kis i normál ékezettel\",
icirc:\"Latin kis i hajtott ékezettel\",iuml:\"Latin kis i kettőspont ékezettel\",eth:\"Latin kis eth betű\",ntilde:\"Latin kis n hullámjellel\",ograve:\"Latin kis o fordított ékezettel\",oacute:\"Latin kis o normál ékezettel\",ocirc:\"Latin kis o hajtott ékezettel\",otilde:\"Latin kis o hullámjellel\",ouml:\"Latin kis o kettőspont ékezettel\",divide:\"Osztásjel\",oslash:\"Latin kis o betű áthúzással\",ugrave:\"Latin kis u fordított ékezettel\",uacute:\"Latin kis u normál ékezettel\",ucirc:\"Latin kis u hajtott ékezettel\",
uuml:\"Latin kis u kettőspont ékezettel\",yacute:\"Latin kis y normál ékezettel\",thorn:\"Latin kis thorn jel\",yuml:\"Latin kis y kettőspont ékezettel\",OElig:\"Latin nagy OE-jel\",oelig:\"Latin kis oe-jel\",372:\"Latin nagy W hajtott ékezettel\",374:\"Latin nagy Y hajtott ékezettel\",373:\"Latin kis w hajtott ékezettel\",375:\"Latin kis y hajtott ékezettel\",sbquo:\"Nyitó nyomdai szimpla idézőjel\",8219:\"Záró nyomdai záró idézőjel\",bdquo:\"Nyitó nyomdai dupla idézőjel\",hellip:\"Három pont\",trade:\"Kereskedelmi védjegy jele\",
9658:\"Jobbra mutató fekete mutató\",bull:\"Golyó\",rarr:\"Jobbra mutató nyíl\",rArr:\"Jobbra mutató duplanyíl\",hArr:\"Bal-jobb duplanyíl\",diams:\"Fekete gyémánt jel\",asymp:\"Majdnem egyenlő jel\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/hu.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/hu.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/hu.js");
    }
}
