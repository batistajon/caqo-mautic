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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/jquery-1-7.js */
class __TwigTemplate_e2a5e862dcfaf3354398b92a9c670e00780e5feeb2194dddb452a5223ec3f97f extends Template
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

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"jquery\", \"./version\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

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

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/jquery-1-7.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/jquery-1-7.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/jquery-1-7.js");
    }
}
