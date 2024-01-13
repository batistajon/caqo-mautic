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

/* @bundles/IntegrationsBundle/Event/MauticSyncFieldsLoadEvent.php */
class __TwigTemplate_51c23a1b9028b0778b89863d12c29402966cb5ab6aedb432e15b5e993e247d7c extends Template
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

class MauticSyncFieldsLoadEvent extends Event
{
    /**
     * @var array
     */
    private \$fields;

    /**
     * @var string
     */
    private \$objectName;

    public function __construct(string \$objectName, array \$fields)
    {
        \$this->objectName = \$objectName;
        \$this->fields     = \$fields;
    }

    public function getFields(): array
    {
        return \$this->fields;
    }

    public function addField(string \$key, string \$name): void
    {
        \$this->fields[\$key] = \$name;
    }

    public function getObjectName(): string
    {
        return \$this->objectName;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Event/MauticSyncFieldsLoadEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/MauticSyncFieldsLoadEvent.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Event/MauticSyncFieldsLoadEvent.php");
    }
}
