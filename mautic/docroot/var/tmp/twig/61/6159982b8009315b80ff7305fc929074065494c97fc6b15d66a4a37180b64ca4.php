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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ca.js */
class __TwigTemplate_8d8ad7fb2139fb6d2d5136aa22108d5b4be371c776c58a5d578cc6b61b5dc71c extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"ca\",{btnIgnore:\"Ignora\",btnIgnoreAll:\"Ignora-les totes\",btnReplace:\"Canvia\",btnReplaceAll:\"Canvia-les totes\",btnUndo:\"Desfés\",changeTo:\"Reemplaça amb\",errorLoading:\"Error carregant el servidor: %s.\",ieSpellDownload:\"Verificació ortogràfica no instal·lada. Voleu descarregar-ho ara?\",manyChanges:\"Verificació ortogràfica: s'han canviat %1 paraules\",noChanges:\"Verificació ortogràfica: no s'ha canviat cap paraula\",noMispell:\"Verificació ortogràfica acabada: no hi ha cap paraula mal escrita\",
noSuggestions:\"Cap suggeriment\",notAvailable:\"El servei no es troba disponible ara.\",notInDic:\"No és al diccionari\",oneChange:\"Verificació ortogràfica: s'ha canviat una paraula\",progress:\"Verificació ortogràfica en curs...\",title:\"Comprova l'ortografia\",toolbar:\"Revisa l'ortografia\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ca.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ca.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ca.js");
    }
}
