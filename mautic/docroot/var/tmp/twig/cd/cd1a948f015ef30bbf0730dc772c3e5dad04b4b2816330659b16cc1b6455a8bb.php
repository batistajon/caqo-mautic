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

/* @bundles/IntegrationsBundle/Event/SyncEvent.php */
class __TwigTemplate_e23b2b17b7ead4583b25a6ee1a6ee4c7d4931dda425cb3d1ca40d64f56a024f5 extends Template
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

use Symfony\\Component\\EventDispatcher\\Event;

class SyncEvent extends Event
{
    /** @var string */
    private \$integrationName;
    /**
     * @var \\DateTimeInterface|null
     */
    private \$fromDateTime;
    /**
     * @var \\DateTimeInterface|null
     */
    private \$toDateTime;

    public function __construct(string \$integrationName, ?\\DateTimeInterface \$fromDateTime = null, ?\\DateTimeInterface \$toDateTime = null)
    {
        \$this->integrationName = \$integrationName;
        \$this->fromDateTime    = \$fromDateTime;
        \$this->toDateTime      = \$toDateTime;
    }

    public function getIntegrationName(): string
    {
        return \$this->integrationName;
    }

    public function isIntegration(string \$integrationName): bool
    {
        return \$this->getIntegrationName() === \$integrationName;
    }

    public function getFromDateTime(): ?\\DateTimeInterface
    {
        return \$this->fromDateTime;
    }

    public function getToDateTime(): ?\\DateTimeInterface
    {
        return \$this->toDateTime;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Event/SyncEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/SyncEvent.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Event/SyncEvent.php");
    }
}
