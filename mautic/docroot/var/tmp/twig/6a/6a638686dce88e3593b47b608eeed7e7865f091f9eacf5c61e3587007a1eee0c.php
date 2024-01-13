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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/sharedspace/plugin.js */
class __TwigTemplate_68e0e6eb339dae951e68e353cc7064a20f285a037a3d7f3d3426982667df37f2 extends Template
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
        echo "/**
 * @license Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( function() {

\t'use strict';

\tvar containerTpl = CKEDITOR.addTemplate( 'sharedcontainer', '<div' +
\t\t' id=\"cke_{name}\"' +
\t\t' class=\"cke {id} cke_reset_all cke_chrome cke_editor_{name} cke_shared cke_detached cke_{langDir} ' + CKEDITOR.env.cssClass + '\"' +
\t\t' dir=\"{langDir}\"' +
\t\t' title=\"' + ( CKEDITOR.env.gecko ? ' ' : '' ) + '\"' +
\t\t' lang=\"{langCode}\"' +
\t\t' role=\"presentation\"' +
\t\t'>' +
\t\t\t'<div class=\"cke_inner\">' +
\t\t\t\t'<div id=\"{spaceId}\" class=\"cke_{space}\" role=\"presentation\">{content}</div>' +
\t\t\t'</div>' +
\t\t'</div>' );

\tCKEDITOR.plugins.add( 'sharedspace', {
\t\tinit: function( editor ) {
\t\t\t// Create toolbars on #loaded (like themed creator), but do that
\t\t\t// with higher priority to block the default scenario.
\t\t\teditor.on( 'loaded', function() {
\t\t\t\tvar spaces = editor.config.sharedSpaces;

\t\t\t\tif ( spaces ) {
\t\t\t\t\tfor ( var spaceName in spaces )
\t\t\t\t\t\tcreate( editor, spaceName, spaces[ spaceName ] );
\t\t\t\t}
\t\t\t}, null, null, 9 );
\t\t}
\t} );

\tfunction create( editor, spaceName, target ) {
\t\tvar innerHtml, space;

\t\tif ( typeof target == 'string' ) {
\t\t\ttarget = CKEDITOR.document.getById( target );
\t\t} else {
\t\t\ttarget = new CKEDITOR.dom.element( target );
\t\t}

\t\tif ( target ) {
\t\t\t// Have other plugins filling the space.
\t\t\tinnerHtml = editor.fire( 'uiSpace', { space: spaceName, html: '' } ).html;

\t\t\tif ( innerHtml ) {
\t\t\t\t// Block the uiSpace handling by others (e.g. themed-ui).
\t\t\t\teditor.on( 'uiSpace', function( ev ) {
\t\t\t\t\tif ( ev.data.space == spaceName )
\t\t\t\t\t\tev.cancel();
\t\t\t\t}, null, null, 1 );  // Hi-priority

\t\t\t\t// Inject the space into the target.
\t\t\t\tspace = target.append( CKEDITOR.dom.element.createFromHtml( containerTpl.output( {
\t\t\t\t\tid: editor.id,
\t\t\t\t\tname: editor.name,
\t\t\t\t\tlangDir: editor.lang.dir,
\t\t\t\t\tlangCode: editor.langCode,
\t\t\t\t\tspace: spaceName,
\t\t\t\t\tspaceId: editor.ui.spaceId( spaceName ),
\t\t\t\t\tcontent: innerHtml
\t\t\t\t} ) ) );

\t\t\t\t// Only the first container starts visible. Others get hidden.
\t\t\t\tif ( target.getCustomData( 'cke_hasshared' ) )
\t\t\t\t\tspace.hide();
\t\t\t\telse
\t\t\t\t\ttarget.setCustomData( 'cke_hasshared', 1 );

\t\t\t\t// There's no need for the space to be selectable.
\t\t\t\tspace.unselectable();

\t\t\t\t// Prevent clicking on non-buttons area of the space from blurring editor.
\t\t\t\tspace.on( 'mousedown', function( evt ) {
\t\t\t\t\tevt = evt.data;
\t\t\t\t\tif ( !evt.getTarget().hasAscendant( 'a', 1 ) )
\t\t\t\t\t\tevt.preventDefault();
\t\t\t\t} );

\t\t\t\t// Register this UI space to the focus manager.
\t\t\t\teditor.focusManager.add( space, 1 );

\t\t\t\t// When the editor gets focus, show the space container, hiding others.
\t\t\t\teditor.on( 'focus', function() {
\t\t\t\t\tfor ( var i = 0, sibling, children = target.getChildren(); ( sibling = children.getItem( i ) ); i++ ) {
\t\t\t\t\t\tif ( sibling.type == CKEDITOR.NODE_ELEMENT &&
\t\t\t\t\t\t\t!sibling.equals( space ) &&
\t\t\t\t\t\t\tsibling.hasClass( 'cke_shared' ) ) {
\t\t\t\t\t\t\tsibling.hide();
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tspace.show();
\t\t\t\t} );

\t\t\t\teditor.on( 'destroy', function() {
\t\t\t\t\tspace.remove();
\t\t\t\t} );
\t\t\t}
\t\t}
\t}
} )();

/**
 * Makes it possible to place some of the editor UI blocks, like the toolbar
 * and the elements path, in any element on the page.
 *
 * The elements used to store the UI blocks can be shared among several editor
 * instances. In that case only the blocks relevant to the active editor instance
 * will be displayed.
 *
 * Read more in the {@glink features/sharedspace documentation}
 * and see the {@glink examples/sharedspace example}.
 *
 *\t\t// Place the toolbar inside the element with an ID of \"someElementId\" and the
 *\t\t// elements path into the element with an  ID of \"anotherId\".
 *\t\tconfig.sharedSpaces = {
 *\t\t\ttop: 'someElementId',
 *\t\t\tbottom: 'anotherId'
 *\t\t};
 *
 *\t\t// Place the toolbar inside the element with an ID of \"someElementId\". The
 *\t\t// elements path will remain attached to the editor UI.
 *\t\tconfig.sharedSpaces = {
 *\t\t\ttop: 'someElementId'
 *\t\t};
 *
 *\t\t// (Since 4.5.0)
 *\t\t// Place the toolbar inside a DOM element passed by a reference. The
 *\t\t// elements path will remain attached to the editor UI.
 *\t\tvar htmlElement = document.getElementById( 'someElementId' );
 *\t\tconfig.sharedSpaces = {
 *\t\t\ttop: htmlElement
 *\t\t};
 *
 * **Note:** The [Maximize](https://ckeditor.com/cke4/addon/maximize) and [Editor Resize](https://ckeditor.com/cke4/addon/resize)
 * features are not supported in the shared space environment and should be disabled in this context.
 *
 *\t\tconfig.removePlugins = 'maximize,resize';
 *
 * @cfg {Object} [sharedSpaces]
 * @member CKEDITOR.config
 */
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/sharedspace/plugin.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/sharedspace/plugin.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/sharedspace/plugin.js");
    }
}
