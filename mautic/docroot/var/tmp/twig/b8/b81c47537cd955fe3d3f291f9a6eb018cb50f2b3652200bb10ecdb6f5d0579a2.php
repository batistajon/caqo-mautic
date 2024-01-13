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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/fr.js */
class __TwigTemplate_2af18efe7fa54f7bab834c7812f69ea77a88fd9ea312f3bf7747094cc869ba09 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"fr\",{btnIgnore:\"Ignorer\",btnIgnoreAll:\"Ignorer tout\",btnReplace:\"Remplacer\",btnReplaceAll:\"Remplacer tout\",btnUndo:\"Annuler\",changeTo:\"Modifier pour\",errorLoading:\"Erreur du chargement du service depuis l'hôte : %s.\",ieSpellDownload:\"La vérification d'orthographe n'est pas installée. Voulez-vous la télécharger maintenant?\",manyChanges:\"Vérification de l'orthographe terminée : %1 mots corrigés.\",noChanges:\"Vérification de l'orthographe terminée : Aucun mot corrigé.\",
noMispell:\"Vérification de l'orthographe terminée : aucune erreur trouvée.\",noSuggestions:\"- Aucune suggestion -\",notAvailable:\"Désolé, le service est indisponible actuellement.\",notInDic:\"N'existe pas dans le dictionnaire.\",oneChange:\"Vérification de l'orthographe terminée : Un seul mot corrigé.\",progress:\"Vérification de l'orthographe en cours...\",title:\"Vérifier l'orthographe\",toolbar:\"Vérifier l'orthographe\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/fr.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/fr.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/fr.js");
    }
}
