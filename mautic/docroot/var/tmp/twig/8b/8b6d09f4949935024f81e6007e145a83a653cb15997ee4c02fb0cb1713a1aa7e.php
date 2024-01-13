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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ka.js */
class __TwigTemplate_bd420e1f549cc5ae86fd25084abb755ec93cd815e725c6ae86ea2f96a6982f03 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"ka\",{btnIgnore:\"უგულებელყოფა\",btnIgnoreAll:\"ყველას უგულებელყოფა\",btnReplace:\"შეცვლა\",btnReplaceAll:\"ყველას შეცვლა\",btnUndo:\"გაუქმება\",changeTo:\"შეცვლელი\",errorLoading:\"სერვისის გამოძახების შეცდომა: %s.\",ieSpellDownload:\"მართლწერის შემოწმება არაა დაინსტალირებული. ჩამოვქაჩოთ ინტერნეტიდან?\",manyChanges:\"მართლწერის შემოწმება: %1 სიტყვა შეიცვალა\",noChanges:\"მართლწერის შემოწმება: არაფერი შეცვლილა\",noMispell:\"მართლწერის შემოწმება: შეცდომა არ მოიძებნა\",noSuggestions:\"- არაა შემოთავაზება -\",
notAvailable:\"უკაცრავად, ეს სერვისი ამჟამად მიუწვდომელია.\",notInDic:\"არაა ლექსიკონში\",oneChange:\"მართლწერის შემოწმება: ერთი სიტყვა შეიცვალა\",progress:\"მიმდინარეობს მართლწერის შემოწმება...\",title:\"მართლწერა\",toolbar:\"მართლწერა\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ka.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ka.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ka.js");
    }
}
