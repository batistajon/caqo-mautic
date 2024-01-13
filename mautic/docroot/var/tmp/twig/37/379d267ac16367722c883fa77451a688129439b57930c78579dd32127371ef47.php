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

/* @bundles/InstallBundle/Tests/InstallFixtures/ORM/FakeContainerTrait.php */
class __TwigTemplate_de4bbd988ae931f3c840afc62df462d6ef61f667c0bddeb3c8b27ce56cfde0c9 extends Template
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

namespace Mautic\\InstallBundle\\Tests\\InstallFixtures\\ORM;

use Symfony\\Component\\DependencyInjection\\ContainerInterface;

trait FakeContainerTrait
{
    public function getContainerFake(): ContainerInterface
    {
        return new class(\$this->tempContainer) implements ContainerInterface {
            /**
             * @var ContainerInterface
             */
            private \$container;

            public function __construct(ContainerInterface \$container)
            {
                \$this->container = \$container;
            }

            public function set(\$id, \$service)
            {
                \$this->container->set(\$id, \$service);
            }

            public function get(\$id, \$invalidBehavior = self::EXCEPTION_ON_INVALID_REFERENCE)
            {
                return \$this->container->get(\$id, \$invalidBehavior);
            }

            public function has(\$id)
            {
                return \$this->container->has(\$id);
            }

            public function initialized(\$id)
            {
                return \$this->container->initialized(\$id);
            }

            public function getParameter(\$name)
            {
                return \$this->container->getParameter(\$name);
            }

            public function hasParameter(\$name)
            {
                return \$this->container->hasParameter(\$name);
            }

            public function setParameter(\$name, \$value)
            {
                \$this->container->setParameter(\$name, \$value);
            }
        };
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/Tests/InstallFixtures/ORM/FakeContainerTrait.php";
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
        return new Source("", "@bundles/InstallBundle/Tests/InstallFixtures/ORM/FakeContainerTrait.php", "/var/www/html/mautic/docroot/app/bundles/InstallBundle/Tests/InstallFixtures/ORM/FakeContainerTrait.php");
    }
}
