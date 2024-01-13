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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-pulsate.js */
class __TwigTemplate_fb5a3564fc2c7742c23ab36c4bb0f5ec400e8c0147ac23297c47e5ee83723720 extends Template
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
 * jQuery UI Effects Pulsate 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: Pulsate Effect
//>>group: Effects
//>>description: Pulsates an element n times by changing the opacity to zero and back.
//>>docs: http://api.jqueryui.com/pulsate-effect/
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

return \$.effects.define( \"pulsate\", \"show\", function( options, done ) {
\tvar element = \$( this ),
\t\tmode = options.mode,
\t\tshow = mode === \"show\",
\t\thide = mode === \"hide\",
\t\tshowhide = show || hide,

\t\t// Showing or hiding leaves off the \"last\" animation
\t\tanims = ( ( options.times || 5 ) * 2 ) + ( showhide ? 1 : 0 ),
\t\tduration = options.duration / anims,
\t\tanimateTo = 0,
\t\ti = 1,
\t\tqueuelen = element.queue().length;

\tif ( show || !element.is( \":visible\" ) ) {
\t\telement.css( \"opacity\", 0 ).show();
\t\tanimateTo = 1;
\t}

\t// Anims - 1 opacity \"toggles\"
\tfor ( ; i < anims; i++ ) {
\t\telement.animate( { opacity: animateTo }, duration, options.easing );
\t\tanimateTo = 1 - animateTo;
\t}

\telement.animate( { opacity: animateTo }, duration, options.easing );

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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-pulsate.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-pulsate.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/effects/effect-pulsate.js");
    }
}
