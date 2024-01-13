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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/fa.js */
class __TwigTemplate_9198f9fbec6eb494bfc550dea36e891a3823a6fab4768df0fafd466cb2c38b0a extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"fa\",{btnIgnore:\"چشمپوشی\",btnIgnoreAll:\"چشمپوشی همه\",btnReplace:\"جایگزینی\",btnReplaceAll:\"جایگزینی همه\",btnUndo:\"واچینش\",changeTo:\"تغییر به\",errorLoading:\"خطا در بارگیری برنامه خدمات میزبان: %s.\",ieSpellDownload:\"بررسی کنندهٴ املا نصب نشده است. آیا میخواهید آن را هماکنون دریافت کنید؟\",manyChanges:\"بررسی املا انجام شد. %1 واژه تغییر یافت\",noChanges:\"بررسی املا انجام شد. هیچ واژهای تغییر نیافت\",noMispell:\"بررسی املا انجام شد. هیچ غلط املائی یافت نشد\",noSuggestions:\"- پیشنهادی نیست -\",
notAvailable:\"با عرض پوزش خدمات الان در دسترس نیستند.\",notInDic:\"در واژه~نامه یافت نشد\",oneChange:\"بررسی املا انجام شد. یک واژه تغییر یافت\",progress:\"بررسی املا در حال انجام...\",title:\"بررسی املا\",toolbar:\"بررسی املا\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/fa.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/fa.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/fa.js");
    }
}
