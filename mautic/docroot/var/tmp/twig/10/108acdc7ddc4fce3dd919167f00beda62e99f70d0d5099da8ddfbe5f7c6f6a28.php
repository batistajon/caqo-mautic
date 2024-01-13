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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/focusable.js */
class __TwigTemplate_790844e6c602e546cd6c2a885a0937f854992e410cfc01269217873fbcc456d1 extends Template
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

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"jquery\", \"./version\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
} ( function( \$ ) {

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

return \$.ui.focusable;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/focusable.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/focusable.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/focusable.js");
    }
}
