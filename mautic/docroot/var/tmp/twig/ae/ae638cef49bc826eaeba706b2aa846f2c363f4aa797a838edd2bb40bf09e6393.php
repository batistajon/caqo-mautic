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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-scale.js */
class __TwigTemplate_fcd9d33b17a1b3482e173e9fbb64b0d724228e8c31059af05aeaadf0c03c65df extends Template
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
 * jQuery UI Effects Scale 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Scale Effect
//>>group: Effects
//>>description: Grows or shrinks an element and its content.
//>>docs: http://api.jqueryui.com/scale-effect/
//>>demos: http://jqueryui.com/effect/

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [
\t\t\t\"jquery\",
\t\t\t\"../version\",
\t\t\t\"../effect\",
\t\t\t\"./effect-size\"
\t\t], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
}( function( \$ ) {

return \$.effects.define( \"scale\", function( options, done ) {

\t// Create element
\tvar el = \$( this ),
\t\tmode = options.mode,
\t\tpercent = parseInt( options.percent, 10 ) ||
\t\t\t( parseInt( options.percent, 10 ) === 0 ? 0 : ( mode !== \"effect\" ? 0 : 100 ) ),

\t\tnewOptions = \$.extend( true, {
\t\t\tfrom: \$.effects.scaledDimensions( el ),
\t\t\tto: \$.effects.scaledDimensions( el, percent, options.direction || \"both\" ),
\t\t\torigin: options.origin || [ \"middle\", \"center\" ]
\t\t}, options );

\t// Fade option to support puff
\tif ( options.fade ) {
\t\tnewOptions.from.opacity = 1;
\t\tnewOptions.to.opacity = 0;
\t}

\t\$.effects.effect.size.call( this, newOptions, done );
} );

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-scale.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-scale.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-scale.js");
    }
}
