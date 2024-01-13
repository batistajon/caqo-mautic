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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-gl.js */
class __TwigTemplate_38a48fc1232891bb6f437ec51841cbb9ed10969c4e554be55ade7f41c1f6a188 extends Template
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
        echo "/* Galician localization for 'UI date picker' jQuery extension. */
/* Translated by Jorge Barreiro <yortx.barry@gmail.com>. */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.gl = {
\tcloseText: \"Pechar\",
\tprevText: \"&#x3C;Ant\",
\tnextText: \"Seg&#x3E;\",
\tcurrentText: \"Hoxe\",
\tmonthNames: [ \"Xaneiro\",\"Febreiro\",\"Marzo\",\"Abril\",\"Maio\",\"Xuño\",
\t\"Xullo\",\"Agosto\",\"Setembro\",\"Outubro\",\"Novembro\",\"Decembro\" ],
\tmonthNamesShort: [ \"Xan\",\"Feb\",\"Mar\",\"Abr\",\"Mai\",\"Xuñ\",
\t\"Xul\",\"Ago\",\"Set\",\"Out\",\"Nov\",\"Dec\" ],
\tdayNames: [ \"Domingo\",\"Luns\",\"Martes\",\"Mércores\",\"Xoves\",\"Venres\",\"Sábado\" ],
\tdayNamesShort: [ \"Dom\",\"Lun\",\"Mar\",\"Mér\",\"Xov\",\"Ven\",\"Sáb\" ],
\tdayNamesMin: [ \"Do\",\"Lu\",\"Ma\",\"Mé\",\"Xo\",\"Ve\",\"Sá\" ],
\tweekHeader: \"Sm\",
\tdateFormat: \"dd/mm/yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.gl );

return datepicker.regional.gl;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-gl.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-gl.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-gl.js");
    }
}
