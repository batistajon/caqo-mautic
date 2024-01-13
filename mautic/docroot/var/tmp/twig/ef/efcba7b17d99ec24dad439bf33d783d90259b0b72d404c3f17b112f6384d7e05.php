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

/* @bundles/CoreBundle/EventListener/EnvironmentSubscriber.php */
class __TwigTemplate_f585cc6f7fcbb0cc6cdc237b12254182f5766a4ae792f00f4116f73f0ccd1bf4 extends Template
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

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

class EnvironmentSubscriber implements EventSubscriberInterface
{
    private CoreParametersHelper \$coreParametersHelper;

    public function __construct(CoreParametersHelper \$coreParametersHelper)
    {
        \$this->coreParametersHelper = \$coreParametersHelper;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => [
                // Cannot be called earlier than priority 128 or the session is not populated leading to Doctrine's UTCDateTimeType leaving
                // entity DateTime values in UTC
                ['onKernelRequestSetTimezone', 128],
                // Must be 101 to load after Symfony's default Locale listener
                ['onKernelRequestSetLocale', 101],
            ],
        ];
    }

    /**
     * Set timezone.
     */
    public function onKernelRequestSetTimezone(GetResponseEvent \$event)
    {
        \$request = \$event->getRequest();
        if (!\$request->hasPreviousSession()) {
            return;
        }

        // Set date/time
        date_default_timezone_set(\$request->getSession()->get('_timezone', \$this->coreParametersHelper->get('default_timezone')));
    }

    /**
     * Set default locale.
     */
    public function onKernelRequestSetLocale(RequestEvent \$event): void
    {
        \$request = \$event->getRequest();

        if (!\$request->hasPreviousSession()) {
            return;
        }

        \$locale = \$request->getSession()->get('_locale');

        if (!\$locale) {
            \$locale = \$this->coreParametersHelper->get('locale');
        }

        \$request->setLocale(\$locale);
        \$request->getSession()->set('_locale', \$locale);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/EventListener/EnvironmentSubscriber.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/EnvironmentSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/EventListener/EnvironmentSubscriber.php");
    }
}
