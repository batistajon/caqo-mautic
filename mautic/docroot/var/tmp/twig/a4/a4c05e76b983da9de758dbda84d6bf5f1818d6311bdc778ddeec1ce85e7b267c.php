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

/* @bundles/ApiBundle/Tests/EventListener/ApiSubscriberTest.php */
class __TwigTemplate_ce5484863f1ca261bbc22801ec4d75f89920c1220807c2ebbbe1fbac12c47fe5 extends Template
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

namespace Mautic\\ApiBundle\\Tests\\EventListener;

use Mautic\\ApiBundle\\EventListener\\ApiSubscriber;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Tests\\CommonMocks;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\ParameterBag;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\Translation\\TranslatorInterface;

class ApiSubscriberTest extends CommonMocks
{
    /**
     * @var CoreParametersHelper|MockObject
     */
    private \$coreParametersHelper;

    /**
     * @var TranslatorInterface|MockObject
     */
    private \$translator;

    /**
     * @var Request|MockObject
     */
    private \$request;

    /**
     * @var GetResponseEvent|MockObject
     */
    private \$event;

    /**
     * @var ApiSubscriber
     */
    private \$subscriber;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->translator           = \$this->createMock(TranslatorInterface::class);
        \$this->request              = \$this->createMock(Request::class);
        \$this->request->headers     = new ParameterBag();
        \$this->event                = \$this->createMock(GetResponseEvent::class);
        \$this->subscriber           = new ApiSubscriber(
            \$this->coreParametersHelper,
            \$this->translator
        );
    }

    public function testOnKernelRequestWhenNotMasterRequest()
    {
        \$this->event->expects(\$this->once())
            ->method('isMasterRequest')
            ->willReturn(false);

        \$this->coreParametersHelper->expects(\$this->never())
            ->method('get');

        \$this->assertNull(\$this->subscriber->onKernelRequest(\$this->event));
    }

    public function testOnKernelRequestOnApiRequestWhenApiDisabled()
    {
        \$this->event->expects(\$this->once())
            ->method('isMasterRequest')
            ->willReturn(true);

        \$this->event->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(\$this->request);

        \$this->request->expects(\$this->once())
            ->method('getRequestUri')
            ->willReturn('/api/endpoint');

        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('api_enabled')
            ->willReturn(false);

        \$this->event->expects(\$this->once())
            ->method('setResponse')
            ->with(\$this->isInstanceOf(JsonResponse::class))
            ->willReturnCallback(
                function (JsonResponse \$response) {
                    \$this->assertEquals(403, \$response->getStatusCode());
                }
            );

        \$this->subscriber->onKernelRequest(\$this->event);
    }

    public function testOnKernelRequestOnApiRequestWhenApiEnabled()
    {
        \$this->event->expects(\$this->once())
            ->method('isMasterRequest')
            ->willReturn(true);

        \$this->event->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(\$this->request);

        \$this->request->expects(\$this->once())
            ->method('getRequestUri')
            ->willReturn('/api/endpoint');

        \$this->coreParametersHelper->expects(\$this->exactly(2))
            ->method('get')
            ->withConsecutive(['api_enabled'], ['api_enable_basic_auth'])
            ->willReturnOnConsecutiveCalls(true, true);

        \$this->subscriber->onKernelRequest(\$this->event);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Tests/EventListener/ApiSubscriberTest.php";
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
        return new Source("", "@bundles/ApiBundle/Tests/EventListener/ApiSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Tests/EventListener/ApiSubscriberTest.php");
    }
}
