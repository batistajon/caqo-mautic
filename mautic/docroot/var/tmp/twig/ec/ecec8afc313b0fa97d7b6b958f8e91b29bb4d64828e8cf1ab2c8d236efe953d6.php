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

/* @bundles/CoreBundle/Tests/Unit/EventListener/RequestSubscriberTest.php */
class __TwigTemplate_d77eb0a1c31e8f91d159823ef2f2b75da254c6c9a61db8842c5bb455d1c06d8c extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\EventListener;

use Mautic\\CoreBundle\\EventListener\\RequestSubscriber;
use Mautic\\CoreBundle\\Helper\\TemplatingHelper;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Security\\Csrf\\CsrfToken;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class RequestSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var RequestSubscriber
     */
    private \$subscriber;

    /**
     * @var Request
     */
    private \$request;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$getResponseEventMock;

    protected function setUp(): void
    {
        \$aCsrfTokenId    = 45;
        \$aCsrfTokenValue = 'csrf-token-value';

        \$csrfTokenManagerMock = \$this->createMock(CsrfTokenManagerInterface::class);

        \$csrfTokenManagerMock
            ->method('getToken')
            ->willReturn(new CsrfToken(\$aCsrfTokenId, \$aCsrfTokenValue));

        \$this->request = new Request();

        \$this->getResponseEventMock = \$this->getMockBuilder(GetResponseEvent::class)
            ->setConstructorArgs([
                \$this->createMock(HttpKernelInterface::class),
                \$this->request,
                HttpKernelInterface::MASTER_REQUEST,
            ])
            ->getMock();

        \$this->getResponseEventMock
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$this->request);

        \$templatingHelper = \$this->createMock(TemplatingHelper::class);

        \$templatingHelper
            ->method('getTemplating')
            ->willReturn(\$this->createMock(DelegatingEngine::class));

        \$this->subscriber = new RequestSubscriber(
            \$csrfTokenManagerMock,
            \$this->createMock(TranslatorInterface::class),
            \$templatingHelper
        );
    }

    public function testTheValidateCsrfTokenForAjaxPostMethodAsRegularPost()
    {
        \$this->getResponseEventMock
            ->expects(\$this->never())
            ->method('setResponse');

        \$this->request->server->set('REQUEST_METHOD', 'POST');

        \$this->subscriber->validateCsrfTokenForAjaxPost(\$this->getResponseEventMock);
    }

    public function testTheValidateCsrfTokenForAjaxPostMethodAsAjaxGet()
    {
        \$this->getResponseEventMock
            ->expects(\$this->never())
            ->method('setResponse');

        \$this->request->headers->set('X-Requested-With', 'XMLHttpRequest');
        \$this->request->server->set('REQUEST_METHOD', 'GET');

        \$this->subscriber->validateCsrfTokenForAjaxPost(\$this->getResponseEventMock);
    }

    public function testTheValidateCsrfTokenForAjaxPostMethodAsAjaxPostOnPublicRoute()
    {
        \$this->getResponseEventMock
            ->expects(\$this->never())
            ->method('setResponse');

        \$this->request->headers->set('X-Requested-With', 'XMLHttpRequest');
        \$this->request->server->set('REQUEST_METHOD', 'POST');
        \$this->request->server->set('REQUEST_URI', '/some-public-page');

        \$this->subscriber->validateCsrfTokenForAjaxPost(\$this->getResponseEventMock);
    }

    public function testTheValidateCsrfTokenForAjaxPostMethodAsAjaxPostOnSecureRouteWithMissingCsrf()
    {
        \$this->getResponseEventMock
            ->expects(\$this->once())
            ->method('setResponse');

        \$this->request->headers->set('X-Requested-With', 'XMLHttpRequest');
        \$this->request->server->set('REQUEST_METHOD', 'POST');
        \$this->request->server->set('REQUEST_URI', '/s/some-secure-page');

        \$this->subscriber->validateCsrfTokenForAjaxPost(\$this->getResponseEventMock);
    }

    public function testTheValidateCsrfTokenForAjaxPostMethodAsAjaxPostOnSecureRouteWithInvalidCsrf()
    {
        \$this->getResponseEventMock
            ->expects(\$this->once())
            ->method('setResponse');

        \$this->request->headers->set('X-CSRF-Token', 'invalid-csrf-token-value');
        \$this->request->headers->set('X-Requested-With', 'XMLHttpRequest');
        \$this->request->server->set('REQUEST_METHOD', 'POST');
        \$this->request->server->set('REQUEST_URI', '/s/some-secure-page');

        \$this->subscriber->validateCsrfTokenForAjaxPost(\$this->getResponseEventMock);
    }

    public function testTheValidateCsrfTokenForAjaxPostMethodAsAjaxPostOnSecureRouteWithMatchingCsrf()
    {
        \$this->getResponseEventMock
            ->expects(\$this->never())
            ->method('setResponse');

        \$this->request->headers->set('X-CSRF-Token', 'csrf-token-value');
        \$this->request->headers->set('X-Requested-With', 'XMLHttpRequest');
        \$this->request->server->set('REQUEST_METHOD', 'POST');
        \$this->request->server->set('REQUEST_URI', '/s/some-secure-page');

        \$this->subscriber->validateCsrfTokenForAjaxPost(\$this->getResponseEventMock);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/EventListener/RequestSubscriberTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/EventListener/RequestSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/EventListener/RequestSubscriberTest.php");
    }
}
