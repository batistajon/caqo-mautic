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

/* @bundles/CoreBundle/Tests/Unit/Helper/IpLookupHelperTest.php */
class __TwigTemplate_7e21c8804b04866ef3f4dcd0b92414947d859a7a3307bb9359b50ff798f92909 extends Template
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

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Entity\\IpAddressRepository;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class IpLookupHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public function __construct(\$name = null, array \$data = [], \$dataName = '')
    {
        parent::__construct(\$name, \$data, \$dataName);
    }

    protected function setUp(): void
    {
        defined('MAUTIC_ENV') or define('MAUTIC_ENV', 'test');
    }

    /**
     * @testdox Check if IP outside a request that local IP is returned
     *
     * @covers  \\Mautic\\CoreBundle\\Helper\\IpLookupHelper::getIpAddress
     */
    public function testLocalIpIsReturnedWhenNotInRequestScope()
    {
        \$ip = \$this->getIpHelper()->getIpAddress();

        \$this->assertEquals('127.0.0.1', \$ip->getIpAddress());
    }

    /**
     * @testdox Check that the first IP is returned when the request is a proxy
     *
     * @covers  \\Mautic\\CoreBundle\\Helper\\IpLookupHelper::getIpAddress
     */
    public function testClientIpIsReturnedFromProxy()
    {
        \$request = new Request([], [], [], [], [], ['HTTP_X_FORWARDED_FOR' => '73.77.245.52,10.8.0.2,192.168.0.1']);
        \$ip      = \$this->getIpHelper(\$request)->getIpAddress();

        \$this->assertEquals('73.77.245.52', \$ip->getIpAddress());
    }

    /**
     * @testdox Check that the first IP is returned with a web proxy
     *
     * @covers  \\Mautic\\CoreBundle\\Helper\\IpLookupHelper::getIpAddress
     */
    public function testClientIpIsReturnedFromRequest()
    {
        \$request = new Request([], [], [], [], [], ['REMOTE_ADDR' => '73.77.245.53']);
        \$ip      = \$this->getIpHelper(\$request)->getIpAddress();

        \$this->assertEquals('73.77.245.53', \$ip->getIpAddress());
    }

    /**
     * @testdox Check that a local IP is returned for internal IPs
     *
     * @covers  \\Mautic\\CoreBundle\\Helper\\IpLookupHelper::getIpAddress
     */
    public function testLocalIpIsReturnedForInternalNetworkIp()
    {
        \$request = new Request([], [], [], [], [], ['REMOTE_ADDR' => '192.168.0.1']);
        \$ip      = \$this->getIpHelper(\$request)->getIpAddress();

        \$this->assertEquals('127.0.0.1', \$ip->getIpAddress());
    }

    /**
     * @testdox Check that internal IP is returned if track_private_ip_ranges is set to true
     *
     * @covers  \\Mautic\\CoreBundle\\Helper\\IpLookupHelper::getIpAddress
     */
    public function testInternalNetworkIpIsReturnedIfSetToTrack()
    {
        \$request                  = new Request([], [], [], [], [], ['REMOTE_ADDR' => '192.168.0.1']);
        \$mockCoreParametersHelper = \$this
            ->getMockBuilder(CoreParametersHelper::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$mockCoreParametersHelper->expects(\$this->any())
            ->method('get')
            ->willReturnCallback(
                function (\$param, \$defaultValue) {
                    return 'track_private_ip_ranges' === \$param ? true : \$defaultValue;
                }
            );
        \$ip = \$this->getIpHelper(\$request, \$mockCoreParametersHelper)->getIpAddress();

        \$this->assertEquals('192.168.0.1', \$ip->getIpAddress());
    }

    /**
     * @param null \$request
     * @param null \$mockCoreParametersHelper
     *
     * @return IpLookupHelper
     */
    private function getIpHelper(\$request = null, \$mockCoreParametersHelper = null)
    {
        \$requestStack = new RequestStack();

        if (\$request) {
            \$requestStack->push(\$request);
        }

        \$mockRepository = \$this
            ->getMockBuilder(IpAddressRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$mockRepository->expects(\$this->any())
            ->method('__call')
            ->with(\$this->equalTo('findOneByIpAddress'))
            ->willReturn(null);

        \$mockEm = \$this
            ->getMockBuilder(EntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$mockEm->expects(\$this->any())
            ->method('getRepository')
            ->will(\$this->returnValue(\$mockRepository));

        if (is_null(\$mockCoreParametersHelper)) {
            \$mockCoreParametersHelper = \$this
                ->getMockBuilder(CoreParametersHelper::class)
                ->disableOriginalConstructor()
                ->getMock();
            \$mockCoreParametersHelper->expects(\$this->any())
                ->method('get')
                ->willReturn(null);
        }

        return new IpLookupHelper(\$requestStack, \$mockEm, \$mockCoreParametersHelper);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/IpLookupHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/IpLookupHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/IpLookupHelperTest.php");
    }
}
