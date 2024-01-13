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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/hr.js */
class __TwigTemplate_c9d99e3022c658566bea662c591156da3b2de36a189502778bf81a8a6b90289d extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"hr\",{btnIgnore:\"Zanemari\",btnIgnoreAll:\"Zanemari sve\",btnReplace:\"Zamijeni\",btnReplaceAll:\"Zamijeni sve\",btnUndo:\"Vrati\",changeTo:\"Promijeni u\",errorLoading:\"Greška učitavanja aplikacije: %s.\",ieSpellDownload:\"Provjera pravopisa nije instalirana. Želite li skinuti provjeru pravopisa?\",manyChanges:\"Provjera završena: Promijenjeno %1 riječi\",noChanges:\"Provjera završena: Nije napravljena promjena\",noMispell:\"Provjera završena: Nema grešaka\",noSuggestions:\"-Nema preporuke-\",
notAvailable:\"Žao nam je, ali usluga trenutno nije dostupna.\",notInDic:\"Nije u rječniku\",oneChange:\"Provjera završena: Jedna riječ promjenjena\",progress:\"Provjera u tijeku...\",title:\"Provjera pravopisa\",toolbar:\"Provjeri pravopis\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/hr.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/hr.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/hr.js");
    }
}
