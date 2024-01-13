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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/autocomplete.js */
class __TwigTemplate_f0f9e9e3f45d0d51c0f4e537cba8d72f9d707d06b02b1981598cc37b57519420 extends Template
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
        echo "/*!
 * jQuery UI Autocomplete 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Autocomplete
//>>group: Widgets
//>>description: Lists suggested words as the user is typing.
//>>docs: http://api.jqueryui.com/autocomplete/
//>>demos: http://jqueryui.com/autocomplete/
//>>css.structure: ../../themes/base/core.css
//>>css.structure: ../../themes/base/autocomplete.css
//>>css.theme: ../../themes/base/theme.css

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"./menu\",
\t\t\t\"../keycode\",
\t\t\t\"../position\",
\t\t\t\"../safe-active-element\",
\t\t\t\"../version\",
\t\t\t\"../widget\"
\t\t], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

\$.widget( \"ui.autocomplete\", {
\tversion: \"1.12.1\",
\tdefaultElement: \"<input>\",
\toptions: {
\t\tappendTo: null,
\t\tautoFocus: false,
\t\tdelay: 300,
\t\tminLength: 1,
\t\tposition: {
\t\t\tmy: \"left top\",
\t\t\tat: \"left bottom\",
\t\t\tcollision: \"none\"
\t\t},
\t\tsource: null,

\t\t// Callbacks
\t\tchange: null,
\t\tclose: null,
\t\tfocus: null,
\t\topen: null,
\t\tresponse: null,
\t\tsearch: null,
\t\tselect: null
\t},

\trequestIndex: 0,
\tpending: 0,

\t_create: function() {

\t\t// Some browsers only repeat keydown events, not keypress events,
\t\t// so we use the suppressKeyPress flag to determine if we've already
\t\t// handled the keydown event. #7269
\t\t// Unfortunately the code for & in keypress is the same as the up arrow,
\t\t// so we use the suppressKeyPressRepeat flag to avoid handling keypress
\t\t// events when we know the keydown event was used to modify the
\t\t// search term. #7799
\t\tvar suppressKeyPress, suppressKeyPressRepeat, suppressInput,
\t\t\tnodeName = this.element[ 0 ].nodeName.toLowerCase(),
\t\t\tisTextarea = nodeName === \"textarea\",
\t\t\tisInput = nodeName === \"input\";

\t\t// Textareas are always multi-line
\t\t// Inputs are always single-line, even if inside a contentEditable element
\t\t// IE also treats inputs as contentEditable
\t\t// All other element types are determined by whether or not they're contentEditable
\t\tthis.isMultiLine = isTextarea || !isInput && this._isContentEditable( this.element );

\t\tthis.valueMethod = this.element[ isTextarea || isInput ? \"val\" : \"text\" ];
\t\tthis.isNewMenu = true;

\t\tthis._addClass( \"ui-autocomplete-input\" );
\t\tthis.element.attr( \"autocomplete\", \"off\" );

\t\tthis._on( this.element, {
\t\t\tkeydown: function( event ) {
\t\t\t\tif ( this.element.prop( \"readOnly\" ) ) {
\t\t\t\t\tsuppressKeyPress = true;
\t\t\t\t\tsuppressInput = true;
\t\t\t\t\tsuppressKeyPressRepeat = true;
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tsuppressKeyPress = false;
\t\t\t\tsuppressInput = false;
\t\t\t\tsuppressKeyPressRepeat = false;
\t\t\t\tvar keyCode = \$.ui.keyCode;
\t\t\t\tswitch ( event.keyCode ) {
\t\t\t\tcase keyCode.PAGE_UP:
\t\t\t\t\tsuppressKeyPress = true;
\t\t\t\t\tthis._move( \"previousPage\", event );
\t\t\t\t\tbreak;
\t\t\t\tcase keyCode.PAGE_DOWN:
\t\t\t\t\tsuppressKeyPress = true;
\t\t\t\t\tthis._move( \"nextPage\", event );
\t\t\t\t\tbreak;
\t\t\t\tcase keyCode.UP:
\t\t\t\t\tsuppressKeyPress = true;
\t\t\t\t\tthis._keyEvent( \"previous\", event );
\t\t\t\t\tbreak;
\t\t\t\tcase keyCode.DOWN:
\t\t\t\t\tsuppressKeyPress = true;
\t\t\t\t\tthis._keyEvent( \"next\", event );
\t\t\t\t\tbreak;
\t\t\t\tcase keyCode.ENTER:

\t\t\t\t\t// when menu is open and has focus
\t\t\t\t\tif ( this.menu.active ) {

\t\t\t\t\t\t// #6055 - Opera still allows the keypress to occur
\t\t\t\t\t\t// which causes forms to submit
\t\t\t\t\t\tsuppressKeyPress = true;
\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\tthis.menu.select( event );
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase keyCode.TAB:
\t\t\t\t\tif ( this.menu.active ) {
\t\t\t\t\t\tthis.menu.select( event );
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase keyCode.ESCAPE:
\t\t\t\t\tif ( this.menu.element.is( \":visible\" ) ) {
\t\t\t\t\t\tif ( !this.isMultiLine ) {
\t\t\t\t\t\t\tthis._value( this.term );
\t\t\t\t\t\t}
\t\t\t\t\t\tthis.close( event );

\t\t\t\t\t\t// Different browsers have different default behavior for escape
\t\t\t\t\t\t// Single press can mean undo or clear
\t\t\t\t\t\t// Double press in IE means clear the whole form
\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tdefault:
\t\t\t\t\tsuppressKeyPressRepeat = true;

\t\t\t\t\t// search timeout should be triggered before the input value is changed
\t\t\t\t\tthis._searchTimeout( event );
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t},
\t\t\tkeypress: function( event ) {
\t\t\t\tif ( suppressKeyPress ) {
\t\t\t\t\tsuppressKeyPress = false;
\t\t\t\t\tif ( !this.isMultiLine || this.menu.element.is( \":visible\" ) ) {
\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t}
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tif ( suppressKeyPressRepeat ) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t// Replicate some key handlers to allow them to repeat in Firefox and Opera
\t\t\t\tvar keyCode = \$.ui.keyCode;
\t\t\t\tswitch ( event.keyCode ) {
\t\t\t\tcase keyCode.PAGE_UP:
\t\t\t\t\tthis._move( \"previousPage\", event );
\t\t\t\t\tbreak;
\t\t\t\tcase keyCode.PAGE_DOWN:
\t\t\t\t\tthis._move( \"nextPage\", event );
\t\t\t\t\tbreak;
\t\t\t\tcase keyCode.UP:
\t\t\t\t\tthis._keyEvent( \"previous\", event );
\t\t\t\t\tbreak;
\t\t\t\tcase keyCode.DOWN:
\t\t\t\t\tthis._keyEvent( \"next\", event );
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t},
\t\t\tinput: function( event ) {
\t\t\t\tif ( suppressInput ) {
\t\t\t\t\tsuppressInput = false;
\t\t\t\t\tevent.preventDefault();
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tthis._searchTimeout( event );
\t\t\t},
\t\t\tfocus: function() {
\t\t\t\tthis.selectedItem = null;
\t\t\t\tthis.previous = this._value();
\t\t\t},
\t\t\tblur: function( event ) {
\t\t\t\tif ( this.cancelBlur ) {
\t\t\t\t\tdelete this.cancelBlur;
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tclearTimeout( this.searching );
\t\t\t\tthis.close( event );
\t\t\t\tthis._change( event );
\t\t\t}
\t\t} );

\t\tthis._initSource();
\t\tthis.menu = \$( \"<ul>\" )
\t\t\t.appendTo( this._appendTo() )
\t\t\t.menu( {

\t\t\t\t// disable ARIA support, the live region takes care of that
\t\t\t\trole: null
\t\t\t} )
\t\t\t.hide()
\t\t\t.menu( \"instance\" );

\t\tthis._addClass( this.menu.element, \"ui-autocomplete\", \"ui-front\" );
\t\tthis._on( this.menu.element, {
\t\t\tmousedown: function( event ) {

\t\t\t\t// prevent moving focus out of the text field
\t\t\t\tevent.preventDefault();

\t\t\t\t// IE doesn't prevent moving focus even with event.preventDefault()
\t\t\t\t// so we set a flag to know when we should ignore the blur event
\t\t\t\tthis.cancelBlur = true;
\t\t\t\tthis._delay( function() {
\t\t\t\t\tdelete this.cancelBlur;

\t\t\t\t\t// Support: IE 8 only
\t\t\t\t\t// Right clicking a menu item or selecting text from the menu items will
\t\t\t\t\t// result in focus moving out of the input. However, we've already received
\t\t\t\t\t// and ignored the blur event because of the cancelBlur flag set above. So
\t\t\t\t\t// we restore focus to ensure that the menu closes properly based on the user's
\t\t\t\t\t// next actions.
\t\t\t\t\tif ( this.element[ 0 ] !== \$.ui.safeActiveElement( this.document[ 0 ] ) ) {
\t\t\t\t\t\tthis.element.trigger( \"focus\" );
\t\t\t\t\t}
\t\t\t\t} );
\t\t\t},
\t\t\tmenufocus: function( event, ui ) {
\t\t\t\tvar label, item;

\t\t\t\t// support: Firefox
\t\t\t\t// Prevent accidental activation of menu items in Firefox (#7024 #9118)
\t\t\t\tif ( this.isNewMenu ) {
\t\t\t\t\tthis.isNewMenu = false;
\t\t\t\t\tif ( event.originalEvent && /^mouse/.test( event.originalEvent.type ) ) {
\t\t\t\t\t\tthis.menu.blur();

\t\t\t\t\t\tthis.document.one( \"mousemove\", function() {
\t\t\t\t\t\t\t\$( event.target ).trigger( event.originalEvent );
\t\t\t\t\t\t} );

\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\titem = ui.item.data( \"ui-autocomplete-item\" );
\t\t\t\tif ( false !== this._trigger( \"focus\", event, { item: item } ) ) {

\t\t\t\t\t// use value to match what will end up in the input, if it was a key event
\t\t\t\t\tif ( event.originalEvent && /^key/.test( event.originalEvent.type ) ) {
\t\t\t\t\t\tthis._value( item.value );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Announce the value in the liveRegion
\t\t\t\tlabel = ui.item.attr( \"aria-label\" ) || item.value;
\t\t\t\tif ( label && \$.trim( label ).length ) {
\t\t\t\t\tthis.liveRegion.children().hide();
\t\t\t\t\t\$( \"<div>\" ).text( label ).appendTo( this.liveRegion );
\t\t\t\t}
\t\t\t},
\t\t\tmenuselect: function( event, ui ) {
\t\t\t\tvar item = ui.item.data( \"ui-autocomplete-item\" ),
\t\t\t\t\tprevious = this.previous;

\t\t\t\t// Only trigger when focus was lost (click on menu)
\t\t\t\tif ( this.element[ 0 ] !== \$.ui.safeActiveElement( this.document[ 0 ] ) ) {
\t\t\t\t\tthis.element.trigger( \"focus\" );
\t\t\t\t\tthis.previous = previous;

\t\t\t\t\t// #6109 - IE triggers two focus events and the second
\t\t\t\t\t// is asynchronous, so we need to reset the previous
\t\t\t\t\t// term synchronously and asynchronously :-(
\t\t\t\t\tthis._delay( function() {
\t\t\t\t\t\tthis.previous = previous;
\t\t\t\t\t\tthis.selectedItem = item;
\t\t\t\t\t} );
\t\t\t\t}

\t\t\t\tif ( false !== this._trigger( \"select\", event, { item: item } ) ) {
\t\t\t\t\tthis._value( item.value );
\t\t\t\t}

\t\t\t\t// reset the term after the select event
\t\t\t\t// this allows custom select handling to work properly
\t\t\t\tthis.term = this._value();

\t\t\t\tthis.close( event );
\t\t\t\tthis.selectedItem = item;
\t\t\t}
\t\t} );

\t\tthis.liveRegion = \$( \"<div>\", {
\t\t\trole: \"status\",
\t\t\t\"aria-live\": \"assertive\",
\t\t\t\"aria-relevant\": \"additions\"
\t\t} )
\t\t\t.appendTo( this.document[ 0 ].body );

\t\tthis._addClass( this.liveRegion, null, \"ui-helper-hidden-accessible\" );

\t\t// Turning off autocomplete prevents the browser from remembering the
\t\t// value when navigating through history, so we re-enable autocomplete
\t\t// if the page is unloaded before the widget is destroyed. #7790
\t\tthis._on( this.window, {
\t\t\tbeforeunload: function() {
\t\t\t\tthis.element.removeAttr( \"autocomplete\" );
\t\t\t}
\t\t} );
\t},

\t_destroy: function() {
\t\tclearTimeout( this.searching );
\t\tthis.element.removeAttr( \"autocomplete\" );
\t\tthis.menu.element.remove();
\t\tthis.liveRegion.remove();
\t},

\t_setOption: function( key, value ) {
\t\tthis._super( key, value );
\t\tif ( key === \"source\" ) {
\t\t\tthis._initSource();
\t\t}
\t\tif ( key === \"appendTo\" ) {
\t\t\tthis.menu.element.appendTo( this._appendTo() );
\t\t}
\t\tif ( key === \"disabled\" && value && this.xhr ) {
\t\t\tthis.xhr.abort();
\t\t}
\t},

\t_isEventTargetInWidget: function( event ) {
\t\tvar menuElement = this.menu.element[ 0 ];

\t\treturn event.target === this.element[ 0 ] ||
\t\t\tevent.target === menuElement ||
\t\t\t\$.contains( menuElement, event.target );
\t},

\t_closeOnClickOutside: function( event ) {
\t\tif ( !this._isEventTargetInWidget( event ) ) {
\t\t\tthis.close();
\t\t}
\t},

\t_appendTo: function() {
\t\tvar element = this.options.appendTo;

\t\tif ( element ) {
\t\t\telement = element.jquery || element.nodeType ?
\t\t\t\t\$( element ) :
\t\t\t\tthis.document.find( element ).eq( 0 );
\t\t}

\t\tif ( !element || !element[ 0 ] ) {
\t\t\telement = this.element.closest( \".ui-front, dialog\" );
\t\t}

\t\tif ( !element.length ) {
\t\t\telement = this.document[ 0 ].body;
\t\t}

\t\treturn element;
\t},

\t_initSource: function() {
\t\tvar array, url,
\t\t\tthat = this;
\t\tif ( \$.isArray( this.options.source ) ) {
\t\t\tarray = this.options.source;
\t\t\tthis.source = function( request, response ) {
\t\t\t\tresponse( \$.ui.autocomplete.filter( array, request.term ) );
\t\t\t};
\t\t} else if ( typeof this.options.source === \"string\" ) {
\t\t\turl = this.options.source;
\t\t\tthis.source = function( request, response ) {
\t\t\t\tif ( that.xhr ) {
\t\t\t\t\tthat.xhr.abort();
\t\t\t\t}
\t\t\t\tthat.xhr = \$.ajax( {
\t\t\t\t\turl: url,
\t\t\t\t\tdata: request,
\t\t\t\t\tdataType: \"json\",
\t\t\t\t\tsuccess: function( data ) {
\t\t\t\t\t\tresponse( data );
\t\t\t\t\t},
\t\t\t\t\terror: function() {
\t\t\t\t\t\tresponse( [] );
\t\t\t\t\t}
\t\t\t\t} );
\t\t\t};
\t\t} else {
\t\t\tthis.source = this.options.source;
\t\t}
\t},

\t_searchTimeout: function( event ) {
\t\tclearTimeout( this.searching );
\t\tthis.searching = this._delay( function() {

\t\t\t// Search if the value has changed, or if the user retypes the same value (see #7434)
\t\t\tvar equalValues = this.term === this._value(),
\t\t\t\tmenuVisible = this.menu.element.is( \":visible\" ),
\t\t\t\tmodifierKey = event.altKey || event.ctrlKey || event.metaKey || event.shiftKey;

\t\t\tif ( !equalValues || ( equalValues && !menuVisible && !modifierKey ) ) {
\t\t\t\tthis.selectedItem = null;
\t\t\t\tthis.search( null, event );
\t\t\t}
\t\t}, this.options.delay );
\t},

\tsearch: function( value, event ) {
\t\tvalue = value != null ? value : this._value();

\t\t// Always save the actual value, not the one passed as an argument
\t\tthis.term = this._value();

\t\tif ( value.length < this.options.minLength ) {
\t\t\treturn this.close( event );
\t\t}

\t\tif ( this._trigger( \"search\", event ) === false ) {
\t\t\treturn;
\t\t}

\t\treturn this._search( value );
\t},

\t_search: function( value ) {
\t\tthis.pending++;
\t\tthis._addClass( \"ui-autocomplete-loading\" );
\t\tthis.cancelSearch = false;

\t\tthis.source( { term: value }, this._response() );
\t},

\t_response: function() {
\t\tvar index = ++this.requestIndex;

\t\treturn \$.proxy( function( content ) {
\t\t\tif ( index === this.requestIndex ) {
\t\t\t\tthis.__response( content );
\t\t\t}

\t\t\tthis.pending--;
\t\t\tif ( !this.pending ) {
\t\t\t\tthis._removeClass( \"ui-autocomplete-loading\" );
\t\t\t}
\t\t}, this );
\t},

\t__response: function( content ) {
\t\tif ( content ) {
\t\t\tcontent = this._normalize( content );
\t\t}
\t\tthis._trigger( \"response\", null, { content: content } );
\t\tif ( !this.options.disabled && content && content.length && !this.cancelSearch ) {
\t\t\tthis._suggest( content );
\t\t\tthis._trigger( \"open\" );
\t\t} else {

\t\t\t// use ._close() instead of .close() so we don't cancel future searches
\t\t\tthis._close();
\t\t}
\t},

\tclose: function( event ) {
\t\tthis.cancelSearch = true;
\t\tthis._close( event );
\t},

\t_close: function( event ) {

\t\t// Remove the handler that closes the menu on outside clicks
\t\tthis._off( this.document, \"mousedown\" );

\t\tif ( this.menu.element.is( \":visible\" ) ) {
\t\t\tthis.menu.element.hide();
\t\t\tthis.menu.blur();
\t\t\tthis.isNewMenu = true;
\t\t\tthis._trigger( \"close\", event );
\t\t}
\t},

\t_change: function( event ) {
\t\tif ( this.previous !== this._value() ) {
\t\t\tthis._trigger( \"change\", event, { item: this.selectedItem } );
\t\t}
\t},

\t_normalize: function( items ) {

\t\t// assume all items have the right format when the first item is complete
\t\tif ( items.length && items[ 0 ].label && items[ 0 ].value ) {
\t\t\treturn items;
\t\t}
\t\treturn \$.map( items, function( item ) {
\t\t\tif ( typeof item === \"string\" ) {
\t\t\t\treturn {
\t\t\t\t\tlabel: item,
\t\t\t\t\tvalue: item
\t\t\t\t};
\t\t\t}
\t\t\treturn \$.extend( {}, item, {
\t\t\t\tlabel: item.label || item.value,
\t\t\t\tvalue: item.value || item.label
\t\t\t} );
\t\t} );
\t},

\t_suggest: function( items ) {
\t\tvar ul = this.menu.element.empty();
\t\tthis._renderMenu( ul, items );
\t\tthis.isNewMenu = true;
\t\tthis.menu.refresh();

\t\t// Size and position menu
\t\tul.show();
\t\tthis._resizeMenu();
\t\tul.position( \$.extend( {
\t\t\tof: this.element
\t\t}, this.options.position ) );

\t\tif ( this.options.autoFocus ) {
\t\t\tthis.menu.next();
\t\t}

\t\t// Listen for interactions outside of the widget (#6642)
\t\tthis._on( this.document, {
\t\t\tmousedown: \"_closeOnClickOutside\"
\t\t} );
\t},

\t_resizeMenu: function() {
\t\tvar ul = this.menu.element;
\t\tul.outerWidth( Math.max(

\t\t\t// Firefox wraps long text (possibly a rounding bug)
\t\t\t// so we add 1px to avoid the wrapping (#7513)
\t\t\tul.width( \"\" ).outerWidth() + 1,
\t\t\tthis.element.outerWidth()
\t\t) );
\t},

\t_renderMenu: function( ul, items ) {
\t\tvar that = this;
\t\t\$.each( items, function( index, item ) {
\t\t\tthat._renderItemData( ul, item );
\t\t} );
\t},

\t_renderItemData: function( ul, item ) {
\t\treturn this._renderItem( ul, item ).data( \"ui-autocomplete-item\", item );
\t},

\t_renderItem: function( ul, item ) {
\t\treturn \$( \"<li>\" )
\t\t\t.append( \$( \"<div>\" ).text( item.label ) )
\t\t\t.appendTo( ul );
\t},

\t_move: function( direction, event ) {
\t\tif ( !this.menu.element.is( \":visible\" ) ) {
\t\t\tthis.search( null, event );
\t\t\treturn;
\t\t}
\t\tif ( this.menu.isFirstItem() && /^previous/.test( direction ) ||
\t\t\t\tthis.menu.isLastItem() && /^next/.test( direction ) ) {

\t\t\tif ( !this.isMultiLine ) {
\t\t\t\tthis._value( this.term );
\t\t\t}

\t\t\tthis.menu.blur();
\t\t\treturn;
\t\t}
\t\tthis.menu[ direction ]( event );
\t},

\twidget: function() {
\t\treturn this.menu.element;
\t},

\t_value: function() {
\t\treturn this.valueMethod.apply( this.element, arguments );
\t},

\t_keyEvent: function( keyEvent, event ) {
\t\tif ( !this.isMultiLine || this.menu.element.is( \":visible\" ) ) {
\t\t\tthis._move( keyEvent, event );

\t\t\t// Prevents moving cursor to beginning/end of the text field in some browsers
\t\t\tevent.preventDefault();
\t\t}
\t},

\t// Support: Chrome <=50
\t// We should be able to just use this.element.prop( \"isContentEditable\" )
\t// but hidden elements always report false in Chrome.
\t// https://code.google.com/p/chromium/issues/detail?id=313082
\t_isContentEditable: function( element ) {
\t\tif ( !element.length ) {
\t\t\treturn false;
\t\t}

\t\tvar editable = element.prop( \"contentEditable\" );

\t\tif ( editable === \"inherit\" ) {
\t\t  return this._isContentEditable( element.parent() );
\t\t}

\t\treturn editable === \"true\";
\t}
} );

\$.extend( \$.ui.autocomplete, {
\tescapeRegex: function( value ) {
\t\treturn value.replace( /[\\-\\[\\]{}()*+?.,\\\\\\^\$|#\\s]/g, \"\\\\\$&\" );
\t},
\tfilter: function( array, term ) {
\t\tvar matcher = new RegExp( \$.ui.autocomplete.escapeRegex( term ), \"i\" );
\t\treturn \$.grep( array, function( value ) {
\t\t\treturn matcher.test( value.label || value.value || value );
\t\t} );
\t}
} );

// Live region extension, adding a `messages` option
// NOTE: This is an experimental API. We are still investigating
// a full solution for string manipulation and internationalization.
\$.widget( \"ui.autocomplete\", \$.ui.autocomplete, {
\toptions: {
\t\tmessages: {
\t\t\tnoResults: \"No search results.\",
\t\t\tresults: function( amount ) {
\t\t\t\treturn amount + ( amount > 1 ? \" results are\" : \" result is\" ) +
\t\t\t\t\t\" available, use up and down arrow keys to navigate.\";
\t\t\t}
\t\t}
\t},

\t__response: function( content ) {
\t\tvar message;
\t\tthis._superApply( arguments );
\t\tif ( this.options.disabled || this.cancelSearch ) {
\t\t\treturn;
\t\t}
\t\tif ( content && content.length ) {
\t\t\tmessage = this.options.messages.results( content.length );
\t\t} else {
\t\t\tmessage = this.options.messages.noResults;
\t\t}
\t\tthis.liveRegion.children().hide();
\t\t\$( \"<div>\" ).text( message ).appendTo( this.liveRegion );
\t}
} );

return \$.ui.autocomplete;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/autocomplete.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/autocomplete.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/autocomplete.js");
    }
}
