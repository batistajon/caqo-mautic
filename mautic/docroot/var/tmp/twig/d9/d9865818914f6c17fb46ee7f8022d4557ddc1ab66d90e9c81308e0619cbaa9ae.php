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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-blind.js */
class __TwigTemplate_e903d4bf74d61310edcaafef3187789e401781cce90d96ddc30a9143b196bb81 extends Template
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
 * jQuery UI Effects Blind 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Blind Effect
//>>group: Effects
//>>description: Blinds the element.
//>>docs: http://api.jqueryui.com/blind-effect/
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

return \$.effects.define( \"blind\", \"hide\", function( options, done ) {
\tvar map = {
\t\t\tup: [ \"bottom\", \"top\" ],
\t\t\tvertical: [ \"bottom\", \"top\" ],
\t\t\tdown: [ \"top\", \"bottom\" ],
\t\t\tleft: [ \"right\", \"left\" ],
\t\t\thorizontal: [ \"right\", \"left\" ],
\t\t\tright: [ \"left\", \"right\" ]
\t\t},
\t\telement = \$( this ),
\t\tdirection = options.direction || \"up\",
\t\tstart = element.cssClip(),
\t\tanimate = { clip: \$.extend( {}, start ) },
\t\tplaceholder = \$.effects.createPlaceholder( element );

\tanimate.clip[ map[ direction ][ 0 ] ] = animate.clip[ map[ direction ][ 1 ] ];

\tif ( options.mode === \"show\" ) {
\t\telement.cssClip( animate.clip );
\t\tif ( placeholder ) {
\t\t\tplaceholder.css( \$.effects.clipToBox( animate ) );
\t\t}

\t\tanimate.clip = start;
\t}

\tif ( placeholder ) {
\t\tplaceholder.animate( \$.effects.clipToBox( animate ), options.duration, options.easing );
\t}

\telement.animate( animate, {
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-blind.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-blind.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-blind.js");
    }
}
