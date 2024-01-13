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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/pt-br.js */
class __TwigTemplate_b3c14d21fa5297f92f2e89289a30c6c1fe86b91345e73508e8a6bd3bee2a614c extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"pt-br\",{btnIgnore:\"Ignorar uma vez\",btnIgnoreAll:\"Ignorar Todas\",btnReplace:\"Alterar\",btnReplaceAll:\"Alterar Todas\",btnUndo:\"Desfazer\",changeTo:\"Alterar para\",errorLoading:\"Erro carregando servidor de aplicação: %s.\",ieSpellDownload:\"A verificação ortográfica não foi instalada. Você gostaria de realizar o download agora?\",manyChanges:\"Verificação ortográfica encerrada: %1 palavras foram alteradas\",noChanges:\"Verificação ortográfica encerrada: Não houve alterações\",
noMispell:\"Verificação encerrada: Não foram encontrados erros de ortografia\",noSuggestions:\"-sem sugestões de ortografia-\",notAvailable:\"Desculpe, o serviço não está disponível no momento.\",notInDic:\"Não encontrada\",oneChange:\"Verificação ortográfica encerrada: Uma palavra foi alterada\",progress:\"Verificação ortográfica em andamento...\",title:\"Corretor Ortográfico\",toolbar:\"Verificar Ortografia\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/pt-br.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/pt-br.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/pt-br.js");
    }
}
