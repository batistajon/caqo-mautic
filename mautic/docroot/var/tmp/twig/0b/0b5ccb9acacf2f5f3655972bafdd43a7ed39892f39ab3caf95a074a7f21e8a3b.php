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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ca.js */
class __TwigTemplate_47f1c4c2e8706d18c1197c101ed42dc7eb806f94c43aa16528dce3804149bd8a extends Template
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
        echo "/* Inicialització en català per a l'extensió 'UI date picker' per jQuery. */
/* Writers: (joan.leon@gmail.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.ca = {
\tcloseText: \"Tanca\",
\tprevText: \"Anterior\",
\tnextText: \"Següent\",
\tcurrentText: \"Avui\",
\tmonthNames: [ \"gener\",\"febrer\",\"març\",\"abril\",\"maig\",\"juny\",
\t\"juliol\",\"agost\",\"setembre\",\"octubre\",\"novembre\",\"desembre\" ],
\tmonthNamesShort: [ \"gen\",\"feb\",\"març\",\"abr\",\"maig\",\"juny\",
\t\"jul\",\"ag\",\"set\",\"oct\",\"nov\",\"des\" ],
\tdayNames: [ \"diumenge\",\"dilluns\",\"dimarts\",\"dimecres\",\"dijous\",\"divendres\",\"dissabte\" ],
\tdayNamesShort: [ \"dg\",\"dl\",\"dt\",\"dc\",\"dj\",\"dv\",\"ds\" ],
\tdayNamesMin: [ \"dg\",\"dl\",\"dt\",\"dc\",\"dj\",\"dv\",\"ds\" ],
\tweekHeader: \"Set\",
\tdateFormat: \"dd/mm/yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.ca );

return datepicker.regional.ca;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ca.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ca.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ca.js");
    }
}
