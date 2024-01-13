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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/scroll-parent.js */
class __TwigTemplate_97886f9d1d1bd6afb006fdc9fda57915f0d64f4404b0ea1192f181d15da94cae extends Template
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
 * jQuery UI Scroll Parent 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: scrollParent
//>>group: Core
//>>description: Get the closest ancestor element that is scrollable.
//>>docs: http://api.jqueryui.com/scrollParent/

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"jquery\", \"./version\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
} ( function( \$ ) {

return \$.fn.scrollParent = function( includeHidden ) {
\tvar position = this.css( \"position\" ),
\t\texcludeStaticParent = position === \"absolute\",
\t\toverflowRegex = includeHidden ? /(auto|scroll|hidden)/ : /(auto|scroll)/,
\t\tscrollParent = this.parents().filter( function() {
\t\t\tvar parent = \$( this );
\t\t\tif ( excludeStaticParent && parent.css( \"position\" ) === \"static\" ) {
\t\t\t\treturn false;
\t\t\t}
\t\t\treturn overflowRegex.test( parent.css( \"overflow\" ) + parent.css( \"overflow-y\" ) +
\t\t\t\tparent.css( \"overflow-x\" ) );
\t\t} ).eq( 0 );

\treturn position === \"fixed\" || !scrollParent.length ?
\t\t\$( this[ 0 ].ownerDocument || document ) :
\t\tscrollParent;
};

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/scroll-parent.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/scroll-parent.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/scroll-parent.js");
    }
}
