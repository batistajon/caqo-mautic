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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/et.js */
class __TwigTemplate_a5f9b2c1bf25a06c8b209e804da178c6566c7c91f29926ca65cb9e7bf98eb95b extends Template
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
CKEDITOR.plugins.setLang(\"specialchar\",\"et\",{euro:\"Euromärk\",lsquo:\"Alustav ühekordne jutumärk\",rsquo:\"Lõpetav ühekordne jutumärk\",ldquo:\"Alustav kahekordne jutumärk\",rdquo:\"Lõpetav kahekordne jutumärk\",ndash:\"Enn-kriips\",mdash:\"Emm-kriips\",iexcl:\"Pööratud hüüumärk\",cent:\"Sendimärk\",pound:\"Naela märk\",curren:\"Valuutamärk\",yen:\"Jeeni märk\",brvbar:\"Katkestatud kriips\",sect:\"Lõigu märk\",uml:\"Täpid\",copy:\"Autoriõiguse märk\",ordf:\"Naissoost järjestuse märk\",laquo:\"Alustav kahekordne nurk jutumärk\",not:\"Ei-märk\",
reg:\"Kaubamärk registreeritud märk\",macr:\"Pikkusmärk\",deg:\"Kraadimärk\",sup2:\"Ülaindeks kaks\",sup3:\"Ülaindeks kolm\",acute:\"Akuutrõhk\",micro:\"Mikro-märk\",para:\"Lõigumärk\",middot:\"Keskpunkt\",cedil:\"Sedii\",sup1:\"Ülaindeks üks\",ordm:\"Meessoost järjestuse märk\",raquo:\"Lõpetav kahekordne nurk jutumärk\",frac14:\"Lihtmurd veerand\",frac12:\"Lihtmurd pool\",frac34:\"Lihtmurd kolmveerand\",iquest:\"Pööratud küsimärk\",Agrave:\"Ladina suur A graavisega\",Aacute:\"Ladina suur A akuudiga\",Acirc:\"Ladina suur A tsirkumfleksiga\",
Atilde:\"Ladina suur A tildega\",Auml:\"Ladina suur A täppidega\",Aring:\"Ladina suur A ülasõõriga\",AElig:\"Ladina suur AE\",Ccedil:\"Ladina suur E sediiga\",Egrave:\"Ladina suur E graavisega\",Eacute:\"Ladina suur E akuudiga\",Ecirc:\"Ladina suur E tsirkumfleksiga\",Euml:\"Ladina suur E täppidega\",Igrave:\"Ladina suur I graavisega\",Iacute:\"Ladina suur I akuudiga\",Icirc:\"Ladina suur I tsirkumfleksiga\",Iuml:\"Ladina suur I täppidega\",ETH:\"Ladina suur ETH\",Ntilde:\"Ladina suur N tildega\",Ograve:\"Ladina suur O graavisega\",
Oacute:\"Ladina suur O akuudiga\",Ocirc:\"Ladina suur O tsirkumfleksiga\",Otilde:\"Ladina suur O tildega\",Ouml:\"Täppidega ladina suur O\",times:\"Korrutusmärk\",Oslash:\"Ladina suur O kaldkriipsuga\",Ugrave:\"Ladina suur U graavisega\",Uacute:\"Ladina suur U akuudiga\",Ucirc:\"Kandilise katusega suur ladina U\",Uuml:\"Täppidega ladina suur U\",Yacute:\"Ladina suur Y akuudiga\",THORN:\"Ladina suur THORN\",szlig:\"Ladina väike terav s\",agrave:\"Ladina väike a graavisega\",aacute:\"Ladina väike a akuudiga\",acirc:\"Kandilise katusega ladina väike a\",
atilde:\"Tildega ladina väike a\",auml:\"Täppidega ladina väike a\",aring:\"Ladina väike a ülasõõriga\",aelig:\"Ladina väike ae\",ccedil:\"Ladina väike c sediiga\",egrave:\"Ladina väike e graavisega\",eacute:\"Ladina väike e akuudiga\",ecirc:\"Ladina väike e ülasõõriga\",euml:\"Ladina väike e täppidega\",igrave:\"Ladina väike i graavisega\",iacute:\"Ladina väike i akuudiga\",icirc:\"Ladina väike i tsirkumfleksiga\",iuml:\"Ladina väike i täppidega\",eth:\"Ladina väike ETH\",ntilde:\"Ladina väike n tildega\",ograve:\"Ladina väike o graavisega\",
oacute:\"Ladina väike o akuudiga\",ocirc:\"Ladina väike o tsirkumfleksiga\",otilde:\"Ladina väike o tildega\",ouml:\"Ladina väike o täppidega\",divide:\"Jagamismärk\",oslash:\"Ladina väike o läbiva kaldkriipsuga\",ugrave:\"Ladina väike u graavisega\",uacute:\"Ladina väike u akuudiga\",ucirc:\"Ladina väike u tsirkumfleksiga\",uuml:\"Ladina väike u täppidega\",yacute:\"Ladina väike y akuudiga\",thorn:\"Ladina väike THORN\",yuml:\"Ladina väike y täppidega\",OElig:\"Ladina suur ligatuur OE\",oelig:\"Ladina väike ligatuur OE\",372:\"Ladina suur W tsirkumfleksiga\",
374:\"Ladina suur Y tsirkumfleksiga\",373:\"Ladina väike w tsirkumfleksiga\",375:\"Ladina väike y tsirkumfleksiga\",sbquo:\"Ühekordne jutumärk üheksa all\",8219:\"Ühekordne jutumärk kuus üleval\",bdquo:\"Kahekordne jutumärk üheksa all\",hellip:\"Horisontaalne kolmikpunkt\",trade:\"Kaubamärgi märk\",9658:\"Must nool paremale\",bull:\"Kuul\",rarr:\"Nool paremale\",rArr:\"Topeltnool paremale\",hArr:\"Topeltnool vasakule\",diams:\"Must romb\",asymp:\"Ligikaudu võrdne\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/et.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/et.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/et.js");
    }
}
