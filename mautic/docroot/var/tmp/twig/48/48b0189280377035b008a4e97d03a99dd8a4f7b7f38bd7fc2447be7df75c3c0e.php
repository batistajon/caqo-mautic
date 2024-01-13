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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/tooltip.js */
class __TwigTemplate_c898c84170387aaeb6396129f9ea046a097a237e66ad89018504fa708812a9b1 extends Template
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
 * jQuery UI Tooltip 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Tooltip
//>>group: Widgets
//>>description: Shows additional information for any element on hover or focus.
//>>docs: http://api.jqueryui.com/tooltip/
//>>demos: http://jqueryui.com/tooltip/
//>>css.structure: ../../themes/base/core.css
//>>css.structure: ../../themes/base/tooltip.css
//>>css.theme: ../../themes/base/theme.css

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"../keycode\",
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

\$.widget( \"ui.tooltip\", {
\tversion: \"1.12.1\",
\toptions: {
\t\tclasses: {
\t\t\t\"ui-tooltip\": \"ui-corner-all ui-widget-shadow\"
\t\t},
\t\tcontent: function() {

\t\t\t// support: IE<9, Opera in jQuery <1.7
\t\t\t// .text() can't accept undefined, so coerce to a string
\t\t\tvar title = \$( this ).attr( \"title\" ) || \"\";

\t\t\t// Escape title, since we're going from an attribute to raw HTML
\t\t\treturn \$( \"<a>\" ).text( title ).html();
\t\t},
\t\thide: true,

\t\t// Disabled elements have inconsistent behavior across browsers (#8661)
\t\titems: \"[title]:not([disabled])\",
\t\tposition: {
\t\t\tmy: \"left top+15\",
\t\t\tat: \"left bottom\",
\t\t\tcollision: \"flipfit flip\"
\t\t},
\t\tshow: true,
\t\ttrack: false,

\t\t// Callbacks
\t\tclose: null,
\t\topen: null
\t},

\t_addDescribedBy: function( elem, id ) {
\t\tvar describedby = ( elem.attr( \"aria-describedby\" ) || \"\" ).split( /\\s+/ );
\t\tdescribedby.push( id );
\t\telem
\t\t\t.data( \"ui-tooltip-id\", id )
\t\t\t.attr( \"aria-describedby\", \$.trim( describedby.join( \" \" ) ) );
\t},

\t_removeDescribedBy: function( elem ) {
\t\tvar id = elem.data( \"ui-tooltip-id\" ),
\t\t\tdescribedby = ( elem.attr( \"aria-describedby\" ) || \"\" ).split( /\\s+/ ),
\t\t\tindex = \$.inArray( id, describedby );

\t\tif ( index !== -1 ) {
\t\t\tdescribedby.splice( index, 1 );
\t\t}

\t\telem.removeData( \"ui-tooltip-id\" );
\t\tdescribedby = \$.trim( describedby.join( \" \" ) );
\t\tif ( describedby ) {
\t\t\telem.attr( \"aria-describedby\", describedby );
\t\t} else {
\t\t\telem.removeAttr( \"aria-describedby\" );
\t\t}
\t},

\t_create: function() {
\t\tthis._on( {
\t\t\tmouseover: \"open\",
\t\t\tfocusin: \"open\"
\t\t} );

\t\t// IDs of generated tooltips, needed for destroy
\t\tthis.tooltips = {};

\t\t// IDs of parent tooltips where we removed the title attribute
\t\tthis.parents = {};

\t\t// Append the aria-live region so tooltips announce correctly
\t\tthis.liveRegion = \$( \"<div>\" )
\t\t\t.attr( {
\t\t\t\trole: \"log\",
\t\t\t\t\"aria-live\": \"assertive\",
\t\t\t\t\"aria-relevant\": \"additions\"
\t\t\t} )
\t\t\t.appendTo( this.document[ 0 ].body );
\t\tthis._addClass( this.liveRegion, null, \"ui-helper-hidden-accessible\" );

\t\tthis.disabledTitles = \$( [] );
\t},

\t_setOption: function( key, value ) {
\t\tvar that = this;

\t\tthis._super( key, value );

\t\tif ( key === \"content\" ) {
\t\t\t\$.each( this.tooltips, function( id, tooltipData ) {
\t\t\t\tthat._updateContent( tooltipData.element );
\t\t\t} );
\t\t}
\t},

\t_setOptionDisabled: function( value ) {
\t\tthis[ value ? \"_disable\" : \"_enable\" ]();
\t},

\t_disable: function() {
\t\tvar that = this;

\t\t// Close open tooltips
\t\t\$.each( this.tooltips, function( id, tooltipData ) {
\t\t\tvar event = \$.Event( \"blur\" );
\t\t\tevent.target = event.currentTarget = tooltipData.element[ 0 ];
\t\t\tthat.close( event, true );
\t\t} );

\t\t// Remove title attributes to prevent native tooltips
\t\tthis.disabledTitles = this.disabledTitles.add(
\t\t\tthis.element.find( this.options.items ).addBack()
\t\t\t\t.filter( function() {
\t\t\t\t\tvar element = \$( this );
\t\t\t\t\tif ( element.is( \"[title]\" ) ) {
\t\t\t\t\t\treturn element
\t\t\t\t\t\t\t.data( \"ui-tooltip-title\", element.attr( \"title\" ) )
\t\t\t\t\t\t\t.removeAttr( \"title\" );
\t\t\t\t\t}
\t\t\t\t} )
\t\t);
\t},

\t_enable: function() {

\t\t// restore title attributes
\t\tthis.disabledTitles.each( function() {
\t\t\tvar element = \$( this );
\t\t\tif ( element.data( \"ui-tooltip-title\" ) ) {
\t\t\t\telement.attr( \"title\", element.data( \"ui-tooltip-title\" ) );
\t\t\t}
\t\t} );
\t\tthis.disabledTitles = \$( [] );
\t},

\topen: function( event ) {
\t\tvar that = this,
\t\t\ttarget = \$( event ? event.target : this.element )

\t\t\t\t// we need closest here due to mouseover bubbling,
\t\t\t\t// but always pointing at the same event target
\t\t\t\t.closest( this.options.items );

\t\t// No element to show a tooltip for or the tooltip is already open
\t\tif ( !target.length || target.data( \"ui-tooltip-id\" ) ) {
\t\t\treturn;
\t\t}

\t\tif ( target.attr( \"title\" ) ) {
\t\t\ttarget.data( \"ui-tooltip-title\", target.attr( \"title\" ) );
\t\t}

\t\ttarget.data( \"ui-tooltip-open\", true );

\t\t// Kill parent tooltips, custom or native, for hover
\t\tif ( event && event.type === \"mouseover\" ) {
\t\t\ttarget.parents().each( function() {
\t\t\t\tvar parent = \$( this ),
\t\t\t\t\tblurEvent;
\t\t\t\tif ( parent.data( \"ui-tooltip-open\" ) ) {
\t\t\t\t\tblurEvent = \$.Event( \"blur\" );
\t\t\t\t\tblurEvent.target = blurEvent.currentTarget = this;
\t\t\t\t\tthat.close( blurEvent, true );
\t\t\t\t}
\t\t\t\tif ( parent.attr( \"title\" ) ) {
\t\t\t\t\tparent.uniqueId();
\t\t\t\t\tthat.parents[ this.id ] = {
\t\t\t\t\t\telement: this,
\t\t\t\t\t\ttitle: parent.attr( \"title\" )
\t\t\t\t\t};
\t\t\t\t\tparent.attr( \"title\", \"\" );
\t\t\t\t}
\t\t\t} );
\t\t}

\t\tthis._registerCloseHandlers( event, target );
\t\tthis._updateContent( target, event );
\t},

\t_updateContent: function( target, event ) {
\t\tvar content,
\t\t\tcontentOption = this.options.content,
\t\t\tthat = this,
\t\t\teventType = event ? event.type : null;

\t\tif ( typeof contentOption === \"string\" || contentOption.nodeType ||
\t\t\t\tcontentOption.jquery ) {
\t\t\treturn this._open( event, target, contentOption );
\t\t}

\t\tcontent = contentOption.call( target[ 0 ], function( response ) {

\t\t\t// IE may instantly serve a cached response for ajax requests
\t\t\t// delay this call to _open so the other call to _open runs first
\t\t\tthat._delay( function() {

\t\t\t\t// Ignore async response if tooltip was closed already
\t\t\t\tif ( !target.data( \"ui-tooltip-open\" ) ) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t// JQuery creates a special event for focusin when it doesn't
\t\t\t\t// exist natively. To improve performance, the native event
\t\t\t\t// object is reused and the type is changed. Therefore, we can't
\t\t\t\t// rely on the type being correct after the event finished
\t\t\t\t// bubbling, so we set it back to the previous value. (#8740)
\t\t\t\tif ( event ) {
\t\t\t\t\tevent.type = eventType;
\t\t\t\t}
\t\t\t\tthis._open( event, target, response );
\t\t\t} );
\t\t} );
\t\tif ( content ) {
\t\t\tthis._open( event, target, content );
\t\t}
\t},

\t_open: function( event, target, content ) {
\t\tvar tooltipData, tooltip, delayedShow, a11yContent,
\t\t\tpositionOption = \$.extend( {}, this.options.position );

\t\tif ( !content ) {
\t\t\treturn;
\t\t}

\t\t// Content can be updated multiple times. If the tooltip already
\t\t// exists, then just update the content and bail.
\t\ttooltipData = this._find( target );
\t\tif ( tooltipData ) {
\t\t\ttooltipData.tooltip.find( \".ui-tooltip-content\" ).html( content );
\t\t\treturn;
\t\t}

\t\t// If we have a title, clear it to prevent the native tooltip
\t\t// we have to check first to avoid defining a title if none exists
\t\t// (we don't want to cause an element to start matching [title])
\t\t//
\t\t// We use removeAttr only for key events, to allow IE to export the correct
\t\t// accessible attributes. For mouse events, set to empty string to avoid
\t\t// native tooltip showing up (happens only when removing inside mouseover).
\t\tif ( target.is( \"[title]\" ) ) {
\t\t\tif ( event && event.type === \"mouseover\" ) {
\t\t\t\ttarget.attr( \"title\", \"\" );
\t\t\t} else {
\t\t\t\ttarget.removeAttr( \"title\" );
\t\t\t}
\t\t}

\t\ttooltipData = this._tooltip( target );
\t\ttooltip = tooltipData.tooltip;
\t\tthis._addDescribedBy( target, tooltip.attr( \"id\" ) );
\t\ttooltip.find( \".ui-tooltip-content\" ).html( content );

\t\t// Support: Voiceover on OS X, JAWS on IE <= 9
\t\t// JAWS announces deletions even when aria-relevant=\"additions\"
\t\t// Voiceover will sometimes re-read the entire log region's contents from the beginning
\t\tthis.liveRegion.children().hide();
\t\ta11yContent = \$( \"<div>\" ).html( tooltip.find( \".ui-tooltip-content\" ).html() );
\t\ta11yContent.removeAttr( \"name\" ).find( \"[name]\" ).removeAttr( \"name\" );
\t\ta11yContent.removeAttr( \"id\" ).find( \"[id]\" ).removeAttr( \"id\" );
\t\ta11yContent.appendTo( this.liveRegion );

\t\tfunction position( event ) {
\t\t\tpositionOption.of = event;
\t\t\tif ( tooltip.is( \":hidden\" ) ) {
\t\t\t\treturn;
\t\t\t}
\t\t\ttooltip.position( positionOption );
\t\t}
\t\tif ( this.options.track && event && /^mouse/.test( event.type ) ) {
\t\t\tthis._on( this.document, {
\t\t\t\tmousemove: position
\t\t\t} );

\t\t\t// trigger once to override element-relative positioning
\t\t\tposition( event );
\t\t} else {
\t\t\ttooltip.position( \$.extend( {
\t\t\t\tof: target
\t\t\t}, this.options.position ) );
\t\t}

\t\ttooltip.hide();

\t\tthis._show( tooltip, this.options.show );

\t\t// Handle tracking tooltips that are shown with a delay (#8644). As soon
\t\t// as the tooltip is visible, position the tooltip using the most recent
\t\t// event.
\t\t// Adds the check to add the timers only when both delay and track options are set (#14682)
\t\tif ( this.options.track && this.options.show && this.options.show.delay ) {
\t\t\tdelayedShow = this.delayedShow = setInterval( function() {
\t\t\t\tif ( tooltip.is( \":visible\" ) ) {
\t\t\t\t\tposition( positionOption.of );
\t\t\t\t\tclearInterval( delayedShow );
\t\t\t\t}
\t\t\t}, \$.fx.interval );
\t\t}

\t\tthis._trigger( \"open\", event, { tooltip: tooltip } );
\t},

\t_registerCloseHandlers: function( event, target ) {
\t\tvar events = {
\t\t\tkeyup: function( event ) {
\t\t\t\tif ( event.keyCode === \$.ui.keyCode.ESCAPE ) {
\t\t\t\t\tvar fakeEvent = \$.Event( event );
\t\t\t\t\tfakeEvent.currentTarget = target[ 0 ];
\t\t\t\t\tthis.close( fakeEvent, true );
\t\t\t\t}
\t\t\t}
\t\t};

\t\t// Only bind remove handler for delegated targets. Non-delegated
\t\t// tooltips will handle this in destroy.
\t\tif ( target[ 0 ] !== this.element[ 0 ] ) {
\t\t\tevents.remove = function() {
\t\t\t\tthis._removeTooltip( this._find( target ).tooltip );
\t\t\t};
\t\t}

\t\tif ( !event || event.type === \"mouseover\" ) {
\t\t\tevents.mouseleave = \"close\";
\t\t}
\t\tif ( !event || event.type === \"focusin\" ) {
\t\t\tevents.focusout = \"close\";
\t\t}
\t\tthis._on( true, target, events );
\t},

\tclose: function( event ) {
\t\tvar tooltip,
\t\t\tthat = this,
\t\t\ttarget = \$( event ? event.currentTarget : this.element ),
\t\t\ttooltipData = this._find( target );

\t\t// The tooltip may already be closed
\t\tif ( !tooltipData ) {

\t\t\t// We set ui-tooltip-open immediately upon open (in open()), but only set the
\t\t\t// additional data once there's actually content to show (in _open()). So even if the
\t\t\t// tooltip doesn't have full data, we always remove ui-tooltip-open in case we're in
\t\t\t// the period between open() and _open().
\t\t\ttarget.removeData( \"ui-tooltip-open\" );
\t\t\treturn;
\t\t}

\t\ttooltip = tooltipData.tooltip;

\t\t// Disabling closes the tooltip, so we need to track when we're closing
\t\t// to avoid an infinite loop in case the tooltip becomes disabled on close
\t\tif ( tooltipData.closing ) {
\t\t\treturn;
\t\t}

\t\t// Clear the interval for delayed tracking tooltips
\t\tclearInterval( this.delayedShow );

\t\t// Only set title if we had one before (see comment in _open())
\t\t// If the title attribute has changed since open(), don't restore
\t\tif ( target.data( \"ui-tooltip-title\" ) && !target.attr( \"title\" ) ) {
\t\t\ttarget.attr( \"title\", target.data( \"ui-tooltip-title\" ) );
\t\t}

\t\tthis._removeDescribedBy( target );

\t\ttooltipData.hiding = true;
\t\ttooltip.stop( true );
\t\tthis._hide( tooltip, this.options.hide, function() {
\t\t\tthat._removeTooltip( \$( this ) );
\t\t} );

\t\ttarget.removeData( \"ui-tooltip-open\" );
\t\tthis._off( target, \"mouseleave focusout keyup\" );

\t\t// Remove 'remove' binding only on delegated targets
\t\tif ( target[ 0 ] !== this.element[ 0 ] ) {
\t\t\tthis._off( target, \"remove\" );
\t\t}
\t\tthis._off( this.document, \"mousemove\" );

\t\tif ( event && event.type === \"mouseleave\" ) {
\t\t\t\$.each( this.parents, function( id, parent ) {
\t\t\t\t\$( parent.element ).attr( \"title\", parent.title );
\t\t\t\tdelete that.parents[ id ];
\t\t\t} );
\t\t}

\t\ttooltipData.closing = true;
\t\tthis._trigger( \"close\", event, { tooltip: tooltip } );
\t\tif ( !tooltipData.hiding ) {
\t\t\ttooltipData.closing = false;
\t\t}
\t},

\t_tooltip: function( element ) {
\t\tvar tooltip = \$( \"<div>\" ).attr( \"role\", \"tooltip\" ),
\t\t\tcontent = \$( \"<div>\" ).appendTo( tooltip ),
\t\t\tid = tooltip.uniqueId().attr( \"id\" );

\t\tthis._addClass( content, \"ui-tooltip-content\" );
\t\tthis._addClass( tooltip, \"ui-tooltip\", \"ui-widget ui-widget-content\" );

\t\ttooltip.appendTo( this._appendTo( element ) );

\t\treturn this.tooltips[ id ] = {
\t\t\telement: element,
\t\t\ttooltip: tooltip
\t\t};
\t},

\t_find: function( target ) {
\t\tvar id = target.data( \"ui-tooltip-id\" );
\t\treturn id ? this.tooltips[ id ] : null;
\t},

\t_removeTooltip: function( tooltip ) {
\t\ttooltip.remove();
\t\tdelete this.tooltips[ tooltip.attr( \"id\" ) ];
\t},

\t_appendTo: function( target ) {
\t\tvar element = target.closest( \".ui-front, dialog\" );

\t\tif ( !element.length ) {
\t\t\telement = this.document[ 0 ].body;
\t\t}

\t\treturn element;
\t},

\t_destroy: function() {
\t\tvar that = this;

\t\t// Close open tooltips
\t\t\$.each( this.tooltips, function( id, tooltipData ) {

\t\t\t// Delegate to close method to handle common cleanup
\t\t\tvar event = \$.Event( \"blur\" ),
\t\t\t\telement = tooltipData.element;
\t\t\tevent.target = event.currentTarget = element[ 0 ];
\t\t\tthat.close( event, true );

\t\t\t// Remove immediately; destroying an open tooltip doesn't use the
\t\t\t// hide animation
\t\t\t\$( \"#\" + id ).remove();

\t\t\t// Restore the title
\t\t\tif ( element.data( \"ui-tooltip-title\" ) ) {

\t\t\t\t// If the title attribute has changed since open(), don't restore
\t\t\t\tif ( !element.attr( \"title\" ) ) {
\t\t\t\t\telement.attr( \"title\", element.data( \"ui-tooltip-title\" ) );
\t\t\t\t}
\t\t\t\telement.removeData( \"ui-tooltip-title\" );
\t\t\t}
\t\t} );
\t\tthis.liveRegion.remove();
\t}
} );

// DEPRECATED
// TODO: Switch return back to widget declaration at top of file when this is removed
if ( \$.uiBackCompat !== false ) {

\t// Backcompat for tooltipClass option
\t\$.widget( \"ui.tooltip\", \$.ui.tooltip, {
\t\toptions: {
\t\t\ttooltipClass: null
\t\t},
\t\t_tooltip: function() {
\t\t\tvar tooltipData = this._superApply( arguments );
\t\t\tif ( this.options.tooltipClass ) {
\t\t\t\ttooltipData.tooltip.addClass( this.options.tooltipClass );
\t\t\t}
\t\t\treturn tooltipData;
\t\t}
\t} );
}

return \$.ui.tooltip;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/tooltip.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/tooltip.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/tooltip.js");
    }
}
