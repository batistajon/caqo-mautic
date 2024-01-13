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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/uk.js */
class __TwigTemplate_6bd4498ebe1388f9146dd0cc04c427387315b1faa083a0813d127c2e639c99eb extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"uk\",{btnIgnore:\"Пропустити\",btnIgnoreAll:\"Пропустити все\",btnReplace:\"Замінити\",btnReplaceAll:\"Замінити все\",btnUndo:\"Назад\",changeTo:\"Замінити на\",errorLoading:\"Помилка завантаження : %s.\",ieSpellDownload:\"Модуль перевірки орфографії не встановлено. Бажаєте завантажити його зараз?\",manyChanges:\"Перевірку орфографії завершено: 1% слів(ова) змінено\",noChanges:\"Перевірку орфографії завершено: жодне слово не змінено\",noMispell:\"Перевірку орфографії завершено: помилок не знайдено\",
noSuggestions:\"- немає варіантів -\",notAvailable:\"Вибачте, але сервіс наразі недоступний.\",notInDic:\"Немає в словнику\",oneChange:\"Перевірку орфографії завершено: змінено одне слово\",progress:\"Виконується перевірка орфографії...\",title:\"Перевірка орфографії\",toolbar:\"Перевірити орфографію\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/uk.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/uk.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/uk.js");
    }
}
