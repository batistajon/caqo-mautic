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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/eo.js */
class __TwigTemplate_51ee9f2488e2897179b725c356d427818865e58cd1bb010ec410c5e564d124ae extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"eo\",{btnIgnore:\"Ignori\",btnIgnoreAll:\"Ignori Ĉion\",btnReplace:\"Anstataŭigi\",btnReplaceAll:\"Anstataŭigi Ĉion\",btnUndo:\"Malfari\",changeTo:\"Ŝanĝi al\",errorLoading:\"Eraro en la servoelŝuto el la gastiga komputiko: %s.\",ieSpellDownload:\"Ortografikontrolilo ne instalita. Ĉu vi volas elŝuti ĝin nun?\",manyChanges:\"Ortografikontrolado finita: %1 vortoj korektitaj\",noChanges:\"Ortografikontrolado finita: neniu vorto korektita\",noMispell:\"Ortografikontrolado finita: neniu eraro trovita\",
noSuggestions:\"- Neniu propono -\",notAvailable:\"Bedaŭrinde la servo ne funkcias nuntempe.\",notInDic:\"Ne trovita en la vortaro\",oneChange:\"Ortografikontrolado finita: unu vorto korektita\",progress:\"La ortografio estas kontrolata...\",title:\"Kontroli la ortografion\",toolbar:\"Kontroli la ortografion\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/eo.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/eo.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/eo.js");
    }
}
