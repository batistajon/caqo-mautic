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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/el.js */
class __TwigTemplate_b768ab1e28ee6fa68ff5bbd1bbfbebdc58ab68c9116077741347a40622a53c59 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"el\",{btnIgnore:\"Αγνόηση\",btnIgnoreAll:\"Αγνόηση όλων\",btnReplace:\"Αντικατάσταση\",btnReplaceAll:\"Αντικατάσταση όλων\",btnUndo:\"Αναίρεση\",changeTo:\"Αλλαγή σε\",errorLoading:\"Error loading application service host: %s.\",ieSpellDownload:\"Δεν υπάρχει εγκατεστημένος ορθογράφος. Θέλετε να τον κατεβάσετε τώρα;\",manyChanges:\"Ο ορθογραφικός έλεγχος ολοκληρώθηκε: Άλλαξαν %1 λέξεις\",noChanges:\"Ο ορθογραφικός έλεγχος ολοκληρώθηκε: Δεν άλλαξαν λέξεις\",noMispell:\"Ο ορθογραφικός έλεγχος ολοκληρώθηκε: Δεν βρέθηκαν λάθη\",
noSuggestions:\"- Δεν υπάρχουν προτάσεις -\",notAvailable:\"Η υπηρεσία δεν είναι διαθέσιμη αυτήν την στιγμή.\",notInDic:\"Δεν υπάρχει στο λεξικό\",oneChange:\"Ο ορθογραφικός έλεγχος ολοκληρώθηκε: Άλλαξε μια λέξη\",progress:\"Γίνεται ορθογραφικός έλεγχος...\",title:\"Ορθογραφικός Έλεγχος\",toolbar:\"Ορθογραφικός Έλεγχος\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/el.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/el.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/el.js");
    }
}
