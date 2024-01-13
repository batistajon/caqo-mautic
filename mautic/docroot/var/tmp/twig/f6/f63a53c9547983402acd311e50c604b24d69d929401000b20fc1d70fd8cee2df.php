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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-de.js */
class __TwigTemplate_8432567544b852e7907a375e0956338afb3d3f5cc51b7cea6c3d17e6b07dbcd2 extends Template
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
        echo "/* German initialisation for the jQuery UI date picker plugin. */
/* Written by Milian Wolff (mail@milianw.de). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.de = {
\tcloseText: \"Schließen\",
\tprevText: \"&#x3C;Zurück\",
\tnextText: \"Vor&#x3E;\",
\tcurrentText: \"Heute\",
\tmonthNames: [ \"Januar\",\"Februar\",\"März\",\"April\",\"Mai\",\"Juni\",
\t\"Juli\",\"August\",\"September\",\"Oktober\",\"November\",\"Dezember\" ],
\tmonthNamesShort: [ \"Jan\",\"Feb\",\"Mär\",\"Apr\",\"Mai\",\"Jun\",
\t\"Jul\",\"Aug\",\"Sep\",\"Okt\",\"Nov\",\"Dez\" ],
\tdayNames: [ \"Sonntag\",\"Montag\",\"Dienstag\",\"Mittwoch\",\"Donnerstag\",\"Freitag\",\"Samstag\" ],
\tdayNamesShort: [ \"So\",\"Mo\",\"Di\",\"Mi\",\"Do\",\"Fr\",\"Sa\" ],
\tdayNamesMin: [ \"So\",\"Mo\",\"Di\",\"Mi\",\"Do\",\"Fr\",\"Sa\" ],
\tweekHeader: \"KW\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.de );

return datepicker.regional.de;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-de.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-de.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-de.js");
    }
}
