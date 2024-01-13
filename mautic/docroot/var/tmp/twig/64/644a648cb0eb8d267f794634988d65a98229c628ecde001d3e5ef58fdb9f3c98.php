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

/* @bundles/FormBundle/DataFixtures/ORM/fakefielddata.csv */
class __TwigTemplate_ab618b6467e5fb57c0ce3e6650c5a392720a07977659260034a912c055ac6a1e extends Template
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
        echo "form,label,showLabel,alias,type,isCustom,customParameters,defaultValue,isRequired,validationMessage,helpMessage,order,properties,labelAttr,inputAttr
1,Name,1,name,text,0,a:0:{},NULL,1,NULL,NULL,1,\"a:1:{s:11:\\\"placeholder\\\";N;}\",NULL,NULL
1,Email,1,email,email,0,a:0:{},NULL,1,NULL,NULL,2,\"a:1:{s:11:\\\"placeholder\\\";N;}\",NULL,NULL
1,Number of attendees,1,numberofattendees,number,0,a:0:{},1,1,NULL,NULL,3,\"a:1:{s:11:\\\"placeholder\\\";N;}\",NULL,NULL
1,Register,1,register,button,0,a:0:{},NULL,0,NULL,NULL,4,\"a:1:{s:4:\\\"type\\\";s:6:\\\"submit\\\";}\",NULL,NULL
2,Nombre,1,nombre,text,0,a:0:{},NULL,1,NULL,NULL,1,\"a:1:{s:11:\\\"placeholder\\\";N;}\",NULL,NULL
2,Email,1,email,email,0,a:0:{},NULL,1,NULL,NULL,2,\"a:1:{s:11:\\\"placeholder\\\";N;}\",NULL,NULL
2,Numero de asistentes,1,nmerodeasistentes,number,0,a:0:{},1,1,NULL,NULL,3,\"a:1:{s:11:\\\"placeholder\\\";N;}\",NULL,NULL
2,Registro,1,registro,button,0,a:0:{},NULL,0,NULL,NULL,4,\"a:1:{s:4:\\\"type\\\";s:6:\\\"submit\\\";}\",NULL,NULL";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/DataFixtures/ORM/fakefielddata.csv";
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
        return new Source("", "@bundles/FormBundle/DataFixtures/ORM/fakefielddata.csv", "/var/www/html/mautic/docroot/app/bundles/FormBundle/DataFixtures/ORM/fakefielddata.csv");
    }
}
