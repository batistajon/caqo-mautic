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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-mk.js */
class __TwigTemplate_1f30272b204c491954def156d79cd0cdb62ac67b579daf952c0e6fd6d337037c extends Template
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
        echo "/* Macedonian i18n for the jQuery UI date picker plugin. */
/* Written by Stojce Slavkovski. */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.mk = {
\tcloseText: \"Затвори\",
\tprevText: \"&#x3C;\",
\tnextText: \"&#x3E;\",
\tcurrentText: \"Денес\",
\tmonthNames: [ \"Јануари\",\"Февруари\",\"Март\",\"Април\",\"Мај\",\"Јуни\",
\t\"Јули\",\"Август\",\"Септември\",\"Октомври\",\"Ноември\",\"Декември\" ],
\tmonthNamesShort: [ \"Јан\",\"Фев\",\"Мар\",\"Апр\",\"Мај\",\"Јун\",
\t\"Јул\",\"Авг\",\"Сеп\",\"Окт\",\"Ное\",\"Дек\" ],
\tdayNames: [ \"Недела\",\"Понеделник\",\"Вторник\",\"Среда\",\"Четврток\",\"Петок\",\"Сабота\" ],
\tdayNamesShort: [ \"Нед\",\"Пон\",\"Вто\",\"Сре\",\"Чет\",\"Пет\",\"Саб\" ],
\tdayNamesMin: [ \"Не\",\"По\",\"Вт\",\"Ср\",\"Че\",\"Пе\",\"Са\" ],
\tweekHeader: \"Сед\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.mk );

return datepicker.regional.mk;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-mk.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-mk.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-mk.js");
    }
}
