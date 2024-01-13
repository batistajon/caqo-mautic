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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-it-CH.js */
class __TwigTemplate_f52f6b7f07e84e15f0ec50df3f43869ffca6f25376d32c53fd603249bee5eb71 extends Template
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
        echo "/* Italian initialisation for the jQuery UI date picker plugin. */
/* Written by Antonello Pasella (antonello.pasella@gmail.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional[ \"it-CH\" ] = {
\tcloseText: \"Chiudi\",
\tprevText: \"&#x3C;Prec\",
\tnextText: \"Succ&#x3E;\",
\tcurrentText: \"Oggi\",
\tmonthNames: [ \"Gennaio\",\"Febbraio\",\"Marzo\",\"Aprile\",\"Maggio\",\"Giugno\",
\t\t\"Luglio\",\"Agosto\",\"Settembre\",\"Ottobre\",\"Novembre\",\"Dicembre\" ],
\tmonthNamesShort: [ \"Gen\",\"Feb\",\"Mar\",\"Apr\",\"Mag\",\"Giu\",
\t\t\"Lug\",\"Ago\",\"Set\",\"Ott\",\"Nov\",\"Dic\" ],
\tdayNames: [ \"Domenica\",\"Lunedì\",\"Martedì\",\"Mercoledì\",\"Giovedì\",\"Venerdì\",\"Sabato\" ],
\tdayNamesShort: [ \"Dom\",\"Lun\",\"Mar\",\"Mer\",\"Gio\",\"Ven\",\"Sab\" ],
\tdayNamesMin: [ \"Do\",\"Lu\",\"Ma\",\"Me\",\"Gi\",\"Ve\",\"Sa\" ],
\tweekHeader: \"Sm\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional[ \"it-CH\" ] );

return datepicker.regional[ \"it-CH\" ];

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-it-CH.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-it-CH.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-it-CH.js");
    }
}