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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-lt.js */
class __TwigTemplate_8beec512f1926e216fad983cb775bf166553ea91c90bb3ea315cc41a43b55d3f extends Template
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
        echo "/* Lithuanian (UTF-8) initialisation for the jQuery UI date picker plugin. */
/* @author Arturas Paleicikas <arturas@avalon.lt> */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.lt = {
\tcloseText: \"Uždaryti\",
\tprevText: \"&#x3C;Atgal\",
\tnextText: \"Pirmyn&#x3E;\",
\tcurrentText: \"Šiandien\",
\tmonthNames: [ \"Sausis\",\"Vasaris\",\"Kovas\",\"Balandis\",\"Gegužė\",\"Birželis\",
\t\"Liepa\",\"Rugpjūtis\",\"Rugsėjis\",\"Spalis\",\"Lapkritis\",\"Gruodis\" ],
\tmonthNamesShort: [ \"Sau\",\"Vas\",\"Kov\",\"Bal\",\"Geg\",\"Bir\",
\t\"Lie\",\"Rugp\",\"Rugs\",\"Spa\",\"Lap\",\"Gru\" ],
\tdayNames: [
\t\t\"sekmadienis\",
\t\t\"pirmadienis\",
\t\t\"antradienis\",
\t\t\"trečiadienis\",
\t\t\"ketvirtadienis\",
\t\t\"penktadienis\",
\t\t\"šeštadienis\"
\t],
\tdayNamesShort: [ \"sek\",\"pir\",\"ant\",\"tre\",\"ket\",\"pen\",\"šeš\" ],
\tdayNamesMin: [ \"Se\",\"Pr\",\"An\",\"Tr\",\"Ke\",\"Pe\",\"Še\" ],
\tweekHeader: \"SAV\",
\tdateFormat: \"yy-mm-dd\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: true,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.lt );

return datepicker.regional.lt;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-lt.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-lt.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-lt.js");
    }
}
