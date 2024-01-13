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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/no.js */
class __TwigTemplate_04ace7a552a5a058f7a89c7a3608b48fa1d3b8ed84f05bde304226b31d84cc9c extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"no\",{btnIgnore:\"Ignorer\",btnIgnoreAll:\"Ignorer alle\",btnReplace:\"Erstatt\",btnReplaceAll:\"Erstatt alle\",btnUndo:\"Angre\",changeTo:\"Endre til\",errorLoading:\"Feil under lasting av applikasjonstjenestetjener: %s.\",ieSpellDownload:\"Stavekontroll er ikke installert. Vil du laste den ned nå?\",manyChanges:\"Stavekontroll fullført: %1 ord endret\",noChanges:\"Stavekontroll fullført: ingen ord endret\",noMispell:\"Stavekontroll fullført: ingen feilstavinger funnet\",noSuggestions:\"- Ingen forslag -\",
notAvailable:\"Beklager, tjenesten er utilgjenglig nå.\",notInDic:\"Ikke i ordboken\",oneChange:\"Stavekontroll fullført: Ett ord endret\",progress:\"Stavekontroll pågår...\",title:\"Stavekontroll\",toolbar:\"Stavekontroll\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/no.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/no.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/no.js");
    }
}
