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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-drop.js */
class __TwigTemplate_d318eb196416e5eb4f94798e03955027e7bc85ac86a7f54db91edd473224eb3d extends Template
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
 * jQuery UI Effects Drop 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Drop Effect
//>>group: Effects
//>>description: Moves an element in one direction and hides it at the same time.
//>>docs: http://api.jqueryui.com/drop-effect/
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

return \$.effects.define( \"drop\", \"hide\", function( options, done ) {

\tvar distance,
\t\telement = \$( this ),
\t\tmode = options.mode,
\t\tshow = mode === \"show\",
\t\tdirection = options.direction || \"left\",
\t\tref = ( direction === \"up\" || direction === \"down\" ) ? \"top\" : \"left\",
\t\tmotion = ( direction === \"up\" || direction === \"left\" ) ? \"-=\" : \"+=\",
\t\toppositeMotion = ( motion === \"+=\" ) ? \"-=\" : \"+=\",
\t\tanimation = {
\t\t\topacity: 0
\t\t};

\t\$.effects.createPlaceholder( element );

\tdistance = options.distance ||
\t\telement[ ref === \"top\" ? \"outerHeight\" : \"outerWidth\" ]( true ) / 2;

\tanimation[ ref ] = motion + distance;

\tif ( show ) {
\t\telement.css( animation );

\t\tanimation[ ref ] = oppositeMotion + distance;
\t\tanimation.opacity = 1;
\t}

\t// Animate
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-drop.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-drop.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-drop.js");
    }
}
