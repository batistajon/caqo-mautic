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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/gu.js */
class __TwigTemplate_8be75c4c8b7f2e082726f6b6dbc494867ca074cfe5e897a6e2ec614f3ea7b244 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"gu\",{btnIgnore:\"ઇગ્નોર/અવગણના કરવી\",btnIgnoreAll:\"બધાની ઇગ્નોર/અવગણના કરવી\",btnReplace:\"બદલવું\",btnReplaceAll:\"બધા બદલી કરો\",btnUndo:\"અન્ડૂ\",changeTo:\"આનાથી બદલવું\",errorLoading:\"સર્વિસ એપ્લીકેશન લોડ નથી થ: %s.\",ieSpellDownload:\"સ્પેલ-ચેકર ઇન્સ્ટોલ નથી. શું તમે ડાઉનલોડ કરવા માંગો છો?\",manyChanges:\"શબ્દની જોડણી/સ્પેલ ચેક પૂર્ણ: %1 શબ્દ બદલયા છે\",noChanges:\"શબ્દની જોડણી/સ્પેલ ચેક પૂર્ણ: એકપણ શબ્દ બદલયો નથી\",noMispell:\"શબ્દની જોડણી/સ્પેલ ચેક પૂર્ણ: ખોટી જોડણી મળી નથી\",
noSuggestions:\"- કઇ સજેશન નથી -\",notAvailable:\"માફ કરશો, આ સુવિધા ઉપલબ્ધ નથી\",notInDic:\"શબ્દકોશમાં નથી\",oneChange:\"શબ્દની જોડણી/સ્પેલ ચેક પૂર્ણ: એક શબ્દ બદલયો છે\",progress:\"શબ્દની જોડણી/સ્પેલ ચેક ચાલુ છે...\",title:\"સ્પેલ \",toolbar:\"જોડણી (સ્પેલિંગ) તપાસવી\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/gu.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/gu.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/gu.js");
    }
}
