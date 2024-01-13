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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-bounce.js */
class __TwigTemplate_61a3f3cd5b2f991085dbad0e0fd4cdc69a90b5bb55a73fe0cdd9c727e160a380 extends Template
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
 * jQuery UI Effects Bounce 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Bounce Effect
//>>group: Effects
//>>description: Bounces an element horizontally or vertically n times.
//>>docs: http://api.jqueryui.com/bounce-effect/
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

return \$.effects.define( \"bounce\", function( options, done ) {
\tvar upAnim, downAnim, refValue,
\t\telement = \$( this ),

\t\t// Defaults:
\t\tmode = options.mode,
\t\thide = mode === \"hide\",
\t\tshow = mode === \"show\",
\t\tdirection = options.direction || \"up\",
\t\tdistance = options.distance,
\t\ttimes = options.times || 5,

\t\t// Number of internal animations
\t\tanims = times * 2 + ( show || hide ? 1 : 0 ),
\t\tspeed = options.duration / anims,
\t\teasing = options.easing,

\t\t// Utility:
\t\tref = ( direction === \"up\" || direction === \"down\" ) ? \"top\" : \"left\",
\t\tmotion = ( direction === \"up\" || direction === \"left\" ),
\t\ti = 0,

\t\tqueuelen = element.queue().length;

\t\$.effects.createPlaceholder( element );

\trefValue = element.css( ref );

\t// Default distance for the BIGGEST bounce is the outer Distance / 3
\tif ( !distance ) {
\t\tdistance = element[ ref === \"top\" ? \"outerHeight\" : \"outerWidth\" ]() / 3;
\t}

\tif ( show ) {
\t\tdownAnim = { opacity: 1 };
\t\tdownAnim[ ref ] = refValue;

\t\t// If we are showing, force opacity 0 and set the initial position
\t\t// then do the \"first\" animation
\t\telement
\t\t\t.css( \"opacity\", 0 )
\t\t\t.css( ref, motion ? -distance * 2 : distance * 2 )
\t\t\t.animate( downAnim, speed, easing );
\t}

\t// Start at the smallest distance if we are hiding
\tif ( hide ) {
\t\tdistance = distance / Math.pow( 2, times - 1 );
\t}

\tdownAnim = {};
\tdownAnim[ ref ] = refValue;

\t// Bounces up/down/left/right then back to 0 -- times * 2 animations happen here
\tfor ( ; i < times; i++ ) {
\t\tupAnim = {};
\t\tupAnim[ ref ] = ( motion ? \"-=\" : \"+=\" ) + distance;

\t\telement
\t\t\t.animate( upAnim, speed, easing )
\t\t\t.animate( downAnim, speed, easing );

\t\tdistance = hide ? distance * 2 : distance / 2;
\t}

\t// Last Bounce when Hiding
\tif ( hide ) {
\t\tupAnim = { opacity: 0 };
\t\tupAnim[ ref ] = ( motion ? \"-=\" : \"+=\" ) + distance;

\t\telement.animate( upAnim, speed, easing );
\t}

\telement.queue( done );

\t\$.effects.unshift( element, queuelen, anims + 1 );
} );

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-bounce.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-bounce.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-bounce.js");
    }
}
