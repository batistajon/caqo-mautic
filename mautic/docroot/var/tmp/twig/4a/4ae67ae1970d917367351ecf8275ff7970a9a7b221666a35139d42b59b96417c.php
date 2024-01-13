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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/sl.js */
class __TwigTemplate_3ce363e6b8eb69d3592ab8c691352fbcb487ddbd3956720d000bf36996179a4e extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"sl\",{btnIgnore:\"Prezri\",btnIgnoreAll:\"Prezri vse\",btnReplace:\"Zamenjaj\",btnReplaceAll:\"Zamenjaj vse\",btnUndo:\"Razveljavi\",changeTo:\"Spremeni v\",errorLoading:\"Napaka pri nalaganju storitve programa na naslovu %s.\",ieSpellDownload:\"Črkovalnik ni nameščen. Ali ga želite prenesti sedaj?\",manyChanges:\"Črkovanje je končano: Spremenjenih je bilo %1 besed\",noChanges:\"Črkovanje je končano: Nobena beseda ni bila spremenjena\",noMispell:\"Črkovanje je končano: Brez napak\",noSuggestions:\"- Ni predlogov -\",
notAvailable:\"Oprostite, storitev trenutno ni dosegljiva.\",notInDic:\"Ni v slovarju\",oneChange:\"Črkovanje je končano: Spremenjena je bila ena beseda\",progress:\"Preverjanje črkovanja se izvaja...\",title:\"Črkovalnik\",toolbar:\"Preveri črkovanje\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/sl.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/sl.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/sl.js");
    }
}
