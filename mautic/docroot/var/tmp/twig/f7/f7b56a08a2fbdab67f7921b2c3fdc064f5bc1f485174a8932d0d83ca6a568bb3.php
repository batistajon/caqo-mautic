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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ms.js */
class __TwigTemplate_a9ef5aa69e3750efd30c4f3e9901b07090cfc98740056fc0fd73edf2dc1f2b54 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"ms\",{btnIgnore:\"Biar\",btnIgnoreAll:\"Biarkan semua\",btnReplace:\"Ganti\",btnReplaceAll:\"Gantikan Semua\",btnUndo:\"Batalkan\",changeTo:\"Tukarkan kepada\",errorLoading:\"Error loading application service host: %s.\",ieSpellDownload:\"Pemeriksa ejaan tidak dipasang. Adakah anda mahu muat turun sekarang?\",manyChanges:\"Pemeriksaan ejaan siap: %1 perkataan diubah\",noChanges:\"Pemeriksaan ejaan siap: Tiada perkataan diubah\",noMispell:\"Pemeriksaan ejaan siap: Tiada salah ejaan\",noSuggestions:\"- Tiada cadangan -\",
notAvailable:\"Sorry, but service is unavailable now.\",notInDic:\"Tidak terdapat didalam kamus\",oneChange:\"Pemeriksaan ejaan siap: Satu perkataan telah diubah\",progress:\"Pemeriksaan ejaan sedang diproses...\",title:\"Spell Checker\",toolbar:\"Semak Ejaan\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ms.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ms.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ms.js");
    }
}
