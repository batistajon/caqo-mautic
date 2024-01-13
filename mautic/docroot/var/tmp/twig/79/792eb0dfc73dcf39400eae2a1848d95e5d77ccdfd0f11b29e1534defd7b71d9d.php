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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/sr.js */
class __TwigTemplate_7c56c5980be04e510fab33da52516b5b09ebc0f491f18ffb55e8a0fca5bfcf07 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"sr\",{btnIgnore:\"Игнориши\",btnIgnoreAll:\"Игнориши све\",btnReplace:\"Замени\",btnReplaceAll:\"Замени све\",btnUndo:\"Врати акцију\",changeTo:\"Измени\",errorLoading:\"Error loading application service host: %s.\",ieSpellDownload:\"Провера спеловања није инсталирана. Да ли желите да је скинете са Интернета?\",manyChanges:\"Провера спеловања завршена:  %1 реч(и) је измењено\",noChanges:\"Провера спеловања завршена: Није измењена ниједна реч\",noMispell:\"Провера спеловања завршена: грешке нису пронађене\",
noSuggestions:\"- Без сугестија -\",notAvailable:\"Sorry, but service is unavailable now.\",notInDic:\"Није у речнику\",oneChange:\"Провера спеловања завршена: Измењена је једна реч\",progress:\"Провера спеловања у току...\",title:\"Spell Checker\",toolbar:\"Провери спеловање\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/sr.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/sr.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/sr.js");
    }
}
