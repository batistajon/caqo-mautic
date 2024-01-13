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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-es.js */
class __TwigTemplate_34c9a02769ad8fb347dd8a3623d87b0e173ae7c214e23194b47ed6f92d2e9e13 extends Template
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
        echo "/* Inicialización en español para la extensión 'UI date picker' para jQuery. */
/* Traducido por Vester (xvester@gmail.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.es = {
\tcloseText: \"Cerrar\",
\tprevText: \"&#x3C;Ant\",
\tnextText: \"Sig&#x3E;\",
\tcurrentText: \"Hoy\",
\tmonthNames: [ \"enero\",\"febrero\",\"marzo\",\"abril\",\"mayo\",\"junio\",
\t\"julio\",\"agosto\",\"septiembre\",\"octubre\",\"noviembre\",\"diciembre\" ],
\tmonthNamesShort: [ \"ene\",\"feb\",\"mar\",\"abr\",\"may\",\"jun\",
\t\"jul\",\"ago\",\"sep\",\"oct\",\"nov\",\"dic\" ],
\tdayNames: [ \"domingo\",\"lunes\",\"martes\",\"miércoles\",\"jueves\",\"viernes\",\"sábado\" ],
\tdayNamesShort: [ \"dom\",\"lun\",\"mar\",\"mié\",\"jue\",\"vie\",\"sáb\" ],
\tdayNamesMin: [ \"D\",\"L\",\"M\",\"X\",\"J\",\"V\",\"S\" ],
\tweekHeader: \"Sm\",
\tdateFormat: \"dd/mm/yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.es );

return datepicker.regional.es;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-es.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-es.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-es.js");
    }
}
