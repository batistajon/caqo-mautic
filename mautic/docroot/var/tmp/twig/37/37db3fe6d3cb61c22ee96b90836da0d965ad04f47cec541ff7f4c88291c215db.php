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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widget.js */
class __TwigTemplate_d42d29e5c57fae2f28cf4d1597c28507e2c71fc4c3db6a99734dbc194474106d extends Template
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
 * jQuery UI Widget 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Widget
//>>group: Core
//>>description: Provides a factory for creating stateful widgets with a common API.
//>>docs: http://api.jqueryui.com/jQuery.widget/
//>>demos: http://jqueryui.com/widget/

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"jquery\", \"./version\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

var widgetUuid = 0;
var widgetSlice = Array.prototype.slice;

\$.cleanData = ( function( orig ) {
\treturn function( elems ) {
\t\tvar events, elem, i;
\t\tfor ( i = 0; ( elem = elems[ i ] ) != null; i++ ) {
\t\t\ttry {

\t\t\t\t// Only trigger remove when necessary to save time
\t\t\t\tevents = \$._data( elem, \"events\" );
\t\t\t\tif ( events && events.remove ) {
\t\t\t\t\t\$( elem ).triggerHandler( \"remove\" );
\t\t\t\t}

\t\t\t// Http://bugs.jquery.com/ticket/8235
\t\t\t} catch ( e ) {}
\t\t}
\t\torig( elems );
\t};
} )( \$.cleanData );

\$.widget = function( name, base, prototype ) {
\tvar existingConstructor, constructor, basePrototype;

\t// ProxiedPrototype allows the provided prototype to remain unmodified
\t// so that it can be used as a mixin for multiple widgets (#8876)
\tvar proxiedPrototype = {};

\tvar namespace = name.split( \".\" )[ 0 ];
\tname = name.split( \".\" )[ 1 ];
\tvar fullName = namespace + \"-\" + name;

\tif ( !prototype ) {
\t\tprototype = base;
\t\tbase = \$.Widget;
\t}

\tif ( \$.isArray( prototype ) ) {
\t\tprototype = \$.extend.apply( null, [ {} ].concat( prototype ) );
\t}

\t// Create selector for plugin
\t\$.expr[ \":\" ][ fullName.toLowerCase() ] = function( elem ) {
\t\treturn !!\$.data( elem, fullName );
\t};

\t\$[ namespace ] = \$[ namespace ] || {};
\texistingConstructor = \$[ namespace ][ name ];
\tconstructor = \$[ namespace ][ name ] = function( options, element ) {

\t\t// Allow instantiation without \"new\" keyword
\t\tif ( !this._createWidget ) {
\t\t\treturn new constructor( options, element );
\t\t}

\t\t// Allow instantiation without initializing for simple inheritance
\t\t// must use \"new\" keyword (the code above always passes args)
\t\tif ( arguments.length ) {
\t\t\tthis._createWidget( options, element );
\t\t}
\t};

\t// Extend with the existing constructor to carry over any static properties
\t\$.extend( constructor, existingConstructor, {
\t\tversion: prototype.version,

\t\t// Copy the object used to create the prototype in case we need to
\t\t// redefine the widget later
\t\t_proto: \$.extend( {}, prototype ),

\t\t// Track widgets that inherit from this widget in case this widget is
\t\t// redefined after a widget inherits from it
\t\t_childConstructors: []
\t} );

\tbasePrototype = new base();

\t// We need to make the options hash a property directly on the new instance
\t// otherwise we'll modify the options hash on the prototype that we're
\t// inheriting from
\tbasePrototype.options = \$.widget.extend( {}, basePrototype.options );
\t\$.each( prototype, function( prop, value ) {
\t\tif ( !\$.isFunction( value ) ) {
\t\t\tproxiedPrototype[ prop ] = value;
\t\t\treturn;
\t\t}
\t\tproxiedPrototype[ prop ] = ( function() {
\t\t\tfunction _super() {
\t\t\t\treturn base.prototype[ prop ].apply( this, arguments );
\t\t\t}

\t\t\tfunction _superApply( args ) {
\t\t\t\treturn base.prototype[ prop ].apply( this, args );
\t\t\t}

\t\t\treturn function() {
\t\t\t\tvar __super = this._super;
\t\t\t\tvar __superApply = this._superApply;
\t\t\t\tvar returnValue;

\t\t\t\tthis._super = _super;
\t\t\t\tthis._superApply = _superApply;

\t\t\t\treturnValue = value.apply( this, arguments );

\t\t\t\tthis._super = __super;
\t\t\t\tthis._superApply = __superApply;

\t\t\t\treturn returnValue;
\t\t\t};
\t\t} )();
\t} );
\tconstructor.prototype = \$.widget.extend( basePrototype, {

\t\t// TODO: remove support for widgetEventPrefix
\t\t// always use the name + a colon as the prefix, e.g., draggable:start
\t\t// don't prefix for widgets that aren't DOM-based
\t\twidgetEventPrefix: existingConstructor ? ( basePrototype.widgetEventPrefix || name ) : name
\t}, proxiedPrototype, {
\t\tconstructor: constructor,
\t\tnamespace: namespace,
\t\twidgetName: name,
\t\twidgetFullName: fullName
\t} );

\t// If this widget is being redefined then we need to find all widgets that
\t// are inheriting from it and redefine all of them so that they inherit from
\t// the new version of this widget. We're essentially trying to replace one
\t// level in the prototype chain.
\tif ( existingConstructor ) {
\t\t\$.each( existingConstructor._childConstructors, function( i, child ) {
\t\t\tvar childPrototype = child.prototype;

\t\t\t// Redefine the child widget using the same prototype that was
\t\t\t// originally used, but inherit from the new version of the base
\t\t\t\$.widget( childPrototype.namespace + \".\" + childPrototype.widgetName, constructor,
\t\t\t\tchild._proto );
\t\t} );

\t\t// Remove the list of existing child constructors from the old constructor
\t\t// so the old child constructors can be garbage collected
\t\tdelete existingConstructor._childConstructors;
\t} else {
\t\tbase._childConstructors.push( constructor );
\t}

\t\$.widget.bridge( name, constructor );

\treturn constructor;
};

\$.widget.extend = function( target ) {
\tvar input = widgetSlice.call( arguments, 1 );
\tvar inputIndex = 0;
\tvar inputLength = input.length;
\tvar key;
\tvar value;

\tfor ( ; inputIndex < inputLength; inputIndex++ ) {
\t\tfor ( key in input[ inputIndex ] ) {
\t\t\tvalue = input[ inputIndex ][ key ];
\t\t\tif ( input[ inputIndex ].hasOwnProperty( key ) && value !== undefined ) {

\t\t\t\t// Clone objects
\t\t\t\tif ( \$.isPlainObject( value ) ) {
\t\t\t\t\ttarget[ key ] = \$.isPlainObject( target[ key ] ) ?
\t\t\t\t\t\t\$.widget.extend( {}, target[ key ], value ) :

\t\t\t\t\t\t// Don't extend strings, arrays, etc. with objects
\t\t\t\t\t\t\$.widget.extend( {}, value );

\t\t\t\t// Copy everything else by reference
\t\t\t\t} else {
\t\t\t\t\ttarget[ key ] = value;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
\treturn target;
};

\$.widget.bridge = function( name, object ) {
\tvar fullName = object.prototype.widgetFullName || name;
\t\$.fn[ name ] = function( options ) {
\t\tvar isMethodCall = typeof options === \"string\";
\t\tvar args = widgetSlice.call( arguments, 1 );
\t\tvar returnValue = this;

\t\tif ( isMethodCall ) {

\t\t\t// If this is an empty collection, we need to have the instance method
\t\t\t// return undefined instead of the jQuery instance
\t\t\tif ( !this.length && options === \"instance\" ) {
\t\t\t\treturnValue = undefined;
\t\t\t} else {
\t\t\t\tthis.each( function() {
\t\t\t\t\tvar methodValue;
\t\t\t\t\tvar instance = \$.data( this, fullName );

\t\t\t\t\tif ( options === \"instance\" ) {
\t\t\t\t\t\treturnValue = instance;
\t\t\t\t\t\treturn false;
\t\t\t\t\t}

\t\t\t\t\tif ( !instance ) {
\t\t\t\t\t\treturn \$.error( \"cannot call methods on \" + name +
\t\t\t\t\t\t\t\" prior to initialization; \" +
\t\t\t\t\t\t\t\"attempted to call method '\" + options + \"'\" );
\t\t\t\t\t}

\t\t\t\t\tif ( !\$.isFunction( instance[ options ] ) || options.charAt( 0 ) === \"_\" ) {
\t\t\t\t\t\treturn \$.error( \"no such method '\" + options + \"' for \" + name +
\t\t\t\t\t\t\t\" widget instance\" );
\t\t\t\t\t}

\t\t\t\t\tmethodValue = instance[ options ].apply( instance, args );

\t\t\t\t\tif ( methodValue !== instance && methodValue !== undefined ) {
\t\t\t\t\t\treturnValue = methodValue && methodValue.jquery ?
\t\t\t\t\t\t\treturnValue.pushStack( methodValue.get() ) :
\t\t\t\t\t\t\tmethodValue;
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t} );
\t\t\t}
\t\t} else {

\t\t\t// Allow multiple hashes to be passed on init
\t\t\tif ( args.length ) {
\t\t\t\toptions = \$.widget.extend.apply( null, [ options ].concat( args ) );
\t\t\t}

\t\t\tthis.each( function() {
\t\t\t\tvar instance = \$.data( this, fullName );
\t\t\t\tif ( instance ) {
\t\t\t\t\tinstance.option( options || {} );
\t\t\t\t\tif ( instance._init ) {
\t\t\t\t\t\tinstance._init();
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t\$.data( this, fullName, new object( options, this ) );
\t\t\t\t}
\t\t\t} );
\t\t}

\t\treturn returnValue;
\t};
};

\$.Widget = function( /* options, element */ ) {};
\$.Widget._childConstructors = [];

\$.Widget.prototype = {
\twidgetName: \"widget\",
\twidgetEventPrefix: \"\",
\tdefaultElement: \"<div>\",

\toptions: {
\t\tclasses: {},
\t\tdisabled: false,

\t\t// Callbacks
\t\tcreate: null
\t},

\t_createWidget: function( options, element ) {
\t\telement = \$( element || this.defaultElement || this )[ 0 ];
\t\tthis.element = \$( element );
\t\tthis.uuid = widgetUuid++;
\t\tthis.eventNamespace = \".\" + this.widgetName + this.uuid;

\t\tthis.bindings = \$();
\t\tthis.hoverable = \$();
\t\tthis.focusable = \$();
\t\tthis.classesElementLookup = {};

\t\tif ( element !== this ) {
\t\t\t\$.data( element, this.widgetFullName, this );
\t\t\tthis._on( true, this.element, {
\t\t\t\tremove: function( event ) {
\t\t\t\t\tif ( event.target === element ) {
\t\t\t\t\t\tthis.destroy();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} );
\t\t\tthis.document = \$( element.style ?

\t\t\t\t// Element within the document
\t\t\t\telement.ownerDocument :

\t\t\t\t// Element is window or document
\t\t\t\telement.document || element );
\t\t\tthis.window = \$( this.document[ 0 ].defaultView || this.document[ 0 ].parentWindow );
\t\t}

\t\tthis.options = \$.widget.extend( {},
\t\t\tthis.options,
\t\t\tthis._getCreateOptions(),
\t\t\toptions );

\t\tthis._create();

\t\tif ( this.options.disabled ) {
\t\t\tthis._setOptionDisabled( this.options.disabled );
\t\t}

\t\tthis._trigger( \"create\", null, this._getCreateEventData() );
\t\tthis._init();
\t},

\t_getCreateOptions: function() {
\t\treturn {};
\t},

\t_getCreateEventData: \$.noop,

\t_create: \$.noop,

\t_init: \$.noop,

\tdestroy: function() {
\t\tvar that = this;

\t\tthis._destroy();
\t\t\$.each( this.classesElementLookup, function( key, value ) {
\t\t\tthat._removeClass( value, key );
\t\t} );

\t\t// We can probably remove the unbind calls in 2.0
\t\t// all event bindings should go through this._on()
\t\tthis.element
\t\t\t.off( this.eventNamespace )
\t\t\t.removeData( this.widgetFullName );
\t\tthis.widget()
\t\t\t.off( this.eventNamespace )
\t\t\t.removeAttr( \"aria-disabled\" );

\t\t// Clean up events and states
\t\tthis.bindings.off( this.eventNamespace );
\t},

\t_destroy: \$.noop,

\twidget: function() {
\t\treturn this.element;
\t},

\toption: function( key, value ) {
\t\tvar options = key;
\t\tvar parts;
\t\tvar curOption;
\t\tvar i;

\t\tif ( arguments.length === 0 ) {

\t\t\t// Don't return a reference to the internal hash
\t\t\treturn \$.widget.extend( {}, this.options );
\t\t}

\t\tif ( typeof key === \"string\" ) {

\t\t\t// Handle nested keys, e.g., \"foo.bar\" => { foo: { bar: ___ } }
\t\t\toptions = {};
\t\t\tparts = key.split( \".\" );
\t\t\tkey = parts.shift();
\t\t\tif ( parts.length ) {
\t\t\t\tcurOption = options[ key ] = \$.widget.extend( {}, this.options[ key ] );
\t\t\t\tfor ( i = 0; i < parts.length - 1; i++ ) {
\t\t\t\t\tcurOption[ parts[ i ] ] = curOption[ parts[ i ] ] || {};
\t\t\t\t\tcurOption = curOption[ parts[ i ] ];
\t\t\t\t}
\t\t\t\tkey = parts.pop();
\t\t\t\tif ( arguments.length === 1 ) {
\t\t\t\t\treturn curOption[ key ] === undefined ? null : curOption[ key ];
\t\t\t\t}
\t\t\t\tcurOption[ key ] = value;
\t\t\t} else {
\t\t\t\tif ( arguments.length === 1 ) {
\t\t\t\t\treturn this.options[ key ] === undefined ? null : this.options[ key ];
\t\t\t\t}
\t\t\t\toptions[ key ] = value;
\t\t\t}
\t\t}

\t\tthis._setOptions( options );

\t\treturn this;
\t},

\t_setOptions: function( options ) {
\t\tvar key;

\t\tfor ( key in options ) {
\t\t\tthis._setOption( key, options[ key ] );
\t\t}

\t\treturn this;
\t},

\t_setOption: function( key, value ) {
\t\tif ( key === \"classes\" ) {
\t\t\tthis._setOptionClasses( value );
\t\t}

\t\tthis.options[ key ] = value;

\t\tif ( key === \"disabled\" ) {
\t\t\tthis._setOptionDisabled( value );
\t\t}

\t\treturn this;
\t},

\t_setOptionClasses: function( value ) {
\t\tvar classKey, elements, currentElements;

\t\tfor ( classKey in value ) {
\t\t\tcurrentElements = this.classesElementLookup[ classKey ];
\t\t\tif ( value[ classKey ] === this.options.classes[ classKey ] ||
\t\t\t\t\t!currentElements ||
\t\t\t\t\t!currentElements.length ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\t// We are doing this to create a new jQuery object because the _removeClass() call
\t\t\t// on the next line is going to destroy the reference to the current elements being
\t\t\t// tracked. We need to save a copy of this collection so that we can add the new classes
\t\t\t// below.
\t\t\telements = \$( currentElements.get() );
\t\t\tthis._removeClass( currentElements, classKey );

\t\t\t// We don't use _addClass() here, because that uses this.options.classes
\t\t\t// for generating the string of classes. We want to use the value passed in from
\t\t\t// _setOption(), this is the new value of the classes option which was passed to
\t\t\t// _setOption(). We pass this value directly to _classes().
\t\t\telements.addClass( this._classes( {
\t\t\t\telement: elements,
\t\t\t\tkeys: classKey,
\t\t\t\tclasses: value,
\t\t\t\tadd: true
\t\t\t} ) );
\t\t}
\t},

\t_setOptionDisabled: function( value ) {
\t\tthis._toggleClass( this.widget(), this.widgetFullName + \"-disabled\", null, !!value );

\t\t// If the widget is becoming disabled, then nothing is interactive
\t\tif ( value ) {
\t\t\tthis._removeClass( this.hoverable, null, \"ui-state-hover\" );
\t\t\tthis._removeClass( this.focusable, null, \"ui-state-focus\" );
\t\t}
\t},

\tenable: function() {
\t\treturn this._setOptions( { disabled: false } );
\t},

\tdisable: function() {
\t\treturn this._setOptions( { disabled: true } );
\t},

\t_classes: function( options ) {
\t\tvar full = [];
\t\tvar that = this;

\t\toptions = \$.extend( {
\t\t\telement: this.element,
\t\t\tclasses: this.options.classes || {}
\t\t}, options );

\t\tfunction processClassString( classes, checkOption ) {
\t\t\tvar current, i;
\t\t\tfor ( i = 0; i < classes.length; i++ ) {
\t\t\t\tcurrent = that.classesElementLookup[ classes[ i ] ] || \$();
\t\t\t\tif ( options.add ) {
\t\t\t\t\tcurrent = \$( \$.unique( current.get().concat( options.element.get() ) ) );
\t\t\t\t} else {
\t\t\t\t\tcurrent = \$( current.not( options.element ).get() );
\t\t\t\t}
\t\t\t\tthat.classesElementLookup[ classes[ i ] ] = current;
\t\t\t\tfull.push( classes[ i ] );
\t\t\t\tif ( checkOption && options.classes[ classes[ i ] ] ) {
\t\t\t\t\tfull.push( options.classes[ classes[ i ] ] );
\t\t\t\t}
\t\t\t}
\t\t}

\t\tthis._on( options.element, {
\t\t\t\"remove\": \"_untrackClassesElement\"
\t\t} );

\t\tif ( options.keys ) {
\t\t\tprocessClassString( options.keys.match( /\\S+/g ) || [], true );
\t\t}
\t\tif ( options.extra ) {
\t\t\tprocessClassString( options.extra.match( /\\S+/g ) || [] );
\t\t}

\t\treturn full.join( \" \" );
\t},

\t_untrackClassesElement: function( event ) {
\t\tvar that = this;
\t\t\$.each( that.classesElementLookup, function( key, value ) {
\t\t\tif ( \$.inArray( event.target, value ) !== -1 ) {
\t\t\t\tthat.classesElementLookup[ key ] = \$( value.not( event.target ).get() );
\t\t\t}
\t\t} );
\t},

\t_removeClass: function( element, keys, extra ) {
\t\treturn this._toggleClass( element, keys, extra, false );
\t},

\t_addClass: function( element, keys, extra ) {
\t\treturn this._toggleClass( element, keys, extra, true );
\t},

\t_toggleClass: function( element, keys, extra, add ) {
\t\tadd = ( typeof add === \"boolean\" ) ? add : extra;
\t\tvar shift = ( typeof element === \"string\" || element === null ),
\t\t\toptions = {
\t\t\t\textra: shift ? keys : extra,
\t\t\t\tkeys: shift ? element : keys,
\t\t\t\telement: shift ? this.element : element,
\t\t\t\tadd: add
\t\t\t};
\t\toptions.element.toggleClass( this._classes( options ), add );
\t\treturn this;
\t},

\t_on: function( suppressDisabledCheck, element, handlers ) {
\t\tvar delegateElement;
\t\tvar instance = this;

\t\t// No suppressDisabledCheck flag, shuffle arguments
\t\tif ( typeof suppressDisabledCheck !== \"boolean\" ) {
\t\t\thandlers = element;
\t\t\telement = suppressDisabledCheck;
\t\t\tsuppressDisabledCheck = false;
\t\t}

\t\t// No element argument, shuffle and use this.element
\t\tif ( !handlers ) {
\t\t\thandlers = element;
\t\t\telement = this.element;
\t\t\tdelegateElement = this.widget();
\t\t} else {
\t\t\telement = delegateElement = \$( element );
\t\t\tthis.bindings = this.bindings.add( element );
\t\t}

\t\t\$.each( handlers, function( event, handler ) {
\t\t\tfunction handlerProxy() {

\t\t\t\t// Allow widgets to customize the disabled handling
\t\t\t\t// - disabled as an array instead of boolean
\t\t\t\t// - disabled class as method for disabling individual parts
\t\t\t\tif ( !suppressDisabledCheck &&
\t\t\t\t\t\t( instance.options.disabled === true ||
\t\t\t\t\t\t\$( this ).hasClass( \"ui-state-disabled\" ) ) ) {
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\treturn ( typeof handler === \"string\" ? instance[ handler ] : handler )
\t\t\t\t\t.apply( instance, arguments );
\t\t\t}

\t\t\t// Copy the guid so direct unbinding works
\t\t\tif ( typeof handler !== \"string\" ) {
\t\t\t\thandlerProxy.guid = handler.guid =
\t\t\t\t\thandler.guid || handlerProxy.guid || \$.guid++;
\t\t\t}

\t\t\tvar match = event.match( /^([\\w:-]*)\\s*(.*)\$/ );
\t\t\tvar eventName = match[ 1 ] + instance.eventNamespace;
\t\t\tvar selector = match[ 2 ];

\t\t\tif ( selector ) {
\t\t\t\tdelegateElement.on( eventName, selector, handlerProxy );
\t\t\t} else {
\t\t\t\telement.on( eventName, handlerProxy );
\t\t\t}
\t\t} );
\t},

\t_off: function( element, eventName ) {
\t\teventName = ( eventName || \"\" ).split( \" \" ).join( this.eventNamespace + \" \" ) +
\t\t\tthis.eventNamespace;
\t\telement.off( eventName ).off( eventName );

\t\t// Clear the stack to avoid memory leaks (#10056)
\t\tthis.bindings = \$( this.bindings.not( element ).get() );
\t\tthis.focusable = \$( this.focusable.not( element ).get() );
\t\tthis.hoverable = \$( this.hoverable.not( element ).get() );
\t},

\t_delay: function( handler, delay ) {
\t\tfunction handlerProxy() {
\t\t\treturn ( typeof handler === \"string\" ? instance[ handler ] : handler )
\t\t\t\t.apply( instance, arguments );
\t\t}
\t\tvar instance = this;
\t\treturn setTimeout( handlerProxy, delay || 0 );
\t},

\t_hoverable: function( element ) {
\t\tthis.hoverable = this.hoverable.add( element );
\t\tthis._on( element, {
\t\t\tmouseenter: function( event ) {
\t\t\t\tthis._addClass( \$( event.currentTarget ), null, \"ui-state-hover\" );
\t\t\t},
\t\t\tmouseleave: function( event ) {
\t\t\t\tthis._removeClass( \$( event.currentTarget ), null, \"ui-state-hover\" );
\t\t\t}
\t\t} );
\t},

\t_focusable: function( element ) {
\t\tthis.focusable = this.focusable.add( element );
\t\tthis._on( element, {
\t\t\tfocusin: function( event ) {
\t\t\t\tthis._addClass( \$( event.currentTarget ), null, \"ui-state-focus\" );
\t\t\t},
\t\t\tfocusout: function( event ) {
\t\t\t\tthis._removeClass( \$( event.currentTarget ), null, \"ui-state-focus\" );
\t\t\t}
\t\t} );
\t},

\t_trigger: function( type, event, data ) {
\t\tvar prop, orig;
\t\tvar callback = this.options[ type ];

\t\tdata = data || {};
\t\tevent = \$.Event( event );
\t\tevent.type = ( type === this.widgetEventPrefix ?
\t\t\ttype :
\t\t\tthis.widgetEventPrefix + type ).toLowerCase();

\t\t// The original event may come from any element
\t\t// so we need to reset the target on the new event
\t\tevent.target = this.element[ 0 ];

\t\t// Copy original event properties over to the new event
\t\torig = event.originalEvent;
\t\tif ( orig ) {
\t\t\tfor ( prop in orig ) {
\t\t\t\tif ( !( prop in event ) ) {
\t\t\t\t\tevent[ prop ] = orig[ prop ];
\t\t\t\t}
\t\t\t}
\t\t}

\t\tthis.element.trigger( event, data );
\t\treturn !( \$.isFunction( callback ) &&
\t\t\tcallback.apply( this.element[ 0 ], [ event ].concat( data ) ) === false ||
\t\t\tevent.isDefaultPrevented() );
\t}
};

\$.each( { show: \"fadeIn\", hide: \"fadeOut\" }, function( method, defaultEffect ) {
\t\$.Widget.prototype[ \"_\" + method ] = function( element, options, callback ) {
\t\tif ( typeof options === \"string\" ) {
\t\t\toptions = { effect: options };
\t\t}

\t\tvar hasOptions;
\t\tvar effectName = !options ?
\t\t\tmethod :
\t\t\toptions === true || typeof options === \"number\" ?
\t\t\t\tdefaultEffect :
\t\t\t\toptions.effect || defaultEffect;

\t\toptions = options || {};
\t\tif ( typeof options === \"number\" ) {
\t\t\toptions = { duration: options };
\t\t}

\t\thasOptions = !\$.isEmptyObject( options );
\t\toptions.complete = callback;

\t\tif ( options.delay ) {
\t\t\telement.delay( options.delay );
\t\t}

\t\tif ( hasOptions && \$.effects && \$.effects.effect[ effectName ] ) {
\t\t\telement[ method ]( options );
\t\t} else if ( effectName !== method && element[ effectName ] ) {
\t\t\telement[ effectName ]( options.duration, options.easing, callback );
\t\t} else {
\t\t\telement.queue( function( next ) {
\t\t\t\t\$( this )[ method ]();
\t\t\t\tif ( callback ) {
\t\t\t\t\tcallback.call( element[ 0 ] );
\t\t\t\t}
\t\t\t\tnext();
\t\t\t} );
\t\t}
\t};
} );

return \$.widget;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widget.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widget.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widget.js");
    }
}
