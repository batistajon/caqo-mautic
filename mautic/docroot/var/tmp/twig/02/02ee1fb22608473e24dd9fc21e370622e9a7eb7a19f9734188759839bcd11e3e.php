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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/sr-latn.js */
class __TwigTemplate_9e79a196fd7e7820325726a5f5e9b2a01e304aaea0e95b3bab25984fed8cc7f4 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"sr-latn\",{btnIgnore:\"Ignoriši\",btnIgnoreAll:\"Ignoriši sve\",btnReplace:\"Zameni\",btnReplaceAll:\"Zameni sve\",btnUndo:\"Vrati akciju\",changeTo:\"Izmeni\",errorLoading:\"Error loading application service host: %s.\",ieSpellDownload:\"Provera spelovanja nije instalirana. Da li želite da je skinete sa Interneta?\",manyChanges:\"Provera spelovanja završena: %1 reč(i) je izmenjeno\",noChanges:\"Provera spelovanja završena: Nije izmenjena nijedna rec\",noMispell:\"Provera spelovanja završena: greške nisu pronadene\",
noSuggestions:\"- Bez sugestija -\",notAvailable:\"Sorry, but service is unavailable now.\",notInDic:\"Nije u rečniku\",oneChange:\"Provera spelovanja završena: Izmenjena je jedna reč\",progress:\"Provera spelovanja u toku...\",title:\"Spell Checker\",toolbar:\"Proveri spelovanje\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/sr-latn.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/sr-latn.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/sr-latn.js");
    }
}
