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

/* @bundles/CoreBundle/Tests/Unit/IpLookup/MaxmindDownloadLookupTest.php */
class __TwigTemplate_5f1dfa85eb1d03d27ed8434a78ca62c53cae086d3183a2114b93eb1a65cb246f extends Template
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

use Mautic\\CoreBundle\\IpLookup\\MaxmindDownloadLookup;

class MaxmindDownloadLookupTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testDownloadDataStore()
    {
        if (empty(\$_ENV['MAXMIND_LICENSE_KEY'])) {
            // The env variable MAXMIND_LICENSE_KEY. can be set in phpunit.xml
            \$this->markTestSkipped('You can run this test just if you add license key to env variable MAXMIND_LICENSE_KEY.');
        }

        \$license_key =  \$_ENV['MAXMIND_LICENSE_KEY'];

        // Keep the file contained to cache/test
        \$ipService = new MaxmindDownloadLookup(\$license_key, null, sys_get_temp_dir());

        \$result = \$ipService->downloadRemoteDataStore();

        \$this->assertTrue(\$result);
    }

    public function testIpLookupSuccessful()
    {
        if (empty(\$_ENV['MAXMIND_LICENSE_KEY'])) {
            \$this->markTestSkipped('It can be tested just with testDownloadDataStore. It needs env variable MAXMIND_LICENSE_KEY.');
        }

        // Keep the file contained to cache/test
        \$ipService = new MaxmindDownloadLookup(null, null, sys_get_temp_dir());

        \$details = \$ipService->setIpAddress('52.52.118.192')->getDetails();

        \$this->assertEquals('San Jose', \$details['city']);
        \$this->assertEquals('California', \$details['region']);
        \$this->assertEquals('United States', \$details['country']);
        \$this->assertEquals('', \$details['zipcode']);
        \$this->assertEquals('37.3388', \$details['latitude']);
        \$this->assertEquals('-121.8914', \$details['longitude']);
        \$this->assertEquals('America/Los_Angeles', \$details['timezone']);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/IpLookup/MaxmindDownloadLookupTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/IpLookup/MaxmindDownloadLookupTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/IpLookup/MaxmindDownloadLookupTest.php");
    }
}
