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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-uk.js */
class __TwigTemplate_e1eb98ef1e8889df595bd3b7e48cc45b9ffcf03d74496767bf2f8d7cb4bae18e extends Template
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
        echo "/* Ukrainian (UTF-8) initialisation for the jQuery UI date picker plugin. */
/* Written by Maxim Drogobitskiy (maxdao@gmail.com). */
/* Corrected by Igor Milla (igor.fsp.milla@gmail.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.uk = {
\tcloseText: \"Закрити\",
\tprevText: \"&#x3C;\",
\tnextText: \"&#x3E;\",
\tcurrentText: \"Сьогодні\",
\tmonthNames: [ \"Січень\",\"Лютий\",\"Березень\",\"Квітень\",\"Травень\",\"Червень\",
\t\"Липень\",\"Серпень\",\"Вересень\",\"Жовтень\",\"Листопад\",\"Грудень\" ],
\tmonthNamesShort: [ \"Січ\",\"Лют\",\"Бер\",\"Кві\",\"Тра\",\"Чер\",
\t\"Лип\",\"Сер\",\"Вер\",\"Жов\",\"Лис\",\"Гру\" ],
\tdayNames: [ \"неділя\",\"понеділок\",\"вівторок\",\"середа\",\"четвер\",\"п’ятниця\",\"субота\" ],
\tdayNamesShort: [ \"нед\",\"пнд\",\"вів\",\"срд\",\"чтв\",\"птн\",\"сбт\" ],
\tdayNamesMin: [ \"Нд\",\"Пн\",\"Вт\",\"Ср\",\"Чт\",\"Пт\",\"Сб\" ],
\tweekHeader: \"Тиж\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.uk );

return datepicker.regional.uk;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-uk.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-uk.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-uk.js");
    }
}
