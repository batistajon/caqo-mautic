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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/fo.js */
class __TwigTemplate_fec8d33b4500e9271ebe03f277600d177cece7be794651900f21a000c2ec464b extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"fo\",{btnIgnore:\"Forfjóna\",btnIgnoreAll:\"Forfjóna alt\",btnReplace:\"Yvirskriva\",btnReplaceAll:\"Yvirskriva alt\",btnUndo:\"Angra\",changeTo:\"Broyt til\",errorLoading:\"Feilur við innlesing av application service host: %s.\",ieSpellDownload:\"Rættstavarin er ikki tøkur í tekstviðgeranum. Vilt tú heinta hann nú?\",manyChanges:\"Rættstavarin liðugur: %1 orð broytt\",noChanges:\"Rættstavarin liðugur: Einki orð varð broytt\",noMispell:\"Rættstavarin liðugur: Eingin feilur funnin\",noSuggestions:\"- Einki uppskot -\",
notAvailable:\"Tíverri, ikki tøkt í løtuni.\",notInDic:\"Finst ikki í orðabókini\",oneChange:\"Rættstavarin liðugur: Eitt orð er broytt\",progress:\"Rættstavarin arbeiðir...\",title:\"Kanna stavseting\",toolbar:\"Kanna stavseting\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/fo.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/fo.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/fo.js");
    }
}
