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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/cy.js */
class __TwigTemplate_1be47b080b931a34c90e5eef9131a07b30247e7210ab093304cd0877dfb76ac3 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"cy\",{btnIgnore:\"Anwybyddu Un\",btnIgnoreAll:\"Anwybyddu Pob\",btnReplace:\"Amnewid Un\",btnReplaceAll:\"Amnewid Pob\",btnUndo:\"Dadwneud\",changeTo:\"Newid i\",errorLoading:\"Error loading application service host: %s.\",ieSpellDownload:\"Gwirydd sillafu heb ei arsefydlu. A ydych am ei lawrlwytho nawr?\",manyChanges:\"Gwirio sillafu wedi gorffen: Newidiwyd %1 gair\",noChanges:\"Gwirio sillafu wedi gorffen: Dim newidiadau\",noMispell:\"Gwirio sillafu wedi gorffen: Dim camsillaf.\",noSuggestions:\"- Dim awgrymiadau -\",
notAvailable:\"Nid yw'r gwasanaeth hwn ar gael yn bresennol.\",notInDic:\"Nid i'w gael yn y geiriadur\",oneChange:\"Gwirio sillafu wedi gorffen: Newidiwyd 1 gair\",progress:\"Gwirio sillafu yn ar y gweill...\",title:\"Gwirio Sillafu\",toolbar:\"Gwirio Sillafu\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/cy.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/cy.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/cy.js");
    }
}
