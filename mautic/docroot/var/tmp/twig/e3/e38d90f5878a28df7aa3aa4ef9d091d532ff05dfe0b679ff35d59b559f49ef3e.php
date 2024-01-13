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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sq.js */
class __TwigTemplate_3ca24aa64e0b4fa2c5c162790c77b13bb464b84bfbb5d2f4c4c81de1ca694481 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'sq', {
\tauto: 'Automatik',
\tbgColorTitle: 'Ngjyra e Prapavijës',
\tcolors: {
\t\t'000': 'E zezë',
\t\t'800000': 'Ngjyrë gështenjë',
\t\t'8B4513': 'Ngjyrë Shale Kafe',
\t\t'2F4F4F': 'Ngjyrë Gri të errët ardëz',
\t\t'008080': 'Ngjyrë bajukë',
\t\t'000080': 'Ngjyrë Marine',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Gri e Errët',
\t\tB22222: 'Tullë në Flakë',
\t\tA52A2A: 'Ngjytë Kafe',
\t\tDAA520: 'Shkop i Artë',
\t\t'006400': 'E Gjelbër e Errët',
\t\t'40E0D0': 'Ngjyrë e Bruztë',
\t\t'0000CD': 'E Kaltër e Mesme',
\t\t'800080': 'Vjollcë',
\t\t'808080': 'Gri',
\t\tF00: 'E Kuqe',
\t\tFF8C00: 'E Portokalltë e Errët',
\t\tFFD700: 'Ngjyrë Ari',
\t\t'008000': 'E Gjelbërt',
\t\t'0FF': 'Cyan',
\t\t'00F': 'E Kaltër',
\t\tEE82EE: 'Vjollcë',
\t\tA9A9A9: 'Gri e Errët',
\t\tFFA07A: 'Salmon i Ndritur',
\t\tFFA500: 'E Portokalltë',
\t\tFFFF00: 'E Verdhë',
\t\t'00FF00': 'Ngjyrë Gëlqere',
\t\tAFEEEE: 'Ngjyrë e Bruztë e Zbehtë',
\t\tADD8E6: 'E Kaltër e Ndritur',
\t\tDDA0DD: 'Ngjyrë Llokumi',
\t\tD3D3D3: 'Gri e Ndritur',
\t\tFFF0F5: 'Ngjyrë Purpur e Skuqur',
\t\tFAEBD7: 'E Bardhë Antike',
\t\tFFFFE0: 'E verdhë e Ndritur',
\t\tF0FFF0: 'Ngjyrë Nektari',
\t\tF0FFFF: 'Ngjyrë Qielli',
\t\tF0F8FF: 'E Kaltër Alice',
\t\tE6E6FA: 'Ngjyrë Purpur e Zbetë',
\t\tFFF: 'E bardhë',
\t\t'1ABC9C': 'Sian i Fortë',
\t\t'2ECC71': 'Smerald',
\t\t'3498DB': 'E kaltër e ndritur',
\t\t'9B59B6': 'Ametist',
\t\t'4E5F70': 'Kaltër në Gri',
\t\t'F1C40F': 'E verdhë e gjallë',
\t\t'16A085': 'Sian e errët',
\t\t'27AE60': 'Smerald e errët',
\t\t'2980B9': 'E kaltër e fortë',
\t\t'8E44AD': 'Vjollcë e errët',
\t\t'2C3E50': 'E kaltër e njomë',
\t\t'F39C12': 'E Portokalltë',
\t\t'E67E22': 'Ngjyrë karote',
\t\t'E74C3C': 'E kuqe e zbehtë',
\t\t'ECF0F1': 'Ngjyrë argjendi e ndritshme',
\t\t'95A5A6': 'Sian në gri e lehtë',
\t\t'DDD': 'Gri e lehtë',
\t\t'D35400': 'Ngjyrë kungulli',
\t\t'C0392B': 'E kuqe e fortë',
\t\t'BDC3C7': 'Ngjyrë argjendi',
\t\t'7F8C8D': 'Sian në gri',
\t\t'999': 'Gri e Errët'
\t},
\tmore: 'Më Shumë Ngjyra...',
\tpanelTitle: 'Ngjyrat',
\ttextColorTitle: 'Ngjyra e Tekstit'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sq.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sq.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sq.js");
    }
}
