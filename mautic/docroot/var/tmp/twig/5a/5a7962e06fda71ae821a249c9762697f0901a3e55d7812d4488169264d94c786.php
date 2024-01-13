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

/* @bundles/IntegrationsBundle/Sync/Notification/Helper/RouteHelper.php */
class __TwigTemplate_131cb274776f5d18060fb6db38c49d44c23f5ab5198579a7cfc709a91968b138 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\Notification\\Helper;

use Mautic\\IntegrationsBundle\\Event\\InternalObjectRouteEvent;
use Mautic\\IntegrationsBundle\\IntegrationEvents;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotSupportedException;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectProvider;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class RouteHelper
{
    /**
     * @var ObjectProvider
     */
    private \$objectProvider;

    /**
     * @var RouEventDispatcherInterfaceter
     */
    private \$dispatcher;

    public function __construct(
        ObjectProvider \$objectProvider,
        EventDispatcherInterface \$dispatcher
    ) {
        \$this->objectProvider = \$objectProvider;
        \$this->dispatcher     = \$dispatcher;
    }

    /**
     * @throws ObjectNotSupportedException
     */
    public function getRoute(string \$object, int \$id): string
    {
        try {
            \$event = new InternalObjectRouteEvent(\$this->objectProvider->getObjectByName(\$object), \$id);
        } catch (ObjectNotFoundException \$e) {
            // Throw this exception instead to keep BC.
            throw new ObjectNotSupportedException(MauticSyncDataExchange::NAME, \$object);
        }

        \$this->dispatcher->dispatch(IntegrationEvents::INTEGRATION_BUILD_INTERNAL_OBJECT_ROUTE, \$event);

        return \$event->getRoute();
    }

    /**
     * @throws ObjectNotSupportedException
     */
    public function getLink(string \$object, int \$id, string \$linkText): string
    {
        \$route = \$this->getRoute(\$object, \$id);

        return sprintf('<a href=\"%s\">%s</a>', \$route, \$linkText);
    }

    /**
     * @throws ObjectNotSupportedException
     */
    public function getRoutes(string \$object, array \$ids): array
    {
        \$routes = [];
        foreach (\$ids as \$id) {
            \$routes[\$id] = \$this->getRoute(\$object, \$id);
        }

        return \$routes;
    }

    /**
     * @throws ObjectNotSupportedException
     */
    public function getLinkCsv(string \$object, array \$ids): string
    {
        \$links  = [];
        \$routes = \$this->getRoutes(\$object, \$ids);
        foreach (\$routes as \$id => \$route) {
            \$links[] = sprintf('[<a href=\"%s\">%s</a>]', \$route, \$id);
        }

        return implode(', ', \$links);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/Notification/Helper/RouteHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Notification/Helper/RouteHelper.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/Notification/Helper/RouteHelper.php");
    }
}
