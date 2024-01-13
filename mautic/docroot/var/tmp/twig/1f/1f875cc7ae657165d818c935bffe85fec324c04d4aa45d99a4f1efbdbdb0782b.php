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

/* @bundles/CoreBundle/Tests/functional.suite.yml */
class __TwigTemplate_e1a3412b25e656f8c1bc4b3aaec12decb42ec3e557c26827bf27095de6bc071c extends Template
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
        echo "actor: FunctionalTester
modules:
    enabled:
        - Symfony2:
            app_path: '../../../app'
            var_path: '../../../app'
        - Doctrine2:
            depends: Symfony2
        - Asserts
        - \\Mautic\\CoreBundle\\Helper\\Functional";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/functional.suite.yml";
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
        return new Source("", "@bundles/CoreBundle/Tests/functional.suite.yml", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/functional.suite.yml");
    }
}
