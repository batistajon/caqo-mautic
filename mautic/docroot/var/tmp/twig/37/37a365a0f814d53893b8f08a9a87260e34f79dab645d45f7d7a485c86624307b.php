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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/sourcedialog/dialogs/sourcedialog.js */
class __TwigTemplate_c7aaaf35a7b5d39d49ccf63f9cbf6ff33f6dc2be4935a60dc345fd0bca55e515 extends Template
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
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.dialog.add( 'sourcedialog', function( editor ) {
\tvar size = CKEDITOR.document.getWindow().getViewPaneSize();

\t// Make it maximum 800px wide, but still fully visible in the viewport.
\tvar width = Math.min( size.width - 70, 800 );

\t// Make it use 2/3 of the viewport height.
\tvar height = size.height / 1.5;

\t// Store old editor data to avoid unnecessary setData.
\tvar oldData;

\treturn {
\t\ttitle: editor.lang.sourcedialog.title,
\t\tminWidth: 100,
\t\tminHeight: 100,

\t\tonShow: function() {
\t\t\tthis.setValueOf( 'main', 'data', oldData = editor.getData() );
\t\t},

\t\tonOk: ( function() {
\t\t\tfunction setData( dialog, newData ) {
\t\t\t\t// [IE8] Focus editor before setting selection to avoid setting data on
\t\t\t\t// locked selection, because in case of inline editor, it won't be
\t\t\t\t// unlocked before editable's HTML is altered. (#11585)
\t\t\t\teditor.focus();
\t\t\t\teditor.setData( newData, function() {
\t\t\t\t\tdialog.hide();

\t\t\t\t\t// Ensure correct selection.
\t\t\t\t\tvar range = editor.createRange();
\t\t\t\t\trange.moveToElementEditStart( editor.editable() );
\t\t\t\t\trange.select();
\t\t\t\t} );
\t\t\t}

\t\t\treturn function() {
\t\t\t\t// Remove CR from input data for reliable comparison with editor data.
\t\t\t\tvar newData = this.getValueOf( 'main', 'data' ).replace( /\\r/g, '' ),
\t\t\t\t\tthat = this;

\t\t\t\t// Avoid unnecessary setData. Also preserve selection
\t\t\t\t// when user changed his mind and goes back to wysiwyg editing.
\t\t\t\tif ( newData === oldData )
\t\t\t\t\treturn true;

\t\t\t\tsetTimeout( function() {
\t\t\t\t\tsetData( that, newData );
\t\t\t\t} );

\t\t\t\t// Don't let the dialog close before setData is over, to hide
\t\t\t\t// from user blinking caused by selection restoring and setting new data.
\t\t\t\treturn false;
\t\t\t};
\t\t} )(),

\t\tcontents: [ {
\t\t\tid: 'main',
\t\t\tlabel: editor.lang.sourcedialog.title,
\t\t\telements: [ {
\t\t\t\ttype: 'textarea',
\t\t\t\tid: 'data',
\t\t\t\tdir: 'ltr',
\t\t\t\tinputStyle: 'cursor:auto;' +
\t\t\t\t\t'width:' + width + 'px;' +
\t\t\t\t\t'height:' + height + 'px;' +
\t\t\t\t\t'tab-size:4;' +
\t\t\t\t\t'text-align:left;',
\t\t\t\t'class': 'cke_source'
\t\t\t} ]
\t\t} ]
\t};
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/sourcedialog/dialogs/sourcedialog.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/sourcedialog/dialogs/sourcedialog.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/sourcedialog/dialogs/sourcedialog.js");
    }
}
