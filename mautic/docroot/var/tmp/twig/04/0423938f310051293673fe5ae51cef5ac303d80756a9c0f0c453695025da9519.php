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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/en-gb.js */
class __TwigTemplate_cd1aef5b748f4c28c382ac8ef0804fe42945ae6e630c1d4722e06acf9338261c extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"en-gb\",{btnIgnore:\"Ignore\",btnIgnoreAll:\"Ignore All\",btnReplace:\"Replace\",btnReplaceAll:\"Replace All\",btnUndo:\"Undo\",changeTo:\"Change to\",errorLoading:\"Error loading application service host: %s.\",ieSpellDownload:\"Spell checker not installed. Do you want to download it now?\",manyChanges:\"Spell check complete: %1 words changed\",noChanges:\"Spell check complete: No words changed\",noMispell:\"Spell check complete: No misspellings found\",noSuggestions:\"- No suggestions -\",
notAvailable:\"Sorry, but service is unavailable now.\",notInDic:\"Not in dictionary\",oneChange:\"Spell check complete: One word changed\",progress:\"Spell check in progress...\",title:\"Spell Checker\",toolbar:\"Check Spelling\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/en-gb.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/en-gb.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/en-gb.js");
    }
}
