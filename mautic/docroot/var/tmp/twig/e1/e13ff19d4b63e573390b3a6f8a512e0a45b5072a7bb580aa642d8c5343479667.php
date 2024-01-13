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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ro.js */
class __TwigTemplate_4baeb053d662c2af14c666e7f98f354d44e6b192b1bdbead98a8684dd6c5baa2 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"ro\",{btnIgnore:\"Ignoră\",btnIgnoreAll:\"Ignoră toate\",btnReplace:\"Înlocuieşte\",btnReplaceAll:\"Înlocuieşte tot\",btnUndo:\"Starea anterioară (undo)\",changeTo:\"Schimbă în\",errorLoading:\"Eroare în lansarea aplicației service host %s.\",ieSpellDownload:\"Unealta pentru verificat textul (Spell checker) neinstalată. Doriţi să o descărcaţi acum?\",manyChanges:\"Verificarea textului terminată: 1% cuvinte modificate\",noChanges:\"Verificarea textului terminată: Niciun cuvânt modificat\",
noMispell:\"Verificarea textului terminată: Nicio greşeală găsită\",noSuggestions:\"- Fără sugestii -\",notAvailable:\"Scuzați, dar serviciul nu este disponibil momentan.\",notInDic:\"Nu e în dicţionar\",oneChange:\"Verificarea textului terminată: Un cuvânt modificat\",progress:\"Verificarea textului în desfăşurare...\",title:\"Spell Checker\",toolbar:\"Verifică scrierea textului\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ro.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ro.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ro.js");
    }
}
