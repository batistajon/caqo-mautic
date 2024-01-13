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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/resizable.js */
class __TwigTemplate_b30a778c0209571505c32f115f605d199a45685b3557cb184ef8b26bdf329303 extends Template
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
 * jQuery UI Resizable 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Resizable
//>>group: Interactions
//>>description: Enables resize functionality for any element.
//>>docs: http://api.jqueryui.com/resizable/
//>>demos: http://jqueryui.com/resizable/
//>>css.structure: ../../themes/base/core.css
//>>css.structure: ../../themes/base/resizable.css
//>>css.theme: ../../themes/base/theme.css

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"./mouse\",
\t\t\t\"../disable-selection\",
\t\t\t\"../plugin\",
\t\t\t\"../version\",
\t\t\t\"../widget\"
\t\t], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

\$.widget( \"ui.resizable\", \$.ui.mouse, {
\tversion: \"1.12.1\",
\twidgetEventPrefix: \"resize\",
\toptions: {
\t\talsoResize: false,
\t\tanimate: false,
\t\tanimateDuration: \"slow\",
\t\tanimateEasing: \"swing\",
\t\taspectRatio: false,
\t\tautoHide: false,
\t\tclasses: {
\t\t\t\"ui-resizable-se\": \"ui-icon ui-icon-gripsmall-diagonal-se\"
\t\t},
\t\tcontainment: false,
\t\tghost: false,
\t\tgrid: false,
\t\thandles: \"e,s,se\",
\t\thelper: false,
\t\tmaxHeight: null,
\t\tmaxWidth: null,
\t\tminHeight: 10,
\t\tminWidth: 10,

\t\t// See #7960
\t\tzIndex: 90,

\t\t// Callbacks
\t\tresize: null,
\t\tstart: null,
\t\tstop: null
\t},

\t_num: function( value ) {
\t\treturn parseFloat( value ) || 0;
\t},

\t_isNumber: function( value ) {
\t\treturn !isNaN( parseFloat( value ) );
\t},

\t_hasScroll: function( el, a ) {

\t\tif ( \$( el ).css( \"overflow\" ) === \"hidden\" ) {
\t\t\treturn false;
\t\t}

\t\tvar scroll = ( a && a === \"left\" ) ? \"scrollLeft\" : \"scrollTop\",
\t\t\thas = false;

\t\tif ( el[ scroll ] > 0 ) {
\t\t\treturn true;
\t\t}

\t\t// TODO: determine which cases actually cause this to happen
\t\t// if the element doesn't have the scroll set, see if it's possible to
\t\t// set the scroll
\t\tel[ scroll ] = 1;
\t\thas = ( el[ scroll ] > 0 );
\t\tel[ scroll ] = 0;
\t\treturn has;
\t},

\t_create: function() {

\t\tvar margins,
\t\t\to = this.options,
\t\t\tthat = this;
\t\tthis._addClass( \"ui-resizable\" );

\t\t\$.extend( this, {
\t\t\t_aspectRatio: !!( o.aspectRatio ),
\t\t\taspectRatio: o.aspectRatio,
\t\t\toriginalElement: this.element,
\t\t\t_proportionallyResizeElements: [],
\t\t\t_helper: o.helper || o.ghost || o.animate ? o.helper || \"ui-resizable-helper\" : null
\t\t} );

\t\t// Wrap the element if it cannot hold child nodes
\t\tif ( this.element[ 0 ].nodeName.match( /^(canvas|textarea|input|select|button|img)\$/i ) ) {

\t\t\tthis.element.wrap(
\t\t\t\t\$( \"<div class='ui-wrapper' style='overflow: hidden;'></div>\" ).css( {
\t\t\t\t\tposition: this.element.css( \"position\" ),
\t\t\t\t\twidth: this.element.outerWidth(),
\t\t\t\t\theight: this.element.outerHeight(),
\t\t\t\t\ttop: this.element.css( \"top\" ),
\t\t\t\t\tleft: this.element.css( \"left\" )
\t\t\t\t} )
\t\t\t);

\t\t\tthis.element = this.element.parent().data(
\t\t\t\t\"ui-resizable\", this.element.resizable( \"instance\" )
\t\t\t);

\t\t\tthis.elementIsWrapper = true;

\t\t\tmargins = {
\t\t\t\tmarginTop: this.originalElement.css( \"marginTop\" ),
\t\t\t\tmarginRight: this.originalElement.css( \"marginRight\" ),
\t\t\t\tmarginBottom: this.originalElement.css( \"marginBottom\" ),
\t\t\t\tmarginLeft: this.originalElement.css( \"marginLeft\" )
\t\t\t};

\t\t\tthis.element.css( margins );
\t\t\tthis.originalElement.css( \"margin\", 0 );

\t\t\t// support: Safari
\t\t\t// Prevent Safari textarea resize
\t\t\tthis.originalResizeStyle = this.originalElement.css( \"resize\" );
\t\t\tthis.originalElement.css( \"resize\", \"none\" );

\t\t\tthis._proportionallyResizeElements.push( this.originalElement.css( {
\t\t\t\tposition: \"static\",
\t\t\t\tzoom: 1,
\t\t\t\tdisplay: \"block\"
\t\t\t} ) );

\t\t\t// Support: IE9
\t\t\t// avoid IE jump (hard set the margin)
\t\t\tthis.originalElement.css( margins );

\t\t\tthis._proportionallyResize();
\t\t}

\t\tthis._setupHandles();

\t\tif ( o.autoHide ) {
\t\t\t\$( this.element )
\t\t\t\t.on( \"mouseenter\", function() {
\t\t\t\t\tif ( o.disabled ) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tthat._removeClass( \"ui-resizable-autohide\" );
\t\t\t\t\tthat._handles.show();
\t\t\t\t} )
\t\t\t\t.on( \"mouseleave\", function() {
\t\t\t\t\tif ( o.disabled ) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tif ( !that.resizing ) {
\t\t\t\t\t\tthat._addClass( \"ui-resizable-autohide\" );
\t\t\t\t\t\tthat._handles.hide();
\t\t\t\t\t}
\t\t\t\t} );
\t\t}

\t\tthis._mouseInit();
\t},

\t_destroy: function() {

\t\tthis._mouseDestroy();

\t\tvar wrapper,
\t\t\t_destroy = function( exp ) {
\t\t\t\t\$( exp )
\t\t\t\t\t.removeData( \"resizable\" )
\t\t\t\t\t.removeData( \"ui-resizable\" )
\t\t\t\t\t.off( \".resizable\" )
\t\t\t\t\t.find( \".ui-resizable-handle\" )
\t\t\t\t\t\t.remove();
\t\t\t};

\t\t// TODO: Unwrap at same DOM position
\t\tif ( this.elementIsWrapper ) {
\t\t\t_destroy( this.element );
\t\t\twrapper = this.element;
\t\t\tthis.originalElement.css( {
\t\t\t\tposition: wrapper.css( \"position\" ),
\t\t\t\twidth: wrapper.outerWidth(),
\t\t\t\theight: wrapper.outerHeight(),
\t\t\t\ttop: wrapper.css( \"top\" ),
\t\t\t\tleft: wrapper.css( \"left\" )
\t\t\t} ).insertAfter( wrapper );
\t\t\twrapper.remove();
\t\t}

\t\tthis.originalElement.css( \"resize\", this.originalResizeStyle );
\t\t_destroy( this.originalElement );

\t\treturn this;
\t},

\t_setOption: function( key, value ) {
\t\tthis._super( key, value );

\t\tswitch ( key ) {
\t\tcase \"handles\":
\t\t\tthis._removeHandles();
\t\t\tthis._setupHandles();
\t\t\tbreak;
\t\tdefault:
\t\t\tbreak;
\t\t}
\t},

\t_setupHandles: function() {
\t\tvar o = this.options, handle, i, n, hname, axis, that = this;
\t\tthis.handles = o.handles ||
\t\t\t( !\$( \".ui-resizable-handle\", this.element ).length ?
\t\t\t\t\"e,s,se\" : {
\t\t\t\t\tn: \".ui-resizable-n\",
\t\t\t\t\te: \".ui-resizable-e\",
\t\t\t\t\ts: \".ui-resizable-s\",
\t\t\t\t\tw: \".ui-resizable-w\",
\t\t\t\t\tse: \".ui-resizable-se\",
\t\t\t\t\tsw: \".ui-resizable-sw\",
\t\t\t\t\tne: \".ui-resizable-ne\",
\t\t\t\t\tnw: \".ui-resizable-nw\"
\t\t\t\t} );

\t\tthis._handles = \$();
\t\tif ( this.handles.constructor === String ) {

\t\t\tif ( this.handles === \"all\" ) {
\t\t\t\tthis.handles = \"n,e,s,w,se,sw,ne,nw\";
\t\t\t}

\t\t\tn = this.handles.split( \",\" );
\t\t\tthis.handles = {};

\t\t\tfor ( i = 0; i < n.length; i++ ) {

\t\t\t\thandle = \$.trim( n[ i ] );
\t\t\t\thname = \"ui-resizable-\" + handle;
\t\t\t\taxis = \$( \"<div>\" );
\t\t\t\tthis._addClass( axis, \"ui-resizable-handle \" + hname );

\t\t\t\taxis.css( { zIndex: o.zIndex } );

\t\t\t\tthis.handles[ handle ] = \".ui-resizable-\" + handle;
\t\t\t\tthis.element.append( axis );
\t\t\t}

\t\t}

\t\tthis._renderAxis = function( target ) {

\t\t\tvar i, axis, padPos, padWrapper;

\t\t\ttarget = target || this.element;

\t\t\tfor ( i in this.handles ) {

\t\t\t\tif ( this.handles[ i ].constructor === String ) {
\t\t\t\t\tthis.handles[ i ] = this.element.children( this.handles[ i ] ).first().show();
\t\t\t\t} else if ( this.handles[ i ].jquery || this.handles[ i ].nodeType ) {
\t\t\t\t\tthis.handles[ i ] = \$( this.handles[ i ] );
\t\t\t\t\tthis._on( this.handles[ i ], { \"mousedown\": that._mouseDown } );
\t\t\t\t}

\t\t\t\tif ( this.elementIsWrapper &&
\t\t\t\t\t\tthis.originalElement[ 0 ]
\t\t\t\t\t\t\t.nodeName
\t\t\t\t\t\t\t.match( /^(textarea|input|select|button)\$/i ) ) {
\t\t\t\t\taxis = \$( this.handles[ i ], this.element );

\t\t\t\t\tpadWrapper = /sw|ne|nw|se|n|s/.test( i ) ?
\t\t\t\t\t\taxis.outerHeight() :
\t\t\t\t\t\taxis.outerWidth();

\t\t\t\t\tpadPos = [ \"padding\",
\t\t\t\t\t\t/ne|nw|n/.test( i ) ? \"Top\" :
\t\t\t\t\t\t/se|sw|s/.test( i ) ? \"Bottom\" :
\t\t\t\t\t\t/^e\$/.test( i ) ? \"Right\" : \"Left\" ].join( \"\" );

\t\t\t\t\ttarget.css( padPos, padWrapper );

\t\t\t\t\tthis._proportionallyResize();
\t\t\t\t}

\t\t\t\tthis._handles = this._handles.add( this.handles[ i ] );
\t\t\t}
\t\t};

\t\t// TODO: make renderAxis a prototype function
\t\tthis._renderAxis( this.element );

\t\tthis._handles = this._handles.add( this.element.find( \".ui-resizable-handle\" ) );
\t\tthis._handles.disableSelection();

\t\tthis._handles.on( \"mouseover\", function() {
\t\t\tif ( !that.resizing ) {
\t\t\t\tif ( this.className ) {
\t\t\t\t\taxis = this.className.match( /ui-resizable-(se|sw|ne|nw|n|e|s|w)/i );
\t\t\t\t}
\t\t\t\tthat.axis = axis && axis[ 1 ] ? axis[ 1 ] : \"se\";
\t\t\t}
\t\t} );

\t\tif ( o.autoHide ) {
\t\t\tthis._handles.hide();
\t\t\tthis._addClass( \"ui-resizable-autohide\" );
\t\t}
\t},

\t_removeHandles: function() {
\t\tthis._handles.remove();
\t},

\t_mouseCapture: function( event ) {
\t\tvar i, handle,
\t\t\tcapture = false;

\t\tfor ( i in this.handles ) {
\t\t\thandle = \$( this.handles[ i ] )[ 0 ];
\t\t\tif ( handle === event.target || \$.contains( handle, event.target ) ) {
\t\t\t\tcapture = true;
\t\t\t}
\t\t}

\t\treturn !this.options.disabled && capture;
\t},

\t_mouseStart: function( event ) {

\t\tvar curleft, curtop, cursor,
\t\t\to = this.options,
\t\t\tel = this.element;

\t\tthis.resizing = true;

\t\tthis._renderProxy();

\t\tcurleft = this._num( this.helper.css( \"left\" ) );
\t\tcurtop = this._num( this.helper.css( \"top\" ) );

\t\tif ( o.containment ) {
\t\t\tcurleft += \$( o.containment ).scrollLeft() || 0;
\t\t\tcurtop += \$( o.containment ).scrollTop() || 0;
\t\t}

\t\tthis.offset = this.helper.offset();
\t\tthis.position = { left: curleft, top: curtop };

\t\tthis.size = this._helper ? {
\t\t\t\twidth: this.helper.width(),
\t\t\t\theight: this.helper.height()
\t\t\t} : {
\t\t\t\twidth: el.width(),
\t\t\t\theight: el.height()
\t\t\t};

\t\tthis.originalSize = this._helper ? {
\t\t\t\twidth: el.outerWidth(),
\t\t\t\theight: el.outerHeight()
\t\t\t} : {
\t\t\t\twidth: el.width(),
\t\t\t\theight: el.height()
\t\t\t};

\t\tthis.sizeDiff = {
\t\t\twidth: el.outerWidth() - el.width(),
\t\t\theight: el.outerHeight() - el.height()
\t\t};

\t\tthis.originalPosition = { left: curleft, top: curtop };
\t\tthis.originalMousePosition = { left: event.pageX, top: event.pageY };

\t\tthis.aspectRatio = ( typeof o.aspectRatio === \"number\" ) ?
\t\t\to.aspectRatio :
\t\t\t( ( this.originalSize.width / this.originalSize.height ) || 1 );

\t\tcursor = \$( \".ui-resizable-\" + this.axis ).css( \"cursor\" );
\t\t\$( \"body\" ).css( \"cursor\", cursor === \"auto\" ? this.axis + \"-resize\" : cursor );

\t\tthis._addClass( \"ui-resizable-resizing\" );
\t\tthis._propagate( \"start\", event );
\t\treturn true;
\t},

\t_mouseDrag: function( event ) {

\t\tvar data, props,
\t\t\tsmp = this.originalMousePosition,
\t\t\ta = this.axis,
\t\t\tdx = ( event.pageX - smp.left ) || 0,
\t\t\tdy = ( event.pageY - smp.top ) || 0,
\t\t\ttrigger = this._change[ a ];

\t\tthis._updatePrevProperties();

\t\tif ( !trigger ) {
\t\t\treturn false;
\t\t}

\t\tdata = trigger.apply( this, [ event, dx, dy ] );

\t\tthis._updateVirtualBoundaries( event.shiftKey );
\t\tif ( this._aspectRatio || event.shiftKey ) {
\t\t\tdata = this._updateRatio( data, event );
\t\t}

\t\tdata = this._respectSize( data, event );

\t\tthis._updateCache( data );

\t\tthis._propagate( \"resize\", event );

\t\tprops = this._applyChanges();

\t\tif ( !this._helper && this._proportionallyResizeElements.length ) {
\t\t\tthis._proportionallyResize();
\t\t}

\t\tif ( !\$.isEmptyObject( props ) ) {
\t\t\tthis._updatePrevProperties();
\t\t\tthis._trigger( \"resize\", event, this.ui() );
\t\t\tthis._applyChanges();
\t\t}

\t\treturn false;
\t},

\t_mouseStop: function( event ) {

\t\tthis.resizing = false;
\t\tvar pr, ista, soffseth, soffsetw, s, left, top,
\t\t\to = this.options, that = this;

\t\tif ( this._helper ) {

\t\t\tpr = this._proportionallyResizeElements;
\t\t\tista = pr.length && ( /textarea/i ).test( pr[ 0 ].nodeName );
\t\t\tsoffseth = ista && this._hasScroll( pr[ 0 ], \"left\" ) ? 0 : that.sizeDiff.height;
\t\t\tsoffsetw = ista ? 0 : that.sizeDiff.width;

\t\t\ts = {
\t\t\t\twidth: ( that.helper.width()  - soffsetw ),
\t\t\t\theight: ( that.helper.height() - soffseth )
\t\t\t};
\t\t\tleft = ( parseFloat( that.element.css( \"left\" ) ) +
\t\t\t\t( that.position.left - that.originalPosition.left ) ) || null;
\t\t\ttop = ( parseFloat( that.element.css( \"top\" ) ) +
\t\t\t\t( that.position.top - that.originalPosition.top ) ) || null;

\t\t\tif ( !o.animate ) {
\t\t\t\tthis.element.css( \$.extend( s, { top: top, left: left } ) );
\t\t\t}

\t\t\tthat.helper.height( that.size.height );
\t\t\tthat.helper.width( that.size.width );

\t\t\tif ( this._helper && !o.animate ) {
\t\t\t\tthis._proportionallyResize();
\t\t\t}
\t\t}

\t\t\$( \"body\" ).css( \"cursor\", \"auto\" );

\t\tthis._removeClass( \"ui-resizable-resizing\" );

\t\tthis._propagate( \"stop\", event );

\t\tif ( this._helper ) {
\t\t\tthis.helper.remove();
\t\t}

\t\treturn false;

\t},

\t_updatePrevProperties: function() {
\t\tthis.prevPosition = {
\t\t\ttop: this.position.top,
\t\t\tleft: this.position.left
\t\t};
\t\tthis.prevSize = {
\t\t\twidth: this.size.width,
\t\t\theight: this.size.height
\t\t};
\t},

\t_applyChanges: function() {
\t\tvar props = {};

\t\tif ( this.position.top !== this.prevPosition.top ) {
\t\t\tprops.top = this.position.top + \"px\";
\t\t}
\t\tif ( this.position.left !== this.prevPosition.left ) {
\t\t\tprops.left = this.position.left + \"px\";
\t\t}
\t\tif ( this.size.width !== this.prevSize.width ) {
\t\t\tprops.width = this.size.width + \"px\";
\t\t}
\t\tif ( this.size.height !== this.prevSize.height ) {
\t\t\tprops.height = this.size.height + \"px\";
\t\t}

\t\tthis.helper.css( props );

\t\treturn props;
\t},

\t_updateVirtualBoundaries: function( forceAspectRatio ) {
\t\tvar pMinWidth, pMaxWidth, pMinHeight, pMaxHeight, b,
\t\t\to = this.options;

\t\tb = {
\t\t\tminWidth: this._isNumber( o.minWidth ) ? o.minWidth : 0,
\t\t\tmaxWidth: this._isNumber( o.maxWidth ) ? o.maxWidth : Infinity,
\t\t\tminHeight: this._isNumber( o.minHeight ) ? o.minHeight : 0,
\t\t\tmaxHeight: this._isNumber( o.maxHeight ) ? o.maxHeight : Infinity
\t\t};

\t\tif ( this._aspectRatio || forceAspectRatio ) {
\t\t\tpMinWidth = b.minHeight * this.aspectRatio;
\t\t\tpMinHeight = b.minWidth / this.aspectRatio;
\t\t\tpMaxWidth = b.maxHeight * this.aspectRatio;
\t\t\tpMaxHeight = b.maxWidth / this.aspectRatio;

\t\t\tif ( pMinWidth > b.minWidth ) {
\t\t\t\tb.minWidth = pMinWidth;
\t\t\t}
\t\t\tif ( pMinHeight > b.minHeight ) {
\t\t\t\tb.minHeight = pMinHeight;
\t\t\t}
\t\t\tif ( pMaxWidth < b.maxWidth ) {
\t\t\t\tb.maxWidth = pMaxWidth;
\t\t\t}
\t\t\tif ( pMaxHeight < b.maxHeight ) {
\t\t\t\tb.maxHeight = pMaxHeight;
\t\t\t}
\t\t}
\t\tthis._vBoundaries = b;
\t},

\t_updateCache: function( data ) {
\t\tthis.offset = this.helper.offset();
\t\tif ( this._isNumber( data.left ) ) {
\t\t\tthis.position.left = data.left;
\t\t}
\t\tif ( this._isNumber( data.top ) ) {
\t\t\tthis.position.top = data.top;
\t\t}
\t\tif ( this._isNumber( data.height ) ) {
\t\t\tthis.size.height = data.height;
\t\t}
\t\tif ( this._isNumber( data.width ) ) {
\t\t\tthis.size.width = data.width;
\t\t}
\t},

\t_updateRatio: function( data ) {

\t\tvar cpos = this.position,
\t\t\tcsize = this.size,
\t\t\ta = this.axis;

\t\tif ( this._isNumber( data.height ) ) {
\t\t\tdata.width = ( data.height * this.aspectRatio );
\t\t} else if ( this._isNumber( data.width ) ) {
\t\t\tdata.height = ( data.width / this.aspectRatio );
\t\t}

\t\tif ( a === \"sw\" ) {
\t\t\tdata.left = cpos.left + ( csize.width - data.width );
\t\t\tdata.top = null;
\t\t}
\t\tif ( a === \"nw\" ) {
\t\t\tdata.top = cpos.top + ( csize.height - data.height );
\t\t\tdata.left = cpos.left + ( csize.width - data.width );
\t\t}

\t\treturn data;
\t},

\t_respectSize: function( data ) {

\t\tvar o = this._vBoundaries,
\t\t\ta = this.axis,
\t\t\tismaxw = this._isNumber( data.width ) && o.maxWidth && ( o.maxWidth < data.width ),
\t\t\tismaxh = this._isNumber( data.height ) && o.maxHeight && ( o.maxHeight < data.height ),
\t\t\tisminw = this._isNumber( data.width ) && o.minWidth && ( o.minWidth > data.width ),
\t\t\tisminh = this._isNumber( data.height ) && o.minHeight && ( o.minHeight > data.height ),
\t\t\tdw = this.originalPosition.left + this.originalSize.width,
\t\t\tdh = this.originalPosition.top + this.originalSize.height,
\t\t\tcw = /sw|nw|w/.test( a ), ch = /nw|ne|n/.test( a );
\t\tif ( isminw ) {
\t\t\tdata.width = o.minWidth;
\t\t}
\t\tif ( isminh ) {
\t\t\tdata.height = o.minHeight;
\t\t}
\t\tif ( ismaxw ) {
\t\t\tdata.width = o.maxWidth;
\t\t}
\t\tif ( ismaxh ) {
\t\t\tdata.height = o.maxHeight;
\t\t}

\t\tif ( isminw && cw ) {
\t\t\tdata.left = dw - o.minWidth;
\t\t}
\t\tif ( ismaxw && cw ) {
\t\t\tdata.left = dw - o.maxWidth;
\t\t}
\t\tif ( isminh && ch ) {
\t\t\tdata.top = dh - o.minHeight;
\t\t}
\t\tif ( ismaxh && ch ) {
\t\t\tdata.top = dh - o.maxHeight;
\t\t}

\t\t// Fixing jump error on top/left - bug #2330
\t\tif ( !data.width && !data.height && !data.left && data.top ) {
\t\t\tdata.top = null;
\t\t} else if ( !data.width && !data.height && !data.top && data.left ) {
\t\t\tdata.left = null;
\t\t}

\t\treturn data;
\t},

\t_getPaddingPlusBorderDimensions: function( element ) {
\t\tvar i = 0,
\t\t\twidths = [],
\t\t\tborders = [
\t\t\t\telement.css( \"borderTopWidth\" ),
\t\t\t\telement.css( \"borderRightWidth\" ),
\t\t\t\telement.css( \"borderBottomWidth\" ),
\t\t\t\telement.css( \"borderLeftWidth\" )
\t\t\t],
\t\t\tpaddings = [
\t\t\t\telement.css( \"paddingTop\" ),
\t\t\t\telement.css( \"paddingRight\" ),
\t\t\t\telement.css( \"paddingBottom\" ),
\t\t\t\telement.css( \"paddingLeft\" )
\t\t\t];

\t\tfor ( ; i < 4; i++ ) {
\t\t\twidths[ i ] = ( parseFloat( borders[ i ] ) || 0 );
\t\t\twidths[ i ] += ( parseFloat( paddings[ i ] ) || 0 );
\t\t}

\t\treturn {
\t\t\theight: widths[ 0 ] + widths[ 2 ],
\t\t\twidth: widths[ 1 ] + widths[ 3 ]
\t\t};
\t},

\t_proportionallyResize: function() {

\t\tif ( !this._proportionallyResizeElements.length ) {
\t\t\treturn;
\t\t}

\t\tvar prel,
\t\t\ti = 0,
\t\t\telement = this.helper || this.element;

\t\tfor ( ; i < this._proportionallyResizeElements.length; i++ ) {

\t\t\tprel = this._proportionallyResizeElements[ i ];

\t\t\t// TODO: Seems like a bug to cache this.outerDimensions
\t\t\t// considering that we are in a loop.
\t\t\tif ( !this.outerDimensions ) {
\t\t\t\tthis.outerDimensions = this._getPaddingPlusBorderDimensions( prel );
\t\t\t}

\t\t\tprel.css( {
\t\t\t\theight: ( element.height() - this.outerDimensions.height ) || 0,
\t\t\t\twidth: ( element.width() - this.outerDimensions.width ) || 0
\t\t\t} );

\t\t}

\t},

\t_renderProxy: function() {

\t\tvar el = this.element, o = this.options;
\t\tthis.elementOffset = el.offset();

\t\tif ( this._helper ) {

\t\t\tthis.helper = this.helper || \$( \"<div style='overflow:hidden;'></div>\" );

\t\t\tthis._addClass( this.helper, this._helper );
\t\t\tthis.helper.css( {
\t\t\t\twidth: this.element.outerWidth(),
\t\t\t\theight: this.element.outerHeight(),
\t\t\t\tposition: \"absolute\",
\t\t\t\tleft: this.elementOffset.left + \"px\",
\t\t\t\ttop: this.elementOffset.top + \"px\",
\t\t\t\tzIndex: ++o.zIndex //TODO: Don't modify option
\t\t\t} );

\t\t\tthis.helper
\t\t\t\t.appendTo( \"body\" )
\t\t\t\t.disableSelection();

\t\t} else {
\t\t\tthis.helper = this.element;
\t\t}

\t},

\t_change: {
\t\te: function( event, dx ) {
\t\t\treturn { width: this.originalSize.width + dx };
\t\t},
\t\tw: function( event, dx ) {
\t\t\tvar cs = this.originalSize, sp = this.originalPosition;
\t\t\treturn { left: sp.left + dx, width: cs.width - dx };
\t\t},
\t\tn: function( event, dx, dy ) {
\t\t\tvar cs = this.originalSize, sp = this.originalPosition;
\t\t\treturn { top: sp.top + dy, height: cs.height - dy };
\t\t},
\t\ts: function( event, dx, dy ) {
\t\t\treturn { height: this.originalSize.height + dy };
\t\t},
\t\tse: function( event, dx, dy ) {
\t\t\treturn \$.extend( this._change.s.apply( this, arguments ),
\t\t\t\tthis._change.e.apply( this, [ event, dx, dy ] ) );
\t\t},
\t\tsw: function( event, dx, dy ) {
\t\t\treturn \$.extend( this._change.s.apply( this, arguments ),
\t\t\t\tthis._change.w.apply( this, [ event, dx, dy ] ) );
\t\t},
\t\tne: function( event, dx, dy ) {
\t\t\treturn \$.extend( this._change.n.apply( this, arguments ),
\t\t\t\tthis._change.e.apply( this, [ event, dx, dy ] ) );
\t\t},
\t\tnw: function( event, dx, dy ) {
\t\t\treturn \$.extend( this._change.n.apply( this, arguments ),
\t\t\t\tthis._change.w.apply( this, [ event, dx, dy ] ) );
\t\t}
\t},

\t_propagate: function( n, event ) {
\t\t\$.ui.plugin.call( this, n, [ event, this.ui() ] );
\t\t( n !== \"resize\" && this._trigger( n, event, this.ui() ) );
\t},

\tplugins: {},

\tui: function() {
\t\treturn {
\t\t\toriginalElement: this.originalElement,
\t\t\telement: this.element,
\t\t\thelper: this.helper,
\t\t\tposition: this.position,
\t\t\tsize: this.size,
\t\t\toriginalSize: this.originalSize,
\t\t\toriginalPosition: this.originalPosition
\t\t};
\t}

} );

/*
 * Resizable Extensions
 */

\$.ui.plugin.add( \"resizable\", \"animate\", {

\tstop: function( event ) {
\t\tvar that = \$( this ).resizable( \"instance\" ),
\t\t\to = that.options,
\t\t\tpr = that._proportionallyResizeElements,
\t\t\tista = pr.length && ( /textarea/i ).test( pr[ 0 ].nodeName ),
\t\t\tsoffseth = ista && that._hasScroll( pr[ 0 ], \"left\" ) ? 0 : that.sizeDiff.height,
\t\t\tsoffsetw = ista ? 0 : that.sizeDiff.width,
\t\t\tstyle = {
\t\t\t\twidth: ( that.size.width - soffsetw ),
\t\t\t\theight: ( that.size.height - soffseth )
\t\t\t},
\t\t\tleft = ( parseFloat( that.element.css( \"left\" ) ) +
\t\t\t\t( that.position.left - that.originalPosition.left ) ) || null,
\t\t\ttop = ( parseFloat( that.element.css( \"top\" ) ) +
\t\t\t\t( that.position.top - that.originalPosition.top ) ) || null;

\t\tthat.element.animate(
\t\t\t\$.extend( style, top && left ? { top: top, left: left } : {} ), {
\t\t\t\tduration: o.animateDuration,
\t\t\t\teasing: o.animateEasing,
\t\t\t\tstep: function() {

\t\t\t\t\tvar data = {
\t\t\t\t\t\twidth: parseFloat( that.element.css( \"width\" ) ),
\t\t\t\t\t\theight: parseFloat( that.element.css( \"height\" ) ),
\t\t\t\t\t\ttop: parseFloat( that.element.css( \"top\" ) ),
\t\t\t\t\t\tleft: parseFloat( that.element.css( \"left\" ) )
\t\t\t\t\t};

\t\t\t\t\tif ( pr && pr.length ) {
\t\t\t\t\t\t\$( pr[ 0 ] ).css( { width: data.width, height: data.height } );
\t\t\t\t\t}

\t\t\t\t\t// Propagating resize, and updating values for each animation step
\t\t\t\t\tthat._updateCache( data );
\t\t\t\t\tthat._propagate( \"resize\", event );

\t\t\t\t}
\t\t\t}
\t\t);
\t}

} );

\$.ui.plugin.add( \"resizable\", \"containment\", {

\tstart: function() {
\t\tvar element, p, co, ch, cw, width, height,
\t\t\tthat = \$( this ).resizable( \"instance\" ),
\t\t\to = that.options,
\t\t\tel = that.element,
\t\t\toc = o.containment,
\t\t\tce = ( oc instanceof \$ ) ?
\t\t\t\toc.get( 0 ) :
\t\t\t\t( /parent/.test( oc ) ) ? el.parent().get( 0 ) : oc;

\t\tif ( !ce ) {
\t\t\treturn;
\t\t}

\t\tthat.containerElement = \$( ce );

\t\tif ( /document/.test( oc ) || oc === document ) {
\t\t\tthat.containerOffset = {
\t\t\t\tleft: 0,
\t\t\t\ttop: 0
\t\t\t};
\t\t\tthat.containerPosition = {
\t\t\t\tleft: 0,
\t\t\t\ttop: 0
\t\t\t};

\t\t\tthat.parentData = {
\t\t\t\telement: \$( document ),
\t\t\t\tleft: 0,
\t\t\t\ttop: 0,
\t\t\t\twidth: \$( document ).width(),
\t\t\t\theight: \$( document ).height() || document.body.parentNode.scrollHeight
\t\t\t};
\t\t} else {
\t\t\telement = \$( ce );
\t\t\tp = [];
\t\t\t\$( [ \"Top\", \"Right\", \"Left\", \"Bottom\" ] ).each( function( i, name ) {
\t\t\t\tp[ i ] = that._num( element.css( \"padding\" + name ) );
\t\t\t} );

\t\t\tthat.containerOffset = element.offset();
\t\t\tthat.containerPosition = element.position();
\t\t\tthat.containerSize = {
\t\t\t\theight: ( element.innerHeight() - p[ 3 ] ),
\t\t\t\twidth: ( element.innerWidth() - p[ 1 ] )
\t\t\t};

\t\t\tco = that.containerOffset;
\t\t\tch = that.containerSize.height;
\t\t\tcw = that.containerSize.width;
\t\t\twidth = ( that._hasScroll ( ce, \"left\" ) ? ce.scrollWidth : cw );
\t\t\theight = ( that._hasScroll ( ce ) ? ce.scrollHeight : ch ) ;

\t\t\tthat.parentData = {
\t\t\t\telement: ce,
\t\t\t\tleft: co.left,
\t\t\t\ttop: co.top,
\t\t\t\twidth: width,
\t\t\t\theight: height
\t\t\t};
\t\t}
\t},

\tresize: function( event ) {
\t\tvar woset, hoset, isParent, isOffsetRelative,
\t\t\tthat = \$( this ).resizable( \"instance\" ),
\t\t\to = that.options,
\t\t\tco = that.containerOffset,
\t\t\tcp = that.position,
\t\t\tpRatio = that._aspectRatio || event.shiftKey,
\t\t\tcop = {
\t\t\t\ttop: 0,
\t\t\t\tleft: 0
\t\t\t},
\t\t\tce = that.containerElement,
\t\t\tcontinueResize = true;

\t\tif ( ce[ 0 ] !== document && ( /static/ ).test( ce.css( \"position\" ) ) ) {
\t\t\tcop = co;
\t\t}

\t\tif ( cp.left < ( that._helper ? co.left : 0 ) ) {
\t\t\tthat.size.width = that.size.width +
\t\t\t\t( that._helper ?
\t\t\t\t\t( that.position.left - co.left ) :
\t\t\t\t\t( that.position.left - cop.left ) );

\t\t\tif ( pRatio ) {
\t\t\t\tthat.size.height = that.size.width / that.aspectRatio;
\t\t\t\tcontinueResize = false;
\t\t\t}
\t\t\tthat.position.left = o.helper ? co.left : 0;
\t\t}

\t\tif ( cp.top < ( that._helper ? co.top : 0 ) ) {
\t\t\tthat.size.height = that.size.height +
\t\t\t\t( that._helper ?
\t\t\t\t\t( that.position.top - co.top ) :
\t\t\t\t\tthat.position.top );

\t\t\tif ( pRatio ) {
\t\t\t\tthat.size.width = that.size.height * that.aspectRatio;
\t\t\t\tcontinueResize = false;
\t\t\t}
\t\t\tthat.position.top = that._helper ? co.top : 0;
\t\t}

\t\tisParent = that.containerElement.get( 0 ) === that.element.parent().get( 0 );
\t\tisOffsetRelative = /relative|absolute/.test( that.containerElement.css( \"position\" ) );

\t\tif ( isParent && isOffsetRelative ) {
\t\t\tthat.offset.left = that.parentData.left + that.position.left;
\t\t\tthat.offset.top = that.parentData.top + that.position.top;
\t\t} else {
\t\t\tthat.offset.left = that.element.offset().left;
\t\t\tthat.offset.top = that.element.offset().top;
\t\t}

\t\twoset = Math.abs( that.sizeDiff.width +
\t\t\t( that._helper ?
\t\t\t\tthat.offset.left - cop.left :
\t\t\t\t( that.offset.left - co.left ) ) );

\t\thoset = Math.abs( that.sizeDiff.height +
\t\t\t( that._helper ?
\t\t\t\tthat.offset.top - cop.top :
\t\t\t\t( that.offset.top - co.top ) ) );

\t\tif ( woset + that.size.width >= that.parentData.width ) {
\t\t\tthat.size.width = that.parentData.width - woset;
\t\t\tif ( pRatio ) {
\t\t\t\tthat.size.height = that.size.width / that.aspectRatio;
\t\t\t\tcontinueResize = false;
\t\t\t}
\t\t}

\t\tif ( hoset + that.size.height >= that.parentData.height ) {
\t\t\tthat.size.height = that.parentData.height - hoset;
\t\t\tif ( pRatio ) {
\t\t\t\tthat.size.width = that.size.height * that.aspectRatio;
\t\t\t\tcontinueResize = false;
\t\t\t}
\t\t}

\t\tif ( !continueResize ) {
\t\t\tthat.position.left = that.prevPosition.left;
\t\t\tthat.position.top = that.prevPosition.top;
\t\t\tthat.size.width = that.prevSize.width;
\t\t\tthat.size.height = that.prevSize.height;
\t\t}
\t},

\tstop: function() {
\t\tvar that = \$( this ).resizable( \"instance\" ),
\t\t\to = that.options,
\t\t\tco = that.containerOffset,
\t\t\tcop = that.containerPosition,
\t\t\tce = that.containerElement,
\t\t\thelper = \$( that.helper ),
\t\t\tho = helper.offset(),
\t\t\tw = helper.outerWidth() - that.sizeDiff.width,
\t\t\th = helper.outerHeight() - that.sizeDiff.height;

\t\tif ( that._helper && !o.animate && ( /relative/ ).test( ce.css( \"position\" ) ) ) {
\t\t\t\$( this ).css( {
\t\t\t\tleft: ho.left - cop.left - co.left,
\t\t\t\twidth: w,
\t\t\t\theight: h
\t\t\t} );
\t\t}

\t\tif ( that._helper && !o.animate && ( /static/ ).test( ce.css( \"position\" ) ) ) {
\t\t\t\$( this ).css( {
\t\t\t\tleft: ho.left - cop.left - co.left,
\t\t\t\twidth: w,
\t\t\t\theight: h
\t\t\t} );
\t\t}
\t}
} );

\$.ui.plugin.add( \"resizable\", \"alsoResize\", {

\tstart: function() {
\t\tvar that = \$( this ).resizable( \"instance\" ),
\t\t\to = that.options;

\t\t\$( o.alsoResize ).each( function() {
\t\t\tvar el = \$( this );
\t\t\tel.data( \"ui-resizable-alsoresize\", {
\t\t\t\twidth: parseFloat( el.width() ), height: parseFloat( el.height() ),
\t\t\t\tleft: parseFloat( el.css( \"left\" ) ), top: parseFloat( el.css( \"top\" ) )
\t\t\t} );
\t\t} );
\t},

\tresize: function( event, ui ) {
\t\tvar that = \$( this ).resizable( \"instance\" ),
\t\t\to = that.options,
\t\t\tos = that.originalSize,
\t\t\top = that.originalPosition,
\t\t\tdelta = {
\t\t\t\theight: ( that.size.height - os.height ) || 0,
\t\t\t\twidth: ( that.size.width - os.width ) || 0,
\t\t\t\ttop: ( that.position.top - op.top ) || 0,
\t\t\t\tleft: ( that.position.left - op.left ) || 0
\t\t\t};

\t\t\t\$( o.alsoResize ).each( function() {
\t\t\t\tvar el = \$( this ), start = \$( this ).data( \"ui-resizable-alsoresize\" ), style = {},
\t\t\t\t\tcss = el.parents( ui.originalElement[ 0 ] ).length ?
\t\t\t\t\t\t\t[ \"width\", \"height\" ] :
\t\t\t\t\t\t\t[ \"width\", \"height\", \"top\", \"left\" ];

\t\t\t\t\$.each( css, function( i, prop ) {
\t\t\t\t\tvar sum = ( start[ prop ] || 0 ) + ( delta[ prop ] || 0 );
\t\t\t\t\tif ( sum && sum >= 0 ) {
\t\t\t\t\t\tstyle[ prop ] = sum || null;
\t\t\t\t\t}
\t\t\t\t} );

\t\t\t\tel.css( style );
\t\t\t} );
\t},

\tstop: function() {
\t\t\$( this ).removeData( \"ui-resizable-alsoresize\" );
\t}
} );

\$.ui.plugin.add( \"resizable\", \"ghost\", {

\tstart: function() {

\t\tvar that = \$( this ).resizable( \"instance\" ), cs = that.size;

\t\tthat.ghost = that.originalElement.clone();
\t\tthat.ghost.css( {
\t\t\topacity: 0.25,
\t\t\tdisplay: \"block\",
\t\t\tposition: \"relative\",
\t\t\theight: cs.height,
\t\t\twidth: cs.width,
\t\t\tmargin: 0,
\t\t\tleft: 0,
\t\t\ttop: 0
\t\t} );

\t\tthat._addClass( that.ghost, \"ui-resizable-ghost\" );

\t\t// DEPRECATED
\t\t// TODO: remove after 1.12
\t\tif ( \$.uiBackCompat !== false && typeof that.options.ghost === \"string\" ) {

\t\t\t// Ghost option
\t\t\tthat.ghost.addClass( this.options.ghost );
\t\t}

\t\tthat.ghost.appendTo( that.helper );

\t},

\tresize: function() {
\t\tvar that = \$( this ).resizable( \"instance\" );
\t\tif ( that.ghost ) {
\t\t\tthat.ghost.css( {
\t\t\t\tposition: \"relative\",
\t\t\t\theight: that.size.height,
\t\t\t\twidth: that.size.width
\t\t\t} );
\t\t}
\t},

\tstop: function() {
\t\tvar that = \$( this ).resizable( \"instance\" );
\t\tif ( that.ghost && that.helper ) {
\t\t\tthat.helper.get( 0 ).removeChild( that.ghost.get( 0 ) );
\t\t}
\t}

} );

\$.ui.plugin.add( \"resizable\", \"grid\", {

\tresize: function() {
\t\tvar outerDimensions,
\t\t\tthat = \$( this ).resizable( \"instance\" ),
\t\t\to = that.options,
\t\t\tcs = that.size,
\t\t\tos = that.originalSize,
\t\t\top = that.originalPosition,
\t\t\ta = that.axis,
\t\t\tgrid = typeof o.grid === \"number\" ? [ o.grid, o.grid ] : o.grid,
\t\t\tgridX = ( grid[ 0 ] || 1 ),
\t\t\tgridY = ( grid[ 1 ] || 1 ),
\t\t\tox = Math.round( ( cs.width - os.width ) / gridX ) * gridX,
\t\t\toy = Math.round( ( cs.height - os.height ) / gridY ) * gridY,
\t\t\tnewWidth = os.width + ox,
\t\t\tnewHeight = os.height + oy,
\t\t\tisMaxWidth = o.maxWidth && ( o.maxWidth < newWidth ),
\t\t\tisMaxHeight = o.maxHeight && ( o.maxHeight < newHeight ),
\t\t\tisMinWidth = o.minWidth && ( o.minWidth > newWidth ),
\t\t\tisMinHeight = o.minHeight && ( o.minHeight > newHeight );

\t\to.grid = grid;

\t\tif ( isMinWidth ) {
\t\t\tnewWidth += gridX;
\t\t}
\t\tif ( isMinHeight ) {
\t\t\tnewHeight += gridY;
\t\t}
\t\tif ( isMaxWidth ) {
\t\t\tnewWidth -= gridX;
\t\t}
\t\tif ( isMaxHeight ) {
\t\t\tnewHeight -= gridY;
\t\t}

\t\tif ( /^(se|s|e)\$/.test( a ) ) {
\t\t\tthat.size.width = newWidth;
\t\t\tthat.size.height = newHeight;
\t\t} else if ( /^(ne)\$/.test( a ) ) {
\t\t\tthat.size.width = newWidth;
\t\t\tthat.size.height = newHeight;
\t\t\tthat.position.top = op.top - oy;
\t\t} else if ( /^(sw)\$/.test( a ) ) {
\t\t\tthat.size.width = newWidth;
\t\t\tthat.size.height = newHeight;
\t\t\tthat.position.left = op.left - ox;
\t\t} else {
\t\t\tif ( newHeight - gridY <= 0 || newWidth - gridX <= 0 ) {
\t\t\t\touterDimensions = that._getPaddingPlusBorderDimensions( this );
\t\t\t}

\t\t\tif ( newHeight - gridY > 0 ) {
\t\t\t\tthat.size.height = newHeight;
\t\t\t\tthat.position.top = op.top - oy;
\t\t\t} else {
\t\t\t\tnewHeight = gridY - outerDimensions.height;
\t\t\t\tthat.size.height = newHeight;
\t\t\t\tthat.position.top = op.top + os.height - newHeight;
\t\t\t}
\t\t\tif ( newWidth - gridX > 0 ) {
\t\t\t\tthat.size.width = newWidth;
\t\t\t\tthat.position.left = op.left - ox;
\t\t\t} else {
\t\t\t\tnewWidth = gridX - outerDimensions.width;
\t\t\t\tthat.size.width = newWidth;
\t\t\t\tthat.position.left = op.left + os.width - newWidth;
\t\t\t}
\t\t}
\t}

} );

return \$.ui.resizable;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/resizable.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/resizable.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/resizable.js");
    }
}
