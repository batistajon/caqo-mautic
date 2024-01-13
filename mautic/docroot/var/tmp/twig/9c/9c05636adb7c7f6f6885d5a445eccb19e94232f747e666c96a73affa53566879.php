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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ru.js */
class __TwigTemplate_779358fe41d0db89314f15bb4f323de454fa9df927093ffa76d2e8e22fd1ebec extends Template
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
        echo "/* Russian (UTF-8) initialisation for the jQuery UI date picker plugin. */
/* Written by Andrew Stromnov (stromnov@gmail.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.ru = {
\tcloseText: \"Закрыть\",
\tprevText: \"&#x3C;Пред\",
\tnextText: \"След&#x3E;\",
\tcurrentText: \"Сегодня\",
\tmonthNames: [ \"Январь\",\"Февраль\",\"Март\",\"Апрель\",\"Май\",\"Июнь\",
\t\"Июль\",\"Август\",\"Сентябрь\",\"Октябрь\",\"Ноябрь\",\"Декабрь\" ],
\tmonthNamesShort: [ \"Янв\",\"Фев\",\"Мар\",\"Апр\",\"Май\",\"Июн\",
\t\"Июл\",\"Авг\",\"Сен\",\"Окт\",\"Ноя\",\"Дек\" ],
\tdayNames: [ \"воскресенье\",\"понедельник\",\"вторник\",\"среда\",\"четверг\",\"пятница\",\"суббота\" ],
\tdayNamesShort: [ \"вск\",\"пнд\",\"втр\",\"срд\",\"чтв\",\"птн\",\"сбт\" ],
\tdayNamesMin: [ \"Вс\",\"Пн\",\"Вт\",\"Ср\",\"Чт\",\"Пт\",\"Сб\" ],
\tweekHeader: \"Нед\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.ru );

return datepicker.regional.ru;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ru.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ru.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ru.js");
    }
}
