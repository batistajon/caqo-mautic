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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/progressbar.js */
class __TwigTemplate_dc42afeae4e90d68c57061909f8960ed663e365be5cab58aef2006a3535a23b1 extends Template
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

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"../version\",
\t\t\t\"../widget\"
\t\t], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

return \$.widget( \"ui.progressbar\", {
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

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/progressbar.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/progressbar.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/progressbar.js");
    }
}
