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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/labels.js */
class __TwigTemplate_edacfb77ef4a787642de1cff04d2af1d0163b4b663c04863b5c8e443d8b197ee extends Template
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
 * jQuery UI Labels 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */

//>>label: labels
//>>group: Core
//>>description: Find all the labels associated with a given input
//>>docs: http://api.jqueryui.com/labels/

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"jquery\", \"./version\", \"./escape-selector\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
} ( function( \$ ) {

return \$.fn.labels = function() {
\tvar ancestor, selector, id, labels, ancestors;

\t// Check control.labels first
\tif ( this[ 0 ].labels && this[ 0 ].labels.length ) {
\t\treturn this.pushStack( this[ 0 ].labels );
\t}

\t// Support: IE <= 11, FF <= 37, Android <= 2.3 only
\t// Above browsers do not support control.labels. Everything below is to support them
\t// as well as document fragments. control.labels does not work on document fragments
\tlabels = this.eq( 0 ).parents( \"label\" );

\t// Look for the label based on the id
\tid = this.attr( \"id\" );
\tif ( id ) {

\t\t// We don't search against the document in case the element
\t\t// is disconnected from the DOM
\t\tancestor = this.eq( 0 ).parents().last();

\t\t// Get a full set of top level ancestors
\t\tancestors = ancestor.add( ancestor.length ? ancestor.siblings() : this.siblings() );

\t\t// Create a selector for the label based on the id
\t\tselector = \"label[for='\" + \$.ui.escapeSelector( id ) + \"']\";

\t\tlabels = labels.add( ancestors.find( selector ).addBack( selector ) );

\t}

\t// Return whatever we have found for labels
\treturn this.pushStack( labels );
};

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/labels.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/labels.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/labels.js");
    }
}
