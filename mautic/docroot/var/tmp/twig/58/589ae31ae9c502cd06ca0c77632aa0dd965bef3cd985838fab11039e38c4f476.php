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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-no.js */
class __TwigTemplate_66dbf65a0f8254314ff394f3bbfb39af2d7407ce589f6ff514d9f169102857c3 extends Template
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
        echo "/* Norwegian initialisation for the jQuery UI date picker plugin. */
/* Written by Naimdjon Takhirov (naimdjon@gmail.com). */

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.no = {
\tcloseText: \"Lukk\",
\tprevText: \"&#xAB;Forrige\",
\tnextText: \"Neste&#xBB;\",
\tcurrentText: \"I dag\",
\tmonthNames: [
\t\t\"januar\",
\t\t\"februar\",
\t\t\"mars\",
\t\t\"april\",
\t\t\"mai\",
\t\t\"juni\",
\t\t\"juli\",
\t\t\"august\",
\t\t\"september\",
\t\t\"oktober\",
\t\t\"november\",
\t\t\"desember\"
\t],
\tmonthNamesShort: [ \"jan\",\"feb\",\"mar\",\"apr\",\"mai\",\"jun\",\"jul\",\"aug\",\"sep\",\"okt\",\"nov\",\"des\" ],
\tdayNamesShort: [ \"søn\",\"man\",\"tir\",\"ons\",\"tor\",\"fre\",\"lør\" ],
\tdayNames: [ \"søndag\",\"mandag\",\"tirsdag\",\"onsdag\",\"torsdag\",\"fredag\",\"lørdag\" ],
\tdayNamesMin: [ \"sø\",\"ma\",\"ti\",\"on\",\"to\",\"fr\",\"lø\" ],
\tweekHeader: \"Uke\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\"
};
datepicker.setDefaults( datepicker.regional.no );

return datepicker.regional.no;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-no.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-no.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-no.js");
    }
}
