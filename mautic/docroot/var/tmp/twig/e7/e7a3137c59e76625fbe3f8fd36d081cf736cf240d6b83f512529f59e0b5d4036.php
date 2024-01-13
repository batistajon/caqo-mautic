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

/* @bundles/MarketplaceBundle/Tests/Functional/Controller/AjaxControllerTest.php */
class __TwigTemplate_589c0b3c3c606c2f4dd351bf1d63e11b9f473ed3843a4f21daa26128815ecf19 extends Template
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

namespace Mautic\\MarketplaceBundle\\Tests\\Functional\\Controller;

use Mautic\\CoreBundle\\Helper\\CacheHelper;
use Mautic\\CoreBundle\\Helper\\ComposerHelper;
use Mautic\\CoreBundle\\Test\\AbstractMauticTestCase;
use Mautic\\MarketplaceBundle\\Controller\\AjaxController;
use Mautic\\MarketplaceBundle\\Model\\ConsoleOutputModel;
use PHPUnit\\Framework\\Assert;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpFoundation\\Request;

final class AjaxControllerTest extends AbstractMauticTestCase
{
    public function testInstallPackageAction(): void
    {
        \$request    = new Request([], [], [], [], [], [], '{\"vendor\":\"mautic\",\"package\":\"test-plugin-bundle\"}');
        \$controller = \$this->generateController(false);

        \$response = \$controller->installPackageAction(\$request);

        Assert::assertSame('{\"success\":true}', \$response->getContent());
        Assert::assertSame(200, \$response->getStatusCode());
    }

    public function testRemovePackageAction(): void
    {
        \$request    = new Request([], [], [], [], [], [], '{\"vendor\":\"mautic\",\"package\":\"test-plugin-bundle\"}');
        \$controller = \$this->generateController(true);

        \$response = \$controller->removePackageAction(\$request);

        Assert::assertSame('{\"success\":true}', \$response->getContent());
        Assert::assertSame(200, \$response->getStatusCode());
    }

    private function generateController(bool \$isPackageInstalled): AjaxController
    {
        \$composer = \$this->createMock(ComposerHelper::class);
        \$composer->method('install')->willReturn(new ConsoleOutputModel(0, 'OK'));
        \$composer->method('remove')->willReturn(new ConsoleOutputModel(0, 'OK'));
        \$composer->method('isInstalled')->willReturn(\$isPackageInstalled);

        \$cacheHelper = \$this->createMock(CacheHelper::class);
        \$cacheHelper->method('clearSymfonyCache')->willReturn(0);

        \$logger = \$this->createMock(LoggerInterface::class);

        \$controller = new AjaxController(
            \$composer,
            \$cacheHelper,
            \$logger
        );
        \$controller->setContainer(self::\$container);

        return \$controller;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Tests/Functional/Controller/AjaxControllerTest.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Tests/Functional/Controller/AjaxControllerTest.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Tests/Functional/Controller/AjaxControllerTest.php");
    }
}
