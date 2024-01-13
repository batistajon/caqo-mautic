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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/checkboxradio.js */
class __TwigTemplate_884c931bab398b86eb98a8e6e42ef9233f7781d3d6690b38ccbe9d6d88d691bc extends Template
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

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"../escape-selector\",
\t\t\t\"../form-reset-mixin\",
\t\t\t\"../labels\",
\t\t\t\"../widget\"
\t\t], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

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

return \$.ui.checkboxradio;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/checkboxradio.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/checkboxradio.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/widgets/checkboxradio.js");
    }
}
