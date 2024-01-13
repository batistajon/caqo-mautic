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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-bg.js */
class __TwigTemplate_16d694d2bbe243db39a8bc6b6fdfdd6e89bcd2df311260aea83bb7ab8797ced1 extends Template
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
        echo "/* Bulgarian initialisation for the jQuery UI date picker plugin. */
/* Written by Stoyan Kyosev (http://svest.org). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.bg = {
\tcloseText: \"затвори\",
\tprevText: \"&#x3C;назад\",
\tnextText: \"напред&#x3E;\",
\tnextBigText: \"&#x3E;&#x3E;\",
\tcurrentText: \"днес\",
\tmonthNames: [ \"Януари\",\"Февруари\",\"Март\",\"Април\",\"Май\",\"Юни\",
\t\"Юли\",\"Август\",\"Септември\",\"Октомври\",\"Ноември\",\"Декември\" ],
\tmonthNamesShort: [ \"Яну\",\"Фев\",\"Мар\",\"Апр\",\"Май\",\"Юни\",
\t\"Юли\",\"Авг\",\"Сеп\",\"Окт\",\"Нов\",\"Дек\" ],
\tdayNames: [ \"Неделя\",\"Понеделник\",\"Вторник\",\"Сряда\",\"Четвъртък\",\"Петък\",\"Събота\" ],
\tdayNamesShort: [ \"Нед\",\"Пон\",\"Вто\",\"Сря\",\"Чет\",\"Пет\",\"Съб\" ],
\tdayNamesMin: [ \"Не\",\"По\",\"Вт\",\"Ср\",\"Че\",\"Пе\",\"Съ\" ],
\tweekHeader: \"Wk\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.bg );

return datepicker.regional.bg;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-bg.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-bg.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-bg.js");
    }
}
