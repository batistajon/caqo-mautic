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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effect.js */
class __TwigTemplate_96c44d672caa8b418ab140f0276de8d0c3d40c544a997ec262508f8e079bb06e extends Template
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
 * jQuery UI Effects 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Effects Core
//>>group: Effects
// jscs:disable maximumLineLength
//>>description: Extends the internal jQuery effects. Includes morphing and easing. Required by all other effects.
// jscs:enable maximumLineLength
//>>docs: http://api.jqueryui.com/category/effects-core/
//>>demos: http://jqueryui.com/effect/

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"jquery\", \"./version\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

var dataSpace = \"ui-effects-\",
\tdataSpaceStyle = \"ui-effects-style\",
\tdataSpaceAnimated = \"ui-effects-animated\",

\t// Create a local jQuery because jQuery Color relies on it and the
\t// global may not exist with AMD and a custom build (#10199)
\tjQuery = \$;

\$.effects = {
\teffect: {}
};

/*!
 * jQuery Color Animations v2.1.2
 * https://github.com/jquery/jquery-color
 *
 * Copyright 2014 jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * Date: Wed Jan 16 08:47:09 2013 -0600
 */
( function( jQuery, undefined ) {

\tvar stepHooks = \"backgroundColor borderBottomColor borderLeftColor borderRightColor \" +
\t\t\"borderTopColor color columnRuleColor outlineColor textDecorationColor textEmphasisColor\",

\t// Plusequals test for += 100 -= 100
\trplusequals = /^([\\-+])=\\s*(\\d+\\.?\\d*)/,

\t// A set of RE's that can match strings and generate color tuples.
\tstringParsers = [ {
\t\t\tre: /rgba?\\(\\s*(\\d{1,3})\\s*,\\s*(\\d{1,3})\\s*,\\s*(\\d{1,3})\\s*(?:,\\s*(\\d?(?:\\.\\d+)?)\\s*)?\\)/,
\t\t\tparse: function( execResult ) {
\t\t\t\treturn [
\t\t\t\t\texecResult[ 1 ],
\t\t\t\t\texecResult[ 2 ],
\t\t\t\t\texecResult[ 3 ],
\t\t\t\t\texecResult[ 4 ]
\t\t\t\t];
\t\t\t}
\t\t}, {
\t\t\tre: /rgba?\\(\\s*(\\d+(?:\\.\\d+)?)\\%\\s*,\\s*(\\d+(?:\\.\\d+)?)\\%\\s*,\\s*(\\d+(?:\\.\\d+)?)\\%\\s*(?:,\\s*(\\d?(?:\\.\\d+)?)\\s*)?\\)/,
\t\t\tparse: function( execResult ) {
\t\t\t\treturn [
\t\t\t\t\texecResult[ 1 ] * 2.55,
\t\t\t\t\texecResult[ 2 ] * 2.55,
\t\t\t\t\texecResult[ 3 ] * 2.55,
\t\t\t\t\texecResult[ 4 ]
\t\t\t\t];
\t\t\t}
\t\t}, {

\t\t\t// This regex ignores A-F because it's compared against an already lowercased string
\t\t\tre: /#([a-f0-9]{2})([a-f0-9]{2})([a-f0-9]{2})/,
\t\t\tparse: function( execResult ) {
\t\t\t\treturn [
\t\t\t\t\tparseInt( execResult[ 1 ], 16 ),
\t\t\t\t\tparseInt( execResult[ 2 ], 16 ),
\t\t\t\t\tparseInt( execResult[ 3 ], 16 )
\t\t\t\t];
\t\t\t}
\t\t}, {

\t\t\t// This regex ignores A-F because it's compared against an already lowercased string
\t\t\tre: /#([a-f0-9])([a-f0-9])([a-f0-9])/,
\t\t\tparse: function( execResult ) {
\t\t\t\treturn [
\t\t\t\t\tparseInt( execResult[ 1 ] + execResult[ 1 ], 16 ),
\t\t\t\t\tparseInt( execResult[ 2 ] + execResult[ 2 ], 16 ),
\t\t\t\t\tparseInt( execResult[ 3 ] + execResult[ 3 ], 16 )
\t\t\t\t];
\t\t\t}
\t\t}, {
\t\t\tre: /hsla?\\(\\s*(\\d+(?:\\.\\d+)?)\\s*,\\s*(\\d+(?:\\.\\d+)?)\\%\\s*,\\s*(\\d+(?:\\.\\d+)?)\\%\\s*(?:,\\s*(\\d?(?:\\.\\d+)?)\\s*)?\\)/,
\t\t\tspace: \"hsla\",
\t\t\tparse: function( execResult ) {
\t\t\t\treturn [
\t\t\t\t\texecResult[ 1 ],
\t\t\t\t\texecResult[ 2 ] / 100,
\t\t\t\t\texecResult[ 3 ] / 100,
\t\t\t\t\texecResult[ 4 ]
\t\t\t\t];
\t\t\t}
\t\t} ],

\t// JQuery.Color( )
\tcolor = jQuery.Color = function( color, green, blue, alpha ) {
\t\treturn new jQuery.Color.fn.parse( color, green, blue, alpha );
\t},
\tspaces = {
\t\trgba: {
\t\t\tprops: {
\t\t\t\tred: {
\t\t\t\t\tidx: 0,
\t\t\t\t\ttype: \"byte\"
\t\t\t\t},
\t\t\t\tgreen: {
\t\t\t\t\tidx: 1,
\t\t\t\t\ttype: \"byte\"
\t\t\t\t},
\t\t\t\tblue: {
\t\t\t\t\tidx: 2,
\t\t\t\t\ttype: \"byte\"
\t\t\t\t}
\t\t\t}
\t\t},

\t\thsla: {
\t\t\tprops: {
\t\t\t\thue: {
\t\t\t\t\tidx: 0,
\t\t\t\t\ttype: \"degrees\"
\t\t\t\t},
\t\t\t\tsaturation: {
\t\t\t\t\tidx: 1,
\t\t\t\t\ttype: \"percent\"
\t\t\t\t},
\t\t\t\tlightness: {
\t\t\t\t\tidx: 2,
\t\t\t\t\ttype: \"percent\"
\t\t\t\t}
\t\t\t}
\t\t}
\t},
\tpropTypes = {
\t\t\"byte\": {
\t\t\tfloor: true,
\t\t\tmax: 255
\t\t},
\t\t\"percent\": {
\t\t\tmax: 1
\t\t},
\t\t\"degrees\": {
\t\t\tmod: 360,
\t\t\tfloor: true
\t\t}
\t},
\tsupport = color.support = {},

