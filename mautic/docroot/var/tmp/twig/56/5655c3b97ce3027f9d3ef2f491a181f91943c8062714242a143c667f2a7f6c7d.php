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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/sv.js */
class __TwigTemplate_9c2362481d6151a9f29e84bb11f2433a5ca14f5b59ee07709ab61879c33a3c2b extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"sv\",{btnIgnore:\"Ignorera\",btnIgnoreAll:\"Ignorera alla\",btnReplace:\"Ersätt\",btnReplaceAll:\"Ersätt alla\",btnUndo:\"Ångra\",changeTo:\"Ändra till\",errorLoading:\"Tjänsten är ej tillgänglig: %s.\",ieSpellDownload:\"Stavningskontrollen är ej installerad. Vill du göra det nu?\",manyChanges:\"Stavningskontroll slutförd: %1 ord rättades.\",noChanges:\"Stavningskontroll slutförd: Inga ord rättades.\",noMispell:\"Stavningskontroll slutförd: Inga stavfel påträffades.\",noSuggestions:\"- Förslag saknas -\",
notAvailable:\"Tyvärr är tjänsten ej tillgänglig nu\",notInDic:\"Saknas i ordlistan\",oneChange:\"Stavningskontroll slutförd: Ett ord rättades.\",progress:\"Stavningskontroll pågår...\",title:\"Kontrollera stavning\",toolbar:\"Stavningskontroll\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/sv.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/sv.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/sv.js");
    }
}
