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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-nl.js */
class __TwigTemplate_49601fa266dd4f3cc0a1c06212898f43df3f1adce1c8bf2566d5e58485efc859 extends Template
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
        echo "/* Dutch (UTF-8) initialisation for the jQuery UI date picker plugin. */
/* Written by Mathias Bynens <http://mathiasbynens.be/> */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.nl = {
\tcloseText: \"Sluiten\",
\tprevText: \"←\",
\tnextText: \"→\",
\tcurrentText: \"Vandaag\",
\tmonthNames: [ \"januari\", \"februari\", \"maart\", \"april\", \"mei\", \"juni\",
\t\"juli\", \"augustus\", \"september\", \"oktober\", \"november\", \"december\" ],
\tmonthNamesShort: [ \"jan\", \"feb\", \"mrt\", \"apr\", \"mei\", \"jun\",
\t\"jul\", \"aug\", \"sep\", \"okt\", \"nov\", \"dec\" ],
\tdayNames: [ \"zondag\", \"maandag\", \"dinsdag\", \"woensdag\", \"donderdag\", \"vrijdag\", \"zaterdag\" ],
\tdayNamesShort: [ \"zon\", \"maa\", \"din\", \"woe\", \"don\", \"vri\", \"zat\" ],
\tdayNamesMin: [ \"zo\", \"ma\", \"di\", \"wo\", \"do\", \"vr\", \"za\" ],
\tweekHeader: \"Wk\",
\tdateFormat: \"dd-mm-yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.nl );

return datepicker.regional.nl;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-nl.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-nl.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-nl.js");
    }
}
