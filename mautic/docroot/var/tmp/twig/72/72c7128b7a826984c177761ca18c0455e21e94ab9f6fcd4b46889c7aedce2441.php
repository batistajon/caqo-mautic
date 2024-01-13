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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/slider.js */
class __TwigTemplate_e087e50bc026f9cf6612fb9f1ce06690ccc92398a5bd4ecaae1cbf080ab05524 extends Template
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
 * jQuery UI Slider 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Slider
//>>group: Widgets
//>>description: Displays a flexible slider with ranges and accessibility via keyboard.
//>>docs: http://api.jqueryui.com/slider/
//>>demos: http://jqueryui.com/slider/
//>>css.structure: ../../themes/base/core.css
//>>css.structure: ../../themes/base/slider.css
//>>css.theme: ../../themes/base/theme.css

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"./mouse\",
\t\t\t\"../keycode\",
\t\t\t\"../version\",
\t\t\t\"../widget\"
\t\t], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

return \$.widget( \"ui.slider\", \$.ui.mouse, {
\tversion: \"1.12.1\",
\twidgetEventPrefix: \"slide\",

\toptions: {
\t\tanimate: false,
\t\tclasses: {
\t\t\t\"ui-slider\": \"ui-corner-all\",
\t\t\t\"ui-slider-handle\": \"ui-corner-all\",

\t\t\t// Note: ui-widget-header isn't the most fittingly semantic framework class for this
\t\t\t// element, but worked best visually with a variety of themes
\t\t\t\"ui-slider-range\": \"ui-corner-all ui-widget-header\"
\t\t},
\t\tdistance: 0,
\t\tmax: 100,
\t\tmin: 0,
\t\torientation: \"horizontal\",
\t\trange: false,
\t\tstep: 1,
\t\tvalue: 0,
\t\tvalues: null,

\t\t// Callbacks
\t\tchange: null,
\t\tslide: null,
\t\tstart: null,
\t\tstop: null
\t},

\t// Number of pages in a slider
\t// (how many times can you page up/down to go through the whole range)
\tnumPages: 5,

\t_create: function() {
\t\tthis._keySliding = false;
\t\tthis._mouseSliding = false;
\t\tthis._animateOff = true;
\t\tthis._handleIndex = null;
\t\tthis._detectOrientation();
\t\tthis._mouseInit();
\t\tthis._calculateNewMax();

\t\tthis._addClass( \"ui-slider ui-slider-\" + this.orientation,
\t\t\t\"ui-widget ui-widget-content\" );

\t\tthis._refresh();

\t\tthis._animateOff = false;
\t},

\t_refresh: function() {
\t\tthis._createRange();
\t\tthis._createHandles();
\t\tthis._setupEvents();
\t\tthis._refreshValue();
\t},

\t_createHandles: function() {
\t\tvar i, handleCount,
\t\t\toptions = this.options,
\t\t\texistingHandles = this.element.find( \".ui-slider-handle\" ),
\t\t\thandle = \"<span tabindex='0'></span>\",
\t\t\thandles = [];

\t\thandleCount = ( options.values && options.values.length ) || 1;

\t\tif ( existingHandles.length > handleCount ) {
\t\t\texistingHandles.slice( handleCount ).remove();
\t\t\texistingHandles = existingHandles.slice( 0, handleCount );
\t\t}

\t\tfor ( i = existingHandles.length; i < handleCount; i++ ) {
\t\t\thandles.push( handle );
\t\t}

\t\tthis.handles = existingHandles.add( \$( handles.join( \"\" ) ).appendTo( this.element ) );

\t\tthis._addClass( this.handles, \"ui-slider-handle\", \"ui-state-default\" );

\t\tthis.handle = this.handles.eq( 0 );

\t\tthis.handles.each( function( i ) {
\t\t\t\$( this )
\t\t\t\t.data( \"ui-slider-handle-index\", i )
\t\t\t\t.attr( \"tabIndex\", 0 );
\t\t} );
\t},

\t_createRange: function() {
\t\tvar options = this.options;

\t\tif ( options.range ) {
\t\t\tif ( options.range === true ) {
\t\t\t\tif ( !options.values ) {
\t\t\t\t\toptions.values = [ this._valueMin(), this._valueMin() ];
\t\t\t\t} else if ( options.values.length && options.values.length !== 2 ) {
\t\t\t\t\toptions.values = [ options.values[ 0 ], options.values[ 0 ] ];
\t\t\t\t} else if ( \$.isArray( options.values ) ) {
\t\t\t\t\toptions.values = options.values.slice( 0 );
\t\t\t\t}
\t\t\t}

\t\t\tif ( !this.range || !this.range.length ) {
\t\t\t\tthis.range = \$( \"<div>\" )
\t\t\t\t\t.appendTo( this.element );

\t\t\t\tthis._addClass( this.range, \"ui-slider-range\" );
\t\t\t} else {
\t\t\t\tthis._removeClass( this.range, \"ui-slider-range-min ui-slider-range-max\" );

\t\t\t\t// Handle range switching from true to min/max
\t\t\t\tthis.range.css( {
\t\t\t\t\t\"left\": \"\",
\t\t\t\t\t\"bottom\": \"\"
\t\t\t\t} );
\t\t\t}
\t\t\tif ( options.range === \"min\" || options.range === \"max\" ) {
\t\t\t\tthis._addClass( this.range, \"ui-slider-range-\" + options.range );
\t\t\t}
\t\t} else {
\t\t\tif ( this.range ) {
\t\t\t\tthis.range.remove();
\t\t\t}
\t\t\tthis.range = null;
\t\t}
\t},

\t_setupEvents: function() {
\t\tthis._off( this.handles );
\t\tthis._on( this.handles, this._handleEvents );
\t\tthis._hoverable( this.handles );
\t\tthis._focusable( this.handles );
\t},

\t_destroy: function() {
\t\tthis.handles.remove();
\t\tif ( this.range ) {
\t\t\tthis.range.remove();
\t\t}

\t\tthis._mouseDestroy();
\t},

\t_mouseCapture: function( event ) {
\t\tvar position, normValue, distance, closestHandle, index, allowed, offset, mouseOverHandle,
\t\t\tthat = this,
\t\t\to = this.options;

\t\tif ( o.disabled ) {
\t\t\treturn false;
\t\t}

\t\tthis.elementSize = {
\t\t\twidth: this.element.outerWidth(),
\t\t\theight: this.element.outerHeight()
\t\t};
\t\tthis.elementOffset = this.element.offset();

\t\tposition = { x: event.pageX, y: event.pageY };
\t\tnormValue = this._normValueFromMouse( position );
\t\tdistance = this._valueMax() - this._valueMin() + 1;
\t\tthis.handles.each( function( i ) {
\t\t\tvar thisDistance = Math.abs( normValue - that.values( i ) );
\t\t\tif ( ( distance > thisDistance ) ||
\t\t\t\t( distance === thisDistance &&
\t\t\t\t\t( i === that._lastChangedValue || that.values( i ) === o.min ) ) ) {
\t\t\t\tdistance = thisDistance;
\t\t\t\tclosestHandle = \$( this );
\t\t\t\tindex = i;
\t\t\t}
\t\t} );

\t\tallowed = this._start( event, index );
\t\tif ( allowed === false ) {
\t\t\treturn false;
\t\t}
\t\tthis._mouseSliding = true;

\t\tthis._handleIndex = index;

\t\tthis._addClass( closestHandle, null, \"ui-state-active\" );
\t\tclosestHandle.trigger( \"focus\" );

\t\toffset = closestHandle.offset();
\t\tmouseOverHandle = !\$( event.target ).parents().addBack().is( \".ui-slider-handle\" );
\t\tthis._clickOffset = mouseOverHandle ? { left: 0, top: 0 } : {
\t\t\tleft: event.pageX - offset.left - ( closestHandle.width() / 2 ),
\t\t\ttop: event.pageY - offset.top -
\t\t\t\t( closestHandle.height() / 2 ) -
\t\t\t\t( parseInt( closestHandle.css( \"borderTopWidth\" ), 10 ) || 0 ) -
\t\t\t\t( parseInt( closestHandle.css( \"borderBottomWidth\" ), 10 ) || 0 ) +
\t\t\t\t( parseInt( closestHandle.css( \"marginTop\" ), 10 ) || 0 )
\t\t};

\t\tif ( !this.handles.hasClass( \"ui-state-hover\" ) ) {
\t\t\tthis._slide( event, index, normValue );
\t\t}
\t\tthis._animateOff = true;
\t\treturn true;
\t},

\t_mouseStart: function() {
\t\treturn true;
\t},

\t_mouseDrag: function( event ) {
\t\tvar position = { x: event.pageX, y: event.pageY },
\t\t\tnormValue = this._normValueFromMouse( position );

\t\tthis._slide( event, this._handleIndex, normValue );

\t\treturn false;
\t},

\t_mouseStop: function( event ) {
\t\tthis._removeClass( this.handles, null, \"ui-state-active\" );
\t\tthis._mouseSliding = false;

\t\tthis._stop( event, this._handleIndex );
\t\tthis._change( event, this._handleIndex );

\t\tthis._handleIndex = null;
\t\tthis._clickOffset = null;
\t\tthis._animateOff = false;

\t\treturn false;
\t},

\t_detectOrientation: function() {
\t\tthis.orientation = ( this.options.orientation === \"vertical\" ) ? \"vertical\" : \"horizontal\";
\t},

\t_normValueFromMouse: function( position ) {
\t\tvar pixelTotal,
\t\t\tpixelMouse,
\t\t\tpercentMouse,
\t\t\tvalueTotal,
\t\t\tvalueMouse;

\t\tif ( this.orientation === \"horizontal\" ) {
\t\t\tpixelTotal = this.elementSize.width;
\t\t\tpixelMouse = position.x - this.elementOffset.left -
\t\t\t\t( this._clickOffset ? this._clickOffset.left : 0 );
\t\t} else {
\t\t\tpixelTotal = this.elementSize.height;
\t\t\tpixelMouse = position.y - this.elementOffset.top -
\t\t\t\t( this._clickOffset ? this._clickOffset.top : 0 );
\t\t}

\t\tpercentMouse = ( pixelMouse / pixelTotal );
\t\tif ( percentMouse > 1 ) {
\t\t\tpercentMouse = 1;
\t\t}
\t\tif ( percentMouse < 0 ) {
\t\t\tpercentMouse = 0;
\t\t}
\t\tif ( this.orientation === \"vertical\" ) {
\t\t\tpercentMouse = 1 - percentMouse;
\t\t}

\t\tvalueTotal = this._valueMax() - this._valueMin();
\t\tvalueMouse = this._valueMin() + percentMouse * valueTotal;

\t\treturn this._trimAlignValue( valueMouse );
\t},

\t_uiHash: function( index, value, values ) {
\t\tvar uiHash = {
\t\t\thandle: this.handles[ index ],
\t\t\thandleIndex: index,
\t\t\tvalue: value !== undefined ? value : this.value()
\t\t};

\t\tif ( this._hasMultipleValues() ) {
\t\t\tuiHash.value = value !== undefined ? value : this.values( index );
\t\t\tuiHash.values = values || this.values();
\t\t}

\t\treturn uiHash;
\t},

\t_hasMultipleValues: function() {
\t\treturn this.options.values && this.options.values.length;
\t},

\t_start: function( event, index ) {
\t\treturn this._trigger( \"start\", event, this._uiHash( index ) );
\t},

\t_slide: function( event, index, newVal ) {
\t\tvar allowed, otherVal,
\t\t\tcurrentValue = this.value(),
\t\t\tnewValues = this.values();

\t\tif ( this._hasMultipleValues() ) {
\t\t\totherVal = this.values( index ? 0 : 1 );
\t\t\tcurrentValue = this.values( index );

\t\t\tif ( this.options.values.length === 2 && this.options.range === true ) {
\t\t\t\tnewVal =  index === 0 ? Math.min( otherVal, newVal ) : Math.max( otherVal, newVal );
\t\t\t}

\t\t\tnewValues[ index ] = newVal;
\t\t}

\t\tif ( newVal === currentValue ) {
\t\t\treturn;
\t\t}

\t\tallowed = this._trigger( \"slide\", event, this._uiHash( index, newVal, newValues ) );

\t\t// A slide can be canceled by returning false from the slide callback
\t\tif ( allowed === false ) {
\t\t\treturn;
\t\t}

\t\tif ( this._hasMultipleValues() ) {
\t\t\tthis.values( index, newVal );
\t\t} else {
\t\t\tthis.value( newVal );
\t\t}
\t},

\t_stop: function( event, index ) {
\t\tthis._trigger( \"stop\", event, this._uiHash( index ) );
\t},

\t_change: function( event, index ) {
\t\tif ( !this._keySliding && !this._mouseSliding ) {

\t\t\t//store the last changed value index for reference when handles overlap
\t\t\tthis._lastChangedValue = index;
\t\t\tthis._trigger( \"change\", event, this._uiHash( index ) );
\t\t}
\t},

\tvalue: function( newValue ) {
\t\tif ( arguments.length ) {
\t\t\tthis.options.value = this._trimAlignValue( newValue );
\t\t\tthis._refreshValue();
\t\t\tthis._change( null, 0 );
\t\t\treturn;
\t\t}

\t\treturn this._value();
\t},

\tvalues: function( index, newValue ) {
\t\tvar vals,
\t\t\tnewValues,
\t\t\ti;

\t\tif ( arguments.length > 1 ) {
\t\t\tthis.options.values[ index ] = this._trimAlignValue( newValue );
\t\t\tthis._refreshValue();
\t\t\tthis._change( null, index );
\t\t\treturn;
\t\t}

\t\tif ( arguments.length ) {
\t\t\tif ( \$.isArray( arguments[ 0 ] ) ) {
\t\t\t\tvals = this.options.values;
\t\t\t\tnewValues = arguments[ 0 ];
\t\t\t\tfor ( i = 0; i < vals.length; i += 1 ) {
\t\t\t\t\tvals[ i ] = this._trimAlignValue( newValues[ i ] );
\t\t\t\t\tthis._change( null, i );
\t\t\t\t}
\t\t\t\tthis._refreshValue();
\t\t\t} else {
\t\t\t\tif ( this._hasMultipleValues() ) {
\t\t\t\t\treturn this._values( index );
\t\t\t\t} else {
\t\t\t\t\treturn this.value();
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\treturn this._values();
\t\t}
\t},

\t_setOption: function( key, value ) {
\t\tvar i,
\t\t\tvalsLength = 0;

\t\tif ( key === \"range\" && this.options.range === true ) {
\t\t\tif ( value === \"min\" ) {
\t\t\t\tthis.options.value = this._values( 0 );
\t\t\t\tthis.options.values = null;
\t\t\t} else if ( value === \"max\" ) {
\t\t\t\tthis.options.value = this._values( this.options.values.length - 1 );
\t\t\t\tthis.options.values = null;
\t\t\t}
\t\t}

\t\tif ( \$.isArray( this.options.values ) ) {
\t\t\tvalsLength = this.options.values.length;
\t\t}

\t\tthis._super( key, value );

\t\tswitch ( key ) {
\t\t\tcase \"orientation\":
\t\t\t\tthis._detectOrientation();
\t\t\t\tthis._removeClass( \"ui-slider-horizontal ui-slider-vertical\" )
\t\t\t\t\t._addClass( \"ui-slider-\" + this.orientation );
\t\t\t\tthis._refreshValue();
\t\t\t\tif ( this.options.range ) {
\t\t\t\t\tthis._refreshRange( value );
\t\t\t\t}

\t\t\t\t// Reset positioning from previous orientation
\t\t\t\tthis.handles.css( value === \"horizontal\" ? \"bottom\" : \"left\", \"\" );
\t\t\t\tbreak;
\t\t\tcase \"value\":
\t\t\t\tthis._animateOff = true;
\t\t\t\tthis._refreshValue();
\t\t\t\tthis._change( null, 0 );
\t\t\t\tthis._animateOff = false;
\t\t\t\tbreak;
\t\t\tcase \"values\":
\t\t\t\tthis._animateOff = true;
\t\t\t\tthis._refreshValue();

\t\t\t\t// Start from the last handle to prevent unreachable handles (#9046)
\t\t\t\tfor ( i = valsLength - 1; i >= 0; i-- ) {
\t\t\t\t\tthis._change( null, i );
\t\t\t\t}
\t\t\t\tthis._animateOff = false;
\t\t\t\tbreak;
\t\t\tcase \"step\":
\t\t\tcase \"min\":
\t\t\tcase \"max\":
\t\t\t\tthis._animateOff = true;
\t\t\t\tthis._calculateNewMax();
\t\t\t\tthis._refreshValue();
\t\t\t\tthis._animateOff = false;
\t\t\t\tbreak;
\t\t\tcase \"range\":
\t\t\t\tthis._animateOff = true;
\t\t\t\tthis._refresh();
\t\t\t\tthis._animateOff = false;
\t\t\t\tbreak;
\t\t}
\t},

\t_setOptionDisabled: function( value ) {
\t\tthis._super( value );

\t\tthis._toggleClass( null, \"ui-state-disabled\", !!value );
\t},

\t//internal value getter
\t// _value() returns value trimmed by min and max, aligned by step
\t_value: function() {
\t\tvar val = this.options.value;
\t\tval = this._trimAlignValue( val );

\t\treturn val;
\t},

\t//internal values getter
\t// _values() returns array of values trimmed by min and max, aligned by step
\t// _values( index ) returns single value trimmed by min and max, aligned by step
\t_values: function( index ) {
\t\tvar val,
\t\t\tvals,
\t\t\ti;

\t\tif ( arguments.length ) {
\t\t\tval = this.options.values[ index ];
\t\t\tval = this._trimAlignValue( val );

\t\t\treturn val;
\t\t} else if ( this._hasMultipleValues() ) {

\t\t\t// .slice() creates a copy of the array
\t\t\t// this copy gets trimmed by min and max and then returned
\t\t\tvals = this.options.values.slice();
\t\t\tfor ( i = 0; i < vals.length; i += 1 ) {
\t\t\t\tvals[ i ] = this._trimAlignValue( vals[ i ] );
\t\t\t}

\t\t\treturn vals;
\t\t} else {
\t\t\treturn [];
\t\t}
\t},

\t// Returns the step-aligned value that val is closest to, between (inclusive) min and max
\t_trimAlignValue: function( val ) {
\t\tif ( val <= this._valueMin() ) {
\t\t\treturn this._valueMin();
\t\t}
\t\tif ( val >= this._valueMax() ) {
\t\t\treturn this._valueMax();
\t\t}
\t\tvar step = ( this.options.step > 0 ) ? this.options.step : 1,
\t\t\tvalModStep = ( val - this._valueMin() ) % step,
\t\t\talignValue = val - valModStep;

\t\tif ( Math.abs( valModStep ) * 2 >= step ) {
\t\t\talignValue += ( valModStep > 0 ) ? step : ( -step );
\t\t}

\t\t// Since JavaScript has problems with large floats, round
\t\t// the final value to 5 digits after the decimal point (see #4124)
\t\treturn parseFloat( alignValue.toFixed( 5 ) );
\t},

\t_calculateNewMax: function() {
\t\tvar max = this.options.max,
\t\t\tmin = this._valueMin(),
\t\t\tstep = this.options.step,
\t\t\taboveMin = Math.round( ( max - min ) / step ) * step;
\t\tmax = aboveMin + min;
\t\tif ( max > this.options.max ) {

\t\t\t//If max is not divisible by step, rounding off may increase its value
\t\t\tmax -= step;
\t\t}
\t\tthis.max = parseFloat( max.toFixed( this._precision() ) );
\t},

\t_precision: function() {
\t\tvar precision = this._precisionOf( this.options.step );
\t\tif ( this.options.min !== null ) {
\t\t\tprecision = Math.max( precision, this._precisionOf( this.options.min ) );
\t\t}
\t\treturn precision;
\t},

\t_precisionOf: function( num ) {
\t\tvar str = num.toString(),
\t\t\tdecimal = str.indexOf( \".\" );
\t\treturn decimal === -1 ? 0 : str.length - decimal - 1;
\t},

\t_valueMin: function() {
\t\treturn this.options.min;
\t},

\t_valueMax: function() {
\t\treturn this.max;
\t},

\t_refreshRange: function( orientation ) {
\t\tif ( orientation === \"vertical\" ) {
\t\t\tthis.range.css( { \"width\": \"\", \"left\": \"\" } );
\t\t}
\t\tif ( orientation === \"horizontal\" ) {
\t\t\tthis.range.css( { \"height\": \"\", \"bottom\": \"\" } );
\t\t}
\t},

\t_refreshValue: function() {
\t\tvar lastValPercent, valPercent, value, valueMin, valueMax,
\t\t\toRange = this.options.range,
\t\t\to = this.options,
\t\t\tthat = this,
\t\t\tanimate = ( !this._animateOff ) ? o.animate : false,
\t\t\t_set = {};

\t\tif ( this._hasMultipleValues() ) {
\t\t\tthis.handles.each( function( i ) {
\t\t\t\tvalPercent = ( that.values( i ) - that._valueMin() ) / ( that._valueMax() -
\t\t\t\t\tthat._valueMin() ) * 100;
\t\t\t\t_set[ that.orientation === \"horizontal\" ? \"left\" : \"bottom\" ] = valPercent + \"%\";
\t\t\t\t\$( this ).stop( 1, 1 )[ animate ? \"animate\" : \"css\" ]( _set, o.animate );
\t\t\t\tif ( that.options.range === true ) {
\t\t\t\t\tif ( that.orientation === \"horizontal\" ) {
\t\t\t\t\t\tif ( i === 0 ) {
\t\t\t\t\t\t\tthat.range.stop( 1, 1 )[ animate ? \"animate\" : \"css\" ]( {
\t\t\t\t\t\t\t\tleft: valPercent + \"%\"
\t\t\t\t\t\t\t}, o.animate );
\t\t\t\t\t\t}
\t\t\t\t\t\tif ( i === 1 ) {
\t\t\t\t\t\t\tthat.range[ animate ? \"animate\" : \"css\" ]( {
\t\t\t\t\t\t\t\twidth: ( valPercent - lastValPercent ) + \"%\"
\t\t\t\t\t\t\t}, {
\t\t\t\t\t\t\t\tqueue: false,
\t\t\t\t\t\t\t\tduration: o.animate
\t\t\t\t\t\t\t} );
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\tif ( i === 0 ) {
\t\t\t\t\t\t\tthat.range.stop( 1, 1 )[ animate ? \"animate\" : \"css\" ]( {
\t\t\t\t\t\t\t\tbottom: ( valPercent ) + \"%\"
\t\t\t\t\t\t\t}, o.animate );
\t\t\t\t\t\t}
\t\t\t\t\t\tif ( i === 1 ) {
\t\t\t\t\t\t\tthat.range[ animate ? \"animate\" : \"css\" ]( {
\t\t\t\t\t\t\t\theight: ( valPercent - lastValPercent ) + \"%\"
\t\t\t\t\t\t\t}, {
\t\t\t\t\t\t\t\tqueue: false,
\t\t\t\t\t\t\t\tduration: o.animate
\t\t\t\t\t\t\t} );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tlastValPercent = valPercent;
\t\t\t} );
\t\t} else {
\t\t\tvalue = this.value();
\t\t\tvalueMin = this._valueMin();
\t\t\tvalueMax = this._valueMax();
\t\t\tvalPercent = ( valueMax !== valueMin ) ?
\t\t\t\t\t( value - valueMin ) / ( valueMax - valueMin ) * 100 :
\t\t\t\t\t0;
\t\t\t_set[ this.orientation === \"horizontal\" ? \"left\" : \"bottom\" ] = valPercent + \"%\";
\t\t\tthis.handle.stop( 1, 1 )[ animate ? \"animate\" : \"css\" ]( _set, o.animate );

\t\t\tif ( oRange === \"min\" && this.orientation === \"horizontal\" ) {
\t\t\t\tthis.range.stop( 1, 1 )[ animate ? \"animate\" : \"css\" ]( {
\t\t\t\t\twidth: valPercent + \"%\"
\t\t\t\t}, o.animate );
\t\t\t}
\t\t\tif ( oRange === \"max\" && this.orientation === \"horizontal\" ) {
\t\t\t\tthis.range.stop( 1, 1 )[ animate ? \"animate\" : \"css\" ]( {
\t\t\t\t\twidth: ( 100 - valPercent ) + \"%\"
\t\t\t\t}, o.animate );
\t\t\t}
\t\t\tif ( oRange === \"min\" && this.orientation === \"vertical\" ) {
\t\t\t\tthis.range.stop( 1, 1 )[ animate ? \"animate\" : \"css\" ]( {
\t\t\t\t\theight: valPercent + \"%\"
\t\t\t\t}, o.animate );
\t\t\t}
\t\t\tif ( oRange === \"max\" && this.orientation === \"vertical\" ) {
\t\t\t\tthis.range.stop( 1, 1 )[ animate ? \"animate\" : \"css\" ]( {
\t\t\t\t\theight: ( 100 - valPercent ) + \"%\"
\t\t\t\t}, o.animate );
\t\t\t}
\t\t}
\t},

\t_handleEvents: {
\t\tkeydown: function( event ) {
\t\t\tvar allowed, curVal, newVal, step,
\t\t\t\tindex = \$( event.target ).data( \"ui-slider-handle-index\" );

\t\t\tswitch ( event.keyCode ) {
\t\t\t\tcase \$.ui.keyCode.HOME:
\t\t\t\tcase \$.ui.keyCode.END:
\t\t\t\tcase \$.ui.keyCode.PAGE_UP:
\t\t\t\tcase \$.ui.keyCode.PAGE_DOWN:
\t\t\t\tcase \$.ui.keyCode.UP:
\t\t\t\tcase \$.ui.keyCode.RIGHT:
\t\t\t\tcase \$.ui.keyCode.DOWN:
\t\t\t\tcase \$.ui.keyCode.LEFT:
\t\t\t\t\tevent.preventDefault();
\t\t\t\t\tif ( !this._keySliding ) {
\t\t\t\t\t\tthis._keySliding = true;
\t\t\t\t\t\tthis._addClass( \$( event.target ), null, \"ui-state-active\" );
\t\t\t\t\t\tallowed = this._start( event, index );
\t\t\t\t\t\tif ( allowed === false ) {
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t}

\t\t\tstep = this.options.step;
\t\t\tif ( this._hasMultipleValues() ) {
\t\t\t\tcurVal = newVal = this.values( index );
\t\t\t} else {
\t\t\t\tcurVal = newVal = this.value();
\t\t\t}

\t\t\tswitch ( event.keyCode ) {
\t\t\t\tcase \$.ui.keyCode.HOME:
\t\t\t\t\tnewVal = this._valueMin();
\t\t\t\t\tbreak;
\t\t\t\tcase \$.ui.keyCode.END:
\t\t\t\t\tnewVal = this._valueMax();
\t\t\t\t\tbreak;
\t\t\t\tcase \$.ui.keyCode.PAGE_UP:
\t\t\t\t\tnewVal = this._trimAlignValue(
\t\t\t\t\t\tcurVal + ( ( this._valueMax() - this._valueMin() ) / this.numPages )
\t\t\t\t\t);
\t\t\t\t\tbreak;
\t\t\t\tcase \$.ui.keyCode.PAGE_DOWN:
\t\t\t\t\tnewVal = this._trimAlignValue(
\t\t\t\t\t\tcurVal - ( ( this._valueMax() - this._valueMin() ) / this.numPages ) );
\t\t\t\t\tbreak;
\t\t\t\tcase \$.ui.keyCode.UP:
\t\t\t\tcase \$.ui.keyCode.RIGHT:
\t\t\t\t\tif ( curVal === this._valueMax() ) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tnewVal = this._trimAlignValue( curVal + step );
\t\t\t\t\tbreak;
\t\t\t\tcase \$.ui.keyCode.DOWN:
\t\t\t\tcase \$.ui.keyCode.LEFT:
\t\t\t\t\tif ( curVal === this._valueMin() ) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tnewVal = this._trimAlignValue( curVal - step );
\t\t\t\t\tbreak;
\t\t\t}

\t\t\tthis._slide( event, index, newVal );
\t\t},
\t\tkeyup: function( event ) {
\t\t\tvar index = \$( event.target ).data( \"ui-slider-handle-index\" );

\t\t\tif ( this._keySliding ) {
\t\t\t\tthis._keySliding = false;
\t\t\t\tthis._stop( event, index );
\t\t\t\tthis._change( event, index );
\t\t\t\tthis._removeClass( \$( event.target ), null, \"ui-state-active\" );
\t\t\t}
\t\t}
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/slider.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/slider.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/slider.js");
    }
}
