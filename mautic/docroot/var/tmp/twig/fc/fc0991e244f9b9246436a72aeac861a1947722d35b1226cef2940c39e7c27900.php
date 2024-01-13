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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ms.js */
class __TwigTemplate_97fd9c1ab0c196586db8dfe27959fe7b7be1908e2e7a70252697db6753ef96ec extends Template
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
        echo "/* Malaysian initialisation for the jQuery UI date picker plugin. */
/* Written by Mohd Nawawi Mohamad Jamili (nawawi@ronggeng.net). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.ms = {
\tcloseText: \"Tutup\",
\tprevText: \"&#x3C;Sebelum\",
\tnextText: \"Selepas&#x3E;\",
\tcurrentText: \"hari ini\",
\tmonthNames: [ \"Januari\",\"Februari\",\"Mac\",\"April\",\"Mei\",\"Jun\",
\t\"Julai\",\"Ogos\",\"September\",\"Oktober\",\"November\",\"Disember\" ],
\tmonthNamesShort: [ \"Jan\",\"Feb\",\"Mac\",\"Apr\",\"Mei\",\"Jun\",
\t\"Jul\",\"Ogo\",\"Sep\",\"Okt\",\"Nov\",\"Dis\" ],
\tdayNames: [ \"Ahad\",\"Isnin\",\"Selasa\",\"Rabu\",\"Khamis\",\"Jumaat\",\"Sabtu\" ],
\tdayNamesShort: [ \"Aha\",\"Isn\",\"Sel\",\"Rab\",\"kha\",\"Jum\",\"Sab\" ],
\tdayNamesMin: [ \"Ah\",\"Is\",\"Se\",\"Ra\",\"Kh\",\"Ju\",\"Sa\" ],
\tweekHeader: \"Mg\",
\tdateFormat: \"dd/mm/yy\",
\tfirstDay: 0,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.ms );

return datepicker.regional.ms;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ms.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ms.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ms.js");
    }
}
