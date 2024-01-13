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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/controlgroup.js */
class __TwigTemplate_e69a3ca7e63e12af9f664847983055c8d6db043ba83f35e6a44718dc34c158d9 extends Template
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

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"../widget\"
\t\t], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {
var controlgroupCornerRegex = /ui-corner-([a-z]){2,6}/g;

return \$.widget( \"ui.controlgroup\", {
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
} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/controlgroup.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/controlgroup.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/controlgroup.js");
    }
}
