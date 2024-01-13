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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/pl.js */
class __TwigTemplate_47a420ec1cc41fadbf2bf6942f289eca16ab1869bf1cd65874a7eb912ac7f690 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"pl\",{btnIgnore:\"Ignoruj\",btnIgnoreAll:\"Ignoruj wszystkie\",btnReplace:\"Zmień\",btnReplaceAll:\"Zmień wszystkie\",btnUndo:\"Cofnij\",changeTo:\"Zmień na\",errorLoading:\"Błąd wczytywania hosta aplikacji usługi: %s.\",ieSpellDownload:\"Słownik nie jest zainstalowany. Czy chcesz go pobrać?\",manyChanges:\"Sprawdzanie zakończone: zmieniono %l słów\",noChanges:\"Sprawdzanie zakończone: nie zmieniono żadnego słowa\",noMispell:\"Sprawdzanie zakończone: nie znaleziono błędów\",noSuggestions:\"- Brak sugestii -\",
notAvailable:\"Przepraszamy, ale usługa jest obecnie niedostępna.\",notInDic:\"Słowa nie ma w słowniku\",oneChange:\"Sprawdzanie zakończone: zmieniono jedno słowo\",progress:\"Trwa sprawdzanie...\",title:\"Sprawdź pisownię\",toolbar:\"Sprawdź pisownię\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/pl.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/pl.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/pl.js");
    }
}
