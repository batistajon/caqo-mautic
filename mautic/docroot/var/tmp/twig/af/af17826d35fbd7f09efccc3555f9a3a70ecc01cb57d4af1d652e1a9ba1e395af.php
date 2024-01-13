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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/jquery-ui-built.js */
class __TwigTemplate_3fc7f6c26708d47f2129d2f69976778efc1a1e74764b5207192b665401237960 extends Template
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
        echo "/*! jQuery UI - v1.12.1 - 2016-09-14
* http://jqueryui.com
* Includes: widget.js, position.js, data.js, disable-selection.js, effect.js, effects/effect-blind.js, effects/effect-bounce.js, effects/effect-clip.js, effects/effect-drop.js, effects/effect-explode.js, effects/effect-fade.js, effects/effect-fold.js, effects/effect-highlight.js, effects/effect-puff.js, effects/effect-pulsate.js, effects/effect-scale.js, effects/effect-shake.js, effects/effect-size.js, effects/effect-slide.js, effects/effect-transfer.js, focusable.js, form-reset-mixin.js, jquery-1-7.js, keycode.js, labels.js, scroll-parent.js, tabbable.js, unique-id.js, widgets/accordion.js, widgets/autocomplete.js, widgets/button.js, widgets/checkboxradio.js, widgets/controlgroup.js, widgets/datepicker.js, widgets/dialog.js, widgets/draggable.js, widgets/droppable.js, widgets/menu.js, widgets/mouse.js, widgets/progressbar.js, widgets/resizable.js, widgets/selectable.js, widgets/selectmenu.js, widgets/slider.js, widgets/sortable.js, widgets/spinner.js, widgets/tabs.js, widgets/tooltip.js
* Copyright jQuery Foundation and other contributors; Licensed MIT */

(function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine([ \"jquery\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}(function( \$ ) {

\$.ui = \$.ui || {};

var version = \$.ui.version = \"1.12.1\";


/*!
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

var widget = \$.widget;


/*!
 * jQuery UI Position 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/position/
 */

//>>label: Position
//>>group: Core
//>>description: Positions elements relative to other elements.
//>>docs: http://api.jqueryui.com/position/
//>>demos: http://jqueryui.com/position/


( function() {
var cachedScrollbarWidth,
\tmax = Math.max,
\tabs = Math.abs,
\trhorizontal = /left|center|right/,
\trvertical = /top|center|bottom/,
\troffset = /[\\+\\-]\\d+(\\.[\\d]+)?%?/,
\trposition = /^\\w+/,
\trpercent = /%\$/,
\t_position = \$.fn.position;

function getOffsets( offsets, width, height ) {
\treturn [
\t\tparseFloat( offsets[ 0 ] ) * ( rpercent.test( offsets[ 0 ] ) ? width / 100 : 1 ),
\t\tparseFloat( offsets[ 1 ] ) * ( rpercent.test( offsets[ 1 ] ) ? height / 100 : 1 )
\t];
}

function parseCss( element, property ) {
\treturn parseInt( \$.css( element, property ), 10 ) || 0;
}

function getDimensions( elem ) {
\tvar raw = elem[ 0 ];
\tif ( raw.nodeType === 9 ) {
\t\treturn {
\t\t\twidth: elem.width(),
\t\t\theight: elem.height(),
\t\t\toffset: { top: 0, left: 0 }
\t\t};
\t}
\tif ( \$.isWindow( raw ) ) {
\t\treturn {
\t\t\twidth: elem.width(),
\t\t\theight: elem.height(),
\t\t\toffset: { top: elem.scrollTop(), left: elem.scrollLeft() }
\t\t};
\t}
\tif ( raw.preventDefault ) {
\t\treturn {
\t\t\twidth: 0,
\t\t\theight: 0,
\t\t\toffset: { top: raw.pageY, left: raw.pageX }
\t\t};
\t}
\treturn {
\t\twidth: elem.outerWidth(),
\t\theight: elem.outerHeight(),
\t\toffset: elem.offset()
\t};
}

\$.position = {
\tscrollbarWidth: function() {
\t\tif ( cachedScrollbarWidth !== undefined ) {
\t\t\treturn cachedScrollbarWidth;
\t\t}
\t\tvar w1, w2,
\t\t\tdiv = \$( \"<div \" +
\t\t\t\t\"style='display:block;position:absolute;width:50px;height:50px;overflow:hidden;'>\" +
\t\t\t\t\"<div style='height:100px;width:auto;'></div></div>\" ),
\t\t\tinnerDiv = div.children()[ 0 ];

\t\t\$( \"body\" ).append( div );
\t\tw1 = innerDiv.offsetWidth;
\t\tdiv.css( \"overflow\", \"scroll\" );

\t\tw2 = innerDiv.offsetWidth;

\t\tif ( w1 === w2 ) {
\t\t\tw2 = div[ 0 ].clientWidth;
\t\t}

\t\tdiv.remove();

\t\treturn ( cachedScrollbarWidth = w1 - w2 );
\t},
\tgetScrollInfo: function( within ) {
\t\tvar overflowX = within.isWindow || within.isDocument ? \"\" :
\t\t\t\twithin.element.css( \"overflow-x\" ),
\t\t\toverflowY = within.isWindow || within.isDocument ? \"\" :
\t\t\t\twithin.element.css( \"overflow-y\" ),
\t\t\thasOverflowX = overflowX === \"scroll\" ||
\t\t\t\t( overflowX === \"auto\" && within.width < within.element[ 0 ].scrollWidth ),
\t\t\thasOverflowY = overflowY === \"scroll\" ||
\t\t\t\t( overflowY === \"auto\" && within.height < within.element[ 0 ].scrollHeight );
\t\treturn {
\t\t\twidth: hasOverflowY ? \$.position.scrollbarWidth() : 0,
\t\t\theight: hasOverflowX ? \$.position.scrollbarWidth() : 0
\t\t};
\t},
\tgetWithinInfo: function( element ) {
\t\tvar withinElement = \$( element || window ),
\t\t\tisWindow = \$.isWindow( withinElement[ 0 ] ),
\t\t\tisDocument = !!withinElement[ 0 ] && withinElement[ 0 ].nodeType === 9,
\t\t\thasOffset = !isWindow && !isDocument;
\t\treturn {
\t\t\telement: withinElement,
\t\t\tisWindow: isWindow,
\t\t\tisDocument: isDocument,
\t\t\toffset: hasOffset ? \$( element ).offset() : { left: 0, top: 0 },
\t\t\tscrollLeft: withinElement.scrollLeft(),
\t\t\tscrollTop: withinElement.scrollTop(),
\t\t\twidth: withinElement.outerWidth(),
\t\t\theight: withinElement.outerHeight()
\t\t};
\t}
};

\$.fn.position = function( options ) {
\tif ( !options || !options.of ) {
\t\treturn _position.apply( this, arguments );
\t}

\t// Make a copy, we don't want to modify arguments
\toptions = \$.extend( {}, options );

\tvar atOffset, targetWidth, targetHeight, targetOffset, basePosition, dimensions,
\t\ttarget = \$( options.of ),
\t\twithin = \$.position.getWithinInfo( options.within ),
\t\tscrollInfo = \$.position.getScrollInfo( within ),
\t\tcollision = ( options.collision || \"flip\" ).split( \" \" ),
\t\toffsets = {};

\tdimensions = getDimensions( target );
\tif ( target[ 0 ].preventDefault ) {

\t\t// Force left top to allow flipping
\t\toptions.at = \"left top\";
\t}
\ttargetWidth = dimensions.width;
\ttargetHeight = dimensions.height;
\ttargetOffset = dimensions.offset;

\t// Clone to reuse original targetOffset later
\tbasePosition = \$.extend( {}, targetOffset );

\t// Force my and at to have valid horizontal and vertical positions
\t// if a value is missing or invalid, it will be converted to center
\t\$.each( [ \"my\", \"at\" ], function() {
\t\tvar pos = ( options[ this ] || \"\" ).split( \" \" ),
\t\t\thorizontalOffset,
\t\t\tverticalOffset;

\t\tif ( pos.length === 1 ) {
\t\t\tpos = rhorizontal.test( pos[ 0 ] ) ?
\t\t\t\tpos.concat( [ \"center\" ] ) :
\t\t\t\trvertical.test( pos[ 0 ] ) ?
\t\t\t\t\t[ \"center\" ].concat( pos ) :
\t\t\t\t\t[ \"center\", \"center\" ];
\t\t}
\t\tpos[ 0 ] = rhorizontal.test( pos[ 0 ] ) ? pos[ 0 ] : \"center\";
\t\tpos[ 1 ] = rvertical.test( pos[ 1 ] ) ? pos[ 1 ] : \"center\";

\t\t// Calculate offsets
\t\thorizontalOffset = roffset.exec( pos[ 0 ] );
\t\tverticalOffset = roffset.exec( pos[ 1 ] );
\t\toffsets[ this ] = [
\t\t\thorizontalOffset ? horizontalOffset[ 0 ] : 0,
\t\t\tverticalOffset ? verticalOffset[ 0 ] : 0
\t\t];

\t\t// Reduce to just the positions without the offsets
\t\toptions[ this ] = [
\t\t\trposition.exec( pos[ 0 ] )[ 0 ],
\t\t\trposition.exec( pos[ 1 ] )[ 0 ]
\t\t];
\t} );

\t// Normalize collision option
\tif ( collision.length === 1 ) {
\t\tcollision[ 1 ] = collision[ 0 ];
\t}

\tif ( options.at[ 0 ] === \"right\" ) {
\t\tbasePosition.left += targetWidth;
\t} else if ( options.at[ 0 ] === \"center\" ) {
\t\tbasePosition.left += targetWidth / 2;
\t}

\tif ( options.at[ 1 ] === \"bottom\" ) {
\t\tbasePosition.top += targetHeight;
\t} else if ( options.at[ 1 ] === \"center\" ) {
\t\tbasePosition.top += targetHeight / 2;
\t}

\tatOffset = getOffsets( offsets.at, targetWidth, targetHeight );
\tbasePosition.left += atOffset[ 0 ];
\tbasePosition.top += atOffset[ 1 ];

\treturn this.each( function() {
\t\tvar collisionPosition, using,
\t\t\telem = \$( this ),
\t\t\telemWidth = elem.outerWidth(),
\t\t\telemHeight = elem.outerHeight(),
\t\t\tmarginLeft = parseCss( this, \"marginLeft\" ),
\t\t\tmarginTop = parseCss( this, \"marginTop\" ),
\t\t\tcollisionWidth = elemWidth + marginLeft + parseCss( this, \"marginRight\" ) +
\t\t\t\tscrollInfo.width,
\t\t\tcollisionHeight = elemHeight + marginTop + parseCss( this, \"marginBottom\" ) +
\t\t\t\tscrollInfo.height,
\t\t\tposition = \$.extend( {}, basePosition ),
\t\t\tmyOffset = getOffsets( offsets.my, elem.outerWidth(), elem.outerHeight() );

\t\tif ( options.my[ 0 ] === \"right\" ) {
\t\t\tposition.left -= elemWidth;
\t\t} else if ( options.my[ 0 ] === \"center\" ) {
\t\t\tposition.left -= elemWidth / 2;
\t\t}

\t\tif ( options.my[ 1 ] === \"bottom\" ) {
\t\t\tposition.top -= elemHeight;
\t\t} else if ( options.my[ 1 ] === \"center\" ) {
\t\t\tposition.top -= elemHeight / 2;
\t\t}

\t\tposition.left += myOffset[ 0 ];
\t\tposition.top += myOffset[ 1 ];

\t\tcollisionPosition = {
\t\t\tmarginLeft: marginLeft,
\t\t\tmarginTop: marginTop
\t\t};

\t\t\$.each( [ \"left\", \"top\" ], function( i, dir ) {
\t\t\tif ( \$.ui.position[ collision[ i ] ] ) {
\t\t\t\t\$.ui.position[ collision[ i ] ][ dir ]( position, {
\t\t\t\t\ttargetWidth: targetWidth,
\t\t\t\t\ttargetHeight: targetHeight,
\t\t\t\t\telemWidth: elemWidth,
\t\t\t\t\telemHeight: elemHeight,
\t\t\t\t\tcollisionPosition: collisionPosition,
\t\t\t\t\tcollisionWidth: collisionWidth,
\t\t\t\t\tcollisionHeight: collisionHeight,
\t\t\t\t\toffset: [ atOffset[ 0 ] + myOffset[ 0 ], atOffset [ 1 ] + myOffset[ 1 ] ],
\t\t\t\t\tmy: options.my,
\t\t\t\t\tat: options.at,
\t\t\t\t\twithin: within,
\t\t\t\t\telem: elem
\t\t\t\t} );
\t\t\t}
\t\t} );

\t\tif ( options.using ) {

\t\t\t// Adds feedback as second argument to using callback, if present
\t\t\tusing = function( props ) {
\t\t\t\tvar left = targetOffset.left - position.left,
\t\t\t\t\tright = left + targetWidth - elemWidth,
\t\t\t\t\ttop = targetOffset.top - position.top,
\t\t\t\t\tbottom = top + targetHeight - elemHeight,
\t\t\t\t\tfeedback = {
\t\t\t\t\t\ttarget: {
\t\t\t\t\t\t\telement: target,
\t\t\t\t\t\t\tleft: targetOffset.left,
\t\t\t\t\t\t\ttop: targetOffset.top,
\t\t\t\t\t\t\twidth: targetWidth,
\t\t\t\t\t\t\theight: targetHeight
\t\t\t\t\t\t},
\t\t\t\t\t\telement: {
\t\t\t\t\t\t\telement: elem,
\t\t\t\t\t\t\tleft: position.left,
\t\t\t\t\t\t\ttop: position.top,
\t\t\t\t\t\t\twidth: elemWidth,
\t\t\t\t\t\t\theight: elemHeight
\t\t\t\t\t\t},
\t\t\t\t\t\thorizontal: right < 0 ? \"left\" : left > 0 ? \"right\" : \"center\",
\t\t\t\t\t\tvertical: bottom < 0 ? \"top\" : top > 0 ? \"bottom\" : \"middle\"
\t\t\t\t\t};
\t\t\t\tif ( targetWidth < elemWidth && abs( left + right ) < targetWidth ) {
\t\t\t\t\tfeedback.horizontal = \"center\";
\t\t\t\t}
\t\t\t\tif ( targetHeight < elemHeight && abs( top + bottom ) < targetHeight ) {
\t\t\t\t\tfeedback.vertical = \"middle\";
\t\t\t\t}
\t\t\t\tif ( max( abs( left ), abs( right ) ) > max( abs( top ), abs( bottom ) ) ) {
\t\t\t\t\tfeedback.important = \"horizontal\";
\t\t\t\t} else {
\t\t\t\t\tfeedback.important = \"vertical\";
\t\t\t\t}
\t\t\t\toptions.using.call( this, props, feedback );
\t\t\t};
\t\t}

\t\telem.offset( \$.extend( position, { using: using } ) );
\t} );
};

\$.ui.position = {
\tfit: {
\t\tleft: function( position, data ) {
\t\t\tvar within = data.within,
\t\t\t\twithinOffset = within.isWindow ? within.scrollLeft : within.offset.left,
\t\t\t\touterWidth = within.width,
\t\t\t\tcollisionPosLeft = position.left - data.collisionPosition.marginLeft,
\t\t\t\toverLeft = withinOffset - collisionPosLeft,
\t\t\t\toverRight = collisionPosLeft + data.collisionWidth - outerWidth - withinOffset,
\t\t\t\tnewOverRight;

\t\t\t// Element is wider than within
\t\t\tif ( data.collisionWidth > outerWidth ) {

\t\t\t\t// Element is initially over the left side of within
\t\t\t\tif ( overLeft > 0 && overRight <= 0 ) {
\t\t\t\t\tnewOverRight = position.left + overLeft + data.collisionWidth - outerWidth -
\t\t\t\t\t\twithinOffset;
\t\t\t\t\tposition.left += overLeft - newOverRight;

\t\t\t\t// Element is initially over right side of within
\t\t\t\t} else if ( overRight > 0 && overLeft <= 0 ) {
\t\t\t\t\tposition.left = withinOffset;

\t\t\t\t// Element is initially over both left and right sides of within
\t\t\t\t} else {
\t\t\t\t\tif ( overLeft > overRight ) {
\t\t\t\t\t\tposition.left = withinOffset + outerWidth - data.collisionWidth;
\t\t\t\t\t} else {
\t\t\t\t\t\tposition.left = withinOffset;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t// Too far left -> align with left edge
\t\t\t} else if ( overLeft > 0 ) {
\t\t\t\tposition.left += overLeft;

\t\t\t// Too far right -> align with right edge
\t\t\t} else if ( overRight > 0 ) {
\t\t\t\tposition.left -= overRight;

\t\t\t// Adjust based on position and margin
\t\t\t} else {
\t\t\t\tposition.left = max( position.left - collisionPosLeft, position.left );
\t\t\t}
\t\t},
\t\ttop: function( position, data ) {
\t\t\tvar within = data.within,
\t\t\t\twithinOffset = within.isWindow ? within.scrollTop : within.offset.top,
\t\t\t\touterHeight = data.within.height,
\t\t\t\tcollisionPosTop = position.top - data.collisionPosition.marginTop,
\t\t\t\toverTop = withinOffset - collisionPosTop,
\t\t\t\toverBottom = collisionPosTop + data.collisionHeight - outerHeight - withinOffset,
\t\t\t\tnewOverBottom;

\t\t\t// Element is taller than within
\t\t\tif ( data.collisionHeight > outerHeight ) {

\t\t\t\t// Element is initially over the top of within
\t\t\t\tif ( overTop > 0 && overBottom <= 0 ) {
\t\t\t\t\tnewOverBottom = position.top + overTop + data.collisionHeight - outerHeight -
\t\t\t\t\t\twithinOffset;
\t\t\t\t\tposition.top += overTop - newOverBottom;

\t\t\t\t// Element is initially over bottom of within
\t\t\t\t} else if ( overBottom > 0 && overTop <= 0 ) {
\t\t\t\t\tposition.top = withinOffset;

\t\t\t\t// Element is initially over both top and bottom of within
\t\t\t\t} else {
\t\t\t\t\tif ( overTop > overBottom ) {
\t\t\t\t\t\tposition.top = withinOffset + outerHeight - data.collisionHeight;
\t\t\t\t\t} else {
\t\t\t\t\t\tposition.top = withinOffset;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t// Too far up -> align with top
\t\t\t} else if ( overTop > 0 ) {
\t\t\t\tposition.top += overTop;

\t\t\t// Too far down -> align with bottom edge
\t\t\t} else if ( overBottom > 0 ) {
\t\t\t\tposition.top -= overBottom;

\t\t\t// Adjust based on position and margin
\t\t\t} else {
\t\t\t\tposition.top = max( position.top - collisionPosTop, position.top );
\t\t\t}
\t\t}
\t},
\tflip: {
\t\tleft: function( position, data ) {
\t\t\tvar within = data.within,
\t\t\t\twithinOffset = within.offset.left + within.scrollLeft,
\t\t\t\touterWidth = within.width,
\t\t\t\toffsetLeft = within.isWindow ? within.scrollLeft : within.offset.left,
\t\t\t\tcollisionPosLeft = position.left - data.collisionPosition.marginLeft,
\t\t\t\toverLeft = collisionPosLeft - offsetLeft,
\t\t\t\toverRight = collisionPosLeft + data.collisionWidth - outerWidth - offsetLeft,
\t\t\t\tmyOffset = data.my[ 0 ] === \"left\" ?
\t\t\t\t\t-data.elemWidth :
\t\t\t\t\tdata.my[ 0 ] === \"right\" ?
\t\t\t\t\t\tdata.elemWidth :
\t\t\t\t\t\t0,
\t\t\t\tatOffset = data.at[ 0 ] === \"left\" ?
\t\t\t\t\tdata.targetWidth :
\t\t\t\t\tdata.at[ 0 ] === \"right\" ?
\t\t\t\t\t\t-data.targetWidth :
\t\t\t\t\t\t0,
\t\t\t\toffset = -2 * data.offset[ 0 ],
\t\t\t\tnewOverRight,
\t\t\t\tnewOverLeft;

\t\t\tif ( overLeft < 0 ) {
\t\t\t\tnewOverRight = position.left + myOffset + atOffset + offset + data.collisionWidth -
\t\t\t\t\touterWidth - withinOffset;
\t\t\t\tif ( newOverRight < 0 || newOverRight < abs( overLeft ) ) {
\t\t\t\t\tposition.left += myOffset + atOffset + offset;
\t\t\t\t}
\t\t\t} else if ( overRight > 0 ) {
\t\t\t\tnewOverLeft = position.left - data.collisionPosition.marginLeft + myOffset +
\t\t\t\t\tatOffset + offset - offsetLeft;
\t\t\t\tif ( newOverLeft > 0 || abs( newOverLeft ) < overRight ) {
\t\t\t\t\tposition.left += myOffset + atOffset + offset;
\t\t\t\t}
\t\t\t}
\t\t},
\t\ttop: function( position, data ) {
\t\t\tvar within = data.within,
\t\t\t\twithinOffset = within.offset.top + within.scrollTop,
\t\t\t\touterHeight = within.height,
\t\t\t\toffsetTop = within.isWindow ? within.scrollTop : within.offset.top,
\t\t\t\tcollisionPosTop = position.top - data.collisionPosition.marginTop,
\t\t\t\toverTop = collisionPosTop - offsetTop,
\t\t\t\toverBottom = collisionPosTop + data.collisionHeight - outerHeight - offsetTop,
\t\t\t\ttop = data.my[ 1 ] === \"top\",
\t\t\t\tmyOffset = top ?
\t\t\t\t\t-data.elemHeight :
\t\t\t\t\tdata.my[ 1 ] === \"bottom\" ?
\t\t\t\t\t\tdata.elemHeight :
\t\t\t\t\t\t0,
\t\t\t\tatOffset = data.at[ 1 ] === \"top\" ?
\t\t\t\t\tdata.targetHeight :
\t\t\t\t\tdata.at[ 1 ] === \"bottom\" ?
\t\t\t\t\t\t-data.targetHeight :
\t\t\t\t\t\t0,
\t\t\t\toffset = -2 * data.offset[ 1 ],
\t\t\t\tnewOverTop,
\t\t\t\tnewOverBottom;
\t\t\tif ( overTop < 0 ) {
\t\t\t\tnewOverBottom = position.top + myOffset + atOffset + offset + data.collisionHeight -
\t\t\t\t\touterHeight - withinOffset;
\t\t\t\tif ( newOverBottom < 0 || newOverBottom < abs( overTop ) ) {
\t\t\t\t\tposition.top += myOffset + atOffset + offset;
\t\t\t\t}
\t\t\t} else if ( overBottom > 0 ) {
\t\t\t\tnewOverTop = position.top - data.collisionPosition.marginTop + myOffset + atOffset +
\t\t\t\t\toffset - offsetTop;
\t\t\t\tif ( newOverTop > 0 || abs( newOverTop ) < overBottom ) {
\t\t\t\t\tposition.top += myOffset + atOffset + offset;
\t\t\t\t}
\t\t\t}
\t\t}
\t},
\tflipfit: {
\t\tleft: function() {
\t\t\t\$.ui.position.flip.left.apply( this, arguments );
\t\t\t\$.ui.position.fit.left.apply( this, arguments );
\t\t},
\t\ttop: function() {
\t\t\t\$.ui.position.flip.top.apply( this, arguments );
\t\t\t\$.ui.position.fit.top.apply( this, arguments );
\t\t}
\t}
};

} )();

var position = \$.ui.position;


/*!
 * jQuery UI :data 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: :data Selector
//>>group: Core
//>>description: Selects elements which have data stored under the specified key.
//>>docs: http://api.jqueryui.com/data-selector/


var data = \$.extend( \$.expr[ \":\" ], {
\tdata: \$.expr.createPseudo ?
\t\t\$.expr.createPseudo( function( dataName ) {
\t\t\treturn function( elem ) {
\t\t\t\treturn !!\$.data( elem, dataName );
\t\t\t};
\t\t} ) :

\t\t// Support: jQuery <1.8
\t\tfunction( elem, i, match ) {
\t\t\treturn !!\$.data( elem, match[ 3 ] );
\t\t}
} );

/*!
 * jQuery UI Disable Selection 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: disableSelection
//>>group: Core
//>>description: Disable selection of text content within the set of matched elements.
//>>docs: http://api.jqueryui.com/disableSelection/

// This file is deprecated


var disableSelection = \$.fn.extend( {
\tdisableSelection: ( function() {
\t\tvar eventType = \"onselectstart\" in document.createElement( \"div\" ) ?
\t\t\t\"selectstart\" :
\t\t\t\"mousedown\";

\t\treturn function() {
\t\t\treturn this.on( eventType + \".ui-disableSelection\", function( event ) {
\t\t\t\tevent.preventDefault();
\t\t\t} );
\t\t};
\t} )(),

\tenableSelection: function() {
\t\treturn this.off( \".ui-disableSelection\" );
\t}
} );


/*!
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

var effect = \$.effects;


/*!
 * jQuery UI Effects Blind 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Blind Effect
//>>group: Effects
//>>description: Blinds the element.
//>>docs: http://api.jqueryui.com/blind-effect/
//>>demos: http://jqueryui.com/effect/



var effectsEffectBlind = \$.effects.define( \"blind\", \"hide\", function( options, done ) {
\tvar map = {
\t\t\tup: [ \"bottom\", \"top\" ],
\t\t\tvertical: [ \"bottom\", \"top\" ],
\t\t\tdown: [ \"top\", \"bottom\" ],
\t\t\tleft: [ \"right\", \"left\" ],
\t\t\thorizontal: [ \"right\", \"left\" ],
\t\t\tright: [ \"left\", \"right\" ]
\t\t},
\t\telement = \$( this ),
\t\tdirection = options.direction || \"up\",
\t\tstart = element.cssClip(),
\t\tanimate = { clip: \$.extend( {}, start ) },
\t\tplaceholder = \$.effects.createPlaceholder( element );

\tanimate.clip[ map[ direction ][ 0 ] ] = animate.clip[ map[ direction ][ 1 ] ];

\tif ( options.mode === \"show\" ) {
\t\telement.cssClip( animate.clip );
\t\tif ( placeholder ) {
\t\t\tplaceholder.css( \$.effects.clipToBox( animate ) );
\t\t}

\t\tanimate.clip = start;
\t}

\tif ( placeholder ) {
\t\tplaceholder.animate( \$.effects.clipToBox( animate ), options.duration, options.easing );
\t}

\telement.animate( animate, {
\t\tqueue: false,
\t\tduration: options.duration,
\t\teasing: options.easing,
\t\tcomplete: done
\t} );
} );


/*!
 * jQuery UI Effects Bounce 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Bounce Effect
//>>group: Effects
//>>description: Bounces an element horizontally or vertically n times.
//>>docs: http://api.jqueryui.com/bounce-effect/
//>>demos: http://jqueryui.com/effect/



var effectsEffectBounce = \$.effects.define( \"bounce\", function( options, done ) {
\tvar upAnim, downAnim, refValue,
\t\telement = \$( this ),

\t\t// Defaults:
\t\tmode = options.mode,
\t\thide = mode === \"hide\",
\t\tshow = mode === \"show\",
\t\tdirection = options.direction || \"up\",
\t\tdistance = options.distance,
\t\ttimes = options.times || 5,

\t\t// Number of internal animations
\t\tanims = times * 2 + ( show || hide ? 1 : 0 ),
\t\tspeed = options.duration / anims,
\t\teasing = options.easing,

\t\t// Utility:
\t\tref = ( direction === \"up\" || direction === \"down\" ) ? \"top\" : \"left\",
\t\tmotion = ( direction === \"up\" || direction === \"left\" ),
\t\ti = 0,

\t\tqueuelen = element.queue().length;

\t\$.effects.createPlaceholder( element );

\trefValue = element.css( ref );

\t// Default distance for the BIGGEST bounce is the outer Distance / 3
\tif ( !distance ) {
\t\tdistance = element[ ref === \"top\" ? \"outerHeight\" : \"outerWidth\" ]() / 3;
\t}

\tif ( show ) {
\t\tdownAnim = { opacity: 1 };
\t\tdownAnim[ ref ] = refValue;

\t\t// If we are showing, force opacity 0 and set the initial position
\t\t// then do the \"first\" animation
\t\telement
\t\t\t.css( \"opacity\", 0 )
\t\t\t.css( ref, motion ? -distance * 2 : distance * 2 )
\t\t\t.animate( downAnim, speed, easing );
\t}

\t// Start at the smallest distance if we are hiding
\tif ( hide ) {
\t\tdistance = distance / Math.pow( 2, times - 1 );
\t}

\tdownAnim = {};
\tdownAnim[ ref ] = refValue;

\t// Bounces up/down/left/right then back to 0 -- times * 2 animations happen here
\tfor ( ; i < times; i++ ) {
\t\tupAnim = {};
\t\tupAnim[ ref ] = ( motion ? \"-=\" : \"+=\" ) + distance;

\t\telement
\t\t\t.animate( upAnim, speed, easing )
\t\t\t.animate( downAnim, speed, easing );

\t\tdistance = hide ? distance * 2 : distance / 2;
\t}

\t// Last Bounce when Hiding
\tif ( hide ) {
\t\tupAnim = { opacity: 0 };
\t\tupAnim[ ref ] = ( motion ? \"-=\" : \"+=\" ) + distance;

\t\telement.animate( upAnim, speed, easing );
\t}

\telement.queue( done );

\t\$.effects.unshift( element, queuelen, anims + 1 );
} );


/*!
 * jQuery UI Effects Clip 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Clip Effect
//>>group: Effects
//>>description: Clips the element on and off like an old TV.
//>>docs: http://api.jqueryui.com/clip-effect/
//>>demos: http://jqueryui.com/effect/



var effectsEffectClip = \$.effects.define( \"clip\", \"hide\", function( options, done ) {
\tvar start,
\t\tanimate = {},
\t\telement = \$( this ),
\t\tdirection = options.direction || \"vertical\",
\t\tboth = direction === \"both\",
\t\thorizontal = both || direction === \"horizontal\",
\t\tvertical = both || direction === \"vertical\";

\tstart = element.cssClip();
\tanimate.clip = {
\t\ttop: vertical ? ( start.bottom - start.top ) / 2 : start.top,
\t\tright: horizontal ? ( start.right - start.left ) / 2 : start.right,
\t\tbottom: vertical ? ( start.bottom - start.top ) / 2 : start.bottom,
\t\tleft: horizontal ? ( start.right - start.left ) / 2 : start.left
\t};

\t\$.effects.createPlaceholder( element );

\tif ( options.mode === \"show\" ) {
\t\telement.cssClip( animate.clip );
\t\tanimate.clip = start;
\t}

\telement.animate( animate, {
\t\tqueue: false,
\t\tduration: options.duration,
\t\teasing: options.easing,
\t\tcomplete: done
\t} );

} );


/*!
 * jQuery UI Effects Drop 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Drop Effect
//>>group: Effects
//>>description: Moves an element in one direction and hides it at the same time.
//>>docs: http://api.jqueryui.com/drop-effect/
//>>demos: http://jqueryui.com/effect/



var effectsEffectDrop = \$.effects.define( \"drop\", \"hide\", function( options, done ) {

\tvar distance,
\t\telement = \$( this ),
\t\tmode = options.mode,
\t\tshow = mode === \"show\",
\t\tdirection = options.direction || \"left\",
\t\tref = ( direction === \"up\" || direction === \"down\" ) ? \"top\" : \"left\",
\t\tmotion = ( direction === \"up\" || direction === \"left\" ) ? \"-=\" : \"+=\",
\t\toppositeMotion = ( motion === \"+=\" ) ? \"-=\" : \"+=\",
\t\tanimation = {
\t\t\topacity: 0
\t\t};

\t\$.effects.createPlaceholder( element );

\tdistance = options.distance ||
\t\telement[ ref === \"top\" ? \"outerHeight\" : \"outerWidth\" ]( true ) / 2;

\tanimation[ ref ] = motion + distance;

\tif ( show ) {
\t\telement.css( animation );

\t\tanimation[ ref ] = oppositeMotion + distance;
\t\tanimation.opacity = 1;
\t}

\t// Animate
\telement.animate( animation, {
\t\tqueue: false,
\t\tduration: options.duration,
\t\teasing: options.easing,
\t\tcomplete: done
\t} );
} );


/*!
 * jQuery UI Effects Explode 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Explode Effect
//>>group: Effects
// jscs:disable maximumLineLength
//>>description: Explodes an element in all directions into n pieces. Implodes an element to its original wholeness.
// jscs:enable maximumLineLength
//>>docs: http://api.jqueryui.com/explode-effect/
//>>demos: http://jqueryui.com/effect/



var effectsEffectExplode = \$.effects.define( \"explode\", \"hide\", function( options, done ) {

\tvar i, j, left, top, mx, my,
\t\trows = options.pieces ? Math.round( Math.sqrt( options.pieces ) ) : 3,
\t\tcells = rows,
\t\telement = \$( this ),
\t\tmode = options.mode,
\t\tshow = mode === \"show\",

\t\t// Show and then visibility:hidden the element before calculating offset
\t\toffset = element.show().css( \"visibility\", \"hidden\" ).offset(),

\t\t// Width and height of a piece
\t\twidth = Math.ceil( element.outerWidth() / cells ),
\t\theight = Math.ceil( element.outerHeight() / rows ),
\t\tpieces = [];

\t// Children animate complete:
\tfunction childComplete() {
\t\tpieces.push( this );
\t\tif ( pieces.length === rows * cells ) {
\t\t\tanimComplete();
\t\t}
\t}

\t// Clone the element for each row and cell.
\tfor ( i = 0; i < rows; i++ ) { // ===>
\t\ttop = offset.top + i * height;
\t\tmy = i - ( rows - 1 ) / 2;

\t\tfor ( j = 0; j < cells; j++ ) { // |||
\t\t\tleft = offset.left + j * width;
\t\t\tmx = j - ( cells - 1 ) / 2;

\t\t\t// Create a clone of the now hidden main element that will be absolute positioned
\t\t\t// within a wrapper div off the -left and -top equal to size of our pieces
\t\t\telement
\t\t\t\t.clone()
\t\t\t\t.appendTo( \"body\" )
\t\t\t\t.wrap( \"<div></div>\" )
\t\t\t\t.css( {
\t\t\t\t\tposition: \"absolute\",
\t\t\t\t\tvisibility: \"visible\",
\t\t\t\t\tleft: -j * width,
\t\t\t\t\ttop: -i * height
\t\t\t\t} )

\t\t\t\t// Select the wrapper - make it overflow: hidden and absolute positioned based on
\t\t\t\t// where the original was located +left and +top equal to the size of pieces
\t\t\t\t.parent()
\t\t\t\t\t.addClass( \"ui-effects-explode\" )
\t\t\t\t\t.css( {
\t\t\t\t\t\tposition: \"absolute\",
\t\t\t\t\t\toverflow: \"hidden\",
\t\t\t\t\t\twidth: width,
\t\t\t\t\t\theight: height,
\t\t\t\t\t\tleft: left + ( show ? mx * width : 0 ),
\t\t\t\t\t\ttop: top + ( show ? my * height : 0 ),
\t\t\t\t\t\topacity: show ? 0 : 1
\t\t\t\t\t} )
\t\t\t\t\t.animate( {
\t\t\t\t\t\tleft: left + ( show ? 0 : mx * width ),
\t\t\t\t\t\ttop: top + ( show ? 0 : my * height ),
\t\t\t\t\t\topacity: show ? 1 : 0
\t\t\t\t\t}, options.duration || 500, options.easing, childComplete );
\t\t}
\t}

\tfunction animComplete() {
\t\telement.css( {
\t\t\tvisibility: \"visible\"
\t\t} );
\t\t\$( pieces ).remove();
\t\tdone();
\t}
} );


/*!
 * jQuery UI Effects Fade 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Fade Effect
//>>group: Effects
//>>description: Fades the element.
//>>docs: http://api.jqueryui.com/fade-effect/
//>>demos: http://jqueryui.com/effect/



var effectsEffectFade = \$.effects.define( \"fade\", \"toggle\", function( options, done ) {
\tvar show = options.mode === \"show\";

\t\$( this )
\t\t.css( \"opacity\", show ? 0 : 1 )
\t\t.animate( {
\t\t\topacity: show ? 1 : 0
\t\t}, {
\t\t\tqueue: false,
\t\t\tduration: options.duration,
\t\t\teasing: options.easing,
\t\t\tcomplete: done
\t\t} );
} );


/*!
 * jQuery UI Effects Fold 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Fold Effect
//>>group: Effects
//>>description: Folds an element first horizontally and then vertically.
//>>docs: http://api.jqueryui.com/fold-effect/
//>>demos: http://jqueryui.com/effect/



var effectsEffectFold = \$.effects.define( \"fold\", \"hide\", function( options, done ) {

\t// Create element
\tvar element = \$( this ),
\t\tmode = options.mode,
\t\tshow = mode === \"show\",
\t\thide = mode === \"hide\",
\t\tsize = options.size || 15,
\t\tpercent = /([0-9]+)%/.exec( size ),
\t\thorizFirst = !!options.horizFirst,
\t\tref = horizFirst ? [ \"right\", \"bottom\" ] : [ \"bottom\", \"right\" ],
\t\tduration = options.duration / 2,

\t\tplaceholder = \$.effects.createPlaceholder( element ),

\t\tstart = element.cssClip(),
\t\tanimation1 = { clip: \$.extend( {}, start ) },
\t\tanimation2 = { clip: \$.extend( {}, start ) },

\t\tdistance = [ start[ ref[ 0 ] ], start[ ref[ 1 ] ] ],

\t\tqueuelen = element.queue().length;

\tif ( percent ) {
\t\tsize = parseInt( percent[ 1 ], 10 ) / 100 * distance[ hide ? 0 : 1 ];
\t}
\tanimation1.clip[ ref[ 0 ] ] = size;
\tanimation2.clip[ ref[ 0 ] ] = size;
\tanimation2.clip[ ref[ 1 ] ] = 0;

\tif ( show ) {
\t\telement.cssClip( animation2.clip );
\t\tif ( placeholder ) {
\t\t\tplaceholder.css( \$.effects.clipToBox( animation2 ) );
\t\t}

\t\tanimation2.clip = start;
\t}

\t// Animate
\telement
\t\t.queue( function( next ) {
\t\t\tif ( placeholder ) {
\t\t\t\tplaceholder
\t\t\t\t\t.animate( \$.effects.clipToBox( animation1 ), duration, options.easing )
\t\t\t\t\t.animate( \$.effects.clipToBox( animation2 ), duration, options.easing );
\t\t\t}

\t\t\tnext();
\t\t} )
\t\t.animate( animation1, duration, options.easing )
\t\t.animate( animation2, duration, options.easing )
\t\t.queue( done );

\t\$.effects.unshift( element, queuelen, 4 );
} );


/*!
 * jQuery UI Effects Highlight 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Highlight Effect
//>>group: Effects
//>>description: Highlights the background of an element in a defined color for a custom duration.
//>>docs: http://api.jqueryui.com/highlight-effect/
//>>demos: http://jqueryui.com/effect/



var effectsEffectHighlight = \$.effects.define( \"highlight\", \"show\", function( options, done ) {
\tvar element = \$( this ),
\t\tanimation = {
\t\t\tbackgroundColor: element.css( \"backgroundColor\" )
\t\t};

\tif ( options.mode === \"hide\" ) {
\t\tanimation.opacity = 0;
\t}

\t\$.effects.saveStyle( element );

\telement
\t\t.css( {
\t\t\tbackgroundImage: \"none\",
\t\t\tbackgroundColor: options.color || \"#ffff99\"
\t\t} )
\t\t.animate( animation, {
\t\t\tqueue: false,
\t\t\tduration: options.duration,
\t\t\teasing: options.easing,
\t\t\tcomplete: done
\t\t} );
} );


/*!
 * jQuery UI Effects Size 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Size Effect
//>>group: Effects
//>>description: Resize an element to a specified width and height.
//>>docs: http://api.jqueryui.com/size-effect/
//>>demos: http://jqueryui.com/effect/



var effectsEffectSize = \$.effects.define( \"size\", function( options, done ) {

\t// Create element
\tvar baseline, factor, temp,
\t\telement = \$( this ),

\t\t// Copy for children
\t\tcProps = [ \"fontSize\" ],
\t\tvProps = [ \"borderTopWidth\", \"borderBottomWidth\", \"paddingTop\", \"paddingBottom\" ],
\t\thProps = [ \"borderLeftWidth\", \"borderRightWidth\", \"paddingLeft\", \"paddingRight\" ],

\t\t// Set options
\t\tmode = options.mode,
\t\trestore = mode !== \"effect\",
\t\tscale = options.scale || \"both\",
\t\torigin = options.origin || [ \"middle\", \"center\" ],
\t\tposition = element.css( \"position\" ),
\t\tpos = element.position(),
\t\toriginal = \$.effects.scaledDimensions( element ),
\t\tfrom = options.from || original,
\t\tto = options.to || \$.effects.scaledDimensions( element, 0 );

\t\$.effects.createPlaceholder( element );

\tif ( mode === \"show\" ) {
\t\ttemp = from;
\t\tfrom = to;
\t\tto = temp;
\t}

\t// Set scaling factor
\tfactor = {
\t\tfrom: {
\t\t\ty: from.height / original.height,
\t\t\tx: from.width / original.width
\t\t},
\t\tto: {
\t\t\ty: to.height / original.height,
\t\t\tx: to.width / original.width
\t\t}
\t};

\t// Scale the css box
\tif ( scale === \"box\" || scale === \"both\" ) {

\t\t// Vertical props scaling
\t\tif ( factor.from.y !== factor.to.y ) {
\t\t\tfrom = \$.effects.setTransition( element, vProps, factor.from.y, from );
\t\t\tto = \$.effects.setTransition( element, vProps, factor.to.y, to );
\t\t}

\t\t// Horizontal props scaling
\t\tif ( factor.from.x !== factor.to.x ) {
\t\t\tfrom = \$.effects.setTransition( element, hProps, factor.from.x, from );
\t\t\tto = \$.effects.setTransition( element, hProps, factor.to.x, to );
\t\t}
\t}

\t// Scale the content
\tif ( scale === \"content\" || scale === \"both\" ) {

\t\t// Vertical props scaling
\t\tif ( factor.from.y !== factor.to.y ) {
\t\t\tfrom = \$.effects.setTransition( element, cProps, factor.from.y, from );
\t\t\tto = \$.effects.setTransition( element, cProps, factor.to.y, to );
\t\t}
\t}

\t// Adjust the position properties based on the provided origin points
\tif ( origin ) {
\t\tbaseline = \$.effects.getBaseline( origin, original );
\t\tfrom.top = ( original.outerHeight - from.outerHeight ) * baseline.y + pos.top;
\t\tfrom.left = ( original.outerWidth - from.outerWidth ) * baseline.x + pos.left;
\t\tto.top = ( original.outerHeight - to.outerHeight ) * baseline.y + pos.top;
\t\tto.left = ( original.outerWidth - to.outerWidth ) * baseline.x + pos.left;
\t}
\telement.css( from );

\t// Animate the children if desired
\tif ( scale === \"content\" || scale === \"both\" ) {

\t\tvProps = vProps.concat( [ \"marginTop\", \"marginBottom\" ] ).concat( cProps );
\t\thProps = hProps.concat( [ \"marginLeft\", \"marginRight\" ] );

\t\t// Only animate children with width attributes specified
\t\t// TODO: is this right? should we include anything with css width specified as well
\t\telement.find( \"*[width]\" ).each( function() {
\t\t\tvar child = \$( this ),
\t\t\t\tchildOriginal = \$.effects.scaledDimensions( child ),
\t\t\t\tchildFrom = {
\t\t\t\t\theight: childOriginal.height * factor.from.y,
\t\t\t\t\twidth: childOriginal.width * factor.from.x,
\t\t\t\t\touterHeight: childOriginal.outerHeight * factor.from.y,
\t\t\t\t\touterWidth: childOriginal.outerWidth * factor.from.x
\t\t\t\t},
\t\t\t\tchildTo = {
\t\t\t\t\theight: childOriginal.height * factor.to.y,
\t\t\t\t\twidth: childOriginal.width * factor.to.x,
\t\t\t\t\touterHeight: childOriginal.height * factor.to.y,
\t\t\t\t\touterWidth: childOriginal.width * factor.to.x
\t\t\t\t};

\t\t\t// Vertical props scaling
\t\t\tif ( factor.from.y !== factor.to.y ) {
\t\t\t\tchildFrom = \$.effects.setTransition( child, vProps, factor.from.y, childFrom );
\t\t\t\tchildTo = \$.effects.setTransition( child, vProps, factor.to.y, childTo );
\t\t\t}

\t\t\t// Horizontal props scaling
\t\t\tif ( factor.from.x !== factor.to.x ) {
\t\t\t\tchildFrom = \$.effects.setTransition( child, hProps, factor.from.x, childFrom );
\t\t\t\tchildTo = \$.effects.setTransition( child, hProps, factor.to.x, childTo );
\t\t\t}

\t\t\tif ( restore ) {
\t\t\t\t\$.effects.saveStyle( child );
\t\t\t}

\t\t\t// Animate children
\t\t\tchild.css( childFrom );
\t\t\tchild.animate( childTo, options.duration, options.easing, function() {

\t\t\t\t// Restore children
\t\t\t\tif ( restore ) {
\t\t\t\t\t\$.effects.restoreStyle( child );
\t\t\t\t}
\t\t\t} );
\t\t} );
\t}

\t// Animate
\telement.animate( to, {
\t\tqueue: false,
\t\tduration: options.duration,
\t\teasing: options.easing,
\t\tcomplete: function() {

\t\t\tvar offset = element.offset();

\t\t\tif ( to.opacity === 0 ) {
\t\t\t\telement.css( \"opacity\", from.opacity );
\t\t\t}

\t\t\tif ( !restore ) {
\t\t\t\telement
\t\t\t\t\t.css( \"position\", position === \"static\" ? \"relative\" : position )
\t\t\t\t\t.offset( offset );

\t\t\t\t// Need to save style here so that automatic style restoration
\t\t\t\t// doesn't restore to the original styles from before the animation.
\t\t\t\t\$.effects.saveStyle( element );
\t\t\t}

\t\t\tdone();
\t\t}
\t} );

} );


/*!
 * jQuery UI Effects Scale 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Scale Effect
//>>group: Effects
//>>description: Grows or shrinks an element and its content.
//>>docs: http://api.jqueryui.com/scale-effect/
//>>demos: http://jqueryui.com/effect/



var effectsEffectScale = \$.effects.define( \"scale\", function( options, done ) {

\t// Create element
\tvar el = \$( this ),
\t\tmode = options.mode,
\t\tpercent = parseInt( options.percent, 10 ) ||
\t\t\t( parseInt( options.percent, 10 ) === 0 ? 0 : ( mode !== \"effect\" ? 0 : 100 ) ),

\t\tnewOptions = \$.extend( true, {
\t\t\tfrom: \$.effects.scaledDimensions( el ),
\t\t\tto: \$.effects.scaledDimensions( el, percent, options.direction || \"both\" ),
\t\t\torigin: options.origin || [ \"middle\", \"center\" ]
\t\t}, options );

\t// Fade option to support puff
\tif ( options.fade ) {
\t\tnewOptions.from.opacity = 1;
\t\tnewOptions.to.opacity = 0;
\t}

\t\$.effects.effect.size.call( this, newOptions, done );
} );


/*!
 * jQuery UI Effects Puff 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Puff Effect
//>>group: Effects
//>>description: Creates a puff effect by scaling the element up and hiding it at the same time.
//>>docs: http://api.jqueryui.com/puff-effect/
//>>demos: http://jqueryui.com/effect/



var effectsEffectPuff = \$.effects.define( \"puff\", \"hide\", function( options, done ) {
\tvar newOptions = \$.extend( true, {}, options, {
\t\tfade: true,
\t\tpercent: parseInt( options.percent, 10 ) || 150
\t} );

\t\$.effects.effect.scale.call( this, newOptions, done );
} );


/*!
 * jQuery UI Effects Pulsate 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Pulsate Effect
//>>group: Effects
//>>description: Pulsates an element n times by changing the opacity to zero and back.
//>>docs: http://api.jqueryui.com/pulsate-effect/
//>>demos: http://jqueryui.com/effect/



var effectsEffectPulsate = \$.effects.define( \"pulsate\", \"show\", function( options, done ) {
\tvar element = \$( this ),
\t\tmode = options.mode,
\t\tshow = mode === \"show\",
\t\thide = mode === \"hide\",
\t\tshowhide = show || hide,

\t\t// Showing or hiding leaves off the \"last\" animation
\t\tanims = ( ( options.times || 5 ) * 2 ) + ( showhide ? 1 : 0 ),
\t\tduration = options.duration / anims,
\t\tanimateTo = 0,
\t\ti = 1,
\t\tqueuelen = element.queue().length;

\tif ( show || !element.is( \":visible\" ) ) {
\t\telement.css( \"opacity\", 0 ).show();
\t\tanimateTo = 1;
\t}

\t// Anims - 1 opacity \"toggles\"
\tfor ( ; i < anims; i++ ) {
\t\telement.animate( { opacity: animateTo }, duration, options.easing );
\t\tanimateTo = 1 - animateTo;
\t}

\telement.animate( { opacity: animateTo }, duration, options.easing );

\telement.queue( done );

\t\$.effects.unshift( element, queuelen, anims + 1 );
} );


/*!
 * jQuery UI Effects Shake 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Shake Effect
//>>group: Effects
//>>description: Shakes an element horizontally or vertically n times.
//>>docs: http://api.jqueryui.com/shake-effect/
//>>demos: http://jqueryui.com/effect/



var effectsEffectShake = \$.effects.define( \"shake\", function( options, done ) {

\tvar i = 1,
\t\telement = \$( this ),
\t\tdirection = options.direction || \"left\",
\t\tdistance = options.distance || 20,
\t\ttimes = options.times || 3,
\t\tanims = times * 2 + 1,
\t\tspeed = Math.round( options.duration / anims ),
\t\tref = ( direction === \"up\" || direction === \"down\" ) ? \"top\" : \"left\",
\t\tpositiveMotion = ( direction === \"up\" || direction === \"left\" ),
\t\tanimation = {},
\t\tanimation1 = {},
\t\tanimation2 = {},

\t\tqueuelen = element.queue().length;

\t\$.effects.createPlaceholder( element );

\t// Animation
\tanimation[ ref ] = ( positiveMotion ? \"-=\" : \"+=\" ) + distance;
\tanimation1[ ref ] = ( positiveMotion ? \"+=\" : \"-=\" ) + distance * 2;
\tanimation2[ ref ] = ( positiveMotion ? \"-=\" : \"+=\" ) + distance * 2;

\t// Animate
\telement.animate( animation, speed, options.easing );

\t// Shakes
\tfor ( ; i < times; i++ ) {
\t\telement
\t\t\t.animate( animation1, speed, options.easing )
\t\t\t.animate( animation2, speed, options.easing );
\t}

\telement
\t\t.animate( animation1, speed, options.easing )
\t\t.animate( animation, speed / 2, options.easing )
\t\t.queue( done );

\t\$.effects.unshift( element, queuelen, anims + 1 );
} );


/*!
 * jQuery UI Effects Slide 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Slide Effect
//>>group: Effects
//>>description: Slides an element in and out of the viewport.
//>>docs: http://api.jqueryui.com/slide-effect/
//>>demos: http://jqueryui.com/effect/



var effectsEffectSlide = \$.effects.define( \"slide\", \"show\", function( options, done ) {
\tvar startClip, startRef,
\t\telement = \$( this ),
\t\tmap = {
\t\t\tup: [ \"bottom\", \"top\" ],
\t\t\tdown: [ \"top\", \"bottom\" ],
\t\t\tleft: [ \"right\", \"left\" ],
\t\t\tright: [ \"left\", \"right\" ]
\t\t},
\t\tmode = options.mode,
\t\tdirection = options.direction || \"left\",
\t\tref = ( direction === \"up\" || direction === \"down\" ) ? \"top\" : \"left\",
\t\tpositiveMotion = ( direction === \"up\" || direction === \"left\" ),
\t\tdistance = options.distance ||
\t\t\telement[ ref === \"top\" ? \"outerHeight\" : \"outerWidth\" ]( true ),
\t\tanimation = {};

\t\$.effects.createPlaceholder( element );

\tstartClip = element.cssClip();
\tstartRef = element.position()[ ref ];

\t// Define hide animation
\tanimation[ ref ] = ( positiveMotion ? -1 : 1 ) * distance + startRef;
\tanimation.clip = element.cssClip();
\tanimation.clip[ map[ direction ][ 1 ] ] = animation.clip[ map[ direction ][ 0 ] ];

\t// Reverse the animation if we're showing
\tif ( mode === \"show\" ) {
\t\telement.cssClip( animation.clip );
\t\telement.css( ref, animation[ ref ] );
\t\tanimation.clip = startClip;
\t\tanimation[ ref ] = startRef;
\t}

\t// Actually animate
\telement.animate( animation, {
\t\tqueue: false,
\t\tduration: options.duration,
\t\teasing: options.easing,
\t\tcomplete: done
\t} );
} );


/*!
 * jQuery UI Effects Transfer 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Transfer Effect
//>>group: Effects
//>>description: Displays a transfer effect from one element to another.
//>>docs: http://api.jqueryui.com/transfer-effect/
//>>demos: http://jqueryui.com/effect/



var effect;
if ( \$.uiBackCompat !== false ) {
\teffect = \$.effects.define( \"transfer\", function( options, done ) {
\t\t\$( this ).transfer( options, done );
\t} );
}
var effectsEffectTransfer = effect;


/*!
 * jQuery UI Focusable 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: :focusable Selector
//>>group: Core
//>>description: Selects elements which can be focused.
//>>docs: http://api.jqueryui.com/focusable-selector/



// Selectors
\$.ui.focusable = function( element, hasTabindex ) {
\tvar map, mapName, img, focusableIfVisible, fieldset,
\t\tnodeName = element.nodeName.toLowerCase();

\tif ( \"area\" === nodeName ) {
\t\tmap = element.parentNode;
\t\tmapName = map.name;
\t\tif ( !element.href || !mapName || map.nodeName.toLowerCase() !== \"map\" ) {
\t\t\treturn false;
\t\t}
\t\timg = \$( \"img[usemap='#\" + mapName + \"']\" );
\t\treturn img.length > 0 && img.is( \":visible\" );
\t}

\tif ( /^(input|select|textarea|button|object)\$/.test( nodeName ) ) {
\t\tfocusableIfVisible = !element.disabled;

\t\tif ( focusableIfVisible ) {

\t\t\t// Form controls within a disabled fieldset are disabled.
\t\t\t// However, controls within the fieldset's legend do not get disabled.
\t\t\t// Since controls generally aren't placed inside legends, we skip
\t\t\t// this portion of the check.
\t\t\tfieldset = \$( element ).closest( \"fieldset\" )[ 0 ];
\t\t\tif ( fieldset ) {
\t\t\t\tfocusableIfVisible = !fieldset.disabled;
\t\t\t}
\t\t}
\t} else if ( \"a\" === nodeName ) {
\t\tfocusableIfVisible = element.href || hasTabindex;
\t} else {
\t\tfocusableIfVisible = hasTabindex;
\t}

\treturn focusableIfVisible && \$( element ).is( \":visible\" ) && visible( \$( element ) );
};

// Support: IE 8 only
// IE 8 doesn't resolve inherit to visible/hidden for computed values
function visible( element ) {
\tvar visibility = element.css( \"visibility\" );
\twhile ( visibility === \"inherit\" ) {
\t\telement = element.parent();
\t\tvisibility = element.css( \"visibility\" );
\t}
\treturn visibility !== \"hidden\";
}

\$.extend( \$.expr[ \":\" ], {
\tfocusable: function( element ) {
\t\treturn \$.ui.focusable( element, \$.attr( element, \"tabindex\" ) != null );
\t}
} );

var focusable = \$.ui.focusable;




// Support: IE8 Only
// IE8 does not support the form attribute and when it is supplied. It overwrites the form prop
// with a string, so we need to find the proper form.
var form = \$.fn.form = function() {
\treturn typeof this[ 0 ].form === \"string\" ? this.closest( \"form\" ) : \$( this[ 0 ].form );
};


/*!
 * jQuery UI Form Reset Mixin 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Form Reset Mixin
//>>group: Core
//>>description: Refresh input widgets when their form is reset
//>>docs: http://api.jqueryui.com/form-reset-mixin/



var formResetMixin = \$.ui.formResetMixin = {
\t_formResetHandler: function() {
\t\tvar form = \$( this );

\t\t// Wait for the form reset to actually happen before refreshing
\t\tsetTimeout( function() {
\t\t\tvar instances = form.data( \"ui-form-reset-instances\" );
\t\t\t\$.each( instances, function() {
\t\t\t\tthis.refresh();
\t\t\t} );
\t\t} );
\t},

\t_bindFormResetHandler: function() {
\t\tthis.form = this.element.form();
\t\tif ( !this.form.length ) {
\t\t\treturn;
\t\t}

\t\tvar instances = this.form.data( \"ui-form-reset-instances\" ) || [];
\t\tif ( !instances.length ) {

\t\t\t// We don't use _on() here because we use a single event handler per form
\t\t\tthis.form.on( \"reset.ui-form-reset\", this._formResetHandler );
\t\t}
\t\tinstances.push( this );
\t\tthis.form.data( \"ui-form-reset-instances\", instances );
\t},

\t_unbindFormResetHandler: function() {
\t\tif ( !this.form.length ) {
\t\t\treturn;
\t\t}

\t\tvar instances = this.form.data( \"ui-form-reset-instances\" );
\t\tinstances.splice( \$.inArray( this, instances ), 1 );
\t\tif ( instances.length ) {
\t\t\tthis.form.data( \"ui-form-reset-instances\", instances );
\t\t} else {
\t\t\tthis.form
\t\t\t\t.removeData( \"ui-form-reset-instances\" )
\t\t\t\t.off( \"reset.ui-form-reset\" );
\t\t}
\t}
};


/*!
 * jQuery UI Support for jQuery core 1.7.x 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 */

//>>label: jQuery 1.7 Support
//>>group: Core
//>>description: Support version 1.7.x of jQuery core



// Support: jQuery 1.7 only
// Not a great way to check versions, but since we only support 1.7+ and only
// need to detect <1.8, this is a simple check that should suffice. Checking
// for \"1.7.\" would be a bit safer, but the version string is 1.7, not 1.7.0
// and we'll never reach 1.70.0 (if we do, we certainly won't be supporting
// 1.7 anymore). See #11197 for why we're not using feature detection.
if ( \$.fn.jquery.substring( 0, 3 ) === \"1.7\" ) {

\t// Setters for .innerWidth(), .innerHeight(), .outerWidth(), .outerHeight()
\t// Unlike jQuery Core 1.8+, these only support numeric values to set the
\t// dimensions in pixels
\t\$.each( [ \"Width\", \"Height\" ], function( i, name ) {
\t\tvar side = name === \"Width\" ? [ \"Left\", \"Right\" ] : [ \"Top\", \"Bottom\" ],
\t\t\ttype = name.toLowerCase(),
\t\t\torig = {
\t\t\t\tinnerWidth: \$.fn.innerWidth,
\t\t\t\tinnerHeight: \$.fn.innerHeight,
\t\t\t\touterWidth: \$.fn.outerWidth,
\t\t\t\touterHeight: \$.fn.outerHeight
\t\t\t};

\t\tfunction reduce( elem, size, border, margin ) {
\t\t\t\$.each( side, function() {
\t\t\t\tsize -= parseFloat( \$.css( elem, \"padding\" + this ) ) || 0;
\t\t\t\tif ( border ) {
\t\t\t\t\tsize -= parseFloat( \$.css( elem, \"border\" + this + \"Width\" ) ) || 0;
\t\t\t\t}
\t\t\t\tif ( margin ) {
\t\t\t\t\tsize -= parseFloat( \$.css( elem, \"margin\" + this ) ) || 0;
\t\t\t\t}
\t\t\t} );
\t\t\treturn size;
\t\t}

\t\t\$.fn[ \"inner\" + name ] = function( size ) {
\t\t\tif ( size === undefined ) {
\t\t\t\treturn orig[ \"inner\" + name ].call( this );
\t\t\t}

\t\t\treturn this.each( function() {
\t\t\t\t\$( this ).css( type, reduce( this, size ) + \"px\" );
\t\t\t} );
\t\t};

\t\t\$.fn[ \"outer\" + name ] = function( size, margin ) {
\t\t\tif ( typeof size !== \"number\" ) {
\t\t\t\treturn orig[ \"outer\" + name ].call( this, size );
\t\t\t}

\t\t\treturn this.each( function() {
\t\t\t\t\$( this ).css( type, reduce( this, size, true, margin ) + \"px\" );
\t\t\t} );
\t\t};
\t} );

\t\$.fn.addBack = function( selector ) {
\t\treturn this.add( selector == null ?
\t\t\tthis.prevObject : this.prevObject.filter( selector )
\t\t);
\t};
}

;
/*!
 * jQuery UI Keycode 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Keycode
//>>group: Core
//>>description: Provide keycodes as keynames
//>>docs: http://api.jqueryui.com/jQuery.ui.keyCode/


var keycode = \$.ui.keyCode = {
\tBACKSPACE: 8,
\tCOMMA: 188,
\tDELETE: 46,
\tDOWN: 40,
\tEND: 35,
\tENTER: 13,
\tESCAPE: 27,
\tHOME: 36,
\tLEFT: 37,
\tPAGE_DOWN: 34,
\tPAGE_UP: 33,
\tPERIOD: 190,
\tRIGHT: 39,
\tSPACE: 32,
\tTAB: 9,
\tUP: 38
};




// Internal use only
var escapeSelector = \$.ui.escapeSelector = ( function() {
\tvar selectorEscape = /([!\"#\$%&'()*+,./:;<=>?@[\\]^`{|}~])/g;
\treturn function( selector ) {
\t\treturn selector.replace( selectorEscape, \"\\\\\$1\" );
\t};
} )();


/*!
 * jQuery UI Labels 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: labels
//>>group: Core
//>>description: Find all the labels associated with a given input
//>>docs: http://api.jqueryui.com/labels/



var labels = \$.fn.labels = function() {
\tvar ancestor, selector, id, labels, ancestors;

\t// Check control.labels first
\tif ( this[ 0 ].labels && this[ 0 ].labels.length ) {
\t\treturn this.pushStack( this[ 0 ].labels );
\t}

\t// Support: IE <= 11, FF <= 37, Android <= 2.3 only
\t// Above browsers do not support control.labels. Everything below is to support them
\t// as well as document fragments. control.labels does not work on document fragments
\tlabels = this.eq( 0 ).parents( \"label\" );

\t// Look for the label based on the id
\tid = this.attr( \"id\" );
\tif ( id ) {

\t\t// We don't search against the document in case the element
\t\t// is disconnected from the DOM
\t\tancestor = this.eq( 0 ).parents().last();

\t\t// Get a full set of top level ancestors
\t\tancestors = ancestor.add( ancestor.length ? ancestor.siblings() : this.siblings() );

\t\t// Create a selector for the label based on the id
\t\tselector = \"label[for='\" + \$.ui.escapeSelector( id ) + \"']\";

\t\tlabels = labels.add( ancestors.find( selector ).addBack( selector ) );

\t}

\t// Return whatever we have found for labels
\treturn this.pushStack( labels );
};


/*!
 * jQuery UI Scroll Parent 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: scrollParent
//>>group: Core
//>>description: Get the closest ancestor element that is scrollable.
//>>docs: http://api.jqueryui.com/scrollParent/



var scrollParent = \$.fn.scrollParent = function( includeHidden ) {
\tvar position = this.css( \"position\" ),
\t\texcludeStaticParent = position === \"absolute\",
\t\toverflowRegex = includeHidden ? /(auto|scroll|hidden)/ : /(auto|scroll)/,
\t\tscrollParent = this.parents().filter( function() {
\t\t\tvar parent = \$( this );
\t\t\tif ( excludeStaticParent && parent.css( \"position\" ) === \"static\" ) {
\t\t\t\treturn false;
\t\t\t}
\t\t\treturn overflowRegex.test( parent.css( \"overflow\" ) + parent.css( \"overflow-y\" ) +
\t\t\t\tparent.css( \"overflow-x\" ) );
\t\t} ).eq( 0 );

\treturn position === \"fixed\" || !scrollParent.length ?
\t\t\$( this[ 0 ].ownerDocument || document ) :
\t\tscrollParent;
};


/*!
 * jQuery UI Tabbable 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: :tabbable Selector
//>>group: Core
//>>description: Selects elements which can be tabbed to.
//>>docs: http://api.jqueryui.com/tabbable-selector/



var tabbable = \$.extend( \$.expr[ \":\" ], {
\ttabbable: function( element ) {
\t\tvar tabIndex = \$.attr( element, \"tabindex\" ),
\t\t\thasTabindex = tabIndex != null;
\t\treturn ( !hasTabindex || tabIndex >= 0 ) && \$.ui.focusable( element, hasTabindex );
\t}
} );


/*!
 * jQuery UI Unique ID 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: uniqueId
//>>group: Core
//>>description: Functions to generate and remove uniqueId's
//>>docs: http://api.jqueryui.com/uniqueId/



var uniqueId = \$.fn.extend( {
\tuniqueId: ( function() {
\t\tvar uuid = 0;

\t\treturn function() {
\t\t\treturn this.each( function() {
\t\t\t\tif ( !this.id ) {
\t\t\t\t\tthis.id = \"ui-id-\" + ( ++uuid );
\t\t\t\t}
\t\t\t} );
\t\t};
\t} )(),

\tremoveUniqueId: function() {
\t\treturn this.each( function() {
\t\t\tif ( /^ui-id-\\d+\$/.test( this.id ) ) {
\t\t\t\t\$( this ).removeAttr( \"id\" );
\t\t\t}
\t\t} );
\t}
} );


/*!
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



var widgetsAccordion = \$.widget( \"ui.accordion\", {
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



var safeActiveElement = \$.ui.safeActiveElement = function( document ) {
\tvar activeElement;

\t// Support: IE 9 only
\t// IE9 throws an \"Unspecified error\" accessing document.activeElement from an <iframe>
\ttry {
\t\tactiveElement = document.activeElement;
\t} catch ( error ) {
\t\tactiveElement = document.body;
\t}

\t// Support: IE 9 - 11 only
\t// IE may return null instead of an element
\t// Interestingly, this only seems to occur when NOT in an iframe
\tif ( !activeElement ) {
\t\tactiveElement = document.body;
\t}

\t// Support: IE 11 only
\t// IE11 returns a seemingly empty object in some cases when accessing
\t// document.activeElement from an <iframe>
\tif ( !activeElement.nodeName ) {
\t\tactiveElement = document.body;
\t}

\treturn activeElement;
};


/*!
 * jQuery UI Menu 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Menu
//>>group: Widgets
//>>description: Creates nestable menus.
//>>docs: http://api.jqueryui.com/menu/
//>>demos: http://jqueryui.com/menu/
//>>css.structure: ../../themes/base/core.css
//>>css.structure: ../../themes/base/menu.css
//>>css.theme: ../../themes/base/theme.css



var widgetsMenu = \$.widget( \"ui.menu\", {
\tversion: \"1.12.1\",
\tdefaultElement: \"<ul>\",
\tdelay: 300,
\toptions: {
\t\ticons: {
\t\t\tsubmenu: \"ui-icon-caret-1-e\"
\t\t},
\t\titems: \"> *\",
\t\tmenus: \"ul\",
\t\tposition: {
\t\t\tmy: \"left top\",
\t\t\tat: \"right top\"
\t\t},
\t\trole: \"menu\",

\t\t// Callbacks
\t\tblur: null,
\t\tfocus: null,
\t\tselect: null
\t},

\t_create: function() {
\t\tthis.activeMenu = this.element;

\t\t// Flag used to prevent firing of the click handler
\t\t// as the event bubbles up through nested menus
\t\tthis.mouseHandled = false;
\t\tthis.element
\t\t\t.uniqueId()
\t\t\t.attr( {
\t\t\t\trole: this.options.role,
\t\t\t\ttabIndex: 0
\t\t\t} );

\t\tthis._addClass( \"ui-menu\", \"ui-widget ui-widget-content\" );
\t\tthis._on( {

\t\t\t// Prevent focus from sticking to links inside menu after clicking
\t\t\t// them (focus should always stay on UL during navigation).
\t\t\t\"mousedown .ui-menu-item\": function( event ) {
\t\t\t\tevent.preventDefault();
\t\t\t},
\t\t\t\"click .ui-menu-item\": function( event ) {
\t\t\t\tvar target = \$( event.target );
\t\t\t\tvar active = \$( \$.ui.safeActiveElement( this.document[ 0 ] ) );
\t\t\t\tif ( !this.mouseHandled && target.not( \".ui-state-disabled\" ).length ) {
\t\t\t\t\tthis.select( event );

\t\t\t\t\t// Only set the mouseHandled flag if the event will bubble, see #9469.
\t\t\t\t\tif ( !event.isPropagationStopped() ) {
\t\t\t\t\t\tthis.mouseHandled = true;
\t\t\t\t\t}

\t\t\t\t\t// Open submenu on click
\t\t\t\t\tif ( target.has( \".ui-menu\" ).length ) {
\t\t\t\t\t\tthis.expand( event );
\t\t\t\t\t} else if ( !this.element.is( \":focus\" ) &&
\t\t\t\t\t\t\tactive.closest( \".ui-menu\" ).length ) {

\t\t\t\t\t\t// Redirect focus to the menu
\t\t\t\t\t\tthis.element.trigger( \"focus\", [ true ] );

\t\t\t\t\t\t// If the active item is on the top level, let it stay active.
\t\t\t\t\t\t// Otherwise, blur the active item since it is no longer visible.
\t\t\t\t\t\tif ( this.active && this.active.parents( \".ui-menu\" ).length === 1 ) {
\t\t\t\t\t\t\tclearTimeout( this.timer );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\t\"mouseenter .ui-menu-item\": function( event ) {

\t\t\t\t// Ignore mouse events while typeahead is active, see #10458.
\t\t\t\t// Prevents focusing the wrong item when typeahead causes a scroll while the mouse
\t\t\t\t// is over an item in the menu
\t\t\t\tif ( this.previousFilter ) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tvar actualTarget = \$( event.target ).closest( \".ui-menu-item\" ),
\t\t\t\t\ttarget = \$( event.currentTarget );

\t\t\t\t// Ignore bubbled events on parent items, see #11641
\t\t\t\tif ( actualTarget[ 0 ] !== target[ 0 ] ) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t// Remove ui-state-active class from siblings of the newly focused menu item
\t\t\t\t// to avoid a jump caused by adjacent elements both having a class with a border
\t\t\t\tthis._removeClass( target.siblings().children( \".ui-state-active\" ),
\t\t\t\t\tnull, \"ui-state-active\" );
\t\t\t\tthis.focus( event, target );
\t\t\t},
\t\t\tmouseleave: \"collapseAll\",
\t\t\t\"mouseleave .ui-menu\": \"collapseAll\",
\t\t\tfocus: function( event, keepActiveItem ) {

\t\t\t\t// If there's already an active item, keep it active
\t\t\t\t// If not, activate the first item
\t\t\t\tvar item = this.active || this.element.find( this.options.items ).eq( 0 );

\t\t\t\tif ( !keepActiveItem ) {
\t\t\t\t\tthis.focus( event, item );
\t\t\t\t}
\t\t\t},
\t\t\tblur: function( event ) {
\t\t\t\tthis._delay( function() {
\t\t\t\t\tvar notContained = !\$.contains(
\t\t\t\t\t\tthis.element[ 0 ],
\t\t\t\t\t\t\$.ui.safeActiveElement( this.document[ 0 ] )
\t\t\t\t\t);
\t\t\t\t\tif ( notContained ) {
\t\t\t\t\t\tthis.collapseAll( event );
\t\t\t\t\t}
\t\t\t\t} );
\t\t\t},
\t\t\tkeydown: \"_keydown\"
\t\t} );

\t\tthis.refresh();

\t\t// Clicks outside of a menu collapse any open menus
\t\tthis._on( this.document, {
\t\t\tclick: function( event ) {
\t\t\t\tif ( this._closeOnDocumentClick( event ) ) {
\t\t\t\t\tthis.collapseAll( event );
\t\t\t\t}

\t\t\t\t// Reset the mouseHandled flag
\t\t\t\tthis.mouseHandled = false;
\t\t\t}
\t\t} );
\t},

\t_destroy: function() {
\t\tvar items = this.element.find( \".ui-menu-item\" )
\t\t\t\t.removeAttr( \"role aria-disabled\" ),
\t\t\tsubmenus = items.children( \".ui-menu-item-wrapper\" )
\t\t\t\t.removeUniqueId()
\t\t\t\t.removeAttr( \"tabIndex role aria-haspopup\" );

\t\t// Destroy (sub)menus
\t\tthis.element
\t\t\t.removeAttr( \"aria-activedescendant\" )
\t\t\t.find( \".ui-menu\" ).addBack()
\t\t\t\t.removeAttr( \"role aria-labelledby aria-expanded aria-hidden aria-disabled \" +
\t\t\t\t\t\"tabIndex\" )
\t\t\t\t.removeUniqueId()
\t\t\t\t.show();

\t\tsubmenus.children().each( function() {
\t\t\tvar elem = \$( this );
\t\t\tif ( elem.data( \"ui-menu-submenu-caret\" ) ) {
\t\t\t\telem.remove();
\t\t\t}
\t\t} );
\t},

\t_keydown: function( event ) {
\t\tvar match, prev, character, skip,
\t\t\tpreventDefault = true;

\t\tswitch ( event.keyCode ) {
\t\tcase \$.ui.keyCode.PAGE_UP:
\t\t\tthis.previousPage( event );
\t\t\tbreak;
\t\tcase \$.ui.keyCode.PAGE_DOWN:
\t\t\tthis.nextPage( event );
\t\t\tbreak;
\t\tcase \$.ui.keyCode.HOME:
\t\t\tthis._move( \"first\", \"first\", event );
\t\t\tbreak;
\t\tcase \$.ui.keyCode.END:
\t\t\tthis._move( \"last\", \"last\", event );
\t\t\tbreak;
\t\tcase \$.ui.keyCode.UP:
\t\t\tthis.previous( event );
\t\t\tbreak;
\t\tcase \$.ui.keyCode.DOWN:
\t\t\tthis.next( event );
\t\t\tbreak;
\t\tcase \$.ui.keyCode.LEFT:
\t\t\tthis.collapse( event );
\t\t\tbreak;
\t\tcase \$.ui.keyCode.RIGHT:
\t\t\tif ( this.active && !this.active.is( \".ui-state-disabled\" ) ) {
\t\t\t\tthis.expand( event );
\t\t\t}
\t\t\tbreak;
\t\tcase \$.ui.keyCode.ENTER:
\t\tcase \$.ui.keyCode.SPACE:
\t\t\tthis._activate( event );
\t\t\tbreak;
\t\tcase \$.ui.keyCode.ESCAPE:
\t\t\tthis.collapse( event );
\t\t\tbreak;
\t\tdefault:
\t\t\tpreventDefault = false;
\t\t\tprev = this.previousFilter || \"\";
\t\t\tskip = false;

\t\t\t// Support number pad values
\t\t\tcharacter = event.keyCode >= 96 && event.keyCode <= 105 ?
\t\t\t\t( event.keyCode - 96 ).toString() : String.fromCharCode( event.keyCode );

\t\t\tclearTimeout( this.filterTimer );

\t\t\tif ( character === prev ) {
\t\t\t\tskip = true;
\t\t\t} else {
\t\t\t\tcharacter = prev + character;
\t\t\t}

\t\t\tmatch = this._filterMenuItems( character );
\t\t\tmatch = skip && match.index( this.active.next() ) !== -1 ?
\t\t\t\tthis.active.nextAll( \".ui-menu-item\" ) :
\t\t\t\tmatch;

\t\t\t// If no matches on the current filter, reset to the last character pressed
\t\t\t// to move down the menu to the first item that starts with that character
\t\t\tif ( !match.length ) {
\t\t\t\tcharacter = String.fromCharCode( event.keyCode );
\t\t\t\tmatch = this._filterMenuItems( character );
\t\t\t}

\t\t\tif ( match.length ) {
\t\t\t\tthis.focus( event, match );
\t\t\t\tthis.previousFilter = character;
\t\t\t\tthis.filterTimer = this._delay( function() {
\t\t\t\t\tdelete this.previousFilter;
\t\t\t\t}, 1000 );
\t\t\t} else {
\t\t\t\tdelete this.previousFilter;
\t\t\t}
\t\t}

\t\tif ( preventDefault ) {
\t\t\tevent.preventDefault();
\t\t}
\t},

\t_activate: function( event ) {
\t\tif ( this.active && !this.active.is( \".ui-state-disabled\" ) ) {
\t\t\tif ( this.active.children( \"[aria-haspopup='true']\" ).length ) {
\t\t\t\tthis.expand( event );
\t\t\t} else {
\t\t\t\tthis.select( event );
\t\t\t}
\t\t}
\t},

\trefresh: function() {
\t\tvar menus, items, newSubmenus, newItems, newWrappers,
\t\t\tthat = this,
\t\t\ticon = this.options.icons.submenu,
\t\t\tsubmenus = this.element.find( this.options.menus );

\t\tthis._toggleClass( \"ui-menu-icons\", null, !!this.element.find( \".ui-icon\" ).length );

\t\t// Initialize nested menus
\t\tnewSubmenus = submenus.filter( \":not(.ui-menu)\" )
\t\t\t.hide()
\t\t\t.attr( {
\t\t\t\trole: this.options.role,
\t\t\t\t\"aria-hidden\": \"true\",
\t\t\t\t\"aria-expanded\": \"false\"
\t\t\t} )
\t\t\t.each( function() {
\t\t\t\tvar menu = \$( this ),
\t\t\t\t\titem = menu.prev(),
\t\t\t\t\tsubmenuCaret = \$( \"<span>\" ).data( \"ui-menu-submenu-caret\", true );

\t\t\t\tthat._addClass( submenuCaret, \"ui-menu-icon\", \"ui-icon \" + icon );
\t\t\t\titem
\t\t\t\t\t.attr( \"aria-haspopup\", \"true\" )
\t\t\t\t\t.prepend( submenuCaret );
\t\t\t\tmenu.attr( \"aria-labelledby\", item.attr( \"id\" ) );
\t\t\t} );

\t\tthis._addClass( newSubmenus, \"ui-menu\", \"ui-widget ui-widget-content ui-front\" );

\t\tmenus = submenus.add( this.element );
\t\titems = menus.find( this.options.items );

\t\t// Initialize menu-items containing spaces and/or dashes only as dividers
\t\titems.not( \".ui-menu-item\" ).each( function() {
\t\t\tvar item = \$( this );
\t\t\tif ( that._isDivider( item ) ) {
\t\t\t\tthat._addClass( item, \"ui-menu-divider\", \"ui-widget-content\" );
\t\t\t}
\t\t} );

\t\t// Don't refresh list items that are already adapted
\t\tnewItems = items.not( \".ui-menu-item, .ui-menu-divider\" );
\t\tnewWrappers = newItems.children()
\t\t\t.not( \".ui-menu\" )
\t\t\t\t.uniqueId()
\t\t\t\t.attr( {
\t\t\t\t\ttabIndex: -1,
\t\t\t\t\trole: this._itemRole()
\t\t\t\t} );
\t\tthis._addClass( newItems, \"ui-menu-item\" )
\t\t\t._addClass( newWrappers, \"ui-menu-item-wrapper\" );

\t\t// Add aria-disabled attribute to any disabled menu item
\t\titems.filter( \".ui-state-disabled\" ).attr( \"aria-disabled\", \"true\" );

\t\t// If the active item has been removed, blur the menu
\t\tif ( this.active && !\$.contains( this.element[ 0 ], this.active[ 0 ] ) ) {
\t\t\tthis.blur();
\t\t}
\t},

\t_itemRole: function() {
\t\treturn {
\t\t\tmenu: \"menuitem\",
\t\t\tlistbox: \"option\"
\t\t}[ this.options.role ];
\t},

\t_setOption: function( key, value ) {
\t\tif ( key === \"icons\" ) {
\t\t\tvar icons = this.element.find( \".ui-menu-icon\" );
\t\t\tthis._removeClass( icons, null, this.options.icons.submenu )
\t\t\t\t._addClass( icons, null, value.submenu );
\t\t}
\t\tthis._super( key, value );
\t},

\t_setOptionDisabled: function( value ) {
\t\tthis._super( value );

\t\tthis.element.attr( \"aria-disabled\", String( value ) );
\t\tthis._toggleClass( null, \"ui-state-disabled\", !!value );
\t},

\tfocus: function( event, item ) {
\t\tvar nested, focused, activeParent;
\t\tthis.blur( event, event && event.type === \"focus\" );

\t\tthis._scrollIntoView( item );

\t\tthis.active = item.first();

\t\tfocused = this.active.children( \".ui-menu-item-wrapper\" );
\t\tthis._addClass( focused, null, \"ui-state-active\" );

\t\t// Only update aria-activedescendant if there's a role
\t\t// otherwise we assume focus is managed elsewhere
\t\tif ( this.options.role ) {
\t\t\tthis.element.attr( \"aria-activedescendant\", focused.attr( \"id\" ) );
\t\t}

\t\t// Highlight active parent menu item, if any
\t\tactiveParent = this.active
\t\t\t.parent()
\t\t\t\t.closest( \".ui-menu-item\" )
\t\t\t\t\t.children( \".ui-menu-item-wrapper\" );
\t\tthis._addClass( activeParent, null, \"ui-state-active\" );

\t\tif ( event && event.type === \"keydown\" ) {
\t\t\tthis._close();
\t\t} else {
\t\t\tthis.timer = this._delay( function() {
\t\t\t\tthis._close();
\t\t\t}, this.delay );
\t\t}

\t\tnested = item.children( \".ui-menu\" );
\t\tif ( nested.length && event && ( /^mouse/.test( event.type ) ) ) {
\t\t\tthis._startOpening( nested );
\t\t}
\t\tthis.activeMenu = item.parent();

\t\tthis._trigger( \"focus\", event, { item: item } );
\t},

\t_scrollIntoView: function( item ) {
\t\tvar borderTop, paddingTop, offset, scroll, elementHeight, itemHeight;
\t\tif ( this._hasScroll() ) {
\t\t\tborderTop = parseFloat( \$.css( this.activeMenu[ 0 ], \"borderTopWidth\" ) ) || 0;
\t\t\tpaddingTop = parseFloat( \$.css( this.activeMenu[ 0 ], \"paddingTop\" ) ) || 0;
\t\t\toffset = item.offset().top - this.activeMenu.offset().top - borderTop - paddingTop;
\t\t\tscroll = this.activeMenu.scrollTop();
\t\t\telementHeight = this.activeMenu.height();
\t\t\titemHeight = item.outerHeight();

\t\t\tif ( offset < 0 ) {
\t\t\t\tthis.activeMenu.scrollTop( scroll + offset );
\t\t\t} else if ( offset + itemHeight > elementHeight ) {
\t\t\t\tthis.activeMenu.scrollTop( scroll + offset - elementHeight + itemHeight );
\t\t\t}
\t\t}
\t},

\tblur: function( event, fromFocus ) {
\t\tif ( !fromFocus ) {
\t\t\tclearTimeout( this.timer );
\t\t}

\t\tif ( !this.active ) {
\t\t\treturn;
\t\t}

\t\tthis._removeClass( this.active.children( \".ui-menu-item-wrapper\" ),
\t\t\tnull, \"ui-state-active\" );

\t\tthis._trigger( \"blur\", event, { item: this.active } );
\t\tthis.active = null;
\t},

\t_startOpening: function( submenu ) {
\t\tclearTimeout( this.timer );

\t\t// Don't open if already open fixes a Firefox bug that caused a .5 pixel
\t\t// shift in the submenu position when mousing over the caret icon
\t\tif ( submenu.attr( \"aria-hidden\" ) !== \"true\" ) {
\t\t\treturn;
\t\t}

\t\tthis.timer = this._delay( function() {
\t\t\tthis._close();
\t\t\tthis._open( submenu );
\t\t}, this.delay );
\t},

\t_open: function( submenu ) {
\t\tvar position = \$.extend( {
\t\t\tof: this.active
\t\t}, this.options.position );

\t\tclearTimeout( this.timer );
\t\tthis.element.find( \".ui-menu\" ).not( submenu.parents( \".ui-menu\" ) )
\t\t\t.hide()
\t\t\t.attr( \"aria-hidden\", \"true\" );

\t\tsubmenu
\t\t\t.show()
\t\t\t.removeAttr( \"aria-hidden\" )
\t\t\t.attr( \"aria-expanded\", \"true\" )
\t\t\t.position( position );
\t},

\tcollapseAll: function( event, all ) {
\t\tclearTimeout( this.timer );
\t\tthis.timer = this._delay( function() {

\t\t\t// If we were passed an event, look for the submenu that contains the event
\t\t\tvar currentMenu = all ? this.element :
\t\t\t\t\$( event && event.target ).closest( this.element.find( \".ui-menu\" ) );

\t\t\t// If we found no valid submenu ancestor, use the main menu to close all
\t\t\t// sub menus anyway
\t\t\tif ( !currentMenu.length ) {
\t\t\t\tcurrentMenu = this.element;
\t\t\t}

\t\t\tthis._close( currentMenu );

\t\t\tthis.blur( event );

\t\t\t// Work around active item staying active after menu is blurred
\t\t\tthis._removeClass( currentMenu.find( \".ui-state-active\" ), null, \"ui-state-active\" );

\t\t\tthis.activeMenu = currentMenu;
\t\t}, this.delay );
\t},

\t// With no arguments, closes the currently active menu - if nothing is active
\t// it closes all menus.  If passed an argument, it will search for menus BELOW
\t_close: function( startMenu ) {
\t\tif ( !startMenu ) {
\t\t\tstartMenu = this.active ? this.active.parent() : this.element;
\t\t}

\t\tstartMenu.find( \".ui-menu\" )
\t\t\t.hide()
\t\t\t.attr( \"aria-hidden\", \"true\" )
\t\t\t.attr( \"aria-expanded\", \"false\" );
\t},

\t_closeOnDocumentClick: function( event ) {
\t\treturn !\$( event.target ).closest( \".ui-menu\" ).length;
\t},

\t_isDivider: function( item ) {

\t\t// Match hyphen, em dash, en dash
\t\treturn !/[^\\-\\u2014\\u2013\\s]/.test( item.text() );
\t},

\tcollapse: function( event ) {
\t\tvar newItem = this.active &&
\t\t\tthis.active.parent().closest( \".ui-menu-item\", this.element );
\t\tif ( newItem && newItem.length ) {
\t\t\tthis._close();
\t\t\tthis.focus( event, newItem );
\t\t}
\t},

\texpand: function( event ) {
\t\tvar newItem = this.active &&
\t\t\tthis.active
\t\t\t\t.children( \".ui-menu \" )
\t\t\t\t\t.find( this.options.items )
\t\t\t\t\t\t.first();

\t\tif ( newItem && newItem.length ) {
\t\t\tthis._open( newItem.parent() );

\t\t\t// Delay so Firefox will not hide activedescendant change in expanding submenu from AT
\t\t\tthis._delay( function() {
\t\t\t\tthis.focus( event, newItem );
\t\t\t} );
\t\t}
\t},

\tnext: function( event ) {
\t\tthis._move( \"next\", \"first\", event );
\t},

\tprevious: function( event ) {
\t\tthis._move( \"prev\", \"last\", event );
\t},

\tisFirstItem: function() {
\t\treturn this.active && !this.active.prevAll( \".ui-menu-item\" ).length;
\t},

\tisLastItem: function() {
\t\treturn this.active && !this.active.nextAll( \".ui-menu-item\" ).length;
\t},

\t_move: function( direction, filter, event ) {
\t\tvar next;
\t\tif ( this.active ) {
\t\t\tif ( direction === \"first\" || direction === \"last\" ) {
\t\t\t\tnext = this.active
\t\t\t\t\t[ direction === \"first\" ? \"prevAll\" : \"nextAll\" ]( \".ui-menu-item\" )
\t\t\t\t\t.eq( -1 );
\t\t\t} else {
\t\t\t\tnext = this.active
\t\t\t\t\t[ direction + \"All\" ]( \".ui-menu-item\" )
\t\t\t\t\t.eq( 0 );
\t\t\t}
\t\t}
\t\tif ( !next || !next.length || !this.active ) {
\t\t\tnext = this.activeMenu.find( this.options.items )[ filter ]();
\t\t}

\t\tthis.focus( event, next );
\t},

\tnextPage: function( event ) {
\t\tvar item, base, height;

\t\tif ( !this.active ) {
\t\t\tthis.next( event );
\t\t\treturn;
\t\t}
\t\tif ( this.isLastItem() ) {
\t\t\treturn;
\t\t}
\t\tif ( this._hasScroll() ) {
\t\t\tbase = this.active.offset().top;
\t\t\theight = this.element.height();
\t\t\tthis.active.nextAll( \".ui-menu-item\" ).each( function() {
\t\t\t\titem = \$( this );
\t\t\t\treturn item.offset().top - base - height < 0;
\t\t\t} );

\t\t\tthis.focus( event, item );
\t\t} else {
\t\t\tthis.focus( event, this.activeMenu.find( this.options.items )
\t\t\t\t[ !this.active ? \"first\" : \"last\" ]() );
\t\t}
\t},

\tpreviousPage: function( event ) {
\t\tvar item, base, height;
\t\tif ( !this.active ) {
\t\t\tthis.next( event );
\t\t\treturn;
\t\t}
\t\tif ( this.isFirstItem() ) {
\t\t\treturn;
\t\t}
\t\tif ( this._hasScroll() ) {
\t\t\tbase = this.active.offset().top;
\t\t\theight = this.element.height();
\t\t\tthis.active.prevAll( \".ui-menu-item\" ).each( function() {
\t\t\t\titem = \$( this );
\t\t\t\treturn item.offset().top - base + height > 0;
\t\t\t} );

\t\t\tthis.focus( event, item );
\t\t} else {
\t\t\tthis.focus( event, this.activeMenu.find( this.options.items ).first() );
\t\t}
\t},

\t_hasScroll: function() {
\t\treturn this.element.outerHeight() < this.element.prop( \"scrollHeight\" );
\t},

\tselect: function( event ) {

\t\t// TODO: It should never be possible to not have an active item at this
\t\t// point, but the tests don't trigger mouseenter before click.
\t\tthis.active = this.active || \$( event.target ).closest( \".ui-menu-item\" );
\t\tvar ui = { item: this.active };
\t\tif ( !this.active.has( \".ui-menu\" ).length ) {
\t\t\tthis.collapseAll( event, true );
\t\t}
\t\tthis._trigger( \"select\", event, ui );
\t},

\t_filterMenuItems: function( character ) {
\t\tvar escapedCharacter = character.replace( /[\\-\\[\\]{}()*+?.,\\\\\\^\$|#\\s]/g, \"\\\\\$&\" ),
\t\t\tregex = new RegExp( \"^\" + escapedCharacter, \"i\" );

\t\treturn this.activeMenu
\t\t\t.find( this.options.items )

\t\t\t\t// Only match on items, not dividers or other content (#10571)
\t\t\t\t.filter( \".ui-menu-item\" )
\t\t\t\t\t.filter( function() {
\t\t\t\t\t\treturn regex.test(
\t\t\t\t\t\t\t\$.trim( \$( this ).children( \".ui-menu-item-wrapper\" ).text() ) );
\t\t\t\t\t} );
\t}
} );


/*!
 * jQuery UI Autocomplete 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Autocomplete
//>>group: Widgets
//>>description: Lists suggested words as the user is typing.
//>>docs: http://api.jqueryui.com/autocomplete/
//>>demos: http://jqueryui.com/autocomplete/
//>>css.structure: ../../themes/base/core.css
//>>css.structure: ../../themes/base/autocomplete.css
//>>css.theme: ../../themes/base/theme.css



\$.widget( \"ui.autocomplete\", {
\tversion: \"1.12.1\",
\tdefaultElement: \"<input>\",
\toptions: {
\t\tappendTo: null,
\t\tautoFocus: false,
\t\tdelay: 300,
\t\tminLength: 1,
\t\tposition: {
\t\t\tmy: \"left top\",
\t\t\tat: \"left bottom\",
\t\t\tcollision: \"none\"
\t\t},
\t\tsource: null,

\t\t// Callbacks
\t\tchange: null,
\t\tclose: null,
\t\tfocus: null,
\t\topen: null,
\t\tresponse: null,
\t\tsearch: null,
\t\tselect: null
\t},

\trequestIndex: 0,
\tpending: 0,

\t_create: function() {

\t\t// Some browsers only repeat keydown events, not keypress events,
\t\t// so we use the suppressKeyPress flag to determine if we've already
\t\t// handled the keydown event. #7269
\t\t// Unfortunately the code for & in keypress is the same as the up arrow,
\t\t// so we use the suppressKeyPressRepeat flag to avoid handling keypress
\t\t// events when we know the keydown event was used to modify the
\t\t// search term. #7799
\t\tvar suppressKeyPress, suppressKeyPressRepeat, suppressInput,
\t\t\tnodeName = this.element[ 0 ].nodeName.toLowerCase(),
\t\t\tisTextarea = nodeName === \"textarea\",
\t\t\tisInput = nodeName === \"input\";

\t\t// Textareas are always multi-line
\t\t// Inputs are always single-line, even if inside a contentEditable element
\t\t// IE also treats inputs as contentEditable
\t\t// All other element types are determined by whether or not they're contentEditable
\t\tthis.isMultiLine = isTextarea || !isInput && this._isContentEditable( this.element );

\t\tthis.valueMethod = this.element[ isTextarea || isInput ? \"val\" : \"text\" ];
\t\tthis.isNewMenu = true;

\t\tthis._addClass( \"ui-autocomplete-input\" );
\t\tthis.element.attr( \"autocomplete\", \"off\" );

\t\tthis._on( this.element, {
\t\t\tkeydown: function( event ) {
\t\t\t\tif ( this.element.prop( \"readOnly\" ) ) {
\t\t\t\t\tsuppressKeyPress = true;
\t\t\t\t\tsuppressInput = true;
\t\t\t\t\tsuppressKeyPressRepeat = true;
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tsuppressKeyPress = false;
\t\t\t\tsuppressInput = false;
\t\t\t\tsuppressKeyPressRepeat = false;
\t\t\t\tvar keyCode = \$.ui.keyCode;
\t\t\t\tswitch ( event.keyCode ) {
\t\t\t\tcase keyCode.PAGE_UP:
\t\t\t\t\tsuppressKeyPress = true;
\t\t\t\t\tthis._move( \"previousPage\", event );
\t\t\t\t\tbreak;
\t\t\t\tcase keyCode.PAGE_DOWN:
\t\t\t\t\tsuppressKeyPress = true;
\t\t\t\t\tthis._move( \"nextPage\", event );
\t\t\t\t\tbreak;
\t\t\t\tcase keyCode.UP:
\t\t\t\t\tsuppressKeyPress = true;
\t\t\t\t\tthis._keyEvent( \"previous\", event );
\t\t\t\t\tbreak;
\t\t\t\tcase keyCode.DOWN:
\t\t\t\t\tsuppressKeyPress = true;
\t\t\t\t\tthis._keyEvent( \"next\", event );
\t\t\t\t\tbreak;
\t\t\t\tcase keyCode.ENTER:

\t\t\t\t\t// when menu is open and has focus
\t\t\t\t\tif ( this.menu.active ) {

\t\t\t\t\t\t// #6055 - Opera still allows the keypress to occur
\t\t\t\t\t\t// which causes forms to submit
\t\t\t\t\t\tsuppressKeyPress = true;
\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\tthis.menu.select( event );
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase keyCode.TAB:
\t\t\t\t\tif ( this.menu.active ) {
\t\t\t\t\t\tthis.menu.select( event );
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase keyCode.ESCAPE:
\t\t\t\t\tif ( this.menu.element.is( \":visible\" ) ) {
\t\t\t\t\t\tif ( !this.isMultiLine ) {
\t\t\t\t\t\t\tthis._value( this.term );
\t\t\t\t\t\t}
\t\t\t\t\t\tthis.close( event );

\t\t\t\t\t\t// Different browsers have different default behavior for escape
\t\t\t\t\t\t// Single press can mean undo or clear
\t\t\t\t\t\t// Double press in IE means clear the whole form
\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tdefault:
\t\t\t\t\tsuppressKeyPressRepeat = true;

\t\t\t\t\t// search timeout should be triggered before the input value is changed
\t\t\t\t\tthis._searchTimeout( event );
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t},
\t\t\tkeypress: function( event ) {
\t\t\t\tif ( suppressKeyPress ) {
\t\t\t\t\tsuppressKeyPress = false;
\t\t\t\t\tif ( !this.isMultiLine || this.menu.element.is( \":visible\" ) ) {
\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t}
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tif ( suppressKeyPressRepeat ) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t// Replicate some key handlers to allow them to repeat in Firefox and Opera
\t\t\t\tvar keyCode = \$.ui.keyCode;
\t\t\t\tswitch ( event.keyCode ) {
\t\t\t\tcase keyCode.PAGE_UP:
\t\t\t\t\tthis._move( \"previousPage\", event );
\t\t\t\t\tbreak;
\t\t\t\tcase keyCode.PAGE_DOWN:
\t\t\t\t\tthis._move( \"nextPage\", event );
\t\t\t\t\tbreak;
\t\t\t\tcase keyCode.UP:
\t\t\t\t\tthis._keyEvent( \"previous\", event );
\t\t\t\t\tbreak;
\t\t\t\tcase keyCode.DOWN:
\t\t\t\t\tthis._keyEvent( \"next\", event );
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t},
\t\t\tinput: function( event ) {
\t\t\t\tif ( suppressInput ) {
\t\t\t\t\tsuppressInput = false;
\t\t\t\t\tevent.preventDefault();
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tthis._searchTimeout( event );
\t\t\t},
\t\t\tfocus: function() {
\t\t\t\tthis.selectedItem = null;
\t\t\t\tthis.previous = this._value();
\t\t\t},
\t\t\tblur: function( event ) {
\t\t\t\tif ( this.cancelBlur ) {
\t\t\t\t\tdelete this.cancelBlur;
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tclearTimeout( this.searching );
\t\t\t\tthis.close( event );
\t\t\t\tthis._change( event );
\t\t\t}
\t\t} );

\t\tthis._initSource();
\t\tthis.menu = \$( \"<ul>\" )
\t\t\t.appendTo( this._appendTo() )
\t\t\t.menu( {

\t\t\t\t// disable ARIA support, the live region takes care of that
\t\t\t\trole: null
\t\t\t} )
\t\t\t.hide()
\t\t\t.menu( \"instance\" );

\t\tthis._addClass( this.menu.element, \"ui-autocomplete\", \"ui-front\" );
\t\tthis._on( this.menu.element, {
\t\t\tmousedown: function( event ) {

\t\t\t\t// prevent moving focus out of the text field
\t\t\t\tevent.preventDefault();

\t\t\t\t// IE doesn't prevent moving focus even with event.preventDefault()
\t\t\t\t// so we set a flag to know when we should ignore the blur event
\t\t\t\tthis.cancelBlur = true;
\t\t\t\tthis._delay( function() {
\t\t\t\t\tdelete this.cancelBlur;

\t\t\t\t\t// Support: IE 8 only
\t\t\t\t\t// Right clicking a menu item or selecting text from the menu items will
\t\t\t\t\t// result in focus moving out of the input. However, we've already received
\t\t\t\t\t// and ignored the blur event because of the cancelBlur flag set above. So
\t\t\t\t\t// we restore focus to ensure that the menu closes properly based on the user's
\t\t\t\t\t// next actions.
\t\t\t\t\tif ( this.element[ 0 ] !== \$.ui.safeActiveElement( this.document[ 0 ] ) ) {
\t\t\t\t\t\tthis.element.trigger( \"focus\" );
\t\t\t\t\t}
\t\t\t\t} );
\t\t\t},
\t\t\tmenufocus: function( event, ui ) {
\t\t\t\tvar label, item;

\t\t\t\t// support: Firefox
\t\t\t\t// Prevent accidental activation of menu items in Firefox (#7024 #9118)
\t\t\t\tif ( this.isNewMenu ) {
\t\t\t\t\tthis.isNewMenu = false;
\t\t\t\t\tif ( event.originalEvent && /^mouse/.test( event.originalEvent.type ) ) {
\t\t\t\t\t\tthis.menu.blur();

\t\t\t\t\t\tthis.document.one( \"mousemove\", function() {
\t\t\t\t\t\t\t\$( event.target ).trigger( event.originalEvent );
\t\t\t\t\t\t} );

\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\titem = ui.item.data( \"ui-autocomplete-item\" );
\t\t\t\tif ( false !== this._trigger( \"focus\", event, { item: item } ) ) {

\t\t\t\t\t// use value to match what will end up in the input, if it was a key event
\t\t\t\t\tif ( event.originalEvent && /^key/.test( event.originalEvent.type ) ) {
\t\t\t\t\t\tthis._value( item.value );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Announce the value in the liveRegion
\t\t\t\tlabel = ui.item.attr( \"aria-label\" ) || item.value;
\t\t\t\tif ( label && \$.trim( label ).length ) {
\t\t\t\t\tthis.liveRegion.children().hide();
\t\t\t\t\t\$( \"<div>\" ).text( label ).appendTo( this.liveRegion );
\t\t\t\t}
\t\t\t},
\t\t\tmenuselect: function( event, ui ) {
\t\t\t\tvar item = ui.item.data( \"ui-autocomplete-item\" ),
\t\t\t\t\tprevious = this.previous;

\t\t\t\t// Only trigger when focus was lost (click on menu)
\t\t\t\tif ( this.element[ 0 ] !== \$.ui.safeActiveElement( this.document[ 0 ] ) ) {
\t\t\t\t\tthis.element.trigger( \"focus\" );
\t\t\t\t\tthis.previous = previous;

\t\t\t\t\t// #6109 - IE triggers two focus events and the second
\t\t\t\t\t// is asynchronous, so we need to reset the previous
\t\t\t\t\t// term synchronously and asynchronously :-(
\t\t\t\t\tthis._delay( function() {
\t\t\t\t\t\tthis.previous = previous;
\t\t\t\t\t\tthis.selectedItem = item;
\t\t\t\t\t} );
\t\t\t\t}

\t\t\t\tif ( false !== this._trigger( \"select\", event, { item: item } ) ) {
\t\t\t\t\tthis._value( item.value );
\t\t\t\t}

\t\t\t\t// reset the term after the select event
\t\t\t\t// this allows custom select handling to work properly
\t\t\t\tthis.term = this._value();

\t\t\t\tthis.close( event );
\t\t\t\tthis.selectedItem = item;
\t\t\t}
\t\t} );

\t\tthis.liveRegion = \$( \"<div>\", {
\t\t\trole: \"status\",
\t\t\t\"aria-live\": \"assertive\",
\t\t\t\"aria-relevant\": \"additions\"
\t\t} )
\t\t\t.appendTo( this.document[ 0 ].body );

\t\tthis._addClass( this.liveRegion, null, \"ui-helper-hidden-accessible\" );

\t\t// Turning off autocomplete prevents the browser from remembering the
\t\t// value when navigating through history, so we re-enable autocomplete
\t\t// if the page is unloaded before the widget is destroyed. #7790
\t\tthis._on( this.window, {
\t\t\tbeforeunload: function() {
\t\t\t\tthis.element.removeAttr( \"autocomplete\" );
\t\t\t}
\t\t} );
\t},

\t_destroy: function() {
\t\tclearTimeout( this.searching );
\t\tthis.element.removeAttr( \"autocomplete\" );
\t\tthis.menu.element.remove();
\t\tthis.liveRegion.remove();
\t},

\t_setOption: function( key, value ) {
\t\tthis._super( key, value );
\t\tif ( key === \"source\" ) {
\t\t\tthis._initSource();
\t\t}
\t\tif ( key === \"appendTo\" ) {
\t\t\tthis.menu.element.appendTo( this._appendTo() );
\t\t}
\t\tif ( key === \"disabled\" && value && this.xhr ) {
\t\t\tthis.xhr.abort();
\t\t}
\t},

\t_isEventTargetInWidget: function( event ) {
\t\tvar menuElement = this.menu.element[ 0 ];

\t\treturn event.target === this.element[ 0 ] ||
\t\t\tevent.target === menuElement ||
\t\t\t\$.contains( menuElement, event.target );
\t},

\t_closeOnClickOutside: function( event ) {
\t\tif ( !this._isEventTargetInWidget( event ) ) {
\t\t\tthis.close();
\t\t}
\t},

\t_appendTo: function() {
\t\tvar element = this.options.appendTo;

\t\tif ( element ) {
\t\t\telement = element.jquery || element.nodeType ?
\t\t\t\t\$( element ) :
\t\t\t\tthis.document.find( element ).eq( 0 );
\t\t}

\t\tif ( !element || !element[ 0 ] ) {
\t\t\telement = this.element.closest( \".ui-front, dialog\" );
\t\t}

\t\tif ( !element.length ) {
\t\t\telement = this.document[ 0 ].body;
\t\t}

\t\treturn element;
\t},

\t_initSource: function() {
\t\tvar array, url,
\t\t\tthat = this;
\t\tif ( \$.isArray( this.options.source ) ) {
\t\t\tarray = this.options.source;
\t\t\tthis.source = function( request, response ) {
\t\t\t\tresponse( \$.ui.autocomplete.filter( array, request.term ) );
\t\t\t};
\t\t} else if ( typeof this.options.source === \"string\" ) {
\t\t\turl = this.options.source;
\t\t\tthis.source = function( request, response ) {
\t\t\t\tif ( that.xhr ) {
\t\t\t\t\tthat.xhr.abort();
\t\t\t\t}
\t\t\t\tthat.xhr = \$.ajax( {
\t\t\t\t\turl: url,
\t\t\t\t\tdata: request,
\t\t\t\t\tdataType: \"json\",
\t\t\t\t\tsuccess: function( data ) {
\t\t\t\t\t\tresponse( data );
\t\t\t\t\t},
\t\t\t\t\terror: function() {
\t\t\t\t\t\tresponse( [] );
\t\t\t\t\t}
\t\t\t\t} );
\t\t\t};
\t\t} else {
\t\t\tthis.source = this.options.source;
\t\t}
\t},

\t_searchTimeout: function( event ) {
\t\tclearTimeout( this.searching );
\t\tthis.searching = this._delay( function() {

\t\t\t// Search if the value has changed, or if the user retypes the same value (see #7434)
\t\t\tvar equalValues = this.term === this._value(),
\t\t\t\tmenuVisible = this.menu.element.is( \":visible\" ),
\t\t\t\tmodifierKey = event.altKey || event.ctrlKey || event.metaKey || event.shiftKey;

\t\t\tif ( !equalValues || ( equalValues && !menuVisible && !modifierKey ) ) {
\t\t\t\tthis.selectedItem = null;
\t\t\t\tthis.search( null, event );
\t\t\t}
\t\t}, this.options.delay );
\t},

\tsearch: function( value, event ) {
\t\tvalue = value != null ? value : this._value();

\t\t// Always save the actual value, not the one passed as an argument
\t\tthis.term = this._value();

\t\tif ( value.length < this.options.minLength ) {
\t\t\treturn this.close( event );
\t\t}

\t\tif ( this._trigger( \"search\", event ) === false ) {
\t\t\treturn;
\t\t}

\t\treturn this._search( value );
\t},

\t_search: function( value ) {
\t\tthis.pending++;
\t\tthis._addClass( \"ui-autocomplete-loading\" );
\t\tthis.cancelSearch = false;

\t\tthis.source( { term: value }, this._response() );
\t},

\t_response: function() {
\t\tvar index = ++this.requestIndex;

\t\treturn \$.proxy( function( content ) {
\t\t\tif ( index === this.requestIndex ) {
\t\t\t\tthis.__response( content );
\t\t\t}

\t\t\tthis.pending--;
\t\t\tif ( !this.pending ) {
\t\t\t\tthis._removeClass( \"ui-autocomplete-loading\" );
\t\t\t}
\t\t}, this );
\t},

\t__response: function( content ) {
\t\tif ( content ) {
\t\t\tcontent = this._normalize( content );
\t\t}
\t\tthis._trigger( \"response\", null, { content: content } );
\t\tif ( !this.options.disabled && content && content.length && !this.cancelSearch ) {
\t\t\tthis._suggest( content );
\t\t\tthis._trigger( \"open\" );
\t\t} else {

\t\t\t// use ._close() instead of .close() so we don't cancel future searches
\t\t\tthis._close();
\t\t}
\t},

\tclose: function( event ) {
\t\tthis.cancelSearch = true;
\t\tthis._close( event );
\t},

\t_close: function( event ) {

\t\t// Remove the handler that closes the menu on outside clicks
\t\tthis._off( this.document, \"mousedown\" );

\t\tif ( this.menu.element.is( \":visible\" ) ) {
\t\t\tthis.menu.element.hide();
\t\t\tthis.menu.blur();
\t\t\tthis.isNewMenu = true;
\t\t\tthis._trigger( \"close\", event );
\t\t}
\t},

\t_change: function( event ) {
\t\tif ( this.previous !== this._value() ) {
\t\t\tthis._trigger( \"change\", event, { item: this.selectedItem } );
\t\t}
\t},

\t_normalize: function( items ) {

\t\t// assume all items have the right format when the first item is complete
\t\tif ( items.length && items[ 0 ].label && items[ 0 ].value ) {
\t\t\treturn items;
\t\t}
\t\treturn \$.map( items, function( item ) {
\t\t\tif ( typeof item === \"string\" ) {
\t\t\t\treturn {
\t\t\t\t\tlabel: item,
\t\t\t\t\tvalue: item
\t\t\t\t};
\t\t\t}
\t\t\treturn \$.extend( {}, item, {
\t\t\t\tlabel: item.label || item.value,
\t\t\t\tvalue: item.value || item.label
\t\t\t} );
\t\t} );
\t},

\t_suggest: function( items ) {
\t\tvar ul = this.menu.element.empty();
\t\tthis._renderMenu( ul, items );
\t\tthis.isNewMenu = true;
\t\tthis.menu.refresh();

\t\t// Size and position menu
\t\tul.show();
\t\tthis._resizeMenu();
\t\tul.position( \$.extend( {
\t\t\tof: this.element
\t\t}, this.options.position ) );

\t\tif ( this.options.autoFocus ) {
\t\t\tthis.menu.next();
\t\t}

\t\t// Listen for interactions outside of the widget (#6642)
\t\tthis._on( this.document, {
\t\t\tmousedown: \"_closeOnClickOutside\"
\t\t} );
\t},

\t_resizeMenu: function() {
\t\tvar ul = this.menu.element;
\t\tul.outerWidth( Math.max(

\t\t\t// Firefox wraps long text (possibly a rounding bug)
\t\t\t// so we add 1px to avoid the wrapping (#7513)
\t\t\tul.width( \"\" ).outerWidth() + 1,
\t\t\tthis.element.outerWidth()
\t\t) );
\t},

\t_renderMenu: function( ul, items ) {
\t\tvar that = this;
\t\t\$.each( items, function( index, item ) {
\t\t\tthat._renderItemData( ul, item );
\t\t} );
\t},

\t_renderItemData: function( ul, item ) {
\t\treturn this._renderItem( ul, item ).data( \"ui-autocomplete-item\", item );
\t},

\t_renderItem: function( ul, item ) {
\t\treturn \$( \"<li>\" )
\t\t\t.append( \$( \"<div>\" ).text( item.label ) )
\t\t\t.appendTo( ul );
\t},

\t_move: function( direction, event ) {
\t\tif ( !this.menu.element.is( \":visible\" ) ) {
\t\t\tthis.search( null, event );
\t\t\treturn;
\t\t}
\t\tif ( this.menu.isFirstItem() && /^previous/.test( direction ) ||
\t\t\t\tthis.menu.isLastItem() && /^next/.test( direction ) ) {

\t\t\tif ( !this.isMultiLine ) {
\t\t\t\tthis._value( this.term );
\t\t\t}

\t\t\tthis.menu.blur();
\t\t\treturn;
\t\t}
\t\tthis.menu[ direction ]( event );
\t},

\twidget: function() {
\t\treturn this.menu.element;
\t},

\t_value: function() {
\t\treturn this.valueMethod.apply( this.element, arguments );
\t},

\t_keyEvent: function( keyEvent, event ) {
\t\tif ( !this.isMultiLine || this.menu.element.is( \":visible\" ) ) {
\t\t\tthis._move( keyEvent, event );

\t\t\t// Prevents moving cursor to beginning/end of the text field in some browsers
\t\t\tevent.preventDefault();
\t\t}
\t},

\t// Support: Chrome <=50
\t// We should be able to just use this.element.prop( \"isContentEditable\" )
\t// but hidden elements always report false in Chrome.
\t// https://code.google.com/p/chromium/issues/detail?id=313082
\t_isContentEditable: function( element ) {
\t\tif ( !element.length ) {
\t\t\treturn false;
\t\t}

\t\tvar editable = element.prop( \"contentEditable\" );

\t\tif ( editable === \"inherit\" ) {
\t\t  return this._isContentEditable( element.parent() );
\t\t}

\t\treturn editable === \"true\";
\t}
} );

\$.extend( \$.ui.autocomplete, {
\tescapeRegex: function( value ) {
\t\treturn value.replace( /[\\-\\[\\]{}()*+?.,\\\\\\^\$|#\\s]/g, \"\\\\\$&\" );
\t},
\tfilter: function( array, term ) {
\t\tvar matcher = new RegExp( \$.ui.autocomplete.escapeRegex( term ), \"i\" );
\t\treturn \$.grep( array, function( value ) {
\t\t\treturn matcher.test( value.label || value.value || value );
\t\t} );
\t}
} );

// Live region extension, adding a `messages` option
// NOTE: This is an experimental API. We are still investigating
// a full solution for string manipulation and internationalization.
\$.widget( \"ui.autocomplete\", \$.ui.autocomplete, {
\toptions: {
\t\tmessages: {
\t\t\tnoResults: \"No search results.\",
\t\t\tresults: function( amount ) {
\t\t\t\treturn amount + ( amount > 1 ? \" results are\" : \" result is\" ) +
\t\t\t\t\t\" available, use up and down arrow keys to navigate.\";
\t\t\t}
\t\t}
\t},

\t__response: function( content ) {
\t\tvar message;
\t\tthis._superApply( arguments );
\t\tif ( this.options.disabled || this.cancelSearch ) {
\t\t\treturn;
\t\t}
\t\tif ( content && content.length ) {
\t\t\tmessage = this.options.messages.results( content.length );
\t\t} else {
\t\t\tmessage = this.options.messages.noResults;
\t\t}
\t\tthis.liveRegion.children().hide();
\t\t\$( \"<div>\" ).text( message ).appendTo( this.liveRegion );
\t}
} );

var widgetsAutocomplete = \$.ui.autocomplete;


/*!
 * jQuery UI Controlgroup 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Controlgroup
//>>group: Widgets
//>>description: Visually groups form control widgets
//>>docs: http://api.jqueryui.com/controlgroup/
//>>demos: http://jqueryui.com/controlgroup/
//>>css.structure: ../../themes/base/core.css
//>>css.structure: ../../themes/base/controlgroup.css
//>>css.theme: ../../themes/base/theme.css


var controlgroupCornerRegex = /ui-corner-([a-z]){2,6}/g;

var widgetsControlgroup = \$.widget( \"ui.controlgroup\", {
\tversion: \"1.12.1\",
\tdefaultElement: \"<div>\",
\toptions: {
\t\tdirection: \"horizontal\",
\t\tdisabled: null,
\t\tonlyVisible: true,
\t\titems: {
\t\t\t\"button\": \"input[type=button], input[type=submit], input[type=reset], button, a\",
\t\t\t\"controlgroupLabel\": \".ui-controlgroup-label\",
\t\t\t\"checkboxradio\": \"input[type='checkbox'], input[type='radio']\",
\t\t\t\"selectmenu\": \"select\",
\t\t\t\"spinner\": \".ui-spinner-input\"
\t\t}
\t},

\t_create: function() {
\t\tthis._enhance();
\t},

\t// To support the enhanced option in jQuery Mobile, we isolate DOM manipulation
\t_enhance: function() {
\t\tthis.element.attr( \"role\", \"toolbar\" );
\t\tthis.refresh();
\t},

\t_destroy: function() {
\t\tthis._callChildMethod( \"destroy\" );
\t\tthis.childWidgets.removeData( \"ui-controlgroup-data\" );
\t\tthis.element.removeAttr( \"role\" );
\t\tif ( this.options.items.controlgroupLabel ) {
\t\t\tthis.element
\t\t\t\t.find( this.options.items.controlgroupLabel )
\t\t\t\t.find( \".ui-controlgroup-label-contents\" )
\t\t\t\t.contents().unwrap();
\t\t}
\t},

\t_initWidgets: function() {
\t\tvar that = this,
\t\t\tchildWidgets = [];

\t\t// First we iterate over each of the items options
\t\t\$.each( this.options.items, function( widget, selector ) {
\t\t\tvar labels;
\t\t\tvar options = {};

\t\t\t// Make sure the widget has a selector set
\t\t\tif ( !selector ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( widget === \"controlgroupLabel\" ) {
\t\t\t\tlabels = that.element.find( selector );
\t\t\t\tlabels.each( function() {
\t\t\t\t\tvar element = \$( this );

\t\t\t\t\tif ( element.children( \".ui-controlgroup-label-contents\" ).length ) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\telement.contents()
\t\t\t\t\t\t.wrapAll( \"<span class='ui-controlgroup-label-contents'></span>\" );
\t\t\t\t} );
\t\t\t\tthat._addClass( labels, null, \"ui-widget ui-widget-content ui-state-default\" );
\t\t\t\tchildWidgets = childWidgets.concat( labels.get() );
\t\t\t\treturn;
\t\t\t}

\t\t\t// Make sure the widget actually exists
\t\t\tif ( !\$.fn[ widget ] ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// We assume everything is in the middle to start because we can't determine
\t\t\t// first / last elements until all enhancments are done.
\t\t\tif ( that[ \"_\" + widget + \"Options\" ] ) {
\t\t\t\toptions = that[ \"_\" + widget + \"Options\" ]( \"middle\" );
\t\t\t} else {
\t\t\t\toptions = { classes: {} };
\t\t\t}

\t\t\t// Find instances of this widget inside controlgroup and init them
\t\t\tthat.element
\t\t\t\t.find( selector )
\t\t\t\t.each( function() {
\t\t\t\t\tvar element = \$( this );
\t\t\t\t\tvar instance = element[ widget ]( \"instance\" );

\t\t\t\t\t// We need to clone the default options for this type of widget to avoid
\t\t\t\t\t// polluting the variable options which has a wider scope than a single widget.
\t\t\t\t\tvar instanceOptions = \$.widget.extend( {}, options );

\t\t\t\t\t// If the button is the child of a spinner ignore it
\t\t\t\t\t// TODO: Find a more generic solution
\t\t\t\t\tif ( widget === \"button\" && element.parent( \".ui-spinner\" ).length ) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\t// Create the widget if it doesn't exist
\t\t\t\t\tif ( !instance ) {
\t\t\t\t\t\tinstance = element[ widget ]()[ widget ]( \"instance\" );
\t\t\t\t\t}
\t\t\t\t\tif ( instance ) {
\t\t\t\t\t\tinstanceOptions.classes =
\t\t\t\t\t\t\tthat._resolveClassesValues( instanceOptions.classes, instance );
\t\t\t\t\t}
\t\t\t\t\telement[ widget ]( instanceOptions );

\t\t\t\t\t// Store an instance of the controlgroup to be able to reference
\t\t\t\t\t// from the outermost element for changing options and refresh
\t\t\t\t\tvar widgetElement = element[ widget ]( \"widget\" );
\t\t\t\t\t\$.data( widgetElement[ 0 ], \"ui-controlgroup-data\",
\t\t\t\t\t\tinstance ? instance : element[ widget ]( \"instance\" ) );

\t\t\t\t\tchildWidgets.push( widgetElement[ 0 ] );
\t\t\t\t} );
\t\t} );

\t\tthis.childWidgets = \$( \$.unique( childWidgets ) );
\t\tthis._addClass( this.childWidgets, \"ui-controlgroup-item\" );
\t},

\t_callChildMethod: function( method ) {
\t\tthis.childWidgets.each( function() {
\t\t\tvar element = \$( this ),
\t\t\t\tdata = element.data( \"ui-controlgroup-data\" );
\t\t\tif ( data && data[ method ] ) {
\t\t\t\tdata[ method ]();
\t\t\t}
\t\t} );
\t},

\t_updateCornerClass: function( element, position ) {
\t\tvar remove = \"ui-corner-top ui-corner-bottom ui-corner-left ui-corner-right ui-corner-all\";
\t\tvar add = this._buildSimpleOptions( position, \"label\" ).classes.label;

\t\tthis._removeClass( element, null, remove );
\t\tthis._addClass( element, null, add );
\t},

\t_buildSimpleOptions: function( position, key ) {
\t\tvar direction = this.options.direction === \"vertical\";
\t\tvar result = {
\t\t\tclasses: {}
\t\t};
\t\tresult.classes[ key ] = {
\t\t\t\"middle\": \"\",
\t\t\t\"first\": \"ui-corner-\" + ( direction ? \"top\" : \"left\" ),
\t\t\t\"last\": \"ui-corner-\" + ( direction ? \"bottom\" : \"right\" ),
\t\t\t\"only\": \"ui-corner-all\"
\t\t}[ position ];

\t\treturn result;
\t},

\t_spinnerOptions: function( position ) {
\t\tvar options = this._buildSimpleOptions( position, \"ui-spinner\" );

\t\toptions.classes[ \"ui-spinner-up\" ] = \"\";
\t\toptions.classes[ \"ui-spinner-down\" ] = \"\";

\t\treturn options;
\t},

\t_buttonOptions: function( position ) {
\t\treturn this._buildSimpleOptions( position, \"ui-button\" );
\t},

\t_checkboxradioOptions: function( position ) {
\t\treturn this._buildSimpleOptions( position, \"ui-checkboxradio-label\" );
\t},

\t_selectmenuOptions: function( position ) {
\t\tvar direction = this.options.direction === \"vertical\";
\t\treturn {
\t\t\twidth: direction ? \"auto\" : false,
\t\t\tclasses: {
\t\t\t\tmiddle: {
\t\t\t\t\t\"ui-selectmenu-button-open\": \"\",
\t\t\t\t\t\"ui-selectmenu-button-closed\": \"\"
\t\t\t\t},
\t\t\t\tfirst: {
\t\t\t\t\t\"ui-selectmenu-button-open\": \"ui-corner-\" + ( direction ? \"top\" : \"tl\" ),
\t\t\t\t\t\"ui-selectmenu-button-closed\": \"ui-corner-\" + ( direction ? \"top\" : \"left\" )
\t\t\t\t},
\t\t\t\tlast: {
\t\t\t\t\t\"ui-selectmenu-button-open\": direction ? \"\" : \"ui-corner-tr\",
\t\t\t\t\t\"ui-selectmenu-button-closed\": \"ui-corner-\" + ( direction ? \"bottom\" : \"right\" )
\t\t\t\t},
\t\t\t\tonly: {
\t\t\t\t\t\"ui-selectmenu-button-open\": \"ui-corner-top\",
\t\t\t\t\t\"ui-selectmenu-button-closed\": \"ui-corner-all\"
\t\t\t\t}

\t\t\t}[ position ]
\t\t};
\t},

\t_resolveClassesValues: function( classes, instance ) {
\t\tvar result = {};
\t\t\$.each( classes, function( key ) {
\t\t\tvar current = instance.options.classes[ key ] || \"\";
\t\t\tcurrent = \$.trim( current.replace( controlgroupCornerRegex, \"\" ) );
\t\t\tresult[ key ] = ( current + \" \" + classes[ key ] ).replace( /\\s+/g, \" \" );
\t\t} );
\t\treturn result;
\t},

\t_setOption: function( key, value ) {
\t\tif ( key === \"direction\" ) {
\t\t\tthis._removeClass( \"ui-controlgroup-\" + this.options.direction );
\t\t}

\t\tthis._super( key, value );
\t\tif ( key === \"disabled\" ) {
\t\t\tthis._callChildMethod( value ? \"disable\" : \"enable\" );
\t\t\treturn;
\t\t}

\t\tthis.refresh();
\t},

\trefresh: function() {
\t\tvar children,
\t\t\tthat = this;

\t\tthis._addClass( \"ui-controlgroup ui-controlgroup-\" + this.options.direction );

\t\tif ( this.options.direction === \"horizontal\" ) {
\t\t\tthis._addClass( null, \"ui-helper-clearfix\" );
\t\t}
\t\tthis._initWidgets();

\t\tchildren = this.childWidgets;

\t\t// We filter here because we need to track all childWidgets not just the visible ones
\t\tif ( this.options.onlyVisible ) {
\t\t\tchildren = children.filter( \":visible\" );
\t\t}

\t\tif ( children.length ) {

\t\t\t// We do this last because we need to make sure all enhancment is done
\t\t\t// before determining first and last
\t\t\t\$.each( [ \"first\", \"last\" ], function( index, value ) {
\t\t\t\tvar instance = children[ value ]().data( \"ui-controlgroup-data\" );

\t\t\t\tif ( instance && that[ \"_\" + instance.widgetName + \"Options\" ] ) {
\t\t\t\t\tvar options = that[ \"_\" + instance.widgetName + \"Options\" ](
\t\t\t\t\t\tchildren.length === 1 ? \"only\" : value
\t\t\t\t\t);
\t\t\t\t\toptions.classes = that._resolveClassesValues( options.classes, instance );
\t\t\t\t\tinstance.element[ instance.widgetName ]( options );
\t\t\t\t} else {
\t\t\t\t\tthat._updateCornerClass( children[ value ](), value );
\t\t\t\t}
\t\t\t} );

\t\t\t// Finally call the refresh method on each of the child widgets.
\t\t\tthis._callChildMethod( \"refresh\" );
\t\t}
\t}
} );

/*!
 * jQuery UI Checkboxradio 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Checkboxradio
//>>group: Widgets
//>>description: Enhances a form with multiple themeable checkboxes or radio buttons.
//>>docs: http://api.jqueryui.com/checkboxradio/
//>>demos: http://jqueryui.com/checkboxradio/
//>>css.structure: ../../themes/base/core.css
//>>css.structure: ../../themes/base/button.css
//>>css.structure: ../../themes/base/checkboxradio.css
//>>css.theme: ../../themes/base/theme.css



\$.widget( \"ui.checkboxradio\", [ \$.ui.formResetMixin, {
\tversion: \"1.12.1\",
\toptions: {
\t\tdisabled: null,
\t\tlabel: null,
\t\ticon: true,
\t\tclasses: {
\t\t\t\"ui-checkboxradio-label\": \"ui-corner-all\",
\t\t\t\"ui-checkboxradio-icon\": \"ui-corner-all\"
\t\t}
\t},

\t_getCreateOptions: function() {
\t\tvar disabled, labels;
\t\tvar that = this;
\t\tvar options = this._super() || {};

\t\t// We read the type here, because it makes more sense to throw a element type error first,
\t\t// rather then the error for lack of a label. Often if its the wrong type, it
\t\t// won't have a label (e.g. calling on a div, btn, etc)
\t\tthis._readType();

\t\tlabels = this.element.labels();

\t\t// If there are multiple labels, use the last one
\t\tthis.label = \$( labels[ labels.length - 1 ] );
\t\tif ( !this.label.length ) {
\t\t\t\$.error( \"No label found for checkboxradio widget\" );
\t\t}

\t\tthis.originalLabel = \"\";

\t\t// We need to get the label text but this may also need to make sure it does not contain the
\t\t// input itself.
\t\tthis.label.contents().not( this.element[ 0 ] ).each( function() {

\t\t\t// The label contents could be text, html, or a mix. We concat each element to get a
\t\t\t// string representation of the label, without the input as part of it.
\t\t\tthat.originalLabel += this.nodeType === 3 ? \$( this ).text() : this.outerHTML;
\t\t} );

\t\t// Set the label option if we found label text
\t\tif ( this.originalLabel ) {
\t\t\toptions.label = this.originalLabel;
\t\t}

\t\tdisabled = this.element[ 0 ].disabled;
\t\tif ( disabled != null ) {
\t\t\toptions.disabled = disabled;
\t\t}
\t\treturn options;
\t},

\t_create: function() {
\t\tvar checked = this.element[ 0 ].checked;

\t\tthis._bindFormResetHandler();

\t\tif ( this.options.disabled == null ) {
\t\t\tthis.options.disabled = this.element[ 0 ].disabled;
\t\t}

\t\tthis._setOption( \"disabled\", this.options.disabled );
\t\tthis._addClass( \"ui-checkboxradio\", \"ui-helper-hidden-accessible\" );
\t\tthis._addClass( this.label, \"ui-checkboxradio-label\", \"ui-button ui-widget\" );

\t\tif ( this.type === \"radio\" ) {
\t\t\tthis._addClass( this.label, \"ui-checkboxradio-radio-label\" );
\t\t}

\t\tif ( this.options.label && this.options.label !== this.originalLabel ) {
\t\t\tthis._updateLabel();
\t\t} else if ( this.originalLabel ) {
\t\t\tthis.options.label = this.originalLabel;
\t\t}

\t\tthis._enhance();

\t\tif ( checked ) {
\t\t\tthis._addClass( this.label, \"ui-checkboxradio-checked\", \"ui-state-active\" );
\t\t\tif ( this.icon ) {
\t\t\t\tthis._addClass( this.icon, null, \"ui-state-hover\" );
\t\t\t}
\t\t}

\t\tthis._on( {
\t\t\tchange: \"_toggleClasses\",
\t\t\tfocus: function() {
\t\t\t\tthis._addClass( this.label, null, \"ui-state-focus ui-visual-focus\" );
\t\t\t},
\t\t\tblur: function() {
\t\t\t\tthis._removeClass( this.label, null, \"ui-state-focus ui-visual-focus\" );
\t\t\t}
\t\t} );
\t},

\t_readType: function() {
\t\tvar nodeName = this.element[ 0 ].nodeName.toLowerCase();
\t\tthis.type = this.element[ 0 ].type;
\t\tif ( nodeName !== \"input\" || !/radio|checkbox/.test( this.type ) ) {
\t\t\t\$.error( \"Can't create checkboxradio on element.nodeName=\" + nodeName +
\t\t\t\t\" and element.type=\" + this.type );
\t\t}
\t},

\t// Support jQuery Mobile enhanced option
\t_enhance: function() {
\t\tthis._updateIcon( this.element[ 0 ].checked );
\t},

\twidget: function() {
\t\treturn this.label;
\t},

\t_getRadioGroup: function() {
\t\tvar group;
\t\tvar name = this.element[ 0 ].name;
\t\tvar nameSelector = \"input[name='\" + \$.ui.escapeSelector( name ) + \"']\";

\t\tif ( !name ) {
\t\t\treturn \$( [] );
\t\t}

\t\tif ( this.form.length ) {
\t\t\tgroup = \$( this.form[ 0 ].elements ).filter( nameSelector );
\t\t} else {

\t\t\t// Not inside a form, check all inputs that also are not inside a form
\t\t\tgroup = \$( nameSelector ).filter( function() {
\t\t\t\treturn \$( this ).form().length === 0;
\t\t\t} );
\t\t}

\t\treturn group.not( this.element );
\t},

\t_toggleClasses: function() {
\t\tvar checked = this.element[ 0 ].checked;
\t\tthis._toggleClass( this.label, \"ui-checkboxradio-checked\", \"ui-state-active\", checked );

\t\tif ( this.options.icon && this.type === \"checkbox\" ) {
\t\t\tthis._toggleClass( this.icon, null, \"ui-icon-check ui-state-checked\", checked )
\t\t\t\t._toggleClass( this.icon, null, \"ui-icon-blank\", !checked );
\t\t}

\t\tif ( this.type === \"radio\" ) {
\t\t\tthis._getRadioGroup()
\t\t\t\t.each( function() {
\t\t\t\t\tvar instance = \$( this ).checkboxradio( \"instance\" );

\t\t\t\t\tif ( instance ) {
\t\t\t\t\t\tinstance._removeClass( instance.label,
\t\t\t\t\t\t\t\"ui-checkboxradio-checked\", \"ui-state-active\" );
\t\t\t\t\t}
\t\t\t\t} );
\t\t}
\t},

\t_destroy: function() {
\t\tthis._unbindFormResetHandler();

\t\tif ( this.icon ) {
\t\t\tthis.icon.remove();
\t\t\tthis.iconSpace.remove();
\t\t}
\t},

\t_setOption: function( key, value ) {

\t\t// We don't allow the value to be set to nothing
\t\tif ( key === \"label\" && !value ) {
\t\t\treturn;
\t\t}

\t\tthis._super( key, value );

\t\tif ( key === \"disabled\" ) {
\t\t\tthis._toggleClass( this.label, null, \"ui-state-disabled\", value );
\t\t\tthis.element[ 0 ].disabled = value;

\t\t\t// Don't refresh when setting disabled
\t\t\treturn;
\t\t}
\t\tthis.refresh();
\t},

\t_updateIcon: function( checked ) {
\t\tvar toAdd = \"ui-icon ui-icon-background \";

\t\tif ( this.options.icon ) {
\t\t\tif ( !this.icon ) {
\t\t\t\tthis.icon = \$( \"<span>\" );
\t\t\t\tthis.iconSpace = \$( \"<span> </span>\" );
\t\t\t\tthis._addClass( this.iconSpace, \"ui-checkboxradio-icon-space\" );
\t\t\t}

\t\t\tif ( this.type === \"checkbox\" ) {
\t\t\t\ttoAdd += checked ? \"ui-icon-check ui-state-checked\" : \"ui-icon-blank\";
\t\t\t\tthis._removeClass( this.icon, null, checked ? \"ui-icon-blank\" : \"ui-icon-check\" );
\t\t\t} else {
\t\t\t\ttoAdd += \"ui-icon-blank\";
\t\t\t}
\t\t\tthis._addClass( this.icon, \"ui-checkboxradio-icon\", toAdd );
\t\t\tif ( !checked ) {
\t\t\t\tthis._removeClass( this.icon, null, \"ui-icon-check ui-state-checked\" );
\t\t\t}
\t\t\tthis.icon.prependTo( this.label ).after( this.iconSpace );
\t\t} else if ( this.icon !== undefined ) {
\t\t\tthis.icon.remove();
\t\t\tthis.iconSpace.remove();
\t\t\tdelete this.icon;
\t\t}
\t},

\t_updateLabel: function() {

\t\t// Remove the contents of the label ( minus the icon, icon space, and input )
\t\tvar contents = this.label.contents().not( this.element[ 0 ] );
\t\tif ( this.icon ) {
\t\t\tcontents = contents.not( this.icon[ 0 ] );
\t\t}
\t\tif ( this.iconSpace ) {
\t\t\tcontents = contents.not( this.iconSpace[ 0 ] );
\t\t}
\t\tcontents.remove();

\t\tthis.label.append( this.options.label );
\t},

\trefresh: function() {
\t\tvar checked = this.element[ 0 ].checked,
\t\t\tisDisabled = this.element[ 0 ].disabled;

\t\tthis._updateIcon( checked );
\t\tthis._toggleClass( this.label, \"ui-checkboxradio-checked\", \"ui-state-active\", checked );
\t\tif ( this.options.label !== null ) {
\t\t\tthis._updateLabel();
\t\t}

\t\tif ( isDisabled !== this.options.disabled ) {
\t\t\tthis._setOptions( { \"disabled\": isDisabled } );
\t\t}
\t}

} ] );

var widgetsCheckboxradio = \$.ui.checkboxradio;


/*!
 * jQuery UI Button 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Button
//>>group: Widgets
//>>description: Enhances a form with themeable buttons.
//>>docs: http://api.jqueryui.com/button/
//>>demos: http://jqueryui.com/button/
//>>css.structure: ../../themes/base/core.css
//>>css.structure: ../../themes/base/button.css
//>>css.theme: ../../themes/base/theme.css



\$.widget( \"ui.button\", {
\tversion: \"1.12.1\",
\tdefaultElement: \"<button>\",
\toptions: {
\t\tclasses: {
\t\t\t\"ui-button\": \"ui-corner-all\"
\t\t},
\t\tdisabled: null,
\t\ticon: null,
\t\ticonPosition: \"beginning\",
\t\tlabel: null,
\t\tshowLabel: true
\t},

\t_getCreateOptions: function() {
\t\tvar disabled,

\t\t\t// This is to support cases like in jQuery Mobile where the base widget does have
\t\t\t// an implementation of _getCreateOptions
\t\t\toptions = this._super() || {};

\t\tthis.isInput = this.element.is( \"input\" );

\t\tdisabled = this.element[ 0 ].disabled;
\t\tif ( disabled != null ) {
\t\t\toptions.disabled = disabled;
\t\t}

\t\tthis.originalLabel = this.isInput ? this.element.val() : this.element.html();
\t\tif ( this.originalLabel ) {
\t\t\toptions.label = this.originalLabel;
\t\t}

\t\treturn options;
\t},

\t_create: function() {
\t\tif ( !this.option.showLabel & !this.options.icon ) {
\t\t\tthis.options.showLabel = true;
\t\t}

\t\t// We have to check the option again here even though we did in _getCreateOptions,
\t\t// because null may have been passed on init which would override what was set in
\t\t// _getCreateOptions
\t\tif ( this.options.disabled == null ) {
\t\t\tthis.options.disabled = this.element[ 0 ].disabled || false;
\t\t}

\t\tthis.hasTitle = !!this.element.attr( \"title\" );

\t\t// Check to see if the label needs to be set or if its already correct
\t\tif ( this.options.label && this.options.label !== this.originalLabel ) {
\t\t\tif ( this.isInput ) {
\t\t\t\tthis.element.val( this.options.label );
\t\t\t} else {
\t\t\t\tthis.element.html( this.options.label );
\t\t\t}
\t\t}
\t\tthis._addClass( \"ui-button\", \"ui-widget\" );
\t\tthis._setOption( \"disabled\", this.options.disabled );
\t\tthis._enhance();

\t\tif ( this.element.is( \"a\" ) ) {
\t\t\tthis._on( {
\t\t\t\t\"keyup\": function( event ) {
\t\t\t\t\tif ( event.keyCode === \$.ui.keyCode.SPACE ) {
\t\t\t\t\t\tevent.preventDefault();

\t\t\t\t\t\t// Support: PhantomJS <= 1.9, IE 8 Only
\t\t\t\t\t\t// If a native click is available use it so we actually cause navigation
\t\t\t\t\t\t// otherwise just trigger a click event
\t\t\t\t\t\tif ( this.element[ 0 ].click ) {
\t\t\t\t\t\t\tthis.element[ 0 ].click();
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tthis.element.trigger( \"click\" );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} );
\t\t}
\t},

\t_enhance: function() {
\t\tif ( !this.element.is( \"button\" ) ) {
\t\t\tthis.element.attr( \"role\", \"button\" );
\t\t}

\t\tif ( this.options.icon ) {
\t\t\tthis._updateIcon( \"icon\", this.options.icon );
\t\t\tthis._updateTooltip();
\t\t}
\t},

\t_updateTooltip: function() {
\t\tthis.title = this.element.attr( \"title\" );

\t\tif ( !this.options.showLabel && !this.title ) {
\t\t\tthis.element.attr( \"title\", this.options.label );
\t\t}
\t},

\t_updateIcon: function( option, value ) {
\t\tvar icon = option !== \"iconPosition\",
\t\t\tposition = icon ? this.options.iconPosition : value,
\t\t\tdisplayBlock = position === \"top\" || position === \"bottom\";

\t\t// Create icon
\t\tif ( !this.icon ) {
\t\t\tthis.icon = \$( \"<span>\" );

\t\t\tthis._addClass( this.icon, \"ui-button-icon\", \"ui-icon\" );

\t\t\tif ( !this.options.showLabel ) {
\t\t\t\tthis._addClass( \"ui-button-icon-only\" );
\t\t\t}
\t\t} else if ( icon ) {

\t\t\t// If we are updating the icon remove the old icon class
\t\t\tthis._removeClass( this.icon, null, this.options.icon );
\t\t}

\t\t// If we are updating the icon add the new icon class
\t\tif ( icon ) {
\t\t\tthis._addClass( this.icon, null, value );
\t\t}

\t\tthis._attachIcon( position );

\t\t// If the icon is on top or bottom we need to add the ui-widget-icon-block class and remove
\t\t// the iconSpace if there is one.
\t\tif ( displayBlock ) {
\t\t\tthis._addClass( this.icon, null, \"ui-widget-icon-block\" );
\t\t\tif ( this.iconSpace ) {
\t\t\t\tthis.iconSpace.remove();
\t\t\t}
\t\t} else {

\t\t\t// Position is beginning or end so remove the ui-widget-icon-block class and add the
\t\t\t// space if it does not exist
\t\t\tif ( !this.iconSpace ) {
\t\t\t\tthis.iconSpace = \$( \"<span> </span>\" );
\t\t\t\tthis._addClass( this.iconSpace, \"ui-button-icon-space\" );
\t\t\t}
\t\t\tthis._removeClass( this.icon, null, \"ui-wiget-icon-block\" );
\t\t\tthis._attachIconSpace( position );
\t\t}
\t},

\t_destroy: function() {
\t\tthis.element.removeAttr( \"role\" );

\t\tif ( this.icon ) {
\t\t\tthis.icon.remove();
\t\t}
\t\tif ( this.iconSpace ) {
\t\t\tthis.iconSpace.remove();
\t\t}
\t\tif ( !this.hasTitle ) {
\t\t\tthis.element.removeAttr( \"title\" );
\t\t}
\t},

\t_attachIconSpace: function( iconPosition ) {
\t\tthis.icon[ /^(?:end|bottom)/.test( iconPosition ) ? \"before\" : \"after\" ]( this.iconSpace );
\t},

\t_attachIcon: function( iconPosition ) {
\t\tthis.element[ /^(?:end|bottom)/.test( iconPosition ) ? \"append\" : \"prepend\" ]( this.icon );
\t},

\t_setOptions: function( options ) {
\t\tvar newShowLabel = options.showLabel === undefined ?
\t\t\t\tthis.options.showLabel :
\t\t\t\toptions.showLabel,
\t\t\tnewIcon = options.icon === undefined ? this.options.icon : options.icon;

\t\tif ( !newShowLabel && !newIcon ) {
\t\t\toptions.showLabel = true;
\t\t}
\t\tthis._super( options );
\t},

\t_setOption: function( key, value ) {
\t\tif ( key === \"icon\" ) {
\t\t\tif ( value ) {
\t\t\t\tthis._updateIcon( key, value );
\t\t\t} else if ( this.icon ) {
\t\t\t\tthis.icon.remove();
\t\t\t\tif ( this.iconSpace ) {
\t\t\t\t\tthis.iconSpace.remove();
\t\t\t\t}
\t\t\t}
\t\t}

\t\tif ( key === \"iconPosition\" ) {
\t\t\tthis._updateIcon( key, value );
\t\t}

\t\t// Make sure we can't end up with a button that has neither text nor icon
\t\tif ( key === \"showLabel\" ) {
\t\t\t\tthis._toggleClass( \"ui-button-icon-only\", null, !value );
\t\t\t\tthis._updateTooltip();
\t\t}

\t\tif ( key === \"label\" ) {
\t\t\tif ( this.isInput ) {
\t\t\t\tthis.element.val( value );
\t\t\t} else {

\t\t\t\t// If there is an icon, append it, else nothing then append the value
\t\t\t\t// this avoids removal of the icon when setting label text
\t\t\t\tthis.element.html( value );
\t\t\t\tif ( this.icon ) {
\t\t\t\t\tthis._attachIcon( this.options.iconPosition );
\t\t\t\t\tthis._attachIconSpace( this.options.iconPosition );
\t\t\t\t}
\t\t\t}
\t\t}

\t\tthis._super( key, value );

\t\tif ( key === \"disabled\" ) {
\t\t\tthis._toggleClass( null, \"ui-state-disabled\", value );
\t\t\tthis.element[ 0 ].disabled = value;
\t\t\tif ( value ) {
\t\t\t\tthis.element.blur();
\t\t\t}
\t\t}
\t},

\trefresh: function() {

\t\t// Make sure to only check disabled if its an element that supports this otherwise
\t\t// check for the disabled class to determine state
\t\tvar isDisabled = this.element.is( \"input, button\" ) ?
\t\t\tthis.element[ 0 ].disabled : this.element.hasClass( \"ui-button-disabled\" );

\t\tif ( isDisabled !== this.options.disabled ) {
\t\t\tthis._setOptions( { disabled: isDisabled } );
\t\t}

\t\tthis._updateTooltip();
\t}
} );

// DEPRECATED
if ( \$.uiBackCompat !== false ) {

\t// Text and Icons options
\t\$.widget( \"ui.button\", \$.ui.button, {
\t\toptions: {
\t\t\ttext: true,
\t\t\ticons: {
\t\t\t\tprimary: null,
\t\t\t\tsecondary: null
\t\t\t}
\t\t},

\t\t_create: function() {
\t\t\tif ( this.options.showLabel && !this.options.text ) {
\t\t\t\tthis.options.showLabel = this.options.text;
\t\t\t}
\t\t\tif ( !this.options.showLabel && this.options.text ) {
\t\t\t\tthis.options.text = this.options.showLabel;
\t\t\t}
\t\t\tif ( !this.options.icon && ( this.options.icons.primary ||
\t\t\t\t\tthis.options.icons.secondary ) ) {
\t\t\t\tif ( this.options.icons.primary ) {
\t\t\t\t\tthis.options.icon = this.options.icons.primary;
\t\t\t\t} else {
\t\t\t\t\tthis.options.icon = this.options.icons.secondary;
\t\t\t\t\tthis.options.iconPosition = \"end\";
\t\t\t\t}
\t\t\t} else if ( this.options.icon ) {
\t\t\t\tthis.options.icons.primary = this.options.icon;
\t\t\t}
\t\t\tthis._super();
\t\t},

\t\t_setOption: function( key, value ) {
\t\t\tif ( key === \"text\" ) {
\t\t\t\tthis._super( \"showLabel\", value );
\t\t\t\treturn;
\t\t\t}
\t\t\tif ( key === \"showLabel\" ) {
\t\t\t\tthis.options.text = value;
\t\t\t}
\t\t\tif ( key === \"icon\" ) {
\t\t\t\tthis.options.icons.primary = value;
\t\t\t}
\t\t\tif ( key === \"icons\" ) {
\t\t\t\tif ( value.primary ) {
\t\t\t\t\tthis._super( \"icon\", value.primary );
\t\t\t\t\tthis._super( \"iconPosition\", \"beginning\" );
\t\t\t\t} else if ( value.secondary ) {
\t\t\t\t\tthis._super( \"icon\", value.secondary );
\t\t\t\t\tthis._super( \"iconPosition\", \"end\" );
\t\t\t\t}
\t\t\t}
\t\t\tthis._superApply( arguments );
\t\t}
\t} );

\t\$.fn.button = ( function( orig ) {
\t\treturn function() {
\t\t\tif ( !this.length || ( this.length && this[ 0 ].tagName !== \"INPUT\" ) ||
\t\t\t\t\t( this.length && this[ 0 ].tagName === \"INPUT\" && (
\t\t\t\t\t\tthis.attr( \"type\" ) !== \"checkbox\" && this.attr( \"type\" ) !== \"radio\"
\t\t\t\t\t) ) ) {
\t\t\t\treturn orig.apply( this, arguments );
\t\t\t}
\t\t\tif ( !\$.ui.checkboxradio ) {
\t\t\t\t\$.error( \"Checkboxradio widget missing\" );
\t\t\t}
\t\t\tif ( arguments.length === 0 ) {
\t\t\t\treturn this.checkboxradio( {
\t\t\t\t\t\"icon\": false
\t\t\t\t} );
\t\t\t}
\t\t\treturn this.checkboxradio.apply( this, arguments );
\t\t};
\t} )( \$.fn.button );

\t\$.fn.buttonset = function() {
\t\tif ( !\$.ui.controlgroup ) {
\t\t\t\$.error( \"Controlgroup widget missing\" );
\t\t}
\t\tif ( arguments[ 0 ] === \"option\" && arguments[ 1 ] === \"items\" && arguments[ 2 ] ) {
\t\t\treturn this.controlgroup.apply( this,
\t\t\t\t[ arguments[ 0 ], \"items.button\", arguments[ 2 ] ] );
\t\t}
\t\tif ( arguments[ 0 ] === \"option\" && arguments[ 1 ] === \"items\" ) {
\t\t\treturn this.controlgroup.apply( this, [ arguments[ 0 ], \"items.button\" ] );
\t\t}
\t\tif ( typeof arguments[ 0 ] === \"object\" && arguments[ 0 ].items ) {
\t\t\targuments[ 0 ].items = {
\t\t\t\tbutton: arguments[ 0 ].items
\t\t\t};
\t\t}
\t\treturn this.controlgroup.apply( this, arguments );
\t};
}

var widgetsButton = \$.ui.button;


// jscs:disable maximumLineLength
/* jscs:disable requireCamelCaseOrUpperCaseIdentifiers */
/*!
 * jQuery UI Datepicker 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Datepicker
//>>group: Widgets
//>>description: Displays a calendar from an input or inline for selecting dates.
//>>docs: http://api.jqueryui.com/datepicker/
//>>demos: http://jqueryui.com/datepicker/
//>>css.structure: ../../themes/base/core.css
//>>css.structure: ../../themes/base/datepicker.css
//>>css.theme: ../../themes/base/theme.css



\$.extend( \$.ui, { datepicker: { version: \"1.12.1\" } } );

var datepicker_instActive;

function datepicker_getZindex( elem ) {
\tvar position, value;
\twhile ( elem.length && elem[ 0 ] !== document ) {

\t\t// Ignore z-index if position is set to a value where z-index is ignored by the browser
\t\t// This makes behavior of this function consistent across browsers
\t\t// WebKit always returns auto if the element is positioned
\t\tposition = elem.css( \"position\" );
\t\tif ( position === \"absolute\" || position === \"relative\" || position === \"fixed\" ) {

\t\t\t// IE returns 0 when zIndex is not specified
\t\t\t// other browsers return a string
\t\t\t// we ignore the case of nested elements with an explicit value of 0
\t\t\t// <div style=\"z-index: -10;\"><div style=\"z-index: 0;\"></div></div>
\t\t\tvalue = parseInt( elem.css( \"zIndex\" ), 10 );
\t\t\tif ( !isNaN( value ) && value !== 0 ) {
\t\t\t\treturn value;
\t\t\t}
\t\t}
\t\telem = elem.parent();
\t}

\treturn 0;
}
/* Date picker manager.
   Use the singleton instance of this class, \$.datepicker, to interact with the date picker.
   Settings for (groups of) date pickers are maintained in an instance object,
   allowing multiple different settings on the same page. */

function Datepicker() {
\tthis._curInst = null; // The current instance in use
\tthis._keyEvent = false; // If the last event was a key event
\tthis._disabledInputs = []; // List of date picker inputs that have been disabled
\tthis._datepickerShowing = false; // True if the popup picker is showing , false if not
\tthis._inDialog = false; // True if showing within a \"dialog\", false if not
\tthis._mainDivId = \"ui-datepicker-div\"; // The ID of the main datepicker division
\tthis._inlineClass = \"ui-datepicker-inline\"; // The name of the inline marker class
\tthis._appendClass = \"ui-datepicker-append\"; // The name of the append marker class
\tthis._triggerClass = \"ui-datepicker-trigger\"; // The name of the trigger marker class
\tthis._dialogClass = \"ui-datepicker-dialog\"; // The name of the dialog marker class
\tthis._disableClass = \"ui-datepicker-disabled\"; // The name of the disabled covering marker class
\tthis._unselectableClass = \"ui-datepicker-unselectable\"; // The name of the unselectable cell marker class
\tthis._currentClass = \"ui-datepicker-current-day\"; // The name of the current day marker class
\tthis._dayOverClass = \"ui-datepicker-days-cell-over\"; // The name of the day hover marker class
\tthis.regional = []; // Available regional settings, indexed by language code
\tthis.regional[ \"\" ] = { // Default regional settings
\t\tcloseText: \"Done\", // Display text for close link
\t\tprevText: \"Prev\", // Display text for previous month link
\t\tnextText: \"Next\", // Display text for next month link
\t\tcurrentText: \"Today\", // Display text for current month link
\t\tmonthNames: [ \"January\",\"February\",\"March\",\"April\",\"May\",\"June\",
\t\t\t\"July\",\"August\",\"September\",\"October\",\"November\",\"December\" ], // Names of months for drop-down and formatting
\t\tmonthNamesShort: [ \"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\" ], // For formatting
\t\tdayNames: [ \"Sunday\", \"Monday\", \"Tuesday\", \"Wednesday\", \"Thursday\", \"Friday\", \"Saturday\" ], // For formatting
\t\tdayNamesShort: [ \"Sun\", \"Mon\", \"Tue\", \"Wed\", \"Thu\", \"Fri\", \"Sat\" ], // For formatting
\t\tdayNamesMin: [ \"Su\",\"Mo\",\"Tu\",\"We\",\"Th\",\"Fr\",\"Sa\" ], // Column headings for days starting at Sunday
\t\tweekHeader: \"Wk\", // Column header for week of the year
\t\tdateFormat: \"mm/dd/yy\", // See format options on parseDate
\t\tfirstDay: 0, // The first day of the week, Sun = 0, Mon = 1, ...
\t\tisRTL: false, // True if right-to-left language, false if left-to-right
\t\tshowMonthAfterYear: false, // True if the year select precedes month, false for month then year
\t\tyearSuffix: \"\" // Additional text to append to the year in the month headers
\t};
\tthis._defaults = { // Global defaults for all the date picker instances
\t\tshowOn: \"focus\", // \"focus\" for popup on focus,
\t\t\t// \"button\" for trigger button, or \"both\" for either
\t\tshowAnim: \"fadeIn\", // Name of jQuery animation for popup
\t\tshowOptions: {}, // Options for enhanced animations
\t\tdefaultDate: null, // Used when field is blank: actual date,
\t\t\t// +/-number for offset from today, null for today
\t\tappendText: \"\", // Display text following the input box, e.g. showing the format
\t\tbuttonText: \"...\", // Text for trigger button
\t\tbuttonImage: \"\", // URL for trigger button image
\t\tbuttonImageOnly: false, // True if the image appears alone, false if it appears on a button
\t\thideIfNoPrevNext: false, // True to hide next/previous month links
\t\t\t// if not applicable, false to just disable them
\t\tnavigationAsDateFormat: false, // True if date formatting applied to prev/today/next links
\t\tgotoCurrent: false, // True if today link goes back to current selection instead
\t\tchangeMonth: false, // True if month can be selected directly, false if only prev/next
\t\tchangeYear: false, // True if year can be selected directly, false if only prev/next
\t\tyearRange: \"c-10:c+10\", // Range of years to display in drop-down,
\t\t\t// either relative to today's year (-nn:+nn), relative to currently displayed year
\t\t\t// (c-nn:c+nn), absolute (nnnn:nnnn), or a combination of the above (nnnn:-n)
\t\tshowOtherMonths: false, // True to show dates in other months, false to leave blank
\t\tselectOtherMonths: false, // True to allow selection of dates in other months, false for unselectable
\t\tshowWeek: false, // True to show week of the year, false to not show it
\t\tcalculateWeek: this.iso8601Week, // How to calculate the week of the year,
\t\t\t// takes a Date and returns the number of the week for it
\t\tshortYearCutoff: \"+10\", // Short year values < this are in the current century,
\t\t\t// > this are in the previous century,
\t\t\t// string value starting with \"+\" for current year + value
\t\tminDate: null, // The earliest selectable date, or null for no limit
\t\tmaxDate: null, // The latest selectable date, or null for no limit
\t\tduration: \"fast\", // Duration of display/closure
\t\tbeforeShowDay: null, // Function that takes a date and returns an array with
\t\t\t// [0] = true if selectable, false if not, [1] = custom CSS class name(s) or \"\",
\t\t\t// [2] = cell title (optional), e.g. \$.datepicker.noWeekends
\t\tbeforeShow: null, // Function that takes an input field and
\t\t\t// returns a set of custom settings for the date picker
\t\tonSelect: null, // Define a callback function when a date is selected
\t\tonChangeMonthYear: null, // Define a callback function when the month or year is changed
\t\tonClose: null, // Define a callback function when the datepicker is closed
\t\tnumberOfMonths: 1, // Number of months to show at a time
\t\tshowCurrentAtPos: 0, // The position in multipe months at which to show the current month (starting at 0)
\t\tstepMonths: 1, // Number of months to step back/forward
\t\tstepBigMonths: 12, // Number of months to step back/forward for the big links
\t\taltField: \"\", // Selector for an alternate field to store selected dates into
\t\taltFormat: \"\", // The date format to use for the alternate field
\t\tconstrainInput: true, // The input is constrained by the current date format
\t\tshowButtonPanel: false, // True to show button panel, false to not show it
\t\tautoSize: false, // True to size the input for the date format, false to leave as is
\t\tdisabled: false // The initial disabled state
\t};
\t\$.extend( this._defaults, this.regional[ \"\" ] );
\tthis.regional.en = \$.extend( true, {}, this.regional[ \"\" ] );
\tthis.regional[ \"en-US\" ] = \$.extend( true, {}, this.regional.en );
\tthis.dpDiv = datepicker_bindHover( \$( \"<div id='\" + this._mainDivId + \"' class='ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'></div>\" ) );
}

\$.extend( Datepicker.prototype, {
\t/* Class name added to elements to indicate already configured with a date picker. */
\tmarkerClassName: \"hasDatepicker\",

\t//Keep track of the maximum number of rows displayed (see #7043)
\tmaxRows: 4,

\t// TODO rename to \"widget\" when switching to widget factory
\t_widgetDatepicker: function() {
\t\treturn this.dpDiv;
\t},

\t/* Override the default settings for all instances of the date picker.
\t * @param  settings  object - the new settings to use as defaults (anonymous object)
\t * @return the manager object
\t */
\tsetDefaults: function( settings ) {
\t\tdatepicker_extendRemove( this._defaults, settings || {} );
\t\treturn this;
\t},

\t/* Attach the date picker to a jQuery selection.
\t * @param  target\telement - the target input field or division or span
\t * @param  settings  object - the new settings to use for this date picker instance (anonymous)
\t */
\t_attachDatepicker: function( target, settings ) {
\t\tvar nodeName, inline, inst;
\t\tnodeName = target.nodeName.toLowerCase();
\t\tinline = ( nodeName === \"div\" || nodeName === \"span\" );
\t\tif ( !target.id ) {
\t\t\tthis.uuid += 1;
\t\t\ttarget.id = \"dp\" + this.uuid;
\t\t}
\t\tinst = this._newInst( \$( target ), inline );
\t\tinst.settings = \$.extend( {}, settings || {} );
\t\tif ( nodeName === \"input\" ) {
\t\t\tthis._connectDatepicker( target, inst );
\t\t} else if ( inline ) {
\t\t\tthis._inlineDatepicker( target, inst );
\t\t}
\t},

\t/* Create a new instance object. */
\t_newInst: function( target, inline ) {
\t\tvar id = target[ 0 ].id.replace( /([^A-Za-z0-9_\\-])/g, \"\\\\\\\\\$1\" ); // escape jQuery meta chars
\t\treturn { id: id, input: target, // associated target
\t\t\tselectedDay: 0, selectedMonth: 0, selectedYear: 0, // current selection
\t\t\tdrawMonth: 0, drawYear: 0, // month being drawn
\t\t\tinline: inline, // is datepicker inline or not
\t\t\tdpDiv: ( !inline ? this.dpDiv : // presentation div
\t\t\tdatepicker_bindHover( \$( \"<div class='\" + this._inlineClass + \" ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'></div>\" ) ) ) };
\t},

\t/* Attach the date picker to an input field. */
\t_connectDatepicker: function( target, inst ) {
\t\tvar input = \$( target );
\t\tinst.append = \$( [] );
\t\tinst.trigger = \$( [] );
\t\tif ( input.hasClass( this.markerClassName ) ) {
\t\t\treturn;
\t\t}
\t\tthis._attachments( input, inst );
\t\tinput.addClass( this.markerClassName ).on( \"keydown\", this._doKeyDown ).
\t\t\ton( \"keypress\", this._doKeyPress ).on( \"keyup\", this._doKeyUp );
\t\tthis._autoSize( inst );
\t\t\$.data( target, \"datepicker\", inst );

\t\t//If disabled option is true, disable the datepicker once it has been attached to the input (see ticket #5665)
\t\tif ( inst.settings.disabled ) {
\t\t\tthis._disableDatepicker( target );
\t\t}
\t},

\t/* Make attachments based on settings. */
\t_attachments: function( input, inst ) {
\t\tvar showOn, buttonText, buttonImage,
\t\t\tappendText = this._get( inst, \"appendText\" ),
\t\t\tisRTL = this._get( inst, \"isRTL\" );

\t\tif ( inst.append ) {
\t\t\tinst.append.remove();
\t\t}
\t\tif ( appendText ) {
\t\t\tinst.append = \$( \"<span class='\" + this._appendClass + \"'>\" + appendText + \"</span>\" );
\t\t\tinput[ isRTL ? \"before\" : \"after\" ]( inst.append );
\t\t}

\t\tinput.off( \"focus\", this._showDatepicker );

\t\tif ( inst.trigger ) {
\t\t\tinst.trigger.remove();
\t\t}

\t\tshowOn = this._get( inst, \"showOn\" );
\t\tif ( showOn === \"focus\" || showOn === \"both\" ) { // pop-up date picker when in the marked field
\t\t\tinput.on( \"focus\", this._showDatepicker );
\t\t}
\t\tif ( showOn === \"button\" || showOn === \"both\" ) { // pop-up date picker when button clicked
\t\t\tbuttonText = this._get( inst, \"buttonText\" );
\t\t\tbuttonImage = this._get( inst, \"buttonImage\" );
\t\t\tinst.trigger = \$( this._get( inst, \"buttonImageOnly\" ) ?
\t\t\t\t\$( \"<img/>\" ).addClass( this._triggerClass ).
\t\t\t\t\tattr( { src: buttonImage, alt: buttonText, title: buttonText } ) :
\t\t\t\t\$( \"<button type='button'></button>\" ).addClass( this._triggerClass ).
\t\t\t\t\thtml( !buttonImage ? buttonText : \$( \"<img/>\" ).attr(
\t\t\t\t\t{ src:buttonImage, alt:buttonText, title:buttonText } ) ) );
\t\t\tinput[ isRTL ? \"before\" : \"after\" ]( inst.trigger );
\t\t\tinst.trigger.on( \"click\", function() {
\t\t\t\tif ( \$.datepicker._datepickerShowing && \$.datepicker._lastInput === input[ 0 ] ) {
\t\t\t\t\t\$.datepicker._hideDatepicker();
\t\t\t\t} else if ( \$.datepicker._datepickerShowing && \$.datepicker._lastInput !== input[ 0 ] ) {
\t\t\t\t\t\$.datepicker._hideDatepicker();
\t\t\t\t\t\$.datepicker._showDatepicker( input[ 0 ] );
\t\t\t\t} else {
\t\t\t\t\t\$.datepicker._showDatepicker( input[ 0 ] );
\t\t\t\t}
\t\t\t\treturn false;
\t\t\t} );
\t\t}
\t},

\t/* Apply the maximum length for the date format. */
\t_autoSize: function( inst ) {
\t\tif ( this._get( inst, \"autoSize\" ) && !inst.inline ) {
\t\t\tvar findMax, max, maxI, i,
\t\t\t\tdate = new Date( 2009, 12 - 1, 20 ), // Ensure double digits
\t\t\t\tdateFormat = this._get( inst, \"dateFormat\" );

\t\t\tif ( dateFormat.match( /[DM]/ ) ) {
\t\t\t\tfindMax = function( names ) {
\t\t\t\t\tmax = 0;
\t\t\t\t\tmaxI = 0;
\t\t\t\t\tfor ( i = 0; i < names.length; i++ ) {
\t\t\t\t\t\tif ( names[ i ].length > max ) {
\t\t\t\t\t\t\tmax = names[ i ].length;
\t\t\t\t\t\t\tmaxI = i;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\treturn maxI;
\t\t\t\t};
\t\t\t\tdate.setMonth( findMax( this._get( inst, ( dateFormat.match( /MM/ ) ?
\t\t\t\t\t\"monthNames\" : \"monthNamesShort\" ) ) ) );
\t\t\t\tdate.setDate( findMax( this._get( inst, ( dateFormat.match( /DD/ ) ?
\t\t\t\t\t\"dayNames\" : \"dayNamesShort\" ) ) ) + 20 - date.getDay() );
\t\t\t}
\t\t\tinst.input.attr( \"size\", this._formatDate( inst, date ).length );
\t\t}
\t},

\t/* Attach an inline date picker to a div. */
\t_inlineDatepicker: function( target, inst ) {
\t\tvar divSpan = \$( target );
\t\tif ( divSpan.hasClass( this.markerClassName ) ) {
\t\t\treturn;
\t\t}
\t\tdivSpan.addClass( this.markerClassName ).append( inst.dpDiv );
\t\t\$.data( target, \"datepicker\", inst );
\t\tthis._setDate( inst, this._getDefaultDate( inst ), true );
\t\tthis._updateDatepicker( inst );
\t\tthis._updateAlternate( inst );

\t\t//If disabled option is true, disable the datepicker before showing it (see ticket #5665)
\t\tif ( inst.settings.disabled ) {
\t\t\tthis._disableDatepicker( target );
\t\t}

\t\t// Set display:block in place of inst.dpDiv.show() which won't work on disconnected elements
\t\t// http://bugs.jqueryui.com/ticket/7552 - A Datepicker created on a detached div has zero height
\t\tinst.dpDiv.css( \"display\", \"block\" );
\t},

\t/* Pop-up the date picker in a \"dialog\" box.
\t * @param  input element - ignored
\t * @param  date\tstring or Date - the initial date to display
\t * @param  onSelect  function - the function to call when a date is selected
\t * @param  settings  object - update the dialog date picker instance's settings (anonymous object)
\t * @param  pos int[2] - coordinates for the dialog's position within the screen or
\t *\t\t\t\t\tevent - with x/y coordinates or
\t *\t\t\t\t\tleave empty for default (screen centre)
\t * @return the manager object
\t */
\t_dialogDatepicker: function( input, date, onSelect, settings, pos ) {
\t\tvar id, browserWidth, browserHeight, scrollX, scrollY,
\t\t\tinst = this._dialogInst; // internal instance

\t\tif ( !inst ) {
\t\t\tthis.uuid += 1;
\t\t\tid = \"dp\" + this.uuid;
\t\t\tthis._dialogInput = \$( \"<input type='text' id='\" + id +
\t\t\t\t\"' style='position: absolute; top: -100px; width: 0px;'/>\" );
\t\t\tthis._dialogInput.on( \"keydown\", this._doKeyDown );
\t\t\t\$( \"body\" ).append( this._dialogInput );
\t\t\tinst = this._dialogInst = this._newInst( this._dialogInput, false );
\t\t\tinst.settings = {};
\t\t\t\$.data( this._dialogInput[ 0 ], \"datepicker\", inst );
\t\t}
\t\tdatepicker_extendRemove( inst.settings, settings || {} );
\t\tdate = ( date && date.constructor === Date ? this._formatDate( inst, date ) : date );
\t\tthis._dialogInput.val( date );

\t\tthis._pos = ( pos ? ( pos.length ? pos : [ pos.pageX, pos.pageY ] ) : null );
\t\tif ( !this._pos ) {
\t\t\tbrowserWidth = document.documentElement.clientWidth;
\t\t\tbrowserHeight = document.documentElement.clientHeight;
\t\t\tscrollX = document.documentElement.scrollLeft || document.body.scrollLeft;
\t\t\tscrollY = document.documentElement.scrollTop || document.body.scrollTop;
\t\t\tthis._pos = // should use actual width/height below
\t\t\t\t[ ( browserWidth / 2 ) - 100 + scrollX, ( browserHeight / 2 ) - 150 + scrollY ];
\t\t}

\t\t// Move input on screen for focus, but hidden behind dialog
\t\tthis._dialogInput.css( \"left\", ( this._pos[ 0 ] + 20 ) + \"px\" ).css( \"top\", this._pos[ 1 ] + \"px\" );
\t\tinst.settings.onSelect = onSelect;
\t\tthis._inDialog = true;
\t\tthis.dpDiv.addClass( this._dialogClass );
\t\tthis._showDatepicker( this._dialogInput[ 0 ] );
\t\tif ( \$.blockUI ) {
\t\t\t\$.blockUI( this.dpDiv );
\t\t}
\t\t\$.data( this._dialogInput[ 0 ], \"datepicker\", inst );
\t\treturn this;
\t},

\t/* Detach a datepicker from its control.
\t * @param  target\telement - the target input field or division or span
\t */
\t_destroyDatepicker: function( target ) {
\t\tvar nodeName,
\t\t\t\$target = \$( target ),
\t\t\tinst = \$.data( target, \"datepicker\" );

\t\tif ( !\$target.hasClass( this.markerClassName ) ) {
\t\t\treturn;
\t\t}

\t\tnodeName = target.nodeName.toLowerCase();
\t\t\$.removeData( target, \"datepicker\" );
\t\tif ( nodeName === \"input\" ) {
\t\t\tinst.append.remove();
\t\t\tinst.trigger.remove();
\t\t\t\$target.removeClass( this.markerClassName ).
\t\t\t\toff( \"focus\", this._showDatepicker ).
\t\t\t\toff( \"keydown\", this._doKeyDown ).
\t\t\t\toff( \"keypress\", this._doKeyPress ).
\t\t\t\toff( \"keyup\", this._doKeyUp );
\t\t} else if ( nodeName === \"div\" || nodeName === \"span\" ) {
\t\t\t\$target.removeClass( this.markerClassName ).empty();
\t\t}

\t\tif ( datepicker_instActive === inst ) {
\t\t\tdatepicker_instActive = null;
\t\t}
\t},

\t/* Enable the date picker to a jQuery selection.
\t * @param  target\telement - the target input field or division or span
\t */
\t_enableDatepicker: function( target ) {
\t\tvar nodeName, inline,
\t\t\t\$target = \$( target ),
\t\t\tinst = \$.data( target, \"datepicker\" );

\t\tif ( !\$target.hasClass( this.markerClassName ) ) {
\t\t\treturn;
\t\t}

\t\tnodeName = target.nodeName.toLowerCase();
\t\tif ( nodeName === \"input\" ) {
\t\t\ttarget.disabled = false;
\t\t\tinst.trigger.filter( \"button\" ).
\t\t\t\teach( function() { this.disabled = false; } ).end().
\t\t\t\tfilter( \"img\" ).css( { opacity: \"1.0\", cursor: \"\" } );
\t\t} else if ( nodeName === \"div\" || nodeName === \"span\" ) {
\t\t\tinline = \$target.children( \".\" + this._inlineClass );
\t\t\tinline.children().removeClass( \"ui-state-disabled\" );
\t\t\tinline.find( \"select.ui-datepicker-month, select.ui-datepicker-year\" ).
\t\t\t\tprop( \"disabled\", false );
\t\t}
\t\tthis._disabledInputs = \$.map( this._disabledInputs,
\t\t\tfunction( value ) { return ( value === target ? null : value ); } ); // delete entry
\t},

\t/* Disable the date picker to a jQuery selection.
\t * @param  target\telement - the target input field or division or span
\t */
\t_disableDatepicker: function( target ) {
\t\tvar nodeName, inline,
\t\t\t\$target = \$( target ),
\t\t\tinst = \$.data( target, \"datepicker\" );

\t\tif ( !\$target.hasClass( this.markerClassName ) ) {
\t\t\treturn;
\t\t}

\t\tnodeName = target.nodeName.toLowerCase();
\t\tif ( nodeName === \"input\" ) {
\t\t\ttarget.disabled = true;
\t\t\tinst.trigger.filter( \"button\" ).
\t\t\t\teach( function() { this.disabled = true; } ).end().
\t\t\t\tfilter( \"img\" ).css( { opacity: \"0.5\", cursor: \"default\" } );
\t\t} else if ( nodeName === \"div\" || nodeName === \"span\" ) {
\t\t\tinline = \$target.children( \".\" + this._inlineClass );
\t\t\tinline.children().addClass( \"ui-state-disabled\" );
\t\t\tinline.find( \"select.ui-datepicker-month, select.ui-datepicker-year\" ).
\t\t\t\tprop( \"disabled\", true );
\t\t}
\t\tthis._disabledInputs = \$.map( this._disabledInputs,
\t\t\tfunction( value ) { return ( value === target ? null : value ); } ); // delete entry
\t\tthis._disabledInputs[ this._disabledInputs.length ] = target;
\t},

\t/* Is the first field in a jQuery collection disabled as a datepicker?
\t * @param  target\telement - the target input field or division or span
\t * @return boolean - true if disabled, false if enabled
\t */
\t_isDisabledDatepicker: function( target ) {
\t\tif ( !target ) {
\t\t\treturn false;
\t\t}
\t\tfor ( var i = 0; i < this._disabledInputs.length; i++ ) {
\t\t\tif ( this._disabledInputs[ i ] === target ) {
\t\t\t\treturn true;
\t\t\t}
\t\t}
\t\treturn false;
\t},

\t/* Retrieve the instance data for the target control.
\t * @param  target  element - the target input field or division or span
\t * @return  object - the associated instance data
\t * @throws  error if a jQuery problem getting data
\t */
\t_getInst: function( target ) {
\t\ttry {
\t\t\treturn \$.data( target, \"datepicker\" );
\t\t}
\t\tcatch ( err ) {
\t\t\tthrow \"Missing instance data for this datepicker\";
\t\t}
\t},

\t/* Update or retrieve the settings for a date picker attached to an input field or division.
\t * @param  target  element - the target input field or division or span
\t * @param  name\tobject - the new settings to update or
\t *\t\t\t\tstring - the name of the setting to change or retrieve,
\t *\t\t\t\twhen retrieving also \"all\" for all instance settings or
\t *\t\t\t\t\"defaults\" for all global defaults
\t * @param  value   any - the new value for the setting
\t *\t\t\t\t(omit if above is an object or to retrieve a value)
\t */
\t_optionDatepicker: function( target, name, value ) {
\t\tvar settings, date, minDate, maxDate,
\t\t\tinst = this._getInst( target );

\t\tif ( arguments.length === 2 && typeof name === \"string\" ) {
\t\t\treturn ( name === \"defaults\" ? \$.extend( {}, \$.datepicker._defaults ) :
\t\t\t\t( inst ? ( name === \"all\" ? \$.extend( {}, inst.settings ) :
\t\t\t\tthis._get( inst, name ) ) : null ) );
\t\t}

\t\tsettings = name || {};
\t\tif ( typeof name === \"string\" ) {
\t\t\tsettings = {};
\t\t\tsettings[ name ] = value;
\t\t}

\t\tif ( inst ) {
\t\t\tif ( this._curInst === inst ) {
\t\t\t\tthis._hideDatepicker();
\t\t\t}

\t\t\tdate = this._getDateDatepicker( target, true );
\t\t\tminDate = this._getMinMaxDate( inst, \"min\" );
\t\t\tmaxDate = this._getMinMaxDate( inst, \"max\" );
\t\t\tdatepicker_extendRemove( inst.settings, settings );

\t\t\t// reformat the old minDate/maxDate values if dateFormat changes and a new minDate/maxDate isn't provided
\t\t\tif ( minDate !== null && settings.dateFormat !== undefined && settings.minDate === undefined ) {
\t\t\t\tinst.settings.minDate = this._formatDate( inst, minDate );
\t\t\t}
\t\t\tif ( maxDate !== null && settings.dateFormat !== undefined && settings.maxDate === undefined ) {
\t\t\t\tinst.settings.maxDate = this._formatDate( inst, maxDate );
\t\t\t}
\t\t\tif ( \"disabled\" in settings ) {
\t\t\t\tif ( settings.disabled ) {
\t\t\t\t\tthis._disableDatepicker( target );
\t\t\t\t} else {
\t\t\t\t\tthis._enableDatepicker( target );
\t\t\t\t}
\t\t\t}
\t\t\tthis._attachments( \$( target ), inst );
\t\t\tthis._autoSize( inst );
\t\t\tthis._setDate( inst, date );
\t\t\tthis._updateAlternate( inst );
\t\t\tthis._updateDatepicker( inst );
\t\t}
\t},

\t// Change method deprecated
\t_changeDatepicker: function( target, name, value ) {
\t\tthis._optionDatepicker( target, name, value );
\t},

\t/* Redraw the date picker attached to an input field or division.
\t * @param  target  element - the target input field or division or span
\t */
\t_refreshDatepicker: function( target ) {
\t\tvar inst = this._getInst( target );
\t\tif ( inst ) {
\t\t\tthis._updateDatepicker( inst );
\t\t}
\t},

\t/* Set the dates for a jQuery selection.
\t * @param  target element - the target input field or division or span
\t * @param  date\tDate - the new date
\t */
\t_setDateDatepicker: function( target, date ) {
\t\tvar inst = this._getInst( target );
\t\tif ( inst ) {
\t\t\tthis._setDate( inst, date );
\t\t\tthis._updateDatepicker( inst );
\t\t\tthis._updateAlternate( inst );
\t\t}
\t},

\t/* Get the date(s) for the first entry in a jQuery selection.
\t * @param  target element - the target input field or division or span
\t * @param  noDefault boolean - true if no default date is to be used
\t * @return Date - the current date
\t */
\t_getDateDatepicker: function( target, noDefault ) {
\t\tvar inst = this._getInst( target );
\t\tif ( inst && !inst.inline ) {
\t\t\tthis._setDateFromField( inst, noDefault );
\t\t}
\t\treturn ( inst ? this._getDate( inst ) : null );
\t},

\t/* Handle keystrokes. */
\t_doKeyDown: function( event ) {
\t\tvar onSelect, dateStr, sel,
\t\t\tinst = \$.datepicker._getInst( event.target ),
\t\t\thandled = true,
\t\t\tisRTL = inst.dpDiv.is( \".ui-datepicker-rtl\" );

\t\tinst._keyEvent = true;
\t\tif ( \$.datepicker._datepickerShowing ) {
\t\t\tswitch ( event.keyCode ) {
\t\t\t\tcase 9: \$.datepicker._hideDatepicker();
\t\t\t\t\t\thandled = false;
\t\t\t\t\t\tbreak; // hide on tab out
\t\t\t\tcase 13: sel = \$( \"td.\" + \$.datepicker._dayOverClass + \":not(.\" +
\t\t\t\t\t\t\t\t\t\$.datepicker._currentClass + \")\", inst.dpDiv );
\t\t\t\t\t\tif ( sel[ 0 ] ) {
\t\t\t\t\t\t\t\$.datepicker._selectDay( event.target, inst.selectedMonth, inst.selectedYear, sel[ 0 ] );
\t\t\t\t\t\t}

\t\t\t\t\t\tonSelect = \$.datepicker._get( inst, \"onSelect\" );
\t\t\t\t\t\tif ( onSelect ) {
\t\t\t\t\t\t\tdateStr = \$.datepicker._formatDate( inst );

\t\t\t\t\t\t\t// Trigger custom callback
\t\t\t\t\t\t\tonSelect.apply( ( inst.input ? inst.input[ 0 ] : null ), [ dateStr, inst ] );
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$.datepicker._hideDatepicker();
\t\t\t\t\t\t}

\t\t\t\t\t\treturn false; // don't submit the form
\t\t\t\tcase 27: \$.datepicker._hideDatepicker();
\t\t\t\t\t\tbreak; // hide on escape
\t\t\t\tcase 33: \$.datepicker._adjustDate( event.target, ( event.ctrlKey ?
\t\t\t\t\t\t\t-\$.datepicker._get( inst, \"stepBigMonths\" ) :
\t\t\t\t\t\t\t-\$.datepicker._get( inst, \"stepMonths\" ) ), \"M\" );
\t\t\t\t\t\tbreak; // previous month/year on page up/+ ctrl
\t\t\t\tcase 34: \$.datepicker._adjustDate( event.target, ( event.ctrlKey ?
\t\t\t\t\t\t\t+\$.datepicker._get( inst, \"stepBigMonths\" ) :
\t\t\t\t\t\t\t+\$.datepicker._get( inst, \"stepMonths\" ) ), \"M\" );
\t\t\t\t\t\tbreak; // next month/year on page down/+ ctrl
\t\t\t\tcase 35: if ( event.ctrlKey || event.metaKey ) {
\t\t\t\t\t\t\t\$.datepicker._clearDate( event.target );
\t\t\t\t\t\t}
\t\t\t\t\t\thandled = event.ctrlKey || event.metaKey;
\t\t\t\t\t\tbreak; // clear on ctrl or command +end
\t\t\t\tcase 36: if ( event.ctrlKey || event.metaKey ) {
\t\t\t\t\t\t\t\$.datepicker._gotoToday( event.target );
\t\t\t\t\t\t}
\t\t\t\t\t\thandled = event.ctrlKey || event.metaKey;
\t\t\t\t\t\tbreak; // current on ctrl or command +home
\t\t\t\tcase 37: if ( event.ctrlKey || event.metaKey ) {
\t\t\t\t\t\t\t\$.datepicker._adjustDate( event.target, ( isRTL ? +1 : -1 ), \"D\" );
\t\t\t\t\t\t}
\t\t\t\t\t\thandled = event.ctrlKey || event.metaKey;

\t\t\t\t\t\t// -1 day on ctrl or command +left
\t\t\t\t\t\tif ( event.originalEvent.altKey ) {
\t\t\t\t\t\t\t\$.datepicker._adjustDate( event.target, ( event.ctrlKey ?
\t\t\t\t\t\t\t\t-\$.datepicker._get( inst, \"stepBigMonths\" ) :
\t\t\t\t\t\t\t\t-\$.datepicker._get( inst, \"stepMonths\" ) ), \"M\" );
\t\t\t\t\t\t}

\t\t\t\t\t\t// next month/year on alt +left on Mac
\t\t\t\t\t\tbreak;
\t\t\t\tcase 38: if ( event.ctrlKey || event.metaKey ) {
\t\t\t\t\t\t\t\$.datepicker._adjustDate( event.target, -7, \"D\" );
\t\t\t\t\t\t}
\t\t\t\t\t\thandled = event.ctrlKey || event.metaKey;
\t\t\t\t\t\tbreak; // -1 week on ctrl or command +up
\t\t\t\tcase 39: if ( event.ctrlKey || event.metaKey ) {
\t\t\t\t\t\t\t\$.datepicker._adjustDate( event.target, ( isRTL ? -1 : +1 ), \"D\" );
\t\t\t\t\t\t}
\t\t\t\t\t\thandled = event.ctrlKey || event.metaKey;

\t\t\t\t\t\t// +1 day on ctrl or command +right
\t\t\t\t\t\tif ( event.originalEvent.altKey ) {
\t\t\t\t\t\t\t\$.datepicker._adjustDate( event.target, ( event.ctrlKey ?
\t\t\t\t\t\t\t\t+\$.datepicker._get( inst, \"stepBigMonths\" ) :
\t\t\t\t\t\t\t\t+\$.datepicker._get( inst, \"stepMonths\" ) ), \"M\" );
\t\t\t\t\t\t}

\t\t\t\t\t\t// next month/year on alt +right
\t\t\t\t\t\tbreak;
\t\t\t\tcase 40: if ( event.ctrlKey || event.metaKey ) {
\t\t\t\t\t\t\t\$.datepicker._adjustDate( event.target, +7, \"D\" );
\t\t\t\t\t\t}
\t\t\t\t\t\thandled = event.ctrlKey || event.metaKey;
\t\t\t\t\t\tbreak; // +1 week on ctrl or command +down
\t\t\t\tdefault: handled = false;
\t\t\t}
\t\t} else if ( event.keyCode === 36 && event.ctrlKey ) { // display the date picker on ctrl+home
\t\t\t\$.datepicker._showDatepicker( this );
\t\t} else {
\t\t\thandled = false;
\t\t}

\t\tif ( handled ) {
\t\t\tevent.preventDefault();
\t\t\tevent.stopPropagation();
\t\t}
\t},

\t/* Filter entered characters - based on date format. */
\t_doKeyPress: function( event ) {
\t\tvar chars, chr,
\t\t\tinst = \$.datepicker._getInst( event.target );

\t\tif ( \$.datepicker._get( inst, \"constrainInput\" ) ) {
\t\t\tchars = \$.datepicker._possibleChars( \$.datepicker._get( inst, \"dateFormat\" ) );
\t\t\tchr = String.fromCharCode( event.charCode == null ? event.keyCode : event.charCode );
\t\t\treturn event.ctrlKey || event.metaKey || ( chr < \" \" || !chars || chars.indexOf( chr ) > -1 );
\t\t}
\t},

\t/* Synchronise manual entry and field/alternate field. */
\t_doKeyUp: function( event ) {
\t\tvar date,
\t\t\tinst = \$.datepicker._getInst( event.target );

\t\tif ( inst.input.val() !== inst.lastVal ) {
\t\t\ttry {
\t\t\t\tdate = \$.datepicker.parseDate( \$.datepicker._get( inst, \"dateFormat\" ),
\t\t\t\t\t( inst.input ? inst.input.val() : null ),
\t\t\t\t\t\$.datepicker._getFormatConfig( inst ) );

\t\t\t\tif ( date ) { // only if valid
\t\t\t\t\t\$.datepicker._setDateFromField( inst );
\t\t\t\t\t\$.datepicker._updateAlternate( inst );
\t\t\t\t\t\$.datepicker._updateDatepicker( inst );
\t\t\t\t}
\t\t\t}
\t\t\tcatch ( err ) {
\t\t\t}
\t\t}
\t\treturn true;
\t},

\t/* Pop-up the date picker for a given input field.
\t * If false returned from beforeShow event handler do not show.
\t * @param  input  element - the input field attached to the date picker or
\t *\t\t\t\t\tevent - if triggered by focus
\t */
\t_showDatepicker: function( input ) {
\t\tinput = input.target || input;
\t\tif ( input.nodeName.toLowerCase() !== \"input\" ) { // find from button/image trigger
\t\t\tinput = \$( \"input\", input.parentNode )[ 0 ];
\t\t}

\t\tif ( \$.datepicker._isDisabledDatepicker( input ) || \$.datepicker._lastInput === input ) { // already here
\t\t\treturn;
\t\t}

\t\tvar inst, beforeShow, beforeShowSettings, isFixed,
\t\t\toffset, showAnim, duration;

\t\tinst = \$.datepicker._getInst( input );
\t\tif ( \$.datepicker._curInst && \$.datepicker._curInst !== inst ) {
\t\t\t\$.datepicker._curInst.dpDiv.stop( true, true );
\t\t\tif ( inst && \$.datepicker._datepickerShowing ) {
\t\t\t\t\$.datepicker._hideDatepicker( \$.datepicker._curInst.input[ 0 ] );
\t\t\t}
\t\t}

\t\tbeforeShow = \$.datepicker._get( inst, \"beforeShow\" );
\t\tbeforeShowSettings = beforeShow ? beforeShow.apply( input, [ input, inst ] ) : {};
\t\tif ( beforeShowSettings === false ) {
\t\t\treturn;
\t\t}
\t\tdatepicker_extendRemove( inst.settings, beforeShowSettings );

\t\tinst.lastVal = null;
\t\t\$.datepicker._lastInput = input;
\t\t\$.datepicker._setDateFromField( inst );

\t\tif ( \$.datepicker._inDialog ) { // hide cursor
\t\t\tinput.value = \"\";
\t\t}
\t\tif ( !\$.datepicker._pos ) { // position below input
\t\t\t\$.datepicker._pos = \$.datepicker._findPos( input );
\t\t\t\$.datepicker._pos[ 1 ] += input.offsetHeight; // add the height
\t\t}

\t\tisFixed = false;
\t\t\$( input ).parents().each( function() {
\t\t\tisFixed |= \$( this ).css( \"position\" ) === \"fixed\";
\t\t\treturn !isFixed;
\t\t} );

\t\toffset = { left: \$.datepicker._pos[ 0 ], top: \$.datepicker._pos[ 1 ] };
\t\t\$.datepicker._pos = null;

\t\t//to avoid flashes on Firefox
\t\tinst.dpDiv.empty();

\t\t// determine sizing offscreen
\t\tinst.dpDiv.css( { position: \"absolute\", display: \"block\", top: \"-1000px\" } );
\t\t\$.datepicker._updateDatepicker( inst );

\t\t// fix width for dynamic number of date pickers
\t\t// and adjust position before showing
\t\toffset = \$.datepicker._checkOffset( inst, offset, isFixed );
\t\tinst.dpDiv.css( { position: ( \$.datepicker._inDialog && \$.blockUI ?
\t\t\t\"static\" : ( isFixed ? \"fixed\" : \"absolute\" ) ), display: \"none\",
\t\t\tleft: offset.left + \"px\", top: offset.top + \"px\" } );

\t\tif ( !inst.inline ) {
\t\t\tshowAnim = \$.datepicker._get( inst, \"showAnim\" );
\t\t\tduration = \$.datepicker._get( inst, \"duration\" );
\t\t\tinst.dpDiv.css( \"z-index\", datepicker_getZindex( \$( input ) ) + 1 );
\t\t\t\$.datepicker._datepickerShowing = true;

\t\t\tif ( \$.effects && \$.effects.effect[ showAnim ] ) {
\t\t\t\tinst.dpDiv.show( showAnim, \$.datepicker._get( inst, \"showOptions\" ), duration );
\t\t\t} else {
\t\t\t\tinst.dpDiv[ showAnim || \"show\" ]( showAnim ? duration : null );
\t\t\t}

\t\t\tif ( \$.datepicker._shouldFocusInput( inst ) ) {
\t\t\t\tinst.input.trigger( \"focus\" );
\t\t\t}

\t\t\t\$.datepicker._curInst = inst;
\t\t}
\t},

\t/* Generate the date picker content. */
\t_updateDatepicker: function( inst ) {
\t\tthis.maxRows = 4; //Reset the max number of rows being displayed (see #7043)
\t\tdatepicker_instActive = inst; // for delegate hover events
\t\tinst.dpDiv.empty().append( this._generateHTML( inst ) );
\t\tthis._attachHandlers( inst );

\t\tvar origyearshtml,
\t\t\tnumMonths = this._getNumberOfMonths( inst ),
\t\t\tcols = numMonths[ 1 ],
\t\t\twidth = 17,
\t\t\tactiveCell = inst.dpDiv.find( \".\" + this._dayOverClass + \" a\" );

\t\tif ( activeCell.length > 0 ) {
\t\t\tdatepicker_handleMouseover.apply( activeCell.get( 0 ) );
\t\t}

\t\tinst.dpDiv.removeClass( \"ui-datepicker-multi-2 ui-datepicker-multi-3 ui-datepicker-multi-4\" ).width( \"\" );
\t\tif ( cols > 1 ) {
\t\t\tinst.dpDiv.addClass( \"ui-datepicker-multi-\" + cols ).css( \"width\", ( width * cols ) + \"em\" );
\t\t}
\t\tinst.dpDiv[ ( numMonths[ 0 ] !== 1 || numMonths[ 1 ] !== 1 ? \"add\" : \"remove\" ) +
\t\t\t\"Class\" ]( \"ui-datepicker-multi\" );
\t\tinst.dpDiv[ ( this._get( inst, \"isRTL\" ) ? \"add\" : \"remove\" ) +
\t\t\t\"Class\" ]( \"ui-datepicker-rtl\" );

\t\tif ( inst === \$.datepicker._curInst && \$.datepicker._datepickerShowing && \$.datepicker._shouldFocusInput( inst ) ) {
\t\t\tinst.input.trigger( \"focus\" );
\t\t}

\t\t// Deffered render of the years select (to avoid flashes on Firefox)
\t\tif ( inst.yearshtml ) {
\t\t\torigyearshtml = inst.yearshtml;
\t\t\tsetTimeout( function() {

\t\t\t\t//assure that inst.yearshtml didn't change.
\t\t\t\tif ( origyearshtml === inst.yearshtml && inst.yearshtml ) {
\t\t\t\t\tinst.dpDiv.find( \"select.ui-datepicker-year:first\" ).replaceWith( inst.yearshtml );
\t\t\t\t}
\t\t\t\torigyearshtml = inst.yearshtml = null;
\t\t\t}, 0 );
\t\t}
\t},

\t// #6694 - don't focus the input if it's already focused
\t// this breaks the change event in IE
\t// Support: IE and jQuery <1.9
\t_shouldFocusInput: function( inst ) {
\t\treturn inst.input && inst.input.is( \":visible\" ) && !inst.input.is( \":disabled\" ) && !inst.input.is( \":focus\" );
\t},

\t/* Check positioning to remain on screen. */
\t_checkOffset: function( inst, offset, isFixed ) {
\t\tvar dpWidth = inst.dpDiv.outerWidth(),
\t\t\tdpHeight = inst.dpDiv.outerHeight(),
\t\t\tinputWidth = inst.input ? inst.input.outerWidth() : 0,
\t\t\tinputHeight = inst.input ? inst.input.outerHeight() : 0,
\t\t\tviewWidth = document.documentElement.clientWidth + ( isFixed ? 0 : \$( document ).scrollLeft() ),
\t\t\tviewHeight = document.documentElement.clientHeight + ( isFixed ? 0 : \$( document ).scrollTop() );

\t\toffset.left -= ( this._get( inst, \"isRTL\" ) ? ( dpWidth - inputWidth ) : 0 );
\t\toffset.left -= ( isFixed && offset.left === inst.input.offset().left ) ? \$( document ).scrollLeft() : 0;
\t\toffset.top -= ( isFixed && offset.top === ( inst.input.offset().top + inputHeight ) ) ? \$( document ).scrollTop() : 0;

\t\t// Now check if datepicker is showing outside window viewport - move to a better place if so.
\t\toffset.left -= Math.min( offset.left, ( offset.left + dpWidth > viewWidth && viewWidth > dpWidth ) ?
\t\t\tMath.abs( offset.left + dpWidth - viewWidth ) : 0 );
\t\toffset.top -= Math.min( offset.top, ( offset.top + dpHeight > viewHeight && viewHeight > dpHeight ) ?
\t\t\tMath.abs( dpHeight + inputHeight ) : 0 );

\t\treturn offset;
\t},

\t/* Find an object's position on the screen. */
\t_findPos: function( obj ) {
\t\tvar position,
\t\t\tinst = this._getInst( obj ),
\t\t\tisRTL = this._get( inst, \"isRTL\" );

\t\twhile ( obj && ( obj.type === \"hidden\" || obj.nodeType !== 1 || \$.expr.filters.hidden( obj ) ) ) {
\t\t\tobj = obj[ isRTL ? \"previousSibling\" : \"nextSibling\" ];
\t\t}

\t\tposition = \$( obj ).offset();
\t\treturn [ position.left, position.top ];
\t},

\t/* Hide the date picker from view.
\t * @param  input  element - the input field attached to the date picker
\t */
\t_hideDatepicker: function( input ) {
\t\tvar showAnim, duration, postProcess, onClose,
\t\t\tinst = this._curInst;

\t\tif ( !inst || ( input && inst !== \$.data( input, \"datepicker\" ) ) ) {
\t\t\treturn;
\t\t}

\t\tif ( this._datepickerShowing ) {
\t\t\tshowAnim = this._get( inst, \"showAnim\" );
\t\t\tduration = this._get( inst, \"duration\" );
\t\t\tpostProcess = function() {
\t\t\t\t\$.datepicker._tidyDialog( inst );
\t\t\t};

\t\t\t// DEPRECATED: after BC for 1.8.x \$.effects[ showAnim ] is not needed
\t\t\tif ( \$.effects && ( \$.effects.effect[ showAnim ] || \$.effects[ showAnim ] ) ) {
\t\t\t\tinst.dpDiv.hide( showAnim, \$.datepicker._get( inst, \"showOptions\" ), duration, postProcess );
\t\t\t} else {
\t\t\t\tinst.dpDiv[ ( showAnim === \"slideDown\" ? \"slideUp\" :
\t\t\t\t\t( showAnim === \"fadeIn\" ? \"fadeOut\" : \"hide\" ) ) ]( ( showAnim ? duration : null ), postProcess );
\t\t\t}

\t\t\tif ( !showAnim ) {
\t\t\t\tpostProcess();
\t\t\t}
\t\t\tthis._datepickerShowing = false;

\t\t\tonClose = this._get( inst, \"onClose\" );
\t\t\tif ( onClose ) {
\t\t\t\tonClose.apply( ( inst.input ? inst.input[ 0 ] : null ), [ ( inst.input ? inst.input.val() : \"\" ), inst ] );
\t\t\t}

\t\t\tthis._lastInput = null;
\t\t\tif ( this._inDialog ) {
\t\t\t\tthis._dialogInput.css( { position: \"absolute\", left: \"0\", top: \"-100px\" } );
\t\t\t\tif ( \$.blockUI ) {
\t\t\t\t\t\$.unblockUI();
\t\t\t\t\t\$( \"body\" ).append( this.dpDiv );
\t\t\t\t}
\t\t\t}
\t\t\tthis._inDialog = false;
\t\t}
\t},

\t/* Tidy up after a dialog display. */
\t_tidyDialog: function( inst ) {
\t\tinst.dpDiv.removeClass( this._dialogClass ).off( \".ui-datepicker-calendar\" );
\t},

\t/* Close date picker if clicked elsewhere. */
\t_checkExternalClick: function( event ) {
\t\tif ( !\$.datepicker._curInst ) {
\t\t\treturn;
\t\t}

\t\tvar \$target = \$( event.target ),
\t\t\tinst = \$.datepicker._getInst( \$target[ 0 ] );

\t\tif ( ( ( \$target[ 0 ].id !== \$.datepicker._mainDivId &&
\t\t\t\t\$target.parents( \"#\" + \$.datepicker._mainDivId ).length === 0 &&
\t\t\t\t!\$target.hasClass( \$.datepicker.markerClassName ) &&
\t\t\t\t!\$target.closest( \".\" + \$.datepicker._triggerClass ).length &&
\t\t\t\t\$.datepicker._datepickerShowing && !( \$.datepicker._inDialog && \$.blockUI ) ) ) ||
\t\t\t( \$target.hasClass( \$.datepicker.markerClassName ) && \$.datepicker._curInst !== inst ) ) {
\t\t\t\t\$.datepicker._hideDatepicker();
\t\t}
\t},

\t/* Adjust one of the date sub-fields. */
\t_adjustDate: function( id, offset, period ) {
\t\tvar target = \$( id ),
\t\t\tinst = this._getInst( target[ 0 ] );

\t\tif ( this._isDisabledDatepicker( target[ 0 ] ) ) {
\t\t\treturn;
\t\t}
\t\tthis._adjustInstDate( inst, offset +
\t\t\t( period === \"M\" ? this._get( inst, \"showCurrentAtPos\" ) : 0 ), // undo positioning
\t\t\tperiod );
\t\tthis._updateDatepicker( inst );
\t},

\t/* Action for current link. */
\t_gotoToday: function( id ) {
\t\tvar date,
\t\t\ttarget = \$( id ),
\t\t\tinst = this._getInst( target[ 0 ] );

\t\tif ( this._get( inst, \"gotoCurrent\" ) && inst.currentDay ) {
\t\t\tinst.selectedDay = inst.currentDay;
\t\t\tinst.drawMonth = inst.selectedMonth = inst.currentMonth;
\t\t\tinst.drawYear = inst.selectedYear = inst.currentYear;
\t\t} else {
\t\t\tdate = new Date();
\t\t\tinst.selectedDay = date.getDate();
\t\t\tinst.drawMonth = inst.selectedMonth = date.getMonth();
\t\t\tinst.drawYear = inst.selectedYear = date.getFullYear();
\t\t}
\t\tthis._notifyChange( inst );
\t\tthis._adjustDate( target );
\t},

\t/* Action for selecting a new month/year. */
\t_selectMonthYear: function( id, select, period ) {
\t\tvar target = \$( id ),
\t\t\tinst = this._getInst( target[ 0 ] );

\t\tinst[ \"selected\" + ( period === \"M\" ? \"Month\" : \"Year\" ) ] =
\t\tinst[ \"draw\" + ( period === \"M\" ? \"Month\" : \"Year\" ) ] =
\t\t\tparseInt( select.options[ select.selectedIndex ].value, 10 );

\t\tthis._notifyChange( inst );
\t\tthis._adjustDate( target );
\t},

\t/* Action for selecting a day. */
\t_selectDay: function( id, month, year, td ) {
\t\tvar inst,
\t\t\ttarget = \$( id );

\t\tif ( \$( td ).hasClass( this._unselectableClass ) || this._isDisabledDatepicker( target[ 0 ] ) ) {
\t\t\treturn;
\t\t}

\t\tinst = this._getInst( target[ 0 ] );
\t\tinst.selectedDay = inst.currentDay = \$( \"a\", td ).html();
\t\tinst.selectedMonth = inst.currentMonth = month;
\t\tinst.selectedYear = inst.currentYear = year;
\t\tthis._selectDate( id, this._formatDate( inst,
\t\t\tinst.currentDay, inst.currentMonth, inst.currentYear ) );
\t},

\t/* Erase the input field and hide the date picker. */
\t_clearDate: function( id ) {
\t\tvar target = \$( id );
\t\tthis._selectDate( target, \"\" );
\t},

\t/* Update the input field with the selected date. */
\t_selectDate: function( id, dateStr ) {
\t\tvar onSelect,
\t\t\ttarget = \$( id ),
\t\t\tinst = this._getInst( target[ 0 ] );

\t\tdateStr = ( dateStr != null ? dateStr : this._formatDate( inst ) );
\t\tif ( inst.input ) {
\t\t\tinst.input.val( dateStr );
\t\t}
\t\tthis._updateAlternate( inst );

\t\tonSelect = this._get( inst, \"onSelect\" );
\t\tif ( onSelect ) {
\t\t\tonSelect.apply( ( inst.input ? inst.input[ 0 ] : null ), [ dateStr, inst ] );  // trigger custom callback
\t\t} else if ( inst.input ) {
\t\t\tinst.input.trigger( \"change\" ); // fire the change event
\t\t}

\t\tif ( inst.inline ) {
\t\t\tthis._updateDatepicker( inst );
\t\t} else {
\t\t\tthis._hideDatepicker();
\t\t\tthis._lastInput = inst.input[ 0 ];
\t\t\tif ( typeof( inst.input[ 0 ] ) !== \"object\" ) {
\t\t\t\tinst.input.trigger( \"focus\" ); // restore focus
\t\t\t}
\t\t\tthis._lastInput = null;
\t\t}
\t},

\t/* Update any alternate field to synchronise with the main field. */
\t_updateAlternate: function( inst ) {
\t\tvar altFormat, date, dateStr,
\t\t\taltField = this._get( inst, \"altField\" );

\t\tif ( altField ) { // update alternate field too
\t\t\taltFormat = this._get( inst, \"altFormat\" ) || this._get( inst, \"dateFormat\" );
\t\t\tdate = this._getDate( inst );
\t\t\tdateStr = this.formatDate( altFormat, date, this._getFormatConfig( inst ) );
\t\t\t\$( altField ).val( dateStr );
\t\t}
\t},

\t/* Set as beforeShowDay function to prevent selection of weekends.
\t * @param  date  Date - the date to customise
\t * @return [boolean, string] - is this date selectable?, what is its CSS class?
\t */
\tnoWeekends: function( date ) {
\t\tvar day = date.getDay();
\t\treturn [ ( day > 0 && day < 6 ), \"\" ];
\t},

\t/* Set as calculateWeek to determine the week of the year based on the ISO 8601 definition.
\t * @param  date  Date - the date to get the week for
\t * @return  number - the number of the week within the year that contains this date
\t */
\tiso8601Week: function( date ) {
\t\tvar time,
\t\t\tcheckDate = new Date( date.getTime() );

\t\t// Find Thursday of this week starting on Monday
\t\tcheckDate.setDate( checkDate.getDate() + 4 - ( checkDate.getDay() || 7 ) );

\t\ttime = checkDate.getTime();
\t\tcheckDate.setMonth( 0 ); // Compare with Jan 1
\t\tcheckDate.setDate( 1 );
\t\treturn Math.floor( Math.round( ( time - checkDate ) / 86400000 ) / 7 ) + 1;
\t},

\t/* Parse a string value into a date object.
\t * See formatDate below for the possible formats.
\t *
\t * @param  format string - the expected format of the date
\t * @param  value string - the date in the above format
\t * @param  settings Object - attributes include:
\t *\t\t\t\t\tshortYearCutoff  number - the cutoff year for determining the century (optional)
\t *\t\t\t\t\tdayNamesShort\tstring[7] - abbreviated names of the days from Sunday (optional)
\t *\t\t\t\t\tdayNames\t\tstring[7] - names of the days from Sunday (optional)
\t *\t\t\t\t\tmonthNamesShort string[12] - abbreviated names of the months (optional)
\t *\t\t\t\t\tmonthNames\t\tstring[12] - names of the months (optional)
\t * @return  Date - the extracted date value or null if value is blank
\t */
\tparseDate: function( format, value, settings ) {
\t\tif ( format == null || value == null ) {
\t\t\tthrow \"Invalid arguments\";
\t\t}

\t\tvalue = ( typeof value === \"object\" ? value.toString() : value + \"\" );
\t\tif ( value === \"\" ) {
\t\t\treturn null;
\t\t}

\t\tvar iFormat, dim, extra,
\t\t\tiValue = 0,
\t\t\tshortYearCutoffTemp = ( settings ? settings.shortYearCutoff : null ) || this._defaults.shortYearCutoff,
\t\t\tshortYearCutoff = ( typeof shortYearCutoffTemp !== \"string\" ? shortYearCutoffTemp :
\t\t\t\tnew Date().getFullYear() % 100 + parseInt( shortYearCutoffTemp, 10 ) ),
\t\t\tdayNamesShort = ( settings ? settings.dayNamesShort : null ) || this._defaults.dayNamesShort,
\t\t\tdayNames = ( settings ? settings.dayNames : null ) || this._defaults.dayNames,
\t\t\tmonthNamesShort = ( settings ? settings.monthNamesShort : null ) || this._defaults.monthNamesShort,
\t\t\tmonthNames = ( settings ? settings.monthNames : null ) || this._defaults.monthNames,
\t\t\tyear = -1,
\t\t\tmonth = -1,
\t\t\tday = -1,
\t\t\tdoy = -1,
\t\t\tliteral = false,
\t\t\tdate,

\t\t\t// Check whether a format character is doubled
\t\t\tlookAhead = function( match ) {
\t\t\t\tvar matches = ( iFormat + 1 < format.length && format.charAt( iFormat + 1 ) === match );
\t\t\t\tif ( matches ) {
\t\t\t\t\tiFormat++;
\t\t\t\t}
\t\t\t\treturn matches;
\t\t\t},

\t\t\t// Extract a number from the string value
\t\t\tgetNumber = function( match ) {
\t\t\t\tvar isDoubled = lookAhead( match ),
\t\t\t\t\tsize = ( match === \"@\" ? 14 : ( match === \"!\" ? 20 :
\t\t\t\t\t( match === \"y\" && isDoubled ? 4 : ( match === \"o\" ? 3 : 2 ) ) ) ),
\t\t\t\t\tminSize = ( match === \"y\" ? size : 1 ),
\t\t\t\t\tdigits = new RegExp( \"^\\\\d{\" + minSize + \",\" + size + \"}\" ),
\t\t\t\t\tnum = value.substring( iValue ).match( digits );
\t\t\t\tif ( !num ) {
\t\t\t\t\tthrow \"Missing number at position \" + iValue;
\t\t\t\t}
\t\t\t\tiValue += num[ 0 ].length;
\t\t\t\treturn parseInt( num[ 0 ], 10 );
\t\t\t},

\t\t\t// Extract a name from the string value and convert to an index
\t\t\tgetName = function( match, shortNames, longNames ) {
\t\t\t\tvar index = -1,
\t\t\t\t\tnames = \$.map( lookAhead( match ) ? longNames : shortNames, function( v, k ) {
\t\t\t\t\t\treturn [ [ k, v ] ];
\t\t\t\t\t} ).sort( function( a, b ) {
\t\t\t\t\t\treturn -( a[ 1 ].length - b[ 1 ].length );
\t\t\t\t\t} );

\t\t\t\t\$.each( names, function( i, pair ) {
\t\t\t\t\tvar name = pair[ 1 ];
\t\t\t\t\tif ( value.substr( iValue, name.length ).toLowerCase() === name.toLowerCase() ) {
\t\t\t\t\t\tindex = pair[ 0 ];
\t\t\t\t\t\tiValue += name.length;
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t} );
\t\t\t\tif ( index !== -1 ) {
\t\t\t\t\treturn index + 1;
\t\t\t\t} else {
\t\t\t\t\tthrow \"Unknown name at position \" + iValue;
\t\t\t\t}
\t\t\t},

\t\t\t// Confirm that a literal character matches the string value
\t\t\tcheckLiteral = function() {
\t\t\t\tif ( value.charAt( iValue ) !== format.charAt( iFormat ) ) {
\t\t\t\t\tthrow \"Unexpected literal at position \" + iValue;
\t\t\t\t}
\t\t\t\tiValue++;
\t\t\t};

\t\tfor ( iFormat = 0; iFormat < format.length; iFormat++ ) {
\t\t\tif ( literal ) {
\t\t\t\tif ( format.charAt( iFormat ) === \"'\" && !lookAhead( \"'\" ) ) {
\t\t\t\t\tliteral = false;
\t\t\t\t} else {
\t\t\t\t\tcheckLiteral();
\t\t\t\t}
\t\t\t} else {
\t\t\t\tswitch ( format.charAt( iFormat ) ) {
\t\t\t\t\tcase \"d\":
\t\t\t\t\t\tday = getNumber( \"d\" );
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \"D\":
\t\t\t\t\t\tgetName( \"D\", dayNamesShort, dayNames );
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \"o\":
\t\t\t\t\t\tdoy = getNumber( \"o\" );
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \"m\":
\t\t\t\t\t\tmonth = getNumber( \"m\" );
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \"M\":
\t\t\t\t\t\tmonth = getName( \"M\", monthNamesShort, monthNames );
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \"y\":
\t\t\t\t\t\tyear = getNumber( \"y\" );
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \"@\":
\t\t\t\t\t\tdate = new Date( getNumber( \"@\" ) );
\t\t\t\t\t\tyear = date.getFullYear();
\t\t\t\t\t\tmonth = date.getMonth() + 1;
\t\t\t\t\t\tday = date.getDate();
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \"!\":
\t\t\t\t\t\tdate = new Date( ( getNumber( \"!\" ) - this._ticksTo1970 ) / 10000 );
\t\t\t\t\t\tyear = date.getFullYear();
\t\t\t\t\t\tmonth = date.getMonth() + 1;
\t\t\t\t\t\tday = date.getDate();
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \"'\":
\t\t\t\t\t\tif ( lookAhead( \"'\" ) ) {
\t\t\t\t\t\t\tcheckLiteral();
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tliteral = true;
\t\t\t\t\t\t}
\t\t\t\t\t\tbreak;
\t\t\t\t\tdefault:
\t\t\t\t\t\tcheckLiteral();
\t\t\t\t}
\t\t\t}
\t\t}

\t\tif ( iValue < value.length ) {
\t\t\textra = value.substr( iValue );
\t\t\tif ( !/^\\s+/.test( extra ) ) {
\t\t\t\tthrow \"Extra/unparsed characters found in date: \" + extra;
\t\t\t}
\t\t}

\t\tif ( year === -1 ) {
\t\t\tyear = new Date().getFullYear();
\t\t} else if ( year < 100 ) {
\t\t\tyear += new Date().getFullYear() - new Date().getFullYear() % 100 +
\t\t\t\t( year <= shortYearCutoff ? 0 : -100 );
\t\t}

\t\tif ( doy > -1 ) {
\t\t\tmonth = 1;
\t\t\tday = doy;
\t\t\tdo {
\t\t\t\tdim = this._getDaysInMonth( year, month - 1 );
\t\t\t\tif ( day <= dim ) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tmonth++;
\t\t\t\tday -= dim;
\t\t\t} while ( true );
\t\t}

\t\tdate = this._daylightSavingAdjust( new Date( year, month - 1, day ) );
\t\tif ( date.getFullYear() !== year || date.getMonth() + 1 !== month || date.getDate() !== day ) {
\t\t\tthrow \"Invalid date\"; // E.g. 31/02/00
\t\t}
\t\treturn date;
\t},

\t/* Standard date formats. */
\tATOM: \"yy-mm-dd\", // RFC 3339 (ISO 8601)
\tCOOKIE: \"D, dd M yy\",
\tISO_8601: \"yy-mm-dd\",
\tRFC_822: \"D, d M y\",
\tRFC_850: \"DD, dd-M-y\",
\tRFC_1036: \"D, d M y\",
\tRFC_1123: \"D, d M yy\",
\tRFC_2822: \"D, d M yy\",
\tRSS: \"D, d M y\", // RFC 822
\tTICKS: \"!\",
\tTIMESTAMP: \"@\",
\tW3C: \"yy-mm-dd\", // ISO 8601

\t_ticksTo1970: ( ( ( 1970 - 1 ) * 365 + Math.floor( 1970 / 4 ) - Math.floor( 1970 / 100 ) +
\t\tMath.floor( 1970 / 400 ) ) * 24 * 60 * 60 * 10000000 ),

\t/* Format a date object into a string value.
\t * The format can be combinations of the following:
\t * d  - day of month (no leading zero)
\t * dd - day of month (two digit)
\t * o  - day of year (no leading zeros)
\t * oo - day of year (three digit)
\t * D  - day name short
\t * DD - day name long
\t * m  - month of year (no leading zero)
\t * mm - month of year (two digit)
\t * M  - month name short
\t * MM - month name long
\t * y  - year (two digit)
\t * yy - year (four digit)
\t * @ - Unix timestamp (ms since 01/01/1970)
\t * ! - Windows ticks (100ns since 01/01/0001)
\t * \"...\" - literal text
\t * '' - single quote
\t *
\t * @param  format string - the desired format of the date
\t * @param  date Date - the date value to format
\t * @param  settings Object - attributes include:
\t *\t\t\t\t\tdayNamesShort\tstring[7] - abbreviated names of the days from Sunday (optional)
\t *\t\t\t\t\tdayNames\t\tstring[7] - names of the days from Sunday (optional)
\t *\t\t\t\t\tmonthNamesShort string[12] - abbreviated names of the months (optional)
\t *\t\t\t\t\tmonthNames\t\tstring[12] - names of the months (optional)
\t * @return  string - the date in the above format
\t */
\tformatDate: function( format, date, settings ) {
\t\tif ( !date ) {
\t\t\treturn \"\";
\t\t}

\t\tvar iFormat,
\t\t\tdayNamesShort = ( settings ? settings.dayNamesShort : null ) || this._defaults.dayNamesShort,
\t\t\tdayNames = ( settings ? settings.dayNames : null ) || this._defaults.dayNames,
\t\t\tmonthNamesShort = ( settings ? settings.monthNamesShort : null ) || this._defaults.monthNamesShort,
\t\t\tmonthNames = ( settings ? settings.monthNames : null ) || this._defaults.monthNames,

\t\t\t// Check whether a format character is doubled
\t\t\tlookAhead = function( match ) {
\t\t\t\tvar matches = ( iFormat + 1 < format.length && format.charAt( iFormat + 1 ) === match );
\t\t\t\tif ( matches ) {
\t\t\t\t\tiFormat++;
\t\t\t\t}
\t\t\t\treturn matches;
\t\t\t},

\t\t\t// Format a number, with leading zero if necessary
\t\t\tformatNumber = function( match, value, len ) {
\t\t\t\tvar num = \"\" + value;
\t\t\t\tif ( lookAhead( match ) ) {
\t\t\t\t\twhile ( num.length < len ) {
\t\t\t\t\t\tnum = \"0\" + num;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn num;
\t\t\t},

\t\t\t// Format a name, short or long as requested
\t\t\tformatName = function( match, value, shortNames, longNames ) {
\t\t\t\treturn ( lookAhead( match ) ? longNames[ value ] : shortNames[ value ] );
\t\t\t},
\t\t\toutput = \"\",
\t\t\tliteral = false;

\t\tif ( date ) {
\t\t\tfor ( iFormat = 0; iFormat < format.length; iFormat++ ) {
\t\t\t\tif ( literal ) {
\t\t\t\t\tif ( format.charAt( iFormat ) === \"'\" && !lookAhead( \"'\" ) ) {
\t\t\t\t\t\tliteral = false;
\t\t\t\t\t} else {
\t\t\t\t\t\toutput += format.charAt( iFormat );
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tswitch ( format.charAt( iFormat ) ) {
\t\t\t\t\t\tcase \"d\":
\t\t\t\t\t\t\toutput += formatNumber( \"d\", date.getDate(), 2 );
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tcase \"D\":
\t\t\t\t\t\t\toutput += formatName( \"D\", date.getDay(), dayNamesShort, dayNames );
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tcase \"o\":
\t\t\t\t\t\t\toutput += formatNumber( \"o\",
\t\t\t\t\t\t\t\tMath.round( ( new Date( date.getFullYear(), date.getMonth(), date.getDate() ).getTime() - new Date( date.getFullYear(), 0, 0 ).getTime() ) / 86400000 ), 3 );
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tcase \"m\":
\t\t\t\t\t\t\toutput += formatNumber( \"m\", date.getMonth() + 1, 2 );
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tcase \"M\":
\t\t\t\t\t\t\toutput += formatName( \"M\", date.getMonth(), monthNamesShort, monthNames );
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tcase \"y\":
\t\t\t\t\t\t\toutput += ( lookAhead( \"y\" ) ? date.getFullYear() :
\t\t\t\t\t\t\t\t( date.getFullYear() % 100 < 10 ? \"0\" : \"\" ) + date.getFullYear() % 100 );
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tcase \"@\":
\t\t\t\t\t\t\toutput += date.getTime();
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tcase \"!\":
\t\t\t\t\t\t\toutput += date.getTime() * 10000 + this._ticksTo1970;
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tcase \"'\":
\t\t\t\t\t\t\tif ( lookAhead( \"'\" ) ) {
\t\t\t\t\t\t\t\toutput += \"'\";
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tliteral = true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tdefault:
\t\t\t\t\t\t\toutput += format.charAt( iFormat );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t\treturn output;
\t},

\t/* Extract all possible characters from the date format. */
\t_possibleChars: function( format ) {
\t\tvar iFormat,
\t\t\tchars = \"\",
\t\t\tliteral = false,

\t\t\t// Check whether a format character is doubled
\t\t\tlookAhead = function( match ) {
\t\t\t\tvar matches = ( iFormat + 1 < format.length && format.charAt( iFormat + 1 ) === match );
\t\t\t\tif ( matches ) {
\t\t\t\t\tiFormat++;
\t\t\t\t}
\t\t\t\treturn matches;
\t\t\t};

\t\tfor ( iFormat = 0; iFormat < format.length; iFormat++ ) {
\t\t\tif ( literal ) {
\t\t\t\tif ( format.charAt( iFormat ) === \"'\" && !lookAhead( \"'\" ) ) {
\t\t\t\t\tliteral = false;
\t\t\t\t} else {
\t\t\t\t\tchars += format.charAt( iFormat );
\t\t\t\t}
\t\t\t} else {
\t\t\t\tswitch ( format.charAt( iFormat ) ) {
\t\t\t\t\tcase \"d\": case \"m\": case \"y\": case \"@\":
\t\t\t\t\t\tchars += \"0123456789\";
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \"D\": case \"M\":
\t\t\t\t\t\treturn null; // Accept anything
\t\t\t\t\tcase \"'\":
\t\t\t\t\t\tif ( lookAhead( \"'\" ) ) {
\t\t\t\t\t\t\tchars += \"'\";
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tliteral = true;
\t\t\t\t\t\t}
\t\t\t\t\t\tbreak;
\t\t\t\t\tdefault:
\t\t\t\t\t\tchars += format.charAt( iFormat );
\t\t\t\t}
\t\t\t}
\t\t}
\t\treturn chars;
\t},

\t/* Get a setting value, defaulting if necessary. */
\t_get: function( inst, name ) {
\t\treturn inst.settings[ name ] !== undefined ?
\t\t\tinst.settings[ name ] : this._defaults[ name ];
\t},

\t/* Parse existing date and initialise date picker. */
\t_setDateFromField: function( inst, noDefault ) {
\t\tif ( inst.input.val() === inst.lastVal ) {
\t\t\treturn;
\t\t}

\t\tvar dateFormat = this._get( inst, \"dateFormat\" ),
\t\t\tdates = inst.lastVal = inst.input ? inst.input.val() : null,
\t\t\tdefaultDate = this._getDefaultDate( inst ),
\t\t\tdate = defaultDate,
\t\t\tsettings = this._getFormatConfig( inst );

\t\ttry {
\t\t\tdate = this.parseDate( dateFormat, dates, settings ) || defaultDate;
\t\t} catch ( event ) {
\t\t\tdates = ( noDefault ? \"\" : dates );
\t\t}
\t\tinst.selectedDay = date.getDate();
\t\tinst.drawMonth = inst.selectedMonth = date.getMonth();
\t\tinst.drawYear = inst.selectedYear = date.getFullYear();
\t\tinst.currentDay = ( dates ? date.getDate() : 0 );
\t\tinst.currentMonth = ( dates ? date.getMonth() : 0 );
\t\tinst.currentYear = ( dates ? date.getFullYear() : 0 );
\t\tthis._adjustInstDate( inst );
\t},

\t/* Retrieve the default date shown on opening. */
\t_getDefaultDate: function( inst ) {
\t\treturn this._restrictMinMax( inst,
\t\t\tthis._determineDate( inst, this._get( inst, \"defaultDate\" ), new Date() ) );
\t},

\t/* A date may be specified as an exact value or a relative one. */
\t_determineDate: function( inst, date, defaultDate ) {
\t\tvar offsetNumeric = function( offset ) {
\t\t\t\tvar date = new Date();
\t\t\t\tdate.setDate( date.getDate() + offset );
\t\t\t\treturn date;
\t\t\t},
\t\t\toffsetString = function( offset ) {
\t\t\t\ttry {
\t\t\t\t\treturn \$.datepicker.parseDate( \$.datepicker._get( inst, \"dateFormat\" ),
\t\t\t\t\t\toffset, \$.datepicker._getFormatConfig( inst ) );
\t\t\t\t}
\t\t\t\tcatch ( e ) {

\t\t\t\t\t// Ignore
\t\t\t\t}

\t\t\t\tvar date = ( offset.toLowerCase().match( /^c/ ) ?
\t\t\t\t\t\$.datepicker._getDate( inst ) : null ) || new Date(),
\t\t\t\t\tyear = date.getFullYear(),
\t\t\t\t\tmonth = date.getMonth(),
\t\t\t\t\tday = date.getDate(),
\t\t\t\t\tpattern = /([+\\-]?[0-9]+)\\s*(d|D|w|W|m|M|y|Y)?/g,
\t\t\t\t\tmatches = pattern.exec( offset );

\t\t\t\twhile ( matches ) {
\t\t\t\t\tswitch ( matches[ 2 ] || \"d\" ) {
\t\t\t\t\t\tcase \"d\" : case \"D\" :
\t\t\t\t\t\t\tday += parseInt( matches[ 1 ], 10 ); break;
\t\t\t\t\t\tcase \"w\" : case \"W\" :
\t\t\t\t\t\t\tday += parseInt( matches[ 1 ], 10 ) * 7; break;
\t\t\t\t\t\tcase \"m\" : case \"M\" :
\t\t\t\t\t\t\tmonth += parseInt( matches[ 1 ], 10 );
\t\t\t\t\t\t\tday = Math.min( day, \$.datepicker._getDaysInMonth( year, month ) );
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tcase \"y\": case \"Y\" :
\t\t\t\t\t\t\tyear += parseInt( matches[ 1 ], 10 );
\t\t\t\t\t\t\tday = Math.min( day, \$.datepicker._getDaysInMonth( year, month ) );
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t\tmatches = pattern.exec( offset );
\t\t\t\t}
\t\t\t\treturn new Date( year, month, day );
\t\t\t},
\t\t\tnewDate = ( date == null || date === \"\" ? defaultDate : ( typeof date === \"string\" ? offsetString( date ) :
\t\t\t\t( typeof date === \"number\" ? ( isNaN( date ) ? defaultDate : offsetNumeric( date ) ) : new Date( date.getTime() ) ) ) );

\t\tnewDate = ( newDate && newDate.toString() === \"Invalid Date\" ? defaultDate : newDate );
\t\tif ( newDate ) {
\t\t\tnewDate.setHours( 0 );
\t\t\tnewDate.setMinutes( 0 );
\t\t\tnewDate.setSeconds( 0 );
\t\t\tnewDate.setMilliseconds( 0 );
\t\t}
\t\treturn this._daylightSavingAdjust( newDate );
\t},

\t/* Handle switch to/from daylight saving.
\t * Hours may be non-zero on daylight saving cut-over:
\t * > 12 when midnight changeover, but then cannot generate
\t * midnight datetime, so jump to 1AM, otherwise reset.
\t * @param  date  (Date) the date to check
\t * @return  (Date) the corrected date
\t */
\t_daylightSavingAdjust: function( date ) {
\t\tif ( !date ) {
\t\t\treturn null;
\t\t}
\t\tdate.setHours( date.getHours() > 12 ? date.getHours() + 2 : 0 );
\t\treturn date;
\t},

\t/* Set the date(s) directly. */
\t_setDate: function( inst, date, noChange ) {
\t\tvar clear = !date,
\t\t\torigMonth = inst.selectedMonth,
\t\t\torigYear = inst.selectedYear,
\t\t\tnewDate = this._restrictMinMax( inst, this._determineDate( inst, date, new Date() ) );

\t\tinst.selectedDay = inst.currentDay = newDate.getDate();
\t\tinst.drawMonth = inst.selectedMonth = inst.currentMonth = newDate.getMonth();
\t\tinst.drawYear = inst.selectedYear = inst.currentYear = newDate.getFullYear();
\t\tif ( ( origMonth !== inst.selectedMonth || origYear !== inst.selectedYear ) && !noChange ) {
\t\t\tthis._notifyChange( inst );
\t\t}
\t\tthis._adjustInstDate( inst );
\t\tif ( inst.input ) {
\t\t\tinst.input.val( clear ? \"\" : this._formatDate( inst ) );
\t\t}
\t},

\t/* Retrieve the date(s) directly. */
\t_getDate: function( inst ) {
\t\tvar startDate = ( !inst.currentYear || ( inst.input && inst.input.val() === \"\" ) ? null :
\t\t\tthis._daylightSavingAdjust( new Date(
\t\t\tinst.currentYear, inst.currentMonth, inst.currentDay ) ) );
\t\t\treturn startDate;
\t},

\t/* Attach the onxxx handlers.  These are declared statically so
\t * they work with static code transformers like Caja.
\t */
\t_attachHandlers: function( inst ) {
\t\tvar stepMonths = this._get( inst, \"stepMonths\" ),
\t\t\tid = \"#\" + inst.id.replace( /\\\\\\\\/g, \"\\\\\" );
\t\tinst.dpDiv.find( \"[data-handler]\" ).map( function() {
\t\t\tvar handler = {
\t\t\t\tprev: function() {
\t\t\t\t\t\$.datepicker._adjustDate( id, -stepMonths, \"M\" );
\t\t\t\t},
\t\t\t\tnext: function() {
\t\t\t\t\t\$.datepicker._adjustDate( id, +stepMonths, \"M\" );
\t\t\t\t},
\t\t\t\thide: function() {
\t\t\t\t\t\$.datepicker._hideDatepicker();
\t\t\t\t},
\t\t\t\ttoday: function() {
\t\t\t\t\t\$.datepicker._gotoToday( id );
\t\t\t\t},
\t\t\t\tselectDay: function() {
\t\t\t\t\t\$.datepicker._selectDay( id, +this.getAttribute( \"data-month\" ), +this.getAttribute( \"data-year\" ), this );
\t\t\t\t\treturn false;
\t\t\t\t},
\t\t\t\tselectMonth: function() {
\t\t\t\t\t\$.datepicker._selectMonthYear( id, this, \"M\" );
\t\t\t\t\treturn false;
\t\t\t\t},
\t\t\t\tselectYear: function() {
\t\t\t\t\t\$.datepicker._selectMonthYear( id, this, \"Y\" );
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t};
\t\t\t\$( this ).on( this.getAttribute( \"data-event\" ), handler[ this.getAttribute( \"data-handler\" ) ] );
\t\t} );
\t},

\t/* Generate the HTML for the current state of the date picker. */
\t_generateHTML: function( inst ) {
\t\tvar maxDraw, prevText, prev, nextText, next, currentText, gotoDate,
\t\t\tcontrols, buttonPanel, firstDay, showWeek, dayNames, dayNamesMin,
\t\t\tmonthNames, monthNamesShort, beforeShowDay, showOtherMonths,
\t\t\tselectOtherMonths, defaultDate, html, dow, row, group, col, selectedDate,
\t\t\tcornerClass, calender, thead, day, daysInMonth, leadDays, curRows, numRows,
\t\t\tprintDate, dRow, tbody, daySettings, otherMonth, unselectable,
\t\t\ttempDate = new Date(),
\t\t\ttoday = this._daylightSavingAdjust(
\t\t\t\tnew Date( tempDate.getFullYear(), tempDate.getMonth(), tempDate.getDate() ) ), // clear time
\t\t\tisRTL = this._get( inst, \"isRTL\" ),
\t\t\tshowButtonPanel = this._get( inst, \"showButtonPanel\" ),
\t\t\thideIfNoPrevNext = this._get( inst, \"hideIfNoPrevNext\" ),
\t\t\tnavigationAsDateFormat = this._get( inst, \"navigationAsDateFormat\" ),
\t\t\tnumMonths = this._getNumberOfMonths( inst ),
\t\t\tshowCurrentAtPos = this._get( inst, \"showCurrentAtPos\" ),
\t\t\tstepMonths = this._get( inst, \"stepMonths\" ),
\t\t\tisMultiMonth = ( numMonths[ 0 ] !== 1 || numMonths[ 1 ] !== 1 ),
\t\t\tcurrentDate = this._daylightSavingAdjust( ( !inst.currentDay ? new Date( 9999, 9, 9 ) :
\t\t\t\tnew Date( inst.currentYear, inst.currentMonth, inst.currentDay ) ) ),
\t\t\tminDate = this._getMinMaxDate( inst, \"min\" ),
\t\t\tmaxDate = this._getMinMaxDate( inst, \"max\" ),
\t\t\tdrawMonth = inst.drawMonth - showCurrentAtPos,
\t\t\tdrawYear = inst.drawYear;

\t\tif ( drawMonth < 0 ) {
\t\t\tdrawMonth += 12;
\t\t\tdrawYear--;
\t\t}
\t\tif ( maxDate ) {
\t\t\tmaxDraw = this._daylightSavingAdjust( new Date( maxDate.getFullYear(),
\t\t\t\tmaxDate.getMonth() - ( numMonths[ 0 ] * numMonths[ 1 ] ) + 1, maxDate.getDate() ) );
\t\t\tmaxDraw = ( minDate && maxDraw < minDate ? minDate : maxDraw );
\t\t\twhile ( this._daylightSavingAdjust( new Date( drawYear, drawMonth, 1 ) ) > maxDraw ) {
\t\t\t\tdrawMonth--;
\t\t\t\tif ( drawMonth < 0 ) {
\t\t\t\t\tdrawMonth = 11;
\t\t\t\t\tdrawYear--;
\t\t\t\t}
\t\t\t}
\t\t}
\t\tinst.drawMonth = drawMonth;
\t\tinst.drawYear = drawYear;

\t\tprevText = this._get( inst, \"prevText\" );
\t\tprevText = ( !navigationAsDateFormat ? prevText : this.formatDate( prevText,
\t\t\tthis._daylightSavingAdjust( new Date( drawYear, drawMonth - stepMonths, 1 ) ),
\t\t\tthis._getFormatConfig( inst ) ) );

\t\tprev = ( this._canAdjustMonth( inst, -1, drawYear, drawMonth ) ?
\t\t\t\"<a class='ui-datepicker-prev ui-corner-all' data-handler='prev' data-event='click'\" +
\t\t\t\" title='\" + prevText + \"'><span class='ui-icon ui-icon-circle-triangle-\" + ( isRTL ? \"e\" : \"w\" ) + \"'>\" + prevText + \"</span></a>\" :
\t\t\t( hideIfNoPrevNext ? \"\" : \"<a class='ui-datepicker-prev ui-corner-all ui-state-disabled' title='\" + prevText + \"'><span class='ui-icon ui-icon-circle-triangle-\" + ( isRTL ? \"e\" : \"w\" ) + \"'>\" + prevText + \"</span></a>\" ) );

\t\tnextText = this._get( inst, \"nextText\" );
\t\tnextText = ( !navigationAsDateFormat ? nextText : this.formatDate( nextText,
\t\t\tthis._daylightSavingAdjust( new Date( drawYear, drawMonth + stepMonths, 1 ) ),
\t\t\tthis._getFormatConfig( inst ) ) );

\t\tnext = ( this._canAdjustMonth( inst, +1, drawYear, drawMonth ) ?
\t\t\t\"<a class='ui-datepicker-next ui-corner-all' data-handler='next' data-event='click'\" +
\t\t\t\" title='\" + nextText + \"'><span class='ui-icon ui-icon-circle-triangle-\" + ( isRTL ? \"w\" : \"e\" ) + \"'>\" + nextText + \"</span></a>\" :
\t\t\t( hideIfNoPrevNext ? \"\" : \"<a class='ui-datepicker-next ui-corner-all ui-state-disabled' title='\" + nextText + \"'><span class='ui-icon ui-icon-circle-triangle-\" + ( isRTL ? \"w\" : \"e\" ) + \"'>\" + nextText + \"</span></a>\" ) );

\t\tcurrentText = this._get( inst, \"currentText\" );
\t\tgotoDate = ( this._get( inst, \"gotoCurrent\" ) && inst.currentDay ? currentDate : today );
\t\tcurrentText = ( !navigationAsDateFormat ? currentText :
\t\t\tthis.formatDate( currentText, gotoDate, this._getFormatConfig( inst ) ) );

\t\tcontrols = ( !inst.inline ? \"<button type='button' class='ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all' data-handler='hide' data-event='click'>\" +
\t\t\tthis._get( inst, \"closeText\" ) + \"</button>\" : \"\" );

\t\tbuttonPanel = ( showButtonPanel ) ? \"<div class='ui-datepicker-buttonpane ui-widget-content'>\" + ( isRTL ? controls : \"\" ) +
\t\t\t( this._isInRange( inst, gotoDate ) ? \"<button type='button' class='ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all' data-handler='today' data-event='click'\" +
\t\t\t\">\" + currentText + \"</button>\" : \"\" ) + ( isRTL ? \"\" : controls ) + \"</div>\" : \"\";

\t\tfirstDay = parseInt( this._get( inst, \"firstDay\" ), 10 );
\t\tfirstDay = ( isNaN( firstDay ) ? 0 : firstDay );

\t\tshowWeek = this._get( inst, \"showWeek\" );
\t\tdayNames = this._get( inst, \"dayNames\" );
\t\tdayNamesMin = this._get( inst, \"dayNamesMin\" );
\t\tmonthNames = this._get( inst, \"monthNames\" );
\t\tmonthNamesShort = this._get( inst, \"monthNamesShort\" );
\t\tbeforeShowDay = this._get( inst, \"beforeShowDay\" );
\t\tshowOtherMonths = this._get( inst, \"showOtherMonths\" );
\t\tselectOtherMonths = this._get( inst, \"selectOtherMonths\" );
\t\tdefaultDate = this._getDefaultDate( inst );
\t\thtml = \"\";

\t\tfor ( row = 0; row < numMonths[ 0 ]; row++ ) {
\t\t\tgroup = \"\";
\t\t\tthis.maxRows = 4;
\t\t\tfor ( col = 0; col < numMonths[ 1 ]; col++ ) {
\t\t\t\tselectedDate = this._daylightSavingAdjust( new Date( drawYear, drawMonth, inst.selectedDay ) );
\t\t\t\tcornerClass = \" ui-corner-all\";
\t\t\t\tcalender = \"\";
\t\t\t\tif ( isMultiMonth ) {
\t\t\t\t\tcalender += \"<div class='ui-datepicker-group\";
\t\t\t\t\tif ( numMonths[ 1 ] > 1 ) {
\t\t\t\t\t\tswitch ( col ) {
\t\t\t\t\t\t\tcase 0: calender += \" ui-datepicker-group-first\";
\t\t\t\t\t\t\t\tcornerClass = \" ui-corner-\" + ( isRTL ? \"right\" : \"left\" ); break;
\t\t\t\t\t\t\tcase numMonths[ 1 ] - 1: calender += \" ui-datepicker-group-last\";
\t\t\t\t\t\t\t\tcornerClass = \" ui-corner-\" + ( isRTL ? \"left\" : \"right\" ); break;
\t\t\t\t\t\t\tdefault: calender += \" ui-datepicker-group-middle\"; cornerClass = \"\"; break;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tcalender += \"'>\";
\t\t\t\t}
\t\t\t\tcalender += \"<div class='ui-datepicker-header ui-widget-header ui-helper-clearfix\" + cornerClass + \"'>\" +
\t\t\t\t\t( /all|left/.test( cornerClass ) && row === 0 ? ( isRTL ? next : prev ) : \"\" ) +
\t\t\t\t\t( /all|right/.test( cornerClass ) && row === 0 ? ( isRTL ? prev : next ) : \"\" ) +
\t\t\t\t\tthis._generateMonthYearHeader( inst, drawMonth, drawYear, minDate, maxDate,
\t\t\t\t\trow > 0 || col > 0, monthNames, monthNamesShort ) + // draw month headers
\t\t\t\t\t\"</div><table class='ui-datepicker-calendar'><thead>\" +
\t\t\t\t\t\"<tr>\";
\t\t\t\tthead = ( showWeek ? \"<th class='ui-datepicker-week-col'>\" + this._get( inst, \"weekHeader\" ) + \"</th>\" : \"\" );
\t\t\t\tfor ( dow = 0; dow < 7; dow++ ) { // days of the week
\t\t\t\t\tday = ( dow + firstDay ) % 7;
\t\t\t\t\tthead += \"<th scope='col'\" + ( ( dow + firstDay + 6 ) % 7 >= 5 ? \" class='ui-datepicker-week-end'\" : \"\" ) + \">\" +
\t\t\t\t\t\t\"<span title='\" + dayNames[ day ] + \"'>\" + dayNamesMin[ day ] + \"</span></th>\";
\t\t\t\t}
\t\t\t\tcalender += thead + \"</tr></thead><tbody>\";
\t\t\t\tdaysInMonth = this._getDaysInMonth( drawYear, drawMonth );
\t\t\t\tif ( drawYear === inst.selectedYear && drawMonth === inst.selectedMonth ) {
\t\t\t\t\tinst.selectedDay = Math.min( inst.selectedDay, daysInMonth );
\t\t\t\t}
\t\t\t\tleadDays = ( this._getFirstDayOfMonth( drawYear, drawMonth ) - firstDay + 7 ) % 7;
\t\t\t\tcurRows = Math.ceil( ( leadDays + daysInMonth ) / 7 ); // calculate the number of rows to generate
\t\t\t\tnumRows = ( isMultiMonth ? this.maxRows > curRows ? this.maxRows : curRows : curRows ); //If multiple months, use the higher number of rows (see #7043)
\t\t\t\tthis.maxRows = numRows;
\t\t\t\tprintDate = this._daylightSavingAdjust( new Date( drawYear, drawMonth, 1 - leadDays ) );
\t\t\t\tfor ( dRow = 0; dRow < numRows; dRow++ ) { // create date picker rows
\t\t\t\t\tcalender += \"<tr>\";
\t\t\t\t\ttbody = ( !showWeek ? \"\" : \"<td class='ui-datepicker-week-col'>\" +
\t\t\t\t\t\tthis._get( inst, \"calculateWeek\" )( printDate ) + \"</td>\" );
\t\t\t\t\tfor ( dow = 0; dow < 7; dow++ ) { // create date picker days
\t\t\t\t\t\tdaySettings = ( beforeShowDay ?
\t\t\t\t\t\t\tbeforeShowDay.apply( ( inst.input ? inst.input[ 0 ] : null ), [ printDate ] ) : [ true, \"\" ] );
\t\t\t\t\t\totherMonth = ( printDate.getMonth() !== drawMonth );
\t\t\t\t\t\tunselectable = ( otherMonth && !selectOtherMonths ) || !daySettings[ 0 ] ||
\t\t\t\t\t\t\t( minDate && printDate < minDate ) || ( maxDate && printDate > maxDate );
\t\t\t\t\t\ttbody += \"<td class='\" +
\t\t\t\t\t\t\t( ( dow + firstDay + 6 ) % 7 >= 5 ? \" ui-datepicker-week-end\" : \"\" ) + // highlight weekends
\t\t\t\t\t\t\t( otherMonth ? \" ui-datepicker-other-month\" : \"\" ) + // highlight days from other months
\t\t\t\t\t\t\t( ( printDate.getTime() === selectedDate.getTime() && drawMonth === inst.selectedMonth && inst._keyEvent ) || // user pressed key
\t\t\t\t\t\t\t( defaultDate.getTime() === printDate.getTime() && defaultDate.getTime() === selectedDate.getTime() ) ?

\t\t\t\t\t\t\t// or defaultDate is current printedDate and defaultDate is selectedDate
\t\t\t\t\t\t\t\" \" + this._dayOverClass : \"\" ) + // highlight selected day
\t\t\t\t\t\t\t( unselectable ? \" \" + this._unselectableClass + \" ui-state-disabled\" : \"\" ) +  // highlight unselectable days
\t\t\t\t\t\t\t( otherMonth && !showOtherMonths ? \"\" : \" \" + daySettings[ 1 ] + // highlight custom dates
\t\t\t\t\t\t\t( printDate.getTime() === currentDate.getTime() ? \" \" + this._currentClass : \"\" ) + // highlight selected day
\t\t\t\t\t\t\t( printDate.getTime() === today.getTime() ? \" ui-datepicker-today\" : \"\" ) ) + \"'\" + // highlight today (if different)
\t\t\t\t\t\t\t( ( !otherMonth || showOtherMonths ) && daySettings[ 2 ] ? \" title='\" + daySettings[ 2 ].replace( /'/g, \"&#39;\" ) + \"'\" : \"\" ) + // cell title
\t\t\t\t\t\t\t( unselectable ? \"\" : \" data-handler='selectDay' data-event='click' data-month='\" + printDate.getMonth() + \"' data-year='\" + printDate.getFullYear() + \"'\" ) + \">\" + // actions
\t\t\t\t\t\t\t( otherMonth && !showOtherMonths ? \"&#xa0;\" : // display for other months
\t\t\t\t\t\t\t( unselectable ? \"<span class='ui-state-default'>\" + printDate.getDate() + \"</span>\" : \"<a class='ui-state-default\" +
\t\t\t\t\t\t\t( printDate.getTime() === today.getTime() ? \" ui-state-highlight\" : \"\" ) +
\t\t\t\t\t\t\t( printDate.getTime() === currentDate.getTime() ? \" ui-state-active\" : \"\" ) + // highlight selected day
\t\t\t\t\t\t\t( otherMonth ? \" ui-priority-secondary\" : \"\" ) + // distinguish dates from other months
\t\t\t\t\t\t\t\"' href='#'>\" + printDate.getDate() + \"</a>\" ) ) + \"</td>\"; // display selectable date
\t\t\t\t\t\tprintDate.setDate( printDate.getDate() + 1 );
\t\t\t\t\t\tprintDate = this._daylightSavingAdjust( printDate );
\t\t\t\t\t}
\t\t\t\t\tcalender += tbody + \"</tr>\";
\t\t\t\t}
\t\t\t\tdrawMonth++;
\t\t\t\tif ( drawMonth > 11 ) {
\t\t\t\t\tdrawMonth = 0;
\t\t\t\t\tdrawYear++;
\t\t\t\t}
\t\t\t\tcalender += \"</tbody></table>\" + ( isMultiMonth ? \"</div>\" +
\t\t\t\t\t\t\t( ( numMonths[ 0 ] > 0 && col === numMonths[ 1 ] - 1 ) ? \"<div class='ui-datepicker-row-break'></div>\" : \"\" ) : \"\" );
\t\t\t\tgroup += calender;
\t\t\t}
\t\t\thtml += group;
\t\t}
\t\thtml += buttonPanel;
\t\tinst._keyEvent = false;
\t\treturn html;
\t},

\t/* Generate the month and year header. */
\t_generateMonthYearHeader: function( inst, drawMonth, drawYear, minDate, maxDate,
\t\t\tsecondary, monthNames, monthNamesShort ) {

\t\tvar inMinYear, inMaxYear, month, years, thisYear, determineYear, year, endYear,
\t\t\tchangeMonth = this._get( inst, \"changeMonth\" ),
\t\t\tchangeYear = this._get( inst, \"changeYear\" ),
\t\t\tshowMonthAfterYear = this._get( inst, \"showMonthAfterYear\" ),
\t\t\thtml = \"<div class='ui-datepicker-title'>\",
\t\t\tmonthHtml = \"\";

\t\t// Month selection
\t\tif ( secondary || !changeMonth ) {
\t\t\tmonthHtml += \"<span class='ui-datepicker-month'>\" + monthNames[ drawMonth ] + \"</span>\";
\t\t} else {
\t\t\tinMinYear = ( minDate && minDate.getFullYear() === drawYear );
\t\t\tinMaxYear = ( maxDate && maxDate.getFullYear() === drawYear );
\t\t\tmonthHtml += \"<select class='ui-datepicker-month' data-handler='selectMonth' data-event='change'>\";
\t\t\tfor ( month = 0; month < 12; month++ ) {
\t\t\t\tif ( ( !inMinYear || month >= minDate.getMonth() ) && ( !inMaxYear || month <= maxDate.getMonth() ) ) {
\t\t\t\t\tmonthHtml += \"<option value='\" + month + \"'\" +
\t\t\t\t\t\t( month === drawMonth ? \" selected='selected'\" : \"\" ) +
\t\t\t\t\t\t\">\" + monthNamesShort[ month ] + \"</option>\";
\t\t\t\t}
\t\t\t}
\t\t\tmonthHtml += \"</select>\";
\t\t}

\t\tif ( !showMonthAfterYear ) {
\t\t\thtml += monthHtml + ( secondary || !( changeMonth && changeYear ) ? \"&#xa0;\" : \"\" );
\t\t}

\t\t// Year selection
\t\tif ( !inst.yearshtml ) {
\t\t\tinst.yearshtml = \"\";
\t\t\tif ( secondary || !changeYear ) {
\t\t\t\thtml += \"<span class='ui-datepicker-year'>\" + drawYear + \"</span>\";
\t\t\t} else {

\t\t\t\t// determine range of years to display
\t\t\t\tyears = this._get( inst, \"yearRange\" ).split( \":\" );
\t\t\t\tthisYear = new Date().getFullYear();
\t\t\t\tdetermineYear = function( value ) {
\t\t\t\t\tvar year = ( value.match( /c[+\\-].*/ ) ? drawYear + parseInt( value.substring( 1 ), 10 ) :
\t\t\t\t\t\t( value.match( /[+\\-].*/ ) ? thisYear + parseInt( value, 10 ) :
\t\t\t\t\t\tparseInt( value, 10 ) ) );
\t\t\t\t\treturn ( isNaN( year ) ? thisYear : year );
\t\t\t\t};
\t\t\t\tyear = determineYear( years[ 0 ] );
\t\t\t\tendYear = Math.max( year, determineYear( years[ 1 ] || \"\" ) );
\t\t\t\tyear = ( minDate ? Math.max( year, minDate.getFullYear() ) : year );
\t\t\t\tendYear = ( maxDate ? Math.min( endYear, maxDate.getFullYear() ) : endYear );
\t\t\t\tinst.yearshtml += \"<select class='ui-datepicker-year' data-handler='selectYear' data-event='change'>\";
\t\t\t\tfor ( ; year <= endYear; year++ ) {
\t\t\t\t\tinst.yearshtml += \"<option value='\" + year + \"'\" +
\t\t\t\t\t\t( year === drawYear ? \" selected='selected'\" : \"\" ) +
\t\t\t\t\t\t\">\" + year + \"</option>\";
\t\t\t\t}
\t\t\t\tinst.yearshtml += \"</select>\";

\t\t\t\thtml += inst.yearshtml;
\t\t\t\tinst.yearshtml = null;
\t\t\t}
\t\t}

\t\thtml += this._get( inst, \"yearSuffix\" );
\t\tif ( showMonthAfterYear ) {
\t\t\thtml += ( secondary || !( changeMonth && changeYear ) ? \"&#xa0;\" : \"\" ) + monthHtml;
\t\t}
\t\thtml += \"</div>\"; // Close datepicker_header
\t\treturn html;
\t},

\t/* Adjust one of the date sub-fields. */
\t_adjustInstDate: function( inst, offset, period ) {
\t\tvar year = inst.selectedYear + ( period === \"Y\" ? offset : 0 ),
\t\t\tmonth = inst.selectedMonth + ( period === \"M\" ? offset : 0 ),
\t\t\tday = Math.min( inst.selectedDay, this._getDaysInMonth( year, month ) ) + ( period === \"D\" ? offset : 0 ),
\t\t\tdate = this._restrictMinMax( inst, this._daylightSavingAdjust( new Date( year, month, day ) ) );

\t\tinst.selectedDay = date.getDate();
\t\tinst.drawMonth = inst.selectedMonth = date.getMonth();
\t\tinst.drawYear = inst.selectedYear = date.getFullYear();
\t\tif ( period === \"M\" || period === \"Y\" ) {
\t\t\tthis._notifyChange( inst );
\t\t}
\t},

\t/* Ensure a date is within any min/max bounds. */
\t_restrictMinMax: function( inst, date ) {
\t\tvar minDate = this._getMinMaxDate( inst, \"min\" ),
\t\t\tmaxDate = this._getMinMaxDate( inst, \"max\" ),
\t\t\tnewDate = ( minDate && date < minDate ? minDate : date );
\t\treturn ( maxDate && newDate > maxDate ? maxDate : newDate );
\t},

\t/* Notify change of month/year. */
\t_notifyChange: function( inst ) {
\t\tvar onChange = this._get( inst, \"onChangeMonthYear\" );
\t\tif ( onChange ) {
\t\t\tonChange.apply( ( inst.input ? inst.input[ 0 ] : null ),
\t\t\t\t[ inst.selectedYear, inst.selectedMonth + 1, inst ] );
\t\t}
\t},

\t/* Determine the number of months to show. */
\t_getNumberOfMonths: function( inst ) {
\t\tvar numMonths = this._get( inst, \"numberOfMonths\" );
\t\treturn ( numMonths == null ? [ 1, 1 ] : ( typeof numMonths === \"number\" ? [ 1, numMonths ] : numMonths ) );
\t},

\t/* Determine the current maximum date - ensure no time components are set. */
\t_getMinMaxDate: function( inst, minMax ) {
\t\treturn this._determineDate( inst, this._get( inst, minMax + \"Date\" ), null );
\t},

\t/* Find the number of days in a given month. */
\t_getDaysInMonth: function( year, month ) {
\t\treturn 32 - this._daylightSavingAdjust( new Date( year, month, 32 ) ).getDate();
\t},

\t/* Find the day of the week of the first of a month. */
\t_getFirstDayOfMonth: function( year, month ) {
\t\treturn new Date( year, month, 1 ).getDay();
\t},

\t/* Determines if we should allow a \"next/prev\" month display change. */
\t_canAdjustMonth: function( inst, offset, curYear, curMonth ) {
\t\tvar numMonths = this._getNumberOfMonths( inst ),
\t\t\tdate = this._daylightSavingAdjust( new Date( curYear,
\t\t\tcurMonth + ( offset < 0 ? offset : numMonths[ 0 ] * numMonths[ 1 ] ), 1 ) );

\t\tif ( offset < 0 ) {
\t\t\tdate.setDate( this._getDaysInMonth( date.getFullYear(), date.getMonth() ) );
\t\t}
\t\treturn this._isInRange( inst, date );
\t},

\t/* Is the given date in the accepted range? */
\t_isInRange: function( inst, date ) {
\t\tvar yearSplit, currentYear,
\t\t\tminDate = this._getMinMaxDate( inst, \"min\" ),
\t\t\tmaxDate = this._getMinMaxDate( inst, \"max\" ),
\t\t\tminYear = null,
\t\t\tmaxYear = null,
\t\t\tyears = this._get( inst, \"yearRange\" );
\t\t\tif ( years ) {
\t\t\t\tyearSplit = years.split( \":\" );
\t\t\t\tcurrentYear = new Date().getFullYear();
\t\t\t\tminYear = parseInt( yearSplit[ 0 ], 10 );
\t\t\t\tmaxYear = parseInt( yearSplit[ 1 ], 10 );
\t\t\t\tif ( yearSplit[ 0 ].match( /[+\\-].*/ ) ) {
\t\t\t\t\tminYear += currentYear;
\t\t\t\t}
\t\t\t\tif ( yearSplit[ 1 ].match( /[+\\-].*/ ) ) {
\t\t\t\t\tmaxYear += currentYear;
\t\t\t\t}
\t\t\t}

\t\treturn ( ( !minDate || date.getTime() >= minDate.getTime() ) &&
\t\t\t( !maxDate || date.getTime() <= maxDate.getTime() ) &&
\t\t\t( !minYear || date.getFullYear() >= minYear ) &&
\t\t\t( !maxYear || date.getFullYear() <= maxYear ) );
\t},

\t/* Provide the configuration settings for formatting/parsing. */
\t_getFormatConfig: function( inst ) {
\t\tvar shortYearCutoff = this._get( inst, \"shortYearCutoff\" );
\t\tshortYearCutoff = ( typeof shortYearCutoff !== \"string\" ? shortYearCutoff :
\t\t\tnew Date().getFullYear() % 100 + parseInt( shortYearCutoff, 10 ) );
\t\treturn { shortYearCutoff: shortYearCutoff,
\t\t\tdayNamesShort: this._get( inst, \"dayNamesShort\" ), dayNames: this._get( inst, \"dayNames\" ),
\t\t\tmonthNamesShort: this._get( inst, \"monthNamesShort\" ), monthNames: this._get( inst, \"monthNames\" ) };
\t},

\t/* Format the given date for display. */
\t_formatDate: function( inst, day, month, year ) {
\t\tif ( !day ) {
\t\t\tinst.currentDay = inst.selectedDay;
\t\t\tinst.currentMonth = inst.selectedMonth;
\t\t\tinst.currentYear = inst.selectedYear;
\t\t}
\t\tvar date = ( day ? ( typeof day === \"object\" ? day :
\t\t\tthis._daylightSavingAdjust( new Date( year, month, day ) ) ) :
\t\t\tthis._daylightSavingAdjust( new Date( inst.currentYear, inst.currentMonth, inst.currentDay ) ) );
\t\treturn this.formatDate( this._get( inst, \"dateFormat\" ), date, this._getFormatConfig( inst ) );
\t}
} );

/*
 * Bind hover events for datepicker elements.
 * Done via delegate so the binding only occurs once in the lifetime of the parent div.
 * Global datepicker_instActive, set by _updateDatepicker allows the handlers to find their way back to the active picker.
 */
function datepicker_bindHover( dpDiv ) {
\tvar selector = \"button, .ui-datepicker-prev, .ui-datepicker-next, .ui-datepicker-calendar td a\";
\treturn dpDiv.on( \"mouseout\", selector, function() {
\t\t\t\$( this ).removeClass( \"ui-state-hover\" );
\t\t\tif ( this.className.indexOf( \"ui-datepicker-prev\" ) !== -1 ) {
\t\t\t\t\$( this ).removeClass( \"ui-datepicker-prev-hover\" );
\t\t\t}
\t\t\tif ( this.className.indexOf( \"ui-datepicker-next\" ) !== -1 ) {
\t\t\t\t\$( this ).removeClass( \"ui-datepicker-next-hover\" );
\t\t\t}
\t\t} )
\t\t.on( \"mouseover\", selector, datepicker_handleMouseover );
}

function datepicker_handleMouseover() {
\tif ( !\$.datepicker._isDisabledDatepicker( datepicker_instActive.inline ? datepicker_instActive.dpDiv.parent()[ 0 ] : datepicker_instActive.input[ 0 ] ) ) {
\t\t\$( this ).parents( \".ui-datepicker-calendar\" ).find( \"a\" ).removeClass( \"ui-state-hover\" );
\t\t\$( this ).addClass( \"ui-state-hover\" );
\t\tif ( this.className.indexOf( \"ui-datepicker-prev\" ) !== -1 ) {
\t\t\t\$( this ).addClass( \"ui-datepicker-prev-hover\" );
\t\t}
\t\tif ( this.className.indexOf( \"ui-datepicker-next\" ) !== -1 ) {
\t\t\t\$( this ).addClass( \"ui-datepicker-next-hover\" );
\t\t}
\t}
}

/* jQuery extend now ignores nulls! */
function datepicker_extendRemove( target, props ) {
\t\$.extend( target, props );
\tfor ( var name in props ) {
\t\tif ( props[ name ] == null ) {
\t\t\ttarget[ name ] = props[ name ];
\t\t}
\t}
\treturn target;
}

/* Invoke the datepicker functionality.
   @param  options  string - a command, optionally followed by additional parameters or
\t\t\t\t\tObject - settings for attaching new datepicker functionality
   @return  jQuery object */
\$.fn.datepicker = function( options ) {

\t/* Verify an empty collection wasn't passed - Fixes #6976 */
\tif ( !this.length ) {
\t\treturn this;
\t}

\t/* Initialise the date picker. */
\tif ( !\$.datepicker.initialized ) {
\t\t\$( document ).on( \"mousedown\", \$.datepicker._checkExternalClick );
\t\t\$.datepicker.initialized = true;
\t}

\t/* Append datepicker main container to body if not exist. */
\tif ( \$( \"#\" + \$.datepicker._mainDivId ).length === 0 ) {
\t\t\$( \"body\" ).append( \$.datepicker.dpDiv );
\t}

\tvar otherArgs = Array.prototype.slice.call( arguments, 1 );
\tif ( typeof options === \"string\" && ( options === \"isDisabled\" || options === \"getDate\" || options === \"widget\" ) ) {
\t\treturn \$.datepicker[ \"_\" + options + \"Datepicker\" ].
\t\t\tapply( \$.datepicker, [ this[ 0 ] ].concat( otherArgs ) );
\t}
\tif ( options === \"option\" && arguments.length === 2 && typeof arguments[ 1 ] === \"string\" ) {
\t\treturn \$.datepicker[ \"_\" + options + \"Datepicker\" ].
\t\t\tapply( \$.datepicker, [ this[ 0 ] ].concat( otherArgs ) );
\t}
\treturn this.each( function() {
\t\ttypeof options === \"string\" ?
\t\t\t\$.datepicker[ \"_\" + options + \"Datepicker\" ].
\t\t\t\tapply( \$.datepicker, [ this ].concat( otherArgs ) ) :
\t\t\t\$.datepicker._attachDatepicker( this, options );
\t} );
};

\$.datepicker = new Datepicker(); // singleton instance
\$.datepicker.initialized = false;
\$.datepicker.uuid = new Date().getTime();
\$.datepicker.version = \"1.12.1\";

var widgetsDatepicker = \$.datepicker;




// This file is deprecated
var ie = \$.ui.ie = !!/msie [\\w.]+/.exec( navigator.userAgent.toLowerCase() );

/*!
 * jQuery UI Mouse 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Mouse
//>>group: Widgets
//>>description: Abstracts mouse-based interactions to assist in creating certain widgets.
//>>docs: http://api.jqueryui.com/mouse/



var mouseHandled = false;
\$( document ).on( \"mouseup\", function() {
\tmouseHandled = false;
} );

var widgetsMouse = \$.widget( \"ui.mouse\", {
\tversion: \"1.12.1\",
\toptions: {
\t\tcancel: \"input, textarea, button, select, option\",
\t\tdistance: 1,
\t\tdelay: 0
\t},
\t_mouseInit: function() {
\t\tvar that = this;

\t\tthis.element
\t\t\t.on( \"mousedown.\" + this.widgetName, function( event ) {
\t\t\t\treturn that._mouseDown( event );
\t\t\t} )
\t\t\t.on( \"click.\" + this.widgetName, function( event ) {
\t\t\t\tif ( true === \$.data( event.target, that.widgetName + \".preventClickEvent\" ) ) {
\t\t\t\t\t\$.removeData( event.target, that.widgetName + \".preventClickEvent\" );
\t\t\t\t\tevent.stopImmediatePropagation();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t} );

\t\tthis.started = false;
\t},

\t// TODO: make sure destroying one instance of mouse doesn't mess with
\t// other instances of mouse
\t_mouseDestroy: function() {
\t\tthis.element.off( \".\" + this.widgetName );
\t\tif ( this._mouseMoveDelegate ) {
\t\t\tthis.document
\t\t\t\t.off( \"mousemove.\" + this.widgetName, this._mouseMoveDelegate )
\t\t\t\t.off( \"mouseup.\" + this.widgetName, this._mouseUpDelegate );
\t\t}
\t},

\t_mouseDown: function( event ) {

\t\t// don't let more than one widget handle mouseStart
\t\tif ( mouseHandled ) {
\t\t\treturn;
\t\t}

\t\tthis._mouseMoved = false;

\t\t// We may have missed mouseup (out of window)
\t\t( this._mouseStarted && this._mouseUp( event ) );

\t\tthis._mouseDownEvent = event;

\t\tvar that = this,
\t\t\tbtnIsLeft = ( event.which === 1 ),

\t\t\t// event.target.nodeName works around a bug in IE 8 with
\t\t\t// disabled inputs (#7620)
\t\t\telIsCancel = ( typeof this.options.cancel === \"string\" && event.target.nodeName ?
\t\t\t\t\$( event.target ).closest( this.options.cancel ).length : false );
\t\tif ( !btnIsLeft || elIsCancel || !this._mouseCapture( event ) ) {
\t\t\treturn true;
\t\t}

\t\tthis.mouseDelayMet = !this.options.delay;
\t\tif ( !this.mouseDelayMet ) {
\t\t\tthis._mouseDelayTimer = setTimeout( function() {
\t\t\t\tthat.mouseDelayMet = true;
\t\t\t}, this.options.delay );
\t\t}

\t\tif ( this._mouseDistanceMet( event ) && this._mouseDelayMet( event ) ) {
\t\t\tthis._mouseStarted = ( this._mouseStart( event ) !== false );
\t\t\tif ( !this._mouseStarted ) {
\t\t\t\tevent.preventDefault();
\t\t\t\treturn true;
\t\t\t}
\t\t}

\t\t// Click event may never have fired (Gecko & Opera)
\t\tif ( true === \$.data( event.target, this.widgetName + \".preventClickEvent\" ) ) {
\t\t\t\$.removeData( event.target, this.widgetName + \".preventClickEvent\" );
\t\t}

\t\t// These delegates are required to keep context
\t\tthis._mouseMoveDelegate = function( event ) {
\t\t\treturn that._mouseMove( event );
\t\t};
\t\tthis._mouseUpDelegate = function( event ) {
\t\t\treturn that._mouseUp( event );
\t\t};

\t\tthis.document
\t\t\t.on( \"mousemove.\" + this.widgetName, this._mouseMoveDelegate )
\t\t\t.on( \"mouseup.\" + this.widgetName, this._mouseUpDelegate );

\t\tevent.preventDefault();

\t\tmouseHandled = true;
\t\treturn true;
\t},

\t_mouseMove: function( event ) {

\t\t// Only check for mouseups outside the document if you've moved inside the document
\t\t// at least once. This prevents the firing of mouseup in the case of IE<9, which will
\t\t// fire a mousemove event if content is placed under the cursor. See #7778
\t\t// Support: IE <9
\t\tif ( this._mouseMoved ) {

\t\t\t// IE mouseup check - mouseup happened when mouse was out of window
\t\t\tif ( \$.ui.ie && ( !document.documentMode || document.documentMode < 9 ) &&
\t\t\t\t\t!event.button ) {
\t\t\t\treturn this._mouseUp( event );

\t\t\t// Iframe mouseup check - mouseup occurred in another document
\t\t\t} else if ( !event.which ) {

\t\t\t\t// Support: Safari <=8 - 9
\t\t\t\t// Safari sets which to 0 if you press any of the following keys
\t\t\t\t// during a drag (#14461)
\t\t\t\tif ( event.originalEvent.altKey || event.originalEvent.ctrlKey ||
\t\t\t\t\t\tevent.originalEvent.metaKey || event.originalEvent.shiftKey ) {
\t\t\t\t\tthis.ignoreMissingWhich = true;
\t\t\t\t} else if ( !this.ignoreMissingWhich ) {
\t\t\t\t\treturn this._mouseUp( event );
\t\t\t\t}
\t\t\t}
\t\t}

\t\tif ( event.which || event.button ) {
\t\t\tthis._mouseMoved = true;
\t\t}

\t\tif ( this._mouseStarted ) {
\t\t\tthis._mouseDrag( event );
\t\t\treturn event.preventDefault();
\t\t}

\t\tif ( this._mouseDistanceMet( event ) && this._mouseDelayMet( event ) ) {
\t\t\tthis._mouseStarted =
\t\t\t\t( this._mouseStart( this._mouseDownEvent, event ) !== false );
\t\t\t( this._mouseStarted ? this._mouseDrag( event ) : this._mouseUp( event ) );
\t\t}

\t\treturn !this._mouseStarted;
\t},

\t_mouseUp: function( event ) {
\t\tthis.document
\t\t\t.off( \"mousemove.\" + this.widgetName, this._mouseMoveDelegate )
\t\t\t.off( \"mouseup.\" + this.widgetName, this._mouseUpDelegate );

\t\tif ( this._mouseStarted ) {
\t\t\tthis._mouseStarted = false;

\t\t\tif ( event.target === this._mouseDownEvent.target ) {
\t\t\t\t\$.data( event.target, this.widgetName + \".preventClickEvent\", true );
\t\t\t}

\t\t\tthis._mouseStop( event );
\t\t}

\t\tif ( this._mouseDelayTimer ) {
\t\t\tclearTimeout( this._mouseDelayTimer );
\t\t\tdelete this._mouseDelayTimer;
\t\t}

\t\tthis.ignoreMissingWhich = false;
\t\tmouseHandled = false;
\t\tevent.preventDefault();
\t},

\t_mouseDistanceMet: function( event ) {
\t\treturn ( Math.max(
\t\t\t\tMath.abs( this._mouseDownEvent.pageX - event.pageX ),
\t\t\t\tMath.abs( this._mouseDownEvent.pageY - event.pageY )
\t\t\t) >= this.options.distance
\t\t);
\t},

\t_mouseDelayMet: function( /* event */ ) {
\t\treturn this.mouseDelayMet;
\t},

\t// These are placeholder methods, to be overriden by extending plugin
\t_mouseStart: function( /* event */ ) {},
\t_mouseDrag: function( /* event */ ) {},
\t_mouseStop: function( /* event */ ) {},
\t_mouseCapture: function( /* event */ ) { return true; }
} );




// \$.ui.plugin is deprecated. Use \$.widget() extensions instead.
var plugin = \$.ui.plugin = {
\tadd: function( module, option, set ) {
\t\tvar i,
\t\t\tproto = \$.ui[ module ].prototype;
\t\tfor ( i in set ) {
\t\t\tproto.plugins[ i ] = proto.plugins[ i ] || [];
\t\t\tproto.plugins[ i ].push( [ option, set[ i ] ] );
\t\t}
\t},
\tcall: function( instance, name, args, allowDisconnected ) {
\t\tvar i,
\t\t\tset = instance.plugins[ name ];

\t\tif ( !set ) {
\t\t\treturn;
\t\t}

\t\tif ( !allowDisconnected && ( !instance.element[ 0 ].parentNode ||
\t\t\t\tinstance.element[ 0 ].parentNode.nodeType === 11 ) ) {
\t\t\treturn;
\t\t}

\t\tfor ( i = 0; i < set.length; i++ ) {
\t\t\tif ( instance.options[ set[ i ][ 0 ] ] ) {
\t\t\t\tset[ i ][ 1 ].apply( instance.element, args );
\t\t\t}
\t\t}
\t}
};



var safeBlur = \$.ui.safeBlur = function( element ) {

\t// Support: IE9 - 10 only
\t// If the <body> is blurred, IE will switch windows, see #9420
\tif ( element && element.nodeName.toLowerCase() !== \"body\" ) {
\t\t\$( element ).trigger( \"blur\" );
\t}
};


/*!
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

var widgetsDraggable = \$.ui.draggable;


/*!
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

var widgetsResizable = \$.ui.resizable;


/*!
 * jQuery UI Dialog 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Dialog
//>>group: Widgets
//>>description: Displays customizable dialog windows.
//>>docs: http://api.jqueryui.com/dialog/
//>>demos: http://jqueryui.com/dialog/
//>>css.structure: ../../themes/base/core.css
//>>css.structure: ../../themes/base/dialog.css
//>>css.theme: ../../themes/base/theme.css



\$.widget( \"ui.dialog\", {
\tversion: \"1.12.1\",
\toptions: {
\t\tappendTo: \"body\",
\t\tautoOpen: true,
\t\tbuttons: [],
\t\tclasses: {
\t\t\t\"ui-dialog\": \"ui-corner-all\",
\t\t\t\"ui-dialog-titlebar\": \"ui-corner-all\"
\t\t},
\t\tcloseOnEscape: true,
\t\tcloseText: \"Close\",
\t\tdraggable: true,
\t\thide: null,
\t\theight: \"auto\",
\t\tmaxHeight: null,
\t\tmaxWidth: null,
\t\tminHeight: 150,
\t\tminWidth: 150,
\t\tmodal: false,
\t\tposition: {
\t\t\tmy: \"center\",
\t\t\tat: \"center\",
\t\t\tof: window,
\t\t\tcollision: \"fit\",

\t\t\t// Ensure the titlebar is always visible
\t\t\tusing: function( pos ) {
\t\t\t\tvar topOffset = \$( this ).css( pos ).offset().top;
\t\t\t\tif ( topOffset < 0 ) {
\t\t\t\t\t\$( this ).css( \"top\", pos.top - topOffset );
\t\t\t\t}
\t\t\t}
\t\t},
\t\tresizable: true,
\t\tshow: null,
\t\ttitle: null,
\t\twidth: 300,

\t\t// Callbacks
\t\tbeforeClose: null,
\t\tclose: null,
\t\tdrag: null,
\t\tdragStart: null,
\t\tdragStop: null,
\t\tfocus: null,
\t\topen: null,
\t\tresize: null,
\t\tresizeStart: null,
\t\tresizeStop: null
\t},

\tsizeRelatedOptions: {
\t\tbuttons: true,
\t\theight: true,
\t\tmaxHeight: true,
\t\tmaxWidth: true,
\t\tminHeight: true,
\t\tminWidth: true,
\t\twidth: true
\t},

\tresizableRelatedOptions: {
\t\tmaxHeight: true,
\t\tmaxWidth: true,
\t\tminHeight: true,
\t\tminWidth: true
\t},

\t_create: function() {
\t\tthis.originalCss = {
\t\t\tdisplay: this.element[ 0 ].style.display,
\t\t\twidth: this.element[ 0 ].style.width,
\t\t\tminHeight: this.element[ 0 ].style.minHeight,
\t\t\tmaxHeight: this.element[ 0 ].style.maxHeight,
\t\t\theight: this.element[ 0 ].style.height
\t\t};
\t\tthis.originalPosition = {
\t\t\tparent: this.element.parent(),
\t\t\tindex: this.element.parent().children().index( this.element )
\t\t};
\t\tthis.originalTitle = this.element.attr( \"title\" );
\t\tif ( this.options.title == null && this.originalTitle != null ) {
\t\t\tthis.options.title = this.originalTitle;
\t\t}

\t\t// Dialogs can't be disabled
\t\tif ( this.options.disabled ) {
\t\t\tthis.options.disabled = false;
\t\t}

\t\tthis._createWrapper();

\t\tthis.element
\t\t\t.show()
\t\t\t.removeAttr( \"title\" )
\t\t\t.appendTo( this.uiDialog );

\t\tthis._addClass( \"ui-dialog-content\", \"ui-widget-content\" );

\t\tthis._createTitlebar();
\t\tthis._createButtonPane();

\t\tif ( this.options.draggable && \$.fn.draggable ) {
\t\t\tthis._makeDraggable();
\t\t}
\t\tif ( this.options.resizable && \$.fn.resizable ) {
\t\t\tthis._makeResizable();
\t\t}

\t\tthis._isOpen = false;

\t\tthis._trackFocus();
\t},

\t_init: function() {
\t\tif ( this.options.autoOpen ) {
\t\t\tthis.open();
\t\t}
\t},

\t_appendTo: function() {
\t\tvar element = this.options.appendTo;
\t\tif ( element && ( element.jquery || element.nodeType ) ) {
\t\t\treturn \$( element );
\t\t}
\t\treturn this.document.find( element || \"body\" ).eq( 0 );
\t},

\t_destroy: function() {
\t\tvar next,
\t\t\toriginalPosition = this.originalPosition;

\t\tthis._untrackInstance();
\t\tthis._destroyOverlay();

\t\tthis.element
\t\t\t.removeUniqueId()
\t\t\t.css( this.originalCss )

\t\t\t// Without detaching first, the following becomes really slow
\t\t\t.detach();

\t\tthis.uiDialog.remove();

\t\tif ( this.originalTitle ) {
\t\t\tthis.element.attr( \"title\", this.originalTitle );
\t\t}

\t\tnext = originalPosition.parent.children().eq( originalPosition.index );

\t\t// Don't try to place the dialog next to itself (#8613)
\t\tif ( next.length && next[ 0 ] !== this.element[ 0 ] ) {
\t\t\tnext.before( this.element );
\t\t} else {
\t\t\toriginalPosition.parent.append( this.element );
\t\t}
\t},

\twidget: function() {
\t\treturn this.uiDialog;
\t},

\tdisable: \$.noop,
\tenable: \$.noop,

\tclose: function( event ) {
\t\tvar that = this;

\t\tif ( !this._isOpen || this._trigger( \"beforeClose\", event ) === false ) {
\t\t\treturn;
\t\t}

\t\tthis._isOpen = false;
\t\tthis._focusedElement = null;
\t\tthis._destroyOverlay();
\t\tthis._untrackInstance();

\t\tif ( !this.opener.filter( \":focusable\" ).trigger( \"focus\" ).length ) {

\t\t\t// Hiding a focused element doesn't trigger blur in WebKit
\t\t\t// so in case we have nothing to focus on, explicitly blur the active element
\t\t\t// https://bugs.webkit.org/show_bug.cgi?id=47182
\t\t\t\$.ui.safeBlur( \$.ui.safeActiveElement( this.document[ 0 ] ) );
\t\t}

\t\tthis._hide( this.uiDialog, this.options.hide, function() {
\t\t\tthat._trigger( \"close\", event );
\t\t} );
\t},

\tisOpen: function() {
\t\treturn this._isOpen;
\t},

\tmoveToTop: function() {
\t\tthis._moveToTop();
\t},

\t_moveToTop: function( event, silent ) {
\t\tvar moved = false,
\t\t\tzIndices = this.uiDialog.siblings( \".ui-front:visible\" ).map( function() {
\t\t\t\treturn +\$( this ).css( \"z-index\" );
\t\t\t} ).get(),
\t\t\tzIndexMax = Math.max.apply( null, zIndices );

\t\tif ( zIndexMax >= +this.uiDialog.css( \"z-index\" ) ) {
\t\t\tthis.uiDialog.css( \"z-index\", zIndexMax + 1 );
\t\t\tmoved = true;
\t\t}

\t\tif ( moved && !silent ) {
\t\t\tthis._trigger( \"focus\", event );
\t\t}
\t\treturn moved;
\t},

\topen: function() {
\t\tvar that = this;
\t\tif ( this._isOpen ) {
\t\t\tif ( this._moveToTop() ) {
\t\t\t\tthis._focusTabbable();
\t\t\t}
\t\t\treturn;
\t\t}

\t\tthis._isOpen = true;
\t\tthis.opener = \$( \$.ui.safeActiveElement( this.document[ 0 ] ) );

\t\tthis._size();
\t\tthis._position();
\t\tthis._createOverlay();
\t\tthis._moveToTop( null, true );

\t\t// Ensure the overlay is moved to the top with the dialog, but only when
\t\t// opening. The overlay shouldn't move after the dialog is open so that
\t\t// modeless dialogs opened after the modal dialog stack properly.
\t\tif ( this.overlay ) {
\t\t\tthis.overlay.css( \"z-index\", this.uiDialog.css( \"z-index\" ) - 1 );
\t\t}

\t\tthis._show( this.uiDialog, this.options.show, function() {
\t\t\tthat._focusTabbable();
\t\t\tthat._trigger( \"focus\" );
\t\t} );

\t\t// Track the dialog immediately upon openening in case a focus event
\t\t// somehow occurs outside of the dialog before an element inside the
\t\t// dialog is focused (#10152)
\t\tthis._makeFocusTarget();

\t\tthis._trigger( \"open\" );
\t},

\t_focusTabbable: function() {

\t\t// Set focus to the first match:
\t\t// 1. An element that was focused previously
\t\t// 2. First element inside the dialog matching [autofocus]
\t\t// 3. Tabbable element inside the content element
\t\t// 4. Tabbable element inside the buttonpane
\t\t// 5. The close button
\t\t// 6. The dialog itself
\t\tvar hasFocus = this._focusedElement;
\t\tif ( !hasFocus ) {
\t\t\thasFocus = this.element.find( \"[autofocus]\" );
\t\t}
\t\tif ( !hasFocus.length ) {
\t\t\thasFocus = this.element.find( \":tabbable\" );
\t\t}
\t\tif ( !hasFocus.length ) {
\t\t\thasFocus = this.uiDialogButtonPane.find( \":tabbable\" );
\t\t}
\t\tif ( !hasFocus.length ) {
\t\t\thasFocus = this.uiDialogTitlebarClose.filter( \":tabbable\" );
\t\t}
\t\tif ( !hasFocus.length ) {
\t\t\thasFocus = this.uiDialog;
\t\t}
\t\thasFocus.eq( 0 ).trigger( \"focus\" );
\t},

\t_keepFocus: function( event ) {
\t\tfunction checkFocus() {
\t\t\tvar activeElement = \$.ui.safeActiveElement( this.document[ 0 ] ),
\t\t\t\tisActive = this.uiDialog[ 0 ] === activeElement ||
\t\t\t\t\t\$.contains( this.uiDialog[ 0 ], activeElement );
\t\t\tif ( !isActive ) {
\t\t\t\tthis._focusTabbable();
\t\t\t}
\t\t}
\t\tevent.preventDefault();
\t\tcheckFocus.call( this );

\t\t// support: IE
\t\t// IE <= 8 doesn't prevent moving focus even with event.preventDefault()
\t\t// so we check again later
\t\tthis._delay( checkFocus );
\t},

\t_createWrapper: function() {
\t\tthis.uiDialog = \$( \"<div>\" )
\t\t\t.hide()
\t\t\t.attr( {

\t\t\t\t// Setting tabIndex makes the div focusable
\t\t\t\ttabIndex: -1,
\t\t\t\trole: \"dialog\"
\t\t\t} )
\t\t\t.appendTo( this._appendTo() );

\t\tthis._addClass( this.uiDialog, \"ui-dialog\", \"ui-widget ui-widget-content ui-front\" );
\t\tthis._on( this.uiDialog, {
\t\t\tkeydown: function( event ) {
\t\t\t\tif ( this.options.closeOnEscape && !event.isDefaultPrevented() && event.keyCode &&
\t\t\t\t\t\tevent.keyCode === \$.ui.keyCode.ESCAPE ) {
\t\t\t\t\tevent.preventDefault();
\t\t\t\t\tthis.close( event );
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t// Prevent tabbing out of dialogs
\t\t\t\tif ( event.keyCode !== \$.ui.keyCode.TAB || event.isDefaultPrevented() ) {
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tvar tabbables = this.uiDialog.find( \":tabbable\" ),
\t\t\t\t\tfirst = tabbables.filter( \":first\" ),
\t\t\t\t\tlast = tabbables.filter( \":last\" );

\t\t\t\tif ( ( event.target === last[ 0 ] || event.target === this.uiDialog[ 0 ] ) &&
\t\t\t\t\t\t!event.shiftKey ) {
\t\t\t\t\tthis._delay( function() {
\t\t\t\t\t\tfirst.trigger( \"focus\" );
\t\t\t\t\t} );
\t\t\t\t\tevent.preventDefault();
\t\t\t\t} else if ( ( event.target === first[ 0 ] ||
\t\t\t\t\t\tevent.target === this.uiDialog[ 0 ] ) && event.shiftKey ) {
\t\t\t\t\tthis._delay( function() {
\t\t\t\t\t\tlast.trigger( \"focus\" );
\t\t\t\t\t} );
\t\t\t\t\tevent.preventDefault();
\t\t\t\t}
\t\t\t},
\t\t\tmousedown: function( event ) {
\t\t\t\tif ( this._moveToTop( event ) ) {
\t\t\t\t\tthis._focusTabbable();
\t\t\t\t}
\t\t\t}
\t\t} );

\t\t// We assume that any existing aria-describedby attribute means
\t\t// that the dialog content is marked up properly
\t\t// otherwise we brute force the content as the description
\t\tif ( !this.element.find( \"[aria-describedby]\" ).length ) {
\t\t\tthis.uiDialog.attr( {
\t\t\t\t\"aria-describedby\": this.element.uniqueId().attr( \"id\" )
\t\t\t} );
\t\t}
\t},

\t_createTitlebar: function() {
\t\tvar uiDialogTitle;

\t\tthis.uiDialogTitlebar = \$( \"<div>\" );
\t\tthis._addClass( this.uiDialogTitlebar,
\t\t\t\"ui-dialog-titlebar\", \"ui-widget-header ui-helper-clearfix\" );
\t\tthis._on( this.uiDialogTitlebar, {
\t\t\tmousedown: function( event ) {

\t\t\t\t// Don't prevent click on close button (#8838)
\t\t\t\t// Focusing a dialog that is partially scrolled out of view
\t\t\t\t// causes the browser to scroll it into view, preventing the click event
\t\t\t\tif ( !\$( event.target ).closest( \".ui-dialog-titlebar-close\" ) ) {

\t\t\t\t\t// Dialog isn't getting focus when dragging (#8063)
\t\t\t\t\tthis.uiDialog.trigger( \"focus\" );
\t\t\t\t}
\t\t\t}
\t\t} );

\t\t// Support: IE
\t\t// Use type=\"button\" to prevent enter keypresses in textboxes from closing the
\t\t// dialog in IE (#9312)
\t\tthis.uiDialogTitlebarClose = \$( \"<button type='button'></button>\" )
\t\t\t.button( {
\t\t\t\tlabel: \$( \"<a>\" ).text( this.options.closeText ).html(),
\t\t\t\ticon: \"ui-icon-closethick\",
\t\t\t\tshowLabel: false
\t\t\t} )
\t\t\t.appendTo( this.uiDialogTitlebar );

\t\tthis._addClass( this.uiDialogTitlebarClose, \"ui-dialog-titlebar-close\" );
\t\tthis._on( this.uiDialogTitlebarClose, {
\t\t\tclick: function( event ) {
\t\t\t\tevent.preventDefault();
\t\t\t\tthis.close( event );
\t\t\t}
\t\t} );

\t\tuiDialogTitle = \$( \"<span>\" ).uniqueId().prependTo( this.uiDialogTitlebar );
\t\tthis._addClass( uiDialogTitle, \"ui-dialog-title\" );
\t\tthis._title( uiDialogTitle );

\t\tthis.uiDialogTitlebar.prependTo( this.uiDialog );

\t\tthis.uiDialog.attr( {
\t\t\t\"aria-labelledby\": uiDialogTitle.attr( \"id\" )
\t\t} );
\t},

\t_title: function( title ) {
\t\tif ( this.options.title ) {
\t\t\ttitle.text( this.options.title );
\t\t} else {
\t\t\ttitle.html( \"&#160;\" );
\t\t}
\t},

\t_createButtonPane: function() {
\t\tthis.uiDialogButtonPane = \$( \"<div>\" );
\t\tthis._addClass( this.uiDialogButtonPane, \"ui-dialog-buttonpane\",
\t\t\t\"ui-widget-content ui-helper-clearfix\" );

\t\tthis.uiButtonSet = \$( \"<div>\" )
\t\t\t.appendTo( this.uiDialogButtonPane );
\t\tthis._addClass( this.uiButtonSet, \"ui-dialog-buttonset\" );

\t\tthis._createButtons();
\t},

\t_createButtons: function() {
\t\tvar that = this,
\t\t\tbuttons = this.options.buttons;

\t\t// If we already have a button pane, remove it
\t\tthis.uiDialogButtonPane.remove();
\t\tthis.uiButtonSet.empty();

\t\tif ( \$.isEmptyObject( buttons ) || ( \$.isArray( buttons ) && !buttons.length ) ) {
\t\t\tthis._removeClass( this.uiDialog, \"ui-dialog-buttons\" );
\t\t\treturn;
\t\t}

\t\t\$.each( buttons, function( name, props ) {
\t\t\tvar click, buttonOptions;
\t\t\tprops = \$.isFunction( props ) ?
\t\t\t\t{ click: props, text: name } :
\t\t\t\tprops;

\t\t\t// Default to a non-submitting button
\t\t\tprops = \$.extend( { type: \"button\" }, props );

\t\t\t// Change the context for the click callback to be the main element
\t\t\tclick = props.click;
\t\t\tbuttonOptions = {
\t\t\t\ticon: props.icon,
\t\t\t\ticonPosition: props.iconPosition,
\t\t\t\tshowLabel: props.showLabel,

\t\t\t\t// Deprecated options
\t\t\t\ticons: props.icons,
\t\t\t\ttext: props.text
\t\t\t};

\t\t\tdelete props.click;
\t\t\tdelete props.icon;
\t\t\tdelete props.iconPosition;
\t\t\tdelete props.showLabel;

\t\t\t// Deprecated options
\t\t\tdelete props.icons;
\t\t\tif ( typeof props.text === \"boolean\" ) {
\t\t\t\tdelete props.text;
\t\t\t}

\t\t\t\$( \"<button></button>\", props )
\t\t\t\t.button( buttonOptions )
\t\t\t\t.appendTo( that.uiButtonSet )
\t\t\t\t.on( \"click\", function() {
\t\t\t\t\tclick.apply( that.element[ 0 ], arguments );
\t\t\t\t} );
\t\t} );
\t\tthis._addClass( this.uiDialog, \"ui-dialog-buttons\" );
\t\tthis.uiDialogButtonPane.appendTo( this.uiDialog );
\t},

\t_makeDraggable: function() {
\t\tvar that = this,
\t\t\toptions = this.options;

\t\tfunction filteredUi( ui ) {
\t\t\treturn {
\t\t\t\tposition: ui.position,
\t\t\t\toffset: ui.offset
\t\t\t};
\t\t}

\t\tthis.uiDialog.draggable( {
\t\t\tcancel: \".ui-dialog-content, .ui-dialog-titlebar-close\",
\t\t\thandle: \".ui-dialog-titlebar\",
\t\t\tcontainment: \"document\",
\t\t\tstart: function( event, ui ) {
\t\t\t\tthat._addClass( \$( this ), \"ui-dialog-dragging\" );
\t\t\t\tthat._blockFrames();
\t\t\t\tthat._trigger( \"dragStart\", event, filteredUi( ui ) );
\t\t\t},
\t\t\tdrag: function( event, ui ) {
\t\t\t\tthat._trigger( \"drag\", event, filteredUi( ui ) );
\t\t\t},
\t\t\tstop: function( event, ui ) {
\t\t\t\tvar left = ui.offset.left - that.document.scrollLeft(),
\t\t\t\t\ttop = ui.offset.top - that.document.scrollTop();

\t\t\t\toptions.position = {
\t\t\t\t\tmy: \"left top\",
\t\t\t\t\tat: \"left\" + ( left >= 0 ? \"+\" : \"\" ) + left + \" \" +
\t\t\t\t\t\t\"top\" + ( top >= 0 ? \"+\" : \"\" ) + top,
\t\t\t\t\tof: that.window
\t\t\t\t};
\t\t\t\tthat._removeClass( \$( this ), \"ui-dialog-dragging\" );
\t\t\t\tthat._unblockFrames();
\t\t\t\tthat._trigger( \"dragStop\", event, filteredUi( ui ) );
\t\t\t}
\t\t} );
\t},

\t_makeResizable: function() {
\t\tvar that = this,
\t\t\toptions = this.options,
\t\t\thandles = options.resizable,

\t\t\t// .ui-resizable has position: relative defined in the stylesheet
\t\t\t// but dialogs have to use absolute or fixed positioning
\t\t\tposition = this.uiDialog.css( \"position\" ),
\t\t\tresizeHandles = typeof handles === \"string\" ?
\t\t\t\thandles :
\t\t\t\t\"n,e,s,w,se,sw,ne,nw\";

\t\tfunction filteredUi( ui ) {
\t\t\treturn {
\t\t\t\toriginalPosition: ui.originalPosition,
\t\t\t\toriginalSize: ui.originalSize,
\t\t\t\tposition: ui.position,
\t\t\t\tsize: ui.size
\t\t\t};
\t\t}

\t\tthis.uiDialog.resizable( {
\t\t\tcancel: \".ui-dialog-content\",
\t\t\tcontainment: \"document\",
\t\t\talsoResize: this.element,
\t\t\tmaxWidth: options.maxWidth,
\t\t\tmaxHeight: options.maxHeight,
\t\t\tminWidth: options.minWidth,
\t\t\tminHeight: this._minHeight(),
\t\t\thandles: resizeHandles,
\t\t\tstart: function( event, ui ) {
\t\t\t\tthat._addClass( \$( this ), \"ui-dialog-resizing\" );
\t\t\t\tthat._blockFrames();
\t\t\t\tthat._trigger( \"resizeStart\", event, filteredUi( ui ) );
\t\t\t},
\t\t\tresize: function( event, ui ) {
\t\t\t\tthat._trigger( \"resize\", event, filteredUi( ui ) );
\t\t\t},
\t\t\tstop: function( event, ui ) {
\t\t\t\tvar offset = that.uiDialog.offset(),
\t\t\t\t\tleft = offset.left - that.document.scrollLeft(),
\t\t\t\t\ttop = offset.top - that.document.scrollTop();

\t\t\t\toptions.height = that.uiDialog.height();
\t\t\t\toptions.width = that.uiDialog.width();
\t\t\t\toptions.position = {
\t\t\t\t\tmy: \"left top\",
\t\t\t\t\tat: \"left\" + ( left >= 0 ? \"+\" : \"\" ) + left + \" \" +
\t\t\t\t\t\t\"top\" + ( top >= 0 ? \"+\" : \"\" ) + top,
\t\t\t\t\tof: that.window
\t\t\t\t};
\t\t\t\tthat._removeClass( \$( this ), \"ui-dialog-resizing\" );
\t\t\t\tthat._unblockFrames();
\t\t\t\tthat._trigger( \"resizeStop\", event, filteredUi( ui ) );
\t\t\t}
\t\t} )
\t\t\t.css( \"position\", position );
\t},

\t_trackFocus: function() {
\t\tthis._on( this.widget(), {
\t\t\tfocusin: function( event ) {
\t\t\t\tthis._makeFocusTarget();
\t\t\t\tthis._focusedElement = \$( event.target );
\t\t\t}
\t\t} );
\t},

\t_makeFocusTarget: function() {
\t\tthis._untrackInstance();
\t\tthis._trackingInstances().unshift( this );
\t},

\t_untrackInstance: function() {
\t\tvar instances = this._trackingInstances(),
\t\t\texists = \$.inArray( this, instances );
\t\tif ( exists !== -1 ) {
\t\t\tinstances.splice( exists, 1 );
\t\t}
\t},

\t_trackingInstances: function() {
\t\tvar instances = this.document.data( \"ui-dialog-instances\" );
\t\tif ( !instances ) {
\t\t\tinstances = [];
\t\t\tthis.document.data( \"ui-dialog-instances\", instances );
\t\t}
\t\treturn instances;
\t},

\t_minHeight: function() {
\t\tvar options = this.options;

\t\treturn options.height === \"auto\" ?
\t\t\toptions.minHeight :
\t\t\tMath.min( options.minHeight, options.height );
\t},

\t_position: function() {

\t\t// Need to show the dialog to get the actual offset in the position plugin
\t\tvar isVisible = this.uiDialog.is( \":visible\" );
\t\tif ( !isVisible ) {
\t\t\tthis.uiDialog.show();
\t\t}
\t\tthis.uiDialog.position( this.options.position );
\t\tif ( !isVisible ) {
\t\t\tthis.uiDialog.hide();
\t\t}
\t},

\t_setOptions: function( options ) {
\t\tvar that = this,
\t\t\tresize = false,
\t\t\tresizableOptions = {};

\t\t\$.each( options, function( key, value ) {
\t\t\tthat._setOption( key, value );

\t\t\tif ( key in that.sizeRelatedOptions ) {
\t\t\t\tresize = true;
\t\t\t}
\t\t\tif ( key in that.resizableRelatedOptions ) {
\t\t\t\tresizableOptions[ key ] = value;
\t\t\t}
\t\t} );

\t\tif ( resize ) {
\t\t\tthis._size();
\t\t\tthis._position();
\t\t}
\t\tif ( this.uiDialog.is( \":data(ui-resizable)\" ) ) {
\t\t\tthis.uiDialog.resizable( \"option\", resizableOptions );
\t\t}
\t},

\t_setOption: function( key, value ) {
\t\tvar isDraggable, isResizable,
\t\t\tuiDialog = this.uiDialog;

\t\tif ( key === \"disabled\" ) {
\t\t\treturn;
\t\t}

\t\tthis._super( key, value );

\t\tif ( key === \"appendTo\" ) {
\t\t\tthis.uiDialog.appendTo( this._appendTo() );
\t\t}

\t\tif ( key === \"buttons\" ) {
\t\t\tthis._createButtons();
\t\t}

\t\tif ( key === \"closeText\" ) {
\t\t\tthis.uiDialogTitlebarClose.button( {

\t\t\t\t// Ensure that we always pass a string
\t\t\t\tlabel: \$( \"<a>\" ).text( \"\" + this.options.closeText ).html()
\t\t\t} );
\t\t}

\t\tif ( key === \"draggable\" ) {
\t\t\tisDraggable = uiDialog.is( \":data(ui-draggable)\" );
\t\t\tif ( isDraggable && !value ) {
\t\t\t\tuiDialog.draggable( \"destroy\" );
\t\t\t}

\t\t\tif ( !isDraggable && value ) {
\t\t\t\tthis._makeDraggable();
\t\t\t}
\t\t}

\t\tif ( key === \"position\" ) {
\t\t\tthis._position();
\t\t}

\t\tif ( key === \"resizable\" ) {

\t\t\t// currently resizable, becoming non-resizable
\t\t\tisResizable = uiDialog.is( \":data(ui-resizable)\" );
\t\t\tif ( isResizable && !value ) {
\t\t\t\tuiDialog.resizable( \"destroy\" );
\t\t\t}

\t\t\t// Currently resizable, changing handles
\t\t\tif ( isResizable && typeof value === \"string\" ) {
\t\t\t\tuiDialog.resizable( \"option\", \"handles\", value );
\t\t\t}

\t\t\t// Currently non-resizable, becoming resizable
\t\t\tif ( !isResizable && value !== false ) {
\t\t\t\tthis._makeResizable();
\t\t\t}
\t\t}

\t\tif ( key === \"title\" ) {
\t\t\tthis._title( this.uiDialogTitlebar.find( \".ui-dialog-title\" ) );
\t\t}
\t},

\t_size: function() {

\t\t// If the user has resized the dialog, the .ui-dialog and .ui-dialog-content
\t\t// divs will both have width and height set, so we need to reset them
\t\tvar nonContentHeight, minContentHeight, maxContentHeight,
\t\t\toptions = this.options;

\t\t// Reset content sizing
\t\tthis.element.show().css( {
\t\t\twidth: \"auto\",
\t\t\tminHeight: 0,
\t\t\tmaxHeight: \"none\",
\t\t\theight: 0
\t\t} );

\t\tif ( options.minWidth > options.width ) {
\t\t\toptions.width = options.minWidth;
\t\t}

\t\t// Reset wrapper sizing
\t\t// determine the height of all the non-content elements
\t\tnonContentHeight = this.uiDialog.css( {
\t\t\theight: \"auto\",
\t\t\twidth: options.width
\t\t} )
\t\t\t.outerHeight();
\t\tminContentHeight = Math.max( 0, options.minHeight - nonContentHeight );
\t\tmaxContentHeight = typeof options.maxHeight === \"number\" ?
\t\t\tMath.max( 0, options.maxHeight - nonContentHeight ) :
\t\t\t\"none\";

\t\tif ( options.height === \"auto\" ) {
\t\t\tthis.element.css( {
\t\t\t\tminHeight: minContentHeight,
\t\t\t\tmaxHeight: maxContentHeight,
\t\t\t\theight: \"auto\"
\t\t\t} );
\t\t} else {
\t\t\tthis.element.height( Math.max( 0, options.height - nonContentHeight ) );
\t\t}

\t\tif ( this.uiDialog.is( \":data(ui-resizable)\" ) ) {
\t\t\tthis.uiDialog.resizable( \"option\", \"minHeight\", this._minHeight() );
\t\t}
\t},

\t_blockFrames: function() {
\t\tthis.iframeBlocks = this.document.find( \"iframe\" ).map( function() {
\t\t\tvar iframe = \$( this );

\t\t\treturn \$( \"<div>\" )
\t\t\t\t.css( {
\t\t\t\t\tposition: \"absolute\",
\t\t\t\t\twidth: iframe.outerWidth(),
\t\t\t\t\theight: iframe.outerHeight()
\t\t\t\t} )
\t\t\t\t.appendTo( iframe.parent() )
\t\t\t\t.offset( iframe.offset() )[ 0 ];
\t\t} );
\t},

\t_unblockFrames: function() {
\t\tif ( this.iframeBlocks ) {
\t\t\tthis.iframeBlocks.remove();
\t\t\tdelete this.iframeBlocks;
\t\t}
\t},

\t_allowInteraction: function( event ) {
\t\tif ( \$( event.target ).closest( \".ui-dialog\" ).length ) {
\t\t\treturn true;
\t\t}

\t\t// TODO: Remove hack when datepicker implements
\t\t// the .ui-front logic (#8989)
\t\treturn !!\$( event.target ).closest( \".ui-datepicker\" ).length;
\t},

\t_createOverlay: function() {
\t\tif ( !this.options.modal ) {
\t\t\treturn;
\t\t}

\t\t// We use a delay in case the overlay is created from an
\t\t// event that we're going to be cancelling (#2804)
\t\tvar isOpening = true;
\t\tthis._delay( function() {
\t\t\tisOpening = false;
\t\t} );

\t\tif ( !this.document.data( \"ui-dialog-overlays\" ) ) {

\t\t\t// Prevent use of anchors and inputs
\t\t\t// Using _on() for an event handler shared across many instances is
\t\t\t// safe because the dialogs stack and must be closed in reverse order
\t\t\tthis._on( this.document, {
\t\t\t\tfocusin: function( event ) {
\t\t\t\t\tif ( isOpening ) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\tif ( !this._allowInteraction( event ) ) {
\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\tthis._trackingInstances()[ 0 ]._focusTabbable();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} );
\t\t}

\t\tthis.overlay = \$( \"<div>\" )
\t\t\t.appendTo( this._appendTo() );

\t\tthis._addClass( this.overlay, null, \"ui-widget-overlay ui-front\" );
\t\tthis._on( this.overlay, {
\t\t\tmousedown: \"_keepFocus\"
\t\t} );
\t\tthis.document.data( \"ui-dialog-overlays\",
\t\t\t( this.document.data( \"ui-dialog-overlays\" ) || 0 ) + 1 );
\t},

\t_destroyOverlay: function() {
\t\tif ( !this.options.modal ) {
\t\t\treturn;
\t\t}

\t\tif ( this.overlay ) {
\t\t\tvar overlays = this.document.data( \"ui-dialog-overlays\" ) - 1;

\t\t\tif ( !overlays ) {
\t\t\t\tthis._off( this.document, \"focusin\" );
\t\t\t\tthis.document.removeData( \"ui-dialog-overlays\" );
\t\t\t} else {
\t\t\t\tthis.document.data( \"ui-dialog-overlays\", overlays );
\t\t\t}

\t\t\tthis.overlay.remove();
\t\t\tthis.overlay = null;
\t\t}
\t}
} );

// DEPRECATED
// TODO: switch return back to widget declaration at top of file when this is removed
if ( \$.uiBackCompat !== false ) {

\t// Backcompat for dialogClass option
\t\$.widget( \"ui.dialog\", \$.ui.dialog, {
\t\toptions: {
\t\t\tdialogClass: \"\"
\t\t},
\t\t_createWrapper: function() {
\t\t\tthis._super();
\t\t\tthis.uiDialog.addClass( this.options.dialogClass );
\t\t},
\t\t_setOption: function( key, value ) {
\t\t\tif ( key === \"dialogClass\" ) {
\t\t\t\tthis.uiDialog
\t\t\t\t\t.removeClass( this.options.dialogClass )
\t\t\t\t\t.addClass( value );
\t\t\t}
\t\t\tthis._superApply( arguments );
\t\t}
\t} );
}

var widgetsDialog = \$.ui.dialog;


/*!
 * jQuery UI Droppable 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Droppable
//>>group: Interactions
//>>description: Enables drop targets for draggable elements.
//>>docs: http://api.jqueryui.com/droppable/
//>>demos: http://jqueryui.com/droppable/



\$.widget( \"ui.droppable\", {
\tversion: \"1.12.1\",
\twidgetEventPrefix: \"drop\",
\toptions: {
\t\taccept: \"*\",
\t\taddClasses: true,
\t\tgreedy: false,
\t\tscope: \"default\",
\t\ttolerance: \"intersect\",

\t\t// Callbacks
\t\tactivate: null,
\t\tdeactivate: null,
\t\tdrop: null,
\t\tout: null,
\t\tover: null
\t},
\t_create: function() {

\t\tvar proportions,
\t\t\to = this.options,
\t\t\taccept = o.accept;

\t\tthis.isover = false;
\t\tthis.isout = true;

\t\tthis.accept = \$.isFunction( accept ) ? accept : function( d ) {
\t\t\treturn d.is( accept );
\t\t};

\t\tthis.proportions = function( /* valueToWrite */ ) {
\t\t\tif ( arguments.length ) {

\t\t\t\t// Store the droppable's proportions
\t\t\t\tproportions = arguments[ 0 ];
\t\t\t} else {

\t\t\t\t// Retrieve or derive the droppable's proportions
\t\t\t\treturn proportions ?
\t\t\t\t\tproportions :
\t\t\t\t\tproportions = {
\t\t\t\t\t\twidth: this.element[ 0 ].offsetWidth,
\t\t\t\t\t\theight: this.element[ 0 ].offsetHeight
\t\t\t\t\t};
\t\t\t}
\t\t};

\t\tthis._addToManager( o.scope );

\t\to.addClasses && this._addClass( \"ui-droppable\" );

\t},

\t_addToManager: function( scope ) {

\t\t// Add the reference and positions to the manager
\t\t\$.ui.ddmanager.droppables[ scope ] = \$.ui.ddmanager.droppables[ scope ] || [];
\t\t\$.ui.ddmanager.droppables[ scope ].push( this );
\t},

\t_splice: function( drop ) {
\t\tvar i = 0;
\t\tfor ( ; i < drop.length; i++ ) {
\t\t\tif ( drop[ i ] === this ) {
\t\t\t\tdrop.splice( i, 1 );
\t\t\t}
\t\t}
\t},

\t_destroy: function() {
\t\tvar drop = \$.ui.ddmanager.droppables[ this.options.scope ];

\t\tthis._splice( drop );
\t},

\t_setOption: function( key, value ) {

\t\tif ( key === \"accept\" ) {
\t\t\tthis.accept = \$.isFunction( value ) ? value : function( d ) {
\t\t\t\treturn d.is( value );
\t\t\t};
\t\t} else if ( key === \"scope\" ) {
\t\t\tvar drop = \$.ui.ddmanager.droppables[ this.options.scope ];

\t\t\tthis._splice( drop );
\t\t\tthis._addToManager( value );
\t\t}

\t\tthis._super( key, value );
\t},

\t_activate: function( event ) {
\t\tvar draggable = \$.ui.ddmanager.current;

\t\tthis._addActiveClass();
\t\tif ( draggable ) {
\t\t\tthis._trigger( \"activate\", event, this.ui( draggable ) );
\t\t}
\t},

\t_deactivate: function( event ) {
\t\tvar draggable = \$.ui.ddmanager.current;

\t\tthis._removeActiveClass();
\t\tif ( draggable ) {
\t\t\tthis._trigger( \"deactivate\", event, this.ui( draggable ) );
\t\t}
\t},

\t_over: function( event ) {

\t\tvar draggable = \$.ui.ddmanager.current;

\t\t// Bail if draggable and droppable are same element
\t\tif ( !draggable || ( draggable.currentItem ||
\t\t\t\tdraggable.element )[ 0 ] === this.element[ 0 ] ) {
\t\t\treturn;
\t\t}

\t\tif ( this.accept.call( this.element[ 0 ], ( draggable.currentItem ||
\t\t\t\tdraggable.element ) ) ) {
\t\t\tthis._addHoverClass();
\t\t\tthis._trigger( \"over\", event, this.ui( draggable ) );
\t\t}

\t},

\t_out: function( event ) {

\t\tvar draggable = \$.ui.ddmanager.current;

\t\t// Bail if draggable and droppable are same element
\t\tif ( !draggable || ( draggable.currentItem ||
\t\t\t\tdraggable.element )[ 0 ] === this.element[ 0 ] ) {
\t\t\treturn;
\t\t}

\t\tif ( this.accept.call( this.element[ 0 ], ( draggable.currentItem ||
\t\t\t\tdraggable.element ) ) ) {
\t\t\tthis._removeHoverClass();
\t\t\tthis._trigger( \"out\", event, this.ui( draggable ) );
\t\t}

\t},

\t_drop: function( event, custom ) {

\t\tvar draggable = custom || \$.ui.ddmanager.current,
\t\t\tchildrenIntersection = false;

\t\t// Bail if draggable and droppable are same element
\t\tif ( !draggable || ( draggable.currentItem ||
\t\t\t\tdraggable.element )[ 0 ] === this.element[ 0 ] ) {
\t\t\treturn false;
\t\t}

\t\tthis.element
\t\t\t.find( \":data(ui-droppable)\" )
\t\t\t.not( \".ui-draggable-dragging\" )
\t\t\t.each( function() {
\t\t\t\tvar inst = \$( this ).droppable( \"instance\" );
\t\t\t\tif (
\t\t\t\t\tinst.options.greedy &&
\t\t\t\t\t!inst.options.disabled &&
\t\t\t\t\tinst.options.scope === draggable.options.scope &&
\t\t\t\t\tinst.accept.call(
\t\t\t\t\t\tinst.element[ 0 ], ( draggable.currentItem || draggable.element )
\t\t\t\t\t) &&
\t\t\t\t\tintersect(
\t\t\t\t\t\tdraggable,
\t\t\t\t\t\t\$.extend( inst, { offset: inst.element.offset() } ),
\t\t\t\t\t\tinst.options.tolerance, event
\t\t\t\t\t)
\t\t\t\t) {
\t\t\t\t\tchildrenIntersection = true;
\t\t\t\t\treturn false; }
\t\t\t} );
\t\tif ( childrenIntersection ) {
\t\t\treturn false;
\t\t}

\t\tif ( this.accept.call( this.element[ 0 ],
\t\t\t\t( draggable.currentItem || draggable.element ) ) ) {
\t\t\tthis._removeActiveClass();
\t\t\tthis._removeHoverClass();

\t\t\tthis._trigger( \"drop\", event, this.ui( draggable ) );
\t\t\treturn this.element;
\t\t}

\t\treturn false;

\t},

\tui: function( c ) {
\t\treturn {
\t\t\tdraggable: ( c.currentItem || c.element ),
\t\t\thelper: c.helper,
\t\t\tposition: c.position,
\t\t\toffset: c.positionAbs
\t\t};
\t},

\t// Extension points just to make backcompat sane and avoid duplicating logic
\t// TODO: Remove in 1.13 along with call to it below
\t_addHoverClass: function() {
\t\tthis._addClass( \"ui-droppable-hover\" );
\t},

\t_removeHoverClass: function() {
\t\tthis._removeClass( \"ui-droppable-hover\" );
\t},

\t_addActiveClass: function() {
\t\tthis._addClass( \"ui-droppable-active\" );
\t},

\t_removeActiveClass: function() {
\t\tthis._removeClass( \"ui-droppable-active\" );
\t}
} );

var intersect = \$.ui.intersect = ( function() {
\tfunction isOverAxis( x, reference, size ) {
\t\treturn ( x >= reference ) && ( x < ( reference + size ) );
\t}

\treturn function( draggable, droppable, toleranceMode, event ) {

\t\tif ( !droppable.offset ) {
\t\t\treturn false;
\t\t}

\t\tvar x1 = ( draggable.positionAbs ||
\t\t\t\tdraggable.position.absolute ).left + draggable.margins.left,
\t\t\ty1 = ( draggable.positionAbs ||
\t\t\t\tdraggable.position.absolute ).top + draggable.margins.top,
\t\t\tx2 = x1 + draggable.helperProportions.width,
\t\t\ty2 = y1 + draggable.helperProportions.height,
\t\t\tl = droppable.offset.left,
\t\t\tt = droppable.offset.top,
\t\t\tr = l + droppable.proportions().width,
\t\t\tb = t + droppable.proportions().height;

\t\tswitch ( toleranceMode ) {
\t\tcase \"fit\":
\t\t\treturn ( l <= x1 && x2 <= r && t <= y1 && y2 <= b );
\t\tcase \"intersect\":
\t\t\treturn ( l < x1 + ( draggable.helperProportions.width / 2 ) && // Right Half
\t\t\t\tx2 - ( draggable.helperProportions.width / 2 ) < r && // Left Half
\t\t\t\tt < y1 + ( draggable.helperProportions.height / 2 ) && // Bottom Half
\t\t\t\ty2 - ( draggable.helperProportions.height / 2 ) < b ); // Top Half
\t\tcase \"pointer\":
\t\t\treturn isOverAxis( event.pageY, t, droppable.proportions().height ) &&
\t\t\t\tisOverAxis( event.pageX, l, droppable.proportions().width );
\t\tcase \"touch\":
\t\t\treturn (
\t\t\t\t( y1 >= t && y1 <= b ) || // Top edge touching
\t\t\t\t( y2 >= t && y2 <= b ) || // Bottom edge touching
\t\t\t\t( y1 < t && y2 > b ) // Surrounded vertically
\t\t\t) && (
\t\t\t\t( x1 >= l && x1 <= r ) || // Left edge touching
\t\t\t\t( x2 >= l && x2 <= r ) || // Right edge touching
\t\t\t\t( x1 < l && x2 > r ) // Surrounded horizontally
\t\t\t);
\t\tdefault:
\t\t\treturn false;
\t\t}
\t};
} )();

/*
\tThis manager tracks offsets of draggables and droppables
*/
\$.ui.ddmanager = {
\tcurrent: null,
\tdroppables: { \"default\": [] },
\tprepareOffsets: function( t, event ) {

\t\tvar i, j,
\t\t\tm = \$.ui.ddmanager.droppables[ t.options.scope ] || [],
\t\t\ttype = event ? event.type : null, // workaround for #2317
\t\t\tlist = ( t.currentItem || t.element ).find( \":data(ui-droppable)\" ).addBack();

\t\tdroppablesLoop: for ( i = 0; i < m.length; i++ ) {

\t\t\t// No disabled and non-accepted
\t\t\tif ( m[ i ].options.disabled || ( t && !m[ i ].accept.call( m[ i ].element[ 0 ],
\t\t\t\t\t( t.currentItem || t.element ) ) ) ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\t// Filter out elements in the current dragged item
\t\t\tfor ( j = 0; j < list.length; j++ ) {
\t\t\t\tif ( list[ j ] === m[ i ].element[ 0 ] ) {
\t\t\t\t\tm[ i ].proportions().height = 0;
\t\t\t\t\tcontinue droppablesLoop;
\t\t\t\t}
\t\t\t}

\t\t\tm[ i ].visible = m[ i ].element.css( \"display\" ) !== \"none\";
\t\t\tif ( !m[ i ].visible ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\t// Activate the droppable if used directly from draggables
\t\t\tif ( type === \"mousedown\" ) {
\t\t\t\tm[ i ]._activate.call( m[ i ], event );
\t\t\t}

\t\t\tm[ i ].offset = m[ i ].element.offset();
\t\t\tm[ i ].proportions( {
\t\t\t\twidth: m[ i ].element[ 0 ].offsetWidth,
\t\t\t\theight: m[ i ].element[ 0 ].offsetHeight
\t\t\t} );

\t\t}

\t},
\tdrop: function( draggable, event ) {

\t\tvar dropped = false;

\t\t// Create a copy of the droppables in case the list changes during the drop (#9116)
\t\t\$.each( ( \$.ui.ddmanager.droppables[ draggable.options.scope ] || [] ).slice(), function() {

\t\t\tif ( !this.options ) {
\t\t\t\treturn;
\t\t\t}
\t\t\tif ( !this.options.disabled && this.visible &&
\t\t\t\t\tintersect( draggable, this, this.options.tolerance, event ) ) {
\t\t\t\tdropped = this._drop.call( this, event ) || dropped;
\t\t\t}

\t\t\tif ( !this.options.disabled && this.visible && this.accept.call( this.element[ 0 ],
\t\t\t\t\t( draggable.currentItem || draggable.element ) ) ) {
\t\t\t\tthis.isout = true;
\t\t\t\tthis.isover = false;
\t\t\t\tthis._deactivate.call( this, event );
\t\t\t}

\t\t} );
\t\treturn dropped;

\t},
\tdragStart: function( draggable, event ) {

\t\t// Listen for scrolling so that if the dragging causes scrolling the position of the
\t\t// droppables can be recalculated (see #5003)
\t\tdraggable.element.parentsUntil( \"body\" ).on( \"scroll.droppable\", function() {
\t\t\tif ( !draggable.options.refreshPositions ) {
\t\t\t\t\$.ui.ddmanager.prepareOffsets( draggable, event );
\t\t\t}
\t\t} );
\t},
\tdrag: function( draggable, event ) {

\t\t// If you have a highly dynamic page, you might try this option. It renders positions
\t\t// every time you move the mouse.
\t\tif ( draggable.options.refreshPositions ) {
\t\t\t\$.ui.ddmanager.prepareOffsets( draggable, event );
\t\t}

\t\t// Run through all droppables and check their positions based on specific tolerance options
\t\t\$.each( \$.ui.ddmanager.droppables[ draggable.options.scope ] || [], function() {

\t\t\tif ( this.options.disabled || this.greedyChild || !this.visible ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tvar parentInstance, scope, parent,
\t\t\t\tintersects = intersect( draggable, this, this.options.tolerance, event ),
\t\t\t\tc = !intersects && this.isover ?
\t\t\t\t\t\"isout\" :
\t\t\t\t\t( intersects && !this.isover ? \"isover\" : null );
\t\t\tif ( !c ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( this.options.greedy ) {

\t\t\t\t// find droppable parents with same scope
\t\t\t\tscope = this.options.scope;
\t\t\t\tparent = this.element.parents( \":data(ui-droppable)\" ).filter( function() {
\t\t\t\t\treturn \$( this ).droppable( \"instance\" ).options.scope === scope;
\t\t\t\t} );

\t\t\t\tif ( parent.length ) {
\t\t\t\t\tparentInstance = \$( parent[ 0 ] ).droppable( \"instance\" );
\t\t\t\t\tparentInstance.greedyChild = ( c === \"isover\" );
\t\t\t\t}
\t\t\t}

\t\t\t// We just moved into a greedy child
\t\t\tif ( parentInstance && c === \"isover\" ) {
\t\t\t\tparentInstance.isover = false;
\t\t\t\tparentInstance.isout = true;
\t\t\t\tparentInstance._out.call( parentInstance, event );
\t\t\t}

\t\t\tthis[ c ] = true;
\t\t\tthis[ c === \"isout\" ? \"isover\" : \"isout\" ] = false;
\t\t\tthis[ c === \"isover\" ? \"_over\" : \"_out\" ].call( this, event );

\t\t\t// We just moved out of a greedy child
\t\t\tif ( parentInstance && c === \"isout\" ) {
\t\t\t\tparentInstance.isout = false;
\t\t\t\tparentInstance.isover = true;
\t\t\t\tparentInstance._over.call( parentInstance, event );
\t\t\t}
\t\t} );

\t},
\tdragStop: function( draggable, event ) {
\t\tdraggable.element.parentsUntil( \"body\" ).off( \"scroll.droppable\" );

\t\t// Call prepareOffsets one final time since IE does not fire return scroll events when
\t\t// overflow was caused by drag (see #5003)
\t\tif ( !draggable.options.refreshPositions ) {
\t\t\t\$.ui.ddmanager.prepareOffsets( draggable, event );
\t\t}
\t}
};

// DEPRECATED
// TODO: switch return back to widget declaration at top of file when this is removed
if ( \$.uiBackCompat !== false ) {

\t// Backcompat for activeClass and hoverClass options
\t\$.widget( \"ui.droppable\", \$.ui.droppable, {
\t\toptions: {
\t\t\thoverClass: false,
\t\t\tactiveClass: false
\t\t},
\t\t_addActiveClass: function() {
\t\t\tthis._super();
\t\t\tif ( this.options.activeClass ) {
\t\t\t\tthis.element.addClass( this.options.activeClass );
\t\t\t}
\t\t},
\t\t_removeActiveClass: function() {
\t\t\tthis._super();
\t\t\tif ( this.options.activeClass ) {
\t\t\t\tthis.element.removeClass( this.options.activeClass );
\t\t\t}
\t\t},
\t\t_addHoverClass: function() {
\t\t\tthis._super();
\t\t\tif ( this.options.hoverClass ) {
\t\t\t\tthis.element.addClass( this.options.hoverClass );
\t\t\t}
\t\t},
\t\t_removeHoverClass: function() {
\t\t\tthis._super();
\t\t\tif ( this.options.hoverClass ) {
\t\t\t\tthis.element.removeClass( this.options.hoverClass );
\t\t\t}
\t\t}
\t} );
}

var widgetsDroppable = \$.ui.droppable;


/*!
 * jQuery UI Progressbar 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Progressbar
//>>group: Widgets
// jscs:disable maximumLineLength
//>>description: Displays a status indicator for loading state, standard percentage, and other progress indicators.
// jscs:enable maximumLineLength
//>>docs: http://api.jqueryui.com/progressbar/
//>>demos: http://jqueryui.com/progressbar/
//>>css.structure: ../../themes/base/core.css
//>>css.structure: ../../themes/base/progressbar.css
//>>css.theme: ../../themes/base/theme.css



var widgetsProgressbar = \$.widget( \"ui.progressbar\", {
\tversion: \"1.12.1\",
\toptions: {
\t\tclasses: {
\t\t\t\"ui-progressbar\": \"ui-corner-all\",
\t\t\t\"ui-progressbar-value\": \"ui-corner-left\",
\t\t\t\"ui-progressbar-complete\": \"ui-corner-right\"
\t\t},
\t\tmax: 100,
\t\tvalue: 0,

\t\tchange: null,
\t\tcomplete: null
\t},

\tmin: 0,

\t_create: function() {

\t\t// Constrain initial value
\t\tthis.oldValue = this.options.value = this._constrainedValue();

\t\tthis.element.attr( {

\t\t\t// Only set static values; aria-valuenow and aria-valuemax are
\t\t\t// set inside _refreshValue()
\t\t\trole: \"progressbar\",
\t\t\t\"aria-valuemin\": this.min
\t\t} );
\t\tthis._addClass( \"ui-progressbar\", \"ui-widget ui-widget-content\" );

\t\tthis.valueDiv = \$( \"<div>\" ).appendTo( this.element );
\t\tthis._addClass( this.valueDiv, \"ui-progressbar-value\", \"ui-widget-header\" );
\t\tthis._refreshValue();
\t},

\t_destroy: function() {
\t\tthis.element.removeAttr( \"role aria-valuemin aria-valuemax aria-valuenow\" );

\t\tthis.valueDiv.remove();
\t},

\tvalue: function( newValue ) {
\t\tif ( newValue === undefined ) {
\t\t\treturn this.options.value;
\t\t}

\t\tthis.options.value = this._constrainedValue( newValue );
\t\tthis._refreshValue();
\t},

\t_constrainedValue: function( newValue ) {
\t\tif ( newValue === undefined ) {
\t\t\tnewValue = this.options.value;
\t\t}

\t\tthis.indeterminate = newValue === false;

\t\t// Sanitize value
\t\tif ( typeof newValue !== \"number\" ) {
\t\t\tnewValue = 0;
\t\t}

\t\treturn this.indeterminate ? false :
\t\t\tMath.min( this.options.max, Math.max( this.min, newValue ) );
\t},

\t_setOptions: function( options ) {

\t\t// Ensure \"value\" option is set after other values (like max)
\t\tvar value = options.value;
\t\tdelete options.value;

\t\tthis._super( options );

\t\tthis.options.value = this._constrainedValue( value );
\t\tthis._refreshValue();
\t},

\t_setOption: function( key, value ) {
\t\tif ( key === \"max\" ) {

\t\t\t// Don't allow a max less than min
\t\t\tvalue = Math.max( this.min, value );
\t\t}
\t\tthis._super( key, value );
\t},

\t_setOptionDisabled: function( value ) {
\t\tthis._super( value );

\t\tthis.element.attr( \"aria-disabled\", value );
\t\tthis._toggleClass( null, \"ui-state-disabled\", !!value );
\t},

\t_percentage: function() {
\t\treturn this.indeterminate ?
\t\t\t100 :
\t\t\t100 * ( this.options.value - this.min ) / ( this.options.max - this.min );
\t},

\t_refreshValue: function() {
\t\tvar value = this.options.value,
\t\t\tpercentage = this._percentage();

\t\tthis.valueDiv
\t\t\t.toggle( this.indeterminate || value > this.min )
\t\t\t.width( percentage.toFixed( 0 ) + \"%\" );

\t\tthis
\t\t\t._toggleClass( this.valueDiv, \"ui-progressbar-complete\", null,
\t\t\t\tvalue === this.options.max )
\t\t\t._toggleClass( \"ui-progressbar-indeterminate\", null, this.indeterminate );

\t\tif ( this.indeterminate ) {
\t\t\tthis.element.removeAttr( \"aria-valuenow\" );
\t\t\tif ( !this.overlayDiv ) {
\t\t\t\tthis.overlayDiv = \$( \"<div>\" ).appendTo( this.valueDiv );
\t\t\t\tthis._addClass( this.overlayDiv, \"ui-progressbar-overlay\" );
\t\t\t}
\t\t} else {
\t\t\tthis.element.attr( {
\t\t\t\t\"aria-valuemax\": this.options.max,
\t\t\t\t\"aria-valuenow\": value
\t\t\t} );
\t\t\tif ( this.overlayDiv ) {
\t\t\t\tthis.overlayDiv.remove();
\t\t\t\tthis.overlayDiv = null;
\t\t\t}
\t\t}

\t\tif ( this.oldValue !== value ) {
\t\t\tthis.oldValue = value;
\t\t\tthis._trigger( \"change\" );
\t\t}
\t\tif ( value === this.options.max ) {
\t\t\tthis._trigger( \"complete\" );
\t\t}
\t}
} );


/*!
 * jQuery UI Selectable 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Selectable
//>>group: Interactions
//>>description: Allows groups of elements to be selected with the mouse.
//>>docs: http://api.jqueryui.com/selectable/
//>>demos: http://jqueryui.com/selectable/
//>>css.structure: ../../themes/base/selectable.css



var widgetsSelectable = \$.widget( \"ui.selectable\", \$.ui.mouse, {
\tversion: \"1.12.1\",
\toptions: {
\t\tappendTo: \"body\",
\t\tautoRefresh: true,
\t\tdistance: 0,
\t\tfilter: \"*\",
\t\ttolerance: \"touch\",

\t\t// Callbacks
\t\tselected: null,
\t\tselecting: null,
\t\tstart: null,
\t\tstop: null,
\t\tunselected: null,
\t\tunselecting: null
\t},
\t_create: function() {
\t\tvar that = this;

\t\tthis._addClass( \"ui-selectable\" );

\t\tthis.dragged = false;

\t\t// Cache selectee children based on filter
\t\tthis.refresh = function() {
\t\t\tthat.elementPos = \$( that.element[ 0 ] ).offset();
\t\t\tthat.selectees = \$( that.options.filter, that.element[ 0 ] );
\t\t\tthat._addClass( that.selectees, \"ui-selectee\" );
\t\t\tthat.selectees.each( function() {
\t\t\t\tvar \$this = \$( this ),
\t\t\t\t\tselecteeOffset = \$this.offset(),
\t\t\t\t\tpos = {
\t\t\t\t\t\tleft: selecteeOffset.left - that.elementPos.left,
\t\t\t\t\t\ttop: selecteeOffset.top - that.elementPos.top
\t\t\t\t\t};
\t\t\t\t\$.data( this, \"selectable-item\", {
\t\t\t\t\telement: this,
\t\t\t\t\t\$element: \$this,
\t\t\t\t\tleft: pos.left,
\t\t\t\t\ttop: pos.top,
\t\t\t\t\tright: pos.left + \$this.outerWidth(),
\t\t\t\t\tbottom: pos.top + \$this.outerHeight(),
\t\t\t\t\tstartselected: false,
\t\t\t\t\tselected: \$this.hasClass( \"ui-selected\" ),
\t\t\t\t\tselecting: \$this.hasClass( \"ui-selecting\" ),
\t\t\t\t\tunselecting: \$this.hasClass( \"ui-unselecting\" )
\t\t\t\t} );
\t\t\t} );
\t\t};
\t\tthis.refresh();

\t\tthis._mouseInit();

\t\tthis.helper = \$( \"<div>\" );
\t\tthis._addClass( this.helper, \"ui-selectable-helper\" );
\t},

\t_destroy: function() {
\t\tthis.selectees.removeData( \"selectable-item\" );
\t\tthis._mouseDestroy();
\t},

\t_mouseStart: function( event ) {
\t\tvar that = this,
\t\t\toptions = this.options;

\t\tthis.opos = [ event.pageX, event.pageY ];
\t\tthis.elementPos = \$( this.element[ 0 ] ).offset();

\t\tif ( this.options.disabled ) {
\t\t\treturn;
\t\t}

\t\tthis.selectees = \$( options.filter, this.element[ 0 ] );

\t\tthis._trigger( \"start\", event );

\t\t\$( options.appendTo ).append( this.helper );

\t\t// position helper (lasso)
\t\tthis.helper.css( {
\t\t\t\"left\": event.pageX,
\t\t\t\"top\": event.pageY,
\t\t\t\"width\": 0,
\t\t\t\"height\": 0
\t\t} );

\t\tif ( options.autoRefresh ) {
\t\t\tthis.refresh();
\t\t}

\t\tthis.selectees.filter( \".ui-selected\" ).each( function() {
\t\t\tvar selectee = \$.data( this, \"selectable-item\" );
\t\t\tselectee.startselected = true;
\t\t\tif ( !event.metaKey && !event.ctrlKey ) {
\t\t\t\tthat._removeClass( selectee.\$element, \"ui-selected\" );
\t\t\t\tselectee.selected = false;
\t\t\t\tthat._addClass( selectee.\$element, \"ui-unselecting\" );
\t\t\t\tselectee.unselecting = true;

\t\t\t\t// selectable UNSELECTING callback
\t\t\t\tthat._trigger( \"unselecting\", event, {
\t\t\t\t\tunselecting: selectee.element
\t\t\t\t} );
\t\t\t}
\t\t} );

\t\t\$( event.target ).parents().addBack().each( function() {
\t\t\tvar doSelect,
\t\t\t\tselectee = \$.data( this, \"selectable-item\" );
\t\t\tif ( selectee ) {
\t\t\t\tdoSelect = ( !event.metaKey && !event.ctrlKey ) ||
\t\t\t\t\t!selectee.\$element.hasClass( \"ui-selected\" );
\t\t\t\tthat._removeClass( selectee.\$element, doSelect ? \"ui-unselecting\" : \"ui-selected\" )
\t\t\t\t\t._addClass( selectee.\$element, doSelect ? \"ui-selecting\" : \"ui-unselecting\" );
\t\t\t\tselectee.unselecting = !doSelect;
\t\t\t\tselectee.selecting = doSelect;
\t\t\t\tselectee.selected = doSelect;

\t\t\t\t// selectable (UN)SELECTING callback
\t\t\t\tif ( doSelect ) {
\t\t\t\t\tthat._trigger( \"selecting\", event, {
\t\t\t\t\t\tselecting: selectee.element
\t\t\t\t\t} );
\t\t\t\t} else {
\t\t\t\t\tthat._trigger( \"unselecting\", event, {
\t\t\t\t\t\tunselecting: selectee.element
\t\t\t\t\t} );
\t\t\t\t}
\t\t\t\treturn false;
\t\t\t}
\t\t} );

\t},

\t_mouseDrag: function( event ) {

\t\tthis.dragged = true;

\t\tif ( this.options.disabled ) {
\t\t\treturn;
\t\t}

\t\tvar tmp,
\t\t\tthat = this,
\t\t\toptions = this.options,
\t\t\tx1 = this.opos[ 0 ],
\t\t\ty1 = this.opos[ 1 ],
\t\t\tx2 = event.pageX,
\t\t\ty2 = event.pageY;

\t\tif ( x1 > x2 ) { tmp = x2; x2 = x1; x1 = tmp; }
\t\tif ( y1 > y2 ) { tmp = y2; y2 = y1; y1 = tmp; }
\t\tthis.helper.css( { left: x1, top: y1, width: x2 - x1, height: y2 - y1 } );

\t\tthis.selectees.each( function() {
\t\t\tvar selectee = \$.data( this, \"selectable-item\" ),
\t\t\t\thit = false,
\t\t\t\toffset = {};

\t\t\t//prevent helper from being selected if appendTo: selectable
\t\t\tif ( !selectee || selectee.element === that.element[ 0 ] ) {
\t\t\t\treturn;
\t\t\t}

\t\t\toffset.left   = selectee.left   + that.elementPos.left;
\t\t\toffset.right  = selectee.right  + that.elementPos.left;
\t\t\toffset.top    = selectee.top    + that.elementPos.top;
\t\t\toffset.bottom = selectee.bottom + that.elementPos.top;

\t\t\tif ( options.tolerance === \"touch\" ) {
\t\t\t\thit = ( !( offset.left > x2 || offset.right < x1 || offset.top > y2 ||
                    offset.bottom < y1 ) );
\t\t\t} else if ( options.tolerance === \"fit\" ) {
\t\t\t\thit = ( offset.left > x1 && offset.right < x2 && offset.top > y1 &&
                    offset.bottom < y2 );
\t\t\t}

\t\t\tif ( hit ) {

\t\t\t\t// SELECT
\t\t\t\tif ( selectee.selected ) {
\t\t\t\t\tthat._removeClass( selectee.\$element, \"ui-selected\" );
\t\t\t\t\tselectee.selected = false;
\t\t\t\t}
\t\t\t\tif ( selectee.unselecting ) {
\t\t\t\t\tthat._removeClass( selectee.\$element, \"ui-unselecting\" );
\t\t\t\t\tselectee.unselecting = false;
\t\t\t\t}
\t\t\t\tif ( !selectee.selecting ) {
\t\t\t\t\tthat._addClass( selectee.\$element, \"ui-selecting\" );
\t\t\t\t\tselectee.selecting = true;

\t\t\t\t\t// selectable SELECTING callback
\t\t\t\t\tthat._trigger( \"selecting\", event, {
\t\t\t\t\t\tselecting: selectee.element
\t\t\t\t\t} );
\t\t\t\t}
\t\t\t} else {

\t\t\t\t// UNSELECT
\t\t\t\tif ( selectee.selecting ) {
\t\t\t\t\tif ( ( event.metaKey || event.ctrlKey ) && selectee.startselected ) {
\t\t\t\t\t\tthat._removeClass( selectee.\$element, \"ui-selecting\" );
\t\t\t\t\t\tselectee.selecting = false;
\t\t\t\t\t\tthat._addClass( selectee.\$element, \"ui-selected\" );
\t\t\t\t\t\tselectee.selected = true;
\t\t\t\t\t} else {
\t\t\t\t\t\tthat._removeClass( selectee.\$element, \"ui-selecting\" );
\t\t\t\t\t\tselectee.selecting = false;
\t\t\t\t\t\tif ( selectee.startselected ) {
\t\t\t\t\t\t\tthat._addClass( selectee.\$element, \"ui-unselecting\" );
\t\t\t\t\t\t\tselectee.unselecting = true;
\t\t\t\t\t\t}

\t\t\t\t\t\t// selectable UNSELECTING callback
\t\t\t\t\t\tthat._trigger( \"unselecting\", event, {
\t\t\t\t\t\t\tunselecting: selectee.element
\t\t\t\t\t\t} );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tif ( selectee.selected ) {
\t\t\t\t\tif ( !event.metaKey && !event.ctrlKey && !selectee.startselected ) {
\t\t\t\t\t\tthat._removeClass( selectee.\$element, \"ui-selected\" );
\t\t\t\t\t\tselectee.selected = false;

\t\t\t\t\t\tthat._addClass( selectee.\$element, \"ui-unselecting\" );
\t\t\t\t\t\tselectee.unselecting = true;

\t\t\t\t\t\t// selectable UNSELECTING callback
\t\t\t\t\t\tthat._trigger( \"unselecting\", event, {
\t\t\t\t\t\t\tunselecting: selectee.element
\t\t\t\t\t\t} );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t} );

\t\treturn false;
\t},

\t_mouseStop: function( event ) {
\t\tvar that = this;

\t\tthis.dragged = false;

\t\t\$( \".ui-unselecting\", this.element[ 0 ] ).each( function() {
\t\t\tvar selectee = \$.data( this, \"selectable-item\" );
\t\t\tthat._removeClass( selectee.\$element, \"ui-unselecting\" );
\t\t\tselectee.unselecting = false;
\t\t\tselectee.startselected = false;
\t\t\tthat._trigger( \"unselected\", event, {
\t\t\t\tunselected: selectee.element
\t\t\t} );
\t\t} );
\t\t\$( \".ui-selecting\", this.element[ 0 ] ).each( function() {
\t\t\tvar selectee = \$.data( this, \"selectable-item\" );
\t\t\tthat._removeClass( selectee.\$element, \"ui-selecting\" )
\t\t\t\t._addClass( selectee.\$element, \"ui-selected\" );
\t\t\tselectee.selecting = false;
\t\t\tselectee.selected = true;
\t\t\tselectee.startselected = true;
\t\t\tthat._trigger( \"selected\", event, {
\t\t\t\tselected: selectee.element
\t\t\t} );
\t\t} );
\t\tthis._trigger( \"stop\", event );

\t\tthis.helper.remove();

\t\treturn false;
\t}

} );


/*!
 * jQuery UI Selectmenu 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Selectmenu
//>>group: Widgets
// jscs:disable maximumLineLength
//>>description: Duplicates and extends the functionality of a native HTML select element, allowing it to be customizable in behavior and appearance far beyond the limitations of a native select.
// jscs:enable maximumLineLength
//>>docs: http://api.jqueryui.com/selectmenu/
//>>demos: http://jqueryui.com/selectmenu/
//>>css.structure: ../../themes/base/core.css
//>>css.structure: ../../themes/base/selectmenu.css, ../../themes/base/button.css
//>>css.theme: ../../themes/base/theme.css



var widgetsSelectmenu = \$.widget( \"ui.selectmenu\", [ \$.ui.formResetMixin, {
\tversion: \"1.12.1\",
\tdefaultElement: \"<select>\",
\toptions: {
\t\tappendTo: null,
\t\tclasses: {
\t\t\t\"ui-selectmenu-button-open\": \"ui-corner-top\",
\t\t\t\"ui-selectmenu-button-closed\": \"ui-corner-all\"
\t\t},
\t\tdisabled: null,
\t\ticons: {
\t\t\tbutton: \"ui-icon-triangle-1-s\"
\t\t},
\t\tposition: {
\t\t\tmy: \"left top\",
\t\t\tat: \"left bottom\",
\t\t\tcollision: \"none\"
\t\t},
\t\twidth: false,

\t\t// Callbacks
\t\tchange: null,
\t\tclose: null,
\t\tfocus: null,
\t\topen: null,
\t\tselect: null
\t},

\t_create: function() {
\t\tvar selectmenuId = this.element.uniqueId().attr( \"id\" );
\t\tthis.ids = {
\t\t\telement: selectmenuId,
\t\t\tbutton: selectmenuId + \"-button\",
\t\t\tmenu: selectmenuId + \"-menu\"
\t\t};

\t\tthis._drawButton();
\t\tthis._drawMenu();
\t\tthis._bindFormResetHandler();

\t\tthis._rendered = false;
\t\tthis.menuItems = \$();
\t},

\t_drawButton: function() {
\t\tvar icon,
\t\t\tthat = this,
\t\t\titem = this._parseOption(
\t\t\t\tthis.element.find( \"option:selected\" ),
\t\t\t\tthis.element[ 0 ].selectedIndex
\t\t\t);

\t\t// Associate existing label with the new button
\t\tthis.labels = this.element.labels().attr( \"for\", this.ids.button );
\t\tthis._on( this.labels, {
\t\t\tclick: function( event ) {
\t\t\t\tthis.button.focus();
\t\t\t\tevent.preventDefault();
\t\t\t}
\t\t} );

\t\t// Hide original select element
\t\tthis.element.hide();

\t\t// Create button
\t\tthis.button = \$( \"<span>\", {
\t\t\ttabindex: this.options.disabled ? -1 : 0,
\t\t\tid: this.ids.button,
\t\t\trole: \"combobox\",
\t\t\t\"aria-expanded\": \"false\",
\t\t\t\"aria-autocomplete\": \"list\",
\t\t\t\"aria-owns\": this.ids.menu,
\t\t\t\"aria-haspopup\": \"true\",
\t\t\ttitle: this.element.attr( \"title\" )
\t\t} )
\t\t\t.insertAfter( this.element );

\t\tthis._addClass( this.button, \"ui-selectmenu-button ui-selectmenu-button-closed\",
\t\t\t\"ui-button ui-widget\" );

\t\ticon = \$( \"<span>\" ).appendTo( this.button );
\t\tthis._addClass( icon, \"ui-selectmenu-icon\", \"ui-icon \" + this.options.icons.button );
\t\tthis.buttonItem = this._renderButtonItem( item )
\t\t\t.appendTo( this.button );

\t\tif ( this.options.width !== false ) {
\t\t\tthis._resizeButton();
\t\t}

\t\tthis._on( this.button, this._buttonEvents );
\t\tthis.button.one( \"focusin\", function() {

\t\t\t// Delay rendering the menu items until the button receives focus.
\t\t\t// The menu may have already been rendered via a programmatic open.
\t\t\tif ( !that._rendered ) {
\t\t\t\tthat._refreshMenu();
\t\t\t}
\t\t} );
\t},

\t_drawMenu: function() {
\t\tvar that = this;

\t\t// Create menu
\t\tthis.menu = \$( \"<ul>\", {
\t\t\t\"aria-hidden\": \"true\",
\t\t\t\"aria-labelledby\": this.ids.button,
\t\t\tid: this.ids.menu
\t\t} );

\t\t// Wrap menu
\t\tthis.menuWrap = \$( \"<div>\" ).append( this.menu );
\t\tthis._addClass( this.menuWrap, \"ui-selectmenu-menu\", \"ui-front\" );
\t\tthis.menuWrap.appendTo( this._appendTo() );

\t\t// Initialize menu widget
\t\tthis.menuInstance = this.menu
\t\t\t.menu( {
\t\t\t\tclasses: {
\t\t\t\t\t\"ui-menu\": \"ui-corner-bottom\"
\t\t\t\t},
\t\t\t\trole: \"listbox\",
\t\t\t\tselect: function( event, ui ) {
\t\t\t\t\tevent.preventDefault();

\t\t\t\t\t// Support: IE8
\t\t\t\t\t// If the item was selected via a click, the text selection
\t\t\t\t\t// will be destroyed in IE
\t\t\t\t\tthat._setSelection();

\t\t\t\t\tthat._select( ui.item.data( \"ui-selectmenu-item\" ), event );
\t\t\t\t},
\t\t\t\tfocus: function( event, ui ) {
\t\t\t\t\tvar item = ui.item.data( \"ui-selectmenu-item\" );

\t\t\t\t\t// Prevent inital focus from firing and check if its a newly focused item
\t\t\t\t\tif ( that.focusIndex != null && item.index !== that.focusIndex ) {
\t\t\t\t\t\tthat._trigger( \"focus\", event, { item: item } );
\t\t\t\t\t\tif ( !that.isOpen ) {
\t\t\t\t\t\t\tthat._select( item, event );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tthat.focusIndex = item.index;

\t\t\t\t\tthat.button.attr( \"aria-activedescendant\",
\t\t\t\t\t\tthat.menuItems.eq( item.index ).attr( \"id\" ) );
\t\t\t\t}
\t\t\t} )
\t\t\t.menu( \"instance\" );

\t\t// Don't close the menu on mouseleave
\t\tthis.menuInstance._off( this.menu, \"mouseleave\" );

\t\t// Cancel the menu's collapseAll on document click
\t\tthis.menuInstance._closeOnDocumentClick = function() {
\t\t\treturn false;
\t\t};

\t\t// Selects often contain empty items, but never contain dividers
\t\tthis.menuInstance._isDivider = function() {
\t\t\treturn false;
\t\t};
\t},

\trefresh: function() {
\t\tthis._refreshMenu();
\t\tthis.buttonItem.replaceWith(
\t\t\tthis.buttonItem = this._renderButtonItem(

\t\t\t\t// Fall back to an empty object in case there are no options
\t\t\t\tthis._getSelectedItem().data( \"ui-selectmenu-item\" ) || {}
\t\t\t)
\t\t);
\t\tif ( this.options.width === null ) {
\t\t\tthis._resizeButton();
\t\t}
\t},

\t_refreshMenu: function() {
\t\tvar item,
\t\t\toptions = this.element.find( \"option\" );

\t\tthis.menu.empty();

\t\tthis._parseOptions( options );
\t\tthis._renderMenu( this.menu, this.items );

\t\tthis.menuInstance.refresh();
\t\tthis.menuItems = this.menu.find( \"li\" )
\t\t\t.not( \".ui-selectmenu-optgroup\" )
\t\t\t\t.find( \".ui-menu-item-wrapper\" );

\t\tthis._rendered = true;

\t\tif ( !options.length ) {
\t\t\treturn;
\t\t}

\t\titem = this._getSelectedItem();

\t\t// Update the menu to have the correct item focused
\t\tthis.menuInstance.focus( null, item );
\t\tthis._setAria( item.data( \"ui-selectmenu-item\" ) );

\t\t// Set disabled state
\t\tthis._setOption( \"disabled\", this.element.prop( \"disabled\" ) );
\t},

\topen: function( event ) {
\t\tif ( this.options.disabled ) {
\t\t\treturn;
\t\t}

\t\t// If this is the first time the menu is being opened, render the items
\t\tif ( !this._rendered ) {
\t\t\tthis._refreshMenu();
\t\t} else {

\t\t\t// Menu clears focus on close, reset focus to selected item
\t\t\tthis._removeClass( this.menu.find( \".ui-state-active\" ), null, \"ui-state-active\" );
\t\t\tthis.menuInstance.focus( null, this._getSelectedItem() );
\t\t}

\t\t// If there are no options, don't open the menu
\t\tif ( !this.menuItems.length ) {
\t\t\treturn;
\t\t}

\t\tthis.isOpen = true;
\t\tthis._toggleAttr();
\t\tthis._resizeMenu();
\t\tthis._position();

\t\tthis._on( this.document, this._documentClick );

\t\tthis._trigger( \"open\", event );
\t},

\t_position: function() {
\t\tthis.menuWrap.position( \$.extend( { of: this.button }, this.options.position ) );
\t},

\tclose: function( event ) {
\t\tif ( !this.isOpen ) {
\t\t\treturn;
\t\t}

\t\tthis.isOpen = false;
\t\tthis._toggleAttr();

\t\tthis.range = null;
\t\tthis._off( this.document );

\t\tthis._trigger( \"close\", event );
\t},

\twidget: function() {
\t\treturn this.button;
\t},

\tmenuWidget: function() {
\t\treturn this.menu;
\t},

\t_renderButtonItem: function( item ) {
\t\tvar buttonItem = \$( \"<span>\" );

\t\tthis._setText( buttonItem, item.label );
\t\tthis._addClass( buttonItem, \"ui-selectmenu-text\" );

\t\treturn buttonItem;
\t},

\t_renderMenu: function( ul, items ) {
\t\tvar that = this,
\t\t\tcurrentOptgroup = \"\";

\t\t\$.each( items, function( index, item ) {
\t\t\tvar li;

\t\t\tif ( item.optgroup !== currentOptgroup ) {
\t\t\t\tli = \$( \"<li>\", {
\t\t\t\t\ttext: item.optgroup
\t\t\t\t} );
\t\t\t\tthat._addClass( li, \"ui-selectmenu-optgroup\", \"ui-menu-divider\" +
\t\t\t\t\t( item.element.parent( \"optgroup\" ).prop( \"disabled\" ) ?
\t\t\t\t\t\t\" ui-state-disabled\" :
\t\t\t\t\t\t\"\" ) );

\t\t\t\tli.appendTo( ul );

\t\t\t\tcurrentOptgroup = item.optgroup;
\t\t\t}

\t\t\tthat._renderItemData( ul, item );
\t\t} );
\t},

\t_renderItemData: function( ul, item ) {
\t\treturn this._renderItem( ul, item ).data( \"ui-selectmenu-item\", item );
\t},

\t_renderItem: function( ul, item ) {
\t\tvar li = \$( \"<li>\" ),
\t\t\twrapper = \$( \"<div>\", {
\t\t\t\ttitle: item.element.attr( \"title\" )
\t\t\t} );

\t\tif ( item.disabled ) {
\t\t\tthis._addClass( li, null, \"ui-state-disabled\" );
\t\t}
\t\tthis._setText( wrapper, item.label );

\t\treturn li.append( wrapper ).appendTo( ul );
\t},

\t_setText: function( element, value ) {
\t\tif ( value ) {
\t\t\telement.text( value );
\t\t} else {
\t\t\telement.html( \"&#160;\" );
\t\t}
\t},

\t_move: function( direction, event ) {
\t\tvar item, next,
\t\t\tfilter = \".ui-menu-item\";

\t\tif ( this.isOpen ) {
\t\t\titem = this.menuItems.eq( this.focusIndex ).parent( \"li\" );
\t\t} else {
\t\t\titem = this.menuItems.eq( this.element[ 0 ].selectedIndex ).parent( \"li\" );
\t\t\tfilter += \":not(.ui-state-disabled)\";
\t\t}

\t\tif ( direction === \"first\" || direction === \"last\" ) {
\t\t\tnext = item[ direction === \"first\" ? \"prevAll\" : \"nextAll\" ]( filter ).eq( -1 );
\t\t} else {
\t\t\tnext = item[ direction + \"All\" ]( filter ).eq( 0 );
\t\t}

\t\tif ( next.length ) {
\t\t\tthis.menuInstance.focus( event, next );
\t\t}
\t},

\t_getSelectedItem: function() {
\t\treturn this.menuItems.eq( this.element[ 0 ].selectedIndex ).parent( \"li\" );
\t},

\t_toggle: function( event ) {
\t\tthis[ this.isOpen ? \"close\" : \"open\" ]( event );
\t},

\t_setSelection: function() {
\t\tvar selection;

\t\tif ( !this.range ) {
\t\t\treturn;
\t\t}

\t\tif ( window.getSelection ) {
\t\t\tselection = window.getSelection();
\t\t\tselection.removeAllRanges();
\t\t\tselection.addRange( this.range );

\t\t// Support: IE8
\t\t} else {
\t\t\tthis.range.select();
\t\t}

\t\t// Support: IE
\t\t// Setting the text selection kills the button focus in IE, but
\t\t// restoring the focus doesn't kill the selection.
\t\tthis.button.focus();
\t},

\t_documentClick: {
\t\tmousedown: function( event ) {
\t\t\tif ( !this.isOpen ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( !\$( event.target ).closest( \".ui-selectmenu-menu, #\" +
\t\t\t\t\t\$.ui.escapeSelector( this.ids.button ) ).length ) {
\t\t\t\tthis.close( event );
\t\t\t}
\t\t}
\t},

\t_buttonEvents: {

\t\t// Prevent text selection from being reset when interacting with the selectmenu (#10144)
\t\tmousedown: function() {
\t\t\tvar selection;

\t\t\tif ( window.getSelection ) {
\t\t\t\tselection = window.getSelection();
\t\t\t\tif ( selection.rangeCount ) {
\t\t\t\t\tthis.range = selection.getRangeAt( 0 );
\t\t\t\t}

\t\t\t// Support: IE8
\t\t\t} else {
\t\t\t\tthis.range = document.selection.createRange();
\t\t\t}
\t\t},

\t\tclick: function( event ) {
\t\t\tthis._setSelection();
\t\t\tthis._toggle( event );
\t\t},

\t\tkeydown: function( event ) {
\t\t\tvar preventDefault = true;
\t\t\tswitch ( event.keyCode ) {
\t\t\tcase \$.ui.keyCode.TAB:
\t\t\tcase \$.ui.keyCode.ESCAPE:
\t\t\t\tthis.close( event );
\t\t\t\tpreventDefault = false;
\t\t\t\tbreak;
\t\t\tcase \$.ui.keyCode.ENTER:
\t\t\t\tif ( this.isOpen ) {
\t\t\t\t\tthis._selectFocusedItem( event );
\t\t\t\t}
\t\t\t\tbreak;
\t\t\tcase \$.ui.keyCode.UP:
\t\t\t\tif ( event.altKey ) {
\t\t\t\t\tthis._toggle( event );
\t\t\t\t} else {
\t\t\t\t\tthis._move( \"prev\", event );
\t\t\t\t}
\t\t\t\tbreak;
\t\t\tcase \$.ui.keyCode.DOWN:
\t\t\t\tif ( event.altKey ) {
\t\t\t\t\tthis._toggle( event );
\t\t\t\t} else {
\t\t\t\t\tthis._move( \"next\", event );
\t\t\t\t}
\t\t\t\tbreak;
\t\t\tcase \$.ui.keyCode.SPACE:
\t\t\t\tif ( this.isOpen ) {
\t\t\t\t\tthis._selectFocusedItem( event );
\t\t\t\t} else {
\t\t\t\t\tthis._toggle( event );
\t\t\t\t}
\t\t\t\tbreak;
\t\t\tcase \$.ui.keyCode.LEFT:
\t\t\t\tthis._move( \"prev\", event );
\t\t\t\tbreak;
\t\t\tcase \$.ui.keyCode.RIGHT:
\t\t\t\tthis._move( \"next\", event );
\t\t\t\tbreak;
\t\t\tcase \$.ui.keyCode.HOME:
\t\t\tcase \$.ui.keyCode.PAGE_UP:
\t\t\t\tthis._move( \"first\", event );
\t\t\t\tbreak;
\t\t\tcase \$.ui.keyCode.END:
\t\t\tcase \$.ui.keyCode.PAGE_DOWN:
\t\t\t\tthis._move( \"last\", event );
\t\t\t\tbreak;
\t\t\tdefault:
\t\t\t\tthis.menu.trigger( event );
\t\t\t\tpreventDefault = false;
\t\t\t}

\t\t\tif ( preventDefault ) {
\t\t\t\tevent.preventDefault();
\t\t\t}
\t\t}
\t},

\t_selectFocusedItem: function( event ) {
\t\tvar item = this.menuItems.eq( this.focusIndex ).parent( \"li\" );
\t\tif ( !item.hasClass( \"ui-state-disabled\" ) ) {
\t\t\tthis._select( item.data( \"ui-selectmenu-item\" ), event );
\t\t}
\t},

\t_select: function( item, event ) {
\t\tvar oldIndex = this.element[ 0 ].selectedIndex;

\t\t// Change native select element
\t\tthis.element[ 0 ].selectedIndex = item.index;
\t\tthis.buttonItem.replaceWith( this.buttonItem = this._renderButtonItem( item ) );
\t\tthis._setAria( item );
\t\tthis._trigger( \"select\", event, { item: item } );

\t\tif ( item.index !== oldIndex ) {
\t\t\tthis._trigger( \"change\", event, { item: item } );
\t\t}

\t\tthis.close( event );
\t},

\t_setAria: function( item ) {
\t\tvar id = this.menuItems.eq( item.index ).attr( \"id\" );

\t\tthis.button.attr( {
\t\t\t\"aria-labelledby\": id,
\t\t\t\"aria-activedescendant\": id
\t\t} );
\t\tthis.menu.attr( \"aria-activedescendant\", id );
\t},

\t_setOption: function( key, value ) {
\t\tif ( key === \"icons\" ) {
\t\t\tvar icon = this.button.find( \"span.ui-icon\" );
\t\t\tthis._removeClass( icon, null, this.options.icons.button )
\t\t\t\t._addClass( icon, null, value.button );
\t\t}

\t\tthis._super( key, value );

\t\tif ( key === \"appendTo\" ) {
\t\t\tthis.menuWrap.appendTo( this._appendTo() );
\t\t}

\t\tif ( key === \"width\" ) {
\t\t\tthis._resizeButton();
\t\t}
\t},

\t_setOptionDisabled: function( value ) {
\t\tthis._super( value );

\t\tthis.menuInstance.option( \"disabled\", value );
\t\tthis.button.attr( \"aria-disabled\", value );
\t\tthis._toggleClass( this.button, null, \"ui-state-disabled\", value );

\t\tthis.element.prop( \"disabled\", value );
\t\tif ( value ) {
\t\t\tthis.button.attr( \"tabindex\", -1 );
\t\t\tthis.close();
\t\t} else {
\t\t\tthis.button.attr( \"tabindex\", 0 );
\t\t}
\t},

\t_appendTo: function() {
\t\tvar element = this.options.appendTo;

\t\tif ( element ) {
\t\t\telement = element.jquery || element.nodeType ?
\t\t\t\t\$( element ) :
\t\t\t\tthis.document.find( element ).eq( 0 );
\t\t}

\t\tif ( !element || !element[ 0 ] ) {
\t\t\telement = this.element.closest( \".ui-front, dialog\" );
\t\t}

\t\tif ( !element.length ) {
\t\t\telement = this.document[ 0 ].body;
\t\t}

\t\treturn element;
\t},

\t_toggleAttr: function() {
\t\tthis.button.attr( \"aria-expanded\", this.isOpen );

\t\t// We can't use two _toggleClass() calls here, because we need to make sure
\t\t// we always remove classes first and add them second, otherwise if both classes have the
\t\t// same theme class, it will be removed after we add it.
\t\tthis._removeClass( this.button, \"ui-selectmenu-button-\" +
\t\t\t( this.isOpen ? \"closed\" : \"open\" ) )
\t\t\t._addClass( this.button, \"ui-selectmenu-button-\" +
\t\t\t\t( this.isOpen ? \"open\" : \"closed\" ) )
\t\t\t._toggleClass( this.menuWrap, \"ui-selectmenu-open\", null, this.isOpen );

\t\tthis.menu.attr( \"aria-hidden\", !this.isOpen );
\t},

\t_resizeButton: function() {
\t\tvar width = this.options.width;

\t\t// For `width: false`, just remove inline style and stop
\t\tif ( width === false ) {
\t\t\tthis.button.css( \"width\", \"\" );
\t\t\treturn;
\t\t}

\t\t// For `width: null`, match the width of the original element
\t\tif ( width === null ) {
\t\t\twidth = this.element.show().outerWidth();
\t\t\tthis.element.hide();
\t\t}

\t\tthis.button.outerWidth( width );
\t},

\t_resizeMenu: function() {
\t\tthis.menu.outerWidth( Math.max(
\t\t\tthis.button.outerWidth(),

\t\t\t// Support: IE10
\t\t\t// IE10 wraps long text (possibly a rounding bug)
\t\t\t// so we add 1px to avoid the wrapping
\t\t\tthis.menu.width( \"\" ).outerWidth() + 1
\t\t) );
\t},

\t_getCreateOptions: function() {
\t\tvar options = this._super();

\t\toptions.disabled = this.element.prop( \"disabled\" );

\t\treturn options;
\t},

\t_parseOptions: function( options ) {
\t\tvar that = this,
\t\t\tdata = [];
\t\toptions.each( function( index, item ) {
\t\t\tdata.push( that._parseOption( \$( item ), index ) );
\t\t} );
\t\tthis.items = data;
\t},

\t_parseOption: function( option, index ) {
\t\tvar optgroup = option.parent( \"optgroup\" );

\t\treturn {
\t\t\telement: option,
\t\t\tindex: index,
\t\t\tvalue: option.val(),
\t\t\tlabel: option.text(),
\t\t\toptgroup: optgroup.attr( \"label\" ) || \"\",
\t\t\tdisabled: optgroup.prop( \"disabled\" ) || option.prop( \"disabled\" )
\t\t};
\t},

\t_destroy: function() {
\t\tthis._unbindFormResetHandler();
\t\tthis.menuWrap.remove();
\t\tthis.button.remove();
\t\tthis.element.show();
\t\tthis.element.removeUniqueId();
\t\tthis.labels.attr( \"for\", this.ids.element );
\t}
} ] );


/*!
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



var widgetsSlider = \$.widget( \"ui.slider\", \$.ui.mouse, {
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


/*!
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



var widgetsSortable = \$.widget( \"ui.sortable\", \$.ui.mouse, {
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


/*!
 * jQuery UI Spinner 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Spinner
//>>group: Widgets
//>>description: Displays buttons to easily input numbers via the keyboard or mouse.
//>>docs: http://api.jqueryui.com/spinner/
//>>demos: http://jqueryui.com/spinner/
//>>css.structure: ../../themes/base/core.css
//>>css.structure: ../../themes/base/spinner.css
//>>css.theme: ../../themes/base/theme.css



function spinnerModifer( fn ) {
\treturn function() {
\t\tvar previous = this.element.val();
\t\tfn.apply( this, arguments );
\t\tthis._refresh();
\t\tif ( previous !== this.element.val() ) {
\t\t\tthis._trigger( \"change\" );
\t\t}
\t};
}

\$.widget( \"ui.spinner\", {
\tversion: \"1.12.1\",
\tdefaultElement: \"<input>\",
\twidgetEventPrefix: \"spin\",
\toptions: {
\t\tclasses: {
\t\t\t\"ui-spinner\": \"ui-corner-all\",
\t\t\t\"ui-spinner-down\": \"ui-corner-br\",
\t\t\t\"ui-spinner-up\": \"ui-corner-tr\"
\t\t},
\t\tculture: null,
\t\ticons: {
\t\t\tdown: \"ui-icon-triangle-1-s\",
\t\t\tup: \"ui-icon-triangle-1-n\"
\t\t},
\t\tincremental: true,
\t\tmax: null,
\t\tmin: null,
\t\tnumberFormat: null,
\t\tpage: 10,
\t\tstep: 1,

\t\tchange: null,
\t\tspin: null,
\t\tstart: null,
\t\tstop: null
\t},

\t_create: function() {

\t\t// handle string values that need to be parsed
\t\tthis._setOption( \"max\", this.options.max );
\t\tthis._setOption( \"min\", this.options.min );
\t\tthis._setOption( \"step\", this.options.step );

\t\t// Only format if there is a value, prevents the field from being marked
\t\t// as invalid in Firefox, see #9573.
\t\tif ( this.value() !== \"\" ) {

\t\t\t// Format the value, but don't constrain.
\t\t\tthis._value( this.element.val(), true );
\t\t}

\t\tthis._draw();
\t\tthis._on( this._events );
\t\tthis._refresh();

\t\t// Turning off autocomplete prevents the browser from remembering the
\t\t// value when navigating through history, so we re-enable autocomplete
\t\t// if the page is unloaded before the widget is destroyed. #7790
\t\tthis._on( this.window, {
\t\t\tbeforeunload: function() {
\t\t\t\tthis.element.removeAttr( \"autocomplete\" );
\t\t\t}
\t\t} );
\t},

\t_getCreateOptions: function() {
\t\tvar options = this._super();
\t\tvar element = this.element;

\t\t\$.each( [ \"min\", \"max\", \"step\" ], function( i, option ) {
\t\t\tvar value = element.attr( option );
\t\t\tif ( value != null && value.length ) {
\t\t\t\toptions[ option ] = value;
\t\t\t}
\t\t} );

\t\treturn options;
\t},

\t_events: {
\t\tkeydown: function( event ) {
\t\t\tif ( this._start( event ) && this._keydown( event ) ) {
\t\t\t\tevent.preventDefault();
\t\t\t}
\t\t},
\t\tkeyup: \"_stop\",
\t\tfocus: function() {
\t\t\tthis.previous = this.element.val();
\t\t},
\t\tblur: function( event ) {
\t\t\tif ( this.cancelBlur ) {
\t\t\t\tdelete this.cancelBlur;
\t\t\t\treturn;
\t\t\t}

\t\t\tthis._stop();
\t\t\tthis._refresh();
\t\t\tif ( this.previous !== this.element.val() ) {
\t\t\t\tthis._trigger( \"change\", event );
\t\t\t}
\t\t},
\t\tmousewheel: function( event, delta ) {
\t\t\tif ( !delta ) {
\t\t\t\treturn;
\t\t\t}
\t\t\tif ( !this.spinning && !this._start( event ) ) {
\t\t\t\treturn false;
\t\t\t}

\t\t\tthis._spin( ( delta > 0 ? 1 : -1 ) * this.options.step, event );
\t\t\tclearTimeout( this.mousewheelTimer );
\t\t\tthis.mousewheelTimer = this._delay( function() {
\t\t\t\tif ( this.spinning ) {
\t\t\t\t\tthis._stop( event );
\t\t\t\t}
\t\t\t}, 100 );
\t\t\tevent.preventDefault();
\t\t},
\t\t\"mousedown .ui-spinner-button\": function( event ) {
\t\t\tvar previous;

\t\t\t// We never want the buttons to have focus; whenever the user is
\t\t\t// interacting with the spinner, the focus should be on the input.
\t\t\t// If the input is focused then this.previous is properly set from
\t\t\t// when the input first received focus. If the input is not focused
\t\t\t// then we need to set this.previous based on the value before spinning.
\t\t\tprevious = this.element[ 0 ] === \$.ui.safeActiveElement( this.document[ 0 ] ) ?
\t\t\t\tthis.previous : this.element.val();
\t\t\tfunction checkFocus() {
\t\t\t\tvar isActive = this.element[ 0 ] === \$.ui.safeActiveElement( this.document[ 0 ] );
\t\t\t\tif ( !isActive ) {
\t\t\t\t\tthis.element.trigger( \"focus\" );
\t\t\t\t\tthis.previous = previous;

\t\t\t\t\t// support: IE
\t\t\t\t\t// IE sets focus asynchronously, so we need to check if focus
\t\t\t\t\t// moved off of the input because the user clicked on the button.
\t\t\t\t\tthis._delay( function() {
\t\t\t\t\t\tthis.previous = previous;
\t\t\t\t\t} );
\t\t\t\t}
\t\t\t}

\t\t\t// Ensure focus is on (or stays on) the text field
\t\t\tevent.preventDefault();
\t\t\tcheckFocus.call( this );

\t\t\t// Support: IE
\t\t\t// IE doesn't prevent moving focus even with event.preventDefault()
\t\t\t// so we set a flag to know when we should ignore the blur event
\t\t\t// and check (again) if focus moved off of the input.
\t\t\tthis.cancelBlur = true;
\t\t\tthis._delay( function() {
\t\t\t\tdelete this.cancelBlur;
\t\t\t\tcheckFocus.call( this );
\t\t\t} );

\t\t\tif ( this._start( event ) === false ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tthis._repeat( null, \$( event.currentTarget )
\t\t\t\t.hasClass( \"ui-spinner-up\" ) ? 1 : -1, event );
\t\t},
\t\t\"mouseup .ui-spinner-button\": \"_stop\",
\t\t\"mouseenter .ui-spinner-button\": function( event ) {

\t\t\t// button will add ui-state-active if mouse was down while mouseleave and kept down
\t\t\tif ( !\$( event.currentTarget ).hasClass( \"ui-state-active\" ) ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( this._start( event ) === false ) {
\t\t\t\treturn false;
\t\t\t}
\t\t\tthis._repeat( null, \$( event.currentTarget )
\t\t\t\t.hasClass( \"ui-spinner-up\" ) ? 1 : -1, event );
\t\t},

\t\t// TODO: do we really want to consider this a stop?
\t\t// shouldn't we just stop the repeater and wait until mouseup before
\t\t// we trigger the stop event?
\t\t\"mouseleave .ui-spinner-button\": \"_stop\"
\t},

\t// Support mobile enhanced option and make backcompat more sane
\t_enhance: function() {
\t\tthis.uiSpinner = this.element
\t\t\t.attr( \"autocomplete\", \"off\" )
\t\t\t.wrap( \"<span>\" )
\t\t\t.parent()

\t\t\t\t// Add buttons
\t\t\t\t.append(
\t\t\t\t\t\"<a></a><a></a>\"
\t\t\t\t);
\t},

\t_draw: function() {
\t\tthis._enhance();

\t\tthis._addClass( this.uiSpinner, \"ui-spinner\", \"ui-widget ui-widget-content\" );
\t\tthis._addClass( \"ui-spinner-input\" );

\t\tthis.element.attr( \"role\", \"spinbutton\" );

\t\t// Button bindings
\t\tthis.buttons = this.uiSpinner.children( \"a\" )
\t\t\t.attr( \"tabIndex\", -1 )
\t\t\t.attr( \"aria-hidden\", true )
\t\t\t.button( {
\t\t\t\tclasses: {
\t\t\t\t\t\"ui-button\": \"\"
\t\t\t\t}
\t\t\t} );

\t\t// TODO: Right now button does not support classes this is already updated in button PR
\t\tthis._removeClass( this.buttons, \"ui-corner-all\" );

\t\tthis._addClass( this.buttons.first(), \"ui-spinner-button ui-spinner-up\" );
\t\tthis._addClass( this.buttons.last(), \"ui-spinner-button ui-spinner-down\" );
\t\tthis.buttons.first().button( {
\t\t\t\"icon\": this.options.icons.up,
\t\t\t\"showLabel\": false
\t\t} );
\t\tthis.buttons.last().button( {
\t\t\t\"icon\": this.options.icons.down,
\t\t\t\"showLabel\": false
\t\t} );

\t\t// IE 6 doesn't understand height: 50% for the buttons
\t\t// unless the wrapper has an explicit height
\t\tif ( this.buttons.height() > Math.ceil( this.uiSpinner.height() * 0.5 ) &&
\t\t\t\tthis.uiSpinner.height() > 0 ) {
\t\t\tthis.uiSpinner.height( this.uiSpinner.height() );
\t\t}
\t},

\t_keydown: function( event ) {
\t\tvar options = this.options,
\t\t\tkeyCode = \$.ui.keyCode;

\t\tswitch ( event.keyCode ) {
\t\tcase keyCode.UP:
\t\t\tthis._repeat( null, 1, event );
\t\t\treturn true;
\t\tcase keyCode.DOWN:
\t\t\tthis._repeat( null, -1, event );
\t\t\treturn true;
\t\tcase keyCode.PAGE_UP:
\t\t\tthis._repeat( null, options.page, event );
\t\t\treturn true;
\t\tcase keyCode.PAGE_DOWN:
\t\t\tthis._repeat( null, -options.page, event );
\t\t\treturn true;
\t\t}

\t\treturn false;
\t},

\t_start: function( event ) {
\t\tif ( !this.spinning && this._trigger( \"start\", event ) === false ) {
\t\t\treturn false;
\t\t}

\t\tif ( !this.counter ) {
\t\t\tthis.counter = 1;
\t\t}
\t\tthis.spinning = true;
\t\treturn true;
\t},

\t_repeat: function( i, steps, event ) {
\t\ti = i || 500;

\t\tclearTimeout( this.timer );
\t\tthis.timer = this._delay( function() {
\t\t\tthis._repeat( 40, steps, event );
\t\t}, i );

\t\tthis._spin( steps * this.options.step, event );
\t},

\t_spin: function( step, event ) {
\t\tvar value = this.value() || 0;

\t\tif ( !this.counter ) {
\t\t\tthis.counter = 1;
\t\t}

\t\tvalue = this._adjustValue( value + step * this._increment( this.counter ) );

\t\tif ( !this.spinning || this._trigger( \"spin\", event, { value: value } ) !== false ) {
\t\t\tthis._value( value );
\t\t\tthis.counter++;
\t\t}
\t},

\t_increment: function( i ) {
\t\tvar incremental = this.options.incremental;

\t\tif ( incremental ) {
\t\t\treturn \$.isFunction( incremental ) ?
\t\t\t\tincremental( i ) :
\t\t\t\tMath.floor( i * i * i / 50000 - i * i / 500 + 17 * i / 200 + 1 );
\t\t}

\t\treturn 1;
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

\t_adjustValue: function( value ) {
\t\tvar base, aboveMin,
\t\t\toptions = this.options;

\t\t// Make sure we're at a valid step
\t\t// - find out where we are relative to the base (min or 0)
\t\tbase = options.min !== null ? options.min : 0;
\t\taboveMin = value - base;

\t\t// - round to the nearest step
\t\taboveMin = Math.round( aboveMin / options.step ) * options.step;

\t\t// - rounding is based on 0, so adjust back to our base
\t\tvalue = base + aboveMin;

\t\t// Fix precision from bad JS floating point math
\t\tvalue = parseFloat( value.toFixed( this._precision() ) );

\t\t// Clamp the value
\t\tif ( options.max !== null && value > options.max ) {
\t\t\treturn options.max;
\t\t}
\t\tif ( options.min !== null && value < options.min ) {
\t\t\treturn options.min;
\t\t}

\t\treturn value;
\t},

\t_stop: function( event ) {
\t\tif ( !this.spinning ) {
\t\t\treturn;
\t\t}

\t\tclearTimeout( this.timer );
\t\tclearTimeout( this.mousewheelTimer );
\t\tthis.counter = 0;
\t\tthis.spinning = false;
\t\tthis._trigger( \"stop\", event );
\t},

\t_setOption: function( key, value ) {
\t\tvar prevValue, first, last;

\t\tif ( key === \"culture\" || key === \"numberFormat\" ) {
\t\t\tprevValue = this._parse( this.element.val() );
\t\t\tthis.options[ key ] = value;
\t\t\tthis.element.val( this._format( prevValue ) );
\t\t\treturn;
\t\t}

\t\tif ( key === \"max\" || key === \"min\" || key === \"step\" ) {
\t\t\tif ( typeof value === \"string\" ) {
\t\t\t\tvalue = this._parse( value );
\t\t\t}
\t\t}
\t\tif ( key === \"icons\" ) {
\t\t\tfirst = this.buttons.first().find( \".ui-icon\" );
\t\t\tthis._removeClass( first, null, this.options.icons.up );
\t\t\tthis._addClass( first, null, value.up );
\t\t\tlast = this.buttons.last().find( \".ui-icon\" );
\t\t\tthis._removeClass( last, null, this.options.icons.down );
\t\t\tthis._addClass( last, null, value.down );
\t\t}

\t\tthis._super( key, value );
\t},

\t_setOptionDisabled: function( value ) {
\t\tthis._super( value );

\t\tthis._toggleClass( this.uiSpinner, null, \"ui-state-disabled\", !!value );
\t\tthis.element.prop( \"disabled\", !!value );
\t\tthis.buttons.button( value ? \"disable\" : \"enable\" );
\t},

\t_setOptions: spinnerModifer( function( options ) {
\t\tthis._super( options );
\t} ),

\t_parse: function( val ) {
\t\tif ( typeof val === \"string\" && val !== \"\" ) {
\t\t\tval = window.Globalize && this.options.numberFormat ?
\t\t\t\tGlobalize.parseFloat( val, 10, this.options.culture ) : +val;
\t\t}
\t\treturn val === \"\" || isNaN( val ) ? null : val;
\t},

\t_format: function( value ) {
\t\tif ( value === \"\" ) {
\t\t\treturn \"\";
\t\t}
\t\treturn window.Globalize && this.options.numberFormat ?
\t\t\tGlobalize.format( value, this.options.numberFormat, this.options.culture ) :
\t\t\tvalue;
\t},

\t_refresh: function() {
\t\tthis.element.attr( {
\t\t\t\"aria-valuemin\": this.options.min,
\t\t\t\"aria-valuemax\": this.options.max,

\t\t\t// TODO: what should we do with values that can't be parsed?
\t\t\t\"aria-valuenow\": this._parse( this.element.val() )
\t\t} );
\t},

\tisValid: function() {
\t\tvar value = this.value();

\t\t// Null is invalid
\t\tif ( value === null ) {
\t\t\treturn false;
\t\t}

\t\t// If value gets adjusted, it's invalid
\t\treturn value === this._adjustValue( value );
\t},

\t// Update the value without triggering change
\t_value: function( value, allowAny ) {
\t\tvar parsed;
\t\tif ( value !== \"\" ) {
\t\t\tparsed = this._parse( value );
\t\t\tif ( parsed !== null ) {
\t\t\t\tif ( !allowAny ) {
\t\t\t\t\tparsed = this._adjustValue( parsed );
\t\t\t\t}
\t\t\t\tvalue = this._format( parsed );
\t\t\t}
\t\t}
\t\tthis.element.val( value );
\t\tthis._refresh();
\t},

\t_destroy: function() {
\t\tthis.element
\t\t\t.prop( \"disabled\", false )
\t\t\t.removeAttr( \"autocomplete role aria-valuemin aria-valuemax aria-valuenow\" );

\t\tthis.uiSpinner.replaceWith( this.element );
\t},

\tstepUp: spinnerModifer( function( steps ) {
\t\tthis._stepUp( steps );
\t} ),
\t_stepUp: function( steps ) {
\t\tif ( this._start() ) {
\t\t\tthis._spin( ( steps || 1 ) * this.options.step );
\t\t\tthis._stop();
\t\t}
\t},

\tstepDown: spinnerModifer( function( steps ) {
\t\tthis._stepDown( steps );
\t} ),
\t_stepDown: function( steps ) {
\t\tif ( this._start() ) {
\t\t\tthis._spin( ( steps || 1 ) * -this.options.step );
\t\t\tthis._stop();
\t\t}
\t},

\tpageUp: spinnerModifer( function( pages ) {
\t\tthis._stepUp( ( pages || 1 ) * this.options.page );
\t} ),

\tpageDown: spinnerModifer( function( pages ) {
\t\tthis._stepDown( ( pages || 1 ) * this.options.page );
\t} ),

\tvalue: function( newVal ) {
\t\tif ( !arguments.length ) {
\t\t\treturn this._parse( this.element.val() );
\t\t}
\t\tspinnerModifer( this._value ).call( this, newVal );
\t},

\twidget: function() {
\t\treturn this.uiSpinner;
\t}
} );

// DEPRECATED
// TODO: switch return back to widget declaration at top of file when this is removed
if ( \$.uiBackCompat !== false ) {

\t// Backcompat for spinner html extension points
\t\$.widget( \"ui.spinner\", \$.ui.spinner, {
\t\t_enhance: function() {
\t\t\tthis.uiSpinner = this.element
\t\t\t\t.attr( \"autocomplete\", \"off\" )
\t\t\t\t.wrap( this._uiSpinnerHtml() )
\t\t\t\t.parent()

\t\t\t\t\t// Add buttons
\t\t\t\t\t.append( this._buttonHtml() );
\t\t},
\t\t_uiSpinnerHtml: function() {
\t\t\treturn \"<span>\";
\t\t},

\t\t_buttonHtml: function() {
\t\t\treturn \"<a></a><a></a>\";
\t\t}
\t} );
}

var widgetsSpinner = \$.ui.spinner;


/*!
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

var widgetsTabs = \$.ui.tabs;


/*!
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

var widgetsTooltip = \$.ui.tooltip;




}));";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/jquery-ui-built.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/jquery-ui-built.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/jquery-ui-built.js");
    }
}
