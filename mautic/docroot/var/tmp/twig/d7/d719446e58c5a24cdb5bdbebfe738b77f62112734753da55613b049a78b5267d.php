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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/th.js */
class __TwigTemplate_cbd3357ee813d1f3ea95e8e4fe5f516c85360e7a43ae459bd0426ce4ae118e46 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"th\",{btnIgnore:\"ยกเว้น\",btnIgnoreAll:\"ยกเว้นทั้งหมด\",btnReplace:\"แทนที่\",btnReplaceAll:\"แทนที่ทั้งหมด\",btnUndo:\"ยกเลิก\",changeTo:\"แก้ไขเป็น\",errorLoading:\"Error loading application service host: %s.\",ieSpellDownload:\"ไม่ได้ติดตั้งระบบตรวจสอบคำสะกด. ต้องการติดตั้งไหมครับ?\",manyChanges:\"ตรวจสอบคำสะกดเสร็จสิ้น:: แก้ไข %1 คำ\",noChanges:\"ตรวจสอบคำสะกดเสร็จสิ้น: ไม่มีการแก้คำใดๆ\",noMispell:\"ตรวจสอบคำสะกดเสร็จสิ้น: ไม่พบคำสะกดผิด\",noSuggestions:\"- ไม่มีคำแนะนำใดๆ -\",notAvailable:\"Sorry, but service is unavailable now.\",
notInDic:\"ไม่พบในดิกชันนารี\",oneChange:\"ตรวจสอบคำสะกดเสร็จสิ้น: แก้ไข1คำ\",progress:\"กำลังตรวจสอบคำสะกด...\",title:\"Spell Checker\",toolbar:\"ตรวจการสะกดคำ\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/th.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/th.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/th.js");
    }
}
