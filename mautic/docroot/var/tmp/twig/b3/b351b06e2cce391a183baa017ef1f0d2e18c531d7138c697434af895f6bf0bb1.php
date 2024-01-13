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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/lv.js */
class __TwigTemplate_f9b6b47dad38fa999c94c68c48d0b83756100f63318110cf1e86ee4726ff212c extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'lv', {
\tauto: 'Automātiska',
\tbgColorTitle: 'Fona krāsa',
\tcolors: {
\t\t'000': 'Melns',
\t\t'800000': 'Sarkanbrūns',
\t\t'8B4513': 'Sedlu brūns',
\t\t'2F4F4F': 'Tumšas tāfeles pelēks',
\t\t'008080': 'Zili-zaļš',
\t\t'000080': 'Jūras',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Tumši pelēks',
\t\tB22222: 'Ķieģeļsarkans',
\t\tA52A2A: 'Brūns',
\t\tDAA520: 'Zelta',
\t\t'006400': 'Tumši zaļš',
\t\t'40E0D0': 'Tirkīzs',
\t\t'0000CD': 'Vidēji zils',
\t\t'800080': 'Purpurs',
\t\t'808080': 'Pelēks',
\t\tF00: 'Sarkans',
\t\tFF8C00: 'Tumši oranžs',
\t\tFFD700: 'Zelta',
\t\t'008000': 'Zaļš',
\t\t'0FF': 'Tumšzils',
\t\t'00F': 'Zils',
\t\tEE82EE: 'Violets',
\t\tA9A9A9: 'Pelēks',
\t\tFFA07A: 'Gaiši laškrāsas',
\t\tFFA500: 'Oranžs',
\t\tFFFF00: 'Dzeltens',
\t\t'00FF00': 'Laima',
\t\tAFEEEE: 'Gaiši tirkīza',
\t\tADD8E6: 'Gaiši zils',
\t\tDDA0DD: 'Plūmju',
\t\tD3D3D3: 'Gaiši pelēks',
\t\tFFF0F5: 'Lavandas sārts',
\t\tFAEBD7: 'Antīki balts',
\t\tFFFFE0: 'Gaiši dzeltens',
\t\tF0FFF0: 'Meduspile',
\t\tF0FFFF: 'Debesszils',
\t\tF0F8FF: 'Alises zils',
\t\tE6E6FA: 'Lavanda',
\t\tFFF: 'Balts',
\t\t'1ABC9C': 'Spēcīgs ciāna',
\t\t'2ECC71': 'Smaragds',
\t\t'3498DB': 'Koši zils',
\t\t'9B59B6': 'Ametists',
\t\t'4E5F70': 'Pelēkzils',
\t\t'F1C40F': 'Spilgti dzeltens',
\t\t'16A085': 'Tumšs ciāna',
\t\t'27AE60': 'Tumšs smaragds',
\t\t'2980B9': 'Spēcīgi zils',
\t\t'8E44AD': 'Tumši violets',
\t\t'2C3E50': 'Bāli zils',
\t\t'F39C12': 'Apelsīnu',
\t\t'E67E22': 'Burkānu',
\t\t'E74C3C': 'Blāvi sarkans',
\t\t'ECF0F1': 'Spilgti sudraba',
\t\t'95A5A6': 'Gaišs pelēki ciāna',
\t\t'DDD': 'Gaiši pelēks',
\t\t'D35400': 'Ķirbja',
\t\t'C0392B': 'Spēcīgi sarkans',
\t\t'BDC3C7': 'Sudraba',
\t\t'7F8C8D': 'Pelēcīgs ciāna',
\t\t'999': 'Tumši pelēks'
\t},
\tmore: 'Plašāka palete...',
\tpanelTitle: 'Krāsa',
\ttextColorTitle: 'Teksta krāsa'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/lv.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/lv.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/lv.js");
    }
}
