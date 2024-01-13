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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sr.js */
class __TwigTemplate_0eb9c4c01be55780261ec6a4fc3a118dfffeec3e5442133e1a555ad99f3dc563 extends Template
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
        echo "/* Serbian i18n for the jQuery UI date picker plugin. */
/* Written by Dejan Dimić. */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.sr = {
\tcloseText: \"Затвори\",
\tprevText: \"&#x3C;\",
\tnextText: \"&#x3E;\",
\tcurrentText: \"Данас\",
\tmonthNames: [ \"Јануар\",\"Фебруар\",\"Март\",\"Април\",\"Мај\",\"Јун\",
\t\"Јул\",\"Август\",\"Септембар\",\"Октобар\",\"Новембар\",\"Децембар\" ],
\tmonthNamesShort: [ \"Јан\",\"Феб\",\"Мар\",\"Апр\",\"Мај\",\"Јун\",
\t\"Јул\",\"Авг\",\"Сеп\",\"Окт\",\"Нов\",\"Дец\" ],
\tdayNames: [ \"Недеља\",\"Понедељак\",\"Уторак\",\"Среда\",\"Четвртак\",\"Петак\",\"Субота\" ],
\tdayNamesShort: [ \"Нед\",\"Пон\",\"Уто\",\"Сре\",\"Чет\",\"Пет\",\"Суб\" ],
\tdayNamesMin: [ \"Не\",\"По\",\"Ут\",\"Ср\",\"Че\",\"Пе\",\"Су\" ],
\tweekHeader: \"Сед\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.sr );

return datepicker.regional.sr;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sr.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sr.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sr.js");
    }
}
