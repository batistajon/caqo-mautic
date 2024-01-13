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

/* @bundles/CoreBundle/EventListener/ConsoleTerminateListener.php */
class __TwigTemplate_6d3b31cbdf7a2eda52702d023869a3f24241656e19da68baf930b6c8231ff78c extends Template
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

namespace Mautic\\CoreBundle\\EventListener;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent;

/**
 * Class ConsoleTerminateListener.
 */
class ConsoleTerminateListener
{
    /**
     * @var LoggerInterface
     */
    private \$logger;

    public function __construct(LoggerInterface \$logger)
    {
        \$this->logger = \$logger;
    }

    public function onConsoleTerminate(ConsoleTerminateEvent \$event)
    {
        \$statusCode = \$event->getExitCode();
        \$command    = \$event->getCommand();

        if (0 === \$statusCode) {
            return;
        }

        if (\$statusCode > 255) {
            \$statusCode = 255;
            \$event->setExitCode(\$statusCode);
        }

        \$this->logger->warning(sprintf(
            'Command `%s` exited with status code %d',
            \$command->getName(),
            \$statusCode
        ));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/EventListener/ConsoleTerminateListener.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/ConsoleTerminateListener.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/EventListener/ConsoleTerminateListener.php");
    }
}
