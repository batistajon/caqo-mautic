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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-slide.js */
class __TwigTemplate_581f6c0111939f185e7c1d339b035470acfef0c628dab7243cbe61141c12d93a extends Template
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
 * jQuery UI Effects Slide 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Slide Effect
//>>group: Effects
//>>description: Slides an element in and out of the viewport.
//>>docs: http://api.jqueryui.com/slide-effect/
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

return \$.effects.define( \"slide\", \"show\", function( options, done ) {
\tvar startClip, startRef,
\t\telement = \$( this ),
\t\tmap = {
\t\t\tup: [ \"bottom\", \"top\" ],
\t\t\tdown: [ \"top\", \"bottom\" ],
\t\t\tleft: [ \"right\", \"left\" ],
\t\t\tright: [ \"left\", \"right\" ]
\t\t},
\t\tmode = options.mode,
\t\tdirection = options.direction || \"left\",
\t\tref = ( direction === \"up\" || direction === \"down\" ) ? \"top\" : \"left\",
\t\tpositiveMotion = ( direction === \"up\" || direction === \"left\" ),
\t\tdistance = options.distance ||
\t\t\telement[ ref === \"top\" ? \"outerHeight\" : \"outerWidth\" ]( true ),
\t\tanimation = {};

\t\$.effects.createPlaceholder( element );

\tstartClip = element.cssClip();
\tstartRef = element.position()[ ref ];

\t// Define hide animation
\tanimation[ ref ] = ( positiveMotion ? -1 : 1 ) * distance + startRef;
\tanimation.clip = element.cssClip();
\tanimation.clip[ map[ direction ][ 1 ] ] = animation.clip[ map[ direction ][ 0 ] ];

\t// Reverse the animation if we're showing
\tif ( mode === \"show\" ) {
\t\telement.cssClip( animation.clip );
\t\telement.css( ref, animation[ ref ] );
\t\tanimation.clip = startClip;
\t\tanimation[ ref ] = startRef;
\t}

\t// Actually animate
\telement.animate( animation, {
\t\tqueue: false,
\t\tduration: options.duration,
\t\teasing: options.easing,
\t\tcomplete: done
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-slide.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-slide.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-slide.js");
    }
}
