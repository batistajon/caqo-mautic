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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/hi.js */
class __TwigTemplate_bc99b043c4fa8d555560ca9b03a9d5d0520777ee854ae22097be5761f7ace9a4 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"hi\",{btnIgnore:\"इग्नोर\",btnIgnoreAll:\"सभी इग्नोर करें\",btnReplace:\"रिप्लेस\",btnReplaceAll:\"सभी रिप्लेस करें\",btnUndo:\"अन्डू\",changeTo:\"इसमें बदलें\",errorLoading:\"Error loading application service host: %s.\",ieSpellDownload:\"स्पॅल-चॅकर इन्स्टाल नहीं किया गया है। क्या आप इसे डाउनलोड करना चाहेंगे?\",manyChanges:\"वर्तनी की जाँच : %1 शब्द बदले गये\",noChanges:\"वर्तनी की जाँच :कोई शब्द नहीं बदला गया\",noMispell:\"वर्तनी की जाँच : कोई गलत वर्तनी (स्पॅलिंग) नहीं पाई गई\",noSuggestions:\"- कोई सुझाव नहीं -\",
notAvailable:\"Sorry, but service is unavailable now.\",notInDic:\"शब्दकोश में नहीं\",oneChange:\"वर्तनी की जाँच : एक शब्द बदला गया\",progress:\"वर्तनी की जाँच (स्पॅल-चॅक) जारी है...\",title:\"Spell Checker\",toolbar:\"वर्तनी (स्पेलिंग) जाँच\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/hi.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/hi.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/hi.js");
    }
}
