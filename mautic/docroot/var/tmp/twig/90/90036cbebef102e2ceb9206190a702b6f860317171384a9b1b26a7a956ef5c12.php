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

/* @bundles/CoreBundle/Test/Listeners/CleanupListener.php */
class __TwigTemplate_1fe116aaef27bbba6b690989ffe813b9cef77dc6f996bde2ab0a0258fac0a890 extends Template
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

namespace Mautic\\CoreBundle\\Test\\Listeners;

use Closure;
use PHPUnit\\Framework\\Test;
use PHPUnit\\Framework\\TestListener;
use PHPUnit\\Framework\\TestListenerDefaultImplementation;
use ReflectionObject;

/**
 * Prevents memory leaks by resetting all the test properties.
 */
class CleanupListener implements TestListener
{
    use TestListenerDefaultImplementation;

    public function endTest(Test \$test, float \$time): void
    {
        \$reflection = new ReflectionObject(\$test);

        foreach (\$reflection->getProperties() as \$property) {
            if (!\$property->isStatic() && 0 !== strpos(\$property->getDeclaringClass()->getName(), 'PHPUnit\\\\')) {
                \$this->unsetProperty(\$test, \$property->getName());
            }
        }
    }

    private function unsetProperty(object \$object, string \$property): void
    {
        \$closure = function (object \$object) use (\$property) {
            unset(\$object->\$property);
        };

        Closure::bind(\$closure, null, \$object)(\$object);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Test/Listeners/CleanupListener.php";
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
        return new Source("", "@bundles/CoreBundle/Test/Listeners/CleanupListener.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Test/Listeners/CleanupListener.php");
    }
}
