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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/styles.js */
class __TwigTemplate_34eb89a2055f24b6b8aa1e1749c785c5335c9621b46138b7a35534c9e79c33e4 extends Template
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
 * Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

// This file contains style definitions that can be used by CKEditor plugins.
//
// The most common use for it is the \"stylescombo\" plugin which shows the Styles drop-down
// list containing all styles in the editor toolbar. Other plugins, like
// the \"div\" plugin, use a subset of the styles for their features.
//
// If you do not have plugins that depend on this file in your editor build, you can simply
// ignore it. Otherwise it is strongly recommended to customize this file to match your
// website requirements and design properly.
//
// For more information refer to: https://ckeditor.com/docs/ckeditor4/latest/guide/dev_styles.html#style-rules

CKEDITOR.stylesSet.add( 'default', [
\t/* Block styles */

\t// These styles are already available in the \"Format\" drop-down list (\"format\" plugin),
\t// so they are not needed here by default. You may enable them to avoid
\t// placing the \"Format\" combo in the toolbar, maintaining the same features.
\t/*
\t{ name: 'Paragraph',\t\telement: 'p' },
\t{ name: 'Heading 1',\t\telement: 'h1' },
\t{ name: 'Heading 2',\t\telement: 'h2' },
\t{ name: 'Heading 3',\t\telement: 'h3' },
\t{ name: 'Heading 4',\t\telement: 'h4' },
\t{ name: 'Heading 5',\t\telement: 'h5' },
\t{ name: 'Heading 6',\t\telement: 'h6' },
\t{ name: 'Preformatted Text',element: 'pre' },
\t{ name: 'Address',\t\t\telement: 'address' },
\t*/

\t{ name: 'Italic Title',\t\telement: 'h2', styles: { 'font-style': 'italic' } },
\t{ name: 'Subtitle',\t\t\telement: 'h3', styles: { 'color': '#aaa', 'font-style': 'italic' } },
\t{
\t\tname: 'Special Container',
\t\telement: 'div',
\t\tstyles: {
\t\t\tpadding: '5px 10px',
\t\t\tbackground: '#eee',
\t\t\tborder: '1px solid #ccc'
\t\t}
\t},

\t/* Inline styles */

\t// These are core styles available as toolbar buttons. You may opt enabling
\t// some of them in the Styles drop-down list, removing them from the toolbar.
\t// (This requires the \"stylescombo\" plugin.)
\t/*
\t{ name: 'Strong',\t\t\telement: 'strong', overrides: 'b' },
\t{ name: 'Emphasis',\t\t\telement: 'em'\t, overrides: 'i' },
\t{ name: 'Underline',\t\telement: 'u' },
\t{ name: 'Strikethrough',\telement: 'strike' },
\t{ name: 'Subscript',\t\telement: 'sub' },
\t{ name: 'Superscript',\t\telement: 'sup' },
\t*/

\t{ name: 'Marker',\t\t\telement: 'span', attributes: { 'class': 'marker' } },

\t{ name: 'Big',\t\t\t\telement: 'big' },
\t{ name: 'Small',\t\t\telement: 'small' },
\t{ name: 'Typewriter',\t\telement: 'tt' },

\t{ name: 'Computer Code',\telement: 'code' },
\t{ name: 'Keyboard Phrase',\telement: 'kbd' },
\t{ name: 'Sample Text',\t\telement: 'samp' },
\t{ name: 'Variable',\t\t\telement: 'var' },

\t{ name: 'Deleted Text',\t\telement: 'del' },
\t{ name: 'Inserted Text',\telement: 'ins' },

\t{ name: 'Cited Work',\t\telement: 'cite' },
\t{ name: 'Inline Quotation',\telement: 'q' },

\t{ name: 'Language: RTL',\telement: 'span', attributes: { 'dir': 'rtl' } },
\t{ name: 'Language: LTR',\telement: 'span', attributes: { 'dir': 'ltr' } },

\t/* Object styles */

\t{
\t\tname: 'Styled Image (left)',
\t\telement: 'img',
\t\tattributes: { 'class': 'left' }
\t},

\t{
\t\tname: 'Styled Image (right)',
\t\telement: 'img',
\t\tattributes: { 'class': 'right' }
\t},

\t{
\t\tname: 'Compact Table',
\t\telement: 'table',
\t\tattributes: {
\t\t\tcellpadding: '5',
\t\t\tcellspacing: '0',
\t\t\tborder: '1',
\t\t\tbordercolor: '#ccc'
\t\t},
\t\tstyles: {
\t\t\t'border-collapse': 'collapse'
\t\t}
\t},

\t{ name: 'Borderless Table',\t\telement: 'table',\tstyles: { 'border-style': 'hidden', 'background-color': '#E6E6FA' } },
\t{ name: 'Square Bulleted List',\telement: 'ul',\t\tstyles: { 'list-style-type': 'square' } },

\t/* Widget styles */

\t{ name: 'Clean Image', type: 'widget', widget: 'image', attributes: { 'class': 'image-clean' } },
\t{ name: 'Grayscale Image', type: 'widget', widget: 'image', attributes: { 'class': 'image-grayscale' } },

\t{ name: 'Featured Snippet', type: 'widget', widget: 'codeSnippet', attributes: { 'class': 'code-featured' } },

\t{ name: 'Featured Formula', type: 'widget', widget: 'mathjax', attributes: { 'class': 'math-featured' } },

\t{ name: '240p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-240p' }, group: 'size' },
\t{ name: '360p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-360p' }, group: 'size' },
\t{ name: '480p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-480p' }, group: 'size' },
\t{ name: '720p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-720p' }, group: 'size' },
\t{ name: '1080p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-1080p' }, group: 'size' },

\t// Adding space after the style name is an intended workaround. For now, there
\t// is no option to create two styles with the same name for different widget types. See https://dev.ckeditor.com/ticket/16664.
\t{ name: '240p ', type: 'widget', widget: 'embed', attributes: { 'class': 'embed-240p' }, group: 'size' },
\t{ name: '360p ', type: 'widget', widget: 'embed', attributes: { 'class': 'embed-360p' }, group: 'size' },
\t{ name: '480p ', type: 'widget', widget: 'embed', attributes: { 'class': 'embed-480p' }, group: 'size' },
\t{ name: '720p ', type: 'widget', widget: 'embed', attributes: { 'class': 'embed-720p' }, group: 'size' },
\t{ name: '1080p ', type: 'widget', widget: 'embed', attributes: { 'class': 'embed-1080p' }, group: 'size' }

] );

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/styles.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/styles.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/styles.js");
    }
}
