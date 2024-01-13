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

/* @bundles/FormBundle/DataFixtures/ORM/fakeformdata.csv */
class __TwigTemplate_b7bb486a80bc6dfb152be9a192a617cdb90f8682065e859fe70f6db6bdcf5944 extends Template
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
        echo "isPublished,dateAdded,name,alias,description,postAction,postActionProperty,template,formType
1,\"2014-08-10 00:43:12\",\"Kaleidoscope Registration\",\"kaleidosco\",NULL,\"message\",\"Thank you for registering!\",\"blank\",\"standalone\"
1,\"2014-08-10 00:44:27\",\"Kaleidoscope Registro (ES)\",\"kaleidosco\",NULL,\"message\",\"Gracias por registrarse!\",\"blank\",\"standalone\"
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/DataFixtures/ORM/fakeformdata.csv";
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
        return new Source("", "@bundles/FormBundle/DataFixtures/ORM/fakeformdata.csv", "/var/www/html/mautic/docroot/app/bundles/FormBundle/DataFixtures/ORM/fakeformdata.csv");
    }
}
