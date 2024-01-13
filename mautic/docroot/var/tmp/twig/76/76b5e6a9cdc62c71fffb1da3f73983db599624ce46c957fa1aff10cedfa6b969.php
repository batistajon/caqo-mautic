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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/eu.js */
class __TwigTemplate_172b9d03c65a5c4441ebec1a658b88d5ff2511929024b5de8770197d1cc4640e extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"eu\",{btnIgnore:\"Ezikusi\",btnIgnoreAll:\"Denak Ezikusi\",btnReplace:\"Ordezkatu\",btnReplaceAll:\"Denak Ordezkatu\",btnUndo:\"Desegin\",changeTo:\"Honekin ordezkatu\",errorLoading:\"Errorea gertatu da aplikazioa zerbitzaritik kargatzean: %s.\",ieSpellDownload:\"Zuzentzaile ortografikoa ez dago instalatuta. Deskargatu nahi duzu?\",manyChanges:\"Zuzenketa ortografikoa bukatuta: %1 hitz aldatu dira\",noChanges:\"Zuzenketa ortografikoa bukatuta: Ez da ezer aldatu\",noMispell:\"Zuzenketa ortografikoa bukatuta: Akatsik ez\",
noSuggestions:\"- Iradokizunik ez -\",notAvailable:\"Barkatu baina momentu honetan zerbitzua ez dago erabilgarri.\",notInDic:\"Ez dago hiztegian\",oneChange:\"Zuzenketa ortografikoa bukatuta: Hitz bat aldatu da\",progress:\"Zuzenketa ortografikoa martxan...\",title:\"Ortografia zuzenketa\",toolbar:\"Ortografia\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/eu.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/eu.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/eu.js");
    }
}
