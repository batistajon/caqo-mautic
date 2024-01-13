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

/* @bundles/UserBundle/EventListener/SAMLSubscriber.php */
class __TwigTemplate_fbedad5938b02fcc04caf98cad7abee5190ebc89204ca8084f0655818d71a024 extends Template
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

namespace Mautic\\UserBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Routing\\Router;

class SAMLSubscriber implements EventSubscriberInterface
{
    /**
     * @var CoreParametersHelper
     */
    private \$coreParametersHelper;

    /**
     * @var Router
     */
    private \$router;

    public function __construct(CoreParametersHelper \$coreParametersHelper, Router \$router)
    {
        \$this->coreParametersHelper = \$coreParametersHelper;
        \$this->router               = \$router;
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 256],
        ];
    }

    /**
     * Block access to SAML URLs if SAML is disabled.
     */
    public function onKernelRequest(GetResponseEvent \$event): void
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        \$request = \$event->getRequest();
        \$route   = \$request->attributes->get('_route');
        \$url     = \$request->getRequestUri();
        if (false === strpos(\$route, 'lightsaml') && false === strpos(\$url, '/saml/')) {
            return;
        }

        \$samlEnabled = (bool) \$this->coreParametersHelper->get('saml_idp_metadata');
        if (\$samlEnabled) {
            return;
        }

        // Redirect to standard login page if SAML is disabled
        \$event->setResponse(
            new RedirectResponse(\$this->router->generate('login'))
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/EventListener/SAMLSubscriber.php";
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
        return new Source("", "@bundles/UserBundle/EventListener/SAMLSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/EventListener/SAMLSubscriber.php");
    }
}
