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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/lt.js */
class __TwigTemplate_4e85707e6519aaf8855190eecb610d99c29d04b281fe39dd55cea792943646fb extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"lt\",{btnIgnore:\"Ignoruoti\",btnIgnoreAll:\"Ignoruoti visus\",btnReplace:\"Pakeisti\",btnReplaceAll:\"Pakeisti visus\",btnUndo:\"Atšaukti\",changeTo:\"Pakeisti į\",errorLoading:\"Klaida įkraunant servisą: %s.\",ieSpellDownload:\"Rašybos tikrinimas neinstaliuotas. Ar Jūs norite jį dabar atsisiųsti?\",manyChanges:\"Rašybos tikrinimas baigtas: Pakeista %1 žodžių\",noChanges:\"Rašybos tikrinimas baigtas: Nėra pakeistų žodžių\",noMispell:\"Rašybos tikrinimas baigtas: Nerasta rašybos klaidų\",
noSuggestions:\"- Nėra pasiūlymų -\",notAvailable:\"Atleiskite, šiuo metu servisas neprieinamas.\",notInDic:\"Žodyne nerastas\",oneChange:\"Rašybos tikrinimas baigtas: Vienas žodis pakeistas\",progress:\"Vyksta rašybos tikrinimas...\",title:\"Tikrinti klaidas\",toolbar:\"Rašybos tikrinimas\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/lt.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/lt.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/lt.js");
    }
}
