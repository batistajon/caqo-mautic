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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/spinner.js */
class __TwigTemplate_5724c1b0bfd656faf4cdc565dc6832c2aa7d0faf8b0354bee2b2c4686c8f7671 extends Template
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

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"./button\",
\t\t\t\"../version\",
\t\t\t\"../keycode\",
\t\t\t\"../safe-active-element\",
\t\t\t\"../widget\"
\t\t], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

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

return \$.ui.spinner;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/spinner.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/spinner.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/spinner.js");
    }
}
