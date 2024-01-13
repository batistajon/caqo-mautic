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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-tj.js */
class __TwigTemplate_af7982e6e3b9f8c0e5f90ea31e767fe5e73ebc0ad28da1a7a32748e82a6e1423 extends Template
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
        echo "/* Tajiki (UTF-8) initialisation for the jQuery UI date picker plugin. */
/* Written by Abdurahmon Saidov (saidovab@gmail.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.tj = {
\tcloseText: \"Идома\",
\tprevText: \"&#x3c;Қафо\",
\tnextText: \"Пеш&#x3e;\",
\tcurrentText: \"Имрӯз\",
\tmonthNames: [ \"Январ\",\"Феврал\",\"Март\",\"Апрел\",\"Май\",\"Июн\",
\t\"Июл\",\"Август\",\"Сентябр\",\"Октябр\",\"Ноябр\",\"Декабр\" ],
\tmonthNamesShort: [ \"Янв\",\"Фев\",\"Мар\",\"Апр\",\"Май\",\"Июн\",
\t\"Июл\",\"Авг\",\"Сен\",\"Окт\",\"Ноя\",\"Дек\" ],
\tdayNames: [ \"якшанбе\",\"душанбе\",\"сешанбе\",\"чоршанбе\",\"панҷшанбе\",\"ҷумъа\",\"шанбе\" ],
\tdayNamesShort: [ \"якш\",\"душ\",\"сеш\",\"чор\",\"пан\",\"ҷум\",\"шан\" ],
\tdayNamesMin: [ \"Як\",\"Дш\",\"Сш\",\"Чш\",\"Пш\",\"Ҷм\",\"Шн\" ],
\tweekHeader: \"Хф\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.tj );

return datepicker.regional.tj;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-tj.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-tj.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-tj.js");
    }
}
