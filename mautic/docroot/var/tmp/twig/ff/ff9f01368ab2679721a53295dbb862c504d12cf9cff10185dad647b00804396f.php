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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ro.js */
class __TwigTemplate_5cefc007ee2f258e9b68396296e1560be69b5f4426cef6d789a67a99fc04ff17 extends Template
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
        echo "/* Romanian initialisation for the jQuery UI date picker plugin.
 *
 * Written by Edmond L. (ll_edmond@walla.com)
 * and Ionut G. Stan (ionut.g.stan@gmail.com)
 */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.ro = {
\tcloseText: \"Închide\",
\tprevText: \"&#xAB; Luna precedentă\",
\tnextText: \"Luna următoare &#xBB;\",
\tcurrentText: \"Azi\",
\tmonthNames: [ \"Ianuarie\",\"Februarie\",\"Martie\",\"Aprilie\",\"Mai\",\"Iunie\",
\t\"Iulie\",\"August\",\"Septembrie\",\"Octombrie\",\"Noiembrie\",\"Decembrie\" ],
\tmonthNamesShort: [ \"Ian\", \"Feb\", \"Mar\", \"Apr\", \"Mai\", \"Iun\",
\t\"Iul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\" ],
\tdayNames: [ \"Duminică\", \"Luni\", \"Marţi\", \"Miercuri\", \"Joi\", \"Vineri\", \"Sâmbătă\" ],
\tdayNamesShort: [ \"Dum\", \"Lun\", \"Mar\", \"Mie\", \"Joi\", \"Vin\", \"Sâm\" ],
\tdayNamesMin: [ \"Du\",\"Lu\",\"Ma\",\"Mi\",\"Jo\",\"Vi\",\"Sâ\" ],
\tweekHeader: \"Săpt\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.ro );

return datepicker.regional.ro;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ro.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ro.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ro.js");
    }
}
