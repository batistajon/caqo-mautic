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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/form-reset-mixin.js */
class __TwigTemplate_0455dcacf00ea1deda24e57a62c559e18d4e4fb96d37dcad3ab86c06580849bd extends Template
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

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"./form\",
\t\t\t\"./version\"
\t\t], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

return \$.ui.formResetMixin = {
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

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/form-reset-mixin.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/form-reset-mixin.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/form-reset-mixin.js");
    }
}
