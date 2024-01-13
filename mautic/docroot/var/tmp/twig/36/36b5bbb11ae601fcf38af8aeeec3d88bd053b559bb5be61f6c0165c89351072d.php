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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/build-config.js */
class __TwigTemplate_8e4988d74faae18013093a6b4623b6a9458a233a7e0f95c031439523140360cc extends Template
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
        echo "﻿/**
 * @license Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/license
 */

/**
 * This file was added automatically by CKEditor builder.
 * You may re-use it at any time to build CKEditor again.
 *
 * If you would like to build CKEditor online again
 * (for example to upgrade), visit one the following links:
 *
 * (1) https://ckeditor.com/cke4/builder
 *     Visit online builder to build CKEditor from scratch.
 *
 * (2) https://ckeditor.com/cke4/builder/e431e193e5a737fc50cd68589730b6df
 *     Visit online builder to build CKEditor, starting with the same setup as before.
 *
 * (3) https://ckeditor.com/cke4/builder/download/e431e193e5a737fc50cd68589730b6df
 *     Straight download link to the latest version of CKEditor (Optimized) with the same setup as before.
 *
 * NOTE:
 *    This file is not used by CKEditor, you may remove it.
 *    Changing this file will not change your CKEditor configuration.
 */

var CKBUILDER_CONFIG = {
\tskin: 'moono-lisa',
\tpreset: 'full',
\tignore: [
\t\t'.DS_Store',
\t\t'.bender',
\t\t'.editorconfig',
\t\t'.gitattributes',
\t\t'.gitignore',
\t\t'.idea',
\t\t'.jscsrc',
\t\t'.jshintignore',
\t\t'.jshintrc',
\t\t'.mailmap',
\t\t'.npm',
\t\t'.nvmrc',
\t\t'.travis.yml',
\t\t'bender-err.log',
\t\t'bender-out.log',
\t\t'bender.ci.js',
\t\t'bender.js',
\t\t'dev',
\t\t'gruntfile.js',
\t\t'less',
\t\t'node_modules',
\t\t'package-lock.json',
\t\t'package.json',
\t\t'tests'
\t],
\tplugins : {
\t\t'a11yhelp' : 1,
\t\t'about' : 1,
\t\t'basicstyles' : 1,
\t\t'bidi' : 1,
\t\t'blockquote' : 1,
\t\t'clipboard' : 1,
\t\t'colorbutton' : 1,
\t\t'colordialog' : 1,
\t\t'contextmenu' : 1,
\t\t'copyformatting' : 1,
\t\t'dialogadvtab' : 1,
\t\t'div' : 1,
\t\t'editorplaceholder' : 1,
\t\t'elementspath' : 1,
\t\t'enterkey' : 1,
\t\t'entities' : 1,
\t\t'exportpdf' : 1,
\t\t'filebrowser' : 1,
\t\t'find' : 1,
\t\t'flash' : 1,
\t\t'floatingspace' : 1,
\t\t'font' : 1,
\t\t'format' : 1,
\t\t'forms' : 1,
\t\t'horizontalrule' : 1,
\t\t'htmlwriter' : 1,
\t\t'iframe' : 1,
\t\t'image' : 1,
\t\t'indentblock' : 1,
\t\t'indentlist' : 1,
\t\t'justify' : 1,
\t\t'language' : 1,
\t\t'link' : 1,
\t\t'list' : 1,
\t\t'liststyle' : 1,
\t\t'magicline' : 1,
\t\t'maximize' : 1,
\t\t'newpage' : 1,
\t\t'pagebreak' : 1,
\t\t'pastefromgdocs' : 1,
\t\t'pastefromlibreoffice' : 1,
\t\t'pastefromword' : 1,
\t\t'pastetext' : 1,
\t\t'preview' : 1,
\t\t'print' : 1,
\t\t'removeformat' : 1,
\t\t'resize' : 1,
\t\t'save' : 1,
\t\t'scayt' : 1,
\t\t'selectall' : 1,
\t\t'showblocks' : 1,
\t\t'showborders' : 1,
\t\t'smiley' : 1,
\t\t'sourcearea' : 1,
\t\t'specialchar' : 1,
\t\t'stylescombo' : 1,
\t\t'tab' : 1,
\t\t'table' : 1,
\t\t'tableselection' : 1,
\t\t'tabletools' : 1,
\t\t'templates' : 1,
\t\t'toolbar' : 1,
\t\t'undo' : 1,
\t\t'uploadimage' : 1,
\t\t'wysiwygarea' : 1
\t},
\tlanguages : {
\t\t'af' : 1,
\t\t'ar' : 1,
\t\t'az' : 1,
\t\t'bg' : 1,
\t\t'bn' : 1,
\t\t'bs' : 1,
\t\t'ca' : 1,
\t\t'cs' : 1,
\t\t'cy' : 1,
\t\t'da' : 1,
\t\t'de' : 1,
\t\t'de-ch' : 1,
\t\t'el' : 1,
\t\t'en' : 1,
\t\t'en-au' : 1,
\t\t'en-ca' : 1,
\t\t'en-gb' : 1,
\t\t'eo' : 1,
\t\t'es' : 1,
\t\t'es-mx' : 1,
\t\t'et' : 1,
\t\t'eu' : 1,
\t\t'fa' : 1,
\t\t'fi' : 1,
\t\t'fo' : 1,
\t\t'fr' : 1,
\t\t'fr-ca' : 1,
\t\t'gl' : 1,
\t\t'gu' : 1,
\t\t'he' : 1,
\t\t'hi' : 1,
\t\t'hr' : 1,
\t\t'hu' : 1,
\t\t'id' : 1,
\t\t'is' : 1,
\t\t'it' : 1,
\t\t'ja' : 1,
\t\t'ka' : 1,
\t\t'km' : 1,
\t\t'ko' : 1,
\t\t'ku' : 1,
\t\t'lt' : 1,
\t\t'lv' : 1,
\t\t'mk' : 1,
\t\t'mn' : 1,
\t\t'ms' : 1,
\t\t'nb' : 1,
\t\t'nl' : 1,
\t\t'no' : 1,
\t\t'oc' : 1,
\t\t'pl' : 1,
\t\t'pt' : 1,
\t\t'pt-br' : 1,
\t\t'ro' : 1,
\t\t'ru' : 1,
\t\t'si' : 1,
\t\t'sk' : 1,
\t\t'sl' : 1,
\t\t'sq' : 1,
\t\t'sr' : 1,
\t\t'sr-latn' : 1,
\t\t'sv' : 1,
\t\t'th' : 1,
\t\t'tr' : 1,
\t\t'tt' : 1,
\t\t'ug' : 1,
\t\t'uk' : 1,
\t\t'vi' : 1,
\t\t'zh' : 1,
\t\t'zh-cn' : 1
\t}
};";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/build-config.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/build-config.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/build-config.js");
    }
}
