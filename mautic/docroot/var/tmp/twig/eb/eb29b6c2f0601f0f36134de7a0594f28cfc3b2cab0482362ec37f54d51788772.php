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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/cs.js */
class __TwigTemplate_6522884a901b0d24be029f7dc05ac95faa4c8a7af2fdb01ba6b44c4da68b8410 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"cs\",{btnIgnore:\"Přeskočit\",btnIgnoreAll:\"Přeskakovat vše\",btnReplace:\"Zaměnit\",btnReplaceAll:\"Zaměňovat vše\",btnUndo:\"Zpět\",changeTo:\"Změnit na\",errorLoading:\"Chyba nahrávání služby aplikace z: %s.\",ieSpellDownload:\"Kontrola pravopisu není nainstalována. Chcete ji nyní stáhnout?\",manyChanges:\"Kontrola pravopisu dokončena: %1 slov změněno\",noChanges:\"Kontrola pravopisu dokončena: Beze změn\",noMispell:\"Kontrola pravopisu dokončena: Žádné pravopisné chyby nenalezeny\",
noSuggestions:\"- žádné návrhy -\",notAvailable:\"Omlouváme se, ale služba nyní není dostupná.\",notInDic:\"Není ve slovníku\",oneChange:\"Kontrola pravopisu dokončena: Jedno slovo změněno\",progress:\"Probíhá kontrola pravopisu...\",title:\"Kontrola pravopisu\",toolbar:\"Zkontrolovat pravopis\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/cs.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/cs.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/cs.js");
    }
}
