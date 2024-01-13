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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/autocomplete/plugin.js */
class __TwigTemplate_d19dd4cec5580bd98b7de78abd280c04ea6611f29c67522b0a5417c63e2dd8db extends Template
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

\tCKEDITOR.plugins.add( 'autocomplete', {
\t\trequires: 'textwatcher',
\t\tonLoad: function() {
\t\t\tCKEDITOR.document.appendStyleSheet( this.path + 'skins/default.css' );
\t\t},
\t\tisSupportedEnvironment: function() {
\t\t\treturn !CKEDITOR.env.ie || CKEDITOR.env.version > 8;
\t\t}
\t} );

\t/**
\t * The main class implementing a generic [Autocomplete](https://ckeditor.com/cke4/addon/autocomplete) feature in the editor.
\t * It acts as a controller that works with the {@link CKEDITOR.plugins.autocomplete.model model} and
\t * {@link CKEDITOR.plugins.autocomplete.view view} classes.
\t *
\t * It is possible to maintain multiple autocomplete instances for a single editor at a time.
\t * In order to create an autocomplete instance use its {@link #constructor constructor}.
\t *
\t * @class CKEDITOR.plugins.autocomplete
\t * @since 4.10.0
\t * @constructor Creates a new instance of autocomplete and attaches it to the editor.
\t *
\t * In order to initialize the autocomplete feature it is enough to instantiate this class with
\t * two required callbacks:
\t *
\t * * {@link CKEDITOR.plugins.autocomplete.configDefinition#textTestCallback config.textTestCallback} &ndash; A function being called by
\t *  the {@link CKEDITOR.plugins.textWatcher text watcher} plugin, as new text is being inserted.
\t *  Its purpose is to determine whether a given range should be matched or not.
\t *  See {@link CKEDITOR.plugins.textWatcher#constructor} for more details.
\t *  There is also {@link CKEDITOR.plugins.textMatch#match} which is a handy helper for that purpose.
\t * * {@link CKEDITOR.plugins.autocomplete.configDefinition#dataCallback config.dataCallback} &ndash; A function that should return
\t *  (through its callback) suggestion data for the current query string.
\t *
\t * # Creating an autocomplete instance
\t *
\t * Depending on your use case, put this code in the {@link CKEDITOR.pluginDefinition#init} callback of your
\t * plugin or, for example, in the {@link CKEDITOR.editor#instanceReady} event listener. Ensure that you loaded the
\t * {@link CKEDITOR.plugins.textMatch Text Match} plugin.
\t *
\t * ```javascript
\t *\tvar itemsArray = [ { id: 1, name: '@Andrew' }, { id: 2, name: '@Kate' } ];
\t *
\t *\t// Called when the user types in the editor or moves the caret.
\t *\t// The range represents the caret position.
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
\t *\t// Returns the position of the matching text.
\t *\t// It matches with a word starting from the '@' character
\t *  // up to the caret position.
\t *\tfunction matchCallback( text, offset ) {
\t *\t\t\t// Get the text before the caret.
\t *\t\tvar left = text.slice( 0, offset ),
\t *\t\t\t// Will look for an '@' character followed by word characters.
\t *\t\t\tmatch = left.match( /@\\w*\$/ );
\t *
\t *\t\tif ( !match ) {
\t *\t\t\treturn null;
\t *\t\t}
\t *
\t *\t\treturn { start: match.index, end: offset };
\t *\t}
\t *
\t *\t// Returns (through its callback) the suggestions for the current query.
\t *\tfunction dataCallback( matchInfo, callback ) {
\t *\t\t// Simple search.
\t *\t\t// Filter the entire items array so only the items that start
\t *\t\t// with the query remain.
\t *\t\tvar suggestions = itemsArray.filter( function( item ) {
\t *\t\t\treturn item.name.toLowerCase().indexOf( matchInfo.query.toLowerCase() ) == 0;
\t *\t\t} );
\t *
\t *\t\t// Note: The callback function can also be executed asynchronously
\t *\t\t// so dataCallback can do XHR requests or use any other asynchronous API.
\t *\t\tcallback( suggestions );
\t *\t}
\t *
\t *\t// Finally, instantiate the autocomplete class.
\t *\tnew CKEDITOR.plugins.autocomplete( editor, {
\t *\t\ttextTestCallback: textTestCallback,
\t *\t\tdataCallback: dataCallback
\t *\t} );
\t * ```
\t *
\t * # Changing the behavior of the autocomplete class by subclassing it
\t *
\t * This plugin will expose a `CKEDITOR.plugins.customAutocomplete` class which uses
\t * a custom view that positions the panel relative to the {@link CKEDITOR.editor#container}.
\t *
\t * ```javascript
\t *\tCKEDITOR.plugins.add( 'customautocomplete', {
\t *\t\trequires: 'autocomplete',
\t *
\t *\t\tonLoad: function() {
\t *\t\t\tvar View = CKEDITOR.plugins.autocomplete.view,
\t *\t\t\t\tAutocomplete = CKEDITOR.plugins.autocomplete;
\t *
\t *\t\t\tfunction CustomView( editor ) {
\t *\t\t\t\t// Call the parent class constructor.
\t *\t\t\t\tView.call( this, editor );
\t *\t\t\t}
\t *\t\t\t// Inherit the view methods.
\t *\t\t\tCustomView.prototype = CKEDITOR.tools.prototypedCopy( View.prototype );
\t *
\t *\t\t\t// Change the positioning of the panel, so it is stretched
\t *\t\t\t// to 100% of the editor container width and is positioned
\t *\t\t\t// relative to the editor container.
\t *\t\t\tCustomView.prototype.updatePosition = function( range ) {
\t *\t\t\t\tvar caretRect = this.getViewPosition( range ),
\t *\t\t\t\t\tcontainer = this.editor.container;
\t *
\t *\t\t\t\tthis.setPosition( {
\t *\t\t\t\t\t// Position the panel relative to the editor container.
\t *\t\t\t\t\tleft: container.\$.offsetLeft,
\t *\t\t\t\t\ttop: caretRect.top,
\t *\t\t\t\t\tbottom: caretRect.bottom
\t *\t\t\t\t} );
\t *\t\t\t\t// Stretch the panel to 100% of the editor container width.
\t *\t\t\t\tthis.element.setStyle( 'width', container.getSize( 'width' ) + 'px' );
\t *\t\t\t};
\t *
\t *\t\t\tfunction CustomAutocomplete( editor, configDefinition ) {
\t *\t\t\t\t// Call the parent class constructor.
\t *\t\t\t\tAutocomplete.call( this, editor, configDefinition );
\t *\t\t\t}
\t *\t\t\t// Inherit the autocomplete methods.
\t *\t\t\tCustomAutocomplete.prototype = CKEDITOR.tools.prototypedCopy( Autocomplete.prototype );
\t *
\t *\t\t\tCustomAutocomplete.prototype.getView = function() {
\t *\t\t\t\treturn new CustomView( this.editor );
\t *\t\t\t}
\t *
\t *\t\t\t// Expose the custom autocomplete so it can be used later.
\t *\t\t\tCKEDITOR.plugins.customAutocomplete = CustomAutocomplete;
\t *\t\t}
\t *\t} );
\t * ```
\t * @param {CKEDITOR.editor} editor The editor to watch.
\t * @param {CKEDITOR.plugins.autocomplete.configDefinition} config Configuration object for this autocomplete instance.
\t */
\tfunction Autocomplete( editor, config ) {
\t\tvar configKeystrokes = editor.config.autocomplete_commitKeystrokes || CKEDITOR.config.autocomplete_commitKeystrokes;

\t\t/**
\t\t * The editor instance that autocomplete is attached to.
\t\t *
\t\t * @readonly
\t\t * @property {CKEDITOR.editor}
\t\t */
\t\tthis.editor = editor;

\t\t/**
\t\t * Indicates throttle threshold expressed in milliseconds, reducing text checks frequency.
\t\t *
\t\t * @property {Number} [throttle=20]
\t\t */
\t\tthis.throttle = config.throttle !== undefined ? config.throttle : 20;

\t\t/**
\t\t * The autocomplete view instance.
\t\t *
\t\t * @readonly
\t\t * @property {CKEDITOR.plugins.autocomplete.view}
\t\t */
\t\tthis.view = this.getView();

\t\t/**
\t\t * The autocomplete model instance.
\t\t *
\t\t * @readonly
\t\t * @property {CKEDITOR.plugins.autocomplete.model}
\t\t */
\t\tthis.model = this.getModel( config.dataCallback );
\t\tthis.model.itemsLimit = config.itemsLimit;

\t\t/**
\t\t * The autocomplete text watcher instance.
\t\t *
\t\t * @readonly
\t\t * @property {CKEDITOR.plugins.textWatcher}
\t\t */
\t\tthis.textWatcher = this.getTextWatcher( config.textTestCallback );

\t\t/**
\t\t * The autocomplete keystrokes used to finish autocompletion with the selected view item.
\t\t * The property is using the {@link CKEDITOR.config#autocomplete_commitKeystrokes} configuration option as default keystrokes.
\t\t * You can change this property to set individual keystrokes for the plugin instance.
\t\t *
\t\t * @property {Number[]}
\t\t * @readonly
\t\t */
\t\tthis.commitKeystrokes = CKEDITOR.tools.array.isArray( configKeystrokes ) ? configKeystrokes.slice() : [ configKeystrokes ];

\t\t/**
\t\t * Listeners registered by this autocomplete instance.
\t\t *
\t\t * @private
\t\t */
\t\tthis._listeners = [];

\t\t/**
\t\t * Template of markup to be inserted as the autocomplete item gets committed.
\t\t *
\t\t * You can use {@link CKEDITOR.plugins.autocomplete.model.item item} properties to customize the template.
\t\t *
\t\t * ```javascript
\t\t * var outputTemplate = `<a href=\"/tracker/{ticket}\">#{ticket} ({name})</a>`;
\t\t * ```
\t\t *
\t\t * @readonly
\t\t * @property {CKEDITOR.template} [outputTemplate=null]
\t\t */
\t\tthis.outputTemplate = config.outputTemplate !== undefined ? new CKEDITOR.template( config.outputTemplate ) : null;

\t\tif ( config.itemTemplate ) {
\t\t\tthis.view.itemTemplate = new CKEDITOR.template( config.itemTemplate );
\t\t}

\t\t// Attach autocomplete when editor instance is ready (#2114).
\t\tif ( this.editor.status === 'ready' ) {
\t\t\tthis.attach();
\t\t} else {
\t\t\tthis.editor.on( 'instanceReady', function() {
\t\t\t\tthis.attach();
\t\t\t}, this );
\t\t}

\t\teditor.on( 'destroy', function() {
\t\t\tthis.destroy();
\t\t}, this );
\t}

