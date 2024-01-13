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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/mn.js */
class __TwigTemplate_c29c86525be28fb88bbaa4e58909fdc047890830f33f09bf556d4a1a164b4b04 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"mn\",{btnIgnore:\"Зөвшөөрөх\",btnIgnoreAll:\"Бүгдийг зөвшөөрөх\",btnReplace:\"Солих\",btnReplaceAll:\"Бүгдийг Дарж бичих\",btnUndo:\"Буцаах\",changeTo:\"Өөрчлөх\",errorLoading:\"Error loading application service host: %s.\",ieSpellDownload:\"Дүрэм шалгагч суугаагүй байна. Татаж авахыг хүсч байна уу?\",manyChanges:\"Дүрэм шалгаад дууссан: %1 үг өөрчлөгдсөн\",noChanges:\"Дүрэм шалгаад дууссан: үг өөрчлөгдөөгүй\",noMispell:\"Дүрэм шалгаад дууссан: Алдаа олдсонгүй\",noSuggestions:\"- Тайлбаргүй -\",
notAvailable:\"Sorry, but service is unavailable now.\",notInDic:\"Толь бичиггүй\",oneChange:\"Дүрэм шалгаад дууссан: 1 үг өөрчлөгдсөн\",progress:\"Дүрэм шалгаж байгаа үйл явц...\",title:\"Spell Checker\",toolbar:\"Үгийн дүрэх шалгах\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/mn.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/mn.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/mn.js");
    }
}
