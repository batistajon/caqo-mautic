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

/* @bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ObjectProvider.php */
class __TwigTemplate_80225244183c0b18d769b448ffbe15c9fef3314ff18c153c323a7e1ccbdd6b51 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal;

use Mautic\\IntegrationsBundle\\Event\\InternalObjectEvent;
use Mautic\\IntegrationsBundle\\IntegrationEvents;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\ObjectInterface;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class ObjectProvider
{
    /**
     * @var EventDispatcherInterface
     */
    private \$dispatcher;

    /**
     * Cached internal objects.
     *
     * @var ObjectInterface[]
     */
    private \$objects = [];

    public function __construct(EventDispatcherInterface \$dispatcher)
    {
        \$this->dispatcher = \$dispatcher;
    }

    /**
     * @throws ObjectNotFoundException
     */
    public function getObjectByName(string \$name): ObjectInterface
    {
        \$this->collectObjects();

        foreach (\$this->objects as \$object) {
            if (\$object->getName() === \$name) {
                return \$object;
            }
        }

        throw new ObjectNotFoundException(\"Internal object '{\$name}' was not found\");
    }

    /**
     * @throws ObjectNotFoundException
     */
    public function getObjectByEntityName(string \$entityName): ObjectInterface
    {
        \$this->collectObjects();

        foreach (\$this->objects as \$object) {
            if (\$object->getEntityName() === \$entityName) {
                return \$object;
            }
        }

        throw new ObjectNotFoundException(\"Internal object was not found for entity '{\$entityName}'\");
    }

    /**
     * Dispatches an event to collect all internal objects.
     * It caches the objects to a local property so it won't dispatch every time but only once.
     */
    private function collectObjects(): void
    {
        if (empty(\$this->objects)) {
            \$event = new InternalObjectEvent();
            \$this->dispatcher->dispatch(IntegrationEvents::INTEGRATION_COLLECT_INTERNAL_OBJECTS, \$event);
            \$this->objects = \$event->getObjects();
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
        return "@bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ObjectProvider.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ObjectProvider.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ObjectProvider.php");
    }
}
