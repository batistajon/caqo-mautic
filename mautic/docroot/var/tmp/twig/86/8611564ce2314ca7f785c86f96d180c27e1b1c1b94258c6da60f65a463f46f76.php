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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-fold.js */
class __TwigTemplate_b02079ad7420d133953369970be92cf5157cf8fcdd3f58e5dae68fe467119d15 extends Template
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
 * jQuery UI Effects Fold 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Fold Effect
//>>group: Effects
//>>description: Folds an element first horizontally and then vertically.
//>>docs: http://api.jqueryui.com/fold-effect/
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

return \$.effects.define( \"fold\", \"hide\", function( options, done ) {

\t// Create element
\tvar element = \$( this ),
\t\tmode = options.mode,
\t\tshow = mode === \"show\",
\t\thide = mode === \"hide\",
\t\tsize = options.size || 15,
\t\tpercent = /([0-9]+)%/.exec( size ),
\t\thorizFirst = !!options.horizFirst,
\t\tref = horizFirst ? [ \"right\", \"bottom\" ] : [ \"bottom\", \"right\" ],
\t\tduration = options.duration / 2,

\t\tplaceholder = \$.effects.createPlaceholder( element ),

\t\tstart = element.cssClip(),
\t\tanimation1 = { clip: \$.extend( {}, start ) },
\t\tanimation2 = { clip: \$.extend( {}, start ) },

\t\tdistance = [ start[ ref[ 0 ] ], start[ ref[ 1 ] ] ],

\t\tqueuelen = element.queue().length;

\tif ( percent ) {
\t\tsize = parseInt( percent[ 1 ], 10 ) / 100 * distance[ hide ? 0 : 1 ];
\t}
\tanimation1.clip[ ref[ 0 ] ] = size;
\tanimation2.clip[ ref[ 0 ] ] = size;
\tanimation2.clip[ ref[ 1 ] ] = 0;

\tif ( show ) {
\t\telement.cssClip( animation2.clip );
\t\tif ( placeholder ) {
\t\t\tplaceholder.css( \$.effects.clipToBox( animation2 ) );
\t\t}

\t\tanimation2.clip = start;
\t}

\t// Animate
\telement
\t\t.queue( function( next ) {
\t\t\tif ( placeholder ) {
\t\t\t\tplaceholder
\t\t\t\t\t.animate( \$.effects.clipToBox( animation1 ), duration, options.easing )
\t\t\t\t\t.animate( \$.effects.clipToBox( animation2 ), duration, options.easing );
\t\t\t}

\t\t\tnext();
\t\t} )
\t\t.animate( animation1, duration, options.easing )
\t\t.animate( animation2, duration, options.easing )
\t\t.queue( done );

\t\$.effects.unshift( element, queuelen, 4 );
} );

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-fold.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-fold.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-fold.js");
    }
}
