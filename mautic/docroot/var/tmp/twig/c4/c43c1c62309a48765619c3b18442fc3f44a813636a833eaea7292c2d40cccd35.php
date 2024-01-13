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

/* @bundles/CoreBundle/Tests/Unit/IpLookup/MaxmindLookupTest.php */
class __TwigTemplate_9345dbc2a5a93f5974ebac89fe2e743d1703a0826ad8bd874041443c28273733 extends Template
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
use Mautic\\CoreBundle\\IpLookup\\MaxmindCountryLookup;
use Mautic\\CoreBundle\\IpLookup\\MaxmindOmniLookup;
use Mautic\\CoreBundle\\IpLookup\\MaxmindPrecisionLookup;
use PHPUnit\\Framework\\MockObject\\MockObject;

/**
 * Maxmind requires API key and thus cannot test actual lookup so just make API endpoint works and
 * classes are initiated.
 */
class MaxmindLookupTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$cacheDir = __DIR__.'/../../../../../../var/cache/test';

    /**
     * @var MockObject|Client
     */
    protected \$mockHttp;

    protected function setUp(): void
    {
        // Mock http connector
        \$this->mockHttp = \$this->createMock(Client::class);

        // Mock a successful response
        \$mockResponse = new Response(200, [], <<<'RESPONSE'
{
  \"city\":  {
      \"confidence\":  25,
      \"geoname_id\": 54321,
      \"names\":  {
          \"de\":    \"Los Angeles\",
          \"en\":    \"Los Angeles\",
          \"es\":    \"Los Ángeles\",
          \"fr\":    \"Los Angeles\",
          \"ja\":    \"ロサンゼルス市\",
          \"pt-BR\":  \"Los Angeles\",
          \"ru\":    \"Лос-Анджелес\",
          \"zh-CN\": \"洛杉矶\"
      }
  },
  \"continent\":  {
      \"code\":       \"NA\",
      \"geoname_id\": 123456,
      \"names\":  {
          \"de\":    \"Nordamerika\",
          \"en\":    \"North America\",
          \"es\":    \"América del Norte\",
          \"fr\":    \"Amérique du Nord\",
          \"ja\":    \"北アメリカ\",
          \"pt-BR\": \"América do Norte\",
          \"ru\":    \"Северная Америка\",
          \"zh-CN\": \"北美洲\"

      }
  },
  \"country\":  {
      \"confidence\":  75,
      \"geoname_id\":  6252001,
      \"iso_code\":    \"US\",
      \"names\":  {
          \"de\":     \"USA\",
          \"en\":     \"United States\",
          \"es\":     \"Estados Unidos\",
          \"fr\":     \"États-Unis\",
          \"ja\":     \"アメリカ合衆国\",
          \"pt-BR\":  \"Estados Unidos\",
          \"ru\":     \"США\",
          \"zh-CN\":  \"美国\"
      }
  },
  \"location\":  {
      \"accuracy_radius\":     20,
      \"average_income\":      128321,
      \"latitude\":            37.6293,
      \"longitude\":           -122.1163,
      \"metro_code\":          807,
      \"population_density\":  7122,
      \"time_zone\":           \"America/Los_Angeles\"
  },
  \"postal\": {
      \"code\":       \"90001\",
      \"confidence\": 10
  },
  \"registered_country\":  {
      \"geoname_id\":  6252001,
      \"iso_code\":    \"US\",
      \"names\":  {
          \"de\":     \"USA\",
          \"en\":     \"United States\",
          \"es\":     \"Estados Unidos\",
          \"fr\":     \"États-Unis\",
          \"ja\":     \"アメリカ合衆国\",
          \"pt-BR\":  \"Estados Unidos\",
          \"ru\":     \"США\",
          \"zh-CN\":  \"美国\"
      }
  },
  \"represented_country\":  {
      \"geoname_id\":  6252001,
      \"iso_code\":    \"US\",
      \"names\":  {
          \"de\":     \"USA\",
          \"en\":     \"United States\",
          \"es\":     \"Estados Unidos\",
          \"fr\":     \"États-Unis\",
          \"ja\":     \"アメリカ合衆国\",
          \"pt-BR\":  \"Estados Unidos\",
          \"ru\":     \"США\",
          \"zh-CN\":  \"美国\"
      },
      \"type\": \"military\"
  },
  \"subdivisions\":  [
      {
          \"confidence\":  50,
          \"geoname_id\":  5332921,
          \"iso_code\":    \"CA\",
          \"names\":  {
              \"de\":    \"Kalifornien\",
              \"en\":    \"California\",
              \"es\":    \"California\",
              \"fr\":    \"Californie\",
              \"ja\":    \"カリフォルニア\",
              \"ru\":    \"Калифорния\",
              \"zh-CN\": \"加州\"
          }
      }
  ],
  \"traits\": {
      \"autonomous_system_number\":      1239,
      \"autonomous_system_organization\": \"Linkem IR WiMax Network\",
      \"domain\":                        \"example.com\",
      \"is_anonymous_proxy\":            true,
      \"is_satellite_provider\":         true,
      \"isp\":                           \"Linkem spa\",
      \"ip_address\":                    \"1.2.3.4\",
      \"organization\":                  \"Linkem IR WiMax Network\",
      \"user_type\":                     \"traveler\"
  },
  \"maxmind\": {
      \"queries_remaining\":            54321
  }
}
RESPONSE);

        \$this->mockHttp->expects(\$this->once())
            ->method('get')
            ->willReturn(\$mockResponse);
    }

    public function testCountryIpLookupSuccessful()
    {
        \$ipService = new MaxmindCountryLookup(null, null, \$this->cacheDir, null, \$this->mockHttp);

        \$details = \$ipService->setIpAddress('1.2.3.4')->getDetails();

        \$this->checkDetails(\$details);
    }

    public function testOmniIpLookupSuccessful()
    {
        \$ipService = new MaxmindOmniLookup(null, null, \$this->cacheDir, null, \$this->mockHttp);

        \$details = \$ipService->setIpAddress('1.2.3.4')->getDetails();

        \$this->checkDetails(\$details);
    }

    public function testPrecisionIpLookupSuccessful()
    {
        \$ipService = new MaxmindPrecisionLookup(null, null, \$this->cacheDir, null, \$this->mockHttp);

        \$details = \$ipService->setIpAddress('1.2.3.4')->getDetails();

        \$this->checkDetails(\$details);
    }

    private function checkDetails(\$details)
    {
        \$this->assertEquals('Los Angeles', \$details['city']);
        \$this->assertEquals('California', \$details['region']);
        \$this->assertEquals('United States', \$details['country']);
        \$this->assertEquals('90001', \$details['zipcode']);
        \$this->assertEquals('37.6293', \$details['latitude']);
        \$this->assertEquals('-122.1163', \$details['longitude']);
        \$this->assertEquals('America/Los_Angeles', \$details['timezone']);
        \$this->assertEquals('Linkem spa', \$details['isp']);
        \$this->assertEquals('Linkem IR WiMax Network', \$details['organization']);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/IpLookup/MaxmindLookupTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/IpLookup/MaxmindLookupTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/IpLookup/MaxmindLookupTest.php");
    }
}