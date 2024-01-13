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

/* @bundles/EmailBundle/Views/FormTheme/Email/_emailform_dynamicContent_rest.html.php */
class __TwigTemplate_0165fc0a685e465de511b1a551a1541a56a8d7dc0bc0bcb6f6950aaffcb88fa6 extends Template
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
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Views/FormTheme/Email/_emailform_dynamicContent_rest.html.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/EmailBundle/Views/FormTheme/Email/_emailform_dynamicContent_rest.html.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Views/FormTheme/Email/_emailform_dynamicContent_rest.html.php");
    }
}
