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

/* @bundles/CoreBundle/Tests/Unit/Factory/ModelFactoryTest.php */
class __TwigTemplate_68583e4f78aeca101536748943fdeee098438e690ca7f9e9abac296c6bf8d831 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Factory;

use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\PointBundle\\Model\\TriggerModel;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

class ModelFactoryTest extends TestCase
{
    /**
     * @var MockObject|ContainerInterface
     */
    private \$container;

    /**
     * @var ModelFactory
     */
    private \$factory;

    protected function setUp(): void
    {
        \$this->container = \$this->createMock(ContainerInterface::class);
        \$this->factory   = new ModelFactory(\$this->container);
    }

    public function testModelKeyIsLowerCaseToMatchServiceKeys()
    {
        \$pointTriggerModel = \$this->createMock(TriggerModel::class);
        \$modelName         = 'point.triggerEvent';
        \$containerKey      = 'mautic.point.model.triggerEvent';

        \$this->container->expects(\$this->once())
            ->method('has')
            ->with(\$containerKey)
            ->willReturn(true);

        \$this->container->expects(\$this->once())
            ->method('get')
            ->with(\$containerKey)
            ->willReturn(\$pointTriggerModel);

        \$givenPointTriggerModel = \$this->factory->getModel(\$modelName);

        \$this->assertInstanceOf(TriggerModel::class, \$givenPointTriggerModel);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Factory/ModelFactoryTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Factory/ModelFactoryTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Factory/ModelFactoryTest.php");
    }
}
