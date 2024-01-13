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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/safe-active-element.js */
class __TwigTemplate_27efbcaeae4a651d53b1c1384aeb4ce61bd3bb7266e287bdd021f0e83061b80c extends Template
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
return \$.ui.safeActiveElement = function( document ) {
\tvar activeElement;

\t// Support: IE 9 only
\t// IE9 throws an \"Unspecified error\" accessing document.activeElement from an <iframe>
\ttry {
\t\tactiveElement = document.activeElement;
\t} catch ( error ) {
\t\tactiveElement = document.body;
\t}

\t// Support: IE 9 - 11 only
\t// IE may return null instead of an element
\t// Interestingly, this only seems to occur when NOT in an iframe
\tif ( !activeElement ) {
\t\tactiveElement = document.body;
\t}

\t// Support: IE 11 only
\t// IE11 returns a seemingly empty object in some cases when accessing
\t// document.activeElement from an <iframe>
\tif ( !activeElement.nodeName ) {
\t\tactiveElement = document.body;
\t}

\treturn activeElement;
};

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/safe-active-element.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/safe-active-element.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/safe-active-element.js");
    }
}
