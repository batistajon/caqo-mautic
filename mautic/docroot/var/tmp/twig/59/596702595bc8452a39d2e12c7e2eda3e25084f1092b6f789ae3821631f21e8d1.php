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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/menu.js */
class __TwigTemplate_3120b140fa77632428de91f9bfde93a80f1711e617bd51fa72b729cc21b7e6c4 extends Template
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
 * jQuery UI Menu 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Menu
//>>group: Widgets
//>>description: Creates nestable menus.
//>>docs: http://api.jqueryui.com/menu/
//>>demos: http://jqueryui.com/menu/
//>>css.structure: ../../themes/base/core.css
//>>css.structure: ../../themes/base/menu.css
//>>css.theme: ../../themes/base/theme.css

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"../keycode\",
\t\t\t\"../position\",
\t\t\t\"../safe-active-element\",
\t\t\t\"../unique-id\",
\t\t\t\"../version\",
\t\t\t\"../widget\"
\t\t], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

return \$.widget( \"ui.menu\", {
\tversion: \"1.12.1\",
\tdefaultElement: \"<ul>\",
\tdelay: 300,
\toptions: {
\t\ticons: {
\t\t\tsubmenu: \"ui-icon-caret-1-e\"
\t\t},
\t\titems: \"> *\",
\t\tmenus: \"ul\",
\t\tposition: {
\t\t\tmy: \"left top\",
\t\t\tat: \"right top\"
\t\t},
\t\trole: \"menu\",

\t\t// Callbacks
\t\tblur: null,
\t\tfocus: null,
\t\tselect: null
\t},

\t_create: function() {
\t\tthis.activeMenu = this.element;

\t\t// Flag used to prevent firing of the click handler
\t\t// as the event bubbles up through nested menus
\t\tthis.mouseHandled = false;
\t\tthis.element
\t\t\t.uniqueId()
\t\t\t.attr( {
\t\t\t\trole: this.options.role,
\t\t\t\ttabIndex: 0
\t\t\t} );

\t\tthis._addClass( \"ui-menu\", \"ui-widget ui-widget-content\" );
\t\tthis._on( {

\t\t\t// Prevent focus from sticking to links inside menu after clicking
\t\t\t// them (focus should always stay on UL during navigation).
\t\t\t\"mousedown .ui-menu-item\": function( event ) {
\t\t\t\tevent.preventDefault();
\t\t\t},
\t\t\t\"click .ui-menu-item\": function( event ) {
\t\t\t\tvar target = \$( event.target );
\t\t\t\tvar active = \$( \$.ui.safeActiveElement( this.document[ 0 ] ) );
\t\t\t\tif ( !this.mouseHandled && target.not( \".ui-state-disabled\" ).length ) {
\t\t\t\t\tthis.select( event );

\t\t\t\t\t// Only set the mouseHandled flag if the event will bubble, see #9469.
\t\t\t\t\tif ( !event.isPropagationStopped() ) {
\t\t\t\t\t\tthis.mouseHandled = true;
\t\t\t\t\t}

\t\t\t\t\t// Open submenu on click
\t\t\t\t\tif ( target.has( \".ui-menu\" ).length ) {
\t\t\t\t\t\tthis.expand( event );
\t\t\t\t\t} else if ( !this.element.is( \":focus\" ) &&
\t\t\t\t\t\t\tactive.closest( \".ui-menu\" ).length ) {

\t\t\t\t\t\t// Redirect focus to the menu
\t\t\t\t\t\tthis.element.trigger( \"focus\", [ true ] );

\t\t\t\t\t\t// If the active item is on the top level, let it stay active.
\t\t\t\t\t\t// Otherwise, blur the active item since it is no longer visible.
\t\t\t\t\t\tif ( this.active && this.active.parents( \".ui-menu\" ).length === 1 ) {
\t\t\t\t\t\t\tclearTimeout( this.timer );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\t\"mouseenter .ui-menu-item\": function( event ) {

\t\t\t\t// Ignore mouse events while typeahead is active, see #10458.
\t\t\t\t// Prevents focusing the wrong item when typeahead causes a scroll while the mouse
\t\t\t\t// is over an item in the menu
\t\t\t\tif ( this.previousFilter ) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tvar actualTarget = \$( event.target ).closest( \".ui-menu-item\" ),
\t\t\t\t\ttarget = \$( event.currentTarget );

\t\t\t\t// Ignore bubbled events on parent items, see #11641
\t\t\t\tif ( actualTarget[ 0 ] !== target[ 0 ] ) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t// Remove ui-state-active class from siblings of the newly focused menu item
\t\t\t\t// to avoid a jump caused by adjacent elements both having a class with a border
\t\t\t\tthis._removeClass( target.siblings().children( \".ui-state-active\" ),
\t\t\t\t\tnull, \"ui-state-active\" );
\t\t\t\tthis.focus( event, target );
\t\t\t},
\t\t\tmouseleave: \"collapseAll\",
\t\t\t\"mouseleave .ui-menu\": \"collapseAll\",
\t\t\tfocus: function( event, keepActiveItem ) {

\t\t\t\t// If there's already an active item, keep it active
\t\t\t\t// If not, activate the first item
\t\t\t\tvar item = this.active || this.element.find( this.options.items ).eq( 0 );

\t\t\t\tif ( !keepActiveItem ) {
\t\t\t\t\tthis.focus( event, item );
\t\t\t\t}
\t\t\t},
\t\t\tblur: function( event ) {
\t\t\t\tthis._delay( function() {
\t\t\t\t\tvar notContained = !\$.contains(
\t\t\t\t\t\tthis.element[ 0 ],
\t\t\t\t\t\t\$.ui.safeActiveElement( this.document[ 0 ] )
\t\t\t\t\t);
\t\t\t\t\tif ( notContained ) {
\t\t\t\t\t\tthis.collapseAll( event );
\t\t\t\t\t}
\t\t\t\t} );
\t\t\t},
\t\t\tkeydown: \"_keydown\"
\t\t} );

\t\tthis.refresh();

\t\t// Clicks outside of a menu collapse any open menus
\t\tthis._on( this.document, {
\t\t\tclick: function( event ) {
\t\t\t\tif ( this._closeOnDocumentClick( event ) ) {
\t\t\t\t\tthis.collapseAll( event );
\t\t\t\t}

\t\t\t\t// Reset the mouseHandled flag
\t\t\t\tthis.mouseHandled = false;
\t\t\t}
\t\t} );
\t},

\t_destroy: function() {
\t\tvar items = this.element.find( \".ui-menu-item\" )
\t\t\t\t.removeAttr( \"role aria-disabled\" ),
\t\t\tsubmenus = items.children( \".ui-menu-item-wrapper\" )
\t\t\t\t.removeUniqueId()
\t\t\t\t.removeAttr( \"tabIndex role aria-haspopup\" );

\t\t// Destroy (sub)menus
\t\tthis.element
\t\t\t.removeAttr( \"aria-activedescendant\" )
\t\t\t.find( \".ui-menu\" ).addBack()
\t\t\t\t.removeAttr( \"role aria-labelledby aria-expanded aria-hidden aria-disabled \" +
\t\t\t\t\t\"tabIndex\" )
\t\t\t\t.removeUniqueId()
\t\t\t\t.show();

\t\tsubmenus.children().each( function() {
\t\t\tvar elem = \$( this );
\t\t\tif ( elem.data( \"ui-menu-submenu-caret\" ) ) {
\t\t\t\telem.remove();
\t\t\t}
\t\t} );
\t},

\t_keydown: function( event ) {
\t\tvar match, prev, character, skip,
\t\t\tpreventDefault = true;

\t\tswitch ( event.keyCode ) {
\t\tcase \$.ui.keyCode.PAGE_UP:
\t\t\tthis.previousPage( event );
\t\t\tbreak;
\t\tcase \$.ui.keyCode.PAGE_DOWN:
\t\t\tthis.nextPage( event );
\t\t\tbreak;
\t\tcase \$.ui.keyCode.HOME:
\t\t\tthis._move( \"first\", \"first\", event );
\t\t\tbreak;
\t\tcase \$.ui.keyCode.END:
\t\t\tthis._move( \"last\", \"last\", event );
\t\t\tbreak;
\t\tcase \$.ui.keyCode.UP:
\t\t\tthis.previous( event );
\t\t\tbreak;
\t\tcase \$.ui.keyCode.DOWN:
\t\t\tthis.next( event );
\t\t\tbreak;
\t\tcase \$.ui.keyCode.LEFT:
\t\t\tthis.collapse( event );
\t\t\tbreak;
\t\tcase \$.ui.keyCode.RIGHT:
\t\t\tif ( this.active && !this.active.is( \".ui-state-disabled\" ) ) {
\t\t\t\tthis.expand( event );
\t\t\t}
\t\t\tbreak;
\t\tcase \$.ui.keyCode.ENTER:
\t\tcase \$.ui.keyCode.SPACE:
\t\t\tthis._activate( event );
\t\t\tbreak;
\t\tcase \$.ui.keyCode.ESCAPE:
\t\t\tthis.collapse( event );
\t\t\tbreak;
\t\tdefault:
\t\t\tpreventDefault = false;
\t\t\tprev = this.previousFilter || \"\";
\t\t\tskip = false;

\t\t\t// Support number pad values
\t\t\tcharacter = event.keyCode >= 96 && event.keyCode <= 105 ?
\t\t\t\t( event.keyCode - 96 ).toString() : String.fromCharCode( event.keyCode );

\t\t\tclearTimeout( this.filterTimer );

\t\t\tif ( character === prev ) {
\t\t\t\tskip = true;
\t\t\t} else {
\t\t\t\tcharacter = prev + character;
\t\t\t}

\t\t\tmatch = this._filterMenuItems( character );
\t\t\tmatch = skip && match.index( this.active.next() ) !== -1 ?
\t\t\t\tthis.active.nextAll( \".ui-menu-item\" ) :
\t\t\t\tmatch;

\t\t\t// If no matches on the current filter, reset to the last character pressed
\t\t\t// to move down the menu to the first item that starts with that character
\t\t\tif ( !match.length ) {
\t\t\t\tcharacter = String.fromCharCode( event.keyCode );
\t\t\t\tmatch = this._filterMenuItems( character );
\t\t\t}

\t\t\tif ( match.length ) {
\t\t\t\tthis.focus( event, match );
\t\t\t\tthis.previousFilter = character;
\t\t\t\tthis.filterTimer = this._delay( function() {
\t\t\t\t\tdelete this.previousFilter;
\t\t\t\t}, 1000 );
\t\t\t} else {
\t\t\t\tdelete this.previousFilter;
\t\t\t}
\t\t}

\t\tif ( preventDefault ) {
\t\t\tevent.preventDefault();
\t\t}
\t},

\t_activate: function( event ) {
\t\tif ( this.active && !this.active.is( \".ui-state-disabled\" ) ) {
\t\t\tif ( this.active.children( \"[aria-haspopup='true']\" ).length ) {
\t\t\t\tthis.expand( event );
\t\t\t} else {
\t\t\t\tthis.select( event );
\t\t\t}
\t\t}
\t},

\trefresh: function() {
\t\tvar menus, items, newSubmenus, newItems, newWrappers,
\t\t\tthat = this,
\t\t\ticon = this.options.icons.submenu,
\t\t\tsubmenus = this.element.find( this.options.menus );

\t\tthis._toggleClass( \"ui-menu-icons\", null, !!this.element.find( \".ui-icon\" ).length );

\t\t// Initialize nested menus
\t\tnewSubmenus = submenus.filter( \":not(.ui-menu)\" )
\t\t\t.hide()
\t\t\t.attr( {
\t\t\t\trole: this.options.role,
\t\t\t\t\"aria-hidden\": \"true\",
\t\t\t\t\"aria-expanded\": \"false\"
\t\t\t} )
\t\t\t.each( function() {
\t\t\t\tvar menu = \$( this ),
\t\t\t\t\titem = menu.prev(),
\t\t\t\t\tsubmenuCaret = \$( \"<span>\" ).data( \"ui-menu-submenu-caret\", true );

\t\t\t\tthat._addClass( submenuCaret, \"ui-menu-icon\", \"ui-icon \" + icon );
\t\t\t\titem
\t\t\t\t\t.attr( \"aria-haspopup\", \"true\" )
\t\t\t\t\t.prepend( submenuCaret );
\t\t\t\tmenu.attr( \"aria-labelledby\", item.attr( \"id\" ) );
\t\t\t} );

\t\tthis._addClass( newSubmenus, \"ui-menu\", \"ui-widget ui-widget-content ui-front\" );

\t\tmenus = submenus.add( this.element );
\t\titems = menus.find( this.options.items );

\t\t// Initialize menu-items containing spaces and/or dashes only as dividers
\t\titems.not( \".ui-menu-item\" ).each( function() {
\t\t\tvar item = \$( this );
\t\t\tif ( that._isDivider( item ) ) {
\t\t\t\tthat._addClass( item, \"ui-menu-divider\", \"ui-widget-content\" );
\t\t\t}
\t\t} );

\t\t// Don't refresh list items that are already adapted
\t\tnewItems = items.not( \".ui-menu-item, .ui-menu-divider\" );
\t\tnewWrappers = newItems.children()
\t\t\t.not( \".ui-menu\" )
\t\t\t\t.uniqueId()
\t\t\t\t.attr( {
\t\t\t\t\ttabIndex: -1,
\t\t\t\t\trole: this._itemRole()
\t\t\t\t} );
\t\tthis._addClass( newItems, \"ui-menu-item\" )
\t\t\t._addClass( newWrappers, \"ui-menu-item-wrapper\" );

\t\t// Add aria-disabled attribute to any disabled menu item
\t\titems.filter( \".ui-state-disabled\" ).attr( \"aria-disabled\", \"true\" );

\t\t// If the active item has been removed, blur the menu
\t\tif ( this.active && !\$.contains( this.element[ 0 ], this.active[ 0 ] ) ) {
\t\t\tthis.blur();
\t\t}
\t},

\t_itemRole: function() {
\t\treturn {
\t\t\tmenu: \"menuitem\",
\t\t\tlistbox: \"option\"
\t\t}[ this.options.role ];
\t},

\t_setOption: function( key, value ) {
\t\tif ( key === \"icons\" ) {
\t\t\tvar icons = this.element.find( \".ui-menu-icon\" );
\t\t\tthis._removeClass( icons, null, this.options.icons.submenu )
\t\t\t\t._addClass( icons, null, value.submenu );
\t\t}
\t\tthis._super( key, value );
\t},

\t_setOptionDisabled: function( value ) {
\t\tthis._super( value );

\t\tthis.element.attr( \"aria-disabled\", String( value ) );
\t\tthis._toggleClass( null, \"ui-state-disabled\", !!value );
\t},

\tfocus: function( event, item ) {
\t\tvar nested, focused, activeParent;
\t\tthis.blur( event, event && event.type === \"focus\" );

\t\tthis._scrollIntoView( item );

\t\tthis.active = item.first();

\t\tfocused = this.active.children( \".ui-menu-item-wrapper\" );
\t\tthis._addClass( focused, null, \"ui-state-active\" );

\t\t// Only update aria-activedescendant if there's a role
\t\t// otherwise we assume focus is managed elsewhere
\t\tif ( this.options.role ) {
\t\t\tthis.element.attr( \"aria-activedescendant\", focused.attr( \"id\" ) );
\t\t}

\t\t// Highlight active parent menu item, if any
\t\tactiveParent = this.active
\t\t\t.parent()
\t\t\t\t.closest( \".ui-menu-item\" )
\t\t\t\t\t.children( \".ui-menu-item-wrapper\" );
\t\tthis._addClass( activeParent, null, \"ui-state-active\" );

\t\tif ( event && event.type === \"keydown\" ) {
\t\t\tthis._close();
\t\t} else {
\t\t\tthis.timer = this._delay( function() {
\t\t\t\tthis._close();
\t\t\t}, this.delay );
\t\t}

\t\tnested = item.children( \".ui-menu\" );
\t\tif ( nested.length && event && ( /^mouse/.test( event.type ) ) ) {
\t\t\tthis._startOpening( nested );
\t\t}
\t\tthis.activeMenu = item.parent();

\t\tthis._trigger( \"focus\", event, { item: item } );
\t},

\t_scrollIntoView: function( item ) {
\t\tvar borderTop, paddingTop, offset, scroll, elementHeight, itemHeight;
\t\tif ( this._hasScroll() ) {
\t\t\tborderTop = parseFloat( \$.css( this.activeMenu[ 0 ], \"borderTopWidth\" ) ) || 0;
\t\t\tpaddingTop = parseFloat( \$.css( this.activeMenu[ 0 ], \"paddingTop\" ) ) || 0;
\t\t\toffset = item.offset().top - this.activeMenu.offset().top - borderTop - paddingTop;
\t\t\tscroll = this.activeMenu.scrollTop();
\t\t\telementHeight = this.activeMenu.height();
\t\t\titemHeight = item.outerHeight();

\t\t\tif ( offset < 0 ) {
\t\t\t\tthis.activeMenu.scrollTop( scroll + offset );
\t\t\t} else if ( offset + itemHeight > elementHeight ) {
\t\t\t\tthis.activeMenu.scrollTop( scroll + offset - elementHeight + itemHeight );
\t\t\t}
\t\t}
\t},

\tblur: function( event, fromFocus ) {
\t\tif ( !fromFocus ) {
\t\t\tclearTimeout( this.timer );
\t\t}

\t\tif ( !this.active ) {
\t\t\treturn;
\t\t}

\t\tthis._removeClass( this.active.children( \".ui-menu-item-wrapper\" ),
\t\t\tnull, \"ui-state-active\" );

\t\tthis._trigger( \"blur\", event, { item: this.active } );
\t\tthis.active = null;
\t},

\t_startOpening: function( submenu ) {
\t\tclearTimeout( this.timer );

\t\t// Don't open if already open fixes a Firefox bug that caused a .5 pixel
\t\t// shift in the submenu position when mousing over the caret icon
\t\tif ( submenu.attr( \"aria-hidden\" ) !== \"true\" ) {
\t\t\treturn;
\t\t}

\t\tthis.timer = this._delay( function() {
\t\t\tthis._close();
\t\t\tthis._open( submenu );
\t\t}, this.delay );
\t},

\t_open: function( submenu ) {
\t\tvar position = \$.extend( {
\t\t\tof: this.active
\t\t}, this.options.position );

\t\tclearTimeout( this.timer );
\t\tthis.element.find( \".ui-menu\" ).not( submenu.parents( \".ui-menu\" ) )
\t\t\t.hide()
\t\t\t.attr( \"aria-hidden\", \"true\" );

\t\tsubmenu
\t\t\t.show()
\t\t\t.removeAttr( \"aria-hidden\" )
\t\t\t.attr( \"aria-expanded\", \"true\" )
\t\t\t.position( position );
\t},

\tcollapseAll: function( event, all ) {
\t\tclearTimeout( this.timer );
\t\tthis.timer = this._delay( function() {

\t\t\t// If we were passed an event, look for the submenu that contains the event
\t\t\tvar currentMenu = all ? this.element :
\t\t\t\t\$( event && event.target ).closest( this.element.find( \".ui-menu\" ) );

\t\t\t// If we found no valid submenu ancestor, use the main menu to close all
\t\t\t// sub menus anyway
\t\t\tif ( !currentMenu.length ) {
\t\t\t\tcurrentMenu = this.element;
\t\t\t}

\t\t\tthis._close( currentMenu );

\t\t\tthis.blur( event );

\t\t\t// Work around active item staying active after menu is blurred
\t\t\tthis._removeClass( currentMenu.find( \".ui-state-active\" ), null, \"ui-state-active\" );

\t\t\tthis.activeMenu = currentMenu;
\t\t}, this.delay );
\t},

\t// With no arguments, closes the currently active menu - if nothing is active
\t// it closes all menus.  If passed an argument, it will search for menus BELOW
\t_close: function( startMenu ) {
\t\tif ( !startMenu ) {
\t\t\tstartMenu = this.active ? this.active.parent() : this.element;
\t\t}

\t\tstartMenu.find( \".ui-menu\" )
\t\t\t.hide()
\t\t\t.attr( \"aria-hidden\", \"true\" )
\t\t\t.attr( \"aria-expanded\", \"false\" );
\t},

\t_closeOnDocumentClick: function( event ) {
\t\treturn !\$( event.target ).closest( \".ui-menu\" ).length;
\t},

\t_isDivider: function( item ) {

\t\t// Match hyphen, em dash, en dash
\t\treturn !/[^\\-\\u2014\\u2013\\s]/.test( item.text() );
\t},

\tcollapse: function( event ) {
\t\tvar newItem = this.active &&
\t\t\tthis.active.parent().closest( \".ui-menu-item\", this.element );
\t\tif ( newItem && newItem.length ) {
\t\t\tthis._close();
\t\t\tthis.focus( event, newItem );
\t\t}
\t},

\texpand: function( event ) {
\t\tvar newItem = this.active &&
\t\t\tthis.active
\t\t\t\t.children( \".ui-menu \" )
\t\t\t\t\t.find( this.options.items )
\t\t\t\t\t\t.first();

\t\tif ( newItem && newItem.length ) {
\t\t\tthis._open( newItem.parent() );

\t\t\t// Delay so Firefox will not hide activedescendant change in expanding submenu from AT
\t\t\tthis._delay( function() {
\t\t\t\tthis.focus( event, newItem );
\t\t\t} );
\t\t}
\t},

\tnext: function( event ) {
\t\tthis._move( \"next\", \"first\", event );
\t},

\tprevious: function( event ) {
\t\tthis._move( \"prev\", \"last\", event );
\t},

\tisFirstItem: function() {
\t\treturn this.active && !this.active.prevAll( \".ui-menu-item\" ).length;
\t},

\tisLastItem: function() {
\t\treturn this.active && !this.active.nextAll( \".ui-menu-item\" ).length;
\t},

\t_move: function( direction, filter, event ) {
\t\tvar next;
\t\tif ( this.active ) {
\t\t\tif ( direction === \"first\" || direction === \"last\" ) {
\t\t\t\tnext = this.active
\t\t\t\t\t[ direction === \"first\" ? \"prevAll\" : \"nextAll\" ]( \".ui-menu-item\" )
\t\t\t\t\t.eq( -1 );
\t\t\t} else {
\t\t\t\tnext = this.active
\t\t\t\t\t[ direction + \"All\" ]( \".ui-menu-item\" )
\t\t\t\t\t.eq( 0 );
\t\t\t}
\t\t}
\t\tif ( !next || !next.length || !this.active ) {
\t\t\tnext = this.activeMenu.find( this.options.items )[ filter ]();
\t\t}

\t\tthis.focus( event, next );
\t},

\tnextPage: function( event ) {
\t\tvar item, base, height;

\t\tif ( !this.active ) {
\t\t\tthis.next( event );
\t\t\treturn;
\t\t}
\t\tif ( this.isLastItem() ) {
\t\t\treturn;
\t\t}
\t\tif ( this._hasScroll() ) {
\t\t\tbase = this.active.offset().top;
\t\t\theight = this.element.height();
\t\t\tthis.active.nextAll( \".ui-menu-item\" ).each( function() {
\t\t\t\titem = \$( this );
\t\t\t\treturn item.offset().top - base - height < 0;
\t\t\t} );

\t\t\tthis.focus( event, item );
\t\t} else {
\t\t\tthis.focus( event, this.activeMenu.find( this.options.items )
\t\t\t\t[ !this.active ? \"first\" : \"last\" ]() );
\t\t}
\t},

\tpreviousPage: function( event ) {
\t\tvar item, base, height;
\t\tif ( !this.active ) {
\t\t\tthis.next( event );
\t\t\treturn;
\t\t}
\t\tif ( this.isFirstItem() ) {
\t\t\treturn;
\t\t}
\t\tif ( this._hasScroll() ) {
\t\t\tbase = this.active.offset().top;
\t\t\theight = this.element.height();
\t\t\tthis.active.prevAll( \".ui-menu-item\" ).each( function() {
\t\t\t\titem = \$( this );
\t\t\t\treturn item.offset().top - base + height > 0;
\t\t\t} );

\t\t\tthis.focus( event, item );
\t\t} else {
\t\t\tthis.focus( event, this.activeMenu.find( this.options.items ).first() );
\t\t}
\t},

\t_hasScroll: function() {
\t\treturn this.element.outerHeight() < this.element.prop( \"scrollHeight\" );
\t},

\tselect: function( event ) {

\t\t// TODO: It should never be possible to not have an active item at this
\t\t// point, but the tests don't trigger mouseenter before click.
\t\tthis.active = this.active || \$( event.target ).closest( \".ui-menu-item\" );
\t\tvar ui = { item: this.active };
\t\tif ( !this.active.has( \".ui-menu\" ).length ) {
\t\t\tthis.collapseAll( event, true );
\t\t}
\t\tthis._trigger( \"select\", event, ui );
\t},

\t_filterMenuItems: function( character ) {
\t\tvar escapedCharacter = character.replace( /[\\-\\[\\]{}()*+?.,\\\\\\^\$|#\\s]/g, \"\\\\\$&\" ),
\t\t\tregex = new RegExp( \"^\" + escapedCharacter, \"i\" );

\t\treturn this.activeMenu
\t\t\t.find( this.options.items )

\t\t\t\t// Only match on items, not dividers or other content (#10571)
\t\t\t\t.filter( \".ui-menu-item\" )
\t\t\t\t\t.filter( function() {
\t\t\t\t\t\treturn regex.test(
\t\t\t\t\t\t\t\$.trim( \$( this ).children( \".ui-menu-item-wrapper\" ).text() ) );
\t\t\t\t\t} );
\t}
} );

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/menu.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/menu.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/menu.js");
    }
}
