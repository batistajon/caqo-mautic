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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ug.js */
class __TwigTemplate_3a8f981b2d24a091f848455d446a8223275367ec5669ddbbd8e5d68f2c501bc3 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"ug\",{btnIgnore:\"پەرۋا قىلما\",btnIgnoreAll:\"ھەممىگە پەرۋا قىلما\",btnReplace:\"ئالماشتۇر\",btnReplaceAll:\"ھەممىنى ئالماشتۇر\",btnUndo:\"يېنىۋال\",changeTo:\"ئۆزگەرت\",errorLoading:\"لازىملىق مۇلازىمېتىرنى يۈكلىگەندە خاتالىق كۆرۈلدى: %s.\",ieSpellDownload:\"ئىملا تەكشۈرۈش قىستۇرمىسى تېخى ئورنىتىلمىغان، ھازىرلا چۈشۈرەمسىز؟\",manyChanges:\"ئىملا تەكشۈرۈش تامام: %1  سۆزنى ئۆزگەرتتى\",noChanges:\"ئىملا تەكشۈرۈش تامام: ھېچقانداق سۆزنى ئۆزگەرتمىدى\",noMispell:\"ئىملا تەكشۈرۈش تامام: ئىملا خاتالىقى بايقالمىدى\",
noSuggestions:\"-تەكلىپ يوق-\",notAvailable:\"كەچۈرۈڭ، مۇلازىمېتىرنى ۋاقتىنچە ئىشلەتكىلى بولمايدۇ\",notInDic:\"لۇغەتتە يوق\",oneChange:\"ئىملا تەكشۈرۈش تامام: بىر سۆزنى ئۆزگەرتتى\",progress:\"ئىملا تەكشۈرۈۋاتىدۇ…\",title:\"ئىملا تەكشۈر\",toolbar:\"ئىملا تەكشۈر\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ug.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ug.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ug.js");
    }
}
