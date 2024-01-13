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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/Notification/Handler/HandlerContainerTest.php */
class __TwigTemplate_ade2bf7be5f11625a4c8c96307abc500c1f2da382ef31ea898ec9e536f58a58d extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\Notification\\Handler;

use Mautic\\IntegrationsBundle\\Sync\\Exception\\HandlerNotSupportedException;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Handler\\HandlerContainer;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Handler\\HandlerInterface;
use PHPUnit\\Framework\\TestCase;

class HandlerContainerTest extends TestCase
{
    public function testExceptionThrownIfIntegrationNotFound(): void
    {
        \$this->expectException(HandlerNotSupportedException::class);

        \$handler = new HandlerContainer();
        \$handler->getHandler('foo', 'bar');
    }

    public function testExceptionThrownIfObjectNotFound(): void
    {
        \$this->expectException(HandlerNotSupportedException::class);

        \$handler = new HandlerContainer();

        \$mockHandler = \$this->createMock(HandlerInterface::class);
        \$mockHandler->method('getIntegration')
            ->willReturn('foo');
        \$mockHandler->method('getSupportedObject')
            ->willReturn('bogus');

        \$handler->registerHandler(\$mockHandler);

        \$handler->getHandler('foo', 'bar');
    }

    public function testHandlerIsRegistered(): void
    {
        \$handler = new HandlerContainer();

        \$mockHandler = \$this->createMock(HandlerInterface::class);
        \$mockHandler->method('getIntegration')
            ->willReturn('foo');
        \$mockHandler->method('getSupportedObject')
            ->willReturn('bar');

        \$handler->registerHandler(\$mockHandler);

        \$returnedHandler = \$handler->getHandler('foo', 'bar');

        \$this->assertEquals(\$mockHandler, \$returnedHandler);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/Notification/Handler/HandlerContainerTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/Notification/Handler/HandlerContainerTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/Notification/Handler/HandlerContainerTest.php");
    }
}
