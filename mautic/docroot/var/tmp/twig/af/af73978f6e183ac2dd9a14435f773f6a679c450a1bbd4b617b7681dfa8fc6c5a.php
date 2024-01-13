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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/core.js */
class __TwigTemplate_c51c75afae33fa5363c3ccf9033777012546b819d99bf5c609febd830e841e62 extends Template
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
        echo "// This file is deprecated in 1.12.0 to be removed in 1.13
( function() {
define( [
\t\"jquery\",
\t\"./data\",
\t\"./disable-selection\",
\t\"./focusable\",
\t\"./form\",
\t\"./ie\",
\t\"./keycode\",
\t\"./labels\",
\t\"./jquery-1-7\",
\t\"./plugin\",
\t\"./safe-active-element\",
\t\"./safe-blur\",
\t\"./scroll-parent\",
\t\"./tabbable\",
\t\"./unique-id\",
\t\"./version\"
] );
} )();
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/core.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/core.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/core.js");
    }
}
