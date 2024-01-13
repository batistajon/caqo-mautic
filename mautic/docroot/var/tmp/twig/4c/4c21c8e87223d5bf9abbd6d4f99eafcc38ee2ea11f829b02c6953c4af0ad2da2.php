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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/uk.js */
class __TwigTemplate_19930ae48de97f79f2015129615d809f3c1642886972ed300eb06cbec3a7b829 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'uk', {
\tauto: 'Авто',
\tbgColorTitle: 'Колір фону',
\tcolors: {
\t\t'000': 'Чорний',
\t\t'800000': 'Бордовий',
\t\t'8B4513': 'Коричневий',
\t\t'2F4F4F': 'Темний сіро-зелений',
\t\t'008080': 'Морської хвилі',
\t\t'000080': 'Сливовий',
\t\t'4B0082': 'Індиго',
\t\t'696969': 'Темно-сірий',
\t\tB22222: 'Темночервоний',
\t\tA52A2A: 'Каштановий',
\t\tDAA520: 'Бежевий',
\t\t'006400': 'Темно-зелений',
\t\t'40E0D0': 'Бірюзовий',
\t\t'0000CD': 'Темносиній',
\t\t'800080': 'Пурпурний',
\t\t'808080': 'Сірий',
\t\tF00: 'Червоний',
\t\tFF8C00: 'Темно-помаранчевий',
\t\tFFD700: 'Жовтий',
\t\t'008000': 'Зелений',
\t\t'0FF': 'Синьо-зелений',
\t\t'00F': 'Синій',
\t\tEE82EE: 'Фіолетовий',
\t\tA9A9A9: 'Тьмяно-сірий',
\t\tFFA07A: 'Рожевий',
\t\tFFA500: 'Помаранчевий',
\t\tFFFF00: 'Яскравожовтий',
\t\t'00FF00': 'Салатовий',
\t\tAFEEEE: 'Світлобірюзовий',
\t\tADD8E6: 'Блакитний',
\t\tDDA0DD: 'Світлофіолетовий',
\t\tD3D3D3: 'Світло-сірий',
\t\tFFF0F5: 'Світлорожевий',
\t\tFAEBD7: 'Світлооранжевий',
\t\tFFFFE0: 'Світло-жовтий',
\t\tF0FFF0: 'Світлозелений',
\t\tF0FFFF: 'Світлий синьо-зелений',
\t\tF0F8FF: 'Світлоблакитний',
\t\tE6E6FA: 'Лавандовий',
\t\tFFF: 'Білий',
\t\t'1ABC9C': 'Насичений блакитний',
\t\t'2ECC71': 'Смарагдовий',
\t\t'3498DB': 'Яскраво-синій',
\t\t'9B59B6': 'Аметистовий',
\t\t'4E5F70': 'Сірувато-синій',
\t\t'F1C40F': 'Яскраво-жовтий',
\t\t'16A085': 'Темно-блакитний',
\t\t'27AE60': 'Темно-смарагдовий',
\t\t'2980B9': 'Насичений синій',
\t\t'8E44AD': 'Темно-фіолетовий',
\t\t'2C3E50': 'Ненасичений синій',
\t\t'F39C12': 'Помаранчевий',
\t\t'E67E22': 'Морквяний',
\t\t'E74C3C': 'Блідо-червоний',
\t\t'ECF0F1': 'Яскраво-сріблястий',
\t\t'95A5A6': 'Світлий сірувато-блакитний',
\t\t'DDD': 'Світло-сірий',
\t\t'D35400': 'Гарбузовий',
\t\t'C0392B': 'Насичений червоний',
\t\t'BDC3C7': 'Сріблястий',
\t\t'7F8C8D': 'Сірувато-блакитний',
\t\t'999': 'Темно-сірий'
\t},
\tmore: 'Кольори...',
\tpanelTitle: 'Кольори',
\ttextColorTitle: 'Колір тексту'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/uk.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/uk.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/uk.js");
    }
}
