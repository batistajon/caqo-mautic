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

/* @bundles/IntegrationsBundle/Event/InternalObjectRouteEvent.php */
class __TwigTemplate_18a1986378cb60bd430771e9c7b781ed247c7fe735da7cffef61a4c21f6063cb extends Template
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

use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\ObjectInterface;
use Symfony\\Component\\EventDispatcher\\Event;

class InternalObjectRouteEvent extends Event
{
    /**
     * @var ObjectInterface
     */
    private \$object;

    /**
     * @var int
     */
    private \$id;

    /**
     * @var string|null
     */
    private \$route;

    public function __construct(ObjectInterface \$object, int \$id)
    {
        \$this->object = \$object;
        \$this->id     = \$id;
    }

    public function getObject(): ObjectInterface
    {
        return \$this->object;
    }

    public function getId(): int
    {
        return \$this->id;
    }

    public function getRoute(): ?string
    {
        return \$this->route;
    }

    public function setRoute(?string \$route): void
    {
        \$this->route = \$route;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Event/InternalObjectRouteEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/InternalObjectRouteEvent.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Event/InternalObjectRouteEvent.php");
    }
}
