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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/textwatcher/plugin.js */
class __TwigTemplate_64fa5a7164d8db390d76418b7b252c1015c2c6daacfd8a6e00569cf9068eb9f3 extends Template
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

'use strict';

( function() {

\tCKEDITOR.plugins.add( 'textwatcher', {} );

\t/**
\t * API exposed by the [Text Watcher](https://ckeditor.com/cke4/addon/textwatcher) plugin.
\t *
\t * Class implementing the text watcher &mdash; a base for features like
\t * autocomplete. It fires the {@link #matched} and {@link #unmatched} events
\t * based on changes in the text and the position of the caret in the editor.
\t *
\t * To check whether the text matches some criteria, the text watcher uses
\t * a callback function which should return the matching text and a {@link CKEDITOR.dom.range}
\t * for that text.
\t *
\t * Since the text watcher works on the DOM where searching for text
\t * is pretty complicated, it is usually recommended to use the {@link CKEDITOR.plugins.textMatch#match}
\t * function.
\t *
\t * Example:
\t *
\t * ```javascript
\t *\tfunction textTestCallback( range ) {
\t *\t\t// You do not want to autocomplete a non-empty selection.
\t *\t\tif ( !range.collapsed ) {
\t *\t\t\treturn null;
\t *\t\t}
\t *
\t *\t\t// Use the text match plugin which does the tricky job of doing
\t *\t\t// a text search in the DOM. The matchCallback function should return
\t *\t\t// a matching fragment of the text.
\t *\t\treturn CKEDITOR.plugins.textMatch.match( range, matchCallback );
\t *\t}
\t *
\t *\tfunction matchCallback( text, offset ) {
\t *\t\t// Get the text before the caret.
\t *\t\tvar left = text.slice( 0, offset ),
\t *\t\t\t// Will look for an '@' character followed by word characters.
\t *\t\t\tmatch = left.match( /@\\w*\$/ );
\t *
\t *\t\tif ( !match ) {
\t *\t\t\treturn null;
\t *\t\t}
\t *\t\treturn { start: match.index, end: offset };
\t *\t}
\t *
\t *\t// Initialize the text watcher.
\t *\tvar textWatcher = new CKEDITOR.plugins.textWatcher( editor, textTestCallback );
\t *\t// Start listening.
\t *\ttextWatcher.attach();
\t *
\t *  // Handle text matching.
\t *\ttextWatcher.on( 'matched', function( evt ) {
\t *\t\tautocomplete.setQuery( evt.data.text );
\t *\t} );
\t * ```
\t *
\t * @class CKEDITOR.plugins.textWatcher
\t * @since 4.10.0
\t * @mixins CKEDITOR.event
\t * @constructor Creates the text watcher instance.
\t * @param {CKEDITOR.editor} editor The editor instance to watch in.
\t * @param {Function} callback Callback executed when the text watcher
\t * thinks that something might have changed.
\t * @param {Number} [throttle=0] Throttle interval, see {@link #throttle}.
\t * @param {CKEDITOR.dom.range} callback.range The range representing the caret position.
\t * @param {Object} [callback.return=null] Matching text data (`null` if nothing matches).
\t * @param {String} callback.return.text The matching text.
\t * @param {CKEDITOR.dom.range} callback.return.range A range in the DOM for the text that matches.
\t */
\tfunction TextWatcher( editor, callback, throttle ) {
\t\t/**
\t\t * The editor instance which the text watcher watches.
\t\t *
\t\t * @readonly
\t\t * @property {CKEDITOR.editor}
\t\t */
\t\tthis.editor = editor;

\t\t/**
\t\t * The last matched text.
\t\t *
\t\t * @readonly
\t\t * @property {String}
\t\t */
\t\tthis.lastMatched = null;

\t\t/**
\t\t * Whether the next check should be ignored. See the {@link #consumeNext} method.
\t\t *
\t\t * @readonly
\t\t */
\t\tthis.ignoreNext = false;

\t\t/**
\t\t * The callback passed to the {@link CKEDITOR.plugins.textWatcher} constructor.
\t\t *
\t\t * @readonly
\t\t * @property {Function}
\t\t */
\t\tthis.callback = callback;

\t\t/**
\t\t * Keys that should be ignored by the {@link #check} method.
\t\t *
\t\t * @readonly
\t\t * @property {Number[]}
\t\t */
\t\tthis.ignoredKeys = [
\t\t\t16, // Shift
\t\t\t17, // Ctrl
\t\t\t18, // Alt
\t\t\t91, // Cmd
\t\t\t35, // End
\t\t\t36, // Home
\t\t\t37, // Left
\t\t\t38, // Up
\t\t\t39, // Right
\t\t\t40, // Down
\t\t\t33, // PageUp
\t\t\t34 // PageUp
\t\t];

\t\t/**
\t\t * Listeners registered by this text watcher.
\t\t *
\t\t * @private
\t\t */
\t\tthis._listeners = [];

\t\t/**
\t\t * Indicates throttle threshold mitigating text checks.
\t\t *
\t\t * Higher levels of the throttle threshold will create a delay for text watcher checks
\t\t * but also improve its performance.
\t\t *
\t\t * See the {@link CKEDITOR.tools#throttle throttle} feature for more information.
\t\t *
\t\t * @readonly
\t\t * @property {Number} [throttle=0]
\t\t */
\t\tthis.throttle = throttle || 0;

\t\t/**
\t\t * The {@link CKEDITOR.tools#throttle throttle buffer} used to mitigate text checks.
\t\t *
\t\t * @private
\t\t */
\t\tthis._buffer = CKEDITOR.tools.throttle( this.throttle, testTextMatch, this );

\t\t/**
\t\t * Event fired when the text is no longer matching.
\t\t *
\t\t * @event matched
\t\t * @param {Object} data The value returned by the {@link #callback}.
\t\t * @param {String} data.text
\t\t * @param {CKEDITOR.dom.range} data.range
\t\t */

\t\t/**
\t\t * Event fired when the text stops matching.
\t\t *
\t\t * @event unmatched
\t\t */

\t\tfunction testTextMatch( selectionRange ) {
\t\t\tvar matched = this.callback( selectionRange );

\t\t\tif ( matched ) {
\t\t\t\tif ( matched.text == this.lastMatched ) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tthis.lastMatched = matched.text;
\t\t\t\tthis.fire( 'matched', matched );
\t\t\t} else if ( this.lastMatched ) {
\t\t\t\tthis.unmatch();
\t\t\t}
\t\t}
\t}

\tTextWatcher.prototype = {
\t\t/**
\t\t * Attaches the text watcher to the {@link #editor}.
\t\t *
\t\t * @chainable
\t\t */
\t\tattach: function() {
\t\t\tvar editor = this.editor;

\t\t\tthis._listeners.push( editor.on( 'contentDom', onContentDom, this ) );
\t\t\tthis._listeners.push( editor.on( 'blur', unmatch, this ) );
\t\t\tthis._listeners.push( editor.on( 'beforeModeUnload', unmatch, this ) );
\t\t\tthis._listeners.push( editor.on( 'setData', unmatch, this ) );
\t\t\tthis._listeners.push( editor.on( 'afterCommandExec', unmatch, this ) );

\t\t\t// Attach if editor is already initialized.
\t\t\tif ( editor.editable() ) {
\t\t\t\tonContentDom.call( this );
\t\t\t}

\t\t\treturn this;

\t\t\tfunction onContentDom() {
\t\t\t\tvar editable = editor.editable();

\t\t\t\tthis._listeners.push( editable.attachListener( editable, 'keyup', check, this ) );
\t\t\t}

\t\t\t// CKEditor's event system has a limitation that one function (in this case this.check)
\t\t\t// cannot be used as listener for the same event more than once. Hence, wrapper function.
\t\t\tfunction check( evt ) {
\t\t\t\tthis.check( evt );
\t\t\t}

\t\t\tfunction unmatch() {
\t\t\t\tthis.unmatch();
\t\t\t}
\t\t},

\t\t/**
\t\t * Triggers a text check. Fires the {@link #matched} and {@link #unmatched} events.
\t\t * The {@link #matched} event will not be fired twice in a row for the same text
\t\t * unless the text watcher is {@link #unmatch reset}.
\t\t *
\t\t * @param {CKEDITOR.dom.event/CKEDITOR.eventInfo} [evt]
\t\t */
\t\tcheck: function( evt ) {
\t\t\tif ( this.ignoreNext ) {
\t\t\t\tthis.ignoreNext = false;
\t\t\t\treturn;
\t\t\t}

\t\t\t// Ignore control keys, so they don't trigger the check.
\t\t\tif ( evt && evt.name == 'keyup' && ( CKEDITOR.tools.array.indexOf( this.ignoredKeys, evt.data.getKey() ) != -1 ) ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tvar sel = this.editor.getSelection();
\t\t\tif ( !sel ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tvar selectionRange = sel.getRanges()[ 0 ];
\t\t\tif ( !selectionRange ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tthis._buffer.input( selectionRange );
\t\t},

\t\t/**
\t\t * Ignores the next {@link #check}.
\t\t *
\t\t * @chainable
\t\t */
\t\tconsumeNext: function() {
\t\t\tthis.ignoreNext = true;
\t\t\treturn this;
\t\t},

\t\t/**
\t\t * Resets the state and fires the {@link #unmatched} event.
\t\t *
\t\t * @chainable
\t\t */
\t\tunmatch: function() {
\t\t\tthis.lastMatched = null;
\t\t\tthis.fire( 'unmatched' );
\t\t\treturn this;
\t\t},

\t\t/**
\t\t * Destroys the text watcher instance. The DOM event listeners will be cleaned up.
\t\t */
\t\tdestroy: function() {
\t\t\tCKEDITOR.tools.array.forEach( this._listeners, function( obj ) {
\t\t\t\tobj.removeListener();
\t\t\t} );
\t\t\tthis._listeners = [];
\t\t}
\t};

\tCKEDITOR.event.implementOn( TextWatcher.prototype );

\tCKEDITOR.plugins.textWatcher = TextWatcher;

} )();
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/textwatcher/plugin.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/textwatcher/plugin.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/textwatcher/plugin.js");
    }
}
