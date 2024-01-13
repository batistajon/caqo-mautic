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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/tabs.js */
class __TwigTemplate_79237f2ba9c0a33b97f83e053db5332637a6d091d1ac9757a05c22c874e3ca2c extends Template
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
 * jQuery UI Tabs 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Tabs
//>>group: Widgets
//>>description: Transforms a set of container elements into a tab structure.
//>>docs: http://api.jqueryui.com/tabs/
//>>demos: http://jqueryui.com/tabs/
//>>css.structure: ../../themes/base/core.css
//>>css.structure: ../../themes/base/tabs.css
//>>css.theme: ../../themes/base/theme.css

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"../escape-selector\",
\t\t\t\"../keycode\",
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

\$.widget( \"ui.tabs\", {
\tversion: \"1.12.1\",
\tdelay: 300,
\toptions: {
\t\tactive: null,
\t\tclasses: {
\t\t\t\"ui-tabs\": \"ui-corner-all\",
\t\t\t\"ui-tabs-nav\": \"ui-corner-all\",
\t\t\t\"ui-tabs-panel\": \"ui-corner-bottom\",
\t\t\t\"ui-tabs-tab\": \"ui-corner-top\"
\t\t},
\t\tcollapsible: false,
\t\tevent: \"click\",
\t\theightStyle: \"content\",
\t\thide: null,
\t\tshow: null,

\t\t// Callbacks
\t\tactivate: null,
\t\tbeforeActivate: null,
\t\tbeforeLoad: null,
\t\tload: null
\t},

\t_isLocal: ( function() {
\t\tvar rhash = /#.*\$/;

\t\treturn function( anchor ) {
\t\t\tvar anchorUrl, locationUrl;

\t\t\tanchorUrl = anchor.href.replace( rhash, \"\" );
\t\t\tlocationUrl = location.href.replace( rhash, \"\" );

\t\t\t// Decoding may throw an error if the URL isn't UTF-8 (#9518)
\t\t\ttry {
\t\t\t\tanchorUrl = decodeURIComponent( anchorUrl );
\t\t\t} catch ( error ) {}
\t\t\ttry {
\t\t\t\tlocationUrl = decodeURIComponent( locationUrl );
\t\t\t} catch ( error ) {}

\t\t\treturn anchor.hash.length > 1 && anchorUrl === locationUrl;
\t\t};
\t} )(),

\t_create: function() {
\t\tvar that = this,
\t\t\toptions = this.options;

\t\tthis.running = false;

\t\tthis._addClass( \"ui-tabs\", \"ui-widget ui-widget-content\" );
\t\tthis._toggleClass( \"ui-tabs-collapsible\", null, options.collapsible );

\t\tthis._processTabs();
\t\toptions.active = this._initialActive();

\t\t// Take disabling tabs via class attribute from HTML
\t\t// into account and update option properly.
\t\tif ( \$.isArray( options.disabled ) ) {
\t\t\toptions.disabled = \$.unique( options.disabled.concat(
\t\t\t\t\$.map( this.tabs.filter( \".ui-state-disabled\" ), function( li ) {
\t\t\t\t\treturn that.tabs.index( li );
\t\t\t\t} )
\t\t\t) ).sort();
\t\t}

\t\t// Check for length avoids error when initializing empty list
\t\tif ( this.options.active !== false && this.anchors.length ) {
\t\t\tthis.active = this._findActive( options.active );
\t\t} else {
\t\t\tthis.active = \$();
\t\t}

\t\tthis._refresh();

\t\tif ( this.active.length ) {
\t\t\tthis.load( options.active );
\t\t}
\t},

\t_initialActive: function() {
\t\tvar active = this.options.active,
\t\t\tcollapsible = this.options.collapsible,
\t\t\tlocationHash = location.hash.substring( 1 );

\t\tif ( active === null ) {

\t\t\t// check the fragment identifier in the URL
\t\t\tif ( locationHash ) {
\t\t\t\tthis.tabs.each( function( i, tab ) {
\t\t\t\t\tif ( \$( tab ).attr( \"aria-controls\" ) === locationHash ) {
\t\t\t\t\t\tactive = i;
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t} );
\t\t\t}

\t\t\t// Check for a tab marked active via a class
\t\t\tif ( active === null ) {
\t\t\t\tactive = this.tabs.index( this.tabs.filter( \".ui-tabs-active\" ) );
\t\t\t}

\t\t\t// No active tab, set to false
\t\t\tif ( active === null || active === -1 ) {
\t\t\t\tactive = this.tabs.length ? 0 : false;
\t\t\t}
\t\t}

\t\t// Handle numbers: negative, out of range
\t\tif ( active !== false ) {
\t\t\tactive = this.tabs.index( this.tabs.eq( active ) );
\t\t\tif ( active === -1 ) {
\t\t\t\tactive = collapsible ? false : 0;
\t\t\t}
\t\t}

\t\t// Don't allow collapsible: false and active: false
\t\tif ( !collapsible && active === false && this.anchors.length ) {
\t\t\tactive = 0;
\t\t}

\t\treturn active;
\t},

\t_getCreateEventData: function() {
\t\treturn {
\t\t\ttab: this.active,
\t\t\tpanel: !this.active.length ? \$() : this._getPanelForTab( this.active )
\t\t};
\t},

\t_tabKeydown: function( event ) {
\t\tvar focusedTab = \$( \$.ui.safeActiveElement( this.document[ 0 ] ) ).closest( \"li\" ),
\t\t\tselectedIndex = this.tabs.index( focusedTab ),
\t\t\tgoingForward = true;

\t\tif ( this._handlePageNav( event ) ) {
\t\t\treturn;
\t\t}

\t\tswitch ( event.keyCode ) {
\t\tcase \$.ui.keyCode.RIGHT:
\t\tcase \$.ui.keyCode.DOWN:
\t\t\tselectedIndex++;
\t\t\tbreak;
\t\tcase \$.ui.keyCode.UP:
\t\tcase \$.ui.keyCode.LEFT:
\t\t\tgoingForward = false;
\t\t\tselectedIndex--;
\t\t\tbreak;
\t\tcase \$.ui.keyCode.END:
\t\t\tselectedIndex = this.anchors.length - 1;
\t\t\tbreak;
\t\tcase \$.ui.keyCode.HOME:
\t\t\tselectedIndex = 0;
\t\t\tbreak;
\t\tcase \$.ui.keyCode.SPACE:

\t\t\t// Activate only, no collapsing
\t\t\tevent.preventDefault();
\t\t\tclearTimeout( this.activating );
\t\t\tthis._activate( selectedIndex );
\t\t\treturn;
\t\tcase \$.ui.keyCode.ENTER:

\t\t\t// Toggle (cancel delayed activation, allow collapsing)
\t\t\tevent.preventDefault();
\t\t\tclearTimeout( this.activating );

\t\t\t// Determine if we should collapse or activate
\t\t\tthis._activate( selectedIndex === this.options.active ? false : selectedIndex );
\t\t\treturn;
\t\tdefault:
\t\t\treturn;
\t\t}

\t\t// Focus the appropriate tab, based on which key was pressed
\t\tevent.preventDefault();
\t\tclearTimeout( this.activating );
\t\tselectedIndex = this._focusNextTab( selectedIndex, goingForward );

\t\t// Navigating with control/command key will prevent automatic activation
\t\tif ( !event.ctrlKey && !event.metaKey ) {

\t\t\t// Update aria-selected immediately so that AT think the tab is already selected.
\t\t\t// Otherwise AT may confuse the user by stating that they need to activate the tab,
\t\t\t// but the tab will already be activated by the time the announcement finishes.
\t\t\tfocusedTab.attr( \"aria-selected\", \"false\" );
\t\t\tthis.tabs.eq( selectedIndex ).attr( \"aria-selected\", \"true\" );

\t\t\tthis.activating = this._delay( function() {
\t\t\t\tthis.option( \"active\", selectedIndex );
\t\t\t}, this.delay );
\t\t}
\t},

\t_panelKeydown: function( event ) {
\t\tif ( this._handlePageNav( event ) ) {
\t\t\treturn;
\t\t}

\t\t// Ctrl+up moves focus to the current tab
\t\tif ( event.ctrlKey && event.keyCode === \$.ui.keyCode.UP ) {
\t\t\tevent.preventDefault();
\t\t\tthis.active.trigger( \"focus\" );
\t\t}
\t},

\t// Alt+page up/down moves focus to the previous/next tab (and activates)
\t_handlePageNav: function( event ) {
\t\tif ( event.altKey && event.keyCode === \$.ui.keyCode.PAGE_UP ) {
\t\t\tthis._activate( this._focusNextTab( this.options.active - 1, false ) );
\t\t\treturn true;
\t\t}
\t\tif ( event.altKey && event.keyCode === \$.ui.keyCode.PAGE_DOWN ) {
\t\t\tthis._activate( this._focusNextTab( this.options.active + 1, true ) );
\t\t\treturn true;
\t\t}
\t},

\t_findNextTab: function( index, goingForward ) {
\t\tvar lastTabIndex = this.tabs.length - 1;

\t\tfunction constrain() {
\t\t\tif ( index > lastTabIndex ) {
\t\t\t\tindex = 0;
\t\t\t}
\t\t\tif ( index < 0 ) {
\t\t\t\tindex = lastTabIndex;
\t\t\t}
\t\t\treturn index;
\t\t}

\t\twhile ( \$.inArray( constrain(), this.options.disabled ) !== -1 ) {
\t\t\tindex = goingForward ? index + 1 : index - 1;
\t\t}

\t\treturn index;
\t},

\t_focusNextTab: function( index, goingForward ) {
\t\tindex = this._findNextTab( index, goingForward );
\t\tthis.tabs.eq( index ).trigger( \"focus\" );
\t\treturn index;
\t},

\t_setOption: function( key, value ) {
\t\tif ( key === \"active\" ) {

\t\t\t// _activate() will handle invalid values and update this.options
\t\t\tthis._activate( value );
\t\t\treturn;
\t\t}

\t\tthis._super( key, value );

\t\tif ( key === \"collapsible\" ) {
\t\t\tthis._toggleClass( \"ui-tabs-collapsible\", null, value );

\t\t\t// Setting collapsible: false while collapsed; open first panel
\t\t\tif ( !value && this.options.active === false ) {
\t\t\t\tthis._activate( 0 );
\t\t\t}
\t\t}

\t\tif ( key === \"event\" ) {
\t\t\tthis._setupEvents( value );
\t\t}

\t\tif ( key === \"heightStyle\" ) {
\t\t\tthis._setupHeightStyle( value );
\t\t}
\t},

\t_sanitizeSelector: function( hash ) {
\t\treturn hash ? hash.replace( /[!\"\$%&'()*+,.\\/:;<=>?@\\[\\]\\^`{|}~]/g, \"\\\\\$&\" ) : \"\";
\t},

\trefresh: function() {
\t\tvar options = this.options,
\t\t\tlis = this.tablist.children( \":has(a[href])\" );

\t\t// Get disabled tabs from class attribute from HTML
\t\t// this will get converted to a boolean if needed in _refresh()
\t\toptions.disabled = \$.map( lis.filter( \".ui-state-disabled\" ), function( tab ) {
\t\t\treturn lis.index( tab );
\t\t} );

\t\tthis._processTabs();

\t\t// Was collapsed or no tabs
\t\tif ( options.active === false || !this.anchors.length ) {
\t\t\toptions.active = false;
\t\t\tthis.active = \$();

\t\t// was active, but active tab is gone
\t\t} else if ( this.active.length && !\$.contains( this.tablist[ 0 ], this.active[ 0 ] ) ) {

\t\t\t// all remaining tabs are disabled
\t\t\tif ( this.tabs.length === options.disabled.length ) {
\t\t\t\toptions.active = false;
\t\t\t\tthis.active = \$();

\t\t\t// activate previous tab
\t\t\t} else {
\t\t\t\tthis._activate( this._findNextTab( Math.max( 0, options.active - 1 ), false ) );
\t\t\t}

\t\t// was active, active tab still exists
\t\t} else {

\t\t\t// make sure active index is correct
\t\t\toptions.active = this.tabs.index( this.active );
\t\t}

\t\tthis._refresh();
\t},

\t_refresh: function() {
\t\tthis._setOptionDisabled( this.options.disabled );
\t\tthis._setupEvents( this.options.event );
\t\tthis._setupHeightStyle( this.options.heightStyle );

\t\tthis.tabs.not( this.active ).attr( {
\t\t\t\"aria-selected\": \"false\",
\t\t\t\"aria-expanded\": \"false\",
\t\t\ttabIndex: -1
\t\t} );
\t\tthis.panels.not( this._getPanelForTab( this.active ) )
\t\t\t.hide()
\t\t\t.attr( {
\t\t\t\t\"aria-hidden\": \"true\"
\t\t\t} );

\t\t// Make sure one tab is in the tab order
\t\tif ( !this.active.length ) {
\t\t\tthis.tabs.eq( 0 ).attr( \"tabIndex\", 0 );
\t\t} else {
\t\t\tthis.active
\t\t\t\t.attr( {
\t\t\t\t\t\"aria-selected\": \"true\",
\t\t\t\t\t\"aria-expanded\": \"true\",
\t\t\t\t\ttabIndex: 0
\t\t\t\t} );
\t\t\tthis._addClass( this.active, \"ui-tabs-active\", \"ui-state-active\" );
\t\t\tthis._getPanelForTab( this.active )
\t\t\t\t.show()
\t\t\t\t.attr( {
\t\t\t\t\t\"aria-hidden\": \"false\"
\t\t\t\t} );
\t\t}
\t},

\t_processTabs: function() {
\t\tvar that = this,
\t\t\tprevTabs = this.tabs,
\t\t\tprevAnchors = this.anchors,
\t\t\tprevPanels = this.panels;

\t\tthis.tablist = this._getList().attr( \"role\", \"tablist\" );
\t\tthis._addClass( this.tablist, \"ui-tabs-nav\",
\t\t\t\"ui-helper-reset ui-helper-clearfix ui-widget-header\" );

\t\t// Prevent users from focusing disabled tabs via click
\t\tthis.tablist
\t\t\t.on( \"mousedown\" + this.eventNamespace, \"> li\", function( event ) {
\t\t\t\tif ( \$( this ).is( \".ui-state-disabled\" ) ) {
\t\t\t\t\tevent.preventDefault();
\t\t\t\t}
\t\t\t} )

\t\t\t// Support: IE <9
\t\t\t// Preventing the default action in mousedown doesn't prevent IE
\t\t\t// from focusing the element, so if the anchor gets focused, blur.
\t\t\t// We don't have to worry about focusing the previously focused
\t\t\t// element since clicking on a non-focusable element should focus
\t\t\t// the body anyway.
\t\t\t.on( \"focus\" + this.eventNamespace, \".ui-tabs-anchor\", function() {
\t\t\t\tif ( \$( this ).closest( \"li\" ).is( \".ui-state-disabled\" ) ) {
\t\t\t\t\tthis.blur();
\t\t\t\t}
\t\t\t} );

\t\tthis.tabs = this.tablist.find( \"> li:has(a[href])\" )
\t\t\t.attr( {
\t\t\t\trole: \"tab\",
\t\t\t\ttabIndex: -1
\t\t\t} );
\t\tthis._addClass( this.tabs, \"ui-tabs-tab\", \"ui-state-default\" );

\t\tthis.anchors = this.tabs.map( function() {
\t\t\treturn \$( \"a\", this )[ 0 ];
\t\t} )
\t\t\t.attr( {
\t\t\t\trole: \"presentation\",
\t\t\t\ttabIndex: -1
\t\t\t} );
\t\tthis._addClass( this.anchors, \"ui-tabs-anchor\" );

\t\tthis.panels = \$();

\t\tthis.anchors.each( function( i, anchor ) {
\t\t\tvar selector, panel, panelId,
\t\t\t\tanchorId = \$( anchor ).uniqueId().attr( \"id\" ),
\t\t\t\ttab = \$( anchor ).closest( \"li\" ),
\t\t\t\toriginalAriaControls = tab.attr( \"aria-controls\" );

\t\t\t// Inline tab
\t\t\tif ( that._isLocal( anchor ) ) {
\t\t\t\tselector = anchor.hash;
\t\t\t\tpanelId = selector.substring( 1 );
\t\t\t\tpanel = that.element.find( that._sanitizeSelector( selector ) );

\t\t\t// remote tab
\t\t\t} else {

\t\t\t\t// If the tab doesn't already have aria-controls,
\t\t\t\t// generate an id by using a throw-away element
\t\t\t\tpanelId = tab.attr( \"aria-controls\" ) || \$( {} ).uniqueId()[ 0 ].id;
\t\t\t\tselector = \"#\" + panelId;
\t\t\t\tpanel = that.element.find( selector );
\t\t\t\tif ( !panel.length ) {
\t\t\t\t\tpanel = that._createPanel( panelId );
\t\t\t\t\tpanel.insertAfter( that.panels[ i - 1 ] || that.tablist );
\t\t\t\t}
\t\t\t\tpanel.attr( \"aria-live\", \"polite\" );
\t\t\t}

\t\t\tif ( panel.length ) {
\t\t\t\tthat.panels = that.panels.add( panel );
\t\t\t}
\t\t\tif ( originalAriaControls ) {
\t\t\t\ttab.data( \"ui-tabs-aria-controls\", originalAriaControls );
\t\t\t}
\t\t\ttab.attr( {
\t\t\t\t\"aria-controls\": panelId,
\t\t\t\t\"aria-labelledby\": anchorId
\t\t\t} );
\t\t\tpanel.attr( \"aria-labelledby\", anchorId );
\t\t} );

\t\tthis.panels.attr( \"role\", \"tabpanel\" );
\t\tthis._addClass( this.panels, \"ui-tabs-panel\", \"ui-widget-content\" );

\t\t// Avoid memory leaks (#10056)
\t\tif ( prevTabs ) {
\t\t\tthis._off( prevTabs.not( this.tabs ) );
\t\t\tthis._off( prevAnchors.not( this.anchors ) );
\t\t\tthis._off( prevPanels.not( this.panels ) );
\t\t}
\t},

\t// Allow overriding how to find the list for rare usage scenarios (#7715)
\t_getList: function() {
\t\treturn this.tablist || this.element.find( \"ol, ul\" ).eq( 0 );
\t},

\t_createPanel: function( id ) {
\t\treturn \$( \"<div>\" )
\t\t\t.attr( \"id\", id )
\t\t\t.data( \"ui-tabs-destroy\", true );
\t},

\t_setOptionDisabled: function( disabled ) {
\t\tvar currentItem, li, i;

\t\tif ( \$.isArray( disabled ) ) {
\t\t\tif ( !disabled.length ) {
\t\t\t\tdisabled = false;
\t\t\t} else if ( disabled.length === this.anchors.length ) {
\t\t\t\tdisabled = true;
\t\t\t}
\t\t}

\t\t// Disable tabs
\t\tfor ( i = 0; ( li = this.tabs[ i ] ); i++ ) {
\t\t\tcurrentItem = \$( li );
\t\t\tif ( disabled === true || \$.inArray( i, disabled ) !== -1 ) {
\t\t\t\tcurrentItem.attr( \"aria-disabled\", \"true\" );
\t\t\t\tthis._addClass( currentItem, null, \"ui-state-disabled\" );
\t\t\t} else {
\t\t\t\tcurrentItem.removeAttr( \"aria-disabled\" );
\t\t\t\tthis._removeClass( currentItem, null, \"ui-state-disabled\" );
\t\t\t}
\t\t}

\t\tthis.options.disabled = disabled;

\t\tthis._toggleClass( this.widget(), this.widgetFullName + \"-disabled\", null,
\t\t\tdisabled === true );
\t},

\t_setupEvents: function( event ) {
\t\tvar events = {};
\t\tif ( event ) {
\t\t\t\$.each( event.split( \" \" ), function( index, eventName ) {
\t\t\t\tevents[ eventName ] = \"_eventHandler\";
\t\t\t} );
\t\t}

\t\tthis._off( this.anchors.add( this.tabs ).add( this.panels ) );

\t\t// Always prevent the default action, even when disabled
\t\tthis._on( true, this.anchors, {
\t\t\tclick: function( event ) {
\t\t\t\tevent.preventDefault();
\t\t\t}
\t\t} );
\t\tthis._on( this.anchors, events );
\t\tthis._on( this.tabs, { keydown: \"_tabKeydown\" } );
\t\tthis._on( this.panels, { keydown: \"_panelKeydown\" } );

\t\tthis._focusable( this.tabs );
\t\tthis._hoverable( this.tabs );
\t},

\t_setupHeightStyle: function( heightStyle ) {
\t\tvar maxHeight,
\t\t\tparent = this.element.parent();

\t\tif ( heightStyle === \"fill\" ) {
\t\t\tmaxHeight = parent.height();
\t\t\tmaxHeight -= this.element.outerHeight() - this.element.height();

\t\t\tthis.element.siblings( \":visible\" ).each( function() {
\t\t\t\tvar elem = \$( this ),
\t\t\t\t\tposition = elem.css( \"position\" );

\t\t\t\tif ( position === \"absolute\" || position === \"fixed\" ) {
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tmaxHeight -= elem.outerHeight( true );
\t\t\t} );

\t\t\tthis.element.children().not( this.panels ).each( function() {
\t\t\t\tmaxHeight -= \$( this ).outerHeight( true );
\t\t\t} );

\t\t\tthis.panels.each( function() {
\t\t\t\t\$( this ).height( Math.max( 0, maxHeight -
\t\t\t\t\t\$( this ).innerHeight() + \$( this ).height() ) );
\t\t\t} )
\t\t\t\t.css( \"overflow\", \"auto\" );
\t\t} else if ( heightStyle === \"auto\" ) {
\t\t\tmaxHeight = 0;
\t\t\tthis.panels.each( function() {
\t\t\t\tmaxHeight = Math.max( maxHeight, \$( this ).height( \"\" ).height() );
\t\t\t} ).height( maxHeight );
\t\t}
\t},

\t_eventHandler: function( event ) {
\t\tvar options = this.options,
\t\t\tactive = this.active,
\t\t\tanchor = \$( event.currentTarget ),
\t\t\ttab = anchor.closest( \"li\" ),
\t\t\tclickedIsActive = tab[ 0 ] === active[ 0 ],
\t\t\tcollapsing = clickedIsActive && options.collapsible,
\t\t\ttoShow = collapsing ? \$() : this._getPanelForTab( tab ),
\t\t\ttoHide = !active.length ? \$() : this._getPanelForTab( active ),
\t\t\teventData = {
\t\t\t\toldTab: active,
\t\t\t\toldPanel: toHide,
\t\t\t\tnewTab: collapsing ? \$() : tab,
\t\t\t\tnewPanel: toShow
\t\t\t};

\t\tevent.preventDefault();

\t\tif ( tab.hasClass( \"ui-state-disabled\" ) ||

\t\t\t\t// tab is already loading
\t\t\t\ttab.hasClass( \"ui-tabs-loading\" ) ||

\t\t\t\t// can't switch durning an animation
\t\t\t\tthis.running ||

\t\t\t\t// click on active header, but not collapsible
\t\t\t\t( clickedIsActive && !options.collapsible ) ||

\t\t\t\t// allow canceling activation
\t\t\t\t( this._trigger( \"beforeActivate\", event, eventData ) === false ) ) {
\t\t\treturn;
\t\t}

\t\toptions.active = collapsing ? false : this.tabs.index( tab );

\t\tthis.active = clickedIsActive ? \$() : tab;
\t\tif ( this.xhr ) {
\t\t\tthis.xhr.abort();
\t\t}

\t\tif ( !toHide.length && !toShow.length ) {
\t\t\t\$.error( \"jQuery UI Tabs: Mismatching fragment identifier.\" );
\t\t}

\t\tif ( toShow.length ) {
\t\t\tthis.load( this.tabs.index( tab ), event );
\t\t}
\t\tthis._toggle( event, eventData );
\t},

\t// Handles show/hide for selecting tabs
\t_toggle: function( event, eventData ) {
\t\tvar that = this,
\t\t\ttoShow = eventData.newPanel,
\t\t\ttoHide = eventData.oldPanel;

\t\tthis.running = true;

\t\tfunction complete() {
\t\t\tthat.running = false;
\t\t\tthat._trigger( \"activate\", event, eventData );
\t\t}

\t\tfunction show() {
\t\t\tthat._addClass( eventData.newTab.closest( \"li\" ), \"ui-tabs-active\", \"ui-state-active\" );

\t\t\tif ( toShow.length && that.options.show ) {
\t\t\t\tthat._show( toShow, that.options.show, complete );
\t\t\t} else {
\t\t\t\ttoShow.show();
\t\t\t\tcomplete();
\t\t\t}
\t\t}

\t\t// Start out by hiding, then showing, then completing
\t\tif ( toHide.length && this.options.hide ) {
\t\t\tthis._hide( toHide, this.options.hide, function() {
\t\t\t\tthat._removeClass( eventData.oldTab.closest( \"li\" ),
\t\t\t\t\t\"ui-tabs-active\", \"ui-state-active\" );
\t\t\t\tshow();
\t\t\t} );
\t\t} else {
\t\t\tthis._removeClass( eventData.oldTab.closest( \"li\" ),
\t\t\t\t\"ui-tabs-active\", \"ui-state-active\" );
\t\t\ttoHide.hide();
\t\t\tshow();
\t\t}

\t\ttoHide.attr( \"aria-hidden\", \"true\" );
\t\teventData.oldTab.attr( {
\t\t\t\"aria-selected\": \"false\",
\t\t\t\"aria-expanded\": \"false\"
\t\t} );

\t\t// If we're switching tabs, remove the old tab from the tab order.
\t\t// If we're opening from collapsed state, remove the previous tab from the tab order.
\t\t// If we're collapsing, then keep the collapsing tab in the tab order.
\t\tif ( toShow.length && toHide.length ) {
\t\t\teventData.oldTab.attr( \"tabIndex\", -1 );
\t\t} else if ( toShow.length ) {
\t\t\tthis.tabs.filter( function() {
\t\t\t\treturn \$( this ).attr( \"tabIndex\" ) === 0;
\t\t\t} )
\t\t\t\t.attr( \"tabIndex\", -1 );
\t\t}

\t\ttoShow.attr( \"aria-hidden\", \"false\" );
\t\teventData.newTab.attr( {
\t\t\t\"aria-selected\": \"true\",
\t\t\t\"aria-expanded\": \"true\",
\t\t\ttabIndex: 0
\t\t} );
\t},

\t_activate: function( index ) {
\t\tvar anchor,
\t\t\tactive = this._findActive( index );

\t\t// Trying to activate the already active panel
\t\tif ( active[ 0 ] === this.active[ 0 ] ) {
\t\t\treturn;
\t\t}

\t\t// Trying to collapse, simulate a click on the current active header
\t\tif ( !active.length ) {
\t\t\tactive = this.active;
\t\t}

\t\tanchor = active.find( \".ui-tabs-anchor\" )[ 0 ];
\t\tthis._eventHandler( {
\t\t\ttarget: anchor,
\t\t\tcurrentTarget: anchor,
\t\t\tpreventDefault: \$.noop
\t\t} );
\t},

\t_findActive: function( index ) {
\t\treturn index === false ? \$() : this.tabs.eq( index );
\t},

\t_getIndex: function( index ) {

\t\t// meta-function to give users option to provide a href string instead of a numerical index.
\t\tif ( typeof index === \"string\" ) {
\t\t\tindex = this.anchors.index( this.anchors.filter( \"[href\$='\" +
\t\t\t\t\$.ui.escapeSelector( index ) + \"']\" ) );
\t\t}

\t\treturn index;
\t},

\t_destroy: function() {
\t\tif ( this.xhr ) {
\t\t\tthis.xhr.abort();
\t\t}

\t\tthis.tablist
\t\t\t.removeAttr( \"role\" )
\t\t\t.off( this.eventNamespace );

\t\tthis.anchors
\t\t\t.removeAttr( \"role tabIndex\" )
\t\t\t.removeUniqueId();

\t\tthis.tabs.add( this.panels ).each( function() {
\t\t\tif ( \$.data( this, \"ui-tabs-destroy\" ) ) {
\t\t\t\t\$( this ).remove();
\t\t\t} else {
\t\t\t\t\$( this ).removeAttr( \"role tabIndex \" +
\t\t\t\t\t\"aria-live aria-busy aria-selected aria-labelledby aria-hidden aria-expanded\" );
\t\t\t}
\t\t} );

\t\tthis.tabs.each( function() {
\t\t\tvar li = \$( this ),
\t\t\t\tprev = li.data( \"ui-tabs-aria-controls\" );
\t\t\tif ( prev ) {
\t\t\t\tli
\t\t\t\t\t.attr( \"aria-controls\", prev )
\t\t\t\t\t.removeData( \"ui-tabs-aria-controls\" );
\t\t\t} else {
\t\t\t\tli.removeAttr( \"aria-controls\" );
\t\t\t}
\t\t} );

\t\tthis.panels.show();

\t\tif ( this.options.heightStyle !== \"content\" ) {
\t\t\tthis.panels.css( \"height\", \"\" );
\t\t}
\t},

\tenable: function( index ) {
\t\tvar disabled = this.options.disabled;
\t\tif ( disabled === false ) {
\t\t\treturn;
\t\t}

\t\tif ( index === undefined ) {
\t\t\tdisabled = false;
\t\t} else {
\t\t\tindex = this._getIndex( index );
\t\t\tif ( \$.isArray( disabled ) ) {
\t\t\t\tdisabled = \$.map( disabled, function( num ) {
\t\t\t\t\treturn num !== index ? num : null;
\t\t\t\t} );
\t\t\t} else {
\t\t\t\tdisabled = \$.map( this.tabs, function( li, num ) {
\t\t\t\t\treturn num !== index ? num : null;
\t\t\t\t} );
\t\t\t}
\t\t}
\t\tthis._setOptionDisabled( disabled );
\t},

\tdisable: function( index ) {
\t\tvar disabled = this.options.disabled;
\t\tif ( disabled === true ) {
\t\t\treturn;
\t\t}

\t\tif ( index === undefined ) {
\t\t\tdisabled = true;
\t\t} else {
\t\t\tindex = this._getIndex( index );
\t\t\tif ( \$.inArray( index, disabled ) !== -1 ) {
\t\t\t\treturn;
\t\t\t}
\t\t\tif ( \$.isArray( disabled ) ) {
\t\t\t\tdisabled = \$.merge( [ index ], disabled ).sort();
\t\t\t} else {
\t\t\t\tdisabled = [ index ];
\t\t\t}
\t\t}
\t\tthis._setOptionDisabled( disabled );
\t},

\tload: function( index, event ) {
\t\tindex = this._getIndex( index );
\t\tvar that = this,
\t\t\ttab = this.tabs.eq( index ),
\t\t\tanchor = tab.find( \".ui-tabs-anchor\" ),
\t\t\tpanel = this._getPanelForTab( tab ),
\t\t\teventData = {
\t\t\t\ttab: tab,
\t\t\t\tpanel: panel
\t\t\t},
\t\t\tcomplete = function( jqXHR, status ) {
\t\t\t\tif ( status === \"abort\" ) {
\t\t\t\t\tthat.panels.stop( false, true );
\t\t\t\t}

\t\t\t\tthat._removeClass( tab, \"ui-tabs-loading\" );
\t\t\t\tpanel.removeAttr( \"aria-busy\" );

\t\t\t\tif ( jqXHR === that.xhr ) {
\t\t\t\t\tdelete that.xhr;
\t\t\t\t}
\t\t\t};

\t\t// Not remote
\t\tif ( this._isLocal( anchor[ 0 ] ) ) {
\t\t\treturn;
\t\t}

\t\tthis.xhr = \$.ajax( this._ajaxSettings( anchor, event, eventData ) );

\t\t// Support: jQuery <1.8
\t\t// jQuery <1.8 returns false if the request is canceled in beforeSend,
\t\t// but as of 1.8, \$.ajax() always returns a jqXHR object.
\t\tif ( this.xhr && this.xhr.statusText !== \"canceled\" ) {
\t\t\tthis._addClass( tab, \"ui-tabs-loading\" );
\t\t\tpanel.attr( \"aria-busy\", \"true\" );

\t\t\tthis.xhr
\t\t\t\t.done( function( response, status, jqXHR ) {

\t\t\t\t\t// support: jQuery <1.8
\t\t\t\t\t// http://bugs.jquery.com/ticket/11778
\t\t\t\t\tsetTimeout( function() {
\t\t\t\t\t\tpanel.html( response );
\t\t\t\t\t\tthat._trigger( \"load\", event, eventData );

\t\t\t\t\t\tcomplete( jqXHR, status );
\t\t\t\t\t}, 1 );
\t\t\t\t} )
\t\t\t\t.fail( function( jqXHR, status ) {

\t\t\t\t\t// support: jQuery <1.8
\t\t\t\t\t// http://bugs.jquery.com/ticket/11778
\t\t\t\t\tsetTimeout( function() {
\t\t\t\t\t\tcomplete( jqXHR, status );
\t\t\t\t\t}, 1 );
\t\t\t\t} );
\t\t}
\t},

\t_ajaxSettings: function( anchor, event, eventData ) {
\t\tvar that = this;
\t\treturn {

\t\t\t// Support: IE <11 only
\t\t\t// Strip any hash that exists to prevent errors with the Ajax request
\t\t\turl: anchor.attr( \"href\" ).replace( /#.*\$/, \"\" ),
\t\t\tbeforeSend: function( jqXHR, settings ) {
\t\t\t\treturn that._trigger( \"beforeLoad\", event,
\t\t\t\t\t\$.extend( { jqXHR: jqXHR, ajaxSettings: settings }, eventData ) );
\t\t\t}
\t\t};
\t},

\t_getPanelForTab: function( tab ) {
\t\tvar id = \$( tab ).attr( \"aria-controls\" );
\t\treturn this.element.find( this._sanitizeSelector( \"#\" + id ) );
\t}
} );

// DEPRECATED
// TODO: Switch return back to widget declaration at top of file when this is removed
if ( \$.uiBackCompat !== false ) {

\t// Backcompat for ui-tab class (now ui-tabs-tab)
\t\$.widget( \"ui.tabs\", \$.ui.tabs, {
\t\t_processTabs: function() {
\t\t\tthis._superApply( arguments );
\t\t\tthis._addClass( this.tabs, \"ui-tab\" );
\t\t}
\t} );
}

return \$.ui.tabs;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/tabs.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/tabs.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/tabs.js");
    }
}
