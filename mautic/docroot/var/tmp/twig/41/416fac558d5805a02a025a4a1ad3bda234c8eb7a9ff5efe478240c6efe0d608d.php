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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/datepicker.js */
class __TwigTemplate_8d8ca39e43d9ccc864513a8b8d32a847aed82a109cb8938a7d74f9c024113a4a extends Template
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
        echo "// jscs:disable maximumLineLength
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

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"../version\",
\t\t\t\"../keycode\"
\t\t], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

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

return \$.datepicker;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/datepicker.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/datepicker.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/datepicker.js");
    }
}
