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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/tt.js */
class __TwigTemplate_f728428ee2fdd88c347cce2d1a5d8652a3989d56747f9742c1664a74996b495b extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'tt', {
\tauto: 'Автоматик',
\tbgColorTitle: 'Фон төсе',
\tcolors: {
\t\t'000': 'Кара',
\t\t'800000': 'Бордо',
\t\t'8B4513': 'Дарчин',
\t\t'2F4F4F': 'Аспид соры',
\t\t'008080': 'Күкле-яшелле',
\t\t'000080': 'Куе күк',
\t\t'4B0082': 'Индиго',
\t\t'696969': 'Куе соры',
\t\tB22222: 'Кармин',
\t\tA52A2A: 'Чия кызыл',
\t\tDAA520: 'Алтын каен',
\t\t'006400': 'Үлән',
\t\t'40E0D0': 'Фирәзә',
\t\t'0000CD': 'Фарсы күк',
\t\t'800080': 'Шәмәхә',
\t\t'808080': 'Соры',
\t\tF00: 'Кызыл',
\t\tFF8C00: 'Кабак',
\t\tFFD700: 'Алтын',
\t\t'008000': 'Яшел',
\t\t'0FF': 'Ачык зәңгәр',
\t\t'00F': 'Зәңгәр',
\t\tEE82EE: 'Миләүшә',
\t\tA9A9A9: 'Ачык соры',
\t\tFFA07A: 'Кызгылт сары алсу',
\t\tFFA500: 'Кызгылт сары',
\t\tFFFF00: 'Сары',
\t\t'00FF00': 'Лайм',
\t\tAFEEEE: 'Тонык күк',
\t\tADD8E6: 'Тонык күкбаш',
\t\tDDA0DD: 'Аксыл шәмәхә',
\t\tD3D3D3: 'Ачык соры',
\t\tFFF0F5: 'Ал ала миләүшә',
\t\tFAEBD7: 'Җитен',
\t\tFFFFE0: 'Ачык сары',
\t\tF0FFF0: 'Аксыл көрән',
\t\tF0FFFF: 'Ап-ак',
\t\tF0F8FF: 'Аксыл зәңгәр диңгез',
\t\tE6E6FA: 'Ала миләүшә',
\t\tFFF: 'Ак',
\t\t'1ABC9C': 'Strong Cyan', // MISSING
\t\t'2ECC71': 'Emerald', // MISSING
\t\t'3498DB': 'Bright Blue', // MISSING
\t\t'9B59B6': 'Amethyst', // MISSING
\t\t'4E5F70': 'Grayish Blue', // MISSING
\t\t'F1C40F': 'Vivid Yellow', // MISSING
\t\t'16A085': 'Dark Cyan', // MISSING
\t\t'27AE60': 'Dark Emerald', // MISSING
\t\t'2980B9': 'Strong Blue', // MISSING
\t\t'8E44AD': 'Dark Violet', // MISSING
\t\t'2C3E50': 'Desaturated Blue', // MISSING
\t\t'F39C12': 'Orange', // MISSING
\t\t'E67E22': 'Carrot', // MISSING
\t\t'E74C3C': 'Pale Red', // MISSING
\t\t'ECF0F1': 'Bright Silver', // MISSING
\t\t'95A5A6': 'Light Grayish Cyan', // MISSING
\t\t'DDD': 'Light Gray', // MISSING
\t\t'D35400': 'Pumpkin', // MISSING
\t\t'C0392B': 'Strong Red', // MISSING
\t\t'BDC3C7': 'Silver', // MISSING
\t\t'7F8C8D': 'Grayish Cyan', // MISSING
\t\t'999': 'Dark Gray' // MISSING
\t},
\tmore: 'Башка төсләр...',
\tpanelTitle: 'Төсләр',
\ttextColorTitle: 'Текст төсе'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/tt.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/tt.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/tt.js");
    }
}
