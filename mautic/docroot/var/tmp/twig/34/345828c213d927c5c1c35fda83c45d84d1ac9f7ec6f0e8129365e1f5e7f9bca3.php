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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/et.js */
class __TwigTemplate_61380dff594fc9a1396976c9a09382e4c8c6fc997db3e4aff3314dcd13f6bdb2 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"et\",{btnIgnore:\"Ignoreeri\",btnIgnoreAll:\"Ignoreeri kõiki\",btnReplace:\"Asenda\",btnReplaceAll:\"Asenda kõik\",btnUndo:\"Võta tagasi\",changeTo:\"Muuda\",errorLoading:\"Viga rakenduse teenushosti laadimisel: %s.\",ieSpellDownload:\"Õigekirja kontrollija ei ole paigaldatud. Soovid sa selle alla laadida?\",manyChanges:\"Õigekirja kontroll sooritatud: %1 sõna muudetud\",noChanges:\"Õigekirja kontroll sooritatud: ühtegi sõna ei muudetud\",noMispell:\"Õigekirja kontroll sooritatud: õigekirjuvigu ei leitud\",
noSuggestions:\"- Soovitused puuduvad -\",notAvailable:\"Kahjuks ei ole teenus praegu saadaval.\",notInDic:\"Puudub sõnastikust\",oneChange:\"Õigekirja kontroll sooritatud: üks sõna muudeti\",progress:\"Toimub õigekirja kontroll...\",title:\"Õigekirjakontroll\",toolbar:\"Õigekirjakontroll\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/et.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/et.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/et.js");
    }
}
