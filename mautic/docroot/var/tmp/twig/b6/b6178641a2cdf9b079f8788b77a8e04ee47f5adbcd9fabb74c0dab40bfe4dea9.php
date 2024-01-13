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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/gl.js */
class __TwigTemplate_98ee7857bbbb8ab5fa8ebddea843ec0d1518085b728ae5ab2f4a829d6e1bfcc2 extends Template
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
CKEDITOR.plugins.setLang(\"specialchar\",\"gl\",{euro:\"Símbolo do euro\",lsquo:\"Comiña simple esquerda\",rsquo:\"Comiña simple dereita\",ldquo:\"Comiñas dobres esquerda\",rdquo:\"Comiñas dobres dereita\",ndash:\"Guión\",mdash:\"Raia\",iexcl:\"Signo de admiración invertido\",cent:\"Símbolo do centavo\",pound:\"Símbolo da libra\",curren:\"Símbolo de moeda\",yen:\"Símbolo do yen\",brvbar:\"Barra vertical rota\",sect:\"Símbolo de sección\",uml:\"Diérese\",copy:\"Símbolo de dereitos de autoría\",ordf:\"Indicador ordinal feminino\",laquo:\"Comiñas latinas, apertura\",
not:\"Signo negación\",reg:\"Símbolo de marca rexistrada\",macr:\"Guión alto\",deg:\"Signo de grao\",sup2:\"Superíndice dous\",sup3:\"Superíndice tres\",acute:\"Acento agudo\",micro:\"Signo de micro\",para:\"Signo de pi\",middot:\"Punto medio\",cedil:\"Cedilla\",sup1:\"Superíndice un\",ordm:\"Indicador ordinal masculino\",raquo:\"Comiñas latinas, peche\",frac14:\"Fracción ordinaria de un cuarto\",frac12:\"Fracción ordinaria de un medio\",frac34:\"Fracción ordinaria de tres cuartos\",iquest:\"Signo de interrogación invertido\",Agrave:\"Letra A latina maiúscula con acento grave\",
Aacute:\"Letra A latina maiúscula con acento agudo\",Acirc:\"Letra A latina maiúscula con acento circunflexo\",Atilde:\"Letra A latina maiúscula con til\",Auml:\"Letra A latina maiúscula con diérese\",Aring:\"Letra A latina maiúscula con aro enriba\",AElig:\"Letra Æ latina maiúscula\",Ccedil:\"Letra C latina maiúscula con cedilla\",Egrave:\"Letra E latina maiúscula con acento grave\",Eacute:\"Letra E latina maiúscula con acento agudo\",Ecirc:\"Letra E latina maiúscula con acento circunflexo\",Euml:\"Letra E latina maiúscula con diérese\",
Igrave:\"Letra I latina maiúscula con acento grave\",Iacute:\"Letra I latina maiúscula con acento agudo\",Icirc:\"Letra I latina maiúscula con acento circunflexo\",Iuml:\"Letra I latina maiúscula con diérese\",ETH:\"Letra Ed latina maiúscula\",Ntilde:\"Letra N latina maiúscula con til\",Ograve:\"Letra O latina maiúscula con acento grave\",Oacute:\"Letra O latina maiúscula con acento agudo\",Ocirc:\"Letra O latina maiúscula con acento circunflexo\",Otilde:\"Letra O latina maiúscula con til\",Ouml:\"Letra O latina maiúscula con diérese\",
times:\"Signo de multiplicación\",Oslash:\"Letra O latina maiúscula con barra transversal\",Ugrave:\"Letra U latina maiúscula con acento grave\",Uacute:\"Letra U latina maiúscula con acento agudo\",Ucirc:\"Letra U latina maiúscula con acento circunflexo\",Uuml:\"Letra U latina maiúscula con diérese\",Yacute:\"Letra Y latina maiúscula con acento agudo\",THORN:\"Letra Thorn latina maiúscula\",szlig:\"Letra s latina forte minúscula\",agrave:\"Letra a latina minúscula con acento grave\",aacute:\"Letra a latina minúscula con acento agudo\",
acirc:\"Letra a latina minúscula con acento circunflexo\",atilde:\"Letra a latina minúscula con til\",auml:\"Letra a latina minúscula con diérese\",aring:\"Letra a latina minúscula con aro enriba\",aelig:\"Letra æ latina minúscula\",ccedil:\"Letra c latina minúscula con cedilla\",egrave:\"Letra e latina minúscula con acento grave\",eacute:\"Letra e latina minúscula con acento agudo\",ecirc:\"Letra e latina minúscula con acento circunflexo\",euml:\"Letra e latina minúscula con diérese\",igrave:\"Letra i latina minúscula con acento grave\",
iacute:\"Letra i latina minúscula con acento agudo\",icirc:\"Letra i latina minúscula con acento circunflexo\",iuml:\"Letra i latina minúscula con diérese\",eth:\"Letra ed latina minúscula\",ntilde:\"Letra n latina minúscula con til\",ograve:\"Letra o latina minúscula con acento grave\",oacute:\"Letra o latina minúscula con acento agudo\",ocirc:\"Letra o latina minúscula con acento circunflexo\",otilde:\"Letra o latina minúscula con til\",ouml:\"Letra o latina minúscula con diérese\",divide:\"Signo de división\",oslash:\"Letra o latina minúscula con barra transversal\",
ugrave:\"Letra u latina minúscula con acento grave\",uacute:\"Letra u latina minúscula con acento agudo\",ucirc:\"Letra u latina minúscula con acento circunflexo\",uuml:\"Letra u latina minúscula con diérese\",yacute:\"Letra y latina minúscula con acento agudo\",thorn:\"Letra Thorn latina minúscula\",yuml:\"Letra y latina minúscula con diérese\",OElig:\"Ligadura OE latina maiúscula\",oelig:\"Ligadura oe latina minúscula\",372:\"Letra W latina maiúscula con acento circunflexo\",374:\"Letra Y latina maiúscula con acento circunflexo\",
373:\"Letra w latina minúscula con acento circunflexo\",375:\"Letra y latina minúscula con acento circunflexo\",sbquo:\"Comiña simple baixa, de apertura\",8219:\"Comiña simple alta, de peche\",bdquo:\"Comiñas dobres baixas, de apertura\",hellip:\"Elipse, puntos suspensivos\",trade:\"Signo de marca rexistrada\",9658:\"Apuntador negro apuntando á dereita\",bull:\"Viñeta\",rarr:\"Frecha á dereita\",rArr:\"Frecha dobre á dereita\",hArr:\"Frecha dobre da esquerda á dereita\",diams:\"Diamante negro\",asymp:\"Case igual a\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/gl.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/gl.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/gl.js");
    }
}
