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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/it.js */
class __TwigTemplate_4c06a87e55deee4c3670e9dab72a9305d2b916e5935bd86ae5b3eadeaa645f37 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"it\",{btnIgnore:\"Ignora\",btnIgnoreAll:\"Ignora tutto\",btnReplace:\"Cambia\",btnReplaceAll:\"Cambia tutto\",btnUndo:\"Annulla\",changeTo:\"Cambia in\",errorLoading:\"Errore nel caricamento dell'host col servizio applicativo: %s.\",ieSpellDownload:\"Contollo ortografico non installato. Lo vuoi scaricare ora?\",manyChanges:\"Controllo ortografico completato: %1 parole cambiate\",noChanges:\"Controllo ortografico completato: nessuna parola cambiata\",noMispell:\"Controllo ortografico completato: nessun errore trovato\",
noSuggestions:\"- Nessun suggerimento -\",notAvailable:\"Il servizio non è momentaneamente disponibile.\",notInDic:\"Non nel dizionario\",oneChange:\"Controllo ortografico completato: 1 parola cambiata\",progress:\"Controllo ortografico in corso\",title:\"Controllo ortografico\",toolbar:\"Correttore ortografico\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/it.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/it.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/it.js");
    }
}