\t// Element for support tests
\tsupportElem = jQuery( \"<p>\" )[ 0 ],

\t// Colors = jQuery.Color.names
\tcolors,

\t// Local aliases of functions called often
\teach = jQuery.each;

// Determine rgba support immediately
supportElem.style.cssText = \"background-color:rgba(1,1,1,.5)\";
support.rgba = supportElem.style.backgroundColor.indexOf( \"rgba\" ) > -1;

// Define cache name and alpha properties
// for rgba and hsla spaces
each( spaces, function( spaceName, space ) {
\tspace.cache = \"_\" + spaceName;
\tspace.props.alpha = {
\t\tidx: 3,
\t\ttype: \"percent\",
\t\tdef: 1
\t};
} );

function clamp( value, prop, allowEmpty ) {
\tvar type = propTypes[ prop.type ] || {};

\tif ( value == null ) {
\t\treturn ( allowEmpty || !prop.def ) ? null : prop.def;
\t}

\t// ~~ is an short way of doing floor for positive numbers
\tvalue = type.floor ? ~~value : parseFloat( value );

\t// IE will pass in empty strings as value for alpha,
\t// which will hit this case
\tif ( isNaN( value ) ) {
\t\treturn prop.def;
\t}

\tif ( type.mod ) {

\t\t// We add mod before modding to make sure that negatives values
\t\t// get converted properly: -10 -> 350
\t\treturn ( value + type.mod ) % type.mod;
\t}

\t// For now all property types without mod have min and max
\treturn 0 > value ? 0 : type.max < value ? type.max : value;
}

function stringParse( string ) {
\tvar inst = color(),
\t\trgba = inst._rgba = [];

\tstring = string.toLowerCase();

\teach( stringParsers, function( i, parser ) {
\t\tvar parsed,
\t\t\tmatch = parser.re.exec( string ),
\t\t\tvalues = match && parser.parse( match ),
\t\t\tspaceName = parser.space || \"rgba\";

\t\tif ( values ) {
\t\t\tparsed = inst[ spaceName ]( values );

\t\t\t// If this was an rgba parse the assignment might happen twice
\t\t\t// oh well....
\t\t\tinst[ spaces[ spaceName ].cache ] = parsed[ spaces[ spaceName ].cache ];
\t\t\trgba = inst._rgba = parsed._rgba;

\t\t\t// Exit each( stringParsers ) here because we matched
\t\t\treturn false;
\t\t}
\t} );

\t// Found a stringParser that handled it
\tif ( rgba.length ) {

\t\t// If this came from a parsed string, force \"transparent\" when alpha is 0
\t\t// chrome, (and maybe others) return \"transparent\" as rgba(0,0,0,0)
\t\tif ( rgba.join() === \"0,0,0,0\" ) {
\t\t\tjQuery.extend( rgba, colors.transparent );
\t\t}
\t\treturn inst;
\t}

\t// Named colors
\treturn colors[ string ];
}

color.fn = jQuery.extend( color.prototype, {
\tparse: function( red, green, blue, alpha ) {
\t\tif ( red === undefined ) {
\t\t\tthis._rgba = [ null, null, null, null ];
\t\t\treturn this;
\t\t}
\t\tif ( red.jquery || red.nodeType ) {
\t\t\tred = jQuery( red ).css( green );
\t\t\tgreen = undefined;
\t\t}

\t\tvar inst = this,
\t\t\ttype = jQuery.type( red ),
\t\t\trgba = this._rgba = [];

\t\t// More than 1 argument specified - assume ( red, green, blue, alpha )
\t\tif ( green !== undefined ) {
\t\t\tred = [ red, green, blue, alpha ];
\t\t\ttype = \"array\";
\t\t}

\t\tif ( type === \"string\" ) {
\t\t\treturn this.parse( stringParse( red ) || colors._default );
\t\t}

\t\tif ( type === \"array\" ) {
\t\t\teach( spaces.rgba.props, function( key, prop ) {
\t\t\t\trgba[ prop.idx ] = clamp( red[ prop.idx ], prop );
\t\t\t} );
\t\t\treturn this;
\t\t}

\t\tif ( type === \"object\" ) {
\t\t\tif ( red instanceof color ) {
\t\t\t\teach( spaces, function( spaceName, space ) {
\t\t\t\t\tif ( red[ space.cache ] ) {
\t\t\t\t\t\tinst[ space.cache ] = red[ space.cache ].slice();
\t\t\t\t\t}
\t\t\t\t} );
\t\t\t} else {
\t\t\t\teach( spaces, function( spaceName, space ) {
\t\t\t\t\tvar cache = space.cache;
\t\t\t\t\teach( space.props, function( key, prop ) {

\t\t\t\t\t\t// If the cache doesn't exist, and we know how to convert
\t\t\t\t\t\tif ( !inst[ cache ] && space.to ) {

\t\t\t\t\t\t\t// If the value was null, we don't need to copy it
\t\t\t\t\t\t\t// if the key was alpha, we don't need to copy it either
\t\t\t\t\t\t\tif ( key === \"alpha\" || red[ key ] == null ) {
\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tinst[ cache ] = space.to( inst._rgba );
\t\t\t\t\t\t}

\t\t\t\t\t\t// This is the only case where we allow nulls for ALL properties.
\t\t\t\t\t\t// call clamp with alwaysAllowEmpty
\t\t\t\t\t\tinst[ cache ][ prop.idx ] = clamp( red[ key ], prop, true );
\t\t\t\t\t} );

\t\t\t\t\t// Everything defined but alpha?
\t\t\t\t\tif ( inst[ cache ] &&
\t\t\t\t\t\t\tjQuery.inArray( null, inst[ cache ].slice( 0, 3 ) ) < 0 ) {

\t\t\t\t\t\t// Use the default of 1
\t\t\t\t\t\tinst[ cache ][ 3 ] = 1;
\t\t\t\t\t\tif ( space.from ) {
\t\t\t\t\t\t\tinst._rgba = space.from( inst[ cache ] );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} );
\t\t\t}
\t\t\treturn this;
\t\t}
\t},
\tis: function( compare ) {
\t\tvar is = color( compare ),
\t\t\tsame = true,
\t\t\tinst = this;

\t\teach( spaces, function( _, space ) {
\t\t\tvar localCache,
\t\t\t\tisCache = is[ space.cache ];
\t\t\tif ( isCache ) {
\t\t\t\tlocalCache = inst[ space.cache ] || space.to && space.to( inst._rgba ) || [];
\t\t\t\teach( space.props, function( _, prop ) {
\t\t\t\t\tif ( isCache[ prop.idx ] != null ) {
\t\t\t\t\t\tsame = ( isCache[ prop.idx ] === localCache[ prop.idx ] );
\t\t\t\t\t\treturn same;
\t\t\t\t\t}
\t\t\t\t} );
\t\t\t}
\t\t\treturn same;
\t\t} );
\t\treturn same;
\t},
\t_space: function() {
\t\tvar used = [],
\t\t\tinst = this;
\t\teach( spaces, function( spaceName, space ) {
\t\t\tif ( inst[ space.cache ] ) {
\t\t\t\tused.push( spaceName );
\t\t\t}
\t\t} );
\t\treturn used.pop();
\t},
\ttransition: function( other, distance ) {
\t\tvar end = color( other ),
\t\t\tspaceName = end._space(),
\t\t\tspace = spaces[ spaceName ],
\t\t\tstartColor = this.alpha() === 0 ? color( \"transparent\" ) : this,
\t\t\tstart = startColor[ space.cache ] || space.to( startColor._rgba ),
\t\t\tresult = start.slice();

\t\tend = end[ space.cache ];
\t\teach( space.props, function( key, prop ) {
\t\t\tvar index = prop.idx,
\t\t\t\tstartValue = start[ index ],
\t\t\t\tendValue = end[ index ],
\t\t\t\ttype = propTypes[ prop.type ] || {};

\t\t\t// If null, don't override start value
\t\t\tif ( endValue === null ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// If null - use end
\t\t\tif ( startValue === null ) {
\t\t\t\tresult[ index ] = endValue;
\t\t\t} else {
\t\t\t\tif ( type.mod ) {
\t\t\t\t\tif ( endValue - startValue > type.mod / 2 ) {
\t\t\t\t\t\tstartValue += type.mod;
\t\t\t\t\t} else if ( startValue - endValue > type.mod / 2 ) {
\t\t\t\t\t\tstartValue -= type.mod;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tresult[ index ] = clamp( ( endValue - startValue ) * distance + startValue, prop );
\t\t\t}
\t\t} );
\t\treturn this[ spaceName ]( result );
\t},
\tblend: function( opaque ) {

\t\t// If we are already opaque - return ourself
\t\tif ( this._rgba[ 3 ] === 1 ) {
\t\t\treturn this;
\t\t}

\t\tvar rgb = this._rgba.slice(),
\t\t\ta = rgb.pop(),
\t\t\tblend = color( opaque )._rgba;

\t\treturn color( jQuery.map( rgb, function( v, i ) {
\t\t\treturn ( 1 - a ) * blend[ i ] + a * v;
\t\t} ) );
\t},
\ttoRgbaString: function() {
\t\tvar prefix = \"rgba(\",
\t\t\trgba = jQuery.map( this._rgba, function( v, i ) {
\t\t\t\treturn v == null ? ( i > 2 ? 1 : 0 ) : v;
\t\t\t} );

\t\tif ( rgba[ 3 ] === 1 ) {
\t\t\trgba.pop();
\t\t\tprefix = \"rgb(\";
\t\t}

\t\treturn prefix + rgba.join() + \")\";
\t},
\ttoHslaString: function() {
\t\tvar prefix = \"hsla(\",
\t\t\thsla = jQuery.map( this.hsla(), function( v, i ) {
\t\t\t\tif ( v == null ) {
\t\t\t\t\tv = i > 2 ? 1 : 0;
\t\t\t\t}

\t\t\t\t// Catch 1 and 2
\t\t\t\tif ( i && i < 3 ) {
\t\t\t\t\tv = Math.round( v * 100 ) + \"%\";
\t\t\t\t}
\t\t\t\treturn v;
\t\t\t} );

\t\tif ( hsla[ 3 ] === 1 ) {
\t\t\thsla.pop();
\t\t\tprefix = \"hsl(\";
\t\t}
\t\treturn prefix + hsla.join() + \")\";
\t},
\ttoHexString: function( includeAlpha ) {
\t\tvar rgba = this._rgba.slice(),
\t\t\talpha = rgba.pop();

\t\tif ( includeAlpha ) {
\t\t\trgba.push( ~~( alpha * 255 ) );
\t\t}

\t\treturn \"#\" + jQuery.map( rgba, function( v ) {

\t\t\t// Default to 0 when nulls exist
\t\t\tv = ( v || 0 ).toString( 16 );
\t\t\treturn v.length === 1 ? \"0\" + v : v;
\t\t} ).join( \"\" );
\t},
\ttoString: function() {
\t\treturn this._rgba[ 3 ] === 0 ? \"transparent\" : this.toRgbaString();
\t}
} );
color.fn.parse.prototype = color.fn;

// Hsla conversions adapted from:
// https://code.google.com/p/maashaack/source/browse/packages/graphics/trunk/src/graphics/colors/HUE2RGB.as?r=5021

function hue2rgb( p, q, h ) {
\th = ( h + 1 ) % 1;
\tif ( h * 6 < 1 ) {
\t\treturn p + ( q - p ) * h * 6;
\t}
\tif ( h * 2 < 1 ) {
\t\treturn q;
\t}
\tif ( h * 3 < 2 ) {
\t\treturn p + ( q - p ) * ( ( 2 / 3 ) - h ) * 6;
\t}
\treturn p;
}

spaces.hsla.to = function( rgba ) {
\tif ( rgba[ 0 ] == null || rgba[ 1 ] == null || rgba[ 2 ] == null ) {
\t\treturn [ null, null, null, rgba[ 3 ] ];
\t}
\tvar r = rgba[ 0 ] / 255,
\t\tg = rgba[ 1 ] / 255,
\t\tb = rgba[ 2 ] / 255,
\t\ta = rgba[ 3 ],
\t\tmax = Math.max( r, g, b ),
\t\tmin = Math.min( r, g, b ),
\t\tdiff = max - min,
\t\tadd = max + min,
\t\tl = add * 0.5,
\t\th, s;

\tif ( min === max ) {
\t\th = 0;
\t} else if ( r === max ) {
\t\th = ( 60 * ( g - b ) / diff ) + 360;
\t} else if ( g === max ) {
\t\th = ( 60 * ( b - r ) / diff ) + 120;
\t} else {
\t\th = ( 60 * ( r - g ) / diff ) + 240;
\t}

\t// Chroma (diff) == 0 means greyscale which, by definition, saturation = 0%
\t// otherwise, saturation is based on the ratio of chroma (diff) to lightness (add)
\tif ( diff === 0 ) {
\t\ts = 0;
\t} else if ( l <= 0.5 ) {
\t\ts = diff / add;
\t} else {
\t\ts = diff / ( 2 - add );
\t}
\treturn [ Math.round( h ) % 360, s, l, a == null ? 1 : a ];
};

spaces.hsla.from = function( hsla ) {
\tif ( hsla[ 0 ] == null || hsla[ 1 ] == null || hsla[ 2 ] == null ) {
\t\treturn [ null, null, null, hsla[ 3 ] ];
\t}
\tvar h = hsla[ 0 ] / 360,
\t\ts = hsla[ 1 ],
\t\tl = hsla[ 2 ],
\t\ta = hsla[ 3 ],
\t\tq = l <= 0.5 ? l * ( 1 + s ) : l + s - l * s,
\t\tp = 2 * l - q;

\treturn [
\t\tMath.round( hue2rgb( p, q, h + ( 1 / 3 ) ) * 255 ),
\t\tMath.round( hue2rgb( p, q, h ) * 255 ),
\t\tMath.round( hue2rgb( p, q, h - ( 1 / 3 ) ) * 255 ),
\t\ta
\t];
};

each( spaces, function( spaceName, space ) {
\tvar props = space.props,
\t\tcache = space.cache,
\t\tto = space.to,
\t\tfrom = space.from;

\t// Makes rgba() and hsla()
\tcolor.fn[ spaceName ] = function( value ) {

\t\t// Generate a cache for this space if it doesn't exist
\t\tif ( to && !this[ cache ] ) {
\t\t\tthis[ cache ] = to( this._rgba );
\t\t}
\t\tif ( value === undefined ) {
\t\t\treturn this[ cache ].slice();
\t\t}

\t\tvar ret,
\t\t\ttype = jQuery.type( value ),
\t\t\tarr = ( type === \"array\" || type === \"object\" ) ? value : arguments,
\t\t\tlocal = this[ cache ].slice();

\t\teach( props, function( key, prop ) {
\t\t\tvar val = arr[ type === \"object\" ? key : prop.idx ];
\t\t\tif ( val == null ) {
\t\t\t\tval = local[ prop.idx ];
\t\t\t}
\t\t\tlocal[ prop.idx ] = clamp( val, prop );
\t\t} );

\t\tif ( from ) {
\t\t\tret = color( from( local ) );
\t\t\tret[ cache ] = local;
\t\t\treturn ret;
\t\t} else {
\t\t\treturn color( local );
\t\t}
\t};

\t// Makes red() green() blue() alpha() hue() saturation() lightness()
\teach( props, function( key, prop ) {

\t\t// Alpha is included in more than one space
\t\tif ( color.fn[ key ] ) {
\t\t\treturn;
\t\t}
\t\tcolor.fn[ key ] = function( value ) {
\t\t\tvar vtype = jQuery.type( value ),
\t\t\t\tfn = ( key === \"alpha\" ? ( this._hsla ? \"hsla\" : \"rgba\" ) : spaceName ),
\t\t\t\tlocal = this[ fn ](),
\t\t\t\tcur = local[ prop.idx ],
\t\t\t\tmatch;

\t\t\tif ( vtype === \"undefined\" ) {
\t\t\t\treturn cur;
\t\t\t}

\t\t\tif ( vtype === \"function\" ) {
\t\t\t\tvalue = value.call( this, cur );
\t\t\t\tvtype = jQuery.type( value );
\t\t\t}
\t\t\tif ( value == null && prop.empty ) {
\t\t\t\treturn this;
\t\t\t}
\t\t\tif ( vtype === \"string\" ) {
\t\t\t\tmatch = rplusequals.exec( value );
\t\t\t\tif ( match ) {
\t\t\t\t\tvalue = cur + parseFloat( match[ 2 ] ) * ( match[ 1 ] === \"+\" ? 1 : -1 );
\t\t\t\t}
\t\t\t}
\t\t\tlocal[ prop.idx ] = value;
\t\t\treturn this[ fn ]( local );
\t\t};
\t} );
} );

// Add cssHook and .fx.step function for each named hook.
// accept a space separated string of properties
color.hook = function( hook ) {
\tvar hooks = hook.split( \" \" );
\teach( hooks, function( i, hook ) {
\t\tjQuery.cssHooks[ hook ] = {
\t\t\tset: function( elem, value ) {
\t\t\t\tvar parsed, curElem,
\t\t\t\t\tbackgroundColor = \"\";

\t\t\t\tif ( value !== \"transparent\" && ( jQuery.type( value ) !== \"string\" ||
\t\t\t\t\t\t( parsed = stringParse( value ) ) ) ) {
\t\t\t\t\tvalue = color( parsed || value );
\t\t\t\t\tif ( !support.rgba && value._rgba[ 3 ] !== 1 ) {
\t\t\t\t\t\tcurElem = hook === \"backgroundColor\" ? elem.parentNode : elem;
\t\t\t\t\t\twhile (
\t\t\t\t\t\t\t( backgroundColor === \"\" || backgroundColor === \"transparent\" ) &&
\t\t\t\t\t\t\tcurElem && curElem.style
\t\t\t\t\t\t) {
\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\tbackgroundColor = jQuery.css( curElem, \"backgroundColor\" );
\t\t\t\t\t\t\t\tcurElem = curElem.parentNode;
\t\t\t\t\t\t\t} catch ( e ) {
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\tvalue = value.blend( backgroundColor && backgroundColor !== \"transparent\" ?
\t\t\t\t\t\t\tbackgroundColor :
\t\t\t\t\t\t\t\"_default\" );
\t\t\t\t\t}

\t\t\t\t\tvalue = value.toRgbaString();
\t\t\t\t}
\t\t\t\ttry {
\t\t\t\t\telem.style[ hook ] = value;
\t\t\t\t} catch ( e ) {

\t\t\t\t\t// Wrapped to prevent IE from throwing errors on \"invalid\" values like
\t\t\t\t\t// 'auto' or 'inherit'
\t\t\t\t}
\t\t\t}
\t\t};
\t\tjQuery.fx.step[ hook ] = function( fx ) {
\t\t\tif ( !fx.colorInit ) {
\t\t\t\tfx.start = color( fx.elem, hook );
\t\t\t\tfx.end = color( fx.end );
\t\t\t\tfx.colorInit = true;
\t\t\t}
\t\t\tjQuery.cssHooks[ hook ].set( fx.elem, fx.start.transition( fx.end, fx.pos ) );
\t\t};
\t} );

};

color.hook( stepHooks );

jQuery.cssHooks.borderColor = {
\texpand: function( value ) {
\t\tvar expanded = {};

\t\teach( [ \"Top\", \"Right\", \"Bottom\", \"Left\" ], function( i, part ) {
\t\t\texpanded[ \"border\" + part + \"Color\" ] = value;
\t\t} );
\t\treturn expanded;
\t}
};

// Basic color names only.
// Usage of any of the other color names requires adding yourself or including
// jquery.color.svg-names.js.
colors = jQuery.Color.names = {

\t// 4.1. Basic color keywords
\taqua: \"#00ffff\",
\tblack: \"#000000\",
\tblue: \"#0000ff\",
\tfuchsia: \"#ff00ff\",
\tgray: \"#808080\",
\tgreen: \"#008000\",
\tlime: \"#00ff00\",
\tmaroon: \"#800000\",
\tnavy: \"#000080\",
\tolive: \"#808000\",
\tpurple: \"#800080\",
\tred: \"#ff0000\",
\tsilver: \"#c0c0c0\",
\tteal: \"#008080\",
\twhite: \"#ffffff\",
\tyellow: \"#ffff00\",

\t// 4.2.3. \"transparent\" color keyword
\ttransparent: [ null, null, null, 0 ],

\t_default: \"#ffffff\"
};

} )( jQuery );

/******************************************************************************/
/****************************** CLASS ANIMATIONS ******************************/
/******************************************************************************/
( function() {

var classAnimationActions = [ \"add\", \"remove\", \"toggle\" ],
\tshorthandStyles = {
\t\tborder: 1,
\t\tborderBottom: 1,
\t\tborderColor: 1,
\t\tborderLeft: 1,
\t\tborderRight: 1,
\t\tborderTop: 1,
\t\tborderWidth: 1,
\t\tmargin: 1,
\t\tpadding: 1
\t};

\$.each(
\t[ \"borderLeftStyle\", \"borderRightStyle\", \"borderBottomStyle\", \"borderTopStyle\" ],
\tfunction( _, prop ) {
\t\t\$.fx.step[ prop ] = function( fx ) {
\t\t\tif ( fx.end !== \"none\" && !fx.setAttr || fx.pos === 1 && !fx.setAttr ) {
\t\t\t\tjQuery.style( fx.elem, prop, fx.end );
\t\t\t\tfx.setAttr = true;
\t\t\t}
\t\t};
\t}
);

function getElementStyles( elem ) {
\tvar key, len,
\t\tstyle = elem.ownerDocument.defaultView ?
\t\t\telem.ownerDocument.defaultView.getComputedStyle( elem, null ) :
\t\t\telem.currentStyle,
\t\tstyles = {};

\tif ( style && style.length && style[ 0 ] && style[ style[ 0 ] ] ) {
\t\tlen = style.length;
\t\twhile ( len-- ) {
\t\t\tkey = style[ len ];
\t\t\tif ( typeof style[ key ] === \"string\" ) {
\t\t\t\tstyles[ \$.camelCase( key ) ] = style[ key ];
\t\t\t}
\t\t}

\t// Support: Opera, IE <9
\t} else {
\t\tfor ( key in style ) {
\t\t\tif ( typeof style[ key ] === \"string\" ) {
\t\t\t\tstyles[ key ] = style[ key ];
\t\t\t}
\t\t}
\t}

\treturn styles;
}

function styleDifference( oldStyle, newStyle ) {
\tvar diff = {},
\t\tname, value;

\tfor ( name in newStyle ) {
\t\tvalue = newStyle[ name ];
\t\tif ( oldStyle[ name ] !== value ) {
\t\t\tif ( !shorthandStyles[ name ] ) {
\t\t\t\tif ( \$.fx.step[ name ] || !isNaN( parseFloat( value ) ) ) {
\t\t\t\t\tdiff[ name ] = value;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn diff;
}

// Support: jQuery <1.8
if ( !\$.fn.addBack ) {
\t\$.fn.addBack = function( selector ) {
\t\treturn this.add( selector == null ?
\t\t\tthis.prevObject : this.prevObject.filter( selector )
\t\t);
\t};
}

\$.effects.animateClass = function( value, duration, easing, callback ) {
\tvar o = \$.speed( duration, easing, callback );

\treturn this.queue( function() {
\t\tvar animated = \$( this ),
\t\t\tbaseClass = animated.attr( \"class\" ) || \"\",
\t\t\tapplyClassChange,
\t\t\tallAnimations = o.children ? animated.find( \"*\" ).addBack() : animated;

\t\t// Map the animated objects to store the original styles.
\t\tallAnimations = allAnimations.map( function() {
\t\t\tvar el = \$( this );
\t\t\treturn {
\t\t\t\tel: el,
\t\t\t\tstart: getElementStyles( this )
\t\t\t};
\t\t} );

\t\t// Apply class change
\t\tapplyClassChange = function() {
\t\t\t\$.each( classAnimationActions, function( i, action ) {
\t\t\t\tif ( value[ action ] ) {
\t\t\t\t\tanimated[ action + \"Class\" ]( value[ action ] );
\t\t\t\t}
\t\t\t} );
\t\t};
\t\tapplyClassChange();

\t\t// Map all animated objects again - calculate new styles and diff
\t\tallAnimations = allAnimations.map( function() {
\t\t\tthis.end = getElementStyles( this.el[ 0 ] );
\t\t\tthis.diff = styleDifference( this.start, this.end );
\t\t\treturn this;
\t\t} );

\t\t// Apply original class
\t\tanimated.attr( \"class\", baseClass );

\t\t// Map all animated objects again - this time collecting a promise
\t\tallAnimations = allAnimations.map( function() {
\t\t\tvar styleInfo = this,
\t\t\t\tdfd = \$.Deferred(),
\t\t\t\topts = \$.extend( {}, o, {
\t\t\t\t\tqueue: false,
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\tdfd.resolve( styleInfo );
\t\t\t\t\t}
\t\t\t\t} );

\t\t\tthis.el.animate( this.diff, opts );
\t\t\treturn dfd.promise();
\t\t} );

\t\t// Once all animations have completed:
\t\t\$.when.apply( \$, allAnimations.get() ).done( function() {

\t\t\t// Set the final class
\t\t\tapplyClassChange();

\t\t\t// For each animated element,
\t\t\t// clear all css properties that were animated
\t\t\t\$.each( arguments, function() {
\t\t\t\tvar el = this.el;
\t\t\t\t\$.each( this.diff, function( key ) {
\t\t\t\t\tel.css( key, \"\" );
\t\t\t\t} );
\t\t\t} );

\t\t\t// This is guarnteed to be there if you use jQuery.speed()
\t\t\t// it also handles dequeuing the next anim...
\t\t\to.complete.call( animated[ 0 ] );
\t\t} );
\t} );
};

\$.fn.extend( {
\taddClass: ( function( orig ) {
\t\treturn function( classNames, speed, easing, callback ) {
\t\t\treturn speed ?
\t\t\t\t\$.effects.animateClass.call( this,
\t\t\t\t\t{ add: classNames }, speed, easing, callback ) :
\t\t\t\torig.apply( this, arguments );
\t\t};
\t} )( \$.fn.addClass ),

\tremoveClass: ( function( orig ) {
\t\treturn function( classNames, speed, easing, callback ) {
\t\t\treturn arguments.length > 1 ?
\t\t\t\t\$.effects.animateClass.call( this,
\t\t\t\t\t{ remove: classNames }, speed, easing, callback ) :
\t\t\t\torig.apply( this, arguments );
\t\t};
\t} )( \$.fn.removeClass ),

\ttoggleClass: ( function( orig ) {
\t\treturn function( classNames, force, speed, easing, callback ) {
\t\t\tif ( typeof force === \"boolean\" || force === undefined ) {
\t\t\t\tif ( !speed ) {

\t\t\t\t\t// Without speed parameter
\t\t\t\t\treturn orig.apply( this, arguments );
\t\t\t\t} else {
\t\t\t\t\treturn \$.effects.animateClass.call( this,
\t\t\t\t\t\t( force ? { add: classNames } : { remove: classNames } ),
\t\t\t\t\t\tspeed, easing, callback );
\t\t\t\t}
\t\t\t} else {

\t\t\t\t// Without force parameter
\t\t\t\treturn \$.effects.animateClass.call( this,
\t\t\t\t\t{ toggle: classNames }, force, speed, easing );
\t\t\t}
\t\t};
\t} )( \$.fn.toggleClass ),

\tswitchClass: function( remove, add, speed, easing, callback ) {
\t\treturn \$.effects.animateClass.call( this, {
\t\t\tadd: add,
\t\t\tremove: remove
\t\t}, speed, easing, callback );
\t}
} );

} )();

/******************************************************************************/
/*********************************** EFFECTS **********************************/
/******************************************************************************/

( function() {

if ( \$.expr && \$.expr.filters && \$.expr.filters.animated ) {
\t\$.expr.filters.animated = ( function( orig ) {
\t\treturn function( elem ) {
\t\t\treturn !!\$( elem ).data( dataSpaceAnimated ) || orig( elem );
\t\t};
\t} )( \$.expr.filters.animated );
}

if ( \$.uiBackCompat !== false ) {
\t\$.extend( \$.effects, {

\t\t// Saves a set of properties in a data storage
\t\tsave: function( element, set ) {
\t\t\tvar i = 0, length = set.length;
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tif ( set[ i ] !== null ) {
\t\t\t\t\telement.data( dataSpace + set[ i ], element[ 0 ].style[ set[ i ] ] );
\t\t\t\t}
\t\t\t}
\t\t},

\t\t// Restores a set of previously saved properties from a data storage
\t\trestore: function( element, set ) {
\t\t\tvar val, i = 0, length = set.length;
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tif ( set[ i ] !== null ) {
\t\t\t\t\tval = element.data( dataSpace + set[ i ] );
\t\t\t\t\telement.css( set[ i ], val );
\t\t\t\t}
\t\t\t}
\t\t},

\t\tsetMode: function( el, mode ) {
\t\t\tif ( mode === \"toggle\" ) {
\t\t\t\tmode = el.is( \":hidden\" ) ? \"show\" : \"hide\";
\t\t\t}
\t\t\treturn mode;
\t\t},

\t\t// Wraps the element around a wrapper that copies position properties
\t\tcreateWrapper: function( element ) {

\t\t\t// If the element is already wrapped, return it
\t\t\tif ( element.parent().is( \".ui-effects-wrapper\" ) ) {
\t\t\t\treturn element.parent();
\t\t\t}

\t\t\t// Wrap the element
\t\t\tvar props = {
\t\t\t\t\twidth: element.outerWidth( true ),
\t\t\t\t\theight: element.outerHeight( true ),
\t\t\t\t\t\"float\": element.css( \"float\" )
\t\t\t\t},
\t\t\t\twrapper = \$( \"<div></div>\" )
\t\t\t\t\t.addClass( \"ui-effects-wrapper\" )
\t\t\t\t\t.css( {
\t\t\t\t\t\tfontSize: \"100%\",
\t\t\t\t\t\tbackground: \"transparent\",
\t\t\t\t\t\tborder: \"none\",
\t\t\t\t\t\tmargin: 0,
\t\t\t\t\t\tpadding: 0
\t\t\t\t\t} ),

\t\t\t\t// Store the size in case width/height are defined in % - Fixes #5245
\t\t\t\tsize = {
\t\t\t\t\twidth: element.width(),
\t\t\t\t\theight: element.height()
\t\t\t\t},
\t\t\t\tactive = document.activeElement;

\t\t\t// Support: Firefox
\t\t\t// Firefox incorrectly exposes anonymous content
\t\t\t// https://bugzilla.mozilla.org/show_bug.cgi?id=561664
\t\t\ttry {
\t\t\t\tactive.id;
\t\t\t} catch ( e ) {
\t\t\t\tactive = document.body;
\t\t\t}

\t\t\telement.wrap( wrapper );

\t\t\t// Fixes #7595 - Elements lose focus when wrapped.
\t\t\tif ( element[ 0 ] === active || \$.contains( element[ 0 ], active ) ) {
\t\t\t\t\$( active ).trigger( \"focus\" );
\t\t\t}

\t\t\t// Hotfix for jQuery 1.4 since some change in wrap() seems to actually
\t\t\t// lose the reference to the wrapped element
\t\t\twrapper = element.parent();

\t\t\t// Transfer positioning properties to the wrapper
\t\t\tif ( element.css( \"position\" ) === \"static\" ) {
\t\t\t\twrapper.css( { position: \"relative\" } );
\t\t\t\telement.css( { position: \"relative\" } );
\t\t\t} else {
\t\t\t\t\$.extend( props, {
\t\t\t\t\tposition: element.css( \"position\" ),
\t\t\t\t\tzIndex: element.css( \"z-index\" )
\t\t\t\t} );
\t\t\t\t\$.each( [ \"top\", \"left\", \"bottom\", \"right\" ], function( i, pos ) {
\t\t\t\t\tprops[ pos ] = element.css( pos );
\t\t\t\t\tif ( isNaN( parseInt( props[ pos ], 10 ) ) ) {
\t\t\t\t\t\tprops[ pos ] = \"auto\";
\t\t\t\t\t}
\t\t\t\t} );
\t\t\t\telement.css( {
\t\t\t\t\tposition: \"relative\",
\t\t\t\t\ttop: 0,
\t\t\t\t\tleft: 0,
\t\t\t\t\tright: \"auto\",
\t\t\t\t\tbottom: \"auto\"
\t\t\t\t} );
\t\t\t}
\t\t\telement.css( size );

\t\t\treturn wrapper.css( props ).show();
\t\t},

\t\tremoveWrapper: function( element ) {
\t\t\tvar active = document.activeElement;

\t\t\tif ( element.parent().is( \".ui-effects-wrapper\" ) ) {
\t\t\t\telement.parent().replaceWith( element );

\t\t\t\t// Fixes #7595 - Elements lose focus when wrapped.
\t\t\t\tif ( element[ 0 ] === active || \$.contains( element[ 0 ], active ) ) {
\t\t\t\t\t\$( active ).trigger( \"focus\" );
\t\t\t\t}
\t\t\t}

\t\t\treturn element;
\t\t}
\t} );
}

\$.extend( \$.effects, {
\tversion: \"1.12.1\",

\tdefine: function( name, mode, effect ) {
\t\tif ( !effect ) {
\t\t\teffect = mode;
\t\t\tmode = \"effect\";
\t\t}

\t\t\$.effects.effect[ name ] = effect;
\t\t\$.effects.effect[ name ].mode = mode;

\t\treturn effect;
\t},

\tscaledDimensions: function( element, percent, direction ) {
\t\tif ( percent === 0 ) {
\t\t\treturn {
\t\t\t\theight: 0,
\t\t\t\twidth: 0,
\t\t\t\touterHeight: 0,
\t\t\t\touterWidth: 0
\t\t\t};
\t\t}

\t\tvar x = direction !== \"horizontal\" ? ( ( percent || 100 ) / 100 ) : 1,
\t\t\ty = direction !== \"vertical\" ? ( ( percent || 100 ) / 100 ) : 1;

\t\treturn {
\t\t\theight: element.height() * y,
\t\t\twidth: element.width() * x,
\t\t\touterHeight: element.outerHeight() * y,
\t\t\touterWidth: element.outerWidth() * x
\t\t};

\t},

\tclipToBox: function( animation ) {
\t\treturn {
\t\t\twidth: animation.clip.right - animation.clip.left,
\t\t\theight: animation.clip.bottom - animation.clip.top,
\t\t\tleft: animation.clip.left,
\t\t\ttop: animation.clip.top
\t\t};
\t},

\t// Injects recently queued functions to be first in line (after \"inprogress\")
\tunshift: function( element, queueLength, count ) {
\t\tvar queue = element.queue();

\t\tif ( queueLength > 1 ) {
\t\t\tqueue.splice.apply( queue,
\t\t\t\t[ 1, 0 ].concat( queue.splice( queueLength, count ) ) );
\t\t}
\t\telement.dequeue();
\t},

\tsaveStyle: function( element ) {
\t\telement.data( dataSpaceStyle, element[ 0 ].style.cssText );
\t},

\trestoreStyle: function( element ) {
\t\telement[ 0 ].style.cssText = element.data( dataSpaceStyle ) || \"\";
\t\telement.removeData( dataSpaceStyle );
\t},

\tmode: function( element, mode ) {
\t\tvar hidden = element.is( \":hidden\" );

\t\tif ( mode === \"toggle\" ) {
\t\t\tmode = hidden ? \"show\" : \"hide\";
\t\t}
\t\tif ( hidden ? mode === \"hide\" : mode === \"show\" ) {
\t\t\tmode = \"none\";
\t\t}
\t\treturn mode;
\t},

\t// Translates a [top,left] array into a baseline value
\tgetBaseline: function( origin, original ) {
\t\tvar y, x;

\t\tswitch ( origin[ 0 ] ) {
\t\tcase \"top\":
\t\t\ty = 0;
\t\t\tbreak;
\t\tcase \"middle\":
\t\t\ty = 0.5;
\t\t\tbreak;
\t\tcase \"bottom\":
\t\t\ty = 1;
\t\t\tbreak;
\t\tdefault:
\t\t\ty = origin[ 0 ] / original.height;
\t\t}

\t\tswitch ( origin[ 1 ] ) {
\t\tcase \"left\":
\t\t\tx = 0;
\t\t\tbreak;
\t\tcase \"center\":
\t\t\tx = 0.5;
\t\t\tbreak;
\t\tcase \"right\":
\t\t\tx = 1;
\t\t\tbreak;
\t\tdefault:
\t\t\tx = origin[ 1 ] / original.width;
\t\t}

\t\treturn {
\t\t\tx: x,
\t\t\ty: y
\t\t};
\t},

\t// Creates a placeholder element so that the original element can be made absolute
\tcreatePlaceholder: function( element ) {
\t\tvar placeholder,
\t\t\tcssPosition = element.css( \"position\" ),
\t\t\tposition = element.position();

\t\t// Lock in margins first to account for form elements, which
\t\t// will change margin if you explicitly set height
\t\t// see: http://jsfiddle.net/JZSMt/3/ https://bugs.webkit.org/show_bug.cgi?id=107380
\t\t// Support: Safari
\t\telement.css( {
\t\t\tmarginTop: element.css( \"marginTop\" ),
\t\t\tmarginBottom: element.css( \"marginBottom\" ),
\t\t\tmarginLeft: element.css( \"marginLeft\" ),
\t\t\tmarginRight: element.css( \"marginRight\" )
\t\t} )
\t\t.outerWidth( element.outerWidth() )
\t\t.outerHeight( element.outerHeight() );

\t\tif ( /^(static|relative)/.test( cssPosition ) ) {
\t\t\tcssPosition = \"absolute\";

\t\t\tplaceholder = \$( \"<\" + element[ 0 ].nodeName + \">\" ).insertAfter( element ).css( {

\t\t\t\t// Convert inline to inline block to account for inline elements
\t\t\t\t// that turn to inline block based on content (like img)
\t\t\t\tdisplay: /^(inline|ruby)/.test( element.css( \"display\" ) ) ?
\t\t\t\t\t\"inline-block\" :
\t\t\t\t\t\"block\",
\t\t\t\tvisibility: \"hidden\",

\t\t\t\t// Margins need to be set to account for margin collapse
\t\t\t\tmarginTop: element.css( \"marginTop\" ),
\t\t\t\tmarginBottom: element.css( \"marginBottom\" ),
\t\t\t\tmarginLeft: element.css( \"marginLeft\" ),
\t\t\t\tmarginRight: element.css( \"marginRight\" ),
\t\t\t\t\"float\": element.css( \"float\" )
\t\t\t} )
\t\t\t.outerWidth( element.outerWidth() )
\t\t\t.outerHeight( element.outerHeight() )
\t\t\t.addClass( \"ui-effects-placeholder\" );

\t\t\telement.data( dataSpace + \"placeholder\", placeholder );
\t\t}

\t\telement.css( {
\t\t\tposition: cssPosition,
\t\t\tleft: position.left,
\t\t\ttop: position.top
\t\t} );

\t\treturn placeholder;
\t},

\tremovePlaceholder: function( element ) {
\t\tvar dataKey = dataSpace + \"placeholder\",
\t\t\t\tplaceholder = element.data( dataKey );

\t\tif ( placeholder ) {
\t\t\tplaceholder.remove();
\t\t\telement.removeData( dataKey );
\t\t}
\t},

\t// Removes a placeholder if it exists and restores
\t// properties that were modified during placeholder creation
\tcleanUp: function( element ) {
\t\t\$.effects.restoreStyle( element );
\t\t\$.effects.removePlaceholder( element );
\t},

\tsetTransition: function( element, list, factor, value ) {
\t\tvalue = value || {};
\t\t\$.each( list, function( i, x ) {
\t\t\tvar unit = element.cssUnit( x );
\t\t\tif ( unit[ 0 ] > 0 ) {
\t\t\t\tvalue[ x ] = unit[ 0 ] * factor + unit[ 1 ];
\t\t\t}
\t\t} );
\t\treturn value;
\t}
} );

// Return an effect options object for the given parameters:
function _normalizeArguments( effect, options, speed, callback ) {

\t// Allow passing all options as the first parameter
\tif ( \$.isPlainObject( effect ) ) {
\t\toptions = effect;
\t\teffect = effect.effect;
\t}

\t// Convert to an object
\teffect = { effect: effect };

\t// Catch (effect, null, ...)
\tif ( options == null ) {
\t\toptions = {};
\t}

\t// Catch (effect, callback)
\tif ( \$.isFunction( options ) ) {
\t\tcallback = options;
\t\tspeed = null;
\t\toptions = {};
\t}

\t// Catch (effect, speed, ?)
\tif ( typeof options === \"number\" || \$.fx.speeds[ options ] ) {
\t\tcallback = speed;
\t\tspeed = options;
\t\toptions = {};
\t}

\t// Catch (effect, options, callback)
\tif ( \$.isFunction( speed ) ) {
\t\tcallback = speed;
\t\tspeed = null;
\t}

\t// Add options to effect
\tif ( options ) {
\t\t\$.extend( effect, options );
\t}

\tspeed = speed || options.duration;
\teffect.duration = \$.fx.off ? 0 :
\t\ttypeof speed === \"number\" ? speed :
\t\tspeed in \$.fx.speeds ? \$.fx.speeds[ speed ] :
\t\t\$.fx.speeds._default;

\teffect.complete = callback || options.complete;

\treturn effect;
}

function standardAnimationOption( option ) {

\t// Valid standard speeds (nothing, number, named speed)
\tif ( !option || typeof option === \"number\" || \$.fx.speeds[ option ] ) {
\t\treturn true;
\t}

\t// Invalid strings - treat as \"normal\" speed
\tif ( typeof option === \"string\" && !\$.effects.effect[ option ] ) {
\t\treturn true;
\t}

\t// Complete callback
\tif ( \$.isFunction( option ) ) {
\t\treturn true;
\t}

\t// Options hash (but not naming an effect)
\tif ( typeof option === \"object\" && !option.effect ) {
\t\treturn true;
\t}

\t// Didn't match any standard API
\treturn false;
}

\$.fn.extend( {
\teffect: function( /* effect, options, speed, callback */ ) {
\t\tvar args = _normalizeArguments.apply( this, arguments ),
\t\t\teffectMethod = \$.effects.effect[ args.effect ],
\t\t\tdefaultMode = effectMethod.mode,
\t\t\tqueue = args.queue,
\t\t\tqueueName = queue || \"fx\",
\t\t\tcomplete = args.complete,
\t\t\tmode = args.mode,
\t\t\tmodes = [],
\t\t\tprefilter = function( next ) {
\t\t\t\tvar el = \$( this ),
\t\t\t\t\tnormalizedMode = \$.effects.mode( el, mode ) || defaultMode;

\t\t\t\t// Sentinel for duck-punching the :animated psuedo-selector
\t\t\t\tel.data( dataSpaceAnimated, true );

\t\t\t\t// Save effect mode for later use,
\t\t\t\t// we can't just call \$.effects.mode again later,
\t\t\t\t// as the .show() below destroys the initial state
\t\t\t\tmodes.push( normalizedMode );

\t\t\t\t// See \$.uiBackCompat inside of run() for removal of defaultMode in 1.13
\t\t\t\tif ( defaultMode && ( normalizedMode === \"show\" ||
\t\t\t\t\t\t( normalizedMode === defaultMode && normalizedMode === \"hide\" ) ) ) {
\t\t\t\t\tel.show();
\t\t\t\t}

\t\t\t\tif ( !defaultMode || normalizedMode !== \"none\" ) {
\t\t\t\t\t\$.effects.saveStyle( el );
\t\t\t\t}

\t\t\t\tif ( \$.isFunction( next ) ) {
\t\t\t\t\tnext();
\t\t\t\t}
\t\t\t};

\t\tif ( \$.fx.off || !effectMethod ) {

\t\t\t// Delegate to the original method (e.g., .show()) if possible
\t\t\tif ( mode ) {
\t\t\t\treturn this[ mode ]( args.duration, complete );
\t\t\t} else {
\t\t\t\treturn this.each( function() {
\t\t\t\t\tif ( complete ) {
\t\t\t\t\t\tcomplete.call( this );
\t\t\t\t\t}
\t\t\t\t} );
\t\t\t}
\t\t}

\t\tfunction run( next ) {
\t\t\tvar elem = \$( this );

\t\t\tfunction cleanup() {
\t\t\t\telem.removeData( dataSpaceAnimated );

\t\t\t\t\$.effects.cleanUp( elem );

\t\t\t\tif ( args.mode === \"hide\" ) {
\t\t\t\t\telem.hide();
\t\t\t\t}

\t\t\t\tdone();
\t\t\t}

\t\t\tfunction done() {
\t\t\t\tif ( \$.isFunction( complete ) ) {
\t\t\t\t\tcomplete.call( elem[ 0 ] );
\t\t\t\t}

\t\t\t\tif ( \$.isFunction( next ) ) {
\t\t\t\t\tnext();
\t\t\t\t}
\t\t\t}

\t\t\t// Override mode option on a per element basis,
\t\t\t// as toggle can be either show or hide depending on element state
\t\t\targs.mode = modes.shift();

\t\t\tif ( \$.uiBackCompat !== false && !defaultMode ) {
\t\t\t\tif ( elem.is( \":hidden\" ) ? mode === \"hide\" : mode === \"show\" ) {

\t\t\t\t\t// Call the core method to track \"olddisplay\" properly
\t\t\t\t\telem[ mode ]();
\t\t\t\t\tdone();
\t\t\t\t} else {
\t\t\t\t\teffectMethod.call( elem[ 0 ], args, done );
\t\t\t\t}
\t\t\t} else {
\t\t\t\tif ( args.mode === \"none\" ) {

\t\t\t\t\t// Call the core method to track \"olddisplay\" properly
\t\t\t\t\telem[ mode ]();
\t\t\t\t\tdone();
\t\t\t\t} else {
\t\t\t\t\teffectMethod.call( elem[ 0 ], args, cleanup );
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Run prefilter on all elements first to ensure that
\t\t// any showing or hiding happens before placeholder creation,
\t\t// which ensures that any layout changes are correctly captured.
\t\treturn queue === false ?
\t\t\tthis.each( prefilter ).each( run ) :
\t\t\tthis.queue( queueName, prefilter ).queue( queueName, run );
\t},

\tshow: ( function( orig ) {
\t\treturn function( option ) {
\t\t\tif ( standardAnimationOption( option ) ) {
\t\t\t\treturn orig.apply( this, arguments );
\t\t\t} else {
\t\t\t\tvar args = _normalizeArguments.apply( this, arguments );
\t\t\t\targs.mode = \"show\";
\t\t\t\treturn this.effect.call( this, args );
\t\t\t}
\t\t};
\t} )( \$.fn.show ),

\thide: ( function( orig ) {
\t\treturn function( option ) {
\t\t\tif ( standardAnimationOption( option ) ) {
\t\t\t\treturn orig.apply( this, arguments );
\t\t\t} else {
\t\t\t\tvar args = _normalizeArguments.apply( this, arguments );
\t\t\t\targs.mode = \"hide\";
\t\t\t\treturn this.effect.call( this, args );
\t\t\t}
\t\t};
\t} )( \$.fn.hide ),

\ttoggle: ( function( orig ) {
\t\treturn function( option ) {
\t\t\tif ( standardAnimationOption( option ) || typeof option === \"boolean\" ) {
\t\t\t\treturn orig.apply( this, arguments );
\t\t\t} else {
\t\t\t\tvar args = _normalizeArguments.apply( this, arguments );
\t\t\t\targs.mode = \"toggle\";
\t\t\t\treturn this.effect.call( this, args );
\t\t\t}
\t\t};
\t} )( \$.fn.toggle ),

\tcssUnit: function( key ) {
\t\tvar style = this.css( key ),
\t\t\tval = [];

\t\t\$.each( [ \"em\", \"px\", \"%\", \"pt\" ], function( i, unit ) {
\t\t\tif ( style.indexOf( unit ) > 0 ) {
\t\t\t\tval = [ parseFloat( style ), unit ];
\t\t\t}
\t\t} );
\t\treturn val;
\t},

\tcssClip: function( clipObj ) {
\t\tif ( clipObj ) {
\t\t\treturn this.css( \"clip\", \"rect(\" + clipObj.top + \"px \" + clipObj.right + \"px \" +
\t\t\t\tclipObj.bottom + \"px \" + clipObj.left + \"px)\" );
\t\t}
\t\treturn parseClip( this.css( \"clip\" ), this );
\t},

\ttransfer: function( options, done ) {
\t\tvar element = \$( this ),
\t\t\ttarget = \$( options.to ),
\t\t\ttargetFixed = target.css( \"position\" ) === \"fixed\",
\t\t\tbody = \$( \"body\" ),
\t\t\tfixTop = targetFixed ? body.scrollTop() : 0,
\t\t\tfixLeft = targetFixed ? body.scrollLeft() : 0,
\t\t\tendPosition = target.offset(),
\t\t\tanimation = {
\t\t\t\ttop: endPosition.top - fixTop,
\t\t\t\tleft: endPosition.left - fixLeft,
\t\t\t\theight: target.innerHeight(),
\t\t\t\twidth: target.innerWidth()
\t\t\t},
\t\t\tstartPosition = element.offset(),
\t\t\ttransfer = \$( \"<div class='ui-effects-transfer'></div>\" )
\t\t\t\t.appendTo( \"body\" )
\t\t\t\t.addClass( options.className )
\t\t\t\t.css( {
\t\t\t\t\ttop: startPosition.top - fixTop,
\t\t\t\t\tleft: startPosition.left - fixLeft,
\t\t\t\t\theight: element.innerHeight(),
\t\t\t\t\twidth: element.innerWidth(),
\t\t\t\t\tposition: targetFixed ? \"fixed\" : \"absolute\"
\t\t\t\t} )
\t\t\t\t.animate( animation, options.duration, options.easing, function() {
\t\t\t\t\ttransfer.remove();
\t\t\t\t\tif ( \$.isFunction( done ) ) {
\t\t\t\t\t\tdone();
\t\t\t\t\t}
\t\t\t\t} );
\t}
} );

function parseClip( str, element ) {
\t\tvar outerWidth = element.outerWidth(),
\t\t\touterHeight = element.outerHeight(),
\t\t\tclipRegex = /^rect\\((-?\\d*\\.?\\d*px|-?\\d+%|auto),?\\s*(-?\\d*\\.?\\d*px|-?\\d+%|auto),?\\s*(-?\\d*\\.?\\d*px|-?\\d+%|auto),?\\s*(-?\\d*\\.?\\d*px|-?\\d+%|auto)\\)\$/,
\t\t\tvalues = clipRegex.exec( str ) || [ \"\", 0, outerWidth, outerHeight, 0 ];

\t\treturn {
\t\t\ttop: parseFloat( values[ 1 ] ) || 0,
\t\t\tright: values[ 2 ] === \"auto\" ? outerWidth : parseFloat( values[ 2 ] ),
\t\t\tbottom: values[ 3 ] === \"auto\" ? outerHeight : parseFloat( values[ 3 ] ),
\t\t\tleft: parseFloat( values[ 4 ] ) || 0
\t\t};
}

\$.fx.step.clip = function( fx ) {
\tif ( !fx.clipInit ) {
\t\tfx.start = \$( fx.elem ).cssClip();
\t\tif ( typeof fx.end === \"string\" ) {
\t\t\tfx.end = parseClip( fx.end, fx.elem );
\t\t}
\t\tfx.clipInit = true;
\t}

\t\$( fx.elem ).cssClip( {
\t\ttop: fx.pos * ( fx.end.top - fx.start.top ) + fx.start.top,
\t\tright: fx.pos * ( fx.end.right - fx.start.right ) + fx.start.right,
\t\tbottom: fx.pos * ( fx.end.bottom - fx.start.bottom ) + fx.start.bottom,
\t\tleft: fx.pos * ( fx.end.left - fx.start.left ) + fx.start.left
\t} );
};

} )();

/******************************************************************************/
/*********************************** EASING ***********************************/
/******************************************************************************/

( function() {

// Based on easing equations from Robert Penner (http://www.robertpenner.com/easing)

var baseEasings = {};

\$.each( [ \"Quad\", \"Cubic\", \"Quart\", \"Quint\", \"Expo\" ], function( i, name ) {
\tbaseEasings[ name ] = function( p ) {
\t\treturn Math.pow( p, i + 2 );
\t};
} );

\$.extend( baseEasings, {
\tSine: function( p ) {
\t\treturn 1 - Math.cos( p * Math.PI / 2 );
\t},
\tCirc: function( p ) {
\t\treturn 1 - Math.sqrt( 1 - p * p );
\t},
\tElastic: function( p ) {
\t\treturn p === 0 || p === 1 ? p :
\t\t\t-Math.pow( 2, 8 * ( p - 1 ) ) * Math.sin( ( ( p - 1 ) * 80 - 7.5 ) * Math.PI / 15 );
\t},
\tBack: function( p ) {
\t\treturn p * p * ( 3 * p - 2 );
\t},
\tBounce: function( p ) {
\t\tvar pow2,
\t\t\tbounce = 4;

\t\twhile ( p < ( ( pow2 = Math.pow( 2, --bounce ) ) - 1 ) / 11 ) {}
\t\treturn 1 / Math.pow( 4, 3 - bounce ) - 7.5625 * Math.pow( ( pow2 * 3 - 2 ) / 22 - p, 2 );
\t}
} );

\$.each( baseEasings, function( name, easeIn ) {
\t\$.easing[ \"easeIn\" + name ] = easeIn;
\t\$.easing[ \"easeOut\" + name ] = function( p ) {
\t\treturn 1 - easeIn( 1 - p );
\t};
\t\$.easing[ \"easeInOut\" + name ] = function( p ) {
\t\treturn p < 0.5 ?
\t\t\teaseIn( p * 2 ) / 2 :
\t\t\t1 - easeIn( p * -2 + 2 ) / 2;
\t};
} );

} )();

return \$.effects;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effect.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effect.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effect.js");
    }
}
