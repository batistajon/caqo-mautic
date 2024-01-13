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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-et.js */
class __TwigTemplate_2db57e9797e0b82f4b9f4852915a3b34648b478c3f6c7e3d7b7cb94de1d655fc extends Template
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
        echo "/* Estonian initialisation for the jQuery UI date picker plugin. */
/* Written by Mart Sõmermaa (mrts.pydev at gmail com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.et = {
\tcloseText: \"Sulge\",
\tprevText: \"Eelnev\",
\tnextText: \"Järgnev\",
\tcurrentText: \"Täna\",
\tmonthNames: [ \"Jaanuar\",\"Veebruar\",\"Märts\",\"Aprill\",\"Mai\",\"Juuni\",
\t\"Juuli\",\"August\",\"September\",\"Oktoober\",\"November\",\"Detsember\" ],
\tmonthNamesShort: [ \"Jaan\", \"Veebr\", \"Märts\", \"Apr\", \"Mai\", \"Juuni\",
\t\"Juuli\", \"Aug\", \"Sept\", \"Okt\", \"Nov\", \"Dets\" ],
\tdayNames: [
\t\t\"Pühapäev\",
\t\t\"Esmaspäev\",
\t\t\"Teisipäev\",
\t\t\"Kolmapäev\",
\t\t\"Neljapäev\",
\t\t\"Reede\",
\t\t\"Laupäev\"
\t],
\tdayNamesShort: [ \"Pühap\", \"Esmasp\", \"Teisip\", \"Kolmap\", \"Neljap\", \"Reede\", \"Laup\" ],
\tdayNamesMin: [ \"P\",\"E\",\"T\",\"K\",\"N\",\"R\",\"L\" ],
\tweekHeader: \"näd\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.et );

return datepicker.regional.et;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-et.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-et.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-et.js");
    }
}
