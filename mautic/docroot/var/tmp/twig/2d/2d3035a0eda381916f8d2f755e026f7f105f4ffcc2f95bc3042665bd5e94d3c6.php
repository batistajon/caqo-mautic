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

/* @bundles/ReportBundle/Tests/Model/ExportResponseTest.php */
class __TwigTemplate_a5cf939689d7cae55f89f95c39d0386081411175e2645f73c30b76ac365d1a76 extends Template
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
        echo "<?php

namespace Mautic\\ReportBundle\\Tests\\Model;

use Mautic\\ReportBundle\\Model\\ExportResponse;
use Symfony\\Component\\HttpFoundation\\Response;

class ExportResponseTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testResponse()
    {
        \$responce = new Response();
        ExportResponse::setResponseHeaders(\$responce, 'fileName.csv');

        \$this->assertSame('application/octet-stream', \$responce->headers->get('Content-Type'));
        \$this->assertSame('attachment; filename=\"fileName.csv\"', \$responce->headers->get('Content-Disposition'));
        \$this->assertSame('must-revalidate, private', \$responce->headers->get('Cache-Control'));
        \$this->assertSame('public', \$responce->headers->get('Pragma'));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Model/ExportResponseTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Model/ExportResponseTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Model/ExportResponseTest.php");
    }
}
