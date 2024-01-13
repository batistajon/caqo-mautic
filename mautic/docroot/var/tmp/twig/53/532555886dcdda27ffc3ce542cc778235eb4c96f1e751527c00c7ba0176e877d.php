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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/selectmenu.js */
class __TwigTemplate_adef5b8cef454287ad83a015c701235223967446e3ad18d2a9917ba38cccbd5a extends Template
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
 * jQuery UI Selectmenu 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Selectmenu
//>>group: Widgets
// jscs:disable maximumLineLength
//>>description: Duplicates and extends the functionality of a native HTML select element, allowing it to be customizable in behavior and appearance far beyond the limitations of a native select.
// jscs:enable maximumLineLength
//>>docs: http://api.jqueryui.com/selectmenu/
//>>demos: http://jqueryui.com/selectmenu/
//>>css.structure: ../../themes/base/core.css
//>>css.structure: ../../themes/base/selectmenu.css, ../../themes/base/button.css
//>>css.theme: ../../themes/base/theme.css

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"./menu\",
\t\t\t\"../escape-selector\",
\t\t\t\"../form-reset-mixin\",
\t\t\t\"../keycode\",
\t\t\t\"../labels\",
\t\t\t\"../position\",
\t\t\t\"../unique-id\",
\t\t\t\"../version\",
\t\t\t\"../widget\"
\t\t], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

