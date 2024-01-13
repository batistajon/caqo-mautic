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

/* @bundles/InstallBundle/Tests/Controller/InstallControllerTest.php */
class __TwigTemplate_737611a3db2421b1bd9ae44da254be7e6cad9e33770699eecee2f7ecf5655a5f extends Template
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

namespace Mautic\\InstallBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Configurator\\Configurator;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\InstallBundle\\Controller\\InstallController;
use Mautic\\InstallBundle\\Install\\InstallService;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\Form\\FormFactory;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Component\\Routing\\Router;
use Symfony\\Component\\Translation\\TranslatorInterface;

class InstallControllerTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$translatorMock;
    private \$sessionMock;
    private \$modelFactoryMock;
    private \$containerMock;
    private \$routerMock;
    private \$flashBagMock;
    private \$controller;
    private \$corePermissionsMock;
    private \$pathsHelper;
    private \$formFactoryMock;
    private \$formMock;
    private \$templatingMock;

    private \$configurator;
    private \$installer;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->translatorMock       = \$this->createMock(TranslatorInterface::class);
        \$this->sessionMock          = \$this->createMock(Session::class);
        \$this->modelFactoryMock     = \$this->createMock(ModelFactory::class);
        \$this->containerMock        = \$this->createMock(Container::class);
        \$this->routerMock           = \$this->createMock(Router::class);
        \$this->flashBagMock         = \$this->createMock(FlashBagInterface::class);
        \$this->corePermissionsMock  = \$this->createMock(CorePermissions::class);
        \$this->pathsHelper          = \$this->createMock(PathsHelper::class);
        \$this->formFactoryMock      = \$this->createMock(FormFactory::class);
        \$this->formMock             = \$this->createMock(Form::class);
        \$this->templatingMock       = \$this->createMock(DelegatingEngine::class);

        \$this->configurator         = \$this->createMock(Configurator::class);
        \$this->installer            = \$this->createMock(InstallService::class);

        \$this->controller           = new InstallController();
        \$this->controller->setContainer(\$this->containerMock);
        \$this->controller->setTranslator(\$this->translatorMock);
        \$this->sessionMock->method('getFlashBag')->willReturn(\$this->flashBagMock);
        \$this->controller->setRequest(new Request());

        \$this->containerMock->method('get')
            ->withConsecutive(
                ['mautic.configurator'],
                ['mautic.install.service'],
                ['router'],
                ['session'],
                ['mautic.helper.paths']
            )->willReturnOnConsecutiveCalls(
                \$this->configurator,
                \$this->installer,
                \$this->routerMock,
                \$this->sessionMock,
                \$this->pathsHelper
            );

        \$event = \$this->createMock(FilterControllerEvent::class);
        \$this->controller->initialize(\$event);
    }

    public function testStepActionWhenInstalled()
    {
        \$this->installer->expects(\$this->once())
            ->method('checkIfInstalled')
            ->willReturn(
                true
            );

        \$this->routerMock->expects(\$this->once())
            ->method('generate')
            ->with('mautic_dashboard_index', [], UrlGeneratorInterface::ABSOLUTE_PATH)
            ->willReturn('http://localhost/');

        \$response = \$this->controller->stepAction(InstallService::CHECK_STEP);
        \$this->assertEquals(302, \$response->getStatusCode());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/Tests/Controller/InstallControllerTest.php";
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
        return new Source("", "@bundles/InstallBundle/Tests/Controller/InstallControllerTest.php", "/var/www/html/mautic/docroot/app/bundles/InstallBundle/Tests/Controller/InstallControllerTest.php");
    }
}
