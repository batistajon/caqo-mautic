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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ru.js */
class __TwigTemplate_fb4a0db0927009912e1097d8a967deed26680af1ded485f85cd5636eff1c5fae extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"ru\",{btnIgnore:\"Пропустить\",btnIgnoreAll:\"Пропустить всё\",btnReplace:\"Заменить\",btnReplaceAll:\"Заменить всё\",btnUndo:\"Отменить\",changeTo:\"Изменить на\",errorLoading:\"Произошла ошибка при подключении к серверу проверки орфографии: %s.\",ieSpellDownload:\"Модуль проверки орфографии не установлен. Хотите скачать его?\",manyChanges:\"Проверка орфографии завершена. Изменено слов: %1\",noChanges:\"Проверка орфографии завершена. Не изменено ни одного слова\",noMispell:\"Проверка орфографии завершена. Ошибок не найдено\",
noSuggestions:\"- Варианты отсутствуют -\",notAvailable:\"Извините, но в данный момент сервис недоступен.\",notInDic:\"Отсутствует в словаре\",oneChange:\"Проверка орфографии завершена. Изменено одно слово\",progress:\"Орфография проверяется...\",title:\"Проверка орфографии\",toolbar:\"Проверить орфографию\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ru.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ru.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ru.js");
    }
}
