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

/* @bundles/CoreBundle/Tests/Unit/Helper/PRedisConnectionHelperTest.php */
class __TwigTemplate_b99db9f57d427241a29f4a8bfff0f4e318d651a687cf4afb2257a7e713f56954 extends Template
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

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper;

use Mautic\\CoreBundle\\Helper\\PRedisConnectionHelper;
use PHPUnit\\Framework\\Assert;

class PRedisConnectionHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testEndpointsArrayInput(): void
    {
        \$a = ['tcp://1.1.1.1', 'unix://var/socket'];
        // assume arrays are already in correct format
        \$this->assertEquals(\$a, PRedisConnectionHelper::getRedisEndpoints(\$a));
    }

    public function testEndpointsStringInput(): void
    {
        // non domain string should be encapsulated into an array
        \$this->assertEquals([['scheme'=>'tcp', 'host'=>'1.1.1.1']], PRedisConnectionHelper::getRedisEndpoints('tcp://1.1.1.1'));

        // domain should be resolved and an array of ip addresses returned
        \$connInfo = PRedisConnectionHelper::getRedisEndpoints('tcp://bing.com:8888?test=car');
        Assert::assertIsArray(\$connInfo);
        Assert::assertGreaterThan(1, count(\$connInfo));
        foreach (\$connInfo as \$c) {
            \$this->assertMatchesRegularExpression('/^(?:25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]\\d|\\d)(?:[.](?:25[0-5]|2[0-4]\\d|1\\d\\d|[1-9]\\d|\\d)){3}\$/', \$c['host']);
            \$this->assertEquals('tcp', \$c['scheme']);
            \$this->assertEquals(8888, \$c['port']);
            \$this->assertEquals('test=car', \$c['query']);
        }
    }

    public function testRedisOptions(): void
    {
        \$redisConfiguration = [
            'replication' => 'sentinel',
            'service'     => 'secondmaster',
            'password'    => 'secretpass',
        ];
        \$result = [
            'replication' => 'sentinel',
            'service'     => 'secondmaster',
            'parameters'  => ['password' => 'secretpass'],
        ];
        \$this->assertEquals(\$result, PRedisConnectionHelper::makeRedisOptions(\$redisConfiguration));

        \$result['prefix'] = 'prf:';
        \$this->assertEquals(\$result, PRedisConnectionHelper::makeRedisOptions(\$redisConfiguration, 'prf:'));

        \$redisConfiguration = [
            'password' => 'secretpass',
        ];
        \$result = [
            'parameters' => ['password' => 'secretpass'],
        ];
        \$this->assertEquals(\$result, PRedisConnectionHelper::makeRedisOptions(\$redisConfiguration));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/PRedisConnectionHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/PRedisConnectionHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/PRedisConnectionHelperTest.php");
    }
}
