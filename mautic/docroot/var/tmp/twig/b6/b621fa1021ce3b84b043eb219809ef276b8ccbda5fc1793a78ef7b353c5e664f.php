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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-explode.js */
class __TwigTemplate_d81f0d21c9084038855fa1dec06db7f0af4d433a8ced2be85fdf947f108ff18d extends Template
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

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"../version\",
\t\t\t\"../effect\"
\t\t], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

return \$.effects.define( \"explode\", \"hide\", function( options, done ) {

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

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-explode.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-explode.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-explode.js");
    }
}
