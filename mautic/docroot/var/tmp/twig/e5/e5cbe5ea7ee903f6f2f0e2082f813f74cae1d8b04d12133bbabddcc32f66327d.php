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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ku.js */
class __TwigTemplate_e0e902115dbf52c6ca89e7e18cb5a1cc3687583c569bbc02340818710f99a52e extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"ku\",{btnIgnore:\"پشتگوێ کردن\",btnIgnoreAll:\"پشتگوێکردنی ههمووی\",btnReplace:\"لهبریدانن\",btnReplaceAll:\"لهبریدانانی ههمووی\",btnUndo:\"پووچکردنهوه\",changeTo:\"گۆڕینی بۆ\",errorLoading:\"ههڵه لههێنانی داخوازینامهی خانهخۆێی ڕاژه: %s.\",ieSpellDownload:\"پشکنینی ڕێنووس دانهمزراوه. دهتهوێت ئێستا دایبگریت?\",manyChanges:\"پشکنینی ڕێنووس کۆتای هات: لهسهدا %1 ی وشهکان گۆڕدرا\",noChanges:\"پشکنینی ڕێنووس کۆتای هات: هیچ وشهیهك نۆگۆڕدرا\",noMispell:\"پشکنینی ڕێنووس کۆتای هات: هیچ ههڵهیهکی ڕێنووس نهدۆزراوه\",
noSuggestions:\"- هیچ پێشنیارێك -\",notAvailable:\"ببووره، لهمکاتهدا ڕاژهکه لهبهردهستا نیه.\",notInDic:\"لهفهرههنگ دانیه\",oneChange:\"پشکنینی ڕێنووس کۆتای هات: یهك وشه گۆڕدرا\",progress:\"پشکنینی ڕێنووس لهبهردهوامبوون دایه...\",title:\"پشکنینی ڕێنووس\",toolbar:\"پشکنینی ڕێنووس\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ku.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ku.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ku.js");
    }
}
