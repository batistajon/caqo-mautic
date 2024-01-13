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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-size.js */
class __TwigTemplate_b9f04c339e9c2798dad98e942c91e3df8f772efceed2c9b68223053daa24e97f extends Template
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
 * jQuery UI Effects Size 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Size Effect
//>>group: Effects
//>>description: Resize an element to a specified width and height.
//>>docs: http://api.jqueryui.com/size-effect/
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

return \$.effects.define( \"size\", function( options, done ) {

\t// Create element
\tvar baseline, factor, temp,
\t\telement = \$( this ),

\t\t// Copy for children
\t\tcProps = [ \"fontSize\" ],
\t\tvProps = [ \"borderTopWidth\", \"borderBottomWidth\", \"paddingTop\", \"paddingBottom\" ],
\t\thProps = [ \"borderLeftWidth\", \"borderRightWidth\", \"paddingLeft\", \"paddingRight\" ],

\t\t// Set options
\t\tmode = options.mode,
\t\trestore = mode !== \"effect\",
\t\tscale = options.scale || \"both\",
\t\torigin = options.origin || [ \"middle\", \"center\" ],
\t\tposition = element.css( \"position\" ),
\t\tpos = element.position(),
\t\toriginal = \$.effects.scaledDimensions( element ),
\t\tfrom = options.from || original,
\t\tto = options.to || \$.effects.scaledDimensions( element, 0 );

\t\$.effects.createPlaceholder( element );

\tif ( mode === \"show\" ) {
\t\ttemp = from;
\t\tfrom = to;
\t\tto = temp;
\t}

\t// Set scaling factor
\tfactor = {
\t\tfrom: {
\t\t\ty: from.height / original.height,
\t\t\tx: from.width / original.width
\t\t},
\t\tto: {
\t\t\ty: to.height / original.height,
\t\t\tx: to.width / original.width
\t\t}
\t};

\t// Scale the css box
\tif ( scale === \"box\" || scale === \"both\" ) {

\t\t// Vertical props scaling
\t\tif ( factor.from.y !== factor.to.y ) {
\t\t\tfrom = \$.effects.setTransition( element, vProps, factor.from.y, from );
\t\t\tto = \$.effects.setTransition( element, vProps, factor.to.y, to );
\t\t}

\t\t// Horizontal props scaling
\t\tif ( factor.from.x !== factor.to.x ) {
\t\t\tfrom = \$.effects.setTransition( element, hProps, factor.from.x, from );
\t\t\tto = \$.effects.setTransition( element, hProps, factor.to.x, to );
\t\t}
\t}

\t// Scale the content
\tif ( scale === \"content\" || scale === \"both\" ) {

\t\t// Vertical props scaling
\t\tif ( factor.from.y !== factor.to.y ) {
\t\t\tfrom = \$.effects.setTransition( element, cProps, factor.from.y, from );
\t\t\tto = \$.effects.setTransition( element, cProps, factor.to.y, to );
\t\t}
\t}

\t// Adjust the position properties based on the provided origin points
\tif ( origin ) {
\t\tbaseline = \$.effects.getBaseline( origin, original );
\t\tfrom.top = ( original.outerHeight - from.outerHeight ) * baseline.y + pos.top;
\t\tfrom.left = ( original.outerWidth - from.outerWidth ) * baseline.x + pos.left;
\t\tto.top = ( original.outerHeight - to.outerHeight ) * baseline.y + pos.top;
\t\tto.left = ( original.outerWidth - to.outerWidth ) * baseline.x + pos.left;
\t}
\telement.css( from );

\t// Animate the children if desired
\tif ( scale === \"content\" || scale === \"both\" ) {

\t\tvProps = vProps.concat( [ \"marginTop\", \"marginBottom\" ] ).concat( cProps );
\t\thProps = hProps.concat( [ \"marginLeft\", \"marginRight\" ] );

\t\t// Only animate children with width attributes specified
\t\t// TODO: is this right? should we include anything with css width specified as well
\t\telement.find( \"*[width]\" ).each( function() {
\t\t\tvar child = \$( this ),
\t\t\t\tchildOriginal = \$.effects.scaledDimensions( child ),
\t\t\t\tchildFrom = {
\t\t\t\t\theight: childOriginal.height * factor.from.y,
\t\t\t\t\twidth: childOriginal.width * factor.from.x,
\t\t\t\t\touterHeight: childOriginal.outerHeight * factor.from.y,
\t\t\t\t\touterWidth: childOriginal.outerWidth * factor.from.x
\t\t\t\t},
\t\t\t\tchildTo = {
\t\t\t\t\theight: childOriginal.height * factor.to.y,
\t\t\t\t\twidth: childOriginal.width * factor.to.x,
\t\t\t\t\touterHeight: childOriginal.height * factor.to.y,
\t\t\t\t\touterWidth: childOriginal.width * factor.to.x
\t\t\t\t};

\t\t\t// Vertical props scaling
\t\t\tif ( factor.from.y !== factor.to.y ) {
\t\t\t\tchildFrom = \$.effects.setTransition( child, vProps, factor.from.y, childFrom );
\t\t\t\tchildTo = \$.effects.setTransition( child, vProps, factor.to.y, childTo );
\t\t\t}

\t\t\t// Horizontal props scaling
\t\t\tif ( factor.from.x !== factor.to.x ) {
\t\t\t\tchildFrom = \$.effects.setTransition( child, hProps, factor.from.x, childFrom );
\t\t\t\tchildTo = \$.effects.setTransition( child, hProps, factor.to.x, childTo );
\t\t\t}

\t\t\tif ( restore ) {
\t\t\t\t\$.effects.saveStyle( child );
\t\t\t}

\t\t\t// Animate children
\t\t\tchild.css( childFrom );
\t\t\tchild.animate( childTo, options.duration, options.easing, function() {

\t\t\t\t// Restore children
\t\t\t\tif ( restore ) {
\t\t\t\t\t\$.effects.restoreStyle( child );
\t\t\t\t}
\t\t\t} );
\t\t} );
\t}

\t// Animate
\telement.animate( to, {
\t\tqueue: false,
\t\tduration: options.duration,
\t\teasing: options.easing,
\t\tcomplete: function() {

\t\t\tvar offset = element.offset();

\t\t\tif ( to.opacity === 0 ) {
\t\t\t\telement.css( \"opacity\", from.opacity );
\t\t\t}

\t\t\tif ( !restore ) {
\t\t\t\telement
\t\t\t\t\t.css( \"position\", position === \"static\" ? \"relative\" : position )
\t\t\t\t\t.offset( offset );

\t\t\t\t// Need to save style here so that automatic style restoration
\t\t\t\t// doesn't restore to the original styles from before the animation.
\t\t\t\t\$.effects.saveStyle( element );
\t\t\t}

\t\t\tdone();
\t\t}
\t} );

} );

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-size.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-size.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-size.js");
    }
}
