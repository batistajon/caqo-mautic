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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/vi.js */
class __TwigTemplate_43d6ff54852f6138aa7c6d5f244ce064ddae7dee6550588437021a33929ce3af extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'vi', {
\tauto: 'Tự động',
\tbgColorTitle: 'Màu nền',
\tcolors: {
\t\t'000': 'Đen',
\t\t'800000': 'Maroon',
\t\t'8B4513': 'Saddle Brown',
\t\t'2F4F4F': 'Dark Slate Gray',
\t\t'008080': 'Teal',
\t\t'000080': 'Navy',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Dark Gray',
\t\tB22222: 'Fire Brick',
\t\tA52A2A: 'Nâu',
\t\tDAA520: 'Golden Rod',
\t\t'006400': 'Dark Green',
\t\t'40E0D0': 'Turquoise',
\t\t'0000CD': 'Medium Blue',
\t\t'800080': 'Purple',
\t\t'808080': 'Xám',
\t\tF00: 'Đỏ',
\t\tFF8C00: 'Dark Orange',
\t\tFFD700: 'Vàng',
\t\t'008000': 'Xanh lá cây',
\t\t'0FF': 'Cyan',
\t\t'00F': 'Xanh da trời',
\t\tEE82EE: 'Tím',
\t\tA9A9A9: 'Xám tối',
\t\tFFA07A: 'Light Salmon',
\t\tFFA500: 'Màu cam',
\t\tFFFF00: 'Vàng',
\t\t'00FF00': 'Lime',
\t\tAFEEEE: 'Pale Turquoise',
\t\tADD8E6: 'Light Blue',
\t\tDDA0DD: 'Plum',
\t\tD3D3D3: 'Light Grey',
\t\tFFF0F5: 'Lavender Blush',
\t\tFAEBD7: 'Antique White',
\t\tFFFFE0: 'Light Yellow',
\t\tF0FFF0: 'Honeydew',
\t\tF0FFFF: 'Azure',
\t\tF0F8FF: 'Alice Blue',
\t\tE6E6FA: 'Lavender',
\t\tFFF: 'Trắng',
\t\t'1ABC9C': 'Xanh lơ đậm',
\t\t'2ECC71': 'Xanh lục bảo',
\t\t'3498DB': 'Xanh dương sáng',
\t\t'9B59B6': 'Tím thạch anh',
\t\t'4E5F70': 'Xanh dương xám',
\t\t'F1C40F': 'Vàng rực',
\t\t'16A085': 'Xanh lơ đạm',
\t\t'27AE60': 'Xanh lục bảo đậm',
\t\t'2980B9': 'Xanh biển đậm',
\t\t'8E44AD': 'Tím đậm',
\t\t'2C3E50': 'Xanh dương nhạt',
\t\t'F39C12': 'Cam',
\t\t'E67E22': 'Cà rốt',
\t\t'E74C3C': 'Đỏ tái',
\t\t'ECF0F1': 'Bạc sáng',
\t\t'95A5A6': 'Xanh lơ xám nhạt',
\t\t'DDD': 'Xám nhạt',
\t\t'D35400': 'Bí ngô',
\t\t'C0392B': 'Đỏ rực',
\t\t'BDC3C7': 'Bạc',
\t\t'7F8C8D': 'Xanh lơ xám',
\t\t'999': 'Xám đen'
\t},
\tmore: 'Màu khác...',
\tpanelTitle: 'Màu sắc',
\ttextColorTitle: 'Màu chữ'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/vi.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/vi.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/vi.js");
    }
}
