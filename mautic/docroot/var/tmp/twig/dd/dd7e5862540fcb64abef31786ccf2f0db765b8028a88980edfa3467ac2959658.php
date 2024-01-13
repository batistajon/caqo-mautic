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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/fi.js */
class __TwigTemplate_eece29feb273e65540759a416497d0b3d192fa47c4b7496af077df9f949ca59a extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"fi\",{btnIgnore:\"Jätä huomioimatta\",btnIgnoreAll:\"Jätä kaikki huomioimatta\",btnReplace:\"Korvaa\",btnReplaceAll:\"Korvaa kaikki\",btnUndo:\"Kumoa\",changeTo:\"Vaihda\",errorLoading:\"Virhe ladattaessa oikolukupalvelua isännältä: %s.\",ieSpellDownload:\"Oikeinkirjoituksen tarkistusta ei ole asennettu. Haluatko ladata sen nyt?\",manyChanges:\"Tarkistus valmis: %1 sanaa muutettiin\",noChanges:\"Tarkistus valmis: Yhtään sanaa ei muutettu\",noMispell:\"Tarkistus valmis: Ei virheitä\",noSuggestions:\"Ei ehdotuksia\",
notAvailable:\"Valitettavasti oikoluku ei ole käytössä tällä hetkellä.\",notInDic:\"Ei sanakirjassa\",oneChange:\"Tarkistus valmis: Yksi sana muutettiin\",progress:\"Tarkistus käynnissä...\",title:\"Oikoluku\",toolbar:\"Tarkista oikeinkirjoitus\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/fi.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/fi.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/fi.js");
    }
}
