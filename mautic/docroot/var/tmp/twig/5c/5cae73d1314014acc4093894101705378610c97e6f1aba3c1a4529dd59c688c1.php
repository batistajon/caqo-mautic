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

/* @bundles/EmailBundle/Tests/Helper/RequestStorageHelperTest.php */
class __TwigTemplate_13b896ca7ced658d9f8f02d0c26d910b4cd7f34a6e7094c0f5ad42159a791001 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Helper;

use Mautic\\CoreBundle\\Helper\\CacheStorageHelper;
use Mautic\\EmailBundle\\Helper\\RequestStorageHelper;
use Mautic\\EmailBundle\\Swiftmailer\\Transport\\MomentumTransport;
use Symfony\\Component\\HttpFoundation\\Request;

class RequestStorageHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$cacheStorageMock;
    private \$helper;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->cacheStorageMock = \$this->createMock(CacheStorageHelper::class);
        \$this->helper           = new RequestStorageHelper(\$this->cacheStorageMock);
    }

    public function testStoreRequest()
    {
        \$payload = ['some' => 'values'];

        \$this->cacheStorageMock->expects(\$this->once())
            ->method('set')
            ->with(\$this->anything(), \$payload);

        \$key = \$this->helper->storeRequest(MomentumTransport::class, new Request([], \$payload));

        \$this->assertStringStartsWith(MomentumTransport::class, \$key);
        \$this->assertEquals(98, strlen(\$key));
    }

    public function testStoreRequestWithLongTansportName()
    {
        \$payload           = ['some' => 'values'];
        \$longTransportName = '';

        for (\$i = 0; \$i < 5; ++\$i) {
            \$longTransportName .= MomentumTransport::class;
        }

        \$this->cacheStorageMock->expects(\$this->never())
            ->method('set');

        \$this->expectException(\\LengthException::class);
        \$key = \$this->helper->storeRequest(\$longTransportName, new Request([], \$payload));
    }

    public function testGetRequest()
    {
        \$payload = ['some' => 'values'];
        \$key     = MomentumTransport::class.':webhook_request:5b43832134cfb0.36545510';

        \$this->cacheStorageMock->expects(\$this->once())
            ->method('get')
            ->with(\$key)
            ->willReturn(\$payload);

        \$request = \$this->helper->getRequest(\$key);

        \$this->assertInstanceOf(Request::class, \$request);
        \$this->assertEquals(\$payload, \$request->request->all());
    }

    public function testGetRequestIfNotFound()
    {
        \$payload = ['some' => 'values'];
        \$key     = MomentumTransport::class.':webhook_request:5b43832134cfb0.36545510';

        \$this->cacheStorageMock->expects(\$this->once())
            ->method('get')
            ->with(\$key)
            ->willReturn(false);

        \$this->expectException(\\UnexpectedValueException::class);
        \$this->helper->getRequest(\$key);
    }

    public function testGetTransportNameFromKey()
    {
        \$this->assertEquals(MomentumTransport::class, \$this->helper->getTransportNameFromKey('Mautic\\EmailBundle\\Swiftmailer\\Transport\\MomentumTransport:webhook_request:5b43832134cfb0.36545510'));
    }

    /**
     * The StorageHelper will add '%mautic.db_table_prefix%' as a prefix to each cache key.
     */
    public function testGetTransportNameFromKeyWithGlobalPrefix()
    {
        \$this->assertEquals(MomentumTransport::class, \$this->helper->getTransportNameFromKey('mautic:Mautic|EmailBundle|Swiftmailer|Transport|MomentumTransport:webhook_request:5bfbe8ce671198.00044461'));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Helper/RequestStorageHelperTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Helper/RequestStorageHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Helper/RequestStorageHelperTest.php");
    }
}
