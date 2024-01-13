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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fo.js */
class __TwigTemplate_452c8914ddddfb402910072e33ea274b6d1ef8fe0368ffee13abdbf3028e9063 extends Template
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
        echo "/* Faroese initialisation for the jQuery UI date picker plugin */
/* Written by Sverri Mohr Olsen, sverrimo@gmail.com */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.fo = {
\tcloseText: \"Lat aftur\",
\tprevText: \"&#x3C;Fyrra\",
\tnextText: \"Næsta&#x3E;\",
\tcurrentText: \"Í dag\",
\tmonthNames: [ \"Januar\",\"Februar\",\"Mars\",\"Apríl\",\"Mei\",\"Juni\",
\t\"Juli\",\"August\",\"September\",\"Oktober\",\"November\",\"Desember\" ],
\tmonthNamesShort: [ \"Jan\",\"Feb\",\"Mar\",\"Apr\",\"Mei\",\"Jun\",
\t\"Jul\",\"Aug\",\"Sep\",\"Okt\",\"Nov\",\"Des\" ],
\tdayNames: [
\t\t\"Sunnudagur\",
\t\t\"Mánadagur\",
\t\t\"Týsdagur\",
\t\t\"Mikudagur\",
\t\t\"Hósdagur\",
\t\t\"Fríggjadagur\",
\t\t\"Leyardagur\"
\t],
\tdayNamesShort: [ \"Sun\",\"Mán\",\"Týs\",\"Mik\",\"Hós\",\"Frí\",\"Ley\" ],
\tdayNamesMin: [ \"Su\",\"Má\",\"Tý\",\"Mi\",\"Hó\",\"Fr\",\"Le\" ],
\tweekHeader: \"Vk\",
\tdateFormat: \"dd-mm-yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.fo );

return datepicker.regional.fo;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fo.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fo.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fo.js");
    }
}
