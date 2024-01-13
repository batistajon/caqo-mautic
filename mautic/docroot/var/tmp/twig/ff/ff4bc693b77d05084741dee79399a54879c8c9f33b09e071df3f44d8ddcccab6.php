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

/* @bundles/LeadBundle/DataFixtures/ORM/fakecategorydata.csv */
class __TwigTemplate_0768f077c2cd1802224f4736281cdf0c4ca9fc04ce6e376a7847ef8a44adc3ce extends Template
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
        echo "categoryname,categorybundle,categoryalias,published
Segment Test Category 1,segment,segment-test-category-1,1
Segment Test Category 2,segment,segment-test-category-2,1
Form Test Category 1,form,segment-form-category-1,1
Form Test Category 2,form,segment-form-category-2,1
Asset Test Category 1,asset,segment-asset-category-1,1
Asset Test Category 2,asset,segment-asset-category-2,1
Email Test Category 1,email,segment-email-category-1,1
Email Test Category 2,email,segment-email-category-2,1";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/DataFixtures/ORM/fakecategorydata.csv";
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
        return new Source("", "@bundles/LeadBundle/DataFixtures/ORM/fakecategorydata.csv", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/DataFixtures/ORM/fakecategorydata.csv");
    }
}
