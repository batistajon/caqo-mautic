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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-lv.js */
class __TwigTemplate_c8ee69ff7ac697c3beb6109075f5f8608e28be98ee0ffac42f18124032de5f54 extends Template
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
        echo "/* Latvian (UTF-8) initialisation for the jQuery UI date picker plugin. */
/* @author Arturas Paleicikas <arturas.paleicikas@metasite.net> */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.lv = {
\tcloseText: \"Aizvērt\",
\tprevText: \"Iepr.\",
\tnextText: \"Nāk.\",
\tcurrentText: \"Šodien\",
\tmonthNames: [ \"Janvāris\",\"Februāris\",\"Marts\",\"Aprīlis\",\"Maijs\",\"Jūnijs\",
\t\"Jūlijs\",\"Augusts\",\"Septembris\",\"Oktobris\",\"Novembris\",\"Decembris\" ],
\tmonthNamesShort: [ \"Jan\",\"Feb\",\"Mar\",\"Apr\",\"Mai\",\"Jūn\",
\t\"Jūl\",\"Aug\",\"Sep\",\"Okt\",\"Nov\",\"Dec\" ],
\tdayNames: [
\t\t\"svētdiena\",
\t\t\"pirmdiena\",
\t\t\"otrdiena\",
\t\t\"trešdiena\",
\t\t\"ceturtdiena\",
\t\t\"piektdiena\",
\t\t\"sestdiena\"
\t],
\tdayNamesShort: [ \"svt\",\"prm\",\"otr\",\"tre\",\"ctr\",\"pkt\",\"sst\" ],
\tdayNamesMin: [ \"Sv\",\"Pr\",\"Ot\",\"Tr\",\"Ct\",\"Pk\",\"Ss\" ],
\tweekHeader: \"Ned.\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.lv );

return datepicker.regional.lv;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-lv.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-lv.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-lv.js");
    }
}
