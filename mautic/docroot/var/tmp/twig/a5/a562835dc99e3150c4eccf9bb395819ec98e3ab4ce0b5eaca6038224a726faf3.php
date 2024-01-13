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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sk.js */
class __TwigTemplate_87c9a78637845319260b753c9924119b37ea5ce584b0dcb33b8374a6d1dd8e4e extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'sk', {
\tauto: 'Automaticky',
\tbgColorTitle: 'Farba pozadia',
\tcolors: {
\t\t'000': 'Čierna',
\t\t'800000': 'Gaštanová',
\t\t'8B4513': 'Sedlová hnedá',
\t\t'2F4F4F': 'Tmavo bridlicovo sivá',
\t\t'008080': 'Modrozelená',
\t\t'000080': 'Tmavomodrá',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Tmavá sivá',
\t\tB22222: 'Ohňová tehlová',
\t\tA52A2A: 'Hnedá',
\t\tDAA520: 'Zlatobyľ',
\t\t'006400': 'Tmavá zelená',
\t\t'40E0D0': 'Tyrkysová',
\t\t'0000CD': 'Stredná modrá',
\t\t'800080': 'Purpurová',
\t\t'808080': 'Sivá',
\t\tF00: 'Červená',
\t\tFF8C00: 'Tmavá oranžová',
\t\tFFD700: 'Zlatá',
\t\t'008000': 'Zelená',
\t\t'0FF': 'Azúrová',
\t\t'00F': 'Modrá',
\t\tEE82EE: 'Fialová',
\t\tA9A9A9: 'Tmavá sivá',
\t\tFFA07A: 'Svetlá lososová',
\t\tFFA500: 'Oranžová',
\t\tFFFF00: 'Žltá',
\t\t'00FF00': 'Vápenná',
\t\tAFEEEE: 'Svetlá tyrkysová',
\t\tADD8E6: 'Svetlá modrá',
\t\tDDA0DD: 'Slivková',
\t\tD3D3D3: 'Svetlá sivá',
\t\tFFF0F5: 'Levanduľovo červená',
\t\tFAEBD7: 'Antická biela',
\t\tFFFFE0: 'Svetlá žltá',
\t\tF0FFF0: 'Medová',
\t\tF0FFFF: 'Azúrová',
\t\tF0F8FF: 'Alicovo modrá',
\t\tE6E6FA: 'Levanduľová',
\t\tFFF: 'Biela',
\t\t'1ABC9C': 'Silno tyrkysová',
\t\t'2ECC71': 'Smaragdová',
\t\t'3498DB': 'Svetlo modrá',
\t\t'9B59B6': 'Ametystová',
\t\t'4E5F70': 'Sivo modrá',
\t\t'F1C40F': 'Sýto žltá',
\t\t'16A085': 'Tmavo tyrkysová',
\t\t'27AE60': 'Tmavo smaragdová',
\t\t'2980B9': 'Silno modrá',
\t\t'8E44AD': 'Tmavo fialová',
\t\t'2C3E50': 'Nesýto modrá',
\t\t'F39C12': 'Oranžová',
\t\t'E67E22': 'Mrkvová',
\t\t'E74C3C': 'Bledo červená',
\t\t'ECF0F1': 'Svetlá bronzová',
\t\t'95A5A6': 'Svetlá sivo-tyrkysová',
\t\t'DDD': 'Svetlo sivá',
\t\t'D35400': 'Tekvicová',
\t\t'C0392B': 'Silno červená',
\t\t'BDC3C7': 'Strieborná',
\t\t'7F8C8D': 'Sivo tyrkysová',
\t\t'999': 'Tmavo sivá'
\t},
\tmore: 'Viac farieb...',
\tpanelTitle: 'Farby',
\ttextColorTitle: 'Farba textu'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sk.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sk.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sk.js");
    }
}
