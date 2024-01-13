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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ko.js */
class __TwigTemplate_bbe6d390deb95197c0630d9f7256805faa7c5312e0b989913ab1a7350403ab7a extends Template
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
        echo "/* Korean initialisation for the jQuery calendar extension. */
/* Written by DaeKwon Kang (ncrash.dk@gmail.com), Edited by Genie and Myeongjin Lee. */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.ko = {
\tcloseText: \"닫기\",
\tprevText: \"이전달\",
\tnextText: \"다음달\",
\tcurrentText: \"오늘\",
\tmonthNames: [ \"1월\",\"2월\",\"3월\",\"4월\",\"5월\",\"6월\",
\t\"7월\",\"8월\",\"9월\",\"10월\",\"11월\",\"12월\" ],
\tmonthNamesShort: [ \"1월\",\"2월\",\"3월\",\"4월\",\"5월\",\"6월\",
\t\"7월\",\"8월\",\"9월\",\"10월\",\"11월\",\"12월\" ],
\tdayNames: [ \"일요일\",\"월요일\",\"화요일\",\"수요일\",\"목요일\",\"금요일\",\"토요일\" ],
\tdayNamesShort: [ \"일\",\"월\",\"화\",\"수\",\"목\",\"금\",\"토\" ],
\tdayNamesMin: [ \"일\",\"월\",\"화\",\"수\",\"목\",\"금\",\"토\" ],
\tweekHeader: \"주\",
\tdateFormat: \"yy. m. d.\",
\tfirstDay: 0,
\tisRTL: false,
\tshowMonthAfterYear: true,
\tyearSuffix: \"년\" };
datepicker.setDefaults( datepicker.regional.ko );

return datepicker.regional.ko;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ko.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ko.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ko.js");
    }
}
