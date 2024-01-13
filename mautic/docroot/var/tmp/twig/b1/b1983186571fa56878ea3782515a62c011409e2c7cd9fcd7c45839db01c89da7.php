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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/plugin.js */
class __TwigTemplate_ef5806f9f487063d69a3dc8cd856604965b7acf89a5e742a86883e4e893c3683 extends Template
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
        echo "( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"jquery\", \"./version\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery );
\t}
} ( function( \$ ) {

// \$.ui.plugin is deprecated. Use \$.widget() extensions instead.
return \$.ui.plugin = {
\tadd: function( module, option, set ) {
\t\tvar i,
\t\t\tproto = \$.ui[ module ].prototype;
\t\tfor ( i in set ) {
\t\t\tproto.plugins[ i ] = proto.plugins[ i ] || [];
\t\t\tproto.plugins[ i ].push( [ option, set[ i ] ] );
\t\t}
\t},
\tcall: function( instance, name, args, allowDisconnected ) {
\t\tvar i,
\t\t\tset = instance.plugins[ name ];

\t\tif ( !set ) {
\t\t\treturn;
\t\t}

\t\tif ( !allowDisconnected && ( !instance.element[ 0 ].parentNode ||
\t\t\t\tinstance.element[ 0 ].parentNode.nodeType === 11 ) ) {
\t\t\treturn;
\t\t}

\t\tfor ( i = 0; i < set.length; i++ ) {
\t\t\tif ( instance.options[ set[ i ][ 0 ] ] ) {
\t\t\t\tset[ i ][ 1 ].apply( instance.element, args );
\t\t\t}
\t\t}
\t}
};

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/plugin.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/plugin.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/plugin.js");
    }
}
