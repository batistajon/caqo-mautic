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

/* @bundles/CoreBundle/Tests/Unit/IpLookup/ExtemeIpLookupTest.php */
class __TwigTemplate_4bc9445946ff2b32e9cac08c496d511bc72984850a6921da421e3d35c318f381 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\IpLookup;

use GuzzleHttp\\Client;
use GuzzleHttp\\Psr7\\Response;
use Mautic\\CoreBundle\\IpLookup\\ExtremeIpLookup;

/**
 * Class ExtremeIpLookupTest.
 */
class ExtemeIpLookupTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$cacheDir = __DIR__.'/../../../../../../var/cache/test';

    public function testIpLookupSuccessful()
    {
        // Mock http connector
        \$mockHttp = \$this->createMock(Client::class);

        // Mock a successful response
        \$mockResponse = new Response(200, [], '{\"businessName\" : \"Sandhills Publishing Company\",\"businessWebsite\" : \"www.sandhills.com\",\"city\" : \"Lincoln\",\"continent\" : \"North America\",\"country\" : \"United States\",\"countryCode\" : \"US\",\"ipName\" : \"proxy.sandhills.com\",\"ipType\" : \"Business\",\"isp\" : \"Sandhills Publishing Company\",\"lat\" : \"40.8615\",\"lon\" : \"-96.7119\",\"org\" : \"Sandhills Publishing Company\",\"query\" : \"63.70.164.200\",\"region\" : \"Nebraska\",\"status\" : \"success\"}');

        \$mockHttp->expects(\$this->once())
            ->method('get')
            ->willReturn(\$mockResponse);

        \$ipService = new ExtremeIpLookup(null, null, \$this->cacheDir, null, \$mockHttp);

        \$details = \$ipService->setIpAddress('63.70.164.200')->getDetails();

        \$this->assertEquals('Lincoln', \$details['city']);
        \$this->assertEquals('Nebraska', \$details['region']);
        \$this->assertEquals('United States', \$details['country']);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/IpLookup/ExtemeIpLookupTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/IpLookup/ExtemeIpLookupTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/IpLookup/ExtemeIpLookupTest.php");
    }
}
