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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/da.js */
class __TwigTemplate_0961e6daa83dd20cd2e9d6b5982395d02e9920539181a420b898fef705c02fc6 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"da\",{btnIgnore:\"Ignorér\",btnIgnoreAll:\"Ignorér alle\",btnReplace:\"Erstat\",btnReplaceAll:\"Erstat alle\",btnUndo:\"Tilbage\",changeTo:\"Forslag\",errorLoading:\"Fejl ved indlæsning af host: %s.\",ieSpellDownload:\"Stavekontrol ikke installeret. Vil du installere den nu?\",manyChanges:\"Stavekontrol færdig: %1 ord ændret\",noChanges:\"Stavekontrol færdig: Ingen ord ændret\",noMispell:\"Stavekontrol færdig: Ingen fejl fundet\",noSuggestions:\"(ingen forslag)\",notAvailable:\"Stavekontrol er desværre ikke tilgængelig.\",
notInDic:\"Ikke i ordbogen\",oneChange:\"Stavekontrol færdig: Et ord ændret\",progress:\"Stavekontrollen arbejder...\",title:\"Stavekontrol\",toolbar:\"Stavekontrol\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/da.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/da.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/da.js");
    }
}
