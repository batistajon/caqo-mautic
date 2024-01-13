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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/af.js */
class __TwigTemplate_8213bc6a61dbd02189dec5226589d47c0cc3f0feba25cad4fc62cde384193946 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"af\",{btnIgnore:\"Ignoreer\",btnIgnoreAll:\"Ignoreer alles\",btnReplace:\"Vervang\",btnReplaceAll:\"vervang alles\",btnUndo:\"Ontdoen\",changeTo:\"Verander na\",errorLoading:\"Fout by inlaai van diens: %s.\",ieSpellDownload:\"Speltoetser is nie geïnstalleer nie. Wil u dit nou aflaai?\",manyChanges:\"Klaar met speltoets: %1 woorde verander\",noChanges:\"Klaar met speltoets: Geen woorde verander nie\",noMispell:\"Klaar met speltoets: Geen foute nie\",noSuggestions:\"- Geen voorstel -\",notAvailable:\"Jammer, hierdie diens is nie nou beskikbaar nie.\",
notInDic:\"Nie in woordeboek nie\",oneChange:\"Klaar met speltoets: Een woord verander\",progress:\"Spelling word getoets...\",title:\"Speltoetser\",toolbar:\"Speltoets\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/af.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/af.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/af.js");
    }
}
