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

/* @bundles/CoreBundle/Tests/Unit/EventListener/EnvironmentSubscriberTest.php */
class __TwigTemplate_c44881b72c28476bba359fc0e4c3c0a75f307e216a84bc49c7d3d72945061998 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\EventListener;

use Mautic\\CoreBundle\\EventListener\\EnvironmentSubscriber;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

class EnvironmentSubscriberTest extends TestCase
{
    private EnvironmentSubscriber \$environmentSubscriber;

    /**
     * @var MockObject|CoreParametersHelper
     */
    private \$coreParametersHelperMock;

    protected function setUp(): void
    {
        \$this->coreParametersHelperMock = \$this->createMock(CoreParametersHelper::class);
        \$this->environmentSubscriber    = new EnvironmentSubscriber(\$this->coreParametersHelperMock);
    }

    public function testGetSubscribedEvents(): void
    {
        Assert::assertSame(
            [
                KernelEvents::REQUEST => [
                    ['onKernelRequestSetTimezone', 128],
                    ['onKernelRequestSetLocale', 101],
                ],
            ],
            \$this->environmentSubscriber::getSubscribedEvents()
        );
    }

    public function testSetLocaleThatDoesNotHavePreviousSession(): void
    {
        \$requestEventMock = \$this->createMock(RequestEvent::class);
        \$requestMock      = \$this->createMock(Request::class);
        \$requestEventMock->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(\$requestMock);
        \$requestMock->expects(\$this->once())
            ->method('hasPreviousSession')
            ->willReturn(false);

        \$this->environmentSubscriber->onKernelRequestSetLocale(\$requestEventMock);
    }

    public function testSetLocaleWithUserLanguagePreference(): void
    {
        \$requestEventMock     = \$this->createMock(RequestEvent::class);
        \$requestMock          = \$this->createMock(Request::class);
        \$sessionInterfaceMock = \$this->createMock(SessionInterface::class);
        \$requestEventMock->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(\$requestMock);
        \$requestMock->expects(\$this->once())
            ->method('hasPreviousSession')
            ->willReturn(true);
        \$requestMock->expects(\$this->exactly(2))
            ->method('getSession')
            ->willReturn(\$sessionInterfaceMock);
        \$sessionInterfaceMock->expects(\$this->once())
            ->method('get')
            ->with('_locale')
            ->willReturn('en_US');
        \$requestMock->expects(\$this->once())
            ->method('setLocale')
            ->with('en_US');
        \$sessionInterfaceMock->expects(\$this->once())
            ->method('set')
            ->with('_locale')
            ->willReturn('en_US');
        \$this->coreParametersHelperMock->expects(\$this->never())
            ->method('get')
            ->with('locale');

        \$this->environmentSubscriber->onKernelRequestSetLocale(\$requestEventMock);
    }

    public function testSetLocaleWithSystemLanguage(): void
    {
        \$requestEventMock     = \$this->createMock(RequestEvent::class);
        \$requestMock          = \$this->createMock(Request::class);
        \$sessionInterfaceMock = \$this->createMock(SessionInterface::class);
        \$requestEventMock->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(\$requestMock);
        \$requestMock->expects(\$this->once())
            ->method('hasPreviousSession')
            ->willReturn(true);
        \$requestMock->expects(\$this->exactly(2))
            ->method('getSession')
            ->willReturn(\$sessionInterfaceMock);
        \$sessionInterfaceMock->expects(\$this->once())
            ->method('get')
            ->with('_locale')
            ->willReturn(null);
        \$this->coreParametersHelperMock->expects(\$this->once())
            ->method('get')
            ->with('locale')
            ->willReturn('en_GB');
        \$requestMock->expects(\$this->once())
            ->method('setLocale')
            ->with('en_GB');
        \$sessionInterfaceMock->expects(\$this->once())
            ->method('set')
            ->with('_locale')
            ->willReturn('en_GB');

        \$this->environmentSubscriber->onKernelRequestSetLocale(\$requestEventMock);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/EventListener/EnvironmentSubscriberTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/EventListener/EnvironmentSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/EventListener/EnvironmentSubscriberTest.php");
    }
}
