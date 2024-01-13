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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/bg.js */
class __TwigTemplate_6dff394f8287ca2e95893e3425b3cd835510599b891abc05df8618c08e1388eb extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"bg\",{btnIgnore:\"Игнорирай\",btnIgnoreAll:\"Игнорирай всичко\",btnReplace:\"Препокриване\",btnReplaceAll:\"Препокрий всичко\",btnUndo:\"Възтанови\",changeTo:\"Промени на\",errorLoading:\"Error loading application service host: %s.\",ieSpellDownload:\"Spell checker not installed. Do you want to download it now?\",manyChanges:\"Spell check complete: %1 words changed\",noChanges:\"Spell check complete: No words changed\",noMispell:\"Spell check complete: No misspellings found\",noSuggestions:\"- Няма препоръчани -\",
notAvailable:\"Съжаляваме, но услугата не е достъпна за момента\",notInDic:\"Не е в речника\",oneChange:\"Spell check complete: One word changed\",progress:\"Проверява се правописа...\",title:\"Проверка на правопис\",toolbar:\"Проверка на правопис\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/bg.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/bg.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/bg.js");
    }
}
