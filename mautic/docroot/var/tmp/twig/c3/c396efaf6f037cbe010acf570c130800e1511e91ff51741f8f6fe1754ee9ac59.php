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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/bn.js */
class __TwigTemplate_d2d193206abe2c93bc17825bf7e9d8175d6b5b811c206a9d836d324c4d12be52 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"bn\",{btnIgnore:\"ইগনোর কর\",btnIgnoreAll:\"সব ইগনোর কর\",btnReplace:\"বদলে দাও\",btnReplaceAll:\"সব বদলে দাও\",btnUndo:\"আন্ডু\",changeTo:\"এতে বদলাও\",errorLoading:\"Error loading application service host: %s.\",ieSpellDownload:\"বানান পরীক্ষক ইনস্টল করা নেই। আপনি কি এখনই এটা ডাউনলোড করতে চান?\",manyChanges:\"বানান পরীক্ষা শেষ: %1 গুলো শব্দ বদলে গ্যাছে\",noChanges:\"বানান পরীক্ষা শেষ: কোন শব্দ পরিবর্তন করা হয়নি\",noMispell:\"বানান পরীক্ষা শেষ: কোন ভুল বানান পাওয়া যায়নি\",noSuggestions:\"- কোন সাজেশন নেই -\",
notAvailable:\"Sorry, but service is unavailable now.\",notInDic:\"শব্দকোষে নেই\",oneChange:\"বানান পরীক্ষা শেষ: একটি মাত্র শব্দ পরিবর্তন করা হয়েছে\",progress:\"বানান পরীক্ষা চলছে...\",title:\"Spell Checker\",toolbar:\"বানান চেক\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/bn.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/bn.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/bn.js");
    }
}
