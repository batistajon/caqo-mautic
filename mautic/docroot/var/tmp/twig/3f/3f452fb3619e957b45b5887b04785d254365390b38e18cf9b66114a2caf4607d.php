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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/hu.js */
class __TwigTemplate_5d39f0ac17b1e1d748baf219dc1433d1b6d17434258988eab2faa76caaccc052 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"hu\",{btnIgnore:\"Kihagyja\",btnIgnoreAll:\"Mindet kihagyja\",btnReplace:\"Csere\",btnReplaceAll:\"Összes cseréje\",btnUndo:\"Visszavonás\",changeTo:\"Módosítás\",errorLoading:\"Hiba a szolgáltatás host betöltése közben: %s.\",ieSpellDownload:\"A helyesírás-ellenőrző nincs telepítve. Szeretné letölteni most?\",manyChanges:\"Helyesírás-ellenőrzés kész: %1 szó cserélve\",noChanges:\"Helyesírás-ellenőrzés kész: Nincs változtatott szó\",noMispell:\"Helyesírás-ellenőrzés kész: Nem találtam hibát\",
noSuggestions:\"Nincs javaslat\",notAvailable:\"Sajnálom, de a szolgáltatás jelenleg nem elérhető.\",notInDic:\"Nincs a szótárban\",oneChange:\"Helyesírás-ellenőrzés kész: Egy szó cserélve\",progress:\"Helyesírás-ellenőrzés folyamatban...\",title:\"Helyesírás ellenörző\",toolbar:\"Helyesírás-ellenőrzés\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/hu.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/hu.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/hu.js");
    }
}
