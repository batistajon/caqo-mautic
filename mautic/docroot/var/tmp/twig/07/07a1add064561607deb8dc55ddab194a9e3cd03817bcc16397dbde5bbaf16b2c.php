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

/* @bundles/CoreBundle/Tests/Unit/Factory/TransifexFactoryTest.php */
class __TwigTemplate_ec77b6e260765a1c8cc635b7ceeb6df395a85d826e8315f3e8f344696192ea83 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Factory;

use Mautic\\CoreBundle\\Factory\\TransifexFactory;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\Transifex\\Connector\\Resources;
use Mautic\\Transifex\\Exception\\MissingCredentialsException;
use Mautic\\Transifex\\TransifexInterface;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Psr\\Http\\Client\\ClientInterface;

class TransifexFactoryTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var ClientInterface&MockObject
     */
    private \$client;

    /**
     * @var CoreParametersHelper&MockObject
     */
    private \$coreParametersHelper;

    private TransifexFactory \$transifexFactory;

    protected function setUp(): void
    {
        \$this->client               = \$this->createMock(ClientInterface::class);
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->transifexFactory     = new TransifexFactory(\$this->client, \$this->coreParametersHelper);
    }

    public function testCreatingTransifexWithoutCredentials(): void
    {
        \$this->expectException(MissingCredentialsException::class);
        \$this->transifexFactory->getTransifex();
    }

    public function testCreatingTransifexWithCredentials(): void
    {
        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('transifex_api_token')
            ->willReturn('the_api_key');

        \$transifex = \$this->transifexFactory->getTransifex();

        Assert::assertTrue(\$transifex instanceof TransifexInterface);

        // Getting a connector validates the config, so this should throw an exception.
        Assert::assertTrue(\$transifex->getConnector(Resources::class) instanceof Resources);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Factory/TransifexFactoryTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Factory/TransifexFactoryTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Factory/TransifexFactoryTest.php");
    }
}
