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

/* @bundles/CoreBundle/Tests/Unit/Entity/IpAddressTest.php */
class __TwigTemplate_2c84b52423ee2d6f370887e7dc510b5c72978d35a822a95d09890774b554a5c9 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Entity;

use Mautic\\CoreBundle\\Entity\\IpAddress;

class IpAddressTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testExactIp()
    {
        \$ipAddress = new IpAddress();
        \$ipAddress->setDoNotTrackList(
            [
                '192.168.0.1',
            ]
        );
        \$ipAddress->setIpAddress('192.168.0.1');
        \$this->assertFalse(\$ipAddress->isTrackable());

        \$ipAddress->setIpAddress('192.168.0.2');
        \$this->assertTrue(\$ipAddress->isTrackable());
    }

    public function testIpRange()
    {
        // HostMin:   172.16.0.1
        // HostMax:   172.31.255.255
        \$ipAddress = new IpAddress();
        \$ipAddress->setDoNotTrackList(
            [
                '172.16.0.0/12',
            ]
        );

        \$ipAddress->setIpAddress('172.16.0.1');
        \$this->assertFalse(\$ipAddress->isTrackable());

        \$ipAddress->setIpAddress('172.31.255.254');
        \$this->assertFalse(\$ipAddress->isTrackable());

        \$ipAddress->setIpAddress('172.15.1.32');
        \$this->assertTrue(\$ipAddress->isTrackable());

        \$ipAddress->setIpAddress('172.32.0.0');
        \$this->assertTrue(\$ipAddress->isTrackable());
    }

    public function testIpWildcard()
    {
        \$ipAddress = new IpAddress();
        \$ipAddress->setDoNotTrackList(
            [
                '172.15.1.*',
            ]
        );
        \$ipAddress->setIpAddress('172.15.1.1');
        \$this->assertFalse(\$ipAddress->isTrackable());

        \$ipAddress->setIpAddress('172.16.1.1');
        \$this->assertTrue(\$ipAddress->isTrackable());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Entity/IpAddressTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Entity/IpAddressTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Entity/IpAddressTest.php");
    }
}
