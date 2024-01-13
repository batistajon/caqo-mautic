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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sr.js */
class __TwigTemplate_98ee13a812b1c8153b273c0d72a4b22cc26f73a9d92637f60dfb99e669ec38b1 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'sr', {
\tauto: 'Аутоматски',
\tbgColorTitle: 'Боја позадине',
\tcolors: {
\t\t'000': 'Црно',
\t\t'800000': 'Бордо',
\t\t'8B4513': 'Браон',
\t\t'2F4F4F': 'Тамно тиркизно',
\t\t'008080': 'Tиркизно',
\t\t'000080': 'Кралјевско плаво',
\t\t'4B0082': 'Индиго плаво',
\t\t'696969': 'Сиво',
\t\tB22222: 'Цигла црвено',
\t\tA52A2A: 'Бакарно',
\t\tDAA520: 'Златно жуто',
\t\t'006400': 'Тамно зелено',
\t\t'40E0D0': 'Tиркизно',
\t\t'0000CD': 'Плаво',
\t\t'800080': 'Љубичасто',
\t\t'808080': 'Сиво',
\t\tF00: 'Црвено',
\t\tFF8C00: 'Тамно наранџасто',
\t\tFFD700: 'Златно',
\t\t'008000': 'Зелено',
\t\t'0FF': 'Циан',
\t\t'00F': 'Плаво',
\t\tEE82EE: 'Розе',
\t\tA9A9A9: 'Тамно сиво',
\t\tFFA07A: 'Лосос',
\t\tFFA500: 'Наранџасто',
\t\tFFFF00: 'Жуто',
\t\t'00FF00': 'Неон зелено',
\t\tAFEEEE: 'Светло тиркизно',
\t\tADD8E6: 'Светло плаво',
\t\tDDA0DD: 'Цветло љубичасто',
\t\tD3D3D3: 'Светло сиво',
\t\tFFF0F5: 'Лаванда',
\t\tFAEBD7: 'Прљаво бело',
\t\tFFFFE0: 'Светло жуто',
\t\tF0FFF0: 'Мента',
\t\tF0FFFF: 'Aзурно плаво',
\t\tF0F8FF: 'Светло плво',
\t\tE6E6FA: 'Лаванда',
\t\tFFF: 'Бело',
\t\t'1ABC9C': 'Тамно циан',
\t\t'2ECC71': 'Смарагдно',
\t\t'3498DB': 'Сјајно плаво',
\t\t'9B59B6': 'Aметист',
\t\t'4E5F70': 'Сивкасто плаво',
\t\t'F1C40F': 'Светло жуто',
\t\t'16A085': 'Тамно циан',
\t\t'27AE60': 'Тамно смарагдно',
\t\t'2980B9': 'Тамно плаво',
\t\t'8E44AD': 'Тамно љубичасто',
\t\t'2C3E50': 'Светло плаво',
\t\t'F39C12': 'Наранџасто',
\t\t'E67E22': 'Шаргрепа',
\t\t'E74C3C': 'Светло бакарно',
\t\t'ECF0F1': 'Сјајно сребрно',
\t\t'95A5A6': 'Светло сивкасто циан',
\t\t'DDD': 'Светло сиво',
\t\t'D35400': 'Бундева',
\t\t'C0392B': 'Тамно црвено',
\t\t'BDC3C7': 'Сребрно',
\t\t'7F8C8D': 'Сивкасто циан',
\t\t'999': 'Тамно сив'
\t},
\tmore: 'Више боја...',
\tpanelTitle: 'Боје',
\ttextColorTitle: 'Боја текста'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sr.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sr.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sr.js");
    }
}
