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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ko.js */
class __TwigTemplate_09c95edb86af2b64df6197c8397a59f100c20121f0332947835ea605fb43c68a extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"ko\",{btnIgnore:\"건너뜀\",btnIgnoreAll:\"모두 건너뜀\",btnReplace:\"변경\",btnReplaceAll:\"모두 변경\",btnUndo:\"취소\",changeTo:\"변경할 단어\",errorLoading:\"Error loading application service host: %s.\",ieSpellDownload:\"철자 검사기가 철치되지 않았습니다. 지금 다운로드하시겠습니까?\",manyChanges:\"철자검사 완료: %1 단어가 변경되었습니다.\",noChanges:\"철자검사 완료: 변경된 단어가 없습니다.\",noMispell:\"철자검사 완료: 잘못된 철자가 없습니다.\",noSuggestions:\"- 추천단어 없음 -\",notAvailable:\"Sorry, but service is unavailable now.\",notInDic:\"사전에 없는 단어\",oneChange:\"철자검사 완료: 단어가 변경되었습니다.\",
progress:\"철자검사를 진행중입니다...\",title:\"Spell Check\",toolbar:\"철자검사\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ko.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ko.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ko.js");
    }
}
