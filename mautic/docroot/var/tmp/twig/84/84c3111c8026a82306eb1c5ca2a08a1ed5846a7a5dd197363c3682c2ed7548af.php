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

/* @bundles/CoreBundle/Assets/js/libraries/2.jquery.js */
class __TwigTemplate_7e1c2b767277869605868bbc59eab4761565438c1bfdcf9e8f0a4e95168c9304 extends Template
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
 * jQuery JavaScript Library v3.3.1
 * https://jquery.com/
 *
 * Includes Sizzle.js
 * https://sizzlejs.com/
 *
 * Copyright JS Foundation and other contributors
 * Released under the MIT license
 * https://jquery.org/license
 *
 * Date: 2018-01-20T17:24Z
 */
( function( global, factory ) {

\t\"use strict\";

\tif ( typeof module === \"object\" && typeof module.exports === \"object\" ) {

\t\t// For CommonJS and CommonJS-like environments where a proper `window`
\t\t// is present, execute the factory and get jQuery.
\t\t// For environments that do not have a `window` with a `document`
\t\t// (such as Node.js), expose a factory as module.exports.
\t\t// This accentuates the need for the creation of a real `window`.
\t\t// e.g. var jQuery = require(\"jquery\")(window);
\t\t// See ticket #14549 for more info.
\t\tmodule.exports = global.document ?
\t\t\tfactory( global, true ) :
\t\t\tfunction( w ) {
\t\t\t\tif ( !w.document ) {
\t\t\t\t\tthrow new Error( \"jQuery requires a window with a document\" );
\t\t\t\t}
\t\t\t\treturn factory( w );
\t\t\t};
\t} else {
\t\tfactory( global );
\t}

// Pass this if window is not defined yet
} )( typeof window !== \"undefined\" ? window : this, function( window, noGlobal ) {

// Edge <= 12 - 13+, Firefox <=18 - 45+, IE 10 - 11, Safari 5.1 - 9+, iOS 6 - 9.1
// throw exceptions when non-strict code (e.g., ASP.NET 4.5) accesses strict mode
// arguments.callee.caller (trac-13335). But as of jQuery 3.0 (2016), strict mode should be common
// enough that all such attempts are guarded in a try block.
\t\"use strict\";

\tvar arr = [];

\tvar document = window.document;

\tvar getProto = Object.getPrototypeOf;

\tvar slice = arr.slice;

\tvar concat = arr.concat;

\tvar push = arr.push;

\tvar indexOf = arr.indexOf;

\tvar class2type = {};

\tvar toString = class2type.toString;

\tvar hasOwn = class2type.hasOwnProperty;

\tvar fnToString = hasOwn.toString;

\tvar ObjectFunctionString = fnToString.call( Object );

\tvar support = {};

\tvar isFunction = function isFunction( obj ) {

\t\t// Support: Chrome <=57, Firefox <=52
\t\t// In some browsers, typeof returns \"function\" for HTML <object> elements
\t\t// (i.e., `typeof document.createElement( \"object\" ) === \"function\"`).
\t\t// We don't want to classify *any* DOM node as a function.
\t\treturn typeof obj === \"function\" && typeof obj.nodeType !== \"number\";
\t};


\tvar isWindow = function isWindow( obj ) {
\t\treturn obj != null && obj === obj.window;
\t};




\tvar preservedScriptAttributes = {
\t\ttype: true,
\t\tsrc: true,
\t\tnoModule: true
\t};

\tfunction DOMEval( code, doc, node ) {
\t\tdoc = doc || document;

\t\tvar i,
\t\t\tscript = doc.createElement( \"script\" );

\t\tscript.text = code;
\t\tif ( node ) {
\t\t\tfor ( i in preservedScriptAttributes ) {
\t\t\t\tif ( node[ i ] ) {
\t\t\t\t\tscript[ i ] = node[ i ];
\t\t\t\t}
\t\t\t}
\t\t}
\t\tdoc.head.appendChild( script ).parentNode.removeChild( script );
\t}


\tfunction toType( obj ) {
\t\tif ( obj == null ) {
\t\t\treturn obj + \"\";
\t\t}

\t\t// Support: Android <=2.3 only (functionish RegExp)
\t\treturn typeof obj === \"object\" || typeof obj === \"function\" ?
\t\t\tclass2type[ toString.call( obj ) ] || \"object\" :
\t\t\ttypeof obj;
\t}
\t/* global Symbol */
// Defining this global in .eslintrc.json would create a danger of using the global
// unguarded in another place, it seems safer to define global only for this module



\tvar
\t\tversion = \"3.3.1\",

\t\t// Define a local copy of jQuery
\t\tjQuery = function( selector, context ) {

\t\t\t// The jQuery object is actually just the init constructor 'enhanced'
\t\t\t// Need init if jQuery is called (just allow error to be thrown if not included)
\t\t\treturn new jQuery.fn.init( selector, context );
\t\t},

\t\t// Support: Android <=4.0 only
\t\t// Make sure we trim BOM and NBSP
\t\trtrim = /^[\\s\\uFEFF\\xA0]+|[\\s\\uFEFF\\xA0]+\$/g;

\tjQuery.fn = jQuery.prototype = {

\t\t// The current version of jQuery being used
\t\tjquery: version,

\t\tconstructor: jQuery,

\t\t// The default length of a jQuery object is 0
\t\tlength: 0,

\t\ttoArray: function() {
\t\t\treturn slice.call( this );
\t\t},

\t\t// Get the Nth element in the matched element set OR
\t\t// Get the whole matched element set as a clean array
\t\tget: function( num ) {

\t\t\t// Return all the elements in a clean array
\t\t\tif ( num == null ) {
\t\t\t\treturn slice.call( this );
\t\t\t}

\t\t\t// Return just the one element from the set
\t\t\treturn num < 0 ? this[ num + this.length ] : this[ num ];
\t\t},

\t\t// Take an array of elements and push it onto the stack
\t\t// (returning the new matched element set)
\t\tpushStack: function( elems ) {

\t\t\t// Build a new jQuery matched element set
\t\t\tvar ret = jQuery.merge( this.constructor(), elems );

\t\t\t// Add the old object onto the stack (as a reference)
\t\t\tret.prevObject = this;

\t\t\t// Return the newly-formed element set
\t\t\treturn ret;
\t\t},

\t\t// Execute a callback for every element in the matched set.
\t\teach: function( callback ) {
\t\t\treturn jQuery.each( this, callback );
\t\t},

\t\tmap: function( callback ) {
\t\t\treturn this.pushStack( jQuery.map( this, function( elem, i ) {
\t\t\t\treturn callback.call( elem, i, elem );
\t\t\t} ) );
\t\t},

\t\tslice: function() {
\t\t\treturn this.pushStack( slice.apply( this, arguments ) );
\t\t},

\t\tfirst: function() {
\t\t\treturn this.eq( 0 );
\t\t},

\t\tlast: function() {
\t\t\treturn this.eq( -1 );
\t\t},

\t\teq: function( i ) {
\t\t\tvar len = this.length,
\t\t\t\tj = +i + ( i < 0 ? len : 0 );
\t\t\treturn this.pushStack( j >= 0 && j < len ? [ this[ j ] ] : [] );
\t\t},

\t\tend: function() {
\t\t\treturn this.prevObject || this.constructor();
\t\t},

\t\t// For internal use only.
\t\t// Behaves like an Array's method, not like a jQuery method.
\t\tpush: push,
\t\tsort: arr.sort,
\t\tsplice: arr.splice
\t};

\tjQuery.extend = jQuery.fn.extend = function() {
\t\tvar options, name, src, copy, copyIsArray, clone,
\t\t\ttarget = arguments[ 0 ] || {},
\t\t\ti = 1,
\t\t\tlength = arguments.length,
\t\t\tdeep = false;

\t\t// Handle a deep copy situation
\t\tif ( typeof target === \"boolean\" ) {
\t\t\tdeep = target;

\t\t\t// Skip the boolean and the target
\t\t\ttarget = arguments[ i ] || {};
\t\t\ti++;
\t\t}

\t\t// Handle case when target is a string or something (possible in deep copy)
\t\tif ( typeof target !== \"object\" && !isFunction( target ) ) {
\t\t\ttarget = {};
\t\t}

\t\t// Extend jQuery itself if only one argument is passed
\t\tif ( i === length ) {
\t\t\ttarget = this;
\t\t\ti--;
\t\t}

\t\tfor ( ; i < length; i++ ) {

\t\t\t// Only deal with non-null/undefined values
\t\t\tif ( ( options = arguments[ i ] ) != null ) {

\t\t\t\t// Extend the base object
\t\t\t\tfor ( name in options ) {
\t\t\t\t\tsrc = target[ name ];
\t\t\t\t\tcopy = options[ name ];

\t\t\t\t\t// Prevent never-ending loop
\t\t\t\t\tif ( target === copy ) {
\t\t\t\t\t\tcontinue;
\t\t\t\t\t}

\t\t\t\t\t// Recurse if we're merging plain objects or arrays
\t\t\t\t\tif ( deep && copy && ( jQuery.isPlainObject( copy ) ||
\t\t\t\t\t\t( copyIsArray = Array.isArray( copy ) ) ) ) {

\t\t\t\t\t\tif ( copyIsArray ) {
\t\t\t\t\t\t\tcopyIsArray = false;
\t\t\t\t\t\t\tclone = src && Array.isArray( src ) ? src : [];

\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tclone = src && jQuery.isPlainObject( src ) ? src : {};
\t\t\t\t\t\t}

\t\t\t\t\t\t// Never move original objects, clone them
\t\t\t\t\t\ttarget[ name ] = jQuery.extend( deep, clone, copy );

\t\t\t\t\t\t// Don't bring in undefined values
\t\t\t\t\t} else if ( copy !== undefined ) {
\t\t\t\t\t\ttarget[ name ] = copy;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Return the modified object
\t\treturn target;
\t};

\tjQuery.extend( {

\t\t// Unique for each copy of jQuery on the page
\t\texpando: \"jQuery\" + ( version + Math.random() ).replace( /\\D/g, \"\" ),

\t\t// Assume jQuery is ready without the ready module
\t\tisReady: true,

\t\terror: function( msg ) {
\t\t\tthrow new Error( msg );
\t\t},

\t\tnoop: function() {},

\t\tisPlainObject: function( obj ) {
\t\t\tvar proto, Ctor;

\t\t\t// Detect obvious negatives
\t\t\t// Use toString instead of jQuery.type to catch host objects
\t\t\tif ( !obj || toString.call( obj ) !== \"[object Object]\" ) {
\t\t\t\treturn false;
\t\t\t}

\t\t\tproto = getProto( obj );

\t\t\t// Objects with no prototype (e.g., `Object.create( null )`) are plain
\t\t\tif ( !proto ) {
\t\t\t\treturn true;
\t\t\t}

\t\t\t// Objects with prototype are plain iff they were constructed by a global Object function
\t\t\tCtor = hasOwn.call( proto, \"constructor\" ) && proto.constructor;
\t\t\treturn typeof Ctor === \"function\" && fnToString.call( Ctor ) === ObjectFunctionString;
\t\t},

\t\tisEmptyObject: function( obj ) {

\t\t\t/* eslint-disable no-unused-vars */
\t\t\t// See https://github.com/eslint/eslint/issues/6125
\t\t\tvar name;

\t\t\tfor ( name in obj ) {
\t\t\t\treturn false;
\t\t\t}
\t\t\treturn true;
\t\t},

\t\t// Evaluates a script in a global context
\t\tglobalEval: function( code ) {
\t\t\tDOMEval( code );
\t\t},

\t\teach: function( obj, callback ) {
\t\t\tvar length, i = 0;

\t\t\tif ( isArrayLike( obj ) ) {
\t\t\t\tlength = obj.length;
\t\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\t\tif ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\tfor ( i in obj ) {
\t\t\t\t\tif ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\treturn obj;
\t\t},

\t\t// Support: Android <=4.0 only
\t\ttrim: function( text ) {
\t\t\treturn text == null ?
\t\t\t\t\"\" :
\t\t\t\t( text + \"\" ).replace( rtrim, \"\" );
\t\t},

\t\t// results is for internal usage only
\t\tmakeArray: function( arr, results ) {
\t\t\tvar ret = results || [];

\t\t\tif ( arr != null ) {
\t\t\t\tif ( isArrayLike( Object( arr ) ) ) {
\t\t\t\t\tjQuery.merge( ret,
\t\t\t\t\t\ttypeof arr === \"string\" ?
\t\t\t\t\t\t\t[ arr ] : arr
\t\t\t\t\t);
\t\t\t\t} else {
\t\t\t\t\tpush.call( ret, arr );
\t\t\t\t}
\t\t\t}

\t\t\treturn ret;
\t\t},

\t\tinArray: function( elem, arr, i ) {
\t\t\treturn arr == null ? -1 : indexOf.call( arr, elem, i );
\t\t},

\t\t// Support: Android <=4.0 only, PhantomJS 1 only
\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\tmerge: function( first, second ) {
\t\t\tvar len = +second.length,
\t\t\t\tj = 0,
\t\t\t\ti = first.length;

\t\t\tfor ( ; j < len; j++ ) {
\t\t\t\tfirst[ i++ ] = second[ j ];
\t\t\t}

\t\t\tfirst.length = i;

\t\t\treturn first;
\t\t},

\t\tgrep: function( elems, callback, invert ) {
\t\t\tvar callbackInverse,
\t\t\t\tmatches = [],
\t\t\t\ti = 0,
\t\t\t\tlength = elems.length,
\t\t\t\tcallbackExpect = !invert;

\t\t\t// Go through the array, only saving the items
\t\t\t// that pass the validator function
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tcallbackInverse = !callback( elems[ i ], i );
\t\t\t\tif ( callbackInverse !== callbackExpect ) {
\t\t\t\t\tmatches.push( elems[ i ] );
\t\t\t\t}
\t\t\t}

\t\t\treturn matches;
\t\t},

\t\t// arg is for internal usage only
\t\tmap: function( elems, callback, arg ) {
\t\t\tvar length, value,
\t\t\t\ti = 0,
\t\t\t\tret = [];

\t\t\t// Go through the array, translating each of the items to their new values
\t\t\tif ( isArrayLike( elems ) ) {
\t\t\t\tlength = elems.length;
\t\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\t\tvalue = callback( elems[ i ], i, arg );

\t\t\t\t\tif ( value != null ) {
\t\t\t\t\t\tret.push( value );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Go through every key on the object,
\t\t\t} else {
\t\t\t\tfor ( i in elems ) {
\t\t\t\t\tvalue = callback( elems[ i ], i, arg );

\t\t\t\t\tif ( value != null ) {
\t\t\t\t\t\tret.push( value );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Flatten any nested arrays
\t\t\treturn concat.apply( [], ret );
\t\t},

\t\t// A global GUID counter for objects
\t\tguid: 1,

\t\t// jQuery.support is not used in Core but other projects attach their
\t\t// properties to it so it needs to exist.
\t\tsupport: support
\t} );

\tif ( typeof Symbol === \"function\" ) {
\t\tjQuery.fn[ Symbol.iterator ] = arr[ Symbol.iterator ];
\t}

// Populate the class2type map
\tjQuery.each( \"Boolean Number String Function Array Date RegExp Object Error Symbol\".split( \" \" ),
\t\tfunction( i, name ) {
\t\t\tclass2type[ \"[object \" + name + \"]\" ] = name.toLowerCase();
\t\t} );

\tfunction isArrayLike( obj ) {

\t\t// Support: real iOS 8.2 only (not reproducible in simulator)
\t\t// `in` check used to prevent JIT error (gh-2145)
\t\t// hasOwn isn't used here due to false negatives
\t\t// regarding Nodelist length in IE
\t\tvar length = !!obj && \"length\" in obj && obj.length,
\t\t\ttype = toType( obj );

\t\tif ( isFunction( obj ) || isWindow( obj ) ) {
\t\t\treturn false;
\t\t}

\t\treturn type === \"array\" || length === 0 ||
\t\t\ttypeof length === \"number\" && length > 0 && ( length - 1 ) in obj;
\t}
\tvar Sizzle =
\t\t/*!
 * Sizzle CSS Selector Engine v2.3.3
 * https://sizzlejs.com/
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 *
 * Date: 2016-08-08
 */
\t\t(function( window ) {

\t\t\tvar i,
\t\t\t\tsupport,
\t\t\t\tExpr,
\t\t\t\tgetText,
\t\t\t\tisXML,
\t\t\t\ttokenize,
\t\t\t\tcompile,
\t\t\t\tselect,
\t\t\t\toutermostContext,
\t\t\t\tsortInput,
\t\t\t\thasDuplicate,

\t\t\t\t// Local document vars
\t\t\t\tsetDocument,
\t\t\t\tdocument,
\t\t\t\tdocElem,
\t\t\t\tdocumentIsHTML,
\t\t\t\trbuggyQSA,
\t\t\t\trbuggyMatches,
\t\t\t\tmatches,
\t\t\t\tcontains,

\t\t\t\t// Instance-specific data
\t\t\t\texpando = \"sizzle\" + 1 * new Date(),
\t\t\t\tpreferredDoc = window.document,
\t\t\t\tdirruns = 0,
\t\t\t\tdone = 0,
\t\t\t\tclassCache = createCache(),
\t\t\t\ttokenCache = createCache(),
\t\t\t\tcompilerCache = createCache(),
\t\t\t\tsortOrder = function( a, b ) {
\t\t\t\t\tif ( a === b ) {
\t\t\t\t\t\thasDuplicate = true;
\t\t\t\t\t}
\t\t\t\t\treturn 0;
\t\t\t\t},

\t\t\t\t// Instance methods
\t\t\t\thasOwn = ({}).hasOwnProperty,
\t\t\t\tarr = [],
\t\t\t\tpop = arr.pop,
\t\t\t\tpush_native = arr.push,
\t\t\t\tpush = arr.push,
\t\t\t\tslice = arr.slice,
\t\t\t\t// Use a stripped-down indexOf as it's faster than native
\t\t\t\t// https://jsperf.com/thor-indexof-vs-for/5
\t\t\t\tindexOf = function( list, elem ) {
\t\t\t\t\tvar i = 0,
\t\t\t\t\t\tlen = list.length;
\t\t\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\t\t\tif ( list[i] === elem ) {
\t\t\t\t\t\t\treturn i;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\treturn -1;
\t\t\t\t},

\t\t\t\tbooleans = \"checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped\",

\t\t\t\t// Regular expressions

\t\t\t\t// http://www.w3.org/TR/css3-selectors/#whitespace
\t\t\t\twhitespace = \"[\\\\x20\\\\t\\\\r\\\\n\\\\f]\",

\t\t\t\t// http://www.w3.org/TR/CSS21/syndata.html#value-def-identifier
\t\t\t\tidentifier = \"(?:\\\\\\\\.|[\\\\w-]|[^\\0-\\\\xa0])+\",

\t\t\t\t// Attribute selectors: http://www.w3.org/TR/selectors/#attribute-selectors
\t\t\t\tattributes = \"\\\\[\" + whitespace + \"*(\" + identifier + \")(?:\" + whitespace +
\t\t\t\t\t// Operator (capture 2)
\t\t\t\t\t\"*([*^\$|!~]?=)\" + whitespace +
\t\t\t\t\t// \"Attribute values must be CSS identifiers [capture 5] or strings [capture 3 or capture 4]\"
\t\t\t\t\t\"*(?:'((?:\\\\\\\\.|[^\\\\\\\\'])*)'|\\\"((?:\\\\\\\\.|[^\\\\\\\\\\\"])*)\\\"|(\" + identifier + \"))|)\" + whitespace +
\t\t\t\t\t\"*\\\\]\",

\t\t\t\tpseudos = \":(\" + identifier + \")(?:\\\\((\" +
\t\t\t\t\t// To reduce the number of selectors needing tokenize in the preFilter, prefer arguments:
\t\t\t\t\t// 1. quoted (capture 3; capture 4 or capture 5)
\t\t\t\t\t\"('((?:\\\\\\\\.|[^\\\\\\\\'])*)'|\\\"((?:\\\\\\\\.|[^\\\\\\\\\\\"])*)\\\")|\" +
\t\t\t\t\t// 2. simple (capture 6)
\t\t\t\t\t\"((?:\\\\\\\\.|[^\\\\\\\\()[\\\\]]|\" + attributes + \")*)|\" +
\t\t\t\t\t// 3. anything else (capture 2)
\t\t\t\t\t\".*\" +
\t\t\t\t\t\")\\\\)|)\",

\t\t\t\t// Leading and non-escaped trailing whitespace, capturing some non-whitespace characters preceding the latter
\t\t\t\trwhitespace = new RegExp( whitespace + \"+\", \"g\" ),
\t\t\t\trtrim = new RegExp( \"^\" + whitespace + \"+|((?:^|[^\\\\\\\\])(?:\\\\\\\\.)*)\" + whitespace + \"+\$\", \"g\" ),

\t\t\t\trcomma = new RegExp( \"^\" + whitespace + \"*,\" + whitespace + \"*\" ),
\t\t\t\trcombinators = new RegExp( \"^\" + whitespace + \"*([>+~]|\" + whitespace + \")\" + whitespace + \"*\" ),

\t\t\t\trattributeQuotes = new RegExp( \"=\" + whitespace + \"*([^\\\\]'\\\"]*?)\" + whitespace + \"*\\\\]\", \"g\" ),

\t\t\t\trpseudo = new RegExp( pseudos ),
\t\t\t\tridentifier = new RegExp( \"^\" + identifier + \"\$\" ),

\t\t\t\tmatchExpr = {
\t\t\t\t\t\"ID\": new RegExp( \"^#(\" + identifier + \")\" ),
\t\t\t\t\t\"CLASS\": new RegExp( \"^\\\\.(\" + identifier + \")\" ),
\t\t\t\t\t\"TAG\": new RegExp( \"^(\" + identifier + \"|[*])\" ),
\t\t\t\t\t\"ATTR\": new RegExp( \"^\" + attributes ),
\t\t\t\t\t\"PSEUDO\": new RegExp( \"^\" + pseudos ),
\t\t\t\t\t\"CHILD\": new RegExp( \"^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\\\(\" + whitespace +
\t\t\t\t\t\t\"*(even|odd|(([+-]|)(\\\\d*)n|)\" + whitespace + \"*(?:([+-]|)\" + whitespace +
\t\t\t\t\t\t\"*(\\\\d+)|))\" + whitespace + \"*\\\\)|)\", \"i\" ),
\t\t\t\t\t\"bool\": new RegExp( \"^(?:\" + booleans + \")\$\", \"i\" ),
\t\t\t\t\t// For use in libraries implementing .is()
\t\t\t\t\t// We use this for POS matching in `select`
\t\t\t\t\t\"needsContext\": new RegExp( \"^\" + whitespace + \"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\\\(\" +
\t\t\t\t\t\twhitespace + \"*((?:-\\\\d)?\\\\d*)\" + whitespace + \"*\\\\)|)(?=[^-]|\$)\", \"i\" )
\t\t\t\t},

\t\t\t\trinputs = /^(?:input|select|textarea|button)\$/i,
\t\t\t\trheader = /^h\\d\$/i,

\t\t\t\trnative = /^[^{]+\\{\\s*\\[native \\w/,

\t\t\t\t// Easily-parseable/retrievable ID or TAG or CLASS selectors
\t\t\t\trquickExpr = /^(?:#([\\w-]+)|(\\w+)|\\.([\\w-]+))\$/,

\t\t\t\trsibling = /[+~]/,

\t\t\t\t// CSS escapes
\t\t\t\t// http://www.w3.org/TR/CSS21/syndata.html#escaped-characters
\t\t\t\trunescape = new RegExp( \"\\\\\\\\([\\\\da-f]{1,6}\" + whitespace + \"?|(\" + whitespace + \")|.)\", \"ig\" ),
\t\t\t\tfunescape = function( _, escaped, escapedWhitespace ) {
\t\t\t\t\tvar high = \"0x\" + escaped - 0x10000;
\t\t\t\t\t// NaN means non-codepoint
\t\t\t\t\t// Support: Firefox<24
\t\t\t\t\t// Workaround erroneous numeric interpretation of +\"0x\"
\t\t\t\t\treturn high !== high || escapedWhitespace ?
\t\t\t\t\t\tescaped :
\t\t\t\t\t\thigh < 0 ?
\t\t\t\t\t\t\t// BMP codepoint
\t\t\t\t\t\t\tString.fromCharCode( high + 0x10000 ) :
\t\t\t\t\t\t\t// Supplemental Plane codepoint (surrogate pair)
\t\t\t\t\t\t\tString.fromCharCode( high >> 10 | 0xD800, high & 0x3FF | 0xDC00 );
\t\t\t\t},

\t\t\t\t// CSS string/identifier serialization
\t\t\t\t// https://drafts.csswg.org/cssom/#common-serializing-idioms
\t\t\t\trcssescape = /([\\0-\\x1f\\x7f]|^-?\\d)|^-\$|[^\\0-\\x1f\\x7f-\\uFFFF\\w-]/g,
\t\t\t\tfcssescape = function( ch, asCodePoint ) {
\t\t\t\t\tif ( asCodePoint ) {

\t\t\t\t\t\t// U+0000 NULL becomes U+FFFD REPLACEMENT CHARACTER
\t\t\t\t\t\tif ( ch === \"\\0\" ) {
\t\t\t\t\t\t\treturn \"\\uFFFD\";
\t\t\t\t\t\t}

\t\t\t\t\t\t// Control characters and (dependent upon position) numbers get escaped as code points
\t\t\t\t\t\treturn ch.slice( 0, -1 ) + \"\\\\\" + ch.charCodeAt( ch.length - 1 ).toString( 16 ) + \" \";
\t\t\t\t\t}

\t\t\t\t\t// Other potentially-special ASCII characters get backslash-escaped
\t\t\t\t\treturn \"\\\\\" + ch;
\t\t\t\t},

\t\t\t\t// Used for iframes
\t\t\t\t// See setDocument()
\t\t\t\t// Removing the function wrapper causes a \"Permission Denied\"
\t\t\t\t// error in IE
\t\t\t\tunloadHandler = function() {
\t\t\t\t\tsetDocument();
\t\t\t\t},

\t\t\t\tdisabledAncestor = addCombinator(
\t\t\t\t\tfunction( elem ) {
\t\t\t\t\t\treturn elem.disabled === true && (\"form\" in elem || \"label\" in elem);
\t\t\t\t\t},
\t\t\t\t\t{ dir: \"parentNode\", next: \"legend\" }
\t\t\t\t);

// Optimize for push.apply( _, NodeList )
\t\t\ttry {
\t\t\t\tpush.apply(
\t\t\t\t\t(arr = slice.call( preferredDoc.childNodes )),
\t\t\t\t\tpreferredDoc.childNodes
\t\t\t\t);
\t\t\t\t// Support: Android<4.0
\t\t\t\t// Detect silently failing push.apply
\t\t\t\tarr[ preferredDoc.childNodes.length ].nodeType;
\t\t\t} catch ( e ) {
\t\t\t\tpush = { apply: arr.length ?

\t\t\t\t\t\t// Leverage slice if possible
\t\t\t\t\t\tfunction( target, els ) {
\t\t\t\t\t\t\tpush_native.apply( target, slice.call(els) );
\t\t\t\t\t\t} :

\t\t\t\t\t\t// Support: IE<9
\t\t\t\t\t\t// Otherwise append directly
\t\t\t\t\t\tfunction( target, els ) {
\t\t\t\t\t\t\tvar j = target.length,
\t\t\t\t\t\t\t\ti = 0;
\t\t\t\t\t\t\t// Can't trust NodeList.length
\t\t\t\t\t\t\twhile ( (target[j++] = els[i++]) ) {}
\t\t\t\t\t\t\ttarget.length = j - 1;
\t\t\t\t\t\t}
\t\t\t\t};
\t\t\t}

\t\t\tfunction Sizzle( selector, context, results, seed ) {
\t\t\t\tvar m, i, elem, nid, match, groups, newSelector,
\t\t\t\t\tnewContext = context && context.ownerDocument,

\t\t\t\t\t// nodeType defaults to 9, since context defaults to document
\t\t\t\t\tnodeType = context ? context.nodeType : 9;

\t\t\t\tresults = results || [];

\t\t\t\t// Return early from calls with invalid selector or context
\t\t\t\tif ( typeof selector !== \"string\" || !selector ||
\t\t\t\t\tnodeType !== 1 && nodeType !== 9 && nodeType !== 11 ) {

\t\t\t\t\treturn results;
\t\t\t\t}

\t\t\t\t// Try to shortcut find operations (as opposed to filters) in HTML documents
\t\t\t\tif ( !seed ) {

\t\t\t\t\tif ( ( context ? context.ownerDocument || context : preferredDoc ) !== document ) {
\t\t\t\t\t\tsetDocument( context );
\t\t\t\t\t}
\t\t\t\t\tcontext = context || document;

\t\t\t\t\tif ( documentIsHTML ) {

\t\t\t\t\t\t// If the selector is sufficiently simple, try using a \"get*By*\" DOM method
\t\t\t\t\t\t// (excepting DocumentFragment context, where the methods don't exist)
\t\t\t\t\t\tif ( nodeType !== 11 && (match = rquickExpr.exec( selector )) ) {

\t\t\t\t\t\t\t// ID selector
\t\t\t\t\t\t\tif ( (m = match[1]) ) {

\t\t\t\t\t\t\t\t// Document context
\t\t\t\t\t\t\t\tif ( nodeType === 9 ) {
\t\t\t\t\t\t\t\t\tif ( (elem = context.getElementById( m )) ) {

\t\t\t\t\t\t\t\t\t\t// Support: IE, Opera, Webkit
\t\t\t\t\t\t\t\t\t\t// TODO: identify versions
\t\t\t\t\t\t\t\t\t\t// getElementById can match elements by name instead of ID
\t\t\t\t\t\t\t\t\t\tif ( elem.id === m ) {
\t\t\t\t\t\t\t\t\t\t\tresults.push( elem );
\t\t\t\t\t\t\t\t\t\t\treturn results;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\treturn results;
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t// Element context
\t\t\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\t\t// Support: IE, Opera, Webkit
\t\t\t\t\t\t\t\t\t// TODO: identify versions
\t\t\t\t\t\t\t\t\t// getElementById can match elements by name instead of ID
\t\t\t\t\t\t\t\t\tif ( newContext && (elem = newContext.getElementById( m )) &&
\t\t\t\t\t\t\t\t\t\tcontains( context, elem ) &&
\t\t\t\t\t\t\t\t\t\telem.id === m ) {

\t\t\t\t\t\t\t\t\t\tresults.push( elem );
\t\t\t\t\t\t\t\t\t\treturn results;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t// Type selector
\t\t\t\t\t\t\t} else if ( match[2] ) {
\t\t\t\t\t\t\t\tpush.apply( results, context.getElementsByTagName( selector ) );
\t\t\t\t\t\t\t\treturn results;

\t\t\t\t\t\t\t\t// Class selector
\t\t\t\t\t\t\t} else if ( (m = match[3]) && support.getElementsByClassName &&
\t\t\t\t\t\t\t\tcontext.getElementsByClassName ) {

\t\t\t\t\t\t\t\tpush.apply( results, context.getElementsByClassName( m ) );
\t\t\t\t\t\t\t\treturn results;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t// Take advantage of querySelectorAll
\t\t\t\t\t\tif ( support.qsa &&
\t\t\t\t\t\t\t!compilerCache[ selector + \" \" ] &&
\t\t\t\t\t\t\t(!rbuggyQSA || !rbuggyQSA.test( selector )) ) {

\t\t\t\t\t\t\tif ( nodeType !== 1 ) {
\t\t\t\t\t\t\t\tnewContext = context;
\t\t\t\t\t\t\t\tnewSelector = selector;

\t\t\t\t\t\t\t\t// qSA looks outside Element context, which is not what we want
\t\t\t\t\t\t\t\t// Thanks to Andrew Dupont for this workaround technique
\t\t\t\t\t\t\t\t// Support: IE <=8
\t\t\t\t\t\t\t\t// Exclude object elements
\t\t\t\t\t\t\t} else if ( context.nodeName.toLowerCase() !== \"object\" ) {

\t\t\t\t\t\t\t\t// Capture the context ID, setting it first if necessary
\t\t\t\t\t\t\t\tif ( (nid = context.getAttribute( \"id\" )) ) {
\t\t\t\t\t\t\t\t\tnid = nid.replace( rcssescape, fcssescape );
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tcontext.setAttribute( \"id\", (nid = expando) );
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t// Prefix every selector in the list
\t\t\t\t\t\t\t\tgroups = tokenize( selector );
\t\t\t\t\t\t\t\ti = groups.length;
\t\t\t\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\t\t\t\tgroups[i] = \"#\" + nid + \" \" + toSelector( groups[i] );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tnewSelector = groups.join( \",\" );

\t\t\t\t\t\t\t\t// Expand context for sibling selectors
\t\t\t\t\t\t\t\tnewContext = rsibling.test( selector ) && testContext( context.parentNode ) ||
\t\t\t\t\t\t\t\t\tcontext;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif ( newSelector ) {
\t\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\t\tpush.apply( results,
\t\t\t\t\t\t\t\t\t\tnewContext.querySelectorAll( newSelector )
\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\treturn results;
\t\t\t\t\t\t\t\t} catch ( qsaError ) {
\t\t\t\t\t\t\t\t} finally {
\t\t\t\t\t\t\t\t\tif ( nid === expando ) {
\t\t\t\t\t\t\t\t\t\tcontext.removeAttribute( \"id\" );
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// All others
\t\t\t\treturn select( selector.replace( rtrim, \"\$1\" ), context, results, seed );
\t\t\t}

\t\t\t/**
\t\t\t * Create key-value caches of limited size
\t\t\t * @returns {function(string, object)} Returns the Object data after storing it on itself with
\t\t\t *\tproperty name the (space-suffixed) string and (if the cache is larger than Expr.cacheLength)
\t\t\t *\tdeleting the oldest entry
\t\t\t */
\t\t\tfunction createCache() {
\t\t\t\tvar keys = [];

\t\t\t\tfunction cache( key, value ) {
\t\t\t\t\t// Use (key + \" \") to avoid collision with native prototype properties (see Issue #157)
\t\t\t\t\tif ( keys.push( key + \" \" ) > Expr.cacheLength ) {
\t\t\t\t\t\t// Only keep the most recent entries
\t\t\t\t\t\tdelete cache[ keys.shift() ];
\t\t\t\t\t}
\t\t\t\t\treturn (cache[ key + \" \" ] = value);
\t\t\t\t}
\t\t\t\treturn cache;
\t\t\t}

\t\t\t/**
\t\t\t * Mark a function for special use by Sizzle
\t\t\t * @param {Function} fn The function to mark
\t\t\t */
\t\t\tfunction markFunction( fn ) {
\t\t\t\tfn[ expando ] = true;
\t\t\t\treturn fn;
\t\t\t}

\t\t\t/**
\t\t\t * Support testing using an element
\t\t\t * @param {Function} fn Passed the created element and returns a boolean result
\t\t\t */
\t\t\tfunction assert( fn ) {
\t\t\t\tvar el = document.createElement(\"fieldset\");

\t\t\t\ttry {
\t\t\t\t\treturn !!fn( el );
\t\t\t\t} catch (e) {
\t\t\t\t\treturn false;
\t\t\t\t} finally {
\t\t\t\t\t// Remove from its parent by default
\t\t\t\t\tif ( el.parentNode ) {
\t\t\t\t\t\tel.parentNode.removeChild( el );
\t\t\t\t\t}
\t\t\t\t\t// release memory in IE
\t\t\t\t\tel = null;
\t\t\t\t}
\t\t\t}

\t\t\t/**
\t\t\t * Adds the same handler for all of the specified attrs
\t\t\t * @param {String} attrs Pipe-separated list of attributes
\t\t\t * @param {Function} handler The method that will be applied
\t\t\t */
\t\t\tfunction addHandle( attrs, handler ) {
\t\t\t\tvar arr = attrs.split(\"|\"),
\t\t\t\t\ti = arr.length;

\t\t\t\twhile ( i-- ) {
\t\t\t\t\tExpr.attrHandle[ arr[i] ] = handler;
\t\t\t\t}
\t\t\t}

\t\t\t/**
\t\t\t * Checks document order of two siblings
\t\t\t * @param {Element} a
\t\t\t * @param {Element} b
\t\t\t * @returns {Number} Returns less than 0 if a precedes b, greater than 0 if a follows b
\t\t\t */
\t\t\tfunction siblingCheck( a, b ) {
\t\t\t\tvar cur = b && a,
\t\t\t\t\tdiff = cur && a.nodeType === 1 && b.nodeType === 1 &&
\t\t\t\t\t\ta.sourceIndex - b.sourceIndex;

\t\t\t\t// Use IE sourceIndex if available on both nodes
\t\t\t\tif ( diff ) {
\t\t\t\t\treturn diff;
\t\t\t\t}

\t\t\t\t// Check if b follows a
\t\t\t\tif ( cur ) {
\t\t\t\t\twhile ( (cur = cur.nextSibling) ) {
\t\t\t\t\t\tif ( cur === b ) {
\t\t\t\t\t\t\treturn -1;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn a ? 1 : -1;
\t\t\t}

\t\t\t/**
\t\t\t * Returns a function to use in pseudos for input types
\t\t\t * @param {String} type
\t\t\t */
\t\t\tfunction createInputPseudo( type ) {
\t\t\t\treturn function( elem ) {
\t\t\t\t\tvar name = elem.nodeName.toLowerCase();
\t\t\t\t\treturn name === \"input\" && elem.type === type;
\t\t\t\t};
\t\t\t}

\t\t\t/**
\t\t\t * Returns a function to use in pseudos for buttons
\t\t\t * @param {String} type
\t\t\t */
\t\t\tfunction createButtonPseudo( type ) {
\t\t\t\treturn function( elem ) {
\t\t\t\t\tvar name = elem.nodeName.toLowerCase();
\t\t\t\t\treturn (name === \"input\" || name === \"button\") && elem.type === type;
\t\t\t\t};
\t\t\t}

\t\t\t/**
\t\t\t * Returns a function to use in pseudos for :enabled/:disabled
\t\t\t * @param {Boolean} disabled true for :disabled; false for :enabled
\t\t\t */
\t\t\tfunction createDisabledPseudo( disabled ) {

\t\t\t\t// Known :disabled false positives: fieldset[disabled] > legend:nth-of-type(n+2) :can-disable
\t\t\t\treturn function( elem ) {

\t\t\t\t\t// Only certain elements can match :enabled or :disabled
\t\t\t\t\t// https://html.spec.whatwg.org/multipage/scripting.html#selector-enabled
\t\t\t\t\t// https://html.spec.whatwg.org/multipage/scripting.html#selector-disabled
\t\t\t\t\tif ( \"form\" in elem ) {

\t\t\t\t\t\t// Check for inherited disabledness on relevant non-disabled elements:
\t\t\t\t\t\t// * listed form-associated elements in a disabled fieldset
\t\t\t\t\t\t//   https://html.spec.whatwg.org/multipage/forms.html#category-listed
\t\t\t\t\t\t//   https://html.spec.whatwg.org/multipage/forms.html#concept-fe-disabled
\t\t\t\t\t\t// * option elements in a disabled optgroup
\t\t\t\t\t\t//   https://html.spec.whatwg.org/multipage/forms.html#concept-option-disabled
\t\t\t\t\t\t// All such elements have a \"form\" property.
\t\t\t\t\t\tif ( elem.parentNode && elem.disabled === false ) {

\t\t\t\t\t\t\t// Option elements defer to a parent optgroup if present
\t\t\t\t\t\t\tif ( \"label\" in elem ) {
\t\t\t\t\t\t\t\tif ( \"label\" in elem.parentNode ) {
\t\t\t\t\t\t\t\t\treturn elem.parentNode.disabled === disabled;
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\treturn elem.disabled === disabled;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t// Support: IE 6 - 11
\t\t\t\t\t\t\t// Use the isDisabled shortcut property to check for disabled fieldset ancestors
\t\t\t\t\t\t\treturn elem.isDisabled === disabled ||

\t\t\t\t\t\t\t\t// Where there is no isDisabled, check manually
\t\t\t\t\t\t\t\t/* jshint -W018 */
\t\t\t\t\t\t\t\telem.isDisabled !== !disabled &&
\t\t\t\t\t\t\t\tdisabledAncestor( elem ) === disabled;
\t\t\t\t\t\t}

\t\t\t\t\t\treturn elem.disabled === disabled;

\t\t\t\t\t\t// Try to winnow out elements that can't be disabled before trusting the disabled property.
\t\t\t\t\t\t// Some victims get caught in our net (label, legend, menu, track), but it shouldn't
\t\t\t\t\t\t// even exist on them, let alone have a boolean value.
\t\t\t\t\t} else if ( \"label\" in elem ) {
\t\t\t\t\t\treturn elem.disabled === disabled;
\t\t\t\t\t}

\t\t\t\t\t// Remaining elements are neither :enabled nor :disabled
\t\t\t\t\treturn false;
\t\t\t\t};
\t\t\t}

\t\t\t/**
\t\t\t * Returns a function to use in pseudos for positionals
\t\t\t * @param {Function} fn
\t\t\t */
\t\t\tfunction createPositionalPseudo( fn ) {
\t\t\t\treturn markFunction(function( argument ) {
\t\t\t\t\targument = +argument;
\t\t\t\t\treturn markFunction(function( seed, matches ) {
\t\t\t\t\t\tvar j,
\t\t\t\t\t\t\tmatchIndexes = fn( [], seed.length, argument ),
\t\t\t\t\t\t\ti = matchIndexes.length;

\t\t\t\t\t\t// Match elements found at the specified indexes
\t\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\t\tif ( seed[ (j = matchIndexes[i]) ] ) {
\t\t\t\t\t\t\t\tseed[j] = !(matches[j] = seed[j]);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}

\t\t\t/**
\t\t\t * Checks a node for validity as a Sizzle context
\t\t\t * @param {Element|Object=} context
\t\t\t * @returns {Element|Object|Boolean} The input node if acceptable, otherwise a falsy value
\t\t\t */
\t\t\tfunction testContext( context ) {
\t\t\t\treturn context && typeof context.getElementsByTagName !== \"undefined\" && context;
\t\t\t}

// Expose support vars for convenience
\t\t\tsupport = Sizzle.support = {};

\t\t\t/**
\t\t\t * Detects XML nodes
\t\t\t * @param {Element|Object} elem An element or a document
\t\t\t * @returns {Boolean} True iff elem is a non-HTML XML node
\t\t\t */
\t\t\tisXML = Sizzle.isXML = function( elem ) {
\t\t\t\t// documentElement is verified for cases where it doesn't yet exist
\t\t\t\t// (such as loading iframes in IE - #4833)
\t\t\t\tvar documentElement = elem && (elem.ownerDocument || elem).documentElement;
\t\t\t\treturn documentElement ? documentElement.nodeName !== \"HTML\" : false;
\t\t\t};

\t\t\t/**
\t\t\t * Sets document-related variables once based on the current document
\t\t\t * @param {Element|Object} [doc] An element or document object to use to set the document
\t\t\t * @returns {Object} Returns the current document
\t\t\t */
\t\t\tsetDocument = Sizzle.setDocument = function( node ) {
\t\t\t\tvar hasCompare, subWindow,
\t\t\t\t\tdoc = node ? node.ownerDocument || node : preferredDoc;

\t\t\t\t// Return early if doc is invalid or already selected
\t\t\t\tif ( doc === document || doc.nodeType !== 9 || !doc.documentElement ) {
\t\t\t\t\treturn document;
\t\t\t\t}

\t\t\t\t// Update global variables
\t\t\t\tdocument = doc;
\t\t\t\tdocElem = document.documentElement;
\t\t\t\tdocumentIsHTML = !isXML( document );

\t\t\t\t// Support: IE 9-11, Edge
\t\t\t\t// Accessing iframe documents after unload throws \"permission denied\" errors (jQuery #13936)
\t\t\t\tif ( preferredDoc !== document &&
\t\t\t\t\t(subWindow = document.defaultView) && subWindow.top !== subWindow ) {

\t\t\t\t\t// Support: IE 11, Edge
\t\t\t\t\tif ( subWindow.addEventListener ) {
\t\t\t\t\t\tsubWindow.addEventListener( \"unload\", unloadHandler, false );

\t\t\t\t\t\t// Support: IE 9 - 10 only
\t\t\t\t\t} else if ( subWindow.attachEvent ) {
\t\t\t\t\t\tsubWindow.attachEvent( \"onunload\", unloadHandler );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t/* Attributes
\t---------------------------------------------------------------------- */

\t\t\t\t// Support: IE<8
\t\t\t\t// Verify that getAttribute really returns attributes and not properties
\t\t\t\t// (excepting IE8 booleans)
\t\t\t\tsupport.attributes = assert(function( el ) {
\t\t\t\t\tel.className = \"i\";
\t\t\t\t\treturn !el.getAttribute(\"className\");
\t\t\t\t});

\t\t\t\t/* getElement(s)By*
\t---------------------------------------------------------------------- */

\t\t\t\t// Check if getElementsByTagName(\"*\") returns only elements
\t\t\t\tsupport.getElementsByTagName = assert(function( el ) {
\t\t\t\t\tel.appendChild( document.createComment(\"\") );
\t\t\t\t\treturn !el.getElementsByTagName(\"*\").length;
\t\t\t\t});

\t\t\t\t// Support: IE<9
\t\t\t\tsupport.getElementsByClassName = rnative.test( document.getElementsByClassName );

\t\t\t\t// Support: IE<10
\t\t\t\t// Check if getElementById returns elements by name
\t\t\t\t// The broken getElementById methods don't pick up programmatically-set names,
\t\t\t\t// so use a roundabout getElementsByName test
\t\t\t\tsupport.getById = assert(function( el ) {
\t\t\t\t\tdocElem.appendChild( el ).id = expando;
\t\t\t\t\treturn !document.getElementsByName || !document.getElementsByName( expando ).length;
\t\t\t\t});

\t\t\t\t// ID filter and find
\t\t\t\tif ( support.getById ) {
\t\t\t\t\tExpr.filter[\"ID\"] = function( id ) {
\t\t\t\t\t\tvar attrId = id.replace( runescape, funescape );
\t\t\t\t\t\treturn function( elem ) {
\t\t\t\t\t\t\treturn elem.getAttribute(\"id\") === attrId;
\t\t\t\t\t\t};
\t\t\t\t\t};
\t\t\t\t\tExpr.find[\"ID\"] = function( id, context ) {
\t\t\t\t\t\tif ( typeof context.getElementById !== \"undefined\" && documentIsHTML ) {
\t\t\t\t\t\t\tvar elem = context.getElementById( id );
\t\t\t\t\t\t\treturn elem ? [ elem ] : [];
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t} else {
\t\t\t\t\tExpr.filter[\"ID\"] =  function( id ) {
\t\t\t\t\t\tvar attrId = id.replace( runescape, funescape );
\t\t\t\t\t\treturn function( elem ) {
\t\t\t\t\t\t\tvar node = typeof elem.getAttributeNode !== \"undefined\" &&
\t\t\t\t\t\t\t\telem.getAttributeNode(\"id\");
\t\t\t\t\t\t\treturn node && node.value === attrId;
\t\t\t\t\t\t};
\t\t\t\t\t};

\t\t\t\t\t// Support: IE 6 - 7 only
\t\t\t\t\t// getElementById is not reliable as a find shortcut
\t\t\t\t\tExpr.find[\"ID\"] = function( id, context ) {
\t\t\t\t\t\tif ( typeof context.getElementById !== \"undefined\" && documentIsHTML ) {
\t\t\t\t\t\t\tvar node, i, elems,
\t\t\t\t\t\t\t\telem = context.getElementById( id );

\t\t\t\t\t\t\tif ( elem ) {

\t\t\t\t\t\t\t\t// Verify the id attribute
\t\t\t\t\t\t\t\tnode = elem.getAttributeNode(\"id\");
\t\t\t\t\t\t\t\tif ( node && node.value === id ) {
\t\t\t\t\t\t\t\t\treturn [ elem ];
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t// Fall back on getElementsByName
\t\t\t\t\t\t\t\telems = context.getElementsByName( id );
\t\t\t\t\t\t\t\ti = 0;
\t\t\t\t\t\t\t\twhile ( (elem = elems[i++]) ) {
\t\t\t\t\t\t\t\t\tnode = elem.getAttributeNode(\"id\");
\t\t\t\t\t\t\t\t\tif ( node && node.value === id ) {
\t\t\t\t\t\t\t\t\t\treturn [ elem ];
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\treturn [];
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t}

\t\t\t\t// Tag
\t\t\t\tExpr.find[\"TAG\"] = support.getElementsByTagName ?
\t\t\t\t\tfunction( tag, context ) {
\t\t\t\t\t\tif ( typeof context.getElementsByTagName !== \"undefined\" ) {
\t\t\t\t\t\t\treturn context.getElementsByTagName( tag );

\t\t\t\t\t\t\t// DocumentFragment nodes don't have gEBTN
\t\t\t\t\t\t} else if ( support.qsa ) {
\t\t\t\t\t\t\treturn context.querySelectorAll( tag );
\t\t\t\t\t\t}
\t\t\t\t\t} :

\t\t\t\t\tfunction( tag, context ) {
\t\t\t\t\t\tvar elem,
\t\t\t\t\t\t\ttmp = [],
\t\t\t\t\t\t\ti = 0,
\t\t\t\t\t\t\t// By happy coincidence, a (broken) gEBTN appears on DocumentFragment nodes too
\t\t\t\t\t\t\tresults = context.getElementsByTagName( tag );

\t\t\t\t\t\t// Filter out possible comments
\t\t\t\t\t\tif ( tag === \"*\" ) {
\t\t\t\t\t\t\twhile ( (elem = results[i++]) ) {
\t\t\t\t\t\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\t\t\t\t\t\ttmp.push( elem );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\treturn tmp;
\t\t\t\t\t\t}
\t\t\t\t\t\treturn results;
\t\t\t\t\t};

\t\t\t\t// Class
\t\t\t\tExpr.find[\"CLASS\"] = support.getElementsByClassName && function( className, context ) {
\t\t\t\t\tif ( typeof context.getElementsByClassName !== \"undefined\" && documentIsHTML ) {
\t\t\t\t\t\treturn context.getElementsByClassName( className );
\t\t\t\t\t}
\t\t\t\t};

\t\t\t\t/* QSA/matchesSelector
\t---------------------------------------------------------------------- */

\t\t\t\t// QSA and matchesSelector support

\t\t\t\t// matchesSelector(:active) reports false when true (IE9/Opera 11.5)
\t\t\t\trbuggyMatches = [];

\t\t\t\t// qSa(:focus) reports false when true (Chrome 21)
\t\t\t\t// We allow this because of a bug in IE8/9 that throws an error
\t\t\t\t// whenever `document.activeElement` is accessed on an iframe
\t\t\t\t// So, we allow :focus to pass through QSA all the time to avoid the IE error
\t\t\t\t// See https://bugs.jquery.com/ticket/13378
\t\t\t\trbuggyQSA = [];

\t\t\t\tif ( (support.qsa = rnative.test( document.querySelectorAll )) ) {
\t\t\t\t\t// Build QSA regex
\t\t\t\t\t// Regex strategy adopted from Diego Perini
\t\t\t\t\tassert(function( el ) {
\t\t\t\t\t\t// Select is set to empty string on purpose
\t\t\t\t\t\t// This is to test IE's treatment of not explicitly
\t\t\t\t\t\t// setting a boolean content attribute,
\t\t\t\t\t\t// since its presence should be enough
\t\t\t\t\t\t// https://bugs.jquery.com/ticket/12359
\t\t\t\t\t\tdocElem.appendChild( el ).innerHTML = \"<a id='\" + expando + \"'></a>\" +
\t\t\t\t\t\t\t\"<select id='\" + expando + \"-\\r\\\\' msallowcapture=''>\" +
\t\t\t\t\t\t\t\"<option selected=''></option></select>\";

\t\t\t\t\t\t// Support: IE8, Opera 11-12.16
\t\t\t\t\t\t// Nothing should be selected when empty strings follow ^= or \$= or *=
\t\t\t\t\t\t// The test attribute must be unknown in Opera but \"safe\" for WinRT
\t\t\t\t\t\t// https://msdn.microsoft.com/en-us/library/ie/hh465388.aspx#attribute_section
\t\t\t\t\t\tif ( el.querySelectorAll(\"[msallowcapture^='']\").length ) {
\t\t\t\t\t\t\trbuggyQSA.push( \"[*^\$]=\" + whitespace + \"*(?:''|\\\"\\\")\" );
\t\t\t\t\t\t}

\t\t\t\t\t\t// Support: IE8
\t\t\t\t\t\t// Boolean attributes and \"value\" are not treated correctly
\t\t\t\t\t\tif ( !el.querySelectorAll(\"[selected]\").length ) {
\t\t\t\t\t\t\trbuggyQSA.push( \"\\\\[\" + whitespace + \"*(?:value|\" + booleans + \")\" );
\t\t\t\t\t\t}

\t\t\t\t\t\t// Support: Chrome<29, Android<4.4, Safari<7.0+, iOS<7.0+, PhantomJS<1.9.8+
\t\t\t\t\t\tif ( !el.querySelectorAll( \"[id~=\" + expando + \"-]\" ).length ) {
\t\t\t\t\t\t\trbuggyQSA.push(\"~=\");
\t\t\t\t\t\t}

\t\t\t\t\t\t// Webkit/Opera - :checked should return selected option elements
\t\t\t\t\t\t// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
\t\t\t\t\t\t// IE8 throws error here and will not see later tests
\t\t\t\t\t\tif ( !el.querySelectorAll(\":checked\").length ) {
\t\t\t\t\t\t\trbuggyQSA.push(\":checked\");
\t\t\t\t\t\t}

\t\t\t\t\t\t// Support: Safari 8+, iOS 8+
\t\t\t\t\t\t// https://bugs.webkit.org/show_bug.cgi?id=136851
\t\t\t\t\t\t// In-page `selector#id sibling-combinator selector` fails
\t\t\t\t\t\tif ( !el.querySelectorAll( \"a#\" + expando + \"+*\" ).length ) {
\t\t\t\t\t\t\trbuggyQSA.push(\".#.+[+~]\");
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\tassert(function( el ) {
\t\t\t\t\t\tel.innerHTML = \"<a href='' disabled='disabled'></a>\" +
\t\t\t\t\t\t\t\"<select disabled='disabled'><option/></select>\";

\t\t\t\t\t\t// Support: Windows 8 Native Apps
\t\t\t\t\t\t// The type and name attributes are restricted during .innerHTML assignment
\t\t\t\t\t\tvar input = document.createElement(\"input\");
\t\t\t\t\t\tinput.setAttribute( \"type\", \"hidden\" );
\t\t\t\t\t\tel.appendChild( input ).setAttribute( \"name\", \"D\" );

\t\t\t\t\t\t// Support: IE8
\t\t\t\t\t\t// Enforce case-sensitivity of name attribute
\t\t\t\t\t\tif ( el.querySelectorAll(\"[name=d]\").length ) {
\t\t\t\t\t\t\trbuggyQSA.push( \"name\" + whitespace + \"*[*^\$|!~]?=\" );
\t\t\t\t\t\t}

\t\t\t\t\t\t// FF 3.5 - :enabled/:disabled and hidden elements (hidden elements are still enabled)
\t\t\t\t\t\t// IE8 throws error here and will not see later tests
\t\t\t\t\t\tif ( el.querySelectorAll(\":enabled\").length !== 2 ) {
\t\t\t\t\t\t\trbuggyQSA.push( \":enabled\", \":disabled\" );
\t\t\t\t\t\t}

\t\t\t\t\t\t// Support: IE9-11+
\t\t\t\t\t\t// IE's :disabled selector does not pick up the children of disabled fieldsets
\t\t\t\t\t\tdocElem.appendChild( el ).disabled = true;
\t\t\t\t\t\tif ( el.querySelectorAll(\":disabled\").length !== 2 ) {
\t\t\t\t\t\t\trbuggyQSA.push( \":enabled\", \":disabled\" );
\t\t\t\t\t\t}

\t\t\t\t\t\t// Opera 10-11 does not throw on post-comma invalid pseudos
\t\t\t\t\t\tel.querySelectorAll(\"*,:x\");
\t\t\t\t\t\trbuggyQSA.push(\",.*:\");
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\tif ( (support.matchesSelector = rnative.test( (matches = docElem.matches ||
\t\t\t\t\tdocElem.webkitMatchesSelector ||
\t\t\t\t\tdocElem.mozMatchesSelector ||
\t\t\t\t\tdocElem.oMatchesSelector ||
\t\t\t\t\tdocElem.msMatchesSelector) )) ) {

\t\t\t\t\tassert(function( el ) {
\t\t\t\t\t\t// Check to see if it's possible to do matchesSelector
\t\t\t\t\t\t// on a disconnected node (IE 9)
\t\t\t\t\t\tsupport.disconnectedMatch = matches.call( el, \"*\" );

\t\t\t\t\t\t// This should fail with an exception
\t\t\t\t\t\t// Gecko does not error, returns false instead
\t\t\t\t\t\tmatches.call( el, \"[s!='']:x\" );
\t\t\t\t\t\trbuggyMatches.push( \"!=\", pseudos );
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\trbuggyQSA = rbuggyQSA.length && new RegExp( rbuggyQSA.join(\"|\") );
\t\t\t\trbuggyMatches = rbuggyMatches.length && new RegExp( rbuggyMatches.join(\"|\") );

\t\t\t\t/* Contains
\t---------------------------------------------------------------------- */
\t\t\t\thasCompare = rnative.test( docElem.compareDocumentPosition );

\t\t\t\t// Element contains another
\t\t\t\t// Purposefully self-exclusive
\t\t\t\t// As in, an element does not contain itself
\t\t\t\tcontains = hasCompare || rnative.test( docElem.contains ) ?
\t\t\t\t\tfunction( a, b ) {
\t\t\t\t\t\tvar adown = a.nodeType === 9 ? a.documentElement : a,
\t\t\t\t\t\t\tbup = b && b.parentNode;
\t\t\t\t\t\treturn a === bup || !!( bup && bup.nodeType === 1 && (
\t\t\t\t\t\t\tadown.contains ?
\t\t\t\t\t\t\t\tadown.contains( bup ) :
\t\t\t\t\t\t\t\ta.compareDocumentPosition && a.compareDocumentPosition( bup ) & 16
\t\t\t\t\t\t));
\t\t\t\t\t} :
\t\t\t\t\tfunction( a, b ) {
\t\t\t\t\t\tif ( b ) {
\t\t\t\t\t\t\twhile ( (b = b.parentNode) ) {
\t\t\t\t\t\t\t\tif ( b === a ) {
\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\treturn false;
\t\t\t\t\t};

\t\t\t\t/* Sorting
\t---------------------------------------------------------------------- */

\t\t\t\t// Document order sorting
\t\t\t\tsortOrder = hasCompare ?
\t\t\t\t\tfunction( a, b ) {

\t\t\t\t\t\t// Flag for duplicate removal
\t\t\t\t\t\tif ( a === b ) {
\t\t\t\t\t\t\thasDuplicate = true;
\t\t\t\t\t\t\treturn 0;
\t\t\t\t\t\t}

\t\t\t\t\t\t// Sort on method existence if only one input has compareDocumentPosition
\t\t\t\t\t\tvar compare = !a.compareDocumentPosition - !b.compareDocumentPosition;
\t\t\t\t\t\tif ( compare ) {
\t\t\t\t\t\t\treturn compare;
\t\t\t\t\t\t}

\t\t\t\t\t\t// Calculate position if both inputs belong to the same document
\t\t\t\t\t\tcompare = ( a.ownerDocument || a ) === ( b.ownerDocument || b ) ?
\t\t\t\t\t\t\ta.compareDocumentPosition( b ) :

\t\t\t\t\t\t\t// Otherwise we know they are disconnected
\t\t\t\t\t\t\t1;

\t\t\t\t\t\t// Disconnected nodes
\t\t\t\t\t\tif ( compare & 1 ||
\t\t\t\t\t\t\t(!support.sortDetached && b.compareDocumentPosition( a ) === compare) ) {

\t\t\t\t\t\t\t// Choose the first element that is related to our preferred document
\t\t\t\t\t\t\tif ( a === document || a.ownerDocument === preferredDoc && contains(preferredDoc, a) ) {
\t\t\t\t\t\t\t\treturn -1;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif ( b === document || b.ownerDocument === preferredDoc && contains(preferredDoc, b) ) {
\t\t\t\t\t\t\t\treturn 1;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t// Maintain original order
\t\t\t\t\t\t\treturn sortInput ?
\t\t\t\t\t\t\t\t( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
\t\t\t\t\t\t\t\t0;
\t\t\t\t\t\t}

\t\t\t\t\t\treturn compare & 4 ? -1 : 1;
\t\t\t\t\t} :
\t\t\t\t\tfunction( a, b ) {
\t\t\t\t\t\t// Exit early if the nodes are identical
\t\t\t\t\t\tif ( a === b ) {
\t\t\t\t\t\t\thasDuplicate = true;
\t\t\t\t\t\t\treturn 0;
\t\t\t\t\t\t}

\t\t\t\t\t\tvar cur,
\t\t\t\t\t\t\ti = 0,
\t\t\t\t\t\t\taup = a.parentNode,
\t\t\t\t\t\t\tbup = b.parentNode,
\t\t\t\t\t\t\tap = [ a ],
\t\t\t\t\t\t\tbp = [ b ];

\t\t\t\t\t\t// Parentless nodes are either documents or disconnected
\t\t\t\t\t\tif ( !aup || !bup ) {
\t\t\t\t\t\t\treturn a === document ? -1 :
\t\t\t\t\t\t\t\tb === document ? 1 :
\t\t\t\t\t\t\t\t\taup ? -1 :
\t\t\t\t\t\t\t\t\t\tbup ? 1 :
\t\t\t\t\t\t\t\t\t\t\tsortInput ?
\t\t\t\t\t\t\t\t\t\t\t\t( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
\t\t\t\t\t\t\t\t\t\t\t\t0;

\t\t\t\t\t\t\t// If the nodes are siblings, we can do a quick check
\t\t\t\t\t\t} else if ( aup === bup ) {
\t\t\t\t\t\t\treturn siblingCheck( a, b );
\t\t\t\t\t\t}

\t\t\t\t\t\t// Otherwise we need full lists of their ancestors for comparison
\t\t\t\t\t\tcur = a;
\t\t\t\t\t\twhile ( (cur = cur.parentNode) ) {
\t\t\t\t\t\t\tap.unshift( cur );
\t\t\t\t\t\t}
\t\t\t\t\t\tcur = b;
\t\t\t\t\t\twhile ( (cur = cur.parentNode) ) {
\t\t\t\t\t\t\tbp.unshift( cur );
\t\t\t\t\t\t}

\t\t\t\t\t\t// Walk down the tree looking for a discrepancy
\t\t\t\t\t\twhile ( ap[i] === bp[i] ) {
\t\t\t\t\t\t\ti++;
\t\t\t\t\t\t}

\t\t\t\t\t\treturn i ?
\t\t\t\t\t\t\t// Do a sibling check if the nodes have a common ancestor
\t\t\t\t\t\t\tsiblingCheck( ap[i], bp[i] ) :

\t\t\t\t\t\t\t// Otherwise nodes in our document sort first
\t\t\t\t\t\t\tap[i] === preferredDoc ? -1 :
\t\t\t\t\t\t\t\tbp[i] === preferredDoc ? 1 :
\t\t\t\t\t\t\t\t\t0;
\t\t\t\t\t};

\t\t\t\treturn document;
\t\t\t};

\t\t\tSizzle.matches = function( expr, elements ) {
\t\t\t\treturn Sizzle( expr, null, null, elements );
\t\t\t};

\t\t\tSizzle.matchesSelector = function( elem, expr ) {
\t\t\t\t// Set document vars if needed
\t\t\t\tif ( ( elem.ownerDocument || elem ) !== document ) {
\t\t\t\t\tsetDocument( elem );
\t\t\t\t}

\t\t\t\t// Make sure that attribute selectors are quoted
\t\t\t\texpr = expr.replace( rattributeQuotes, \"='\$1']\" );

\t\t\t\tif ( support.matchesSelector && documentIsHTML &&
\t\t\t\t\t!compilerCache[ expr + \" \" ] &&
\t\t\t\t\t( !rbuggyMatches || !rbuggyMatches.test( expr ) ) &&
\t\t\t\t\t( !rbuggyQSA     || !rbuggyQSA.test( expr ) ) ) {

\t\t\t\t\ttry {
\t\t\t\t\t\tvar ret = matches.call( elem, expr );

\t\t\t\t\t\t// IE 9's matchesSelector returns false on disconnected nodes
\t\t\t\t\t\tif ( ret || support.disconnectedMatch ||
\t\t\t\t\t\t\t// As well, disconnected nodes are said to be in a document
\t\t\t\t\t\t\t// fragment in IE 9
\t\t\t\t\t\t\telem.document && elem.document.nodeType !== 11 ) {
\t\t\t\t\t\t\treturn ret;
\t\t\t\t\t\t}
\t\t\t\t\t} catch (e) {}
\t\t\t\t}

\t\t\t\treturn Sizzle( expr, document, null, [ elem ] ).length > 0;
\t\t\t};

\t\t\tSizzle.contains = function( context, elem ) {
\t\t\t\t// Set document vars if needed
\t\t\t\tif ( ( context.ownerDocument || context ) !== document ) {
\t\t\t\t\tsetDocument( context );
\t\t\t\t}
\t\t\t\treturn contains( context, elem );
\t\t\t};

\t\t\tSizzle.attr = function( elem, name ) {
\t\t\t\t// Set document vars if needed
\t\t\t\tif ( ( elem.ownerDocument || elem ) !== document ) {
\t\t\t\t\tsetDocument( elem );
\t\t\t\t}

\t\t\t\tvar fn = Expr.attrHandle[ name.toLowerCase() ],
\t\t\t\t\t// Don't get fooled by Object.prototype properties (jQuery #13807)
\t\t\t\t\tval = fn && hasOwn.call( Expr.attrHandle, name.toLowerCase() ) ?
\t\t\t\t\t\tfn( elem, name, !documentIsHTML ) :
\t\t\t\t\t\tundefined;

\t\t\t\treturn val !== undefined ?
\t\t\t\t\tval :
\t\t\t\t\tsupport.attributes || !documentIsHTML ?
\t\t\t\t\t\telem.getAttribute( name ) :
\t\t\t\t\t\t(val = elem.getAttributeNode(name)) && val.specified ?
\t\t\t\t\t\t\tval.value :
\t\t\t\t\t\t\tnull;
\t\t\t};

\t\t\tSizzle.escape = function( sel ) {
\t\t\t\treturn (sel + \"\").replace( rcssescape, fcssescape );
\t\t\t};

\t\t\tSizzle.error = function( msg ) {
\t\t\t\tthrow new Error( \"Syntax error, unrecognized expression: \" + msg );
\t\t\t};

\t\t\t/**
\t\t\t * Document sorting and removing duplicates
\t\t\t * @param {ArrayLike} results
\t\t\t */
\t\t\tSizzle.uniqueSort = function( results ) {
\t\t\t\tvar elem,
\t\t\t\t\tduplicates = [],
\t\t\t\t\tj = 0,
\t\t\t\t\ti = 0;

\t\t\t\t// Unless we *know* we can detect duplicates, assume their presence
\t\t\t\thasDuplicate = !support.detectDuplicates;
\t\t\t\tsortInput = !support.sortStable && results.slice( 0 );
\t\t\t\tresults.sort( sortOrder );

\t\t\t\tif ( hasDuplicate ) {
\t\t\t\t\twhile ( (elem = results[i++]) ) {
\t\t\t\t\t\tif ( elem === results[ i ] ) {
\t\t\t\t\t\t\tj = duplicates.push( i );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\twhile ( j-- ) {
\t\t\t\t\t\tresults.splice( duplicates[ j ], 1 );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Clear input after sorting to release objects
\t\t\t\t// See https://github.com/jquery/sizzle/pull/225
\t\t\t\tsortInput = null;

\t\t\t\treturn results;
\t\t\t};

\t\t\t/**
\t\t\t * Utility function for retrieving the text value of an array of DOM nodes
\t\t\t * @param {Array|Element} elem
\t\t\t */
\t\t\tgetText = Sizzle.getText = function( elem ) {
\t\t\t\tvar node,
\t\t\t\t\tret = \"\",
\t\t\t\t\ti = 0,
\t\t\t\t\tnodeType = elem.nodeType;

\t\t\t\tif ( !nodeType ) {
\t\t\t\t\t// If no nodeType, this is expected to be an array
\t\t\t\t\twhile ( (node = elem[i++]) ) {
\t\t\t\t\t\t// Do not traverse comment nodes
\t\t\t\t\t\tret += getText( node );
\t\t\t\t\t}
\t\t\t\t} else if ( nodeType === 1 || nodeType === 9 || nodeType === 11 ) {
\t\t\t\t\t// Use textContent for elements
\t\t\t\t\t// innerText usage removed for consistency of new lines (jQuery #11153)
\t\t\t\t\tif ( typeof elem.textContent === \"string\" ) {
\t\t\t\t\t\treturn elem.textContent;
\t\t\t\t\t} else {
\t\t\t\t\t\t// Traverse its children
\t\t\t\t\t\tfor ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
\t\t\t\t\t\t\tret += getText( elem );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} else if ( nodeType === 3 || nodeType === 4 ) {
\t\t\t\t\treturn elem.nodeValue;
\t\t\t\t}
\t\t\t\t// Do not include comment or processing instruction nodes

\t\t\t\treturn ret;
\t\t\t};

\t\t\tExpr = Sizzle.selectors = {

\t\t\t\t// Can be adjusted by the user
\t\t\t\tcacheLength: 50,

\t\t\t\tcreatePseudo: markFunction,

\t\t\t\tmatch: matchExpr,

\t\t\t\tattrHandle: {},

\t\t\t\tfind: {},

\t\t\t\trelative: {
\t\t\t\t\t\">\": { dir: \"parentNode\", first: true },
\t\t\t\t\t\" \": { dir: \"parentNode\" },
\t\t\t\t\t\"+\": { dir: \"previousSibling\", first: true },
\t\t\t\t\t\"~\": { dir: \"previousSibling\" }
\t\t\t\t},

\t\t\t\tpreFilter: {
\t\t\t\t\t\"ATTR\": function( match ) {
\t\t\t\t\t\tmatch[1] = match[1].replace( runescape, funescape );

\t\t\t\t\t\t// Move the given value to match[3] whether quoted or unquoted
\t\t\t\t\t\tmatch[3] = ( match[3] || match[4] || match[5] || \"\" ).replace( runescape, funescape );

\t\t\t\t\t\tif ( match[2] === \"~=\" ) {
\t\t\t\t\t\t\tmatch[3] = \" \" + match[3] + \" \";
\t\t\t\t\t\t}

\t\t\t\t\t\treturn match.slice( 0, 4 );
\t\t\t\t\t},

\t\t\t\t\t\"CHILD\": function( match ) {
\t\t\t\t\t\t/* matches from matchExpr[\"CHILD\"]
\t\t\t\t1 type (only|nth|...)
\t\t\t\t2 what (child|of-type)
\t\t\t\t3 argument (even|odd|\\d*|\\d*n([+-]\\d+)?|...)
\t\t\t\t4 xn-component of xn+y argument ([+-]?\\d*n|)
\t\t\t\t5 sign of xn-component
\t\t\t\t6 x of xn-component
\t\t\t\t7 sign of y-component
\t\t\t\t8 y of y-component
\t\t\t*/
\t\t\t\t\t\tmatch[1] = match[1].toLowerCase();

\t\t\t\t\t\tif ( match[1].slice( 0, 3 ) === \"nth\" ) {
\t\t\t\t\t\t\t// nth-* requires argument
\t\t\t\t\t\t\tif ( !match[3] ) {
\t\t\t\t\t\t\t\tSizzle.error( match[0] );
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t// numeric x and y parameters for Expr.filter.CHILD
\t\t\t\t\t\t\t// remember that false/true cast respectively to 0/1
\t\t\t\t\t\t\tmatch[4] = +( match[4] ? match[5] + (match[6] || 1) : 2 * ( match[3] === \"even\" || match[3] === \"odd\" ) );
\t\t\t\t\t\t\tmatch[5] = +( ( match[7] + match[8] ) || match[3] === \"odd\" );

\t\t\t\t\t\t\t// other types prohibit arguments
\t\t\t\t\t\t} else if ( match[3] ) {
\t\t\t\t\t\t\tSizzle.error( match[0] );
\t\t\t\t\t\t}

\t\t\t\t\t\treturn match;
\t\t\t\t\t},

\t\t\t\t\t\"PSEUDO\": function( match ) {
\t\t\t\t\t\tvar excess,
\t\t\t\t\t\t\tunquoted = !match[6] && match[2];

\t\t\t\t\t\tif ( matchExpr[\"CHILD\"].test( match[0] ) ) {
\t\t\t\t\t\t\treturn null;
\t\t\t\t\t\t}

\t\t\t\t\t\t// Accept quoted arguments as-is
\t\t\t\t\t\tif ( match[3] ) {
\t\t\t\t\t\t\tmatch[2] = match[4] || match[5] || \"\";

\t\t\t\t\t\t\t// Strip excess characters from unquoted arguments
\t\t\t\t\t\t} else if ( unquoted && rpseudo.test( unquoted ) &&
\t\t\t\t\t\t\t// Get excess from tokenize (recursively)
\t\t\t\t\t\t\t(excess = tokenize( unquoted, true )) &&
\t\t\t\t\t\t\t// advance to the next closing parenthesis
\t\t\t\t\t\t\t(excess = unquoted.indexOf( \")\", unquoted.length - excess ) - unquoted.length) ) {

\t\t\t\t\t\t\t// excess is a negative index
\t\t\t\t\t\t\tmatch[0] = match[0].slice( 0, excess );
\t\t\t\t\t\t\tmatch[2] = unquoted.slice( 0, excess );
\t\t\t\t\t\t}

\t\t\t\t\t\t// Return only captures needed by the pseudo filter method (type and argument)
\t\t\t\t\t\treturn match.slice( 0, 3 );
\t\t\t\t\t}
\t\t\t\t},

\t\t\t\tfilter: {

\t\t\t\t\t\"TAG\": function( nodeNameSelector ) {
\t\t\t\t\t\tvar nodeName = nodeNameSelector.replace( runescape, funescape ).toLowerCase();
\t\t\t\t\t\treturn nodeNameSelector === \"*\" ?
\t\t\t\t\t\t\tfunction() { return true; } :
\t\t\t\t\t\t\tfunction( elem ) {
\t\t\t\t\t\t\t\treturn elem.nodeName && elem.nodeName.toLowerCase() === nodeName;
\t\t\t\t\t\t\t};
\t\t\t\t\t},

\t\t\t\t\t\"CLASS\": function( className ) {
\t\t\t\t\t\tvar pattern = classCache[ className + \" \" ];

\t\t\t\t\t\treturn pattern ||
\t\t\t\t\t\t\t(pattern = new RegExp( \"(^|\" + whitespace + \")\" + className + \"(\" + whitespace + \"|\$)\" )) &&
\t\t\t\t\t\t\tclassCache( className, function( elem ) {
\t\t\t\t\t\t\t\treturn pattern.test( typeof elem.className === \"string\" && elem.className || typeof elem.getAttribute !== \"undefined\" && elem.getAttribute(\"class\") || \"\" );
\t\t\t\t\t\t\t});
\t\t\t\t\t},

\t\t\t\t\t\"ATTR\": function( name, operator, check ) {
\t\t\t\t\t\treturn function( elem ) {
\t\t\t\t\t\t\tvar result = Sizzle.attr( elem, name );

\t\t\t\t\t\t\tif ( result == null ) {
\t\t\t\t\t\t\t\treturn operator === \"!=\";
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif ( !operator ) {
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tresult += \"\";

\t\t\t\t\t\t\treturn operator === \"=\" ? result === check :
\t\t\t\t\t\t\t\toperator === \"!=\" ? result !== check :
\t\t\t\t\t\t\t\t\toperator === \"^=\" ? check && result.indexOf( check ) === 0 :
\t\t\t\t\t\t\t\t\t\toperator === \"*=\" ? check && result.indexOf( check ) > -1 :
\t\t\t\t\t\t\t\t\t\t\toperator === \"\$=\" ? check && result.slice( -check.length ) === check :
\t\t\t\t\t\t\t\t\t\t\t\toperator === \"~=\" ? ( \" \" + result.replace( rwhitespace, \" \" ) + \" \" ).indexOf( check ) > -1 :
\t\t\t\t\t\t\t\t\t\t\t\t\toperator === \"|=\" ? result === check || result.slice( 0, check.length + 1 ) === check + \"-\" :
\t\t\t\t\t\t\t\t\t\t\t\t\t\tfalse;
\t\t\t\t\t\t};
\t\t\t\t\t},

\t\t\t\t\t\"CHILD\": function( type, what, argument, first, last ) {
\t\t\t\t\t\tvar simple = type.slice( 0, 3 ) !== \"nth\",
\t\t\t\t\t\t\tforward = type.slice( -4 ) !== \"last\",
\t\t\t\t\t\t\tofType = what === \"of-type\";

\t\t\t\t\t\treturn first === 1 && last === 0 ?

\t\t\t\t\t\t\t// Shortcut for :nth-*(n)
\t\t\t\t\t\t\tfunction( elem ) {
\t\t\t\t\t\t\t\treturn !!elem.parentNode;
\t\t\t\t\t\t\t} :

\t\t\t\t\t\t\tfunction( elem, context, xml ) {
\t\t\t\t\t\t\t\tvar cache, uniqueCache, outerCache, node, nodeIndex, start,
\t\t\t\t\t\t\t\t\tdir = simple !== forward ? \"nextSibling\" : \"previousSibling\",
\t\t\t\t\t\t\t\t\tparent = elem.parentNode,
\t\t\t\t\t\t\t\t\tname = ofType && elem.nodeName.toLowerCase(),
\t\t\t\t\t\t\t\t\tuseCache = !xml && !ofType,
\t\t\t\t\t\t\t\t\tdiff = false;

\t\t\t\t\t\t\t\tif ( parent ) {

\t\t\t\t\t\t\t\t\t// :(first|last|only)-(child|of-type)
\t\t\t\t\t\t\t\t\tif ( simple ) {
\t\t\t\t\t\t\t\t\t\twhile ( dir ) {
\t\t\t\t\t\t\t\t\t\t\tnode = elem;
\t\t\t\t\t\t\t\t\t\t\twhile ( (node = node[ dir ]) ) {
\t\t\t\t\t\t\t\t\t\t\t\tif ( ofType ?
\t\t\t\t\t\t\t\t\t\t\t\t\tnode.nodeName.toLowerCase() === name :
\t\t\t\t\t\t\t\t\t\t\t\t\tnode.nodeType === 1 ) {

\t\t\t\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t// Reverse direction for :only-* (if we haven't yet done so)
\t\t\t\t\t\t\t\t\t\t\tstart = dir = type === \"only\" && !start && \"nextSibling\";
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\tstart = [ forward ? parent.firstChild : parent.lastChild ];

\t\t\t\t\t\t\t\t\t// non-xml :nth-child(...) stores cache data on `parent`
\t\t\t\t\t\t\t\t\tif ( forward && useCache ) {

\t\t\t\t\t\t\t\t\t\t// Seek `elem` from a previously-cached index

\t\t\t\t\t\t\t\t\t\t// ...in a gzip-friendly way
\t\t\t\t\t\t\t\t\t\tnode = parent;
\t\t\t\t\t\t\t\t\t\touterCache = node[ expando ] || (node[ expando ] = {});

\t\t\t\t\t\t\t\t\t\t// Support: IE <9 only
\t\t\t\t\t\t\t\t\t\t// Defend against cloned attroperties (jQuery gh-1709)
\t\t\t\t\t\t\t\t\t\tuniqueCache = outerCache[ node.uniqueID ] ||
\t\t\t\t\t\t\t\t\t\t\t(outerCache[ node.uniqueID ] = {});

\t\t\t\t\t\t\t\t\t\tcache = uniqueCache[ type ] || [];
\t\t\t\t\t\t\t\t\t\tnodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
\t\t\t\t\t\t\t\t\t\tdiff = nodeIndex && cache[ 2 ];
\t\t\t\t\t\t\t\t\t\tnode = nodeIndex && parent.childNodes[ nodeIndex ];

\t\t\t\t\t\t\t\t\t\twhile ( (node = ++nodeIndex && node && node[ dir ] ||

\t\t\t\t\t\t\t\t\t\t\t// Fallback to seeking `elem` from the start
\t\t\t\t\t\t\t\t\t\t\t(diff = nodeIndex = 0) || start.pop()) ) {

\t\t\t\t\t\t\t\t\t\t\t// When found, cache indexes on `parent` and break
\t\t\t\t\t\t\t\t\t\t\tif ( node.nodeType === 1 && ++diff && node === elem ) {
\t\t\t\t\t\t\t\t\t\t\t\tuniqueCache[ type ] = [ dirruns, nodeIndex, diff ];
\t\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t// Use previously-cached element index if available
\t\t\t\t\t\t\t\t\t\tif ( useCache ) {
\t\t\t\t\t\t\t\t\t\t\t// ...in a gzip-friendly way
\t\t\t\t\t\t\t\t\t\t\tnode = elem;
\t\t\t\t\t\t\t\t\t\t\touterCache = node[ expando ] || (node[ expando ] = {});

\t\t\t\t\t\t\t\t\t\t\t// Support: IE <9 only
\t\t\t\t\t\t\t\t\t\t\t// Defend against cloned attroperties (jQuery gh-1709)
\t\t\t\t\t\t\t\t\t\t\tuniqueCache = outerCache[ node.uniqueID ] ||
\t\t\t\t\t\t\t\t\t\t\t\t(outerCache[ node.uniqueID ] = {});

\t\t\t\t\t\t\t\t\t\t\tcache = uniqueCache[ type ] || [];
\t\t\t\t\t\t\t\t\t\t\tnodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
\t\t\t\t\t\t\t\t\t\t\tdiff = nodeIndex;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t// xml :nth-child(...)
\t\t\t\t\t\t\t\t\t\t// or :nth-last-child(...) or :nth(-last)?-of-type(...)
\t\t\t\t\t\t\t\t\t\tif ( diff === false ) {
\t\t\t\t\t\t\t\t\t\t\t// Use the same loop as above to seek `elem` from the start
\t\t\t\t\t\t\t\t\t\t\twhile ( (node = ++nodeIndex && node && node[ dir ] ||
\t\t\t\t\t\t\t\t\t\t\t\t(diff = nodeIndex = 0) || start.pop()) ) {

\t\t\t\t\t\t\t\t\t\t\t\tif ( ( ofType ?
\t\t\t\t\t\t\t\t\t\t\t\t\tnode.nodeName.toLowerCase() === name :
\t\t\t\t\t\t\t\t\t\t\t\t\tnode.nodeType === 1 ) &&
\t\t\t\t\t\t\t\t\t\t\t\t\t++diff ) {

\t\t\t\t\t\t\t\t\t\t\t\t\t// Cache the index of each encountered element
\t\t\t\t\t\t\t\t\t\t\t\t\tif ( useCache ) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\touterCache = node[ expando ] || (node[ expando ] = {});

\t\t\t\t\t\t\t\t\t\t\t\t\t\t// Support: IE <9 only
\t\t\t\t\t\t\t\t\t\t\t\t\t\t// Defend against cloned attroperties (jQuery gh-1709)
\t\t\t\t\t\t\t\t\t\t\t\t\t\tuniqueCache = outerCache[ node.uniqueID ] ||
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(outerCache[ node.uniqueID ] = {});

\t\t\t\t\t\t\t\t\t\t\t\t\t\tuniqueCache[ type ] = [ dirruns, diff ];
\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\tif ( node === elem ) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t// Incorporate the offset, then check against cycle size
\t\t\t\t\t\t\t\t\tdiff -= last;
\t\t\t\t\t\t\t\t\treturn diff === first || ( diff % first === 0 && diff / first >= 0 );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t};
\t\t\t\t\t},

\t\t\t\t\t\"PSEUDO\": function( pseudo, argument ) {
\t\t\t\t\t\t// pseudo-class names are case-insensitive
\t\t\t\t\t\t// http://www.w3.org/TR/selectors/#pseudo-classes
\t\t\t\t\t\t// Prioritize by case sensitivity in case custom pseudos are added with uppercase letters
\t\t\t\t\t\t// Remember that setFilters inherits from pseudos
\t\t\t\t\t\tvar args,
\t\t\t\t\t\t\tfn = Expr.pseudos[ pseudo ] || Expr.setFilters[ pseudo.toLowerCase() ] ||
\t\t\t\t\t\t\t\tSizzle.error( \"unsupported pseudo: \" + pseudo );

\t\t\t\t\t\t// The user may use createPseudo to indicate that
\t\t\t\t\t\t// arguments are needed to create the filter function
\t\t\t\t\t\t// just as Sizzle does
\t\t\t\t\t\tif ( fn[ expando ] ) {
\t\t\t\t\t\t\treturn fn( argument );
\t\t\t\t\t\t}

\t\t\t\t\t\t// But maintain support for old signatures
\t\t\t\t\t\tif ( fn.length > 1 ) {
\t\t\t\t\t\t\targs = [ pseudo, pseudo, \"\", argument ];
\t\t\t\t\t\t\treturn Expr.setFilters.hasOwnProperty( pseudo.toLowerCase() ) ?
\t\t\t\t\t\t\t\tmarkFunction(function( seed, matches ) {
\t\t\t\t\t\t\t\t\tvar idx,
\t\t\t\t\t\t\t\t\t\tmatched = fn( seed, argument ),
\t\t\t\t\t\t\t\t\t\ti = matched.length;
\t\t\t\t\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\t\t\t\t\tidx = indexOf( seed, matched[i] );
\t\t\t\t\t\t\t\t\t\tseed[ idx ] = !( matches[ idx ] = matched[i] );
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}) :
\t\t\t\t\t\t\t\tfunction( elem ) {
\t\t\t\t\t\t\t\t\treturn fn( elem, 0, args );
\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t}

\t\t\t\t\t\treturn fn;
\t\t\t\t\t}
\t\t\t\t},

\t\t\t\tpseudos: {
\t\t\t\t\t// Potentially complex pseudos
\t\t\t\t\t\"not\": markFunction(function( selector ) {
\t\t\t\t\t\t// Trim the selector passed to compile
\t\t\t\t\t\t// to avoid treating leading and trailing
\t\t\t\t\t\t// spaces as combinators
\t\t\t\t\t\tvar input = [],
\t\t\t\t\t\t\tresults = [],
\t\t\t\t\t\t\tmatcher = compile( selector.replace( rtrim, \"\$1\" ) );

\t\t\t\t\t\treturn matcher[ expando ] ?
\t\t\t\t\t\t\tmarkFunction(function( seed, matches, context, xml ) {
\t\t\t\t\t\t\t\tvar elem,
\t\t\t\t\t\t\t\t\tunmatched = matcher( seed, null, xml, [] ),
\t\t\t\t\t\t\t\t\ti = seed.length;

\t\t\t\t\t\t\t\t// Match elements unmatched by `matcher`
\t\t\t\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\t\t\t\tif ( (elem = unmatched[i]) ) {
\t\t\t\t\t\t\t\t\t\tseed[i] = !(matches[i] = elem);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}) :
\t\t\t\t\t\t\tfunction( elem, context, xml ) {
\t\t\t\t\t\t\t\tinput[0] = elem;
\t\t\t\t\t\t\t\tmatcher( input, null, xml, results );
\t\t\t\t\t\t\t\t// Don't keep the element (issue #299)
\t\t\t\t\t\t\t\tinput[0] = null;
\t\t\t\t\t\t\t\treturn !results.pop();
\t\t\t\t\t\t\t};
\t\t\t\t\t}),

\t\t\t\t\t\"has\": markFunction(function( selector ) {
\t\t\t\t\t\treturn function( elem ) {
\t\t\t\t\t\t\treturn Sizzle( selector, elem ).length > 0;
\t\t\t\t\t\t};
\t\t\t\t\t}),

\t\t\t\t\t\"contains\": markFunction(function( text ) {
\t\t\t\t\t\ttext = text.replace( runescape, funescape );
\t\t\t\t\t\treturn function( elem ) {
\t\t\t\t\t\t\treturn ( elem.textContent || elem.innerText || getText( elem ) ).indexOf( text ) > -1;
\t\t\t\t\t\t};
\t\t\t\t\t}),

\t\t\t\t\t// \"Whether an element is represented by a :lang() selector
\t\t\t\t\t// is based solely on the element's language value
\t\t\t\t\t// being equal to the identifier C,
\t\t\t\t\t// or beginning with the identifier C immediately followed by \"-\".
\t\t\t\t\t// The matching of C against the element's language value is performed case-insensitively.
\t\t\t\t\t// The identifier C does not have to be a valid language name.\"
\t\t\t\t\t// http://www.w3.org/TR/selectors/#lang-pseudo
\t\t\t\t\t\"lang\": markFunction( function( lang ) {
\t\t\t\t\t\t// lang value must be a valid identifier
\t\t\t\t\t\tif ( !ridentifier.test(lang || \"\") ) {
\t\t\t\t\t\t\tSizzle.error( \"unsupported lang: \" + lang );
\t\t\t\t\t\t}
\t\t\t\t\t\tlang = lang.replace( runescape, funescape ).toLowerCase();
\t\t\t\t\t\treturn function( elem ) {
\t\t\t\t\t\t\tvar elemLang;
\t\t\t\t\t\t\tdo {
\t\t\t\t\t\t\t\tif ( (elemLang = documentIsHTML ?
\t\t\t\t\t\t\t\t\telem.lang :
\t\t\t\t\t\t\t\t\telem.getAttribute(\"xml:lang\") || elem.getAttribute(\"lang\")) ) {

\t\t\t\t\t\t\t\t\telemLang = elemLang.toLowerCase();
\t\t\t\t\t\t\t\t\treturn elemLang === lang || elemLang.indexOf( lang + \"-\" ) === 0;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} while ( (elem = elem.parentNode) && elem.nodeType === 1 );
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t};
\t\t\t\t\t}),

\t\t\t\t\t// Miscellaneous
\t\t\t\t\t\"target\": function( elem ) {
\t\t\t\t\t\tvar hash = window.location && window.location.hash;
\t\t\t\t\t\treturn hash && hash.slice( 1 ) === elem.id;
\t\t\t\t\t},

\t\t\t\t\t\"root\": function( elem ) {
\t\t\t\t\t\treturn elem === docElem;
\t\t\t\t\t},

\t\t\t\t\t\"focus\": function( elem ) {
\t\t\t\t\t\treturn elem === document.activeElement && (!document.hasFocus || document.hasFocus()) && !!(elem.type || elem.href || ~elem.tabIndex);
\t\t\t\t\t},

\t\t\t\t\t// Boolean properties
\t\t\t\t\t\"enabled\": createDisabledPseudo( false ),
\t\t\t\t\t\"disabled\": createDisabledPseudo( true ),

\t\t\t\t\t\"checked\": function( elem ) {
\t\t\t\t\t\t// In CSS3, :checked should return both checked and selected elements
\t\t\t\t\t\t// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
\t\t\t\t\t\tvar nodeName = elem.nodeName.toLowerCase();
\t\t\t\t\t\treturn (nodeName === \"input\" && !!elem.checked) || (nodeName === \"option\" && !!elem.selected);
\t\t\t\t\t},

\t\t\t\t\t\"selected\": function( elem ) {
\t\t\t\t\t\t// Accessing this property makes selected-by-default
\t\t\t\t\t\t// options in Safari work properly
\t\t\t\t\t\tif ( elem.parentNode ) {
\t\t\t\t\t\t\telem.parentNode.selectedIndex;
\t\t\t\t\t\t}

\t\t\t\t\t\treturn elem.selected === true;
\t\t\t\t\t},

\t\t\t\t\t// Contents
\t\t\t\t\t\"empty\": function( elem ) {
\t\t\t\t\t\t// http://www.w3.org/TR/selectors/#empty-pseudo
\t\t\t\t\t\t// :empty is negated by element (1) or content nodes (text: 3; cdata: 4; entity ref: 5),
\t\t\t\t\t\t//   but not by others (comment: 8; processing instruction: 7; etc.)
\t\t\t\t\t\t// nodeType < 6 works because attributes (2) do not appear as children
\t\t\t\t\t\tfor ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
\t\t\t\t\t\t\tif ( elem.nodeType < 6 ) {
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\treturn true;
\t\t\t\t\t},

\t\t\t\t\t\"parent\": function( elem ) {
\t\t\t\t\t\treturn !Expr.pseudos[\"empty\"]( elem );
\t\t\t\t\t},

\t\t\t\t\t// Element/input types
\t\t\t\t\t\"header\": function( elem ) {
\t\t\t\t\t\treturn rheader.test( elem.nodeName );
\t\t\t\t\t},

\t\t\t\t\t\"input\": function( elem ) {
\t\t\t\t\t\treturn rinputs.test( elem.nodeName );
\t\t\t\t\t},

\t\t\t\t\t\"button\": function( elem ) {
\t\t\t\t\t\tvar name = elem.nodeName.toLowerCase();
\t\t\t\t\t\treturn name === \"input\" && elem.type === \"button\" || name === \"button\";
\t\t\t\t\t},

\t\t\t\t\t\"text\": function( elem ) {
\t\t\t\t\t\tvar attr;
\t\t\t\t\t\treturn elem.nodeName.toLowerCase() === \"input\" &&
\t\t\t\t\t\t\telem.type === \"text\" &&

\t\t\t\t\t\t\t// Support: IE<8
\t\t\t\t\t\t\t// New HTML5 attribute values (e.g., \"search\") appear with elem.type === \"text\"
\t\t\t\t\t\t\t( (attr = elem.getAttribute(\"type\")) == null || attr.toLowerCase() === \"text\" );
\t\t\t\t\t},

\t\t\t\t\t// Position-in-collection
\t\t\t\t\t\"first\": createPositionalPseudo(function() {
\t\t\t\t\t\treturn [ 0 ];
\t\t\t\t\t}),

\t\t\t\t\t\"last\": createPositionalPseudo(function( matchIndexes, length ) {
\t\t\t\t\t\treturn [ length - 1 ];
\t\t\t\t\t}),

\t\t\t\t\t\"eq\": createPositionalPseudo(function( matchIndexes, length, argument ) {
\t\t\t\t\t\treturn [ argument < 0 ? argument + length : argument ];
\t\t\t\t\t}),

\t\t\t\t\t\"even\": createPositionalPseudo(function( matchIndexes, length ) {
\t\t\t\t\t\tvar i = 0;
\t\t\t\t\t\tfor ( ; i < length; i += 2 ) {
\t\t\t\t\t\t\tmatchIndexes.push( i );
\t\t\t\t\t\t}
\t\t\t\t\t\treturn matchIndexes;
\t\t\t\t\t}),

\t\t\t\t\t\"odd\": createPositionalPseudo(function( matchIndexes, length ) {
\t\t\t\t\t\tvar i = 1;
\t\t\t\t\t\tfor ( ; i < length; i += 2 ) {
\t\t\t\t\t\t\tmatchIndexes.push( i );
\t\t\t\t\t\t}
\t\t\t\t\t\treturn matchIndexes;
\t\t\t\t\t}),

\t\t\t\t\t\"lt\": createPositionalPseudo(function( matchIndexes, length, argument ) {
\t\t\t\t\t\tvar i = argument < 0 ? argument + length : argument;
\t\t\t\t\t\tfor ( ; --i >= 0; ) {
\t\t\t\t\t\t\tmatchIndexes.push( i );
\t\t\t\t\t\t}
\t\t\t\t\t\treturn matchIndexes;
\t\t\t\t\t}),

\t\t\t\t\t\"gt\": createPositionalPseudo(function( matchIndexes, length, argument ) {
\t\t\t\t\t\tvar i = argument < 0 ? argument + length : argument;
\t\t\t\t\t\tfor ( ; ++i < length; ) {
\t\t\t\t\t\t\tmatchIndexes.push( i );
\t\t\t\t\t\t}
\t\t\t\t\t\treturn matchIndexes;
\t\t\t\t\t})
\t\t\t\t}
\t\t\t};

\t\t\tExpr.pseudos[\"nth\"] = Expr.pseudos[\"eq\"];

// Add button/input type pseudos
\t\t\tfor ( i in { radio: true, checkbox: true, file: true, password: true, image: true } ) {
\t\t\t\tExpr.pseudos[ i ] = createInputPseudo( i );
\t\t\t}
\t\t\tfor ( i in { submit: true, reset: true } ) {
\t\t\t\tExpr.pseudos[ i ] = createButtonPseudo( i );
\t\t\t}

// Easy API for creating new setFilters
\t\t\tfunction setFilters() {}
\t\t\tsetFilters.prototype = Expr.filters = Expr.pseudos;
\t\t\tExpr.setFilters = new setFilters();

\t\t\ttokenize = Sizzle.tokenize = function( selector, parseOnly ) {
\t\t\t\tvar matched, match, tokens, type,
\t\t\t\t\tsoFar, groups, preFilters,
\t\t\t\t\tcached = tokenCache[ selector + \" \" ];

\t\t\t\tif ( cached ) {
\t\t\t\t\treturn parseOnly ? 0 : cached.slice( 0 );
\t\t\t\t}

\t\t\t\tsoFar = selector;
\t\t\t\tgroups = [];
\t\t\t\tpreFilters = Expr.preFilter;

\t\t\t\twhile ( soFar ) {

\t\t\t\t\t// Comma and first run
\t\t\t\t\tif ( !matched || (match = rcomma.exec( soFar )) ) {
\t\t\t\t\t\tif ( match ) {
\t\t\t\t\t\t\t// Don't consume trailing commas as valid
\t\t\t\t\t\t\tsoFar = soFar.slice( match[0].length ) || soFar;
\t\t\t\t\t\t}
\t\t\t\t\t\tgroups.push( (tokens = []) );
\t\t\t\t\t}

\t\t\t\t\tmatched = false;

\t\t\t\t\t// Combinators
\t\t\t\t\tif ( (match = rcombinators.exec( soFar )) ) {
\t\t\t\t\t\tmatched = match.shift();
\t\t\t\t\t\ttokens.push({
\t\t\t\t\t\t\tvalue: matched,
\t\t\t\t\t\t\t// Cast descendant combinators to space
\t\t\t\t\t\t\ttype: match[0].replace( rtrim, \" \" )
\t\t\t\t\t\t});
\t\t\t\t\t\tsoFar = soFar.slice( matched.length );
\t\t\t\t\t}

\t\t\t\t\t// Filters
\t\t\t\t\tfor ( type in Expr.filter ) {
\t\t\t\t\t\tif ( (match = matchExpr[ type ].exec( soFar )) && (!preFilters[ type ] ||
\t\t\t\t\t\t\t(match = preFilters[ type ]( match ))) ) {
\t\t\t\t\t\t\tmatched = match.shift();
\t\t\t\t\t\t\ttokens.push({
\t\t\t\t\t\t\t\tvalue: matched,
\t\t\t\t\t\t\t\ttype: type,
\t\t\t\t\t\t\t\tmatches: match
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tsoFar = soFar.slice( matched.length );
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tif ( !matched ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Return the length of the invalid excess
\t\t\t\t// if we're just parsing
\t\t\t\t// Otherwise, throw an error or return tokens
\t\t\t\treturn parseOnly ?
\t\t\t\t\tsoFar.length :
\t\t\t\t\tsoFar ?
\t\t\t\t\t\tSizzle.error( selector ) :
\t\t\t\t\t\t// Cache the tokens
\t\t\t\t\t\ttokenCache( selector, groups ).slice( 0 );
\t\t\t};

\t\t\tfunction toSelector( tokens ) {
\t\t\t\tvar i = 0,
\t\t\t\t\tlen = tokens.length,
\t\t\t\t\tselector = \"\";
\t\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\t\tselector += tokens[i].value;
\t\t\t\t}
\t\t\t\treturn selector;
\t\t\t}

\t\t\tfunction addCombinator( matcher, combinator, base ) {
\t\t\t\tvar dir = combinator.dir,
\t\t\t\t\tskip = combinator.next,
\t\t\t\t\tkey = skip || dir,
\t\t\t\t\tcheckNonElements = base && key === \"parentNode\",
\t\t\t\t\tdoneName = done++;

\t\t\t\treturn combinator.first ?
\t\t\t\t\t// Check against closest ancestor/preceding element
\t\t\t\t\tfunction( elem, context, xml ) {
\t\t\t\t\t\twhile ( (elem = elem[ dir ]) ) {
\t\t\t\t\t\t\tif ( elem.nodeType === 1 || checkNonElements ) {
\t\t\t\t\t\t\t\treturn matcher( elem, context, xml );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\treturn false;
\t\t\t\t\t} :

\t\t\t\t\t// Check against all ancestor/preceding elements
\t\t\t\t\tfunction( elem, context, xml ) {
\t\t\t\t\t\tvar oldCache, uniqueCache, outerCache,
\t\t\t\t\t\t\tnewCache = [ dirruns, doneName ];

\t\t\t\t\t\t// We can't set arbitrary data on XML nodes, so they don't benefit from combinator caching
\t\t\t\t\t\tif ( xml ) {
\t\t\t\t\t\t\twhile ( (elem = elem[ dir ]) ) {
\t\t\t\t\t\t\t\tif ( elem.nodeType === 1 || checkNonElements ) {
\t\t\t\t\t\t\t\t\tif ( matcher( elem, context, xml ) ) {
\t\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\twhile ( (elem = elem[ dir ]) ) {
\t\t\t\t\t\t\t\tif ( elem.nodeType === 1 || checkNonElements ) {
\t\t\t\t\t\t\t\t\touterCache = elem[ expando ] || (elem[ expando ] = {});

\t\t\t\t\t\t\t\t\t// Support: IE <9 only
\t\t\t\t\t\t\t\t\t// Defend against cloned attroperties (jQuery gh-1709)
\t\t\t\t\t\t\t\t\tuniqueCache = outerCache[ elem.uniqueID ] || (outerCache[ elem.uniqueID ] = {});

\t\t\t\t\t\t\t\t\tif ( skip && skip === elem.nodeName.toLowerCase() ) {
\t\t\t\t\t\t\t\t\t\telem = elem[ dir ] || elem;
\t\t\t\t\t\t\t\t\t} else if ( (oldCache = uniqueCache[ key ]) &&
\t\t\t\t\t\t\t\t\t\toldCache[ 0 ] === dirruns && oldCache[ 1 ] === doneName ) {

\t\t\t\t\t\t\t\t\t\t// Assign to newCache so results back-propagate to previous elements
\t\t\t\t\t\t\t\t\t\treturn (newCache[ 2 ] = oldCache[ 2 ]);
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t// Reuse newcache so results back-propagate to previous elements
\t\t\t\t\t\t\t\t\t\tuniqueCache[ key ] = newCache;

\t\t\t\t\t\t\t\t\t\t// A match means we're done; a fail means we have to keep checking
\t\t\t\t\t\t\t\t\t\tif ( (newCache[ 2 ] = matcher( elem, context, xml )) ) {
\t\t\t\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\treturn false;
\t\t\t\t\t};
\t\t\t}

\t\t\tfunction elementMatcher( matchers ) {
\t\t\t\treturn matchers.length > 1 ?
\t\t\t\t\tfunction( elem, context, xml ) {
\t\t\t\t\t\tvar i = matchers.length;
\t\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\t\tif ( !matchers[i]( elem, context, xml ) ) {
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\treturn true;
\t\t\t\t\t} :
\t\t\t\t\tmatchers[0];
\t\t\t}

\t\t\tfunction multipleContexts( selector, contexts, results ) {
\t\t\t\tvar i = 0,
\t\t\t\t\tlen = contexts.length;
\t\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\t\tSizzle( selector, contexts[i], results );
\t\t\t\t}
\t\t\t\treturn results;
\t\t\t}

\t\t\tfunction condense( unmatched, map, filter, context, xml ) {
\t\t\t\tvar elem,
\t\t\t\t\tnewUnmatched = [],
\t\t\t\t\ti = 0,
\t\t\t\t\tlen = unmatched.length,
\t\t\t\t\tmapped = map != null;

\t\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\t\tif ( (elem = unmatched[i]) ) {
\t\t\t\t\t\tif ( !filter || filter( elem, context, xml ) ) {
\t\t\t\t\t\t\tnewUnmatched.push( elem );
\t\t\t\t\t\t\tif ( mapped ) {
\t\t\t\t\t\t\t\tmap.push( i );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn newUnmatched;
\t\t\t}

\t\t\tfunction setMatcher( preFilter, selector, matcher, postFilter, postFinder, postSelector ) {
\t\t\t\tif ( postFilter && !postFilter[ expando ] ) {
\t\t\t\t\tpostFilter = setMatcher( postFilter );
\t\t\t\t}
\t\t\t\tif ( postFinder && !postFinder[ expando ] ) {
\t\t\t\t\tpostFinder = setMatcher( postFinder, postSelector );
\t\t\t\t}
\t\t\t\treturn markFunction(function( seed, results, context, xml ) {
\t\t\t\t\tvar temp, i, elem,
\t\t\t\t\t\tpreMap = [],
\t\t\t\t\t\tpostMap = [],
\t\t\t\t\t\tpreexisting = results.length,

\t\t\t\t\t\t// Get initial elements from seed or context
\t\t\t\t\t\telems = seed || multipleContexts( selector || \"*\", context.nodeType ? [ context ] : context, [] ),

\t\t\t\t\t\t// Prefilter to get matcher input, preserving a map for seed-results synchronization
\t\t\t\t\t\tmatcherIn = preFilter && ( seed || !selector ) ?
\t\t\t\t\t\t\tcondense( elems, preMap, preFilter, context, xml ) :
\t\t\t\t\t\t\telems,

\t\t\t\t\t\tmatcherOut = matcher ?
\t\t\t\t\t\t\t// If we have a postFinder, or filtered seed, or non-seed postFilter or preexisting results,
\t\t\t\t\t\t\tpostFinder || ( seed ? preFilter : preexisting || postFilter ) ?

\t\t\t\t\t\t\t\t// ...intermediate processing is necessary
\t\t\t\t\t\t\t\t[] :

\t\t\t\t\t\t\t\t// ...otherwise use results directly
\t\t\t\t\t\t\t\tresults :
\t\t\t\t\t\t\tmatcherIn;

\t\t\t\t\t// Find primary matches
\t\t\t\t\tif ( matcher ) {
\t\t\t\t\t\tmatcher( matcherIn, matcherOut, context, xml );
\t\t\t\t\t}

\t\t\t\t\t// Apply postFilter
\t\t\t\t\tif ( postFilter ) {
\t\t\t\t\t\ttemp = condense( matcherOut, postMap );
\t\t\t\t\t\tpostFilter( temp, [], context, xml );

\t\t\t\t\t\t// Un-match failing elements by moving them back to matcherIn
\t\t\t\t\t\ti = temp.length;
\t\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\t\tif ( (elem = temp[i]) ) {
\t\t\t\t\t\t\t\tmatcherOut[ postMap[i] ] = !(matcherIn[ postMap[i] ] = elem);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tif ( seed ) {
\t\t\t\t\t\tif ( postFinder || preFilter ) {
\t\t\t\t\t\t\tif ( postFinder ) {
\t\t\t\t\t\t\t\t// Get the final matcherOut by condensing this intermediate into postFinder contexts
\t\t\t\t\t\t\t\ttemp = [];
\t\t\t\t\t\t\t\ti = matcherOut.length;
\t\t\t\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\t\t\t\tif ( (elem = matcherOut[i]) ) {
\t\t\t\t\t\t\t\t\t\t// Restore matcherIn since elem is not yet a final match
\t\t\t\t\t\t\t\t\t\ttemp.push( (matcherIn[i] = elem) );
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tpostFinder( null, (matcherOut = []), temp, xml );
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t// Move matched elements from seed to results to keep them synchronized
\t\t\t\t\t\t\ti = matcherOut.length;
\t\t\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\t\t\tif ( (elem = matcherOut[i]) &&
\t\t\t\t\t\t\t\t\t(temp = postFinder ? indexOf( seed, elem ) : preMap[i]) > -1 ) {

\t\t\t\t\t\t\t\t\tseed[temp] = !(results[temp] = elem);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t// Add elements to results, through postFinder if defined
\t\t\t\t\t} else {
\t\t\t\t\t\tmatcherOut = condense(
\t\t\t\t\t\t\tmatcherOut === results ?
\t\t\t\t\t\t\t\tmatcherOut.splice( preexisting, matcherOut.length ) :
\t\t\t\t\t\t\t\tmatcherOut
\t\t\t\t\t\t);
\t\t\t\t\t\tif ( postFinder ) {
\t\t\t\t\t\t\tpostFinder( null, results, matcherOut, xml );
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tpush.apply( results, matcherOut );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}

\t\t\tfunction matcherFromTokens( tokens ) {
\t\t\t\tvar checkContext, matcher, j,
\t\t\t\t\tlen = tokens.length,
\t\t\t\t\tleadingRelative = Expr.relative[ tokens[0].type ],
\t\t\t\t\timplicitRelative = leadingRelative || Expr.relative[\" \"],
\t\t\t\t\ti = leadingRelative ? 1 : 0,

\t\t\t\t\t// The foundational matcher ensures that elements are reachable from top-level context(s)
\t\t\t\t\tmatchContext = addCombinator( function( elem ) {
\t\t\t\t\t\treturn elem === checkContext;
\t\t\t\t\t}, implicitRelative, true ),
\t\t\t\t\tmatchAnyContext = addCombinator( function( elem ) {
\t\t\t\t\t\treturn indexOf( checkContext, elem ) > -1;
\t\t\t\t\t}, implicitRelative, true ),
\t\t\t\t\tmatchers = [ function( elem, context, xml ) {
\t\t\t\t\t\tvar ret = ( !leadingRelative && ( xml || context !== outermostContext ) ) || (
\t\t\t\t\t\t\t(checkContext = context).nodeType ?
\t\t\t\t\t\t\t\tmatchContext( elem, context, xml ) :
\t\t\t\t\t\t\t\tmatchAnyContext( elem, context, xml ) );
\t\t\t\t\t\t// Avoid hanging onto element (issue #299)
\t\t\t\t\t\tcheckContext = null;
\t\t\t\t\t\treturn ret;
\t\t\t\t\t} ];

\t\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\t\tif ( (matcher = Expr.relative[ tokens[i].type ]) ) {
\t\t\t\t\t\tmatchers = [ addCombinator(elementMatcher( matchers ), matcher) ];
\t\t\t\t\t} else {
\t\t\t\t\t\tmatcher = Expr.filter[ tokens[i].type ].apply( null, tokens[i].matches );

\t\t\t\t\t\t// Return special upon seeing a positional matcher
\t\t\t\t\t\tif ( matcher[ expando ] ) {
\t\t\t\t\t\t\t// Find the next relative operator (if any) for proper handling
\t\t\t\t\t\t\tj = ++i;
\t\t\t\t\t\t\tfor ( ; j < len; j++ ) {
\t\t\t\t\t\t\t\tif ( Expr.relative[ tokens[j].type ] ) {
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\treturn setMatcher(
\t\t\t\t\t\t\t\ti > 1 && elementMatcher( matchers ),
\t\t\t\t\t\t\t\ti > 1 && toSelector(
\t\t\t\t\t\t\t\t// If the preceding token was a descendant combinator, insert an implicit any-element `*`
\t\t\t\t\t\t\t\ttokens.slice( 0, i - 1 ).concat({ value: tokens[ i - 2 ].type === \" \" ? \"*\" : \"\" })
\t\t\t\t\t\t\t\t).replace( rtrim, \"\$1\" ),
\t\t\t\t\t\t\t\tmatcher,
\t\t\t\t\t\t\t\ti < j && matcherFromTokens( tokens.slice( i, j ) ),
\t\t\t\t\t\t\t\tj < len && matcherFromTokens( (tokens = tokens.slice( j )) ),
\t\t\t\t\t\t\t\tj < len && toSelector( tokens )
\t\t\t\t\t\t\t);
\t\t\t\t\t\t}
\t\t\t\t\t\tmatchers.push( matcher );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn elementMatcher( matchers );
\t\t\t}

\t\t\tfunction matcherFromGroupMatchers( elementMatchers, setMatchers ) {
\t\t\t\tvar bySet = setMatchers.length > 0,
\t\t\t\t\tbyElement = elementMatchers.length > 0,
\t\t\t\t\tsuperMatcher = function( seed, context, xml, results, outermost ) {
\t\t\t\t\t\tvar elem, j, matcher,
\t\t\t\t\t\t\tmatchedCount = 0,
\t\t\t\t\t\t\ti = \"0\",
\t\t\t\t\t\t\tunmatched = seed && [],
\t\t\t\t\t\t\tsetMatched = [],
\t\t\t\t\t\t\tcontextBackup = outermostContext,
\t\t\t\t\t\t\t// We must always have either seed elements or outermost context
\t\t\t\t\t\t\telems = seed || byElement && Expr.find[\"TAG\"]( \"*\", outermost ),
\t\t\t\t\t\t\t// Use integer dirruns iff this is the outermost matcher
\t\t\t\t\t\t\tdirrunsUnique = (dirruns += contextBackup == null ? 1 : Math.random() || 0.1),
\t\t\t\t\t\t\tlen = elems.length;

\t\t\t\t\t\tif ( outermost ) {
\t\t\t\t\t\t\toutermostContext = context === document || context || outermost;
\t\t\t\t\t\t}

\t\t\t\t\t\t// Add elements passing elementMatchers directly to results
\t\t\t\t\t\t// Support: IE<9, Safari
\t\t\t\t\t\t// Tolerate NodeList properties (IE: \"length\"; Safari: <number>) matching elements by id
\t\t\t\t\t\tfor ( ; i !== len && (elem = elems[i]) != null; i++ ) {
\t\t\t\t\t\t\tif ( byElement && elem ) {
\t\t\t\t\t\t\t\tj = 0;
\t\t\t\t\t\t\t\tif ( !context && elem.ownerDocument !== document ) {
\t\t\t\t\t\t\t\t\tsetDocument( elem );
\t\t\t\t\t\t\t\t\txml = !documentIsHTML;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\twhile ( (matcher = elementMatchers[j++]) ) {
\t\t\t\t\t\t\t\t\tif ( matcher( elem, context || document, xml) ) {
\t\t\t\t\t\t\t\t\t\tresults.push( elem );
\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif ( outermost ) {
\t\t\t\t\t\t\t\t\tdirruns = dirrunsUnique;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t// Track unmatched elements for set filters
\t\t\t\t\t\t\tif ( bySet ) {
\t\t\t\t\t\t\t\t// They will have gone through all possible matchers
\t\t\t\t\t\t\t\tif ( (elem = !matcher && elem) ) {
\t\t\t\t\t\t\t\t\tmatchedCount--;
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t// Lengthen the array for every element, matched or not
\t\t\t\t\t\t\t\tif ( seed ) {
\t\t\t\t\t\t\t\t\tunmatched.push( elem );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t// `i` is now the count of elements visited above, and adding it to `matchedCount`
\t\t\t\t\t\t// makes the latter nonnegative.
\t\t\t\t\t\tmatchedCount += i;

\t\t\t\t\t\t// Apply set filters to unmatched elements
\t\t\t\t\t\t// NOTE: This can be skipped if there are no unmatched elements (i.e., `matchedCount`
\t\t\t\t\t\t// equals `i`), unless we didn't visit _any_ elements in the above loop because we have
\t\t\t\t\t\t// no element matchers and no seed.
\t\t\t\t\t\t// Incrementing an initially-string \"0\" `i` allows `i` to remain a string only in that
\t\t\t\t\t\t// case, which will result in a \"00\" `matchedCount` that differs from `i` but is also
\t\t\t\t\t\t// numerically zero.
\t\t\t\t\t\tif ( bySet && i !== matchedCount ) {
\t\t\t\t\t\t\tj = 0;
\t\t\t\t\t\t\twhile ( (matcher = setMatchers[j++]) ) {
\t\t\t\t\t\t\t\tmatcher( unmatched, setMatched, context, xml );
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif ( seed ) {
\t\t\t\t\t\t\t\t// Reintegrate element matches to eliminate the need for sorting
\t\t\t\t\t\t\t\tif ( matchedCount > 0 ) {
\t\t\t\t\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\t\t\t\t\tif ( !(unmatched[i] || setMatched[i]) ) {
\t\t\t\t\t\t\t\t\t\t\tsetMatched[i] = pop.call( results );
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t// Discard index placeholder values to get only actual matches
\t\t\t\t\t\t\t\tsetMatched = condense( setMatched );
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t// Add matches to results
\t\t\t\t\t\t\tpush.apply( results, setMatched );

\t\t\t\t\t\t\t// Seedless set matches succeeding multiple successful matchers stipulate sorting
\t\t\t\t\t\t\tif ( outermost && !seed && setMatched.length > 0 &&
\t\t\t\t\t\t\t\t( matchedCount + setMatchers.length ) > 1 ) {

\t\t\t\t\t\t\t\tSizzle.uniqueSort( results );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t// Override manipulation of globals by nested matchers
\t\t\t\t\t\tif ( outermost ) {
\t\t\t\t\t\t\tdirruns = dirrunsUnique;
\t\t\t\t\t\t\toutermostContext = contextBackup;
\t\t\t\t\t\t}

\t\t\t\t\t\treturn unmatched;
\t\t\t\t\t};

\t\t\t\treturn bySet ?
\t\t\t\t\tmarkFunction( superMatcher ) :
\t\t\t\t\tsuperMatcher;
\t\t\t}

\t\t\tcompile = Sizzle.compile = function( selector, match /* Internal Use Only */ ) {
\t\t\t\tvar i,
\t\t\t\t\tsetMatchers = [],
\t\t\t\t\telementMatchers = [],
\t\t\t\t\tcached = compilerCache[ selector + \" \" ];

\t\t\t\tif ( !cached ) {
\t\t\t\t\t// Generate a function of recursive functions that can be used to check each element
\t\t\t\t\tif ( !match ) {
\t\t\t\t\t\tmatch = tokenize( selector );
\t\t\t\t\t}
\t\t\t\t\ti = match.length;
\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\tcached = matcherFromTokens( match[i] );
\t\t\t\t\t\tif ( cached[ expando ] ) {
\t\t\t\t\t\t\tsetMatchers.push( cached );
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telementMatchers.push( cached );
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Cache the compiled function
\t\t\t\t\tcached = compilerCache( selector, matcherFromGroupMatchers( elementMatchers, setMatchers ) );

\t\t\t\t\t// Save selector and tokenization
\t\t\t\t\tcached.selector = selector;
\t\t\t\t}
\t\t\t\treturn cached;
\t\t\t};

\t\t\t/**
\t\t\t * A low-level selection function that works with Sizzle's compiled
\t\t\t *  selector functions
\t\t\t * @param {String|Function} selector A selector or a pre-compiled
\t\t\t *  selector function built with Sizzle.compile
\t\t\t * @param {Element} context
\t\t\t * @param {Array} [results]
\t\t\t * @param {Array} [seed] A set of elements to match against
\t\t\t */
\t\t\tselect = Sizzle.select = function( selector, context, results, seed ) {
\t\t\t\tvar i, tokens, token, type, find,
\t\t\t\t\tcompiled = typeof selector === \"function\" && selector,
\t\t\t\t\tmatch = !seed && tokenize( (selector = compiled.selector || selector) );

\t\t\t\tresults = results || [];

\t\t\t\t// Try to minimize operations if there is only one selector in the list and no seed
\t\t\t\t// (the latter of which guarantees us context)
\t\t\t\tif ( match.length === 1 ) {

\t\t\t\t\t// Reduce context if the leading compound selector is an ID
\t\t\t\t\ttokens = match[0] = match[0].slice( 0 );
\t\t\t\t\tif ( tokens.length > 2 && (token = tokens[0]).type === \"ID\" &&
\t\t\t\t\t\tcontext.nodeType === 9 && documentIsHTML && Expr.relative[ tokens[1].type ] ) {

\t\t\t\t\t\tcontext = ( Expr.find[\"ID\"]( token.matches[0].replace(runescape, funescape), context ) || [] )[0];
\t\t\t\t\t\tif ( !context ) {
\t\t\t\t\t\t\treturn results;

\t\t\t\t\t\t\t// Precompiled matchers will still verify ancestry, so step up a level
\t\t\t\t\t\t} else if ( compiled ) {
\t\t\t\t\t\t\tcontext = context.parentNode;
\t\t\t\t\t\t}

\t\t\t\t\t\tselector = selector.slice( tokens.shift().value.length );
\t\t\t\t\t}

\t\t\t\t\t// Fetch a seed set for right-to-left matching
\t\t\t\t\ti = matchExpr[\"needsContext\"].test( selector ) ? 0 : tokens.length;
\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\ttoken = tokens[i];

\t\t\t\t\t\t// Abort if we hit a combinator
\t\t\t\t\t\tif ( Expr.relative[ (type = token.type) ] ) {
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t\tif ( (find = Expr.find[ type ]) ) {
\t\t\t\t\t\t\t// Search, expanding context for leading sibling combinators
\t\t\t\t\t\t\tif ( (seed = find(
\t\t\t\t\t\t\t\ttoken.matches[0].replace( runescape, funescape ),
\t\t\t\t\t\t\t\trsibling.test( tokens[0].type ) && testContext( context.parentNode ) || context
\t\t\t\t\t\t\t)) ) {

\t\t\t\t\t\t\t\t// If seed is empty or no tokens remain, we can return early
\t\t\t\t\t\t\t\ttokens.splice( i, 1 );
\t\t\t\t\t\t\t\tselector = seed.length && toSelector( tokens );
\t\t\t\t\t\t\t\tif ( !selector ) {
\t\t\t\t\t\t\t\t\tpush.apply( results, seed );
\t\t\t\t\t\t\t\t\treturn results;
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Compile and execute a filtering function if one is not provided
\t\t\t\t// Provide `match` to avoid retokenization if we modified the selector above
\t\t\t\t( compiled || compile( selector, match ) )(
\t\t\t\t\tseed,
\t\t\t\t\tcontext,
\t\t\t\t\t!documentIsHTML,
\t\t\t\t\tresults,
\t\t\t\t\t!context || rsibling.test( selector ) && testContext( context.parentNode ) || context
\t\t\t\t);
\t\t\t\treturn results;
\t\t\t};

// One-time assignments

// Sort stability
\t\t\tsupport.sortStable = expando.split(\"\").sort( sortOrder ).join(\"\") === expando;

// Support: Chrome 14-35+
// Always assume duplicates if they aren't passed to the comparison function
\t\t\tsupport.detectDuplicates = !!hasDuplicate;

// Initialize against the default document
\t\t\tsetDocument();

// Support: Webkit<537.32 - Safari 6.0.3/Chrome 25 (fixed in Chrome 27)
// Detached nodes confoundingly follow *each other*
\t\t\tsupport.sortDetached = assert(function( el ) {
\t\t\t\t// Should return 1, but returns 4 (following)
\t\t\t\treturn el.compareDocumentPosition( document.createElement(\"fieldset\") ) & 1;
\t\t\t});

// Support: IE<8
// Prevent attribute/property \"interpolation\"
// https://msdn.microsoft.com/en-us/library/ms536429%28VS.85%29.aspx
\t\t\tif ( !assert(function( el ) {
\t\t\t\tel.innerHTML = \"<a href='#'></a>\";
\t\t\t\treturn el.firstChild.getAttribute(\"href\") === \"#\" ;
\t\t\t}) ) {
\t\t\t\taddHandle( \"type|href|height|width\", function( elem, name, isXML ) {
\t\t\t\t\tif ( !isXML ) {
\t\t\t\t\t\treturn elem.getAttribute( name, name.toLowerCase() === \"type\" ? 1 : 2 );
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}

// Support: IE<9
// Use defaultValue in place of getAttribute(\"value\")
\t\t\tif ( !support.attributes || !assert(function( el ) {
\t\t\t\tel.innerHTML = \"<input/>\";
\t\t\t\tel.firstChild.setAttribute( \"value\", \"\" );
\t\t\t\treturn el.firstChild.getAttribute( \"value\" ) === \"\";
\t\t\t}) ) {
\t\t\t\taddHandle( \"value\", function( elem, name, isXML ) {
\t\t\t\t\tif ( !isXML && elem.nodeName.toLowerCase() === \"input\" ) {
\t\t\t\t\t\treturn elem.defaultValue;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}

// Support: IE<9
// Use getAttributeNode to fetch booleans when getAttribute lies
\t\t\tif ( !assert(function( el ) {
\t\t\t\treturn el.getAttribute(\"disabled\") == null;
\t\t\t}) ) {
\t\t\t\taddHandle( booleans, function( elem, name, isXML ) {
\t\t\t\t\tvar val;
\t\t\t\t\tif ( !isXML ) {
\t\t\t\t\t\treturn elem[ name ] === true ? name.toLowerCase() :
\t\t\t\t\t\t\t(val = elem.getAttributeNode( name )) && val.specified ?
\t\t\t\t\t\t\t\tval.value :
\t\t\t\t\t\t\t\tnull;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}

\t\t\treturn Sizzle;

\t\t})( window );



\tjQuery.find = Sizzle;
\tjQuery.expr = Sizzle.selectors;

// Deprecated
\tjQuery.expr[ \":\" ] = jQuery.expr.pseudos;
\tjQuery.uniqueSort = jQuery.unique = Sizzle.uniqueSort;
\tjQuery.text = Sizzle.getText;
\tjQuery.isXMLDoc = Sizzle.isXML;
\tjQuery.contains = Sizzle.contains;
\tjQuery.escapeSelector = Sizzle.escape;




\tvar dir = function( elem, dir, until ) {
\t\tvar matched = [],
\t\t\ttruncate = until !== undefined;

\t\twhile ( ( elem = elem[ dir ] ) && elem.nodeType !== 9 ) {
\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\tif ( truncate && jQuery( elem ).is( until ) ) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tmatched.push( elem );
\t\t\t}
\t\t}
\t\treturn matched;
\t};


\tvar siblings = function( n, elem ) {
\t\tvar matched = [];

\t\tfor ( ; n; n = n.nextSibling ) {
\t\t\tif ( n.nodeType === 1 && n !== elem ) {
\t\t\t\tmatched.push( n );
\t\t\t}
\t\t}

\t\treturn matched;
\t};


\tvar rneedsContext = jQuery.expr.match.needsContext;



\tfunction nodeName( elem, name ) {

\t\treturn elem.nodeName && elem.nodeName.toLowerCase() === name.toLowerCase();

\t};
\tvar rsingleTag = ( /^<([a-z][^\\/\\0>:\\x20\\t\\r\\n\\f]*)[\\x20\\t\\r\\n\\f]*\\/?>(?:<\\/\\1>|)\$/i );



// Implement the identical functionality for filter and not
\tfunction winnow( elements, qualifier, not ) {
\t\tif ( isFunction( qualifier ) ) {
\t\t\treturn jQuery.grep( elements, function( elem, i ) {
\t\t\t\treturn !!qualifier.call( elem, i, elem ) !== not;
\t\t\t} );
\t\t}

\t\t// Single element
\t\tif ( qualifier.nodeType ) {
\t\t\treturn jQuery.grep( elements, function( elem ) {
\t\t\t\treturn ( elem === qualifier ) !== not;
\t\t\t} );
\t\t}

\t\t// Arraylike of elements (jQuery, arguments, Array)
\t\tif ( typeof qualifier !== \"string\" ) {
\t\t\treturn jQuery.grep( elements, function( elem ) {
\t\t\t\treturn ( indexOf.call( qualifier, elem ) > -1 ) !== not;
\t\t\t} );
\t\t}

\t\t// Filtered directly for both simple and complex selectors
\t\treturn jQuery.filter( qualifier, elements, not );
\t}

\tjQuery.filter = function( expr, elems, not ) {
\t\tvar elem = elems[ 0 ];

\t\tif ( not ) {
\t\t\texpr = \":not(\" + expr + \")\";
\t\t}

\t\tif ( elems.length === 1 && elem.nodeType === 1 ) {
\t\t\treturn jQuery.find.matchesSelector( elem, expr ) ? [ elem ] : [];
\t\t}

\t\treturn jQuery.find.matches( expr, jQuery.grep( elems, function( elem ) {
\t\t\treturn elem.nodeType === 1;
\t\t} ) );
\t};

\tjQuery.fn.extend( {
\t\tfind: function( selector ) {
\t\t\tvar i, ret,
\t\t\t\tlen = this.length,
\t\t\t\tself = this;

\t\t\tif ( typeof selector !== \"string\" ) {
\t\t\t\treturn this.pushStack( jQuery( selector ).filter( function() {
\t\t\t\t\tfor ( i = 0; i < len; i++ ) {
\t\t\t\t\t\tif ( jQuery.contains( self[ i ], this ) ) {
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} ) );
\t\t\t}

\t\t\tret = this.pushStack( [] );

\t\t\tfor ( i = 0; i < len; i++ ) {
\t\t\t\tjQuery.find( selector, self[ i ], ret );
\t\t\t}

\t\t\treturn len > 1 ? jQuery.uniqueSort( ret ) : ret;
\t\t},
\t\tfilter: function( selector ) {
\t\t\treturn this.pushStack( winnow( this, selector || [], false ) );
\t\t},
\t\tnot: function( selector ) {
\t\t\treturn this.pushStack( winnow( this, selector || [], true ) );
\t\t},
\t\tis: function( selector ) {
\t\t\treturn !!winnow(
\t\t\t\tthis,

\t\t\t\t// If this is a positional/relative selector, check membership in the returned set
\t\t\t\t// so \$(\"p:first\").is(\"p:last\") won't return true for a doc with two \"p\".
\t\t\t\ttypeof selector === \"string\" && rneedsContext.test( selector ) ?
\t\t\t\t\tjQuery( selector ) :
\t\t\t\t\tselector || [],
\t\t\t\tfalse
\t\t\t).length;
\t\t}
\t} );


// Initialize a jQuery object


// A central reference to the root jQuery(document)
\tvar rootjQuery,

\t\t// A simple way to check for HTML strings
\t\t// Prioritize #id over <tag> to avoid XSS via location.hash (#9521)
\t\t// Strict HTML recognition (#11290: must start with <)
\t\t// Shortcut simple #id case for speed
\t\trquickExpr = /^(?:\\s*(<[\\w\\W]+>)[^>]*|#([\\w-]+))\$/,

\t\tinit = jQuery.fn.init = function( selector, context, root ) {
\t\t\tvar match, elem;

\t\t\t// HANDLE: \$(\"\"), \$(null), \$(undefined), \$(false)
\t\t\tif ( !selector ) {
\t\t\t\treturn this;
\t\t\t}

\t\t\t// Method init() accepts an alternate rootjQuery
\t\t\t// so migrate can support jQuery.sub (gh-2101)
\t\t\troot = root || rootjQuery;

\t\t\t// Handle HTML strings
\t\t\tif ( typeof selector === \"string\" ) {
\t\t\t\tif ( selector[ 0 ] === \"<\" &&
\t\t\t\t\tselector[ selector.length - 1 ] === \">\" &&
\t\t\t\t\tselector.length >= 3 ) {

\t\t\t\t\t// Assume that strings that start and end with <> are HTML and skip the regex check
\t\t\t\t\tmatch = [ null, selector, null ];

\t\t\t\t} else {
\t\t\t\t\tmatch = rquickExpr.exec( selector );
\t\t\t\t}

\t\t\t\t// Match html or make sure no context is specified for #id
\t\t\t\tif ( match && ( match[ 1 ] || !context ) ) {

\t\t\t\t\t// HANDLE: \$(html) -> \$(array)
\t\t\t\t\tif ( match[ 1 ] ) {
\t\t\t\t\t\tcontext = context instanceof jQuery ? context[ 0 ] : context;

\t\t\t\t\t\t// Option to run scripts is true for back-compat
\t\t\t\t\t\t// Intentionally let the error be thrown if parseHTML is not present
\t\t\t\t\t\tjQuery.merge( this, jQuery.parseHTML(
\t\t\t\t\t\t\tmatch[ 1 ],
\t\t\t\t\t\t\tcontext && context.nodeType ? context.ownerDocument || context : document,
\t\t\t\t\t\t\ttrue
\t\t\t\t\t\t) );

\t\t\t\t\t\t// HANDLE: \$(html, props)
\t\t\t\t\t\tif ( rsingleTag.test( match[ 1 ] ) && jQuery.isPlainObject( context ) ) {
\t\t\t\t\t\t\tfor ( match in context ) {

\t\t\t\t\t\t\t\t// Properties of context are called as methods if possible
\t\t\t\t\t\t\t\tif ( isFunction( this[ match ] ) ) {
\t\t\t\t\t\t\t\t\tthis[ match ]( context[ match ] );

\t\t\t\t\t\t\t\t\t// ...and otherwise set as attributes
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tthis.attr( match, context[ match ] );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\treturn this;

\t\t\t\t\t\t// HANDLE: \$(#id)
\t\t\t\t\t} else {
\t\t\t\t\t\telem = document.getElementById( match[ 2 ] );

\t\t\t\t\t\tif ( elem ) {

\t\t\t\t\t\t\t// Inject the element directly into the jQuery object
\t\t\t\t\t\t\tthis[ 0 ] = elem;
\t\t\t\t\t\t\tthis.length = 1;
\t\t\t\t\t\t}
\t\t\t\t\t\treturn this;
\t\t\t\t\t}

\t\t\t\t\t// HANDLE: \$(expr, \$(...))
\t\t\t\t} else if ( !context || context.jquery ) {
\t\t\t\t\treturn ( context || root ).find( selector );

\t\t\t\t\t// HANDLE: \$(expr, context)
\t\t\t\t\t// (which is just equivalent to: \$(context).find(expr)
\t\t\t\t} else {
\t\t\t\t\treturn this.constructor( context ).find( selector );
\t\t\t\t}

\t\t\t\t// HANDLE: \$(DOMElement)
\t\t\t} else if ( selector.nodeType ) {
\t\t\t\tthis[ 0 ] = selector;
\t\t\t\tthis.length = 1;
\t\t\t\treturn this;

\t\t\t\t// HANDLE: \$(function)
\t\t\t\t// Shortcut for document ready
\t\t\t} else if ( isFunction( selector ) ) {
\t\t\t\treturn root.ready !== undefined ?
\t\t\t\t\troot.ready( selector ) :

\t\t\t\t\t// Execute immediately if ready is not present
\t\t\t\t\tselector( jQuery );
\t\t\t}

\t\t\treturn jQuery.makeArray( selector, this );
\t\t};

// Give the init function the jQuery prototype for later instantiation
\tinit.prototype = jQuery.fn;

// Initialize central reference
\trootjQuery = jQuery( document );


\tvar rparentsprev = /^(?:parents|prev(?:Until|All))/,

\t\t// Methods guaranteed to produce a unique set when starting from a unique set
\t\tguaranteedUnique = {
\t\t\tchildren: true,
\t\t\tcontents: true,
\t\t\tnext: true,
\t\t\tprev: true
\t\t};

\tjQuery.fn.extend( {
\t\thas: function( target ) {
\t\t\tvar targets = jQuery( target, this ),
\t\t\t\tl = targets.length;

\t\t\treturn this.filter( function() {
\t\t\t\tvar i = 0;
\t\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\t\tif ( jQuery.contains( this, targets[ i ] ) ) {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} );
\t\t},

\t\tclosest: function( selectors, context ) {
\t\t\tvar cur,
\t\t\t\ti = 0,
\t\t\t\tl = this.length,
\t\t\t\tmatched = [],
\t\t\t\ttargets = typeof selectors !== \"string\" && jQuery( selectors );

\t\t\t// Positional selectors never match, since there's no _selection_ context
\t\t\tif ( !rneedsContext.test( selectors ) ) {
\t\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\t\tfor ( cur = this[ i ]; cur && cur !== context; cur = cur.parentNode ) {

\t\t\t\t\t\t// Always skip document fragments
\t\t\t\t\t\tif ( cur.nodeType < 11 && ( targets ?
\t\t\t\t\t\t\ttargets.index( cur ) > -1 :

\t\t\t\t\t\t\t// Don't pass non-elements to Sizzle
\t\t\t\t\t\t\tcur.nodeType === 1 &&
\t\t\t\t\t\t\tjQuery.find.matchesSelector( cur, selectors ) ) ) {

\t\t\t\t\t\t\tmatched.push( cur );
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\treturn this.pushStack( matched.length > 1 ? jQuery.uniqueSort( matched ) : matched );
\t\t},

\t\t// Determine the position of an element within the set
\t\tindex: function( elem ) {

\t\t\t// No argument, return index in parent
\t\t\tif ( !elem ) {
\t\t\t\treturn ( this[ 0 ] && this[ 0 ].parentNode ) ? this.first().prevAll().length : -1;
\t\t\t}

\t\t\t// Index in selector
\t\t\tif ( typeof elem === \"string\" ) {
\t\t\t\treturn indexOf.call( jQuery( elem ), this[ 0 ] );
\t\t\t}

\t\t\t// Locate the position of the desired element
\t\t\treturn indexOf.call( this,

\t\t\t\t// If it receives a jQuery object, the first element is used
\t\t\t\telem.jquery ? elem[ 0 ] : elem
\t\t\t);
\t\t},

\t\tadd: function( selector, context ) {
\t\t\treturn this.pushStack(
\t\t\t\tjQuery.uniqueSort(
\t\t\t\t\tjQuery.merge( this.get(), jQuery( selector, context ) )
\t\t\t\t)
\t\t\t);
\t\t},

\t\taddBack: function( selector ) {
\t\t\treturn this.add( selector == null ?
\t\t\t\tthis.prevObject : this.prevObject.filter( selector )
\t\t\t);
\t\t}
\t} );

\tfunction sibling( cur, dir ) {
\t\twhile ( ( cur = cur[ dir ] ) && cur.nodeType !== 1 ) {}
\t\treturn cur;
\t}

\tjQuery.each( {
\t\tparent: function( elem ) {
\t\t\tvar parent = elem.parentNode;
\t\t\treturn parent && parent.nodeType !== 11 ? parent : null;
\t\t},
\t\tparents: function( elem ) {
\t\t\treturn dir( elem, \"parentNode\" );
\t\t},
\t\tparentsUntil: function( elem, i, until ) {
\t\t\treturn dir( elem, \"parentNode\", until );
\t\t},
\t\tnext: function( elem ) {
\t\t\treturn sibling( elem, \"nextSibling\" );
\t\t},
\t\tprev: function( elem ) {
\t\t\treturn sibling( elem, \"previousSibling\" );
\t\t},
\t\tnextAll: function( elem ) {
\t\t\treturn dir( elem, \"nextSibling\" );
\t\t},
\t\tprevAll: function( elem ) {
\t\t\treturn dir( elem, \"previousSibling\" );
\t\t},
\t\tnextUntil: function( elem, i, until ) {
\t\t\treturn dir( elem, \"nextSibling\", until );
\t\t},
\t\tprevUntil: function( elem, i, until ) {
\t\t\treturn dir( elem, \"previousSibling\", until );
\t\t},
\t\tsiblings: function( elem ) {
\t\t\treturn siblings( ( elem.parentNode || {} ).firstChild, elem );
\t\t},
\t\tchildren: function( elem ) {
\t\t\treturn siblings( elem.firstChild );
\t\t},
\t\tcontents: function( elem ) {
\t\t\tif ( nodeName( elem, \"iframe\" ) ) {
\t\t\t\treturn elem.contentDocument;
\t\t\t}

\t\t\t// Support: IE 9 - 11 only, iOS 7 only, Android Browser <=4.3 only
\t\t\t// Treat the template element as a regular one in browsers that
\t\t\t// don't support it.
\t\t\tif ( nodeName( elem, \"template\" ) ) {
\t\t\t\telem = elem.content || elem;
\t\t\t}

\t\t\treturn jQuery.merge( [], elem.childNodes );
\t\t}
\t}, function( name, fn ) {
\t\tjQuery.fn[ name ] = function( until, selector ) {
\t\t\tvar matched = jQuery.map( this, fn, until );

\t\t\tif ( name.slice( -5 ) !== \"Until\" ) {
\t\t\t\tselector = until;
\t\t\t}

\t\t\tif ( selector && typeof selector === \"string\" ) {
\t\t\t\tmatched = jQuery.filter( selector, matched );
\t\t\t}

\t\t\tif ( this.length > 1 ) {

\t\t\t\t// Remove duplicates
\t\t\t\tif ( !guaranteedUnique[ name ] ) {
\t\t\t\t\tjQuery.uniqueSort( matched );
\t\t\t\t}

\t\t\t\t// Reverse order for parents* and prev-derivatives
\t\t\t\tif ( rparentsprev.test( name ) ) {
\t\t\t\t\tmatched.reverse();
\t\t\t\t}
\t\t\t}

\t\t\treturn this.pushStack( matched );
\t\t};
\t} );
\tvar rnothtmlwhite = ( /[^\\x20\\t\\r\\n\\f]+/g );



// Convert String-formatted options into Object-formatted ones
\tfunction createOptions( options ) {
\t\tvar object = {};
\t\tjQuery.each( options.match( rnothtmlwhite ) || [], function( _, flag ) {
\t\t\tobject[ flag ] = true;
\t\t} );
\t\treturn object;
\t}

\t/*
 * Create a callback list using the following parameters:
 *
 *\toptions: an optional list of space-separated options that will change how
 *\t\t\tthe callback list behaves or a more traditional option object
 *
 * By default a callback list will act like an event callback list and can be
 * \"fired\" multiple times.
 *
 * Possible options:
 *
 *\tonce:\t\t\twill ensure the callback list can only be fired once (like a Deferred)
 *
 *\tmemory:\t\t\twill keep track of previous values and will call any callback added
 *\t\t\t\t\tafter the list has been fired right away with the latest \"memorized\"
 *\t\t\t\t\tvalues (like a Deferred)
 *
 *\tunique:\t\t\twill ensure a callback can only be added once (no duplicate in the list)
 *
 *\tstopOnFalse:\tinterrupt callings when a callback returns false
 *
 */
\tjQuery.Callbacks = function( options ) {

\t\t// Convert options from String-formatted to Object-formatted if needed
\t\t// (we check in cache first)
\t\toptions = typeof options === \"string\" ?
\t\t\tcreateOptions( options ) :
\t\t\tjQuery.extend( {}, options );

\t\tvar // Flag to know if list is currently firing
\t\t\tfiring,

\t\t\t// Last fire value for non-forgettable lists
\t\t\tmemory,

\t\t\t// Flag to know if list was already fired
\t\t\tfired,

\t\t\t// Flag to prevent firing
\t\t\tlocked,

\t\t\t// Actual callback list
\t\t\tlist = [],

\t\t\t// Queue of execution data for repeatable lists
\t\t\tqueue = [],

\t\t\t// Index of currently firing callback (modified by add/remove as needed)
\t\t\tfiringIndex = -1,

\t\t\t// Fire callbacks
\t\t\tfire = function() {

\t\t\t\t// Enforce single-firing
\t\t\t\tlocked = locked || options.once;

\t\t\t\t// Execute callbacks for all pending executions,
\t\t\t\t// respecting firingIndex overrides and runtime changes
\t\t\t\tfired = firing = true;
\t\t\t\tfor ( ; queue.length; firingIndex = -1 ) {
\t\t\t\t\tmemory = queue.shift();
\t\t\t\t\twhile ( ++firingIndex < list.length ) {

\t\t\t\t\t\t// Run callback and check for early termination
\t\t\t\t\t\tif ( list[ firingIndex ].apply( memory[ 0 ], memory[ 1 ] ) === false &&
\t\t\t\t\t\t\toptions.stopOnFalse ) {

\t\t\t\t\t\t\t// Jump to end and forget the data so .add doesn't re-fire
\t\t\t\t\t\t\tfiringIndex = list.length;
\t\t\t\t\t\t\tmemory = false;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Forget the data if we're done with it
\t\t\t\tif ( !options.memory ) {
\t\t\t\t\tmemory = false;
\t\t\t\t}

\t\t\t\tfiring = false;

\t\t\t\t// Clean up if we're done firing for good
\t\t\t\tif ( locked ) {

\t\t\t\t\t// Keep an empty list if we have data for future add calls
\t\t\t\t\tif ( memory ) {
\t\t\t\t\t\tlist = [];

\t\t\t\t\t\t// Otherwise, this object is spent
\t\t\t\t\t} else {
\t\t\t\t\t\tlist = \"\";
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},

\t\t\t// Actual Callbacks object
\t\t\tself = {

\t\t\t\t// Add a callback or a collection of callbacks to the list
\t\t\t\tadd: function() {
\t\t\t\t\tif ( list ) {

\t\t\t\t\t\t// If we have memory from a past run, we should fire after adding
\t\t\t\t\t\tif ( memory && !firing ) {
\t\t\t\t\t\t\tfiringIndex = list.length - 1;
\t\t\t\t\t\t\tqueue.push( memory );
\t\t\t\t\t\t}

\t\t\t\t\t\t( function add( args ) {
\t\t\t\t\t\t\tjQuery.each( args, function( _, arg ) {
\t\t\t\t\t\t\t\tif ( isFunction( arg ) ) {
\t\t\t\t\t\t\t\t\tif ( !options.unique || !self.has( arg ) ) {
\t\t\t\t\t\t\t\t\t\tlist.push( arg );
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t} else if ( arg && arg.length && toType( arg ) !== \"string\" ) {

\t\t\t\t\t\t\t\t\t// Inspect recursively
\t\t\t\t\t\t\t\t\tadd( arg );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} );
\t\t\t\t\t\t} )( arguments );

\t\t\t\t\t\tif ( memory && !firing ) {
\t\t\t\t\t\t\tfire();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Remove a callback from the list
\t\t\t\tremove: function() {
\t\t\t\t\tjQuery.each( arguments, function( _, arg ) {
\t\t\t\t\t\tvar index;
\t\t\t\t\t\twhile ( ( index = jQuery.inArray( arg, list, index ) ) > -1 ) {
\t\t\t\t\t\t\tlist.splice( index, 1 );

\t\t\t\t\t\t\t// Handle firing indexes
\t\t\t\t\t\t\tif ( index <= firingIndex ) {
\t\t\t\t\t\t\t\tfiringIndex--;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t} );
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Check if a given callback is in the list.
\t\t\t\t// If no argument is given, return whether or not list has callbacks attached.
\t\t\t\thas: function( fn ) {
\t\t\t\t\treturn fn ?
\t\t\t\t\t\tjQuery.inArray( fn, list ) > -1 :
\t\t\t\t\t\tlist.length > 0;
\t\t\t\t},

\t\t\t\t// Remove all callbacks from the list
\t\t\t\tempty: function() {
\t\t\t\t\tif ( list ) {
\t\t\t\t\t\tlist = [];
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Disable .fire and .add
\t\t\t\t// Abort any current/pending executions
\t\t\t\t// Clear all callbacks and values
\t\t\t\tdisable: function() {
\t\t\t\t\tlocked = queue = [];
\t\t\t\t\tlist = memory = \"\";
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tdisabled: function() {
\t\t\t\t\treturn !list;
\t\t\t\t},

\t\t\t\t// Disable .fire
\t\t\t\t// Also disable .add unless we have memory (since it would have no effect)
\t\t\t\t// Abort any pending executions
\t\t\t\tlock: function() {
\t\t\t\t\tlocked = queue = [];
\t\t\t\t\tif ( !memory && !firing ) {
\t\t\t\t\t\tlist = memory = \"\";
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tlocked: function() {
\t\t\t\t\treturn !!locked;
\t\t\t\t},

\t\t\t\t// Call all callbacks with the given context and arguments
\t\t\t\tfireWith: function( context, args ) {
\t\t\t\t\tif ( !locked ) {
\t\t\t\t\t\targs = args || [];
\t\t\t\t\t\targs = [ context, args.slice ? args.slice() : args ];
\t\t\t\t\t\tqueue.push( args );
\t\t\t\t\t\tif ( !firing ) {
\t\t\t\t\t\t\tfire();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Call all the callbacks with the given arguments
\t\t\t\tfire: function() {
\t\t\t\t\tself.fireWith( this, arguments );
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// To know if the callbacks have already been called at least once
\t\t\t\tfired: function() {
\t\t\t\t\treturn !!fired;
\t\t\t\t}
\t\t\t};

\t\treturn self;
\t};


\tfunction Identity( v ) {
\t\treturn v;
\t}
\tfunction Thrower( ex ) {
\t\tthrow ex;
\t}

\tfunction adoptValue( value, resolve, reject, noValue ) {
\t\tvar method;

\t\ttry {

\t\t\t// Check for promise aspect first to privilege synchronous behavior
\t\t\tif ( value && isFunction( ( method = value.promise ) ) ) {
\t\t\t\tmethod.call( value ).done( resolve ).fail( reject );

\t\t\t\t// Other thenables
\t\t\t} else if ( value && isFunction( ( method = value.then ) ) ) {
\t\t\t\tmethod.call( value, resolve, reject );

\t\t\t\t// Other non-thenables
\t\t\t} else {

\t\t\t\t// Control `resolve` arguments by letting Array#slice cast boolean `noValue` to integer:
\t\t\t\t// * false: [ value ].slice( 0 ) => resolve( value )
\t\t\t\t// * true: [ value ].slice( 1 ) => resolve()
\t\t\t\tresolve.apply( undefined, [ value ].slice( noValue ) );
\t\t\t}

\t\t\t// For Promises/A+, convert exceptions into rejections
\t\t\t// Since jQuery.when doesn't unwrap thenables, we can skip the extra checks appearing in
\t\t\t// Deferred#then to conditionally suppress rejection.
\t\t} catch ( value ) {

\t\t\t// Support: Android 4.0 only
\t\t\t// Strict mode functions invoked without .call/.apply get global-object context
\t\t\treject.apply( undefined, [ value ] );
\t\t}
\t}

\tjQuery.extend( {

\t\tDeferred: function( func ) {
\t\t\tvar tuples = [

\t\t\t\t\t// action, add listener, callbacks,
\t\t\t\t\t// ... .then handlers, argument index, [final state]
\t\t\t\t\t[ \"notify\", \"progress\", jQuery.Callbacks( \"memory\" ),
\t\t\t\t\t\tjQuery.Callbacks( \"memory\" ), 2 ],
\t\t\t\t\t[ \"resolve\", \"done\", jQuery.Callbacks( \"once memory\" ),
\t\t\t\t\t\tjQuery.Callbacks( \"once memory\" ), 0, \"resolved\" ],
\t\t\t\t\t[ \"reject\", \"fail\", jQuery.Callbacks( \"once memory\" ),
\t\t\t\t\t\tjQuery.Callbacks( \"once memory\" ), 1, \"rejected\" ]
\t\t\t\t],
\t\t\t\tstate = \"pending\",
\t\t\t\tpromise = {
\t\t\t\t\tstate: function() {
\t\t\t\t\t\treturn state;
\t\t\t\t\t},
\t\t\t\t\talways: function() {
\t\t\t\t\t\tdeferred.done( arguments ).fail( arguments );
\t\t\t\t\t\treturn this;
\t\t\t\t\t},
\t\t\t\t\t\"catch\": function( fn ) {
\t\t\t\t\t\treturn promise.then( null, fn );
\t\t\t\t\t},

\t\t\t\t\t// Keep pipe for back-compat
\t\t\t\t\tpipe: function( /* fnDone, fnFail, fnProgress */ ) {
\t\t\t\t\t\tvar fns = arguments;

\t\t\t\t\t\treturn jQuery.Deferred( function( newDefer ) {
\t\t\t\t\t\t\tjQuery.each( tuples, function( i, tuple ) {

\t\t\t\t\t\t\t\t// Map tuples (progress, done, fail) to arguments (done, fail, progress)
\t\t\t\t\t\t\t\tvar fn = isFunction( fns[ tuple[ 4 ] ] ) && fns[ tuple[ 4 ] ];

\t\t\t\t\t\t\t\t// deferred.progress(function() { bind to newDefer or newDefer.notify })
\t\t\t\t\t\t\t\t// deferred.done(function() { bind to newDefer or newDefer.resolve })
\t\t\t\t\t\t\t\t// deferred.fail(function() { bind to newDefer or newDefer.reject })
\t\t\t\t\t\t\t\tdeferred[ tuple[ 1 ] ]( function() {
\t\t\t\t\t\t\t\t\tvar returned = fn && fn.apply( this, arguments );
\t\t\t\t\t\t\t\t\tif ( returned && isFunction( returned.promise ) ) {
\t\t\t\t\t\t\t\t\t\treturned.promise()
\t\t\t\t\t\t\t\t\t\t\t.progress( newDefer.notify )
\t\t\t\t\t\t\t\t\t\t\t.done( newDefer.resolve )
\t\t\t\t\t\t\t\t\t\t\t.fail( newDefer.reject );
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\tnewDefer[ tuple[ 0 ] + \"With\" ](
\t\t\t\t\t\t\t\t\t\t\tthis,
\t\t\t\t\t\t\t\t\t\t\tfn ? [ returned ] : arguments
\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t} );
\t\t\t\t\t\t\t} );
\t\t\t\t\t\t\tfns = null;
\t\t\t\t\t\t} ).promise();
\t\t\t\t\t},
\t\t\t\t\tthen: function( onFulfilled, onRejected, onProgress ) {
\t\t\t\t\t\tvar maxDepth = 0;
\t\t\t\t\t\tfunction resolve( depth, deferred, handler, special ) {
\t\t\t\t\t\t\treturn function() {
\t\t\t\t\t\t\t\tvar that = this,
\t\t\t\t\t\t\t\t\targs = arguments,
\t\t\t\t\t\t\t\t\tmightThrow = function() {
\t\t\t\t\t\t\t\t\t\tvar returned, then;

\t\t\t\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.3.3.3
\t\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-59
\t\t\t\t\t\t\t\t\t\t// Ignore double-resolution attempts
\t\t\t\t\t\t\t\t\t\tif ( depth < maxDepth ) {
\t\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\treturned = handler.apply( that, args );

\t\t\t\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.1
\t\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-48
\t\t\t\t\t\t\t\t\t\tif ( returned === deferred.promise() ) {
\t\t\t\t\t\t\t\t\t\t\tthrow new TypeError( \"Thenable self-resolution\" );
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t// Support: Promises/A+ sections 2.3.3.1, 3.5
\t\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-54
\t\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-75
\t\t\t\t\t\t\t\t\t\t// Retrieve `then` only once
\t\t\t\t\t\t\t\t\t\tthen = returned &&

\t\t\t\t\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.4
\t\t\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-64
\t\t\t\t\t\t\t\t\t\t\t// Only check objects and functions for thenability
\t\t\t\t\t\t\t\t\t\t\t( typeof returned === \"object\" ||
\t\t\t\t\t\t\t\t\t\t\t\ttypeof returned === \"function\" ) &&
\t\t\t\t\t\t\t\t\t\t\treturned.then;

\t\t\t\t\t\t\t\t\t\t// Handle a returned thenable
\t\t\t\t\t\t\t\t\t\tif ( isFunction( then ) ) {

\t\t\t\t\t\t\t\t\t\t\t// Special processors (notify) just wait for resolution
\t\t\t\t\t\t\t\t\t\t\tif ( special ) {
\t\t\t\t\t\t\t\t\t\t\t\tthen.call(
\t\t\t\t\t\t\t\t\t\t\t\t\treturned,
\t\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Identity, special ),
\t\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Thrower, special )
\t\t\t\t\t\t\t\t\t\t\t\t);

\t\t\t\t\t\t\t\t\t\t\t\t// Normal processors (resolve) also hook into progress
\t\t\t\t\t\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\t\t\t\t\t// ...and disregard older resolution values
\t\t\t\t\t\t\t\t\t\t\t\tmaxDepth++;

\t\t\t\t\t\t\t\t\t\t\t\tthen.call(
\t\t\t\t\t\t\t\t\t\t\t\t\treturned,
\t\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Identity, special ),
\t\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Thrower, special ),
\t\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Identity,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdeferred.notifyWith )
\t\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t// Handle all other returned values
\t\t\t\t\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\t\t\t\t// Only substitute handlers pass on context
\t\t\t\t\t\t\t\t\t\t\t// and multiple values (non-spec behavior)
\t\t\t\t\t\t\t\t\t\t\tif ( handler !== Identity ) {
\t\t\t\t\t\t\t\t\t\t\t\tthat = undefined;
\t\t\t\t\t\t\t\t\t\t\t\targs = [ returned ];
\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t// Process the value(s)
\t\t\t\t\t\t\t\t\t\t\t// Default process is resolve
\t\t\t\t\t\t\t\t\t\t\t( special || deferred.resolveWith )( that, args );
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t},

\t\t\t\t\t\t\t\t\t// Only normal processors (resolve) catch and reject exceptions
\t\t\t\t\t\t\t\t\tprocess = special ?
\t\t\t\t\t\t\t\t\t\tmightThrow :
\t\t\t\t\t\t\t\t\t\tfunction() {
\t\t\t\t\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\t\t\t\t\tmightThrow();
\t\t\t\t\t\t\t\t\t\t\t} catch ( e ) {

\t\t\t\t\t\t\t\t\t\t\t\tif ( jQuery.Deferred.exceptionHook ) {
\t\t\t\t\t\t\t\t\t\t\t\t\tjQuery.Deferred.exceptionHook( e,
\t\t\t\t\t\t\t\t\t\t\t\t\t\tprocess.stackTrace );
\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.3.3.4.1
\t\t\t\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-61
\t\t\t\t\t\t\t\t\t\t\t\t// Ignore post-resolution exceptions
\t\t\t\t\t\t\t\t\t\t\t\tif ( depth + 1 >= maxDepth ) {

\t\t\t\t\t\t\t\t\t\t\t\t\t// Only substitute handlers pass on context
\t\t\t\t\t\t\t\t\t\t\t\t\t// and multiple values (non-spec behavior)
\t\t\t\t\t\t\t\t\t\t\t\t\tif ( handler !== Thrower ) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tthat = undefined;
\t\t\t\t\t\t\t\t\t\t\t\t\t\targs = [ e ];
\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\tdeferred.rejectWith( that, args );
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t};

\t\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.3.3.1
\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-57
\t\t\t\t\t\t\t\t// Re-resolve promises immediately to dodge false rejection from
\t\t\t\t\t\t\t\t// subsequent errors
\t\t\t\t\t\t\t\tif ( depth ) {
\t\t\t\t\t\t\t\t\tprocess();
\t\t\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\t\t// Call an optional hook to record the stack, in case of exception
\t\t\t\t\t\t\t\t\t// since it's otherwise lost when execution goes async
\t\t\t\t\t\t\t\t\tif ( jQuery.Deferred.getStackHook ) {
\t\t\t\t\t\t\t\t\t\tprocess.stackTrace = jQuery.Deferred.getStackHook();
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\twindow.setTimeout( process );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t};
\t\t\t\t\t\t}

\t\t\t\t\t\treturn jQuery.Deferred( function( newDefer ) {

\t\t\t\t\t\t\t// progress_handlers.add( ... )
\t\t\t\t\t\t\ttuples[ 0 ][ 3 ].add(
\t\t\t\t\t\t\t\tresolve(
\t\t\t\t\t\t\t\t\t0,
\t\t\t\t\t\t\t\t\tnewDefer,
\t\t\t\t\t\t\t\t\tisFunction( onProgress ) ?
\t\t\t\t\t\t\t\t\t\tonProgress :
\t\t\t\t\t\t\t\t\t\tIdentity,
\t\t\t\t\t\t\t\t\tnewDefer.notifyWith
\t\t\t\t\t\t\t\t)
\t\t\t\t\t\t\t);

\t\t\t\t\t\t\t// fulfilled_handlers.add( ... )
\t\t\t\t\t\t\ttuples[ 1 ][ 3 ].add(
\t\t\t\t\t\t\t\tresolve(
\t\t\t\t\t\t\t\t\t0,
\t\t\t\t\t\t\t\t\tnewDefer,
\t\t\t\t\t\t\t\t\tisFunction( onFulfilled ) ?
\t\t\t\t\t\t\t\t\t\tonFulfilled :
\t\t\t\t\t\t\t\t\t\tIdentity
\t\t\t\t\t\t\t\t)
\t\t\t\t\t\t\t);

\t\t\t\t\t\t\t// rejected_handlers.add( ... )
\t\t\t\t\t\t\ttuples[ 2 ][ 3 ].add(
\t\t\t\t\t\t\t\tresolve(
\t\t\t\t\t\t\t\t\t0,
\t\t\t\t\t\t\t\t\tnewDefer,
\t\t\t\t\t\t\t\t\tisFunction( onRejected ) ?
\t\t\t\t\t\t\t\t\t\tonRejected :
\t\t\t\t\t\t\t\t\t\tThrower
\t\t\t\t\t\t\t\t)
\t\t\t\t\t\t\t);
\t\t\t\t\t\t} ).promise();
\t\t\t\t\t},

\t\t\t\t\t// Get a promise for this deferred
\t\t\t\t\t// If obj is provided, the promise aspect is added to the object
\t\t\t\t\tpromise: function( obj ) {
\t\t\t\t\t\treturn obj != null ? jQuery.extend( obj, promise ) : promise;
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tdeferred = {};

\t\t\t// Add list-specific methods
\t\t\tjQuery.each( tuples, function( i, tuple ) {
\t\t\t\tvar list = tuple[ 2 ],
\t\t\t\t\tstateString = tuple[ 5 ];

\t\t\t\t// promise.progress = list.add
\t\t\t\t// promise.done = list.add
\t\t\t\t// promise.fail = list.add
\t\t\t\tpromise[ tuple[ 1 ] ] = list.add;

\t\t\t\t// Handle state
\t\t\t\tif ( stateString ) {
\t\t\t\t\tlist.add(
\t\t\t\t\t\tfunction() {

\t\t\t\t\t\t\t// state = \"resolved\" (i.e., fulfilled)
\t\t\t\t\t\t\t// state = \"rejected\"
\t\t\t\t\t\t\tstate = stateString;
\t\t\t\t\t\t},

\t\t\t\t\t\t// rejected_callbacks.disable
\t\t\t\t\t\t// fulfilled_callbacks.disable
\t\t\t\t\t\ttuples[ 3 - i ][ 2 ].disable,

\t\t\t\t\t\t// rejected_handlers.disable
\t\t\t\t\t\t// fulfilled_handlers.disable
\t\t\t\t\t\ttuples[ 3 - i ][ 3 ].disable,

\t\t\t\t\t\t// progress_callbacks.lock
\t\t\t\t\t\ttuples[ 0 ][ 2 ].lock,

\t\t\t\t\t\t// progress_handlers.lock
\t\t\t\t\t\ttuples[ 0 ][ 3 ].lock
\t\t\t\t\t);
\t\t\t\t}

\t\t\t\t// progress_handlers.fire
\t\t\t\t// fulfilled_handlers.fire
\t\t\t\t// rejected_handlers.fire
\t\t\t\tlist.add( tuple[ 3 ].fire );

\t\t\t\t// deferred.notify = function() { deferred.notifyWith(...) }
\t\t\t\t// deferred.resolve = function() { deferred.resolveWith(...) }
\t\t\t\t// deferred.reject = function() { deferred.rejectWith(...) }
\t\t\t\tdeferred[ tuple[ 0 ] ] = function() {
\t\t\t\t\tdeferred[ tuple[ 0 ] + \"With\" ]( this === deferred ? undefined : this, arguments );
\t\t\t\t\treturn this;
\t\t\t\t};

\t\t\t\t// deferred.notifyWith = list.fireWith
\t\t\t\t// deferred.resolveWith = list.fireWith
\t\t\t\t// deferred.rejectWith = list.fireWith
\t\t\t\tdeferred[ tuple[ 0 ] + \"With\" ] = list.fireWith;
\t\t\t} );

\t\t\t// Make the deferred a promise
\t\t\tpromise.promise( deferred );

\t\t\t// Call given func if any
\t\t\tif ( func ) {
\t\t\t\tfunc.call( deferred, deferred );
\t\t\t}

\t\t\t// All done!
\t\t\treturn deferred;
\t\t},

\t\t// Deferred helper
\t\twhen: function( singleValue ) {
\t\t\tvar

\t\t\t\t// count of uncompleted subordinates
\t\t\t\tremaining = arguments.length,

\t\t\t\t// count of unprocessed arguments
\t\t\t\ti = remaining,

\t\t\t\t// subordinate fulfillment data
\t\t\t\tresolveContexts = Array( i ),
\t\t\t\tresolveValues = slice.call( arguments ),

\t\t\t\t// the master Deferred
\t\t\t\tmaster = jQuery.Deferred(),

\t\t\t\t// subordinate callback factory
\t\t\t\tupdateFunc = function( i ) {
\t\t\t\t\treturn function( value ) {
\t\t\t\t\t\tresolveContexts[ i ] = this;
\t\t\t\t\t\tresolveValues[ i ] = arguments.length > 1 ? slice.call( arguments ) : value;
\t\t\t\t\t\tif ( !( --remaining ) ) {
\t\t\t\t\t\t\tmaster.resolveWith( resolveContexts, resolveValues );
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t};

\t\t\t// Single- and empty arguments are adopted like Promise.resolve
\t\t\tif ( remaining <= 1 ) {
\t\t\t\tadoptValue( singleValue, master.done( updateFunc( i ) ).resolve, master.reject,
\t\t\t\t\t!remaining );

\t\t\t\t// Use .then() to unwrap secondary thenables (cf. gh-3000)
\t\t\t\tif ( master.state() === \"pending\" ||
\t\t\t\t\tisFunction( resolveValues[ i ] && resolveValues[ i ].then ) ) {

\t\t\t\t\treturn master.then();
\t\t\t\t}
\t\t\t}

\t\t\t// Multiple arguments are aggregated like Promise.all array elements
\t\t\twhile ( i-- ) {
\t\t\t\tadoptValue( resolveValues[ i ], updateFunc( i ), master.reject );
\t\t\t}

\t\t\treturn master.promise();
\t\t}
\t} );


// These usually indicate a programmer mistake during development,
// warn about them ASAP rather than swallowing them by default.
\tvar rerrorNames = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error\$/;

\tjQuery.Deferred.exceptionHook = function( error, stack ) {

\t\t// Support: IE 8 - 9 only
\t\t// Console exists when dev tools are open, which can happen at any time
\t\tif ( window.console && window.console.warn && error && rerrorNames.test( error.name ) ) {
\t\t\twindow.console.warn( \"jQuery.Deferred exception: \" + error.message, error.stack, stack );
\t\t}
\t};




\tjQuery.readyException = function( error ) {
\t\twindow.setTimeout( function() {
\t\t\tthrow error;
\t\t} );
\t};




// The deferred used on DOM ready
\tvar readyList = jQuery.Deferred();

\tjQuery.fn.ready = function( fn ) {

\t\treadyList
\t\t\t.then( fn )

\t\t\t// Wrap jQuery.readyException in a function so that the lookup
\t\t\t// happens at the time of error handling instead of callback
\t\t\t// registration.
\t\t\t.catch( function( error ) {
\t\t\t\tjQuery.readyException( error );
\t\t\t} );

\t\treturn this;
\t};

\tjQuery.extend( {

\t\t// Is the DOM ready to be used? Set to true once it occurs.
\t\tisReady: false,

\t\t// A counter to track how many items to wait for before
\t\t// the ready event fires. See #6781
\t\treadyWait: 1,

\t\t// Handle when the DOM is ready
\t\tready: function( wait ) {

\t\t\t// Abort if there are pending holds or we're already ready
\t\t\tif ( wait === true ? --jQuery.readyWait : jQuery.isReady ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// Remember that the DOM is ready
\t\t\tjQuery.isReady = true;

\t\t\t// If a normal DOM Ready event fired, decrement, and wait if need be
\t\t\tif ( wait !== true && --jQuery.readyWait > 0 ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// If there are functions bound, to execute
\t\t\treadyList.resolveWith( document, [ jQuery ] );
\t\t}
\t} );

\tjQuery.ready.then = readyList.then;

// The ready event handler and self cleanup method
\tfunction completed() {
\t\tdocument.removeEventListener( \"DOMContentLoaded\", completed );
\t\twindow.removeEventListener( \"load\", completed );
\t\tjQuery.ready();
\t}

// Catch cases where \$(document).ready() is called
// after the browser event has already occurred.
// Support: IE <=9 - 10 only
// Older IE sometimes signals \"interactive\" too soon
\tif ( document.readyState === \"complete\" ||
\t\t( document.readyState !== \"loading\" && !document.documentElement.doScroll ) ) {

\t\t// Handle it asynchronously to allow scripts the opportunity to delay ready
\t\twindow.setTimeout( jQuery.ready );

\t} else {

\t\t// Use the handy event callback
\t\tdocument.addEventListener( \"DOMContentLoaded\", completed );

\t\t// A fallback to window.onload, that will always work
\t\twindow.addEventListener( \"load\", completed );
\t}




// Multifunctional method to get and set values of a collection
// The value/s can optionally be executed if it's a function
\tvar access = function( elems, fn, key, value, chainable, emptyGet, raw ) {
\t\tvar i = 0,
\t\t\tlen = elems.length,
\t\t\tbulk = key == null;

\t\t// Sets many values
\t\tif ( toType( key ) === \"object\" ) {
\t\t\tchainable = true;
\t\t\tfor ( i in key ) {
\t\t\t\taccess( elems, fn, i, key[ i ], true, emptyGet, raw );
\t\t\t}

\t\t\t// Sets one value
\t\t} else if ( value !== undefined ) {
\t\t\tchainable = true;

\t\t\tif ( !isFunction( value ) ) {
\t\t\t\traw = true;
\t\t\t}

\t\t\tif ( bulk ) {

\t\t\t\t// Bulk operations run against the entire set
\t\t\t\tif ( raw ) {
\t\t\t\t\tfn.call( elems, value );
\t\t\t\t\tfn = null;

\t\t\t\t\t// ...except when executing function values
\t\t\t\t} else {
\t\t\t\t\tbulk = fn;
\t\t\t\t\tfn = function( elem, key, value ) {
\t\t\t\t\t\treturn bulk.call( jQuery( elem ), value );
\t\t\t\t\t};
\t\t\t\t}
\t\t\t}

\t\t\tif ( fn ) {
\t\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\t\tfn(
\t\t\t\t\t\telems[ i ], key, raw ?
\t\t\t\t\t\t\tvalue :
\t\t\t\t\t\t\tvalue.call( elems[ i ], i, fn( elems[ i ], key ) )
\t\t\t\t\t);
\t\t\t\t}
\t\t\t}
\t\t}

\t\tif ( chainable ) {
\t\t\treturn elems;
\t\t}

\t\t// Gets
\t\tif ( bulk ) {
\t\t\treturn fn.call( elems );
\t\t}

\t\treturn len ? fn( elems[ 0 ], key ) : emptyGet;
\t};


// Matches dashed string for camelizing
\tvar rmsPrefix = /^-ms-/,
\t\trdashAlpha = /-([a-z])/g;

// Used by camelCase as callback to replace()
\tfunction fcamelCase( all, letter ) {
\t\treturn letter.toUpperCase();
\t}

// Convert dashed to camelCase; used by the css and data modules
// Support: IE <=9 - 11, Edge 12 - 15
// Microsoft forgot to hump their vendor prefix (#9572)
\tfunction camelCase( string ) {
\t\treturn string.replace( rmsPrefix, \"ms-\" ).replace( rdashAlpha, fcamelCase );
\t}
\tvar acceptData = function( owner ) {

\t\t// Accepts only:
\t\t//  - Node
\t\t//    - Node.ELEMENT_NODE
\t\t//    - Node.DOCUMENT_NODE
\t\t//  - Object
\t\t//    - Any
\t\treturn owner.nodeType === 1 || owner.nodeType === 9 || !( +owner.nodeType );
\t};




\tfunction Data() {
\t\tthis.expando = jQuery.expando + Data.uid++;
\t}

\tData.uid = 1;

\tData.prototype = {

\t\tcache: function( owner ) {

\t\t\t// Check if the owner object already has a cache
\t\t\tvar value = owner[ this.expando ];

\t\t\t// If not, create one
\t\t\tif ( !value ) {
\t\t\t\tvalue = {};

\t\t\t\t// We can accept data for non-element nodes in modern browsers,
\t\t\t\t// but we should not, see #8335.
\t\t\t\t// Always return an empty object.
\t\t\t\tif ( acceptData( owner ) ) {

\t\t\t\t\t// If it is a node unlikely to be stringify-ed or looped over
\t\t\t\t\t// use plain assignment
\t\t\t\t\tif ( owner.nodeType ) {
\t\t\t\t\t\towner[ this.expando ] = value;

\t\t\t\t\t\t// Otherwise secure it in a non-enumerable property
\t\t\t\t\t\t// configurable must be true to allow the property to be
\t\t\t\t\t\t// deleted when data is removed
\t\t\t\t\t} else {
\t\t\t\t\t\tObject.defineProperty( owner, this.expando, {
\t\t\t\t\t\t\tvalue: value,
\t\t\t\t\t\t\tconfigurable: true
\t\t\t\t\t\t} );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\treturn value;
\t\t},
\t\tset: function( owner, data, value ) {
\t\t\tvar prop,
\t\t\t\tcache = this.cache( owner );

\t\t\t// Handle: [ owner, key, value ] args
\t\t\t// Always use camelCase key (gh-2257)
\t\t\tif ( typeof data === \"string\" ) {
\t\t\t\tcache[ camelCase( data ) ] = value;

\t\t\t\t// Handle: [ owner, { properties } ] args
\t\t\t} else {

\t\t\t\t// Copy the properties one-by-one to the cache object
\t\t\t\tfor ( prop in data ) {
\t\t\t\t\tcache[ camelCase( prop ) ] = data[ prop ];
\t\t\t\t}
\t\t\t}
\t\t\treturn cache;
\t\t},
\t\tget: function( owner, key ) {
\t\t\treturn key === undefined ?
\t\t\t\tthis.cache( owner ) :

\t\t\t\t// Always use camelCase key (gh-2257)
\t\t\t\towner[ this.expando ] && owner[ this.expando ][ camelCase( key ) ];
\t\t},
\t\taccess: function( owner, key, value ) {

\t\t\t// In cases where either:
\t\t\t//
\t\t\t//   1. No key was specified
\t\t\t//   2. A string key was specified, but no value provided
\t\t\t//
\t\t\t// Take the \"read\" path and allow the get method to determine
\t\t\t// which value to return, respectively either:
\t\t\t//
\t\t\t//   1. The entire cache object
\t\t\t//   2. The data stored at the key
\t\t\t//
\t\t\tif ( key === undefined ||
\t\t\t\t( ( key && typeof key === \"string\" ) && value === undefined ) ) {

\t\t\t\treturn this.get( owner, key );
\t\t\t}

\t\t\t// When the key is not a string, or both a key and value
\t\t\t// are specified, set or extend (existing objects) with either:
\t\t\t//
\t\t\t//   1. An object of properties
\t\t\t//   2. A key and value
\t\t\t//
\t\t\tthis.set( owner, key, value );

\t\t\t// Since the \"set\" path can have two possible entry points
\t\t\t// return the expected data based on which path was taken[*]
\t\t\treturn value !== undefined ? value : key;
\t\t},
\t\tremove: function( owner, key ) {
\t\t\tvar i,
\t\t\t\tcache = owner[ this.expando ];

\t\t\tif ( cache === undefined ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( key !== undefined ) {

\t\t\t\t// Support array or space separated string of keys
\t\t\t\tif ( Array.isArray( key ) ) {

\t\t\t\t\t// If key is an array of keys...
\t\t\t\t\t// We always set camelCase keys, so remove that.
\t\t\t\t\tkey = key.map( camelCase );
\t\t\t\t} else {
\t\t\t\t\tkey = camelCase( key );

\t\t\t\t\t// If a key with the spaces exists, use it.
\t\t\t\t\t// Otherwise, create an array by matching non-whitespace
\t\t\t\t\tkey = key in cache ?
\t\t\t\t\t\t[ key ] :
\t\t\t\t\t\t( key.match( rnothtmlwhite ) || [] );
\t\t\t\t}

\t\t\t\ti = key.length;

\t\t\t\twhile ( i-- ) {
\t\t\t\t\tdelete cache[ key[ i ] ];
\t\t\t\t}
\t\t\t}

\t\t\t// Remove the expando if there's no more data
\t\t\tif ( key === undefined || jQuery.isEmptyObject( cache ) ) {

\t\t\t\t// Support: Chrome <=35 - 45
\t\t\t\t// Webkit & Blink performance suffers when deleting properties
\t\t\t\t// from DOM nodes, so set to undefined instead
\t\t\t\t// https://bugs.chromium.org/p/chromium/issues/detail?id=378607 (bug restricted)
\t\t\t\tif ( owner.nodeType ) {
\t\t\t\t\towner[ this.expando ] = undefined;
\t\t\t\t} else {
\t\t\t\t\tdelete owner[ this.expando ];
\t\t\t\t}
\t\t\t}
\t\t},
\t\thasData: function( owner ) {
\t\t\tvar cache = owner[ this.expando ];
\t\t\treturn cache !== undefined && !jQuery.isEmptyObject( cache );
\t\t}
\t};
\tvar dataPriv = new Data();

\tvar dataUser = new Data();



//\tImplementation Summary
//
//\t1. Enforce API surface and semantic compatibility with 1.9.x branch
//\t2. Improve the module's maintainability by reducing the storage
//\t\tpaths to a single mechanism.
//\t3. Use the same single mechanism to support \"private\" and \"user\" data.
//\t4. _Never_ expose \"private\" data to user code (TODO: Drop _data, _removeData)
//\t5. Avoid exposing implementation details on user objects (eg. expando properties)
//\t6. Provide a clear path for implementation upgrade to WeakMap in 2014

\tvar rbrace = /^(?:\\{[\\w\\W]*\\}|\\[[\\w\\W]*\\])\$/,
\t\trmultiDash = /[A-Z]/g;

\tfunction getData( data ) {
\t\tif ( data === \"true\" ) {
\t\t\treturn true;
\t\t}

\t\tif ( data === \"false\" ) {
\t\t\treturn false;
\t\t}

\t\tif ( data === \"null\" ) {
\t\t\treturn null;
\t\t}

\t\t// Only convert to a number if it doesn't change the string
\t\tif ( data === +data + \"\" ) {
\t\t\treturn +data;
\t\t}

\t\tif ( rbrace.test( data ) ) {
\t\t\treturn JSON.parse( data );
\t\t}

\t\treturn data;
\t}

\tfunction dataAttr( elem, key, data ) {
\t\tvar name;

\t\t// If nothing was found internally, try to fetch any
\t\t// data from the HTML5 data-* attribute
\t\tif ( data === undefined && elem.nodeType === 1 ) {
\t\t\tname = \"data-\" + key.replace( rmultiDash, \"-\$&\" ).toLowerCase();
\t\t\tdata = elem.getAttribute( name );

\t\t\tif ( typeof data === \"string\" ) {
\t\t\t\ttry {
\t\t\t\t\tdata = getData( data );
\t\t\t\t} catch ( e ) {}

\t\t\t\t// Make sure we set the data so it isn't changed later
\t\t\t\tdataUser.set( elem, key, data );
\t\t\t} else {
\t\t\t\tdata = undefined;
\t\t\t}
\t\t}
\t\treturn data;
\t}

\tjQuery.extend( {
\t\thasData: function( elem ) {
\t\t\treturn dataUser.hasData( elem ) || dataPriv.hasData( elem );
\t\t},

\t\tdata: function( elem, name, data ) {
\t\t\treturn dataUser.access( elem, name, data );
\t\t},

\t\tremoveData: function( elem, name ) {
\t\t\tdataUser.remove( elem, name );
\t\t},

\t\t// TODO: Now that all calls to _data and _removeData have been replaced
\t\t// with direct calls to dataPriv methods, these can be deprecated.
\t\t_data: function( elem, name, data ) {
\t\t\treturn dataPriv.access( elem, name, data );
\t\t},

\t\t_removeData: function( elem, name ) {
\t\t\tdataPriv.remove( elem, name );
\t\t}
\t} );

\tjQuery.fn.extend( {
\t\tdata: function( key, value ) {
\t\t\tvar i, name, data,
\t\t\t\telem = this[ 0 ],
\t\t\t\tattrs = elem && elem.attributes;

\t\t\t// Gets all values
\t\t\tif ( key === undefined ) {
\t\t\t\tif ( this.length ) {
\t\t\t\t\tdata = dataUser.get( elem );

\t\t\t\t\tif ( elem.nodeType === 1 && !dataPriv.get( elem, \"hasDataAttrs\" ) ) {
\t\t\t\t\t\ti = attrs.length;
\t\t\t\t\t\twhile ( i-- ) {

\t\t\t\t\t\t\t// Support: IE 11 only
\t\t\t\t\t\t\t// The attrs elements can be null (#14894)
\t\t\t\t\t\t\tif ( attrs[ i ] ) {
\t\t\t\t\t\t\t\tname = attrs[ i ].name;
\t\t\t\t\t\t\t\tif ( name.indexOf( \"data-\" ) === 0 ) {
\t\t\t\t\t\t\t\t\tname = camelCase( name.slice( 5 ) );
\t\t\t\t\t\t\t\t\tdataAttr( elem, name, data[ name ] );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\tdataPriv.set( elem, \"hasDataAttrs\", true );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn data;
\t\t\t}

\t\t\t// Sets multiple values
\t\t\tif ( typeof key === \"object\" ) {
\t\t\t\treturn this.each( function() {
\t\t\t\t\tdataUser.set( this, key );
\t\t\t\t} );
\t\t\t}

\t\t\treturn access( this, function( value ) {
\t\t\t\tvar data;

\t\t\t\t// The calling jQuery object (element matches) is not empty
\t\t\t\t// (and therefore has an element appears at this[ 0 ]) and the
\t\t\t\t// `value` parameter was not undefined. An empty jQuery object
\t\t\t\t// will result in `undefined` for elem = this[ 0 ] which will
\t\t\t\t// throw an exception if an attempt to read a data cache is made.
\t\t\t\tif ( elem && value === undefined ) {

\t\t\t\t\t// Attempt to get data from the cache
\t\t\t\t\t// The key will always be camelCased in Data
\t\t\t\t\tdata = dataUser.get( elem, key );
\t\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\t\treturn data;
\t\t\t\t\t}

\t\t\t\t\t// Attempt to \"discover\" the data in
\t\t\t\t\t// HTML5 custom data-* attrs
\t\t\t\t\tdata = dataAttr( elem, key );
\t\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\t\treturn data;
\t\t\t\t\t}

\t\t\t\t\t// We tried really hard, but the data doesn't exist.
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t// Set the data...
\t\t\t\tthis.each( function() {

\t\t\t\t\t// We always store the camelCased key
\t\t\t\t\tdataUser.set( this, key, value );
\t\t\t\t} );
\t\t\t}, null, value, arguments.length > 1, null, true );
\t\t},

\t\tremoveData: function( key ) {
\t\t\treturn this.each( function() {
\t\t\t\tdataUser.remove( this, key );
\t\t\t} );
\t\t}
\t} );


\tjQuery.extend( {
\t\tqueue: function( elem, type, data ) {
\t\t\tvar queue;

\t\t\tif ( elem ) {
\t\t\t\ttype = ( type || \"fx\" ) + \"queue\";
\t\t\t\tqueue = dataPriv.get( elem, type );

\t\t\t\t// Speed up dequeue by getting out quickly if this is just a lookup
\t\t\t\tif ( data ) {
\t\t\t\t\tif ( !queue || Array.isArray( data ) ) {
\t\t\t\t\t\tqueue = dataPriv.access( elem, type, jQuery.makeArray( data ) );
\t\t\t\t\t} else {
\t\t\t\t\t\tqueue.push( data );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn queue || [];
\t\t\t}
\t\t},

\t\tdequeue: function( elem, type ) {
\t\t\ttype = type || \"fx\";

\t\t\tvar queue = jQuery.queue( elem, type ),
\t\t\t\tstartLength = queue.length,
\t\t\t\tfn = queue.shift(),
\t\t\t\thooks = jQuery._queueHooks( elem, type ),
\t\t\t\tnext = function() {
\t\t\t\t\tjQuery.dequeue( elem, type );
\t\t\t\t};

\t\t\t// If the fx queue is dequeued, always remove the progress sentinel
\t\t\tif ( fn === \"inprogress\" ) {
\t\t\t\tfn = queue.shift();
\t\t\t\tstartLength--;
\t\t\t}

\t\t\tif ( fn ) {

\t\t\t\t// Add a progress sentinel to prevent the fx queue from being
\t\t\t\t// automatically dequeued
\t\t\t\tif ( type === \"fx\" ) {
\t\t\t\t\tqueue.unshift( \"inprogress\" );
\t\t\t\t}

\t\t\t\t// Clear up the last queue stop function
\t\t\t\tdelete hooks.stop;
\t\t\t\tfn.call( elem, next, hooks );
\t\t\t}

\t\t\tif ( !startLength && hooks ) {
\t\t\t\thooks.empty.fire();
\t\t\t}
\t\t},

\t\t// Not public - generate a queueHooks object, or return the current one
\t\t_queueHooks: function( elem, type ) {
\t\t\tvar key = type + \"queueHooks\";
\t\t\treturn dataPriv.get( elem, key ) || dataPriv.access( elem, key, {
\t\t\t\tempty: jQuery.Callbacks( \"once memory\" ).add( function() {
\t\t\t\t\tdataPriv.remove( elem, [ type + \"queue\", key ] );
\t\t\t\t} )
\t\t\t} );
\t\t}
\t} );

\tjQuery.fn.extend( {
\t\tqueue: function( type, data ) {
\t\t\tvar setter = 2;

\t\t\tif ( typeof type !== \"string\" ) {
\t\t\t\tdata = type;
\t\t\t\ttype = \"fx\";
\t\t\t\tsetter--;
\t\t\t}

\t\t\tif ( arguments.length < setter ) {
\t\t\t\treturn jQuery.queue( this[ 0 ], type );
\t\t\t}

\t\t\treturn data === undefined ?
\t\t\t\tthis :
\t\t\t\tthis.each( function() {
\t\t\t\t\tvar queue = jQuery.queue( this, type, data );

\t\t\t\t\t// Ensure a hooks for this queue
\t\t\t\t\tjQuery._queueHooks( this, type );

\t\t\t\t\tif ( type === \"fx\" && queue[ 0 ] !== \"inprogress\" ) {
\t\t\t\t\t\tjQuery.dequeue( this, type );
\t\t\t\t\t}
\t\t\t\t} );
\t\t},
\t\tdequeue: function( type ) {
\t\t\treturn this.each( function() {
\t\t\t\tjQuery.dequeue( this, type );
\t\t\t} );
\t\t},
\t\tclearQueue: function( type ) {
\t\t\treturn this.queue( type || \"fx\", [] );
\t\t},

\t\t// Get a promise resolved when queues of a certain type
\t\t// are emptied (fx is the type by default)
\t\tpromise: function( type, obj ) {
\t\t\tvar tmp,
\t\t\t\tcount = 1,
\t\t\t\tdefer = jQuery.Deferred(),
\t\t\t\telements = this,
\t\t\t\ti = this.length,
\t\t\t\tresolve = function() {
\t\t\t\t\tif ( !( --count ) ) {
\t\t\t\t\t\tdefer.resolveWith( elements, [ elements ] );
\t\t\t\t\t}
\t\t\t\t};

\t\t\tif ( typeof type !== \"string\" ) {
\t\t\t\tobj = type;
\t\t\t\ttype = undefined;
\t\t\t}
\t\t\ttype = type || \"fx\";

\t\t\twhile ( i-- ) {
\t\t\t\ttmp = dataPriv.get( elements[ i ], type + \"queueHooks\" );
\t\t\t\tif ( tmp && tmp.empty ) {
\t\t\t\t\tcount++;
\t\t\t\t\ttmp.empty.add( resolve );
\t\t\t\t}
\t\t\t}
\t\t\tresolve();
\t\t\treturn defer.promise( obj );
\t\t}
\t} );
\tvar pnum = ( /[+-]?(?:\\d*\\.|)\\d+(?:[eE][+-]?\\d+|)/ ).source;

\tvar rcssNum = new RegExp( \"^(?:([+-])=|)(\" + pnum + \")([a-z%]*)\$\", \"i\" );


\tvar cssExpand = [ \"Top\", \"Right\", \"Bottom\", \"Left\" ];

\tvar isHiddenWithinTree = function( elem, el ) {

\t\t// isHiddenWithinTree might be called from jQuery#filter function;
\t\t// in that case, element will be second argument
\t\telem = el || elem;

\t\t// Inline style trumps all
\t\treturn elem.style.display === \"none\" ||
\t\t\telem.style.display === \"\" &&

\t\t\t// Otherwise, check computed style
\t\t\t// Support: Firefox <=43 - 45
\t\t\t// Disconnected elements can have computed display: none, so first confirm that elem is
\t\t\t// in the document.
\t\t\tjQuery.contains( elem.ownerDocument, elem ) &&

\t\t\tjQuery.css( elem, \"display\" ) === \"none\";
\t};

\tvar swap = function( elem, options, callback, args ) {
\t\tvar ret, name,
\t\t\told = {};

\t\t// Remember the old values, and insert the new ones
\t\tfor ( name in options ) {
\t\t\told[ name ] = elem.style[ name ];
\t\t\telem.style[ name ] = options[ name ];
\t\t}

\t\tret = callback.apply( elem, args || [] );

\t\t// Revert the old values
\t\tfor ( name in options ) {
\t\t\telem.style[ name ] = old[ name ];
\t\t}

\t\treturn ret;
\t};




\tfunction adjustCSS( elem, prop, valueParts, tween ) {
\t\tvar adjusted, scale,
\t\t\tmaxIterations = 20,
\t\t\tcurrentValue = tween ?
\t\t\t\tfunction() {
\t\t\t\t\treturn tween.cur();
\t\t\t\t} :
\t\t\t\tfunction() {
\t\t\t\t\treturn jQuery.css( elem, prop, \"\" );
\t\t\t\t},
\t\t\tinitial = currentValue(),
\t\t\tunit = valueParts && valueParts[ 3 ] || ( jQuery.cssNumber[ prop ] ? \"\" : \"px\" ),

\t\t\t// Starting value computation is required for potential unit mismatches
\t\t\tinitialInUnit = ( jQuery.cssNumber[ prop ] || unit !== \"px\" && +initial ) &&
\t\t\t\trcssNum.exec( jQuery.css( elem, prop ) );

\t\tif ( initialInUnit && initialInUnit[ 3 ] !== unit ) {

\t\t\t// Support: Firefox <=54
\t\t\t// Halve the iteration target value to prevent interference from CSS upper bounds (gh-2144)
\t\t\tinitial = initial / 2;

\t\t\t// Trust units reported by jQuery.css
\t\t\tunit = unit || initialInUnit[ 3 ];

\t\t\t// Iteratively approximate from a nonzero starting point
\t\t\tinitialInUnit = +initial || 1;

\t\t\twhile ( maxIterations-- ) {

\t\t\t\t// Evaluate and update our best guess (doubling guesses that zero out).
\t\t\t\t// Finish if the scale equals or crosses 1 (making the old*new product non-positive).
\t\t\t\tjQuery.style( elem, prop, initialInUnit + unit );
\t\t\t\tif ( ( 1 - scale ) * ( 1 - ( scale = currentValue() / initial || 0.5 ) ) <= 0 ) {
\t\t\t\t\tmaxIterations = 0;
\t\t\t\t}
\t\t\t\tinitialInUnit = initialInUnit / scale;

\t\t\t}

\t\t\tinitialInUnit = initialInUnit * 2;
\t\t\tjQuery.style( elem, prop, initialInUnit + unit );

\t\t\t// Make sure we update the tween properties later on
\t\t\tvalueParts = valueParts || [];
\t\t}

\t\tif ( valueParts ) {
\t\t\tinitialInUnit = +initialInUnit || +initial || 0;

\t\t\t// Apply relative offset (+=/-=) if specified
\t\t\tadjusted = valueParts[ 1 ] ?
\t\t\t\tinitialInUnit + ( valueParts[ 1 ] + 1 ) * valueParts[ 2 ] :
\t\t\t\t+valueParts[ 2 ];
\t\t\tif ( tween ) {
\t\t\t\ttween.unit = unit;
\t\t\t\ttween.start = initialInUnit;
\t\t\t\ttween.end = adjusted;
\t\t\t}
\t\t}
\t\treturn adjusted;
\t}


\tvar defaultDisplayMap = {};

\tfunction getDefaultDisplay( elem ) {
\t\tvar temp,
\t\t\tdoc = elem.ownerDocument,
\t\t\tnodeName = elem.nodeName,
\t\t\tdisplay = defaultDisplayMap[ nodeName ];

\t\tif ( display ) {
\t\t\treturn display;
\t\t}

\t\ttemp = doc.body.appendChild( doc.createElement( nodeName ) );
\t\tdisplay = jQuery.css( temp, \"display\" );

\t\ttemp.parentNode.removeChild( temp );

\t\tif ( display === \"none\" ) {
\t\t\tdisplay = \"block\";
\t\t}
\t\tdefaultDisplayMap[ nodeName ] = display;

\t\treturn display;
\t}

\tfunction showHide( elements, show ) {
\t\tvar display, elem,
\t\t\tvalues = [],
\t\t\tindex = 0,
\t\t\tlength = elements.length;

\t\t// Determine new display value for elements that need to change
\t\tfor ( ; index < length; index++ ) {
\t\t\telem = elements[ index ];
\t\t\tif ( !elem.style ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\tdisplay = elem.style.display;
\t\t\tif ( show ) {

\t\t\t\t// Since we force visibility upon cascade-hidden elements, an immediate (and slow)
\t\t\t\t// check is required in this first loop unless we have a nonempty display value (either
\t\t\t\t// inline or about-to-be-restored)
\t\t\t\tif ( display === \"none\" ) {
\t\t\t\t\tvalues[ index ] = dataPriv.get( elem, \"display\" ) || null;
\t\t\t\t\tif ( !values[ index ] ) {
\t\t\t\t\t\telem.style.display = \"\";
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tif ( elem.style.display === \"\" && isHiddenWithinTree( elem ) ) {
\t\t\t\t\tvalues[ index ] = getDefaultDisplay( elem );
\t\t\t\t}
\t\t\t} else {
\t\t\t\tif ( display !== \"none\" ) {
\t\t\t\t\tvalues[ index ] = \"none\";

\t\t\t\t\t// Remember what we're overwriting
\t\t\t\t\tdataPriv.set( elem, \"display\", display );
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Set the display of the elements in a second loop to avoid constant reflow
\t\tfor ( index = 0; index < length; index++ ) {
\t\t\tif ( values[ index ] != null ) {
\t\t\t\telements[ index ].style.display = values[ index ];
\t\t\t}
\t\t}

\t\treturn elements;
\t}

\tjQuery.fn.extend( {
\t\tshow: function() {
\t\t\treturn showHide( this, true );
\t\t},
\t\thide: function() {
\t\t\treturn showHide( this );
\t\t},
\t\ttoggle: function( state ) {
\t\t\tif ( typeof state === \"boolean\" ) {
\t\t\t\treturn state ? this.show() : this.hide();
\t\t\t}

\t\t\treturn this.each( function() {
\t\t\t\tif ( isHiddenWithinTree( this ) ) {
\t\t\t\t\tjQuery( this ).show();
\t\t\t\t} else {
\t\t\t\t\tjQuery( this ).hide();
\t\t\t\t}
\t\t\t} );
\t\t}
\t} );
\tvar rcheckableType = ( /^(?:checkbox|radio)\$/i );

\tvar rtagName = ( /<([a-z][^\\/\\0>\\x20\\t\\r\\n\\f]+)/i );

\tvar rscriptType = ( /^\$|^module\$|\\/(?:java|ecma)script/i );



// We have to close these tags to support XHTML (#13200)
\tvar wrapMap = {

\t\t// Support: IE <=9 only
\t\toption: [ 1, \"<select multiple='multiple'>\", \"</select>\" ],

\t\t// XHTML parsers do not magically insert elements in the
\t\t// same way that tag soup parsers do. So we cannot shorten
\t\t// this by omitting <tbody> or other required elements.
\t\tthead: [ 1, \"<table>\", \"</table>\" ],
\t\tcol: [ 2, \"<table><colgroup>\", \"</colgroup></table>\" ],
\t\ttr: [ 2, \"<table><tbody>\", \"</tbody></table>\" ],
\t\ttd: [ 3, \"<table><tbody><tr>\", \"</tr></tbody></table>\" ],

\t\t_default: [ 0, \"\", \"\" ]
\t};

// Support: IE <=9 only
\twrapMap.optgroup = wrapMap.option;

\twrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
\twrapMap.th = wrapMap.td;


\tfunction getAll( context, tag ) {

\t\t// Support: IE <=9 - 11 only
\t\t// Use typeof to avoid zero-argument method invocation on host objects (#15151)
\t\tvar ret;

\t\tif ( typeof context.getElementsByTagName !== \"undefined\" ) {
\t\t\tret = context.getElementsByTagName( tag || \"*\" );

\t\t} else if ( typeof context.querySelectorAll !== \"undefined\" ) {
\t\t\tret = context.querySelectorAll( tag || \"*\" );

\t\t} else {
\t\t\tret = [];
\t\t}

\t\tif ( tag === undefined || tag && nodeName( context, tag ) ) {
\t\t\treturn jQuery.merge( [ context ], ret );
\t\t}

\t\treturn ret;
\t}


// Mark scripts as having already been evaluated
\tfunction setGlobalEval( elems, refElements ) {
\t\tvar i = 0,
\t\t\tl = elems.length;

\t\tfor ( ; i < l; i++ ) {
\t\t\tdataPriv.set(
\t\t\t\telems[ i ],
\t\t\t\t\"globalEval\",
\t\t\t\t!refElements || dataPriv.get( refElements[ i ], \"globalEval\" )
\t\t\t);
\t\t}
\t}


\tvar rhtml = /<|&#?\\w+;/;

\tfunction buildFragment( elems, context, scripts, selection, ignored ) {
\t\tvar elem, tmp, tag, wrap, contains, j,
\t\t\tfragment = context.createDocumentFragment(),
\t\t\tnodes = [],
\t\t\ti = 0,
\t\t\tl = elems.length;

\t\tfor ( ; i < l; i++ ) {
\t\t\telem = elems[ i ];

\t\t\tif ( elem || elem === 0 ) {

\t\t\t\t// Add nodes directly
\t\t\t\tif ( toType( elem ) === \"object\" ) {

\t\t\t\t\t// Support: Android <=4.0 only, PhantomJS 1 only
\t\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\t\tjQuery.merge( nodes, elem.nodeType ? [ elem ] : elem );

\t\t\t\t\t// Convert non-html into a text node
\t\t\t\t} else if ( !rhtml.test( elem ) ) {
\t\t\t\t\tnodes.push( context.createTextNode( elem ) );

\t\t\t\t\t// Convert html into DOM nodes
\t\t\t\t} else {
\t\t\t\t\ttmp = tmp || fragment.appendChild( context.createElement( \"div\" ) );

\t\t\t\t\t// Deserialize a standard representation
\t\t\t\t\ttag = ( rtagName.exec( elem ) || [ \"\", \"\" ] )[ 1 ].toLowerCase();
\t\t\t\t\twrap = wrapMap[ tag ] || wrapMap._default;
\t\t\t\t\ttmp.innerHTML = wrap[ 1 ] + jQuery.htmlPrefilter( elem ) + wrap[ 2 ];

\t\t\t\t\t// Descend through wrappers to the right content
\t\t\t\t\tj = wrap[ 0 ];
\t\t\t\t\twhile ( j-- ) {
\t\t\t\t\t\ttmp = tmp.lastChild;
\t\t\t\t\t}

\t\t\t\t\t// Support: Android <=4.0 only, PhantomJS 1 only
\t\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\t\tjQuery.merge( nodes, tmp.childNodes );

\t\t\t\t\t// Remember the top-level container
\t\t\t\t\ttmp = fragment.firstChild;

\t\t\t\t\t// Ensure the created nodes are orphaned (#12392)
\t\t\t\t\ttmp.textContent = \"\";
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Remove wrapper from fragment
\t\tfragment.textContent = \"\";

\t\ti = 0;
\t\twhile ( ( elem = nodes[ i++ ] ) ) {

\t\t\t// Skip elements already in the context collection (trac-4087)
\t\t\tif ( selection && jQuery.inArray( elem, selection ) > -1 ) {
\t\t\t\tif ( ignored ) {
\t\t\t\t\tignored.push( elem );
\t\t\t\t}
\t\t\t\tcontinue;
\t\t\t}

\t\t\tcontains = jQuery.contains( elem.ownerDocument, elem );

\t\t\t// Append to fragment
\t\t\ttmp = getAll( fragment.appendChild( elem ), \"script\" );

\t\t\t// Preserve script evaluation history
\t\t\tif ( contains ) {
\t\t\t\tsetGlobalEval( tmp );
\t\t\t}

\t\t\t// Capture executables
\t\t\tif ( scripts ) {
\t\t\t\tj = 0;
\t\t\t\twhile ( ( elem = tmp[ j++ ] ) ) {
\t\t\t\t\tif ( rscriptType.test( elem.type || \"\" ) ) {
\t\t\t\t\t\tscripts.push( elem );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn fragment;
\t}


\t( function() {
\t\tvar fragment = document.createDocumentFragment(),
\t\t\tdiv = fragment.appendChild( document.createElement( \"div\" ) ),
\t\t\tinput = document.createElement( \"input\" );

\t\t// Support: Android 4.0 - 4.3 only
\t\t// Check state lost if the name is set (#11217)
\t\t// Support: Windows Web Apps (WWA)
\t\t// `name` and `type` must use .setAttribute for WWA (#14901)
\t\tinput.setAttribute( \"type\", \"radio\" );
\t\tinput.setAttribute( \"checked\", \"checked\" );
\t\tinput.setAttribute( \"name\", \"t\" );

\t\tdiv.appendChild( input );

\t\t// Support: Android <=4.1 only
\t\t// Older WebKit doesn't clone checked state correctly in fragments
\t\tsupport.checkClone = div.cloneNode( true ).cloneNode( true ).lastChild.checked;

\t\t// Support: IE <=11 only
\t\t// Make sure textarea (and checkbox) defaultValue is properly cloned
\t\tdiv.innerHTML = \"<textarea>x</textarea>\";
\t\tsupport.noCloneChecked = !!div.cloneNode( true ).lastChild.defaultValue;
\t} )();
\tvar documentElement = document.documentElement;



\tvar
\t\trkeyEvent = /^key/,
\t\trmouseEvent = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
\t\trtypenamespace = /^([^.]*)(?:\\.(.+)|)/;

\tfunction returnTrue() {
\t\treturn true;
\t}

\tfunction returnFalse() {
\t\treturn false;
\t}

// Support: IE <=9 only
// See #13393 for more info
\tfunction safeActiveElement() {
\t\ttry {
\t\t\treturn document.activeElement;
\t\t} catch ( err ) { }
\t}

\tfunction on( elem, types, selector, data, fn, one ) {
\t\tvar origFn, type;

\t\t// Types can be a map of types/handlers
\t\tif ( typeof types === \"object\" ) {

\t\t\t// ( types-Object, selector, data )
\t\t\tif ( typeof selector !== \"string\" ) {

\t\t\t\t// ( types-Object, data )
\t\t\t\tdata = data || selector;
\t\t\t\tselector = undefined;
\t\t\t}
\t\t\tfor ( type in types ) {
\t\t\t\ton( elem, type, selector, data, types[ type ], one );
\t\t\t}
\t\t\treturn elem;
\t\t}

\t\tif ( data == null && fn == null ) {

\t\t\t// ( types, fn )
\t\t\tfn = selector;
\t\t\tdata = selector = undefined;
\t\t} else if ( fn == null ) {
\t\t\tif ( typeof selector === \"string\" ) {

\t\t\t\t// ( types, selector, fn )
\t\t\t\tfn = data;
\t\t\t\tdata = undefined;
\t\t\t} else {

\t\t\t\t// ( types, data, fn )
\t\t\t\tfn = data;
\t\t\t\tdata = selector;
\t\t\t\tselector = undefined;
\t\t\t}
\t\t}
\t\tif ( fn === false ) {
\t\t\tfn = returnFalse;
\t\t} else if ( !fn ) {
\t\t\treturn elem;
\t\t}

\t\tif ( one === 1 ) {
\t\t\torigFn = fn;
\t\t\tfn = function( event ) {

\t\t\t\t// Can use an empty set, since event contains the info
\t\t\t\tjQuery().off( event );
\t\t\t\treturn origFn.apply( this, arguments );
\t\t\t};

\t\t\t// Use same guid so caller can remove using origFn
\t\t\tfn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );
\t\t}
\t\treturn elem.each( function() {
\t\t\tjQuery.event.add( this, types, fn, data, selector );
\t\t} );
\t}

\t/*
 * Helper functions for managing events -- not part of the public interface.
 * Props to Dean Edwards' addEvent library for many of the ideas.
 */
\tjQuery.event = {

\t\tglobal: {},

\t\tadd: function( elem, types, handler, data, selector ) {

\t\t\tvar handleObjIn, eventHandle, tmp,
\t\t\t\tevents, t, handleObj,
\t\t\t\tspecial, handlers, type, namespaces, origType,
\t\t\t\telemData = dataPriv.get( elem );

\t\t\t// Don't attach events to noData or text/comment nodes (but allow plain objects)
\t\t\tif ( !elemData ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// Caller can pass in an object of custom data in lieu of the handler
\t\t\tif ( handler.handler ) {
\t\t\t\thandleObjIn = handler;
\t\t\t\thandler = handleObjIn.handler;
\t\t\t\tselector = handleObjIn.selector;
\t\t\t}

\t\t\t// Ensure that invalid selectors throw exceptions at attach time
\t\t\t// Evaluate against documentElement in case elem is a non-element node (e.g., document)
\t\t\tif ( selector ) {
\t\t\t\tjQuery.find.matchesSelector( documentElement, selector );
\t\t\t}

\t\t\t// Make sure that the handler has a unique ID, used to find/remove it later
\t\t\tif ( !handler.guid ) {
\t\t\t\thandler.guid = jQuery.guid++;
\t\t\t}

\t\t\t// Init the element's event structure and main handler, if this is the first
\t\t\tif ( !( events = elemData.events ) ) {
\t\t\t\tevents = elemData.events = {};
\t\t\t}
\t\t\tif ( !( eventHandle = elemData.handle ) ) {
\t\t\t\teventHandle = elemData.handle = function( e ) {

\t\t\t\t\t// Discard the second event of a jQuery.event.trigger() and
\t\t\t\t\t// when an event is called after a page has unloaded
\t\t\t\t\treturn typeof jQuery !== \"undefined\" && jQuery.event.triggered !== e.type ?
\t\t\t\t\t\tjQuery.event.dispatch.apply( elem, arguments ) : undefined;
\t\t\t\t};
\t\t\t}

\t\t\t// Handle multiple events separated by a space
\t\t\ttypes = ( types || \"\" ).match( rnothtmlwhite ) || [ \"\" ];
\t\t\tt = types.length;
\t\t\twhile ( t-- ) {
\t\t\t\ttmp = rtypenamespace.exec( types[ t ] ) || [];
\t\t\t\ttype = origType = tmp[ 1 ];
\t\t\t\tnamespaces = ( tmp[ 2 ] || \"\" ).split( \".\" ).sort();

\t\t\t\t// There *must* be a type, no attaching namespace-only handlers
\t\t\t\tif ( !type ) {
\t\t\t\t\tcontinue;
\t\t\t\t}

\t\t\t\t// If event changes its type, use the special event handlers for the changed type
\t\t\t\tspecial = jQuery.event.special[ type ] || {};

\t\t\t\t// If selector defined, determine special event api type, otherwise given type
\t\t\t\ttype = ( selector ? special.delegateType : special.bindType ) || type;

\t\t\t\t// Update special based on newly reset type
\t\t\t\tspecial = jQuery.event.special[ type ] || {};

\t\t\t\t// handleObj is passed to all event handlers
\t\t\t\thandleObj = jQuery.extend( {
\t\t\t\t\ttype: type,
\t\t\t\t\torigType: origType,
\t\t\t\t\tdata: data,
\t\t\t\t\thandler: handler,
\t\t\t\t\tguid: handler.guid,
\t\t\t\t\tselector: selector,
\t\t\t\t\tneedsContext: selector && jQuery.expr.match.needsContext.test( selector ),
\t\t\t\t\tnamespace: namespaces.join( \".\" )
\t\t\t\t}, handleObjIn );

\t\t\t\t// Init the event handler queue if we're the first
\t\t\t\tif ( !( handlers = events[ type ] ) ) {
\t\t\t\t\thandlers = events[ type ] = [];
\t\t\t\t\thandlers.delegateCount = 0;

\t\t\t\t\t// Only use addEventListener if the special events handler returns false
\t\t\t\t\tif ( !special.setup ||
\t\t\t\t\t\tspecial.setup.call( elem, data, namespaces, eventHandle ) === false ) {

\t\t\t\t\t\tif ( elem.addEventListener ) {
\t\t\t\t\t\t\telem.addEventListener( type, eventHandle );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif ( special.add ) {
\t\t\t\t\tspecial.add.call( elem, handleObj );

\t\t\t\t\tif ( !handleObj.handler.guid ) {
\t\t\t\t\t\thandleObj.handler.guid = handler.guid;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Add to the element's handler list, delegates in front
\t\t\t\tif ( selector ) {
\t\t\t\t\thandlers.splice( handlers.delegateCount++, 0, handleObj );
\t\t\t\t} else {
\t\t\t\t\thandlers.push( handleObj );
\t\t\t\t}

\t\t\t\t// Keep track of which events have ever been used, for event optimization
\t\t\t\tjQuery.event.global[ type ] = true;
\t\t\t}

\t\t},

\t\t// Detach an event or set of events from an element
\t\tremove: function( elem, types, handler, selector, mappedTypes ) {

\t\t\tvar j, origCount, tmp,
\t\t\t\tevents, t, handleObj,
\t\t\t\tspecial, handlers, type, namespaces, origType,
\t\t\t\telemData = dataPriv.hasData( elem ) && dataPriv.get( elem );

\t\t\tif ( !elemData || !( events = elemData.events ) ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// Once for each type.namespace in types; type may be omitted
\t\t\ttypes = ( types || \"\" ).match( rnothtmlwhite ) || [ \"\" ];
\t\t\tt = types.length;
\t\t\twhile ( t-- ) {
\t\t\t\ttmp = rtypenamespace.exec( types[ t ] ) || [];
\t\t\t\ttype = origType = tmp[ 1 ];
\t\t\t\tnamespaces = ( tmp[ 2 ] || \"\" ).split( \".\" ).sort();

\t\t\t\t// Unbind all events (on this namespace, if provided) for the element
\t\t\t\tif ( !type ) {
\t\t\t\t\tfor ( type in events ) {
\t\t\t\t\t\tjQuery.event.remove( elem, type + types[ t ], handler, selector, true );
\t\t\t\t\t}
\t\t\t\t\tcontinue;
\t\t\t\t}

\t\t\t\tspecial = jQuery.event.special[ type ] || {};
\t\t\t\ttype = ( selector ? special.delegateType : special.bindType ) || type;
\t\t\t\thandlers = events[ type ] || [];
\t\t\t\ttmp = tmp[ 2 ] &&
\t\t\t\t\tnew RegExp( \"(^|\\\\.)\" + namespaces.join( \"\\\\.(?:.*\\\\.|)\" ) + \"(\\\\.|\$)\" );

\t\t\t\t// Remove matching events
\t\t\t\torigCount = j = handlers.length;
\t\t\t\twhile ( j-- ) {
\t\t\t\t\thandleObj = handlers[ j ];

\t\t\t\t\tif ( ( mappedTypes || origType === handleObj.origType ) &&
\t\t\t\t\t\t( !handler || handler.guid === handleObj.guid ) &&
\t\t\t\t\t\t( !tmp || tmp.test( handleObj.namespace ) ) &&
\t\t\t\t\t\t( !selector || selector === handleObj.selector ||
\t\t\t\t\t\t\tselector === \"**\" && handleObj.selector ) ) {
\t\t\t\t\t\thandlers.splice( j, 1 );

\t\t\t\t\t\tif ( handleObj.selector ) {
\t\t\t\t\t\t\thandlers.delegateCount--;
\t\t\t\t\t\t}
\t\t\t\t\t\tif ( special.remove ) {
\t\t\t\t\t\t\tspecial.remove.call( elem, handleObj );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Remove generic event handler if we removed something and no more handlers exist
\t\t\t\t// (avoids potential for endless recursion during removal of special event handlers)
\t\t\t\tif ( origCount && !handlers.length ) {
\t\t\t\t\tif ( !special.teardown ||
\t\t\t\t\t\tspecial.teardown.call( elem, namespaces, elemData.handle ) === false ) {

\t\t\t\t\t\tjQuery.removeEvent( elem, type, elemData.handle );
\t\t\t\t\t}

\t\t\t\t\tdelete events[ type ];
\t\t\t\t}
\t\t\t}

\t\t\t// Remove data and the expando if it's no longer used
\t\t\tif ( jQuery.isEmptyObject( events ) ) {
\t\t\t\tdataPriv.remove( elem, \"handle events\" );
\t\t\t}
\t\t},

\t\tdispatch: function( nativeEvent ) {

\t\t\t// Make a writable jQuery.Event from the native event object
\t\t\tvar event = jQuery.event.fix( nativeEvent );

\t\t\tvar i, j, ret, matched, handleObj, handlerQueue,
\t\t\t\targs = new Array( arguments.length ),
\t\t\t\thandlers = ( dataPriv.get( this, \"events\" ) || {} )[ event.type ] || [],
\t\t\t\tspecial = jQuery.event.special[ event.type ] || {};

\t\t\t// Use the fix-ed jQuery.Event rather than the (read-only) native event
\t\t\targs[ 0 ] = event;

\t\t\tfor ( i = 1; i < arguments.length; i++ ) {
\t\t\t\targs[ i ] = arguments[ i ];
\t\t\t}

\t\t\tevent.delegateTarget = this;

\t\t\t// Call the preDispatch hook for the mapped type, and let it bail if desired
\t\t\tif ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// Determine handlers
\t\t\thandlerQueue = jQuery.event.handlers.call( this, event, handlers );

\t\t\t// Run delegates first; they may want to stop propagation beneath us
\t\t\ti = 0;
\t\t\twhile ( ( matched = handlerQueue[ i++ ] ) && !event.isPropagationStopped() ) {
\t\t\t\tevent.currentTarget = matched.elem;

\t\t\t\tj = 0;
\t\t\t\twhile ( ( handleObj = matched.handlers[ j++ ] ) &&
\t\t\t\t!event.isImmediatePropagationStopped() ) {

\t\t\t\t\t// Triggered event must either 1) have no namespace, or 2) have namespace(s)
\t\t\t\t\t// a subset or equal to those in the bound event (both can have no namespace).
\t\t\t\t\tif ( !event.rnamespace || event.rnamespace.test( handleObj.namespace ) ) {

\t\t\t\t\t\tevent.handleObj = handleObj;
\t\t\t\t\t\tevent.data = handleObj.data;

\t\t\t\t\t\tret = ( ( jQuery.event.special[ handleObj.origType ] || {} ).handle ||
\t\t\t\t\t\t\thandleObj.handler ).apply( matched.elem, args );

\t\t\t\t\t\tif ( ret !== undefined ) {
\t\t\t\t\t\t\tif ( ( event.result = ret ) === false ) {
\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\tevent.stopPropagation();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Call the postDispatch hook for the mapped type
\t\t\tif ( special.postDispatch ) {
\t\t\t\tspecial.postDispatch.call( this, event );
\t\t\t}

\t\t\treturn event.result;
\t\t},

\t\thandlers: function( event, handlers ) {
\t\t\tvar i, handleObj, sel, matchedHandlers, matchedSelectors,
\t\t\t\thandlerQueue = [],
\t\t\t\tdelegateCount = handlers.delegateCount,
\t\t\t\tcur = event.target;

\t\t\t// Find delegate handlers
\t\t\tif ( delegateCount &&

\t\t\t\t// Support: IE <=9
\t\t\t\t// Black-hole SVG <use> instance trees (trac-13180)
\t\t\t\tcur.nodeType &&

\t\t\t\t// Support: Firefox <=42
\t\t\t\t// Suppress spec-violating clicks indicating a non-primary pointer button (trac-3861)
\t\t\t\t// https://www.w3.org/TR/DOM-Level-3-Events/#event-type-click
\t\t\t\t// Support: IE 11 only
\t\t\t\t// ...but not arrow key \"clicks\" of radio inputs, which can have `button` -1 (gh-2343)
\t\t\t\t!( event.type === \"click\" && event.button >= 1 ) ) {

\t\t\t\tfor ( ; cur !== this; cur = cur.parentNode || this ) {

\t\t\t\t\t// Don't check non-elements (#13208)
\t\t\t\t\t// Don't process clicks on disabled elements (#6911, #8165, #11382, #11764)
\t\t\t\t\tif ( cur.nodeType === 1 && !( event.type === \"click\" && cur.disabled === true ) ) {
\t\t\t\t\t\tmatchedHandlers = [];
\t\t\t\t\t\tmatchedSelectors = {};
\t\t\t\t\t\tfor ( i = 0; i < delegateCount; i++ ) {
\t\t\t\t\t\t\thandleObj = handlers[ i ];

\t\t\t\t\t\t\t// Don't conflict with Object.prototype properties (#13203)
\t\t\t\t\t\t\tsel = handleObj.selector + \" \";

\t\t\t\t\t\t\tif ( matchedSelectors[ sel ] === undefined ) {
\t\t\t\t\t\t\t\tmatchedSelectors[ sel ] = handleObj.needsContext ?
\t\t\t\t\t\t\t\t\tjQuery( sel, this ).index( cur ) > -1 :
\t\t\t\t\t\t\t\t\tjQuery.find( sel, this, null, [ cur ] ).length;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif ( matchedSelectors[ sel ] ) {
\t\t\t\t\t\t\t\tmatchedHandlers.push( handleObj );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\tif ( matchedHandlers.length ) {
\t\t\t\t\t\t\thandlerQueue.push( { elem: cur, handlers: matchedHandlers } );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Add the remaining (directly-bound) handlers
\t\t\tcur = this;
\t\t\tif ( delegateCount < handlers.length ) {
\t\t\t\thandlerQueue.push( { elem: cur, handlers: handlers.slice( delegateCount ) } );
\t\t\t}

\t\t\treturn handlerQueue;
\t\t},

\t\taddProp: function( name, hook ) {
\t\t\tObject.defineProperty( jQuery.Event.prototype, name, {
\t\t\t\tenumerable: true,
\t\t\t\tconfigurable: true,

\t\t\t\tget: isFunction( hook ) ?
\t\t\t\t\tfunction() {
\t\t\t\t\t\tif ( this.originalEvent ) {
\t\t\t\t\t\t\treturn hook( this.originalEvent );
\t\t\t\t\t\t}
\t\t\t\t\t} :
\t\t\t\t\tfunction() {
\t\t\t\t\t\tif ( this.originalEvent ) {
\t\t\t\t\t\t\treturn this.originalEvent[ name ];
\t\t\t\t\t\t}
\t\t\t\t\t},

\t\t\t\tset: function( value ) {
\t\t\t\t\tObject.defineProperty( this, name, {
\t\t\t\t\t\tenumerable: true,
\t\t\t\t\t\tconfigurable: true,
\t\t\t\t\t\twritable: true,
\t\t\t\t\t\tvalue: value
\t\t\t\t\t} );
\t\t\t\t}
\t\t\t} );
\t\t},

\t\tfix: function( originalEvent ) {
\t\t\treturn originalEvent[ jQuery.expando ] ?
\t\t\t\toriginalEvent :
\t\t\t\tnew jQuery.Event( originalEvent );
\t\t},

\t\tspecial: {
\t\t\tload: {

\t\t\t\t// Prevent triggered image.load events from bubbling to window.load
\t\t\t\tnoBubble: true
\t\t\t},
\t\t\tfocus: {

\t\t\t\t// Fire native event if possible so blur/focus sequence is correct
\t\t\t\ttrigger: function() {
\t\t\t\t\tif ( this !== safeActiveElement() && this.focus ) {
\t\t\t\t\t\tthis.focus();
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tdelegateType: \"focusin\"
\t\t\t},
\t\t\tblur: {
\t\t\t\ttrigger: function() {
\t\t\t\t\tif ( this === safeActiveElement() && this.blur ) {
\t\t\t\t\t\tthis.blur();
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tdelegateType: \"focusout\"
\t\t\t},
\t\t\tclick: {

\t\t\t\t// For checkbox, fire native event so checked state will be right
\t\t\t\ttrigger: function() {
\t\t\t\t\tif ( this.type === \"checkbox\" && this.click && nodeName( this, \"input\" ) ) {
\t\t\t\t\t\tthis.click();
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t},

\t\t\t\t// For cross-browser consistency, don't fire native .click() on links
\t\t\t\t_default: function( event ) {
\t\t\t\t\treturn nodeName( event.target, \"a\" );
\t\t\t\t}
\t\t\t},

\t\t\tbeforeunload: {
\t\t\t\tpostDispatch: function( event ) {

\t\t\t\t\t// Support: Firefox 20+
\t\t\t\t\t// Firefox doesn't alert if the returnValue field is not set.
\t\t\t\t\tif ( event.result !== undefined && event.originalEvent ) {
\t\t\t\t\t\tevent.originalEvent.returnValue = event.result;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t};

\tjQuery.removeEvent = function( elem, type, handle ) {

\t\t// This \"if\" is needed for plain objects
\t\tif ( elem.removeEventListener ) {
\t\t\telem.removeEventListener( type, handle );
\t\t}
\t};

\tjQuery.Event = function( src, props ) {

\t\t// Allow instantiation without the 'new' keyword
\t\tif ( !( this instanceof jQuery.Event ) ) {
\t\t\treturn new jQuery.Event( src, props );
\t\t}

\t\t// Event object
\t\tif ( src && src.type ) {
\t\t\tthis.originalEvent = src;
\t\t\tthis.type = src.type;

\t\t\t// Events bubbling up the document may have been marked as prevented
\t\t\t// by a handler lower down the tree; reflect the correct value.
\t\t\tthis.isDefaultPrevented = src.defaultPrevented ||
\t\t\tsrc.defaultPrevented === undefined &&

\t\t\t// Support: Android <=2.3 only
\t\t\tsrc.returnValue === false ?
\t\t\t\treturnTrue :
\t\t\t\treturnFalse;

\t\t\t// Create target properties
\t\t\t// Support: Safari <=6 - 7 only
\t\t\t// Target should not be a text node (#504, #13143)
\t\t\tthis.target = ( src.target && src.target.nodeType === 3 ) ?
\t\t\t\tsrc.target.parentNode :
\t\t\t\tsrc.target;

\t\t\tthis.currentTarget = src.currentTarget;
\t\t\tthis.relatedTarget = src.relatedTarget;

\t\t\t// Event type
\t\t} else {
\t\t\tthis.type = src;
\t\t}

\t\t// Put explicitly provided properties onto the event object
\t\tif ( props ) {
\t\t\tjQuery.extend( this, props );
\t\t}

\t\t// Create a timestamp if incoming event doesn't have one
\t\tthis.timeStamp = src && src.timeStamp || Date.now();

\t\t// Mark it as fixed
\t\tthis[ jQuery.expando ] = true;
\t};

// jQuery.Event is based on DOM3 Events as specified by the ECMAScript Language Binding
// https://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
\tjQuery.Event.prototype = {
\t\tconstructor: jQuery.Event,
\t\tisDefaultPrevented: returnFalse,
\t\tisPropagationStopped: returnFalse,
\t\tisImmediatePropagationStopped: returnFalse,
\t\tisSimulated: false,

\t\tpreventDefault: function() {
\t\t\tvar e = this.originalEvent;

\t\t\tthis.isDefaultPrevented = returnTrue;

\t\t\tif ( e && !this.isSimulated ) {
\t\t\t\te.preventDefault();
\t\t\t}
\t\t},
\t\tstopPropagation: function() {
\t\t\tvar e = this.originalEvent;

\t\t\tthis.isPropagationStopped = returnTrue;

\t\t\tif ( e && !this.isSimulated ) {
\t\t\t\te.stopPropagation();
\t\t\t}
\t\t},
\t\tstopImmediatePropagation: function() {
\t\t\tvar e = this.originalEvent;

\t\t\tthis.isImmediatePropagationStopped = returnTrue;

\t\t\tif ( e && !this.isSimulated ) {
\t\t\t\te.stopImmediatePropagation();
\t\t\t}

\t\t\tthis.stopPropagation();
\t\t}
\t};

// Includes all common event props including KeyEvent and MouseEvent specific props
\tjQuery.each( {
\t\taltKey: true,
\t\tbubbles: true,
\t\tcancelable: true,
\t\tchangedTouches: true,
\t\tctrlKey: true,
\t\tdetail: true,
\t\teventPhase: true,
\t\tmetaKey: true,
\t\tpageX: true,
\t\tpageY: true,
\t\tshiftKey: true,
\t\tview: true,
\t\t\"char\": true,
\t\tcharCode: true,
\t\tkey: true,
\t\tkeyCode: true,
\t\tbutton: true,
\t\tbuttons: true,
\t\tclientX: true,
\t\tclientY: true,
\t\toffsetX: true,
\t\toffsetY: true,
\t\tpointerId: true,
\t\tpointerType: true,
\t\tscreenX: true,
\t\tscreenY: true,
\t\ttargetTouches: true,
\t\ttoElement: true,
\t\ttouches: true,

\t\twhich: function( event ) {
\t\t\tvar button = event.button;

\t\t\t// Add which for key events
\t\t\tif ( event.which == null && rkeyEvent.test( event.type ) ) {
\t\t\t\treturn event.charCode != null ? event.charCode : event.keyCode;
\t\t\t}

\t\t\t// Add which for click: 1 === left; 2 === middle; 3 === right
\t\t\tif ( !event.which && button !== undefined && rmouseEvent.test( event.type ) ) {
\t\t\t\tif ( button & 1 ) {
\t\t\t\t\treturn 1;
\t\t\t\t}

\t\t\t\tif ( button & 2 ) {
\t\t\t\t\treturn 3;
\t\t\t\t}

\t\t\t\tif ( button & 4 ) {
\t\t\t\t\treturn 2;
\t\t\t\t}

\t\t\t\treturn 0;
\t\t\t}

\t\t\treturn event.which;
\t\t}
\t}, jQuery.event.addProp );

// Create mouseenter/leave events using mouseover/out and event-time checks
// so that event delegation works in jQuery.
// Do the same for pointerenter/pointerleave and pointerover/pointerout
//
// Support: Safari 7 only
// Safari sends mouseenter too often; see:
// https://bugs.chromium.org/p/chromium/issues/detail?id=470258
// for the description of the bug (it existed in older Chrome versions as well).
\tjQuery.each( {
\t\tmouseenter: \"mouseover\",
\t\tmouseleave: \"mouseout\",
\t\tpointerenter: \"pointerover\",
\t\tpointerleave: \"pointerout\"
\t}, function( orig, fix ) {
\t\tjQuery.event.special[ orig ] = {
\t\t\tdelegateType: fix,
\t\t\tbindType: fix,

\t\t\thandle: function( event ) {
\t\t\t\tvar ret,
\t\t\t\t\ttarget = this,
\t\t\t\t\trelated = event.relatedTarget,
\t\t\t\t\thandleObj = event.handleObj;

\t\t\t\t// For mouseenter/leave call the handler if related is outside the target.
\t\t\t\t// NB: No relatedTarget if the mouse left/entered the browser window
\t\t\t\tif ( !related || ( related !== target && !jQuery.contains( target, related ) ) ) {
\t\t\t\t\tevent.type = handleObj.origType;
\t\t\t\t\tret = handleObj.handler.apply( this, arguments );
\t\t\t\t\tevent.type = fix;
\t\t\t\t}
\t\t\t\treturn ret;
\t\t\t}
\t\t};
\t} );

\tjQuery.fn.extend( {

\t\ton: function( types, selector, data, fn ) {
\t\t\treturn on( this, types, selector, data, fn );
\t\t},
\t\tone: function( types, selector, data, fn ) {
\t\t\treturn on( this, types, selector, data, fn, 1 );
\t\t},
\t\toff: function( types, selector, fn ) {
\t\t\tvar handleObj, type;
\t\t\tif ( types && types.preventDefault && types.handleObj ) {

\t\t\t\t// ( event )  dispatched jQuery.Event
\t\t\t\thandleObj = types.handleObj;
\t\t\t\tjQuery( types.delegateTarget ).off(
\t\t\t\t\thandleObj.namespace ?
\t\t\t\t\t\thandleObj.origType + \".\" + handleObj.namespace :
\t\t\t\t\t\thandleObj.origType,
\t\t\t\t\thandleObj.selector,
\t\t\t\t\thandleObj.handler
\t\t\t\t);
\t\t\t\treturn this;
\t\t\t}
\t\t\tif ( typeof types === \"object\" ) {

\t\t\t\t// ( types-object [, selector] )
\t\t\t\tfor ( type in types ) {
\t\t\t\t\tthis.off( type, selector, types[ type ] );
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t}
\t\t\tif ( selector === false || typeof selector === \"function\" ) {

\t\t\t\t// ( types [, fn] )
\t\t\t\tfn = selector;
\t\t\t\tselector = undefined;
\t\t\t}
\t\t\tif ( fn === false ) {
\t\t\t\tfn = returnFalse;
\t\t\t}
\t\t\treturn this.each( function() {
\t\t\t\tjQuery.event.remove( this, types, fn, selector );
\t\t\t} );
\t\t}
\t} );


\tvar

\t\t/* eslint-disable max-len */

\t\t// See https://github.com/eslint/eslint/issues/3229
\t\trxhtmlTag = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\\/\\0>\\x20\\t\\r\\n\\f]*)[^>]*)\\/>/gi,

\t\t/* eslint-enable */

\t\t// Support: IE <=10 - 11, Edge 12 - 13 only
\t\t// In IE/Edge using regex groups here causes severe slowdowns.
\t\t// See https://connect.microsoft.com/IE/feedback/details/1736512/
\t\trnoInnerhtml = /<script|<style|<link/i,

\t\t// checked=\"checked\" or checked
\t\trchecked = /checked\\s*(?:[^=]|=\\s*.checked.)/i,
\t\trcleanScript = /^\\s*<!(?:\\[CDATA\\[|--)|(?:\\]\\]|--)>\\s*\$/g;

// Prefer a tbody over its parent table for containing new rows
\tfunction manipulationTarget( elem, content ) {
\t\tif ( nodeName( elem, \"table\" ) &&
\t\t\tnodeName( content.nodeType !== 11 ? content : content.firstChild, \"tr\" ) ) {

\t\t\treturn jQuery( elem ).children( \"tbody\" )[ 0 ] || elem;
\t\t}

\t\treturn elem;
\t}

// Replace/restore the type attribute of script elements for safe DOM manipulation
\tfunction disableScript( elem ) {
\t\telem.type = ( elem.getAttribute( \"type\" ) !== null ) + \"/\" + elem.type;
\t\treturn elem;
\t}
\tfunction restoreScript( elem ) {
\t\tif ( ( elem.type || \"\" ).slice( 0, 5 ) === \"true/\" ) {
\t\t\telem.type = elem.type.slice( 5 );
\t\t} else {
\t\t\telem.removeAttribute( \"type\" );
\t\t}

\t\treturn elem;
\t}

\tfunction cloneCopyEvent( src, dest ) {
\t\tvar i, l, type, pdataOld, pdataCur, udataOld, udataCur, events;

\t\tif ( dest.nodeType !== 1 ) {
\t\t\treturn;
\t\t}

\t\t// 1. Copy private data: events, handlers, etc.
\t\tif ( dataPriv.hasData( src ) ) {
\t\t\tpdataOld = dataPriv.access( src );
\t\t\tpdataCur = dataPriv.set( dest, pdataOld );
\t\t\tevents = pdataOld.events;

\t\t\tif ( events ) {
\t\t\t\tdelete pdataCur.handle;
\t\t\t\tpdataCur.events = {};

\t\t\t\tfor ( type in events ) {
\t\t\t\t\tfor ( i = 0, l = events[ type ].length; i < l; i++ ) {
\t\t\t\t\t\tjQuery.event.add( dest, type, events[ type ][ i ] );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// 2. Copy user data
\t\tif ( dataUser.hasData( src ) ) {
\t\t\tudataOld = dataUser.access( src );
\t\t\tudataCur = jQuery.extend( {}, udataOld );

\t\t\tdataUser.set( dest, udataCur );
\t\t}
\t}

// Fix IE bugs, see support tests
\tfunction fixInput( src, dest ) {
\t\tvar nodeName = dest.nodeName.toLowerCase();

\t\t// Fails to persist the checked state of a cloned checkbox or radio button.
\t\tif ( nodeName === \"input\" && rcheckableType.test( src.type ) ) {
\t\t\tdest.checked = src.checked;

\t\t\t// Fails to return the selected option to the default selected state when cloning options
\t\t} else if ( nodeName === \"input\" || nodeName === \"textarea\" ) {
\t\t\tdest.defaultValue = src.defaultValue;
\t\t}
\t}

\tfunction domManip( collection, args, callback, ignored ) {

\t\t// Flatten any nested arrays
\t\targs = concat.apply( [], args );

\t\tvar fragment, first, scripts, hasScripts, node, doc,
\t\t\ti = 0,
\t\t\tl = collection.length,
\t\t\tiNoClone = l - 1,
\t\t\tvalue = args[ 0 ],
\t\t\tvalueIsFunction = isFunction( value );

\t\t// We can't cloneNode fragments that contain checked, in WebKit
\t\tif ( valueIsFunction ||
\t\t\t( l > 1 && typeof value === \"string\" &&
\t\t\t\t!support.checkClone && rchecked.test( value ) ) ) {
\t\t\treturn collection.each( function( index ) {
\t\t\t\tvar self = collection.eq( index );
\t\t\t\tif ( valueIsFunction ) {
\t\t\t\t\targs[ 0 ] = value.call( this, index, self.html() );
\t\t\t\t}
\t\t\t\tdomManip( self, args, callback, ignored );
\t\t\t} );
\t\t}

\t\tif ( l ) {
\t\t\tfragment = buildFragment( args, collection[ 0 ].ownerDocument, false, collection, ignored );
\t\t\tfirst = fragment.firstChild;

\t\t\tif ( fragment.childNodes.length === 1 ) {
\t\t\t\tfragment = first;
\t\t\t}

\t\t\t// Require either new content or an interest in ignored elements to invoke the callback
\t\t\tif ( first || ignored ) {
\t\t\t\tscripts = jQuery.map( getAll( fragment, \"script\" ), disableScript );
\t\t\t\thasScripts = scripts.length;

\t\t\t\t// Use the original fragment for the last item
\t\t\t\t// instead of the first because it can end up
\t\t\t\t// being emptied incorrectly in certain situations (#8070).
\t\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\t\tnode = fragment;

\t\t\t\t\tif ( i !== iNoClone ) {
\t\t\t\t\t\tnode = jQuery.clone( node, true, true );

\t\t\t\t\t\t// Keep references to cloned scripts for later restoration
\t\t\t\t\t\tif ( hasScripts ) {

\t\t\t\t\t\t\t// Support: Android <=4.0 only, PhantomJS 1 only
\t\t\t\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\t\t\t\tjQuery.merge( scripts, getAll( node, \"script\" ) );
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tcallback.call( collection[ i ], node, i );
\t\t\t\t}

\t\t\t\tif ( hasScripts ) {
\t\t\t\t\tdoc = scripts[ scripts.length - 1 ].ownerDocument;

\t\t\t\t\t// Reenable scripts
\t\t\t\t\tjQuery.map( scripts, restoreScript );

\t\t\t\t\t// Evaluate executable scripts on first document insertion
\t\t\t\t\tfor ( i = 0; i < hasScripts; i++ ) {
\t\t\t\t\t\tnode = scripts[ i ];
\t\t\t\t\t\tif ( rscriptType.test( node.type || \"\" ) &&
\t\t\t\t\t\t\t!dataPriv.access( node, \"globalEval\" ) &&
\t\t\t\t\t\t\tjQuery.contains( doc, node ) ) {

\t\t\t\t\t\t\tif ( node.src && ( node.type || \"\" ).toLowerCase()  !== \"module\" ) {

\t\t\t\t\t\t\t\t// Optional AJAX dependency, but won't run scripts if not present
\t\t\t\t\t\t\t\tif ( jQuery._evalUrl ) {
\t\t\t\t\t\t\t\t\tjQuery._evalUrl( node.src );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tDOMEval( node.textContent.replace( rcleanScript, \"\" ), doc, node );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn collection;
\t}

\tfunction remove( elem, selector, keepData ) {
\t\tvar node,
\t\t\tnodes = selector ? jQuery.filter( selector, elem ) : elem,
\t\t\ti = 0;

\t\tfor ( ; ( node = nodes[ i ] ) != null; i++ ) {
\t\t\tif ( !keepData && node.nodeType === 1 ) {
\t\t\t\tjQuery.cleanData( getAll( node ) );
\t\t\t}

\t\t\tif ( node.parentNode ) {
\t\t\t\tif ( keepData && jQuery.contains( node.ownerDocument, node ) ) {
\t\t\t\t\tsetGlobalEval( getAll( node, \"script\" ) );
\t\t\t\t}
\t\t\t\tnode.parentNode.removeChild( node );
\t\t\t}
\t\t}

\t\treturn elem;
\t}

\tjQuery.extend( {
\t\thtmlPrefilter: function( html ) {
\t\t\treturn html.replace( rxhtmlTag, \"<\$1></\$2>\" );
\t\t},

\t\tclone: function( elem, dataAndEvents, deepDataAndEvents ) {
\t\t\tvar i, l, srcElements, destElements,
\t\t\t\tclone = elem.cloneNode( true ),
\t\t\t\tinPage = jQuery.contains( elem.ownerDocument, elem );

\t\t\t// Fix IE cloning issues
\t\t\tif ( !support.noCloneChecked && ( elem.nodeType === 1 || elem.nodeType === 11 ) &&
\t\t\t\t!jQuery.isXMLDoc( elem ) ) {

\t\t\t\t// We eschew Sizzle here for performance reasons: https://jsperf.com/getall-vs-sizzle/2
\t\t\t\tdestElements = getAll( clone );
\t\t\t\tsrcElements = getAll( elem );

\t\t\t\tfor ( i = 0, l = srcElements.length; i < l; i++ ) {
\t\t\t\t\tfixInput( srcElements[ i ], destElements[ i ] );
\t\t\t\t}
\t\t\t}

\t\t\t// Copy the events from the original to the clone
\t\t\tif ( dataAndEvents ) {
\t\t\t\tif ( deepDataAndEvents ) {
\t\t\t\t\tsrcElements = srcElements || getAll( elem );
\t\t\t\t\tdestElements = destElements || getAll( clone );

\t\t\t\t\tfor ( i = 0, l = srcElements.length; i < l; i++ ) {
\t\t\t\t\t\tcloneCopyEvent( srcElements[ i ], destElements[ i ] );
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tcloneCopyEvent( elem, clone );
\t\t\t\t}
\t\t\t}

\t\t\t// Preserve script evaluation history
\t\t\tdestElements = getAll( clone, \"script\" );
\t\t\tif ( destElements.length > 0 ) {
\t\t\t\tsetGlobalEval( destElements, !inPage && getAll( elem, \"script\" ) );
\t\t\t}

\t\t\t// Return the cloned set
\t\t\treturn clone;
\t\t},

\t\tcleanData: function( elems ) {
\t\t\tvar data, elem, type,
\t\t\t\tspecial = jQuery.event.special,
\t\t\t\ti = 0;

\t\t\tfor ( ; ( elem = elems[ i ] ) !== undefined; i++ ) {
\t\t\t\tif ( acceptData( elem ) ) {
\t\t\t\t\tif ( ( data = elem[ dataPriv.expando ] ) ) {
\t\t\t\t\t\tif ( data.events ) {
\t\t\t\t\t\t\tfor ( type in data.events ) {
\t\t\t\t\t\t\t\tif ( special[ type ] ) {
\t\t\t\t\t\t\t\t\tjQuery.event.remove( elem, type );

\t\t\t\t\t\t\t\t\t// This is a shortcut to avoid jQuery.event.remove's overhead
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tjQuery.removeEvent( elem, type, data.handle );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t// Support: Chrome <=35 - 45+
\t\t\t\t\t\t// Assign undefined instead of using delete, see Data#remove
\t\t\t\t\t\telem[ dataPriv.expando ] = undefined;
\t\t\t\t\t}
\t\t\t\t\tif ( elem[ dataUser.expando ] ) {

\t\t\t\t\t\t// Support: Chrome <=35 - 45+
\t\t\t\t\t\t// Assign undefined instead of using delete, see Data#remove
\t\t\t\t\t\telem[ dataUser.expando ] = undefined;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t} );

\tjQuery.fn.extend( {
\t\tdetach: function( selector ) {
\t\t\treturn remove( this, selector, true );
\t\t},

\t\tremove: function( selector ) {
\t\t\treturn remove( this, selector );
\t\t},

\t\ttext: function( value ) {
\t\t\treturn access( this, function( value ) {
\t\t\t\treturn value === undefined ?
\t\t\t\t\tjQuery.text( this ) :
\t\t\t\t\tthis.empty().each( function() {
\t\t\t\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\t\t\t\tthis.textContent = value;
\t\t\t\t\t\t}
\t\t\t\t\t} );
\t\t\t}, null, value, arguments.length );
\t\t},

\t\tappend: function() {
\t\t\treturn domManip( this, arguments, function( elem ) {
\t\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\t\tvar target = manipulationTarget( this, elem );
\t\t\t\t\ttarget.appendChild( elem );
\t\t\t\t}
\t\t\t} );
\t\t},

\t\tprepend: function() {
\t\t\treturn domManip( this, arguments, function( elem ) {
\t\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\t\tvar target = manipulationTarget( this, elem );
\t\t\t\t\ttarget.insertBefore( elem, target.firstChild );
\t\t\t\t}
\t\t\t} );
\t\t},

\t\tbefore: function() {
\t\t\treturn domManip( this, arguments, function( elem ) {
\t\t\t\tif ( this.parentNode ) {
\t\t\t\t\tthis.parentNode.insertBefore( elem, this );
\t\t\t\t}
\t\t\t} );
\t\t},

\t\tafter: function() {
\t\t\treturn domManip( this, arguments, function( elem ) {
\t\t\t\tif ( this.parentNode ) {
\t\t\t\t\tthis.parentNode.insertBefore( elem, this.nextSibling );
\t\t\t\t}
\t\t\t} );
\t\t},

\t\tempty: function() {
\t\t\tvar elem,
\t\t\t\ti = 0;

\t\t\tfor ( ; ( elem = this[ i ] ) != null; i++ ) {
\t\t\t\tif ( elem.nodeType === 1 ) {

\t\t\t\t\t// Prevent memory leaks
\t\t\t\t\tjQuery.cleanData( getAll( elem, false ) );

\t\t\t\t\t// Remove any remaining nodes
\t\t\t\t\telem.textContent = \"\";
\t\t\t\t}
\t\t\t}

\t\t\treturn this;
\t\t},

\t\tclone: function( dataAndEvents, deepDataAndEvents ) {
\t\t\tdataAndEvents = dataAndEvents == null ? false : dataAndEvents;
\t\t\tdeepDataAndEvents = deepDataAndEvents == null ? dataAndEvents : deepDataAndEvents;

\t\t\treturn this.map( function() {
\t\t\t\treturn jQuery.clone( this, dataAndEvents, deepDataAndEvents );
\t\t\t} );
\t\t},

\t\thtml: function( value ) {
\t\t\treturn access( this, function( value ) {
\t\t\t\tvar elem = this[ 0 ] || {},
\t\t\t\t\ti = 0,
\t\t\t\t\tl = this.length;

\t\t\t\tif ( value === undefined && elem.nodeType === 1 ) {
\t\t\t\t\treturn elem.innerHTML;
\t\t\t\t}

\t\t\t\t// See if we can take a shortcut and just use innerHTML
\t\t\t\tif ( typeof value === \"string\" && !rnoInnerhtml.test( value ) &&
\t\t\t\t\t!wrapMap[ ( rtagName.exec( value ) || [ \"\", \"\" ] )[ 1 ].toLowerCase() ] ) {

\t\t\t\t\tvalue = jQuery.htmlPrefilter( value );

\t\t\t\t\ttry {
\t\t\t\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\t\t\t\telem = this[ i ] || {};

\t\t\t\t\t\t\t// Remove element nodes and prevent memory leaks
\t\t\t\t\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\t\t\t\t\tjQuery.cleanData( getAll( elem, false ) );
\t\t\t\t\t\t\t\telem.innerHTML = value;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\telem = 0;

\t\t\t\t\t\t// If using innerHTML throws an exception, use the fallback method
\t\t\t\t\t} catch ( e ) {}
\t\t\t\t}

\t\t\t\tif ( elem ) {
\t\t\t\t\tthis.empty().append( value );
\t\t\t\t}
\t\t\t}, null, value, arguments.length );
\t\t},

\t\treplaceWith: function() {
\t\t\tvar ignored = [];

\t\t\t// Make the changes, replacing each non-ignored context element with the new content
\t\t\treturn domManip( this, arguments, function( elem ) {
\t\t\t\tvar parent = this.parentNode;

\t\t\t\tif ( jQuery.inArray( this, ignored ) < 0 ) {
\t\t\t\t\tjQuery.cleanData( getAll( this ) );
\t\t\t\t\tif ( parent ) {
\t\t\t\t\t\tparent.replaceChild( elem, this );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Force callback invocation
\t\t\t}, ignored );
\t\t}
\t} );

\tjQuery.each( {
\t\tappendTo: \"append\",
\t\tprependTo: \"prepend\",
\t\tinsertBefore: \"before\",
\t\tinsertAfter: \"after\",
\t\treplaceAll: \"replaceWith\"
\t}, function( name, original ) {
\t\tjQuery.fn[ name ] = function( selector ) {
\t\t\tvar elems,
\t\t\t\tret = [],
\t\t\t\tinsert = jQuery( selector ),
\t\t\t\tlast = insert.length - 1,
\t\t\t\ti = 0;

\t\t\tfor ( ; i <= last; i++ ) {
\t\t\t\telems = i === last ? this : this.clone( true );
\t\t\t\tjQuery( insert[ i ] )[ original ]( elems );

\t\t\t\t// Support: Android <=4.0 only, PhantomJS 1 only
\t\t\t\t// .get() because push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\tpush.apply( ret, elems.get() );
\t\t\t}

\t\t\treturn this.pushStack( ret );
\t\t};
\t} );
\tvar rnumnonpx = new RegExp( \"^(\" + pnum + \")(?!px)[a-z%]+\$\", \"i\" );

\tvar getStyles = function( elem ) {

\t\t// Support: IE <=11 only, Firefox <=30 (#15098, #14150)
\t\t// IE throws on elements created in popups
\t\t// FF meanwhile throws on frame elements through \"defaultView.getComputedStyle\"
\t\tvar view = elem.ownerDocument.defaultView;

\t\tif ( !view || !view.opener ) {
\t\t\tview = window;
\t\t}

\t\treturn view.getComputedStyle( elem );
\t};

\tvar rboxStyle = new RegExp( cssExpand.join( \"|\" ), \"i\" );



\t( function() {

\t\t// Executing both pixelPosition & boxSizingReliable tests require only one layout
\t\t// so they're executed at the same time to save the second computation.
\t\tfunction computeStyleTests() {

\t\t\t// This is a singleton, we need to execute it only once
\t\t\tif ( !div ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tcontainer.style.cssText = \"position:absolute;left:-11111px;width:60px;\" +
\t\t\t\t\"margin-top:1px;padding:0;border:0\";
\t\t\tdiv.style.cssText =
\t\t\t\t\"position:relative;display:block;box-sizing:border-box;overflow:scroll;\" +
\t\t\t\t\"margin:auto;border:1px;padding:1px;\" +
\t\t\t\t\"width:60%;top:1%\";
\t\t\tdocumentElement.appendChild( container ).appendChild( div );

\t\t\tvar divStyle = window.getComputedStyle( div );
\t\t\tpixelPositionVal = divStyle.top !== \"1%\";

\t\t\t// Support: Android 4.0 - 4.3 only, Firefox <=3 - 44
\t\t\treliableMarginLeftVal = roundPixelMeasures( divStyle.marginLeft ) === 12;

\t\t\t// Support: Android 4.0 - 4.3 only, Safari <=9.1 - 10.1, iOS <=7.0 - 9.3
\t\t\t// Some styles come back with percentage values, even though they shouldn't
\t\t\tdiv.style.right = \"60%\";
\t\t\tpixelBoxStylesVal = roundPixelMeasures( divStyle.right ) === 36;

\t\t\t// Support: IE 9 - 11 only
\t\t\t// Detect misreporting of content dimensions for box-sizing:border-box elements
\t\t\tboxSizingReliableVal = roundPixelMeasures( divStyle.width ) === 36;

\t\t\t// Support: IE 9 only
\t\t\t// Detect overflow:scroll screwiness (gh-3699)
\t\t\tdiv.style.position = \"absolute\";
\t\t\tscrollboxSizeVal = div.offsetWidth === 36 || \"absolute\";

\t\t\tdocumentElement.removeChild( container );

\t\t\t// Nullify the div so it wouldn't be stored in the memory and
\t\t\t// it will also be a sign that checks already performed
\t\t\tdiv = null;
\t\t}

\t\tfunction roundPixelMeasures( measure ) {
\t\t\treturn Math.round( parseFloat( measure ) );
\t\t}

\t\tvar pixelPositionVal, boxSizingReliableVal, scrollboxSizeVal, pixelBoxStylesVal,
\t\t\treliableMarginLeftVal,
\t\t\tcontainer = document.createElement( \"div\" ),
\t\t\tdiv = document.createElement( \"div\" );

\t\t// Finish early in limited (non-browser) environments
\t\tif ( !div.style ) {
\t\t\treturn;
\t\t}

\t\t// Support: IE <=9 - 11 only
\t\t// Style of cloned element affects source element cloned (#8908)
\t\tdiv.style.backgroundClip = \"content-box\";
\t\tdiv.cloneNode( true ).style.backgroundClip = \"\";
\t\tsupport.clearCloneStyle = div.style.backgroundClip === \"content-box\";

\t\tjQuery.extend( support, {
\t\t\tboxSizingReliable: function() {
\t\t\t\tcomputeStyleTests();
\t\t\t\treturn boxSizingReliableVal;
\t\t\t},
\t\t\tpixelBoxStyles: function() {
\t\t\t\tcomputeStyleTests();
\t\t\t\treturn pixelBoxStylesVal;
\t\t\t},
\t\t\tpixelPosition: function() {
\t\t\t\tcomputeStyleTests();
\t\t\t\treturn pixelPositionVal;
\t\t\t},
\t\t\treliableMarginLeft: function() {
\t\t\t\tcomputeStyleTests();
\t\t\t\treturn reliableMarginLeftVal;
\t\t\t},
\t\t\tscrollboxSize: function() {
\t\t\t\tcomputeStyleTests();
\t\t\t\treturn scrollboxSizeVal;
\t\t\t}
\t\t} );
\t} )();


\tfunction curCSS( elem, name, computed ) {
\t\tvar width, minWidth, maxWidth, ret,

\t\t\t// Support: Firefox 51+
\t\t\t// Retrieving style before computed somehow
\t\t\t// fixes an issue with getting wrong values
\t\t\t// on detached elements
\t\t\tstyle = elem.style;

\t\tcomputed = computed || getStyles( elem );

\t\t// getPropertyValue is needed for:
\t\t//   .css('filter') (IE 9 only, #12537)
\t\t//   .css('--customProperty) (#3144)
\t\tif ( computed ) {
\t\t\tret = computed.getPropertyValue( name ) || computed[ name ];

\t\t\tif ( ret === \"\" && !jQuery.contains( elem.ownerDocument, elem ) ) {
\t\t\t\tret = jQuery.style( elem, name );
\t\t\t}

\t\t\t// A tribute to the \"awesome hack by Dean Edwards\"
\t\t\t// Android Browser returns percentage for some values,
\t\t\t// but width seems to be reliably pixels.
\t\t\t// This is against the CSSOM draft spec:
\t\t\t// https://drafts.csswg.org/cssom/#resolved-values
\t\t\tif ( !support.pixelBoxStyles() && rnumnonpx.test( ret ) && rboxStyle.test( name ) ) {

\t\t\t\t// Remember the original values
\t\t\t\twidth = style.width;
\t\t\t\tminWidth = style.minWidth;
\t\t\t\tmaxWidth = style.maxWidth;

\t\t\t\t// Put in the new values to get a computed value out
\t\t\t\tstyle.minWidth = style.maxWidth = style.width = ret;
\t\t\t\tret = computed.width;

\t\t\t\t// Revert the changed values
\t\t\t\tstyle.width = width;
\t\t\t\tstyle.minWidth = minWidth;
\t\t\t\tstyle.maxWidth = maxWidth;
\t\t\t}
\t\t}

\t\treturn ret !== undefined ?

\t\t\t// Support: IE <=9 - 11 only
\t\t\t// IE returns zIndex value as an integer.
\t\t\tret + \"\" :
\t\t\tret;
\t}


\tfunction addGetHookIf( conditionFn, hookFn ) {

\t\t// Define the hook, we'll check on the first run if it's really needed.
\t\treturn {
\t\t\tget: function() {
\t\t\t\tif ( conditionFn() ) {

\t\t\t\t\t// Hook not needed (or it's not possible to use it due
\t\t\t\t\t// to missing dependency), remove it.
\t\t\t\t\tdelete this.get;
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t// Hook needed; redefine it so that the support test is not executed again.
\t\t\t\treturn ( this.get = hookFn ).apply( this, arguments );
\t\t\t}
\t\t};
\t}


\tvar

\t\t// Swappable if display is none or starts with table
\t\t// except \"table\", \"table-cell\", or \"table-caption\"
\t\t// See here for display values: https://developer.mozilla.org/en-US/docs/CSS/display
\t\trdisplayswap = /^(none|table(?!-c[ea]).+)/,
\t\trcustomProp = /^--/,
\t\tcssShow = { position: \"absolute\", visibility: \"hidden\", display: \"block\" },
\t\tcssNormalTransform = {
\t\t\tletterSpacing: \"0\",
\t\t\tfontWeight: \"400\"
\t\t},

\t\tcssPrefixes = [ \"Webkit\", \"Moz\", \"ms\" ],
\t\temptyStyle = document.createElement( \"div\" ).style;

// Return a css property mapped to a potentially vendor prefixed property
\tfunction vendorPropName( name ) {

\t\t// Shortcut for names that are not vendor prefixed
\t\tif ( name in emptyStyle ) {
\t\t\treturn name;
\t\t}

\t\t// Check for vendor prefixed names
\t\tvar capName = name[ 0 ].toUpperCase() + name.slice( 1 ),
\t\t\ti = cssPrefixes.length;

\t\twhile ( i-- ) {
\t\t\tname = cssPrefixes[ i ] + capName;
\t\t\tif ( name in emptyStyle ) {
\t\t\t\treturn name;
\t\t\t}
\t\t}
\t}

// Return a property mapped along what jQuery.cssProps suggests or to
// a vendor prefixed property.
\tfunction finalPropName( name ) {
\t\tvar ret = jQuery.cssProps[ name ];
\t\tif ( !ret ) {
\t\t\tret = jQuery.cssProps[ name ] = vendorPropName( name ) || name;
\t\t}
\t\treturn ret;
\t}

\tfunction setPositiveNumber( elem, value, subtract ) {

\t\t// Any relative (+/-) values have already been
\t\t// normalized at this point
\t\tvar matches = rcssNum.exec( value );
\t\treturn matches ?

\t\t\t// Guard against undefined \"subtract\", e.g., when used as in cssHooks
\t\t\tMath.max( 0, matches[ 2 ] - ( subtract || 0 ) ) + ( matches[ 3 ] || \"px\" ) :
\t\t\tvalue;
\t}

\tfunction boxModelAdjustment( elem, dimension, box, isBorderBox, styles, computedVal ) {
\t\tvar i = dimension === \"width\" ? 1 : 0,
\t\t\textra = 0,
\t\t\tdelta = 0;

\t\t// Adjustment may not be necessary
\t\tif ( box === ( isBorderBox ? \"border\" : \"content\" ) ) {
\t\t\treturn 0;
\t\t}

\t\tfor ( ; i < 4; i += 2 ) {

\t\t\t// Both box models exclude margin
\t\t\tif ( box === \"margin\" ) {
\t\t\t\tdelta += jQuery.css( elem, box + cssExpand[ i ], true, styles );
\t\t\t}

\t\t\t// If we get here with a content-box, we're seeking \"padding\" or \"border\" or \"margin\"
\t\t\tif ( !isBorderBox ) {

\t\t\t\t// Add padding
\t\t\t\tdelta += jQuery.css( elem, \"padding\" + cssExpand[ i ], true, styles );

\t\t\t\t// For \"border\" or \"margin\", add border
\t\t\t\tif ( box !== \"padding\" ) {
\t\t\t\t\tdelta += jQuery.css( elem, \"border\" + cssExpand[ i ] + \"Width\", true, styles );

\t\t\t\t\t// But still keep track of it otherwise
\t\t\t\t} else {
\t\t\t\t\textra += jQuery.css( elem, \"border\" + cssExpand[ i ] + \"Width\", true, styles );
\t\t\t\t}

\t\t\t\t// If we get here with a border-box (content + padding + border), we're seeking \"content\" or
\t\t\t\t// \"padding\" or \"margin\"
\t\t\t} else {

\t\t\t\t// For \"content\", subtract padding
\t\t\t\tif ( box === \"content\" ) {
\t\t\t\t\tdelta -= jQuery.css( elem, \"padding\" + cssExpand[ i ], true, styles );
\t\t\t\t}

\t\t\t\t// For \"content\" or \"padding\", subtract border
\t\t\t\tif ( box !== \"margin\" ) {
\t\t\t\t\tdelta -= jQuery.css( elem, \"border\" + cssExpand[ i ] + \"Width\", true, styles );
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Account for positive content-box scroll gutter when requested by providing computedVal
\t\tif ( !isBorderBox && computedVal >= 0 ) {

\t\t\t// offsetWidth/offsetHeight is a rounded sum of content, padding, scroll gutter, and border
\t\t\t// Assuming integer scroll gutter, subtract the rest and round down
\t\t\tdelta += Math.max( 0, Math.ceil(
\t\t\t\telem[ \"offset\" + dimension[ 0 ].toUpperCase() + dimension.slice( 1 ) ] -
\t\t\t\tcomputedVal -
\t\t\t\tdelta -
\t\t\t\textra -
\t\t\t\t0.5
\t\t\t) );
\t\t}

\t\treturn delta;
\t}

\tfunction getWidthOrHeight( elem, dimension, extra ) {

\t\t// Start with computed style
\t\tvar styles = getStyles( elem ),
\t\t\tval = curCSS( elem, dimension, styles ),
\t\t\tisBorderBox = jQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\",
\t\t\tvalueIsBorderBox = isBorderBox;

\t\t// Support: Firefox <=54
\t\t// Return a confounding non-pixel value or feign ignorance, as appropriate.
\t\tif ( rnumnonpx.test( val ) ) {
\t\t\tif ( !extra ) {
\t\t\t\treturn val;
\t\t\t}
\t\t\tval = \"auto\";
\t\t}

\t\t// Check for style in case a browser which returns unreliable values
\t\t// for getComputedStyle silently falls back to the reliable elem.style
\t\tvalueIsBorderBox = valueIsBorderBox &&
\t\t\t( support.boxSizingReliable() || val === elem.style[ dimension ] );

\t\t// Fall back to offsetWidth/offsetHeight when value is \"auto\"
\t\t// This happens for inline elements with no explicit setting (gh-3571)
\t\t// Support: Android <=4.1 - 4.3 only
\t\t// Also use offsetWidth/offsetHeight for misreported inline dimensions (gh-3602)
\t\tif ( val === \"auto\" ||
\t\t\t!parseFloat( val ) && jQuery.css( elem, \"display\", false, styles ) === \"inline\" ) {

\t\t\tval = elem[ \"offset\" + dimension[ 0 ].toUpperCase() + dimension.slice( 1 ) ];

\t\t\t// offsetWidth/offsetHeight provide border-box values
\t\t\tvalueIsBorderBox = true;
\t\t}

\t\t// Normalize \"\" and auto
\t\tval = parseFloat( val ) || 0;

\t\t// Adjust for the element's box model
\t\treturn ( val +
\t\t\tboxModelAdjustment(
\t\t\t\telem,
\t\t\t\tdimension,
\t\t\t\textra || ( isBorderBox ? \"border\" : \"content\" ),
\t\t\t\tvalueIsBorderBox,
\t\t\t\tstyles,

\t\t\t\t// Provide the current computed size to request scroll gutter calculation (gh-3589)
\t\t\t\tval
\t\t\t)
\t\t) + \"px\";
\t}

\tjQuery.extend( {

\t\t// Add in style property hooks for overriding the default
\t\t// behavior of getting and setting a style property
\t\tcssHooks: {
\t\t\topacity: {
\t\t\t\tget: function( elem, computed ) {
\t\t\t\t\tif ( computed ) {

\t\t\t\t\t\t// We should always get a number back from opacity
\t\t\t\t\t\tvar ret = curCSS( elem, \"opacity\" );
\t\t\t\t\t\treturn ret === \"\" ? \"1\" : ret;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t},

\t\t// Don't automatically add \"px\" to these possibly-unitless properties
\t\tcssNumber: {
\t\t\t\"animationIterationCount\": true,
\t\t\t\"columnCount\": true,
\t\t\t\"fillOpacity\": true,
\t\t\t\"flexGrow\": true,
\t\t\t\"flexShrink\": true,
\t\t\t\"fontWeight\": true,
\t\t\t\"lineHeight\": true,
\t\t\t\"opacity\": true,
\t\t\t\"order\": true,
\t\t\t\"orphans\": true,
\t\t\t\"widows\": true,
\t\t\t\"zIndex\": true,
\t\t\t\"zoom\": true
\t\t},

\t\t// Add in properties whose names you wish to fix before
\t\t// setting or getting the value
\t\tcssProps: {},

\t\t// Get and set the style property on a DOM Node
\t\tstyle: function( elem, name, value, extra ) {

\t\t\t// Don't set styles on text and comment nodes
\t\t\tif ( !elem || elem.nodeType === 3 || elem.nodeType === 8 || !elem.style ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// Make sure that we're working with the right name
\t\t\tvar ret, type, hooks,
\t\t\t\torigName = camelCase( name ),
\t\t\t\tisCustomProp = rcustomProp.test( name ),
\t\t\t\tstyle = elem.style;

\t\t\t// Make sure that we're working with the right name. We don't
\t\t\t// want to query the value if it is a CSS custom property
\t\t\t// since they are user-defined.
\t\t\tif ( !isCustomProp ) {
\t\t\t\tname = finalPropName( origName );
\t\t\t}

\t\t\t// Gets hook for the prefixed version, then unprefixed version
\t\t\thooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

\t\t\t// Check if we're setting a value
\t\t\tif ( value !== undefined ) {
\t\t\t\ttype = typeof value;

\t\t\t\t// Convert \"+=\" or \"-=\" to relative numbers (#7345)
\t\t\t\tif ( type === \"string\" && ( ret = rcssNum.exec( value ) ) && ret[ 1 ] ) {
\t\t\t\t\tvalue = adjustCSS( elem, name, ret );

\t\t\t\t\t// Fixes bug #9237
\t\t\t\t\ttype = \"number\";
\t\t\t\t}

\t\t\t\t// Make sure that null and NaN values aren't set (#7116)
\t\t\t\tif ( value == null || value !== value ) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t// If a number was passed in, add the unit (except for certain CSS properties)
\t\t\t\tif ( type === \"number\" ) {
\t\t\t\t\tvalue += ret && ret[ 3 ] || ( jQuery.cssNumber[ origName ] ? \"\" : \"px\" );
\t\t\t\t}

\t\t\t\t// background-* props affect original clone's values
\t\t\t\tif ( !support.clearCloneStyle && value === \"\" && name.indexOf( \"background\" ) === 0 ) {
\t\t\t\t\tstyle[ name ] = \"inherit\";
\t\t\t\t}

\t\t\t\t// If a hook was provided, use that value, otherwise just set the specified value
\t\t\t\tif ( !hooks || !( \"set\" in hooks ) ||
\t\t\t\t\t( value = hooks.set( elem, value, extra ) ) !== undefined ) {

\t\t\t\t\tif ( isCustomProp ) {
\t\t\t\t\t\tstyle.setProperty( name, value );
\t\t\t\t\t} else {
\t\t\t\t\t\tstyle[ name ] = value;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t} else {

\t\t\t\t// If a hook was provided get the non-computed value from there
\t\t\t\tif ( hooks && \"get\" in hooks &&
\t\t\t\t\t( ret = hooks.get( elem, false, extra ) ) !== undefined ) {

\t\t\t\t\treturn ret;
\t\t\t\t}

\t\t\t\t// Otherwise just get the value from the style object
\t\t\t\treturn style[ name ];
\t\t\t}
\t\t},

\t\tcss: function( elem, name, extra, styles ) {
\t\t\tvar val, num, hooks,
\t\t\t\torigName = camelCase( name ),
\t\t\t\tisCustomProp = rcustomProp.test( name );

\t\t\t// Make sure that we're working with the right name. We don't
\t\t\t// want to modify the value if it is a CSS custom property
\t\t\t// since they are user-defined.
\t\t\tif ( !isCustomProp ) {
\t\t\t\tname = finalPropName( origName );
\t\t\t}

\t\t\t// Try prefixed name followed by the unprefixed name
\t\t\thooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

\t\t\t// If a hook was provided get the computed value from there
\t\t\tif ( hooks && \"get\" in hooks ) {
\t\t\t\tval = hooks.get( elem, true, extra );
\t\t\t}

\t\t\t// Otherwise, if a way to get the computed value exists, use that
\t\t\tif ( val === undefined ) {
\t\t\t\tval = curCSS( elem, name, styles );
\t\t\t}

\t\t\t// Convert \"normal\" to computed value
\t\t\tif ( val === \"normal\" && name in cssNormalTransform ) {
\t\t\t\tval = cssNormalTransform[ name ];
\t\t\t}

\t\t\t// Make numeric if forced or a qualifier was provided and val looks numeric
\t\t\tif ( extra === \"\" || extra ) {
\t\t\t\tnum = parseFloat( val );
\t\t\t\treturn extra === true || isFinite( num ) ? num || 0 : val;
\t\t\t}

\t\t\treturn val;
\t\t}
\t} );

\tjQuery.each( [ \"height\", \"width\" ], function( i, dimension ) {
\t\tjQuery.cssHooks[ dimension ] = {
\t\t\tget: function( elem, computed, extra ) {
\t\t\t\tif ( computed ) {

\t\t\t\t\t// Certain elements can have dimension info if we invisibly show them
\t\t\t\t\t// but it must have a current display style that would benefit
\t\t\t\t\treturn rdisplayswap.test( jQuery.css( elem, \"display\" ) ) &&

\t\t\t\t\t// Support: Safari 8+
\t\t\t\t\t// Table columns in Safari have non-zero offsetWidth & zero
\t\t\t\t\t// getBoundingClientRect().width unless display is changed.
\t\t\t\t\t// Support: IE <=11 only
\t\t\t\t\t// Running getBoundingClientRect on a disconnected node
\t\t\t\t\t// in IE throws an error.
\t\t\t\t\t( !elem.getClientRects().length || !elem.getBoundingClientRect().width ) ?
\t\t\t\t\t\tswap( elem, cssShow, function() {
\t\t\t\t\t\t\treturn getWidthOrHeight( elem, dimension, extra );
\t\t\t\t\t\t} ) :
\t\t\t\t\t\tgetWidthOrHeight( elem, dimension, extra );
\t\t\t\t}
\t\t\t},

\t\t\tset: function( elem, value, extra ) {
\t\t\t\tvar matches,
\t\t\t\t\tstyles = getStyles( elem ),
\t\t\t\t\tisBorderBox = jQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\",
\t\t\t\t\tsubtract = extra && boxModelAdjustment(
\t\t\t\t\t\telem,
\t\t\t\t\t\tdimension,
\t\t\t\t\t\textra,
\t\t\t\t\t\tisBorderBox,
\t\t\t\t\t\tstyles
\t\t\t\t\t);

\t\t\t\t// Account for unreliable border-box dimensions by comparing offset* to computed and
\t\t\t\t// faking a content-box to get border and padding (gh-3699)
\t\t\t\tif ( isBorderBox && support.scrollboxSize() === styles.position ) {
\t\t\t\t\tsubtract -= Math.ceil(
\t\t\t\t\t\telem[ \"offset\" + dimension[ 0 ].toUpperCase() + dimension.slice( 1 ) ] -
\t\t\t\t\t\tparseFloat( styles[ dimension ] ) -
\t\t\t\t\t\tboxModelAdjustment( elem, dimension, \"border\", false, styles ) -
\t\t\t\t\t\t0.5
\t\t\t\t\t);
\t\t\t\t}

\t\t\t\t// Convert to pixels if value adjustment is needed
\t\t\t\tif ( subtract && ( matches = rcssNum.exec( value ) ) &&
\t\t\t\t\t( matches[ 3 ] || \"px\" ) !== \"px\" ) {

\t\t\t\t\telem.style[ dimension ] = value;
\t\t\t\t\tvalue = jQuery.css( elem, dimension );
\t\t\t\t}

\t\t\t\treturn setPositiveNumber( elem, value, subtract );
\t\t\t}
\t\t};
\t} );

\tjQuery.cssHooks.marginLeft = addGetHookIf( support.reliableMarginLeft,
\t\tfunction( elem, computed ) {
\t\t\tif ( computed ) {
\t\t\t\treturn ( parseFloat( curCSS( elem, \"marginLeft\" ) ) ||
\t\t\t\t\telem.getBoundingClientRect().left -
\t\t\t\t\tswap( elem, { marginLeft: 0 }, function() {
\t\t\t\t\t\treturn elem.getBoundingClientRect().left;
\t\t\t\t\t} )
\t\t\t\t) + \"px\";
\t\t\t}
\t\t}
\t);

// These hooks are used by animate to expand properties
\tjQuery.each( {
\t\tmargin: \"\",
\t\tpadding: \"\",
\t\tborder: \"Width\"
\t}, function( prefix, suffix ) {
\t\tjQuery.cssHooks[ prefix + suffix ] = {
\t\t\texpand: function( value ) {
\t\t\t\tvar i = 0,
\t\t\t\t\texpanded = {},

\t\t\t\t\t// Assumes a single number if not a string
\t\t\t\t\tparts = typeof value === \"string\" ? value.split( \" \" ) : [ value ];

\t\t\t\tfor ( ; i < 4; i++ ) {
\t\t\t\t\texpanded[ prefix + cssExpand[ i ] + suffix ] =
\t\t\t\t\t\tparts[ i ] || parts[ i - 2 ] || parts[ 0 ];
\t\t\t\t}

\t\t\t\treturn expanded;
\t\t\t}
\t\t};

\t\tif ( prefix !== \"margin\" ) {
\t\t\tjQuery.cssHooks[ prefix + suffix ].set = setPositiveNumber;
\t\t}
\t} );

\tjQuery.fn.extend( {
\t\tcss: function( name, value ) {
\t\t\treturn access( this, function( elem, name, value ) {
\t\t\t\tvar styles, len,
\t\t\t\t\tmap = {},
\t\t\t\t\ti = 0;

\t\t\t\tif ( Array.isArray( name ) ) {
\t\t\t\t\tstyles = getStyles( elem );
\t\t\t\t\tlen = name.length;

\t\t\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\t\t\tmap[ name[ i ] ] = jQuery.css( elem, name[ i ], false, styles );
\t\t\t\t\t}

\t\t\t\t\treturn map;
\t\t\t\t}

\t\t\t\treturn value !== undefined ?
\t\t\t\t\tjQuery.style( elem, name, value ) :
\t\t\t\t\tjQuery.css( elem, name );
\t\t\t}, name, value, arguments.length > 1 );
\t\t}
\t} );


\tfunction Tween( elem, options, prop, end, easing ) {
\t\treturn new Tween.prototype.init( elem, options, prop, end, easing );
\t}
\tjQuery.Tween = Tween;

\tTween.prototype = {
\t\tconstructor: Tween,
\t\tinit: function( elem, options, prop, end, easing, unit ) {
\t\t\tthis.elem = elem;
\t\t\tthis.prop = prop;
\t\t\tthis.easing = easing || jQuery.easing._default;
\t\t\tthis.options = options;
\t\t\tthis.start = this.now = this.cur();
\t\t\tthis.end = end;
\t\t\tthis.unit = unit || ( jQuery.cssNumber[ prop ] ? \"\" : \"px\" );
\t\t},
\t\tcur: function() {
\t\t\tvar hooks = Tween.propHooks[ this.prop ];

\t\t\treturn hooks && hooks.get ?
\t\t\t\thooks.get( this ) :
\t\t\t\tTween.propHooks._default.get( this );
\t\t},
\t\trun: function( percent ) {
\t\t\tvar eased,
\t\t\t\thooks = Tween.propHooks[ this.prop ];

\t\t\tif ( this.options.duration ) {
\t\t\t\tthis.pos = eased = jQuery.easing[ this.easing ](
\t\t\t\t\tpercent, this.options.duration * percent, 0, 1, this.options.duration
\t\t\t\t);
\t\t\t} else {
\t\t\t\tthis.pos = eased = percent;
\t\t\t}
\t\t\tthis.now = ( this.end - this.start ) * eased + this.start;

\t\t\tif ( this.options.step ) {
\t\t\t\tthis.options.step.call( this.elem, this.now, this );
\t\t\t}

\t\t\tif ( hooks && hooks.set ) {
\t\t\t\thooks.set( this );
\t\t\t} else {
\t\t\t\tTween.propHooks._default.set( this );
\t\t\t}
\t\t\treturn this;
\t\t}
\t};

\tTween.prototype.init.prototype = Tween.prototype;

\tTween.propHooks = {
\t\t_default: {
\t\t\tget: function( tween ) {
\t\t\t\tvar result;

\t\t\t\t// Use a property on the element directly when it is not a DOM element,
\t\t\t\t// or when there is no matching style property that exists.
\t\t\t\tif ( tween.elem.nodeType !== 1 ||
\t\t\t\t\ttween.elem[ tween.prop ] != null && tween.elem.style[ tween.prop ] == null ) {
\t\t\t\t\treturn tween.elem[ tween.prop ];
\t\t\t\t}

\t\t\t\t// Passing an empty string as a 3rd parameter to .css will automatically
\t\t\t\t// attempt a parseFloat and fallback to a string if the parse fails.
\t\t\t\t// Simple values such as \"10px\" are parsed to Float;
\t\t\t\t// complex values such as \"rotate(1rad)\" are returned as-is.
\t\t\t\tresult = jQuery.css( tween.elem, tween.prop, \"\" );

\t\t\t\t// Empty strings, null, undefined and \"auto\" are converted to 0.
\t\t\t\treturn !result || result === \"auto\" ? 0 : result;
\t\t\t},
\t\t\tset: function( tween ) {

\t\t\t\t// Use step hook for back compat.
\t\t\t\t// Use cssHook if its there.
\t\t\t\t// Use .style if available and use plain properties where available.
\t\t\t\tif ( jQuery.fx.step[ tween.prop ] ) {
\t\t\t\t\tjQuery.fx.step[ tween.prop ]( tween );
\t\t\t\t} else if ( tween.elem.nodeType === 1 &&
\t\t\t\t\t( tween.elem.style[ jQuery.cssProps[ tween.prop ] ] != null ||
\t\t\t\t\t\tjQuery.cssHooks[ tween.prop ] ) ) {
\t\t\t\t\tjQuery.style( tween.elem, tween.prop, tween.now + tween.unit );
\t\t\t\t} else {
\t\t\t\t\ttween.elem[ tween.prop ] = tween.now;
\t\t\t\t}
\t\t\t}
\t\t}
\t};

// Support: IE <=9 only
// Panic based approach to setting things on disconnected nodes
\tTween.propHooks.scrollTop = Tween.propHooks.scrollLeft = {
\t\tset: function( tween ) {
\t\t\tif ( tween.elem.nodeType && tween.elem.parentNode ) {
\t\t\t\ttween.elem[ tween.prop ] = tween.now;
\t\t\t}
\t\t}
\t};

\tjQuery.easing = {
\t\tlinear: function( p ) {
\t\t\treturn p;
\t\t},
\t\tswing: function( p ) {
\t\t\treturn 0.5 - Math.cos( p * Math.PI ) / 2;
\t\t},
\t\t_default: \"swing\"
\t};

\tjQuery.fx = Tween.prototype.init;

// Back compat <1.8 extension point
\tjQuery.fx.step = {};




\tvar
\t\tfxNow, inProgress,
\t\trfxtypes = /^(?:toggle|show|hide)\$/,
\t\trrun = /queueHooks\$/;

\tfunction schedule() {
\t\tif ( inProgress ) {
\t\t\tif ( document.hidden === false && window.requestAnimationFrame ) {
\t\t\t\twindow.requestAnimationFrame( schedule );
\t\t\t} else {
\t\t\t\twindow.setTimeout( schedule, jQuery.fx.interval );
\t\t\t}

\t\t\tjQuery.fx.tick();
\t\t}
\t}

// Animations created synchronously will run synchronously
\tfunction createFxNow() {
\t\twindow.setTimeout( function() {
\t\t\tfxNow = undefined;
\t\t} );
\t\treturn ( fxNow = Date.now() );
\t}

// Generate parameters to create a standard animation
\tfunction genFx( type, includeWidth ) {
\t\tvar which,
\t\t\ti = 0,
\t\t\tattrs = { height: type };

\t\t// If we include width, step value is 1 to do all cssExpand values,
\t\t// otherwise step value is 2 to skip over Left and Right
\t\tincludeWidth = includeWidth ? 1 : 0;
\t\tfor ( ; i < 4; i += 2 - includeWidth ) {
\t\t\twhich = cssExpand[ i ];
\t\t\tattrs[ \"margin\" + which ] = attrs[ \"padding\" + which ] = type;
\t\t}

\t\tif ( includeWidth ) {
\t\t\tattrs.opacity = attrs.width = type;
\t\t}

\t\treturn attrs;
\t}

\tfunction createTween( value, prop, animation ) {
\t\tvar tween,
\t\t\tcollection = ( Animation.tweeners[ prop ] || [] ).concat( Animation.tweeners[ \"*\" ] ),
\t\t\tindex = 0,
\t\t\tlength = collection.length;
\t\tfor ( ; index < length; index++ ) {
\t\t\tif ( ( tween = collection[ index ].call( animation, prop, value ) ) ) {

\t\t\t\t// We're done with this property
\t\t\t\treturn tween;
\t\t\t}
\t\t}
\t}

\tfunction defaultPrefilter( elem, props, opts ) {
\t\tvar prop, value, toggle, hooks, oldfire, propTween, restoreDisplay, display,
\t\t\tisBox = \"width\" in props || \"height\" in props,
\t\t\tanim = this,
\t\t\torig = {},
\t\t\tstyle = elem.style,
\t\t\thidden = elem.nodeType && isHiddenWithinTree( elem ),
\t\t\tdataShow = dataPriv.get( elem, \"fxshow\" );

\t\t// Queue-skipping animations hijack the fx hooks
\t\tif ( !opts.queue ) {
\t\t\thooks = jQuery._queueHooks( elem, \"fx\" );
\t\t\tif ( hooks.unqueued == null ) {
\t\t\t\thooks.unqueued = 0;
\t\t\t\toldfire = hooks.empty.fire;
\t\t\t\thooks.empty.fire = function() {
\t\t\t\t\tif ( !hooks.unqueued ) {
\t\t\t\t\t\toldfire();
\t\t\t\t\t}
\t\t\t\t};
\t\t\t}
\t\t\thooks.unqueued++;

\t\t\tanim.always( function() {

\t\t\t\t// Ensure the complete handler is called before this completes
\t\t\t\tanim.always( function() {
\t\t\t\t\thooks.unqueued--;
\t\t\t\t\tif ( !jQuery.queue( elem, \"fx\" ).length ) {
\t\t\t\t\t\thooks.empty.fire();
\t\t\t\t\t}
\t\t\t\t} );
\t\t\t} );
\t\t}

\t\t// Detect show/hide animations
\t\tfor ( prop in props ) {
\t\t\tvalue = props[ prop ];
\t\t\tif ( rfxtypes.test( value ) ) {
\t\t\t\tdelete props[ prop ];
\t\t\t\ttoggle = toggle || value === \"toggle\";
\t\t\t\tif ( value === ( hidden ? \"hide\" : \"show\" ) ) {

\t\t\t\t\t// Pretend to be hidden if this is a \"show\" and
\t\t\t\t\t// there is still data from a stopped show/hide
\t\t\t\t\tif ( value === \"show\" && dataShow && dataShow[ prop ] !== undefined ) {
\t\t\t\t\t\thidden = true;

\t\t\t\t\t\t// Ignore all other no-op show/hide data
\t\t\t\t\t} else {
\t\t\t\t\t\tcontinue;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\torig[ prop ] = dataShow && dataShow[ prop ] || jQuery.style( elem, prop );
\t\t\t}
\t\t}

\t\t// Bail out if this is a no-op like .hide().hide()
\t\tpropTween = !jQuery.isEmptyObject( props );
\t\tif ( !propTween && jQuery.isEmptyObject( orig ) ) {
\t\t\treturn;
\t\t}

\t\t// Restrict \"overflow\" and \"display\" styles during box animations
\t\tif ( isBox && elem.nodeType === 1 ) {

\t\t\t// Support: IE <=9 - 11, Edge 12 - 15
\t\t\t// Record all 3 overflow attributes because IE does not infer the shorthand
\t\t\t// from identically-valued overflowX and overflowY and Edge just mirrors
\t\t\t// the overflowX value there.
\t\t\topts.overflow = [ style.overflow, style.overflowX, style.overflowY ];

\t\t\t// Identify a display type, preferring old show/hide data over the CSS cascade
\t\t\trestoreDisplay = dataShow && dataShow.display;
\t\t\tif ( restoreDisplay == null ) {
\t\t\t\trestoreDisplay = dataPriv.get( elem, \"display\" );
\t\t\t}
\t\t\tdisplay = jQuery.css( elem, \"display\" );
\t\t\tif ( display === \"none\" ) {
\t\t\t\tif ( restoreDisplay ) {
\t\t\t\t\tdisplay = restoreDisplay;
\t\t\t\t} else {

\t\t\t\t\t// Get nonempty value(s) by temporarily forcing visibility
\t\t\t\t\tshowHide( [ elem ], true );
\t\t\t\t\trestoreDisplay = elem.style.display || restoreDisplay;
\t\t\t\t\tdisplay = jQuery.css( elem, \"display\" );
\t\t\t\t\tshowHide( [ elem ] );
\t\t\t\t}
\t\t\t}

\t\t\t// Animate inline elements as inline-block
\t\t\tif ( display === \"inline\" || display === \"inline-block\" && restoreDisplay != null ) {
\t\t\t\tif ( jQuery.css( elem, \"float\" ) === \"none\" ) {

\t\t\t\t\t// Restore the original display value at the end of pure show/hide animations
\t\t\t\t\tif ( !propTween ) {
\t\t\t\t\t\tanim.done( function() {
\t\t\t\t\t\t\tstyle.display = restoreDisplay;
\t\t\t\t\t\t} );
\t\t\t\t\t\tif ( restoreDisplay == null ) {
\t\t\t\t\t\t\tdisplay = style.display;
\t\t\t\t\t\t\trestoreDisplay = display === \"none\" ? \"\" : display;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tstyle.display = \"inline-block\";
\t\t\t\t}
\t\t\t}
\t\t}

\t\tif ( opts.overflow ) {
\t\t\tstyle.overflow = \"hidden\";
\t\t\tanim.always( function() {
\t\t\t\tstyle.overflow = opts.overflow[ 0 ];
\t\t\t\tstyle.overflowX = opts.overflow[ 1 ];
\t\t\t\tstyle.overflowY = opts.overflow[ 2 ];
\t\t\t} );
\t\t}

\t\t// Implement show/hide animations
\t\tpropTween = false;
\t\tfor ( prop in orig ) {

\t\t\t// General show/hide setup for this element animation
\t\t\tif ( !propTween ) {
\t\t\t\tif ( dataShow ) {
\t\t\t\t\tif ( \"hidden\" in dataShow ) {
\t\t\t\t\t\thidden = dataShow.hidden;
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tdataShow = dataPriv.access( elem, \"fxshow\", { display: restoreDisplay } );
\t\t\t\t}

\t\t\t\t// Store hidden/visible for toggle so `.stop().toggle()` \"reverses\"
\t\t\t\tif ( toggle ) {
\t\t\t\t\tdataShow.hidden = !hidden;
\t\t\t\t}

\t\t\t\t// Show elements before animating them
\t\t\t\tif ( hidden ) {
\t\t\t\t\tshowHide( [ elem ], true );
\t\t\t\t}

\t\t\t\t/* eslint-disable no-loop-func */

\t\t\t\tanim.done( function() {

\t\t\t\t\t/* eslint-enable no-loop-func */

\t\t\t\t\t// The final step of a \"hide\" animation is actually hiding the element
\t\t\t\t\tif ( !hidden ) {
\t\t\t\t\t\tshowHide( [ elem ] );
\t\t\t\t\t}
\t\t\t\t\tdataPriv.remove( elem, \"fxshow\" );
\t\t\t\t\tfor ( prop in orig ) {
\t\t\t\t\t\tjQuery.style( elem, prop, orig[ prop ] );
\t\t\t\t\t}
\t\t\t\t} );
\t\t\t}

\t\t\t// Per-property setup
\t\t\tpropTween = createTween( hidden ? dataShow[ prop ] : 0, prop, anim );
\t\t\tif ( !( prop in dataShow ) ) {
\t\t\t\tdataShow[ prop ] = propTween.start;
\t\t\t\tif ( hidden ) {
\t\t\t\t\tpropTween.end = propTween.start;
\t\t\t\t\tpropTween.start = 0;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\tfunction propFilter( props, specialEasing ) {
\t\tvar index, name, easing, value, hooks;

\t\t// camelCase, specialEasing and expand cssHook pass
\t\tfor ( index in props ) {
\t\t\tname = camelCase( index );
\t\t\teasing = specialEasing[ name ];
\t\t\tvalue = props[ index ];
\t\t\tif ( Array.isArray( value ) ) {
\t\t\t\teasing = value[ 1 ];
\t\t\t\tvalue = props[ index ] = value[ 0 ];
\t\t\t}

\t\t\tif ( index !== name ) {
\t\t\t\tprops[ name ] = value;
\t\t\t\tdelete props[ index ];
\t\t\t}

\t\t\thooks = jQuery.cssHooks[ name ];
\t\t\tif ( hooks && \"expand\" in hooks ) {
\t\t\t\tvalue = hooks.expand( value );
\t\t\t\tdelete props[ name ];

\t\t\t\t// Not quite \$.extend, this won't overwrite existing keys.
\t\t\t\t// Reusing 'index' because we have the correct \"name\"
\t\t\t\tfor ( index in value ) {
\t\t\t\t\tif ( !( index in props ) ) {
\t\t\t\t\t\tprops[ index ] = value[ index ];
\t\t\t\t\t\tspecialEasing[ index ] = easing;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\tspecialEasing[ name ] = easing;
\t\t\t}
\t\t}
\t}

\tfunction Animation( elem, properties, options ) {
\t\tvar result,
\t\t\tstopped,
\t\t\tindex = 0,
\t\t\tlength = Animation.prefilters.length,
\t\t\tdeferred = jQuery.Deferred().always( function() {

\t\t\t\t// Don't match elem in the :animated selector
\t\t\t\tdelete tick.elem;
\t\t\t} ),
\t\t\ttick = function() {
\t\t\t\tif ( stopped ) {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar currentTime = fxNow || createFxNow(),
\t\t\t\t\tremaining = Math.max( 0, animation.startTime + animation.duration - currentTime ),

\t\t\t\t\t// Support: Android 2.3 only
\t\t\t\t\t// Archaic crash bug won't allow us to use `1 - ( 0.5 || 0 )` (#12497)
\t\t\t\t\ttemp = remaining / animation.duration || 0,
\t\t\t\t\tpercent = 1 - temp,
\t\t\t\t\tindex = 0,
\t\t\t\t\tlength = animation.tweens.length;

\t\t\t\tfor ( ; index < length; index++ ) {
\t\t\t\t\tanimation.tweens[ index ].run( percent );
\t\t\t\t}

\t\t\t\tdeferred.notifyWith( elem, [ animation, percent, remaining ] );

\t\t\t\t// If there's more to do, yield
\t\t\t\tif ( percent < 1 && length ) {
\t\t\t\t\treturn remaining;
\t\t\t\t}

\t\t\t\t// If this was an empty animation, synthesize a final progress notification
\t\t\t\tif ( !length ) {
\t\t\t\t\tdeferred.notifyWith( elem, [ animation, 1, 0 ] );
\t\t\t\t}

\t\t\t\t// Resolve the animation and report its conclusion
\t\t\t\tdeferred.resolveWith( elem, [ animation ] );
\t\t\t\treturn false;
\t\t\t},
\t\t\tanimation = deferred.promise( {
\t\t\t\telem: elem,
\t\t\t\tprops: jQuery.extend( {}, properties ),
\t\t\t\topts: jQuery.extend( true, {
\t\t\t\t\tspecialEasing: {},
\t\t\t\t\teasing: jQuery.easing._default
\t\t\t\t}, options ),
\t\t\t\toriginalProperties: properties,
\t\t\t\toriginalOptions: options,
\t\t\t\tstartTime: fxNow || createFxNow(),
\t\t\t\tduration: options.duration,
\t\t\t\ttweens: [],
\t\t\t\tcreateTween: function( prop, end ) {
\t\t\t\t\tvar tween = jQuery.Tween( elem, animation.opts, prop, end,
\t\t\t\t\t\tanimation.opts.specialEasing[ prop ] || animation.opts.easing );
\t\t\t\t\tanimation.tweens.push( tween );
\t\t\t\t\treturn tween;
\t\t\t\t},
\t\t\t\tstop: function( gotoEnd ) {
\t\t\t\t\tvar index = 0,

\t\t\t\t\t\t// If we are going to the end, we want to run all the tweens
\t\t\t\t\t\t// otherwise we skip this part
\t\t\t\t\t\tlength = gotoEnd ? animation.tweens.length : 0;
\t\t\t\t\tif ( stopped ) {
\t\t\t\t\t\treturn this;
\t\t\t\t\t}
\t\t\t\t\tstopped = true;
\t\t\t\t\tfor ( ; index < length; index++ ) {
\t\t\t\t\t\tanimation.tweens[ index ].run( 1 );
\t\t\t\t\t}

\t\t\t\t\t// Resolve when we played the last frame; otherwise, reject
\t\t\t\t\tif ( gotoEnd ) {
\t\t\t\t\t\tdeferred.notifyWith( elem, [ animation, 1, 0 ] );
\t\t\t\t\t\tdeferred.resolveWith( elem, [ animation, gotoEnd ] );
\t\t\t\t\t} else {
\t\t\t\t\t\tdeferred.rejectWith( elem, [ animation, gotoEnd ] );
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t}
\t\t\t} ),
\t\t\tprops = animation.props;

\t\tpropFilter( props, animation.opts.specialEasing );

\t\tfor ( ; index < length; index++ ) {
\t\t\tresult = Animation.prefilters[ index ].call( animation, elem, props, animation.opts );
\t\t\tif ( result ) {
\t\t\t\tif ( isFunction( result.stop ) ) {
\t\t\t\t\tjQuery._queueHooks( animation.elem, animation.opts.queue ).stop =
\t\t\t\t\t\tresult.stop.bind( result );
\t\t\t\t}
\t\t\t\treturn result;
\t\t\t}
\t\t}

\t\tjQuery.map( props, createTween, animation );

\t\tif ( isFunction( animation.opts.start ) ) {
\t\t\tanimation.opts.start.call( elem, animation );
\t\t}

\t\t// Attach callbacks from options
\t\tanimation
\t\t\t.progress( animation.opts.progress )
\t\t\t.done( animation.opts.done, animation.opts.complete )
\t\t\t.fail( animation.opts.fail )
\t\t\t.always( animation.opts.always );

\t\tjQuery.fx.timer(
\t\t\tjQuery.extend( tick, {
\t\t\t\telem: elem,
\t\t\t\tanim: animation,
\t\t\t\tqueue: animation.opts.queue
\t\t\t} )
\t\t);

\t\treturn animation;
\t}

\tjQuery.Animation = jQuery.extend( Animation, {

\t\ttweeners: {
\t\t\t\"*\": [ function( prop, value ) {
\t\t\t\tvar tween = this.createTween( prop, value );
\t\t\t\tadjustCSS( tween.elem, prop, rcssNum.exec( value ), tween );
\t\t\t\treturn tween;
\t\t\t} ]
\t\t},

\t\ttweener: function( props, callback ) {
\t\t\tif ( isFunction( props ) ) {
\t\t\t\tcallback = props;
\t\t\t\tprops = [ \"*\" ];
\t\t\t} else {
\t\t\t\tprops = props.match( rnothtmlwhite );
\t\t\t}

\t\t\tvar prop,
\t\t\t\tindex = 0,
\t\t\t\tlength = props.length;

\t\t\tfor ( ; index < length; index++ ) {
\t\t\t\tprop = props[ index ];
\t\t\t\tAnimation.tweeners[ prop ] = Animation.tweeners[ prop ] || [];
\t\t\t\tAnimation.tweeners[ prop ].unshift( callback );
\t\t\t}
\t\t},

\t\tprefilters: [ defaultPrefilter ],

\t\tprefilter: function( callback, prepend ) {
\t\t\tif ( prepend ) {
\t\t\t\tAnimation.prefilters.unshift( callback );
\t\t\t} else {
\t\t\t\tAnimation.prefilters.push( callback );
\t\t\t}
\t\t}
\t} );

\tjQuery.speed = function( speed, easing, fn ) {
\t\tvar opt = speed && typeof speed === \"object\" ? jQuery.extend( {}, speed ) : {
\t\t\tcomplete: fn || !fn && easing ||
\t\t\t\tisFunction( speed ) && speed,
\t\t\tduration: speed,
\t\t\teasing: fn && easing || easing && !isFunction( easing ) && easing
\t\t};

\t\t// Go to the end state if fx are off
\t\tif ( jQuery.fx.off ) {
\t\t\topt.duration = 0;

\t\t} else {
\t\t\tif ( typeof opt.duration !== \"number\" ) {
\t\t\t\tif ( opt.duration in jQuery.fx.speeds ) {
\t\t\t\t\topt.duration = jQuery.fx.speeds[ opt.duration ];

\t\t\t\t} else {
\t\t\t\t\topt.duration = jQuery.fx.speeds._default;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Normalize opt.queue - true/undefined/null -> \"fx\"
\t\tif ( opt.queue == null || opt.queue === true ) {
\t\t\topt.queue = \"fx\";
\t\t}

\t\t// Queueing
\t\topt.old = opt.complete;

\t\topt.complete = function() {
\t\t\tif ( isFunction( opt.old ) ) {
\t\t\t\topt.old.call( this );
\t\t\t}

\t\t\tif ( opt.queue ) {
\t\t\t\tjQuery.dequeue( this, opt.queue );
\t\t\t}
\t\t};

\t\treturn opt;
\t};

\tjQuery.fn.extend( {
\t\tfadeTo: function( speed, to, easing, callback ) {

\t\t\t// Show any hidden elements after setting opacity to 0
\t\t\treturn this.filter( isHiddenWithinTree ).css( \"opacity\", 0 ).show()

\t\t\t\t// Animate to the value specified
\t\t\t\t.end().animate( { opacity: to }, speed, easing, callback );
\t\t},
\t\tanimate: function( prop, speed, easing, callback ) {
\t\t\tvar empty = jQuery.isEmptyObject( prop ),
\t\t\t\toptall = jQuery.speed( speed, easing, callback ),
\t\t\t\tdoAnimation = function() {

\t\t\t\t\t// Operate on a copy of prop so per-property easing won't be lost
\t\t\t\t\tvar anim = Animation( this, jQuery.extend( {}, prop ), optall );

\t\t\t\t\t// Empty animations, or finishing resolves immediately
\t\t\t\t\tif ( empty || dataPriv.get( this, \"finish\" ) ) {
\t\t\t\t\t\tanim.stop( true );
\t\t\t\t\t}
\t\t\t\t};
\t\t\tdoAnimation.finish = doAnimation;

\t\t\treturn empty || optall.queue === false ?
\t\t\t\tthis.each( doAnimation ) :
\t\t\t\tthis.queue( optall.queue, doAnimation );
\t\t},
\t\tstop: function( type, clearQueue, gotoEnd ) {
\t\t\tvar stopQueue = function( hooks ) {
\t\t\t\tvar stop = hooks.stop;
\t\t\t\tdelete hooks.stop;
\t\t\t\tstop( gotoEnd );
\t\t\t};

\t\t\tif ( typeof type !== \"string\" ) {
\t\t\t\tgotoEnd = clearQueue;
\t\t\t\tclearQueue = type;
\t\t\t\ttype = undefined;
\t\t\t}
\t\t\tif ( clearQueue && type !== false ) {
\t\t\t\tthis.queue( type || \"fx\", [] );
\t\t\t}

\t\t\treturn this.each( function() {
\t\t\t\tvar dequeue = true,
\t\t\t\t\tindex = type != null && type + \"queueHooks\",
\t\t\t\t\ttimers = jQuery.timers,
\t\t\t\t\tdata = dataPriv.get( this );

\t\t\t\tif ( index ) {
\t\t\t\t\tif ( data[ index ] && data[ index ].stop ) {
\t\t\t\t\t\tstopQueue( data[ index ] );
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tfor ( index in data ) {
\t\t\t\t\t\tif ( data[ index ] && data[ index ].stop && rrun.test( index ) ) {
\t\t\t\t\t\t\tstopQueue( data[ index ] );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tfor ( index = timers.length; index--; ) {
\t\t\t\t\tif ( timers[ index ].elem === this &&
\t\t\t\t\t\t( type == null || timers[ index ].queue === type ) ) {

\t\t\t\t\t\ttimers[ index ].anim.stop( gotoEnd );
\t\t\t\t\t\tdequeue = false;
\t\t\t\t\t\ttimers.splice( index, 1 );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Start the next in the queue if the last step wasn't forced.
\t\t\t\t// Timers currently will call their complete callbacks, which
\t\t\t\t// will dequeue but only if they were gotoEnd.
\t\t\t\tif ( dequeue || !gotoEnd ) {
\t\t\t\t\tjQuery.dequeue( this, type );
\t\t\t\t}
\t\t\t} );
\t\t},
\t\tfinish: function( type ) {
\t\t\tif ( type !== false ) {
\t\t\t\ttype = type || \"fx\";
\t\t\t}
\t\t\treturn this.each( function() {
\t\t\t\tvar index,
\t\t\t\t\tdata = dataPriv.get( this ),
\t\t\t\t\tqueue = data[ type + \"queue\" ],
\t\t\t\t\thooks = data[ type + \"queueHooks\" ],
\t\t\t\t\ttimers = jQuery.timers,
\t\t\t\t\tlength = queue ? queue.length : 0;

\t\t\t\t// Enable finishing flag on private data
\t\t\t\tdata.finish = true;

\t\t\t\t// Empty the queue first
\t\t\t\tjQuery.queue( this, type, [] );

\t\t\t\tif ( hooks && hooks.stop ) {
\t\t\t\t\thooks.stop.call( this, true );
\t\t\t\t}

\t\t\t\t// Look for any active animations, and finish them
\t\t\t\tfor ( index = timers.length; index--; ) {
\t\t\t\t\tif ( timers[ index ].elem === this && timers[ index ].queue === type ) {
\t\t\t\t\t\ttimers[ index ].anim.stop( true );
\t\t\t\t\t\ttimers.splice( index, 1 );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Look for any animations in the old queue and finish them
\t\t\t\tfor ( index = 0; index < length; index++ ) {
\t\t\t\t\tif ( queue[ index ] && queue[ index ].finish ) {
\t\t\t\t\t\tqueue[ index ].finish.call( this );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Turn off finishing flag
\t\t\t\tdelete data.finish;
\t\t\t} );
\t\t}
\t} );

\tjQuery.each( [ \"toggle\", \"show\", \"hide\" ], function( i, name ) {
\t\tvar cssFn = jQuery.fn[ name ];
\t\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\t\treturn speed == null || typeof speed === \"boolean\" ?
\t\t\t\tcssFn.apply( this, arguments ) :
\t\t\t\tthis.animate( genFx( name, true ), speed, easing, callback );
\t\t};
\t} );

// Generate shortcuts for custom animations
\tjQuery.each( {
\t\tslideDown: genFx( \"show\" ),
\t\tslideUp: genFx( \"hide\" ),
\t\tslideToggle: genFx( \"toggle\" ),
\t\tfadeIn: { opacity: \"show\" },
\t\tfadeOut: { opacity: \"hide\" },
\t\tfadeToggle: { opacity: \"toggle\" }
\t}, function( name, props ) {
\t\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\t\treturn this.animate( props, speed, easing, callback );
\t\t};
\t} );

\tjQuery.timers = [];
\tjQuery.fx.tick = function() {
\t\tvar timer,
\t\t\ti = 0,
\t\t\ttimers = jQuery.timers;

\t\tfxNow = Date.now();

\t\tfor ( ; i < timers.length; i++ ) {
\t\t\ttimer = timers[ i ];

\t\t\t// Run the timer and safely remove it when done (allowing for external removal)
\t\t\tif ( !timer() && timers[ i ] === timer ) {
\t\t\t\ttimers.splice( i--, 1 );
\t\t\t}
\t\t}

\t\tif ( !timers.length ) {
\t\t\tjQuery.fx.stop();
\t\t}
\t\tfxNow = undefined;
\t};

\tjQuery.fx.timer = function( timer ) {
\t\tjQuery.timers.push( timer );
\t\tjQuery.fx.start();
\t};

\tjQuery.fx.interval = 13;
\tjQuery.fx.start = function() {
\t\tif ( inProgress ) {
\t\t\treturn;
\t\t}

\t\tinProgress = true;
\t\tschedule();
\t};

\tjQuery.fx.stop = function() {
\t\tinProgress = null;
\t};

\tjQuery.fx.speeds = {
\t\tslow: 600,
\t\tfast: 200,

\t\t// Default speed
\t\t_default: 400
\t};


// Based off of the plugin by Clint Helfers, with permission.
// https://web.archive.org/web/20100324014747/http://blindsignals.com/index.php/2009/07/jquery-delay/
\tjQuery.fn.delay = function( time, type ) {
\t\ttime = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;
\t\ttype = type || \"fx\";

\t\treturn this.queue( type, function( next, hooks ) {
\t\t\tvar timeout = window.setTimeout( next, time );
\t\t\thooks.stop = function() {
\t\t\t\twindow.clearTimeout( timeout );
\t\t\t};
\t\t} );
\t};


\t( function() {
\t\tvar input = document.createElement( \"input\" ),
\t\t\tselect = document.createElement( \"select\" ),
\t\t\topt = select.appendChild( document.createElement( \"option\" ) );

\t\tinput.type = \"checkbox\";

\t\t// Support: Android <=4.3 only
\t\t// Default value for a checkbox should be \"on\"
\t\tsupport.checkOn = input.value !== \"\";

\t\t// Support: IE <=11 only
\t\t// Must access selectedIndex to make default options select
\t\tsupport.optSelected = opt.selected;

\t\t// Support: IE <=11 only
\t\t// An input loses its value after becoming a radio
\t\tinput = document.createElement( \"input\" );
\t\tinput.value = \"t\";
\t\tinput.type = \"radio\";
\t\tsupport.radioValue = input.value === \"t\";
\t} )();


\tvar boolHook,
\t\tattrHandle = jQuery.expr.attrHandle;

\tjQuery.fn.extend( {
\t\tattr: function( name, value ) {
\t\t\treturn access( this, jQuery.attr, name, value, arguments.length > 1 );
\t\t},

\t\tremoveAttr: function( name ) {
\t\t\treturn this.each( function() {
\t\t\t\tjQuery.removeAttr( this, name );
\t\t\t} );
\t\t}
\t} );

\tjQuery.extend( {
\t\tattr: function( elem, name, value ) {
\t\t\tvar ret, hooks,
\t\t\t\tnType = elem.nodeType;

\t\t\t// Don't get/set attributes on text, comment and attribute nodes
\t\t\tif ( nType === 3 || nType === 8 || nType === 2 ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// Fallback to prop when attributes are not supported
\t\t\tif ( typeof elem.getAttribute === \"undefined\" ) {
\t\t\t\treturn jQuery.prop( elem, name, value );
\t\t\t}

\t\t\t// Attribute hooks are determined by the lowercase version
\t\t\t// Grab necessary hook if one is defined
\t\t\tif ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {
\t\t\t\thooks = jQuery.attrHooks[ name.toLowerCase() ] ||
\t\t\t\t\t( jQuery.expr.match.bool.test( name ) ? boolHook : undefined );
\t\t\t}

\t\t\tif ( value !== undefined ) {
\t\t\t\tif ( value === null ) {
\t\t\t\t\tjQuery.removeAttr( elem, name );
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tif ( hooks && \"set\" in hooks &&
\t\t\t\t\t( ret = hooks.set( elem, value, name ) ) !== undefined ) {
\t\t\t\t\treturn ret;
\t\t\t\t}

\t\t\t\telem.setAttribute( name, value + \"\" );
\t\t\t\treturn value;
\t\t\t}

\t\t\tif ( hooks && \"get\" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
\t\t\t\treturn ret;
\t\t\t}

\t\t\tret = jQuery.find.attr( elem, name );

\t\t\t// Non-existent attributes return null, we normalize to undefined
\t\t\treturn ret == null ? undefined : ret;
\t\t},

\t\tattrHooks: {
\t\t\ttype: {
\t\t\t\tset: function( elem, value ) {
\t\t\t\t\tif ( !support.radioValue && value === \"radio\" &&
\t\t\t\t\t\tnodeName( elem, \"input\" ) ) {
\t\t\t\t\t\tvar val = elem.value;
\t\t\t\t\t\telem.setAttribute( \"type\", value );
\t\t\t\t\t\tif ( val ) {
\t\t\t\t\t\t\telem.value = val;
\t\t\t\t\t\t}
\t\t\t\t\t\treturn value;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t},

\t\tremoveAttr: function( elem, value ) {
\t\t\tvar name,
\t\t\t\ti = 0,

\t\t\t\t// Attribute names can contain non-HTML whitespace characters
\t\t\t\t// https://html.spec.whatwg.org/multipage/syntax.html#attributes-2
\t\t\t\tattrNames = value && value.match( rnothtmlwhite );

\t\t\tif ( attrNames && elem.nodeType === 1 ) {
\t\t\t\twhile ( ( name = attrNames[ i++ ] ) ) {
\t\t\t\t\telem.removeAttribute( name );
\t\t\t\t}
\t\t\t}
\t\t}
\t} );

// Hooks for boolean attributes
\tboolHook = {
\t\tset: function( elem, value, name ) {
\t\t\tif ( value === false ) {

\t\t\t\t// Remove boolean attributes when set to false
\t\t\t\tjQuery.removeAttr( elem, name );
\t\t\t} else {
\t\t\t\telem.setAttribute( name, name );
\t\t\t}
\t\t\treturn name;
\t\t}
\t};

\tjQuery.each( jQuery.expr.match.bool.source.match( /\\w+/g ), function( i, name ) {
\t\tvar getter = attrHandle[ name ] || jQuery.find.attr;

\t\tattrHandle[ name ] = function( elem, name, isXML ) {
\t\t\tvar ret, handle,
\t\t\t\tlowercaseName = name.toLowerCase();

\t\t\tif ( !isXML ) {

\t\t\t\t// Avoid an infinite loop by temporarily removing this function from the getter
\t\t\t\thandle = attrHandle[ lowercaseName ];
\t\t\t\tattrHandle[ lowercaseName ] = ret;
\t\t\t\tret = getter( elem, name, isXML ) != null ?
\t\t\t\t\tlowercaseName :
\t\t\t\t\tnull;
\t\t\t\tattrHandle[ lowercaseName ] = handle;
\t\t\t}
\t\t\treturn ret;
\t\t};
\t} );




\tvar rfocusable = /^(?:input|select|textarea|button)\$/i,
\t\trclickable = /^(?:a|area)\$/i;

\tjQuery.fn.extend( {
\t\tprop: function( name, value ) {
\t\t\treturn access( this, jQuery.prop, name, value, arguments.length > 1 );
\t\t},

\t\tremoveProp: function( name ) {
\t\t\treturn this.each( function() {
\t\t\t\tdelete this[ jQuery.propFix[ name ] || name ];
\t\t\t} );
\t\t}
\t} );

\tjQuery.extend( {
\t\tprop: function( elem, name, value ) {
\t\t\tvar ret, hooks,
\t\t\t\tnType = elem.nodeType;

\t\t\t// Don't get/set properties on text, comment and attribute nodes
\t\t\tif ( nType === 3 || nType === 8 || nType === 2 ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {

\t\t\t\t// Fix name and attach hooks
\t\t\t\tname = jQuery.propFix[ name ] || name;
\t\t\t\thooks = jQuery.propHooks[ name ];
\t\t\t}

\t\t\tif ( value !== undefined ) {
\t\t\t\tif ( hooks && \"set\" in hooks &&
\t\t\t\t\t( ret = hooks.set( elem, value, name ) ) !== undefined ) {
\t\t\t\t\treturn ret;
\t\t\t\t}

\t\t\t\treturn ( elem[ name ] = value );
\t\t\t}

\t\t\tif ( hooks && \"get\" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
\t\t\t\treturn ret;
\t\t\t}

\t\t\treturn elem[ name ];
\t\t},

\t\tpropHooks: {
\t\t\ttabIndex: {
\t\t\t\tget: function( elem ) {

\t\t\t\t\t// Support: IE <=9 - 11 only
\t\t\t\t\t// elem.tabIndex doesn't always return the
\t\t\t\t\t// correct value when it hasn't been explicitly set
\t\t\t\t\t// https://web.archive.org/web/20141116233347/http://fluidproject.org/blog/2008/01/09/getting-setting-and-removing-tabindex-values-with-javascript/
\t\t\t\t\t// Use proper attribute retrieval(#12072)
\t\t\t\t\tvar tabindex = jQuery.find.attr( elem, \"tabindex\" );

\t\t\t\t\tif ( tabindex ) {
\t\t\t\t\t\treturn parseInt( tabindex, 10 );
\t\t\t\t\t}

\t\t\t\t\tif (
\t\t\t\t\t\trfocusable.test( elem.nodeName ) ||
\t\t\t\t\t\trclickable.test( elem.nodeName ) &&
\t\t\t\t\t\telem.href
\t\t\t\t\t) {
\t\t\t\t\t\treturn 0;
\t\t\t\t\t}

\t\t\t\t\treturn -1;
\t\t\t\t}
\t\t\t}
\t\t},

\t\tpropFix: {
\t\t\t\"for\": \"htmlFor\",
\t\t\t\"class\": \"className\"
\t\t}
\t} );

// Support: IE <=11 only
// Accessing the selectedIndex property
// forces the browser to respect setting selected
// on the option
// The getter ensures a default option is selected
// when in an optgroup
// eslint rule \"no-unused-expressions\" is disabled for this code
// since it considers such accessions noop
\tif ( !support.optSelected ) {
\t\tjQuery.propHooks.selected = {
\t\t\tget: function( elem ) {

\t\t\t\t/* eslint no-unused-expressions: \"off\" */

\t\t\t\tvar parent = elem.parentNode;
\t\t\t\tif ( parent && parent.parentNode ) {
\t\t\t\t\tparent.parentNode.selectedIndex;
\t\t\t\t}
\t\t\t\treturn null;
\t\t\t},
\t\t\tset: function( elem ) {

\t\t\t\t/* eslint no-unused-expressions: \"off\" */

\t\t\t\tvar parent = elem.parentNode;
\t\t\t\tif ( parent ) {
\t\t\t\t\tparent.selectedIndex;

\t\t\t\t\tif ( parent.parentNode ) {
\t\t\t\t\t\tparent.parentNode.selectedIndex;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t};
\t}

\tjQuery.each( [
\t\t\"tabIndex\",
\t\t\"readOnly\",
\t\t\"maxLength\",
\t\t\"cellSpacing\",
\t\t\"cellPadding\",
\t\t\"rowSpan\",
\t\t\"colSpan\",
\t\t\"useMap\",
\t\t\"frameBorder\",
\t\t\"contentEditable\"
\t], function() {
\t\tjQuery.propFix[ this.toLowerCase() ] = this;
\t} );




\t// Strip and collapse whitespace according to HTML spec
\t// https://infra.spec.whatwg.org/#strip-and-collapse-ascii-whitespace
\tfunction stripAndCollapse( value ) {
\t\tvar tokens = value.match( rnothtmlwhite ) || [];
\t\treturn tokens.join( \" \" );
\t}


\tfunction getClass( elem ) {
\t\treturn elem.getAttribute && elem.getAttribute( \"class\" ) || \"\";
\t}

\tfunction classesToArray( value ) {
\t\tif ( Array.isArray( value ) ) {
\t\t\treturn value;
\t\t}
\t\tif ( typeof value === \"string\" ) {
\t\t\treturn value.match( rnothtmlwhite ) || [];
\t\t}
\t\treturn [];
\t}

\tjQuery.fn.extend( {
\t\taddClass: function( value ) {
\t\t\tvar classes, elem, cur, curValue, clazz, j, finalValue,
\t\t\t\ti = 0;

\t\t\tif ( isFunction( value ) ) {
\t\t\t\treturn this.each( function( j ) {
\t\t\t\t\tjQuery( this ).addClass( value.call( this, j, getClass( this ) ) );
\t\t\t\t} );
\t\t\t}

\t\t\tclasses = classesToArray( value );

\t\t\tif ( classes.length ) {
\t\t\t\twhile ( ( elem = this[ i++ ] ) ) {
\t\t\t\t\tcurValue = getClass( elem );
\t\t\t\t\tcur = elem.nodeType === 1 && ( \" \" + stripAndCollapse( curValue ) + \" \" );

\t\t\t\t\tif ( cur ) {
\t\t\t\t\t\tj = 0;
\t\t\t\t\t\twhile ( ( clazz = classes[ j++ ] ) ) {
\t\t\t\t\t\t\tif ( cur.indexOf( \" \" + clazz + \" \" ) < 0 ) {
\t\t\t\t\t\t\t\tcur += clazz + \" \";
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t// Only assign if different to avoid unneeded rendering.
\t\t\t\t\t\tfinalValue = stripAndCollapse( cur );
\t\t\t\t\t\tif ( curValue !== finalValue ) {
\t\t\t\t\t\t\telem.setAttribute( \"class\", finalValue );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\treturn this;
\t\t},

\t\tremoveClass: function( value ) {
\t\t\tvar classes, elem, cur, curValue, clazz, j, finalValue,
\t\t\t\ti = 0;

\t\t\tif ( isFunction( value ) ) {
\t\t\t\treturn this.each( function( j ) {
\t\t\t\t\tjQuery( this ).removeClass( value.call( this, j, getClass( this ) ) );
\t\t\t\t} );
\t\t\t}

\t\t\tif ( !arguments.length ) {
\t\t\t\treturn this.attr( \"class\", \"\" );
\t\t\t}

\t\t\tclasses = classesToArray( value );

\t\t\tif ( classes.length ) {
\t\t\t\twhile ( ( elem = this[ i++ ] ) ) {
\t\t\t\t\tcurValue = getClass( elem );

\t\t\t\t\t// This expression is here for better compressibility (see addClass)
\t\t\t\t\tcur = elem.nodeType === 1 && ( \" \" + stripAndCollapse( curValue ) + \" \" );

\t\t\t\t\tif ( cur ) {
\t\t\t\t\t\tj = 0;
\t\t\t\t\t\twhile ( ( clazz = classes[ j++ ] ) ) {

\t\t\t\t\t\t\t// Remove *all* instances
\t\t\t\t\t\t\twhile ( cur.indexOf( \" \" + clazz + \" \" ) > -1 ) {
\t\t\t\t\t\t\t\tcur = cur.replace( \" \" + clazz + \" \", \" \" );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t// Only assign if different to avoid unneeded rendering.
\t\t\t\t\t\tfinalValue = stripAndCollapse( cur );
\t\t\t\t\t\tif ( curValue !== finalValue ) {
\t\t\t\t\t\t\telem.setAttribute( \"class\", finalValue );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\treturn this;
\t\t},

\t\ttoggleClass: function( value, stateVal ) {
\t\t\tvar type = typeof value,
\t\t\t\tisValidValue = type === \"string\" || Array.isArray( value );

\t\t\tif ( typeof stateVal === \"boolean\" && isValidValue ) {
\t\t\t\treturn stateVal ? this.addClass( value ) : this.removeClass( value );
\t\t\t}

\t\t\tif ( isFunction( value ) ) {
\t\t\t\treturn this.each( function( i ) {
\t\t\t\t\tjQuery( this ).toggleClass(
\t\t\t\t\t\tvalue.call( this, i, getClass( this ), stateVal ),
\t\t\t\t\t\tstateVal
\t\t\t\t\t);
\t\t\t\t} );
\t\t\t}

\t\t\treturn this.each( function() {
\t\t\t\tvar className, i, self, classNames;

\t\t\t\tif ( isValidValue ) {

\t\t\t\t\t// Toggle individual class names
\t\t\t\t\ti = 0;
\t\t\t\t\tself = jQuery( this );
\t\t\t\t\tclassNames = classesToArray( value );

\t\t\t\t\twhile ( ( className = classNames[ i++ ] ) ) {

\t\t\t\t\t\t// Check each className given, space separated list
\t\t\t\t\t\tif ( self.hasClass( className ) ) {
\t\t\t\t\t\t\tself.removeClass( className );
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tself.addClass( className );
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Toggle whole class name
\t\t\t\t} else if ( value === undefined || type === \"boolean\" ) {
\t\t\t\t\tclassName = getClass( this );
\t\t\t\t\tif ( className ) {

\t\t\t\t\t\t// Store className if set
\t\t\t\t\t\tdataPriv.set( this, \"__className__\", className );
\t\t\t\t\t}

\t\t\t\t\t// If the element has a class name or if we're passed `false`,
\t\t\t\t\t// then remove the whole classname (if there was one, the above saved it).
\t\t\t\t\t// Otherwise bring back whatever was previously saved (if anything),
\t\t\t\t\t// falling back to the empty string if nothing was stored.
\t\t\t\t\tif ( this.setAttribute ) {
\t\t\t\t\t\tthis.setAttribute( \"class\",
\t\t\t\t\t\t\tclassName || value === false ?
\t\t\t\t\t\t\t\t\"\" :
\t\t\t\t\t\t\t\tdataPriv.get( this, \"__className__\" ) || \"\"
\t\t\t\t\t\t);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} );
\t\t},

\t\thasClass: function( selector ) {
\t\t\tvar className, elem,
\t\t\t\ti = 0;

\t\t\tclassName = \" \" + selector + \" \";
\t\t\twhile ( ( elem = this[ i++ ] ) ) {
\t\t\t\tif ( elem.nodeType === 1 &&
\t\t\t\t\t( \" \" + stripAndCollapse( getClass( elem ) ) + \" \" ).indexOf( className ) > -1 ) {
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}

\t\t\treturn false;
\t\t}
\t} );




\tvar rreturn = /\\r/g;

\tjQuery.fn.extend( {
\t\tval: function( value ) {
\t\t\tvar hooks, ret, valueIsFunction,
\t\t\t\telem = this[ 0 ];

\t\t\tif ( !arguments.length ) {
\t\t\t\tif ( elem ) {
\t\t\t\t\thooks = jQuery.valHooks[ elem.type ] ||
\t\t\t\t\t\tjQuery.valHooks[ elem.nodeName.toLowerCase() ];

\t\t\t\t\tif ( hooks &&
\t\t\t\t\t\t\"get\" in hooks &&
\t\t\t\t\t\t( ret = hooks.get( elem, \"value\" ) ) !== undefined
\t\t\t\t\t) {
\t\t\t\t\t\treturn ret;
\t\t\t\t\t}

\t\t\t\t\tret = elem.value;

\t\t\t\t\t// Handle most common string cases
\t\t\t\t\tif ( typeof ret === \"string\" ) {
\t\t\t\t\t\treturn ret.replace( rreturn, \"\" );
\t\t\t\t\t}

\t\t\t\t\t// Handle cases where value is null/undef or number
\t\t\t\t\treturn ret == null ? \"\" : ret;
\t\t\t\t}

\t\t\t\treturn;
\t\t\t}

\t\t\tvalueIsFunction = isFunction( value );

\t\t\treturn this.each( function( i ) {
\t\t\t\tvar val;

\t\t\t\tif ( this.nodeType !== 1 ) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tif ( valueIsFunction ) {
\t\t\t\t\tval = value.call( this, i, jQuery( this ).val() );
\t\t\t\t} else {
\t\t\t\t\tval = value;
\t\t\t\t}

\t\t\t\t// Treat null/undefined as \"\"; convert numbers to string
\t\t\t\tif ( val == null ) {
\t\t\t\t\tval = \"\";

\t\t\t\t} else if ( typeof val === \"number\" ) {
\t\t\t\t\tval += \"\";

\t\t\t\t} else if ( Array.isArray( val ) ) {
\t\t\t\t\tval = jQuery.map( val, function( value ) {
\t\t\t\t\t\treturn value == null ? \"\" : value + \"\";
\t\t\t\t\t} );
\t\t\t\t}

\t\t\t\thooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];

\t\t\t\t// If set returns undefined, fall back to normal setting
\t\t\t\tif ( !hooks || !( \"set\" in hooks ) || hooks.set( this, val, \"value\" ) === undefined ) {
\t\t\t\t\tthis.value = val;
\t\t\t\t}
\t\t\t} );
\t\t}
\t} );

\tjQuery.extend( {
\t\tvalHooks: {
\t\t\toption: {
\t\t\t\tget: function( elem ) {

\t\t\t\t\tvar val = jQuery.find.attr( elem, \"value\" );
\t\t\t\t\treturn val != null ?
\t\t\t\t\t\tval :

\t\t\t\t\t\t// Support: IE <=10 - 11 only
\t\t\t\t\t\t// option.text throws exceptions (#14686, #14858)
\t\t\t\t\t\t// Strip and collapse whitespace
\t\t\t\t\t\t// https://html.spec.whatwg.org/#strip-and-collapse-whitespace
\t\t\t\t\t\tstripAndCollapse( jQuery.text( elem ) );
\t\t\t\t}
\t\t\t},
\t\t\tselect: {
\t\t\t\tget: function( elem ) {
\t\t\t\t\tvar value, option, i,
\t\t\t\t\t\toptions = elem.options,
\t\t\t\t\t\tindex = elem.selectedIndex,
\t\t\t\t\t\tone = elem.type === \"select-one\",
\t\t\t\t\t\tvalues = one ? null : [],
\t\t\t\t\t\tmax = one ? index + 1 : options.length;

\t\t\t\t\tif ( index < 0 ) {
\t\t\t\t\t\ti = max;

\t\t\t\t\t} else {
\t\t\t\t\t\ti = one ? index : 0;
\t\t\t\t\t}

\t\t\t\t\t// Loop through all the selected options
\t\t\t\t\tfor ( ; i < max; i++ ) {
\t\t\t\t\t\toption = options[ i ];

\t\t\t\t\t\t// Support: IE <=9 only
\t\t\t\t\t\t// IE8-9 doesn't update selected after form reset (#2551)
\t\t\t\t\t\tif ( ( option.selected || i === index ) &&

\t\t\t\t\t\t\t// Don't return options that are disabled or in a disabled optgroup
\t\t\t\t\t\t\t!option.disabled &&
\t\t\t\t\t\t\t( !option.parentNode.disabled ||
\t\t\t\t\t\t\t\t!nodeName( option.parentNode, \"optgroup\" ) ) ) {

\t\t\t\t\t\t\t// Get the specific value for the option
\t\t\t\t\t\t\tvalue = jQuery( option ).val();

\t\t\t\t\t\t\t// We don't need an array for one selects
\t\t\t\t\t\t\tif ( one ) {
\t\t\t\t\t\t\t\treturn value;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t// Multi-Selects return an array
\t\t\t\t\t\t\tvalues.push( value );
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\treturn values;
\t\t\t\t},

\t\t\t\tset: function( elem, value ) {
\t\t\t\t\tvar optionSet, option,
\t\t\t\t\t\toptions = elem.options,
\t\t\t\t\t\tvalues = jQuery.makeArray( value ),
\t\t\t\t\t\ti = options.length;

\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\toption = options[ i ];

\t\t\t\t\t\t/* eslint-disable no-cond-assign */

\t\t\t\t\t\tif ( option.selected =
\t\t\t\t\t\t\tjQuery.inArray( jQuery.valHooks.option.get( option ), values ) > -1
\t\t\t\t\t\t) {
\t\t\t\t\t\t\toptionSet = true;
\t\t\t\t\t\t}

\t\t\t\t\t\t/* eslint-enable no-cond-assign */
\t\t\t\t\t}

\t\t\t\t\t// Force browsers to behave consistently when non-matching value is set
\t\t\t\t\tif ( !optionSet ) {
\t\t\t\t\t\telem.selectedIndex = -1;
\t\t\t\t\t}
\t\t\t\t\treturn values;
\t\t\t\t}
\t\t\t}
\t\t}
\t} );

// Radios and checkboxes getter/setter
\tjQuery.each( [ \"radio\", \"checkbox\" ], function() {
\t\tjQuery.valHooks[ this ] = {
\t\t\tset: function( elem, value ) {
\t\t\t\tif ( Array.isArray( value ) ) {
\t\t\t\t\treturn ( elem.checked = jQuery.inArray( jQuery( elem ).val(), value ) > -1 );
\t\t\t\t}
\t\t\t}
\t\t};
\t\tif ( !support.checkOn ) {
\t\t\tjQuery.valHooks[ this ].get = function( elem ) {
\t\t\t\treturn elem.getAttribute( \"value\" ) === null ? \"on\" : elem.value;
\t\t\t};
\t\t}
\t} );




// Return jQuery for attributes-only inclusion


\tsupport.focusin = \"onfocusin\" in window;


\tvar rfocusMorph = /^(?:focusinfocus|focusoutblur)\$/,
\t\tstopPropagationCallback = function( e ) {
\t\t\te.stopPropagation();
\t\t};

\tjQuery.extend( jQuery.event, {

\t\ttrigger: function( event, data, elem, onlyHandlers ) {

\t\t\tvar i, cur, tmp, bubbleType, ontype, handle, special, lastElement,
\t\t\t\teventPath = [ elem || document ],
\t\t\t\ttype = hasOwn.call( event, \"type\" ) ? event.type : event,
\t\t\t\tnamespaces = hasOwn.call( event, \"namespace\" ) ? event.namespace.split( \".\" ) : [];

\t\t\tcur = lastElement = tmp = elem = elem || document;

\t\t\t// Don't do events on text and comment nodes
\t\t\tif ( elem.nodeType === 3 || elem.nodeType === 8 ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// focus/blur morphs to focusin/out; ensure we're not firing them right now
\t\t\tif ( rfocusMorph.test( type + jQuery.event.triggered ) ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( type.indexOf( \".\" ) > -1 ) {

\t\t\t\t// Namespaced trigger; create a regexp to match event type in handle()
\t\t\t\tnamespaces = type.split( \".\" );
\t\t\t\ttype = namespaces.shift();
\t\t\t\tnamespaces.sort();
\t\t\t}
\t\t\tontype = type.indexOf( \":\" ) < 0 && \"on\" + type;

\t\t\t// Caller can pass in a jQuery.Event object, Object, or just an event type string
\t\t\tevent = event[ jQuery.expando ] ?
\t\t\t\tevent :
\t\t\t\tnew jQuery.Event( type, typeof event === \"object\" && event );

\t\t\t// Trigger bitmask: & 1 for native handlers; & 2 for jQuery (always true)
\t\t\tevent.isTrigger = onlyHandlers ? 2 : 3;
\t\t\tevent.namespace = namespaces.join( \".\" );
\t\t\tevent.rnamespace = event.namespace ?
\t\t\t\tnew RegExp( \"(^|\\\\.)\" + namespaces.join( \"\\\\.(?:.*\\\\.|)\" ) + \"(\\\\.|\$)\" ) :
\t\t\t\tnull;

\t\t\t// Clean up the event in case it is being reused
\t\t\tevent.result = undefined;
\t\t\tif ( !event.target ) {
\t\t\t\tevent.target = elem;
\t\t\t}

\t\t\t// Clone any incoming data and prepend the event, creating the handler arg list
\t\t\tdata = data == null ?
\t\t\t\t[ event ] :
\t\t\t\tjQuery.makeArray( data, [ event ] );

\t\t\t// Allow special events to draw outside the lines
\t\t\tspecial = jQuery.event.special[ type ] || {};
\t\t\tif ( !onlyHandlers && special.trigger && special.trigger.apply( elem, data ) === false ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// Determine event propagation path in advance, per W3C events spec (#9951)
\t\t\t// Bubble up to document, then to window; watch for a global ownerDocument var (#9724)
\t\t\tif ( !onlyHandlers && !special.noBubble && !isWindow( elem ) ) {

\t\t\t\tbubbleType = special.delegateType || type;
\t\t\t\tif ( !rfocusMorph.test( bubbleType + type ) ) {
\t\t\t\t\tcur = cur.parentNode;
\t\t\t\t}
\t\t\t\tfor ( ; cur; cur = cur.parentNode ) {
\t\t\t\t\teventPath.push( cur );
\t\t\t\t\ttmp = cur;
\t\t\t\t}

\t\t\t\t// Only add window if we got to document (e.g., not plain obj or detached DOM)
\t\t\t\tif ( tmp === ( elem.ownerDocument || document ) ) {
\t\t\t\t\teventPath.push( tmp.defaultView || tmp.parentWindow || window );
\t\t\t\t}
\t\t\t}

\t\t\t// Fire handlers on the event path
\t\t\ti = 0;
\t\t\twhile ( ( cur = eventPath[ i++ ] ) && !event.isPropagationStopped() ) {
\t\t\t\tlastElement = cur;
\t\t\t\tevent.type = i > 1 ?
\t\t\t\t\tbubbleType :
\t\t\t\t\tspecial.bindType || type;

\t\t\t\t// jQuery handler
\t\t\t\thandle = ( dataPriv.get( cur, \"events\" ) || {} )[ event.type ] &&
\t\t\t\t\tdataPriv.get( cur, \"handle\" );
\t\t\t\tif ( handle ) {
\t\t\t\t\thandle.apply( cur, data );
\t\t\t\t}

\t\t\t\t// Native handler
\t\t\t\thandle = ontype && cur[ ontype ];
\t\t\t\tif ( handle && handle.apply && acceptData( cur ) ) {
\t\t\t\t\tevent.result = handle.apply( cur, data );
\t\t\t\t\tif ( event.result === false ) {
\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tevent.type = type;

\t\t\t// If nobody prevented the default action, do it now
\t\t\tif ( !onlyHandlers && !event.isDefaultPrevented() ) {

\t\t\t\tif ( ( !special._default ||
\t\t\t\t\tspecial._default.apply( eventPath.pop(), data ) === false ) &&
\t\t\t\t\tacceptData( elem ) ) {

\t\t\t\t\t// Call a native DOM method on the target with the same name as the event.
\t\t\t\t\t// Don't do default actions on window, that's where global variables be (#6170)
\t\t\t\t\tif ( ontype && isFunction( elem[ type ] ) && !isWindow( elem ) ) {

\t\t\t\t\t\t// Don't re-trigger an onFOO event when we call its FOO() method
\t\t\t\t\t\ttmp = elem[ ontype ];

\t\t\t\t\t\tif ( tmp ) {
\t\t\t\t\t\t\telem[ ontype ] = null;
\t\t\t\t\t\t}

\t\t\t\t\t\t// Prevent re-triggering of the same event, since we already bubbled it above
\t\t\t\t\t\tjQuery.event.triggered = type;

\t\t\t\t\t\tif ( event.isPropagationStopped() ) {
\t\t\t\t\t\t\tlastElement.addEventListener( type, stopPropagationCallback );
\t\t\t\t\t\t}

\t\t\t\t\t\telem[ type ]();

\t\t\t\t\t\tif ( event.isPropagationStopped() ) {
\t\t\t\t\t\t\tlastElement.removeEventListener( type, stopPropagationCallback );
\t\t\t\t\t\t}

\t\t\t\t\t\tjQuery.event.triggered = undefined;

\t\t\t\t\t\tif ( tmp ) {
\t\t\t\t\t\t\telem[ ontype ] = tmp;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\treturn event.result;
\t\t},

\t\t// Piggyback on a donor event to simulate a different one
\t\t// Used only for `focus(in | out)` events
\t\tsimulate: function( type, elem, event ) {
\t\t\tvar e = jQuery.extend(
\t\t\t\tnew jQuery.Event(),
\t\t\t\tevent,
\t\t\t\t{
\t\t\t\t\ttype: type,
\t\t\t\t\tisSimulated: true
\t\t\t\t}
\t\t\t);

\t\t\tjQuery.event.trigger( e, null, elem );
\t\t}

\t} );

\tjQuery.fn.extend( {

\t\ttrigger: function( type, data ) {
\t\t\treturn this.each( function() {
\t\t\t\tjQuery.event.trigger( type, data, this );
\t\t\t} );
\t\t},
\t\ttriggerHandler: function( type, data ) {
\t\t\tvar elem = this[ 0 ];
\t\t\tif ( elem ) {
\t\t\t\treturn jQuery.event.trigger( type, data, elem, true );
\t\t\t}
\t\t}
\t} );


// Support: Firefox <=44
// Firefox doesn't have focus(in | out) events
// Related ticket - https://bugzilla.mozilla.org/show_bug.cgi?id=687787
//
// Support: Chrome <=48 - 49, Safari <=9.0 - 9.1
// focus(in | out) events fire after focus & blur events,
// which is spec violation - http://www.w3.org/TR/DOM-Level-3-Events/#events-focusevent-event-order
// Related ticket - https://bugs.chromium.org/p/chromium/issues/detail?id=449857
\tif ( !support.focusin ) {
\t\tjQuery.each( { focus: \"focusin\", blur: \"focusout\" }, function( orig, fix ) {

\t\t\t// Attach a single capturing handler on the document while someone wants focusin/focusout
\t\t\tvar handler = function( event ) {
\t\t\t\tjQuery.event.simulate( fix, event.target, jQuery.event.fix( event ) );
\t\t\t};

\t\t\tjQuery.event.special[ fix ] = {
\t\t\t\tsetup: function() {
\t\t\t\t\tvar doc = this.ownerDocument || this,
\t\t\t\t\t\tattaches = dataPriv.access( doc, fix );

\t\t\t\t\tif ( !attaches ) {
\t\t\t\t\t\tdoc.addEventListener( orig, handler, true );
\t\t\t\t\t}
\t\t\t\t\tdataPriv.access( doc, fix, ( attaches || 0 ) + 1 );
\t\t\t\t},
\t\t\t\tteardown: function() {
\t\t\t\t\tvar doc = this.ownerDocument || this,
\t\t\t\t\t\tattaches = dataPriv.access( doc, fix ) - 1;

\t\t\t\t\tif ( !attaches ) {
\t\t\t\t\t\tdoc.removeEventListener( orig, handler, true );
\t\t\t\t\t\tdataPriv.remove( doc, fix );

\t\t\t\t\t} else {
\t\t\t\t\t\tdataPriv.access( doc, fix, attaches );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t};
\t\t} );
\t}
\tvar location = window.location;

\tvar nonce = Date.now();

\tvar rquery = ( /\\?/ );



// Cross-browser xml parsing
\tjQuery.parseXML = function( data ) {
\t\tvar xml;
\t\tif ( !data || typeof data !== \"string\" ) {
\t\t\treturn null;
\t\t}

\t\t// Support: IE 9 - 11 only
\t\t// IE throws on parseFromString with invalid input.
\t\ttry {
\t\t\txml = ( new window.DOMParser() ).parseFromString( data, \"text/xml\" );
\t\t} catch ( e ) {
\t\t\txml = undefined;
\t\t}

\t\tif ( !xml || xml.getElementsByTagName( \"parsererror\" ).length ) {
\t\t\tjQuery.error( \"Invalid XML: \" + data );
\t\t}
\t\treturn xml;
\t};


\tvar
\t\trbracket = /\\[\\]\$/,
\t\trCRLF = /\\r?\\n/g,
\t\trsubmitterTypes = /^(?:submit|button|image|reset|file)\$/i,
\t\trsubmittable = /^(?:input|select|textarea|keygen)/i;

\tfunction buildParams( prefix, obj, traditional, add ) {
\t\tvar name;

\t\tif ( Array.isArray( obj ) ) {

\t\t\t// Serialize array item.
\t\t\tjQuery.each( obj, function( i, v ) {
\t\t\t\tif ( traditional || rbracket.test( prefix ) ) {

\t\t\t\t\t// Treat each array item as a scalar.
\t\t\t\t\tadd( prefix, v );

\t\t\t\t} else {

\t\t\t\t\t// Item is non-scalar (array or object), encode its numeric index.
\t\t\t\t\tbuildParams(
\t\t\t\t\t\tprefix + \"[\" + ( typeof v === \"object\" && v != null ? i : \"\" ) + \"]\",
\t\t\t\t\t\tv,
\t\t\t\t\t\ttraditional,
\t\t\t\t\t\tadd
\t\t\t\t\t);
\t\t\t\t}
\t\t\t} );

\t\t} else if ( !traditional && toType( obj ) === \"object\" ) {

\t\t\t// Serialize object item.
\t\t\tfor ( name in obj ) {
\t\t\t\tbuildParams( prefix + \"[\" + name + \"]\", obj[ name ], traditional, add );
\t\t\t}

\t\t} else {

\t\t\t// Serialize scalar item.
\t\t\tadd( prefix, obj );
\t\t}
\t}

// Serialize an array of form elements or a set of
// key/values into a query string
\tjQuery.param = function( a, traditional ) {
\t\tvar prefix,
\t\t\ts = [],
\t\t\tadd = function( key, valueOrFunction ) {

\t\t\t\t// If value is a function, invoke it and use its return value
\t\t\t\tvar value = isFunction( valueOrFunction ) ?
\t\t\t\t\tvalueOrFunction() :
\t\t\t\t\tvalueOrFunction;

\t\t\t\ts[ s.length ] = encodeURIComponent( key ) + \"=\" +
\t\t\t\t\tencodeURIComponent( value == null ? \"\" : value );
\t\t\t};

\t\t// If an array was passed in, assume that it is an array of form elements.
\t\tif ( Array.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {

\t\t\t// Serialize the form elements
\t\t\tjQuery.each( a, function() {
\t\t\t\tadd( this.name, this.value );
\t\t\t} );

\t\t} else {

\t\t\t// If traditional, encode the \"old\" way (the way 1.3.2 or older
\t\t\t// did it), otherwise encode params recursively.
\t\t\tfor ( prefix in a ) {
\t\t\t\tbuildParams( prefix, a[ prefix ], traditional, add );
\t\t\t}
\t\t}

\t\t// Return the resulting serialization
\t\treturn s.join( \"&\" );
\t};

\tjQuery.fn.extend( {
\t\tserialize: function() {
\t\t\treturn jQuery.param( this.serializeArray() );
\t\t},
\t\tserializeArray: function() {
\t\t\treturn this.map( function() {

\t\t\t\t// Can add propHook for \"elements\" to filter or add form elements
\t\t\t\tvar elements = jQuery.prop( this, \"elements\" );
\t\t\t\treturn elements ? jQuery.makeArray( elements ) : this;
\t\t\t} )
\t\t\t\t.filter( function() {
\t\t\t\t\tvar type = this.type;

\t\t\t\t\t// Use .is( \":disabled\" ) so that fieldset[disabled] works
\t\t\t\t\treturn this.name && !jQuery( this ).is( \":disabled\" ) &&
\t\t\t\t\t\trsubmittable.test( this.nodeName ) && !rsubmitterTypes.test( type ) &&
\t\t\t\t\t\t( this.checked || !rcheckableType.test( type ) );
\t\t\t\t} )
\t\t\t\t.map( function( i, elem ) {
\t\t\t\t\tvar val = jQuery( this ).val();

\t\t\t\t\tif ( val == null ) {
\t\t\t\t\t\treturn null;
\t\t\t\t\t}

\t\t\t\t\tif ( Array.isArray( val ) ) {
\t\t\t\t\t\treturn jQuery.map( val, function( val ) {
\t\t\t\t\t\t\treturn { name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t\t\t\t\t} );
\t\t\t\t\t}

\t\t\t\t\treturn { name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t\t\t} ).get();
\t\t}
\t} );


\tvar
\t\tr20 = /%20/g,
\t\trhash = /#.*\$/,
\t\trantiCache = /([?&])_=[^&]*/,
\t\trheaders = /^(.*?):[ \\t]*([^\\r\\n]*)\$/mg,

\t\t// #7653, #8125, #8152: local protocol detection
\t\trlocalProtocol = /^(?:about|app|app-storage|.+-extension|file|res|widget):\$/,
\t\trnoContent = /^(?:GET|HEAD)\$/,
\t\trprotocol = /^\\/\\//,

\t\t/* Prefilters
\t * 1) They are useful to introduce custom dataTypes (see ajax/jsonp.js for an example)
\t * 2) These are called:
\t *    - BEFORE asking for a transport
\t *    - AFTER param serialization (s.data is a string if s.processData is true)
\t * 3) key is the dataType
\t * 4) the catchall symbol \"*\" can be used
\t * 5) execution will start with transport dataType and THEN continue down to \"*\" if needed
\t */
\t\tprefilters = {},

\t\t/* Transports bindings
\t * 1) key is the dataType
\t * 2) the catchall symbol \"*\" can be used
\t * 3) selection will start with transport dataType and THEN go to \"*\" if needed
\t */
\t\ttransports = {},

\t\t// Avoid comment-prolog char sequence (#10098); must appease lint and evade compression
\t\tallTypes = \"*/\".concat( \"*\" ),

\t\t// Anchor tag for parsing the document origin
\t\toriginAnchor = document.createElement( \"a\" );
\toriginAnchor.href = location.href;

// Base \"constructor\" for jQuery.ajaxPrefilter and jQuery.ajaxTransport
\tfunction addToPrefiltersOrTransports( structure ) {

\t\t// dataTypeExpression is optional and defaults to \"*\"
\t\treturn function( dataTypeExpression, func ) {

\t\t\tif ( typeof dataTypeExpression !== \"string\" ) {
\t\t\t\tfunc = dataTypeExpression;
\t\t\t\tdataTypeExpression = \"*\";
\t\t\t}

\t\t\tvar dataType,
\t\t\t\ti = 0,
\t\t\t\tdataTypes = dataTypeExpression.toLowerCase().match( rnothtmlwhite ) || [];

\t\t\tif ( isFunction( func ) ) {

\t\t\t\t// For each dataType in the dataTypeExpression
\t\t\t\twhile ( ( dataType = dataTypes[ i++ ] ) ) {

\t\t\t\t\t// Prepend if requested
\t\t\t\t\tif ( dataType[ 0 ] === \"+\" ) {
\t\t\t\t\t\tdataType = dataType.slice( 1 ) || \"*\";
\t\t\t\t\t\t( structure[ dataType ] = structure[ dataType ] || [] ).unshift( func );

\t\t\t\t\t\t// Otherwise append
\t\t\t\t\t} else {
\t\t\t\t\t\t( structure[ dataType ] = structure[ dataType ] || [] ).push( func );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t};
\t}

// Base inspection function for prefilters and transports
\tfunction inspectPrefiltersOrTransports( structure, options, originalOptions, jqXHR ) {

\t\tvar inspected = {},
\t\t\tseekingTransport = ( structure === transports );

\t\tfunction inspect( dataType ) {
\t\t\tvar selected;
\t\t\tinspected[ dataType ] = true;
\t\t\tjQuery.each( structure[ dataType ] || [], function( _, prefilterOrFactory ) {
\t\t\t\tvar dataTypeOrTransport = prefilterOrFactory( options, originalOptions, jqXHR );
\t\t\t\tif ( typeof dataTypeOrTransport === \"string\" &&
\t\t\t\t\t!seekingTransport && !inspected[ dataTypeOrTransport ] ) {

\t\t\t\t\toptions.dataTypes.unshift( dataTypeOrTransport );
\t\t\t\t\tinspect( dataTypeOrTransport );
\t\t\t\t\treturn false;
\t\t\t\t} else if ( seekingTransport ) {
\t\t\t\t\treturn !( selected = dataTypeOrTransport );
\t\t\t\t}
\t\t\t} );
\t\t\treturn selected;
\t\t}

\t\treturn inspect( options.dataTypes[ 0 ] ) || !inspected[ \"*\" ] && inspect( \"*\" );
\t}

// A special extend for ajax options
// that takes \"flat\" options (not to be deep extended)
// Fixes #9887
\tfunction ajaxExtend( target, src ) {
\t\tvar key, deep,
\t\t\tflatOptions = jQuery.ajaxSettings.flatOptions || {};

\t\tfor ( key in src ) {
\t\t\tif ( src[ key ] !== undefined ) {
\t\t\t\t( flatOptions[ key ] ? target : ( deep || ( deep = {} ) ) )[ key ] = src[ key ];
\t\t\t}
\t\t}
\t\tif ( deep ) {
\t\t\tjQuery.extend( true, target, deep );
\t\t}

\t\treturn target;
\t}

\t/* Handles responses to an ajax request:
 * - finds the right dataType (mediates between content-type and expected dataType)
 * - returns the corresponding response
 */
\tfunction ajaxHandleResponses( s, jqXHR, responses ) {

\t\tvar ct, type, finalDataType, firstDataType,
\t\t\tcontents = s.contents,
\t\t\tdataTypes = s.dataTypes;

\t\t// Remove auto dataType and get content-type in the process
\t\twhile ( dataTypes[ 0 ] === \"*\" ) {
\t\t\tdataTypes.shift();
\t\t\tif ( ct === undefined ) {
\t\t\t\tct = s.mimeType || jqXHR.getResponseHeader( \"Content-Type\" );
\t\t\t}
\t\t}

\t\t// Check if we're dealing with a known content-type
\t\tif ( ct ) {
\t\t\tfor ( type in contents ) {
\t\t\t\tif ( contents[ type ] && contents[ type ].test( ct ) ) {
\t\t\t\t\tdataTypes.unshift( type );
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Check to see if we have a response for the expected dataType
\t\tif ( dataTypes[ 0 ] in responses ) {
\t\t\tfinalDataType = dataTypes[ 0 ];
\t\t} else {

\t\t\t// Try convertible dataTypes
\t\t\tfor ( type in responses ) {
\t\t\t\tif ( !dataTypes[ 0 ] || s.converters[ type + \" \" + dataTypes[ 0 ] ] ) {
\t\t\t\t\tfinalDataType = type;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tif ( !firstDataType ) {
\t\t\t\t\tfirstDataType = type;
\t\t\t\t}
\t\t\t}

\t\t\t// Or just use first one
\t\t\tfinalDataType = finalDataType || firstDataType;
\t\t}

\t\t// If we found a dataType
\t\t// We add the dataType to the list if needed
\t\t// and return the corresponding response
\t\tif ( finalDataType ) {
\t\t\tif ( finalDataType !== dataTypes[ 0 ] ) {
\t\t\t\tdataTypes.unshift( finalDataType );
\t\t\t}
\t\t\treturn responses[ finalDataType ];
\t\t}
\t}

\t/* Chain conversions given the request and the original response
 * Also sets the responseXXX fields on the jqXHR instance
 */
\tfunction ajaxConvert( s, response, jqXHR, isSuccess ) {
\t\tvar conv2, current, conv, tmp, prev,
\t\t\tconverters = {},

\t\t\t// Work with a copy of dataTypes in case we need to modify it for conversion
\t\t\tdataTypes = s.dataTypes.slice();

\t\t// Create converters map with lowercased keys
\t\tif ( dataTypes[ 1 ] ) {
\t\t\tfor ( conv in s.converters ) {
\t\t\t\tconverters[ conv.toLowerCase() ] = s.converters[ conv ];
\t\t\t}
\t\t}

\t\tcurrent = dataTypes.shift();

\t\t// Convert to each sequential dataType
\t\twhile ( current ) {

\t\t\tif ( s.responseFields[ current ] ) {
\t\t\t\tjqXHR[ s.responseFields[ current ] ] = response;
\t\t\t}

\t\t\t// Apply the dataFilter if provided
\t\t\tif ( !prev && isSuccess && s.dataFilter ) {
\t\t\t\tresponse = s.dataFilter( response, s.dataType );
\t\t\t}

\t\t\tprev = current;
\t\t\tcurrent = dataTypes.shift();

\t\t\tif ( current ) {

\t\t\t\t// There's only work to do if current dataType is non-auto
\t\t\t\tif ( current === \"*\" ) {

\t\t\t\t\tcurrent = prev;

\t\t\t\t\t// Convert response if prev dataType is non-auto and differs from current
\t\t\t\t} else if ( prev !== \"*\" && prev !== current ) {

\t\t\t\t\t// Seek a direct converter
\t\t\t\t\tconv = converters[ prev + \" \" + current ] || converters[ \"* \" + current ];

\t\t\t\t\t// If none found, seek a pair
\t\t\t\t\tif ( !conv ) {
\t\t\t\t\t\tfor ( conv2 in converters ) {

\t\t\t\t\t\t\t// If conv2 outputs current
\t\t\t\t\t\t\ttmp = conv2.split( \" \" );
\t\t\t\t\t\t\tif ( tmp[ 1 ] === current ) {

\t\t\t\t\t\t\t\t// If prev can be converted to accepted input
\t\t\t\t\t\t\t\tconv = converters[ prev + \" \" + tmp[ 0 ] ] ||
\t\t\t\t\t\t\t\t\tconverters[ \"* \" + tmp[ 0 ] ];
\t\t\t\t\t\t\t\tif ( conv ) {

\t\t\t\t\t\t\t\t\t// Condense equivalence converters
\t\t\t\t\t\t\t\t\tif ( conv === true ) {
\t\t\t\t\t\t\t\t\t\tconv = converters[ conv2 ];

\t\t\t\t\t\t\t\t\t\t// Otherwise, insert the intermediate dataType
\t\t\t\t\t\t\t\t\t} else if ( converters[ conv2 ] !== true ) {
\t\t\t\t\t\t\t\t\t\tcurrent = tmp[ 0 ];
\t\t\t\t\t\t\t\t\t\tdataTypes.unshift( tmp[ 1 ] );
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Apply converter (if not an equivalence)
\t\t\t\t\tif ( conv !== true ) {

\t\t\t\t\t\t// Unless errors are allowed to bubble, catch and return them
\t\t\t\t\t\tif ( conv && s.throws ) {
\t\t\t\t\t\t\tresponse = conv( response );
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\tresponse = conv( response );
\t\t\t\t\t\t\t} catch ( e ) {
\t\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\t\tstate: \"parsererror\",
\t\t\t\t\t\t\t\t\terror: conv ? e : \"No conversion from \" + prev + \" to \" + current
\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn { state: \"success\", data: response };
\t}

\tjQuery.extend( {

\t\t// Counter for holding the number of active queries
\t\tactive: 0,

\t\t// Last-Modified header cache for next request
\t\tlastModified: {},
\t\tetag: {},

\t\tajaxSettings: {
\t\t\turl: location.href,
\t\t\ttype: \"GET\",
\t\t\tisLocal: rlocalProtocol.test( location.protocol ),
\t\t\tglobal: true,
\t\t\tprocessData: true,
\t\t\tasync: true,
\t\t\tcontentType: \"application/x-www-form-urlencoded; charset=UTF-8\",

\t\t\t/*
\t\ttimeout: 0,
\t\tdata: null,
\t\tdataType: null,
\t\tusername: null,
\t\tpassword: null,
\t\tcache: null,
\t\tthrows: false,
\t\ttraditional: false,
\t\theaders: {},
\t\t*/

\t\t\taccepts: {
\t\t\t\t\"*\": allTypes,
\t\t\t\ttext: \"text/plain\",
\t\t\t\thtml: \"text/html\",
\t\t\t\txml: \"application/xml, text/xml\",
\t\t\t\tjson: \"application/json, text/javascript\"
\t\t\t},

\t\t\tcontents: {
\t\t\t\txml: /\\bxml\\b/,
\t\t\t\thtml: /\\bhtml/,
\t\t\t\tjson: /\\bjson\\b/
\t\t\t},

\t\t\tresponseFields: {
\t\t\t\txml: \"responseXML\",
\t\t\t\ttext: \"responseText\",
\t\t\t\tjson: \"responseJSON\"
\t\t\t},

\t\t\t// Data converters
\t\t\t// Keys separate source (or catchall \"*\") and destination types with a single space
\t\t\tconverters: {

\t\t\t\t// Convert anything to text
\t\t\t\t\"* text\": String,

\t\t\t\t// Text to html (true = no transformation)
\t\t\t\t\"text html\": true,

\t\t\t\t// Evaluate text as a json expression
\t\t\t\t\"text json\": JSON.parse,

\t\t\t\t// Parse text as xml
\t\t\t\t\"text xml\": jQuery.parseXML
\t\t\t},

\t\t\t// For options that shouldn't be deep extended:
\t\t\t// you can add your own custom options here if
\t\t\t// and when you create one that shouldn't be
\t\t\t// deep extended (see ajaxExtend)
\t\t\tflatOptions: {
\t\t\t\turl: true,
\t\t\t\tcontext: true
\t\t\t}
\t\t},

\t\t// Creates a full fledged settings object into target
\t\t// with both ajaxSettings and settings fields.
\t\t// If target is omitted, writes into ajaxSettings.
\t\tajaxSetup: function( target, settings ) {
\t\t\treturn settings ?

\t\t\t\t// Building a settings object
\t\t\t\tajaxExtend( ajaxExtend( target, jQuery.ajaxSettings ), settings ) :

\t\t\t\t// Extending ajaxSettings
\t\t\t\tajaxExtend( jQuery.ajaxSettings, target );
\t\t},

\t\tajaxPrefilter: addToPrefiltersOrTransports( prefilters ),
\t\tajaxTransport: addToPrefiltersOrTransports( transports ),

\t\t// Main method
\t\tajax: function( url, options ) {

\t\t\t// If url is an object, simulate pre-1.5 signature
\t\t\tif ( typeof url === \"object\" ) {
\t\t\t\toptions = url;
\t\t\t\turl = undefined;
\t\t\t}

\t\t\t// Force options to be an object
\t\t\toptions = options || {};

\t\t\tvar transport,

\t\t\t\t// URL without anti-cache param
\t\t\t\tcacheURL,

\t\t\t\t// Response headers
\t\t\t\tresponseHeadersString,
\t\t\t\tresponseHeaders,

\t\t\t\t// timeout handle
\t\t\t\ttimeoutTimer,

\t\t\t\t// Url cleanup var
\t\t\t\turlAnchor,

\t\t\t\t// Request state (becomes false upon send and true upon completion)
\t\t\t\tcompleted,

\t\t\t\t// To know if global events are to be dispatched
\t\t\t\tfireGlobals,

\t\t\t\t// Loop variable
\t\t\t\ti,

\t\t\t\t// uncached part of the url
\t\t\t\tuncached,

\t\t\t\t// Create the final options object
\t\t\t\ts = jQuery.ajaxSetup( {}, options ),

\t\t\t\t// Callbacks context
\t\t\t\tcallbackContext = s.context || s,

\t\t\t\t// Context for global events is callbackContext if it is a DOM node or jQuery collection
\t\t\t\tglobalEventContext = s.context &&
\t\t\t\t( callbackContext.nodeType || callbackContext.jquery ) ?
\t\t\t\t\tjQuery( callbackContext ) :
\t\t\t\t\tjQuery.event,

\t\t\t\t// Deferreds
\t\t\t\tdeferred = jQuery.Deferred(),
\t\t\t\tcompleteDeferred = jQuery.Callbacks( \"once memory\" ),

\t\t\t\t// Status-dependent callbacks
\t\t\t\tstatusCode = s.statusCode || {},

\t\t\t\t// Headers (they are sent all at once)
\t\t\t\trequestHeaders = {},
\t\t\t\trequestHeadersNames = {},

\t\t\t\t// Default abort message
\t\t\t\tstrAbort = \"canceled\",

\t\t\t\t// Fake xhr
\t\t\t\tjqXHR = {
\t\t\t\t\treadyState: 0,

\t\t\t\t\t// Builds headers hashtable if needed
\t\t\t\t\tgetResponseHeader: function( key ) {
\t\t\t\t\t\tvar match;
\t\t\t\t\t\tif ( completed ) {
\t\t\t\t\t\t\tif ( !responseHeaders ) {
\t\t\t\t\t\t\t\tresponseHeaders = {};
\t\t\t\t\t\t\t\twhile ( ( match = rheaders.exec( responseHeadersString ) ) ) {
\t\t\t\t\t\t\t\t\tresponseHeaders[ match[ 1 ].toLowerCase() ] = match[ 2 ];
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tmatch = responseHeaders[ key.toLowerCase() ];
\t\t\t\t\t\t}
\t\t\t\t\t\treturn match == null ? null : match;
\t\t\t\t\t},

\t\t\t\t\t// Raw string
\t\t\t\t\tgetAllResponseHeaders: function() {
\t\t\t\t\t\treturn completed ? responseHeadersString : null;
\t\t\t\t\t},

\t\t\t\t\t// Caches the header
\t\t\t\t\tsetRequestHeader: function( name, value ) {
\t\t\t\t\t\tif ( completed == null ) {
\t\t\t\t\t\t\tname = requestHeadersNames[ name.toLowerCase() ] =
\t\t\t\t\t\t\t\trequestHeadersNames[ name.toLowerCase() ] || name;
\t\t\t\t\t\t\trequestHeaders[ name ] = value;
\t\t\t\t\t\t}
\t\t\t\t\t\treturn this;
\t\t\t\t\t},

\t\t\t\t\t// Overrides response content-type header
\t\t\t\t\toverrideMimeType: function( type ) {
\t\t\t\t\t\tif ( completed == null ) {
\t\t\t\t\t\t\ts.mimeType = type;
\t\t\t\t\t\t}
\t\t\t\t\t\treturn this;
\t\t\t\t\t},

\t\t\t\t\t// Status-dependent callbacks
\t\t\t\t\tstatusCode: function( map ) {
\t\t\t\t\t\tvar code;
\t\t\t\t\t\tif ( map ) {
\t\t\t\t\t\t\tif ( completed ) {

\t\t\t\t\t\t\t\t// Execute the appropriate callbacks
\t\t\t\t\t\t\t\tjqXHR.always( map[ jqXHR.status ] );
\t\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\t// Lazy-add the new callbacks in a way that preserves old ones
\t\t\t\t\t\t\t\tfor ( code in map ) {
\t\t\t\t\t\t\t\t\tstatusCode[ code ] = [ statusCode[ code ], map[ code ] ];
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\treturn this;
\t\t\t\t\t},

\t\t\t\t\t// Cancel the request
\t\t\t\t\tabort: function( statusText ) {
\t\t\t\t\t\tvar finalText = statusText || strAbort;
\t\t\t\t\t\tif ( transport ) {
\t\t\t\t\t\t\ttransport.abort( finalText );
\t\t\t\t\t\t}
\t\t\t\t\t\tdone( 0, finalText );
\t\t\t\t\t\treturn this;
\t\t\t\t\t}
\t\t\t\t};

\t\t\t// Attach deferreds
\t\t\tdeferred.promise( jqXHR );

\t\t\t// Add protocol if not provided (prefilters might expect it)
\t\t\t// Handle falsy url in the settings object (#10093: consistency with old signature)
\t\t\t// We also use the url parameter if available
\t\t\ts.url = ( ( url || s.url || location.href ) + \"\" )
\t\t\t\t.replace( rprotocol, location.protocol + \"//\" );

\t\t\t// Alias method option to type as per ticket #12004
\t\t\ts.type = options.method || options.type || s.method || s.type;

\t\t\t// Extract dataTypes list
\t\t\ts.dataTypes = ( s.dataType || \"*\" ).toLowerCase().match( rnothtmlwhite ) || [ \"\" ];

\t\t\t// A cross-domain request is in order when the origin doesn't match the current origin.
\t\t\tif ( s.crossDomain == null ) {
\t\t\t\turlAnchor = document.createElement( \"a\" );

\t\t\t\t// Support: IE <=8 - 11, Edge 12 - 15
\t\t\t\t// IE throws exception on accessing the href property if url is malformed,
\t\t\t\t// e.g. http://example.com:80x/
\t\t\t\ttry {
\t\t\t\t\turlAnchor.href = s.url;

\t\t\t\t\t// Support: IE <=8 - 11 only
\t\t\t\t\t// Anchor's host property isn't correctly set when s.url is relative
\t\t\t\t\turlAnchor.href = urlAnchor.href;
\t\t\t\t\ts.crossDomain = originAnchor.protocol + \"//\" + originAnchor.host !==
\t\t\t\t\t\turlAnchor.protocol + \"//\" + urlAnchor.host;
\t\t\t\t} catch ( e ) {

\t\t\t\t\t// If there is an error parsing the URL, assume it is crossDomain,
\t\t\t\t\t// it can be rejected by the transport if it is invalid
\t\t\t\t\ts.crossDomain = true;
\t\t\t\t}
\t\t\t}

\t\t\t// Convert data if not already a string
\t\t\tif ( s.data && s.processData && typeof s.data !== \"string\" ) {
\t\t\t\ts.data = jQuery.param( s.data, s.traditional );
\t\t\t}

\t\t\t// Apply prefilters
\t\t\tinspectPrefiltersOrTransports( prefilters, s, options, jqXHR );

\t\t\t// If request was aborted inside a prefilter, stop there
\t\t\tif ( completed ) {
\t\t\t\treturn jqXHR;
\t\t\t}

\t\t\t// We can fire global events as of now if asked to
\t\t\t// Don't fire events if jQuery.event is undefined in an AMD-usage scenario (#15118)
\t\t\tfireGlobals = jQuery.event && s.global;

\t\t\t// Watch for a new set of requests
\t\t\tif ( fireGlobals && jQuery.active++ === 0 ) {
\t\t\t\tjQuery.event.trigger( \"ajaxStart\" );
\t\t\t}

\t\t\t// Uppercase the type
\t\t\ts.type = s.type.toUpperCase();

\t\t\t// Determine if request has content
\t\t\ts.hasContent = !rnoContent.test( s.type );

\t\t\t// Save the URL in case we're toying with the If-Modified-Since
\t\t\t// and/or If-None-Match header later on
\t\t\t// Remove hash to simplify url manipulation
\t\t\tcacheURL = s.url.replace( rhash, \"\" );

\t\t\t// More options handling for requests with no content
\t\t\tif ( !s.hasContent ) {

\t\t\t\t// Remember the hash so we can put it back
\t\t\t\tuncached = s.url.slice( cacheURL.length );

\t\t\t\t// If data is available and should be processed, append data to url
\t\t\t\tif ( s.data && ( s.processData || typeof s.data === \"string\" ) ) {
\t\t\t\t\tcacheURL += ( rquery.test( cacheURL ) ? \"&\" : \"?\" ) + s.data;

\t\t\t\t\t// #9682: remove data so that it's not used in an eventual retry
\t\t\t\t\tdelete s.data;
\t\t\t\t}

\t\t\t\t// Add or update anti-cache param if needed
\t\t\t\tif ( s.cache === false ) {
\t\t\t\t\tcacheURL = cacheURL.replace( rantiCache, \"\$1\" );
\t\t\t\t\tuncached = ( rquery.test( cacheURL ) ? \"&\" : \"?\" ) + \"_=\" + ( nonce++ ) + uncached;
\t\t\t\t}

\t\t\t\t// Put hash and anti-cache on the URL that will be requested (gh-1732)
\t\t\t\ts.url = cacheURL + uncached;

\t\t\t\t// Change '%20' to '+' if this is encoded form body content (gh-2658)
\t\t\t} else if ( s.data && s.processData &&
\t\t\t\t( s.contentType || \"\" ).indexOf( \"application/x-www-form-urlencoded\" ) === 0 ) {
\t\t\t\ts.data = s.data.replace( r20, \"+\" );
\t\t\t}

\t\t\t// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
\t\t\tif ( s.ifModified ) {
\t\t\t\tif ( jQuery.lastModified[ cacheURL ] ) {
\t\t\t\t\tjqXHR.setRequestHeader( \"If-Modified-Since\", jQuery.lastModified[ cacheURL ] );
\t\t\t\t}
\t\t\t\tif ( jQuery.etag[ cacheURL ] ) {
\t\t\t\t\tjqXHR.setRequestHeader( \"If-None-Match\", jQuery.etag[ cacheURL ] );
\t\t\t\t}
\t\t\t}

\t\t\t// Set the correct header, if data is being sent
\t\t\tif ( s.data && s.hasContent && s.contentType !== false || options.contentType ) {
\t\t\t\tjqXHR.setRequestHeader( \"Content-Type\", s.contentType );
\t\t\t}

\t\t\t// Set the Accepts header for the server, depending on the dataType
\t\t\tjqXHR.setRequestHeader(
\t\t\t\t\"Accept\",
\t\t\t\ts.dataTypes[ 0 ] && s.accepts[ s.dataTypes[ 0 ] ] ?
\t\t\t\t\ts.accepts[ s.dataTypes[ 0 ] ] +
\t\t\t\t\t( s.dataTypes[ 0 ] !== \"*\" ? \", \" + allTypes + \"; q=0.01\" : \"\" ) :
\t\t\t\t\ts.accepts[ \"*\" ]
\t\t\t);

\t\t\t// Check for headers option
\t\t\tfor ( i in s.headers ) {
\t\t\t\tjqXHR.setRequestHeader( i, s.headers[ i ] );
\t\t\t}

\t\t\t// Allow custom headers/mimetypes and early abort
\t\t\tif ( s.beforeSend &&
\t\t\t\t( s.beforeSend.call( callbackContext, jqXHR, s ) === false || completed ) ) {

\t\t\t\t// Abort if not done already and return
\t\t\t\treturn jqXHR.abort();
\t\t\t}

\t\t\t// Aborting is no longer a cancellation
\t\t\tstrAbort = \"abort\";

\t\t\t// Install callbacks on deferreds
\t\t\tcompleteDeferred.add( s.complete );
\t\t\tjqXHR.done( s.success );
\t\t\tjqXHR.fail( s.error );

\t\t\t// Get transport
\t\t\ttransport = inspectPrefiltersOrTransports( transports, s, options, jqXHR );

\t\t\t// If no transport, we auto-abort
\t\t\tif ( !transport ) {
\t\t\t\tdone( -1, \"No Transport\" );
\t\t\t} else {
\t\t\t\tjqXHR.readyState = 1;

\t\t\t\t// Send global event
\t\t\t\tif ( fireGlobals ) {
\t\t\t\t\tglobalEventContext.trigger( \"ajaxSend\", [ jqXHR, s ] );
\t\t\t\t}

\t\t\t\t// If request was aborted inside ajaxSend, stop there
\t\t\t\tif ( completed ) {
\t\t\t\t\treturn jqXHR;
\t\t\t\t}

\t\t\t\t// Timeout
\t\t\t\tif ( s.async && s.timeout > 0 ) {
\t\t\t\t\ttimeoutTimer = window.setTimeout( function() {
\t\t\t\t\t\tjqXHR.abort( \"timeout\" );
\t\t\t\t\t}, s.timeout );
\t\t\t\t}

\t\t\t\ttry {
\t\t\t\t\tcompleted = false;
\t\t\t\t\ttransport.send( requestHeaders, done );
\t\t\t\t} catch ( e ) {

\t\t\t\t\t// Rethrow post-completion exceptions
\t\t\t\t\tif ( completed ) {
\t\t\t\t\t\tthrow e;
\t\t\t\t\t}

\t\t\t\t\t// Propagate others as results
\t\t\t\t\tdone( -1, e );
\t\t\t\t}
\t\t\t}

\t\t\t// Callback for when everything is done
\t\t\tfunction done( status, nativeStatusText, responses, headers ) {
\t\t\t\tvar isSuccess, success, error, response, modified,
\t\t\t\t\tstatusText = nativeStatusText;

\t\t\t\t// Ignore repeat invocations
\t\t\t\tif ( completed ) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tcompleted = true;

\t\t\t\t// Clear timeout if it exists
\t\t\t\tif ( timeoutTimer ) {
\t\t\t\t\twindow.clearTimeout( timeoutTimer );
\t\t\t\t}

\t\t\t\t// Dereference transport for early garbage collection
\t\t\t\t// (no matter how long the jqXHR object will be used)
\t\t\t\ttransport = undefined;

\t\t\t\t// Cache response headers
\t\t\t\tresponseHeadersString = headers || \"\";

\t\t\t\t// Set readyState
\t\t\t\tjqXHR.readyState = status > 0 ? 4 : 0;

\t\t\t\t// Determine if successful
\t\t\t\tisSuccess = status >= 200 && status < 300 || status === 304;

\t\t\t\t// Get response data
\t\t\t\tif ( responses ) {
\t\t\t\t\tresponse = ajaxHandleResponses( s, jqXHR, responses );
\t\t\t\t}

\t\t\t\t// Convert no matter what (that way responseXXX fields are always set)
\t\t\t\tresponse = ajaxConvert( s, response, jqXHR, isSuccess );

\t\t\t\t// If successful, handle type chaining
\t\t\t\tif ( isSuccess ) {

\t\t\t\t\t// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
\t\t\t\t\tif ( s.ifModified ) {
\t\t\t\t\t\tmodified = jqXHR.getResponseHeader( \"Last-Modified\" );
\t\t\t\t\t\tif ( modified ) {
\t\t\t\t\t\t\tjQuery.lastModified[ cacheURL ] = modified;
\t\t\t\t\t\t}
\t\t\t\t\t\tmodified = jqXHR.getResponseHeader( \"etag\" );
\t\t\t\t\t\tif ( modified ) {
\t\t\t\t\t\t\tjQuery.etag[ cacheURL ] = modified;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// if no content
\t\t\t\t\tif ( status === 204 || s.type === \"HEAD\" ) {
\t\t\t\t\t\tstatusText = \"nocontent\";

\t\t\t\t\t\t// if not modified
\t\t\t\t\t} else if ( status === 304 ) {
\t\t\t\t\t\tstatusText = \"notmodified\";

\t\t\t\t\t\t// If we have data, let's convert it
\t\t\t\t\t} else {
\t\t\t\t\t\tstatusText = response.state;
\t\t\t\t\t\tsuccess = response.data;
\t\t\t\t\t\terror = response.error;
\t\t\t\t\t\tisSuccess = !error;
\t\t\t\t\t}
\t\t\t\t} else {

\t\t\t\t\t// Extract error from statusText and normalize for non-aborts
\t\t\t\t\terror = statusText;
\t\t\t\t\tif ( status || !statusText ) {
\t\t\t\t\t\tstatusText = \"error\";
\t\t\t\t\t\tif ( status < 0 ) {
\t\t\t\t\t\t\tstatus = 0;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Set data for the fake xhr object
\t\t\t\tjqXHR.status = status;
\t\t\t\tjqXHR.statusText = ( nativeStatusText || statusText ) + \"\";

\t\t\t\t// Success/Error
\t\t\t\tif ( isSuccess ) {
\t\t\t\t\tdeferred.resolveWith( callbackContext, [ success, statusText, jqXHR ] );
\t\t\t\t} else {
\t\t\t\t\tdeferred.rejectWith( callbackContext, [ jqXHR, statusText, error ] );
\t\t\t\t}

\t\t\t\t// Status-dependent callbacks
\t\t\t\tjqXHR.statusCode( statusCode );
\t\t\t\tstatusCode = undefined;

\t\t\t\tif ( fireGlobals ) {
\t\t\t\t\tglobalEventContext.trigger( isSuccess ? \"ajaxSuccess\" : \"ajaxError\",
\t\t\t\t\t\t[ jqXHR, s, isSuccess ? success : error ] );
\t\t\t\t}

\t\t\t\t// Complete
\t\t\t\tcompleteDeferred.fireWith( callbackContext, [ jqXHR, statusText ] );

\t\t\t\tif ( fireGlobals ) {
\t\t\t\t\tglobalEventContext.trigger( \"ajaxComplete\", [ jqXHR, s ] );

\t\t\t\t\t// Handle the global AJAX counter
\t\t\t\t\tif ( !( --jQuery.active ) ) {
\t\t\t\t\t\tjQuery.event.trigger( \"ajaxStop\" );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\treturn jqXHR;
\t\t},

\t\tgetJSON: function( url, data, callback ) {
\t\t\treturn jQuery.get( url, data, callback, \"json\" );
\t\t},

\t\tgetScript: function( url, callback ) {
\t\t\treturn jQuery.get( url, undefined, callback, \"script\" );
\t\t}
\t} );

\tjQuery.each( [ \"get\", \"post\" ], function( i, method ) {
\t\tjQuery[ method ] = function( url, data, callback, type ) {

\t\t\t// Shift arguments if data argument was omitted
\t\t\tif ( isFunction( data ) ) {
\t\t\t\ttype = type || callback;
\t\t\t\tcallback = data;
\t\t\t\tdata = undefined;
\t\t\t}

\t\t\t// The url can be an options object (which then must have .url)
\t\t\treturn jQuery.ajax( jQuery.extend( {
\t\t\t\turl: url,
\t\t\t\ttype: method,
\t\t\t\tdataType: type,
\t\t\t\tdata: data,
\t\t\t\tsuccess: callback
\t\t\t}, jQuery.isPlainObject( url ) && url ) );
\t\t};
\t} );


\tjQuery._evalUrl = function( url ) {
\t\treturn jQuery.ajax( {
\t\t\turl: url,

\t\t\t// Make this explicit, since user can override this through ajaxSetup (#11264)
\t\t\ttype: \"GET\",
\t\t\tdataType: \"script\",
\t\t\tcache: true,
\t\t\tasync: false,
\t\t\tglobal: false,
\t\t\t\"throws\": true
\t\t} );
\t};


\tjQuery.fn.extend( {
\t\twrapAll: function( html ) {
\t\t\tvar wrap;

\t\t\tif ( this[ 0 ] ) {
\t\t\t\tif ( isFunction( html ) ) {
\t\t\t\t\thtml = html.call( this[ 0 ] );
\t\t\t\t}

\t\t\t\t// The elements to wrap the target around
\t\t\t\twrap = jQuery( html, this[ 0 ].ownerDocument ).eq( 0 ).clone( true );

\t\t\t\tif ( this[ 0 ].parentNode ) {
\t\t\t\t\twrap.insertBefore( this[ 0 ] );
\t\t\t\t}

\t\t\t\twrap.map( function() {
\t\t\t\t\tvar elem = this;

\t\t\t\t\twhile ( elem.firstElementChild ) {
\t\t\t\t\t\telem = elem.firstElementChild;
\t\t\t\t\t}

\t\t\t\t\treturn elem;
\t\t\t\t} ).append( this );
\t\t\t}

\t\t\treturn this;
\t\t},

\t\twrapInner: function( html ) {
\t\t\tif ( isFunction( html ) ) {
\t\t\t\treturn this.each( function( i ) {
\t\t\t\t\tjQuery( this ).wrapInner( html.call( this, i ) );
\t\t\t\t} );
\t\t\t}

\t\t\treturn this.each( function() {
\t\t\t\tvar self = jQuery( this ),
\t\t\t\t\tcontents = self.contents();

\t\t\t\tif ( contents.length ) {
\t\t\t\t\tcontents.wrapAll( html );

\t\t\t\t} else {
\t\t\t\t\tself.append( html );
\t\t\t\t}
\t\t\t} );
\t\t},

\t\twrap: function( html ) {
\t\t\tvar htmlIsFunction = isFunction( html );

\t\t\treturn this.each( function( i ) {
\t\t\t\tjQuery( this ).wrapAll( htmlIsFunction ? html.call( this, i ) : html );
\t\t\t} );
\t\t},

\t\tunwrap: function( selector ) {
\t\t\tthis.parent( selector ).not( \"body\" ).each( function() {
\t\t\t\tjQuery( this ).replaceWith( this.childNodes );
\t\t\t} );
\t\t\treturn this;
\t\t}
\t} );


\tjQuery.expr.pseudos.hidden = function( elem ) {
\t\treturn !jQuery.expr.pseudos.visible( elem );
\t};
\tjQuery.expr.pseudos.visible = function( elem ) {
\t\treturn !!( elem.offsetWidth || elem.offsetHeight || elem.getClientRects().length );
\t};




\tjQuery.ajaxSettings.xhr = function() {
\t\ttry {
\t\t\treturn new window.XMLHttpRequest();
\t\t} catch ( e ) {}
\t};

\tvar xhrSuccessStatus = {

\t\t\t// File protocol always yields status code 0, assume 200
\t\t\t0: 200,

\t\t\t// Support: IE <=9 only
\t\t\t// #1450: sometimes IE returns 1223 when it should be 204
\t\t\t1223: 204
\t\t},
\t\txhrSupported = jQuery.ajaxSettings.xhr();

\tsupport.cors = !!xhrSupported && ( \"withCredentials\" in xhrSupported );
\tsupport.ajax = xhrSupported = !!xhrSupported;

\tjQuery.ajaxTransport( function( options ) {
\t\tvar callback, errorCallback;

\t\t// Cross domain only allowed if supported through XMLHttpRequest
\t\tif ( support.cors || xhrSupported && !options.crossDomain ) {
\t\t\treturn {
\t\t\t\tsend: function( headers, complete ) {
\t\t\t\t\tvar i,
\t\t\t\t\t\txhr = options.xhr();

\t\t\t\t\txhr.open(
\t\t\t\t\t\toptions.type,
\t\t\t\t\t\toptions.url,
\t\t\t\t\t\toptions.async,
\t\t\t\t\t\toptions.username,
\t\t\t\t\t\toptions.password
\t\t\t\t\t);

\t\t\t\t\t// Apply custom fields if provided
\t\t\t\t\tif ( options.xhrFields ) {
\t\t\t\t\t\tfor ( i in options.xhrFields ) {
\t\t\t\t\t\t\txhr[ i ] = options.xhrFields[ i ];
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Override mime type if needed
\t\t\t\t\tif ( options.mimeType && xhr.overrideMimeType ) {
\t\t\t\t\t\txhr.overrideMimeType( options.mimeType );
\t\t\t\t\t}

\t\t\t\t\t// X-Requested-With header
\t\t\t\t\t// For cross-domain requests, seeing as conditions for a preflight are
\t\t\t\t\t// akin to a jigsaw puzzle, we simply never set it to be sure.
\t\t\t\t\t// (it can always be set on a per-request basis or even using ajaxSetup)
\t\t\t\t\t// For same-domain requests, won't change header if already provided.
\t\t\t\t\tif ( !options.crossDomain && !headers[ \"X-Requested-With\" ] ) {
\t\t\t\t\t\theaders[ \"X-Requested-With\" ] = \"XMLHttpRequest\";
\t\t\t\t\t}

\t\t\t\t\t// Set headers
\t\t\t\t\tfor ( i in headers ) {
\t\t\t\t\t\txhr.setRequestHeader( i, headers[ i ] );
\t\t\t\t\t}

\t\t\t\t\t// Callback
\t\t\t\t\tcallback = function( type ) {
\t\t\t\t\t\treturn function() {
\t\t\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\t\t\tcallback = errorCallback = xhr.onload =
\t\t\t\t\t\t\t\t\txhr.onerror = xhr.onabort = xhr.ontimeout =
\t\t\t\t\t\t\t\t\t\txhr.onreadystatechange = null;

\t\t\t\t\t\t\t\tif ( type === \"abort\" ) {
\t\t\t\t\t\t\t\t\txhr.abort();
\t\t\t\t\t\t\t\t} else if ( type === \"error\" ) {

\t\t\t\t\t\t\t\t\t// Support: IE <=9 only
\t\t\t\t\t\t\t\t\t// On a manual native abort, IE9 throws
\t\t\t\t\t\t\t\t\t// errors on any property access that is not readyState
\t\t\t\t\t\t\t\t\tif ( typeof xhr.status !== \"number\" ) {
\t\t\t\t\t\t\t\t\t\tcomplete( 0, \"error\" );
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\tcomplete(

\t\t\t\t\t\t\t\t\t\t\t// File: protocol always yields status 0; see #8605, #14207
\t\t\t\t\t\t\t\t\t\t\txhr.status,
\t\t\t\t\t\t\t\t\t\t\txhr.statusText
\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tcomplete(
\t\t\t\t\t\t\t\t\t\txhrSuccessStatus[ xhr.status ] || xhr.status,
\t\t\t\t\t\t\t\t\t\txhr.statusText,

\t\t\t\t\t\t\t\t\t\t// Support: IE <=9 only
\t\t\t\t\t\t\t\t\t\t// IE9 has no XHR2 but throws on binary (trac-11426)
\t\t\t\t\t\t\t\t\t\t// For XHR2 non-text, let the caller handle it (gh-2498)
\t\t\t\t\t\t\t\t\t\t( xhr.responseType || \"text\" ) !== \"text\"  ||
\t\t\t\t\t\t\t\t\t\ttypeof xhr.responseText !== \"string\" ?
\t\t\t\t\t\t\t\t\t\t\t{ binary: xhr.response } :
\t\t\t\t\t\t\t\t\t\t\t{ text: xhr.responseText },
\t\t\t\t\t\t\t\t\t\txhr.getAllResponseHeaders()
\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t};
\t\t\t\t\t};

\t\t\t\t\t// Listen to events
\t\t\t\t\txhr.onload = callback();
\t\t\t\t\terrorCallback = xhr.onerror = xhr.ontimeout = callback( \"error\" );

\t\t\t\t\t// Support: IE 9 only
\t\t\t\t\t// Use onreadystatechange to replace onabort
\t\t\t\t\t// to handle uncaught aborts
\t\t\t\t\tif ( xhr.onabort !== undefined ) {
\t\t\t\t\t\txhr.onabort = errorCallback;
\t\t\t\t\t} else {
\t\t\t\t\t\txhr.onreadystatechange = function() {

\t\t\t\t\t\t\t// Check readyState before timeout as it changes
\t\t\t\t\t\t\tif ( xhr.readyState === 4 ) {

\t\t\t\t\t\t\t\t// Allow onerror to be called first,
\t\t\t\t\t\t\t\t// but that will not handle a native abort
\t\t\t\t\t\t\t\t// Also, save errorCallback to a variable
\t\t\t\t\t\t\t\t// as xhr.onerror cannot be accessed
\t\t\t\t\t\t\t\twindow.setTimeout( function() {
\t\t\t\t\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\t\t\t\t\terrorCallback();
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t} );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t};
\t\t\t\t\t}

\t\t\t\t\t// Create the abort callback
\t\t\t\t\tcallback = callback( \"abort\" );

\t\t\t\t\ttry {

\t\t\t\t\t\t// Do send the request (this may raise an exception)
\t\t\t\t\t\txhr.send( options.hasContent && options.data || null );
\t\t\t\t\t} catch ( e ) {

\t\t\t\t\t\t// #14683: Only rethrow if this hasn't been notified as an error yet
\t\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\t\tthrow e;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t},

\t\t\t\tabort: function() {
\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\tcallback();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t};
\t\t}
\t} );




// Prevent auto-execution of scripts when no explicit dataType was provided (See gh-2432)
\tjQuery.ajaxPrefilter( function( s ) {
\t\tif ( s.crossDomain ) {
\t\t\ts.contents.script = false;
\t\t}
\t} );

// Install script dataType
\tjQuery.ajaxSetup( {
\t\taccepts: {
\t\t\tscript: \"text/javascript, application/javascript, \" +
\t\t\t\t\"application/ecmascript, application/x-ecmascript\"
\t\t},
\t\tcontents: {
\t\t\tscript: /\\b(?:java|ecma)script\\b/
\t\t},
\t\tconverters: {
\t\t\t\"text script\": function( text ) {
\t\t\t\tjQuery.globalEval( text );
\t\t\t\treturn text;
\t\t\t}
\t\t}
\t} );

// Handle cache's special case and crossDomain
\tjQuery.ajaxPrefilter( \"script\", function( s ) {
\t\tif ( s.cache === undefined ) {
\t\t\ts.cache = false;
\t\t}
\t\tif ( s.crossDomain ) {
\t\t\ts.type = \"GET\";
\t\t}
\t} );

// Bind script tag hack transport
\tjQuery.ajaxTransport( \"script\", function( s ) {

\t\t// This transport only deals with cross domain requests
\t\tif ( s.crossDomain ) {
\t\t\tvar script, callback;
\t\t\treturn {
\t\t\t\tsend: function( _, complete ) {
\t\t\t\t\tscript = jQuery( \"<script>\" ).prop( {
\t\t\t\t\t\tcharset: s.scriptCharset,
\t\t\t\t\t\tsrc: s.url
\t\t\t\t\t} ).on(
\t\t\t\t\t\t\"load error\",
\t\t\t\t\t\tcallback = function( evt ) {
\t\t\t\t\t\t\tscript.remove();
\t\t\t\t\t\t\tcallback = null;
\t\t\t\t\t\t\tif ( evt ) {
\t\t\t\t\t\t\t\tcomplete( evt.type === \"error\" ? 404 : 200, evt.type );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t);

\t\t\t\t\t// Use native DOM manipulation to avoid our domManip AJAX trickery
\t\t\t\t\tdocument.head.appendChild( script[ 0 ] );
\t\t\t\t},
\t\t\t\tabort: function() {
\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\tcallback();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t};
\t\t}
\t} );




\tvar oldCallbacks = [],
\t\trjsonp = /(=)\\?(?=&|\$)|\\?\\?/;

// Default jsonp settings
\tjQuery.ajaxSetup( {
\t\tjsonp: \"callback\",
\t\tjsonpCallback: function() {
\t\t\tvar callback = oldCallbacks.pop() || ( jQuery.expando + \"_\" + ( nonce++ ) );
\t\t\tthis[ callback ] = true;
\t\t\treturn callback;
\t\t}
\t} );

// Detect, normalize options and install callbacks for jsonp requests
\tjQuery.ajaxPrefilter( \"json jsonp\", function( s, originalSettings, jqXHR ) {

\t\tvar callbackName, overwritten, responseContainer,
\t\t\tjsonProp = s.jsonp !== false && ( rjsonp.test( s.url ) ?
\t\t\t\t\t\"url\" :
\t\t\t\t\ttypeof s.data === \"string\" &&
\t\t\t\t\t( s.contentType || \"\" )
\t\t\t\t\t\t.indexOf( \"application/x-www-form-urlencoded\" ) === 0 &&
\t\t\t\t\trjsonp.test( s.data ) && \"data\"
\t\t\t);

\t\t// Handle iff the expected data type is \"jsonp\" or we have a parameter to set
\t\tif ( jsonProp || s.dataTypes[ 0 ] === \"jsonp\" ) {

\t\t\t// Get callback name, remembering preexisting value associated with it
\t\t\tcallbackName = s.jsonpCallback = isFunction( s.jsonpCallback ) ?
\t\t\t\ts.jsonpCallback() :
\t\t\t\ts.jsonpCallback;

\t\t\t// Insert callback into url or form data
\t\t\tif ( jsonProp ) {
\t\t\t\ts[ jsonProp ] = s[ jsonProp ].replace( rjsonp, \"\$1\" + callbackName );
\t\t\t} else if ( s.jsonp !== false ) {
\t\t\t\ts.url += ( rquery.test( s.url ) ? \"&\" : \"?\" ) + s.jsonp + \"=\" + callbackName;
\t\t\t}

\t\t\t// Use data converter to retrieve json after script execution
\t\t\ts.converters[ \"script json\" ] = function() {
\t\t\t\tif ( !responseContainer ) {
\t\t\t\t\tjQuery.error( callbackName + \" was not called\" );
\t\t\t\t}
\t\t\t\treturn responseContainer[ 0 ];
\t\t\t};

\t\t\t// Force json dataType
\t\t\ts.dataTypes[ 0 ] = \"json\";

\t\t\t// Install callback
\t\t\toverwritten = window[ callbackName ];
\t\t\twindow[ callbackName ] = function() {
\t\t\t\tresponseContainer = arguments;
\t\t\t};

\t\t\t// Clean-up function (fires after converters)
\t\t\tjqXHR.always( function() {

\t\t\t\t// If previous value didn't exist - remove it
\t\t\t\tif ( overwritten === undefined ) {
\t\t\t\t\tjQuery( window ).removeProp( callbackName );

\t\t\t\t\t// Otherwise restore preexisting value
\t\t\t\t} else {
\t\t\t\t\twindow[ callbackName ] = overwritten;
\t\t\t\t}

\t\t\t\t// Save back as free
\t\t\t\tif ( s[ callbackName ] ) {

\t\t\t\t\t// Make sure that re-using the options doesn't screw things around
\t\t\t\t\ts.jsonpCallback = originalSettings.jsonpCallback;

\t\t\t\t\t// Save the callback name for future use
\t\t\t\t\toldCallbacks.push( callbackName );
\t\t\t\t}

\t\t\t\t// Call if it was a function and we have a response
\t\t\t\tif ( responseContainer && isFunction( overwritten ) ) {
\t\t\t\t\toverwritten( responseContainer[ 0 ] );
\t\t\t\t}

\t\t\t\tresponseContainer = overwritten = undefined;
\t\t\t} );

\t\t\t// Delegate to script
\t\t\treturn \"script\";
\t\t}
\t} );




// Support: Safari 8 only
// In Safari 8 documents created via document.implementation.createHTMLDocument
// collapse sibling forms: the second one becomes a child of the first one.
// Because of that, this security measure has to be disabled in Safari 8.
// https://bugs.webkit.org/show_bug.cgi?id=137337
\tsupport.createHTMLDocument = ( function() {
\t\tvar body = document.implementation.createHTMLDocument( \"\" ).body;
\t\tbody.innerHTML = \"<form></form><form></form>\";
\t\treturn body.childNodes.length === 2;
\t} )();


// Argument \"data\" should be string of html
// context (optional): If specified, the fragment will be created in this context,
// defaults to document
// keepScripts (optional): If true, will include scripts passed in the html string
\tjQuery.parseHTML = function( data, context, keepScripts ) {
\t\tif ( typeof data !== \"string\" ) {
\t\t\treturn [];
\t\t}
\t\tif ( typeof context === \"boolean\" ) {
\t\t\tkeepScripts = context;
\t\t\tcontext = false;
\t\t}

\t\tvar base, parsed, scripts;

\t\tif ( !context ) {

\t\t\t// Stop scripts or inline event handlers from being executed immediately
\t\t\t// by using document.implementation
\t\t\tif ( support.createHTMLDocument ) {
\t\t\t\tcontext = document.implementation.createHTMLDocument( \"\" );

\t\t\t\t// Set the base href for the created document
\t\t\t\t// so any parsed elements with URLs
\t\t\t\t// are based on the document's URL (gh-2965)
\t\t\t\tbase = context.createElement( \"base\" );
\t\t\t\tbase.href = document.location.href;
\t\t\t\tcontext.head.appendChild( base );
\t\t\t} else {
\t\t\t\tcontext = document;
\t\t\t}
\t\t}

\t\tparsed = rsingleTag.exec( data );
\t\tscripts = !keepScripts && [];

\t\t// Single tag
\t\tif ( parsed ) {
\t\t\treturn [ context.createElement( parsed[ 1 ] ) ];
\t\t}

\t\tparsed = buildFragment( [ data ], context, scripts );

\t\tif ( scripts && scripts.length ) {
\t\t\tjQuery( scripts ).remove();
\t\t}

\t\treturn jQuery.merge( [], parsed.childNodes );
\t};


\t/**
\t * Load a url into a page
\t */
\tjQuery.fn.load = function( url, params, callback ) {
\t\tvar selector, type, response,
\t\t\tself = this,
\t\t\toff = url.indexOf( \" \" );

\t\tif ( off > -1 ) {
\t\t\tselector = stripAndCollapse( url.slice( off ) );
\t\t\turl = url.slice( 0, off );
\t\t}

\t\t// If it's a function
\t\tif ( isFunction( params ) ) {

\t\t\t// We assume that it's the callback
\t\t\tcallback = params;
\t\t\tparams = undefined;

\t\t\t// Otherwise, build a param string
\t\t} else if ( params && typeof params === \"object\" ) {
\t\t\ttype = \"POST\";
\t\t}

\t\t// If we have elements to modify, make the request
\t\tif ( self.length > 0 ) {
\t\t\tjQuery.ajax( {
\t\t\t\turl: url,

\t\t\t\t// If \"type\" variable is undefined, then \"GET\" method will be used.
\t\t\t\t// Make value of this field explicit since
\t\t\t\t// user can override it through ajaxSetup method
\t\t\t\ttype: type || \"GET\",
\t\t\t\tdataType: \"html\",
\t\t\t\tdata: params
\t\t\t} ).done( function( responseText ) {

\t\t\t\t// Save response for use in complete callback
\t\t\t\tresponse = arguments;

\t\t\t\tself.html( selector ?

\t\t\t\t\t// If a selector was specified, locate the right elements in a dummy div
\t\t\t\t\t// Exclude scripts to avoid IE 'Permission Denied' errors
\t\t\t\t\tjQuery( \"<div>\" ).append( jQuery.parseHTML( responseText ) ).find( selector ) :

\t\t\t\t\t// Otherwise use the full result
\t\t\t\t\tresponseText );

\t\t\t\t// If the request succeeds, this function gets \"data\", \"status\", \"jqXHR\"
\t\t\t\t// but they are ignored because response was set above.
\t\t\t\t// If it fails, this function gets \"jqXHR\", \"status\", \"error\"
\t\t\t} ).always( callback && function( jqXHR, status ) {
\t\t\t\tself.each( function() {
\t\t\t\t\tcallback.apply( this, response || [ jqXHR.responseText, status, jqXHR ] );
\t\t\t\t} );
\t\t\t} );
\t\t}

\t\treturn this;
\t};




// Attach a bunch of functions for handling common AJAX events
\tjQuery.each( [
\t\t\"ajaxStart\",
\t\t\"ajaxStop\",
\t\t\"ajaxComplete\",
\t\t\"ajaxError\",
\t\t\"ajaxSuccess\",
\t\t\"ajaxSend\"
\t], function( i, type ) {
\t\tjQuery.fn[ type ] = function( fn ) {
\t\t\treturn this.on( type, fn );
\t\t};
\t} );




\tjQuery.expr.pseudos.animated = function( elem ) {
\t\treturn jQuery.grep( jQuery.timers, function( fn ) {
\t\t\treturn elem === fn.elem;
\t\t} ).length;
\t};




\tjQuery.offset = {
\t\tsetOffset: function( elem, options, i ) {
\t\t\tvar curPosition, curLeft, curCSSTop, curTop, curOffset, curCSSLeft, calculatePosition,
\t\t\t\tposition = jQuery.css( elem, \"position\" ),
\t\t\t\tcurElem = jQuery( elem ),
\t\t\t\tprops = {};

\t\t\t// Set position first, in-case top/left are set even on static elem
\t\t\tif ( position === \"static\" ) {
\t\t\t\telem.style.position = \"relative\";
\t\t\t}

\t\t\tcurOffset = curElem.offset();
\t\t\tcurCSSTop = jQuery.css( elem, \"top\" );
\t\t\tcurCSSLeft = jQuery.css( elem, \"left\" );
\t\t\tcalculatePosition = ( position === \"absolute\" || position === \"fixed\" ) &&
\t\t\t\t( curCSSTop + curCSSLeft ).indexOf( \"auto\" ) > -1;

\t\t\t// Need to be able to calculate position if either
\t\t\t// top or left is auto and position is either absolute or fixed
\t\t\tif ( calculatePosition ) {
\t\t\t\tcurPosition = curElem.position();
\t\t\t\tcurTop = curPosition.top;
\t\t\t\tcurLeft = curPosition.left;

\t\t\t} else {
\t\t\t\tcurTop = parseFloat( curCSSTop ) || 0;
\t\t\t\tcurLeft = parseFloat( curCSSLeft ) || 0;
\t\t\t}

\t\t\tif ( isFunction( options ) ) {

\t\t\t\t// Use jQuery.extend here to allow modification of coordinates argument (gh-1848)
\t\t\t\toptions = options.call( elem, i, jQuery.extend( {}, curOffset ) );
\t\t\t}

\t\t\tif ( options.top != null ) {
\t\t\t\tprops.top = ( options.top - curOffset.top ) + curTop;
\t\t\t}
\t\t\tif ( options.left != null ) {
\t\t\t\tprops.left = ( options.left - curOffset.left ) + curLeft;
\t\t\t}

\t\t\tif ( \"using\" in options ) {
\t\t\t\toptions.using.call( elem, props );

\t\t\t} else {
\t\t\t\tcurElem.css( props );
\t\t\t}
\t\t}
\t};

\tjQuery.fn.extend( {

\t\t// offset() relates an element's border box to the document origin
\t\toffset: function( options ) {

\t\t\t// Preserve chaining for setter
\t\t\tif ( arguments.length ) {
\t\t\t\treturn options === undefined ?
\t\t\t\t\tthis :
\t\t\t\t\tthis.each( function( i ) {
\t\t\t\t\t\tjQuery.offset.setOffset( this, options, i );
\t\t\t\t\t} );
\t\t\t}

\t\t\tvar rect, win,
\t\t\t\telem = this[ 0 ];

\t\t\tif ( !elem ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// Return zeros for disconnected and hidden (display: none) elements (gh-2310)
\t\t\t// Support: IE <=11 only
\t\t\t// Running getBoundingClientRect on a
\t\t\t// disconnected node in IE throws an error
\t\t\tif ( !elem.getClientRects().length ) {
\t\t\t\treturn { top: 0, left: 0 };
\t\t\t}

\t\t\t// Get document-relative position by adding viewport scroll to viewport-relative gBCR
\t\t\trect = elem.getBoundingClientRect();
\t\t\twin = elem.ownerDocument.defaultView;
\t\t\treturn {
\t\t\t\ttop: rect.top + win.pageYOffset,
\t\t\t\tleft: rect.left + win.pageXOffset
\t\t\t};
\t\t},

\t\t// position() relates an element's margin box to its offset parent's padding box
\t\t// This corresponds to the behavior of CSS absolute positioning
\t\tposition: function() {
\t\t\tif ( !this[ 0 ] ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tvar offsetParent, offset, doc,
\t\t\t\telem = this[ 0 ],
\t\t\t\tparentOffset = { top: 0, left: 0 };

\t\t\t// position:fixed elements are offset from the viewport, which itself always has zero offset
\t\t\tif ( jQuery.css( elem, \"position\" ) === \"fixed\" ) {

\t\t\t\t// Assume position:fixed implies availability of getBoundingClientRect
\t\t\t\toffset = elem.getBoundingClientRect();

\t\t\t} else {
\t\t\t\toffset = this.offset();

\t\t\t\t// Account for the *real* offset parent, which can be the document or its root element
\t\t\t\t// when a statically positioned element is identified
\t\t\t\tdoc = elem.ownerDocument;
\t\t\t\toffsetParent = elem.offsetParent || doc.documentElement;
\t\t\t\twhile ( offsetParent &&
\t\t\t\t( offsetParent === doc.body || offsetParent === doc.documentElement ) &&
\t\t\t\tjQuery.css( offsetParent, \"position\" ) === \"static\" ) {

\t\t\t\t\toffsetParent = offsetParent.parentNode;
\t\t\t\t}
\t\t\t\tif ( offsetParent && offsetParent !== elem && offsetParent.nodeType === 1 ) {

\t\t\t\t\t// Incorporate borders into its offset, since they are outside its content origin
\t\t\t\t\tparentOffset = jQuery( offsetParent ).offset();
\t\t\t\t\tparentOffset.top += jQuery.css( offsetParent, \"borderTopWidth\", true );
\t\t\t\t\tparentOffset.left += jQuery.css( offsetParent, \"borderLeftWidth\", true );
\t\t\t\t}
\t\t\t}

\t\t\t// Subtract parent offsets and element margins
\t\t\treturn {
\t\t\t\ttop: offset.top - parentOffset.top - jQuery.css( elem, \"marginTop\", true ),
\t\t\t\tleft: offset.left - parentOffset.left - jQuery.css( elem, \"marginLeft\", true )
\t\t\t};
\t\t},

\t\t// This method will return documentElement in the following cases:
\t\t// 1) For the element inside the iframe without offsetParent, this method will return
\t\t//    documentElement of the parent window
\t\t// 2) For the hidden or detached element
\t\t// 3) For body or html element, i.e. in case of the html node - it will return itself
\t\t//
\t\t// but those exceptions were never presented as a real life use-cases
\t\t// and might be considered as more preferable results.
\t\t//
\t\t// This logic, however, is not guaranteed and can change at any point in the future
\t\toffsetParent: function() {
\t\t\treturn this.map( function() {
\t\t\t\tvar offsetParent = this.offsetParent;

\t\t\t\twhile ( offsetParent && jQuery.css( offsetParent, \"position\" ) === \"static\" ) {
\t\t\t\t\toffsetParent = offsetParent.offsetParent;
\t\t\t\t}

\t\t\t\treturn offsetParent || documentElement;
\t\t\t} );
\t\t}
\t} );

// Create scrollLeft and scrollTop methods
\tjQuery.each( { scrollLeft: \"pageXOffset\", scrollTop: \"pageYOffset\" }, function( method, prop ) {
\t\tvar top = \"pageYOffset\" === prop;

\t\tjQuery.fn[ method ] = function( val ) {
\t\t\treturn access( this, function( elem, method, val ) {

\t\t\t\t// Coalesce documents and windows
\t\t\t\tvar win;
\t\t\t\tif ( isWindow( elem ) ) {
\t\t\t\t\twin = elem;
\t\t\t\t} else if ( elem.nodeType === 9 ) {
\t\t\t\t\twin = elem.defaultView;
\t\t\t\t}

\t\t\t\tif ( val === undefined ) {
\t\t\t\t\treturn win ? win[ prop ] : elem[ method ];
\t\t\t\t}

\t\t\t\tif ( win ) {
\t\t\t\t\twin.scrollTo(
\t\t\t\t\t\t!top ? val : win.pageXOffset,
\t\t\t\t\t\ttop ? val : win.pageYOffset
\t\t\t\t\t);

\t\t\t\t} else {
\t\t\t\t\telem[ method ] = val;
\t\t\t\t}
\t\t\t}, method, val, arguments.length );
\t\t};
\t} );

// Support: Safari <=7 - 9.1, Chrome <=37 - 49
// Add the top/left cssHooks using jQuery.fn.position
// Webkit bug: https://bugs.webkit.org/show_bug.cgi?id=29084
// Blink bug: https://bugs.chromium.org/p/chromium/issues/detail?id=589347
// getComputedStyle returns percent when specified for top/left/bottom/right;
// rather than make the css module depend on the offset module, just check for it here
\tjQuery.each( [ \"top\", \"left\" ], function( i, prop ) {
\t\tjQuery.cssHooks[ prop ] = addGetHookIf( support.pixelPosition,
\t\t\tfunction( elem, computed ) {
\t\t\t\tif ( computed ) {
\t\t\t\t\tcomputed = curCSS( elem, prop );

\t\t\t\t\t// If curCSS returns percentage, fallback to offset
\t\t\t\t\treturn rnumnonpx.test( computed ) ?
\t\t\t\t\t\tjQuery( elem ).position()[ prop ] + \"px\" :
\t\t\t\t\t\tcomputed;
\t\t\t\t}
\t\t\t}
\t\t);
\t} );


// Create innerHeight, innerWidth, height, width, outerHeight and outerWidth methods
\tjQuery.each( { Height: \"height\", Width: \"width\" }, function( name, type ) {
\t\tjQuery.each( { padding: \"inner\" + name, content: type, \"\": \"outer\" + name },
\t\t\tfunction( defaultExtra, funcName ) {

\t\t\t\t// Margin is only for outerHeight, outerWidth
\t\t\t\tjQuery.fn[ funcName ] = function( margin, value ) {
\t\t\t\t\tvar chainable = arguments.length && ( defaultExtra || typeof margin !== \"boolean\" ),
\t\t\t\t\t\textra = defaultExtra || ( margin === true || value === true ? \"margin\" : \"border\" );

\t\t\t\t\treturn access( this, function( elem, type, value ) {
\t\t\t\t\t\tvar doc;

\t\t\t\t\t\tif ( isWindow( elem ) ) {

\t\t\t\t\t\t\t// \$( window ).outerWidth/Height return w/h including scrollbars (gh-1729)
\t\t\t\t\t\t\treturn funcName.indexOf( \"outer\" ) === 0 ?
\t\t\t\t\t\t\t\telem[ \"inner\" + name ] :
\t\t\t\t\t\t\t\telem.document.documentElement[ \"client\" + name ];
\t\t\t\t\t\t}

\t\t\t\t\t\t// Get document width or height
\t\t\t\t\t\tif ( elem.nodeType === 9 ) {
\t\t\t\t\t\t\tdoc = elem.documentElement;

\t\t\t\t\t\t\t// Either scroll[Width/Height] or offset[Width/Height] or client[Width/Height],
\t\t\t\t\t\t\t// whichever is greatest
\t\t\t\t\t\t\treturn Math.max(
\t\t\t\t\t\t\t\telem.body[ \"scroll\" + name ], doc[ \"scroll\" + name ],
\t\t\t\t\t\t\t\telem.body[ \"offset\" + name ], doc[ \"offset\" + name ],
\t\t\t\t\t\t\t\tdoc[ \"client\" + name ]
\t\t\t\t\t\t\t);
\t\t\t\t\t\t}

\t\t\t\t\t\treturn value === undefined ?

\t\t\t\t\t\t\t// Get width or height on the element, requesting but not forcing parseFloat
\t\t\t\t\t\t\tjQuery.css( elem, type, extra ) :

\t\t\t\t\t\t\t// Set width or height on the element
\t\t\t\t\t\t\tjQuery.style( elem, type, value, extra );
\t\t\t\t\t}, type, chainable ? margin : undefined, chainable );
\t\t\t\t};
\t\t\t} );
\t} );


\tjQuery.each( ( \"blur focus focusin focusout resize scroll click dblclick \" +
\t\t\"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave \" +
\t\t\"change select submit keydown keypress keyup contextmenu\" ).split( \" \" ),
\t\tfunction( i, name ) {

\t\t\t// Handle event binding
\t\t\tjQuery.fn[ name ] = function( data, fn ) {
\t\t\t\treturn arguments.length > 0 ?
\t\t\t\t\tthis.on( name, null, data, fn ) :
\t\t\t\t\tthis.trigger( name );
\t\t\t};
\t\t} );

\tjQuery.fn.extend( {
\t\thover: function( fnOver, fnOut ) {
\t\t\treturn this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );
\t\t}
\t} );




\tjQuery.fn.extend( {

\t\tbind: function( types, data, fn ) {
\t\t\treturn this.on( types, null, data, fn );
\t\t},
\t\tunbind: function( types, fn ) {
\t\t\treturn this.off( types, null, fn );
\t\t},

\t\tdelegate: function( selector, types, data, fn ) {
\t\t\treturn this.on( types, selector, data, fn );
\t\t},
\t\tundelegate: function( selector, types, fn ) {

\t\t\t// ( namespace ) or ( selector, types [, fn] )
\t\t\treturn arguments.length === 1 ?
\t\t\t\tthis.off( selector, \"**\" ) :
\t\t\t\tthis.off( types, selector || \"**\", fn );
\t\t}
\t} );

// Bind a function to a context, optionally partially applying any
// arguments.
// jQuery.proxy is deprecated to promote standards (specifically Function#bind)
// However, it is not slated for removal any time soon
\tjQuery.proxy = function( fn, context ) {
\t\tvar tmp, args, proxy;

\t\tif ( typeof context === \"string\" ) {
\t\t\ttmp = fn[ context ];
\t\t\tcontext = fn;
\t\t\tfn = tmp;
\t\t}

\t\t// Quick check to determine if target is callable, in the spec
\t\t// this throws a TypeError, but we will just return undefined.
\t\tif ( !isFunction( fn ) ) {
\t\t\treturn undefined;
\t\t}

\t\t// Simulated bind
\t\targs = slice.call( arguments, 2 );
\t\tproxy = function() {
\t\t\treturn fn.apply( context || this, args.concat( slice.call( arguments ) ) );
\t\t};

\t\t// Set the guid of unique handler to the same of original handler, so it can be removed
\t\tproxy.guid = fn.guid = fn.guid || jQuery.guid++;

\t\treturn proxy;
\t};

\tjQuery.holdReady = function( hold ) {
\t\tif ( hold ) {
\t\t\tjQuery.readyWait++;
\t\t} else {
\t\t\tjQuery.ready( true );
\t\t}
\t};
\tjQuery.isArray = Array.isArray;
\tjQuery.parseJSON = JSON.parse;
\tjQuery.nodeName = nodeName;
\tjQuery.isFunction = isFunction;
\tjQuery.isWindow = isWindow;
\tjQuery.camelCase = camelCase;
\tjQuery.type = toType;

\tjQuery.now = Date.now;

\tjQuery.isNumeric = function( obj ) {

\t\t// As of jQuery 3.0, isNumeric is limited to
\t\t// strings and numbers (primitives or objects)
\t\t// that can be coerced to finite numbers (gh-2662)
\t\tvar type = jQuery.type( obj );
\t\treturn ( type === \"number\" || type === \"string\" ) &&

\t\t\t// parseFloat NaNs numeric-cast false positives (\"\")
\t\t\t// ...but misinterprets leading-number strings, particularly hex literals (\"0x...\")
\t\t\t// subtraction forces infinities to NaN
\t\t\t!isNaN( obj - parseFloat( obj ) );
\t};




// Register as a named AMD module, since jQuery can be concatenated with other
// files that may use define, but not via a proper concatenation script that
// understands anonymous AMD modules. A named AMD is safest and most robust
// way to register. Lowercase jquery is used because AMD module names are
// derived from file names, and jQuery is normally delivered in a lowercase
// file name. Do this after creating the global so that if an AMD module wants
// to call noConflict to hide this version of jQuery, it will work.

// Note that for maximum portability, libraries that are not jQuery should
// declare themselves as anonymous modules, and avoid setting a global if an
// AMD loader is present. jQuery is a special case. For more information, see
// https://github.com/jrburke/requirejs/wiki/Updating-existing-libraries#wiki-anon

\tif ( typeof define === \"function\" && define.amd ) {
\t\tdefine( \"jquery\", [], function() {
\t\t\treturn jQuery;
\t\t} );
\t}




\tvar

\t\t// Map over jQuery in case of overwrite
\t\t_jQuery = window.jQuery,

\t\t// Map over the \$ in case of overwrite
\t\t_\$ = window.\$;

\tjQuery.noConflict = function( deep ) {
\t\tif ( window.\$ === jQuery ) {
\t\t\twindow.\$ = _\$;
\t\t}

\t\tif ( deep && window.jQuery === jQuery ) {
\t\t\twindow.jQuery = _jQuery;
\t\t}

\t\treturn jQuery;
\t};

// Expose jQuery and \$ identifiers, even in AMD
// (#7102#comment:10, https://github.com/jquery/jquery/pull/557)
// and CommonJS for browser emulators (#13566)
\tif ( !noGlobal ) {
\t\twindow.jQuery = window.\$ = jQuery;
\t}




\treturn jQuery;
} );";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/2.jquery.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/2.jquery.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/2.jquery.js");
    }
}