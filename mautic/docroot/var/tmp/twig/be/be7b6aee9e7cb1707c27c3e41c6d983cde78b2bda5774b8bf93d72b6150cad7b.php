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

/* @bundles/CoreBundle/Tests/Unit/DependencyInjection/EnvProcessor/NullableProcessorTest.php */
class __TwigTemplate_19b4a804684626b4cfae7811cec6d25ac77715de4c8f66b6cbf534693f34d6a5 extends Template
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

use Mautic\\CoreBundle\\DependencyInjection\\EnvProcessor\\NullableProcessor;
use PHPUnit\\Framework\\TestCase;

class NullableProcessorTest extends TestCase
{
    public function testNullReturnedIfEmptyString()
    {
        \$getEnv = function (string \$name) {
            return '';
        };

        \$processor = new NullableProcessor();

        \$value = \$processor->getEnv('', 'test', \$getEnv);

        \$this->assertNull(\$value);
    }

    public function testValueReturnedIfNotEmptyString()
    {
        \$getEnv = function (string \$name) {
            return 'foobar';
        };

        \$processor = new NullableProcessor();

        \$value = \$processor->getEnv('', 'test', \$getEnv);

        \$this->assertEquals('foobar', \$value);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/DependencyInjection/EnvProcessor/NullableProcessorTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/DependencyInjection/EnvProcessor/NullableProcessorTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/DependencyInjection/EnvProcessor/NullableProcessorTest.php");
    }
}
