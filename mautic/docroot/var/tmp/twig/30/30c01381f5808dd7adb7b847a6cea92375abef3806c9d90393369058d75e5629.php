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

/* @bundles/CoreBundle/Tests/Unit/Monolog/Handler/FileLogHandlerTest.php */
class __TwigTemplate_6ab08fecbf6c29ce268c5e4a5d636e9a5e417e0dbb49d68550c0bde62028e10f extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Monolog\\Handler;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Monolog\\Handler\\FileLogHandler;
use Monolog\\Formatter\\FormatterInterface;
use Monolog\\Logger;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class FileLogHandlerTest extends TestCase
{
    /**
     * @var CoreParametersHelper|MockObject
     */
    private \$coreParametersHelper;

    /**
     * @var FormatterInterface|MockObject
     */
    private \$formatter;

    protected function setUp(): void
    {
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->formatter            = \$this->createMock(FormatterInterface::class);
    }

    public function testPropertiesAreSetFromCoreParametersHelperWhenDebugModeEnabled(): void
    {
        \$this->coreParametersHelper->method('get')
            ->willReturnCallback(
                function (\$key) {
                    switch (\$key) {
                        case 'log_path':
                            return '/var/logs';
                        case 'log_file_name':
                            return 'mautic_test.php';
                        case 'max_log_files':
                            return 7;
                        case 'debug':
                            return true;
                    }
                }
            );

        \$handler = new FileLogHandler(\$this->coreParametersHelper, \$this->formatter);
        \$this->assertEquals(Logger::DEBUG, \$handler->getLevel());
        \$this->assertEquals(spl_object_id(\$this->formatter), spl_object_id(\$handler->getFormatter()));

        \$filename = \$this->getProperty(\$handler, 'filename');
        \$this->assertEquals('/var/logs/mautic_test.php', \$filename);
        \$maxFiles = \$this->getProperty(\$handler, 'maxFiles');
        \$this->assertEquals(7, \$maxFiles);
    }

    public function testPropertiesAreSetFromCoreParametersHelperWhenDebugModeDisabled(): void
    {
        \$this->coreParametersHelper->method('get')
            ->willReturnCallback(
                function (\$key) {
                    switch (\$key) {
                        case 'log_path':
                            return '/var/logs';
                        case 'log_file_name':
                            return 'mautic_test.php';
                        case 'max_log_files':
                            return 7;
                        case 'debug':
                            return false;
                    }
                }
            );

        \$handler = new FileLogHandler(\$this->coreParametersHelper, \$this->formatter);
        \$this->assertEquals(Logger::NOTICE, \$handler->getLevel());
        \$this->assertNotEquals(spl_object_id(\$this->formatter), spl_object_id(\$handler->getFormatter()));

        \$filename = \$this->getProperty(\$handler, 'filename');
        \$this->assertEquals('/var/logs/mautic_test.php', \$filename);
        \$maxFiles = \$this->getProperty(\$handler, 'maxFiles');
        \$this->assertEquals(7, \$maxFiles);
    }

    private function getProperty(FileLogHandler \$handler, string \$property)
    {
        \$reflection = new \\ReflectionClass(\$handler);
        \$fileName   = \$reflection->getProperty(\$property);
        \$fileName->setAccessible(true);

        return \$fileName->getValue(\$handler);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Monolog/Handler/FileLogHandlerTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Monolog/Handler/FileLogHandlerTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Monolog/Handler/FileLogHandlerTest.php");
    }
}
