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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-be.js */
class __TwigTemplate_2b36b5c7d6f7d0110a3b09409db0315564b7e971352be1bb1f757e138066847a extends Template
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
        echo "/* Belarusian initialisation for the jQuery UI date picker plugin. */
/* Written by Pavel Selitskas <p.selitskas@gmail.com> */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.be = {
\tcloseText: \"Зачыніць\",
\tprevText: \"&larr;Папяр.\",
\tnextText: \"Наст.&rarr;\",
\tcurrentText: \"Сёньня\",
\tmonthNames: [ \"Студзень\",\"Люты\",\"Сакавік\",\"Красавік\",\"Травень\",\"Чэрвень\",
\t\"Ліпень\",\"Жнівень\",\"Верасень\",\"Кастрычнік\",\"Лістапад\",\"Сьнежань\" ],
\tmonthNamesShort: [ \"Сту\",\"Лют\",\"Сак\",\"Кра\",\"Тра\",\"Чэр\",
\t\"Ліп\",\"Жні\",\"Вер\",\"Кас\",\"Ліс\",\"Сьн\" ],
\tdayNames: [ \"нядзеля\",\"панядзелак\",\"аўторак\",\"серада\",\"чацьвер\",\"пятніца\",\"субота\" ],
\tdayNamesShort: [ \"ндз\",\"пнд\",\"аўт\",\"срд\",\"чцв\",\"птн\",\"сбт\" ],
\tdayNamesMin: [ \"Нд\",\"Пн\",\"Аў\",\"Ср\",\"Чц\",\"Пт\",\"Сб\" ],
\tweekHeader: \"Тд\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.be );

return datepicker.regional.be;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-be.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-be.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-be.js");
    }
}
