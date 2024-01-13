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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/sk.js */
class __TwigTemplate_1c8fbeb80c52fcf79f18494853f5c438c210925eeaf33e8be8b598f2a1c48ed9 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"sk\",{btnIgnore:\"Ignorovať\",btnIgnoreAll:\"Ignorovať všetko\",btnReplace:\"Prepísat\",btnReplaceAll:\"Prepísat všetko\",btnUndo:\"Späť\",changeTo:\"Zmeniť na\",errorLoading:\"Chyba pri načítaní slovníka z adresy: %s.\",ieSpellDownload:\"Kontrola pravopisu nie je naištalovaná. Chcete ju teraz stiahnuť?\",manyChanges:\"Kontrola pravopisu dokončená: Bolo zmenených %1 slov\",noChanges:\"Kontrola pravopisu dokončená: Neboli zmenené žiadne slová\",noMispell:\"Kontrola pravopisu dokončená: Neboli nájdené žiadne chyby pravopisu\",
noSuggestions:\"- Žiadny návrh -\",notAvailable:\"Prepáčte, ale služba je momentálne nedostupná.\",notInDic:\"Nie je v slovníku\",oneChange:\"Kontrola pravopisu dokončená: Bolo zmenené jedno slovo\",progress:\"Prebieha kontrola pravopisu...\",title:\"Skontrolovať pravopis\",toolbar:\"Kontrola pravopisu\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/sk.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/sk.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/sk.js");
    }
}
