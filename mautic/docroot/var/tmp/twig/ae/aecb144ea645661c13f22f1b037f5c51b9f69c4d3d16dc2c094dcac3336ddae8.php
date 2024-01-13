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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-shake.js */
class __TwigTemplate_5a864b1e12f3778f126ac92fa184800fd5a2bbd65824e7cbfa862772635f7d7f extends Template
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
 * jQuery UI Effects Shake 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Shake Effect
//>>group: Effects
//>>description: Shakes an element horizontally or vertically n times.
//>>docs: http://api.jqueryui.com/shake-effect/
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

return \$.effects.define( \"shake\", function( options, done ) {

\tvar i = 1,
\t\telement = \$( this ),
\t\tdirection = options.direction || \"left\",
\t\tdistance = options.distance || 20,
\t\ttimes = options.times || 3,
\t\tanims = times * 2 + 1,
\t\tspeed = Math.round( options.duration / anims ),
\t\tref = ( direction === \"up\" || direction === \"down\" ) ? \"top\" : \"left\",
\t\tpositiveMotion = ( direction === \"up\" || direction === \"left\" ),
\t\tanimation = {},
\t\tanimation1 = {},
\t\tanimation2 = {},

\t\tqueuelen = element.queue().length;

\t\$.effects.createPlaceholder( element );

\t// Animation
\tanimation[ ref ] = ( positiveMotion ? \"-=\" : \"+=\" ) + distance;
\tanimation1[ ref ] = ( positiveMotion ? \"+=\" : \"-=\" ) + distance * 2;
\tanimation2[ ref ] = ( positiveMotion ? \"-=\" : \"+=\" ) + distance * 2;

\t// Animate
\telement.animate( animation, speed, options.easing );

\t// Shakes
\tfor ( ; i < times; i++ ) {
\t\telement
\t\t\t.animate( animation1, speed, options.easing )
\t\t\t.animate( animation2, speed, options.easing );
\t}

\telement
\t\t.animate( animation1, speed, options.easing )
\t\t.animate( animation, speed / 2, options.easing )
\t\t.queue( done );

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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-shake.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-shake.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-shake.js");
    }
}
