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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/accordion.js */
class __TwigTemplate_f67ad1ca62bad855931876033941735161f232c1e3c5f53c7f0ab73d812983ef extends Template
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
 * jQuery UI Accordion 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Accordion
//>>group: Widgets
// jscs:disable maximumLineLength
//>>description: Displays collapsible content panels for presenting information in a limited amount of space.
// jscs:enable maximumLineLength
//>>docs: http://api.jqueryui.com/accordion/
//>>demos: http://jqueryui.com/accordion/
//>>css.structure: ../../themes/base/core.css
//>>css.structure: ../../themes/base/accordion.css
//>>css.theme: ../../themes/base/theme.css

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"../version\",
\t\t\t\"../keycode\",
\t\t\t\"../unique-id\",
\t\t\t\"../widget\"
\t\t], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

return \$.widget( \"ui.accordion\", {
\tversion: \"1.12.1\",
\toptions: {
\t\tactive: 0,
\t\tanimate: {},
\t\tclasses: {
\t\t\t\"ui-accordion-header\": \"ui-corner-top\",
\t\t\t\"ui-accordion-header-collapsed\": \"ui-corner-all\",
\t\t\t\"ui-accordion-content\": \"ui-corner-bottom\"
\t\t},
\t\tcollapsible: false,
\t\tevent: \"click\",
\t\theader: \"> li > :first-child, > :not(li):even\",
\t\theightStyle: \"auto\",
\t\ticons: {
\t\t\tactiveHeader: \"ui-icon-triangle-1-s\",
\t\t\theader: \"ui-icon-triangle-1-e\"
\t\t},

\t\t// Callbacks
\t\tactivate: null,
\t\tbeforeActivate: null
\t},

\thideProps: {
\t\tborderTopWidth: \"hide\",
\t\tborderBottomWidth: \"hide\",
\t\tpaddingTop: \"hide\",
\t\tpaddingBottom: \"hide\",
\t\theight: \"hide\"
\t},

\tshowProps: {
\t\tborderTopWidth: \"show\",
\t\tborderBottomWidth: \"show\",
\t\tpaddingTop: \"show\",
\t\tpaddingBottom: \"show\",
\t\theight: \"show\"
\t},

\t_create: function() {
\t\tvar options = this.options;

\t\tthis.prevShow = this.prevHide = \$();
\t\tthis._addClass( \"ui-accordion\", \"ui-widget ui-helper-reset\" );
\t\tthis.element.attr( \"role\", \"tablist\" );

\t\t// Don't allow collapsible: false and active: false / null
\t\tif ( !options.collapsible && ( options.active === false || options.active == null ) ) {
\t\t\toptions.active = 0;
\t\t}

\t\tthis._processPanels();

\t\t// handle negative values
\t\tif ( options.active < 0 ) {
\t\t\toptions.active += this.headers.length;
\t\t}
\t\tthis._refresh();
\t},

\t_getCreateEventData: function() {
\t\treturn {
\t\t\theader: this.active,
\t\t\tpanel: !this.active.length ? \$() : this.active.next()
\t\t};
\t},

\t_createIcons: function() {
\t\tvar icon, children,
\t\t\ticons = this.options.icons;

\t\tif ( icons ) {
\t\t\ticon = \$( \"<span>\" );
\t\t\tthis._addClass( icon, \"ui-accordion-header-icon\", \"ui-icon \" + icons.header );
\t\t\ticon.prependTo( this.headers );
\t\t\tchildren = this.active.children( \".ui-accordion-header-icon\" );
\t\t\tthis._removeClass( children, icons.header )
\t\t\t\t._addClass( children, null, icons.activeHeader )
\t\t\t\t._addClass( this.headers, \"ui-accordion-icons\" );
\t\t}
\t},

\t_destroyIcons: function() {
\t\tthis._removeClass( this.headers, \"ui-accordion-icons\" );
\t\tthis.headers.children( \".ui-accordion-header-icon\" ).remove();
\t},

\t_destroy: function() {
\t\tvar contents;

\t\t// Clean up main element
\t\tthis.element.removeAttr( \"role\" );

\t\t// Clean up headers
\t\tthis.headers
\t\t\t.removeAttr( \"role aria-expanded aria-selected aria-controls tabIndex\" )
\t\t\t.removeUniqueId();

\t\tthis._destroyIcons();

\t\t// Clean up content panels
\t\tcontents = this.headers.next()
\t\t\t.css( \"display\", \"\" )
\t\t\t.removeAttr( \"role aria-hidden aria-labelledby\" )
\t\t\t.removeUniqueId();

\t\tif ( this.options.heightStyle !== \"content\" ) {
\t\t\tcontents.css( \"height\", \"\" );
\t\t}
\t},

\t_setOption: function( key, value ) {
\t\tif ( key === \"active\" ) {

\t\t\t// _activate() will handle invalid values and update this.options
\t\t\tthis._activate( value );
\t\t\treturn;
\t\t}

\t\tif ( key === \"event\" ) {
\t\t\tif ( this.options.event ) {
\t\t\t\tthis._off( this.headers, this.options.event );
\t\t\t}
\t\t\tthis._setupEvents( value );
\t\t}

\t\tthis._super( key, value );

\t\t// Setting collapsible: false while collapsed; open first panel
\t\tif ( key === \"collapsible\" && !value && this.options.active === false ) {
\t\t\tthis._activate( 0 );
\t\t}

\t\tif ( key === \"icons\" ) {
\t\t\tthis._destroyIcons();
\t\t\tif ( value ) {
\t\t\t\tthis._createIcons();
\t\t\t}
\t\t}
\t},

\t_setOptionDisabled: function( value ) {
\t\tthis._super( value );

\t\tthis.element.attr( \"aria-disabled\", value );

\t\t// Support: IE8 Only
\t\t// #5332 / #6059 - opacity doesn't cascade to positioned elements in IE
\t\t// so we need to add the disabled class to the headers and panels
\t\tthis._toggleClass( null, \"ui-state-disabled\", !!value );
\t\tthis._toggleClass( this.headers.add( this.headers.next() ), null, \"ui-state-disabled\",
\t\t\t!!value );
\t},

\t_keydown: function( event ) {
\t\tif ( event.altKey || event.ctrlKey ) {
\t\t\treturn;
\t\t}

\t\tvar keyCode = \$.ui.keyCode,
\t\t\tlength = this.headers.length,
\t\t\tcurrentIndex = this.headers.index( event.target ),
\t\t\ttoFocus = false;

\t\tswitch ( event.keyCode ) {
\t\tcase keyCode.RIGHT:
\t\tcase keyCode.DOWN:
\t\t\ttoFocus = this.headers[ ( currentIndex + 1 ) % length ];
\t\t\tbreak;
\t\tcase keyCode.LEFT:
\t\tcase keyCode.UP:
\t\t\ttoFocus = this.headers[ ( currentIndex - 1 + length ) % length ];
\t\t\tbreak;
\t\tcase keyCode.SPACE:
\t\tcase keyCode.ENTER:
\t\t\tthis._eventHandler( event );
\t\t\tbreak;
\t\tcase keyCode.HOME:
\t\t\ttoFocus = this.headers[ 0 ];
\t\t\tbreak;
\t\tcase keyCode.END:
\t\t\ttoFocus = this.headers[ length - 1 ];
\t\t\tbreak;
\t\t}

\t\tif ( toFocus ) {
\t\t\t\$( event.target ).attr( \"tabIndex\", -1 );
\t\t\t\$( toFocus ).attr( \"tabIndex\", 0 );
\t\t\t\$( toFocus ).trigger( \"focus\" );
\t\t\tevent.preventDefault();
\t\t}
\t},

\t_panelKeyDown: function( event ) {
\t\tif ( event.keyCode === \$.ui.keyCode.UP && event.ctrlKey ) {
\t\t\t\$( event.currentTarget ).prev().trigger( \"focus\" );
\t\t}
\t},

\trefresh: function() {
\t\tvar options = this.options;
\t\tthis._processPanels();

\t\t// Was collapsed or no panel
\t\tif ( ( options.active === false && options.collapsible === true ) ||
\t\t\t\t!this.headers.length ) {
\t\t\toptions.active = false;
\t\t\tthis.active = \$();

\t\t// active false only when collapsible is true
\t\t} else if ( options.active === false ) {
\t\t\tthis._activate( 0 );

\t\t// was active, but active panel is gone
\t\t} else if ( this.active.length && !\$.contains( this.element[ 0 ], this.active[ 0 ] ) ) {

\t\t\t// all remaining panel are disabled
\t\t\tif ( this.headers.length === this.headers.find( \".ui-state-disabled\" ).length ) {
\t\t\t\toptions.active = false;
\t\t\t\tthis.active = \$();

\t\t\t// activate previous panel
\t\t\t} else {
\t\t\t\tthis._activate( Math.max( 0, options.active - 1 ) );
\t\t\t}

\t\t// was active, active panel still exists
\t\t} else {

\t\t\t// make sure active index is correct
\t\t\toptions.active = this.headers.index( this.active );
\t\t}

\t\tthis._destroyIcons();

\t\tthis._refresh();
\t},

\t_processPanels: function() {
\t\tvar prevHeaders = this.headers,
\t\t\tprevPanels = this.panels;

\t\tthis.headers = this.element.find( this.options.header );
\t\tthis._addClass( this.headers, \"ui-accordion-header ui-accordion-header-collapsed\",
\t\t\t\"ui-state-default\" );

\t\tthis.panels = this.headers.next().filter( \":not(.ui-accordion-content-active)\" ).hide();
\t\tthis._addClass( this.panels, \"ui-accordion-content\", \"ui-helper-reset ui-widget-content\" );

\t\t// Avoid memory leaks (#10056)
\t\tif ( prevPanels ) {
\t\t\tthis._off( prevHeaders.not( this.headers ) );
\t\t\tthis._off( prevPanels.not( this.panels ) );
\t\t}
\t},

\t_refresh: function() {
\t\tvar maxHeight,
\t\t\toptions = this.options,
\t\t\theightStyle = options.heightStyle,
\t\t\tparent = this.element.parent();

\t\tthis.active = this._findActive( options.active );
\t\tthis._addClass( this.active, \"ui-accordion-header-active\", \"ui-state-active\" )
\t\t\t._removeClass( this.active, \"ui-accordion-header-collapsed\" );
\t\tthis._addClass( this.active.next(), \"ui-accordion-content-active\" );
\t\tthis.active.next().show();

\t\tthis.headers
\t\t\t.attr( \"role\", \"tab\" )
\t\t\t.each( function() {
\t\t\t\tvar header = \$( this ),
\t\t\t\t\theaderId = header.uniqueId().attr( \"id\" ),
\t\t\t\t\tpanel = header.next(),
\t\t\t\t\tpanelId = panel.uniqueId().attr( \"id\" );
\t\t\t\theader.attr( \"aria-controls\", panelId );
\t\t\t\tpanel.attr( \"aria-labelledby\", headerId );
\t\t\t} )
\t\t\t.next()
\t\t\t\t.attr( \"role\", \"tabpanel\" );

\t\tthis.headers
\t\t\t.not( this.active )
\t\t\t\t.attr( {
\t\t\t\t\t\"aria-selected\": \"false\",
\t\t\t\t\t\"aria-expanded\": \"false\",
\t\t\t\t\ttabIndex: -1
\t\t\t\t} )
\t\t\t\t.next()
\t\t\t\t\t.attr( {
\t\t\t\t\t\t\"aria-hidden\": \"true\"
\t\t\t\t\t} )
\t\t\t\t\t.hide();

\t\t// Make sure at least one header is in the tab order
\t\tif ( !this.active.length ) {
\t\t\tthis.headers.eq( 0 ).attr( \"tabIndex\", 0 );
\t\t} else {
\t\t\tthis.active.attr( {
\t\t\t\t\"aria-selected\": \"true\",
\t\t\t\t\"aria-expanded\": \"true\",
\t\t\t\ttabIndex: 0
\t\t\t} )
\t\t\t\t.next()
\t\t\t\t\t.attr( {
\t\t\t\t\t\t\"aria-hidden\": \"false\"
\t\t\t\t\t} );
\t\t}

\t\tthis._createIcons();

\t\tthis._setupEvents( options.event );

\t\tif ( heightStyle === \"fill\" ) {
\t\t\tmaxHeight = parent.height();
\t\t\tthis.element.siblings( \":visible\" ).each( function() {
\t\t\t\tvar elem = \$( this ),
\t\t\t\t\tposition = elem.css( \"position\" );

\t\t\t\tif ( position === \"absolute\" || position === \"fixed\" ) {
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tmaxHeight -= elem.outerHeight( true );
\t\t\t} );

\t\t\tthis.headers.each( function() {
\t\t\t\tmaxHeight -= \$( this ).outerHeight( true );
\t\t\t} );

\t\t\tthis.headers.next()
\t\t\t\t.each( function() {
\t\t\t\t\t\$( this ).height( Math.max( 0, maxHeight -
\t\t\t\t\t\t\$( this ).innerHeight() + \$( this ).height() ) );
\t\t\t\t} )
\t\t\t\t.css( \"overflow\", \"auto\" );
\t\t} else if ( heightStyle === \"auto\" ) {
\t\t\tmaxHeight = 0;
\t\t\tthis.headers.next()
\t\t\t\t.each( function() {
\t\t\t\t\tvar isVisible = \$( this ).is( \":visible\" );
\t\t\t\t\tif ( !isVisible ) {
\t\t\t\t\t\t\$( this ).show();
\t\t\t\t\t}
\t\t\t\t\tmaxHeight = Math.max( maxHeight, \$( this ).css( \"height\", \"\" ).height() );
\t\t\t\t\tif ( !isVisible ) {
\t\t\t\t\t\t\$( this ).hide();
\t\t\t\t\t}
\t\t\t\t} )
\t\t\t\t.height( maxHeight );
\t\t}
\t},

\t_activate: function( index ) {
\t\tvar active = this._findActive( index )[ 0 ];

\t\t// Trying to activate the already active panel
\t\tif ( active === this.active[ 0 ] ) {
\t\t\treturn;
\t\t}

\t\t// Trying to collapse, simulate a click on the currently active header
\t\tactive = active || this.active[ 0 ];

\t\tthis._eventHandler( {
\t\t\ttarget: active,
\t\t\tcurrentTarget: active,
\t\t\tpreventDefault: \$.noop
\t\t} );
\t},

\t_findActive: function( selector ) {
\t\treturn typeof selector === \"number\" ? this.headers.eq( selector ) : \$();
\t},

\t_setupEvents: function( event ) {
\t\tvar events = {
\t\t\tkeydown: \"_keydown\"
\t\t};
\t\tif ( event ) {
\t\t\t\$.each( event.split( \" \" ), function( index, eventName ) {
\t\t\t\tevents[ eventName ] = \"_eventHandler\";
\t\t\t} );
\t\t}

\t\tthis._off( this.headers.add( this.headers.next() ) );
\t\tthis._on( this.headers, events );
\t\tthis._on( this.headers.next(), { keydown: \"_panelKeyDown\" } );
\t\tthis._hoverable( this.headers );
\t\tthis._focusable( this.headers );
\t},

\t_eventHandler: function( event ) {
\t\tvar activeChildren, clickedChildren,
\t\t\toptions = this.options,
\t\t\tactive = this.active,
\t\t\tclicked = \$( event.currentTarget ),
\t\t\tclickedIsActive = clicked[ 0 ] === active[ 0 ],
\t\t\tcollapsing = clickedIsActive && options.collapsible,
\t\t\ttoShow = collapsing ? \$() : clicked.next(),
\t\t\ttoHide = active.next(),
\t\t\teventData = {
\t\t\t\toldHeader: active,
\t\t\t\toldPanel: toHide,
\t\t\t\tnewHeader: collapsing ? \$() : clicked,
\t\t\t\tnewPanel: toShow
\t\t\t};

\t\tevent.preventDefault();

\t\tif (

\t\t\t\t// click on active header, but not collapsible
\t\t\t\t( clickedIsActive && !options.collapsible ) ||

\t\t\t\t// allow canceling activation
\t\t\t\t( this._trigger( \"beforeActivate\", event, eventData ) === false ) ) {
\t\t\treturn;
\t\t}

\t\toptions.active = collapsing ? false : this.headers.index( clicked );

\t\t// When the call to ._toggle() comes after the class changes
\t\t// it causes a very odd bug in IE 8 (see #6720)
\t\tthis.active = clickedIsActive ? \$() : clicked;
\t\tthis._toggle( eventData );

\t\t// Switch classes
\t\t// corner classes on the previously active header stay after the animation
\t\tthis._removeClass( active, \"ui-accordion-header-active\", \"ui-state-active\" );
\t\tif ( options.icons ) {
\t\t\tactiveChildren = active.children( \".ui-accordion-header-icon\" );
\t\t\tthis._removeClass( activeChildren, null, options.icons.activeHeader )
\t\t\t\t._addClass( activeChildren, null, options.icons.header );
\t\t}

\t\tif ( !clickedIsActive ) {
\t\t\tthis._removeClass( clicked, \"ui-accordion-header-collapsed\" )
\t\t\t\t._addClass( clicked, \"ui-accordion-header-active\", \"ui-state-active\" );
\t\t\tif ( options.icons ) {
\t\t\t\tclickedChildren = clicked.children( \".ui-accordion-header-icon\" );
\t\t\t\tthis._removeClass( clickedChildren, null, options.icons.header )
\t\t\t\t\t._addClass( clickedChildren, null, options.icons.activeHeader );
\t\t\t}

\t\t\tthis._addClass( clicked.next(), \"ui-accordion-content-active\" );
\t\t}
\t},

\t_toggle: function( data ) {
\t\tvar toShow = data.newPanel,
\t\t\ttoHide = this.prevShow.length ? this.prevShow : data.oldPanel;

\t\t// Handle activating a panel during the animation for another activation
\t\tthis.prevShow.add( this.prevHide ).stop( true, true );
\t\tthis.prevShow = toShow;
\t\tthis.prevHide = toHide;

\t\tif ( this.options.animate ) {
\t\t\tthis._animate( toShow, toHide, data );
\t\t} else {
\t\t\ttoHide.hide();
\t\t\ttoShow.show();
\t\t\tthis._toggleComplete( data );
\t\t}

\t\ttoHide.attr( {
\t\t\t\"aria-hidden\": \"true\"
\t\t} );
\t\ttoHide.prev().attr( {
\t\t\t\"aria-selected\": \"false\",
\t\t\t\"aria-expanded\": \"false\"
\t\t} );

\t\t// if we're switching panels, remove the old header from the tab order
\t\t// if we're opening from collapsed state, remove the previous header from the tab order
\t\t// if we're collapsing, then keep the collapsing header in the tab order
\t\tif ( toShow.length && toHide.length ) {
\t\t\ttoHide.prev().attr( {
\t\t\t\t\"tabIndex\": -1,
\t\t\t\t\"aria-expanded\": \"false\"
\t\t\t} );
\t\t} else if ( toShow.length ) {
\t\t\tthis.headers.filter( function() {
\t\t\t\treturn parseInt( \$( this ).attr( \"tabIndex\" ), 10 ) === 0;
\t\t\t} )
\t\t\t\t.attr( \"tabIndex\", -1 );
\t\t}

\t\ttoShow
\t\t\t.attr( \"aria-hidden\", \"false\" )
\t\t\t.prev()
\t\t\t\t.attr( {
\t\t\t\t\t\"aria-selected\": \"true\",
\t\t\t\t\t\"aria-expanded\": \"true\",
\t\t\t\t\ttabIndex: 0
\t\t\t\t} );
\t},

\t_animate: function( toShow, toHide, data ) {
\t\tvar total, easing, duration,
\t\t\tthat = this,
\t\t\tadjust = 0,
\t\t\tboxSizing = toShow.css( \"box-sizing\" ),
\t\t\tdown = toShow.length &&
\t\t\t\t( !toHide.length || ( toShow.index() < toHide.index() ) ),
\t\t\tanimate = this.options.animate || {},
\t\t\toptions = down && animate.down || animate,
\t\t\tcomplete = function() {
\t\t\t\tthat._toggleComplete( data );
\t\t\t};

\t\tif ( typeof options === \"number\" ) {
\t\t\tduration = options;
\t\t}
\t\tif ( typeof options === \"string\" ) {
\t\t\teasing = options;
\t\t}

\t\t// fall back from options to animation in case of partial down settings
\t\teasing = easing || options.easing || animate.easing;
\t\tduration = duration || options.duration || animate.duration;

\t\tif ( !toHide.length ) {
\t\t\treturn toShow.animate( this.showProps, duration, easing, complete );
\t\t}
\t\tif ( !toShow.length ) {
\t\t\treturn toHide.animate( this.hideProps, duration, easing, complete );
\t\t}

\t\ttotal = toShow.show().outerHeight();
\t\ttoHide.animate( this.hideProps, {
\t\t\tduration: duration,
\t\t\teasing: easing,
\t\t\tstep: function( now, fx ) {
\t\t\t\tfx.now = Math.round( now );
\t\t\t}
\t\t} );
\t\ttoShow
\t\t\t.hide()
\t\t\t.animate( this.showProps, {
\t\t\t\tduration: duration,
\t\t\t\teasing: easing,
\t\t\t\tcomplete: complete,
\t\t\t\tstep: function( now, fx ) {
\t\t\t\t\tfx.now = Math.round( now );
\t\t\t\t\tif ( fx.prop !== \"height\" ) {
\t\t\t\t\t\tif ( boxSizing === \"content-box\" ) {
\t\t\t\t\t\t\tadjust += fx.now;
\t\t\t\t\t\t}
\t\t\t\t\t} else if ( that.options.heightStyle !== \"content\" ) {
\t\t\t\t\t\tfx.now = Math.round( total - toHide.outerHeight() - adjust );
\t\t\t\t\t\tadjust = 0;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} );
\t},

\t_toggleComplete: function( data ) {
\t\tvar toHide = data.oldPanel,
\t\t\tprev = toHide.prev();

\t\tthis._removeClass( toHide, \"ui-accordion-content-active\" );
\t\tthis._removeClass( prev, \"ui-accordion-header-active\" )
\t\t\t._addClass( prev, \"ui-accordion-header-collapsed\" );

\t\t// Work around for rendering bug in IE (#5421)
\t\tif ( toHide.length ) {
\t\t\ttoHide.parent()[ 0 ].className = toHide.parent()[ 0 ].className;
\t\t}
\t\tthis._trigger( \"activate\", null, data );
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/accordion.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/accordion.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/accordion.js");
    }
}
