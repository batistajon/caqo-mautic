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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ky.js */
class __TwigTemplate_c1b18f858aef7643fef6a2aa0dbb9744891417cb637e653cd54b10e5aa40bacb extends Template
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
        echo "/* Kyrgyz (UTF-8) initialisation for the jQuery UI date picker plugin. */
/* Written by Sergey Kartashov (ebishkek@yandex.ru). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.ky = {
\tcloseText: \"Жабуу\",
\tprevText: \"&#x3c;Мур\",
\tnextText: \"Кий&#x3e;\",
\tcurrentText: \"Бүгүн\",
\tmonthNames: [ \"Январь\",\"Февраль\",\"Март\",\"Апрель\",\"Май\",\"Июнь\",
\t\"Июль\",\"Август\",\"Сентябрь\",\"Октябрь\",\"Ноябрь\",\"Декабрь\" ],
\tmonthNamesShort: [ \"Янв\",\"Фев\",\"Мар\",\"Апр\",\"Май\",\"Июн\",
\t\"Июл\",\"Авг\",\"Сен\",\"Окт\",\"Ноя\",\"Дек\" ],
\tdayNames: [ \"жекшемби\", \"дүйшөмбү\", \"шейшемби\", \"шаршемби\", \"бейшемби\", \"жума\", \"ишемби\" ],
\tdayNamesShort: [ \"жек\", \"дүй\", \"шей\", \"шар\", \"бей\", \"жум\", \"ише\" ],
\tdayNamesMin: [ \"Жк\",\"Дш\",\"Шш\",\"Шр\",\"Бш\",\"Жм\",\"Иш\" ],
\tweekHeader: \"Жум\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\"
};
datepicker.setDefaults( datepicker.regional.ky );

return datepicker.regional.ky;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ky.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ky.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ky.js");
    }
}
