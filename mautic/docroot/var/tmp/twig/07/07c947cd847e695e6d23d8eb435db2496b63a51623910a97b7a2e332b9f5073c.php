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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/fr-ca.js */
class __TwigTemplate_ecea57cf4634700877393197cff36015dd5fbf4f06146396accb45cfbd3cff36 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"fr-ca\",{btnIgnore:\"Ignorer\",btnIgnoreAll:\"Ignorer tout\",btnReplace:\"Remplacer\",btnReplaceAll:\"Remplacer tout\",btnUndo:\"Annuler\",changeTo:\"Changer en\",errorLoading:\"Error loading application service host: %s.\",ieSpellDownload:\"Le Correcteur d'orthographe n'est pas installé. Souhaitez-vous le télécharger maintenant?\",manyChanges:\"Vérification d'orthographe terminée: %1 mots modifiés\",noChanges:\"Vérification d'orthographe terminée: Pas de modifications\",noMispell:\"Vérification d'orthographe terminée: pas d'erreur trouvée\",
noSuggestions:\"- Pas de suggestion -\",notAvailable:\"Sorry, but service is unavailable now.\",notInDic:\"Pas dans le dictionnaire\",oneChange:\"Vérification d'orthographe terminée: Un mot modifié\",progress:\"Vérification d'orthographe en cours...\",title:\"Spell Checker\",toolbar:\"Orthographe\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/fr-ca.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/fr-ca.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/fr-ca.js");
    }
}
