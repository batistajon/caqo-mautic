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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ru.js */
class __TwigTemplate_14663b61d55ceed442720766cafd2cc0d950819a0db8e587bad1f0e5f02886f4 extends Template
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
        echo "﻿/*
Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
*/
CKEDITOR.plugins.setLang( 'colorbutton', 'ru', {
\tauto: 'Автоматически',
\tbgColorTitle: 'Цвет фона',
\tcolors: {
\t\t'000': 'Чёрный',
\t\t'800000': 'Бордовый',
\t\t'8B4513': 'Кожано-коричневый',
\t\t'2F4F4F': 'Темный синевато-серый',
\t\t'008080': 'Сине-зелёный',
\t\t'000080': 'Тёмно-синий',
\t\t'4B0082': 'Индиго',
\t\t'696969': 'Тёмно-серый',
\t\tB22222: 'Кирпичный',
\t\tA52A2A: 'Коричневый',
\t\tDAA520: 'Золотисто-берёзовый',
\t\t'006400': 'Темно-зелёный',
\t\t'40E0D0': 'Бирюзовый',
\t\t'0000CD': 'Умеренно синий',
\t\t'800080': 'Пурпурный',
\t\t'808080': 'Серый',
\t\tF00: 'Красный',
\t\tFF8C00: 'Темно-оранжевый',
\t\tFFD700: 'Золотистый',
\t\t'008000': 'Зелёный',
\t\t'0FF': 'Васильковый',
\t\t'00F': 'Синий',
\t\tEE82EE: 'Фиолетовый',
\t\tA9A9A9: 'Тускло-серый',
\t\tFFA07A: 'Светло-лососевый',
\t\tFFA500: 'Оранжевый',
\t\tFFFF00: 'Жёлтый',
\t\t'00FF00': 'Лайма',
\t\tAFEEEE: 'Бледно-синий',
\t\tADD8E6: 'Свелто-голубой',
\t\tDDA0DD: 'Сливовый',
\t\tD3D3D3: 'Светло-серый',
\t\tFFF0F5: 'Розово-лавандовый',
\t\tFAEBD7: 'Античный белый',
\t\tFFFFE0: 'Светло-жёлтый',
\t\tF0FFF0: 'Медвяной росы',
\t\tF0FFFF: 'Лазурный',
\t\tF0F8FF: 'Бледно-голубой',
\t\tE6E6FA: 'Лавандовый',
\t\tFFF: 'Белый',
\t\t'1ABC9C': 'Насыщенный голубой',
\t\t'2ECC71': 'Изумрудный',
\t\t'3498DB': 'Светло-синий',
\t\t'9B59B6': 'Аметист',
\t\t'4E5F70': 'Сине-серый',
\t\t'F1C40F': 'Ярко-желтый',
\t\t'16A085': 'Тёмно-голубой',
\t\t'27AE60': 'Тёмно-изумрудный',
\t\t'2980B9': 'Насыщенный синий',
\t\t'8E44AD': 'Тёмно-фиолетовый',
\t\t'2C3E50': 'Ненасыщенный синий',
\t\t'F39C12': 'Оранжевый',
\t\t'E67E22': 'Морковный',
\t\t'E74C3C': 'Бледно-красный',
\t\t'ECF0F1': 'Яркий серебристый',
\t\t'95A5A6': 'Светлый серо-голубой',
\t\t'DDD': 'Светло-серый',
\t\t'D35400': 'Цвет тыквы',
\t\t'C0392B': 'Насыщенный красный',
\t\t'BDC3C7': 'Серебристый',
\t\t'7F8C8D': 'Серо-голубой',
\t\t'999': 'Тёмно-серый'
\t},
\tmore: 'Ещё цвета...',
\tpanelTitle: 'Цвета',
\ttextColorTitle: 'Цвет текста'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ru.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ru.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ru.js");
    }
}
