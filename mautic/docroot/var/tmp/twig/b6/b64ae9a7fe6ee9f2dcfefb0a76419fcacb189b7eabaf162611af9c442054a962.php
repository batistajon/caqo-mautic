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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fi.js */
class __TwigTemplate_653f56c5e6ee952506a71a55063efe5ed5b9938865713266488224820adddfb3 extends Template
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
        echo "/* Finnish initialisation for the jQuery UI date picker plugin. */
/* Written by Harri Kilpiö (harrikilpio@gmail.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.fi = {
\tcloseText: \"Sulje\",
\tprevText: \"&#xAB;Edellinen\",
\tnextText: \"Seuraava&#xBB;\",
\tcurrentText: \"Tänään\",
\tmonthNames: [ \"Tammikuu\",\"Helmikuu\",\"Maaliskuu\",\"Huhtikuu\",\"Toukokuu\",\"Kesäkuu\",
\t\"Heinäkuu\",\"Elokuu\",\"Syyskuu\",\"Lokakuu\",\"Marraskuu\",\"Joulukuu\" ],
\tmonthNamesShort: [ \"Tammi\",\"Helmi\",\"Maalis\",\"Huhti\",\"Touko\",\"Kesä\",
\t\"Heinä\",\"Elo\",\"Syys\",\"Loka\",\"Marras\",\"Joulu\" ],
\tdayNamesShort: [ \"Su\",\"Ma\",\"Ti\",\"Ke\",\"To\",\"Pe\",\"La\" ],
\tdayNames: [ \"Sunnuntai\",\"Maanantai\",\"Tiistai\",\"Keskiviikko\",\"Torstai\",\"Perjantai\",\"Lauantai\" ],
\tdayNamesMin: [ \"Su\",\"Ma\",\"Ti\",\"Ke\",\"To\",\"Pe\",\"La\" ],
\tweekHeader: \"Vk\",
\tdateFormat: \"d.m.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.fi );

return datepicker.regional.fi;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fi.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fi.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fi.js");
    }
}
