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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/is.js */
class __TwigTemplate_77ce39bd6c63241821bb4d0dd7b7b6a898d945f25a75caad0a25b432c78af922 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"is\",{btnIgnore:\"Hunsa\",btnIgnoreAll:\"Hunsa allt\",btnReplace:\"Skipta\",btnReplaceAll:\"Skipta öllu\",btnUndo:\"Til baka\",changeTo:\"Tillaga\",errorLoading:\"Error loading application service host: %s.\",ieSpellDownload:\"Villuleit ekki sett upp.\\x3cbr\\x3eViltu setja hana upp?\",manyChanges:\"Villuleit lokið: %1 orðum breytt\",noChanges:\"Villuleit lokið: Engu orði breytt\",noMispell:\"Villuleit lokið: Engin villa fannst\",noSuggestions:\"- engar tillögur -\",notAvailable:\"Sorry, but service is unavailable now.\",
notInDic:\"Ekki í orðabókinni\",oneChange:\"Villuleit lokið: Einu orði breytt\",progress:\"Villuleit í gangi...\",title:\"Spell Checker\",toolbar:\"Villuleit\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/is.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/is.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/is.js");
    }
}
