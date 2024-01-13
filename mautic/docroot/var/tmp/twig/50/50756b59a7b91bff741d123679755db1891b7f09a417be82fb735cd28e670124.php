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

/* @bundles/ApiBundle/Tests/Helper/RequestHelperTest.php */
class __TwigTemplate_8c78b937ee1bb65476342971e201d3085fbcf4115b700720936a87d4ac1fde61 extends Template
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

namespace Mautic\\ApiBundle\\Tests\\Helper;

use Mautic\\ApiBundle\\Helper\\RequestHelper;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\HeaderBag;
use Symfony\\Component\\HttpFoundation\\Request;

class RequestHelperTest extends TestCase
{
    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|Request
     */
    private \$request;

    protected function setUp(): void
    {
        \$this->request = \$this->createMock(Request::class);
    }

    public function testIsBasicAuthWithValidBasicAuth()
    {
        \$this->request->headers = new HeaderBag(['Authorization' => 'Basic dXNlcm5hbWU6cGFzc3dvcmQ=']);

        \$this->assertTrue(RequestHelper::hasBasicAuth(\$this->request));
    }

    public function testIsBasicAuthWithInvalidBasicAuth()
    {
        \$this->request->headers = new HeaderBag(['Authorization' => 'Invalid Basic Auth value']);

        \$this->assertFalse(RequestHelper::hasBasicAuth(\$this->request));
    }

    public function testIsBasicAuthWithMissingBasicAuth()
    {
        \$this->request->headers = new HeaderBag([]);

        \$this->assertFalse(RequestHelper::hasBasicAuth(\$this->request));
    }

    public function testIsApiRequestWithOauthUrl()
    {
        \$this->request->expects(\$this->once())
            ->method('getRequestUri')
            ->willReturn('/oauth/v2/token');

        \$this->assertTrue(RequestHelper::isApiRequest(\$this->request));
    }

    public function testIsApiRequestWithApiUrl()
    {
        \$this->request->expects(\$this->once())
            ->method('getRequestUri')
            ->willReturn('/api/contacts');

        \$this->assertTrue(RequestHelper::isApiRequest(\$this->request));
    }

    public function testIsNotApiRequest()
    {
        \$this->request->expects(\$this->once())
            ->method('getRequestUri')
            ->willReturn('/s/dashboard');

        \$this->assertFalse(RequestHelper::isApiRequest(\$this->request));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Tests/Helper/RequestHelperTest.php";
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
        return new Source("", "@bundles/ApiBundle/Tests/Helper/RequestHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Tests/Helper/RequestHelperTest.php");
    }
}
