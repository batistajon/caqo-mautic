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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/km.js */
class __TwigTemplate_f5042661b54915c08ee27985cf6288598c5e0ee68ec198d57720fe0004458a35 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"km\",{btnIgnore:\"មិនផ្លាស់ប្តូរ\",btnIgnoreAll:\"មិនផ្លាស់ប្តូរ ទាំងអស់\",btnReplace:\"ជំនួស\",btnReplaceAll:\"ជំនួសទាំងអស់\",btnUndo:\"សារឡើងវិញ\",changeTo:\"ផ្លាស់ប្តូរទៅ\",errorLoading:\"Error loading application service host: %s.\",ieSpellDownload:\"ពុំមានកម្មវិធីពិនិត្យអក្ខរាវិរុទ្ធ ។ តើចង់ទាញយកពីណា?\",manyChanges:\"ការពិនិត្យអក្ខរាវិរុទ្ធបានចប់: %1 ពាក្យបានផ្លាស់ប្តូរ\",noChanges:\"ការពិនិត្យអក្ខរាវិរុទ្ធបានចប់: ពុំមានផ្លាស់ប្តូរ\",noMispell:\"ការពិនិត្យអក្ខរាវិរុទ្ធបានចប់: គ្មានកំហុស\",
noSuggestions:\"- គ្មានសំណើរ -\",notAvailable:\"Sorry, but service is unavailable now.\",notInDic:\"គ្មានក្នុងវចនានុក្រម\",oneChange:\"ការពិនិត្យអក្ខរាវិរុទ្ធបានចប់: ពាក្យមួយត្រូចបានផ្លាស់ប្តូរ\",progress:\"កំពុងពិនិត្យអក្ខរាវិរុទ្ធ...\",title:\"Spell Checker\",toolbar:\"ពិនិត្យអក្ខរាវិរុទ្ធ\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/km.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/km.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/km.js");
    }
}
