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

/* @bundles/CoreBundle/EventListener/ExceptionListener.php */
class __TwigTemplate_0720e7880ba0b1695f6cde64d5d398fa498c2b71466ddc3d8076d60f1a1e7c10 extends Template
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

use LightSaml\\Error\\LightSamlException;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener as KernelExceptionListener;
use Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Routing\\Router;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\LogoutException;
use Symfony\\Component\\Security\\Core\\Security;

/**
 * Class ExceptionListener.
 */
class ExceptionListener extends KernelExceptionListener
{
    /**
     * @var Router
     */
    protected \$router;

    /**
     * ExceptionListener constructor.
     *
     * @param LoggerInterface \$controller
     */
    public function __construct(Router \$router, \$controller, LoggerInterface \$logger = null)
    {
        parent::__construct(\$controller, \$logger);

        \$this->router = \$router;
    }

    public function onKernelException(GetResponseForExceptionEvent \$event)
    {
        \$exception = \$event->getException();

        if (\$exception instanceof LightSamlException) {
            // Redirect to login page with message
            \$event->getRequest()->getSession()->set(Security::AUTHENTICATION_ERROR, \$exception->getMessage());
            \$event->setResponse(new RedirectResponse(\$this->router->generate('login')));

            return;
        }

        // Check for exceptions we don't want to handle
        if (\$exception instanceof AuthenticationException || \$exception instanceof AccessDeniedException || \$exception instanceof LogoutException
        ) {
            return;
        }

        if (!\$exception instanceof AccessDeniedHttpException && !\$exception instanceof NotFoundHttpException) {
            \$this->logException(\$exception, sprintf('Uncaught PHP Exception %s: \"%s\" at %s line %s', get_class(\$exception), \$exception->getMessage(), \$exception->getFile(), \$exception->getLine()));
        }

        \$exception = \$event->getException();
        \$request   = \$event->getRequest();
        \$request   = \$this->duplicateRequest(\$exception, \$request);
        try {
            \$response = \$event->getKernel()->handle(\$request, HttpKernelInterface::SUB_REQUEST, false);

            \$event->setResponse(\$response);
        } catch (\\Exception \$e) {
            \$this->logException(
                \$e,
                sprintf(
                    'Exception thrown when handling an exception (%s: %s at %s line %s)',
                    get_class(\$e),
                    \$e->getMessage(),
                    \$e->getFile(),
                    \$e->getLine()
                )
            );

            \$wrapper = \$e;

            while (\$prev = \$wrapper->getPrevious()) {
                if (\$exception === \$wrapper = \$prev) {
                    throw \$e;
                }
            }

            \$prev = new \\ReflectionProperty('Exception', 'previous');
            \$prev->setAccessible(true);
            \$prev->setValue(\$wrapper, \$exception);

            throw \$e;
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/EventListener/ExceptionListener.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/ExceptionListener.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/EventListener/ExceptionListener.php");
    }
}
