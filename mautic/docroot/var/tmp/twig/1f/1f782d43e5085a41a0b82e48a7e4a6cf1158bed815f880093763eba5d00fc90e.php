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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/nl.js */
class __TwigTemplate_e6dee081d72553b0690f92bee761427e81fa217863d4d170ab1f31b802126fd2 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"nl\",{btnIgnore:\"Negeren\",btnIgnoreAll:\"Alles negeren\",btnReplace:\"Vervangen\",btnReplaceAll:\"Alles vervangen\",btnUndo:\"Ongedaan maken\",changeTo:\"Wijzig in\",errorLoading:\"Er is een fout opgetreden bij het laden van de dienst: %s.\",ieSpellDownload:\"De spellingscontrole is niet geïnstalleerd. Wilt u deze nu downloaden?\",manyChanges:\"Klaar met spellingscontrole: %1 woorden aangepast\",noChanges:\"Klaar met spellingscontrole: geen woorden aangepast\",noMispell:\"Klaar met spellingscontrole: geen fouten gevonden\",
noSuggestions:\"- Geen suggesties -\",notAvailable:\"Excuses, deze dienst is momenteel niet beschikbaar.\",notInDic:\"Niet in het woordenboek\",oneChange:\"Klaar met spellingscontrole: één woord aangepast\",progress:\"Bezig met spellingscontrole...\",title:\"Spellingscontrole\",toolbar:\"Spellingscontrole\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/nl.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/nl.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/nl.js");
    }
}
