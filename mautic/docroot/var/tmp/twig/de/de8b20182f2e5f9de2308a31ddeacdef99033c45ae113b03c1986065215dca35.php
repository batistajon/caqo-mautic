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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/he.js */
class __TwigTemplate_ebc916ddce06805c83ac26a029732050f7d27a55d848bd8b39c45fd11721520c extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"he\",{btnIgnore:\"התעלמות\",btnIgnoreAll:\"התעלמות מהכל\",btnReplace:\"החלפה\",btnReplaceAll:\"החלפת הכל\",btnUndo:\"החזרה\",changeTo:\"שינוי ל\",errorLoading:\"שגיאה בהעלאת השירות: %s.\",ieSpellDownload:\"בודק האיות לא מותקן, האם להורידו?\",manyChanges:\"בדיקות איות הסתיימה: %1 מילים שונו\",noChanges:\"בדיקות איות הסתיימה: לא שונתה אף מילה\",noMispell:\"בדיקות איות הסתיימה: לא נמצאו שגיאות כתיב\",noSuggestions:\"- אין הצעות -\",notAvailable:\"לא נמצא שירות זמין.\",notInDic:\"לא נמצא במילון\",
oneChange:\"בדיקות איות הסתיימה: שונתה מילה אחת\",progress:\"בודק האיות בתהליך בדיקה....\",title:\"בדיקת איות\",toolbar:\"בדיקת איות\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/he.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/he.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/he.js");
    }
}
