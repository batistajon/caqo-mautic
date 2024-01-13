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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/pt.js */
class __TwigTemplate_e413b3bcbe8645571da6579c4e6e648ce6e6682cf35620e4df2007adc59f58ed extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"pt\",{btnIgnore:\"Ignorar\",btnIgnoreAll:\"Ignorar Tudo\",btnReplace:\"Substituir\",btnReplaceAll:\"Substituir Tudo\",btnUndo:\"Anular\",changeTo:\"Mudar para\",errorLoading:\"Error loading application service host: %s.\",ieSpellDownload:\" Verificação ortográfica não instalada. Quer descarregar agora?\",manyChanges:\"Verificação ortográfica completa: %1 palavras alteradas\",noChanges:\"Verificação ortográfica completa: não houve alteração de palavras\",noMispell:\"Verificação ortográfica completa: não foram encontrados erros\",
noSuggestions:\"- Sem sugestões -\",notAvailable:\"Sorry, but service is unavailable now.\",notInDic:\"Não está num directório\",oneChange:\"Verificação ortográfica completa: uma palavra alterada\",progress:\"Verificação ortográfica em progresso…\",title:\"Spell Checker\",toolbar:\"Verificação Ortográfica\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/pt.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/pt.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/pt.js");
    }
}
