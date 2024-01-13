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

/* @bundles/CoreBundle/Tests/Unit/DependencyInjection/EnvProcessor/IntNullableProcessorTest.php */
class __TwigTemplate_fb5a36483ec9592f9271c436e39ced64ded00c5ca8123e303f259b78dd99b66b extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\DependencyInjection\\EnvProcessor;

use Mautic\\CoreBundle\\DependencyInjection\\EnvProcessor\\IntNullableProcessor;
use PHPUnit\\Framework\\TestCase;

class IntNullableProcessorTest extends TestCase
{
    public function testNullReturnedIfNullValue()
    {
        \$getEnv = function (string \$name) {
            return null;
        };

        \$processor = new IntNullableProcessor();

        \$value = \$processor->getEnv('', 'test', \$getEnv);

        \$this->assertNull(\$value);
    }

    public function testIntReturnedIfNotNull()
    {
        \$getEnv = function (string \$name) {
            return '0';
        };

        \$processor = new IntNullableProcessor();

        \$value = \$processor->getEnv('', 'test', \$getEnv);

        \$this->assertSame(0, \$value);
    }

    public function testIntReturnedIfEmptyString()
    {
        \$getEnv = function (string \$name) {
            return '';
        };

        \$processor = new IntNullableProcessor();

        \$value = \$processor->getEnv('', 'test', \$getEnv);

        \$this->assertSame(0, \$value);
    }

    public function testIntReturnedIfInt()
    {
        \$getEnv = function (string \$name) {
            return 12;
        };

        \$processor = new IntNullableProcessor();

        \$value = \$processor->getEnv('', 'test', \$getEnv);

        \$this->assertSame(12, \$value);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/DependencyInjection/EnvProcessor/IntNullableProcessorTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/DependencyInjection/EnvProcessor/IntNullableProcessorTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/DependencyInjection/EnvProcessor/IntNullableProcessorTest.php");
    }
}
