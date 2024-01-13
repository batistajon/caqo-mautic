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

/* @bundles/CoreBundle/EventListener/ErrorHandlingListener.php */
class __TwigTemplate_10fb66619eeb2f8dd6397589f82f293b95f772d4fc3503b0761de3b69562e7ee extends Template
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

use Mautic\\CoreBundle\\ErrorHandler\\ErrorHandler;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

class ErrorHandlingListener implements EventSubscriberInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 2047],
        ];
    }

    /**
     * ErrorHandlingListener constructor.
     *
     * @param LoggerInterface \$debugLogger
     */
    public function __construct(LoggerInterface \$logger, LoggerInterface \$mainLogger, LoggerInterface \$debugLogger = null)
    {
        ErrorHandler::getHandler()
            ->setLogger(\$logger)
            ->setMainLogger(\$mainLogger)
            ->setDebugLogger(\$debugLogger);
    }

    public function onKernelRequest(GetResponseEvent \$event)
    {
        // Do nothing.  Just want symfony to call the class to set the error handling functions
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/EventListener/ErrorHandlingListener.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/ErrorHandlingListener.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/EventListener/ErrorHandlingListener.php");
    }
}
