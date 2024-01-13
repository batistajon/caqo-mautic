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

/* @bundles/LeadBundle/DataFixtures/ORM/fakecategorizedleadlistdata.csv */
class __TwigTemplate_03fb335f5c34cf95a62c93f9e1e549a27648f4735aa46c3a708de608f0da2076 extends Template
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
        echo "name,publicname,alias,category
Lead List 1 - Segment Category 1,Lead List 1,lead-list-1,1
Lead List 2 - Segment Category 2,Lead List 2,lead-list-2,2
Lead List 3 - Segment Category 2,Lead List 3,lead-list-3,2
Lead List 4 - Segment Category 1,Lead List 4,lead-list-4,1
Lead List 5 - Segment Category 1,Lead List 5,lead-list-5,1
Lead List 6 - Segment Category 1,Lead List 6,lead-list-6,1
Lead List 7 - Segment No Category ,Lead List 6,lead-list-6,";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/DataFixtures/ORM/fakecategorizedleadlistdata.csv";
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
        return new Source("", "@bundles/LeadBundle/DataFixtures/ORM/fakecategorizedleadlistdata.csv", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/DataFixtures/ORM/fakecategorizedleadlistdata.csv");
    }
}
