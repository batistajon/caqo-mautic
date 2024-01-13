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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-vi.js */
class __TwigTemplate_3d4432f9b4fe6c0f33fdb66560238dcf1ae73174a650bf6217c84a2656cba51f extends Template
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
        echo "/* Vietnamese initialisation for the jQuery UI date picker plugin. */
/* Translated by Le Thanh Huy (lthanhhuy@cit.ctu.edu.vn). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.vi = {
\tcloseText: \"Đóng\",
\tprevText: \"&#x3C;Trước\",
\tnextText: \"Tiếp&#x3E;\",
\tcurrentText: \"Hôm nay\",
\tmonthNames: [ \"Tháng Một\", \"Tháng Hai\", \"Tháng Ba\", \"Tháng Tư\", \"Tháng Năm\", \"Tháng Sáu\",
\t\"Tháng Bảy\", \"Tháng Tám\", \"Tháng Chín\", \"Tháng Mười\", \"Tháng Mười Một\", \"Tháng Mười Hai\" ],
\tmonthNamesShort: [ \"Tháng 1\", \"Tháng 2\", \"Tháng 3\", \"Tháng 4\", \"Tháng 5\", \"Tháng 6\",
\t\"Tháng 7\", \"Tháng 8\", \"Tháng 9\", \"Tháng 10\", \"Tháng 11\", \"Tháng 12\" ],
\tdayNames: [ \"Chủ Nhật\", \"Thứ Hai\", \"Thứ Ba\", \"Thứ Tư\", \"Thứ Năm\", \"Thứ Sáu\", \"Thứ Bảy\" ],
\tdayNamesShort: [ \"CN\", \"T2\", \"T3\", \"T4\", \"T5\", \"T6\", \"T7\" ],
\tdayNamesMin: [ \"CN\", \"T2\", \"T3\", \"T4\", \"T5\", \"T6\", \"T7\" ],
\tweekHeader: \"Tu\",
\tdateFormat: \"dd/mm/yy\",
\tfirstDay: 0,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.vi );

return datepicker.regional.vi;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-vi.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-vi.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-vi.js");
    }
}
