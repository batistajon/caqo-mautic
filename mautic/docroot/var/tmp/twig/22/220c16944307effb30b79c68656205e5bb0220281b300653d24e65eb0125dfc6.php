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

/* @bundles/CoreBundle/Loader/RouteLoader.php */
class __TwigTemplate_9c7189865a79b9561a5f6cde4f0a41af8430483d6d8c89ae80660427ee7d8dfa extends Template
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

namespace Mautic\\CoreBundle\\Loader;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\RouteEvent;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\Config\\Loader\\Loader;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * Class RouteLoader.
 */
class RouteLoader extends Loader
{
    /**
     * @var EventDispatcherInterface
     */
    private \$dispatcher;
    /**
     * @var CoreParametersHelper
     */
    private \$coreParameters;

    /**
     * RouteLoader constructor.
     */
    public function __construct(EventDispatcherInterface \$dispatcher, CoreParametersHelper \$parametersHelper)
    {
        \$this->dispatcher     = \$dispatcher;
        \$this->coreParameters = \$parametersHelper;
    }

    /**
     * Load each bundles routing.php file.
     *
     * @param mixed \$resource
     * @param null  \$type
     *
     * @return RouteCollection
     *
     * @throws \\RuntimeException
     */
    public function load(\$resource, \$type = null)
    {
        // Public
        \$event = new RouteEvent(\$this, 'public');
        \$this->dispatcher->dispatch(CoreEvents::BUILD_ROUTE, \$event);
        \$collection = \$event->getCollection();

        // Force all links to be SSL if the site_url parameter is SSL
        \$siteUrl  = \$this->coreParameters->get('site_url');
        \$forceSSL = false;
        if (!empty(\$siteUrl)) {
            \$parts    = parse_url(\$siteUrl);
            \$forceSSL = (!empty(\$parts['scheme']) && 'https' == \$parts['scheme']);
        }

        if (\$forceSSL) {
            \$collection->setSchemes('https');
        }

        // Secured area - Default
        \$event = new RouteEvent(\$this);
        \$this->dispatcher->dispatch(CoreEvents::BUILD_ROUTE, \$event);
        \$secureCollection = \$event->getCollection();

        // OneupUploader (added behind our secure /s)
        \$secureCollection->addCollection(\$this->import('.', 'uploader'));

        // Elfinder file manager
        \$collection->addCollection(\$this->import('@FMElfinderBundle/Resources/config/routing.yaml'));

        //API
        \$event = new RouteEvent(\$this, 'api');
        \$this->dispatcher->dispatch(CoreEvents::BUILD_ROUTE, \$event);
        \$apiCollection = \$event->getCollection();
        \$apiCollection->addPrefix('/api');

        if (\$forceSSL) {
            \$apiCollection->setSchemes('https');
        }

        \$collection->addCollection(\$apiCollection);

        \$secureCollection->addPrefix('/s');
        if (\$forceSSL) {
            \$secureCollection->setSchemes('https');
        }
        \$collection->addCollection(\$secureCollection);

        // Catch all
        \$event = new RouteEvent(\$this, 'catchall');
        \$this->dispatcher->dispatch(CoreEvents::BUILD_ROUTE, \$event);
        \$lastCollection = \$event->getCollection();

        if (\$forceSSL) {
            \$lastCollection->setSchemes('https');
        }

        \$collection->addCollection(\$lastCollection);

        return \$collection;
    }

    /**
     * @param mixed \$resource
     * @param null  \$type
     *
     * @return bool
     */
    public function supports(\$resource, \$type = null)
    {
        return 'mautic' === \$type;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Loader/RouteLoader.php";
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
        return new Source("", "@bundles/CoreBundle/Loader/RouteLoader.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Loader/RouteLoader.php");
    }
}
