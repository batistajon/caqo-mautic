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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-kk.js */
class __TwigTemplate_1f32d364640b82426e9206bfa9cc234953ec2dc822d05580219e27cb5c8c125f extends Template
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
        echo "/* Kazakh (UTF-8) initialisation for the jQuery UI date picker plugin. */
/* Written by Dmitriy Karasyov (dmitriy.karasyov@gmail.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.kk = {
\tcloseText: \"Жабу\",
\tprevText: \"&#x3C;Алдыңғы\",
\tnextText: \"Келесі&#x3E;\",
\tcurrentText: \"Бүгін\",
\tmonthNames: [ \"Қаңтар\",\"Ақпан\",\"Наурыз\",\"Сәуір\",\"Мамыр\",\"Маусым\",
\t\"Шілде\",\"Тамыз\",\"Қыркүйек\",\"Қазан\",\"Қараша\",\"Желтоқсан\" ],
\tmonthNamesShort: [ \"Қаң\",\"Ақп\",\"Нау\",\"Сәу\",\"Мам\",\"Мау\",
\t\"Шіл\",\"Там\",\"Қыр\",\"Қаз\",\"Қар\",\"Жел\" ],
\tdayNames: [ \"Жексенбі\",\"Дүйсенбі\",\"Сейсенбі\",\"Сәрсенбі\",\"Бейсенбі\",\"Жұма\",\"Сенбі\" ],
\tdayNamesShort: [ \"жкс\",\"дсн\",\"ссн\",\"срс\",\"бсн\",\"жма\",\"снб\" ],
\tdayNamesMin: [ \"Жк\",\"Дс\",\"Сс\",\"Ср\",\"Бс\",\"Жм\",\"Сн\" ],
\tweekHeader: \"Не\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.kk );

return datepicker.regional.kk;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-kk.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-kk.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-kk.js");
    }
}
