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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-th.js */
class __TwigTemplate_78836ef46b0a525cfccc5e41a45822aeaf5e231303ba27d951e6060bff6b3b1b extends Template
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
        echo "/* Thai initialisation for the jQuery UI date picker plugin. */
/* Written by pipo (pipo@sixhead.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.th = {
\tcloseText: \"ปิด\",
\tprevText: \"&#xAB;&#xA0;ย้อน\",
\tnextText: \"ถัดไป&#xA0;&#xBB;\",
\tcurrentText: \"วันนี้\",
\tmonthNames: [ \"มกราคม\",\"กุมภาพันธ์\",\"มีนาคม\",\"เมษายน\",\"พฤษภาคม\",\"มิถุนายน\",
\t\"กรกฎาคม\",\"สิงหาคม\",\"กันยายน\",\"ตุลาคม\",\"พฤศจิกายน\",\"ธันวาคม\" ],
\tmonthNamesShort: [ \"ม.ค.\",\"ก.พ.\",\"มี.ค.\",\"เม.ย.\",\"พ.ค.\",\"มิ.ย.\",
\t\"ก.ค.\",\"ส.ค.\",\"ก.ย.\",\"ต.ค.\",\"พ.ย.\",\"ธ.ค.\" ],
\tdayNames: [ \"อาทิตย์\",\"จันทร์\",\"อังคาร\",\"พุธ\",\"พฤหัสบดี\",\"ศุกร์\",\"เสาร์\" ],
\tdayNamesShort: [ \"อา.\",\"จ.\",\"อ.\",\"พ.\",\"พฤ.\",\"ศ.\",\"ส.\" ],
\tdayNamesMin: [ \"อา.\",\"จ.\",\"อ.\",\"พ.\",\"พฤ.\",\"ศ.\",\"ส.\" ],
\tweekHeader: \"Wk\",
\tdateFormat: \"dd/mm/yy\",
\tfirstDay: 0,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.th );

return datepicker.regional.th;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-th.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-th.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-th.js");
    }
}
