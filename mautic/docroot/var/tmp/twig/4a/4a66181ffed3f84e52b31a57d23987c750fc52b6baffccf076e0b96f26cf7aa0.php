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

/* @bundles/CoreBundle/Assets/js/libraries/8b.ui.js */
class __TwigTemplate_7690733d31ac76a5b84078df13b370223660bdba02c81766fbe9ca172b77ef11 extends Template
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
        echo "/*! ========================================================================
 * Mautic UI v1.0.0
 * Copyright 2014 Mautic
 * ======================================================================== */

if (typeof jQuery === \"undefined\") { throw new Error(\"This application requires jQuery\"); }

;(function(\$, window, document, undefined) {
  
})(jQuery, window, document);";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/8b.ui.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/8b.ui.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/8b.ui.js");
    }
}
