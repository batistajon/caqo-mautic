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

/* @bundles/CoreBundle/Tests/Unit/Update/Step/resources/update.zip */
class __TwigTemplate_e6d7567d3a7a67adedb8554704fed23bb1db4944032bfce99736cb13d8b5e263 extends Template
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
        echo "PK
\000\000\000\000\000ƒ€…P\000\000\000\000\000\000\000\000\000\000\000\000\000\000update/UT\t\000ÆGŠ^ÈGŠ^ux\000õ\000\000\000\000\000PK
\000\000\000\000\000ƒ€…P\000\000\000\000\000\000\000\000\000\000\000\000\000\000update/test.txtUT\t\000ÆGŠ^ÆGŠ^ux\000õ\000\000\000\000\000PK
\000\000\000\000\000ƒ€…P\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000íA\000\000\000\000update/UT\000ÆGŠ^ux\000õ\000\000\000\000\000PK
\000\000\000\000\000ƒ€…P\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000¤A\000\000\000update/test.txtUT\000ÆGŠ^ux\000õ\000\000\000\000\000PK\000\000\000\000\000\000¢\000\000\000Š\000\000\000\000\000";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Update/Step/resources/update.zip";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Update/Step/resources/update.zip", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Update/Step/resources/update.zip");
    }
}
