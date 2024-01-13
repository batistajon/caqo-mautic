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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sv.js */
class __TwigTemplate_33fef6d605a51a4cdc8fa2faacccbc9d49e72f6dc3445968d8947bcd8f03277c extends Template
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
        echo "/* Swedish initialisation for the jQuery UI date picker plugin. */
/* Written by Anders Ekdahl ( anders@nomadiz.se). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.sv = {
\tcloseText: \"Stäng\",
\tprevText: \"&#xAB;Förra\",
\tnextText: \"Nästa&#xBB;\",
\tcurrentText: \"Idag\",
\tmonthNames: [ \"Januari\",\"Februari\",\"Mars\",\"April\",\"Maj\",\"Juni\",
\t\"Juli\",\"Augusti\",\"September\",\"Oktober\",\"November\",\"December\" ],
\tmonthNamesShort: [ \"Jan\",\"Feb\",\"Mar\",\"Apr\",\"Maj\",\"Jun\",
\t\"Jul\",\"Aug\",\"Sep\",\"Okt\",\"Nov\",\"Dec\" ],
\tdayNamesShort: [ \"Sön\",\"Mån\",\"Tis\",\"Ons\",\"Tor\",\"Fre\",\"Lör\" ],
\tdayNames: [ \"Söndag\",\"Måndag\",\"Tisdag\",\"Onsdag\",\"Torsdag\",\"Fredag\",\"Lördag\" ],
\tdayNamesMin: [ \"Sö\",\"Må\",\"Ti\",\"On\",\"To\",\"Fr\",\"Lö\" ],
\tweekHeader: \"Ve\",
\tdateFormat: \"yy-mm-dd\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.sv );

return datepicker.regional.sv;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sv.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sv.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sv.js");
    }
}
