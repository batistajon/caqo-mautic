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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/draggable.js */
class __TwigTemplate_bf50990bb8b405a86ce9acbc75f4e311d5992365ae2e77664653f32645dd7402 extends Template
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
 * jQuery UI Draggable 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Draggable
//>>group: Interactions
//>>description: Enables dragging functionality for any element.
//>>docs: http://api.jqueryui.com/draggable/
//>>demos: http://jqueryui.com/draggable/
//>>css.structure: ../../themes/base/draggable.css

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"./mouse\",
\t\t\t\"../data\",
\t\t\t\"../plugin\",
\t\t\t\"../safe-active-element\",
\t\t\t\"../safe-blur\",
\t\t\t\"../scroll-parent\",
\t\t\t\"../version\",
\t\t\t\"../widget\"
\t\t], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

\$.widget( \"ui.draggable\", \$.ui.mouse, {
\tversion: \"1.12.1\",
\twidgetEventPrefix: \"drag\",
\toptions: {
\t\taddClasses: true,
\t\tappendTo: \"parent\",
\t\taxis: false,
\t\tconnectToSortable: false,
\t\tcontainment: false,
\t\tcursor: \"auto\",
\t\tcursorAt: false,
\t\tgrid: false,
\t\thandle: false,
\t\thelper: \"original\",
\t\tiframeFix: false,
\t\topacity: false,
\t\trefreshPositions: false,
\t\trevert: false,
\t\trevertDuration: 500,
\t\tscope: \"default\",
\t\tscroll: true,
\t\tscrollSensitivity: 20,
\t\tscrollSpeed: 20,
\t\tsnap: false,
\t\tsnapMode: \"both\",
\t\tsnapTolerance: 20,
\t\tstack: false,
\t\tzIndex: false,

\t\t// Callbacks
\t\tdrag: null,
\t\tstart: null,
\t\tstop: null
\t},
\t_create: function() {

\t\tif ( this.options.helper === \"original\" ) {
\t\t\tthis._setPositionRelative();
\t\t}
\t\tif ( this.options.addClasses ) {
\t\t\tthis._addClass( \"ui-draggable\" );
\t\t}
\t\tthis._setHandleClassName();

\t\tthis._mouseInit();
\t},

\t_setOption: function( key, value ) {
\t\tthis._super( key, value );
\t\tif ( key === \"handle\" ) {
\t\t\tthis._removeHandleClassName();
\t\t\tthis._setHandleClassName();
\t\t}
\t},

\t_destroy: function() {
\t\tif ( ( this.helper || this.element ).is( \".ui-draggable-dragging\" ) ) {
\t\t\tthis.destroyOnClear = true;
\t\t\treturn;
\t\t}
\t\tthis._removeHandleClassName();
\t\tthis._mouseDestroy();
\t},

\t_mouseCapture: function( event ) {
\t\tvar o = this.options;

\t\t// Among others, prevent a drag on a resizable-handle
\t\tif ( this.helper || o.disabled ||
\t\t\t\t\$( event.target ).closest( \".ui-resizable-handle\" ).length > 0 ) {
\t\t\treturn false;
\t\t}

\t\t//Quit if we're not on a valid handle
\t\tthis.handle = this._getHandle( event );
\t\tif ( !this.handle ) {
\t\t\treturn false;
\t\t}

\t\tthis._blurActiveElement( event );

\t\tthis._blockFrames( o.iframeFix === true ? \"iframe\" : o.iframeFix );

\t\treturn true;

\t},

\t_blockFrames: function( selector ) {
\t\tthis.iframeBlocks = this.document.find( selector ).map( function() {
\t\t\tvar iframe = \$( this );

\t\t\treturn \$( \"<div>\" )
\t\t\t\t.css( \"position\", \"absolute\" )
\t\t\t\t.appendTo( iframe.parent() )
\t\t\t\t.outerWidth( iframe.outerWidth() )
\t\t\t\t.outerHeight( iframe.outerHeight() )
\t\t\t\t.offset( iframe.offset() )[ 0 ];
\t\t} );
\t},

\t_unblockFrames: function() {
\t\tif ( this.iframeBlocks ) {
\t\t\tthis.iframeBlocks.remove();
\t\t\tdelete this.iframeBlocks;
\t\t}
\t},

\t_blurActiveElement: function( event ) {
\t\tvar activeElement = \$.ui.safeActiveElement( this.document[ 0 ] ),
\t\t\ttarget = \$( event.target );

\t\t// Don't blur if the event occurred on an element that is within
\t\t// the currently focused element
\t\t// See #10527, #12472
\t\tif ( target.closest( activeElement ).length ) {
\t\t\treturn;
\t\t}

\t\t// Blur any element that currently has focus, see #4261
\t\t\$.ui.safeBlur( activeElement );
\t},

\t_mouseStart: function( event ) {

\t\tvar o = this.options;

\t\t//Create and append the visible helper
\t\tthis.helper = this._createHelper( event );

\t\tthis._addClass( this.helper, \"ui-draggable-dragging\" );

\t\t//Cache the helper size
\t\tthis._cacheHelperProportions();

\t\t//If ddmanager is used for droppables, set the global draggable
\t\tif ( \$.ui.ddmanager ) {
\t\t\t\$.ui.ddmanager.current = this;
\t\t}

\t\t/*
\t\t * - Position generation -
\t\t * This block generates everything position related - it's the core of draggables.
\t\t */

\t\t//Cache the margins of the original element
\t\tthis._cacheMargins();

\t\t//Store the helper's css position
\t\tthis.cssPosition = this.helper.css( \"position\" );
\t\tthis.scrollParent = this.helper.scrollParent( true );
\t\tthis.offsetParent = this.helper.offsetParent();
\t\tthis.hasFixedAncestor = this.helper.parents().filter( function() {
\t\t\t\treturn \$( this ).css( \"position\" ) === \"fixed\";
\t\t\t} ).length > 0;

\t\t//The element's absolute position on the page minus margins
\t\tthis.positionAbs = this.element.offset();
\t\tthis._refreshOffsets( event );

\t\t//Generate the original position
\t\tthis.originalPosition = this.position = this._generatePosition( event, false );
\t\tthis.originalPageX = event.pageX;
\t\tthis.originalPageY = event.pageY;

\t\t//Adjust the mouse offset relative to the helper if \"cursorAt\" is supplied
\t\t( o.cursorAt && this._adjustOffsetFromHelper( o.cursorAt ) );

\t\t//Set a containment if given in the options
\t\tthis._setContainment();

\t\t//Trigger event + callbacks
\t\tif ( this._trigger( \"start\", event ) === false ) {
\t\t\tthis._clear();
\t\t\treturn false;
\t\t}

\t\t//Recache the helper size
\t\tthis._cacheHelperProportions();

\t\t//Prepare the droppable offsets
\t\tif ( \$.ui.ddmanager && !o.dropBehaviour ) {
\t\t\t\$.ui.ddmanager.prepareOffsets( this, event );
\t\t}

\t\t// Execute the drag once - this causes the helper not to be visible before getting its
\t\t// correct position
\t\tthis._mouseDrag( event, true );

\t\t// If the ddmanager is used for droppables, inform the manager that dragging has started
\t\t// (see #5003)
\t\tif ( \$.ui.ddmanager ) {
\t\t\t\$.ui.ddmanager.dragStart( this, event );
\t\t}

\t\treturn true;
\t},

\t_refreshOffsets: function( event ) {
\t\tthis.offset = {
\t\t\ttop: this.positionAbs.top - this.margins.top,
\t\t\tleft: this.positionAbs.left - this.margins.left,
\t\t\tscroll: false,
\t\t\tparent: this._getParentOffset(),
\t\t\trelative: this._getRelativeOffset()
\t\t};

\t\tthis.offset.click = {
\t\t\tleft: event.pageX - this.offset.left,
\t\t\ttop: event.pageY - this.offset.top
\t\t};
\t},

\t_mouseDrag: function( event, noPropagation ) {

\t\t// reset any necessary cached properties (see #5009)
\t\tif ( this.hasFixedAncestor ) {
\t\t\tthis.offset.parent = this._getParentOffset();
\t\t}

\t\t//Compute the helpers position
\t\tthis.position = this._generatePosition( event, true );
\t\tthis.positionAbs = this._convertPositionTo( \"absolute\" );

\t\t//Call plugins and callbacks and use the resulting position if something is returned
\t\tif ( !noPropagation ) {
\t\t\tvar ui = this._uiHash();
\t\t\tif ( this._trigger( \"drag\", event, ui ) === false ) {
\t\t\t\tthis._mouseUp( new \$.Event( \"mouseup\", event ) );
\t\t\t\treturn false;
\t\t\t}
\t\t\tthis.position = ui.position;
\t\t}

\t\tthis.helper[ 0 ].style.left = this.position.left + \"px\";
\t\tthis.helper[ 0 ].style.top = this.position.top + \"px\";

\t\tif ( \$.ui.ddmanager ) {
\t\t\t\$.ui.ddmanager.drag( this, event );
\t\t}

\t\treturn false;
\t},

\t_mouseStop: function( event ) {

\t\t//If we are using droppables, inform the manager about the drop
\t\tvar that = this,
\t\t\tdropped = false;
\t\tif ( \$.ui.ddmanager && !this.options.dropBehaviour ) {
\t\t\tdropped = \$.ui.ddmanager.drop( this, event );
\t\t}

\t\t//if a drop comes from outside (a sortable)
\t\tif ( this.dropped ) {
\t\t\tdropped = this.dropped;
\t\t\tthis.dropped = false;
\t\t}

\t\tif ( ( this.options.revert === \"invalid\" && !dropped ) ||
\t\t\t\t( this.options.revert === \"valid\" && dropped ) ||
\t\t\t\tthis.options.revert === true || ( \$.isFunction( this.options.revert ) &&
\t\t\t\tthis.options.revert.call( this.element, dropped ) )
\t\t) {
\t\t\t\$( this.helper ).animate(
\t\t\t\tthis.originalPosition,
\t\t\t\tparseInt( this.options.revertDuration, 10 ),
\t\t\t\tfunction() {
\t\t\t\t\tif ( that._trigger( \"stop\", event ) !== false ) {
\t\t\t\t\t\tthat._clear();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t);
\t\t} else {
\t\t\tif ( this._trigger( \"stop\", event ) !== false ) {
\t\t\t\tthis._clear();
\t\t\t}
\t\t}

\t\treturn false;
\t},

\t_mouseUp: function( event ) {
\t\tthis._unblockFrames();

\t\t// If the ddmanager is used for droppables, inform the manager that dragging has stopped
\t\t// (see #5003)
\t\tif ( \$.ui.ddmanager ) {
\t\t\t\$.ui.ddmanager.dragStop( this, event );
\t\t}

\t\t// Only need to focus if the event occurred on the draggable itself, see #10527
\t\tif ( this.handleElement.is( event.target ) ) {

\t\t\t// The interaction is over; whether or not the click resulted in a drag,
\t\t\t// focus the element
\t\t\tthis.element.trigger( \"focus\" );
\t\t}

\t\treturn \$.ui.mouse.prototype._mouseUp.call( this, event );
\t},

\tcancel: function() {

\t\tif ( this.helper.is( \".ui-draggable-dragging\" ) ) {
\t\t\tthis._mouseUp( new \$.Event( \"mouseup\", { target: this.element[ 0 ] } ) );
\t\t} else {
\t\t\tthis._clear();
\t\t}

\t\treturn this;

\t},

\t_getHandle: function( event ) {
\t\treturn this.options.handle ?
\t\t\t!!\$( event.target ).closest( this.element.find( this.options.handle ) ).length :
\t\t\ttrue;
\t},

\t_setHandleClassName: function() {
\t\tthis.handleElement = this.options.handle ?
\t\t\tthis.element.find( this.options.handle ) : this.element;
\t\tthis._addClass( this.handleElement, \"ui-draggable-handle\" );
\t},

\t_removeHandleClassName: function() {
\t\tthis._removeClass( this.handleElement, \"ui-draggable-handle\" );
\t},

\t_createHelper: function( event ) {

\t\tvar o = this.options,
\t\t\thelperIsFunction = \$.isFunction( o.helper ),
\t\t\thelper = helperIsFunction ?
\t\t\t\t\$( o.helper.apply( this.element[ 0 ], [ event ] ) ) :
\t\t\t\t( o.helper === \"clone\" ?
\t\t\t\t\tthis.element.clone().removeAttr( \"id\" ) :
\t\t\t\t\tthis.element );

\t\tif ( !helper.parents( \"body\" ).length ) {
\t\t\thelper.appendTo( ( o.appendTo === \"parent\" ?
\t\t\t\tthis.element[ 0 ].parentNode :
\t\t\t\to.appendTo ) );
\t\t}

\t\t// Http://bugs.jqueryui.com/ticket/9446
\t\t// a helper function can return the original element
\t\t// which wouldn't have been set to relative in _create
\t\tif ( helperIsFunction && helper[ 0 ] === this.element[ 0 ] ) {
\t\t\tthis._setPositionRelative();
\t\t}

\t\tif ( helper[ 0 ] !== this.element[ 0 ] &&
\t\t\t\t!( /(fixed|absolute)/ ).test( helper.css( \"position\" ) ) ) {
\t\t\thelper.css( \"position\", \"absolute\" );
\t\t}

\t\treturn helper;

\t},

\t_setPositionRelative: function() {
\t\tif ( !( /^(?:r|a|f)/ ).test( this.element.css( \"position\" ) ) ) {
\t\t\tthis.element[ 0 ].style.position = \"relative\";
\t\t}
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

\t_isRootNode: function( element ) {
\t\treturn ( /(html|body)/i ).test( element.tagName ) || element === this.document[ 0 ];
\t},

\t_getParentOffset: function() {

\t\t//Get the offsetParent and cache its position
\t\tvar po = this.offsetParent.offset(),
\t\t\tdocument = this.document[ 0 ];

\t\t// This is a special case where we need to modify a offset calculated on start, since the
\t\t// following happened:
\t\t// 1. The position of the helper is absolute, so it's position is calculated based on the
\t\t// next positioned parent
\t\t// 2. The actual offset parent is a child of the scroll parent, and the scroll parent isn't
\t\t// the document, which means that the scroll is included in the initial calculation of the
\t\t// offset of the parent, and never recalculated upon drag
\t\tif ( this.cssPosition === \"absolute\" && this.scrollParent[ 0 ] !== document &&
\t\t\t\t\$.contains( this.scrollParent[ 0 ], this.offsetParent[ 0 ] ) ) {
\t\t\tpo.left += this.scrollParent.scrollLeft();
\t\t\tpo.top += this.scrollParent.scrollTop();
\t\t}

\t\tif ( this._isRootNode( this.offsetParent[ 0 ] ) ) {
\t\t\tpo = { top: 0, left: 0 };
\t\t}

\t\treturn {
\t\t\ttop: po.top + ( parseInt( this.offsetParent.css( \"borderTopWidth\" ), 10 ) || 0 ),
\t\t\tleft: po.left + ( parseInt( this.offsetParent.css( \"borderLeftWidth\" ), 10 ) || 0 )
\t\t};

\t},

\t_getRelativeOffset: function() {
\t\tif ( this.cssPosition !== \"relative\" ) {
\t\t\treturn { top: 0, left: 0 };
\t\t}

\t\tvar p = this.element.position(),
\t\t\tscrollIsRootNode = this._isRootNode( this.scrollParent[ 0 ] );

\t\treturn {
\t\t\ttop: p.top - ( parseInt( this.helper.css( \"top\" ), 10 ) || 0 ) +
\t\t\t\t( !scrollIsRootNode ? this.scrollParent.scrollTop() : 0 ),
\t\t\tleft: p.left - ( parseInt( this.helper.css( \"left\" ), 10 ) || 0 ) +
\t\t\t\t( !scrollIsRootNode ? this.scrollParent.scrollLeft() : 0 )
\t\t};

\t},

\t_cacheMargins: function() {
\t\tthis.margins = {
\t\t\tleft: ( parseInt( this.element.css( \"marginLeft\" ), 10 ) || 0 ),
\t\t\ttop: ( parseInt( this.element.css( \"marginTop\" ), 10 ) || 0 ),
\t\t\tright: ( parseInt( this.element.css( \"marginRight\" ), 10 ) || 0 ),
\t\t\tbottom: ( parseInt( this.element.css( \"marginBottom\" ), 10 ) || 0 )
\t\t};
\t},

\t_cacheHelperProportions: function() {
\t\tthis.helperProportions = {
\t\t\twidth: this.helper.outerWidth(),
\t\t\theight: this.helper.outerHeight()
\t\t};
\t},

\t_setContainment: function() {

\t\tvar isUserScrollable, c, ce,
\t\t\to = this.options,
\t\t\tdocument = this.document[ 0 ];

\t\tthis.relativeContainer = null;

\t\tif ( !o.containment ) {
\t\t\tthis.containment = null;
\t\t\treturn;
\t\t}

\t\tif ( o.containment === \"window\" ) {
\t\t\tthis.containment = [
\t\t\t\t\$( window ).scrollLeft() - this.offset.relative.left - this.offset.parent.left,
\t\t\t\t\$( window ).scrollTop() - this.offset.relative.top - this.offset.parent.top,
\t\t\t\t\$( window ).scrollLeft() + \$( window ).width() -
\t\t\t\t\tthis.helperProportions.width - this.margins.left,
\t\t\t\t\$( window ).scrollTop() +
\t\t\t\t\t( \$( window ).height() || document.body.parentNode.scrollHeight ) -
\t\t\t\t\tthis.helperProportions.height - this.margins.top
\t\t\t];
\t\t\treturn;
\t\t}

\t\tif ( o.containment === \"document\" ) {
\t\t\tthis.containment = [
\t\t\t\t0,
\t\t\t\t0,
\t\t\t\t\$( document ).width() - this.helperProportions.width - this.margins.left,
\t\t\t\t( \$( document ).height() || document.body.parentNode.scrollHeight ) -
\t\t\t\t\tthis.helperProportions.height - this.margins.top
\t\t\t];
\t\t\treturn;
\t\t}

\t\tif ( o.containment.constructor === Array ) {
\t\t\tthis.containment = o.containment;
\t\t\treturn;
\t\t}

\t\tif ( o.containment === \"parent\" ) {
\t\t\to.containment = this.helper[ 0 ].parentNode;
\t\t}

\t\tc = \$( o.containment );
\t\tce = c[ 0 ];

\t\tif ( !ce ) {
\t\t\treturn;
\t\t}

\t\tisUserScrollable = /(scroll|auto)/.test( c.css( \"overflow\" ) );

\t\tthis.containment = [
\t\t\t( parseInt( c.css( \"borderLeftWidth\" ), 10 ) || 0 ) +
\t\t\t\t( parseInt( c.css( \"paddingLeft\" ), 10 ) || 0 ),
\t\t\t( parseInt( c.css( \"borderTopWidth\" ), 10 ) || 0 ) +
\t\t\t\t( parseInt( c.css( \"paddingTop\" ), 10 ) || 0 ),
\t\t\t( isUserScrollable ? Math.max( ce.scrollWidth, ce.offsetWidth ) : ce.offsetWidth ) -
\t\t\t\t( parseInt( c.css( \"borderRightWidth\" ), 10 ) || 0 ) -
\t\t\t\t( parseInt( c.css( \"paddingRight\" ), 10 ) || 0 ) -
\t\t\t\tthis.helperProportions.width -
\t\t\t\tthis.margins.left -
\t\t\t\tthis.margins.right,
\t\t\t( isUserScrollable ? Math.max( ce.scrollHeight, ce.offsetHeight ) : ce.offsetHeight ) -
\t\t\t\t( parseInt( c.css( \"borderBottomWidth\" ), 10 ) || 0 ) -
\t\t\t\t( parseInt( c.css( \"paddingBottom\" ), 10 ) || 0 ) -
\t\t\t\tthis.helperProportions.height -
\t\t\t\tthis.margins.top -
\t\t\t\tthis.margins.bottom
\t\t];
\t\tthis.relativeContainer = c;
\t},

\t_convertPositionTo: function( d, pos ) {

\t\tif ( !pos ) {
\t\t\tpos = this.position;
\t\t}

\t\tvar mod = d === \"absolute\" ? 1 : -1,
\t\t\tscrollIsRootNode = this._isRootNode( this.scrollParent[ 0 ] );

\t\treturn {
\t\t\ttop: (

\t\t\t\t// The absolute mouse position
\t\t\t\tpos.top\t+

\t\t\t\t// Only for relative positioned nodes: Relative offset from element to offset parent
\t\t\t\tthis.offset.relative.top * mod +

\t\t\t\t// The offsetParent's offset without borders (offset + border)
\t\t\t\tthis.offset.parent.top * mod -
\t\t\t\t( ( this.cssPosition === \"fixed\" ?
\t\t\t\t\t-this.offset.scroll.top :
\t\t\t\t\t( scrollIsRootNode ? 0 : this.offset.scroll.top ) ) * mod )
\t\t\t),
\t\t\tleft: (

\t\t\t\t// The absolute mouse position
\t\t\t\tpos.left +

\t\t\t\t// Only for relative positioned nodes: Relative offset from element to offset parent
\t\t\t\tthis.offset.relative.left * mod +

\t\t\t\t// The offsetParent's offset without borders (offset + border)
\t\t\t\tthis.offset.parent.left * mod\t-
\t\t\t\t( ( this.cssPosition === \"fixed\" ?
\t\t\t\t\t-this.offset.scroll.left :
\t\t\t\t\t( scrollIsRootNode ? 0 : this.offset.scroll.left ) ) * mod )
\t\t\t)
\t\t};

\t},

\t_generatePosition: function( event, constrainPosition ) {

\t\tvar containment, co, top, left,
\t\t\to = this.options,
\t\t\tscrollIsRootNode = this._isRootNode( this.scrollParent[ 0 ] ),
\t\t\tpageX = event.pageX,
\t\t\tpageY = event.pageY;

\t\t// Cache the scroll
\t\tif ( !scrollIsRootNode || !this.offset.scroll ) {
\t\t\tthis.offset.scroll = {
\t\t\t\ttop: this.scrollParent.scrollTop(),
\t\t\t\tleft: this.scrollParent.scrollLeft()
\t\t\t};
\t\t}

\t\t/*
\t\t * - Position constraining -
\t\t * Constrain the position to a mix of grid, containment.
\t\t */

\t\t// If we are not dragging yet, we won't check for options
\t\tif ( constrainPosition ) {
\t\t\tif ( this.containment ) {
\t\t\t\tif ( this.relativeContainer ) {
\t\t\t\t\tco = this.relativeContainer.offset();
\t\t\t\t\tcontainment = [
\t\t\t\t\t\tthis.containment[ 0 ] + co.left,
\t\t\t\t\t\tthis.containment[ 1 ] + co.top,
\t\t\t\t\t\tthis.containment[ 2 ] + co.left,
\t\t\t\t\t\tthis.containment[ 3 ] + co.top
\t\t\t\t\t];
\t\t\t\t} else {
\t\t\t\t\tcontainment = this.containment;
\t\t\t\t}

\t\t\t\tif ( event.pageX - this.offset.click.left < containment[ 0 ] ) {
\t\t\t\t\tpageX = containment[ 0 ] + this.offset.click.left;
\t\t\t\t}
\t\t\t\tif ( event.pageY - this.offset.click.top < containment[ 1 ] ) {
\t\t\t\t\tpageY = containment[ 1 ] + this.offset.click.top;
\t\t\t\t}
\t\t\t\tif ( event.pageX - this.offset.click.left > containment[ 2 ] ) {
\t\t\t\t\tpageX = containment[ 2 ] + this.offset.click.left;
\t\t\t\t}
\t\t\t\tif ( event.pageY - this.offset.click.top > containment[ 3 ] ) {
\t\t\t\t\tpageY = containment[ 3 ] + this.offset.click.top;
\t\t\t\t}
\t\t\t}

\t\t\tif ( o.grid ) {

\t\t\t\t//Check for grid elements set to 0 to prevent divide by 0 error causing invalid
\t\t\t\t// argument errors in IE (see ticket #6950)
\t\t\t\ttop = o.grid[ 1 ] ? this.originalPageY + Math.round( ( pageY -
\t\t\t\t\tthis.originalPageY ) / o.grid[ 1 ] ) * o.grid[ 1 ] : this.originalPageY;
\t\t\t\tpageY = containment ? ( ( top - this.offset.click.top >= containment[ 1 ] ||
\t\t\t\t\ttop - this.offset.click.top > containment[ 3 ] ) ?
\t\t\t\t\t\ttop :
\t\t\t\t\t\t( ( top - this.offset.click.top >= containment[ 1 ] ) ?
\t\t\t\t\t\t\ttop - o.grid[ 1 ] : top + o.grid[ 1 ] ) ) : top;

\t\t\t\tleft = o.grid[ 0 ] ? this.originalPageX +
\t\t\t\t\tMath.round( ( pageX - this.originalPageX ) / o.grid[ 0 ] ) * o.grid[ 0 ] :
\t\t\t\t\tthis.originalPageX;
\t\t\t\tpageX = containment ? ( ( left - this.offset.click.left >= containment[ 0 ] ||
\t\t\t\t\tleft - this.offset.click.left > containment[ 2 ] ) ?
\t\t\t\t\t\tleft :
\t\t\t\t\t\t( ( left - this.offset.click.left >= containment[ 0 ] ) ?
\t\t\t\t\t\t\tleft - o.grid[ 0 ] : left + o.grid[ 0 ] ) ) : left;
\t\t\t}

\t\t\tif ( o.axis === \"y\" ) {
\t\t\t\tpageX = this.originalPageX;
\t\t\t}

\t\t\tif ( o.axis === \"x\" ) {
\t\t\t\tpageY = this.originalPageY;
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
\t\t\t\t( this.cssPosition === \"fixed\" ?
\t\t\t\t\t-this.offset.scroll.top :
\t\t\t\t\t( scrollIsRootNode ? 0 : this.offset.scroll.top ) )
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
\t\t\t\t( this.cssPosition === \"fixed\" ?
\t\t\t\t\t-this.offset.scroll.left :
\t\t\t\t\t( scrollIsRootNode ? 0 : this.offset.scroll.left ) )
\t\t\t)
\t\t};

\t},

\t_clear: function() {
\t\tthis._removeClass( this.helper, \"ui-draggable-dragging\" );
\t\tif ( this.helper[ 0 ] !== this.element[ 0 ] && !this.cancelHelperRemoval ) {
\t\t\tthis.helper.remove();
\t\t}
\t\tthis.helper = null;
\t\tthis.cancelHelperRemoval = false;
\t\tif ( this.destroyOnClear ) {
\t\t\tthis.destroy();
\t\t}
\t},

\t// From now on bulk stuff - mainly helpers

\t_trigger: function( type, event, ui ) {
\t\tui = ui || this._uiHash();
\t\t\$.ui.plugin.call( this, type, [ event, ui, this ], true );

\t\t// Absolute position and offset (see #6884 ) have to be recalculated after plugins
\t\tif ( /^(drag|start|stop)/.test( type ) ) {
\t\t\tthis.positionAbs = this._convertPositionTo( \"absolute\" );
\t\t\tui.offset = this.positionAbs;
\t\t}
\t\treturn \$.Widget.prototype._trigger.call( this, type, event, ui );
\t},

\tplugins: {},

\t_uiHash: function() {
\t\treturn {
\t\t\thelper: this.helper,
\t\t\tposition: this.position,
\t\t\toriginalPosition: this.originalPosition,
\t\t\toffset: this.positionAbs
\t\t};
\t}

} );

\$.ui.plugin.add( \"draggable\", \"connectToSortable\", {
\tstart: function( event, ui, draggable ) {
\t\tvar uiSortable = \$.extend( {}, ui, {
\t\t\titem: draggable.element
\t\t} );

\t\tdraggable.sortables = [];
\t\t\$( draggable.options.connectToSortable ).each( function() {
\t\t\tvar sortable = \$( this ).sortable( \"instance\" );

\t\t\tif ( sortable && !sortable.options.disabled ) {
\t\t\t\tdraggable.sortables.push( sortable );

\t\t\t\t// RefreshPositions is called at drag start to refresh the containerCache
\t\t\t\t// which is used in drag. This ensures it's initialized and synchronized
\t\t\t\t// with any changes that might have happened on the page since initialization.
\t\t\t\tsortable.refreshPositions();
\t\t\t\tsortable._trigger( \"activate\", event, uiSortable );
\t\t\t}
\t\t} );
\t},
\tstop: function( event, ui, draggable ) {
\t\tvar uiSortable = \$.extend( {}, ui, {
\t\t\titem: draggable.element
\t\t} );

\t\tdraggable.cancelHelperRemoval = false;

\t\t\$.each( draggable.sortables, function() {
\t\t\tvar sortable = this;

\t\t\tif ( sortable.isOver ) {
\t\t\t\tsortable.isOver = 0;

\t\t\t\t// Allow this sortable to handle removing the helper
\t\t\t\tdraggable.cancelHelperRemoval = true;
\t\t\t\tsortable.cancelHelperRemoval = false;

\t\t\t\t// Use _storedCSS To restore properties in the sortable,
\t\t\t\t// as this also handles revert (#9675) since the draggable
\t\t\t\t// may have modified them in unexpected ways (#8809)
\t\t\t\tsortable._storedCSS = {
\t\t\t\t\tposition: sortable.placeholder.css( \"position\" ),
\t\t\t\t\ttop: sortable.placeholder.css( \"top\" ),
\t\t\t\t\tleft: sortable.placeholder.css( \"left\" )
\t\t\t\t};

\t\t\t\tsortable._mouseStop( event );

\t\t\t\t// Once drag has ended, the sortable should return to using
\t\t\t\t// its original helper, not the shared helper from draggable
\t\t\t\tsortable.options.helper = sortable.options._helper;
\t\t\t} else {

\t\t\t\t// Prevent this Sortable from removing the helper.
\t\t\t\t// However, don't set the draggable to remove the helper
\t\t\t\t// either as another connected Sortable may yet handle the removal.
\t\t\t\tsortable.cancelHelperRemoval = true;

\t\t\t\tsortable._trigger( \"deactivate\", event, uiSortable );
\t\t\t}
\t\t} );
\t},
\tdrag: function( event, ui, draggable ) {
\t\t\$.each( draggable.sortables, function() {
\t\t\tvar innermostIntersecting = false,
\t\t\t\tsortable = this;

\t\t\t// Copy over variables that sortable's _intersectsWith uses
\t\t\tsortable.positionAbs = draggable.positionAbs;
\t\t\tsortable.helperProportions = draggable.helperProportions;
\t\t\tsortable.offset.click = draggable.offset.click;

\t\t\tif ( sortable._intersectsWith( sortable.containerCache ) ) {
\t\t\t\tinnermostIntersecting = true;

\t\t\t\t\$.each( draggable.sortables, function() {

\t\t\t\t\t// Copy over variables that sortable's _intersectsWith uses
\t\t\t\t\tthis.positionAbs = draggable.positionAbs;
\t\t\t\t\tthis.helperProportions = draggable.helperProportions;
\t\t\t\t\tthis.offset.click = draggable.offset.click;

\t\t\t\t\tif ( this !== sortable &&
\t\t\t\t\t\t\tthis._intersectsWith( this.containerCache ) &&
\t\t\t\t\t\t\t\$.contains( sortable.element[ 0 ], this.element[ 0 ] ) ) {
\t\t\t\t\t\tinnermostIntersecting = false;
\t\t\t\t\t}

\t\t\t\t\treturn innermostIntersecting;
\t\t\t\t} );
\t\t\t}

\t\t\tif ( innermostIntersecting ) {

\t\t\t\t// If it intersects, we use a little isOver variable and set it once,
\t\t\t\t// so that the move-in stuff gets fired only once.
\t\t\t\tif ( !sortable.isOver ) {
\t\t\t\t\tsortable.isOver = 1;

\t\t\t\t\t// Store draggable's parent in case we need to reappend to it later.
\t\t\t\t\tdraggable._parent = ui.helper.parent();

\t\t\t\t\tsortable.currentItem = ui.helper
\t\t\t\t\t\t.appendTo( sortable.element )
\t\t\t\t\t\t.data( \"ui-sortable-item\", true );

\t\t\t\t\t// Store helper option to later restore it
\t\t\t\t\tsortable.options._helper = sortable.options.helper;

\t\t\t\t\tsortable.options.helper = function() {
\t\t\t\t\t\treturn ui.helper[ 0 ];
\t\t\t\t\t};

\t\t\t\t\t// Fire the start events of the sortable with our passed browser event,
\t\t\t\t\t// and our own helper (so it doesn't create a new one)
\t\t\t\t\tevent.target = sortable.currentItem[ 0 ];
\t\t\t\t\tsortable._mouseCapture( event, true );
\t\t\t\t\tsortable._mouseStart( event, true, true );

\t\t\t\t\t// Because the browser event is way off the new appended portlet,
\t\t\t\t\t// modify necessary variables to reflect the changes
\t\t\t\t\tsortable.offset.click.top = draggable.offset.click.top;
\t\t\t\t\tsortable.offset.click.left = draggable.offset.click.left;
\t\t\t\t\tsortable.offset.parent.left -= draggable.offset.parent.left -
\t\t\t\t\t\tsortable.offset.parent.left;
\t\t\t\t\tsortable.offset.parent.top -= draggable.offset.parent.top -
\t\t\t\t\t\tsortable.offset.parent.top;

\t\t\t\t\tdraggable._trigger( \"toSortable\", event );

\t\t\t\t\t// Inform draggable that the helper is in a valid drop zone,
\t\t\t\t\t// used solely in the revert option to handle \"valid/invalid\".
\t\t\t\t\tdraggable.dropped = sortable.element;

\t\t\t\t\t// Need to refreshPositions of all sortables in the case that
\t\t\t\t\t// adding to one sortable changes the location of the other sortables (#9675)
\t\t\t\t\t\$.each( draggable.sortables, function() {
\t\t\t\t\t\tthis.refreshPositions();
\t\t\t\t\t} );

\t\t\t\t\t// Hack so receive/update callbacks work (mostly)
\t\t\t\t\tdraggable.currentItem = draggable.element;
\t\t\t\t\tsortable.fromOutside = draggable;
\t\t\t\t}

\t\t\t\tif ( sortable.currentItem ) {
\t\t\t\t\tsortable._mouseDrag( event );

\t\t\t\t\t// Copy the sortable's position because the draggable's can potentially reflect
\t\t\t\t\t// a relative position, while sortable is always absolute, which the dragged
\t\t\t\t\t// element has now become. (#8809)
\t\t\t\t\tui.position = sortable.position;
\t\t\t\t}
\t\t\t} else {

\t\t\t\t// If it doesn't intersect with the sortable, and it intersected before,
\t\t\t\t// we fake the drag stop of the sortable, but make sure it doesn't remove
\t\t\t\t// the helper by using cancelHelperRemoval.
\t\t\t\tif ( sortable.isOver ) {

\t\t\t\t\tsortable.isOver = 0;
\t\t\t\t\tsortable.cancelHelperRemoval = true;

\t\t\t\t\t// Calling sortable's mouseStop would trigger a revert,
\t\t\t\t\t// so revert must be temporarily false until after mouseStop is called.
\t\t\t\t\tsortable.options._revert = sortable.options.revert;
\t\t\t\t\tsortable.options.revert = false;

\t\t\t\t\tsortable._trigger( \"out\", event, sortable._uiHash( sortable ) );
\t\t\t\t\tsortable._mouseStop( event, true );

\t\t\t\t\t// Restore sortable behaviors that were modfied
\t\t\t\t\t// when the draggable entered the sortable area (#9481)
\t\t\t\t\tsortable.options.revert = sortable.options._revert;
\t\t\t\t\tsortable.options.helper = sortable.options._helper;

\t\t\t\t\tif ( sortable.placeholder ) {
\t\t\t\t\t\tsortable.placeholder.remove();
\t\t\t\t\t}

\t\t\t\t\t// Restore and recalculate the draggable's offset considering the sortable
\t\t\t\t\t// may have modified them in unexpected ways. (#8809, #10669)
\t\t\t\t\tui.helper.appendTo( draggable._parent );
\t\t\t\t\tdraggable._refreshOffsets( event );
\t\t\t\t\tui.position = draggable._generatePosition( event, true );

\t\t\t\t\tdraggable._trigger( \"fromSortable\", event );

\t\t\t\t\t// Inform draggable that the helper is no longer in a valid drop zone
\t\t\t\t\tdraggable.dropped = false;

\t\t\t\t\t// Need to refreshPositions of all sortables just in case removing
\t\t\t\t\t// from one sortable changes the location of other sortables (#9675)
\t\t\t\t\t\$.each( draggable.sortables, function() {
\t\t\t\t\t\tthis.refreshPositions();
\t\t\t\t\t} );
\t\t\t\t}
\t\t\t}
\t\t} );
\t}
} );

\$.ui.plugin.add( \"draggable\", \"cursor\", {
\tstart: function( event, ui, instance ) {
\t\tvar t = \$( \"body\" ),
\t\t\to = instance.options;

\t\tif ( t.css( \"cursor\" ) ) {
\t\t\to._cursor = t.css( \"cursor\" );
\t\t}
\t\tt.css( \"cursor\", o.cursor );
\t},
\tstop: function( event, ui, instance ) {
\t\tvar o = instance.options;
\t\tif ( o._cursor ) {
\t\t\t\$( \"body\" ).css( \"cursor\", o._cursor );
\t\t}
\t}
} );

\$.ui.plugin.add( \"draggable\", \"opacity\", {
\tstart: function( event, ui, instance ) {
\t\tvar t = \$( ui.helper ),
\t\t\to = instance.options;
\t\tif ( t.css( \"opacity\" ) ) {
\t\t\to._opacity = t.css( \"opacity\" );
\t\t}
\t\tt.css( \"opacity\", o.opacity );
\t},
\tstop: function( event, ui, instance ) {
\t\tvar o = instance.options;
\t\tif ( o._opacity ) {
\t\t\t\$( ui.helper ).css( \"opacity\", o._opacity );
\t\t}
\t}
} );

\$.ui.plugin.add( \"draggable\", \"scroll\", {
\tstart: function( event, ui, i ) {
\t\tif ( !i.scrollParentNotHidden ) {
\t\t\ti.scrollParentNotHidden = i.helper.scrollParent( false );
\t\t}

\t\tif ( i.scrollParentNotHidden[ 0 ] !== i.document[ 0 ] &&
\t\t\t\ti.scrollParentNotHidden[ 0 ].tagName !== \"HTML\" ) {
\t\t\ti.overflowOffset = i.scrollParentNotHidden.offset();
\t\t}
\t},
\tdrag: function( event, ui, i  ) {

\t\tvar o = i.options,
\t\t\tscrolled = false,
\t\t\tscrollParent = i.scrollParentNotHidden[ 0 ],
\t\t\tdocument = i.document[ 0 ];

\t\tif ( scrollParent !== document && scrollParent.tagName !== \"HTML\" ) {
\t\t\tif ( !o.axis || o.axis !== \"x\" ) {
\t\t\t\tif ( ( i.overflowOffset.top + scrollParent.offsetHeight ) - event.pageY <
\t\t\t\t\t\to.scrollSensitivity ) {
\t\t\t\t\tscrollParent.scrollTop = scrolled = scrollParent.scrollTop + o.scrollSpeed;
\t\t\t\t} else if ( event.pageY - i.overflowOffset.top < o.scrollSensitivity ) {
\t\t\t\t\tscrollParent.scrollTop = scrolled = scrollParent.scrollTop - o.scrollSpeed;
\t\t\t\t}
\t\t\t}

\t\t\tif ( !o.axis || o.axis !== \"y\" ) {
\t\t\t\tif ( ( i.overflowOffset.left + scrollParent.offsetWidth ) - event.pageX <
\t\t\t\t\t\to.scrollSensitivity ) {
\t\t\t\t\tscrollParent.scrollLeft = scrolled = scrollParent.scrollLeft + o.scrollSpeed;
\t\t\t\t} else if ( event.pageX - i.overflowOffset.left < o.scrollSensitivity ) {
\t\t\t\t\tscrollParent.scrollLeft = scrolled = scrollParent.scrollLeft - o.scrollSpeed;
\t\t\t\t}
\t\t\t}

\t\t} else {

\t\t\tif ( !o.axis || o.axis !== \"x\" ) {
\t\t\t\tif ( event.pageY - \$( document ).scrollTop() < o.scrollSensitivity ) {
\t\t\t\t\tscrolled = \$( document ).scrollTop( \$( document ).scrollTop() - o.scrollSpeed );
\t\t\t\t} else if ( \$( window ).height() - ( event.pageY - \$( document ).scrollTop() ) <
\t\t\t\t\t\to.scrollSensitivity ) {
\t\t\t\t\tscrolled = \$( document ).scrollTop( \$( document ).scrollTop() + o.scrollSpeed );
\t\t\t\t}
\t\t\t}

\t\t\tif ( !o.axis || o.axis !== \"y\" ) {
\t\t\t\tif ( event.pageX - \$( document ).scrollLeft() < o.scrollSensitivity ) {
\t\t\t\t\tscrolled = \$( document ).scrollLeft(
\t\t\t\t\t\t\$( document ).scrollLeft() - o.scrollSpeed
\t\t\t\t\t);
\t\t\t\t} else if ( \$( window ).width() - ( event.pageX - \$( document ).scrollLeft() ) <
\t\t\t\t\t\to.scrollSensitivity ) {
\t\t\t\t\tscrolled = \$( document ).scrollLeft(
\t\t\t\t\t\t\$( document ).scrollLeft() + o.scrollSpeed
\t\t\t\t\t);
\t\t\t\t}
\t\t\t}

\t\t}

\t\tif ( scrolled !== false && \$.ui.ddmanager && !o.dropBehaviour ) {
\t\t\t\$.ui.ddmanager.prepareOffsets( i, event );
\t\t}

\t}
} );

\$.ui.plugin.add( \"draggable\", \"snap\", {
\tstart: function( event, ui, i ) {

\t\tvar o = i.options;

\t\ti.snapElements = [];

\t\t\$( o.snap.constructor !== String ? ( o.snap.items || \":data(ui-draggable)\" ) : o.snap )
\t\t\t.each( function() {
\t\t\t\tvar \$t = \$( this ),
\t\t\t\t\t\$o = \$t.offset();
\t\t\t\tif ( this !== i.element[ 0 ] ) {
\t\t\t\t\ti.snapElements.push( {
\t\t\t\t\t\titem: this,
\t\t\t\t\t\twidth: \$t.outerWidth(), height: \$t.outerHeight(),
\t\t\t\t\t\ttop: \$o.top, left: \$o.left
\t\t\t\t\t} );
\t\t\t\t}
\t\t\t} );

\t},
\tdrag: function( event, ui, inst ) {

\t\tvar ts, bs, ls, rs, l, r, t, b, i, first,
\t\t\to = inst.options,
\t\t\td = o.snapTolerance,
\t\t\tx1 = ui.offset.left, x2 = x1 + inst.helperProportions.width,
\t\t\ty1 = ui.offset.top, y2 = y1 + inst.helperProportions.height;

\t\tfor ( i = inst.snapElements.length - 1; i >= 0; i-- ) {

\t\t\tl = inst.snapElements[ i ].left - inst.margins.left;
\t\t\tr = l + inst.snapElements[ i ].width;
\t\t\tt = inst.snapElements[ i ].top - inst.margins.top;
\t\t\tb = t + inst.snapElements[ i ].height;

\t\t\tif ( x2 < l - d || x1 > r + d || y2 < t - d || y1 > b + d ||
\t\t\t\t\t!\$.contains( inst.snapElements[ i ].item.ownerDocument,
\t\t\t\t\tinst.snapElements[ i ].item ) ) {
\t\t\t\tif ( inst.snapElements[ i ].snapping ) {
\t\t\t\t\t( inst.options.snap.release &&
\t\t\t\t\t\tinst.options.snap.release.call(
\t\t\t\t\t\t\tinst.element,
\t\t\t\t\t\t\tevent,
\t\t\t\t\t\t\t\$.extend( inst._uiHash(), { snapItem: inst.snapElements[ i ].item } )
\t\t\t\t\t\t) );
\t\t\t\t}
\t\t\t\tinst.snapElements[ i ].snapping = false;
\t\t\t\tcontinue;
\t\t\t}

\t\t\tif ( o.snapMode !== \"inner\" ) {
\t\t\t\tts = Math.abs( t - y2 ) <= d;
\t\t\t\tbs = Math.abs( b - y1 ) <= d;
\t\t\t\tls = Math.abs( l - x2 ) <= d;
\t\t\t\trs = Math.abs( r - x1 ) <= d;
\t\t\t\tif ( ts ) {
\t\t\t\t\tui.position.top = inst._convertPositionTo( \"relative\", {
\t\t\t\t\t\ttop: t - inst.helperProportions.height,
\t\t\t\t\t\tleft: 0
\t\t\t\t\t} ).top;
\t\t\t\t}
\t\t\t\tif ( bs ) {
\t\t\t\t\tui.position.top = inst._convertPositionTo( \"relative\", {
\t\t\t\t\t\ttop: b,
\t\t\t\t\t\tleft: 0
\t\t\t\t\t} ).top;
\t\t\t\t}
\t\t\t\tif ( ls ) {
\t\t\t\t\tui.position.left = inst._convertPositionTo( \"relative\", {
\t\t\t\t\t\ttop: 0,
\t\t\t\t\t\tleft: l - inst.helperProportions.width
\t\t\t\t\t} ).left;
\t\t\t\t}
\t\t\t\tif ( rs ) {
\t\t\t\t\tui.position.left = inst._convertPositionTo( \"relative\", {
\t\t\t\t\t\ttop: 0,
\t\t\t\t\t\tleft: r
\t\t\t\t\t} ).left;
\t\t\t\t}
\t\t\t}

\t\t\tfirst = ( ts || bs || ls || rs );

\t\t\tif ( o.snapMode !== \"outer\" ) {
\t\t\t\tts = Math.abs( t - y1 ) <= d;
\t\t\t\tbs = Math.abs( b - y2 ) <= d;
\t\t\t\tls = Math.abs( l - x1 ) <= d;
\t\t\t\trs = Math.abs( r - x2 ) <= d;
\t\t\t\tif ( ts ) {
\t\t\t\t\tui.position.top = inst._convertPositionTo( \"relative\", {
\t\t\t\t\t\ttop: t,
\t\t\t\t\t\tleft: 0
\t\t\t\t\t} ).top;
\t\t\t\t}
\t\t\t\tif ( bs ) {
\t\t\t\t\tui.position.top = inst._convertPositionTo( \"relative\", {
\t\t\t\t\t\ttop: b - inst.helperProportions.height,
\t\t\t\t\t\tleft: 0
\t\t\t\t\t} ).top;
\t\t\t\t}
\t\t\t\tif ( ls ) {
\t\t\t\t\tui.position.left = inst._convertPositionTo( \"relative\", {
\t\t\t\t\t\ttop: 0,
\t\t\t\t\t\tleft: l
\t\t\t\t\t} ).left;
\t\t\t\t}
\t\t\t\tif ( rs ) {
\t\t\t\t\tui.position.left = inst._convertPositionTo( \"relative\", {
\t\t\t\t\t\ttop: 0,
\t\t\t\t\t\tleft: r - inst.helperProportions.width
\t\t\t\t\t} ).left;
\t\t\t\t}
\t\t\t}

\t\t\tif ( !inst.snapElements[ i ].snapping && ( ts || bs || ls || rs || first ) ) {
\t\t\t\t( inst.options.snap.snap &&
\t\t\t\t\tinst.options.snap.snap.call(
\t\t\t\t\t\tinst.element,
\t\t\t\t\t\tevent,
\t\t\t\t\t\t\$.extend( inst._uiHash(), {
\t\t\t\t\t\t\tsnapItem: inst.snapElements[ i ].item
\t\t\t\t\t\t} ) ) );
\t\t\t}
\t\t\tinst.snapElements[ i ].snapping = ( ts || bs || ls || rs || first );

\t\t}

\t}
} );

\$.ui.plugin.add( \"draggable\", \"stack\", {
\tstart: function( event, ui, instance ) {
\t\tvar min,
\t\t\to = instance.options,
\t\t\tgroup = \$.makeArray( \$( o.stack ) ).sort( function( a, b ) {
\t\t\t\treturn ( parseInt( \$( a ).css( \"zIndex\" ), 10 ) || 0 ) -
\t\t\t\t\t( parseInt( \$( b ).css( \"zIndex\" ), 10 ) || 0 );
\t\t\t} );

\t\tif ( !group.length ) { return; }

\t\tmin = parseInt( \$( group[ 0 ] ).css( \"zIndex\" ), 10 ) || 0;
\t\t\$( group ).each( function( i ) {
\t\t\t\$( this ).css( \"zIndex\", min + i );
\t\t} );
\t\tthis.css( \"zIndex\", ( min + group.length ) );
\t}
} );

\$.ui.plugin.add( \"draggable\", \"zIndex\", {
\tstart: function( event, ui, instance ) {
\t\tvar t = \$( ui.helper ),
\t\t\to = instance.options;

\t\tif ( t.css( \"zIndex\" ) ) {
\t\t\to._zIndex = t.css( \"zIndex\" );
\t\t}
\t\tt.css( \"zIndex\", o.zIndex );
\t},
\tstop: function( event, ui, instance ) {
\t\tvar o = instance.options;

\t\tif ( o._zIndex ) {
\t\t\t\$( ui.helper ).css( \"zIndex\", o._zIndex );
\t\t}
\t}
} );

return \$.ui.draggable;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/draggable.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/draggable.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/draggable.js");
    }
}