return \$.widget( \"ui.selectmenu\", [ \$.ui.formResetMixin, {
\tversion: \"1.12.1\",
\tdefaultElement: \"<select>\",
\toptions: {
\t\tappendTo: null,
\t\tclasses: {
\t\t\t\"ui-selectmenu-button-open\": \"ui-corner-top\",
\t\t\t\"ui-selectmenu-button-closed\": \"ui-corner-all\"
\t\t},
\t\tdisabled: null,
\t\ticons: {
\t\t\tbutton: \"ui-icon-triangle-1-s\"
\t\t},
\t\tposition: {
\t\t\tmy: \"left top\",
\t\t\tat: \"left bottom\",
\t\t\tcollision: \"none\"
\t\t},
\t\twidth: false,

\t\t// Callbacks
\t\tchange: null,
\t\tclose: null,
\t\tfocus: null,
\t\topen: null,
\t\tselect: null
\t},

\t_create: function() {
\t\tvar selectmenuId = this.element.uniqueId().attr( \"id\" );
\t\tthis.ids = {
\t\t\telement: selectmenuId,
\t\t\tbutton: selectmenuId + \"-button\",
\t\t\tmenu: selectmenuId + \"-menu\"
\t\t};

\t\tthis._drawButton();
\t\tthis._drawMenu();
\t\tthis._bindFormResetHandler();

\t\tthis._rendered = false;
\t\tthis.menuItems = \$();
\t},

\t_drawButton: function() {
\t\tvar icon,
\t\t\tthat = this,
\t\t\titem = this._parseOption(
\t\t\t\tthis.element.find( \"option:selected\" ),
\t\t\t\tthis.element[ 0 ].selectedIndex
\t\t\t);

\t\t// Associate existing label with the new button
\t\tthis.labels = this.element.labels().attr( \"for\", this.ids.button );
\t\tthis._on( this.labels, {
\t\t\tclick: function( event ) {
\t\t\t\tthis.button.focus();
\t\t\t\tevent.preventDefault();
\t\t\t}
\t\t} );

\t\t// Hide original select element
\t\tthis.element.hide();

\t\t// Create button
\t\tthis.button = \$( \"<span>\", {
\t\t\ttabindex: this.options.disabled ? -1 : 0,
\t\t\tid: this.ids.button,
\t\t\trole: \"combobox\",
\t\t\t\"aria-expanded\": \"false\",
\t\t\t\"aria-autocomplete\": \"list\",
\t\t\t\"aria-owns\": this.ids.menu,
\t\t\t\"aria-haspopup\": \"true\",
\t\t\ttitle: this.element.attr( \"title\" )
\t\t} )
\t\t\t.insertAfter( this.element );

\t\tthis._addClass( this.button, \"ui-selectmenu-button ui-selectmenu-button-closed\",
\t\t\t\"ui-button ui-widget\" );

\t\ticon = \$( \"<span>\" ).appendTo( this.button );
\t\tthis._addClass( icon, \"ui-selectmenu-icon\", \"ui-icon \" + this.options.icons.button );
\t\tthis.buttonItem = this._renderButtonItem( item )
\t\t\t.appendTo( this.button );

\t\tif ( this.options.width !== false ) {
\t\t\tthis._resizeButton();
\t\t}

\t\tthis._on( this.button, this._buttonEvents );
\t\tthis.button.one( \"focusin\", function() {

\t\t\t// Delay rendering the menu items until the button receives focus.
\t\t\t// The menu may have already been rendered via a programmatic open.
\t\t\tif ( !that._rendered ) {
\t\t\t\tthat._refreshMenu();
\t\t\t}
\t\t} );
\t},

\t_drawMenu: function() {
\t\tvar that = this;

\t\t// Create menu
\t\tthis.menu = \$( \"<ul>\", {
\t\t\t\"aria-hidden\": \"true\",
\t\t\t\"aria-labelledby\": this.ids.button,
\t\t\tid: this.ids.menu
\t\t} );

\t\t// Wrap menu
\t\tthis.menuWrap = \$( \"<div>\" ).append( this.menu );
\t\tthis._addClass( this.menuWrap, \"ui-selectmenu-menu\", \"ui-front\" );
\t\tthis.menuWrap.appendTo( this._appendTo() );

\t\t// Initialize menu widget
\t\tthis.menuInstance = this.menu
\t\t\t.menu( {
\t\t\t\tclasses: {
\t\t\t\t\t\"ui-menu\": \"ui-corner-bottom\"
\t\t\t\t},
\t\t\t\trole: \"listbox\",
\t\t\t\tselect: function( event, ui ) {
\t\t\t\t\tevent.preventDefault();

\t\t\t\t\t// Support: IE8
\t\t\t\t\t// If the item was selected via a click, the text selection
\t\t\t\t\t// will be destroyed in IE
\t\t\t\t\tthat._setSelection();

\t\t\t\t\tthat._select( ui.item.data( \"ui-selectmenu-item\" ), event );
\t\t\t\t},
\t\t\t\tfocus: function( event, ui ) {
\t\t\t\t\tvar item = ui.item.data( \"ui-selectmenu-item\" );

\t\t\t\t\t// Prevent inital focus from firing and check if its a newly focused item
\t\t\t\t\tif ( that.focusIndex != null && item.index !== that.focusIndex ) {
\t\t\t\t\t\tthat._trigger( \"focus\", event, { item: item } );
\t\t\t\t\t\tif ( !that.isOpen ) {
\t\t\t\t\t\t\tthat._select( item, event );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tthat.focusIndex = item.index;

\t\t\t\t\tthat.button.attr( \"aria-activedescendant\",
\t\t\t\t\t\tthat.menuItems.eq( item.index ).attr( \"id\" ) );
\t\t\t\t}
\t\t\t} )
\t\t\t.menu( \"instance\" );

\t\t// Don't close the menu on mouseleave
\t\tthis.menuInstance._off( this.menu, \"mouseleave\" );

\t\t// Cancel the menu's collapseAll on document click
\t\tthis.menuInstance._closeOnDocumentClick = function() {
\t\t\treturn false;
\t\t};

\t\t// Selects often contain empty items, but never contain dividers
\t\tthis.menuInstance._isDivider = function() {
\t\t\treturn false;
\t\t};
\t},

\trefresh: function() {
\t\tthis._refreshMenu();
\t\tthis.buttonItem.replaceWith(
\t\t\tthis.buttonItem = this._renderButtonItem(

\t\t\t\t// Fall back to an empty object in case there are no options
\t\t\t\tthis._getSelectedItem().data( \"ui-selectmenu-item\" ) || {}
\t\t\t)
\t\t);
\t\tif ( this.options.width === null ) {
\t\t\tthis._resizeButton();
\t\t}
\t},

\t_refreshMenu: function() {
\t\tvar item,
\t\t\toptions = this.element.find( \"option\" );

\t\tthis.menu.empty();

\t\tthis._parseOptions( options );
\t\tthis._renderMenu( this.menu, this.items );

\t\tthis.menuInstance.refresh();
\t\tthis.menuItems = this.menu.find( \"li\" )
\t\t\t.not( \".ui-selectmenu-optgroup\" )
\t\t\t\t.find( \".ui-menu-item-wrapper\" );

\t\tthis._rendered = true;

\t\tif ( !options.length ) {
\t\t\treturn;
\t\t}

\t\titem = this._getSelectedItem();

\t\t// Update the menu to have the correct item focused
\t\tthis.menuInstance.focus( null, item );
\t\tthis._setAria( item.data( \"ui-selectmenu-item\" ) );

\t\t// Set disabled state
\t\tthis._setOption( \"disabled\", this.element.prop( \"disabled\" ) );
\t},

\topen: function( event ) {
\t\tif ( this.options.disabled ) {
\t\t\treturn;
\t\t}

\t\t// If this is the first time the menu is being opened, render the items
\t\tif ( !this._rendered ) {
\t\t\tthis._refreshMenu();
\t\t} else {

\t\t\t// Menu clears focus on close, reset focus to selected item
\t\t\tthis._removeClass( this.menu.find( \".ui-state-active\" ), null, \"ui-state-active\" );
\t\t\tthis.menuInstance.focus( null, this._getSelectedItem() );
\t\t}

\t\t// If there are no options, don't open the menu
\t\tif ( !this.menuItems.length ) {
\t\t\treturn;
\t\t}

\t\tthis.isOpen = true;
\t\tthis._toggleAttr();
\t\tthis._resizeMenu();
\t\tthis._position();

\t\tthis._on( this.document, this._documentClick );

\t\tthis._trigger( \"open\", event );
\t},

\t_position: function() {
\t\tthis.menuWrap.position( \$.extend( { of: this.button }, this.options.position ) );
\t},

\tclose: function( event ) {
\t\tif ( !this.isOpen ) {
\t\t\treturn;
\t\t}

\t\tthis.isOpen = false;
\t\tthis._toggleAttr();

\t\tthis.range = null;
\t\tthis._off( this.document );

\t\tthis._trigger( \"close\", event );
\t},

\twidget: function() {
\t\treturn this.button;
\t},

\tmenuWidget: function() {
\t\treturn this.menu;
\t},

\t_renderButtonItem: function( item ) {
\t\tvar buttonItem = \$( \"<span>\" );

\t\tthis._setText( buttonItem, item.label );
\t\tthis._addClass( buttonItem, \"ui-selectmenu-text\" );

\t\treturn buttonItem;
\t},

\t_renderMenu: function( ul, items ) {
\t\tvar that = this,
\t\t\tcurrentOptgroup = \"\";

\t\t\$.each( items, function( index, item ) {
\t\t\tvar li;

\t\t\tif ( item.optgroup !== currentOptgroup ) {
\t\t\t\tli = \$( \"<li>\", {
\t\t\t\t\ttext: item.optgroup
\t\t\t\t} );
\t\t\t\tthat._addClass( li, \"ui-selectmenu-optgroup\", \"ui-menu-divider\" +
\t\t\t\t\t( item.element.parent( \"optgroup\" ).prop( \"disabled\" ) ?
\t\t\t\t\t\t\" ui-state-disabled\" :
\t\t\t\t\t\t\"\" ) );

\t\t\t\tli.appendTo( ul );

\t\t\t\tcurrentOptgroup = item.optgroup;
\t\t\t}

\t\t\tthat._renderItemData( ul, item );
\t\t} );
\t},

\t_renderItemData: function( ul, item ) {
\t\treturn this._renderItem( ul, item ).data( \"ui-selectmenu-item\", item );
\t},

\t_renderItem: function( ul, item ) {
\t\tvar li = \$( \"<li>\" ),
\t\t\twrapper = \$( \"<div>\", {
\t\t\t\ttitle: item.element.attr( \"title\" )
\t\t\t} );

\t\tif ( item.disabled ) {
\t\t\tthis._addClass( li, null, \"ui-state-disabled\" );
\t\t}
\t\tthis._setText( wrapper, item.label );

\t\treturn li.append( wrapper ).appendTo( ul );
\t},

\t_setText: function( element, value ) {
\t\tif ( value ) {
\t\t\telement.text( value );
\t\t} else {
\t\t\telement.html( \"&#160;\" );
\t\t}
\t},

\t_move: function( direction, event ) {
\t\tvar item, next,
\t\t\tfilter = \".ui-menu-item\";

\t\tif ( this.isOpen ) {
\t\t\titem = this.menuItems.eq( this.focusIndex ).parent( \"li\" );
\t\t} else {
\t\t\titem = this.menuItems.eq( this.element[ 0 ].selectedIndex ).parent( \"li\" );
\t\t\tfilter += \":not(.ui-state-disabled)\";
\t\t}

\t\tif ( direction === \"first\" || direction === \"last\" ) {
\t\t\tnext = item[ direction === \"first\" ? \"prevAll\" : \"nextAll\" ]( filter ).eq( -1 );
\t\t} else {
\t\t\tnext = item[ direction + \"All\" ]( filter ).eq( 0 );
\t\t}

\t\tif ( next.length ) {
\t\t\tthis.menuInstance.focus( event, next );
\t\t}
\t},

\t_getSelectedItem: function() {
\t\treturn this.menuItems.eq( this.element[ 0 ].selectedIndex ).parent( \"li\" );
\t},

\t_toggle: function( event ) {
\t\tthis[ this.isOpen ? \"close\" : \"open\" ]( event );
\t},

\t_setSelection: function() {
\t\tvar selection;

\t\tif ( !this.range ) {
\t\t\treturn;
\t\t}

\t\tif ( window.getSelection ) {
\t\t\tselection = window.getSelection();
\t\t\tselection.removeAllRanges();
\t\t\tselection.addRange( this.range );

\t\t// Support: IE8
\t\t} else {
\t\t\tthis.range.select();
\t\t}

\t\t// Support: IE
\t\t// Setting the text selection kills the button focus in IE, but
\t\t// restoring the focus doesn't kill the selection.
\t\tthis.button.focus();
\t},

\t_documentClick: {
\t\tmousedown: function( event ) {
\t\t\tif ( !this.isOpen ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( !\$( event.target ).closest( \".ui-selectmenu-menu, #\" +
\t\t\t\t\t\$.ui.escapeSelector( this.ids.button ) ).length ) {
\t\t\t\tthis.close( event );
\t\t\t}
\t\t}
\t},

\t_buttonEvents: {

\t\t// Prevent text selection from being reset when interacting with the selectmenu (#10144)
\t\tmousedown: function() {
\t\t\tvar selection;

\t\t\tif ( window.getSelection ) {
\t\t\t\tselection = window.getSelection();
\t\t\t\tif ( selection.rangeCount ) {
\t\t\t\t\tthis.range = selection.getRangeAt( 0 );
\t\t\t\t}

\t\t\t// Support: IE8
\t\t\t} else {
\t\t\t\tthis.range = document.selection.createRange();
\t\t\t}
\t\t},

\t\tclick: function( event ) {
\t\t\tthis._setSelection();
\t\t\tthis._toggle( event );
\t\t},

\t\tkeydown: function( event ) {
\t\t\tvar preventDefault = true;
\t\t\tswitch ( event.keyCode ) {
\t\t\tcase \$.ui.keyCode.TAB:
\t\t\tcase \$.ui.keyCode.ESCAPE:
\t\t\t\tthis.close( event );
\t\t\t\tpreventDefault = false;
\t\t\t\tbreak;
\t\t\tcase \$.ui.keyCode.ENTER:
\t\t\t\tif ( this.isOpen ) {
\t\t\t\t\tthis._selectFocusedItem( event );
\t\t\t\t}
\t\t\t\tbreak;
\t\t\tcase \$.ui.keyCode.UP:
\t\t\t\tif ( event.altKey ) {
\t\t\t\t\tthis._toggle( event );
\t\t\t\t} else {
\t\t\t\t\tthis._move( \"prev\", event );
\t\t\t\t}
\t\t\t\tbreak;
\t\t\tcase \$.ui.keyCode.DOWN:
\t\t\t\tif ( event.altKey ) {
\t\t\t\t\tthis._toggle( event );
\t\t\t\t} else {
\t\t\t\t\tthis._move( \"next\", event );
\t\t\t\t}
\t\t\t\tbreak;
\t\t\tcase \$.ui.keyCode.SPACE:
\t\t\t\tif ( this.isOpen ) {
\t\t\t\t\tthis._selectFocusedItem( event );
\t\t\t\t} else {
\t\t\t\t\tthis._toggle( event );
\t\t\t\t}
\t\t\t\tbreak;
\t\t\tcase \$.ui.keyCode.LEFT:
\t\t\t\tthis._move( \"prev\", event );
\t\t\t\tbreak;
\t\t\tcase \$.ui.keyCode.RIGHT:
\t\t\t\tthis._move( \"next\", event );
\t\t\t\tbreak;
\t\t\tcase \$.ui.keyCode.HOME:
\t\t\tcase \$.ui.keyCode.PAGE_UP:
\t\t\t\tthis._move( \"first\", event );
\t\t\t\tbreak;
\t\t\tcase \$.ui.keyCode.END:
\t\t\tcase \$.ui.keyCode.PAGE_DOWN:
\t\t\t\tthis._move( \"last\", event );
\t\t\t\tbreak;
\t\t\tdefault:
\t\t\t\tthis.menu.trigger( event );
\t\t\t\tpreventDefault = false;
\t\t\t}

\t\t\tif ( preventDefault ) {
\t\t\t\tevent.preventDefault();
\t\t\t}
\t\t}
\t},

\t_selectFocusedItem: function( event ) {
\t\tvar item = this.menuItems.eq( this.focusIndex ).parent( \"li\" );
\t\tif ( !item.hasClass( \"ui-state-disabled\" ) ) {
\t\t\tthis._select( item.data( \"ui-selectmenu-item\" ), event );
\t\t}
\t},

\t_select: function( item, event ) {
\t\tvar oldIndex = this.element[ 0 ].selectedIndex;

\t\t// Change native select element
\t\tthis.element[ 0 ].selectedIndex = item.index;
\t\tthis.buttonItem.replaceWith( this.buttonItem = this._renderButtonItem( item ) );
\t\tthis._setAria( item );
\t\tthis._trigger( \"select\", event, { item: item } );

\t\tif ( item.index !== oldIndex ) {
\t\t\tthis._trigger( \"change\", event, { item: item } );
\t\t}

\t\tthis.close( event );
\t},

\t_setAria: function( item ) {
\t\tvar id = this.menuItems.eq( item.index ).attr( \"id\" );

\t\tthis.button.attr( {
\t\t\t\"aria-labelledby\": id,
\t\t\t\"aria-activedescendant\": id
\t\t} );
\t\tthis.menu.attr( \"aria-activedescendant\", id );
\t},

\t_setOption: function( key, value ) {
\t\tif ( key === \"icons\" ) {
\t\t\tvar icon = this.button.find( \"span.ui-icon\" );
\t\t\tthis._removeClass( icon, null, this.options.icons.button )
\t\t\t\t._addClass( icon, null, value.button );
\t\t}

\t\tthis._super( key, value );

\t\tif ( key === \"appendTo\" ) {
\t\t\tthis.menuWrap.appendTo( this._appendTo() );
\t\t}

\t\tif ( key === \"width\" ) {
\t\t\tthis._resizeButton();
\t\t}
\t},

\t_setOptionDisabled: function( value ) {
\t\tthis._super( value );

\t\tthis.menuInstance.option( \"disabled\", value );
\t\tthis.button.attr( \"aria-disabled\", value );
\t\tthis._toggleClass( this.button, null, \"ui-state-disabled\", value );

\t\tthis.element.prop( \"disabled\", value );
\t\tif ( value ) {
\t\t\tthis.button.attr( \"tabindex\", -1 );
\t\t\tthis.close();
\t\t} else {
\t\t\tthis.button.attr( \"tabindex\", 0 );
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

\t_toggleAttr: function() {
\t\tthis.button.attr( \"aria-expanded\", this.isOpen );

\t\t// We can't use two _toggleClass() calls here, because we need to make sure
\t\t// we always remove classes first and add them second, otherwise if both classes have the
\t\t// same theme class, it will be removed after we add it.
\t\tthis._removeClass( this.button, \"ui-selectmenu-button-\" +
\t\t\t( this.isOpen ? \"closed\" : \"open\" ) )
\t\t\t._addClass( this.button, \"ui-selectmenu-button-\" +
\t\t\t\t( this.isOpen ? \"open\" : \"closed\" ) )
\t\t\t._toggleClass( this.menuWrap, \"ui-selectmenu-open\", null, this.isOpen );

\t\tthis.menu.attr( \"aria-hidden\", !this.isOpen );
\t},

\t_resizeButton: function() {
\t\tvar width = this.options.width;

\t\t// For `width: false`, just remove inline style and stop
\t\tif ( width === false ) {
\t\t\tthis.button.css( \"width\", \"\" );
\t\t\treturn;
\t\t}

\t\t// For `width: null`, match the width of the original element
\t\tif ( width === null ) {
\t\t\twidth = this.element.show().outerWidth();
\t\t\tthis.element.hide();
\t\t}

\t\tthis.button.outerWidth( width );
\t},

\t_resizeMenu: function() {
\t\tthis.menu.outerWidth( Math.max(
\t\t\tthis.button.outerWidth(),

\t\t\t// Support: IE10
\t\t\t// IE10 wraps long text (possibly a rounding bug)
\t\t\t// so we add 1px to avoid the wrapping
\t\t\tthis.menu.width( \"\" ).outerWidth() + 1
\t\t) );
\t},

\t_getCreateOptions: function() {
\t\tvar options = this._super();

\t\toptions.disabled = this.element.prop( \"disabled\" );

\t\treturn options;
\t},

\t_parseOptions: function( options ) {
\t\tvar that = this,
\t\t\tdata = [];
\t\toptions.each( function( index, item ) {
\t\t\tdata.push( that._parseOption( \$( item ), index ) );
\t\t} );
\t\tthis.items = data;
\t},

\t_parseOption: function( option, index ) {
\t\tvar optgroup = option.parent( \"optgroup\" );

\t\treturn {
\t\t\telement: option,
\t\t\tindex: index,
\t\t\tvalue: option.val(),
\t\t\tlabel: option.text(),
\t\t\toptgroup: optgroup.attr( \"label\" ) || \"\",
\t\t\tdisabled: optgroup.prop( \"disabled\" ) || option.prop( \"disabled\" )
\t\t};
\t},

\t_destroy: function() {
\t\tthis._unbindFormResetHandler();
\t\tthis.menuWrap.remove();
\t\tthis.button.remove();
\t\tthis.element.show();
\t\tthis.element.removeUniqueId();
\t\tthis.labels.attr( \"for\", this.ids.element );
\t}
} ] );

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/selectmenu.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/selectmenu.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/selectmenu.js");
    }
}
