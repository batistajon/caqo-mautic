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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/gl.js */
class __TwigTemplate_a899004bcff1f4d23494a74d7694a58e42872cb466ee8b24a2afcc2e73679e1f extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"gl\",{btnIgnore:\"Ignorar\",btnIgnoreAll:\"Ignorar Todas\",btnReplace:\"Substituir\",btnReplaceAll:\"Substituir Todas\",btnUndo:\"Desfacer\",changeTo:\"Cambiar a\",errorLoading:\"Error loading application service host: %s.\",ieSpellDownload:\"O corrector ortográfico non está instalado. ¿Quere descargalo agora?\",manyChanges:\"Corrección ortográfica rematada: %1 verbas substituidas\",noChanges:\"Corrección ortográfica rematada: Non se substituiu nengunha verba\",noMispell:\"Corrección ortográfica rematada: Non se atoparon erros\",
noSuggestions:\"- Sen candidatos -\",notAvailable:\"Sorry, but service is unavailable now.\",notInDic:\"Non está no diccionario\",oneChange:\"Corrección ortográfica rematada: Unha verba substituida\",progress:\"Corrección ortográfica en progreso...\",title:\"Spell Checker\",toolbar:\"Corrección Ortográfica\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/gl.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/gl.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/gl.js");
    }
}
