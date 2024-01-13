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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-is.js */
class __TwigTemplate_02e0716d7b4031b58f74e314aa5ba25437bd757b0deb4244974321f0da815d89 extends Template
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
        echo "/* Icelandic initialisation for the jQuery UI date picker plugin. */
/* Written by Haukur H. Thorsson (haukur@eskill.is). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.is = {
\tcloseText: \"Loka\",
\tprevText: \"&#x3C; Fyrri\",
\tnextText: \"Næsti &#x3E;\",
\tcurrentText: \"Í dag\",
\tmonthNames: [ \"Janúar\",\"Febrúar\",\"Mars\",\"Apríl\",\"Maí\",\"Júní\",
\t\"Júlí\",\"Ágúst\",\"September\",\"Október\",\"Nóvember\",\"Desember\" ],
\tmonthNamesShort: [ \"Jan\",\"Feb\",\"Mar\",\"Apr\",\"Maí\",\"Jún\",
\t\"Júl\",\"Ágú\",\"Sep\",\"Okt\",\"Nóv\",\"Des\" ],
\tdayNames: [
\t\t\"Sunnudagur\",
\t\t\"Mánudagur\",
\t\t\"Þriðjudagur\",
\t\t\"Miðvikudagur\",
\t\t\"Fimmtudagur\",
\t\t\"Föstudagur\",
\t\t\"Laugardagur\"
\t],
\tdayNamesShort: [ \"Sun\",\"Mán\",\"Þri\",\"Mið\",\"Fim\",\"Fös\",\"Lau\" ],
\tdayNamesMin: [ \"Su\",\"Má\",\"Þr\",\"Mi\",\"Fi\",\"Fö\",\"La\" ],
\tweekHeader: \"Vika\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 0,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.is );

return datepicker.regional.is;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-is.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-is.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-is.js");
    }
}
