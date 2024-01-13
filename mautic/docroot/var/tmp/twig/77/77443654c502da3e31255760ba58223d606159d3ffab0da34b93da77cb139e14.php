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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-zh-CN.js */
class __TwigTemplate_a9158b47a96112711ddab55f0005cd3a0313cccfda772192d94eae53ca1ee39f extends Template
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
        echo "/* Chinese initialisation for the jQuery UI date picker plugin. */
/* Written by Cloudream (cloudream@gmail.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional[ \"zh-CN\" ] = {
\tcloseText: \"关闭\",
\tprevText: \"&#x3C;上月\",
\tnextText: \"下月&#x3E;\",
\tcurrentText: \"今天\",
\tmonthNames: [ \"一月\",\"二月\",\"三月\",\"四月\",\"五月\",\"六月\",
\t\"七月\",\"八月\",\"九月\",\"十月\",\"十一月\",\"十二月\" ],
\tmonthNamesShort: [ \"一月\",\"二月\",\"三月\",\"四月\",\"五月\",\"六月\",
\t\"七月\",\"八月\",\"九月\",\"十月\",\"十一月\",\"十二月\" ],
\tdayNames: [ \"星期日\",\"星期一\",\"星期二\",\"星期三\",\"星期四\",\"星期五\",\"星期六\" ],
\tdayNamesShort: [ \"周日\",\"周一\",\"周二\",\"周三\",\"周四\",\"周五\",\"周六\" ],
\tdayNamesMin: [ \"日\",\"一\",\"二\",\"三\",\"四\",\"五\",\"六\" ],
\tweekHeader: \"周\",
\tdateFormat: \"yy-mm-dd\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: true,
\tyearSuffix: \"年\" };
datepicker.setDefaults( datepicker.regional[ \"zh-CN\" ] );

return datepicker.regional[ \"zh-CN\" ];

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-zh-CN.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-zh-CN.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-zh-CN.js");
    }
}
