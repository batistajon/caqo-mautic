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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/tr.js */
class __TwigTemplate_0d8be4781385c407d58c527cb4a0a1924e4f27fe782da2b0074e2814a8df9196 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"tr\",{btnIgnore:\"Yoksay\",btnIgnoreAll:\"Tümünü Yoksay\",btnReplace:\"Değiştir\",btnReplaceAll:\"Tümünü Değiştir\",btnUndo:\"Geri Al\",changeTo:\"Şuna değiştir:\",errorLoading:\"Uygulamada yüklerken hata oluştu: %s.\",ieSpellDownload:\"Yazım denetimi yüklenmemiş. Şimdi yüklemek ister misiniz?\",manyChanges:\"Yazım denetimi tamamlandı: %1 kelime değiştirildi\",noChanges:\"Yazım denetimi tamamlandı: Hiçbir kelime değiştirilmedi\",noMispell:\"Yazım denetimi tamamlandı: Yanlış yazıma rastlanmadı\",
noSuggestions:\"- Öneri Yok -\",notAvailable:\"Üzügünüz, bu servis şuanda hizmet dışıdır.\",notInDic:\"Sözlükte Yok\",oneChange:\"Yazım denetimi tamamlandı: Bir kelime değiştirildi\",progress:\"Yazım denetimi işlemde...\",title:\"Yazımı Denetle\",toolbar:\"Yazım Denetimi\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/tr.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/tr.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/tr.js");
    }
}
