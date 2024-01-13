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

/* @bundles/CoreBundle/Tests/Unit/Helper/TrailingSlashHelperTest.php */
class __TwigTemplate_e505f0a115018f713a8acdbf955c82d5c8548f4d810096864a1ccf84846852a8 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\TrailingSlashHelper;
use Symfony\\Component\\HttpFoundation\\Request;

class TrailingSlashHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var CoreParametersHelper|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$coreParametersHelper;

    protected function setUp(): void
    {
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->coreParametersHelper->method('get')
            ->with('site_url')
            ->willReturn('https://test.com');
    }

    public function testOpenRedirectIsNotPossible()
    {
        \$server = [
            'HTTP_HOST'       => 'test.com',
            'HTTP_USER_AGENT' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.56 Safari/537.36',
            'SERVER_NAME'     => 'test.com',
            'SERVER_ADDR'     => '::1',
            'SERVER_PORT'     => '80',
            'REMOTE_ADDR'     => '::1',
            'DOCUMENT_ROOT'   => null,
            'REQUEST_SCHEME'  => 'http',
            'REMOTE_PORT'     => '80',
            'REDIRECT_URL'    => '/google.com/',
            'SERVER_PROTOCOL' => 'HTTP/1.1',
            'REQUEST_METHOD'  => 'GET',
            'QUERY_STRING'    => '',
            'REQUEST_URI'     => '//google.com/',
            'SCRIPT_NAME'     => '/index.php',
            'PHP_SELF'        => '/index.php',
        ];

        \$request = new Request([], [], [], [], [], \$server);

        // google.com should not be returned as the URL
        \$this->assertEquals('https://test.com//google.com', \$this->getHelper()->getSafeRedirectUrl(\$request));
    }

    public function testMauticUrlWithTrailingSlashIsGeneratedCorrectly()
    {
        \$server = [
            'HTTP_HOST'       => 'test.com',
            'HTTP_USER_AGENT' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.56 Safari/537.36',
            'SERVER_NAME'     => 'test.com',
            'SERVER_ADDR'     => '::1',
            'SERVER_PORT'     => '80',
            'REMOTE_ADDR'     => '::1',
            'DOCUMENT_ROOT'   => null,
            'REQUEST_SCHEME'  => 'http',
            'REMOTE_PORT'     => '80',
            'REDIRECT_URL'    => '/s/dashboard/',
            'SERVER_PROTOCOL' => 'HTTP/1.1',
            'REQUEST_METHOD'  => 'GET',
            'QUERY_STRING'    => '',
            'REQUEST_URI'     => '/s/dashboard/',
            'SCRIPT_NAME'     => '/index.php',
            'PHP_SELF'        => '/index.php',
        ];

        \$request = new Request([], [], [], [], [], \$server);

        // google.com should not be returned as the URL
        \$this->assertEquals('https://test.com/s/dashboard', \$this->getHelper()->getSafeRedirectUrl(\$request));
    }

    /**
     * @return TrailingSlashHelper
     */
    private function getHelper()
    {
        return new TrailingSlashHelper(\$this->coreParametersHelper);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/TrailingSlashHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/TrailingSlashHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/TrailingSlashHelperTest.php");
    }
}
