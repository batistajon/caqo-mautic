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

/* @bundles/CoreBundle/EventListener/ConsoleErrorListener.php */
class __TwigTemplate_c8346241eade0ede628e587c18a130d43d7491f988293558a4540415a049e1de extends Template
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

namespace Mautic\\CoreBundle\\EventListener;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Console\\Event\\ConsoleErrorEvent;

/**
 * Class ConsoleErrorListener.
 */
class ConsoleErrorListener
{
    /**
     * @var LoggerInterface
     */
    private \$logger;

    public function __construct(LoggerInterface \$logger)
    {
        \$this->logger = \$logger;
    }

    public function onConsoleError(ConsoleErrorEvent \$event)
    {
        \$command   = \$event->getCommand();
        \$exception = \$event->getError();

        // Log error with trace
        \$trace = (MAUTIC_ENV == 'dev') ? \"\\n[stack trace]\\n\".\$exception->getTraceAsString() : '';

        \$message = sprintf(
            '%s: %s (uncaught exception) at %s line %s while running console command `%s`%s',
            get_class(\$exception),
            \$exception->getMessage(),
            \$exception->getFile(),
            \$exception->getLine(),
            empty(\$command) ? 'UNKNOWN' : \$command->getName(),
            \$trace
        );

        // Use notice so it makes it to the log all \"perttified\" (using error spits it out to console and not the log)
        \$this->logger->notice(\$message);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/EventListener/ConsoleErrorListener.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/ConsoleErrorListener.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/EventListener/ConsoleErrorListener.php");
    }
}
