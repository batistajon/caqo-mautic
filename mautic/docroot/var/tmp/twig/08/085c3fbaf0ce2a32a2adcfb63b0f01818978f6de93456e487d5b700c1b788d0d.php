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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/sortable.js */
class __TwigTemplate_59630a23c0e354ab30bde8b1fdf517c93701600a52c22bbf99cfb3357cd80750 extends Template
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
 * jQuery UI Sortable 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Sortable
//>>group: Interactions
//>>description: Enables items in a list to be sorted using the mouse.
//>>docs: http://api.jqueryui.com/sortable/
//>>demos: http://jqueryui.com/sortable/
//>>css.structure: ../../themes/base/sortable.css

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"./mouse\",
\t\t\t\"../data\",
\t\t\t\"../ie\",
\t\t\t\"../scroll-parent\",
\t\t\t\"../version\",
\t\t\t\"../widget\"
\t\t], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

return \$.widget( \"ui.sortable\", \$.ui.mouse, {
\tversion: \"1.12.1\",
\twidgetEventPrefix: \"sort\",
\tready: false,
\toptions: {
\t\tappendTo: \"parent\",
\t\taxis: false,
\t\tconnectWith: false,
\t\tcontainment: false,
\t\tcursor: \"auto\",
\t\tcursorAt: false,
\t\tdropOnEmpty: true,
\t\tforcePlaceholderSize: false,
\t\tforceHelperSize: false,
\t\tgrid: false,
\t\thandle: false,
\t\thelper: \"original\",
\t\titems: \"> *\",
\t\topacity: false,
\t\tplaceholder: false,
\t\trevert: false,
\t\tscroll: true,
\t\tscrollSensitivity: 20,
\t\tscrollSpeed: 20,
\t\tscope: \"default\",
\t\ttolerance: \"intersect\",
\t\tzIndex: 1000,

\t\t// Callbacks
\t\tactivate: null,
\t\tbeforeStop: null,
\t\tchange: null,
\t\tdeactivate: null,
\t\tout: null,
\t\tover: null,
\t\treceive: null,
\t\tremove: null,
\t\tsort: null,
\t\tstart: null,
\t\tstop: null,
\t\tupdate: null
\t},

\t_isOverAxis: function( x, reference, size ) {
\t\treturn ( x >= reference ) && ( x < ( reference + size ) );
\t},

\t_isFloating: function( item ) {
\t\treturn ( /left|right/ ).test( item.css( \"float\" ) ) ||
\t\t\t( /inline|table-cell/ ).test( item.css( \"display\" ) );
\t},

\t_create: function() {
\t\tthis.containerCache = {};
\t\tthis._addClass( \"ui-sortable\" );

\t\t//Get the items
\t\tthis.refresh();

\t\t//Let's determine the parent's offset
\t\tthis.offset = this.element.offset();

\t\t//Initialize mouse events for interaction
\t\tthis._mouseInit();

\t\tthis._setHandleClassName();

\t\t//We're ready to go
\t\tthis.ready = true;

\t},

\t_setOption: function( key, value ) {
\t\tthis._super( key, value );

\t\tif ( key === \"handle\" ) {
\t\t\tthis._setHandleClassName();
\t\t}
\t},

\t_setHandleClassName: function() {
\t\tvar that = this;
\t\tthis._removeClass( this.element.find( \".ui-sortable-handle\" ), \"ui-sortable-handle\" );
\t\t\$.each( this.items, function() {
\t\t\tthat._addClass(
\t\t\t\tthis.instance.options.handle ?
\t\t\t\t\tthis.item.find( this.instance.options.handle ) :
\t\t\t\t\tthis.item,
\t\t\t\t\"ui-sortable-handle\"
\t\t\t);
\t\t} );
\t},

\t_destroy: function() {
\t\tthis._mouseDestroy();

\t\tfor ( var i = this.items.length - 1; i >= 0; i-- ) {
\t\t\tthis.items[ i ].item.removeData( this.widgetName + \"-item\" );
\t\t}

\t\treturn this;
\t},

\t_mouseCapture: function( event, overrideHandle ) {
\t\tvar currentItem = null,
\t\t\tvalidHandle = false,
\t\t\tthat = this;

\t\tif ( this.reverting ) {
\t\t\treturn false;
\t\t}

\t\tif ( this.options.disabled || this.options.type === \"static\" ) {
\t\t\treturn false;
\t\t}

\t\t//We have to refresh the items data once first
\t\tthis._refreshItems( event );

\t\t//Find out if the clicked node (or one of its parents) is a actual item in this.items
\t\t\$( event.target ).parents().each( function() {
\t\t\tif ( \$.data( this, that.widgetName + \"-item\" ) === that ) {
\t\t\t\tcurrentItem = \$( this );
\t\t\t\treturn false;
\t\t\t}
\t\t} );
\t\tif ( \$.data( event.target, that.widgetName + \"-item\" ) === that ) {
\t\t\tcurrentItem = \$( event.target );
\t\t}

\t\tif ( !currentItem ) {
\t\t\treturn false;
\t\t}
\t\tif ( this.options.handle && !overrideHandle ) {
\t\t\t\$( this.options.handle, currentItem ).find( \"*\" ).addBack().each( function() {
\t\t\t\tif ( this === event.target ) {
\t\t\t\t\tvalidHandle = true;
\t\t\t\t}
\t\t\t} );
\t\t\tif ( !validHandle ) {
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tthis.currentItem = currentItem;
\t\tthis._removeCurrentsFromItems();
\t\treturn true;

\t},

\t_mouseStart: function( event, overrideHandle, noActivation ) {

\t\tvar i, body,
\t\t\to = this.options;

\t\tthis.currentContainer = this;

\t\t//We only need to call refreshPositions, because the refreshItems call has been moved to
\t\t// mouseCapture
\t\tthis.refreshPositions();

\t\t//Create and append the visible helper
\t\tthis.helper = this._createHelper( event );

\t\t//Cache the helper size
\t\tthis._cacheHelperProportions();

\t\t/*
\t\t * - Position generation -
\t\t * This block generates everything position related - it's the core of draggables.
\t\t */

\t\t//Cache the margins of the original element
\t\tthis._cacheMargins();

\t\t//Get the next scrolling parent
\t\tthis.scrollParent = this.helper.scrollParent();

\t\t//The element's absolute position on the page minus margins
\t\tthis.offset = this.currentItem.offset();
\t\tthis.offset = {
\t\t\ttop: this.offset.top - this.margins.top,
\t\t\tleft: this.offset.left - this.margins.left
\t\t};

\t\t\$.extend( this.offset, {
\t\t\tclick: { //Where the click happened, relative to the element
\t\t\t\tleft: event.pageX - this.offset.left,
\t\t\t\ttop: event.pageY - this.offset.top
\t\t\t},
\t\t\tparent: this._getParentOffset(),

\t\t\t// This is a relative to absolute position minus the actual position calculation -
\t\t\t// only used for relative positioned helper
\t\t\trelative: this._getRelativeOffset()
\t\t} );

\t\t// Only after we got the offset, we can change the helper's position to absolute
\t\t// TODO: Still need to figure out a way to make relative sorting possible
\t\tthis.helper.css( \"position\", \"absolute\" );
\t\tthis.cssPosition = this.helper.css( \"position\" );

\t\t//Generate the original position
\t\tthis.originalPosition = this._generatePosition( event );
\t\tthis.originalPageX = event.pageX;
\t\tthis.originalPageY = event.pageY;

\t\t//Adjust the mouse offset relative to the helper if \"cursorAt\" is supplied
\t\t( o.cursorAt && this._adjustOffsetFromHelper( o.cursorAt ) );

\t\t//Cache the former DOM position
\t\tthis.domPosition = {
\t\t\tprev: this.currentItem.prev()[ 0 ],
\t\t\tparent: this.currentItem.parent()[ 0 ]
\t\t};

\t\t// If the helper is not the original, hide the original so it's not playing any role during
\t\t// the drag, won't cause anything bad this way
\t\tif ( this.helper[ 0 ] !== this.currentItem[ 0 ] ) {
\t\t\tthis.currentItem.hide();
\t\t}

\t\t//Create the placeholder
\t\tthis._createPlaceholder();

\t\t//Set a containment if given in the options
\t\tif ( o.containment ) {
\t\t\tthis._setContainment();
\t\t}

\t\tif ( o.cursor && o.cursor !== \"auto\" ) { // cursor option
\t\t\tbody = this.document.find( \"body\" );

\t\t\t// Support: IE
\t\t\tthis.storedCursor = body.css( \"cursor\" );
\t\t\tbody.css( \"cursor\", o.cursor );

\t\t\tthis.storedStylesheet =
\t\t\t\t\$( \"<style>*{ cursor: \" + o.cursor + \" !important; }</style>\" ).appendTo( body );
\t\t}

\t\tif ( o.opacity ) { // opacity option
\t\t\tif ( this.helper.css( \"opacity\" ) ) {
\t\t\t\tthis._storedOpacity = this.helper.css( \"opacity\" );
\t\t\t}
\t\t\tthis.helper.css( \"opacity\", o.opacity );
\t\t}

\t\tif ( o.zIndex ) { // zIndex option
\t\t\tif ( this.helper.css( \"zIndex\" ) ) {
\t\t\t\tthis._storedZIndex = this.helper.css( \"zIndex\" );
\t\t\t}
\t\t\tthis.helper.css( \"zIndex\", o.zIndex );
\t\t}

\t\t//Prepare scrolling
\t\tif ( this.scrollParent[ 0 ] !== this.document[ 0 ] &&
\t\t\t\tthis.scrollParent[ 0 ].tagName !== \"HTML\" ) {
\t\t\tthis.overflowOffset = this.scrollParent.offset();
\t\t}

\t\t//Call callbacks
\t\tthis._trigger( \"start\", event, this._uiHash() );

\t\t//Recache the helper size
\t\tif ( !this._preserveHelperProportions ) {
\t\t\tthis._cacheHelperProportions();
\t\t}

\t\t//Post \"activate\" events to possible containers
\t\tif ( !noActivation ) {
\t\t\tfor ( i = this.containers.length - 1; i >= 0; i-- ) {
\t\t\t\tthis.containers[ i ]._trigger( \"activate\", event, this._uiHash( this ) );
\t\t\t}
\t\t}

\t\t//Prepare possible droppables
\t\tif ( \$.ui.ddmanager ) {
\t\t\t\$.ui.ddmanager.current = this;
\t\t}

\t\tif ( \$.ui.ddmanager && !o.dropBehaviour ) {
\t\t\t\$.ui.ddmanager.prepareOffsets( this, event );
\t\t}

\t\tthis.dragging = true;

\t\tthis._addClass( this.helper, \"ui-sortable-helper\" );

\t\t// Execute the drag once - this causes the helper not to be visiblebefore getting its
\t\t// correct position
\t\tthis._mouseDrag( event );
\t\treturn true;

\t},

\t_mouseDrag: function( event ) {
\t\tvar i, item, itemElement, intersection,
\t\t\to = this.options,
\t\t\tscrolled = false;

\t\t//Compute the helpers position
\t\tthis.position = this._generatePosition( event );
\t\tthis.positionAbs = this._convertPositionTo( \"absolute\" );

\t\tif ( !this.lastPositionAbs ) {
\t\t\tthis.lastPositionAbs = this.positionAbs;
\t\t}

\t\t//Do scrolling
\t\tif ( this.options.scroll ) {
\t\t\tif ( this.scrollParent[ 0 ] !== this.document[ 0 ] &&
\t\t\t\t\tthis.scrollParent[ 0 ].tagName !== \"HTML\" ) {

\t\t\t\tif ( ( this.overflowOffset.top + this.scrollParent[ 0 ].offsetHeight ) -
\t\t\t\t\t\tevent.pageY < o.scrollSensitivity ) {
\t\t\t\t\tthis.scrollParent[ 0 ].scrollTop =
\t\t\t\t\t\tscrolled = this.scrollParent[ 0 ].scrollTop + o.scrollSpeed;
\t\t\t\t} else if ( event.pageY - this.overflowOffset.top < o.scrollSensitivity ) {
\t\t\t\t\tthis.scrollParent[ 0 ].scrollTop =
\t\t\t\t\t\tscrolled = this.scrollParent[ 0 ].scrollTop - o.scrollSpeed;
\t\t\t\t}

\t\t\t\tif ( ( this.overflowOffset.left + this.scrollParent[ 0 ].offsetWidth ) -
\t\t\t\t\t\tevent.pageX < o.scrollSensitivity ) {
\t\t\t\t\tthis.scrollParent[ 0 ].scrollLeft = scrolled =
\t\t\t\t\t\tthis.scrollParent[ 0 ].scrollLeft + o.scrollSpeed;
\t\t\t\t} else if ( event.pageX - this.overflowOffset.left < o.scrollSensitivity ) {
\t\t\t\t\tthis.scrollParent[ 0 ].scrollLeft = scrolled =
\t\t\t\t\t\tthis.scrollParent[ 0 ].scrollLeft - o.scrollSpeed;
\t\t\t\t}

\t\t\t} else {

\t\t\t\tif ( event.pageY - this.document.scrollTop() < o.scrollSensitivity ) {
\t\t\t\t\tscrolled = this.document.scrollTop( this.document.scrollTop() - o.scrollSpeed );
\t\t\t\t} else if ( this.window.height() - ( event.pageY - this.document.scrollTop() ) <
\t\t\t\t\t\to.scrollSensitivity ) {
\t\t\t\t\tscrolled = this.document.scrollTop( this.document.scrollTop() + o.scrollSpeed );
\t\t\t\t}

\t\t\t\tif ( event.pageX - this.document.scrollLeft() < o.scrollSensitivity ) {
\t\t\t\t\tscrolled = this.document.scrollLeft(
\t\t\t\t\t\tthis.document.scrollLeft() - o.scrollSpeed
\t\t\t\t\t);
\t\t\t\t} else if ( this.window.width() - ( event.pageX - this.document.scrollLeft() ) <
\t\t\t\t\t\to.scrollSensitivity ) {
\t\t\t\t\tscrolled = this.document.scrollLeft(
\t\t\t\t\t\tthis.document.scrollLeft() + o.scrollSpeed
\t\t\t\t\t);
\t\t\t\t}

\t\t\t}

\t\t\tif ( scrolled !== false && \$.ui.ddmanager && !o.dropBehaviour ) {
\t\t\t\t\$.ui.ddmanager.prepareOffsets( this, event );
\t\t\t}
\t\t}

\t\t//Regenerate the absolute position used for position checks
\t\tthis.positionAbs = this._convertPositionTo( \"absolute\" );

\t\t//Set the helper position
\t\tif ( !this.options.axis || this.options.axis !== \"y\" ) {
\t\t\tthis.helper[ 0 ].style.left = this.position.left + \"px\";
\t\t}
\t\tif ( !this.options.axis || this.options.axis !== \"x\" ) {
\t\t\tthis.helper[ 0 ].style.top = this.position.top + \"px\";
\t\t}

\t\t//Rearrange
\t\tfor ( i = this.items.length - 1; i >= 0; i-- ) {

\t\t\t//Cache variables and intersection, continue if no intersection
\t\t\titem = this.items[ i ];
\t\t\titemElement = item.item[ 0 ];
\t\t\tintersection = this._intersectsWithPointer( item );
\t\t\tif ( !intersection ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\t// Only put the placeholder inside the current Container, skip all
\t\t\t// items from other containers. This works because when moving
\t\t\t// an item from one container to another the
\t\t\t// currentContainer is switched before the placeholder is moved.
\t\t\t//
\t\t\t// Without this, moving items in \"sub-sortables\" can cause
\t\t\t// the placeholder to jitter between the outer and inner container.
\t\t\tif ( item.instance !== this.currentContainer ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\t// Cannot intersect with itself
\t\t\t// no useless actions that have been done before
\t\t\t// no action if the item moved is the parent of the item checked
\t\t\tif ( itemElement !== this.currentItem[ 0 ] &&
\t\t\t\tthis.placeholder[ intersection === 1 ? \"next\" : \"prev\" ]()[ 0 ] !== itemElement &&
\t\t\t\t!\$.contains( this.placeholder[ 0 ], itemElement ) &&
\t\t\t\t( this.options.type === \"semi-dynamic\" ?
\t\t\t\t\t!\$.contains( this.element[ 0 ], itemElement ) :
\t\t\t\t\ttrue
\t\t\t\t)
\t\t\t) {

\t\t\t\tthis.direction = intersection === 1 ? \"down\" : \"up\";

\t\t\t\tif ( this.options.tolerance === \"pointer\" || this._intersectsWithSides( item ) ) {
\t\t\t\t\tthis._rearrange( event, item );
\t\t\t\t} else {
\t\t\t\t\tbreak;
\t\t\t\t}

\t\t\t\tthis._trigger( \"change\", event, this._uiHash() );
\t\t\t\tbreak;
\t\t\t}
\t\t}

\t\t//Post events to containers
\t\tthis._contactContainers( event );

\t\t//Interconnect with droppables
\t\tif ( \$.ui.ddmanager ) {
\t\t\t\$.ui.ddmanager.drag( this, event );
\t\t}

\t\t//Call callbacks
\t\tthis._trigger( \"sort\", event, this._uiHash() );

\t\tthis.lastPositionAbs = this.positionAbs;
\t\treturn false;

\t},

\t_mouseStop: function( event, noPropagation ) {

\t\tif ( !event ) {
\t\t\treturn;
\t\t}

\t\t//If we are using droppables, inform the manager about the drop
\t\tif ( \$.ui.ddmanager && !this.options.dropBehaviour ) {
\t\t\t\$.ui.ddmanager.drop( this, event );
\t\t}

\t\tif ( this.options.revert ) {
\t\t\tvar that = this,
\t\t\t\tcur = this.placeholder.offset(),
\t\t\t\taxis = this.options.axis,
\t\t\t\tanimation = {};

\t\t\tif ( !axis || axis === \"x\" ) {
\t\t\t\tanimation.left = cur.left - this.offset.parent.left - this.margins.left +
\t\t\t\t\t( this.offsetParent[ 0 ] === this.document[ 0 ].body ?
\t\t\t\t\t\t0 :
\t\t\t\t\t\tthis.offsetParent[ 0 ].scrollLeft
\t\t\t\t\t);
\t\t\t}
\t\t\tif ( !axis || axis === \"y\" ) {
\t\t\t\tanimation.top = cur.top - this.offset.parent.top - this.margins.top +
\t\t\t\t\t( this.offsetParent[ 0 ] === this.document[ 0 ].body ?
\t\t\t\t\t\t0 :
\t\t\t\t\t\tthis.offsetParent[ 0 ].scrollTop
\t\t\t\t\t);
\t\t\t}
\t\t\tthis.reverting = true;
\t\t\t\$( this.helper ).animate(
\t\t\t\tanimation,
\t\t\t\tparseInt( this.options.revert, 10 ) || 500,
\t\t\t\tfunction() {
\t\t\t\t\tthat._clear( event );
\t\t\t\t}
\t\t\t);
\t\t} else {
\t\t\tthis._clear( event, noPropagation );
\t\t}

\t\treturn false;

\t},

\tcancel: function() {

\t\tif ( this.dragging ) {

\t\t\tthis._mouseUp( new \$.Event( \"mouseup\", { target: null } ) );

\t\t\tif ( this.options.helper === \"original\" ) {
\t\t\t\tthis.currentItem.css( this._storedCSS );
\t\t\t\tthis._removeClass( this.currentItem, \"ui-sortable-helper\" );
\t\t\t} else {
\t\t\t\tthis.currentItem.show();
\t\t\t}

\t\t\t//Post deactivating events to containers
\t\t\tfor ( var i = this.containers.length - 1; i >= 0; i-- ) {
\t\t\t\tthis.containers[ i ]._trigger( \"deactivate\", null, this._uiHash( this ) );
\t\t\t\tif ( this.containers[ i ].containerCache.over ) {
\t\t\t\t\tthis.containers[ i ]._trigger( \"out\", null, this._uiHash( this ) );
\t\t\t\t\tthis.containers[ i ].containerCache.over = 0;
\t\t\t\t}
\t\t\t}

\t\t}

\t\tif ( this.placeholder ) {

\t\t\t//\$(this.placeholder[0]).remove(); would have been the jQuery way - unfortunately,
\t\t\t// it unbinds ALL events from the original node!
\t\t\tif ( this.placeholder[ 0 ].parentNode ) {
\t\t\t\tthis.placeholder[ 0 ].parentNode.removeChild( this.placeholder[ 0 ] );
\t\t\t}
\t\t\tif ( this.options.helper !== \"original\" && this.helper &&
\t\t\t\t\tthis.helper[ 0 ].parentNode ) {
\t\t\t\tthis.helper.remove();
\t\t\t}

\t\t\t\$.extend( this, {
\t\t\t\thelper: null,
\t\t\t\tdragging: false,
\t\t\t\treverting: false,
\t\t\t\t_noFinalSort: null
\t\t\t} );

\t\t\tif ( this.domPosition.prev ) {
\t\t\t\t\$( this.domPosition.prev ).after( this.currentItem );
\t\t\t} else {
\t\t\t\t\$( this.domPosition.parent ).prepend( this.currentItem );
\t\t\t}
\t\t}

\t\treturn this;

\t},

\tserialize: function( o ) {

\t\tvar items = this._getItemsAsjQuery( o && o.connected ),
\t\t\tstr = [];
\t\to = o || {};

\t\t\$( items ).each( function() {
\t\t\tvar res = ( \$( o.item || this ).attr( o.attribute || \"id\" ) || \"\" )
\t\t\t\t.match( o.expression || ( /(.+)[\\-=_](.+)/ ) );
\t\t\tif ( res ) {
\t\t\t\tstr.push(
\t\t\t\t\t( o.key || res[ 1 ] + \"[]\" ) +
\t\t\t\t\t\"=\" + ( o.key && o.expression ? res[ 1 ] : res[ 2 ] ) );
\t\t\t}
\t\t} );

\t\tif ( !str.length && o.key ) {
\t\t\tstr.push( o.key + \"=\" );
\t\t}

\t\treturn str.join( \"&\" );

\t},

\ttoArray: function( o ) {

\t\tvar items = this._getItemsAsjQuery( o && o.connected ),
\t\t\tret = [];

\t\to = o || {};

\t\titems.each( function() {
\t\t\tret.push( \$( o.item || this ).attr( o.attribute || \"id\" ) || \"\" );
\t\t} );
\t\treturn ret;

\t},

\t/* Be careful with the following core functions */
\t_intersectsWith: function( item ) {

\t\tvar x1 = this.positionAbs.left,
\t\t\tx2 = x1 + this.helperProportions.width,
\t\t\ty1 = this.positionAbs.top,
\t\t\ty2 = y1 + this.helperProportions.height,
\t\t\tl = item.left,
\t\t\tr = l + item.width,
\t\t\tt = item.top,
\t\t\tb = t + item.height,
\t\t\tdyClick = this.offset.click.top,
\t\t\tdxClick = this.offset.click.left,
\t\t\tisOverElementHeight = ( this.options.axis === \"x\" ) || ( ( y1 + dyClick ) > t &&
\t\t\t\t( y1 + dyClick ) < b ),
\t\t\tisOverElementWidth = ( this.options.axis === \"y\" ) || ( ( x1 + dxClick ) > l &&
\t\t\t\t( x1 + dxClick ) < r ),
\t\t\tisOverElement = isOverElementHeight && isOverElementWidth;

\t\tif ( this.options.tolerance === \"pointer\" ||
\t\t\tthis.options.forcePointerForContainers ||
\t\t\t( this.options.tolerance !== \"pointer\" &&
\t\t\t\tthis.helperProportions[ this.floating ? \"width\" : \"height\" ] >
\t\t\t\titem[ this.floating ? \"width\" : \"height\" ] )
\t\t) {
\t\t\treturn isOverElement;
\t\t} else {

\t\t\treturn ( l < x1 + ( this.helperProportions.width / 2 ) && // Right Half
\t\t\t\tx2 - ( this.helperProportions.width / 2 ) < r && // Left Half
\t\t\t\tt < y1 + ( this.helperProportions.height / 2 ) && // Bottom Half
\t\t\t\ty2 - ( this.helperProportions.height / 2 ) < b ); // Top Half

\t\t}
\t},

\t_intersectsWithPointer: function( item ) {
\t\tvar verticalDirection, horizontalDirection,
\t\t\tisOverElementHeight = ( this.options.axis === \"x\" ) ||
\t\t\t\tthis._isOverAxis(
\t\t\t\t\tthis.positionAbs.top + this.offset.click.top, item.top, item.height ),
\t\t\tisOverElementWidth = ( this.options.axis === \"y\" ) ||
\t\t\t\tthis._isOverAxis(
\t\t\t\t\tthis.positionAbs.left + this.offset.click.left, item.left, item.width ),
\t\t\tisOverElement = isOverElementHeight && isOverElementWidth;

\t\tif ( !isOverElement ) {
\t\t\treturn false;
\t\t}

\t\tverticalDirection = this._getDragVerticalDirection();
\t\thorizontalDirection = this._getDragHorizontalDirection();

\t\treturn this.floating ?
\t\t\t( ( horizontalDirection === \"right\" || verticalDirection === \"down\" ) ? 2 : 1 )
\t\t\t: ( verticalDirection && ( verticalDirection === \"down\" ? 2 : 1 ) );

\t},

\t_intersectsWithSides: function( item ) {

\t\tvar isOverBottomHalf = this._isOverAxis( this.positionAbs.top +
\t\t\t\tthis.offset.click.top, item.top + ( item.height / 2 ), item.height ),
\t\t\tisOverRightHalf = this._isOverAxis( this.positionAbs.left +
\t\t\t\tthis.offset.click.left, item.left + ( item.width / 2 ), item.width ),
\t\t\tverticalDirection = this._getDragVerticalDirection(),
\t\t\thorizontalDirection = this._getDragHorizontalDirection();

\t\tif ( this.floating && horizontalDirection ) {
\t\t\treturn ( ( horizontalDirection === \"right\" && isOverRightHalf ) ||
\t\t\t\t( horizontalDirection === \"left\" && !isOverRightHalf ) );
\t\t} else {
\t\t\treturn verticalDirection && ( ( verticalDirection === \"down\" && isOverBottomHalf ) ||
\t\t\t\t( verticalDirection === \"up\" && !isOverBottomHalf ) );
\t\t}

\t},

\t_getDragVerticalDirection: function() {
\t\tvar delta = this.positionAbs.top - this.lastPositionAbs.top;
\t\treturn delta !== 0 && ( delta > 0 ? \"down\" : \"up\" );
\t},

\t_getDragHorizontalDirection: function() {
\t\tvar delta = this.positionAbs.left - this.lastPositionAbs.left;
\t\treturn delta !== 0 && ( delta > 0 ? \"right\" : \"left\" );
\t},

\trefresh: function( event ) {
\t\tthis._refreshItems( event );
\t\tthis._setHandleClassName();
\t\tthis.refreshPositions();
\t\treturn this;
\t},

\t_connectWith: function() {
\t\tvar options = this.options;
\t\treturn options.connectWith.constructor === String ?
\t\t\t[ options.connectWith ] :
\t\t\toptions.connectWith;
\t},

\t_getItemsAsjQuery: function( connected ) {

\t\tvar i, j, cur, inst,
\t\t\titems = [],
\t\t\tqueries = [],
\t\t\tconnectWith = this._connectWith();

\t\tif ( connectWith && connected ) {
\t\t\tfor ( i = connectWith.length - 1; i >= 0; i-- ) {
\t\t\t\tcur = \$( connectWith[ i ], this.document[ 0 ] );
\t\t\t\tfor ( j = cur.length - 1; j >= 0; j-- ) {
\t\t\t\t\tinst = \$.data( cur[ j ], this.widgetFullName );
\t\t\t\t\tif ( inst && inst !== this && !inst.options.disabled ) {
\t\t\t\t\t\tqueries.push( [ \$.isFunction( inst.options.items ) ?
\t\t\t\t\t\t\tinst.options.items.call( inst.element ) :
\t\t\t\t\t\t\t\$( inst.options.items, inst.element )
\t\t\t\t\t\t\t\t.not( \".ui-sortable-helper\" )
\t\t\t\t\t\t\t\t.not( \".ui-sortable-placeholder\" ), inst ] );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\tqueries.push( [ \$.isFunction( this.options.items ) ?
\t\t\tthis.options.items
\t\t\t\t.call( this.element, null, { options: this.options, item: this.currentItem } ) :
\t\t\t\$( this.options.items, this.element )
\t\t\t\t.not( \".ui-sortable-helper\" )
\t\t\t\t.not( \".ui-sortable-placeholder\" ), this ] );

\t\tfunction addItems() {
\t\t\titems.push( this );
\t\t}
\t\tfor ( i = queries.length - 1; i >= 0; i-- ) {
\t\t\tqueries[ i ][ 0 ].each( addItems );
\t\t}

\t\treturn \$( items );

\t},

\t_removeCurrentsFromItems: function() {

\t\tvar list = this.currentItem.find( \":data(\" + this.widgetName + \"-item)\" );

\t\tthis.items = \$.grep( this.items, function( item ) {
\t\t\tfor ( var j = 0; j < list.length; j++ ) {
\t\t\t\tif ( list[ j ] === item.item[ 0 ] ) {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\treturn true;
\t\t} );

\t},

\t_refreshItems: function( event ) {

\t\tthis.items = [];
\t\tthis.containers = [ this ];

\t\tvar i, j, cur, inst, targetData, _queries, item, queriesLength,
\t\t\titems = this.items,
\t\t\tqueries = [ [ \$.isFunction( this.options.items ) ?
\t\t\t\tthis.options.items.call( this.element[ 0 ], event, { item: this.currentItem } ) :
\t\t\t\t\$( this.options.items, this.element ), this ] ],
\t\t\tconnectWith = this._connectWith();

\t\t//Shouldn't be run the first time through due to massive slow-down
\t\tif ( connectWith && this.ready ) {
\t\t\tfor ( i = connectWith.length - 1; i >= 0; i-- ) {
\t\t\t\tcur = \$( connectWith[ i ], this.document[ 0 ] );
\t\t\t\tfor ( j = cur.length - 1; j >= 0; j-- ) {
\t\t\t\t\tinst = \$.data( cur[ j ], this.widgetFullName );
\t\t\t\t\tif ( inst && inst !== this && !inst.options.disabled ) {
\t\t\t\t\t\tqueries.push( [ \$.isFunction( inst.options.items ) ?
\t\t\t\t\t\t\tinst.options.items
\t\t\t\t\t\t\t\t.call( inst.element[ 0 ], event, { item: this.currentItem } ) :
\t\t\t\t\t\t\t\$( inst.options.items, inst.element ), inst ] );
\t\t\t\t\t\tthis.containers.push( inst );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\tfor ( i = queries.length - 1; i >= 0; i-- ) {
\t\t\ttargetData = queries[ i ][ 1 ];
\t\t\t_queries = queries[ i ][ 0 ];

\t\t\tfor ( j = 0, queriesLength = _queries.length; j < queriesLength; j++ ) {
\t\t\t\titem = \$( _queries[ j ] );

\t\t\t\t// Data for target checking (mouse manager)
\t\t\t\titem.data( this.widgetName + \"-item\", targetData );

\t\t\t\titems.push( {
\t\t\t\t\titem: item,
\t\t\t\t\tinstance: targetData,
\t\t\t\t\twidth: 0, height: 0,
\t\t\t\t\tleft: 0, top: 0
\t\t\t\t} );
\t\t\t}
\t\t}

\t},

\trefreshPositions: function( fast ) {

\t\t// Determine whether items are being displayed horizontally
\t\tthis.floating = this.items.length ?
\t\t\tthis.options.axis === \"x\" || this._isFloating( this.items[ 0 ].item ) :
\t\t\tfalse;

\t\t//This has to be redone because due to the item being moved out/into the offsetParent,
\t\t// the offsetParent's position will change
\t\tif ( this.offsetParent && this.helper ) {
\t\t\tthis.offset.parent = this._getParentOffset();
\t\t}

\t\tvar i, item, t, p;

\t\tfor ( i = this.items.length - 1; i >= 0; i-- ) {
\t\t\titem = this.items[ i ];

\t\t\t//We ignore calculating positions of all connected containers when we're not over them
\t\t\tif ( item.instance !== this.currentContainer && this.currentContainer &&
\t\t\t\t\titem.item[ 0 ] !== this.currentItem[ 0 ] ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\tt = this.options.toleranceElement ?
\t\t\t\t\$( this.options.toleranceElement, item.item ) :
\t\t\t\titem.item;

\t\t\tif ( !fast ) {
\t\t\t\titem.width = t.outerWidth();
\t\t\t\titem.height = t.outerHeight();
\t\t\t}

\t\t\tp = t.offset();
\t\t\titem.left = p.left;
\t\t\titem.top = p.top;
\t\t}

\t\tif ( this.options.custom && this.options.custom.refreshContainers ) {
\t\t\tthis.options.custom.refreshContainers.call( this );
\t\t} else {
\t\t\tfor ( i = this.containers.length - 1; i >= 0; i-- ) {
\t\t\t\tp = this.containers[ i ].element.offset();
\t\t\t\tthis.containers[ i ].containerCache.left = p.left;
\t\t\t\tthis.containers[ i ].containerCache.top = p.top;
\t\t\t\tthis.containers[ i ].containerCache.width =
\t\t\t\t\tthis.containers[ i ].element.outerWidth();
\t\t\t\tthis.containers[ i ].containerCache.height =
\t\t\t\t\tthis.containers[ i ].element.outerHeight();
\t\t\t}
\t\t}

\t\treturn this;
\t},

\t_createPlaceholder: function( that ) {
\t\tthat = that || this;
\t\tvar className,
\t\t\to = that.options;

\t\tif ( !o.placeholder || o.placeholder.constructor === String ) {
\t\t\tclassName = o.placeholder;
\t\t\to.placeholder = {
\t\t\t\telement: function() {

\t\t\t\t\tvar nodeName = that.currentItem[ 0 ].nodeName.toLowerCase(),
\t\t\t\t\t\telement = \$( \"<\" + nodeName + \">\", that.document[ 0 ] );

\t\t\t\t\t\tthat._addClass( element, \"ui-sortable-placeholder\",
\t\t\t\t\t\t\t\tclassName || that.currentItem[ 0 ].className )
\t\t\t\t\t\t\t._removeClass( element, \"ui-sortable-helper\" );

\t\t\t\t\tif ( nodeName === \"tbody\" ) {
\t\t\t\t\t\tthat._createTrPlaceholder(
\t\t\t\t\t\t\tthat.currentItem.find( \"tr\" ).eq( 0 ),
\t\t\t\t\t\t\t\$( \"<tr>\", that.document[ 0 ] ).appendTo( element )
\t\t\t\t\t\t);
\t\t\t\t\t} else if ( nodeName === \"tr\" ) {
\t\t\t\t\t\tthat._createTrPlaceholder( that.currentItem, element );
\t\t\t\t\t} else if ( nodeName === \"img\" ) {
\t\t\t\t\t\telement.attr( \"src\", that.currentItem.attr( \"src\" ) );
\t\t\t\t\t}

\t\t\t\t\tif ( !className ) {
\t\t\t\t\t\telement.css( \"visibility\", \"hidden\" );
\t\t\t\t\t}

\t\t\t\t\treturn element;
\t\t\t\t},
\t\t\t\tupdate: function( container, p ) {

\t\t\t\t\t// 1. If a className is set as 'placeholder option, we don't force sizes -
\t\t\t\t\t// the class is responsible for that
\t\t\t\t\t// 2. The option 'forcePlaceholderSize can be enabled to force it even if a
\t\t\t\t\t// class name is specified
\t\t\t\t\tif ( className && !o.forcePlaceholderSize ) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\t//If the element doesn't have a actual height by itself (without styles coming
\t\t\t\t\t// from a stylesheet), it receives the inline height from the dragged item
\t\t\t\t\tif ( !p.height() ) {
\t\t\t\t\t\tp.height(
\t\t\t\t\t\t\tthat.currentItem.innerHeight() -
\t\t\t\t\t\t\tparseInt( that.currentItem.css( \"paddingTop\" ) || 0, 10 ) -
\t\t\t\t\t\t\tparseInt( that.currentItem.css( \"paddingBottom\" ) || 0, 10 ) );
\t\t\t\t\t}
\t\t\t\t\tif ( !p.width() ) {
\t\t\t\t\t\tp.width(
\t\t\t\t\t\t\tthat.currentItem.innerWidth() -
\t\t\t\t\t\t\tparseInt( that.currentItem.css( \"paddingLeft\" ) || 0, 10 ) -
\t\t\t\t\t\t\tparseInt( that.currentItem.css( \"paddingRight\" ) || 0, 10 ) );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t};
\t\t}

\t\t//Create the placeholder
\t\tthat.placeholder = \$( o.placeholder.element.call( that.element, that.currentItem ) );

\t\t//Append it after the actual current item
\t\tthat.currentItem.after( that.placeholder );

\t\t//Update the size of the placeholder (TODO: Logic to fuzzy, see line 316/317)
\t\to.placeholder.update( that, that.placeholder );

\t},

\t_createTrPlaceholder: function( sourceTr, targetTr ) {
\t\tvar that = this;

\t\tsourceTr.children().each( function() {
\t\t\t\$( \"<td>&#160;</td>\", that.document[ 0 ] )
\t\t\t\t.attr( \"colspan\", \$( this ).attr( \"colspan\" ) || 1 )
\t\t\t\t.appendTo( targetTr );
\t\t} );
\t},

\t_contactContainers: function( event ) {
\t\tvar i, j, dist, itemWithLeastDistance, posProperty, sizeProperty, cur, nearBottom,
\t\t\tfloating, axis,
\t\t\tinnermostContainer = null,
\t\t\tinnermostIndex = null;

\t\t// Get innermost container that intersects with item
\t\tfor ( i = this.containers.length - 1; i >= 0; i-- ) {

\t\t\t// Never consider a container that's located within the item itself
\t\t\tif ( \$.contains( this.currentItem[ 0 ], this.containers[ i ].element[ 0 ] ) ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\tif ( this._intersectsWith( this.containers[ i ].containerCache ) ) {

\t\t\t\t// If we've already found a container and it's more \"inner\" than this, then continue
\t\t\t\tif ( innermostContainer &&
\t\t\t\t\t\t\$.contains(
\t\t\t\t\t\t\tthis.containers[ i ].element[ 0 ],
\t\t\t\t\t\t\tinnermostContainer.element[ 0 ] ) ) {
\t\t\t\t\tcontinue;
\t\t\t\t}

\t\t\t\tinnermostContainer = this.containers[ i ];
\t\t\t\tinnermostIndex = i;

\t\t\t} else {

\t\t\t\t// container doesn't intersect. trigger \"out\" event if necessary
\t\t\t\tif ( this.containers[ i ].containerCache.over ) {
\t\t\t\t\tthis.containers[ i ]._trigger( \"out\", event, this._uiHash( this ) );
\t\t\t\t\tthis.containers[ i ].containerCache.over = 0;
\t\t\t\t}
\t\t\t}

\t\t}

\t\t// If no intersecting containers found, return
\t\tif ( !innermostContainer ) {
\t\t\treturn;
\t\t}

\t\t// Move the item into the container if it's not there already
\t\tif ( this.containers.length === 1 ) {
\t\t\tif ( !this.containers[ innermostIndex ].containerCache.over ) {
\t\t\t\tthis.containers[ innermostIndex ]._trigger( \"over\", event, this._uiHash( this ) );
\t\t\t\tthis.containers[ innermostIndex ].containerCache.over = 1;
\t\t\t}
\t\t} else {

\t\t\t// When entering a new container, we will find the item with the least distance and
\t\t\t// append our item near it
\t\t\tdist = 10000;
\t\t\titemWithLeastDistance = null;
\t\t\tfloating = innermostContainer.floating || this._isFloating( this.currentItem );
\t\t\tposProperty = floating ? \"left\" : \"top\";
\t\t\tsizeProperty = floating ? \"width\" : \"height\";
\t\t\taxis = floating ? \"pageX\" : \"pageY\";

\t\t\tfor ( j = this.items.length - 1; j >= 0; j-- ) {
\t\t\t\tif ( !\$.contains(
\t\t\t\t\t\tthis.containers[ innermostIndex ].element[ 0 ], this.items[ j ].item[ 0 ] )
\t\t\t\t) {
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t\tif ( this.items[ j ].item[ 0 ] === this.currentItem[ 0 ] ) {
\t\t\t\t\tcontinue;
\t\t\t\t}

\t\t\t\tcur = this.items[ j ].item.offset()[ posProperty ];
\t\t\t\tnearBottom = false;
\t\t\t\tif ( event[ axis ] - cur > this.items[ j ][ sizeProperty ] / 2 ) {
\t\t\t\t\tnearBottom = true;
\t\t\t\t}

\t\t\t\tif ( Math.abs( event[ axis ] - cur ) < dist ) {
\t\t\t\t\tdist = Math.abs( event[ axis ] - cur );
\t\t\t\t\titemWithLeastDistance = this.items[ j ];
\t\t\t\t\tthis.direction = nearBottom ? \"up\" : \"down\";
\t\t\t\t}
\t\t\t}

\t\t\t//Check if dropOnEmpty is enabled
\t\t\tif ( !itemWithLeastDistance && !this.options.dropOnEmpty ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( this.currentContainer === this.containers[ innermostIndex ] ) {
\t\t\t\tif ( !this.currentContainer.containerCache.over ) {
\t\t\t\t\tthis.containers[ innermostIndex ]._trigger( \"over\", event, this._uiHash() );
\t\t\t\t\tthis.currentContainer.containerCache.over = 1;
\t\t\t\t}
\t\t\t\treturn;
\t\t\t}

\t\t\titemWithLeastDistance ?
\t\t\t\tthis._rearrange( event, itemWithLeastDistance, null, true ) :
\t\t\t\tthis._rearrange( event, null, this.containers[ innermostIndex ].element, true );
\t\t\tthis._trigger( \"change\", event, this._uiHash() );
\t\t\tthis.containers[ innermostIndex ]._trigger( \"change\", event, this._uiHash( this ) );
\t\t\tthis.currentContainer = this.containers[ innermostIndex ];

\t\t\t//Update the placeholder
\t\t\tthis.options.placeholder.update( this.currentContainer, this.placeholder );

\t\t\tthis.containers[ innermostIndex ]._trigger( \"over\", event, this._uiHash( this ) );
\t\t\tthis.containers[ innermostIndex ].containerCache.over = 1;
\t\t}

\t},

\t_createHelper: function( event ) {

\t\tvar o = this.options,
\t\t\thelper = \$.isFunction( o.helper ) ?
\t\t\t\t\$( o.helper.apply( this.element[ 0 ], [ event, this.currentItem ] ) ) :
\t\t\t\t( o.helper === \"clone\" ? this.currentItem.clone() : this.currentItem );

\t\t//Add the helper to the DOM if that didn't happen already
\t\tif ( !helper.parents( \"body\" ).length ) {
\t\t\t\$( o.appendTo !== \"parent\" ?
\t\t\t\to.appendTo :
\t\t\t\tthis.currentItem[ 0 ].parentNode )[ 0 ].appendChild( helper[ 0 ] );
\t\t}

\t\tif ( helper[ 0 ] === this.currentItem[ 0 ] ) {
\t\t\tthis._storedCSS = {
\t\t\t\twidth: this.currentItem[ 0 ].style.width,
\t\t\t\theight: this.currentItem[ 0 ].style.height,
\t\t\t\tposition: this.currentItem.css( \"position\" ),
\t\t\t\ttop: this.currentItem.css( \"top\" ),
\t\t\t\tleft: this.currentItem.css( \"left\" )
\t\t\t};
\t\t}

\t\tif ( !helper[ 0 ].style.width || o.forceHelperSize ) {
\t\t\thelper.width( this.currentItem.width() );
\t\t}
\t\tif ( !helper[ 0 ].style.height || o.forceHelperSize ) {
\t\t\thelper.height( this.currentItem.height() );
\t\t}

\t\treturn helper;

\t},

\t_adjustOffsetFromHelper: function( obj ) {
\t\tif ( typeof obj === \"string\" ) {
\t\t\tobj = obj.split( \" \" );
\t\t}
\t\tif ( \$.isArray( obj ) ) {
\t\t\tobj = { left: +obj[ 0 ], top: +obj[ 1 ] || 0 };
\t\t}
\t\tif ( \"left\" in obj ) {
\t\t\tthis.offset.click.left = obj.left + this.margins.left;
\t\t}
\t\tif ( \"right\" in obj ) {
\t\t\tthis.offset.click.left = this.helperProportions.width - obj.right + this.margins.left;
\t\t}
\t\tif ( \"top\" in obj ) {
\t\t\tthis.offset.click.top = obj.top + this.margins.top;
\t\t}
\t\tif ( \"bottom\" in obj ) {
\t\t\tthis.offset.click.top = this.helperProportions.height - obj.bottom + this.margins.top;
\t\t}
\t},

\t_getParentOffset: function() {

\t\t//Get the offsetParent and cache its position
\t\tthis.offsetParent = this.helper.offsetParent();
\t\tvar po = this.offsetParent.offset();

\t\t// This is a special case where we need to modify a offset calculated on start, since the
\t\t// following happened:
\t\t// 1. The position of the helper is absolute, so it's position is calculated based on the
\t\t// next positioned parent
\t\t// 2. The actual offset parent is a child of the scroll parent, and the scroll parent isn't
\t\t// the document, which means that the scroll is included in the initial calculation of the
\t\t// offset of the parent, and never recalculated upon drag
\t\tif ( this.cssPosition === \"absolute\" && this.scrollParent[ 0 ] !== this.document[ 0 ] &&
\t\t\t\t\$.contains( this.scrollParent[ 0 ], this.offsetParent[ 0 ] ) ) {
\t\t\tpo.left += this.scrollParent.scrollLeft();
\t\t\tpo.top += this.scrollParent.scrollTop();
\t\t}

\t\t// This needs to be actually done for all browsers, since pageX/pageY includes this
\t\t// information with an ugly IE fix
\t\tif ( this.offsetParent[ 0 ] === this.document[ 0 ].body ||
\t\t\t\t( this.offsetParent[ 0 ].tagName &&
\t\t\t\tthis.offsetParent[ 0 ].tagName.toLowerCase() === \"html\" && \$.ui.ie ) ) {
\t\t\tpo = { top: 0, left: 0 };
\t\t}

\t\treturn {
\t\t\ttop: po.top + ( parseInt( this.offsetParent.css( \"borderTopWidth\" ), 10 ) || 0 ),
\t\t\tleft: po.left + ( parseInt( this.offsetParent.css( \"borderLeftWidth\" ), 10 ) || 0 )
\t\t};

\t},

\t_getRelativeOffset: function() {

\t\tif ( this.cssPosition === \"relative\" ) {
\t\t\tvar p = this.currentItem.position();
\t\t\treturn {
\t\t\t\ttop: p.top - ( parseInt( this.helper.css( \"top\" ), 10 ) || 0 ) +
\t\t\t\t\tthis.scrollParent.scrollTop(),
\t\t\t\tleft: p.left - ( parseInt( this.helper.css( \"left\" ), 10 ) || 0 ) +
\t\t\t\t\tthis.scrollParent.scrollLeft()
\t\t\t};
\t\t} else {
\t\t\treturn { top: 0, left: 0 };
\t\t}

\t},

\t_cacheMargins: function() {
\t\tthis.margins = {
\t\t\tleft: ( parseInt( this.currentItem.css( \"marginLeft\" ), 10 ) || 0 ),
\t\t\ttop: ( parseInt( this.currentItem.css( \"marginTop\" ), 10 ) || 0 )
\t\t};
\t},

\t_cacheHelperProportions: function() {
\t\tthis.helperProportions = {
\t\t\twidth: this.helper.outerWidth(),
\t\t\theight: this.helper.outerHeight()
\t\t};
\t},

\t_setContainment: function() {

\t\tvar ce, co, over,
\t\t\to = this.options;
\t\tif ( o.containment === \"parent\" ) {
\t\t\to.containment = this.helper[ 0 ].parentNode;
\t\t}
\t\tif ( o.containment === \"document\" || o.containment === \"window\" ) {
\t\t\tthis.containment = [
\t\t\t\t0 - this.offset.relative.left - this.offset.parent.left,
\t\t\t\t0 - this.offset.relative.top - this.offset.parent.top,
\t\t\t\to.containment === \"document\" ?
\t\t\t\t\tthis.document.width() :
\t\t\t\t\tthis.window.width() - this.helperProportions.width - this.margins.left,
\t\t\t\t( o.containment === \"document\" ?
\t\t\t\t\t( this.document.height() || document.body.parentNode.scrollHeight ) :
\t\t\t\t\tthis.window.height() || this.document[ 0 ].body.parentNode.scrollHeight
\t\t\t\t) - this.helperProportions.height - this.margins.top
\t\t\t];
\t\t}

\t\tif ( !( /^(document|window|parent)\$/ ).test( o.containment ) ) {
\t\t\tce = \$( o.containment )[ 0 ];
\t\t\tco = \$( o.containment ).offset();
\t\t\tover = ( \$( ce ).css( \"overflow\" ) !== \"hidden\" );

\t\t\tthis.containment = [
\t\t\t\tco.left + ( parseInt( \$( ce ).css( \"borderLeftWidth\" ), 10 ) || 0 ) +
\t\t\t\t\t( parseInt( \$( ce ).css( \"paddingLeft\" ), 10 ) || 0 ) - this.margins.left,
\t\t\t\tco.top + ( parseInt( \$( ce ).css( \"borderTopWidth\" ), 10 ) || 0 ) +
\t\t\t\t\t( parseInt( \$( ce ).css( \"paddingTop\" ), 10 ) || 0 ) - this.margins.top,
\t\t\t\tco.left + ( over ? Math.max( ce.scrollWidth, ce.offsetWidth ) : ce.offsetWidth ) -
\t\t\t\t\t( parseInt( \$( ce ).css( \"borderLeftWidth\" ), 10 ) || 0 ) -
\t\t\t\t\t( parseInt( \$( ce ).css( \"paddingRight\" ), 10 ) || 0 ) -
\t\t\t\t\tthis.helperProportions.width - this.margins.left,
\t\t\t\tco.top + ( over ? Math.max( ce.scrollHeight, ce.offsetHeight ) : ce.offsetHeight ) -
\t\t\t\t\t( parseInt( \$( ce ).css( \"borderTopWidth\" ), 10 ) || 0 ) -
\t\t\t\t\t( parseInt( \$( ce ).css( \"paddingBottom\" ), 10 ) || 0 ) -
\t\t\t\t\tthis.helperProportions.height - this.margins.top
\t\t\t];
\t\t}

\t},

\t_convertPositionTo: function( d, pos ) {

\t\tif ( !pos ) {
\t\t\tpos = this.position;
\t\t}
\t\tvar mod = d === \"absolute\" ? 1 : -1,
\t\t\tscroll = this.cssPosition === \"absolute\" &&
\t\t\t\t!( this.scrollParent[ 0 ] !== this.document[ 0 ] &&
\t\t\t\t\$.contains( this.scrollParent[ 0 ], this.offsetParent[ 0 ] ) ) ?
\t\t\t\t\tthis.offsetParent :
\t\t\t\t\tthis.scrollParent,
\t\t\tscrollIsRootNode = ( /(html|body)/i ).test( scroll[ 0 ].tagName );

\t\treturn {
\t\t\ttop: (

\t\t\t\t// The absolute mouse position
\t\t\t\tpos.top\t+

\t\t\t\t// Only for relative positioned nodes: Relative offset from element to offset parent
\t\t\t\tthis.offset.relative.top * mod +

\t\t\t\t// The offsetParent's offset without borders (offset + border)
\t\t\t\tthis.offset.parent.top * mod -
\t\t\t\t( ( this.cssPosition === \"fixed\" ?
\t\t\t\t\t-this.scrollParent.scrollTop() :
\t\t\t\t\t( scrollIsRootNode ? 0 : scroll.scrollTop() ) ) * mod )
\t\t\t),
\t\t\tleft: (

\t\t\t\t// The absolute mouse position
\t\t\t\tpos.left +

\t\t\t\t// Only for relative positioned nodes: Relative offset from element to offset parent
\t\t\t\tthis.offset.relative.left * mod +

\t\t\t\t// The offsetParent's offset without borders (offset + border)
\t\t\t\tthis.offset.parent.left * mod\t-
\t\t\t\t( ( this.cssPosition === \"fixed\" ?
\t\t\t\t\t-this.scrollParent.scrollLeft() : scrollIsRootNode ? 0 :
\t\t\t\t\tscroll.scrollLeft() ) * mod )
\t\t\t)
\t\t};

\t},

\t_generatePosition: function( event ) {

\t\tvar top, left,
\t\t\to = this.options,
\t\t\tpageX = event.pageX,
\t\t\tpageY = event.pageY,
\t\t\tscroll = this.cssPosition === \"absolute\" &&
\t\t\t\t!( this.scrollParent[ 0 ] !== this.document[ 0 ] &&
\t\t\t\t\$.contains( this.scrollParent[ 0 ], this.offsetParent[ 0 ] ) ) ?
\t\t\t\t\tthis.offsetParent :
\t\t\t\t\tthis.scrollParent,
\t\t\t\tscrollIsRootNode = ( /(html|body)/i ).test( scroll[ 0 ].tagName );

\t\t// This is another very weird special case that only happens for relative elements:
\t\t// 1. If the css position is relative
\t\t// 2. and the scroll parent is the document or similar to the offset parent
\t\t// we have to refresh the relative offset during the scroll so there are no jumps
\t\tif ( this.cssPosition === \"relative\" && !( this.scrollParent[ 0 ] !== this.document[ 0 ] &&
\t\t\t\tthis.scrollParent[ 0 ] !== this.offsetParent[ 0 ] ) ) {
\t\t\tthis.offset.relative = this._getRelativeOffset();
\t\t}

\t\t/*
\t\t * - Position constraining -
\t\t * Constrain the position to a mix of grid, containment.
\t\t */

\t\tif ( this.originalPosition ) { //If we are not dragging yet, we won't check for options

\t\t\tif ( this.containment ) {
\t\t\t\tif ( event.pageX - this.offset.click.left < this.containment[ 0 ] ) {
\t\t\t\t\tpageX = this.containment[ 0 ] + this.offset.click.left;
\t\t\t\t}
\t\t\t\tif ( event.pageY - this.offset.click.top < this.containment[ 1 ] ) {
\t\t\t\t\tpageY = this.containment[ 1 ] + this.offset.click.top;
\t\t\t\t}
\t\t\t\tif ( event.pageX - this.offset.click.left > this.containment[ 2 ] ) {
\t\t\t\t\tpageX = this.containment[ 2 ] + this.offset.click.left;
\t\t\t\t}
\t\t\t\tif ( event.pageY - this.offset.click.top > this.containment[ 3 ] ) {
\t\t\t\t\tpageY = this.containment[ 3 ] + this.offset.click.top;
\t\t\t\t}
\t\t\t}

\t\t\tif ( o.grid ) {
\t\t\t\ttop = this.originalPageY + Math.round( ( pageY - this.originalPageY ) /
\t\t\t\t\to.grid[ 1 ] ) * o.grid[ 1 ];
\t\t\t\tpageY = this.containment ?
\t\t\t\t\t( ( top - this.offset.click.top >= this.containment[ 1 ] &&
\t\t\t\t\t\ttop - this.offset.click.top <= this.containment[ 3 ] ) ?
\t\t\t\t\t\t\ttop :
\t\t\t\t\t\t\t( ( top - this.offset.click.top >= this.containment[ 1 ] ) ?
\t\t\t\t\t\t\t\ttop - o.grid[ 1 ] : top + o.grid[ 1 ] ) ) :
\t\t\t\t\t\t\t\ttop;

\t\t\t\tleft = this.originalPageX + Math.round( ( pageX - this.originalPageX ) /
\t\t\t\t\to.grid[ 0 ] ) * o.grid[ 0 ];
\t\t\t\tpageX = this.containment ?
\t\t\t\t\t( ( left - this.offset.click.left >= this.containment[ 0 ] &&
\t\t\t\t\t\tleft - this.offset.click.left <= this.containment[ 2 ] ) ?
\t\t\t\t\t\t\tleft :
\t\t\t\t\t\t\t( ( left - this.offset.click.left >= this.containment[ 0 ] ) ?
\t\t\t\t\t\t\t\tleft - o.grid[ 0 ] : left + o.grid[ 0 ] ) ) :
\t\t\t\t\t\t\t\tleft;
\t\t\t}

\t\t}

\t\treturn {
\t\t\ttop: (

\t\t\t\t// The absolute mouse position
\t\t\t\tpageY -

\t\t\t\t// Click offset (relative to the element)
\t\t\t\tthis.offset.click.top -

\t\t\t\t// Only for relative positioned nodes: Relative offset from element to offset parent
\t\t\t\tthis.offset.relative.top -

\t\t\t\t// The offsetParent's offset without borders (offset + border)
\t\t\t\tthis.offset.parent.top +
\t\t\t\t( ( this.cssPosition === \"fixed\" ?
\t\t\t\t\t-this.scrollParent.scrollTop() :
\t\t\t\t\t( scrollIsRootNode ? 0 : scroll.scrollTop() ) ) )
\t\t\t),
\t\t\tleft: (

\t\t\t\t// The absolute mouse position
\t\t\t\tpageX -

\t\t\t\t// Click offset (relative to the element)
\t\t\t\tthis.offset.click.left -

\t\t\t\t// Only for relative positioned nodes: Relative offset from element to offset parent
\t\t\t\tthis.offset.relative.left -

\t\t\t\t// The offsetParent's offset without borders (offset + border)
\t\t\t\tthis.offset.parent.left +
\t\t\t\t( ( this.cssPosition === \"fixed\" ?
\t\t\t\t\t-this.scrollParent.scrollLeft() :
\t\t\t\t\tscrollIsRootNode ? 0 : scroll.scrollLeft() ) )
\t\t\t)
\t\t};

\t},

\t_rearrange: function( event, i, a, hardRefresh ) {

\t\ta ? a[ 0 ].appendChild( this.placeholder[ 0 ] ) :
\t\t\ti.item[ 0 ].parentNode.insertBefore( this.placeholder[ 0 ],
\t\t\t\t( this.direction === \"down\" ? i.item[ 0 ] : i.item[ 0 ].nextSibling ) );

\t\t//Various things done here to improve the performance:
\t\t// 1. we create a setTimeout, that calls refreshPositions
\t\t// 2. on the instance, we have a counter variable, that get's higher after every append
\t\t// 3. on the local scope, we copy the counter variable, and check in the timeout,
\t\t// if it's still the same
\t\t// 4. this lets only the last addition to the timeout stack through
\t\tthis.counter = this.counter ? ++this.counter : 1;
\t\tvar counter = this.counter;

\t\tthis._delay( function() {
\t\t\tif ( counter === this.counter ) {

\t\t\t\t//Precompute after each DOM insertion, NOT on mousemove
\t\t\t\tthis.refreshPositions( !hardRefresh );
\t\t\t}
\t\t} );

\t},

\t_clear: function( event, noPropagation ) {

\t\tthis.reverting = false;

\t\t// We delay all events that have to be triggered to after the point where the placeholder
\t\t// has been removed and everything else normalized again
\t\tvar i,
\t\t\tdelayedTriggers = [];

\t\t// We first have to update the dom position of the actual currentItem
\t\t// Note: don't do it if the current item is already removed (by a user), or it gets
\t\t// reappended (see #4088)
\t\tif ( !this._noFinalSort && this.currentItem.parent().length ) {
\t\t\tthis.placeholder.before( this.currentItem );
\t\t}
\t\tthis._noFinalSort = null;

\t\tif ( this.helper[ 0 ] === this.currentItem[ 0 ] ) {
\t\t\tfor ( i in this._storedCSS ) {
\t\t\t\tif ( this._storedCSS[ i ] === \"auto\" || this._storedCSS[ i ] === \"static\" ) {
\t\t\t\t\tthis._storedCSS[ i ] = \"\";
\t\t\t\t}
\t\t\t}
\t\t\tthis.currentItem.css( this._storedCSS );
\t\t\tthis._removeClass( this.currentItem, \"ui-sortable-helper\" );
\t\t} else {
\t\t\tthis.currentItem.show();
\t\t}

\t\tif ( this.fromOutside && !noPropagation ) {
\t\t\tdelayedTriggers.push( function( event ) {
\t\t\t\tthis._trigger( \"receive\", event, this._uiHash( this.fromOutside ) );
\t\t\t} );
\t\t}
\t\tif ( ( this.fromOutside ||
\t\t\t\tthis.domPosition.prev !==
\t\t\t\tthis.currentItem.prev().not( \".ui-sortable-helper\" )[ 0 ] ||
\t\t\t\tthis.domPosition.parent !== this.currentItem.parent()[ 0 ] ) && !noPropagation ) {

\t\t\t// Trigger update callback if the DOM position has changed
\t\t\tdelayedTriggers.push( function( event ) {
\t\t\t\tthis._trigger( \"update\", event, this._uiHash() );
\t\t\t} );
\t\t}

\t\t// Check if the items Container has Changed and trigger appropriate
\t\t// events.
\t\tif ( this !== this.currentContainer ) {
\t\t\tif ( !noPropagation ) {
\t\t\t\tdelayedTriggers.push( function( event ) {
\t\t\t\t\tthis._trigger( \"remove\", event, this._uiHash() );
\t\t\t\t} );
\t\t\t\tdelayedTriggers.push( ( function( c ) {
\t\t\t\t\treturn function( event ) {
\t\t\t\t\t\tc._trigger( \"receive\", event, this._uiHash( this ) );
\t\t\t\t\t};
\t\t\t\t} ).call( this, this.currentContainer ) );
\t\t\t\tdelayedTriggers.push( ( function( c ) {
\t\t\t\t\treturn function( event ) {
\t\t\t\t\t\tc._trigger( \"update\", event, this._uiHash( this ) );
\t\t\t\t\t};
\t\t\t\t} ).call( this, this.currentContainer ) );
\t\t\t}
\t\t}

\t\t//Post events to containers
\t\tfunction delayEvent( type, instance, container ) {
\t\t\treturn function( event ) {
\t\t\t\tcontainer._trigger( type, event, instance._uiHash( instance ) );
\t\t\t};
\t\t}
\t\tfor ( i = this.containers.length - 1; i >= 0; i-- ) {
\t\t\tif ( !noPropagation ) {
\t\t\t\tdelayedTriggers.push( delayEvent( \"deactivate\", this, this.containers[ i ] ) );
\t\t\t}
\t\t\tif ( this.containers[ i ].containerCache.over ) {
\t\t\t\tdelayedTriggers.push( delayEvent( \"out\", this, this.containers[ i ] ) );
\t\t\t\tthis.containers[ i ].containerCache.over = 0;
\t\t\t}
\t\t}

\t\t//Do what was originally in plugins
\t\tif ( this.storedCursor ) {
\t\t\tthis.document.find( \"body\" ).css( \"cursor\", this.storedCursor );
\t\t\tthis.storedStylesheet.remove();
\t\t}
\t\tif ( this._storedOpacity ) {
\t\t\tthis.helper.css( \"opacity\", this._storedOpacity );
\t\t}
\t\tif ( this._storedZIndex ) {
\t\t\tthis.helper.css( \"zIndex\", this._storedZIndex === \"auto\" ? \"\" : this._storedZIndex );
\t\t}

\t\tthis.dragging = false;

\t\tif ( !noPropagation ) {
\t\t\tthis._trigger( \"beforeStop\", event, this._uiHash() );
\t\t}

\t\t//\$(this.placeholder[0]).remove(); would have been the jQuery way - unfortunately,
\t\t// it unbinds ALL events from the original node!
\t\tthis.placeholder[ 0 ].parentNode.removeChild( this.placeholder[ 0 ] );

\t\tif ( !this.cancelHelperRemoval ) {
\t\t\tif ( this.helper[ 0 ] !== this.currentItem[ 0 ] ) {
\t\t\t\tthis.helper.remove();
\t\t\t}
\t\t\tthis.helper = null;
\t\t}

\t\tif ( !noPropagation ) {
\t\t\tfor ( i = 0; i < delayedTriggers.length; i++ ) {

\t\t\t\t// Trigger all delayed events
\t\t\t\tdelayedTriggers[ i ].call( this, event );
\t\t\t}
\t\t\tthis._trigger( \"stop\", event, this._uiHash() );
\t\t}

\t\tthis.fromOutside = false;
\t\treturn !this.cancelHelperRemoval;

\t},

\t_trigger: function() {
\t\tif ( \$.Widget.prototype._trigger.apply( this, arguments ) === false ) {
\t\t\tthis.cancel();
\t\t}
\t},

\t_uiHash: function( _inst ) {
\t\tvar inst = _inst || this;
\t\treturn {
\t\t\thelper: inst.helper,
\t\t\tplaceholder: inst.placeholder || \$( [] ),
\t\t\tposition: inst.position,
\t\t\toriginalPosition: inst.originalPosition,
\t\t\toffset: inst.positionAbs,
\t\t\titem: inst.currentItem,
\t\t\tsender: _inst ? _inst.element : null
\t\t};
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/sortable.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/sortable.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/sortable.js");
    }
}
