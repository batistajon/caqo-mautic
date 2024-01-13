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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-az.js */
class __TwigTemplate_971c5058e2cd4fe9e9607615b6c72733aba7b0b04e57ef5a56be4c721424f572 extends Template
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
        echo "/* Azerbaijani (UTF-8) initialisation for the jQuery UI date picker plugin. */
/* Written by Jamil Najafov (necefov33@gmail.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.az = {
\tcloseText: \"Bağla\",
\tprevText: \"&#x3C;Geri\",
\tnextText: \"İrəli&#x3E;\",
\tcurrentText: \"Bugün\",
\tmonthNames: [ \"Yanvar\",\"Fevral\",\"Mart\",\"Aprel\",\"May\",\"İyun\",
\t\"İyul\",\"Avqust\",\"Sentyabr\",\"Oktyabr\",\"Noyabr\",\"Dekabr\" ],
\tmonthNamesShort: [ \"Yan\",\"Fev\",\"Mar\",\"Apr\",\"May\",\"İyun\",
\t\"İyul\",\"Avq\",\"Sen\",\"Okt\",\"Noy\",\"Dek\" ],
\tdayNames: [ \"Bazar\",\"Bazar ertəsi\",\"Çərşənbə axşamı\",\"Çərşənbə\",\"Cümə axşamı\",\"Cümə\",\"Şənbə\" ],
\tdayNamesShort: [ \"B\",\"Be\",\"Ça\",\"Ç\",\"Ca\",\"C\",\"Ş\" ],
\tdayNamesMin: [ \"B\",\"B\",\"Ç\",\"С\",\"Ç\",\"C\",\"Ş\" ],
\tweekHeader: \"Hf\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.az );

return datepicker.regional.az;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-az.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-az.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-az.js");
    }
}
