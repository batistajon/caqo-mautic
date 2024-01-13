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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/es-mx.js */
class __TwigTemplate_0bc4ba3ed9c34ef621ab58d7820a5ac6c07e9bb8fd17065855de7a02dee4730b extends Template
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
CKEDITOR.plugins.setLang(\"specialchar\",\"es-mx\",{euro:\"Signo de Euro\",lsquo:\"Comillas simple izquierda\",rsquo:\"Comillas simple derecha\",ldquo:\"Comillas dobles izquierda\",rdquo:\"Comillas dobles derecha\",ndash:\"Guión corto\",mdash:\"Guión largo\",iexcl:\"Signo de exclamación invertido\",cent:\"Signo de centavo\",pound:\"Signo de Libra\",curren:\"Signo de moneda\",yen:\"Signo de Yen\",brvbar:\"Barra rota\",sect:\"Signo de la sección\",uml:\"Diéresis\",copy:\"Signo de Derechos reservados\",ordf:\"Indicador ordinal femenino\",
laquo:\"Señal de doble ángulo hacia la izquierda\",not:\"Sin signo\",reg:\"Signo registrado\",macr:\"Macron\",deg:\"signo de grados\",sup2:\"Superíndice dos\",sup3:\"Superíndice tres\",acute:\"Acento agudo\",micro:\"Signo micro\",para:\"Signo pilcrow\",middot:\"Punto medio\",cedil:\"Cedilla\",sup1:\"Superíndice uno\",ordm:\"Indicador ordinal masculino\",raquo:\"Señal de doble ángulo hacia la derecha\",frac14:\"Fracción un cuarto\",frac12:\"Fracción medio\",frac34:\"Fracción tres cuartos\",iquest:\"Signo de interrogación invertido\",Agrave:\"Letra mayúscula latina A con acento grave\",
Aacute:\"Letra mayúscula latina A con acento agudo\",Acirc:\"Letra mayúscula latina A con circunflexo\",Atilde:\"Letra mayúscula latina A con tilde\",Auml:\"Letra mayúscula latina A con diéresis\",Aring:\"Letra mayúscula latina A con anillo arriba\",AElig:\"Letra mayúscula latina Æ\",Ccedil:\"Letra mayúscula latina C con cedilla\",Egrave:\"Letra mayúscula latina E con acento grave\",Eacute:\"Letra mayúscula latina E con acento agudo\",Ecirc:\"Letra mayúscula latina E con circumflex\",Euml:\"Letra mayúscula latina E con diéresis\",
Igrave:\"Letra mayúscula latina I con acento grave\",Iacute:\"Letra mayúscula latina I con acento agudo\",Icirc:\"Letra mayúscula latina I con circumflex\",Iuml:\"Letra mayúscula latina E con diéresis\",ETH:\"Letra mayúscula latina Eth\",Ntilde:\"Letra mayúscula latina N con tilde\",Ograve:\"Letra mayúscula latina O con acento grave\",Oacute:\"Letra mayúscula latina O con acento agudo\",Ocirc:\"Letra mayúscula latina O con circumflex\",Otilde:\"Letra mayúscula latina O con tilde\",Ouml:\"Letra mayúscula latina O con diéresis\",
times:\"Signo de multiplicación\",Oslash:\"Letra mayúscula latina O con trazo\",Ugrave:\"Letra mayúscula latina U con acento grave\",Uacute:\"Letra mayúscula latina U con acento agudo\",Ucirc:\"Letra mayúscula latina U con circumflex\",Uuml:\"Letra mayúscula latina U con diéresis\",Yacute:\"Letra mayúscula latina Y con acento agudo\",THORN:\"Letra mayúscula latina Thorn\",szlig:\"Letra pequeña latina s\",agrave:\"Letra pequeña latina a con acento grave\",aacute:\"Letra pequeña latina a con acento agudo\",acirc:\"Letra pequeña latina a con circumflex\",
atilde:\"Letra pequeña latina a con tilde\",auml:\"Letra pequeña latina a con diéresis\",aring:\"Letra pequeña latina a con anillo arriba\",aelig:\"Letra pequeña latina æ\",ccedil:\"Letra pequeña latina c con cedilla\",egrave:\"Letra pequeña latina e con acento grave\",eacute:\"Letra pequeña latina e con acento agudo\",ecirc:\"Letra pequeña latina e con circumflex\",euml:\"Letra pequeña latina e con diéresis\",igrave:\"Letra pequeña latina i con acento grave\",iacute:\"Letra pequeña latina i con acento agudo\",icirc:\"Letra pequeña latina i con circumflex\",
iuml:\"Letra pequeña latina i con diéresis\",eth:\"Letra pequeña latina eth\",ntilde:\"Letra pequeña latina n con tilde\",ograve:\"Letra pequeña latina o con acento grave\",oacute:\"Letra pequeña latina o con acento agudo\",ocirc:\"Letra pequeña latina o con circumflex\",otilde:\"Letra pequeña latina o con tilde\",ouml:\"Letra pequeña latina o con diéresis\",divide:\"Signo de división\",oslash:\"Letra pequeña latina o con trazo\",ugrave:\"Letra pequeña latina u con acento grave\",uacute:\"Letra pequeña latina u con acento agudo\",
ucirc:\"Letra pequeña latina u con circumflex\",uuml:\"Letra pequeña latina u con diéresis\",yacute:\"Letra pequeña latina y con acento agudo\",thorn:\"Espina de letra pequeña latina\",yuml:\"Letra pequeña latina y con diéresis\",OElig:\"Ligadura de capital latino OE\",oelig:\"Ligadura de pequeña latino OE\",372:\"Letra latina mayúscula W con circunflexo\",374:\"Letra latina mayúscula Y con circunflexo\",373:\"Letra latina minúscula w con circunflexo\",375:\"Letra latina minúscula y con circunflexo\",sbquo:\"Signo de comillas simple abajo\",
8219:\"Signo de comillas simple arriba\",bdquo:\"Signo de doble comillas abajo\",hellip:\"Elipsis horizontal\",trade:\"Signo merccantl\",9658:\"Puntero derecho negro\",bull:\"Bala\",rarr:\"Flecha hacia la derecha\",rArr:\"Doble flecha hacia la derecha\",hArr:\"Flecha doble izquierda derecha\",diams:\"Palo de diamante negro\",asymp:\"Casi igual a\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/es-mx.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/es-mx.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/specialchar/dialogs/lang/es-mx.js");
    }
}
