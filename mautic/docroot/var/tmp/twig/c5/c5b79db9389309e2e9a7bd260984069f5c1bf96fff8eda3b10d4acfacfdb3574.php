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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-id.js */
class __TwigTemplate_02134c8057078d2b948a1c0c335fb38166df066b258a05a2f39f6947cad6bd8d extends Template
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
        echo "/* Indonesian initialisation for the jQuery UI date picker plugin. */
/* Written by Deden Fathurahman (dedenf@gmail.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.id = {
\tcloseText: \"Tutup\",
\tprevText: \"&#x3C;mundur\",
\tnextText: \"maju&#x3E;\",
\tcurrentText: \"hari ini\",
\tmonthNames: [ \"Januari\",\"Februari\",\"Maret\",\"April\",\"Mei\",\"Juni\",
\t\"Juli\",\"Agustus\",\"September\",\"Oktober\",\"Nopember\",\"Desember\" ],
\tmonthNamesShort: [ \"Jan\",\"Feb\",\"Mar\",\"Apr\",\"Mei\",\"Jun\",
\t\"Jul\",\"Agus\",\"Sep\",\"Okt\",\"Nop\",\"Des\" ],
\tdayNames: [ \"Minggu\",\"Senin\",\"Selasa\",\"Rabu\",\"Kamis\",\"Jumat\",\"Sabtu\" ],
\tdayNamesShort: [ \"Min\",\"Sen\",\"Sel\",\"Rab\",\"kam\",\"Jum\",\"Sab\" ],
\tdayNamesMin: [ \"Mg\",\"Sn\",\"Sl\",\"Rb\",\"Km\",\"jm\",\"Sb\" ],
\tweekHeader: \"Mg\",
\tdateFormat: \"dd/mm/yy\",
\tfirstDay: 0,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.id );

return datepicker.regional.id;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-id.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-id.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-id.js");
    }
}
