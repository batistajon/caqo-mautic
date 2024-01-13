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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-clip.js */
class __TwigTemplate_652d3735b8beec455b4bdc15ed352869a1e4013f0781d9b1f81ae8438e22e64d extends Template
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
 * jQuery UI Effects Clip 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Clip Effect
//>>group: Effects
//>>description: Clips the element on and off like an old TV.
//>>docs: http://api.jqueryui.com/clip-effect/
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

return \$.effects.define( \"clip\", \"hide\", function( options, done ) {
\tvar start,
\t\tanimate = {},
\t\telement = \$( this ),
\t\tdirection = options.direction || \"vertical\",
\t\tboth = direction === \"both\",
\t\thorizontal = both || direction === \"horizontal\",
\t\tvertical = both || direction === \"vertical\";

\tstart = element.cssClip();
\tanimate.clip = {
\t\ttop: vertical ? ( start.bottom - start.top ) / 2 : start.top,
\t\tright: horizontal ? ( start.right - start.left ) / 2 : start.right,
\t\tbottom: vertical ? ( start.bottom - start.top ) / 2 : start.bottom,
\t\tleft: horizontal ? ( start.right - start.left ) / 2 : start.left
\t};

\t\$.effects.createPlaceholder( element );

\tif ( options.mode === \"show\" ) {
\t\telement.cssClip( animate.clip );
\t\tanimate.clip = start;
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-clip.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-clip.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-clip.js");
    }
}
