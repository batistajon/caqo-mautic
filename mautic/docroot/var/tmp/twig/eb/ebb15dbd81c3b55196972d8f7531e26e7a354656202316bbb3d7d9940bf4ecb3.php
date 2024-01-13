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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/button.js */
class __TwigTemplate_10b413692323ba53aceabb8df83eb65bdcf5dc56fd2ca7c1273fb6c3df9b1a72 extends Template
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

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",

\t\t\t// These are only for backcompat
\t\t\t// TODO: Remove after 1.12
\t\t\t\"./controlgroup\",
\t\t\t\"./checkboxradio\",

\t\t\t\"../keycode\",
\t\t\t\"../widget\"
\t\t], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

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

return \$.ui.button;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/button.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/button.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/button.js");
    }
}
