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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/bg.js */
class __TwigTemplate_324b2ed950562d70b823743bb785bc50617fd7bee3911ac8b5c15c8db1c9ecad extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'bg', {
\tauto: 'Автоматично',
\tbgColorTitle: 'Фонов цвят',
\tcolors: {
\t\t'000': 'Черно',
\t\t'800000': 'Кестеняво',
\t\t'8B4513': 'Светлокафяво',
\t\t'2F4F4F': 'Тъмно плочесто сиво',
\t\t'008080': 'Сиво птиче',
\t\t'000080': 'Морско синьо',
\t\t'4B0082': 'Индиго',
\t\t'696969': 'Тъмно сиво',
\t\tB22222: 'Огнено червено',
\t\tA52A2A: 'Кафяво',
\t\tDAA520: 'Златисто',
\t\t'006400': 'Тъмно зелено',
\t\t'40E0D0': 'Тюркуазено',
\t\t'0000CD': 'Средно синьо',
\t\t'800080': 'Пурпурно',
\t\t'808080': 'Сиво',
\t\tF00: 'Червено',
\t\tFF8C00: 'Тъмно оранжево',
\t\tFFD700: 'Златно',
\t\t'008000': 'Зелено',
\t\t'0FF': 'Светло синьо',
\t\t'00F': 'Синьо',
\t\tEE82EE: 'Виолетово',
\t\tA9A9A9: 'Бледо сиво',
\t\tFFA07A: 'Светло розово-оранжево',
\t\tFFA500: 'Оранжево',
\t\tFFFF00: 'Жълто',
\t\t'00FF00': 'Варосано',
\t\tAFEEEE: 'Тюркоазено остро',
\t\tADD8E6: 'Светло синьо',
\t\tDDA0DD: 'Сливово',
\t\tD3D3D3: 'Светло сиво',
\t\tFFF0F5: 'Лавандула изчервено',
\t\tFAEBD7: 'Антично бяло',
\t\tFFFFE0: 'Светло жълто',
\t\tF0FFF0: 'Медена роса',
\t\tF0FFFF: 'Лазурно',
\t\tF0F8FF: 'Алиса синьо',
\t\tE6E6FA: 'Лавандула',
\t\tFFF: 'Бяло',
\t\t'1ABC9C': 'Силно синьо-зелено',
\t\t'2ECC71': 'Изомрудено',
\t\t'3498DB': 'Ярко синьо',
\t\t'9B59B6': 'Аметист',
\t\t'4E5F70': 'Сивкаво синьо',
\t\t'F1C40F': 'Блестящо жълто',
\t\t'16A085': 'Тъмно синьо-зелено',
\t\t'27AE60': 'Тъмно изомрудено',
\t\t'2980B9': 'Силно синьо',
\t\t'8E44AD': 'Тъмно виолетово',
\t\t'2C3E50': 'Ненаситено синьо',
\t\t'F39C12': 'Оранжево',
\t\t'E67E22': 'Морков',
\t\t'E74C3C': 'Бледо червено',
\t\t'ECF0F1': 'Ярко сребърно',
\t\t'95A5A6': 'Светло сивкаво синьо-зелено',
\t\t'DDD': 'Светло сиво',
\t\t'D35400': 'Тиквено',
\t\t'C0392B': 'Силно червено',
\t\t'BDC3C7': 'Сребърно',
\t\t'7F8C8D': 'Сивкаво синьо-зелено',
\t\t'999': 'Тъмно сиво'
\t},
\tmore: 'Още цветове',
\tpanelTitle: 'Цветове',
\ttextColorTitle: 'Цвят на текста'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/bg.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/bg.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/bg.js");
    }
}
