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

/* @bundles/LeadBundle/DataFixtures/ORM/fakecompanydata.csv */
class __TwigTemplate_496220fe05db3ca49800a87682411ce8ca7e760e429b832db451b039dec833c9 extends Template
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
        echo "companyname,companycity,companystate,companycountry,companyindustry
Mautic,Boston,Massachusetts,United States,Software
Apple,Cupertino,California,United states,Hardware
Amazon,Seattle,Washington,United States,Goods
HostGator,Houston,Texas,United States,Software";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/DataFixtures/ORM/fakecompanydata.csv";
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
        return new Source("", "@bundles/LeadBundle/DataFixtures/ORM/fakecompanydata.csv", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/DataFixtures/ORM/fakecompanydata.csv");
    }
}
