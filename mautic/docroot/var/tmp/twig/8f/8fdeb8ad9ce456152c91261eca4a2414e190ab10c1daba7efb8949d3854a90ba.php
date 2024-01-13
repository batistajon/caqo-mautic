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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-pt-BR.js */
class __TwigTemplate_8f2c8e9eebd8e7fafdf17618232b3463aec453c92afae9494db42baa96c52af8 extends Template
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
        echo "/* Brazilian initialisation for the jQuery UI date picker plugin. */
/* Written by Leonildo Costa Silva (leocsilva@gmail.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional[ \"pt-BR\" ] = {
\tcloseText: \"Fechar\",
\tprevText: \"&#x3C;Anterior\",
\tnextText: \"Próximo&#x3E;\",
\tcurrentText: \"Hoje\",
\tmonthNames: [ \"Janeiro\",\"Fevereiro\",\"Março\",\"Abril\",\"Maio\",\"Junho\",
\t\"Julho\",\"Agosto\",\"Setembro\",\"Outubro\",\"Novembro\",\"Dezembro\" ],
\tmonthNamesShort: [ \"Jan\",\"Fev\",\"Mar\",\"Abr\",\"Mai\",\"Jun\",
\t\"Jul\",\"Ago\",\"Set\",\"Out\",\"Nov\",\"Dez\" ],
\tdayNames: [
\t\t\"Domingo\",
\t\t\"Segunda-feira\",
\t\t\"Terça-feira\",
\t\t\"Quarta-feira\",
\t\t\"Quinta-feira\",
\t\t\"Sexta-feira\",
\t\t\"Sábado\"
\t],
\tdayNamesShort: [ \"Dom\",\"Seg\",\"Ter\",\"Qua\",\"Qui\",\"Sex\",\"Sáb\" ],
\tdayNamesMin: [ \"Dom\",\"Seg\",\"Ter\",\"Qua\",\"Qui\",\"Sex\",\"Sáb\" ],
\tweekHeader: \"Sm\",
\tdateFormat: \"dd/mm/yy\",
\tfirstDay: 0,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional[ \"pt-BR\" ] );

return datepicker.regional[ \"pt-BR\" ];

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-pt-BR.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-pt-BR.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-pt-BR.js");
    }
}
