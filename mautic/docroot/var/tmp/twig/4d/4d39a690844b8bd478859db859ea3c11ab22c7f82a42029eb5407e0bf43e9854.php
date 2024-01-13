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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ja.js */
class __TwigTemplate_1fa7fb6bdf6d929dde18bd75b3679a2761b6916409a978ce057efc15964c6820 extends Template
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
        echo "/* Japanese initialisation for the jQuery UI date picker plugin. */
/* Written by Kentaro SATO (kentaro@ranvis.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.ja = {
\tcloseText: \"閉じる\",
\tprevText: \"&#x3C;前\",
\tnextText: \"次&#x3E;\",
\tcurrentText: \"今日\",
\tmonthNames: [ \"1月\",\"2月\",\"3月\",\"4月\",\"5月\",\"6月\",
\t\"7月\",\"8月\",\"9月\",\"10月\",\"11月\",\"12月\" ],
\tmonthNamesShort: [ \"1月\",\"2月\",\"3月\",\"4月\",\"5月\",\"6月\",
\t\"7月\",\"8月\",\"9月\",\"10月\",\"11月\",\"12月\" ],
\tdayNames: [ \"日曜日\",\"月曜日\",\"火曜日\",\"水曜日\",\"木曜日\",\"金曜日\",\"土曜日\" ],
\tdayNamesShort: [ \"日\",\"月\",\"火\",\"水\",\"木\",\"金\",\"土\" ],
\tdayNamesMin: [ \"日\",\"月\",\"火\",\"水\",\"木\",\"金\",\"土\" ],
\tweekHeader: \"週\",
\tdateFormat: \"yy/mm/dd\",
\tfirstDay: 0,
\tisRTL: false,
\tshowMonthAfterYear: true,
\tyearSuffix: \"年\" };
datepicker.setDefaults( datepicker.regional.ja );

return datepicker.regional.ja;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ja.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ja.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ja.js");
    }
}
