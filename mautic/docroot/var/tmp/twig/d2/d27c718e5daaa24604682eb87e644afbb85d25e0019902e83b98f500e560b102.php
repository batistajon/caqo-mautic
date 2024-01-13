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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ko.js */
class __TwigTemplate_663c0ecaa5ceba70584eb7fe1b009885445f7087dcd47c9da9239a1572dbd339 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'ko', {
\tauto: '기본 색상',
\tbgColorTitle: '배경 색상',
\tcolors: {
\t\t'000': '검정',
\t\t'800000': '밤색',
\t\t'8B4513': '새들 브라운',
\t\t'2F4F4F': '다크 슬레이트 그레이',
\t\t'008080': '틸',
\t\t'000080': '네이비',
\t\t'4B0082': '남색',
\t\t'696969': '짙은 회색',
\t\tB22222: '벽돌색',
\t\tA52A2A: '갈색',
\t\tDAA520: '골든 로드',
\t\t'006400': '암록색',
\t\t'40E0D0': '터코이즈',
\t\t'0000CD': '미디엄 블루',
\t\t'800080': '보라',
\t\t'808080': '회색',
\t\tF00: '빨강',
\t\tFF8C00: '짙은 주황',
\t\tFFD700: '금색',
\t\t'008000': '녹색',
\t\t'0FF': '시안',
\t\t'00F': '파랑',
\t\tEE82EE: '남보라',
\t\tA9A9A9: '딤 그레이',
\t\tFFA07A: '라이트 새먼',
\t\tFFA500: '주황',
\t\tFFFF00: '노랑',
\t\t'00FF00': '라임',
\t\tAFEEEE: '패일 터코이즈',
\t\tADD8E6: '연한 파랑',
\t\tDDA0DD: '자두',
\t\tD3D3D3: '연한 회색',
\t\tFFF0F5: '라벤더 블러쉬',
\t\tFAEBD7: '앤틱 화이트',
\t\tFFFFE0: '연한 노랑',
\t\tF0FFF0: '허니듀',
\t\tF0FFFF: '하늘색',
\t\tF0F8FF: '앨리스 블루',
\t\tE6E6FA: '라벤더',
\t\tFFF: '흰색',
\t\t'1ABC9C': '진한 청록색',
\t\t'2ECC71': '에메랄드',
\t\t'3498DB': '밝은 파랑',
\t\t'9B59B6': '자수정',
\t\t'4E5F70': '회청색',
\t\t'F1C40F': '선명한 노랑',
\t\t'16A085': '다크 시안',
\t\t'27AE60': '다크 에메랄드',
\t\t'2980B9': '진한 파랑',
\t\t'8E44AD': '다크 바이올렛',
\t\t'2C3E50': '탁한 파랑',
\t\t'F39C12': '주황',
\t\t'E67E22': '당근',
\t\t'E74C3C': '창백한 빨강',
\t\t'ECF0F1': '밝은 은색',
\t\t'95A5A6': '밝은 회청록',
\t\t'DDD': '밝은 회색',
\t\t'D35400': '호박',
\t\t'C0392B': '진한 빨강',
\t\t'BDC3C7': '은색',
\t\t'7F8C8D': '회청록',
\t\t'999': '암회색'
\t},
\tmore: '색상 선택...',
\tpanelTitle: '색상',
\ttextColorTitle: '글자 색상'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ko.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ko.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ko.js");
    }
}
