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

/* @bundles/UserBundle/Tests/EventListener/SAMLSubscriberTest.php */
class __TwigTemplate_7e242bb26cf4c3947137ac25a98d35097df89b9e5a8b02c8a096f2f86d81d2e9 extends Template
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

namespace Mautic\\UserBundle\\Tests\\EventListener;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\UserBundle\\EventListener\\SAMLSubscriber;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\ParameterBag;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\Routing\\Router;

class SAMLSubscriberTest extends TestCase
{
    /**
     * @var GetResponseEvent|MockObject
     */
    private \$event;

    /**
     * @var CoreParametersHelper|MockObject
     */
    private \$coreParametersHelper;

    /**
     * @var Router|MockObject
     */
    private \$router;

    protected function setUp(): void
    {
        \$this->event = \$this->createMock(GetResponseEvent::class);
        \$this->event->expects(\$this->once())
            ->method('isMasterRequest')
            ->willReturn(true);

        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->router               = \$this->createMock(Router::class);
    }

    public function testSamlRoutesAreRedirectedToDefaultLoginIfSamlIsDisabled()
    {
        \$subscriber = new SAMLSubscriber(\$this->coreParametersHelper, \$this->router);

        \$request             = \$this->createMock(Request::class);
        \$request->attributes = new ParameterBag();

        \$request->method('getRequestUri')
            ->willReturn('/saml/login');

        \$this->event->method('getRequest')
            ->willReturn(\$request);

        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('saml_idp_metadata')
            ->willReturn('');

        \$this->router->expects(\$this->once())
            ->method('generate')
            ->willReturn('/s/login');

        \$this->event->expects(\$this->once())
            ->method('setResponse')
            ->with(\$this->isInstanceOf(RedirectResponse::class));

        \$subscriber->onKernelRequest(\$this->event);
    }

    public function testRedirectIsIgnoredIfSamlEnabled()
    {
        \$subscriber = new SAMLSubscriber(\$this->coreParametersHelper, \$this->router);

        \$request             = \$this->createMock(Request::class);
        \$request->attributes = new ParameterBag();

        \$request->method('getRequestUri')
            ->willReturn('/saml/login');

        \$this->event->method('getRequest')
            ->willReturn(\$request);

        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('saml_idp_metadata')
            ->willReturn('1');

        \$this->router->expects(\$this->never())
            ->method('generate');

        \$this->event->expects(\$this->never())
            ->method('setResponse');

        \$subscriber->onKernelRequest(\$this->event);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Tests/EventListener/SAMLSubscriberTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/EventListener/SAMLSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Tests/EventListener/SAMLSubscriberTest.php");
    }
}
