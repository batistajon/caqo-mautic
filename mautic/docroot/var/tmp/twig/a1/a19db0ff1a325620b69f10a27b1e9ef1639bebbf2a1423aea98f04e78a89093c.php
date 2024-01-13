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

/* @bundles/IntegrationsBundle/Event/InternalObjectCreateEvent.php */
class __TwigTemplate_ba8e93b7f38d4b941743d2cedc7869074e7d837efdcdaddfd10bec4bea08d873 extends Template
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

namespace Mautic\\IntegrationsBundle\\Event;

use Mautic\\IntegrationsBundle\\Entity\\ObjectMapping;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\ObjectInterface;
use Symfony\\Component\\EventDispatcher\\Event;

class InternalObjectCreateEvent extends Event
{
    /**
     * @var ObjectInterface
     */
    private \$object;

    /**
     * @var array
     */
    private \$createObjects;

    /**
     * @var ObjectMapping[]
     */
    private \$objectMappings = [];

    public function __construct(ObjectInterface \$object, array \$createObjects)
    {
        \$this->object        = \$object;
        \$this->createObjects = \$createObjects;
    }

    public function getObject(): ObjectInterface
    {
        return \$this->object;
    }

    public function getCreateObjects(): array
    {
        return \$this->createObjects;
    }

    /**
     * @return ObjectMapping[]
     */
    public function getObjectMappings(): array
    {
        return \$this->objectMappings;
    }

    /**
     * @param ObjectMapping[] \$objectMappings
     */
    public function setObjectMappings(array \$objectMappings): void
    {
        \$this->objectMappings = \$objectMappings;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Event/InternalObjectCreateEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/InternalObjectCreateEvent.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Event/InternalObjectCreateEvent.php");
    }
}
