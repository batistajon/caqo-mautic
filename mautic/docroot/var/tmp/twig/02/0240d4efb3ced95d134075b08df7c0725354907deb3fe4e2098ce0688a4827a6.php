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

/* @bundles/CoreBundle/Tests/Unit/Helper/MaxMindDoNotSellDownloadHelperTest.php */
class __TwigTemplate_6cd6d571c6232fe31e360543db15bc474e6a7225061c619a56899619a8e491d6 extends Template
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
use Mautic\\CoreBundle\\Helper\\MaxMindDoNotSellDownloadHelper;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpClient\\Exception\\TransportException;
use Symfony\\Contracts\\HttpClient\\HttpClientInterface;
use Symfony\\Contracts\\HttpClient\\ResponseInterface;

final class MaxMindDoNotSellDownloadHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @const TEMP_TEST_FILE
     */
    const TEMP_TEST_FILE = './DoNotSellTest.json';

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|LoggerInterface
     */
    private \$loggerMock;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|HttpClientInterface
     */
    private \$httpClientMock;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|CoreParametersHelper
     */
    private \$coreParametersHelperMock;

    protected function setUp(): void
    {
        \$this->loggerMock               = \$this->createMock(LoggerInterface::class);
        \$this->httpClientMock           = \$this->createMock(HttpClientInterface::class);
        \$this->coreParametersHelperMock = \$this->createMock(CoreParametersHelper::class);
        \$this->coreParametersHelperMock->expects(\$this->once())
            ->method('get')
            ->with('maxmind_do_not_sell_list_path')
            ->willReturn(self::TEMP_TEST_FILE);
    }

    protected function tearDown(): void
    {
        \$filename = self::TEMP_TEST_FILE;

        if (is_file(\$filename)) {
            unlink(\$filename);
        }
    }

    /**
     * Test downloading data store without license.
     */
    public function testDownloadRemoteDataStoreWhenNoLicense()
    {
        \$maxMindDoNotSellDownloadHelper = new MaxMindDoNotSellDownloadHelper('id', \$this->loggerMock, \$this->httpClientMock, \$this->coreParametersHelperMock);
        \$this->loggerMock->expects(\$this->once())
            ->method('error')
            ->with('Missing user ID or license key for MaxMind');
        \$result = \$maxMindDoNotSellDownloadHelper->downloadRemoteDataStore();
        \$this->assertFalse(\$result);
    }

    /**
     * Test downloading data store when transport exception.
     */
    public function testDownloadRemoteDataStoreWhenTransportException()
    {
        \$maxMindDoNotSellDownloadHelper = new MaxMindDoNotSellDownloadHelper('id:license', \$this->loggerMock, \$this->httpClientMock, \$this->coreParametersHelperMock);
        \$this->loggerMock->expects(\$this->once())
            ->method('error')
            ->with('Failed to fetch remote Do Not Sell data: transportException');
        \$this->httpClientMock->expects(\$this->once())
            ->method('request')
            ->with('GET', 'https://api.maxmind.com/privacy/exclusions', ['auth_basic' => ['id', 'license']])
            ->will(\$this->throwException(new TransportException('transportException')));
        \$result = \$maxMindDoNotSellDownloadHelper->downloadRemoteDataStore();
        \$this->assertFalse(\$result);
    }

    /**
     * Test downloading data store when status code 500.
     */
    public function testDownloadRemoteDataStoreWhenStatusCode500()
    {
        \$maxMindDoNotSellDownloadHelper = new MaxMindDoNotSellDownloadHelper('id:license', \$this->loggerMock, \$this->httpClientMock, \$this->coreParametersHelperMock);
        \$this->loggerMock->expects(\$this->once())
            ->method('error')
            ->with('Wrong status code for Do Not Sell data: 500');
        \$responseMock = \$this->createMock(ResponseInterface::class);
        \$this->httpClientMock->expects(\$this->once())
            ->method('request')
            ->with('GET', 'https://api.maxmind.com/privacy/exclusions', ['auth_basic' => ['id', 'license']])
            ->willReturn(\$responseMock);
        \$responseMock->expects(\$this->exactly(3))
            ->method('getStatusCode')
            ->willReturn(500);
        \$result = \$maxMindDoNotSellDownloadHelper->downloadRemoteDataStore();
        \$this->assertFalse(\$result);
    }

    /**
     * Test downloading data store when getContent error.
     */
    public function testDownloadRemoteDataStoreWhenGetContentError()
    {
        \$maxMindDoNotSellDownloadHelper = new MaxMindDoNotSellDownloadHelper('id:license', \$this->loggerMock, \$this->httpClientMock, \$this->coreParametersHelperMock);
        \$this->loggerMock->expects(\$this->once())
            ->method('error')
            ->with('Failed to get content from remote Do Not Sell data: noContent');
        \$responseMock = \$this->createMock(ResponseInterface::class);
        \$this->httpClientMock->expects(\$this->once())
            ->method('request')
            ->with('GET', 'https://api.maxmind.com/privacy/exclusions', ['auth_basic' => ['id', 'license']])
            ->willReturn(\$responseMock);
        \$responseMock->expects(\$this->exactly(2))
            ->method('getStatusCode')
            ->willReturn(200);
        \$responseMock->expects(\$this->once())
            ->method('getContent')
            ->will(\$this->throwException(new \\Exception('noContent')));
        \$result = \$maxMindDoNotSellDownloadHelper->downloadRemoteDataStore();
        \$this->assertFalse(\$result);
    }

    /**
     * Test downloading data store when OK.
     */
    public function testDownloadRemoteDataStoreWhenOK()
    {
        \$maxMindDoNotSellDownloadHelper = new MaxMindDoNotSellDownloadHelper('id:license', \$this->loggerMock, \$this->httpClientMock, \$this->coreParametersHelperMock);
        \$responseMock                   = \$this->createMock(ResponseInterface::class);
        \$this->httpClientMock->expects(\$this->once())
            ->method('request')
            ->with('GET', 'https://api.maxmind.com/privacy/exclusions', ['auth_basic' => ['id', 'license']])
            ->willReturn(\$responseMock);
        \$responseMock->expects(\$this->exactly(2))
            ->method('getStatusCode')
            ->willReturn(200);
        \$responseMock->expects(\$this->once())
            ->method('getContent')
            ->willReturn('[\"mautic\"]');
        \$result = \$maxMindDoNotSellDownloadHelper->downloadRemoteDataStore();
        \$this->assertTrue(\$result);
        \$this->assertFileExists(\$maxMindDoNotSellDownloadHelper->getLocalDataStoreFilepath());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/MaxMindDoNotSellDownloadHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/MaxMindDoNotSellDownloadHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/MaxMindDoNotSellDownloadHelperTest.php");
    }
}