\tAutocomplete.prototype = {
\t\t/**
\t\t * Attaches the autocomplete to the {@link #editor}.
\t\t *
\t\t * * The view is appended to the DOM and the listeners are attached.
\t\t * * The {@link #textWatcher text watcher} is attached to the editor.
\t\t * * The listeners on the {@link #model} and {@link #view} events are added.
\t\t */
\t\tattach: function() {
\t\t\tvar editor = this.editor,
\t\t\t\twin = CKEDITOR.document.getWindow(),
\t\t\t\teditable = editor.editable(),
\t\t\t\teditorScrollableElement = editable.isInline() ? editable : editable.getDocument();

\t\t\t// iOS classic editor listens on frame parent element for editor `scroll` event (#1910).
\t\t\tif ( CKEDITOR.env.iOS && !editable.isInline() ) {
\t\t\t\teditorScrollableElement = iOSViewportElement( editor );
\t\t\t}

\t\t\tthis.view.append();
\t\t\tthis.view.attach();
\t\t\tthis.textWatcher.attach();

\t\t\tthis._listeners.push( this.textWatcher.on( 'matched', this.onTextMatched, this ) );
\t\t\tthis._listeners.push( this.textWatcher.on( 'unmatched', this.onTextUnmatched, this ) );
\t\t\tthis._listeners.push( this.model.on( 'change-data', this.modelChangeListener, this ) );
\t\t\tthis._listeners.push( this.model.on( 'change-selectedItemId', this.onSelectedItemId, this ) );
\t\t\tthis._listeners.push( this.view.on( 'change-selectedItemId', this.onSelectedItemId, this ) );
\t\t\tthis._listeners.push( this.view.on( 'click-item', this.onItemClick, this ) );

\t\t\t// Update view position on viewport change.
\t\t\t// Note: CKEditor's event system has a limitation that one function
\t\t\t// cannot be used as listener for the same event more than once. Hence, wrapper functions.
\t\t\tthis._listeners.push( win.on( 'scroll', function() {
\t\t\t\tthis.viewRepositionListener();
\t\t\t}, this ) );
\t\t\tthis._listeners.push( editorScrollableElement.on( 'scroll', function() {
\t\t\t\tthis.viewRepositionListener();
\t\t\t}, this ) );

\t\t\t// Don't let browser to focus dropdown element (#2107).
\t\t\tthis._listeners.push( this.view.element.on( 'mousedown', function( e ) {
\t\t\t\te.data.preventDefault();
\t\t\t}, null, null, 9999 ) );

\t\t\t// Register keybindings if editor is already initialized.
\t\t\tif ( editable ) {
\t\t\t\tthis.registerPanelNavigation();
\t\t\t}

\t\t\t// Note: CKEditor's event system has a limitation that one function
\t\t\t// cannot be used as listener for the same event more than once. Hence, wrapper function.
\t\t\t// (#4107)
\t\t\teditor.on( 'contentDom', function() {
\t\t\t\tthis.registerPanelNavigation();
\t\t\t}, this );
\t\t},

\t\tregisterPanelNavigation: function() {
\t\t\tvar editable = this.editor.editable();

\t\t\t// Priority 5 to get before the enterkey.
\t\t\t// Note: CKEditor's event system has a limitation that one function (in this case this.onKeyDown)
\t\t\t// cannot be used as listener for the same event more than once. Hence, wrapper function.
\t\t\tthis._listeners.push( editable.attachListener( editable, 'keydown', function( evt ) {
\t\t\t\tthis.onKeyDown( evt );
\t\t\t}, this, null, 5 ) );
\t\t},

\t\t/**
\t\t * Closes the view and sets its {@link CKEDITOR.plugins.autocomplete.model#isActive state} to inactive.
\t\t */
\t\tclose: function() {
\t\t\tthis.model.setActive( false );
\t\t\tthis.view.close();
\t\t},

\t\t/**
\t\t * Commits the currently chosen or given item. HTML is generated for this item using the
\t\t * {@link #getHtmlToInsert} method and then it is inserted into the editor. The item is inserted
\t\t * into the {@link CKEDITOR.plugins.autocomplete.model#range query's range}, so the query text is
\t\t * replaced by the inserted HTML.
\t\t *
\t\t * @param {Number/String} [itemId] If given, then the specified item will be inserted into the editor
\t\t * instead of the currently chosen one.
\t\t */
\t\tcommit: function( itemId ) {
\t\t\tif ( !this.model.isActive ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tthis.close();

\t\t\tif ( itemId == null ) {
\t\t\t\titemId = this.model.selectedItemId;

\t\t\t\t// If non item is selected abort commit.
\t\t\t\tif ( itemId == null ) {
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t}

\t\t\tvar item = this.model.getItemById( itemId ),
\t\t\t\teditor = this.editor;

\t\t\teditor.fire( 'saveSnapshot' );
\t\t\teditor.getSelection().selectRanges( [ this.model.range ] );
\t\t\teditor.insertHtml( this.getHtmlToInsert( item ), 'text' );
\t\t\teditor.fire( 'saveSnapshot' );
\t\t},

\t\t/**
\t\t * Destroys the autocomplete instance.
\t\t * View element and event listeners will be removed from the DOM.
\t\t */
\t\tdestroy: function() {
\t\t\tCKEDITOR.tools.array.forEach( this._listeners, function( obj ) {
\t\t\t\tobj.removeListener();
\t\t\t} );

\t\t\tthis._listeners = [];

\t\t\tthis.view.element && this.view.element.remove();
\t\t},

\t\t/**
\t\t * Returns HTML that should be inserted into the editor when the item is committed.
\t\t *
\t\t * See also the {@link #commit} method.
\t\t *
\t\t * @param {CKEDITOR.plugins.autocomplete.model.item} item
\t\t * @returns {String} The HTML to insert.
\t\t */
\t\tgetHtmlToInsert: function( item ) {
\t\t\tvar encodedItem = encodeItem( item );
\t\t\treturn this.outputTemplate ? this.outputTemplate.output( encodedItem ) : encodedItem.name;
\t\t},

\t\t/**
\t\t * Creates and returns the model instance. This method is used when
\t\t * initializing the autocomplete and can be overwritten in order to
\t\t * return an instance of a different class than the default model.
\t\t *
\t\t * @param {Function} dataCallback See {@link CKEDITOR.plugins.autocomplete.configDefinition#dataCallback configDefinition.dataCallback}.
\t\t * @returns {CKEDITOR.plugins.autocomplete.model} The model instance.
\t\t */
\t\tgetModel: function( dataCallback ) {
\t\t\tvar that = this;

\t\t\treturn new Model( function( matchInfo, callback ) {
\t\t\t\treturn dataCallback.call( this, CKEDITOR.tools.extend( {
\t\t\t\t\t// Make sure autocomplete instance is available in the callback (#2108).
\t\t\t\t\tautocomplete: that
\t\t\t\t}, matchInfo ), callback );
\t\t\t} );
\t\t},

\t\t/**
\t\t * Creates and returns the text watcher instance. This method is used while
\t\t * initializing the autocomplete and can be overwritten in order to
\t\t * return an instance of a different class than the default text watcher.
\t\t *
\t\t * @param {Function} textTestCallback See the {@link CKEDITOR.plugins.autocomplete} arguments.
\t\t * @returns {CKEDITOR.plugins.textWatcher} The text watcher instance.
\t\t */
\t\tgetTextWatcher: function( textTestCallback ) {
\t\t\treturn new CKEDITOR.plugins.textWatcher( this.editor, textTestCallback, this.throttle );
\t\t},

\t\t/**
\t\t * Creates and returns the view instance. This method is used while
\t\t * initializing the autocomplete and can be overwritten in order to
\t\t * return an instance of a different class than the default view.
\t\t *
\t\t * @returns {CKEDITOR.plugins.autocomplete.view} The view instance.
\t\t */
\t\tgetView: function() {
\t\t\treturn new View( this.editor );
\t\t},

\t\t/**
\t\t * Opens the panel if {@link CKEDITOR.plugins.autocomplete.model#hasData there is any data available}.
\t\t */
\t\topen: function() {
\t\t\tif ( this.model.hasData() ) {
\t\t\t\tthis.model.setActive( true );
\t\t\t\tthis.view.open();
\t\t\t\tthis.model.selectFirst();
\t\t\t\tthis.view.updatePosition( this.model.range );
\t\t\t}
\t\t},

\t\t// LISTENERS ------------------

\t\t/**
\t\t * The function that should be called when the view has to be repositioned, e.g on scroll.
\t\t *
\t\t * @private
\t\t */
\t\tviewRepositionListener: function() {
\t\t\tif ( this.model.isActive ) {
\t\t\t\tthis.view.updatePosition( this.model.range );
\t\t\t}
\t\t},

\t\t/**
\t\t * The function that should be called once the model data has changed.
\t\t *
\t\t * @param {CKEDITOR.eventInfo} evt
\t\t * @private
\t\t */
\t\tmodelChangeListener: function( evt ) {
\t\t\tif ( this.model.hasData() ) {
\t\t\t\tthis.view.updateItems( evt.data );
\t\t\t\tthis.open();
\t\t\t} else {
\t\t\t\tthis.close();
\t\t\t}
\t\t},

\t\t/**
\t\t * The function that should be called once a view item was clicked.
\t\t *
\t\t * @param {CKEDITOR.eventInfo} evt
\t\t * @private
\t\t */
\t\tonItemClick: function( evt ) {
\t\t\tthis.commit( evt.data );
\t\t},

\t\t/**
\t\t * The function that should be called on every `keydown` event occurred within the {@link CKEDITOR.editable editable} element.
\t\t *
\t\t * @param {CKEDITOR.dom.event} evt
\t\t * @private
\t\t */
\t\tonKeyDown: function( evt ) {
\t\t\tif ( !this.model.isActive ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tvar keyCode = evt.data.getKey(),
\t\t\t\thandled = false;

\t\t\t// Esc key.
\t\t\tif ( keyCode == 27 ) {
\t\t\t\tthis.close();
\t\t\t\tthis.textWatcher.unmatch();
\t\t\t\thandled = true;
\t\t\t// Down Arrow.
\t\t\t} else if ( keyCode == 40 ) {
\t\t\t\tthis.model.selectNext();
\t\t\t\thandled = true;
\t\t\t// Up Arrow.
\t\t\t} else if ( keyCode == 38 ) {
\t\t\t\tthis.model.selectPrevious();
\t\t\t\thandled = true;
\t\t\t// Completion keys.
\t\t\t} else if ( CKEDITOR.tools.indexOf( this.commitKeystrokes, keyCode ) != -1 ) {
\t\t\t\tthis.commit();
\t\t\t\tthis.textWatcher.unmatch();
\t\t\t\thandled = true;
\t\t\t}

\t\t\tif ( handled ) {
\t\t\t\tevt.cancel();
\t\t\t\tevt.data.preventDefault();
\t\t\t\tthis.textWatcher.consumeNext();
\t\t\t}
\t\t},

\t\t/**
\t\t * The function that should be called once an item was selected.
\t\t *
\t\t * @param {CKEDITOR.eventInfo} evt
\t\t * @private
\t\t */
\t\tonSelectedItemId: function( evt ) {
\t\t\tthis.model.setItem( evt.data );
\t\t\tthis.view.selectItem( evt.data );
\t\t},

\t\t/**
\t\t * The function that should be called once a text was matched by the {@link CKEDITOR.plugins.textWatcher text watcher}
\t\t * component.
\t\t *
\t\t * @param {CKEDITOR.eventInfo} evt
\t\t * @private
\t\t */
\t\tonTextMatched: function( evt ) {
\t\t\tthis.model.setActive( false );
\t\t\tthis.model.setQuery( evt.data.text, evt.data.range );
\t\t},

\t\t/**
\t\t * The function that should be called once a text was unmatched by the {@link CKEDITOR.plugins.textWatcher text watcher}
\t\t * component.
\t\t *
\t\t * @param {CKEDITOR.eventInfo} evt
\t\t * @private
\t\t */
\t\tonTextUnmatched: function() {
\t\t\t// Remove query and request ID to avoid opening view for invalid callback (#1984).
\t\t\tthis.model.query = null;
\t\t\tthis.model.lastRequestId = null;

\t\t\tthis.close();
\t\t}
\t};

\t/**
\t * Class representing the autocomplete view.
\t *
\t * In order to use a different view, implement a new view class and override
\t * the {@link CKEDITOR.plugins.autocomplete#getView} method.
\t *
\t * ```javascript
\t *\tmyAutocomplete.prototype.getView = function() {
\t *\t\treturn new myView( this.editor );
\t *\t};
\t * ```
\t *
\t * You can also modify this autocomplete instance on the fly.
\t *
\t * ```javascript
\t *\tmyAutocomplete.prototype.getView = function() {
\t *\t\t// Call the original getView method.
\t *\t\tvar view = CKEDITOR.plugins.autocomplete.prototype.getView.call( this );
\t *
\t *\t\t// Override one property.
\t *\t\tview.itemTemplate = new CKEDITOR.template( '<li data-id={id}><img src=\"{iconSrc}\" alt=\"...\"> {name}</li>' );
\t *
\t *\t\treturn view;
\t *\t};
\t * ```
\t *
\t * **Note:** This class is marked as private, which means that its API might be subject to change in order to
\t * provide further enhancements.
\t *
\t * @class CKEDITOR.plugins.autocomplete.view
\t * @since 4.10.0
\t * @private
\t * @mixins CKEDITOR.event
\t * @constructor Creates the autocomplete view instance.
\t * @param {CKEDITOR.editor} editor The editor instance.
\t */
\tfunction View( editor ) {
\t\t/**
\t\t * The panel's item template used to render matches in the dropdown.
\t\t *
\t\t * You can use {@link CKEDITOR.plugins.autocomplete.model#data data item} properties to customize the template.
\t\t *
\t\t * A minimal template must be wrapped with a HTML `li` element containing the `data-id=\"{id}\"` attribute.
\t\t *
\t\t * ```javascript
\t\t * var itemTemplate = '<li data-id=\"{id}\"><img src=\"{iconSrc}\" alt=\"{name}\">{name}</li>';
\t\t * ```
\t\t *
\t\t * @readonly
\t\t * @property {CKEDITOR.template}
\t\t */
\t\tthis.itemTemplate = new CKEDITOR.template( '<li data-id=\"{id}\">{name}</li>' );

\t\t/**
\t\t * The editor instance.
\t\t *
\t\t * @readonly
\t\t * @property {CKEDITOR.editor}
\t\t */
\t\tthis.editor = editor;

\t\t/**
\t\t * The ID of the selected item.
\t\t *
\t\t * @readonly
\t\t * @property {Number/String} selectedItemId
\t\t */

\t\t/**
\t\t * The document to which the view is attached. It is set by the {@link #append} method.
\t\t *
\t\t * @readonly
\t\t * @property {CKEDITOR.dom.document} document
\t\t */

\t\t/**
\t\t * The view's main element. It is set by the {@link #append} method.
\t\t *
\t\t * @readonly
\t\t * @property {CKEDITOR.dom.element} element
\t\t */

\t\t/**
\t\t * Event fired when an item in the panel is clicked.
\t\t *
\t\t * @event click-item
\t\t * @param {String} The clicked item {@link CKEDITOR.plugins.autocomplete.model.item#id}. Note: the ID
\t\t * is stringified due to the way how it is stored in the DOM.
\t\t */

\t\t/**
\t\t * Event fired when the {@link #selectedItemId} property changes.
\t\t *
\t\t * @event change-selectedItemId
\t\t * @param {Number/String} data The new value.
\t\t */
\t}

\tView.prototype = {
\t\t/**
\t\t * Appends the {@link #element main element} to the DOM.
\t\t */
\t\tappend: function() {
\t\t\tthis.document = CKEDITOR.document;
\t\t\tthis.element = this.createElement();

\t\t\tthis.document.getBody().append( this.element );
\t\t},

\t\t/**
\t\t * Removes existing items and appends given items to the {@link #element}.
\t\t *
\t\t * @param {CKEDITOR.dom.documentFragment} itemsFragment The document fragment with item elements.
\t\t */
\t\tappendItems: function( itemsFragment ) {
\t\t\tthis.element.setHtml( '' );
\t\t\tthis.element.append( itemsFragment );
\t\t},

\t\t/**
\t\t * Attaches the view's listeners to the DOM elements.
\t\t */
\t\tattach: function() {
\t\t\tthis.element.on( 'click', function( evt ) {
\t\t\t\tvar target = evt.data.getTarget(),
\t\t\t\t\titemElement = target.getAscendant( this.isItemElement, true );

\t\t\t\tif ( itemElement ) {
\t\t\t\t\tthis.fire( 'click-item', itemElement.data( 'id' ) );
\t\t\t\t}
\t\t\t}, this );

\t\t\tthis.element.on( 'mouseover', function( evt ) {
\t\t\t\tvar target = evt.data.getTarget();

\t\t\t\tif ( this.element.contains( target ) ) {

\t\t\t\t\t// Find node containing data-id attribute inside target node tree (#2187).
\t\t\t\t\ttarget = target.getAscendant( function( element ) {
\t\t\t\t\t\treturn element.hasAttribute( 'data-id' );
\t\t\t\t\t}, true );

\t\t\t\t\tif ( !target ) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\tvar itemId = target.data( 'id' );

\t\t\t\t\tthis.fire( 'change-selectedItemId', itemId );
\t\t\t\t}

\t\t\t}, this );
\t\t},

\t\t/**
\t\t * Closes the panel.
\t\t */
\t\tclose: function() {
\t\t\tthis.element.removeClass( 'cke_autocomplete_opened' );
\t\t},

\t\t/**
\t\t * Creates and returns the view's main element.
\t\t *
\t\t * @private
\t\t * @returns {CKEDITOR.dom.element}
\t\t */
\t\tcreateElement: function() {
\t\t\tvar el = new CKEDITOR.dom.element( 'ul', this.document );

\t\t\tel.addClass( 'cke_autocomplete_panel' );
\t\t\t// Below float panels and context menu, but above maximized editor (-5).
\t\t\tel.setStyle( 'z-index', this.editor.config.baseFloatZIndex - 3 );

\t\t\treturn el;
\t\t},

\t\t/**
\t\t * Creates the item element based on the {@link #itemTemplate}.
\t\t *
\t\t * @param {CKEDITOR.plugins.autocomplete.model.item} item The item for which an element will be created.
\t\t * @returns {CKEDITOR.dom.element}
\t\t */
\t\tcreateItem: function( item ) {
\t\t\tvar encodedItem = encodeItem( item );
\t\t\treturn CKEDITOR.dom.element.createFromHtml( this.itemTemplate.output( encodedItem ), this.document );
\t\t},

\t\t/**
\t\t * Returns the view position based on a given `range`.
\t\t *
\t\t * Indicates the start position of the autocomplete dropdown.
\t\t * The value returned by this function is passed to the {@link #setPosition} method
\t\t * by the {@link #updatePosition} method.
\t\t *
\t\t * @param {CKEDITOR.dom.range} range The range of the text match.
\t\t * @returns {Object} Represents the position of the caret. The value is relative to the panel's offset parent.
\t\t * @returns {Number} rect.left
\t\t * @returns {Number} rect.top
\t\t * @returns {Number} rect.bottom
\t\t */
\t\tgetViewPosition: function( range ) {
\t\t\t// Use the last rect so the view will be
\t\t\t// correctly positioned with a word split into few lines.
\t\t\tvar rects = range.getClientRects(),
\t\t\t\tviewPositionRect = rects[ rects.length - 1 ],
\t\t\t\toffset,
\t\t\t\teditable = this.editor.editable();

\t\t\tif ( editable.isInline() ) {
\t\t\t\toffset = CKEDITOR.document.getWindow().getScrollPosition();
\t\t\t} else {
\t\t\t\toffset = editable.getParent().getDocumentPosition( CKEDITOR.document );
\t\t\t}

\t\t\t// Consider that offset host might be repositioned on its own.
\t\t\t// Similar to #1048. See https://github.com/ckeditor/ckeditor4/pull/1732#discussion_r182790235.
\t\t\tvar hostElement = CKEDITOR.document.getBody();
\t\t\tif ( hostElement.getComputedStyle( 'position' ) === 'static' ) {
\t\t\t\thostElement = hostElement.getParent();
\t\t\t}

\t\t\tvar offsetCorrection = hostElement.getDocumentPosition();

\t\t\toffset.x -= offsetCorrection.x;
\t\t\toffset.y -= offsetCorrection.y;

\t\t\treturn {
\t\t\t\ttop: ( viewPositionRect.top + offset.y ),
\t\t\t\tbottom: ( viewPositionRect.top + viewPositionRect.height + offset.y ),
\t\t\t\tleft: ( viewPositionRect.left + offset.x )
\t\t\t};
\t\t},

\t\t/**
\t\t * Gets the item element by the item ID.
\t\t *
\t\t * @param {Number/String} itemId
\t\t * @returns {CKEDITOR.dom.element} The item element.
\t\t */
\t\tgetItemById: function( itemId ) {
\t\t\treturn this.element.findOne( 'li[data-id=\"' + itemId + '\"]' );
\t\t},

\t\t/**
\t\t * Checks whether a given node is the item element.
\t\t *
\t\t * @param {CKEDITOR.dom.node} node
\t\t * @returns {Boolean}
\t\t */
\t\tisItemElement: function( node ) {
\t\t\treturn node.type == CKEDITOR.NODE_ELEMENT &&
\t\t\t\tBoolean( node.data( 'id' ) );
\t\t},

\t\t/**
\t\t * Opens the panel.
\t\t */
\t\topen: function() {
\t\t\tthis.element.addClass( 'cke_autocomplete_opened' );
\t\t},

\t\t/**
\t\t * Selects the item in the panel and scrolls the list to show it if needed.
\t\t * The {@link #selectedItemId currently selected item} is deselected first.
\t\t *
\t\t * @param {Number/String} itemId The ID of the item that should be selected.
\t\t */
\t\tselectItem: function( itemId ) {
\t\t\tif ( this.selectedItemId != null ) {
\t\t\t\tthis.getItemById( this.selectedItemId ).removeClass( 'cke_autocomplete_selected' );
\t\t\t}

\t\t\tvar itemElement = this.getItemById( itemId );
\t\t\titemElement.addClass( 'cke_autocomplete_selected' );
\t\t\tthis.selectedItemId = itemId;

\t\t\tthis.scrollElementTo( itemElement );
\t\t},

\t\t/**
\t\t * Sets the position of the panel. This method only performs the check
\t\t * for the available space below and above the specified `rect` and
\t\t * positions the panel in the best place.
\t\t *
\t\t * This method is used by the {@link #updatePosition} method which
\t\t * controls how the panel should be positioned on the screen, for example
\t\t * based on the caret position and/or the editor position.
\t\t *
\t\t * @param {Object} rect Represents the position of a vertical (e.g. a caret) line relative to which
\t\t * the panel should be positioned.
\t\t * @param {Number} rect.left The position relative to the panel's offset parent in pixels.
\t\t * For example, the position of the caret.
\t\t * @param {Number} rect.top The position relative to the panel's offset parent in pixels.
\t\t * For example, the position of the upper end of the caret.
\t\t * @param {Number} rect.bottom The position relative to the panel's offset parent in pixels.
\t\t * For example, the position of the bottom end of the caret.
\t\t */
\t\tsetPosition: function( rect ) {
\t\t\tvar documentWindow = this.element.getWindow(),
\t\t\t\twindowRect = documentWindow.getViewPaneSize(),
\t\t\t\ttop = getVerticalPosition( {
\t\t\t\t\teditorViewportRect: getEditorViewportRect( this.editor ),
\t\t\t\t\tcaretRect: rect,
\t\t\t\t\tviewHeight: this.element.getSize( 'height' ),
\t\t\t\t\tscrollPositionY: documentWindow.getScrollPosition().y,
\t\t\t\t\twindowHeight: windowRect.height
\t\t\t\t} ),
\t\t\t\tleft = getHorizontalPosition( {
\t\t\t\t\tleftPosition: rect.left,
\t\t\t\t\tviewWidth: this.element.getSize( 'width' ),
\t\t\t\t\twindowWidth: windowRect.width
\t\t\t\t} );

\t\t\tthis.element.setStyles( {
\t\t\t\tleft: left + 'px',
\t\t\t\ttop: top + 'px'
\t\t\t} );

\t\t\tfunction getVerticalPosition( options ) {
\t\t\t\tvar editorViewportRect = options.editorViewportRect,
\t\t\t\t\tcaretRect = options.caretRect,
\t\t\t\t\tviewHeight = options.viewHeight,
\t\t\t\t\tscrollPositionY = options.scrollPositionY,
\t\t\t\t\twindowHeight = options.windowHeight;

\t\t\t\t// If the caret position is below the view - keep it at the bottom edge.
\t\t\t\t// +---------------------------------------------+
\t\t\t\t// |       editor viewport                       |
\t\t\t\t// |                                             |
\t\t\t\t// |     +--------------+                        |
\t\t\t\t// |     |              |                        |
\t\t\t\t// |     |     view     |                        |
\t\t\t\t// |     |              |                        |
\t\t\t\t// +-----+==============+------------------------+
\t\t\t\t// |                                             |
\t\t\t\t// |     █ - caret position                      |
\t\t\t\t// |                                             |
\t\t\t\t// +---------------------------------------------+
\t\t\t\tif ( editorViewportRect.bottom < caretRect.bottom ) {
\t\t\t\t\treturn Math.min( caretRect.top, editorViewportRect.bottom ) - viewHeight;
\t\t\t\t}

\t\t\t\t// If the view doesn't fit below the caret position and fits above, set it there.
\t\t\t\t// This means that the position below the caret is preferred.
\t\t\t\t// +---------------------------------------------+
\t\t\t\t// |                                             |
\t\t\t\t// |       editor viewport                       |
\t\t\t\t// |     +--------------+                        |
\t\t\t\t// |     |              |                        |
\t\t\t\t// |     |     view     |                        |
\t\t\t\t// |     |              |                        |
\t\t\t\t// |     +--------------+                        |
\t\t\t\t// |     █ - caret position                      |
\t\t\t\t// |                                             |
\t\t\t\t// |                                             |
\t\t\t\t// +---------------------------------------------+
\t\t\t\t// How much space is there for the view above and below the specified rect.
\t\t\t\tvar spaceAbove = caretRect.top - editorViewportRect.top,
\t\t\t\t\tspaceBelow = editorViewportRect.bottom - caretRect.bottom,
\t\t\t\t\tviewExceedsTopViewport = ( caretRect.top - viewHeight ) < scrollPositionY;

\t\t\t\tif ( viewHeight > spaceBelow && viewHeight < spaceAbove && !viewExceedsTopViewport ) {
\t\t\t\t\treturn caretRect.top - viewHeight;
\t\t\t\t}

\t\t\t\t// If the caret position is above the view - keep it at the top edge.
\t\t\t\t// +---------------------------------------------+
\t\t\t\t// |                                             |
\t\t\t\t// |     █ - caret position                      |
\t\t\t\t// |                                             |
\t\t\t\t// +-----+==============+------------------------+
\t\t\t\t// |     |              |                        |
\t\t\t\t// |     |     view     |                        |
\t\t\t\t// |     |              |                        |
\t\t\t\t// |     +--------------+                        |
\t\t\t\t// |                                             |
\t\t\t\t// |       editor viewport                       |
\t\t\t\t// +---------------------------------------------+
\t\t\t\tif ( editorViewportRect.top > caretRect.top ) {
\t\t\t\t\treturn Math.max( caretRect.bottom, editorViewportRect.top );
\t\t\t\t}

\t\t\t\t// (#3582)
\t\t\t\t// If the view goes beyond bottom window border - reverse view position, even if it fits editor viewport.
\t\t\t\t// +---------------------------------------------+
\t\t\t\t// |               editor viewport               |
\t\t\t\t// |                                             |
\t\t\t\t// |                                             |
\t\t\t\t// |                  +--------------+           |
\t\t\t\t// |                  |     view     |           |
\t\t\t\t// |                  +--------------+           |
\t\t\t\t// | caret position - █                          |
\t\t\t\t// |                                             |
\t\t\t\t// =============================================== - bottom window border
\t\t\t\t// |                                             |
\t\t\t\t// |                                             |
\t\t\t\t// +---------------------------------------------+
\t\t\t\tvar viewExceedsBottomViewport = ( caretRect.bottom + viewHeight ) > ( windowHeight + scrollPositionY );

\t\t\t\tif ( !( viewHeight > spaceBelow && viewHeight < spaceAbove ) && viewExceedsBottomViewport ) {
\t\t\t\t\treturn caretRect.top - viewHeight;
\t\t\t\t}

\t\t\t\t// As a default, keep the view inside the editor viewport.
\t\t\t\t// +---------------------------------------------+
\t\t\t\t// |       editor viewport                       |
\t\t\t\t// |                                             |
\t\t\t\t// |                                             |
\t\t\t\t// |                                             |
\t\t\t\t// |     █ - caret position                      |
\t\t\t\t// |     +--------------+                        |
\t\t\t\t// |     |     view     |                        |
\t\t\t\t// |     +--------------+                        |
\t\t\t\t// |                                             |
\t\t\t\t// |                                             |
\t\t\t\t// +---------------------------------------------+
\t\t\t\treturn Math.min( editorViewportRect.bottom, caretRect.bottom );
\t\t\t}

\t\t\tfunction getHorizontalPosition( options ) {
\t\t\t\tvar caretLeftPosition = options.leftPosition,
\t\t\t\t\tviewWidth = options.viewWidth,
\t\t\t\t\twindowWidth = options.windowWidth;

\t\t\t\t// (#3582)
\t\t\t\t// If the view goes beyond right window border - stick it to the edge of the available viewport.
\t\t\t\t// +---------------------------------------------+   ||
\t\t\t\t// |               editor viewport               |   ||
\t\t\t\t// |                                             |   ||
\t\t\t\t// |                                             |   ||
\t\t\t\t// |                         caret position - █  |   || - right window border
\t\t\t\t// |                                 +--------------+||
\t\t\t\t// |                                 |              |||
\t\t\t\t// |                                 |     view     |||
\t\t\t\t// |                                 |              |||
\t\t\t\t// |                                 +--------------+||
\t\t\t\t// |                                             |   ||
\t\t\t\t// +---------------------------------------------+   ||
\t\t\t\tif ( caretLeftPosition + viewWidth > windowWidth ) {
\t\t\t\t\treturn windowWidth - viewWidth;
\t\t\t\t}

\t\t\t\t// Otherwise inherit the horizontal position from caret.
\t\t\t\treturn caretLeftPosition;
\t\t\t}

\t\t\t// Bounding rect where the view should fit (visible editor viewport).
\t\t\tfunction getEditorViewportRect( editor ) {
\t\t\t\tvar editable = editor.editable();

\t\t\t\t// iOS classic editor has different viewport element (#1910).
\t\t\t\tif ( CKEDITOR.env.iOS && !editable.isInline() ) {
\t\t\t\t\treturn iOSViewportElement( editor ).getClientRect( true );
\t\t\t\t} else {
\t\t\t\t\treturn editable.isInline() ? editable.getClientRect( true ) : editor.window.getFrame().getClientRect( true );
\t\t\t\t}
\t\t\t}
\t\t},

\t\t/**
\t\t * Scrolls the list so the item element is visible in it.
\t\t *
\t\t * @param {CKEDITOR.dom.element} itemElement
\t\t */
\t\tscrollElementTo: function( itemElement ) {
\t\t\titemElement.scrollIntoParent( this.element );
\t\t},

\t\t/**
\t\t * Updates the list of items in the panel.
\t\t *
\t\t * @param {CKEDITOR.plugins.autocomplete.model.item[]} items.
\t\t */
\t\tupdateItems: function( items ) {
\t\t\tvar i,
\t\t\t\tfrag = new CKEDITOR.dom.documentFragment( this.document );

\t\t\tfor ( i = 0; i < items.length; ++i ) {
\t\t\t\tfrag.append( this.createItem( items[ i ] ) );
\t\t\t}

\t\t\tthis.appendItems( frag );
\t\t\tthis.selectedItemId = null;
\t\t},

\t\t/**
\t\t * Updates the position of the panel.
\t\t *
\t\t * By default this method finds the position of the caret and uses
\t\t * {@link #setPosition} to move the panel to the best position close
\t\t * to the caret.
\t\t *
\t\t * @param {CKEDITOR.dom.range} range The range of the text match.
\t\t */
\t\tupdatePosition: function( range ) {
\t\t\tthis.setPosition( this.getViewPosition( range ) );
\t\t}
\t};

\tCKEDITOR.event.implementOn( View.prototype );

\t/**
\t * Class representing the autocomplete model.
\t *
\t * In case you want to modify the model behavior, check out the
\t * {@link CKEDITOR.plugins.autocomplete.view} documentation. It contains
\t * examples of how to easily override the default behavior.
\t *
\t * A model instance is created by the {@link CKEDITOR.plugins.autocomplete#getModel} method.
\t *
\t * **Note:** This class is marked as private, which means that its API might be subject to change in order to
\t * provide further enhancements.
\t *
\t * @class CKEDITOR.plugins.autocomplete.model
\t * @since 4.10.0
\t * @private
\t * @mixins CKEDITOR.event
\t * @constructor Creates the autocomplete model instance.
\t * @param {Function} dataCallback See {@link CKEDITOR.plugins.autocomplete} arguments.
\t */
\tfunction Model( dataCallback ) {
\t\t/**
\t\t * The callback executed by the model when requesting data.
\t\t * See {@link CKEDITOR.plugins.autocomplete} arguments.
\t\t *
\t\t * @readonly
\t\t * @property {Function}
\t\t */
\t\tthis.dataCallback = dataCallback;

\t\t/**
\t\t * Whether the autocomplete is active (i.e. can receive user input like click, key press).
\t\t * Should be modified by the {@link #setActive} method which fires the {@link #change-isActive} event.
\t\t *
\t\t * @readonly
\t\t */
\t\tthis.isActive = false;

\t\t/**
\t\t * Indicates the limit of items rendered in the dropdown.
\t\t *
\t\t * For falsy values like `0` or `null` all items will be rendered.
\t\t *
\t\t * @property {Number} [itemsLimit=0]
\t\t */
\t\tthis.itemsLimit = 0;

\t\t/**
\t\t * The ID of the last request for data. Used by the {@link #setQuery} method.
\t\t *
\t\t * @readonly
\t\t * @private
\t\t * @property {Number} lastRequestId
\t\t */

\t\t/**
\t\t * The query string set by the {@link #setQuery} method.
\t\t *
\t\t * The query string always has a corresponding {@link #range}.
\t\t *
\t\t * @readonly
\t\t * @property {String} query
\t\t */

\t\t/**
\t\t * The range in the DOM where the {@link #query} text is.
\t\t *
\t\t * The range always has a corresponding {@link #query}. Both can be set by the {@link #setQuery} method.
\t\t *
\t\t * @readonly
\t\t * @property {CKEDITOR.dom.range} range
\t\t */

\t\t/**
\t\t * The query results &mdash; the items to be displayed in the autocomplete panel.
\t\t *
\t\t * @readonly
\t\t * @property {CKEDITOR.plugins.autocomplete.model.item[]} data
\t\t */

\t\t/**
\t\t * The ID of the item currently selected in the panel.
\t\t *
\t\t * @readonly
\t\t * @property {Number/String} selectedItemId
\t\t */

\t\t/**
\t\t * Event fired when the {@link #data} array changes.
\t\t *
\t\t * @event change-data
\t\t * @param {CKEDITOR.plugins.autocomplete.model.item[]} data The new value.
\t\t */

\t\t/**
\t\t * Event fired when the {@link #selectedItemId} property changes.
\t\t *
\t\t * @event change-selectedItemId
\t\t * @param {Number/String} data The new value.
\t\t */

\t\t/**
\t\t * Event fired when the {@link #isActive} property changes.
\t\t *
\t\t * @event change-isActive
\t\t * @param {Boolean} data The new value.
\t\t */
\t}

\tModel.prototype = {
\t\t/**
\t\t * Gets an index from the {@link #data} array of the item by its ID.
\t\t *
\t\t * @param {Number/String} itemId
\t\t * @returns {Number}
\t\t */
\t\tgetIndexById: function( itemId ) {
\t\t\tif ( !this.hasData() ) {
\t\t\t\treturn -1;
\t\t\t}

\t\t\tfor ( var data = this.data, i = 0, l = data.length; i < l; i++ ) {
\t\t\t\tif ( data[ i ].id == itemId ) {
\t\t\t\t\treturn i;
\t\t\t\t}
\t\t\t}

\t\t\treturn -1;
\t\t},

\t\t/**
\t\t * Gets the item from the {@link #data} array by its ID.
\t\t *
\t\t * @param {Number/String} itemId
\t\t * @returns {CKEDITOR.plugins.autocomplete.model.item}
\t\t */
\t\tgetItemById: function( itemId ) {
\t\t\tvar index = this.getIndexById( itemId );
\t\t\treturn ~index && this.data[ index ] || null;
\t\t},

\t\t/**
\t\t * Whether the model contains non-empty {@link #data}.
\t\t *
\t\t * @returns {Boolean}
\t\t */
\t\thasData: function() {
\t\t\treturn Boolean( this.data && this.data.length );
\t\t},

\t\t/**
\t\t * Sets the {@link #selectedItemId} property.
\t\t *
\t\t * @param {Number/String} itemId
\t\t */
\t\tsetItem: function( itemId ) {
\t\t\tif ( this.getIndexById( itemId ) < 0 ) {
\t\t\t\tthrow new Error( 'Item with given id does not exist' );
\t\t\t}

\t\t\tthis.selectedItemId = itemId;
\t\t},

\t\t/**
\t\t * Fires the {@link #change-selectedItemId} event.
\t\t *
\t\t * @param {Number/String} itemId
\t\t */
\t\tselect: function( itemId ) {
\t\t\tthis.fire( 'change-selectedItemId', itemId );
\t\t},

\t\t/**
\t\t * Selects the first item. See also the {@link #select} method.
\t\t */
\t\tselectFirst: function() {
\t\t\tif ( this.hasData() ) {
\t\t\t\tthis.select( this.data[ 0 ].id );
\t\t\t}
\t\t},

\t\t/**
\t\t * Selects the last item. See also the {@link #select} method.
\t\t */
\t\tselectLast: function() {
\t\t\tif ( this.hasData() ) {
\t\t\t\tthis.select( this.data[ this.data.length - 1 ].id );
\t\t\t}
\t\t},

\t\t/**
\t\t * Selects the next item in the {@link #data} array. If no item is selected,
\t\t * it selects the first one. If the last one is selected, it selects the first one.
\t\t *
\t\t * See also the {@link #select} method.
\t\t */
\t\tselectNext: function() {
\t\t\tif ( this.selectedItemId == null ) {
\t\t\t\tthis.selectFirst();
\t\t\t\treturn;
\t\t\t}

\t\t\tvar index = this.getIndexById( this.selectedItemId );

\t\t\tif ( index < 0 || index + 1 == this.data.length ) {
\t\t\t\tthis.selectFirst();
\t\t\t} else {
\t\t\t\tthis.select( this.data[ index + 1 ].id );
\t\t\t}
\t\t},

\t\t/**
\t\t * Selects the previous item in the {@link #data} array. If no item is selected,
\t\t * it selects the last one. If the first one is selected, it selects the last one.
\t\t *
\t\t * See also the {@link #select} method.
\t\t */
\t\tselectPrevious: function() {
\t\t\tif ( this.selectedItemId == null ) {
\t\t\t\tthis.selectLast();
\t\t\t\treturn;
\t\t\t}

\t\t\tvar index = this.getIndexById( this.selectedItemId );

\t\t\tif ( index <= 0 ) {
\t\t\t\tthis.selectLast();
\t\t\t} else {
\t\t\t\tthis.select( this.data[ index - 1 ].id );
\t\t\t}
\t\t},

\t\t/**
\t\t * Sets the {@link #isActive} property and fires the {@link #change-isActive} event.
\t\t *
\t\t * @param {Boolean} isActive
\t\t */
\t\tsetActive: function( isActive ) {
\t\t\tthis.isActive = isActive;
\t\t\tthis.fire( 'change-isActive', isActive );
\t\t},

\t\t/**
\t\t * Sets the {@link #query} and {@link #range} and makes a request for the query results
\t\t * by executing the {@link #dataCallback} function. When the data is returned (synchronously or
\t\t * asynchronously, because {@link #dataCallback} exposes a callback function), the {@link #data}
\t\t * property is set and the {@link #change-data} event is fired.
\t\t *
\t\t * This method controls that only the response for the current query is handled.
\t\t *
\t\t * @param {String} query
\t\t * @param {CKEDITOR.dom.range} range
\t\t */
\t\tsetQuery: function( query, range ) {
\t\t\tvar that = this,
\t\t\t\trequestId = CKEDITOR.tools.getNextId();

\t\t\tthis.lastRequestId = requestId;
\t\t\tthis.query = query;
\t\t\tthis.range = range;
\t\t\tthis.data = null;
\t\t\tthis.selectedItemId = null;

\t\t\tthis.dataCallback( {
\t\t\t\tquery: query,
\t\t\t\trange: range
\t\t\t}, handleData );

\t\t\t// Note: don't put any executable code here because the callback passed to
\t\t\t// this.dataCallback may be executed synchronously or asynchronously
\t\t\t// so execution order will differ.

\t\t\tfunction handleData( data ) {
\t\t\t\t// Handle only the response for the most recent setQuery call.
\t\t\t\tif ( requestId == that.lastRequestId ) {
\t\t\t\t\t// Limit number of items (#2030).
\t\t\t\t\tif ( that.itemsLimit ) {
\t\t\t\t\t\tthat.data = data.slice( 0, that.itemsLimit );
\t\t\t\t\t} else {
\t\t\t\t\t\tthat.data = data;
\t\t\t\t\t}
\t\t\t\t\tthat.fire( 'change-data', that.data );
\t\t\t\t}
\t\t\t}
\t\t}
\t};

\tCKEDITOR.event.implementOn( Model.prototype );

\t/**
\t * An abstract class representing one {@link CKEDITOR.plugins.autocomplete.model#data data item}.
\t * A item can be understood as one entry in the autocomplete panel.
\t *
\t * An item must have a unique {@link #id} and may have more properties which can then be used, for example,
\t * in the {@link CKEDITOR.plugins.autocomplete.view#itemTemplate} template or the
\t * {@link CKEDITOR.plugins.autocomplete#getHtmlToInsert} method.
\t *
\t * Example items:
\t *
\t * ```javascript
\t *\t{ id: 345, name: 'CKEditor' }
\t *\t{ id: 'smile1', alt: 'smile', emojiSrc: 'emojis/smile.png' }
\t * ```
\t *
\t * @abstract
\t * @class CKEDITOR.plugins.autocomplete.model.item
\t * @since 4.10.0
\t */

\t/**
\t * The unique ID of the item. The ID should not change with time, so two
\t * {@link CKEDITOR.plugins.autocomplete.model#dataCallback}
\t * calls should always result in the same ID for the same logical item.
\t * This can, for example, allow to keep the same item selected when
\t * the data changes.
\t *
\t * **Note:** When using a string as an item, make sure that the string does not
\t * contain any special characters (above all `\"[]` characters). This limitation is
\t * due to the simplified way the {@link CKEDITOR.plugins.autocomplete.view}
\t * stores IDs in the DOM.
\t *
\t * @readonly
\t * @property {Number/String} id
\t */

\tCKEDITOR.plugins.autocomplete = Autocomplete;
\tAutocomplete.view = View;
\tAutocomplete.model = Model;

\t/**
\t * The autocomplete keystrokes used to finish autocompletion with the selected view item.
\t * This setting will set completing keystrokes for each autocomplete plugin respectively.
\t *
\t * To change completing keystrokes individually use the {@link CKEDITOR.plugins.autocomplete#commitKeystrokes} plugin property.
\t *
\t * ```javascript
\t * // Default configuration (9 = Tab, 13 = Enter).
\t * config.autocomplete_commitKeystrokes = [ 9, 13 ];
\t * ```
\t *
\t * Commit keystroke can also be disabled by setting it to an empty array.
\t *
\t * ```javascript
\t * // Disable autocomplete commit keystroke.
\t * config.autocomplete_commitKeystrokes = [];
\t * ```
\t *
\t * @since 4.10.0
\t * @cfg {Number/Number[]} [autocomplete_commitKeystrokes=[9, 13]]
\t * @member CKEDITOR.config
\t */
\tCKEDITOR.config.autocomplete_commitKeystrokes = [ 9, 13 ];

\t// Viewport on iOS is moved into iframe parent element because of https://bugs.webkit.org/show_bug.cgi?id=149264 issue.
\t// Once upstream issue is resolved this function should be removed and its concurrences should be refactored to
\t// follow the default code path.
\tfunction iOSViewportElement( editor ) {
\t\treturn editor.window.getFrame().getParent();
\t}

\tfunction encodeItem( item ) {
\t\treturn CKEDITOR.tools.array.reduce( CKEDITOR.tools.object.keys( item ), function( cur, key ) {
\t\t\tcur[ key ] = CKEDITOR.tools.htmlEncode( item[ key ] );
\t\t\treturn cur;
\t\t}, {} );
\t}

\t/**
\t * Abstract class describing the definition of the [Autocomplete](https://ckeditor.com/cke4/addon/autocomplete) plugin configuration.
\t *
\t * It lists properties used to define and create autocomplete configuration definition.
\t *
\t * Simple usage:
\t *
\t * ```javascript
 \t * var definition = {
\t * \tdataCallback: dataCallback,
\t * \ttextTestCallback: textTestCallback,
\t * \tthrottle: 200
\t * };
\t * ```
\t *
\t * @class CKEDITOR.plugins.autocomplete.configDefinition
\t * @abstract
\t * @since 4.10.0
\t */

\t/**
\t * Callback executed to get suggestion data based on the search query. The returned data will be
\t * displayed in the autocomplete view.
\t *
\t * ```javascript
\t *\t// Returns (through its callback) the suggestions for the current query.
\t *\t// Note: The itemsArray variable is the example \"database\".
\t *\tfunction dataCallback( matchInfo, callback ) {
\t *\t\t// Simple search.
\t *\t\t// Filter the entire items array so only the items that start
\t *\t\t// with the query remain.
\t *\t\tvar suggestions = itemsArray.filter( function( item ) {
\t *\t\t\treturn item.name.indexOf( matchInfo.query ) === 0;
\t *\t\t} );
\t *
\t *\t\t// Note: The callback function can also be executed asynchronously
\t *\t\t// so dataCallback can do an XHR request or use any other asynchronous API.
\t *\t\tcallback( suggestions );
\t *\t}
\t *
\t * ```
\t *
\t * @method dataCallback
\t * @param {CKEDITOR.plugins.autocomplete.matchInfo} matchInfo
\t * @param {Function} callback The callback which should be executed with the matched data.
\t * @param {CKEDITOR.plugins.autocomplete.model.item[]} callback.data The suggestion data that should be
\t * displayed in the autocomplete view for a given query. The data items should implement the
\t * {@link CKEDITOR.plugins.autocomplete.model.item} interface.
\t */

\t/**
\t * Callback executed to check if a text next to the selection should open
\t * the autocomplete. See the {@link CKEDITOR.plugins.textWatcher}'s `callback` argument.
\t *
\t * ```javascript
\t *\t// Called when the user types in the editor or moves the caret.
\t *\t// The range represents the caret position.
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
\t *\t// Returns a position of the matching text.
\t *\t// It matches with a word starting from the '@' character
\t *  // up to the caret position.
\t *\tfunction matchCallback( text, offset ) {
\t *\t\t\t// Get the text before the caret.
\t *\t\tvar left = text.slice( 0, offset ),
\t *\t\t\t// Will look for an '@' character followed by word characters.
\t *\t\t\tmatch = left.match( /@\\w*\$/ );
\t *
\t *\t\tif ( !match ) {
\t *\t\t\treturn null;
\t *\t\t}
\t *\t\treturn { start: match.index, end: offset };
\t *\t}
\t * ```
\t *
\t * @method textTestCallback
\t * @param {CKEDITOR.dom.range} range Range representing the caret position.
\t */

\t/**
\t * @inheritdoc CKEDITOR.plugins.autocomplete#throttle
\t * @property {Number} [throttle]
\t */

\t/**
\t * @inheritdoc CKEDITOR.plugins.autocomplete.model#itemsLimit
\t * @property {Number} [itemsLimit]
\t */

\t/**
\t * @inheritdoc CKEDITOR.plugins.autocomplete.view#itemTemplate
\t * @property {String} [itemTemplate]
\t */

\t/**
\t * @inheritdoc CKEDITOR.plugins.autocomplete#outputTemplate
\t * @property {String} [outputTemplate]
\t */

\t/**
\t * Abstract class describing a set of properties that can be used to produce more adequate suggestion data based on the matched query.
\t *
\t * @class CKEDITOR.plugins.autocomplete.matchInfo
\t * @abstract
\t * @since 4.10.0
\t */

\t/**
\t * The query string that was accepted by the
\t * {@link CKEDITOR.plugins.autocomplete.configDefinition#textTestCallback config.textTestCallback}.
\t *
\t * @property {String} query
\t */

\t/**
\t * The range in the DOM indicating the position of the {@link #query}.
\t *
\t * @property {CKEDITOR.dom.range} range
\t */

\t/**
\t * The {@link CKEDITOR.plugins.autocomplete Autocomplete} instance that matched the query.
\t *
\t * @property {CKEDITOR.plugins.autocomplete} autocomplete
\t */
} )();
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/autocomplete/plugin.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/autocomplete/plugin.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/autocomplete/plugin.js");
    }
}
