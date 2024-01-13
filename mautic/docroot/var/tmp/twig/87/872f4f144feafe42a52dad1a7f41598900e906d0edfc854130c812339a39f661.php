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

/* @bundles/FormBundle/DataFixtures/ORM/fakeactiondata.csv */
class __TwigTemplate_38f54fe9eb3311dd36dd3d00364bbf3d15e8c008dbb290d069e84caf1fa2d483 extends Template
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
        echo "form,type,name,description,order,properties
1,lead.create,Create a lead,NULL,1,\"a:2:{s:6:\\\"points\\\";d:10;s:12:\\\"mappedFields\\\";a:22:{i:1;i:1;i:2;N;i:3;N;i:4;N;i:5;N;i:6;i:2;i:7;N;i:8;N;i:9;N;i:10;N;i:11;N;i:12;N;i:13;N;i:14;N;i:15;N;i:16;N;i:17;N;i:18;N;i:19;N;i:20;N;i:21;N;i:22;N;}}\"
2,lead.create,Create a lead,NULL,1,\"a:2:{s:6:\\\"points\\\";d:10;s:12:\\\"mappedFields\\\";a:22:{i:1;i:5;i:2;N;i:3;N;i:4;N;i:5;N;i:6;i:6;i:7;N;i:8;N;i:9;N;i:10;N;i:11;N;i:12;N;i:13;N;i:14;N;i:15;N;i:16;N;i:17;N;i:18;N;i:19;N;i:20;N;i:21;N;i:22;N;}}\"";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/DataFixtures/ORM/fakeactiondata.csv";
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
        return new Source("", "@bundles/FormBundle/DataFixtures/ORM/fakeactiondata.csv", "/var/www/html/mautic/docroot/app/bundles/FormBundle/DataFixtures/ORM/fakeactiondata.csv");
    }
}
