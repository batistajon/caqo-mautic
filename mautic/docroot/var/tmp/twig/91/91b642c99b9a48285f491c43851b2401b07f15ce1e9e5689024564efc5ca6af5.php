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

/* @bundles/PageBundle/DataFixtures/ORM/fakepagedata.csv */
class __TwigTemplate_9f5a2305e62bd61d8e5b62abc66b5c9f096b2ae6a742f6826f2d4801e376ae47 extends Template
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
        echo "translationParent,variantParent,isPublished,dateAdded,title,alias,template,language,content,hits,uniqueHits,variantHits,revision,metaDescription,variantSettings,variantStartDate
NULL,NULL,1,8/9/14 0:00,Kaleidoscope Conference 2014,kaleidoscope-conference-2014,blank,en,\"a:5:{s:4:\\\"top2\\\";s:151:\\\"<div><h1><span style=\\\"font-family:comic sans\\\"><span style=\\\"color:#0000FF\\\"><span dir=\\\"auto\\\">Kaleidoscope Conference 2014</span></span></span></h1></div>\\\";s:4:\\\"main\\\";s:44:\\\"<div>Sign up today!</div><div>{form=1}</div>\\\";s:6:\\\"footer\\\";s:0:\\\"\\\";s:6:\\\"right1\\\";s:0:\\\"\\\";s:7:\\\"bottom3\\\";s:0:\\\"\\\";}\",31,28,28,8,\"Join your fellow kaleidoscopians at the 2014 Kaleidoscope Conference.  Learn new techniques, attend workshops, share ideas with others, or just hang out!\",a:0:{},8/9/14 0:00
NULL,1,1,8/9/14 0:12,Kaleidoscope Conference 2014 v2,kaleidoscope-conference-2014,blank,en,\"a:5:{s:4:\\\"top2\\\";s:151:\\\"<div><h1><span style=\\\"font-family:comic sans\\\"><span style=\\\"color:#0000FF\\\"><span dir=\\\"auto\\\">Kaleidoscope Conference 2014</span></span></span></h1></div>\\\";s:4:\\\"main\\\";s:153:\\\"<div>Don&#39;t be afraid to reach out to your inner kid once again! Let your creativity roll at the annual Kaleidoscope Conference. Register today!</div>\\\";s:6:\\\"footer\\\";s:0:\\\"\\\";s:6:\\\"right1\\\";s:55:\\\"<div><div>Sign up today!</div><div>{form=1}</div></div>\\\";s:7:\\\"bottom3\\\";s:0:\\\"\\\";}\",95,85,85,4,\"Join your fellow kaleidoscopians at the 2014 Kaleidoscope Conference.  Learn new techniques, attend workshops, share ideas with others, or just hang out!\",\"a:2:{s:6:\\\"weight\\\";i:50;s:14:\\\"winnerCriteria\\\";s:14:\\\"page.dwelltime\\\";}\",8/9/14 0:00
1,NULL,1,8/9/14 1:07,Kaleidoscope Conferencia 2014,kaleidoscope-conference-2014,blank,es_MX,\"a:5:{s:4:\\\"top2\\\";s:151:\\\"<div><h1><span style=\\\"font-family:comic sans\\\"><span style=\\\"color:#0000FF\\\"><span dir=\\\"auto\\\">Kaleidoscope Conference 2014</span></span></span></h1></div>\\\";s:4:\\\"main\\\";s:44:\\\"<div>Sign up today!</div><div>{form=2}</div>\\\";s:6:\\\"footer\\\";s:0:\\\"\\\";s:6:\\\"right1\\\";s:0:\\\"\\\";s:7:\\\"bottom3\\\";s:0:\\\"\\\";}\",1,1,1,9,\"Únete a tus compañeros kaleidoscopians en la Conferencia de 2014 Kaleidoscope. Aprenda nuevas técnicas, asistir a talleres, compartir ideas con los demás, o simplemente pasar el rato!\",a:0:{},NULL
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/DataFixtures/ORM/fakepagedata.csv";
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
        return new Source("", "@bundles/PageBundle/DataFixtures/ORM/fakepagedata.csv", "/var/www/html/mautic/docroot/app/bundles/PageBundle/DataFixtures/ORM/fakepagedata.csv");
    }
}
