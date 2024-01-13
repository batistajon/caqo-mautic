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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/es.js */
class __TwigTemplate_9e2162548c1fe44cd59a2523d9c3c8de3368a204fd0429890ae2763070013e41 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"es\",{btnIgnore:\"Ignorar\",btnIgnoreAll:\"Ignorar Todo\",btnReplace:\"Reemplazar\",btnReplaceAll:\"Reemplazar Todo\",btnUndo:\"Deshacer\",changeTo:\"Cambiar a\",errorLoading:\"Error cargando la aplicación del servidor: %s.\",ieSpellDownload:\"Módulo de Control de Ortografía no instalado.\\r\\n¿Desea descargarlo ahora?\",manyChanges:\"Control finalizado: se ha cambiado %1 palabras\",noChanges:\"Control finalizado: no se ha cambiado ninguna palabra\",noMispell:\"Control finalizado: no se encontraron errores\",
noSuggestions:\"- No hay sugerencias -\",notAvailable:\"Lo sentimos pero el servicio no está disponible.\",notInDic:\"No se encuentra en el Diccionario\",oneChange:\"Control finalizado: se ha cambiado una palabra\",progress:\"Control de Ortografía en progreso...\",title:\"Comprobar ortografía\",toolbar:\"Ortografía\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/es.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/es.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/es.js");
    }
}
