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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ar.js */
class __TwigTemplate_6504446a02a133e023a0ba1112fd1d5f236f371f1442e118a567fc19c7fbfd90 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"ar\",{btnIgnore:\"تجاهل\",btnIgnoreAll:\"تجاهل الكل\",btnReplace:\"تغيير\",btnReplaceAll:\"تغيير الكل\",btnUndo:\"تراجع\",changeTo:\"التغيير إلى\",errorLoading:\"خطأ في تحميل تطبيق خدمة الاستضافة: %s.\",ieSpellDownload:\"المدقق الإملائي (الإنجليزي) غير مثبّت. هل تود تحميله الآن؟\",manyChanges:\"تم إكمال التدقيق الإملائي: تم تغيير %1 من كلمات\",noChanges:\"تم التدقيق الإملائي: لم يتم تغيير أي كلمة\",noMispell:\"تم التدقيق الإملائي: لم يتم العثور على أي أخطاء إملائية\",noSuggestions:\"- لا توجد إقتراحات -\",
notAvailable:\"عفواً، ولكن هذه الخدمة غير متاحة الان\",notInDic:\"ليست في القاموس\",oneChange:\"تم التدقيق الإملائي: تم تغيير كلمة واحدة فقط\",progress:\"جاري التدقيق الاملائى\",title:\"التدقيق الإملائي\",toolbar:\"تدقيق إملائي\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ar.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ar.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ar.js");
    }
}
