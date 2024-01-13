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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/de.js */
class __TwigTemplate_3bd4105e32e7122d8a861c55665b5888c7b382abcab68a7ab49db3f53d71ac2a extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"de\",{btnIgnore:\"Ignorieren\",btnIgnoreAll:\"Alle Ignorieren\",btnReplace:\"Ersetzen\",btnReplaceAll:\"Alle Ersetzen\",btnUndo:\"Rückgängig\",changeTo:\"Ändern in\",errorLoading:\"Fehler beim laden des Dienstanbieters: %s.\",ieSpellDownload:\"Rechtschreibprüfung nicht installiert. Möchten Sie sie jetzt herunterladen?\",manyChanges:\"Rechtschreibprüfung abgeschlossen - %1 Wörter geändert\",noChanges:\"Rechtschreibprüfung abgeschlossen - keine Worte geändert\",noMispell:\"Rechtschreibprüfung abgeschlossen - keine Fehler gefunden\",
noSuggestions:\" - keine Vorschläge - \",notAvailable:\"Entschuldigung, aber dieser Dienst steht im Moment nicht zur Verfügung.\",notInDic:\"Nicht im Wörterbuch\",oneChange:\"Rechtschreibprüfung abgeschlossen - ein Wort geändert\",progress:\"Rechtschreibprüfung läuft...\",title:\"Rechtschreibprüfung\",toolbar:\"Rechtschreibprüfung\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/de.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/de.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/de.js");
    }
}
