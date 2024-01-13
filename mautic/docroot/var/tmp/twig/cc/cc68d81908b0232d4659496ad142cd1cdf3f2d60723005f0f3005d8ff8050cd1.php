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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/lv.js */
class __TwigTemplate_8a8780c5ee249fa71bacea0b23ca9e13ab60cf30c0691703a0acd22410510bf2 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"lv\",{btnIgnore:\"Ignorēt\",btnIgnoreAll:\"Ignorēt visu\",btnReplace:\"Aizvietot\",btnReplaceAll:\"Aizvietot visu\",btnUndo:\"Atcelt\",changeTo:\"Nomainīt uz\",errorLoading:\"Kļūda ielādējot aplikācijas servisa adresi: %s.\",ieSpellDownload:\"Pareizrakstības pārbaudītājs nav pievienots. Vai vēlaties to lejupielādēt tagad?\",manyChanges:\"Pareizrakstības pārbaude pabeigta: %1 vārdi tika mainīti\",noChanges:\"Pareizrakstības pārbaude pabeigta: nekas netika labots\",noMispell:\"Pareizrakstības pārbaude pabeigta: kļūdas netika atrastas\",
noSuggestions:\"- Nav ieteikumu -\",notAvailable:\"Atvainojiet, bet serviss šobrīd nav pieejams.\",notInDic:\"Netika atrasts vārdnīcā\",oneChange:\"Pareizrakstības pārbaude pabeigta: 1 vārds izmainīts\",progress:\"Notiek pareizrakstības pārbaude...\",title:\"Pārbaudīt gramatiku\",toolbar:\"Pareizrakstības pārbaude\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/lv.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/lv.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/lv.js");
    }
}
