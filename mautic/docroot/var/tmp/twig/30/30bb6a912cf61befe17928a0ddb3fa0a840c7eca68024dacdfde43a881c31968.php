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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/pl.js */
class __TwigTemplate_c3397e4f2482867d114ddd823a6a6c7e66cdfe6437f6b7615837484aeca50490 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'pl', {
\tauto: 'Automatycznie',
\tbgColorTitle: 'Kolor tła',
\tcolors: {
\t\t'000': 'Czarny',
\t\t'800000': 'Kasztanowy',
\t\t'8B4513': 'Czekoladowy',
\t\t'2F4F4F': 'Ciemnografitowy',
\t\t'008080': 'Morski',
\t\t'000080': 'Granatowy',
\t\t'4B0082': 'Indygo',
\t\t'696969': 'Ciemnoszary',
\t\tB22222: 'Czerwień żelazowa',
\t\tA52A2A: 'Brązowy',
\t\tDAA520: 'Ciemnozłoty',
\t\t'006400': 'Ciemnozielony',
\t\t'40E0D0': 'Turkusowy',
\t\t'0000CD': 'Ciemnoniebieski',
\t\t'800080': 'Purpurowy',
\t\t'808080': 'Szary',
\t\tF00: 'Czerwony',
\t\tFF8C00: 'Ciemnopomarańczowy',
\t\tFFD700: 'Złoty',
\t\t'008000': 'Zielony',
\t\t'0FF': 'Cyjan',
\t\t'00F': 'Niebieski',
\t\tEE82EE: 'Fioletowy',
\t\tA9A9A9: 'Przygaszony szary',
\t\tFFA07A: 'Łososiowy',
\t\tFFA500: 'Pomarańczowy',
\t\tFFFF00: 'Żółty',
\t\t'00FF00': 'Limonkowy',
\t\tAFEEEE: 'Bladoturkusowy',
\t\tADD8E6: 'Jasnoniebieski',
\t\tDDA0DD: 'Śliwkowy',
\t\tD3D3D3: 'Jasnoszary',
\t\tFFF0F5: 'Jasnolawendowy',
\t\tFAEBD7: 'Kremowobiały',
\t\tFFFFE0: 'Jasnożółty',
\t\tF0FFF0: 'Bladozielony',
\t\tF0FFFF: 'Jasnolazurowy',
\t\tF0F8FF: 'Jasnobłękitny',
\t\tE6E6FA: 'Lawendowy',
\t\tFFF: 'Biały',
\t\t'1ABC9C': 'Cyjan',
\t\t'2ECC71': 'Szmaragdowy',
\t\t'3498DB': 'Jasnoniebieski',
\t\t'9B59B6': 'Ametystowy',
\t\t'4E5F70': 'Szaroniebieski',
\t\t'F1C40F': 'Żółty',
\t\t'16A085': 'Ciemny cyjan',
\t\t'27AE60': 'Ciemnoszmaragdowy',
\t\t'2980B9': 'Ciemnoniebieski',
\t\t'8E44AD': 'Ciemnofioletowy',
\t\t'2C3E50': 'Nienasycony niebieski',
\t\t'F39C12': 'Pomarańczowy',
\t\t'E67E22': 'Marchewkowy',
\t\t'E74C3C': 'Bladoczerwony',
\t\t'ECF0F1': 'Jasnosrebrny',
\t\t'95A5A6': 'Szarocyjanowy',
\t\t'DDD': 'Jasnoszary',
\t\t'D35400': 'Dyniowy',
\t\t'C0392B': 'Ciemnoczerwony',
\t\t'BDC3C7': 'Srebrny',
\t\t'7F8C8D': 'Szarawy cyjan',
\t\t'999': 'Ciemnoszary'
\t},
\tmore: 'Więcej kolorów...',
\tpanelTitle: 'Kolory',
\ttextColorTitle: 'Kolor tekstu'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/pl.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/pl.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/pl.js");
    }
}
